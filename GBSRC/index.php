<?php
  include 'link.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dy Patil Pune MBA Placement: Best MBA University in Pune</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content=""
        name="keywords">
    <meta
        content=""
        name="description">

    <!-- Favicon -->
    <link href="images/logo/favicon.ico" loading="lazy" rel="icon">

    <link rel="preload" as="image" href="images/hero/1.jpg" type="image/webp">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="preload" as="image" href="images/hero/1.jpg" />



</head>

<body>

    <!-- ======================================================================================================= -->
    <div class="container-fluid h_nav px-lg-5 sticky-top">
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg  navbar-light p-lg-0">
                <a href="" class="navbar-brand">
                    <img src="images/logo/1.png" class="hero_logo_01" loading="lazy"
                        alt="">
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
                        <a href="#gallery" class="nav-item nav-link">Life@DPU</a>
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
            <img src="images/hero/1.jpg" class="img-fluid" alt="Alard University Legacy In Education since 1999">
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
                    <img src="images/hero/1.jpg" alt="Hero Image" class="hero_mobile" />
                </div>
            </div>
        </section>

        <!---USP start--->
        <section class="px-lg-5 pt-2  ">
            <div class="container px-lg-0">
                <div class="row justify-content-center pt-3 mb-4">
                    <?php
                    $b = array("Highest CTC (LPA)", "Average CTC (LPA)", "Highest stipend per month (Internship)", "Placements");
                    $c = array( "21LPA ", "7", "30,000", "86.61%");

                    for ($i=0; $i < count($b); $i++) {
                ?>
                    <div class="col-lg-3 col-6 mb-4 mb-lg-1 d-grid ">
                        <div class="d-flex align-items-stretch   usp_01 bg-red">
                            <div class=" ps-3">
                                <h6 class=" rank text-light fw-bold pb-4 "><?= $c[$i]; ?></h6>
                                <p class="text-light h6"><?= $b[$i]; ?></p>
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
                                    <h2 class="text-red fw-normal mb-lg-3 mb-0 display-5 title">About Global Business School and Research Centre</h2>
                                </div>
                                <div class="col-lg-5 mb-0 ">
                                    <h5 class="text-mute text-lg-end subtitle"></h5>
                                </div>
                            </div>
                            <p align="justify" class="pt-3">Global Business School & Research Centre (GBSRC) situated at Tathawade, Pune is the flagship institute of Dr. D. Y. Patil Vidyapeeth, Pune. It was established in 2006. In a span of 19 years, the Institute has carved a name for itself amongst the top business schools of the country. <br> The idea of setting up this Institute is to offer ‘Management Education’ to aspiring leaders of tomorrow. From this institute, students can pursue their graduate, under graduate and Ph. D. programs in management. GBSRC offers 2 years full time MBA program which is approved by AICTE, Government of India, New Delhi. It also offers 3 years full time BBA program and Ph. D. progamme in management. <br> The main mission of DPU is to groom students who can turn into intelligent leaders. After they pass out of the Institute, they in turn will be able to source information from diverse resources and administer it for the benefit of business and society at large.
                         </p>
                        </div>
                        <div class="row pe-lg-5 mt-md-5 mt-3  justify-content-lg-end justify-content-center">
                            <div class="col-lg-12 ">
                                <h2 class="text-red fw-normal mb-4 display-6 title">Awards & Achievements </h2>
                            </div>

                            <div
                                class="row awards_01 pt-lg-4 pb-lg-0 py-4 owl-carousel justify-content-center text-center">
                                <?php
                                for ($i=1; $i < 5; $i++) {
                                ?>
                                    <div class="rounded-3 py-3 border box_shadow mx-3">
                                        <img src="images/awards/<?= $i++;?>.png" loading="lazy"
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
                                <img src="images/logo/1.png" loading="lazy" alt="">
                            </div>
                            <h4 class="border-red_01">Admissions Open 2026-27</h4>
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
                        <h2 class="text-red fw-normal mb-4 display-5 title">Your Path to Success: Program Highlights
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
            "text_class" => "text-red",
            "box_class" => "box_003"
        ],
        [
            "img" => "3",
            "title" => "Modern Infrastructure & Research-Oriented  Ecosystem",
            "text_class" => "text-red",
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
            "text_class" => "text-red",
            "box_class" => "box_003"
        ],
        [
            "img" => "7",
            "title" => "Active Student Clubs, Events, and Leadership Opportunities",
            "text_class" => "text-red",
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
                                        <img src="images/highlights/<?= $item['img']; ?>.webp" loading="lazy"
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
                        data-bgimg="images/highlights/g1.webp">
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
                <div class="row rounded-3 bg-yellow">
                    <!-- ============== background image for pc ============= -->
                    <div class="col-lg-6  d-lg-block d-none  bg_apply " data-bgimg="images/banners/1.webp"
                        alt="">
                    </div>
                    <!-- ============== image for mobile ============= -->
                    <div class="col-lg-6 d-lg-none px-0">
                        <img src="images/banners/1.webp" class="unlock_01"
                            alt="" loading="lazy" alt="">
                    </div>

                    <div class="col-lg-6  py-5 px-lg-5">
                        <div class="py-lg-5 text-lg-end">
                            <h2 class=" text-light fw-normal mb-4 display-5 title_01">Lorem ipsum dolor, sit amet  <br>consectetur adipisicing elit. Quod lab</h2>
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
                        <h2 class="text-red fw-normal mb-4 display-5 title">Scholarships at ALARD University Pune
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
                            <h4 class="text-red mb-3"><?= $scholarship['title']; ?></h4>
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
                            <h4 class="text-red mb-3"><?= $scholarship['title']; ?></h4>
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

        <section class="bg-red" id="placement">
            <div class="container  pt-5  ">
                <div class="row border-bottom_02 justify-content-end align-items-center">
                    <div class="col-lg-7">
                        <h2 class="text-light fw-normal mb-4 display-5 title">Placement Solutions, <br> Recruiter
                            Excellence
                        </h2>
                    </div>
                    <div class="col-lg-5 mb-3 mb-lg-0">
                        <h5 class="text-light text-lg-end subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam nihil odio adipisci, non sit maxime obcaecati</h5>
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
                        <img src="images/placement/icons/<?= $e[$i];?>.webp" loading="lazy" class="" width="50px"
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
                        <h2 class="text-red fw-normal mb-4 display-5 title text-center">Partners with top recruiters</h2>
                    </div>
                    <div class="col-md-12 placement_01 py-3 owl-carousel justify-content-center text-center m-auto">
                            <?php
                            
                            $p1 = ["1", "2", "3","4", "5", "6", "7", "8", "9", "10", "11",  "12", "13", "14", "15"];
                            for ($i=1; $i < count($p1); $i++) {
                            ?>
                            <div class=" company_01  ">
                                <img src="images/placement/<?= $p1[$i];?>.png" loading="lazy" class=""
                                    alt="">
                            </div>
                            <?php
                            } 
                            ?>
                    </div>

                    <div class="col-md-12 placement_02 py-3 owl-carousel justify-content-center text-center m-auto">
                            <?php
                            $p2 = ["16", "17", "18", "19", "20", "21","22", "23", "24", "25","26", "27", "28", "29", "30"];
                            for ($i=1; $i < count($p2); $i++) {
                            ?>
                            <div class=" company_01  ">
                                <img src="images/placement/<?= $p2[$i];?>.png" loading="lazy" class=""
                                    alt="">
                            </div>
                            <?php
                            } 
                            ?>
                    </div>
                </div>
                <div class="row text-center pt-4">
                    <h1 class="mb-0 university-text">Dr. D.Y. Patil Vidyapeeth, Pune</h1>
                </div>
            </div>
        </section>


        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <section class="life-alard-section py-5" id="gallery">
            <div class="container ">
                <div class="row justify-content-end align-items-center">
                    <div class="col-lg-4">
                        <h2 class="text-red fw-normal mb-4 display-5 title text-center text-lg-start">Life@DPU</h2>
                    </div>
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <h5 class="text-mute text-lg-end subtitle">Life at ALARD University Pune, one of the Top
                            universities in Pune, is vibrant, dynamic, and enriching. Our campus is a melting pot of
                            diverse cultures, fostering a welcoming and inclusive environment.</h5>
                    </div>
                </div>
                <div class="row d-none d-lg-block">
                    <div class="owl-carousel gallery_carousel_01">
                        <?php for ($i=1; $i < 3; $i++) {?>
                        <div class="item"><img src="images/gallary/<?= $i++;?>.jpg"></div>
                        <?php } ?>
                    </div>
                </div>

                <div
                    class="row gallary_01 pt-lg-4 pb-lg-0 py-4 owl-carousel justify-content-center text-center d-lg-none">
                    <?php for ($i=1; $i < 3; $i++) {?>
                    <div class="mb-4">
                        <div class="rounded-3 py-3">
                            <img src="images/gallary/<?= $i++;?>.jpg" loading="lazy" class="w-100 " alt="">
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
                            <img src="images/logo/1.png" loading="lazy" alt="">
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
        <script src="js/zoho.js"></script>
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


</body>

</html>