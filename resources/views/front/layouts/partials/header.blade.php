<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Institut 3iA</title>
    <link rel="icon" href="{{asset('img/3iA logo-10.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/> 
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('vendors/elegant_Icon/elegent_icon.css')}}"/>
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{asset('vendors/niceselect/css/nice-select.css')}}"/>
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('vendors/owl_carousel/css/owl.carousel.css')}}"/>
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{asset('vendors/magnify_popup/magnific-popup.css')}}"/>
    <!-- Countdown CSS -->
    <link rel="stylesheet" href="{{asset('vendors/countdown/css/Countdown.css')}}"/>
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
    <!-- aos CSS -->
    <link rel="stylesheet" href="{{asset('vendors/aos/aos.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/courses.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('style.css')}}"/>
</head>

<body>
    <!-- start Preloader  -->
    <div class="preloder_part">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- End Preloader  -->

    <!-- header part here -->
    <header class="header_part">
        <div class="sub_header bg-dark" style="background-color: rgba(0, 0, 255, 0.296)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-7">
                        <div class="header_contact_info">
                        <a href="tel:+{{ isset(footer()->tel) ? footer()->tel : '+237 659218936'}}" class="text-white"><i class="icon_phone"></i>{{ isset(footer()->tel) ? footer()->tel : "+237 659218936"}}</a>
                        <a href="mailto:{{ isset(footer()->email) ? footer()->email : 'lucrecenanfack@gmail.com'}}" class="text-white"><i class="icon_mail_alt"></i>{{ isset(footer()->email) ? footer()->email : "3ia@institut3ia.com"}}</a>
    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-5">
                        <div class="header_login_info">
                            <a href="#"  class="text-white">Devenir un Formateur</a>
                            <a href="#"  class="text-white">Mon Profil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_iner d-flex justify-content-between align-items-center">
                            <div class="sidebar_icon troggle_icon d-lg-none">
                                <i class="icon_menu"></i>
                            </div>
                            <div class="logo">
                                <a href="{{route('accueil.index')}}"><img src="{{asset('img/3ia logo-01.png')}}" alt="#" height="80" width="200"></a>
                            </div>

                            <nav class="navbar_bar">
                                <ul>
                                    <li class=""><a style="color: blue" href="{{route('accueil.index')}}">Acceuil</a></li>
                                    <li><a href="{{route('propos.index')}}">A propos</a></li>
                                    <li><a href="{{route('cours.index')}}">Formations</a></li>
                                    <li><a href="{{route('actu.index')}}">Actualités</a></li>
                                    <li><a href="{{route('contacter.index')}}">Contact</a></li>
                                    <!-- <li class="mega_menu_dropdown">
                                        <a class="mega_menu_dropdown-toggle nav-link active" href="#">Home</a>
                                        <ul>
                                            <li><a class="active" href="index.html">Homepage Style One</a></li>
                                            <li><a href="index-two.html">Homepage Style Two</a>
                                            </li>
                                            <li><a href="index-three.html">One Page Home</a>
                                            </li>
                                            <li><a href="index-four.html">Dark Homepage</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega_menu_dropdown">
                                        <a class="mega_menu_dropdown-toggle nav-link" href="#">All Courses</a>
                                        <ul>
                                            <li><a href="course-list.html">Course List</a></li>
                                            <li><a href="course-grid.html">Course Grid</a></li>
                                            <li><a href="course-slider.html">Course Slider</a></li>
                                            <li><a href="course-details.html">Course Details</a></li>
                                            <li><a href="course-category.html">Course Category</a></li>
                                            <li><a href="lessons.html">Lessons</a></li>
                                            <li><a href="quizzes.html">Quizzes</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega_menu_dropdown">
                                        <a class="mega_menu_dropdown-toggle nav-link" href="#">Blog Classic</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-slider.html">Blog Slider</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-details-no-sidebar.html">Blog Details No Sidebar</a></li>
                                            <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                            <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega_menu_dropdown">
                                        <a class="mega_menu_dropdown-toggle nav-link" href="#">Pages</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="instructor.html">Instructor</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="sample-page.html">Sample Page</a></li>
                                            <li><a href="page-left-sidebar.html">Page Left Sidebar</a></li>
                                            <li><a href="page-right-sidebar.html">Page Right Sidebar</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li> -->
                                    
                                </ul>
                            </nav>
                            <div class="navbar_btn">
                                <a href="#" class="btn_1">Formations En Cours</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header part end -->
