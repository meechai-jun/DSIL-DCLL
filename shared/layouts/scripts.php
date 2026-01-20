<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>

<script src="assets/js/animate.js"></script>
<script src="assets/js/wow.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="assets/js/script.js"></script>

<script>
// Initialize animation libraries
new WOW().init();
AOS.init();

// Navbar Active Link Highlighter
(function() {
    var currentPageName = window.location.pathname.split('/').pop() || 'index.php';
    var $allNavigationLinks = $('.navbar-nav .nav-link, .submenu li a');
    
    $allNavigationLinks.each(function() {
        var $thisLink = $(this);
        var linkUrl = $thisLink.attr('href');
        var linkPageName = linkUrl.split('#')[0];
        var isCurrentPage = (linkPageName === currentPageName);
        
        if (isCurrentPage) {
            $thisLink.addClass('active');
            
            var $parentNavItem = $thisLink.closest('.nav-item');
            if ($parentNavItem.length) {
                $parentNavItem.find('.nav-link').addClass('active');
            }
        }
    });
})();
</script>