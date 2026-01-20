<style>
    /* --- CSS สำหรับ Goal Box (Card 4 ใบด้านล่าง) --- */
    .goal-box {
        background-color: #ffffff;
        border: 1px solid rgba(255, 102, 0, 0.1);
        border-left: 5px solid #ff6600;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.4s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .goal-box:hover {
        background: linear-gradient(135deg, #fff3e6 0%, #ffffff 100%);
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(255, 102, 0, 0.15);
        border-color: #ff6600;
    }

    .goal-box h4 {
        margin-bottom: 15px;
        position: relative;
        z-index: 2;
    }

    /* --- CSS สำหรับ List รายการสวยๆ (Modern List) --- */
    .modern-list-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
    }

    .icon-wrapper {
        flex-shrink: 0;
        margin-right: 1rem;
    }

    .icon-circle {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #ff6600;
        color: white;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        font-size: 1.1rem;
        box-shadow: 0 4px 6px rgba(255, 102, 0, 0.2);
    }

    /* --- CSS สำหรับ Quote Box --- */
    .quote-box {
        background-color: #fff8f2;
        border-left: 4px solid #ff6600;
        border-radius: 0 8px 8px 0;
        padding: 1.5rem;
        margin-top: 2rem;
        position: relative;
    }
</style>

<div class="pb-5 bg-white" id="goal">
    <div class="container pt-5 pb-5">
        <div class="row g-4 align-items-center">

            <div class="col-12 text-center mb-3">
                <div class="text-center mb-4">
                    <h1 class="text-orange fs-1 fw-bold d-inline-block position-relative pb-2">
                        GOAL
                        <span style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 50%; height: 3px; background-color: #ff6600; border-radius: 2px;"></span>
                    </h1>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                <div class="position-relative">
                    <img src="./assets/images/goal_page.png" alt="goal image" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
                <h3 class="fw-bold text-orange mb-3">มุ่งมั่นในการพัฒนาเยาวชนให้เติบโตเป็นพลเมืองที่ดีของสังคม</h3>
                <hr class="text-orange opacity-100" style="width: 100px; height: 3px; border-radius: 5px;">

                <div class="mt-4">
                    <div class="modern-list-item">
                        <div class="icon-wrapper">
                            <span class="icon-circle"><i class="bi bi-mortarboard-fill"></i></span>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">การเรียนรู้แบบองค์รวม</h5>
                            <p class="text-secondary mb-0">ส่งเสริมวิชาการ ทักษะชีวิต และคุณธรรมไว้ด้วยกันอย่างสมดุล</p>
                        </div>
                    </div>

                    <div class="modern-list-item">
                        <div class="icon-wrapper">
                            <span class="icon-circle"><i class="bi bi-lightbulb-fill"></i></span>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">ความคิดสร้างสรรค์</h5>
                            <p class="text-secondary mb-0">สร้างแรงบันดาลใจให้คิดวิเคราะห์ แก้ปัญหา และกล้าแสดงออก</p>
                        </div>
                    </div>

                    <div class="modern-list-item">
                        <div class="icon-wrapper">
                            <span class="icon-circle"><i class="bi bi-people-fill"></i></span>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">อยู่ร่วมกันอย่างเข้าใจ</h5>
                            <p class="text-secondary mb-0">รับผิดชอบต่อสังคม และเคารพความหลากหลายของผู้อื่น</p>
                        </div>
                    </div>

                    <div class="modern-list-item">
                        <div class="icon-wrapper">
                            <span class="icon-circle"><i class="bi bi-laptop-fill"></i></span>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">เทคโนโลยีเพื่อการเรียนรู้</h5>
                            <p class="text-secondary mb-0">ใช้เทคโนโลยีอย่างเหมาะสม พร้อมพัฒนาทักษะดิจิทัล</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="goal-box">
                            <h4 class="text-orange fw-bold">📚 พัฒนาความรู้</h4>
                            <p>สร้างระบบการเรียนรู้ที่ส่งเสริมการคิดวิเคราะห์ วิชาการ และนวัตกรรมที่ทันสมัย</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1100">
                        <div class="goal-box">
                            <h4 class="text-orange fw-bold">🧠 ทักษะชีวิต</h4>
                            <p>ฝึกฝนการใช้ชีวิตอย่างมีวินัย รู้จักตนเอง และสามารถอยู่ร่วมกับผู้อื่นได้อย่างมีความสุข</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1200">
                        <div class="goal-box">
                            <h4 class="text-orange fw-bold">❤️ คุณธรรมจริยธรรม</h4>
                            <p>ปลูกฝังจิตสาธารณะ ซื่อสัตย์ เคารพสิทธิ และรับผิดชอบต่อสังคม</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1300">
                        <div class="goal-box">
                            <h4 class="text-orange fw-bold">🌱 สภาพแวดล้อมที่ดี</h4>
                            <p>จัดสภาพแวดล้อมที่ปลอดภัย เป็นมิตร และส่งเสริมความร่วมมือระหว่างครูและนักเรียน</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>