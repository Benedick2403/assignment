<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekGears</title>
    <link rel="stylesheet" href="output.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Averia+Gruesa+Libre&family=Barrio&family=Birthstone+Bounce&family=Mali:wght@200&family=Nerko+One&family=Reenie+Beanie&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a7e8e6a65a.js" crossorigin="anonymous"></script>
</head>

<body class="font-sans bg-gray-100">

  <nav class="bg-gray-800 p-4 text-white fixed w-full">
    <div class="container mx-auto flex justify-between items-center">
      <a href="#" class="text-2xl font-semibold">GeekGears</a>
      <div class="flex space-x-4">
        <a href="login.php" class="hover:underline">Log In</a>
        <a href="signup.php" class="hover:underline">Sign Up</a>
      </div>
    </div>
  </nav>

  <section class="bg-home-bg bg-cover bg-no-repeat text-white h-screen flex items-center ">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-bold mb-4">Welcome to GeekGears</h1>
      <p class="text-lg">Discover the latest and greatest cars.</p>
    </div>
  </section>

  <section class="container h-screen flex items-center justify-evenly flex-wrap object bg-slate-900 sm:p-5 sm:gap-5 sm:h-auto">
    <img class="h-96 w-72 bg-green-800 rounded-xl object-cover" src="images/car_1.jpg">
    <img class="h-96 w-72 bg-green-800 rounded-xl object-cover" src="images/car_2.jpg">
    <img class="h-96 w-72 bg-green-800 rounded-xl object-cover" src="images/car_3.jpg">
  </section>
  
  <footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto text-center">
      <p>&copy; 2023 GeekGears. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>