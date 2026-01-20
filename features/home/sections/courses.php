<style>
    /* --- Custom CSS สำหรับส่วนนี้โดยเฉพาะ --- */
    
    .category-section {
        padding-top: 80px; /* เผื่อที่ด้านบนให้ไอคอนที่ลอยอยู่ */
        padding-bottom: 60px;
    }

    /* กล่องการ์ดหลัก */
    .cat-card {
        position: relative;
        border-radius: 15px;
        padding: 60px 20px 40px 20px; /* Padding บนเยอะหน่อย กันข้อความทับไอคอน */
        color: #ffffff;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        height: 100%; /* สำคัญ: บังคับให้สูงเต็ม Column */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start; /* จัดเนื้อหาเริ่มจากบนลงล่าง */
    }

    /* Effect ตอนเอาเมาส์ชี้ */
    .cat-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }

    /* กล่องไอคอนวงกลมสีขาว */
    .cat-icon-box {
        width: 90px;
        height: 90px;
        background-color: #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem; /* ขนาดไอคอน */
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        
        /* เทคนิคจัดตำแหน่งให้ลอยอยู่ตรงกลางขอบบน */
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%); /* ดึงกลับไป 50% ให้กึ่งกลางพอดี */
        z-index: 2;
    }

    /* เส้นขีดใต้หัวข้อ */
    .cat-title-line {
        width: 40px;
        height: 3px;
        background-color: #ffffff;
        margin: 10px auto 15px auto;
        border-radius: 2px;
    }

    .cat-title {
        font-weight: 700;
        font-size: 1.5rem;
        margin-top: 10px;
    }

    .cat-desc text-white {
        font-size: 0.95rem;
        font-weight: 300;
        line-height: 1.5;
        opacity: 0.9;
        margin-bottom: 0;
    }

    /* --- สีประจำแต่ละการ์ด --- */
    .bg-expand { background-color: #F3B319; } /* เหลือง */
    .bg-expand .cat-icon-box { color: #F3B319; }

    .bg-explore { background-color: #FF0C3E; } /* แดง */
    .bg-explore .cat-icon-box { color: #FF0C3E; }

    .bg-engage { background-color: #003F6B; } /* น้ำเงินเข้ม */
    .bg-engage .cat-icon-box { color: #003F6B; }

    .bg-energize { background-color: #3BAFDA; } /* ฟ้า */
    .bg-energize .cat-icon-box { color: #3BAFDA; }

</style>

<div class="category-section mb-4">
    <div class="container">
        
        <div class="row g-4 align-items-stretch">

            <div class="col-lg-3 col-md-6">
                <div class="cat-card bg-expand">
                    <div class="cat-icon-box">
                        <i class="fas fa-chalkboard-teacher"></i> 
                    </div>
                    <h4 class="cat-title">Expand</h4>
                    <div class="cat-title-line"></div>
                    <p class="cat-desc text-white">
                        learning & sustainable Constructionism
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="cat-card bg-explore">
                    <div class="cat-icon-box">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h4 class="cat-title">Explore</h4>
                    <div class="cat-title-line"></div>
                    <p class="cat-desc text-white">
                        innovation & future learning
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="cat-card bg-engage">
                    <div class="cat-icon-box">
                        <i class="fas fa-users"></i> </div>
                    <h4 class="cat-title">Engage</h4>
                    <div class="cat-title-line"></div>
                    <p class="cat-desc text-white">
                        people, partners & communities
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="cat-card bg-energize">
                    <div class="cat-icon-box">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4 class="cat-title">Energize</h4>
                    <div class="cat-title-line"></div>
                    <p class="cat-desc text-white">
                        opportunities & responsible
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>