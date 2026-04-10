<?php
$testimonials = [
  [
    "id" => 1,
    "image" => "1",
    "short_text" => "Though I joined DPU Dr. D. Y. Patil School of Design (DPUSOD) a bit late, I'm confident it was the right choice. Moving to Maharashtra was tough",
    "full_text" => "Though I joined DPU Dr. D. Y. Patil School of Design (DPUSOD) a bit late, I'm confident it was the right choice. Moving to Maharashtra was tough, but the vibrant campus, artistic decor, and world-class studios make it truly worth it.",
    "name" => "Guntaj Gill",
    "course" => "Fashion Design and Communication",
  ],
  [
    "id" => 2,
    "image" => "2",
    "short_text" => "My Institute experience has been truly enriching and inspiring. The well-equipped infrastructure provides a perfect space for learning and creativity. The faculty is supportive, approachable, and always ready to guide us.",
    "full_text" => "My Institute experience has been truly enriching and inspiring. The well-equipped infrastructure provides a perfect space for learning and creativity. The faculty is supportive, approachable, and always ready to guide us. The campus has a vibrant and positive atmosphere that makes every day enjoyable. Cultural events are actively organized, adding energy and new opportunities beyond academics. Overall, it has been a fulfilling and rewarding journey.",
    "name" => "Saanvi More",
    "course" => "B.Des – Fashion Design & Fashion Communication",
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