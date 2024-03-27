<?php
session_start();

function p($arr){
    return '<pre>'.print_r($arr,true).'</pre>';
}

// Check if required parameters are set
if (!isset($_GET['openid_assoc_handle'], $_GET['openid_signed'], $_GET['openid_sig'], $_GET['openid_claimed_id'])) {
    echo 'Error: Missing required parameters.';
    exit();
}

$params = [
    'openid.assoc_handle' => $_GET['openid_assoc_handle'],
    'openid.signed'       => $_GET['openid_signed'],
    'openid.sig'          => $_GET['openid_sig'],
    'openid.ns'           => 'http://specs.openid.net/auth/2.0',
    'openid.mode'         => 'check_authentication',
];

$signed = explode(',', $_GET['openid_signed']);
foreach ($signed as $item) {
    $val = $_GET['openid_'.str_replace('.', '_', $item)];
    $params['openid.'.$item] = stripslashes($val);
}

$data = http_build_query($params);

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "Accept-language: en\r\n".
                    "Content-type: application/x-www-form-urlencoded\r\n".
                    'Content-Length: '.strlen($data)."\r\n",
        'content' => $data,
    ],
]);

$result = file_get_contents('https://steamcommunity.com/openid/login', false, $context);

if (!preg_match("#is_valid\s*:\s*true#i", $result)) {
    echo 'Error: Unable to validate your request';
    exit();
}

preg_match('#^https://steamcommunity.com/openid/id/([0-9]{17,25})#', $_GET['openid_claimed_id'], $matches);
$steamID64 = is_numeric($matches[1]) ? $matches[1] : 0;

$steam_api_key = '88C0E554E81417F6B3C147CD5E4BFB40';

$response = file_get_contents('https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$steam_api_key.'&steamids='.$steamID64);
$response = json_decode($response, true);

if (!isset($response['response']['players'][0])) {
    echo 'Error: Unable to retrieve user data';
    exit();
}

$userData = $response['response']['players'][0];

$_SESSION['logged_in'] = true;
$_SESSION['userData'] = [
    'steam_id' => $userData['steamid'],
    'name' => $userData['personaname'],
    'avatar' => $userData['avatarmedium'],
];

$redirect_url = "home.php";
header("Location: $redirect_url");
exit();
