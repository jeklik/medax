<!doctype html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SmartMEDIX</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar position-fixed fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#"><img src="img/medax-logo.svg" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDark">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <section class="hero-section min-vh-100">
        <canvas id="canvas"></canvas>
        <div class="container vh-100">
            <div class="row h-100 d-flex align-items-center">
                <div class="col-12 col-sm-12 col-lg-8 col-xl-7 z-3">
                    <h1 class="display-1 fw-bold mb-1 ls-0 position-relative"><span class="fw-normal">Smart</span>MEDIX<span class="fs-3 heart ms-2"><i class="fa-solid fa-heart text-danger"></i></span></h1>
                    <h2 class="fs-2 fs-semibold mb-5">Váš přátelský lékařský software...</h2>
                    <p class="mb-5 fw-light">SmartMEDIX je informační systém vyvíjený českou společností, který neobsahuje nevyžádanou
                        reklamu, je určený pro malá i velká zdravotnická zařízení. Umožňuje kompletní vedení zdravotnické
                        dokumentace, vyúčtování péče a konektivitu na veškeré eHealth systémy českého zdravotnictví.</p>
                        <a href="#" class="btn btn-primary px-4">Chci vědět víc</a>
                        <a href="#" class="btn btn-outline-primary px-4">Mám zájem o demoverzi</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-12 col-xl-4 align-self-center mb-5 mb-xl-0">
                    <p class="display-3 fw-semibold mb-0 text-center text-lg-start">Rozšíření základního systému</p>
                </div>
                <div class="col-12 col-lg-12 col-xl-8">
                    <div class="row gx-5">
                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-4 mb-lg-0">
                            <div class="card text-bg-dark rounded-4 extended-services-card">
                                <img src="img/ivf-clinic.jpg" class="card-img rounded-4" alt="...">
                                <div class="card-img-overlay">
                                    <div class="card-overlay-content d-flex flex-column justify-content-end h-100">
                                        <p class="display-5 fw-bold mb-0">IVF</p>
                                        <p class="card-text">Systém pro vedení asistované reprodukce</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-4 mb-lg-0">
                            <div class="card text-bg-dark rounded-4 extended-services-card">
                                <img src="img/hospital.jpg" class="card-img rounded-4" alt="...">
                                <div class="card-img-overlay">
                                    <div class="card-overlay-content d-flex flex-column justify-content-end h-100">
                                        <p class="display-5 fw-bold mb-0">NIS/LDN</p>
                                        <p class="card-text">Nemocniční informační systém pro malé nemocnice a léčebny dlouhodobě nemocných</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-4 mb-lg-0">
                            <div class="card text-bg-dark rounded-4 extended-services-card">
                                <img src="img/rehabilitation.jpg" class="card-img rounded-4" alt="...">
                                <div class="card-img-overlay">
                                    <div class="card-overlay-content d-flex flex-column justify-content-end h-100">
                                        <p class="display-5 fw-bold mb-0">Rehabilitace</p>
                                        <p class="card-text">Systém pro vedení rehabilitačních zařízení</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 extended-functions">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-12">
                    <p class="display-4 fw-semibold mb-0 text-center">Volitelná rozšíření</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gx-5 gy-3">
                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-box fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.SKLAD</span></p>
                                <p class="mb-0 small">Skladové hospodářství</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-robot fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.NET</span></p>
                                <p class="mb-0 small">Virtuální asistent</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-robot fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.NET PLUS</span></p>
                                <p class="mb-0 small">Pokročilý virtuální asistent</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-microphone-lines fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.VOIP</span></p>
                                <p class="mb-0 small">Hlasový asistent</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-input-text fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.OCR</span></p>
                                <p class="mb-0 small">Digitalizace tištěných textů</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-file-chart-pie fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.REPORTING</span></p>
                                <p class="mb-0 small">Automatické reporty</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-camera fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.FOTO</span></p>
                                <p class="mb-0 small">Aplikace pro snadné focení</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-terminal fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.API</span></p>
                                <p class="mb-0 small">Aplikační programové rozhraní</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-desktop fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.DICOM</span></p>
                                <p class="mb-0 small">Napojení na zobrazovací systém Dicom</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-file-invoice fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.ÚČETNICTVÍ</span></p>
                                <p class="mb-0 small">Export do účetního systému</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-credit-card fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.TERMINÁL</span></p>
                                <p class="mb-0 small">Napojení na platební terminál</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-clipboard-medical fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.INTERAKCE</span></p>
                                <p class="mb-0 small">Lékové interakce Vademecum</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-fingerprint fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.WITNESS</span></p>
                                <p class="mb-0 small">Nástroj pro ověření identifikace</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-arrows-to-circle fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.REPLIKACE</span></p>
                                <p class="mb-0 small">Vzdálené propojení databáze</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-database fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.BACKUP</span></p>
                                <p class="mb-0 small">Rozšířené zálohování databáze</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-folder-open fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.EZD</span></p>
                                <p class="mb-0 small">Elektronická zdravotnická dokumentace</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-signature fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.SIGNOTEC</span></p>
                                <p class="mb-0 small">Dynamický podpis</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card rounded-4 p-4 border-0 bg-white bg-opacity-10 text-white">
                        <div class="row">
                        <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-comment-sms fs-3"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center">
                                <p class="fs-6 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.SMS</span></p>
                                <p class="mb-0 small">Automatické události</p>
                            </div>
                            <div class="col-2 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title opacity-0" id="offcanvasDarkLabel">SmartMEDIX</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/stars.js"></script>
</body>

</html>