<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/output.css" rel="stylesheet">
    <link rel="icon" href="./assets/images/logo.svg">
    <title>Wiki | Login</title>
</head>

<body>
    <?php require_once('includes/header.php'); ?>
    <div class="h-screen md:flex">
        <div
            class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-950 to-purple-600 i justify-around items-center hidden">
            <div>
                <h1 class="text-white font-bold text-4xl font-sans">Wiki</h1>
                <p class="text-white mt-1">The most popular web info landing at world</p>

            </div>
            <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
            </div>
            <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
            </div>
            <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        </div>
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <form class="bg-white" action="http://localhost:8000/signupAction" method="post">
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello !</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Welcome To Wiki World</p>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="firstname" id="firstname"
                        placeholder="First name" required />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="lastname" id="lastname"
                        placeholder="Last name" required />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg width="25px" height="25px" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                        xmlns="http://www.w3.org/2000/svg" stroke="#bdbec2" transform="rotate(0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"
                            stroke-width="0.384">
                        </g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                stroke="#bdbec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                stroke="#bdbec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="address" id="address"
                        placeholder="Address" required />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="email" id="email"
                        placeholder="Email Address" required />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="password" name="password" id="password"
                        placeholder="Password" required />
                </div>
                <button type="submit" onclick="validateForm()"
                    class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Sign
                    up</button>
                <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Forgot Password ?</span>
            </form>
        </div>
    </div>
    <script>
        function validateForm(event) {
            var firstname = document.getElementById('firstname').value;
            var lastname = document.getElementById('lastname').value;
            var address = document.getElementById('address').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if (firstname === "" || lastname === "" || address === "" || email === "" || password === "") {
                alert("All fields must be filled out");
                event.preventDefault(); 
            }

        }
    </script>
</body>

</html>