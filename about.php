<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <?php include 'cdn.php'; ?>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
    <title>About Us - </title>

</head>


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
    <div class="about-heading">
        <h1 class="text-center mt-5">About Us</h1>
    </div>
    <div class="about-text">
        <p>
            Welcome to A-mole, your trusted software company in Ghana! At A-mole,
            we are passionate about delivering exceptional services to meet your digital needs.
            With our team of highly skilled professionals, we provide a range of innovative solutions designed to enhance your online presence, ensure server security, and streamline your messaging and branding.
        </p>
        <p>
            Softnage, our flagship division, specializes in website design, robust server security,
            and website application development. We understand the importance of a visually appealing
            and user-friendly website, which is why our talented designers and developers work closely
            with you to create stunning websites that reflect your unique brand identity. Additionally,
            we prioritize server security to safeguard your valuable data and protect your online assets.
        </p>
        <p>
            Fasternd, our dedicated division for Brain Development programs, is focused on nurturing the minds
            of young learners. We believe in the power of education and cognitive development, which is why we
            offer cutting-edge brain development programs specifically tailored for children. Through our
            interactive and engaging programs, we aim to unlock the full potential of every child, fostering
            critical thinking, problem-solving skills, and creativity.
        </p>
        <p>
            Ghbox, our comprehensive printing and branding division, understands the significance of effective
            communication and visual identity for your business. We offer a wide range of printing services,
            including business cards, brochures, banners, and more. Our experienced team of designers and print
            experts work closely with you to create visually stunning and impactful materials that effectively
            convey your message and enhance your brand image.
        </p>
        <p>
            At A-mole, we pride ourselves on delivering exceptional customer service and top-notch solutions to our
            clients. We strive to understand your unique requirements and provide tailored solutions that cater to
            your specific needs. Our team stays up to date with the latest industry trends and technologies to ensure
            that we deliver cutting-edge solutions that give you a competitive edge.
        </p>
        <p>
            Whether you are a small business, a startup, or a large enterprise, A-mole is here to support you on your
            digital journey. Let us transform your online presence, secure your servers, unlock your child's potential,
            and elevate your brand messaging. Partner with A-mole today and experience the difference we can make for your
            business.
        </p>
    </div>
</section>

<section>
    <div class="client-heading">
        <h1 class="mt-5 text-center">Our Trusted Clients</h1>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper whole">
        <div class="swiper-wrapper mt-3">
            <div class="swiper-slide">
                <img src="./images/1.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/2.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/3.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/4.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/5.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/6.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/8.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/9.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/10.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/11.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/13.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/14.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/15.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/16.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/17.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/18.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/19.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/20.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/21.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/22.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/23.jpg" alt="">
            </div>
        </div>
        <!-- <div class="swiper-pagination "></div> -->
    </div>
</section>

<section id='me'>
    <?php include "footer.php"; ?>
</section>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: true,
        slidesPerView: 5,
        spaceBetween: 30,
        speed:2500,
    
    });
</script>