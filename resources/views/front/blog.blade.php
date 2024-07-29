@extends('front.layouts.app')
@section('content')

    <!-- breadcrumb part -->
    <section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Blog Grid</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="index.html">Home</a>
                            <i class="arrow_carrot-right"></i>
                            <span>Blog Grid</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->

    <!-- blog grid part here -->
    <section class="blog_posts page_section_padding">
        <div class="container">
            <div class="row">
                <div data-aos="fade-up"
            data-aos-duration="1200" class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="blog_post_list">
                        <div class="single_page_blog_post" style="border:1px solid black;">
                            <img src="img/blog/blog_1.png" alt="#" class="img-fluid">
                            <div class="single_blog_content">
                                <div class="post_author">
                                    <p><i class="icon_profile"></i>Jim Séchen</p>
                                    <p><i class="icon_clock_alt"></i>October 14, 2023</p>
                                </div>
                                <h2> <a href="blog-details-right-sidebar.html">Top 10 WordPress Themes for Local Businesses</a> </h2>
                                <p>Twit cuppa Oxford car boot baking cakes I dropped a clanger 
                                cheeky bugger young delinquent say, hunky-dory ruddy butty matie
                                boy cheeky cup of char ummm I'm telling get stuffed mate owt to do 
                                with me blow.</p>
                                <a href="blog-details-right-sidebar.html" class="read_more_btn">Read More <i class="arrow_right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up"
            data-aos-duration="2400" class="page_pageination justify-content-start">
                <a class="current" href="#">1</a>
                <a href="#">2</a>
                <a href="#"> <i class="arrow_right"></i></a>
            </div>
        </div>
    </section>
    <!-- blog grid part end -->

    <!-- cta part here -->
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="cta_part_iner">
                        <h2>Best teachers in every subject. <br>
                            Let’s get started</h2>
                        <p>We can teach you anything</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cta_btn">
                        <a href="course-list.html" class="btn_3">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle_shape_1"></div>
        <div class="circle_shape_2"></div>
    </section>
    <!-- cta part end -->
@endsection