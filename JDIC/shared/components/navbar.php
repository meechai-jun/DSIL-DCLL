<?php
/**
 * Shared Navbar Component
 * Simplified Structure matching User Request
 */
?>
<!-- Header Section Start -->
 <header class="header-section" style="position: relative; background: #fff;">
     <div id="header-sticky" class="header-2">
         <div class="mega-menu-wrapper" style="border-radius: 0; background-color: #fff; box-shadow: none;">
             <div class="container">
                 <div class="header-main style-2">
                     <div class="header-left">
                         <div class="logo">
                             <a href="index.php" class="header-logo">
                                 <!-- Logo path from Oldversion -->
                                 <img src="./assets/public/logo/dcllLogo.jpg" style="width: 220px;" alt="logo-img">
                             </a>
                         </div>
                     </div>
                     <div class="header-right d-flex justify-content-end align-items-center">
                         <div class="mean__menu-wrapper">
                             <div class="main-menu">
                                 <nav id="mobile-menu">
                                     <ul>
                                         <li>
                                             <a href="index.php">Home</a>
                                         </li>
                                         <li>
                                             <a href="about.php">About Us</a>
                                         </li>
                                         <li class="has-dropdown">
                                             <a href="program.php">Programs</a>
                                             <ul class="submenu">
                                                 <li><a href="program.php#basic">Basic (Age 5-10)</a></li>
                                                 <li><a href="program.php#advance">Advance (Age 8-15)</a></li>
                                                 <li><a href="program.php#private">Private Exclusive</a></li>
                                             </ul>
                                         </li>
                                         <li>
                                             <a href="contact.php">Contact Us</a>
                                         </li>
                                     </ul>
                                 </nav>
                             </div>
                         </div>
                         <div class="header-button">
                             <a href="contact.php" class="theme-btn">
                                 <span>
                                     Get A Quote
                                     <i class="fa-solid fa-arrow-right-long"></i>
                                 </span>
                             </a>
                         </div>
                         <div class="header__hamburger d-xl-none my-auto">
                             <div class="sidebar__toggle">
                                 <i class="fas fa-bars"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>

<!-- Dropdown Menu Styles -->
<style>
/* Dropdown Menu Styles */
.main-menu nav ul li {
    position: relative;
}

.main-menu nav ul li.has-dropdown > a::after {
    content: '\f107';
    font-family: 'Font Awesome 6 Pro';
    font-weight: 900;
    margin-left: 5px;
    font-size: 12px;
    transition: transform 0.3s ease;
}

.main-menu nav ul li.has-dropdown:hover > a::after {
    transform: rotate(180deg);
}

/* Submenu Styling */
.main-menu nav ul li .submenu {
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    min-width: 200px;
    padding: 10px 0;
    margin: 0;
    list-style: none;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.3s ease;
    z-index: 999;
    border-radius: 4px;
}

.main-menu nav ul li.has-dropdown:hover .submenu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.main-menu nav ul li .submenu li {
    display: block;
    width: 100%;
}

.main-menu nav ul li .submenu li a {
    display: block;
    padding: 10px 20px;
    color: #333;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 15px;
}

.main-menu nav ul li .submenu li a:hover {
    background: #f5f5f5;
    color: #007bff;
    padding-left: 25px;
}

/* Mobile Responsive Styles */
@media (max-width: 1199px) {
    .main-menu nav ul li .submenu {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        box-shadow: none;
        background: transparent;
        padding-left: 20px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }
    
    .main-menu nav ul li.has-dropdown.active .submenu {
        max-height: 300px;
    }
    
    .main-menu nav ul li.has-dropdown > a::after {
        position: absolute;
        right: 15px;
    }
    
    .main-menu nav ul li .submenu li a {
        padding: 8px 15px;
        font-size: 14px;
    }
    
    .main-menu nav ul li .submenu li a:hover {
        padding-left: 20px;
    }
}

/* Mobile Menu Toggle for Dropdown */
@media (max-width: 1199px) {
    .main-menu nav ul li.has-dropdown > a {
        cursor: pointer;
    }
}
</style>

<!-- JavaScript for Mobile Dropdown Toggle -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile dropdown toggle (for screens < 1200px)
    if (window.innerWidth < 1200) {
        const dropdownItems = document.querySelectorAll('.main-menu nav ul li.has-dropdown > a');
        
        dropdownItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const parent = this.parentElement;
                
                // Toggle active class
                parent.classList.toggle('active');
                
                // Close other dropdowns
                document.querySelectorAll('.main-menu nav ul li.has-dropdown').forEach(dropdown => {
                    if (dropdown !== parent) {
                        dropdown.classList.remove('active');
                    }
                });
            });
        });
    }
    
    // Re-enable on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1200) {
            document.querySelectorAll('.main-menu nav ul li.has-dropdown').forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }
    });
});
</script>