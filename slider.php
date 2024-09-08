
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="./images/1.jpg" alt="Hydropower Image 1">

        </div>
        <div class="swiper-slide">
            <img src="./images/2.jpg" alt="Hydropower Image 2">
        </div>
        <div class="swiper-slide">
            <video autoplay muted loop>
                <source src="./images/paani.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- Swiper JS -->
<!-- Swiper JS -->
<script src="swiper.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      slidesPerView: 1,
      spaceBetween: 0,
      autoplay: {
        delay: 10000, // 5000ms = 5 seconds
        disableOnInteraction: false, // Continue autoplay even if user interacts with the slider
      },
    });
</script>
