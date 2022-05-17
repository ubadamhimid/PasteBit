<!-- PHP Begin -->
<?php
// Includes
include_once '../SQL/db_connect.php';
// include_once '../SQL/queries.php';

?>
<!-- PHP END -->

<!-- HTML Begin -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Project PasteBit</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/arduino-light.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- favicon komen later -->
    <!-- OG-tags komen later -->
</head>

<body>
    <nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">

        <div class="mb-2 sm:mb-0 flex flex-row">

            <div class="h-10 self-center mr-2">
                <a href="#"><img class="logo" src="../img/logo.png" alt="PasteBit Logo" style="width: 200px; margin-top: 5px;"></a>
            </div>

        </div>

        <div class="sm:mb-0 self-center ibmText">
            <a href="../index.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Home</a>
            <a href="../public.php" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Public</a>
            <a href="project.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Project PasteBit</a>
            <a href="legaal.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Licenties</a>
        </div>

    </nav>

    <section class="landing">
        <article id="landing-header">
            <h1>Over PasteBin</h1>
            <p>Wat is PasteBin?</p>
        </article>


    </section>
</body>

</html>

<!-- HTML END -->
