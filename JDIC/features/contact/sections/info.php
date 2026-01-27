<?php
/**
 * Contact Info Section - Refactored Modern Redesign
 */
?>
<!-- Contact Info Section -->
<section class="contact-info-section">
    <div class="container">
        <hr class="mb-5 opacity-25">
        <div class="row g-4 mb-5">
            <!-- Address -->
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="contact-card-modern p-4 rounded-4 h-100 bg-white shadow-sm position-relative overflow-hidden text-center justify-content-center d-flex flex-column align-items-center">
                   <div class="icon-wrapper mb-3 d-flex align-items-center justify-content-center rounded-circle gradient-orange shadow-sm" style="width: 70px; height: 70px;">
                        <i class="fas fa-map-marker-alt fa-2x text-white"></i>
                    </div>
                    <h5 class="fw-bold mb-2">ที่อยู่</h5>
                    <p class="mb-0 small text-dark">
                        126 ถนนประชาอุทิศ แขวงบางมด เขตทุ่งครุ กรุงเทพฯ 10140
                    </p>
                </div>
            </div>

            <!-- Phone -->
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="contact-card-modern p-4 rounded-4 h-100 bg-white shadow-sm position-relative overflow-hidden text-center justify-content-center d-flex flex-column align-items-center">
                    <div class="icon-wrapper mb-3 d-flex align-items-center justify-content-center rounded-circle gradient-blue shadow-sm" style="width: 70px; height: 70px;">
                        <i class="fas fa-phone-alt fa-2x text-white"></i>
                    </div>
                    <h5 class="fw-bold mb-2">โทรศัพท์</h5>
                    <p class="mb-1">
                        <a href="tel:024708495" class="text-decoration-none text-dark fw-medium">02-470-8495</a>
                    </p>
                    <p class="mb-0">
                        <a href="tel:0870368482" class="text-decoration-none text-dark fw-medium">087-036-8482</a>
                    </p>
                </div>
            </div>

            <!-- Facebook -->
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                 <div class="contact-card-modern p-4 rounded-4 h-100 bg-white shadow-sm position-relative overflow-hidden text-center justify-content-center d-flex flex-column align-items-center">
                    <div class="icon-wrapper mb-3 d-flex align-items-center justify-content-center rounded-circle gradient-purple shadow-sm" style="width: 70px; height: 70px;">
                        <i class="fab fa-facebook-f fa-2x text-white"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Facebook</h5>
                    <a href="https://www.facebook.com/jdic.dcll?locale=th_TH" target="_blank" class="text-decoration-none text-dark fw-medium">
                        Junior Digital Innovator Camp
                    </a>
                </div>
            </div>

            <!-- Line -->
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".9s">
                 <div class="contact-card-modern p-4 rounded-4 h-100 bg-white shadow-sm position-relative overflow-hidden text-center justify-content-center d-flex flex-column align-items-center">
                    <div class="icon-wrapper mb-3 d-flex align-items-center justify-content-center rounded-circle gradient-green shadow-sm" style="width: 70px; height: 70px;">
                        <i class="fab fa-line fa-2x text-white"></i>
                    </div>
                    <h5 class="fw-bold mb-2">LINE</h5>
                    <a href="https://line.me/R/ti/p/@dsil" target="_blank" class="text-decoration-none text-dark fs-5 fw-bold">
                        @dsil
                    </a>
                </div>
            </div>

        </div>
    </div>

    <style>
        .contact-card-modern {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .contact-card-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,0.1) !important;
            border-color: transparent;
        }

        .gradient-orange {
            background: linear-gradient(135deg, #FF9966 0%, #FF5E62 100%);
        }
        
        .gradient-blue {
             background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .gradient-purple {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .gradient-green {
             background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }
    </style>
</section>
