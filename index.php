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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar position-fixed fixed-top rounded-bottom-5">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="/">
                <img src="img/medax-logo-01.svg" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDark">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
        </div>
    </nav>
    <section class="hero-section min-vh-100" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0">
        <canvas id="canvas"></canvas>
        <div class="container vh-100" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0" data-aos-duration="1000">
            <div class="row h-100 d-flex align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-lg-8 col-xl-7 z-3 text-center">
                    <h1 class="display-1 fw-bold mb-1 ls-0 position-relative"><span class="fw-normal">Smart</span>MEDIX<span class="fs-3 heart ms-2"><i class="fa-solid fa-heart text-danger"></i></span></h1>
                    <h2 class="fs-2 fs-semibold mb-5">Váš přátelský lékařský software...</h2>
                    <p class="mb-5 fw-light">SmartMEDIX je informační systém vyvíjený českou společností, který neobsahuje nevyžádanou
                        reklamu, je určený pro malá i velká zdravotnická zařízení. Umožňuje kompletní vedení zdravotnické
                        dokumentace, vyúčtování péče a konektivitu na veškeré eHealth systémy českého zdravotnictví.</p>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="#" class="btn btn-primary px-5 rounded-4">Chci vědět víc</a>
                        <a href="#" class="btn btn-outline-secondary px-5 rounded-4" data-bs-toggle="modal" data-bs-target="#demo_version">Mám zájem o demoverzi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-12 col-xl-3 offset-xl-1 align-self-center mb-5 mb-xl-0">
                    <p class="display-3 fw-semibold mb-0 text-center text-lg-start">Rozšíření základního systému</p>
                </div>
                <div class="col-12 col-lg-12 col-xl-8">
                    <div class="row gx-5">
                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-4 mb-lg-0">
                            <div class="card text-bg-dark rounded-4 extended-services-card">
                                <img src="img/ivf-clinic.jpg" class="card-img rounded-4" alt="...">
                                <div class="card-img-overlay">
                                    <div class="card-overlay-content d-flex flex-column justify-content-end h-100">
                                        <p class="display-6 fw-bold mb-0">IVF</p>
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
                                        <p class="display-6 fw-bold mb-0">NIS/LDN</p>
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
                                        <p class="display-6 fw-bold mb-0">Rehabilitace</p>
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

    <section class="pb-5 extended-functions">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-12">
                    <p class="display-4 fw-semibold mb-0 text-center" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Volitelná rozšíření</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gx-5 gy-3">
                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-box fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.SKLAD</span></p>
                                <p class="mb-0">Skladové hospodářství</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-robot fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.NET</span></p>
                                <p class="mb-0">Virtuální asistent</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-robot fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.NET PLUS</span></p>
                                <p class="mb-0">Pokročilý virtuální asistent</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-microphone-lines fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.VOIP</span></p>
                                <p class="mb-0">Hlasový asistent</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-input-text fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.OCR</span></p>
                                <p class="mb-0">Digitalizace tištěných textů</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-file-chart-pie fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.REPORTING</span></p>
                                <p class="mb-0">Automatické reporty</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-camera fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.FOTO</span></p>
                                <p class="mb-0">Aplikace pro snadné focení</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-terminal fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.API</span></p>
                                <p class="mb-0">Aplikační programové rozhraní</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-desktop fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.DICOM</span></p>
                                <p class="mb-0">Napojení na zobrazovací systém Dicom</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-file-invoice fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.ÚČETNICTVÍ</span></p>
                                <p class="mb-0">Export do účetního systému</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-credit-card fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.TERMINÁL</span></p>
                                <p class="mb-0">Napojení na platební terminál</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-clipboard-medical fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.INTERAKCE</span></p>
                                <p class="mb-0">Lékové interakce Vademecum</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-fingerprint fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.WITNESS</span></p>
                                <p class="mb-0">Nástroj pro ověření identifikace</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-arrows-to-circle fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.REPLIKACE</span></p>
                                <p class="mb-0">Vzdálené propojení databáze</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-database fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.BACKUP</span></p>
                                <p class="mb-0">Rozšířené zálohování databáze</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-folder-open fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.EZD</span></p>
                                <p class="mb-0">Elektronická zdravotnická dokumentace</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-signature fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.SIGNOTEC</span></p>
                                <p class="mb-0">Dynamický podpis</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card rounded-4 p-4 border-0 bg-white text-white" style="--bs-bg-opacity: .08; backdrop-filter: blur(8px)">
                        <div class="row">
                            <div class="col-2 align-self-center text-center">
                                <div class="icon">
                                    <i class="fa-light fa-comment-sms fs-3"></i>
                                </div>
                            </div>
                            <div class="col-9 align-self-center">
                                <p class="fs-5 fw-semibold mb-0">Smart<span class="fw-bold">MEDIX.SMS</span></p>
                                <p class="mb-0">Automatické události</p>
                            </div>
                            <div class="col-1 align-self-center text-center move-icon">
                                <a href="#" class="fs-2 text-inherit mt-3 stretched-link"><span class="small"><i class="fa-regular fa-chevron-right ms-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <a href="#" class="btn btn-primary px-5 rounded-4">Mám zájem</a>
                </div>
            </div>
        </div>
    </section>

    <div class="pre-footer-wrapper">
        <!-- Prices -->
        <section class="py-5">
            <div class="container">
                <div class="card p-5 bg-white rounded-4 shadow" style="--bs-bg-opacity: .05; backdrop-filter: blur(8px)" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="row gx-5">
                        <div class="col-12 col-lg-7">
                            <div class="card rounded-4 p-4 bg-black bg-opacity-50">
                                <div class="table-responsive pb-0 mb-0">
                                    <table class="table bg-transparent pb-0 mb-0">
                                        <thead>
                                            <th></th>
                                            <th class="text-center">Lékař</th>
                                            <th class="text-center">Sestra</th>
                                            <th class="text-center">Celkem</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold">Licence:</td>
                                                <td class="text-center">16 500 Kč</td>
                                                <td class="text-center">6 600 Kč</td>
                                                <td class="text-center">23 100 Kč</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Podpora:</td>
                                                <td class="text-center">8 575 Kč</td>
                                                <td class="text-center">4 287 Kč</td>
                                                <td class="text-center">12 862 Kč</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Celkem:</td>
                                                <td class="text-center">25 075 Kč</td>
                                                <td class="text-center">10 887 Kč</td>
                                                <td class="text-center">35 962 Kč</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                            </tr>
                                            <tr class="text-center fw-semibold">
                                                <td class="text-start" colspan="4">Součet</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="fw-semibold">1. rok</td>
                                                <td class="text-center fw-semibold" colspan="3">35 962 Kč</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="fw-semibold">Další léta</td>
                                                <td class="text-center fw-semibold" colspan="3"><s class="small"><span class="fw-normal small">35 962 Kč</span></s> 12 862 Kč</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 align-self-center text-white">
                            <div class="d-flex align-items-start display-3 fw-semibold mb-4 text-center text-lg-start">
                                Ceník
                                <span class="fs-5 ms-2 align-self-start cursor-pointer" data-bs-toggle="modal" data-bs-target="#price_info"><i class="fa-solid fa-circle-info"></i></span>
                            </div>
                            <p class="fs-1 fw-semibold mb-0 text-center text-lg-start">Vzorový příklad:</p>
                            <p class="fs-4 fw-normal mb-0 text-center text-lg-start">Lékař + sestra</p>
                            <a href="#" class="btn btn-primary px-5 rounded-4 mt-4">Zobrazit celý ceník</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->

        <footer class="">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 col-lg-5 text-center text-lg-start align-self-center">
                        <img src="img/medax-logo.svg" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-3 text-center text-lg-start">
                        <p class="fs-5 fw-semibold">Kam jít</p>
                        <p class="small mb-0"><a class="text-inherit" href="/">Úvod</a></p>
                        <p class="small mb-0"><a class="text-inherit" href="/">Volitelné rozšíření</a></p>
                        <p class="small mb-0"><a class="text-inherit" href="/">Ceník</a></p>
                        <p class="small mb-0"><a class="text-inherit" href="/">Demoverze</a></p>
                        <p class="small mb-0"><a class="text-inherit" href="/">Obecné</a></p>
                        <p class="small mb-0"><a class="text-inherit" href="/">Společnost</a></p>
                        <p class="small mb-0"><a class="text-inherit" href="/">Pomoc</a></p>
                    </div>
                    <div class="col-12 col-lg-4 text-center text-lg-start">
                        <p class="fs-5 fw-semibold">Kontakt</p>
                        <p class="small mb-0">Oběžná 2075/11</p>
                        <p class="small mb-0">709 00 Ostrava</p>
                        <p class="small mb-3">IČ: 27836673</p>

                        <p class="small mb-0">bankovní spojení: ČSOB Ostrava 220015351/0300</p>
                        <p class="small mb-0">IBAN: CZ13 0300 0000 0002 2001 5351</p>
                        <p class="small mb-3">BIC/SWIFT: CEKOCZPP</p>
                        <p class="small mb-0">Společnost vedená u rejstříkového soudu v Ostravě pod značkou C 30978</p>
                    </div>
                </div>
                <div class="row border-top border-light pt-3" style="--bs-border-opacity: .25;">
                    <div class="col-12 col-md-6 text-center text-md-start align-self-center">
                        <p class="small">Vytvořeno s <span class=""><i class="fa-solid fa-heart text-danger"></i></span> v roce 2024. Všechna práva vyhrazena.</p>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-end align-self-center">
                        <p class="small">Vytvořil <a class="text-inherit" href="humanit.cz">Humanit s.r.o.</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Modal DEMO -->
    <div class="modal fade" id="demo_version" tabindex="-1" aria-labelledby="demo_versionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-white text-white rounded-4" style="--bs-bg-opacity: 0.15; backdrop-filter: blur(10px)">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="demo_versionLabel">SmartMEDIX - demoverze</h1>
                    <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-12 col-md-6">
                            <label for="device_name" class="form-label">Název zařízení</label>
                            <input type="text" class="form-control" id="device_name">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="city" class="form-label">Město</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="contact_person" class="form-label">Kontaktní osoba</label>
                            <input type="text" class="form-control" id="contact_person" placeholder="">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="skills" class="form-label">Odbornost</label>
                            <input type="text" class="form-control" id="skills">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="phone_number" class="form-label">Telefon</label>
                            <input type="text" class="form-control" id="phone_number" placeholder="">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="notes" class="form-label">Poznámka</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Poznámka" id="notes"></textarea>
                            </div>
                        </div>
                        <div class="col-12 mt-4 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="agreements">
                                <label class="form-check-label" for="agreements">
                                    Souhlas se <a href="#" class="text-inherit">zpracováním osobních údajů</a> (bez souhlasu nelze žádost odeslat)
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 rounded-4">Odeslat žádost</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- Modal price info -->
    <div class="modal fade" id="price_info" tabindex="-1" aria-labelledby="price_infoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-white text-white rounded-4" style="--bs-bg-opacity: 0.15; backdrop-filter: blur(10px)">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="price_infoLabel">Základní program</h1>
                    <button type="button" class="btn-close invert" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li class="fw-semibold">odesílání dávek z programu přímo na portál ZP</li>
                        <li class="fw-semibold">online ověření stavu pojištění a registrace</li>
                        <li class="fw-semibold">eNeschopenka, eRecept, ePoukaz</li>
                        <li class="fw-semibold">obrazová dokumentace a záznam videa (skenování, import dokumentů)</li>
                        <li class="fw-semibold">automatické zvaní na preventivní prohlídky</li>
                        <div class="w-100 my-4"></div>
                        <li>stahování zúčtovacích zpráv z portálů ZP</li>
                        <li>napojení na externí programy a zařízení (EKG, holter, UZ, spirometr, atd…)</li>
                        <li>lékové informace SPC a PIL</li>
                        <li>export statistik pro ÚZIS</li>
                        <li>laboratorní výsledky, elektronické laboratorní žádanky</li>
                        <li>diabetologický modul</li>
                        <li>odesílání e-mailů přímo z programu</li>
                        <li>vzdálený videohovor s pacientem</li>
                    </ul>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-primary bg-dark-blue rounded-4" data-bs-dismiss="modal" aria-label="Close">Zavřít</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end text-white bg-white" style="backdrop-filter: blur(10px); --bs-bg-opacity: .075;" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title opacity-0" id="offcanvasDarkLabel">SmartMEDIX</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav px-3">
                <li class="nav-item">
                    <a class="nav-link py-3 fs-5" href="#"><i class="fa-regular fa-chevron-right me-2"></i> Úvod</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3 fs-5" href="#"><i class="fa-regular fa-chevron-right me-2"></i> Volitelné rozšíření</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3 fs-5" href="#"><i class="fa-regular fa-chevron-right me-2"></i> Ceník</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#demo_version"><i class="fa-regular fa-chevron-right me-2"></i> Demoverze</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3 fs-5" href="#"><i class="fa-regular fa-chevron-right me-2"></i> Obecné</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3 fs-5" href="#"><i class="fa-regular fa-chevron-right me-2"></i> O nás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3 fs-5" href="#"><i class="fa-regular fa-chevron-right me-2"></i> Pomoc</a>
                </li>
            </ul>
            <div class="card mt-4 p-3 rounded-4 bg-white" style="--bs-bg-opacity: .05; backdrop-filter: blur(10px)">
                <div class="row text-white">
                    <div class="col-3 align-self-center d-flex justify-content-center align-items-center">
                        <div class="icon">
                            <i class="fa-solid fa-phone fs-4 text-light-blue"></i>
                        </div>
                    </div>
                    <div class="col-9 align-self-center">
                        <p class="fs-5 fw-semibold mb-0">Telefon:</p>
                        <p class="mb-0"><a href="tel:+420123456789" class="text-inherit stretched-link">+420 123 456 789</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/stars.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        // Sledování události skrolování na okně
        window.addEventListener('scroll', function() {
            var nav = document.querySelector('.navbar'); // Získání navigačního pruhu
            if (window.scrollY > 0) { // Uživatel skroloval dolů od vrchu stránky alespoň o 1px
                nav.classList.add('scrolled-navbar');
            } else { // Uživatel je na vrcholu stránky
                nav.classList.remove('scrolled-navbar');
            }
        });
    </script>
</body>

</html>