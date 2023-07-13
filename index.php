<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>Home - Fastnerd </title>


    <?php include 'cdn.php'; ?>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap  -->

    <link rel="stylesheet" href="style.css">
    <style>
        .kkb {
            animation-duration: 4s;
        }

        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 3s;
            animation-name: fade;
            animation-duration: 3s;
        }

        .panel-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .panel-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            align-self: center;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
    </style>

</head>

<style>
    .swiper-text {
        position: absolute;
        width: 100%;
        text-align: left;
        padding: 0 18%;
    }

    .swiper-text h1 {
        width: 60%;
        color: #FFF;
    }
</style>
<?php include 'navbar.php'; ?>
<section>
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="swiper-text">
                    <h1>Digital Synergy,  Empower Web & Systems</h1>
                </div>
                <img src="./images/slidder/web-hero.jpg" alt="">
            </div>

            <div class="swiper-slide">
                <div class="swiper-text">
                    <h1>Revolutionizing Advertising,
                       
                        The Digital-Outdoor Connection
                    </h1>
                </div>
                <img src="./images/slidder/digital-hero.jpg" alt="">
            </div>

            <div class="swiper-slide">
                <div class="swiper-text">
                    <h1>Technical Solutions Made Easy,
                        Empowering Your Support
                    </h1>
                </div>
                <img src="./images/slidder/tech-hero.jpg" alt="">
            </div>

        </div>

    </div>
</section>
<section>
    <div class="company-grid">

        <div class="company">
            <div class="company-pic" style="border: 1px solid #ccc;">
                <img src="./images/slidder/digital.jpg" alt="" style="width: 100%;">
            </div>

            <div class="company-detail">
                Experience tailored application development, captivating website design,
                and robust server security with Softnage. Empower your business today.
            </div>
            <div class="learn-more">
                <h3>Digital and Outdoor</h3>
            </div>
        </div>
        <div class="company">
            <div class="company-pic" style="border: 1px solid #ccc;">
                <img src="./images/slidder/web.jpg" alt="" style="width: 100%;">
            </div>

            <div class="company-detail">

                We help build life long mental skills,with our
                brain development programmes for kids which goes
                a long way to ensure their future success.
            </div>
            <div class="learn-more" style="border-bottom:  8px solid #9e7fba;">
                <h3>Web and Systems</h3>
            </div>
        </div>
        <div class="company">
            <div class="company-pic" style="border: 1px solid #ccc;">
                <img src="./images/slidder/technical-support.jpg" alt="" style="width: 100%;">
            </div>

            <div class="company-detail">

                We specialize in technical and support services,
                providing expertise and assistance to clients in
                their technological endeavors.
            </div>
            <div class="learn-more" style="border-bottom: 8px solid #61bb46;">
                <h3>Technical & support</h3>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="bg">
        <div class="two">
            <h1 style="color: #fff; padding-bottom:20px;">Acta non verba: Actions, not words.</h1>
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

<section>
    <div class="moment-grid">
        <div class="moment-text">
            <h1>Create Moments with Fasternd Unleash Innovation</h1>
            <p style="margin-top: 20px;" From idea to realization, GHBox takes care of it all. Our team blends traditions with cutting-edge innovations, delivering unique projects with remarkable systems and solutions. <br>
                Experience the power of GHBox at GHBox.com. Unleash innovation and create unforgettable
                Wow Moments today!
            </p>
            <div class="three-grid">
                <div class="point">
                    <h4>
                        <i class="fas fa-server"></i>
                    </h4>
                    <p>
                        <b>
                            High-End
                        </b>
                        Systems completed to meet our customer's Expectations.
                    </p>
                </div>
                <div class="point">
                    <h4><i class="fas fa-clock"></i>
                    </h4>
                    <p>
                        <b>Working Hours</b> in the last year with passion to deliver quality services.
                    </p>
                </div>
                <div class="point">
                    <h4><i class="fas fa-users"></i>
                    </h4>

                    <p>
                        <b>
                            Members
                        </b>working tirelessly to deliver the best technology solutions.
                    </p>
                </div>
            </div>
        </div>
        <div class="moment-img" style="margin:0 auto;">
            <img src="./images/slidder/moment.jpg" alt="">
        </div>
    </div>
</section>


<!-- <div class="swiper mySwiper2">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="team-bg">
                <div class="team-style">
                    <div class="full-team">
                        <div class="team-img">
                            <div class="team-profile">

                            </div>
                            <div class="team-info">
                                <h6>Name:</h6>
                                <p>
                                    Company:
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team-message">
                        <h3>A review from our clients</h3>
                        <p>
                            Fasternd's expertise in web development helped us create a visually stunning and
                            user-friendly website. Their attention to detail and prompt support made the entire
                            process seamless. Our website now stands out, attracting more visitors and driving
                            increased conversions. Fasternd truly understands our brand and delivers exceptional
                            results that exceed our expectations.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="team-bg">
                <div class="team-style">
                    <div class="full-team">
                        <div class="team-img">
                            <div class="team-profile">

                            </div>
                            <div class="team-info">
                                <h6>Name:</h6>
                                <p>
                                    Company:
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team-message">
                        <h3>A review from our clients</h3>
                        <p>
                            Fasternd's expertise in web development helped us create a visually stunning and
                            user-friendly website. Their attention to detail and prompt support made the entire
                            process seamless. Our website now stands out, attracting more visitors and driving
                            increased conversions. Fasternd truly understands our brand and delivers exceptional
                            results that exceed our expectations.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="team-bg">
                <div class="team-style">
                    <div class="full-team">
                        <div class="team-img">
                            <div class="team-profile">

                            </div>
                            <div class="team-info">
                                <h6>Name:</h6>
                                <p>
                                    Company:
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team-message">
                        <h3>A review from our clients</h3>
                        <p>
                            Fasternd's expertise in web development helped us create a visually stunning and
                            user-friendly website. Their attention to detail and prompt support made the entire
                            process seamless. Our website now stands out, attracting more visitors and driving
                            increased conversions. Fasternd truly understands our brand and delivers exceptional
                            results that exceed our expectations.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div> -->

<section id="us" style="margin-top: 80px;">
    <div class="heading">
        <h1 class="text-center" style="margin-bottom: 50px;">Why Choose us</h1>
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
        <div class="why-box text-center" style="border-bottom: 8px solid #DB4437;">
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
<?php include './footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper2", {
        loop: true,
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