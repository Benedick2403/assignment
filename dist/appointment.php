<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="output.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Gruesa+Libre&family=Barrio&family=Birthstone+Bounce&family=Mali:wght@200&family=Nerko+One&family=Reenie+Beanie&display=swap" rel="stylesheet">
</head>

<body class="bg-cover bg-home-bg bg-center bg-no-repeat flex justify-center items-center h-screen">
    <div class="flex flex-col justify-evenly items-center h-4/5 w-2/5 p-0 pt-5 select-none overflow-x-hidden bg-slate-800 bg-opacity-70 shadow-gray-500 rounded-xl sm:w-4/5 sm:h-3/5 lg:w-8/12 lg:h-2/5 xl:w-9/12 xl:h-2/5">
        <div>
            <h1 class="font-semibold font-mali text-gray-100 text-5xl sm:text-3xl">Appointment</h1>
        </div>

        <div>
            <form action="control.php" method="POST">
                <div class="pb-3 sm:pb-2">
                    <label class="block mb-2 text-base font-bold text-gray-100 font-mali sm:text-base">Name:</label>
                    <input type="text" name="name" placeholder="NICKNAME" id="name" required="" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg w-full p-1.5 sm:text-sm sm:w-64 sm:p-1">
                </div>

                <div class="pb-3 sm:pb-2">
                    <label class="block mb-2 text-base font-bold text-gray-100 font-mali sm:text-base">Contact Details:</label>
                    <input type="number" required="" name="contact" placeholder="##########" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-1.5 sm:text-sm sm:w-64 sm:p-1">
                </div>


                <div class="pb-3 flex justify-between sm:pb-2">
                    <label class="mb-2 text-base font-bold text-gray-100 pr-6 font-mali sm:text-sm">Day of Appointment:</label>
                    <input type="date" id="dateInput" name="date" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required="" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg w-40 text-center p-1.5 sm:text-sm sm:w-28 sm:p-1">
                </div>

                <div class="flex justify-between sm:pb-2">
                    <label class="mb-2 text-base font-bold text-gray-100 font-mali sm:text-sm">Time: </label>
                    <input type="time" id="timeInput" name="time" required="" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg w-40 p-1.5 text-center sm:text-sm sm:w-24 sm:p-1">
                </div>

                <div class="flex justify-center py-4">
                    <button type="submit" class="w-56 text-yellow-50 bg-sky-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-sky-600 sm:py-2">Create Appointment</button>
                </div>
                <p class="text-sm font-light text-slate-200 ">Already made an appointment? <a href="appointdetail.php" class="font-medium hover:underline hover:text-blue-800">Show Appointment Detail</a></p>
            </form>
        </div>
    </div>
</body>
</html>