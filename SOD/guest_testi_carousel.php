<!-- Guest Testi Start -->
<style>
    .stalwart-card {
      padding: 8px;
    }

    .video-wrap {
      position: relative;
      width: 100%;
      cursor: pointer;
    }

    .video-wrap img {
      width: 100%;
      display: block;
    }

    .video-wrap video {
      width: 100%;
      display: none;
    }

    .play-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50px;
      height: 50px;
      background: rgba(0,0,0,0.6);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .play-icon svg {
      fill: #fff;
      width: 20px;
      height: 20px;
      margin-left: 4px;
    }

    .card-caption {
      padding: 8px 4px 4px;
    }

    .card-caption .name {
      font-size: 15px;
      font-weight: bold;
    }

    .card-caption .role {
      font-size: 12px;
      color: #666;
    }

    .owl-theme .owl-nav [class*='owl-'] {
      font-size: 20px;
      padding: 4px 12px !important;
    }
  </style>

  <div class="owl-carousel owl-theme" id="stalwartsCarousel">

    <div class="stalwart-card">
      <div class="video-wrap">
        <img src="https://schoolofdesign.dpu.edu.in/images/stalwarts/anirudh.jpg" alt="Anirudh Dasgupta"/>
        <video src="https://schoolofdesign.dpu.edu.in/images/stalwarts/anirudhdasgupta.mp4" controls playsinline preload="none"></video>
        <div class="play-icon">
          <svg viewBox="0 0 24 24"><polygon points="5,3 19,12 5,21"/></svg>
        </div>
      </div>
      <div class="card-caption">
        <div class="name">Anirudh Dasgupta</div>
        <div class="role">Design Stalwart</div>
      </div>
    </div>

    <div class="stalwart-card">
      <div class="video-wrap">
        <img src="https://schoolofdesign.dpu.edu.in/images/stalwarts/sanjeev.jpg" alt="Sanjeev Chaturvedi"/>
        <video src="https://schoolofdesign.dpu.edu.in/images/stalwarts/sanjeevchaturvedi.mp4" controls playsinline preload="none"></video>
        <div class="play-icon">
          <svg viewBox="0 0 24 24"><polygon points="5,3 19,12 5,21"/></svg>
        </div>
      </div>
      <div class="card-caption">
        <div class="name">Sanjeev Chaturvedi</div>
        <div class="role">Design Stalwart</div>
      </div>
    </div>

    <div class="stalwart-card">
      <div class="video-wrap">
        <img src="https://schoolofdesign.dpu.edu.in/images/stalwarts/alhad.jpg" alt="Alhad Gore"/>
        <video src="https://schoolofdesign.dpu.edu.in/images/stalwarts/alhadgore.mp4" controls playsinline preload="none"></video>
        <div class="play-icon">
          <svg viewBox="0 0 24 24"><polygon points="5,3 19,12 5,21"/></svg>
        </div>
      </div>
      <div class="card-caption">
        <div class="name">Alhad Gore</div>
        <div class="role">Design Stalwart</div>
      </div>
    </div>

    <div class="stalwart-card">
      <div class="video-wrap">
        <img src="https://schoolofdesign.dpu.edu.in/images/stalwarts/mohan.jpg" alt="D.K. Mohan"/>
        <video src="https://schoolofdesign.dpu.edu.in/images/stalwarts/dkmohan.mp4" controls playsinline preload="none"></video>
        <div class="play-icon">
          <svg viewBox="0 0 24 24"><polygon points="5,3 19,12 5,21"/></svg>
        </div>
      </div>
      <div class="card-caption">
        <div class="name">D.K. Mohan</div>
        <div class="role">Design Stalwart</div>
      </div>
    </div>

  </div>

  <script defer>
    $(document).ready(function () {
    if (typeof $ !== 'undefined') {
      $(function () {
        console.log('Initializing Stalwarts Carousel');
        $('#stalwartsCarousel').owlCarousel({
          loop: false,
          margin: 16,
          nav: true,
          dots: true,
          responsive: {
            0:   { items: 1 },
            600: { items: 2 },
            992: { items: 3 }
          },
          onTranslate: function () {
            document.querySelectorAll('.video-wrap video').forEach(function (v) {
              v.pause();
              resetCard(v.closest('.video-wrap'));
            });
          }
        });

        document.querySelectorAll('.video-wrap').forEach(function (wrap) {
          const img      = wrap.querySelector('img');
          const video    = wrap.querySelector('video');
          const playIcon = wrap.querySelector('.play-icon');

          [img, playIcon].forEach(function (el) {
            el.addEventListener('click', function () {
              document.querySelectorAll('.video-wrap video').forEach(function (v) {
                if (v !== video) {
                  v.pause();
                  resetCard(v.closest('.video-wrap'));
                }
              });
              img.style.display      = 'none';
              playIcon.style.display = 'none';
              video.style.display    = 'block';
              video.play();
            });
          });

          video.addEventListener('ended', function () {
            resetCard(wrap);
          });
        });

        function resetCard(wrap) {
          wrap.querySelector('img').style.display        = 'block';
          wrap.querySelector('.play-icon').style.display = 'flex';
          wrap.querySelector('video').style.display      = 'none';
        }
      });
    } else {
      console.error('jQuery not loaded');
    }
});
  </script>
<!-- Guest Testi End -->
