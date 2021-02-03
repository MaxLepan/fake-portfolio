<?php
include "data.php";
?>

<head>
    <meta charset=UTF-8/>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Marie-Louise Bourreau - Portfolio</title>
    <style>
        body {
            background-image: url("images/background<?php echo rand(1, 2)?>.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body>

<nav class="flex flex-wrap items-center justify-between p-4">
    <div class="navbar-menu ">
        <a class="block inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="./">
            Accueil
        </a>
        <a class="block inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-indigo-600" href="./realisations.php">
            Mes réalisations
        </a>
        <a class="block inline-block mt-4 lg:mt-0 text-blue-900 hover:text-indigo-600" href="./contact.php">
            Contact
        </a>
    </div>
</nav>
