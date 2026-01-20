<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<style>
    .mySwiper {
        --swiper-theme-color: #000;
    }
    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="assets/images/banners/1.png" alt="DCLL Banner 1">
        </div>
        <div class="swiper-slide">
            <img src="assets/images/banners/2.png" alt="DCLL Banner 2">
        </div>
        <div class="swiper-slide">
            <img src="assets/images/banners/3.png" alt="DCLL Banner 3">
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>