<?php
    require'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Sign Up</title>
    <link rel="stylesheet" href="output.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Gruesa+Libre&family=Barrio&family=Birthstone+Bounce&family=Mali:wght@200&family=Nerko+One&family=Reenie+Beanie&display=swap" rel="stylesheet">

</head>
<body class="bg-cover bg-home-bg bg-center bg-no-repeat flex justify-center items-center h-screen">
    <div class="flex flex-col justify-evenly items-center h-4/5 w-2/5 p-0 m-0 select-none overflow-x-hidden bg-slate-200 bg-opacity-70 shadow-gray-500 rounded-xl sm:w-4/5 sm:h-3/5 lg:w-8/12 lg:h-2/5 xl:w-9/12 xl:h-2/5">
        <div>
            <p class="font-semibold font-mali text-5xl sm:text-3xl">Sign Up</p>
        </div>
        <div>
            <form action="control.php" method="POST">
                <div class="pb-5 sm:pb-2">
                    <label for="user_email" class="block mb-2 text-xl font-bold text-black font-mali sm:text-base">Your email</label>
                    <input type="email" name="user_email" id="user_email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-96 p-2.5 sm:text-sm sm:w-64 sm:p-2" placeholder="example@email.com" required="">
                </div>

                <div class="pb-5 sm:pb-2">
                    <label for="user_password" class="block mb-2 text-xl font-bold text-black font-mali sm:text-base">Password</label>
                    <input type="password" name="user_password" id="user_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-96 p-2.5 sm:text-sm sm:w-64 sm:p-2" required="">
                </div>

                <div class="pb-5 sm:pb-2">
                    <label for="confirm_password" class="block mb-2 text-xl font-bold text-black font-mali sm:text-base">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-96 p-2.5 sm:text-sm sm:w-64 sm:p-2" required="">
                </div>

                <div class="flex justify-center py-4">
                    <button type="submit" class="w-56 text-yellow-50 bg-sky-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-sky-600 sm:py-2">Create Account</button>
                </div>
                <p class="text-sm font-light text-black sm:text-xs">Already have an account? <a href="login.php" class="font-medium hover:underline hover:text-red-800">Log In</a></p>

            </form>
        </div>
    </div>
</body>
</html>