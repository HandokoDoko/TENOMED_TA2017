<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 14 May 2017 15:03:57 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="{{ asset('') }}assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >
    <link href="{{ asset('') }}assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}assets/css/superlist.css" rel="stylesheet" type="text/css" >
    <script src="{{ asset('') }}assets/js/jquery-2.2.3.min.js" type="text/javascript"></script>
    <script src="{{ asset('') }}assets/js/jquery-ui.js" type="text/javascript"></script>
    <style type="text/css">
        div#loading2
        {
            display: none;
        /*    width:100px;*/
            /*height: 100px;*/
            position: fixed;
            top: 43%;
            left: 50%;
            text-align:center;
            opacity: 2%;
            /*margin-left: -50px;*/
            /*margin-top: -100px;*/
            text-overflow: ellipsis;
            z-index:1006;
            font-size: 16px;

        /*    background-color: orangered;*/

        } 

        #loading-overlay { 
            background-color: #212121;
            position:fixed;
            width:100%;
            height:100%;
            top: 0px;
            padding:70px;
            z-index:1005;
            overflow: hidden;
            text-overflow: ellipsis;
            opacity: 0.6;
            filter: alpha(opacity=60);
        }
        
        #loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1007;
            display:none;
        }
        #loader {
            display: block;
            position: relative;
            left: 50%;
            top: 50%;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #3498db;
            -webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
            animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
        }

        #loader:before {
            content: "";
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #e74c3c;
            -webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
              animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
        }

        #loader:after {
            content: "";
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #f9c922;
            -webkit-animation: spin 1.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
              animation: spin 1.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
        }

        @-webkit-keyframes spin {
            0%   {
                -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(0deg);  /* IE 9 */
                transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
            }
            100% {
                -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(360deg);  /* IE 9 */
                transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
            }
        }
        @keyframes spin {
            0%   {
                -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(0deg);  /* IE 9 */
                transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
            }
            100% {
                -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(360deg);  /* IE 9 */
                transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
            }
        }
        
    </style>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}assets/favicon.png">

    <title>Superlist - Directory Template</title>
</head>


<body class="">
<div id="loading-overlay" hidden></div>
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>
<div class="page-wrapper">
    
    <header class="header header-transparent">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index-2.html">
                        <img src="{{ asset('') }}assets/img/logo-white.png" alt="Logo">
                        <span>Superlist</span>
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
                    <div class="header-bottom">
                        <!-- /.header-action -->

                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                            <li class="active" >
                                <a href="#">Home </a>

                            </li>
                            <li class="active" >
                                <a href="{{url('/login')}}" style="border: 1px solid white;padding: 10px 17px;margin-top: 10px;">Login</a>

                            </li>
                            <li class="active">
                                <a href="{{url('/register')}}">Sign Up</a>

                            </li>
                        </ul>

                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->
</header><!-- /.header -->




    <div class="main">
        <div class="main-inner">
            <div class="content">
                <div class="mt-150">
    <div class="hero-image">
    <div class="hero-image-inner" style="background-image: url('{{ asset('') }}assets/img/tmp/slider-large-3.jpg');">
        <div class="hero-image-content">
            <div class="container">
                <h1>Tenomed</h1>

                <p>Find your favorite cafe and resto. Invite your friend and do an awesome hangout.</p>

               
            </div><!-- /.container -->
        </div><!-- /.hero-image-content -->

        <div class="hero-image-form-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8 col-lg-4 col-lg-offset-7">
                        <form method="get" action="http://preview.byaviators.com/template/superlist/?">
                            <h2>Start Searching</h2>

                            <div class="hero-image-keyword form-group">
                                <input type="text" class="form-control" placeholder="Keyword">
                            </div><!-- /.form-group -->

                            <div class="hero-image-location form-group">
                                <select class="form-control" title="Location">
                                    <option>Bronx</option>
                                    <option>Brooklyn</option>
                                    <option>Manhattan</option>
                                    <option>Staten Island</option>
                                    <option>Queens</option>
                                </select>
                            </div><!-- /.form-group -->

                            <div class="hero-image-category form-group">
                                <select class="form-control" title="Category">
                                    <option value="">Automotive</option>
                                    <option value="">Jobs</option>
                                    <option value="">Nightlife</option>
                                    <option value="">Services</option>
                                </select>
                            </div><!-- /.form-group -->

                            <div class="hero-image-price form-group">
                                <input type="text" class="form-control" placeholder="Min. Price">
                            </div><!-- /.form-group -->

                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </form>
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.hero-image-form-wrapper -->
    </div><!-- /.hero-image-inner -->
</div><!-- /.hero-image -->

</div>

<div class="container">
    <div class="block background-white fullwidth pt0 pb0">
        <div class="partners">

    <a href="#">
        <img src="{{ asset('') }}assets/img/coffee.png" alt="">
        Coffee
    </a>
    <a href="#">
        <img src="{{ asset('') }}assets/img/dessert &bakes.png" alt="">
        Dessert & Bakes
    </a>
    <a href="#">
        <img src="{{ asset('') }}assets/img/dinner.png" alt="">
        Dinner
    </a>
    <a href="#">
        <img src="{{ asset('') }}assets/img/lunch.png" alt="">
        Lunch
    </a>
    <a href="#">
        <img src="{{ asset('') }}assets/img/luxurydinning.png" alt="">
        Drink
    </a>
</div><!-- /.partners -->

    </div>

    <div class="page-header">
    <h1>A recommended  &amp; Cafe </h1>
    <p>List of most recent interesting places our directory submitted <br>by our users. Check whats going on in the cafe.</p>
</div><!-- /.page-header -->

<div class="cards-simple-wrapper">
    <div class="row">
        

        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{ asset('') }}assets/img/tmp/product-2.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Tasty Brazil Coffee</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Coffee</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{ asset('') }}assets/img/tmp/product-3.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Healthy Breakfast</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Food</div>
                        
                            <div class="card-simple-price">$12 / person</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{ asset('') }}assets/img/tmp/product-4.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Coffee &amp; Newspaper</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Restaurant</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{ asset('') }}assets/img/tmp/product-5.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Boat Trip</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Vacation</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{ asset('') }}assets/img/tmp/product-6.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Italian Restaurant</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Restaurant</div>
                        
                            <div class="card-simple-price">$28 / person</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{ asset('') }}assets/img/tmp/product-7.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Best Brazil Coffee</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Pub</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{ asset('') }}assets/img/tmp/product-8.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Retro Shop</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Shop</div>
                        
                            <div class="card-simple-price">$3 / cup</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{ asset('') }}assets/img/tmp/product-9.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Wine Tasting</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Event</div>
                        
                            <div class="card-simple-price">$13 / ticket</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
    </div><!-- /.row -->
</div><!-- /.cards-simple-wrapper -->
    

    <div class="block background-white fullwidth mt80">
        <div class="row">
            <div class="col-sm-6">
                <div class="posts">
    

    <div class="post">
        <div class="post-image">
            <img src="{{ asset('') }}assets/img/tmp/product-6.jpg" alt="">
            <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
        </div><!-- /.post-image -->

        <div class="post-content">
            <div class="post-label">Automotive</div><!-- /.post-label -->
            <div class="post-date">07/12/2015</div><!-- /.post-date -->
            <h2>The Deep South</h2>
            <p>Oh, all right, I am. But if anything happens to me, tell them I died robbing some old man. Calculon is gonna kill us and it's a...</p>
        </div><!-- /.post-content -->
    </div><!-- /.post -->

    

    <div class="post">
        <div class="post-image">
            <img src="{{ asset('') }}assets/img/tmp/product-8.jpg" alt="">
            <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
        </div><!-- /.post-image -->

        <div class="post-content">
            <div class="post-label">Transport</div><!-- /.post-label -->
            <div class="post-date">06/18/2015</div><!-- /.post-date -->
            <h2>Raging Bender</h2>
            <p>For one beautiful night I knew what it was like to be a grandmother. Subjugated, yet honored. Then throw her in the laundry roo...</p>
        </div><!-- /.post-content -->
    </div><!-- /.post -->

    

    <div class="post">
        <div class="post-image">
            <img src="{{ asset('') }}assets/img/tmp/product-10.jpg" alt="">
            <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
        </div><!-- /.post-image -->

        <div class="post-content">
            <div class="post-label">Vacation</div><!-- /.post-label -->
            <div class="post-date">05/26/2015</div><!-- /.post-date -->
            <h2>The Prisoner of Benda</h2>
            <p>Check it out, y'all. Everyone who was invited is here. Well, thanks to the Internet, I'm now bored with. Is there a place on th...</p>
        </div><!-- /.post-content -->
    </div><!-- /.post -->
</div><!-- /.posts -->

            </div><!-- /.col-* -->

            <div class="col-sm-6">
                <div class="events">
    <div class="event">
        <div class="event-date">
            <span class="day">28</span>
            <span class="month">APR</span>
        </div><!-- /.event-date -->

        <div class="event-content">
            <h2>Cras cursus augue at porttitor</h2>
            <p>Nulla ac lectus posuere, rhoncus dui sed, finibus tellus. Proin enim mi.</p>
            <div class="event-time"><i class="fa fa-clock-o"></i> 8:00PM - 11:00PM</div><!-- /.event-time -->
        </div><!-- /.event-content -->
    </div><!-- /.event -->

    <div class="event">
        <div class="event-date">
            <span class="day">18</span>
            <span class="month">OCT</span>
        </div><!-- /.event-date -->

        <div class="event-content">
            <h2>Fusce pulvinar quam odio</h2>
            <p>Nulla ac lectus posuere, rhoncus dui sed, finibus tellus. Proin enim mi.</p>
            <div class="event-time"><i class="fa fa-clock-o"></i> 12:00AM - 2:00PM</div><!-- /.event-time -->
        </div><!-- /.event-content -->
    </div><!-- /.event -->

    <div class="event">
        <div class="event-date">
            <span class="day">22</span>
            <span class="month">FEB</span>
        </div><!-- /.event-date -->

        <div class="event-content">
            <h2>Cras libero justo, fringilla in quam</h2>
            <p>Nulla ac lectus posuere, rhoncus dui sed, finibus tellus. Proin enim mi.</p>
            <div class="event-time"><i class="fa fa-clock-o"></i> 10:00AM - 6:00PM</div><!-- /.event-time -->
        </div><!-- /.event-content -->
    </div><!-- /.event -->

    <div class="event">
        <div class="event-date">
            <span class="day">28</span>
            <span class="month">AUG</span>
        </div><!-- /.event-date -->

        <div class="event-content">
            <h2>Phasellus vitae velit sit</h2>
            <p>Nulla ac lectus posuere, rhoncus dui sed, finibus tellus. Proin enim mi.</p>
            <div class="event-time"><i class="fa fa-clock-o"></i> 8:00PM - 10:00PM</div><!-- /.event-time -->
        </div><!-- /.event-content -->
    </div><!-- /.event -->
</div><!-- /.events -->

            </div><!-- /.col-* -->
        </div><!-- /.row -->
    </div><!-- /.block -->

    <div class="block background-black-light fullwidth">
        <div class="row">
    <div class="col-sm-4">
        <div class="box">
            <div class="box-icon">
                <i class="fa fa-life-ring"></i>
            </div><!-- /.box-icon -->

            <div class="box-content">
                <h2>E-mail Support</h2>
                <p>We are always here to answer all your questions. Feel free to contact us.</p>

                <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
            </div><!-- /.box-content -->
        </div>
    </div><!-- /.col-sm-4 -->

    <div class="col-sm-4">
        <div class="box">
            <div class="box-icon">
                <i class="fa fa-flask"></i>
            </div><!-- /.box-icon -->

            <div class="box-content">
                <h2>Always Improving</h2>
                <p>Our dedicated team of developers are implementing awesome features.</p>

                <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
            </div><!-- /.box-content -->
        </div>
    </div><!-- /.col-sm-4 -->

    <div class="col-sm-4">
        <div class="box">
            <div class="box-icon">
                <i class="fa fa-thumbs-o-up"></i>
            </div><!-- /.box-icon -->

            <div class="box-content">
                <h2>Best Quality</h2>
                <p>We list only verifiend places and events to provide best content.</p>

                <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
            </div><!-- /.box-content -->
        </div>
    </div><!-- /.col-sm-4 -->
</div><!-- /.row -->

    </div><!-- /.block -->

    <div class="block background-white background-transparent-image fullwidth">
        <div class="page-header">
    <h1>Hand Picked by Superlist</h1>
    <p>Check out the best places &amp; events in the city. Each one is worth<br> of visiting. Experience which you never forget.</p>
</div><!-- /.page-header -->

<div class="cards-wrapper">
    <div class="row">
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card" data-background-image="{{ asset('') }}assets/img/tmp/product-7.jpg">
                        <div class="card-label">
                            <a href="listing-detail.html">Coffe</a>
                        </div><!-- /.card-label -->

                        <div class="card-content">
                            <h2><a href="listing-detail.html">Brazilian Coffe Taste</a></h2>

                            <div class="card-meta">
                                <i class="fa fa-map-o"></i> 347/26 22th Avenue, NYC USA
                            </div><!-- /.card-meta -->

                            <div class="card-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div>

                        </div><!-- /.card-content -->
                    </div><!-- /.card -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="card" data-background-image="{{ asset('') }}assets/img/tmp/product-4.jpg">
                        <div class="card-label">
                            <a href="listing-detail.html">Restaurant</a>
                        </div><!-- /.card-label -->

                        <div class="card-content">
                            <h2><a href="listing-detail.html">Coffee &amp; Newspaper</a></h2>

                            <div class="card-meta">
                                <i class="fa fa-map-o"></i> 347/26 22th Avenue, NYC USA
                            </div><!-- /.card-meta -->

                            <div class="card-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div>
                        </div><!-- /.card-content -->
                    </div><!-- /.card -->
                </div>

                <div class="col-sm-6">
                    <div class="card" data-background-image="{{ asset('') }}assets/img/tmp/product-2.jpg">
                        <div class="card-label">
                            <a href="listing-detail.html">Vacation</a>
                        </div><!-- /.card-label -->

                        <div class="card-content">
                            <h2><a href="listing-detail.html">Homemade Coffee</a></h2>

                            <div class="card-meta">
                                <i class="fa fa-map-o"></i> 347/26 22th Avenue, NYC USA
                            </div><!-- /.card-meta -->

                            <div class="card-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-actions">
                                <a href="#" class="fa fa-bookmark-o marked"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div>
                        </div><!-- /.card-content -->
                    </div><!-- /.card -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="card card-tall" data-background-image="{{ asset('') }}assets/img/tmp/product-1.jpg">
                <div class="card-label">
                    <a href="listing-detail.html">Vacation</a>
                </div><!-- /.card-label -->

                <div class="card-content">
                    <h2><a href="listing-detail.html">Trip to Paris, France</a></h2>

                    <div class="card-meta">
                        <i class="fa fa-map-o"></i> 347/26 22th Avenue, NYC USA
                    </div><!-- /.card-meta -->

                    <div class="card-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.card-rating -->

                    <div class="card-actions">
                        <a href="#" class="fa fa-bookmark-o"></a>
                        <a href="listing-detail.html" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart-o marked"></a>
                    </div>
                </div><!-- /.card-content -->
            </div><!-- /.card -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
</div><!-- /.cards-wrapper -->

    </div>

    <div class="block background-white fullwidth">
        <div class="page-header">
    <h1>Testimonials</h1>
    <p>Read what our customers says about our directory services and products. Do you want to<br> read more? Check out another <a href="#">interesting testimonials</a>.</p>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-sm-6">
        <div class="testimonial">
            <div class="testimonial-image">
                <img src="{{ asset('') }}assets/img/tmp/agent-1.jpg" alt="">
            </div><!-- /.testimonial-image -->

            <div class="testimonial-inner">
                <div class="testimonial-title">
                    <h2>Exactly What I Need</h2>

                    <div class="testimonial-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                </div><!-- /.testimonial-title -->

                Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.

                <div class="testimonial-sign">- Fiona Wilson</div><!-- /.testimonial-sign -->
            </div><!-- /.testimonial-inner -->
        </div><!-- /.testimonial -->

        <div class="testimonial">
            <div class="testimonial-image">
                <img src="{{ asset('') }}assets/img/tmp/agent-2.jpg" alt="">
            </div><!-- /.testimonial-image -->

            <div class="testimonial-inner">
                <div class="testimonial-title">
                    <h2>Best Support Ever</h2>

                    <div class="testimonial-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                </div><!-- /.testimonial-title -->

                Duis et magna vel est tempus vehicula vitae sit amet enim. Sed vitae ligula congue, luctus mauris eu, scelerisque felis.

                <div class="testimonial-sign">- Natasha Samson</div><!-- /.testimonial-sign -->
            </div><!-- /.testimonial-inner -->
        </div><!-- /.testimonial -->

        <div class="testimonial last">
            <div class="testimonial-image">
                <img src="{{ asset('') }}assets/img/tmp/agent-3.jpg" alt="">
            </div><!-- /.testimonial-image -->

            <div class="testimonial-inner">
                <div class="testimonial-title">
                    <h2>Best Directory</h2>

                    <div class="testimonial-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                </div><!-- /.testimonial-title -->

                Duis et magna vel est tempus vehicula vitae sit amet enim. Sed vitae ligula congue, luctus mauris eu, scelerisque felis.

                <div class="testimonial-sign">- Kim Glove</div><!-- /.testimonial-sign -->
            </div><!-- /.testimonial-inner -->
        </div><!-- /.testimonial -->
    </div><!-- /.col-* -->

    <div class="col-sm-6">
        <div class="testimonial">
            <div class="testimonial-image">
                <img src="{{ asset('') }}assets/img/tmp/agent-4.jpg" alt="">
            </div><!-- /.testimonial-image -->

            <div class="testimonial-inner">
                <div class="testimonial-title">
                    <h2>Totally Impressed</h2>

                    <div class="testimonial-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                </div><!-- /.testimonial-title -->

                Curabitur scelerisque nulla consequat elit semper, vitae lobortis velit tempor. Sed purus eros, pellentesque non maximus scelerisque, aliquam id magna. Integer in metus ante. Integer faucibus mi quis rhoncus cursus.

                <div class="testimonial-sign">- Richard Peterson</div><!-- /.testimonial-sign -->
            </div><!-- /.testimonial-inner -->
        </div><!-- /.testimonial -->

        <div class="testimonial last">
            <div class="testimonial-image">
                <img src="{{ asset('') }}assets/img/tmp/agent-5.jpg" alt="">
            </div><!-- /.testimonial-image -->

            <div class="testimonial-inner">
                <div class="testimonial-title">
                    <h2>Awesome Directory </h2>

                    <div class="testimonial-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                </div><!-- /.testimonial-title -->

                Donec finibus consectetur nunc, quis viverra nisi iaculis a. Donec non eros vel turpis bibendum sodales. Curabitur scelerisque nulla consequat elit semper, vitae lobortis velit tempor. Sed purus eros, pellentesque non maximus scelerisque, aliquam id magna. Integer in metus ante. Integer faucibus mi quis rhoncus cursus. Aliquam malesuada eleifend tellus, sit amet eleifend lacus aliquam in. Etiam a neque ut augue mattis gravida vel vel purus. Nullam bibendum viverra enim, in pretium purus.

                <div class="testimonial-sign">- Rachel Fast</div><!-- /.testimonial-sign -->
            </div><!-- /.testimonial-inner -->
        </div><!-- /.testimonial -->
    </div><!-- /.col-* -->
</div>

    </div>

    <div class="page-header">
    <h1>Fair Pricing</h1>
    <p>Our company offers best pricing options for field agents and companies. If you are interested <br>in special plan don't hesitate and contact our <a href="#">sales support</a>.</p>
</div><!-- /.page-header -->

<div class="pricings">
    <div class="row">
        <div class="col-sm-4">
            <div class="pricing">
                <div class="pricing-title">Personal</div><!-- /.pricing-title -->
                <div class="pricing-subtitle">For Personal Use</div><!-- /.pricing-subtitle -->
                <div class="pricing-price"><span class="pricing-currency">$</span>10.59 <span class="pricing-period">/ month</span></div><!-- /.pricing-price -->
                <a href="#" class="btn-primary">Get Started</a>
                <hr>
                <ul class="pricing-list">
                    <li><span>Max. Submissions</span><strong>Limited number</strong></li>
                    <li><span>Custom Agents</span><strong>One agent for all</strong></li>
                    <li><span>Support</span><strong>Mail communication</strong></li>
                </ul><!-- /.pricing-list -->
                <hr>
                <a href="#" class="pricing-action">Full List of Features</a>
            </div><!-- /.pricing -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="pricing">
                <div class="pricing-title">Business</div><!-- /.pricing-title -->
                <div class="pricing-subtitle">Best for Companies</div><!-- /.pricing-subtitle -->
                <div class="pricing-price"><span class="pricing-currency">$</span>19.59 <span class="pricing-period">/ month</span></div><!-- /.pricing-price -->
                <a href="#" class="btn-primary">Get Started</a>
                <hr>
                <ul class="pricing-list">
                    <li><span>Max. Submissions</span><strong>Unlimited number</strong></li>
                    <li><span>Custom Agents</span><strong>One agent for all</strong></li>
                    <li><span>Support</span><strong>Mail communication</strong></li>
                </ul><!-- /.pricing-list -->
                <hr>
                <a href="#" class="pricing-action">Full List of Features</a>
            </div><!-- /.pricing -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="pricing">
                <div class="pricing-title">Unlimited</div><!-- /.pricing-title -->
                <div class="pricing-subtitle">Entrepreneurs</div><!-- /.pricing-subtitle -->
                <div class="pricing-price"><span class="pricing-currency">$</span>49.59 <span class="pricing-period">/ month</span></div><!-- /.pricing-price -->
                <a href="#" class="btn-primary">Get Started</a>
                <hr>
                <ul class="pricing-list">
                    <li><span>Max. Submissions</span><strong>Unlimited number</strong></li>
                    <li><span>Custom Agents</span><strong>Unlimited number</strong></li>
                    <li><span>Support</span><strong>Personal training</strong></li>
                </ul><!-- /.pricing-list -->
                <hr>
                <a href="#" class="pricing-action">Full List of Features</a>
            </div><!-- /.pricing -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
</div><!-- /.pricings -->


    <div class="block background-white fullwidth mt80 mb-80">
        <div class="categories">
    <ul>
        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-bed"></i> Stay</a>
            <ul>
                <li><a href="#">Homestay</a>,</li>
                <li><a href="#">Hotel</a>,</li>
                <li><a href="#">Camping</a>,</li>
                <li><a href="#">Guesthouse,</a></li>
                <li><a href="#">Hostel</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-car"></i> Automotive</a>
            <ul>
                <li><a href="#">Mechanics</a>,</li>
                <li><a href="#">Gas Stations</a>,</li>
                <li><a href="#">Parts</a>,</li>
                <li><a href="#">Repair</a>,</li>
                <li><a href="#">Tires</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-suitcase"></i> Jobs</a>
            <ul>
                <li><a href="#">Cook</a>,</li>
                <li><a href="#">Hairdrasser</a>,</li>
                <li><a href="#">Management</a>,</li>
                <li><a href="#">Waiter</a>,</li>
                <li><a href="#">Worker</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-heart"></i> Medicine</a>
            <ul>
                <li><a href="#">Dental</a>,</li>
                <li><a href="#">Dermatology</a>,</li>
                <li><a href="#">Neurology</a>,</li>
                <li><a href="#">Pediatrics</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-glass"></i> Nightlife</a>
            <ul>
                <li><a href="#">Bars &amp; Pubs</a>,</li>
                <li><a href="#">Concert</a>,</li>
                <li><a href="#">Cinemas</a>,</li>
                <li><a href="#">Disco</a>,</li>
                <li><a href="#">Theater</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-home"></i> Real Estate</a>
            <ul>
                <li><a href="#">Apartmant</a>,</li>
                <li><a href="#">Building Area</a>,</li>
                <li><a href="#">Condo</a>,</li>
                <li><a href="#">House</a>,</li>
                <li><a href="#">Villa</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-cutlery"></i> Restaurant</a>
            <ul>
                <li><a href="#">Bistro</a>,</li>
                <li><a href="#">Brunch</a>,</li>
                <li><a href="#">Caffee</a>,</li>
                <li><a href="#">Dinning</a>,</li>
                <li><a href="#">Fast Food</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-futbol-o"></i> Sports</a>
            <ul>
                <li><a href="#">Bistro</a>,</li>
                <li><a href="#">Brunch</a>,</li>
                <li><a href="#">Caffee</a>,</li>
                <li><a href="#">Dinning</a>,</li>
                <li><a href="#">Fast Food</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-map-marker"></i> Travel</a>
            <ul>
                <li><a href="#">Cruises</a>,</li>
                <li><a href="#">Destinations</a>,</li>
                <li><a href="#">Holidays</a>,</li>
                <li><a href="#">Transportations</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>
    </ul>
</div><!-- /.categories -->

    </div>

    <div class="block background-secondary fullwidth mt80 mb-80 pt60 pb60">
        <div class="row">
    <div class="col-sm-12">
        <div class="contact-info-wrapper">
            <h2>Do You Have Any Questions?</h2>

            <div class="contact-info">
                <span class="contact-info-item">
                    <i class="fa fa-at"></i>
                    <span>support@sitename.com</span>
                </span><!-- /.contact-info-item -->

                <span class="contact-info-item">
                    <i class="fa fa-phone"></i>
                    <span>+123-456-789</span>
                </span><!-- /.contact-info-item -->
            </div><!-- /.contact-info-->
        </div><!-- /.contact-info-wrapper -->
    </div><!-- /.col-* -->
</div><!-- /.row -->

    </div>
</div><!-- /.container -->

            </div><!-- /.content -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

    <footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2>About Superlist</h2>

                    <p>Superlist is directory template built upon Bootstrap and SASS to bring great experience in creation of directory.</p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Contact Information</h2>

                    <p>
                        Your Street 123, Melbourne, Australia<br>
                        +1-123-456-789, <a href="#">sample@example.com</a>
                    </p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Stay Connected</h2>

                    <ul class="social-links nav nav-pills">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul><!-- /.header-nav-social -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-left">
                &copy; 2015 All rights reserved. Created by <a href="#">Aviators</a>.
            </div><!-- /.footer-bottom-left -->

            <div class="footer-bottom-right">
                <ul class="nav nav-pills">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                    <li><a href="contact-1.html">Contact</a></li>
                </ul><!-- /.nav -->
            </div><!-- /.footer-bottom-right -->
        </div><!-- /.container -->
    </div>
</footer><!-- /.footer -->

</div><!-- /.page-wrapper -->

<script src="{{ asset('') }}assets/js/jquery.js" type="text/javascript"></script>


<script src="{{ asset('') }}assets/js/map.js" type="text/javascript"></script>

<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js" type="text/javascript"></script>

<script src="{{ asset('') }}assets/libraries/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

<script src="{{ asset('') }}assets/libraries/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/libraries/flot/jquery.flot.spline.js" type="text/javascript"></script>

<script src="{{ asset('') }}assets/libraries/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing" type="text/javascript"></script>

<script type="text/javascript" src="{{ asset('') }}assets/libraries/jquery-google-map/infobox.js"></script>
<script type="text/javascript" src="{{ asset('') }}assets/libraries/jquery-google-map/markerclusterer.js"></script>
<script type="text/javascript" src="{{ asset('') }}assets/libraries/jquery-google-map/jquery-google-map.js"></script>

<script type="text/javascript" src="{{ asset('') }}assets/libraries/owl.carousel/owl.carousel.js"></script>
<script type="text/javascript" src="{{ asset('') }}assets/libraries/bootstrap-fileinput/fileinput.min.js"></script>

<script src="{{ asset('') }}assets/js/superlist.js" type="text/javascript"></script>
<script type="text/javascript">
showLoading();
  $(document).ready(function() {
    hideLoading();
    // alert("doko");
 });
    

function showLoading(){
        $("#loader-wrapper").fadeIn(100,0);    
        $("#loader-wrapper").show();
        $("#loader-wrapper").css({visibility:"visible"});
        $("#loader-wrapper").css({display:"block"});
       

        $("#loading-overlay").css({opacity:"0.6"});
        $("#loading-overlay").fadeIn(100,0);    
        $("#loading-overlay").css({visibility:"visible"});
//        $("#loading-overlay").css({display:"block"});

    };
    //hide loading bar
    function hideLoading(){
          
//        $("#loading2").hide("slow");
//        $("#loading-overlay").hide("slow");
          $("#loader-wrapper").css({display:"none"});
          $("#loading-overlay").fadeTo(0, 1000);
          $("#loading-overlay").css({display:"none"});
    };
    
    
</script>

</body>

<!-- Mirrored from preview.byaviators.com/template/superlist/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 14 May 2017 15:05:37 GMT -->
</html>
