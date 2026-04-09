<?php

$testimonials = [
  [
    "id" => 1,
    "image" => "1",
    "name" => "Avni Baroliya",
    "short_text" => "I feel glad to be a student of Dr. D. Y. Patil School of Design, known for its quality in design education. It's a fun and serious affair moving from foundation towards the second year.",
    "full_text" => "I feel glad to be a student of Dr. D. Y. Patil School of Design, known for its quality in design education. It's a fun and serious affair moving from foundation towards the second year. Here, assignments begin from the induction itself to understand our psyche and areas to improve in the forthcoming sessions. Faculty hand-holds in every single situation and encourages one-on-one individually. It's never taxing for me as there is enough excitement on campus to take care of tiresome days. Learning here becomes interesting as weekends are scheduled with amazing sessions with industry experts at Dr. D. Y. Patil School of Design. I am happy that I have chosen Communication Design and look forward to be in media.",
    "course" => "Communication Design"
  ],
  [
    "id" => 2,
    "image" => "2",
    "name" => "Muskan Katre,",
    "short_text" => "Hi! I am a student of communication design at DPU. Winning the title of “Miss Fresher’s” marked a turning point in my experience. It has not only boosted my confidence but also served as a motivating force to ",
    "full_text" => "Hi! I am a student of communication design at DPU. Winning the title of “Miss Fresher’s” marked a turning point in my experience. It has not only boosted my confidence but also served as a motivating force to excel in my endeavours. Dr. D. Y. Patil School of Design (DPUSOD) has been curating my skills comprehensively. From academic excellence to personal development, every aspect of my journey has seen significant improvement. I have realised, it is important not only to excel in their respective streams but also remain open to learning new things and gaining diverse experiences. One standout feature of my college experience has been the exposure to real-world scenarios through studio visits. These experiences have provided a practical dimension to our theoretical knowledge, bridging the gap between academics and industry. I am a proud student of DPU School of Design!",
    "course" => "Communication Design"
  ],
  [
    "id" => 3,
    "image" => "3",
    "name" => "Soumili Debnath",
    "short_text" => "Hi! I am Soumili Debnath, a student of Communication Design. The moment I realized that I am a future designer, I was serious about my expectations from the institute that I would choose for my B. ",
    "full_text" => "Hi! I am Soumili Debnath, a student of Communication Design. The moment I realized that I am a future designer, I was serious about my expectations from the institute that I would choose for my B. Des. The design field is quite different from the rest for the ones who are creative thinkers. Improvising every day is to hone and nurture your skills and drive your passion to achieve goals.<br> At Dr. D. Y. Patil School of Design, the system and mentors believe in a learner-centric approach to create a soothing learning environment. The day's progress is such that the theory is followed by assignments on the floor and in the hostel rooms too. I am learning the importance of time and delivery equations from day one. Hard work becomes fun, when we get passionate about what we do. <br> Thanks to faculty, staff, mentors, buddies and industry!",
    "course" => "Communication Design"
  ]
];
?>

<!-- Testimonials Section -->
<section class="pb-5" id="success-stories">
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