<?php
include 'data.php';
?>


<div class="container center_tagline  bg-white rounded-3 pt-lg-5  mt-3 py-4 mt-md-0">
    <div class="row align-items-center d-md-flex d-none">
        <div class="col-md-3">
            <h2 class=" mb-4 display-5 text-purple title">35+ Industry <br>Centred Programs</h2>
        </div>
        <div class="col-md-9 specilization_tab">
            <ul class="row nav nav-pills" id="pills-tab" role="tablist">
                <li class="col px-3 position-relative nav-item my-3 my-lg-0" role="presentation">
                    <button class="nav-link red_act active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true" onclick="diplomaFunction()">Undergraduate</button>
                </li>
                <li class="col  my-3 my-lg-0 nav-item position-relative" role="presentation">
                    <button class="nav-link red_act " id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Postgraduate</button>
                </li>

                <li class="col nav-item position-relative" role="presentation">
                    <button class="nav-link red_act" id="pills-phd-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-phd" type="button" role="tab" aria-controls="pills-phd"
                        aria-selected="false" onclick="doctorateFunction()">Doctorate</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="admission tab-content ChildTabContent d-md-block d-none" id="pills-tabContent">
        <div class="tab-pane  fade   show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row pt-5">
                <ul class="nav nav-pills mb-3" id="pills-tab-1" role="tablist">
                    <?php 
                        foreach ($ug as $tab => $data):
                            $first = true; // Set the flag to false after the first iteration
                            ?>
                    <div class="col-md-6 col-lg-3 mb-4 d-grid">
                        <li class="nav-item d-grid px-3" role="presentation">
                            <button
                                class="nav-link border rounded-3 px-3 py-5 redirect-button <?= ($data['id'] === "ugTab1") ? 'active' : ''; ?>"
                                id="<?= $data['id']; ?>" data-bs-toggle="pill"
                                data-bs-target="#<?= $data['targetId']; ?>" type="button" role="tab"
                                aria-controls="<?= $data['targetId']; ?>"
                                aria-selected="<?= $first ? 'true' : 'false'; ?>">
                                <div class=" program_01">
                                    <div class="d-flex align-items-center">
                                        <img src="images/program/ug/<?= $data['imgSrc']; ?>.png" class="icon"
                                            loading="lazy" alt="<?= $data['course']; ?>">
                                        <span class="mb-0 ps-3"><?= $data['course']; ?></span>
                                        <i class="bi bi-arrow-right px-3 arrow d-none"></i>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </div>
                    <?php 
                        $first = false; // Set the flag to false after the first iteration
                        endforeach; ?>
                </ul>

                <!-- Tab Content -->
                <div id="subChildUG"></div>
                <div class="tab-content" id="pills-tabContent-1">
                    <?php foreach ($ug as $tabKey => $data) { ?>
                    <div class="tab-pane fade <?= $data['id'] === 'ugTab1' ? 'show active' : ''; ?>"
                        id="<?= $data['targetId']; ?>" role="tabpanel" aria-labelledby="<?= $data['id']; ?>">
                        <!-- Content for <?= $data['course']; ?> -->
                        <div class="row">
                            <h2><?= $data['course']; ?></h2>

                            <div class="accordion" id="accordion-<?= $data['id']; ?>">
                                <!-- Overview -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-<?= $data['id']; ?>-1" aria-expanded="true"
                                            aria-controls="collapse-<?= $data['id']; ?>-1">
                                            <span class="brownTriangle"></span> Overview
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-1" class="accordion-collapse collapse show"
                                        aria-labelledby="heading-<?= $data['id']; ?>-1"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <p><?= $data['overview']; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Eligibility Criteria -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-2"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-2">
                                            <span class="brownTriangle"></span> Eligibility Criteria
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-2" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-2"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <?= $data['eligibility']; ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Specialization -->
                                <?php if (trim($data['specialization']) !== 'NA'): ?>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-3"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-3">
                                            <span class="brownTriangle"></span> Specialization
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-3" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-3"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <?= $data['specialization']; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <!-- ranking -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-4"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-4">
                                            <span class="brownTriangle"></span> Ranking
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-4" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-4"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <p><?= $data['ranking']; ?></p>
                                        </div>
                                    </div>
                                </div>


                                <!-- Duration -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-4"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-4">
                                            <span class="brownTriangle"></span> Duration
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-4" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-4"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <p><?= $data['duration']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="" class="btn c_btn py-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Enquire Now</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row pt-5">
                <ul class="nav nav-pills mb-3" id="pills-tab-2" role="tablist">
                    <?php 
                    foreach ($pg as $tab => $data):
                        ?>
                    <div class="col-md-6 col-lg-3 mb-4 d-grid">
                        <li class="nav-item d-grid px-3" role="presentation">
                            <button
                                class="nav-link border rounded-3 px-3 py-5 redirect-buttonpg  <?= ($data['id'] === "pgTab1") ? 'active' : ''; ?>"
                                id="<?= $data['id']; ?>" data-bs-toggle="pill"
                                data-bs-target="#<?= $data['targetId']; ?>" type="button" role="tab"
                                aria-controls="<?= $data['targetId']; ?>"
                                aria-selected="<?= ($data['id'] === "pgTab1") ? 'true' : 'false'; ?>">
                                <div class="program_01">
                                    <div class="d-flex align-items-center">
                                        <img src="images/program/pg/<?= $data['imgSrc']; ?>.png" class="icon"
                                            loading="lazy" alt="<?= $data['course']; ?>">
                                        <span class="mb-0 ps-3"><?= $data['course']; ?></span>
                                        <i class="bi bi-arrow-right px-3 arrow d-none"></i>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </div>
                    <?php 
                    endforeach; ?>
                </ul>

                <!-- Tab Content -->
                <div id="subChildPG"></div>
                <div class="tab-content" id="pills-tabContent-2">
                    <?php foreach ($pg as $tabKey => $data) { ?>
                    <div class="tab-pane fade <?= $data['id'] === 'pgTab1' ? 'show active' : ''; ?>"
                        id="<?= $data['targetId']; ?>" role="tabpanel" aria-labelledby="<?= $data['id']; ?>">
                        <!-- Content for <?= $data['course']; ?> -->
                        <div class="row">
                            <h2><?= $data['course']; ?></h2>

                            <div class="accordion" id="accordion-<?= $data['id']; ?>">
                                <!-- Overview -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-<?= $data['id']; ?>-1" aria-expanded="true"
                                            aria-controls="collapse-<?= $data['id']; ?>-1">
                                            <span class="brownTriangle"></span> Overview
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-1" class="accordion-collapse collapse show"
                                        aria-labelledby="heading-<?= $data['id']; ?>-1"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <p><?= $data['overview']; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Eligibility Criteria -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-2"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-2">
                                            <span class="brownTriangle"></span> Eligibility Criteria
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-2" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-2"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <?= $data['eligibility']; ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Specialization -->
                                <?php if (trim($data['specialization']) !== 'NA'): ?>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-3"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-3">
                                            <span class="brownTriangle"></span> Specialization
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-3" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-3"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <?= $data['specialization']; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                                
                                <!-- ranking -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-4"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-4">
                                            <span class="brownTriangle"></span> Ranking
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-4" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-4"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <p><?= $data['ranking']; ?></p>
                                        </div>
                                    </div>
                                </div>




                                <!-- Duration -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-4"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-4">
                                            <span class="brownTriangle"></span> Duration
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-4" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-4"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <p><?= $data['duration']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="" class="btn c_btn py-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Enquire Now</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <div class="tab-pane fade" id="pills-phd" role="tabpanel" aria-labelledby="pills-phd-tab">
            <div class="row pt-5">
                <ul class="nav nav-pills mb-3" id="pills-tab-4" role="tablist">
                    <?php 
                        foreach ($doctorate as $tab => $data):
                            ?>
                    <div class="col-md-6 col-lg-3 mb-4 d-grid">
                        <li class="nav-item  d-grid px-3" role="presentation">
                            <button
                                class="nav-link border rounded-3 px-3 py-5 redirect-buttondoctorate <?= ($data['id'] === "doctorateTab1") ? 'active' : ''; ?>"
                                id="<?= $data['id']; ?>" data-bs-toggle="pill"
                                data-bs-target="#<?= $data['targetId']; ?>" type="button" role="tab"
                                aria-controls="<?= $data['targetId']; ?>"
                                aria-selected="<?= ($data['id'] === "doctorateTab1") ? 'true' : 'false'; ?>">
                                <div class="program_01">
                                    <div class="d-flex align-items-center">
                                        <img src="images/alard/program/phd/<?= $data['imgSrc']; ?>.png" class="icon"
                                            loading="lazy" alt="<?= $data['course']; ?>">
                                        <span class="mb-0 ps-3"><?= $data['course']; ?></span>
                                        <i class="bi bi-arrow-right px-3 arrow d-none"></i>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </div>
                    <?php 
                        $first = false; // Set the flag to false after the first iteration
                        endforeach; ?>
                </ul>

                <!-- Tab Content -->
                <div id="subChildDoctorate"></div>
                <div class="tab-content" id="pills-tabContent-1">
                    <?php foreach ($doctorate as $tabKey => $data) { ?>
                    <div class="tab-pane fade <?= $data['id'] === 'doctorateTab1' ? 'show active' : ''; ?>"
                        id="<?= $data['targetId']; ?>" role="tabpanel" aria-labelledby="<?= $data['id']; ?>">
                        <!-- Content for <?= $data['course']; ?> -->
                        <div class="row">
                            <h2><?= $data['course']; ?></h2>

                            <div class="accordion" id="accordion-<?= $data['id']; ?>">
                                <!-- Overview -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-<?= $data['id']; ?>-1" aria-expanded="true"
                                            aria-controls="collapse-<?= $data['id']; ?>-1">
                                            <span class="brownTriangle"></span> Overview
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-1" class="accordion-collapse collapse show"
                                        aria-labelledby="heading-<?= $data['id']; ?>-1"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <p><?= $data['overview']; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Eligibility Criteria -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-2"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-2">
                                            <span class="brownTriangle"></span> Eligibility Criteria
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-2" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-2"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <?= $data['eligibility']; ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Specialization -->
                                <?php if (trim($data['specialization']) !== 'NA'): ?>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-3"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-3">
                                            <span class="brownTriangle"></span> Specialization
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-3" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-3"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <?= $data['specialization']; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                                
                                <!-- Specialization -->
                                <?php if (trim($data['ranking']) !== 'NA'): ?>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-3"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-3">
                                            <span class="brownTriangle"></span> Ranking
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-3" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-3"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <?= $data['ranking']; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>


                                <!-- Duration -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="heading-<?= $data['id']; ?>-4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $data['id']; ?>-4"
                                            aria-expanded="false" aria-controls="collapse-<?= $data['id']; ?>-4">
                                            <span class="brownTriangle"></span> Duration
                                        </button>
                                    </h3>
                                    <div id="collapse-<?= $data['id']; ?>-4" class="accordion-collapse collapse"
                                        aria-labelledby="heading-<?= $data['id']; ?>-4"
                                        data-bs-parent="#accordion-<?= $data['id']; ?>">
                                        <div class="accordion-body">
                                            <p><?= $data['duration']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="" class="btn c_btn py-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Enquire Now</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>



    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="row align-items-center d-md-none d-none ">
        <div class="col-12">
            <h2 class=" mb-lg-4 mb-0 display-5 text-purple title">35+ Industry <br>Centred Programs</h2>
        </div>
        <div class="col-md-12 pt-3  mobilePrograms">

            <h3 class="pb-3">Undergraduate Programs</h3>
            <div class="accordion" id="accordion-containerUGMobile">
                <?php foreach ($ug as $tabKey => $tab):
                ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-<?= $tab['id']; ?>">
                        <button class="accordion-button border rounded-3 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $tab['id']; ?>"
                            aria-expanded="false" aria-controls="collapse-<?= $tab['id']; ?>">

                            <img src="images/program/ug/<?= $tab['imgSrc']; ?>.png" class="icon" loading="lazy"
                                height="40" width="40" alt="<?= $tab['course']; ?>">
                            <p class="mb-0 ps-3"><?= $tab['course']; ?> </p>
                        </button>
                    </h2>
                    <div id="collapse-<?= $tab['id']; ?>" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-containerUGMobile" aria-labelledby="heading-<?= $tab['id']; ?>">
                        <div class="accordion-body">
                            <!-- Overview -->
                            <h3>Overview</h3>
                            <div>
                                <p><?= $tab['overview']; ?></p>
                            </div>

                            <!-- Eligibility Criteria -->
                            <h3>Eligibility Criteria</h3>
                            <div>
                                <?= $tab['eligibility']; ?>
                            </div>

                            <!-- Specialization -->
                            <?php if (!empty($tab['specialization'])): ?>
                            <h3>Specialization</h3>
                            <div>
                                <p><?= $tab['specialization']; ?></p>
                            </div>
                            <?php endif; ?>

                            
                            <!-- Ranking Criteria -->
                            <h3>Ranking</h3>
                            <div>
                                <?= $tab['ranking']; ?>
                            </div>

                            <!-- Duration -->
                            <h3>Duration</h3>
                            <div>
                                <ul><?= $tab['duration']; ?></ul>
                            </div>
                            <a href="" class="btn c_btn py-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <h3 class="pb-3 pt-3">Postgraduate Programs</h3>
            <div class="accordion" id="accordion-containerPGMobile">
                <?php foreach ($pg as $tabKey => $tab):
                ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-<?= $tab['id']; ?>">
                        <button class="accordion-button border rounded-3 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse-<?= $tab['id']; ?>"
                            aria-expanded="false" aria-controls="collapse-<?= $tab['id']; ?>">
                            <img src="images/program/pg/<?= $tab['imgSrc']; ?>.png" class="icon" loading="lazy"
                                height="40" width="40" alt="<?= $tab['course']; ?>">
                            <p class="mb-0 ps-3"><?= $tab['course']; ?> </p>

                        </button>
                    </h2>
                    <div id="collapse-<?= $tab['id']; ?>" class="accordion-collapse collapse"
                        data-bs-parent="#accordion-containerPGMobile" aria-labelledby="heading-<?= $tab['id']; ?>">
                        <div class="accordion-body">
                            <!-- Overview -->
                            <h3>Overview</h3>
                            <div>
                                <p><?= $tab['overview']; ?></p>
                            </div>

                            <!-- Eligibility Criteria -->
                            <h3>Eligibility Criteria</h3>
                            <div>
                                <?= $tab['eligibility']; ?>
                            </div>

                            <!-- Specialization -->
                            <?php if (!empty($tab['specialization'])): ?>
                            <h3>Specialization</h3>
                            <div>
                                <p><?= $tab['specialization']; ?></p>
                            </div>
                            <?php endif; ?>

                            
                            <!-- Ranking Criteria -->
                            <h3>Ranking</h3>
                            <div>
                                <?= $tab['ranking']; ?>
                            </div>

                            <!-- Duration -->
                            <h3>Duration</h3>
                            <div>
                                <ul><?= $tab['duration']; ?></ul>
                            </div>
                            <a href="" class="btn c_btn py-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <h3 class="pb-3 pt-3 doctorate-prog-mob">PhD Programs</h3>
            <div class="accordion" id="accordion-containerDoctorateMobile">
                <?php foreach ($doctorate as $tabKey => $tab): ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-<?= $tab['id']; ?>">
                            <button 
                                class="accordion-button border rounded-3 collapsed" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapse-<?= $tab['id']; ?>" 
                                aria-expanded="false" 
                                aria-controls="collapse-<?= $tab['id']; ?>"> 
                                <img src="images/program/phd/<?= $tab['imgSrc']; ?>.png" 
                                                    class="icon" 
                                                    loading="lazy" 
                                                    height="40" width="40"
                                                    alt="<?= $tab['course']; ?>">
                                <p class="mb-0 ps-3"><?= $tab['course']; ?> </p>
                            </button>
                        </h2>
                        <div class="accordion-body">
                            <!-- Overview -->
                            <h3>Overview</h3>
                            <div>
                                <p><?= $tab['overview']; ?></p>
                            </div>

                            <!-- Eligibility Criteria -->
                            <h3>Eligibility Criteria</h3>
                            <div>
                                <?= $tab['eligibility']; ?>
                            </div>

                            <!-- Specialization -->
                            <?php if (!empty($tab['specialization'])): ?>
                            <h3>Specialization</h3>
                            <div>
                                <p><?= $tab['specialization']; ?></p>
                            </div>
                            <?php endif; ?>

                            
                            <!-- Ranking Criteria -->
                            <h3>Ranking</h3>
                            <div>
                                <?= $tab['ranking']; ?>
                            </div>

                            <!-- Duration -->
                            <h3>Duration</h3>
                            <div>
                                <ul><?= $tab['duration']; ?></ul>
                            </div>
                            <a href="" class="btn c_btn py-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Enquire Now</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<!-- UG ----- -->
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const buttons = document.querySelectorAll("#pills-tab-1 .nav-link");

        buttons.forEach(button => {
            button.addEventListener("click", function () {
                // Remove 'active' class from all buttons
                buttons.forEach(btn => btn.classList.remove("active"));
                // Add 'active' class to the clicked button
                this.classList.add("active");
            });
        });

        const redirectButtons = document.querySelectorAll('.redirect-button');

        redirectButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetElement = document.getElementById('subChildUG');

                if (targetElement) {
                    // Calculate the position 80px above the target
                    const targetPosition = targetElement.getBoundingClientRect().top + window
                        .pageYOffset - 80;

                    // Smooth scroll to the calculated position
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // ############## PG

        const buttons1 = document.querySelectorAll("#pills-tab-2 .nav-link");

        buttons1.forEach(button => {
            button.addEventListener("click", function () {
                buttons1.forEach(btn => btn.classList.remove("active"));
                this.classList.add("active");
            });
        });

        const redirectButtons1 = document.querySelectorAll('.redirect-buttonpg');

        redirectButtons1.forEach(button => {
            button.addEventListener('click', function () {
                const targetElement = document.getElementById('subChildPG');

                if (targetElement) {
                    // Calculate the position 80px above the target
                    const targetPosition = targetElement.getBoundingClientRect().top + window
                        .pageYOffset - 80;

                    // Smooth scroll to the calculated position
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Diploma ##################################
        const buttons2 = document.querySelectorAll("#pills-tab-3 .nav-link");

        buttons2.forEach(button => {
            button.addEventListener("click", function () {
                // Remove 'active' class from all buttons
                buttons2.forEach(btn => btn.classList.remove("active"));
                // Add 'active' class to the clicked button
                this.classList.add("active");
            });
        });

        const redirectButtons2 = document.querySelectorAll('.redirect-buttondiploma');

        redirectButtons2.forEach(button => {
            button.addEventListener('click', function () {
                const targetElement = document.getElementById('subChildDiploma');

                if (targetElement) {
                    // Calculate the position 80px above the target
                    const targetPosition = targetElement.getBoundingClientRect().top + window
                        .pageYOffset - 80;

                    // Smooth scroll to the calculated position
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Doctorate ##################################
        const buttons3 = document.querySelectorAll("#pills-tab-4 .nav-link");

        buttons3.forEach(button => {
            button.addEventListener("click", function () {
                // Remove 'active' class from all buttons
                buttons3.forEach(btn => btn.classList.remove("active"));
                // Add 'active' class to the clicked button
                this.classList.add("active");
            });
        });

        const redirectButtons3 = document.querySelectorAll('.redirect-buttondoctorate');

        redirectButtons3.forEach(button => {
            button.addEventListener('click', function () {
                const targetElement = document.getElementById('subChildDoctorate');

                if (targetElement) {
                    // Calculate the position 80px above the target
                    const targetPosition = targetElement.getBoundingClientRect().top + window
                        .pageYOffset - 80;

                    // Smooth scroll to the calculated position
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });






    });
</script>