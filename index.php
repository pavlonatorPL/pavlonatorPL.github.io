<!DOCTYPE html>
<html lang="en">

<?php
include('functions/langauge.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawel Sawicki - Web Developer, Designer</title>

    <!-- normalize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- google icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <section id="bio-panel" class="gap-3">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="text-start m-0">Paweł Sawicki</h3>
            <span class="text-end text-nowrap">Web Developer<br>Designer</span>
        </div>
        <div class="profile-pic"></div>
        <div class="personal-data d-flex flex-column gap-2">
            <a href="mailto:pawelsawicki95@gmail.com">
                <button type="button" class="btn btn-outline-light col-12">
                    <i class="bi bi-envelope-at me-2"></i>
                    pawelsawicki95@gmail.com
                </button>
            </a>

            <a href="https://goo.gl/maps/eeRj3EZoXZP5wJ3m6" target="_blank">
                <button type="button" class="btn btn-outline-light col-12">
                    <i class="bi bi-geo-alt me-2"></i>
                    South Korea, Cheongju
                </button>
            </a>

            <button type="button" class="btn btn-outline-light col-12">
                <i class="bi bi-linkedin me-2"></i>
                LinkedIn
            </button>
        </div>

        <button type="button" class="btn btn-primary">Hire me</button>

    </section>
    <main>

    </main>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <!-- my JS -->
    <script src="js.js"></script>
</body>

</html>