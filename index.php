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
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/03fba2c437.js" crossorigin="anonymous"></script>

</head>

<body>
    <div id="site-container" class="container-fluid d-flex p-0">
        <div id="left-panel" class="col">
            <section id="bio-panel" class="gap-2 sticky-top m-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="text-start m-0">Paweł Sawicki</h3>
                    <span class="text-end text-nowrap">Web Developer<br>Designer</span>
                </div>
                <div class="profile-pic"></div>
                <div class="personal-data d-flex flex-column gap-2">
                    <a href="mailto:pawelsawicki95@gmail.com">
                        <button type="button" class="btn btn-outline-light col-12">
                            <i class="bi bi-envelope-at me-1"></i>
                            pawelsawicki95@gmail.com
                        </button>
                    </a>

                    <a href="https://goo.gl/maps/eeRj3EZoXZP5wJ3m6" target="_blank">
                        <button type="button" class="btn btn-outline-light col-12">
                            <i class="bi bi-geo-alt me-1"></i>
                            South Korea, Cheongju
                        </button>
                    </a>

                    <button type="button" class="btn btn-outline-light col-12">
                        <i class="bi bi-linkedin me-1"></i>
                        LinkedIn
                    </button>
                </div>

                <button type="button" class="btn btn-primary">Hire me</button>

            </section>
        </div>

        <div class="col">

            <main>
                <div id="main-container" class="container">
                    <section class="m-5 my-5">
                        <h1>Welcome!</h1>
                        <h2>I am a Web <span class="text-primary fw-semibold">Developer</span> and <span
                                class="text-primary fw-semibold">Designer</span></h2>
                        <p>I am self-taught in these areas. I have had an interest in these since I was a child and now
                            am
                            putting effort into formalizing these skills. I am especially interested in making neat
                            websites. UI knowledge has always been interesting for me and I learn UI design from time to
                            time.</p>
                        <p>I am currently looking for a project to work on on a part-time job. I live in South Korea so
                            if
                            you do not mind the time-difference in our cooperaion, feel free to contact me :)
                        </p>
                        <p>
                            Below you can find some of work. Feel free to look around this website and contact me!
                        </p>
                    </section>

                    <section class="m-5 my-7">
                        <h2 class="mb-4"><span class="text-primary fw-semibold">Languages</span> I speak</h2>
                        <h3>Polish</h3>
                        <div class="progress col-6 mb-3" role="progressbar" aria-label="Polish" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 1.5rem">
                            <div class="progress-bar bg-primary" style="width: 100%">
                                <span class="fs-5 text-black fw-bold">Native</span>
                            </div>
                        </div>

                        <h3>English</h3>
                        <div class="progress col-6 mb-3" role="progressbar" aria-label="Polish" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 1.5rem">
                            <div class="progress-bar bg-primary" style="width: 100%">
                                <span class="fs-5 text-black fw-bold">Fluent</span>
                            </div>
                        </div>

                        <h3>Korean</h3>
                        <div class="progress col-6 mb-3" role="progressbar" aria-label="Polish" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 1.5rem">
                            <div class="progress-bar bg-primary" style="width: 65%">
                                <span class="fs-5 text-black fw-bold">Upper-Intermediate</span>
                            </div>
                        </div>

                        <h3>Chinese Mandarin</h3>
                        <div class="progress col-6 mb-3" role="progressbar" aria-label="Polish" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 1.5rem">
                            <div class="progress-bar bg-primary" style="width: 40%">
                                <span class="fs-5 text-black fw-bold">Intermediate</span>
                            </div>
                        </div>
                    </section>

                    <section class="m-5 my-7">
                        <h2 class="mb-4">Job <span class="text-primary fw-semibold">Experience</span></h2>
                        <ul class="timeline">
                            <li>
                                <h5 class="text-primary mb-2">2023.01 - Present</h5>
                                <h3 class="mb-1">
                                    Web Developer<br>
                                    Foreign Supplier Representative
                                </h3>
                                <p>Ondol Europe</p>
                            </li>
                            <li>
                                <h5 class="text-secondary mt-5 mb-2">2018.08 - 2022.11</h5>
                                <h3 class="mb-1">IT Support<br>Graphic and Environment Designer</h3>
                                <p>Branch Office of Jehovah's Witnesses in Poland</p>
                            </li>
                            <li>
                                <h5 class="text-secondary mt-5 mb-2">2017.11 - 2018.08</h5>
                                <h3 class="mb-1">
                                    CAD/CAM Designer<br>
                                    PrePress/DTP/CTP Specialist<br>
                                    Technical Graphic
                                </h3>
                                <p>Van Genechten Packaging Poland</p>
                            </li>
                        </ul>
                    </section>

                    <section id="skills-section" class="m-5 my-7">
                        <h2 class="mb-4">
                            <span class="text-primary fw-semibold">Skills</span>
                        </h2>

                        <h3>Advanced</h3>
                        <div class="row row-cols-auto">
                            <div
                                class="col border border-success rounded-pill d-flex flex-column align-items-center justify-content-center p-3 m-2">
                                <i class="fab fa-html5 mb-2"></i>
                                <strong>HTML</strong>
                            </div>

                            <div
                                class="col border border-success rounded-pill d-flex flex-column align-items-center justify-content-center p-3 m-2">
                                <i class="fa-brands fa-css3-alt mb-2"></i>
                                <strong>CSS</strong>
                            </div>

                            <div
                                class="col border border-success rounded-pill d-flex flex-column align-items-center justify-content-center p-3 m-2">
                                <i class="fa-brands fa-bootstrap mb-2"></i>
                                <strong>Bootstrap</strong>
                            </div>

                            <div
                                class="col border border-success rounded-pill d-flex flex-column align-items-center justify-content-center p-3 m-2">
                                <img class="mb-2" src="/icons/ai.svg"></img>
                                <strong>Adobe Illustrator</strong>
                            </div>
                        </div>

                        <h3 class="mt-3">Intermediate</h3>
                        <div class="row row-cols-auto">
                            <div
                                class="col border border-warning rounded-pill d-flex flex-column align-items-center justify-content-center p-3 m-2">
                                <i class="fa-brands fa-js mb-2"></i>
                                <strong>Javascript</strong>
                            </div>

                            <div
                                class="col border border-warning rounded-pill d-flex flex-column align-items-center justify-content-center p-3 m-2">
                                <i class="fa-brands fa-wordpress-simple mb-2"></i>
                                <strong>Wordpress</strong>
                                
                            </div>
                        </div>

                        <h3 class="mt-3">Basic</h3>
                        <div class="row row-cols-auto">
                            <div
                                class="col border border-danger rounded-pill d-flex flex-column align-items-center justify-content-center p-3 m-2">
                                <i class="fa-brands fa-php mb-2"></i> <strong>PHP</strong>
                            </div>
                        </div>

                    </section>



                </div>
            </main>
        </div>


    </div>

    <!-- bootstrap js -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
    <!-- my JS -->
    <script src="js.js"></script>
</body>

</html>