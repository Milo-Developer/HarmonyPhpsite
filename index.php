<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/Logo9.png">
    <meta name="description" content="Where the best of rust play">
    <style type="text/css" id="operaUserStyle"></style>
    <title>Harmony Rust - Home</title>
    
    </style>
</head>
<body>
    <div id="main">
        <div class="bg-center bg-cover h-screen overflow-x-hidden" id="background-overlay">
            <div class="flex items-center justify-between py-4 px-8 text-white fixed w-full z-50 overflow-hidden bg-black bg-opacity-40 fixed-navbar">
                <!-- Sets the logo to the left side of the navbar -->
                <a href="/" class="flex-shrink-0">
                    <img src="images/Logo7.png" loading="lazy" class="h-16 w-auto" alt="logo" id="Mainlogo">
                </a>
                <div class="flex items-center justify-between py-4 px-8 text-white w-full z-50 overflow-hidden">
                    <!-- Your navbar content here -->
                    <div class="flex-grow justify-center hidden sm:flex">
                    <a class="text-lg text-blue-400 font-medium transition-colors hover:text-white mx-4 font-bold" href="#" id="homebutton">Home</a>
                        <a class="text-lg font-medium transition-colors hover:text-blue-200 mx-4 font-bold" href="Store.php" id="storebutton">Store</a>
                        <a class="text-lg font-medium transition-colors hover:text-blue-200 mx-4 font-bold" href="Leaderboard.php" id="leaderboardbutton">Leaderboard</a>
                        <a class="text-lg font-medium transition-colors hover:text-blue-200 mx-4 font-bold" href="error.php" id="serversbutton">Servers</a>
                    </div>
                </div>
                <a href="init-openId.php" class="text-lg transition-colors hover:text-blue-300 mx-4 font-bold">Login</a>
            </div>
            <div id="main-info" class="bg-hero bg-primary bg-black bg-opacity-40 bg-no-repeat bg-cover bg-center overflow-hidden font-rajdhani pt-16 pb-8">
                <div class="container mx-auto relative z-10 text-white flex flex-col justify-center" style="min-height: 50vh;">
                    <h1 class="text-5xl font-bold mb-4 text-left"> <span>Harmony</span> Rust Servers</h1>
                    <h5 class="text-lg font-semibold mb-2 text-left">Made for best by the best</h5>
                </div>
            </div>
            <div class="bg-pattern py-12 bg-black bg-opacity-80" id="Serversection">
                <section class="container mx-auto">
                    <div class="flex justify-between mb-4"></div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="rounded overflow-hidden shadow-lg">
                            <img src="images/Harmony.png" alt="Server image" class="w-full h-60 object-cover bg-black bg-opacity-75" id="Server-img">
                            <div class="bg-black bg-opacity-75 p-3">
                                <div class="font-rajdhani text-white"></div>
                                <div class="font-rajdhani">
                                    <div class="flex justify-between items-center gap-5">
                                        <div class="font-semibold text-lg text-white text-ellipsis whitespace-nowrap overflow-hidden">Harmony Rust - US 10x</div>
                                    </div>
                                    <div class="relative w-full my-6">
                                        <div class="overflow-hidden h-7 text-xs flex bg-secondary rounded">
                                            <div style="width:96%;" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary transition-all duration-700 ease-in-out"></div>
                                        </div>
                                        <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center">
                                            <h1 class="text-white" id="Server-pop">0 / 600 Players</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row gap-4 uppercase font-poppins text-white">
                                    <a href="" id="Connect-btn">Connect</a>
                                    <a href="Store.php" id="Shop-btn">Shop</a>
                                    <a href="https://discord.gg/TmHNTQ7JPa" id="Info-btn">Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="rounded overflow-hidden shadow-lg">
                            <img src="images/Harmony.png" alt="Server image" class="w-full h-60 object-cover bg-black bg-opacity-75" id="Server-img">
                            <div class="bg-black bg-opacity-75 p-3">
                                <div class="font-rajdhani text-white"></div>
                                <div class="font-rajdhani">
                                    <div class="flex justify-between items-center gap-5">
                                        <div class="font-semibold text-lg text-white text-ellipsis whitespace-nowrap overflow-hidden">Harmony Rust - EU 10x</div>
                                    </div>
                                    <div class="relative w-full my-6">
                                        <div class="overflow-hidden h-7 text-xs flex bg-secondary rounded">
                                            <div style="width:96%;" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary transition-all duration-700 ease-in-out"></div>
                                        </div>
                                        <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center">
                                        <h1 class="text-white" id="Server-pop">0 / 600 Players</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row gap-4 uppercase font-poppins text-white">
                                    <a href="" id="Connect-btn">Connect</a>
                                    <a href="Store.php" id="Shop-btn">Shop</a>
                                    <a href="https://discord.gg/TmHNTQ7JPa" id="Info-btn">Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="rounded overflow-hidden shadow-lg">
                            <img src="images/Harmony.png" alt="Server image" class="w-full h-60 object-cover bg-black bg-opacity-75" id="Server-img">
                            <div class="bg-black bg-opacity-75 p-3">
                                <div class="font-rajdhani text-white"></div>
                                <div class="font-rajdhani">
                                    <div class="flex justify-between items-center gap-5">
                                        <div class="font-semibold text-lg text-white text-ellipsis whitespace-nowrap overflow-hidden">Harmony Rust - AU 10x</div>
                                    </div>
                                    <div class="relative w-full my-6">
                                        <div class="overflow-hidden h-7 text-xs flex bg-secondary rounded">
                                            <div style="width:96%;" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary transition-all duration-700 ease-in-out"></div>
                                        </div>
                                        <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center">
                                            <h1 class="text-white" id="Server-pop">0 / 600 Players</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row gap-4 uppercase font-poppins text-white">
                                    <a href="" id="Connect-btn">Connect</a>
                                    <a href="Store.php" id="Shop-btn">Shop</a>
                                    <a href="https://discord.gg/TmHNTQ7JPa" id="Info-btn">Info</a>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat the server section as needed -->
                    </div>
                </section>
            </div>

            <!-- Footer Section -->
            <div class="bg-pattern py-8 bg-black bg-opacity-90" id="Footer-Section">
            <section class="container mx-auto">
                <div class="flex flex-col items-center justify-center text-center">
                    <h1 class="text-white text-lg mb-2.5">© 2024 Harmony Rust. All Rights Reserved.</h1>
                    <h5 class="text-white text-sm mb-4">Harmony Rust is not affiliated with, nor endorsed by Facepunch Studios Ltd. All trademarks and images belong to their respective owners.</h5>
                </div>
                <div class="flex flex-col items-center justify-center text-center">
                    <h1 class="text-white text-lg">Social Media</h1>
                    <a href="#" class="text-white text-sm flex" id="DiscordButton"><i class='bx bxl-discord-alt mr-2'></i> Discord</a>
                    <a href="#" class="text-white text-sm flex" id="YoutubeButton"><i class='bx bxl-youtube mr-2'></i> Youtube</a>
                    <a href="#" class="text-white text-sm flex" id="TwitterButton"><i class='bx bxl-twitter mr-2'></i> Twitter</a>
                </div>
            </section>
        </div>
    </div>
    <!-- Include Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Script file -->
    <script src="/script.js"></script>
</body>
</html>
