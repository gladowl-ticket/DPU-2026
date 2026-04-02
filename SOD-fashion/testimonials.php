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
    "short_text" => "I am a Visual Communication Design aspirant, and I value this institute's rigorous curriculum, interactive sessions, and inspiring faculty that make learning ",
    "full_text" => "I am a Visual Communication Design aspirant, and I value this institute's rigorous curriculum, interactive sessions, and inspiring faculty that make learning engaging and joyful.",
    "name" => "Swapnangana Senapati",
    "course" => "Communication Design",
  ],
  [
    "id" => 3,
    "image" => "3",
    "short_text" => "I'm a Product Design student at DPUSOD,  confident of excelling with the top-notch  tools, resources, and hands-on exposure.  Regular industry visits, guest ",
    "full_text" => "I'm a Product Design student at DPUSOD, confident of excelling with the top-notch tools, resources, and hands-on exposure. Regular industry visits, guest sessions, and portfolio development each semester keep me career-ready and growing. ",
    "name" => "Aarush Nagvekar",
    "course" => "Product Design",
  ],
  [
    "id" => 4,
    "image" => "4",
    "short_text" => " DPUSOD is a vibrant, professional space to explore design-no blackboards, just smar boards and cozy, aesthetic learning areas With celebrations year-roun.",
    "full_text" => " DPUSOD is a vibrant, professional space to explore design-no blackboards, just smar boards and cozy, aesthetic learning areas With celebrations year-round, every day here feels special.",
    "name" => "Rishika Dubey",
    "course" => "Interior Spatial and Furniture Design",
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
                        <img class="w-100" src="img/students/<?= $item['image']; ?>.jpg"  alt="">
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