<!-- Guest Testi Start -->

<style>
    .stalwarts-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    @media (max-width:992px) {
        .stalwarts-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width:600px) {
        .stalwarts-grid {
            grid-template-columns: 1fr;
        }
    }

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
        border-radius: 6px;
    }

    .video-wrap video {
        width: 100%;
        display: none;
        border-radius: 6px;
    }

    .play-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 55px;
        height: 55px;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .play-icon svg {
        fill: #fff;
        width: 22px;
        height: 22px;
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
</style>

<section>
    <div class="container">
        <h3 class="title1">Stalwarts Testimonies</span></h3>

<div class="stalwarts-grid">

    <!-- Card 1 -->
    <div class="stalwart-card">
        <div class="video-wrap border rounded-lg">
            <img src="https://schoolofdesign.dpu.edu.in/images/stalwarts/anirudh.jpg">
            <video src="https://schoolofdesign.dpu.edu.in/images/stalwarts/anirudhdasgupta.mp4" controls playsinline
                preload="none"></video>

            <div class="play-icon">
                <svg viewBox="0 0 24 24">
                    <polygon points="5,3 19,12 5,21" /></svg>
            </div>

        </div>
        
    </div>


    <!-- Card 2 -->
    <div class="stalwart-card">
        <div class="video-wrap border rounded-lg">
            <img src="https://schoolofdesign.dpu.edu.in/images/stalwarts/sanjeev.jpg">
            <video src="https://schoolofdesign.dpu.edu.in/images/stalwarts/sanjeevchaturvedi.mp4" controls playsinline
                preload="none"></video>

            <div class="play-icon">
                <svg viewBox="0 0 24 24">
                    <polygon points="5,3 19,12 5,21" /></svg>
            </div>

        </div>
        
    </div>


    <!-- Card 3 -->
    <div class="stalwart-card">
        <div class="video-wrap border rounded-lg">
            <img src="https://schoolofdesign.dpu.edu.in/images/stalwarts/alhad.jpg">
            <video src="https://schoolofdesign.dpu.edu.in/images/stalwarts/alhadgore.mp4" controls playsinline
                preload="none"></video>

            <div class="play-icon">
                <svg viewBox="0 0 24 24">
                    <polygon points="5,3 19,12 5,21" /></svg>
            </div>

        </div>
        
    </div>


    <!-- Card 4 -->
    <div class="stalwart-card">
        <div class="video-wrap border rounded-lg">
            <img src="https://schoolofdesign.dpu.edu.in/images/stalwarts/mohan.jpg">
            <video src="https://schoolofdesign.dpu.edu.in/images/stalwarts/dkmohan.mp4" controls playsinline
                preload="none"></video>

            <div class="play-icon">
                <svg viewBox="0 0 24 24">
                    <polygon points="5,3 19,12 5,21" /></svg>
            </div>

        </div>
        
    </div>

</div>
    </div>
</section>


<script>
    document.querySelectorAll('.video-wrap').forEach(function (wrap) {

        const img = wrap.querySelector('img')
        const video = wrap.querySelector('video')
        const playIcon = wrap.querySelector('.play-icon')

        ;
        [img, playIcon].forEach(function (el) {

            el.addEventListener('click', function () {

                document.querySelectorAll('.video-wrap video').forEach(function (v) {

                    if (v !== video) {
                        v.pause()
                        resetCard(v.closest('.video-wrap'))
                    }

                })

                img.style.display = 'none'
                playIcon.style.display = 'none'
                video.style.display = 'block'
                video.play()

            })

        })

        video.addEventListener('ended', function () {
            resetCard(wrap)
        })

    })


    function resetCard(wrap) {

        wrap.querySelector('img').style.display = 'block'
        wrap.querySelector('.play-icon').style.display = 'flex'

        const v = wrap.querySelector('video')
        v.style.display = 'none'
        v.pause()
        v.currentTime = 0

    }
</script>

<!-- Guest Testi End -->