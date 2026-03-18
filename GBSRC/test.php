<section class="bg-purple py-5"id="testimonals">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h2 class=" mb-4 display-5 text-white title text-center">Discover Our Student’s Success Stories and Their
          Thriving Careers!</h2>
      </div>
      <div class="col-lg-6 mb-5">
        <div class=" testimonial-wrapper">
          <!-- Testimonial Content -->
          <div class="testimonial-box">
            <div class="stars">★★★★☆</div>
            <p id="testimonial-text">
              I Pankaj Sane, an alumnus of ALARD college of Engineering and Management Pune, from civil Engineering
              department As a recent Civil Engineering graduate, I can confidently say that ALARD college of Engineering
              and Management played a pivotal role in shaping my academic and professional journey.
            </p>
            <br>
            <div class="author">
              <strong id="testimonial-name">Pankaj Sane</strong>
              <span id="testimonial-role">Civil Engineering</span>
            </div>
          </div>

          <div class="testimonial-nav">
            <button class="nav-arrow prev" onclick="prevTestimonial()">❮</button>
            <button class="nav-arrow next" onclick="nextTestimonial()">❯</button>
          </div>
        </div>
        <!-- Thumbnails -->
        <div class="testimonial-thumbs">
          <img src="https://alarduniversity.edu.in/wp-content/uploads/2025/01/testimonial-7-700x700.webp"
            class="thumb active" onclick="changeTestimonial(0)">
          <img src="https://alarduniversity.edu.in/wp-content/uploads/2025/01/testimonial-8-150x150.webp" class="thumb"
            onclick="changeTestimonial(1)">
          <img src="https://alarduniversity.edu.in/wp-content/uploads/2025/01/testimonial-2-150x150.webp" class="thumb"
            onclick="changeTestimonial(2)">
          <img src="https://alarduniversity.edu.in/wp-content/uploads/2025/01/testimonial-5.webp" class="thumb"
            onclick="changeTestimonial(3)">
        </div>
      </div>
      <div class="col-lg-6">
  <div class="vt2-wrapper">

    <div class="vt2-bubble">
      <div class="vt2-video-box">

        <!-- 🔴 REPLACED IFRAME WITH VIDEO -->
        <video
          id="vt2-video"
          playsinline
          preload="metadata"
          style="width:100%; height:285px; object-fit:contain;"
        ></video>

        <div class="vt2-play" onclick="vt2Play()">▶</div>
      </div>

      <div class="vt2-author-row">
        <strong id="vt2-name"></strong>
        <span id="vt2-role"></span>
      </div>
    </div>

    <button class="vt2-arrow vt2-left" onclick="vt2Prev()">❮</button>
    <button class="vt2-arrow vt2-right" onclick="vt2Next()">❯</button>

    <div class="vt2-thumbs">
      <div class="vt2-thumb-wrap active" onclick="vt2Change(0)">
        <img src="https://alarduniversity.edu.in/wp-content/uploads/2026/01/Preksha-Bongirwar.png">
      </div>
      <div class="vt2-thumb-wrap" onclick="vt2Change(1)">
        <img src="https://alarduniversity.edu.in/wp-content/uploads/2026/01/Sahil-Sheikh.png">
      </div>
      <div class="vt2-thumb-wrap" onclick="vt2Change(2)">
        <img src="https://alarduniversity.edu.in/wp-content/uploads/2026/01/Tejeshwini-Chaudhari.png">
      </div>
      <div class="vt2-thumb-wrap" onclick="vt2Change(3)">
        <img src="https://alarduniversity.edu.in/wp-content/uploads/2026/01/Utkarsha-Salunkhe.png">
      </div>
    </div>

  </div>
</div>

    </div>
</section>



</div>
<style>
  .testimonial-wrapper {
    text-align: left;
    max-width: 700px;
    margin: auto;
    font-family: poppins;
  }

  .testimonial-box {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 25px;
    height: 360px;
  }

  .stars {
    color: #6b2c4d;
    font-size: 18px;
  }

  .author span {
    display: block;
    font-size: 14px;
    color: #777;
  }

  .testimonial-thumbs {
    display: flex;
    gap: 15px;
    overflow-x: auto;
    scroll-behavior: smooth;
    padding: 10px 0;
    justify-content: center;
  }

  .testimonial-thumbs::-webkit-scrollbar {
    display: none;
  }

  .thumb {
    flex: 0 0 auto;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    cursor: pointer;
    opacity: 0.4;
    transform: scale(0.85);
    transition: all 0.4s ease;
    border-radius: 50% !important;
  }

  .thumb.active {
    opacity: 1;
    transform: scale(1.25);
  }

  .testimonial-nav {
    display: flex;
    justify-content: space-between;
    width: 360px;
    margin: 0 auto -50px;
  }

  .nav-arrow {
    background: transparent;
    color: #fff;
    border: none;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 18px;
    transition: 0.3s;
  }

  .nav-arrow:hover {
    background: transparent;
  }

  .nav-arrow:active {
    background: transparent;
  }

  @media (max-width:767px) {
    .testimonial-nav {
      width: calc(100% - 40px);
    }
  }
</style>


<script>
  const testimonials = [{
      text: "I Pankaj Sane, an alumnus of ALARD college of Engineering and Management Pune, from civil Engineering department As a recent Civil Engineering graduate, I can confidently say that ALARD college of Engineering and Management played a pivotal role in shaping my academic and professional journey.",
      name: "Pankaj Sane",
      role: "Civil Engineering"
    },
    {
      text: "I can proudly say that choosing ALARD University Pune for MCA was the best part of my life. ALARD provided me with learning opportunities that are filled with fun and frolic. ALARD has the best internship and placement policy. Ample opportunities are provided to every student.",
      name: "Prakash Aswar",
      role: "MCA ASBM (2021-2023)"
    },
    {
      text: "I like the environment of AUP. Everything, the positive environment, Way of teaching, the teachers and the people. The faculty is really great and engaging with the students. In providing opportunities to realize self-development. Thanks to AUP Techers & Staff.",
      name: "Smita Dilip Pawar",
      role: "ENTC (2022-2023)"
    },
    {
      text: "Review Text Graduating from ALARD college of Pharmacy has been a transformative journey filled with invaluable experiences and lifelong lessons. The faculty’s dedication to excellence and their unwavering support have equipped me with the skills.",
      name: "Gauri Malvade",
      role: "B. Pharmacy (2022-2023)"
    }
  ];

  let currentIndex = 0;
  let autoSlide;

  const thumbsContainer = document.querySelector(".testimonial-thumbs");
  const thumbs = document.querySelectorAll(".thumb");

  function changeTestimonial(index) {
    currentIndex = index;

    document.getElementById("testimonial-text").innerText =
      testimonials[index].text;
    document.getElementById("testimonial-name").innerText =
      testimonials[index].name;
    document.getElementById("testimonial-role").innerText =
      testimonials[index].role;

    thumbs.forEach(t => t.classList.remove("active"));
    thumbs[index].classList.add("active");

    centerActiveThumb();
    resetAutoSlide();
  }

  function centerActiveThumb() {
    const activeThumb = thumbs[currentIndex];
    const containerCenter =
      thumbsContainer.offsetWidth / 2 - activeThumb.offsetWidth / 2;

    thumbsContainer.scrollLeft =
      activeThumb.offsetLeft - containerCenter;
  }

  function startAutoSlide() {
    autoSlide = setInterval(() => {
      currentIndex = (currentIndex + 1) % testimonials.length;
      changeTestimonial(currentIndex);
    }, 4000);
  }

  function resetAutoSlide() {
    clearInterval(autoSlide);
    startAutoSlide();
  }

  // INIT
  changeTestimonial(0);
  startAutoSlide();

  function nextTestimonial() {
    currentIndex = (currentIndex + 1) % testimonials.length;
    changeTestimonial(currentIndex);
  }

  function prevTestimonial() {
    currentIndex =
      (currentIndex - 1 + testimonials.length) % testimonials.length;
    changeTestimonial(currentIndex);
  }
</script>



<!-- ================================ -->





<style>
  .vt2-wrapper {
    font-family: 'Poppins', sans-serif;
    position: relative;
  }

  .vt2-bubble {
    background: #fff;
    border-radius: 14px;
    max-width: 900px;
    margin: auto;
    overflow: hidden;
    position: relative;
  }

  .vt2-bubble::after {
    content: "";
    position: absolute;
    bottom: -18px;
    left: 50%;
    transform: translateX(-50%);
    border-width: 18px 18px 0;
    border-style: solid;
    border-color: #fff transparent transparent;
  }

  .vt2-video-box {
    position: relative;
  }

  .vt2-video-box iframe {
    width: 100%;
    height: 280px;
    border: none;
  }

  .vt2-play {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 60px;
    color: #fff;
    background: rgba(0, 0, 0, 0.25);
    cursor: pointer;
  }

  .vt2-author-row {
    padding: 15px;
  }

  .vt2-author-row span {
    display: block;
    font-size: 13px;
    color: #777;
  }

  .vt2-arrow {
    position: absolute;
    top: 88%;
    background: none;
    border: none;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }

  .vt2-left {
    left: 100px;
  }

  .vt2-right {
    right: 100px;
  }

  .vt2-thumbs {
    margin-top: 35px;
    display: flex;
    justify-content: center;
    gap: 18px;
  }

  .vt2-thumb-wrap {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    opacity: 0.4;
    transform: scale(0.85);
    transition: 0.3s;
  }

  .vt2-thumb-wrap.active {
    opacity: 1;
    transform: scale(1.3);
  }

  .vt2-thumb-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  @media (max-width:767px) {
    .vt2-left {
      left: 10px;
    }

    .vt2-right {
      right: 10px;
    }
  }

  .vt2-arrow:hover {
    background: transparent;
  }

  .vt2-arrow:active {
    background: transparent;
  }
</style>


<script>
document.addEventListener("DOMContentLoaded", function () {

  const vt2Data = [
    {
      video: "images/alard/testimonal/videos/1.mp4",
      name: "Preksha Bongirwar",
      role: "Student"
    },
    {
      video: "images/alard/testimonal/videos/2.mp4",
      name: "Sahil Sheikh",
      role: "Student"
    },
    {
      video: "images/alard/testimonal/videos/3.mp4",
      name: "Tejeshwini Chaudhari",
      role: "Student"
    },
    {
      video: "images/alard/testimonal/videos/4.mp4",
      name: "Utkarsha Salunkhe",
      role: "Student"
    }
  ];

  let index = 0;

  const video = document.getElementById("vt2-video");
  const playBtn = document.querySelector(".vt2-play");
  const nameEl = document.getElementById("vt2-name");
  const roleEl = document.getElementById("vt2-role");
  const thumbs = document.querySelectorAll(".vt2-thumb-wrap");

  function updateSlide(i) {
    index = i;

    video.pause();
    video.currentTime = 0;
    video.src = vt2Data[i].video;

    playBtn.style.display = "flex";
    nameEl.innerText = vt2Data[i].name;
    roleEl.innerText = vt2Data[i].role;

    thumbs.forEach(t => t.classList.remove("active"));
    thumbs[i].classList.add("active");
  }

  window.vt2Play = function () {
    video.play();
    playBtn.style.display = "none";
  };

  window.vt2Next = function () {
    updateSlide((index + 1) % vt2Data.length);
  };

  window.vt2Prev = function () {
    updateSlide((index - 1 + vt2Data.length) % vt2Data.length);
  };

  window.vt2Change = function (i) {
    updateSlide(i);
  };

  /* 🔥 WHEN VIDEO ENDS → STOP & SHOW PLAY */
  video.addEventListener("ended", function () {
    video.currentTime = 0;
    playBtn.style.display = "flex";
  });

  // Load first video
  updateSlide(0);

});
</script>
