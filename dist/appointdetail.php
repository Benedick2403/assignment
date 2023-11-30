<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Appointment Detail</title>
    <link rel="stylesheet" href="output.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Gruesa+Libre&family=Barrio&family=Birthstone+Bounce&family=Mali:wght@200&family=Nerko+One&family=Reenie+Beanie&display=swap" rel="stylesheet">
</head>

<body class="bg-cover bg-home-bg bg-center bg-no-repeat flex justify-center items-center h-screen">
    <div class="flex flex-col items-center w-full p-0 pt-5 select-none overflow-x-hidden bg-slate-800 bg-opacity-90 shadow-gray-500 text-red-100 rounded-xl sm:w-4/5 sm:h-3/5 lg:w-8/12 lg:h-2/5 xl:w-9/12 xl:h-2/5">
        <div class="w-full text-slate-300">
            <table style="table-layout: fixed; width: 100%;" >
                <colgroup>
                    <col style="width: 20%;">
                    <col style="width: 20%;">
                    <col style="width: 20%;">
                    <col style="width: 20%;">
                    <col style="width: 20%;">
                </colgroup>
                <tr class="justify-evenly">
                    <th>Appointment ID</th>
                    <th>Name</th>
                    <th>Contact Info</th>
                    <th>Reservation Date</th>
                    <th>Reservation Time</th>
                </tr>
                <?php include 'control.php'; ?>
            </table>
        </div>
            <a href="index.php" class="my-8 w-56 text-yellow-50 bg-sky-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-sky-600 sm:py-2">Back to Home Page</a>
    </div>
    

</body>

</html>
