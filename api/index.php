<?php include('lang.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $texts['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

<div class="container mt-4 d-flex justify-content-end">
    <div class="lang-switcher d-flex align-items-center">
        <a href="?lang=en" class="<?php echo ($lang == 'en') ? 'active-flag' : 'inactive-flag'; ?>" title="English">
            <img src="https://flagcdn.com/w40/gb.png" srcset="https://flagcdn.com/w80/gb.png 2x" width="30" alt="English" style="cursor: pointer;">
        </a>
        <span class="mx-2 text-muted">|</span>
        <a href="?lang=sk" class="<?php echo ($lang == 'sk') ? 'active-flag' : 'inactive-flag'; ?>" title="Slovensky">
            <img src="https://flagcdn.com/w40/sk.png" srcset="https://flagcdn.com/w80/sk.png 2x" width="30" alt="Slovensky" style="cursor: pointer;">
        </a>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 cv-container">
            <div class="row">
                <div class="col-md-4 border-end pe-md-4">
                    <div class="text-center mb-4">
                        <div class="profile-photo-frame">
                            <img src="/cover-photo.jpg" alt="Samuel Šútora" class="img-fluid">
                        </div>
                    </div>
                    
                    <section>
                        <h2 class="section-title"><?php echo $texts['about_me']; ?></h2>
                        <p class="small"><?php echo $texts['about_me_desc']; ?></p>
                    </section>

                    <section class="mb-4">
                        <h2 class="section-title"><?php echo $texts['links']; ?></h2>
                        <div class="contact-info">
                            <div class="contact-item mb-1">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span><?php echo $texts['residence']; ?></span>
                            </div>
                            <div class="contact-item mb-1">
                                <i class="bi bi-envelope-fill"></i>
                                <a href="mailto:sutorasam@gmail.com" class="text-decoration-none text-dark">sutorasam@gmail.com</a>
                            </div>
                            <div class="contact-item mb-3">
                                <i class="bi bi-telephone-fill"></i>
                                <a href="tel:+421907407116" class="text-decoration-none text-dark">+421 907 407 116</a>
                            </div>
                        </div>
                        <div class="contact-links">
                            <a href="https://www.linkedin.com/in/samuel-šútora-917165368/" class="d-block mb-1 text-decoration-none"><i class="bi bi-linkedin me-2"></i>LinkedIn</a>
                            <a href="https://github.com/Trescikdev" class="d-block mb-1 text-decoration-none"><i class="bi bi-github me-2"></i>GitHub</a>
                        </div>
                    </section>
                </div>

                <div class="col-md-8 ps-md-4">
                    <header class="text-md-start text-center mb-5">
                        <h1 class="display-4 fw-bold">Samuel Šútora</h1>
                        <p class="lead text-primary"><?php echo $texts['last_updated']; ?> APR 2026</p>
                    </header>

                    <section class="mb-4">
                        <h2 class="section-title"><?php echo $texts['core_values']; ?></h2>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="skill-bubble tech-backend">Komunikácia</span>
                            <span class="skill-bubble tech-backend">Úprimnosť</span>
                            <span class="skill-bubble">Iniciatíva</span>
                            <span class="skill-bubble">Zodpovednosť</span>
                            <span class="skill-bubble tech-backend">Flexibilita</span>
                            <span class="skill-bubble">Tímovosť</span>
                            <span class="skill-bubble tech-backend">Profesionalita</span>
                        </div>
                    </section>

                    <section class="mb-4">
                        <h2 class="section-title"><?php echo $texts['experience']; ?></h2>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-start w-100">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0 fw-bold">Web admin</h5>
                                        <div class="text-primary mb-0 green">Hulman.sk</div>
                                    </div>
                                    <button class="btn btn-link p-0 ms-3 text-decoration-none collapse-toggle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detailsWebAdmin">
                                        <i class="bi bi-plus-circle-fill text-primary toggle-icon" style="font-size: 1.2rem;"></i>
                                    </button>
                                </div>
                                <span class="job-date text-uppercase">Sep 2025 – <?php echo $texts['present']; ?></span>
                            </div>

                            <ul class="mt-2 mb-1">
                                <li>HTML/CSS <?php echo $texts['website_maintenance']; ?>.</li>
                                <li><?php echo $texts['occasional_php_development']; ?>.</li>
                            </ul>

                            <div class="collapse" id="detailsWebAdmin">
                                <div class="mt-2 text-muted small p-2 bg-light rounded">
                                    <?php echo $texts['more_info_webadmin']; ?>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-start w-100">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0 fw-bold"><?php echo $texts['job_title_1']; ?></h5>
                                        <div class="text-primary mb-0">FBC Grasshoppers AC UNIZA Žilina</div>
                                    </div>
                                    <button class="btn btn-link p-0 ms-3 text-decoration-none collapse-toggle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detailsFloorball">
                                        <i class="bi bi-plus-circle-fill text-primary toggle-icon" style="font-size: 1.2rem;"></i>
                                    </button>
                                </div>
                                <span class="job-date text-uppercase">SEP 2022 – JUL 2023</span>
                            </div>
                            <p class="mb-1 mt-2"><?php echo $texts['job_summary_1']; ?>.</p>
                            <div class="collapse" id="detailsFloorball">
                                <div class="mt-2 text-muted small p-2 bg-light rounded">
                                    <?php echo $texts['more_info_floorball']; ?>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mb-4">
                        <h2 class="section-title"><?php echo $texts['education']; ?></h2>
                        
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-start w-100">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0 fw-bold">Masarykova Univerzita</h5>
                                        <div class="text-primary mb-0"><?php echo $texts['study_programme']; echo $texts['degree']; ?></div>
                                    </div>
                                    <button class="btn btn-link p-0 ms-3 text-decoration-none collapse-toggle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detailsUni">
                                        <i class="bi bi-plus-circle-fill text-primary toggle-icon" style="font-size: 1.2rem;"></i>
                                    </button>
                                </div>
                                <span class="job-date text-uppercase">Sep 2024 – <?php echo $texts['present']; ?></span>
                            </div>
                            <div class="collapse" id="detailsUni">
                                <div class="mt-2 text-muted small p-2 bg-light rounded">
                                    <?php echo $texts['more_info_uni']; ?>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-start w-100">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0 fw-bold">Gymnázium Varšavská cesta 1</h5>
                                        <div class="text-primary mb-0"><?php echo $texts['high_school_summary']; ?></div>
                                    </div>
                                    <button class="btn btn-link p-0 ms-3 text-decoration-none collapse-toggle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detailsHighSchool">
                                        <i class="bi bi-plus-circle-fill text-primary toggle-icon" style="font-size: 1.2rem;"></i>
                                    </button>
                                </div>
                                <span class="job-date text-uppercase">Sep 2016 – May 2024</span>
                            </div>
                            <div class="collapse" id="detailsHighSchool">
                                <div class="mt-2 text-muted small p-2 bg-light rounded">
                                    <?php echo $texts['more_info_highschool']; ?>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mb-4">
                        <h2 class="section-title"><?php echo $texts['skills']; ?></h2>                     
                        <div class="d-flex flex-wrap gap-2">
                            <span class="skill-bubble tech-backend">Python</span>
                            <span class="skill-bubble tech-backend">C</span>
                            <span class="skill-bubble tech-backend">C#</span>
                            <span class="skill-bubble">SQL</span>
                            <span class="skill-bubble">HTML5</span>
                            <span class="skill-bubble">CSS</span>
                            <span class="skill-bubble tech-backend">PHP</span>
                            <span class="skill-bubble tech-backend">Haskell</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2 mt-3">
                            <span class="skill-bubble"><?php echo $texts['english']; ?></span>
                            <span class="skill-bubble">MS Office</span>
                            <span class="skill-bubble">Github</span>
                        </div>
                    </section>

                    <section class="mb-4">
                        <h2 class="section-title"><?php echo $texts['hobbies_title'] ?></h2>
                        <p><?php echo $texts['hobbies_desc']; ?></p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
