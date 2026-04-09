<?php
$testimonials = [
  [
    "id" => 1,
    "image" => "1",
    "name" => "Prachi Bhalgat",
    "short_text" => "Hi! I am Prachi! I am a student of interior design.<br> I wish to thank all my faculty, staff, seniors, peers, who are taking immense efforts on our development. ",
    "full_text" => "Hi! I am Prachi! I am a student of interior design.<br> I wish to thank all my faculty, staff, seniors, peers, who are taking immense efforts on our development.  Going through foundation year, I had an impression that I am learning design or basics of drawing, sketching, maths, formulas etc. When we started with some industry guest lectures, I got to understand the importance of learning the fundamental principles and elements of design, without which we cannot move to the next level. Our HOD invested the time and energy to make us understand that concentration, basics and creativity always go along together to achieve perfection. So “APT”. <br> Sessions, guest lectures, study tours, assignments and other areas almost everyone may have expressed, but I thought I should let you know that I have changed and become more serious about my aspirations in life.<br> I also have enough friends to share and gain insights here and that also counts in my learning curve.",
    "course" => "Interior Design"
  ],
  [
    "id" => 2,
    "image" => "2",
    "name" => "Aryan Jangid",
    "short_text" => "Dr. D. Y. Patil School of Design offers a blend of academic excellence and lively atmosphere. The classrooms are dynamic spaces where learning transcends traditional ",
    "full_text" => "Dr. D. Y. Patil School of Design offers a blend of academic excellence and lively atmosphere. The classrooms are dynamic spaces where learning transcends traditional boundaries and much about interior sources. Faculty resources are not just appointed for subject delivery but they inspire us every time. Beyond the academic realm, the college organizes enriching trips which add a dash of adventure to our educational journey. We have many events and occasions throughout the year to be relished. Diversity of students adds a colourful dimension to the campus making every interaction an opportunity to broaden one’s perspective. I feel great to be a part of Dr. D. Y. Patil School of Design. It is a place to be at.",
    "course" => "Interior Design"
  ],
  [
    "id" => 3,
    "image" => "3",
    "name" => "Rutuja Sanap,",
    "short_text" => "Happy to be a student of Interior Design at Dr. D. Y. Patil School of Design one of the best institutes in interior design in Pune. Here theory and projects & assignments",
    "full_text" => "Happy to be a student of Interior Design at Dr. D. Y. Patil School of Design one of the best institutes in interior design in Pune. Here theory and projects & assignments are well balanced, as I expected, the co-curricular activities are given more importance. Study-tours, industry visits, assignments, pep-talks from the industry folks are scheduled to enlighten us on the industry expectations. I knew that I wanted to get into design; now I am more confident and fundamentally strong as faculty focus on us individually. Importance and ability of an Open Mind is something I explore here. Days are fun-filled along with loads of assignments and evenings across the campus are more happening.",
    "course" => "Interior Design"
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