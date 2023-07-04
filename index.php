<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>Document</title>
    <?php include 'cdn.php'; ?>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/hero.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.jp/1800x500.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/hero.jpg" alt="">
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="company-grid">
            <div class="company">
                <h1>Hello</h1>

            </div>
            <div class="company">
                <div class="company-pic">
                    <img src="https://placehold.jp/300x200.png" alt="" style="width: 100%;">
                </div>

                <div class="company-detail">
                    Experience tailored application development, captivating website design,
                    and robust server security with Softnage. Empower your business today.
                </div>
                <div class="learn-more">
                    <h3>LEARN MORE SOFTNAGE</h3>
                </div>
            </div>
            <div class="company">
                <div class="company-pic">
                    <img src="https://placehold.jp/300x200.png" alt="" style="width: 100%;">
                </div>

                <div class="company-detail">

                    We help build life long mental skills,with our
                    brain development programmes for kids which goes
                    a long way to ensure their future success.
                </div>
                <div class="learn-more" style="border-bottom:  8px solid #9e7fba;">
                    <h3>LEARN MORE FASTERND</h3>
                </div>
            </div>
            <div class="company">
                <div class="company-pic">
                    <img src="https://placehold.jp/300x200.png" alt="" style="width: 100%;">
                </div>

                <div class="company-detail">

                    Maximize your digital presence with GHBox. We drive effective ads,
                    offer premium printing & branding, and streamline messaging.
                    Elevate your business today.
                </div>
                <div class="learn-more" style="border-bottom: 8px solid #61bb46;">
                    <h3>LEARN MORE GHBOX</h3>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="bg">
            <div class="two">
                <h1>Acta non verba: Actions, not words.</h1>
                <p>
                    At A-mole, we believe in the power of action. We don't just talk about success;
                    we make it happen. With our dedicated team and innovative solutions, we deliver
                    tangible results that speak for themselves.
                </p>
                <p>
                    Choose A-mole and experience the difference of action-driven excellence. Let us
                    turn your goals into reality through our relentless commitment to delivering impactful
                    solutions.
                </p>
                <p>
                    Don't just settle for words. Embrace the power of action with A-mole.
                </p>
            </div>
            <div class="one">
                <video width="100%" height="100%" controls muted autoplay loop>
                    <source src="/images/nt-animation.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>


    <section id="us">
        <div class="heading">
            <h1 class="text-center">Why Choose us</h1>
        </div>
        <div class="why-grid mt-4">
            <div class="why-box" style="border-bottom: 8px solid #4285F4;">
                <div class="info">
                    <h1><i class="fas fa-user-tie"></i></h1>
                    <h2>Experienced</h2>
                    <p>
                        We have expertise to deliver precisely on our promises.
                    </p>
                </div>
            </div>
            <div class="why-box" style="border-bottom: 8px solid #DB4437;">
                <h1><i class="fas fa-star"></i></h1>
                <h2>Superior Quality
                </h2>
                <p>
                    Quality is our hallmark. We provide our clients with quality works.
                </p>
            </div>
            <div class="why-box" style="border-bottom: 8px solid  #F4B400;">
                <h1><i class="fas fa-check-circle"></i></h1>
                <h2>Honest & Reliable
                </h2>
                <p>
                    We meet commitments and exceed expectations of our clients.
                </p>
            </div>
            <div class="why-box-" style="border-bottom: 8px solid  #0F9D58;">

                <h3>In need of our Service or Support?
                </h3>

                <a href="" class="c-btn">Contact Us</a>

            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper2", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            speed: 1000,
            autoplay: true,
            slidesPerView: getSlidesPerView(),
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        function getSlidesPerView() {
            if (window.innerWidth < 768) {
                return 2; // Set slidesPerView to 2 for narrow view
            } else {
                return 4; // Default slidesPerView for wider view
            }
        }

        window.addEventListener("resize", function() {
            swiper.params.slidesPerView = getSlidesPerView();
            swiper.update(); // Update swiper after the window is resized
        });
    </script>
</body>

</html>