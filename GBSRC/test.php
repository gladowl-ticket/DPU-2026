<section class="bg-red py-5" id="testimonals">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h2 class=" mb-4 display-5 text-white title text-center">Discover Our Student’s Success Stories and Their
          Thriving Careers!</h2>
      </div>
      <div class="col-lg-8 mb-5">
        <div class=" testimonial-wrapper">
          <!-- Testimonial Content -->
          <div class="testimonial-box">
            <div class="stars">★★★★☆</div>
            <p id="testimonial-text">Being a part of GBSRC has been an empowering journey that shaped both my personality and professional
                outlook. With a dual specialization in HR and Marketing, I was encouraged to explore cross-functional
                knowledge through experiential learning, skill-building workshops, and real-world case discussions.
                The institution’s commitment to student development is truly commendable—from personalized placement
                mentoring to certification courses and active industry interface. These efforts helped me gain the
                confidence and skills needed to secure my placement at Posh Metals. <br>
                What I cherish the most are the vibrant cultural celebrations, student-led activities, and the inclusive
                campus environment that made every moment memorable. GBSRC has helped me grow into a confident, capable,
                and career-ready professional.</p>
            <br>
            <div class="author">
              <strong id="testimonial-name">Manaswee Kadwe</strong>
              <span id="testimonial-role">MBA (Human Resource and Marketing) | Batch 2023–25</span>
              <span id="testimonial-placedAt">Placed at: Posh Metals as Management Trainee</span>
            </div>
          </div>

          <div class="testimonial-nav">
            <button class="nav-arrow prev" onclick="prevTestimonial()">❮</button>
            <button class="nav-arrow next" onclick="nextTestimonial()">❯</button>
          </div>
        </div>
        <!-- Thumbnails -->
        <div class="testimonial-thumbs">
          <img src="images/testimonal/1.jpg"
            class="thumb active" onclick="changeTestimonial(0)">
          <img src="images/testimonal/2.jpg" class="thumb"
            onclick="changeTestimonial(1)">
          <img src="images/testimonal/3.jpg" class="thumb"
            onclick="changeTestimonial(2)">
          <img src="images/testimonal/4.jpg" class="thumb"
            onclick="changeTestimonial(3)">
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
    /* height: 360px; */
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
      text: "My journey at Global Business School and Research Centre has been nothing short of transformative. As an Agri Business Management student, I had the opportunity to connect theory with real-world insights through industrial visits, certification programs, and expert guest sessions. Serving as the General Secretary of the Student Council further sharpened my leadership and organizational skills. From celebrating vibrant festivals on campus to participating in skill-building workshops, every moment here was a learning experience. The faculty support, personalized placement training, and the career guidance I received played a pivotal role in my placement at HDFC Bank. I feel proud and prepared to step into the industry, carrying with me the values and vision of GBSRC.",
      name: "Aaditya Katkar",
      role: "MBA (Agri Business Management) | Batch 2023–25",
      placedAt: "Placed at: HDFC Bank as Agriculture Officer ",
    },
    {
      text: "GBSRC has been a turning point in my academic and professional journey. As an Agri Business Management student, I was exposed to a perfect blend of practical learning and industry exposure. The curriculum is dynamic, and the constant encouragement from faculty pushed me to explore beyond textbooks. My placement at AMUL is a reflection of the continuous support and structured guidance provided by the placement cell. The certification courses, hands-on training, and real-world case studies helped me gain the confidence to step into the corporate world. I’ll always cherish the vibrant culture of GBSRC—be it festival celebrations, industrial visits, or teamwork during college events. These experiences have not only made me industry-ready but also personally enriched.",
      name: "Bhakti Kumbhar",
      role: "MBA (Agri Business Management) | Batch 2023–25",
      placedAt: "Placed at: AMUL as Territory Sales In-charge - I",
    },
    {
      text: "Choosing GBSRC for my MBA in Agri Business Management has been one of the best decisions of my life. The institute’s focus on holistic development helped me grow academically and professionally. With activities like industry interactions, field visits, certification programs, and practical projects, I gained valuable insights into the real-world application of agri-business concepts. The placement team at GBSRC guided me throughout the recruitment process, and their personalized support helped me secure a position at HDFC Life Insurance. I’ll always remember the vibrant student life here—cultural events, teamwork during festivals, and the friendships I’ve made. GBSRC has not only shaped my career but also given me memories for a lifetime",
      name: "Omkar Chavan",
      role: "MBA (Agri Business Management) | Batch 2023–25",
      placedAt: "Placed at: HDFC Life Insurance as Executive Trainee",
    },
    {
      text: "My experience at Global Business School and Research Centre has been truly enriching. Pursuing a dual specialization in Finance and Marketing allowed me to explore diverse dimensions of management with practical exposure and academic excellence. GBSRC’s ecosystem is built to nurture talent through industry-oriented certification courses, interactive guest lectures, and hands-on learning. The institute’s personalized approach to placement training played a key role in helping me secure a position at Yotta as a Senior Executive. Beyond academics, what makes GBSRC special is its vibrant campus life—celebrating festivals, engaging in student-driven initiatives, and being part of a culture that fosters leadership and innovation. I’m proud to be a part of this transformative journey",
      name: "Purusharthwardhan Rathore",
      role: "MBA (Finance and Marketing) | Batch 2023–25",
      placedAt: "Placed at: Yotta as Senior Executive"
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
    document.getElementById("testimonial-placedAt").innerText =
      testimonials[index].placedAt;

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
