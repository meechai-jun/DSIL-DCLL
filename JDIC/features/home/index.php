<?php

/**
 * JDIC - Home Feature Index
 */
$title = 'JDIC - DCLL-JDIC';
$css = '<link rel="stylesheet" href="features/home/css/main.css">';
?>
<!DOCTYPE html>
<html lang="en">
<?php include(__DIR__ . '/../../shared/layouts/head.php') ?>

<body>
    <!-- Mobile Sidebar -->
    <?php include(__DIR__ . '/../../shared/components/sidebar.php') ?>

    <!-- Header -->
    <?php include(__DIR__ . '/../../shared/components/navbar.php') ?>

    <!-- Features -->
    <?php include(__DIR__ . '/sections/hero.php') ?>
    <?php include(__DIR__ . '/sections/news-event.php') ?>
    <?php include(__DIR__ . '/sections/work-process.php') ?>
    <?php include(__DIR__ . '/sections/programs.php') ?>

    <!-- Video Section (from Oldversion) -->
    <section class="video-gallery-section section-padding ">
        <div class="container">
            <div class="video-box overflow-hidden rounded-4 shadow wow fadeInUp">
                <img src="https://placehold.co/1200x600/333333/ffffff?text=Activity+Video+Placeholder" class="w-100" alt="Video Cover">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include(__DIR__ . '/../../shared/components/footer.php') ?>

    <!-- Scripts -->
    <?php include(__DIR__ . '/../../shared/layouts/scripts.php') ?>

    <!-- Initialize Swiper for Programs -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var commonOptions = {
                slidesPerView: 1,
                spaceBetween: 24,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    576: {
                        slidesPerView: 1
                    },
                    768: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 3
                    },
                    1200: {
                        slidesPerView: 3
                    },
                }
            };

            var commonOptionsAdvance = {
                ...commonOptions,
                autoplay: {
                    delay: 7000,
                    disableOnInteraction: false,
                },
            }


            // Basic Slider
            var basicSwiper = new Swiper(".program-basic-slider", commonOptions);
            document.querySelectorAll('.basic-next').forEach(btn => {
                btn.addEventListener('click', () => basicSwiper.slideNext());
            });
            document.querySelectorAll('.basic-prev').forEach(btn => {
                btn.addEventListener('click', () => basicSwiper.slidePrev());
            });

            // Advanced Slider
            var advancedSwiper = new Swiper(".program-advanced-slider", commonOptionsAdvance);
            document.querySelectorAll('.advanced-next').forEach(btn => {
                btn.addEventListener('click', () => advancedSwiper.slideNext());
            });
            document.querySelectorAll('.advanced-prev').forEach(btn => {
                btn.addEventListener('click', () => advancedSwiper.slidePrev());
            });
        });
    </script>
</body>

</html>