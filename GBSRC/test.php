<section class="bg-red py-5" id="success-stories">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h2 class=" mb-4 display-5 text-white title text-center">Our Student’s Success Stories</h2>
      </div>
      <div class="col-lg-8 mb-2 testimonials_01 py-3 owl-carousel">

  <?php
$testimonials = [
  [
    "img" => "1",
    "text" => "My journey at Global Business School and Research Centre has been nothing short of transformative. As an Agri Business Management student, I had the opportunity to connect theory with real-world insights through industrial visits, certification programs, and expert guest sessions. Serving as the General Secretary of the Student Council further sharpened my leadership and organizational skills. From celebrating vibrant festivals on campus to participating in skill-building workshops, every moment here was a learning experience. The faculty support, personalized placement training, and the career guidance I received played a pivotal role in my placement at HDFC Bank. I feel proud and prepared to step into the industry, carrying with me the values and vision of GBSRC.",
    "name" => "Aaditya Katkar",
    "role" => "MBA (Agri Business Management) | Batch 2023–25",
    "placedAt" => "Placed at: HDFC Bank as Agriculture Officer"
  ],
  [
    "img" => "2",
    "text" => "GBSRC has been a turning point in my academic and professional journey. As an Agri Business Management student, I was exposed to a perfect blend of practical learning and industry exposure. The curriculum is dynamic, and the constant encouragement from faculty pushed me to explore beyond textbooks. My placement at AMUL is a reflection of the continuous support and structured guidance provided by the placement cell. The certification courses, hands-on training, and real-world case studies helped me gain the confidence to step into the corporate world. I’ll always cherish the vibrant culture of GBSRC—be it festival celebrations, industrial visits, or teamwork during college events. These experiences have not only made me industry-ready but also personally enriched.",
    "name" => "Bhakti Kumbhar",
    "role" => "MBA (Agri Business Management) | Batch 2023–25",
    "placedAt" => "Placed at: AMUL as Territory Sales In-charge - I"
  ],
  [
    "img" => "3",
    "text" => "Choosing GBSRC for my MBA in Agri Business Management has been one of the best decisions of my life. The institute’s focus on holistic development helped me grow academically and professionally. With activities like industry interactions, field visits, certification programs, and practical projects, I gained valuable insights into the real-world application of agri-business concepts. The placement team at GBSRC guided me throughout the recruitment process, and their personalized support helped me secure a position at HDFC Life Insurance. I’ll always remember the vibrant student life here—cultural events, teamwork during festivals, and the friendships I’ve made. GBSRC has not only shaped my career but also given me memories for a lifetime",
    "name" => "Omkar Chavan",
    "role" => "MBA (Agri Business Management) | Batch 2023–25",
    "placedAt" => "Placed at: HDFC Life Insurance as Executive Trainee"
  ],
  [
    "img" => "4",
    "text" => "My experience at Global Business School and Research Centre has been truly enriching. Pursuing a dual specialization in Finance and Marketing allowed me to explore diverse dimensions of management with practical exposure and academic excellence. GBSRC’s ecosystem is built to nurture talent through industry-oriented certification courses, interactive guest lectures, and hands-on learning. The institute’s personalized approach to placement training played a key role in helping me secure a position at Yotta as a Senior Executive. Beyond academics, what makes GBSRC special is its vibrant campus life—celebrating festivals, engaging in student-driven initiatives, and being part of a culture that fosters leadership and innovation. I’m proud to be a part of this transformative journey",
    "name" => "Purusharthwardhan Rathore",
    "role" => "MBA (Finance and Marketing) | Batch 2023–25",
    "placedAt" => "Placed at: Yotta as Senior Executive"
  ]
]; foreach($testimonials as $item): ?>

    <div class="testimonial-wrapper bg-white p-4 rounded-3">
      
      <div class="testimonials">
        
        <img src="images/testimonal/<?php echo $item['img']; ?>.jpg" 
             class="mb-3" alt="">

        <p>
          <?php echo $item['text']; ?>
        </p>

        <br>

        <div class="author">
          <strong><?php echo $item['name']; ?></strong><br>
          <span><?php echo $item['role']; ?></span>
          <span><?php echo $item['placedAt']; ?></span>

          <div class="stars">★★★★☆</div>
        </div>

      </div>

    </div>

  <?php endforeach; ?>

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
  

</script>
