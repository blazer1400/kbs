<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NerdyGadgets</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
<?php

session_start();
if (!empty($_SESSION['user_id'])) {
    header('Location: ./index.php');
}

?>
<div class="h-screen w-screen flex items-center justify-center relative bg-[#6edce1]/50">
    <img src="img/Logo-NerdyGadgets.png" class="absolute w-60 top-12"/>

    <div class="w-1/2">
        <div class="flex items-end justify-center mx-4 gap-1">
            <button id="loginButton" class="text-gray-600 text-sm w-full rounded-t-lg bg-white py-1" onclick="showLogin()">Inloggen</button>
            <button id="regButton" class="text-gray-600 text-sm w-full rounded-t-lg py-1 bg-gray-50 hover:bg-white" onclick="showRegister()">Registreren</button>
        </div>
            <form id="loginForm" class="shadow-xl z-30 mx-auto shadow h-1/2 w-full rounded-lg bg-white px-8 py-8 overflow flex flex-col gap-10">

                <span class="block border rounded w-full h-max relative ">
                    <label class="absolute -top-3 bg-white px-2 left-2 font-medium text-sm">E-mail</label>
                    <input name="email" class="h-10 px-2 rounded w-full outline-none"/>
                </span>

                        <span class="block border rounded w-full h-max relative">
                    <label class="absolute -top-3 bg-white px-2 left-2 font-medium text-sm">Wachtwoord</label>
                    <input name="password" type="password" class="h-10 py-1 px-2 rounded w-full outline-none"/>
                </span>

                <div class="w-full flex items-center justify-center">
                    <button type="submit" class="bg-[#6edce1] hover:bg-[#7DF9FF] text-white p-2 rounded cursor-pointer w-[98%] hover:w-full transition-all flex items-center justify-center gap-4">
                        Inloggen
                        <i class="uil uil-save"></i>
                    </button>
                </div>
            </form>
            <form id="regForm" method="POST" action="php/registerHandler.php" class="hidden shadow-xl z-30 mx-auto shadow h-1/2 w-full rounded-lg bg-white px-8 py-8 overflow flex flex-col gap-4">

                <div class="space-y-4">
                    <span class="block border rounded w-full h-max relative">
                        <label class="absolute -top-3 bg-white px-2 left-2 font-medium text-sm">E-mail</label>
                        <input name="email" class="h-10 px-2 rounded w-full outline-none"/>
                    </span>

                    <span class="block border rounded w-full h-max relative">
                        <label class="absolute -top-3 bg-white px-2 left-2 font-medium text-sm">Wachtwoord</label>
                        <input name="password" class="h-10 px-2 rounded w-full outline-none" type="password"/>
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-4">
                    <span class="block border rounded w-full h-max relative">
                        <label class="absolute -top-3 bg-white px-2 left-2 font-medium text-sm">Voornaam</label>
                        <input name="first_name" class="h-10 px-2 rounded w-full outline-none"/>
                    </span>

                    <span class="block border rounded w-full h-max relative">
                        <label class="absolute -top-3 bg-white px-2 left-2 font-medium text-sm">Achternaam</label>
                        <input name="surname" class="h-10 px-2 rounded w-full outline-none"/>
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                    <span class="block border rounded w-full h-max relative col-span-2">
                        <label class="absolute -top-3 bg-white px-2 left-2 font-medium text-sm">Straatnaam</label>
                        <input name="street_name" class="h-10 px-2 rounded w-full outline-none"/>
                    </span>

                    <span class="block border rounded w-full h-max relative ">
                        <label class="absolute -top-3 bg-white px-2 left-2 font-medium text-sm">Huisnummer</label>
                        <input name="apartment_nr" class="h-10 px-2 rounded w-full outline-none"/>
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                    <span class="block border rounded w-full h-max relative">
                        <label class="absolute -top-3 bg-white px-2 left-2 font-medium text-sm">Postcode</label>
                        <input name="postal_code" class="h-10 px-2 rounded w-full outline-none"/>
                    </span>
                    <span class="block border rounded w-full h-max relative col-span-2">
                        <label class="absolute -top-3 bg-white px-2 left-2 font-medium text-sm">Stad</label>
                        <input name="city" class="h-10 px-2 rounded w-full outline-none"/>
                    </span>
                </div>

                <div class="w-full flex items-center justify-center mt-2">
                    <button type="submit" class="bg-[#6edce1] hover:bg-[#7DF9FF] text-white p-2 rounded cursor-pointer w-[98%] hover:w-full transition-all flex items-center justify-center gap-4">
                        Registreren
                        <i class="uil uil-save"></i>
                    </button>
                </div>

            </form>
    </div>
</div>

<script>

    const loginButton = document.getElementById('loginButton')
    const regButton = document.getElementById('regButton')

    const loginForm = document.getElementById('loginForm')
    const regForm = document.getElementById('regForm')

    function showRegister() {
        loginButton.classList.remove('bg-white')
        loginButton.classList.add('bg-gray-50', 'hover:bg-white')

        regButton.classList.add('bg-white')
        regButton.classList.remove('bg-gray-50', 'hover:bg-white')

        loginForm.classList.add('hidden')
        regForm.classList.remove('hidden')
    }

    function showLogin() {
        regButton.classList.remove('bg-white')
        regButton.classList.add('bg-gray-50', 'hover:bg-white')

        loginButton.classList.add('bg-white')
        loginButton.classList.remove('bg-gray-50', 'hover:bg-white')

        regForm.classList.add('hidden')
        loginForm.classList.remove('hidden')
    }

</script>
</body>
</html>