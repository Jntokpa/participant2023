<?php
include_once('modele/connexion.php');
include_once('controlleur/controller_ajout.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Simplon CI</title>

    <!-- CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">SIMPLON CI</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </header>

    <div class="container-fluid">
        <div class="row">
            <?php include_once("vue/menu.php"); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?php include_once('vue/enregistrer.php'); ?>
            </main>
        </div>
    </div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>
