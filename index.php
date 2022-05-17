<!-- PHP Begin -->
<?php
// Includes
include_once './SQL/db_connect.php';
include './SQL/queries.php';
include './PHP/functions/url_generator.php';
include './PHP/functions/datum.php';

// Variables
$url = generateUrl();
$password = generateUrl();
date_default_timezone_set("Europe/Amsterdam");
$datum = date("Y-m-d H:i:s", time());
?>

<!-- PHP END -->

<!-- HTML Begin -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PasteBit</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>

<body>
    <nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">

        <div class="mb-2 sm:mb-0 flex flex-row">

            <div class="h-10 self-center mr-2">
                <a href="#"><img class="logo" src="img/logo.png" alt="PasteBit Logo"></a>
            </div>

        </div>

        <div class="sm:mb-0 self-center ibmText">
            <a href="./index.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Home</a>
            <a href="public.php" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Public</a>
            <a href="./PHP/project.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Project PasteBit</a>
            <a href="./PHP/legaal.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Licenties</a>
        </div>

    </nav>


    <section class="landing pt-6">

        <article id="landing-header">
            <h1 class="ibmHeader">Welkom bij PasteBit!</h1>
            <p class="ibmText">PasteBit is een platform waarmee je eenvoudig je code online met anderen kan delen.</p>
        </article>

        <article id="landing-form">
            <form method="POST" id="pasteBinPost" action="index.php">

                <textarea id="code" name="code" class="pasteBinText" placeholder="Typ of plak hier uw code" required ></textarea>

                <div class="mt-16 mb-16 w-full flex ml-10">

                    <div class="float-left h-7">
                        <h4 class="mt-2.5 font-bold leading-5 text-base mb-2.5 ibmHeader">Welke taal?</h4>
                        <h4 class="mt-7 text-base mb-2.5 leading-5 font-bold ibmHeader">Titel</h4>
                        <h4 class="mt-7 text-base mb-2.5 leading-5 font-bold ibmHeader" name="wachtwoord">Wachtwoord?</h4>
                        <p class="mb-2.5"> </p>
                    </div>

                    <div class="block float-right box-border pl-5 flex flex-col">

                        <select class="h-10 border-solid border-2 border-gray-500 ibmText" name="taal" required>
                            <option value="">Selecteer een optie</option>
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="PHP">PHP</option>
                            <option value="SQL">MySQL</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="koltin">koltin</option>
                        </select>
                        <input type="text" name="titel" placeholder="type" class="mt-5 text-base mb-2.5 leading-5 font-bold ibmText titel" required>
                        <label class="switch" for="checkbox">
                            <input type="checkbox" id="checkbox" onclick='passwordAan()' />
                            <div class="slider round"></div>
                        </label>
                        <input type="text" name="wachtwoord" id="password" value="" placeholder="Wachtwoord" class="mt-7 text-base leading-5 font-bold ibmText" id="">
                        <input type="text" hidden name="url" value="<?= $url ?>">
                        <input type="text" hidden name="datum" value="<?= $datum ?>">
                        <input type="submit" value="paste" class="bg-gray-500 text-white font-bold py-2 px-4 rounded-full ibmText paste">
                    </div>

                </div>
            </form>

        </article>

    </section>
    <script>
        function passwordAan() {
            var radio = document.getElementById("checkbox");
            var password = document.getElementById("password");
            if (radio.checked == true) {
                password.style.display = "block";
            } else {
                password.style.display = "none";
                password.value = null;
            }
        }
    </script>
</body>

</html>

<!-- HTML END -->