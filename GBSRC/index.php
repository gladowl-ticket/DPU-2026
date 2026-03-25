<?php
  include 'link.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Top MBA Colleges in Pune | Dr. D.Y. Patil Vidyapeeth, Pune. MBA Placement</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="images/logo/favicon.ico" loading="lazy" rel="icon">

    <link rel="preload" as="image" href="images/hero/1.png" type="image/webp">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="preload" as="image" href="images/hero/1.png" />



</head>

<body>

    <!-- ======================================================================================================= -->
    <div class="container-fluid h_nav px-lg-5 sticky-top">
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg  navbar-light p-lg-0">
                <a href="" class="navbar-brand">
                    <img src="images/logo/1.png" class="hero_logo_01" loading="lazy" alt="">
                </a>
                <button type="button" class="navbar-toggler fs_13 me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="#about-us" class="nav-item nav-link">About Us</a>
                        <a href="#Program" class="nav-item nav-link">Program Offered</a>
                        <a href="#recruiters" class="nav-item nav-link">Recruiters</a>
                        <a href="#success-stories" class="nav-item nav-link">Success Stories</a>
                        <a href="#gallery" class="nav-item nav-link">Life@DPU</a>
                        <a href="#why-choose" class="nav-item nav-link">Why Choose Us?</a>
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

        <section class="hero_section px-0 bg-gradient01 d-none d-lg-block" data-bs-toggle="modal"
            data-bs-target="#exampleModal">

            <div class="container py-4">
                <div class="row justify-content-end">
                    <div class="col-lg-8 ">
                        <img src="images/hero/1.png" class="w-100">
                        <div class="row justify-content-center">
                            <?php
                                $a = array( "1", "2", "3", "4");
                                $b = array("Highest CTC", "Average CTC", "Highest stipend per month (Internship)", "Placements");
                                $c = array( "21LPA ", "7LPA", "30,000", "86.61%");

                                for ($i=0; $i < count($b); $i++) {
                                ?>
                            <div class="col-lg-3 col-6 d-grid mt-4">
                                <div class="d-flex align-items-stretch  justify-content-center  usp_01 bg-red">
                                    <div class="text-center">
                                        <h6 class="text-light fw-bold py-2 mb-0 h1 "><?= $c[$i]; ?></h6>
                                        <p class="text-light pb-0"><?= $b[$i]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                }
                                ?>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="border rounded-3 text-center bg-white pt-3">
                            <h4 class="">Admissions Open 2026-27</h4>
                            <?php
                         include 'form_01.php'
                         ;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Mobile Hero ---------------------------------------------------------------------------------------------------- -->
        <section class=" d-lg-none d-block position-relative hero_section bg-gradient01 mb-5" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <div class="container">
                <div class="row ">
                    <img src="images/hero/01.png" class="hero_img_mobile">
                    <div class="col-lg-4 pt-4">
                        <div class="border rounded-3 text-center bg-white pt-3">
                            <h4 class="border-red_01">Admissions Open 2026-27</h4>
                            <?php
                         include 'form_01.php'
                         ;?>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                            <?php
                                $a = array( "1", "2", "3", "4");
                                $b = array("Highest CTC", "Average CTC", "Highest stipend per month (Internship)", "Placements");
                                $c = array( "21LPA ", "7LPA", "30,000", "86.61%");

                                for ($i=0; $i < count($b); $i++) {
                                ?>
                            <div class="col-lg-3 col-6 d-grid mt-4">
                                <div class="d-flex align-items-stretch  justify-content-center  usp_01 bg-red">
                                    <div class="text-center">
                                        <h6 class="text-light fw-bold py-2 mb-0 h1 "><?= $c[$i]; ?></h6>
                                        <p class="text-light pb-0"><?= $b[$i]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                }
                                ?>
                        </div>
            </div>
        </section>

        <!-- ---------------------------------------------------------------------------------------------------- -->

        <section class="" id="about-us">
            <div class="container bg-white  rounded-3 py-5">
                <div class="row  py-4 px-3">
                    <div class="col-12 align-items-center border-bottom_01">
                        <div class="col-lg-12 ">
                            <h2 class="text-red fw-normal mb-lg-3 mb-0 display-5 title">About Global Business School and
                                Research Centre</h2>
                        </div>
                    </div>
                    <p align="justify" class="pt-3">Global Business School & Research Centre (GBSRC) situated at
                        Tathawade, Pune is the flagship institute of Dr. D. Y. Patil Vidyapeeth, Pune. It was
                        established in 2006. In a span of 19 years, the Institute has carved a name for itself amongst
                        the top business schools of the country. <br> The idea of setting up this Institute is to offer
                        ‘Management Education’ to aspiring leaders of tomorrow. From this institute, students can pursue
                        their graduate, under graduate and Ph. D. programs in management. GBSRC offers 2 years full time
                        MBA program which is approved by AICTE, Government of India, New Delhi. It also offers 3 years
                        full time BBA program and Ph. D. programme in management. <br> The main mission of DPU is to
                        groom students who can turn into intelligent leaders. After they pass out of the Institute, they
                        in turn will be able to source information from diverse resources and administer it for the
                        benefit of business and society at large.
                    </p>
                </div>
                <div class="row  py-4 px-3 mt-3  justify-content-lg-end justify-content-center">
                    <div class="col-lg-12 ">
                        <h2 class="text-red fw-normal display-6 title">Awards & Achievements </h2>
                    </div>

                    <div
                        class="col-lg-12 awards_01 py-4 owl-carousel justify-content-center text-center">
                        <?php
                                for ($i=0; $i < 4; $i++) {
                                ?>
                        <div class="rounded-3 py-3 border box_shadow mx-lg-3 mx-2">
                            <img src="images/awards/<?= $i+1;?>.jpg" loading="lazy" class="w-100" alt="">
                        </div>
                        <?php
                                } 
                                ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class="py-lg-5 pb-5 " id="Program">
            <?php include 'program.php';?>
        </section>



        <!-- recruiters----------------------------------------------------------------------------------------------------------- -->
        <section class="mb-5 " id="recruiters">
            <div class="container border-bottom bg-white py-5">
                <div class="row justify-content-center company">
                    <div class="col-lg-7">
                        <h2 class="text-red fw-normal mb-4 display-5 title text-center">Partners With Top Recruiters
                        </h2>
                    </div>
                    <div class="col-md-12 placement_01 py-3 owl-carousel justify-content-center text-center m-auto">
                        <?php
                            
                            $p1 = ["1", "2", "3","4", "5", "6", "7", "8", "9", "10", "11",  "12", "13", "14", "15"];
                            for ($i=1; $i < count($p1); $i++) {
                            ?>
                        <div class=" company_01  ">
                            <img src="images/placement/<?= $p1[$i];?>.png" loading="lazy" class="" alt="">
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
                            <img src="images/placement/<?= $p2[$i];?>.png" loading="lazy" class="" alt="">
                        </div>
                        <?php
                            } 
                            ?>
                    </div>
                </div>
            </div>
        </section>


        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <?php include 'test.php';?>
        <!-- ----------------------------------------------------------------------------------------------------------- -->


        <!--Life@DPU ------------------------------------------------------------------------------------------------------------------ -->
        <section class="life-section pt-5" id="gallery">
            <div class="container ">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-4">
                        <h2 class="text-red fw-normal mb-2 display-5 title text-center">Life@DPU</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel gallery_carousel_01 py-4">
                        <?php for ($i=0; $i < 8; $i++) {?>
                        <div class="item"><img src="images/gallary/<?= $i+1;?>.webp" class="gallery-img01"></div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </section>

        <!-- WHY---------------------------------------------------------------------------------------------------- -->
        <section class="pb-5 bg-grey01  why_01" id="why-choose">
            <div class="container" id="why-choose-us">
                <div class="row  justify-content-center">
                    <div class="col-lg-12 text-center mb-4">
                        <h2 class="text-red fw-normal display-5 title text-center">Why Choose Us?</h2>
                        <h5 class="text-mute text-center subtitle">At GBSRC, we don't just prepare students for jobs. We
                            prepare them for life - as leaders, innovators, and changemakers.</h5>
                    </div>
                </div>
                <div class="row align-item-center justify-content-between">
                    <div class="col-lg-6 ">
                        <img src="images/why/01.png" loading="lazy" class="w-100 mb-3 mb-lg-0 rounded" alt="">
                    </div>
                    <div class="col-lg-6 d-flex gap-2 flex-column justify-content-between">

                        <?php 
                            $whyData = [
                            ["img" => "1", "text" => "Experienced Faculty"],
                            ["img" => "2", "text" => "Strong Corporate Partnerships"],
                            ["img" => "3", "text" => "Vibrant Campus Life"],
                            ["img" => "4", "text" => "Practical Learning"],
                            ["img" => "5", "text" => "Student-Centric Culture"],
                            ];
                            foreach($whyData as $index => $item): ?>

                        <div class="border why_02 position-relative">
                            <div class="d-flex align-items-center bg-white">

                                <div class="p-2 choose_us_sect position-relative">
                                    <img src="images/why/<?= $item['img']; ?>.png" alt="">
                                </div>

                                <p class="ps-3 mb-0 fs-6">
                                    <?= $item['text']; ?>
                                </p>

                            </div>
                        </div>

                        <?php endforeach; ?>

                    </div>
                </div>
        </section>

        <!--CTA ------------------------------------------------------------------------------------------------------------------ -->
        <section class="bg-white pt-lg-3 ">
            <div class="container">
                <div class="row  bg-img-01  py-5" data-bgimg="images/cta/1.png">
                    <div class="col-lg-8">
                        <div class="mb-4">
                            <h3 class=" text-red display-6">Begin Your Journey To Success With Dr. D.Y. Patil
                                Vidyapeeth, Pune.</h3>
                        </div>
                        <button class="btn c_btn py-2 px-4 rounded-pill" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Apply Now</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------------------------------------------------------------------------------------------------------ -->
        <?php include 'footer.php';?>

        <a href="#Program" class="btn c_btn rounded-pill d-md-none px-4 left_button">Programs</a>
        <button type="button" class="btn c_btn  px-4 right_button d-lg-none " data-bs-toggle="modal"
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

        <!-- <script src="js/bootstrap.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
            $('[data-bgimg]').each(function () {
                $(this).css('background-image', 'url(' + $(this).data('bgimg') + ')')
            })
        </script>

        <script>
           // Testimonials -----------------------------
    $(document).ready(function () {

    // Character limit
    var maxLength = 180;

    $(".testimonial-text").each(function () {
        var fullText = $(this).html().trim();

        if (fullText.length > maxLength) {
            var visibleText = fullText.substring(0, maxLength);
            var hiddenText = fullText.substring(maxLength);

            var html = `
                ${visibleText}
                <span class="more-text" style="display:none;">${hiddenText}</span>
                <a href="javascript:void(0);" class="read-more-btn testimonial_read_more fw-bold">... Read More</a>
            `;

            $(this).html(html);
        }
    });

    // Read More Read Less Toggle
    $(document).on("click", ".read-more-btn", function () {
        var moreText = $(this).prev(".more-text");

        if (moreText.is(":visible")) {
            moreText.hide();
            $(this).text("... Read More");
        } else {
            moreText.show();
            $(this).text(" Read Less");
        }
    });

}); 
        </script>


</body>

</html>