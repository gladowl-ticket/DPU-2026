<?php
  include 'link.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Alard University Legacy In Education since 1999</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="Alard , Pune university, higher education Pune, undergraduate programs Pune, postgraduate courses Pune, engineering college Pune, management studies Pune, best universities in Pune, Alard group Pune, B.Tech Pune, MBA Pune, pharmacy courses Pune, law college Pune, Pune universities, Alard University admissions"
        name="keywords">
    <meta
        content="Alard University Pune offers diverse undergraduate and postgraduate programs with a focus on holistic education, innovation, and research. Located in Pune, the university provides state-of-the-art facilities and a vibrant learning environment to shape future leaders."
        name="description">

    <!-- Favicon -->
    <link href="<?= LINK; ?>images/alard/logo/favicon.webp" loading="lazy" rel="icon">

    <link rel="preload" as="image" href="images/alard/hero/1.webp" type="image/webp">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"> -->



    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="<?= LINK; ?>css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Template Stylesheet -->
    <link href="<?= LINK; ?>css/style.css" rel="stylesheet">
    <link rel="preload" as="image" href="images/alard/hero/1.webp" />

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P7FKP8ZW');
    </script>
    <!-- End Google Tag Manager -->

    


    <script>
        window.dataLayer = window.dataLayer || [];

        const urlParams = new URLSearchParams(window.location.search);
        const email = urlParams.get('email');
        const phone_number = urlParams.get('phone_number');

        dataLayer.push({
            event: 'ec_form_submit',
            enhanced_conversion_data: {
                email: email,
                phone_number: phone_number
            }
        });
    </script>

</head>

<body>

    <!-- ======================================================================================================= -->
    <div class="container-fluid h_nav px-lg-5 sticky-top">
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg  navbar-light p-lg-0">
                <a href="" class="navbar-brand">
                    <img src="images/alard/logo/3.webp" class="hero_logo_01" loading="lazy"
                        alt="Alard University Legacy In Education since 1999">
                </a>
                <a href="" class="btn c_btn  fw-normal d-lg-none" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Enquire Now</a>
                <button type="button" class="navbar-toggler fs_13 me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="#about-us" class="nav-item nav-link">About Us</a>
                        <a href="#key-highlights" class="nav-item nav-link">Key Highlights</a>
                        <a href="#Program" class="nav-item nav-link">Program</a>
                        <a href="#testimonals" class="nav-item nav-link">Testimonials</a>
                        <a href="#placement" class="nav-item nav-link">Placement</a>
                        <a href="#gallery" class="nav-item nav-link">Life@ALARD</a>
                        <div class="d-lg-block mt-3 mt-lg-0">
                            <a href="" class="btn c_btn py-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="overflow-hidden">
        <!-- ======================================================================================================= -->
        <!-- Topbar End -->
        <section class="position-relative d-lg-block d-none hero_section text-center" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <img src="images/alard/hero/3.webp" class="img-fluid" alt="Alard University Legacy In Education since 1999">
            <div class="container banner_text">
                <div class="row align-items-center">
                </div>
            </div>
        </section>
        <section class=" d-lg-none d-block position-relative hero_section" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <div class="container">
                <div class="row ">
                    <!-- Display the image -->
                    <img src="images/alard/hero/1.webp" alt="Hero Image" class="hero_mobile" />
                </div>
            </div>
        </section>

        <!---USP start--->
        <section class="px-lg-5 pt-2  ">
            <div class="container px-lg-0">
                <div class="row justify-content-center pt-3 mb-4">
                    <?php
                    $b = array("Highest Package", "Career Shaped", "Companies Visited", "Industry MOU’s");
                    $c = array( "50 LPA ", "10000+", "650+", "100+");

                    for ($i=0; $i < count($b); $i++) {
                ?>
                    <div class="col-lg-3 col-6 mb-4 mb-lg-1 d-grid ">
                        <div class="d-flex align-items-stretch   usp_01 bg-purple">
                            <div class=" ps-3">
                                <h6 class=" rank text-light fw-bold pb-4 "><?= $c[$i]; ?></h6>
                                <p class="text-light h4 "><?= $b[$i]; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                }
                 ?>
                 <div class="text-end"><p>*Data from AGI</p></div>
                </div>
            </div>
        </section>
        <!-- ---------------------------------------------------------------------------------------------------- -->

        <section class="" id="about-us">
            <div class="container bg-white  rounded-3 pt-3">
                <div class="row  py-4 px-3">
                    <div class="col-lg-8">
                        <div class="row justify-content-lg-between">
                            <div class="col-12 align-items-center border-bottom_01">
                                <div class="col-lg-12 ">
                                    <h2 class="text-purple fw-normal mb-lg-3 mb-0 display-5 title">From Industrial
                                        Excellence to Academic Leadership</h2>
                                </div>
                                <div class="col-lg-5 mb-0 ">
                                    <h5 class="text-mute text-lg-end subtitle"></h5>
                                </div>
                            </div>
                            <p align="justify" class="pt-3">Alard University, Pune was born in the heart of the
                                industry—long before it became a center of learning. Built on 25+ years of industrial
                                experience, the university bridges the gap between the boardroom and the classroom,
                                transforming real-world knowledge into future-ready education. <br>
                                Founded by visionary industrialist Dr. L.R. Yadav, Alard University was created to
                                address one critical challenge: the employability gap. Having spent over two decades
                                building and leading industries, Dr. Yadav envisioned a university where industrial
                                wisdom meets academic brilliance.
                                Today, Alard University delivers experience-driven curriculum, hands-on learning, and
                                strong industry exposure, ensuring students graduate confident, skilled, and ready to
                                lead from Day One.</p>
                        </div>
                        <div class="row pe-lg-5 mt-md-5 mt-3  justify-content-lg-end justify-content-center">
                            <div class="col-lg-12 ">
                                <h2 class="text-purple fw-normal mb-4 display-6 title">Awards & Achievements </h2>
                            </div>

                            <div
                                class="row awards_01 pt-lg-4 pb-lg-0 py-4 owl-carousel justify-content-center text-center">
                                <?php
                                for ($i=1; $i < 6; $i++) {
                                ?>
                                    <div class="rounded-3 py-3 border box_shadow mx-3">
                                        <img src="images/alard/awards/<?= $i++;?>.webp" loading="lazy"
                                            class="w-100" alt="">
                                    </div>
                                <?php
                                } 
                                ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 pb-3 pb-lg-0">
                        <div class="border rounded-3 text-center pt-3">
                            <div class="about_logo">
                                <img src="images/alard/logo/2.webp" loading="lazy" alt="">
                            </div>
                            <h4 class="border-purple_01">Admissions Open 2026-27</h4>
                            <?php
                         include 'form_01.php'
                         ;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---------------------------------------------------------------------------------------------------- -->



        <!---Program Highlights and Advantages start--->
        <section class="py-5 pb-lg-0 " id="key-highlights">
            <div class="container bg-white rounded-3 px-lg-5 py-5 pt-lg-5 ">
                <div class="row align-item-center">
                    <div class="col-lg-8 order-2 order-lg-1 ">
                        <h2 class="text-purple fw-normal mb-4 display-5 title">Your Path to Success: Program Highlights
                            that Matters a lot</h2>

                        <!-- Row for the boxes -->
                        <div class="row your_path">
                            <?php
    $yourPath = [
        [
            "img" => "1",
            "title" => "25+ Legacy of Education since 1999",
            "text_class" => "text-light",
            "box_class" => ""
        ],
        [
            "img" => "2",
            "title" => "Student-Focused Learning Environment",
            "text_class" => "text-purple",
            "box_class" => "box_003"
        ],
        [
            "img" => "3",
            "title" => "Modern Infrastructure & Research-Oriented  Ecosystem",
            "text_class" => "text-purple",
            "box_class" => "box_003"
        ],
        [
            "img" => "4",
            "title" => "Top-Notch Faculty from Premier Institutions",
            "text_class" => "text-light",
            "box_class" => "keyhigh"
        ],
        [
            "img" => "5",
            "title" => "Holistic Learning: Academics + Skills + Personality Growth",
            "text_class" => "text-light",
            "box_class" => ""
        ],
        [
            "img" => "6",
            "title" => "Strategic Location in Pune’s IT & Education Hub",
            "text_class" => "text-purple",
            "box_class" => "box_003"
        ],
        [
            "img" => "7",
            "title" => "Active Student Clubs, Events, and Leadership Opportunities",
            "text_class" => "text-purple",
            "box_class" => "box_003"
        ],
        [
            "img" => "8",
            "title" => "Strong Alumni Network Across India & Abroad",
            "text_class" => "text-light",
            "box_class" => "keyhigh"
        ]
    ];

    foreach ($yourPath as $index => $item): ?>
                            <div class="col-lg-6 col-sm-6 mb-4 ">
                                <div class="border rounded py-4 p-3 <?= $item['box_class']; ?>">
                                    <div class="d-lg-flex align-items-center">
                                        <img src="images/alard/highlights/<?= $item['img']; ?>.webp" loading="lazy"
                                            class="your_path_img">
                                        <h6 class="h5 <?= $item['text_class']; ?> ps-lg-3 pt-3 pt-lg-0">
                                            <?= $item['title']; ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>


                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0 order-1 order-lg-2 bg_applynew d-none d-md-block"
                        data-bgimg="images/alard/highlights/g1.webp">
                    </div>
                </div>
            </div>
        </section>




        <!-- ----------------------------------------------------------------------------------------------------------- -->
            <?php include 'test.php';?>
        <!-- ----------------------------------------------------------------------------------------------------------- -->

        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class="py-lg-5 pb-5 " id="Program">
            <?php include 'program.php';?>
        </section>
        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class=" pb-5  rounded-0 ">
            <div class="container mt-3 mt-lg-0 px-lg-2">
                <div class="row rounded-3 bg-purple">
                    <!-- ============== background image for pc ============= -->
                    <div class="col-lg-6  d-lg-block d-none  bg_apply " data-bgimg="images/alard/banners/1.webp"
                        alt="Unlock your potential at ALARD University now!">
                    </div>
                    <!-- ============== image for mobile ============= -->
                    <div class="col-lg-6 d-lg-none px-0">
                        <img src="images/alard/banners/1.webp" class="unlock_01"
                            alt="Unlock your potential at ALARD University now!" loading="lazy" alt="">
                    </div>

                    <div class="col-lg-6  py-5 px-lg-5">
                        <div class="py-lg-5 text-lg-end">
                            <h2 class=" text-light fw-normal mb-4 display-5 title_01">हम अलग हैं, <br> हम ALARD हैं</h2>
                            <a class="btn c_btn ms-md-4 py-2 px-4 fs-6 fw-bold" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" style="border: 1px solid #fff">Apply Now&nbsp;
                                <i aria-hidden="true" class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------------------------------------------------------------------------------------------------------- -->

        <!--Scholarship-->
        <section id="scholarship" class="py-lg-5 py-sm-5 d-none" style="background-color: #F3F2F4;">
            <div class="container bg-white rounded-3 py-5">
                <!-- Section Title -->
                <div class="row border-bottom justify-content-between align-items-center mb-4">
                    <div class="col-lg-7">
                        <h2 class="text-purple fw-normal mb-4 display-5 title">Scholarships at ALARD University Pune
                        </h2>
                    </div>
                    <div class="col-lg-5 mb-3 mb-lg-0">
                        <h5 class="text-muted text-lg-end subtitle">
                            Explore scholarships designed to empower excellence and support deserving students.
                        </h5>
                    </div>
                </div>

                <!-- Scholarship Section - Mobile -->
                <div class="row d-flex d-lg-none">
                    <?php 
                // Scholarship Data
                $scholarships = [
                    [
                        'title' => "DR. L. R. YADAV CHANCELLOR'S SCHOLARSHIP - A LEGACY OF EXCELLENCE",
                        'details' => [
                            "Top Scholar Award (100% Tuition Fee Waiver)",
                            "High Achievers Scholarship (75% Tuition Fee Waiver)",
                            "Academic Excellence Award (50% Tuition Fee Waiver)"
                        ]
                    ],
                    [
                        'title' => "School-Specific Scholarship (25% Tuition Fee Waiver)",
                        'details' => [
                            "School of Engineering & Technology (Innovators Scholarship) / (Women in Tech Scholarship)",
                            "School of Business Management (Entrepreneurial Spirit Award) / (Young Leaders Scholarship)",
                            "School of Pharmacy (Pharma Research Scholarship) / (Healthcare Service Scholarship)",
                            "School of Design (Creative Excellence Scholarship) / (Design for Change Scholarship)",
                            "School of Health & Biosciences (Future Healthcare Leader Award) / (Bioscience Innovation Scholarship)",
                            "School of Law (Justice for All Scholarship) (Human Rights Advocate Award)",
                            "School of Interdicilinary Research (Research Pioneers Scholarship) / (Knowledge Integration Award)"
                        ]
                        ],
                    [
                        'title' => "PROTSAHAN SCHOLARSHIP (20% Tuition Fee Waiver)",
                        'details' => [
                            "Financial Assistance Scholarship",
                            "Underprivileged Community Scholarship",
                            "Orphan Students"
                            ]
                    ],
                    [
                        'title' => "Special Scholarship (25% Tuition Fee Waiver)",
                        'details' => [
                            "Rakshak Scholarship",
                            "Khel Scholarship",
                            "Dhanyawaad Scholarship",
                            "Vicharo Ki Azadi Scholarship",
                            "Azadi Ki Sangharsh Scholarship"
                        ]
                        ],
                        [
                            'title' => "ALARD University Pune Scholarships for AEST (25% Tuition Fee Waiver)",
                            'details' => []
                        ],
                ];

                // Loop through Scholarships
                foreach ($scholarships as $scholarship) {
            ?>
                    <!-- Scholarship Card -->
                    <div class="col-lg-6 mb-4">
                        <div class="bg-light rounded-3 shadow-sm p-4 h-100">
                            <h4 class="text-purple mb-3"><?= $scholarship['title']; ?></h4>
                            <ul class="">
                                <?php 
                                foreach ($scholarship['details'] as $detail) {
                                    echo "<li>$detail</li>";
                                }
                            ?>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <!-- Scholarship Section - Desktop -->
                <div class="row d-none d-lg-flex">
                    <?php 
                // Scholarship Data
                $scholarships = [
                    [
                        'title' => "DR. L. R. YADAV CHANCELLOR'S SCHOLARSHIP - A LEGACY OF EXCELLENCE",
                        'details' => [
                            "Top Scholar Award (100% Tuition Fee Waiver)",
                            "High Achievers Scholarship (75% Tuition Fee Waiver)",
                            "Academic Excellence Award (50% Tuition Fee Waiver)"
                        ]
                    ],
                    [
                        'title' => "School-Specific Scholarship (25% Tuition Fee Waiver)",
                        'details' => [
                            "School of Engineering & Technology (Innovators Scholarship) / (Women in Tech Scholarship)",
                            "School of Business Management (Entrepreneurial Spirit Award) / (Young Leaders Scholarship)",
                            "School of Pharmacy (Pharma Research Scholarship) / (Healthcare Service Scholarship)",
                            "School of Design (Creative Excellence Scholarship) / (Design for Change Scholarship)",
                            "School of Health & Biosciences (Future Healthcare Leader Award) / (Bioscience Innovation Scholarship)",
                            "School of Law (Justice for All Scholarship) (Human Rights Advocate Award)",
                            "School of Interdicilinary Research (Research Pioneers Scholarship) / (Knowledge Integration Award)"
                        ]
                        ],
                    [
                        'title' => "PROTSAHAN SCHOLARSHIP (20% Tuition Fee Waiver)",
                        'details' => [
                            "Financial Assistance Scholarship",
                            "Underprivileged Community Scholarship",
                            "Orphan Students"
                            ]
                    ],
                    [
                        'title' => "Special Scholarship (25% Tuition Fee Waiver)",
                        'details' => [
                            "Rakshak Scholarship",
                            "Khel Scholarship",
                            "Dhanyawaad Scholarship",
                            "Vicharo Ki Azadi Scholarship",
                            "Azadi Ki Sangharsh Scholarship"
                        ]
                        ],
                        [
                            'title' => "ALARD University Pune Scholarships for AEST (25% Tuition Fee Waiver)",
                            'details' => []
                        ],
                        [
                            'title' => "Early Bird Scholarship (25% Tuition Fee Waiver)",
                            'details' => []
                        ],
                ];

                // Loop through Scholarships
                foreach ($scholarships as $scholarship) {
                ?>
                    <!-- Scholarship Card -->
                    <div class="col-lg-6 mb-4">
                        <div class="bg-light rounded-3 shadow-sm p-4 h-100">
                            <h4 class="text-purple mb-3"><?= $scholarship['title']; ?></h4>
                            <ul class="scholarship-details">
                                <?php 
                                    foreach ($scholarship['details'] as $index => $detail) {
                                        // Display the first three lines by default
                                        $hiddenClass = $index > 2 ? 'd-none' : '';
                                        echo "<li class='$hiddenClass'>$detail</li>";
                                    }
                                ?>
                            </ul>
                            <?php if (count($scholarship['details']) > 3): ?>
                            <!-- View More/Less Button -->
                            <button class="btn btn-link p-0 view-more-btn" onclick="toggleDetails(this)">View
                                More</button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php 
                } 
                ?>
                    <script>
                        function toggleDetails(button) {
                            const details = button.previousElementSibling.querySelectorAll('.d-none');
                            if (details.length > 0) {
                                details.forEach(detail => detail.classList.remove('d-none'));
                                button.textContent = "View Less";
                            } else {
                                const allDetails = button.previousElementSibling.querySelectorAll('li');
                                allDetails.forEach((detail, index) => {
                                    if (index > 2) detail.classList.add('d-none');
                                });
                                button.textContent = "View More";
                            }
                        }
                    </script>

                </div>
            </div>
        </section>




        <!--End-->

        <section class="bg-purple" id="placement">
            <div class="container  pt-5  ">
                <div class="row border-bottom_02 justify-content-end align-items-center">
                    <div class="col-lg-7">
                        <h2 class="text-light fw-normal mb-4 display-5 title">Placement Solutions, <br> Recruiter
                            Excellence
                        </h2>
                    </div>
                    <div class="col-lg-5 mb-3 mb-lg-0">
                        <h5 class="text-light text-lg-end subtitle">Connecting skilled professionals with leading
                            employers through expert recruitment and placement services.
                        </h5>
                    </div>
                </div>
                <div class="row  justify-content-center text-center">
                    <?php
                    $a = array( "50 ", "7 ", "650 ","1000 ");
                    $b = array("Highest Package","Average Package","Companies Visited","Internship Offers");
                    $d = array( "LPA", "LPA", "+","+");
                    $e = array( "1", "2", "3","4");
                    for ($i=0; $i < count($a); $i++) {
                    ?>
                    <div class="col-lg-3 col-6 border_01 pt-4 ">
                        <img src="images/alard/placement/icons/<?= $e[$i];?>.webp" loading="lazy" class="" width="50px"
                            loading="lazy" alt="">
                        <div class=" pb-3">
                            <p class="text-light display-4">
                                <span class=" mb-0 fw-bold text-light counter-value"><?= $a[$i];?></span><?= $d[$i];?>
                            </p>
                            <p class="text-light"><?= $b[$i];?></p>
                        </div>
                    </div>
                    <?php
                    } 
                    ?>
                    <div class="text-white text-end"><p>*Data from AGI</p></div>
                </div>
            </div>
        </section>


        <section class="pt-5">
            <div class="container border-bottom ">
                <div class="row justify-content-center company">
                    <div class="col-lg-7">
                        <h2 class="text-purple fw-normal mb-4 display-5 title text-center">ALARD University partners
                            with top recruiters</h2>
                    </div>
                    <div class="col-md-12 placement_01 py-3 owl-carousel justify-content-center text-center m-auto">
                            <?php
                            
                            $p1 = ["1", "2", "3","4", "5", "6", "7", "8", "9", "10", "11",  "12", "13", "14", "15","16", "17", "18", "19", "20", "21"];
                            for ($i=1; $i < count($p1); $i++) {
                            ?>
                            <div class=" company_01  ">
                                <img src="images/alard/placement/<?= $p1[$i];?>.png" loading="lazy" class=""
                                    alt="Placement Companies">
                            </div>
                            <?php
                            } 
                            ?>
                    </div>

                    <div class="col-md-12 placement_02 py-3 owl-carousel justify-content-center text-center m-auto">
                            <?php
                            $p2 = ["22", "23", "24", "25","26", "27", "28", "29", "30", "31",  "32", "33", "34", "35","26", "37", "38", "39", "40","41", "42"];
                            for ($i=1; $i < count($p2); $i++) {
                            ?>
                            <div class=" company_01  ">
                                <img src="images/alard/placement/<?= $p2[$i];?>.png" loading="lazy" class=""
                                    alt="Placement Companies">
                            </div>
                            <?php
                            } 
                            ?>
                    </div>
                </div>
                <div class="row text-center pt-4">
                    <h1 class="mb-0 alard-text">ALARD University</h1>
                </div>
            </div>
        </section>


        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="life-alard-section py-5" id="gallery">
            <div class="container ">
                <div class="row justify-content-end align-items-center">
                    <div class="col-lg-4">
                        <h2 class="text-purple fw-normal mb-4 display-5 title text-center text-lg-start">Life@ALARD</h2>
                    </div>
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <h5 class="text-mute text-lg-end subtitle">Life at ALARD University Pune, one of the Top
                            universities in Pune, is vibrant, dynamic, and enriching. Our campus is a melting pot of
                            diverse cultures, fostering a welcoming and inclusive environment.</h5>
                    </div>
                </div>
                <div class="row d-none d-lg-block">
                    <div class="owl-carousel gallery_carousel_01">
                        <?php for ($i=1; $i < 23; $i++) {?>
                        <div class="item"><img src="images/alard/gallary/<?= $i++;?>.webp"></div>
                        <?php } ?>
                    </div>
                </div>

                <div
                    class="row gallary_01 pt-lg-4 pb-lg-0 py-4 owl-carousel justify-content-center text-center d-lg-none">
                    <?php for ($i=1; $i < 23; $i++) {?>
                    <div class="mb-4">
                        <div class="rounded-3 py-3">
                            <img src="images/alard/gallary/<?= $i++;?>.webp" loading="lazy" class="w-100 " alt="">
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </section>
        <!-- ------------------------------------------------------------------------------------------------------------------ -->

        <?php include 'footer.php';?>

        <a href="#Program" class="btn c_btn rounded-pill d-md-none px-4 left_button">Programs</a>
        <button type="button" class="btn c_btn  px-4 right_button " data-bs-toggle="modal"
            data-bs-target="#exampleModal">Apply Now</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog p-0">
                <div class="modal-content ">
                    <div class="modal-header">
                        <div class="modalLogo d-flex flex-column justify-content-center align-items-center">
                            <img src="images/alard/logo/3.webp" loading="lazy" alt="">
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <?php include 'form_01.php';?>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript Libraries -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script> -->

        <!-- <script src="js/bootstrap.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
            $('[data-bgimg]').each(function () {
                $(this).css('background-image', 'url(' + $(this).data('bgimg') + ')')
            })
        </script>

        <!--ZOHO UTM SCRIPT TRACKING CODE START -->
        <script type="text/javascript">
            function ZFAdvLead() {}
            ZFAdvLead.utmPValObj = ZFAdvLead.utmPValObj || {};

            ZFAdvLead.utmPNameArr = new Array('utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content');
            ZFAdvLead.utmcustPNameArr = new Array();
            ZFAdvLead.isSameDomian = false;

            ZFAdvLead.prototype.zfautm_sC = function (paramName, path, domain, secure) {
                var value = ZFAdvLead.utmPValObj[paramName];
                if (typeof value !== "undefined" && value !== null) {
                    var cookieStr = paramName + "=" + encodeURIComponent(value);
                    var exdate = new Date();
                    exdate.setDate(exdate.getDate() + 7);
                    cookieStr += "; expires=" + exdate.toGMTString();
                    cookieStr += "; path=/";
                    if (domain) {
                        cookieStr += "; domain=" + encodeURIComponent(domain);
                    }
                    if (secure) {
                        cookieStr += "; secure";
                    }
                    document.cookie = cookieStr;
                }
            };
            ZFAdvLead.prototype.zfautm_ini = function () {
                this.zfautm_bscPCap();
                var url_search = document.location.search;
                for (var i = 0; i < ZFAdvLead.utmcustPNameArr.length; i++) {
                    var zf_pN = ZFAdvLead.utmcustPNameArr[i];
                    var zf_pV;
                    if (zf_pN == 'referrername') {
                        zf_pV = (document.URL || '').slice(0, 1500);
                    } else {
                        zf_pV = this.zfautm_gP(url_search, zf_pN);
                        if (zf_pV == undefined || zf_pV == '') {
                            zf_pV = this.zfautm_gC(zf_pN);
                        }
                    }
                    if (typeof zf_pV !== "undefined" && zf_pV !== null & zf_pV != "") {
                        ZFAdvLead.utmPValObj[zf_pN] = zf_pV;
                    }
                }
                for (var pkey in ZFAdvLead.utmPValObj) {
                    this.zfautm_sC(pkey);
                }
            };
            ZFAdvLead.prototype.zfautm_bscPCap = function () {
                var trafSrc = this.zfautm_calcTrafSrc();
                if (trafSrc.source != "") {
                    ZFAdvLead.utmPValObj.utm_source = trafSrc.source;
                }
                if (trafSrc.medium != "") {
                    ZFAdvLead.utmPValObj.utm_medium = trafSrc.medium;
                }
                if (trafSrc.campaign != "") {
                    ZFAdvLead.utmPValObj.utm_campaign = trafSrc.campaign;
                }
                if (trafSrc.term != "") {
                    ZFAdvLead.utmPValObj.utm_term = trafSrc.term;
                }
                if (trafSrc.content != "") {
                    ZFAdvLead.utmPValObj.utm_content = trafSrc.content;
                }
            }
            ZFAdvLead.prototype.zfautm_calcTrafSrc = function () {
                var u1 = '',
                    u2 = '',
                    u3 = '',
                    u4 = '',
                    u5 = '';
                var search_engines = [
                    ['bing', 'q'],
                    ['google', 'q'],
                    ['yahoo', 'q'],
                    ['baidu', 'q'],
                    ['yandex', 'q'],
                    ['ask', 'q']
                ]; //List of search engines 
                var ref = document.referrer;
                ref = ref.substr(ref.indexOf('//') + 2);
                ref_domain = ref;
                ref_path = '/';
                ref_search = '';

                // Checks for campaign parameters
                var url_search = document.location.search;
                if (url_search.indexOf('utm_source') > -1 || url_search.indexOf('utm_medium') > -1 || url_search
                    .indexOf('utm_campaign') > -1 || url_search.indexOf('utm_term') > -1 || url_search.indexOf(
                        'utm_content') > -1) {
                    u1 = this.zfautm_gP(url_search, 'utm_source');
                    u2 = this.zfautm_gP(url_search, 'utm_medium');
                    u3 = this.zfautm_gP(url_search, 'utm_campaign');
                    u4 = this.zfautm_gP(url_search, 'utm_term');
                    u5 = this.zfautm_gP(url_search, 'utm_content');
                } else if (this.zfautm_gP(url_search, 'gclid')) {
                    u1 = 'Google Ads';
                    u2 = 'cpc';
                    u3 = '(not set)';
                    if (!ZFAdvLead.utmcustPNameArr.includes('gclid')) {
                        ZFAdvLead.utmcustPNameArr.push('gclid');
                    }
                } else if (ref) {
                    var r_u1 = this.zfautm_gC('utm_source');
                    var r_u2 = this.zfautm_gC('utm_medium');
                    var r_u3 = this.zfautm_gC('utm_campaign');
                    var r_u4 = this.zfautm_gC('utm_term');
                    var r_u5 = this.zfautm_gC('utm_content');
                    if (typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" &&
                        typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
                        // separate domain, path and query parameters
                        if (ref.indexOf('/') > -1) {
                            ref_domain = ref.substr(0, ref.indexOf('/'));
                            ref_path = ref.substr(ref.indexOf('/'));
                            if (ref_path.indexOf('?') > -1) {
                                ref_search = ref_path.substr(ref_path.indexOf('?'));
                                ref_path = ref_path.substr(0, ref_path.indexOf('?'));
                            }
                        }
                        u2 = 'referral';
                        u1 = ref_domain;
                        // Extract term for organic source
                        for (var i = 0; i < search_engines.length; i++) {
                            if (ref_domain.indexOf(search_engines[i][0]) > -1) {
                                u2 = 'organic';
                                u1 = search_engines[i][0];
                                u4 = this.zfautm_gP(ref_search, search_engines[i][1]) || '(not provided)';
                                break;
                            }
                        }
                    } else {
                        if (typeof r_u1 !== "undefined") {
                            u1 = r_u1;
                        }
                        if (typeof r_u2 !== "undefined") {
                            u2 = r_u2;
                        }
                        if (typeof r_u3 !== "undefined") {
                            u3 = r_u3;
                        }
                        if (typeof r_u4 !== "undefined") {
                            u4 = r_u4;
                        }
                        if (typeof r_u5 !== "undefined") {
                            u5 = r_u5;
                        }
                    }
                } else {
                    var r_u1 = this.zfautm_gC('utm_source');
                    var r_u2 = this.zfautm_gC('utm_medium');
                    var r_u3 = this.zfautm_gC('utm_campaign');
                    var r_u4 = this.zfautm_gC('utm_term');
                    var r_u5 = this.zfautm_gC('utm_content');
                    if (typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" &&
                        typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
                        var locRef = document.URL;
                        locRef = locRef.substr(locRef.indexOf('//') + 2);
                        if (locRef.indexOf('/') > -1) {
                            locRef = locRef.substr(0, locRef.indexOf('/'));
                        }
                        u1 = locRef;
                        u2 = 'referral';
                    } else {
                        if (typeof r_u1 !== "undefined") {
                            u1 = r_u1;
                        }
                        if (typeof r_u2 !== "undefined") {
                            u2 = r_u2;
                        }
                        if (typeof r_u3 !== "undefined") {
                            u3 = r_u3;
                        }
                        if (typeof r_u4 !== "undefined") {
                            u4 = r_u4;
                        }
                        if (typeof r_u5 !== "undefined") {
                            u5 = r_u5;
                        }
                    }
                }
                return {
                    'source': u1,
                    'medium': u2,
                    'campaign': u3,
                    'term': u4,
                    'content': u5
                };
            }
            ZFAdvLead.prototype.zfautm_gP = function (s, q) {
                try {
                    var match = s.match('[?&]' + q + '=([^&]+)');
                    return match ? decodeURIComponent(match[1]) : '';
                } catch (e) {
                    return '';
                }
            }
            ZFAdvLead.prototype.zfautm_gC = function (cookieName) {
                var cookieArr = document.cookie.split('; ');
                for (var i = 0; i < cookieArr.length; i++) {
                    var cookieVals = cookieArr[i].split('=');
                    if (cookieVals[0] === cookieName && cookieVals[1]) {
                        return decodeURIComponent(cookieVals[1]);
                    }
                }
            };
            ZFAdvLead.prototype.zfautm_gC_enc = function (cookieName) {
                var cookieArr = document.cookie.split('; ');
                for (var i = 0; i < cookieArr.length; i++) {
                    var cookieVals = cookieArr[i].split('=');
                    if (cookieVals[0] === cookieName && cookieVals[1]) {
                        return cookieVals[1];
                    }
                }
            };
            ZFAdvLead.prototype.zfautm_iframeSprt = function () {
                var zf_frame = document.getElementsByTagName("iframe");
                for (var i = 0; i < zf_frame.length; ++i) {
                    if ((zf_frame[i].src).indexOf('formperma') > 0) {
                        var zf_src = zf_frame[i].src;
                        for (var prmIdx = 0; prmIdx < ZFAdvLead.utmPNameArr.length; prmIdx++) {
                            var utmPm = ZFAdvLead.utmPNameArr[prmIdx];
                            utmPm = (ZFAdvLead.isSameDomian && (ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1)) ?
                                "zf_" + utmPm : utmPm;
                            var utmVal = this.zfautm_gC_enc(ZFAdvLead.utmPNameArr[prmIdx]);
                            if (typeof utmVal !== "undefined") {
                                if (utmVal != "") {
                                    if (zf_src.indexOf('?') > 0) {
                                        zf_src = zf_src + '&' + utmPm + '=' + utmVal;
                                    } else {
                                        zf_src = zf_src + '?' + utmPm + '=' + utmVal;
                                    }
                                }
                            }
                        }
                        if (zf_frame[i].src.length < zf_src.length) {
                            zf_frame[i].src = zf_src;
                        }
                    }
                }
            };
            ZFAdvLead.prototype.zfautm_DHtmlSprt = function () {
                var zf_formsArr = document.forms;
                for (var frmInd = 0; frmInd < zf_formsArr.length; frmInd++) {
                    var zf_form_act = zf_formsArr[frmInd].action;
                    if (zf_form_act && zf_form_act.indexOf('formperma') > 0) {
                        for (var prmIdx = 0; prmIdx < ZFAdvLead.utmPNameArr.length; prmIdx++) {
                            var utmPm = ZFAdvLead.utmPNameArr[prmIdx];
                            var utmVal = this.zfautm_gC(ZFAdvLead.utmPNameArr[prmIdx]);
                            if (typeof utmVal !== "undefined") {
                                if (utmVal != "") {
                                    var fieldObj = zf_formsArr[frmInd][utmPm];
                                    if (fieldObj) {
                                        fieldObj.value = utmVal;
                                    }
                                }
                            }
                        }
                    }
                }
            };
            ZFAdvLead.prototype.zfautm_jsEmbedSprt = function (id) {
                document.getElementById('zforms_iframe_id').removeAttribute("onload");
                var jsEmbdFrm = document.getElementById("zforms_iframe_id");
                var embdSrc = jsEmbdFrm.src;
                for (var prmIdx = 0; prmIdx < ZFAdvLead.utmPNameArr.length; prmIdx++) {
                    var utmPm = ZFAdvLead.utmPNameArr[prmIdx];
                    utmPm = (ZFAdvLead.isSameDomian && (ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1)) ? "zf_" +
                        utmPm : utmPm;
                    var utmVal = this.zfautm_gC_enc(ZFAdvLead.utmPNameArr[prmIdx]);
                    if (typeof utmVal !== "undefined") {
                        if (utmVal != "") {
                            if (embdSrc.indexOf('?') > 0) {
                                embdSrc = embdSrc + '&' + utmPm + '=' + utmVal;
                            } else {
                                embdSrc = embdSrc + '?' + utmPm + '=' + utmVal;
                            }
                        }
                    }
                }
                jsEmbdFrm.src = embdSrc;
            };
            var zfutm_zfAdvLead = new ZFAdvLead();
            zfutm_zfAdvLead.zfautm_ini();
            if (document.readyState == "complete") {
                zfutm_zfAdvLead.zfautm_iframeSprt();
                zfutm_zfAdvLead.zfautm_DHtmlSprt();
            } else {
                window.addEventListener('load', function () {
                    zfutm_zfAdvLead.zfautm_iframeSprt();
                    zfutm_zfAdvLead.zfautm_DHtmlSprt();
                }, false);
            }
        </script>
        <!--ZOHO UTM SCRIPT TRACKING CODE END -->

</body>

</html>