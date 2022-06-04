<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Queens | Home</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <?php 
    $page = "home";
    include('header.php'); 
    // ['name'=>'Udaipur','image_url' => '/udaipur.jpeg','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
    $places = [
        ['name'=>'France','image_url' => '/France.jpeg','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
        ['name'=>'Rajasthan','image_url' => '/Rajasthan.jpeg','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
        ['name'=>'Kerala','image_url' => '/Kerala.jpeg','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
        ['name'=>'Vietnam','image_url' => '/Vietnam.jpeg','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
    ]
    ?>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 88px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider/slider_1.jpeg" alt="First slide">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Business Trips</h5>
                    <p>Aria is a top consultancy company specializing in business growth using online marketing and
                        conversion optimization tactics</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider/slider_2.jpeg" alt="Second slide">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Leisure Trips</h5>
                    <p>Aria is a top consultancy company specializing in business growth using online marketing and
                        conversion optimization tactics</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider/slider_3.jpeg" alt="Third slide">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Honeymoon and sightseeings</h5>
                    <p>Aria is a top consultancy company specializing in business growth using online marketing and
                        conversion optimization tactics</p>
                </div> -->
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="intro" class="basic-1">
        <div class="container-fluid">
            <h2 style="text-align: center;width: 100%;color: #572f89;">Trending Destination</h2>
            <div class="row">
                <?php
                    foreach ($places as $key => $place) {
                    ?>
                <div class="col-md-3 col-sm-6 places_box" style="padding: 10px 10px;">
                    <div class="card" style="border-radius: 10px;">
                        <img class="card-img-top" src="images/place<?= $place['image_url'];?>"
                            style="height: 300px;border-radius: 10px;">
                        <div class="card-body"
                            style="border-radius: 10px;position: absolute; background: #0000008a; height: 100%; width:100%;">
                            <h5 class="card-title" style="color: white;font-size: 31px;margin-top: 20px;">
                                <?= $place['name'];?>
                            </h5>
                            <div style="display: flex;position: absolute;bottom: 11px;width: 100%;left: 0px;">
                                <p style="color: white;font-weight: 600;margin-bottom: 0px;margin-left: 15px;">
                                    Starting
                                    From <br>24000/-</p>
                                <button type="button" class="btn know_more_details" city_name="<?= $place['name'];?>"
                                    city_description="<?= $place['description'];?>"
                                    style="color: white;font-weight: 600;border-color: white;padding: 0px 8px;height: 42px;/* float: right; */position: absolute;right: 15px;">KNOW
                                    MORE</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>



    <div class="modal fade" id="dealoftheday" tabindex="-1" role="dialog" aria-labelledby="dealofthedayTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: #572f89;">Deal OF THE MONTH</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="images/place/udaipur.jpeg" style="height: 300px;">
            </div>
        </div>
    </div>

    <div class="modal fade" id="productDescrition" tabindex="-1" role="dialog" aria-labelledby="productDescritionTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CityName" style="color: #572f89;"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="cityDis">
                    ...
                </div>
                <div class="modal-footer">
                    <a id="cityURL" href="packages-contact.php?package=udaipur">
                        <button type="button" class="btn " style="color: #c4315f;border-color: #c4315f;">BOOK
                            NOW</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <?php include('footer.php'); ?>
    <script>
    setTimeout(function() {
        $("#dealoftheday").modal("show");
    }, 2000);

    $('.know_more_details').click(function() {
        let name = $(this).attr('city_name');
        let description = $(this).attr('city_description');
        let url = 'packages-contact.php?package=' + name;
        $('#CityName').html(name);
        $('#cityDis').html(description);
        $('#cityURL').attr('href', url);
        $("#productDescrition").modal("show");
    });
    </script>

</body>

</html>