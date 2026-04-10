<?php
$testimonials = [
  [
    "id" => 1,
    "image" => "1",
    "short_text" => "The day I surfed about Dr. D. Y. Patil School of Design, I made my mind on it, though I had other opportunities. My decision was quite realistic based on references, visits to campus, speaking to the ",
    "full_text" => "The day I surfed about Dr. D. Y. Patil School of Design, I made my mind on it, though I had other opportunities. My decision was quite realistic based on references, visits to campus, speaking to the faculty, the necessary infrastructure that leads to a conducive learning of any student. The overall environment is really good, friendly faculty, courteous staff and cool ambience to learn. I have been very demanding of tutorship from faculty for knowing more and more and faculty takes it very patiently which allows me to excel in aspirations. To support my learning curve, I have been participating in events held at institute and university level which instils tremendous confidence in me as a person. At the institute, there is a blend for academics, co-curricular and extra-curricular activities. Many workshops, seminars, webinars, frequent industry visits, sports, cultural events, talent display, design summit etc. have been happening and I am sure, we have a lot on cards. ",
    "name" => "Shravani Pawar",
    "course" => "Product Design (Batch 2023 – 27)",
  ],
  [
    "id" => 2,
    "image" => "2",
    "short_text" => "I am Sidharth! I am a student of product design at DPU, Pune’s one of the best design schools! From day 1, I was all high and proud that I'm the best here. But after looking at all the artwork and skills of ",
    "full_text" => "I am Sidharth! I am a student of product design at DPU, Pune’s one of the best design schools! From day 1, I was all high and proud that I'm the best here. But after looking at all the artwork and skills of my batch mates, I was a bit overwhelmed, but it also ignited a fire inside me to work harder and truly be the best of my class. I'm truly grateful for the opportunities I've been given to work on myself every day and be just a step closer to my dream of becoming amongst the best designers. I have had fun experimenting with all these new things. I truly feel that this is a safe space for me to truly explore myself and help me on my little journey to become a great designer. To be honest, I was scared to speak out my concerns to the faculty here at first, but whenever I faced any problems, the non-teaching staff. Life here is truly a fun journey together.",
    "name" => "Sidharth Sasidharan",
    "course" => "Product Design (Batch 2023 – 27)",
  ]
];
?>

<!-- Testimonials Section -->
<section class="pb-5 mb-5" id="success-stories">
    <div class="container rounded-3">

        <h2 class="display-5 mb-3 fw-bold title">Expressions</h2>

        <div class="row testimonals_01 owl-carousel">

            <?php foreach ($testimonials as $item): ?>
                <div class="row gapStudentName py-4 mx-3 p-3 align-items-stretch">
                    <div class="col-lg-8 d-flex ps-lg-3 ps-2 flex-column justify-content-center order-2 order-lg-1">
                        <h5 class="fw-bold mb-0"><?= $item['name']; ?></h5>
                        <p class="mb-3 fw-500"><?= $item['course']; ?></p>
                        
                        <p class="testimonial-text">
                            <?= $item['short_text']; ?>
                            <a href="#" class="fw-bold text-red" data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?= $item['id']; ?>">
                                ... Read More
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 mb-3">
                        <img class="w-100" src="img/students/<?= $item['image']; ?>.png"  alt="">
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>


<!-- Modals -->
<?php foreach ($testimonials as $item): ?>
<div class="modal fade" id="exampleModal<?= $item['id']; ?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p><?= $item['full_text']; ?></p>
                <p class="fw-bold mb-0"><?= $item['name']; ?></p>
                <p class="mb-0"><?= $item['course']; ?></p>
            </div>

        </div>
    </div>
</div>
<?php endforeach; ?>