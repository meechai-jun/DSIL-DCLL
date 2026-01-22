# DSIL-DCLL Project

This repository contains the source code for the DSIL DCLL (Digital Constructionism Learning Lab) and JDIC web applications.

## Project Overview

The project consists of two main web applications:
1.  **DCLL (Digital Constructionism Learning Lab)**: located in the root directory.
2.  **JDIC**: located in the `JDIC/` subdirectory.

These applications are built with PHP and are designed to run in a Dockerized environment.

## Directory Structure

```
DSIL-DCLL/
├── index.php           # DCLL Home Page
├── about.php           # DCLL About Page
├── ...                 # Other DCLL pages and assets
└── JDIC/               # JDIC Sub-project Directory
    ├── index.php       # JDIC Home Page
    ├── ...             # JDIC pages and assets
```

## Getting Started

### Prerequisites

-   [Docker](https://www.docker.com/products/docker-desktop)
-   [Docker Compose](https://docs.docker.com/compose/install/)

### Installation & Setup

1.  Clone the repository (if you haven't already).
3.  Navigate to the `infra-dev` directory (where `compose.yml` is located).
    ```bash
    cd infra-dev
    ```
4.  Start the application using Docker Compose:

    ```bash
    docker compose up -d
    ```

## Development Infrastructure (`infra-dev`)

โปรเจกต์นี้แยกส่วนการตั้งค่า Docker Environment ไว้ในโฟลเดอร์ `infra-dev` เพื่อความเป็นระเบียบและง่ายต่อการจัดการ Environment สำหรับนักพัฒนา (Development)

ภายใน `infra-dev/` ประกอบด้วย:
-   **compose.yml.example**: ไฟล์หลักสำหรับรัน Docker Services (Web Server, Database, phpMyAdmin) และตั้งค่าในไฟล์เดียวเลย
-   **Dockerfile.example**: การตั้งค่า Image ของ PHP/Apache server

การแยกส่วนนี้ช่วยให้ Root Directory ของโปรเจกต์สะอาด และโฟกัสที่ Source Code ของ Application เป็นหลัก

## Accessing the Application

Once the Docker containers are running, you can access the sites at:

-   **DCLL Website**: [http://localhost:5173/](http://localhost:5173/)
-   **JDIC Website**: [http://localhost:5173/JDIC/](http://localhost:5173/JDIC/)
-   **phpMyAdmin**: [http://localhost:8443/](http://localhost:8443/) (Database Management)

### Database Credentials

-   **System Admin User**: `sysadmin`
-   **Password**: `sysadmin`
-   **Root Password**: `rootpassword`

## Technology Stack

-   **Frontend/Backend**: PHP, HTML, CSS, JavaScript
-   **Database**: MariaDB
-   **Runtime Environment**: Docker

## Feature-Based Architecture (แนวทางการพัฒนาแบบ Feature-Based)

โปรเจกต์นี้ใช้แนวคิดการออกแบบแบบ **Feature-Based** โดยปรับให้เข้ากับบริบทของ PHP ซึ่งหมายความว่าแต่ละ "ฟีเจอร์" (Feature) หรือหน้าเว็บแต่ละส่วน จะถูกจัดเก็บแยกกันและดูแลตัวเองอย่างสมบูรณ์ (Self-contained)

### แนวคิดหลัก (Core Concept)
แทนที่จะรวมไฟล์ CSS, JS หรือ Images ทั้งหมดไว้ในโฟลเดอร์กลาง เราจะกระจายไฟล์เหล่านี้ไปอยู่กับฟีเจอร์ที่เรียกใช้งาน เพื่อให้ง่ายต่อการดูแลรักษา (Maintainability) และลดความซับซ้อนเมื่อโปรเจกต์ขยายตัว เมื่อมีนักพัฒนาคนใหม่เข้ามารับงานต่อ จะสามารถโฟกัสแก้ไขเฉพาะฟีเจอร์ที่ต้องการได้ทันทีโดยไม่ต้องกังวลว่าจะกระทบส่วนอื่นโดยไม่ตั้งใจ

### โครงสร้างไดเรกทอรี (Directory Structure)
ทุกฟีเจอร์จะถูกจัดเก็บภายใต้โฟลเดอร์ `features/` โดยแต่ละฟีเจอร์จะมีโครงสร้างมาตรฐานดังนี้:

```
features/
└── [feature-name]/         # ชื่อ folder ตามชื่อฟีเจอร์
    ├── index.php           # Entry point หลัก (View/Controller logic)
    ├── css/                # สไตล์ชีต 'เฉพาะ' ของฟีเจอร์นี้
    │   └── style.css
    ├── js/                 # สคริปต์ 'เฉพาะ' ของฟีเจอร์นี้
    │   └── script.js
    ├── images/             # รูปภาพที่ใช้ 'เฉพาะ' ในฟีเจอร์นี้
    └── sections/           # (Optional) หากหน้าเว็บมีเนื้อหายาว สามารถแยกส่วนย่อยไว้ที่นี่
```

### ข้อแนะนำสำหรับการพัฒนา (Guidelines)
1.  **Isolation (การแยกส่วน)**: พยายามเขียน CSS และ JS ให้ทำงานเฉพาะใน Scope ของฟีเจอร์นั้นๆ
2.  **Asset Co-location (การจัดเก็บไฟล์)**: รูปภาพหรือไฟล์ Asset ที่ใช้เฉพาะหน้านั้นๆ ให้เก็บไว้ในโฟลเดอร์ของฟีเจอร์เลย ไม่ต้องนำไปรวมที่ `assets/` ส่วนกลาง (ยกเว้นไฟล์ที่ใช้ร่วมกันทั้งเว็บ เช่น โลโก้, ฟอนต์ ให้ไว้ที่ Shared Assets)
3.  **Self-Contained**: แต่ละฟีเจอร์ควรจะสามารถทำงานได้ด้วยตัวเองมากที่สุดเท่าที่เป็นไปได้
4.  **shared concept**: กรณีแต่ละ feature ต้องการใช้ js, css, image เหมือนกัน ให้ใช้ `shared` folder เท่านั้น ห้าม `import` ของข้าม feature, และพยายามหลีกเลี่ยงการ dupplicate ของ