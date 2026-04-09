<?php
$testimonials = [
  [
    "id" => 1,
    "image" => "1",
    "short_text" => "I am Shivam, a student at DPU School of Design, Pune. I like the classrooms with textured walls, vibrant colours, hi-tech learning gadgets, learning infrastructure and amenities. For me colours give us ",
    "full_text" => "I am Shivam, a student at DPU School of Design, Pune. I like the classrooms with textured walls, vibrant colours, hi-tech learning gadgets, learning infrastructure and amenities. For me colours give us different vibes and a fresh look on the wall. For me, cafeteria, hostel life is also important as during my breaks, I will be found in either place. Curriculum is really well designed. I am happy that DPU has a well-crafted curriculum which describes how students will progress every year for the IV years. At DPU school of Design there is a programme outcome planned for every student according to their specialization which I have not seen anywhere while I took my decision to join DPU.",
    "name" => "Shivam Yadav",
    "course" => "Graphics Animation & Vfx (Batch: 2023 – 27)",
  ],
  [
    "id" => 2,
    "image" => "2",
    "short_text" => "Hi! I am Rishabh Chandra, a student pursuing Graphics Animation & Vfx. It has been a good journey with my learning and extra-curricular activities. To mention about the learning, I wish to emphasize ",
    "full_text" => "Hi! I am Rishabh Chandra, a student pursuing Graphics Animation & Vfx. It has been a good journey with my learning and extra-curricular activities. To mention about the learning, I wish to emphasize on the workshops and seminars held on campus where we could meet and interact with the industry and professors who gave us inputs in practical manner right from our first semester. Learning became simpler as we could relate and practice what is taught to us and presented by the industry professionals and professors from the leading design institutes. Life here is good because we get to participate in various events and gain exposure. Somewhere, we were pushed to be a part of the events which directly or indirectly developed us to be a better team and leaders too. I understood the importance of time, decision making, problem solving, hard work and continuous participation makes us better and better. I enjoy my days at Dr. D. Y. Patil School of Design and look forward to even more!",
    "name" => "Rishabh Chandra",
    "course" => "Graphics Animation & Vfx (Batch: 2023 – 27)",
  ],
  [
    "id" => 3,
    "image" => "3",
    "short_text" => "I chose Dr. D. Y. Patil School of Design because of its reputation, curriculum and faculty in the field of Graphics, Animation and Vfx (GAVFX). So far, the learning has been more than I thought. Courses, labs,",
    "full_text" => "I chose Dr. D. Y. Patil School of Design because of its reputation, curriculum and faculty in the field of Graphics, Animation and Vfx (GAVFX). So far, the learning has been more than I thought. Courses, labs, workshops, seminars, internships and study tours to studios have been scheduled every semester as a part of curriculum. I have been a part of Business club and Drama, which has also developed me on social skills, interpersonal skills, team skills. I have been more disciplined and matured. While I learnt about GAVFX, I discovered my passion is in Animation. I am proud to be a student of Dr. D. Y. Patil Vidyapeeth | School of Design, Pune.",
    "name" => "Sachi Y. Bhalgat",
    "course" => "Graphics Animation & Vfx (Batch: 2023 – 27)",
  ],
  [
    "id" => 4,
    "image" => "4",
    "short_text" => "Hi! I am Aniket! Pursuing my Graphics, Animation & Vfx programme from Dr. D. Y. Patil School of Design, Pune. There is a lot to talk about. Like other institutes, I believe, our institute is one of the",
    "full_text" => "Hi! I am Aniket! Pursuing my Graphics, Animation & Vfx programme from Dr. D. Y. Patil School of Design, Pune. There is a lot to talk about. Like other institutes, I believe, our institute is one of the best amongst the design schools in Pune. From studies and sessions to engaging in activities, I have had enough exposure to explore subjects and develop life skills. I already have friends and after coming here, the directory has increased with best buddies. We are moulded and trained to think and perform like a professional in one’s own field. Institute works on our overall development including communication, grooming, corporate etiquettes and mannerism, team skills, behavioural skills, social sensitivity, apart from technical skills and I am sure we will be groomed to aspire for being a successful entrepreneur of tomorrow. Institute invests in us, but we have to be committed, do the hard work and practice every day to earn a better life.",
    "name" => "Aniket Indure",
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