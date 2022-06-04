<style>
.active_class {
    color: #c4315f !important;
}

.places_box .card-body:hover {
    background: transparent !important;
}
</style>
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="index.php"><img src="images/logo/new_logo.png" alt="alternative"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll <?= $page == 'home'?'active_class':''?> " href="index.php"
                    style="font-size: 15px;">HOME
                    <span class="
                    sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll <?= $page == 'aboutus'?'active_class':''?>" href="aboutus.php"
                    style="font-size: 15px;">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll <?= $page == 'Packages'?'active_class':''?>" href="packages.php"
                    style="font-size: 15px;">PACKAGES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll <?= $page == 'Testimonials'?'active_class':''?>" href="testimonial.php"
                    style="font-size: 15px;">TESTIMONIAL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll <?= $page == 'Contact'?'active_class':''?>" href="contact-us.php"
                    style="font-size: 15px;">CONTACT</a>
            </li>
        </ul>
        <span class="nav-item social-icons">
            <span class="fa-stack">
                <a href="https://www.facebook.com/travelqueensbom/">
                    <span class="hexagon"></span>
                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="https://www.instagram.com/travelqueensbom/">
                    <span class="hexagon"></span>
                    <i class="fab fa-instagram fa-stack-1x"></i>
                </a>
            </span>
        </span>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navbar -->