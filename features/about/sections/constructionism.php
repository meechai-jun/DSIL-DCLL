<style>
    /* เพิ่ม CSS ตกแต่งรูปภาพ */
    .img-frame {
        border: 10px solid #fff; /* ขอบขาว */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15); /* เงานุ่มลึก */
        border-radius: 15px;
        transition: transform 0.3s ease;
    }
    
    .img-frame:hover {
        transform: scale(1.02) rotate(1deg); /* ลูกเล่นขยับนิดๆ ตอนเอาเมาส์ชี้ */
    }

    /* กล่องข้อความไฮไลท์ */
    .concept-box {
        background-color: #fef8f0; /* สีส้มอ่อนมากๆ */
        border-left: 4px solid #ff6600;
        padding: 15px 20px;
        border-radius: 0 8px 8px 0;
        margin: 20px 0;
    }
</style>

<div class="bg-white pt-5 pb-5" id="constructionism">
    <div class="container pt-5 pb-5">
        
        <div class="row g-4 mb-5">
            <div class="col-12 text-center">
                <span class="d-block text-orange fw-bold text-uppercase mb-2" style="font-size: 0.9rem; letter-spacing: 3px;">
                    Educational Philosophy
                </span>
                <h1 class="fw-bold display-5 text-dark">
                    Constructionism
                </h1>
                <div class="mx-auto mt-3 rounded" style="width: 50px; height: 5px; background-color: #ff6600;"></div>
            </div>
        </div>

        <div class="row g-5 align-items-center"> <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1000">
                <div class="text-center position-relative px-4">
                    <img src="assets/images/constructionism.png" alt="Seymour Papert Quote" class="img-fluid img-frame">
                    
                    <div style="position: absolute; z-index: -1; bottom: -20px; right: 20px; width: 100px; height: 100px; background-color: #ff6600; opacity: 0.1; border-radius: 50%; filter: blur(20px);"></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12" data-aos="fade-left" data-aos-duration="1000"> <p class="lead text-dark fw-bold mb-3">
                    แนวคิดทางการศึกษาที่เชื่อว่า "ผู้เรียนจะเรียนรู้ได้ดีที่สุด เมื่อได้ลงมือสร้างสิ่งของจริงที่มีความหมายต่อตนเอง"
                </p>

                <p class="text-secondary">
                    แนวทางนี้เน้นการเรียนรู้ผ่านประสบการณ์ตรง การทดลอง และการแก้ปัญหาด้วยตัวเอง 
                    เพื่อให้เกิดองค์ความรู้ที่ฝังลึกและยั่งยืน
                </p>

                <div class="concept-box">
                    <p class="mb-0 text-dark">
                        <i class="bi bi-person-video3 text-orange me-2"></i>
                        โดยครูทำหน้าที่เป็น <strong>"ผู้อำนวยความสะดวก" (Facilitator)</strong> ในการเรียนรู้ ไม่ใช่เพียงแค่ผู้ถ่ายทอดความรู้สำเร็จรูป
                    </p>
                </div>

                <div class="mt-4 pt-3 border-top">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-lightbulb text-orange fs-4 me-3"></i>
                        <div>
                            <span class="text-muted small text-uppercase fw-bold">Origin</span>
                            <p class="text-secondary small mb-0">
                                แนวคิดนี้ได้รับการพัฒนาจาก <strong>Seymour Papert</strong> ผู้ซึ่งได้รับแรงบันดาลใจจาก Jean Piaget 
                                และได้นำมาประยุกต์ใช้ในเทคโนโลยีเพื่อการเรียนรู้
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>