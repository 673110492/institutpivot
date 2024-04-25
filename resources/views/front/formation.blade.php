@extends('front.layouts.app')
@section('content')
<section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Formations</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="{{route('accueil.index')}}">Accueil</a>
                            <i class="arrow_carrot-right"></i>
                            <span>Formations</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- courses part here --> 
      <div id="content" class="site-content" bis_skin_checked="1">
        <div class="lp-archive-courses" bis_skin_checked="1">
            <ul class="learn-press-breadcrumb">
                <li><a href="index.html" bis_skin_checked="1"><span></span></a></li>
                <li class="breadcrumb-delimiter"><i class="fas fa-chevron-right"></i></li>
                <li><span></span></li>
            </ul>
            <div class="lp-content-area" bis_skin_checked="1">
                <header class="learn-press-courses-header">
                    <h1>Formations</h1>
                </header>
                <!-- <div class="lp-courses-bar list" bis_skin_checked="1">
                    <form class="search-courses" method="get" action="index.html">
                        <input type="hidden" name="post_type" value="lp_course">
                        <input type="hidden" name="taxonomy" value="">
                        <input type="hidden" name="term_id" value="">
                        <input type="hidden" name="term" value="">
                        <input type="text" placeholder="Search courses..." name="s" value="">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="switch-layout" bis_skin_checked="1">
                        <input type="radio" name="lp-switch-layout-btn" value="grid" id="lp-switch-layout-btn-grid">
                        <label class="switch-btn grid" title="Switch to grid" for="lp-switch-layout-btn-grid"></label>
                        <input type="radio" name="lp-switch-layout-btn" value="list" id="lp-switch-layout-btn-list" checked="checked">
                        <label class="switch-btn list" title="Switch to list" for="lp-switch-layout-btn-list"></label>
                    </div>
                </div> -->
                <ul class="learn-press-courses" data-layout="list">
                    @foreach($formations as $item)
                    <li id="post-1026" class="post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course">
                        <div class="course-item" bis_skin_checked="1">
                            <div class="course-wrap-thumbnail" bis_skin_checked="1">
                                <div class="course-thumbnail" bis_skin_checked="1">
                                    <a href="course-details.html" bis_skin_checked="1">
                                        <div class="thumbnail-preview" bis_skin_checked="1">
                                            <div class="thumbnail" bis_skin_checked="1">
                                                <div class="centered" bis_skin_checked="1">
                                                    <img width="370" height="280" src="{{isset($item->photo) ? url('name/' . $item->photo) : '#'}}" class="attachment-500x300 size-500x300 wp-post-image" alt="Software Development" loading="lazy" title="Software Development">                
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class="course-content" bis_skin_checked="1">
                                <div class="course-categories" bis_skin_checked="1">
                                    <a href="{{route('cours.show',$item->id)}}" rel="tag" bis_skin_checked="1">{{$item->nom}}</a>    
                                </div>
                                <span class="course-instructor">
                                    <!-- <a href="my-profile.html" bis_skin_checked="1"><span>Adam Smith</span></a> -->
                                </span>
                                <a href="course-details.html" class="course-permalink" bis_skin_checked="1">          
                                    <h3 class="course-title">{{$item->nom}}</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class="course-wrap-meta" bis_skin_checked="1">
                                    <div class="meta-item meta-item-duration" bis_skin_checked="1">10 weeks</div>
                                    <div class="meta-item meta-item-level" bis_skin_checked="1">All levels</div>
                                    <div class="meta-item meta-item-lesson" bis_skin_checked="1">
                                        <span class="meta-number">11 lessons</span>
                                    </div>
                                    <div class="meta-item meta-item-quiz" bis_skin_checked="1">
                                        <span class="meta-number">1 quiz</span>
                                    </div>
                                    <div class="meta-item meta-item-student" bis_skin_checked="1">    <span class="meta-number">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class="separator" bis_skin_checked="1"></div>
                                <div class="course-info" bis_skin_checked="1">
                                    <div class="course-excerpt" bis_skin_checked="1">{!! Str::limit($item->description, 150, '...')  !!}</div>
                                    <div class="clearfix" bis_skin_checked="1"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class="course-footer" bis_skin_checked="1">
                                        <div class="course-price" bis_skin_checked="1">
                                            <span class="price">{{$item->prix}}XAF</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class="course-readmore" bis_skin_checked="1">
                                        <a href="{{route('cours.show',$item->id)}}" bis_skin_checked="1">Voir plus</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    @endforeach
                </ul>
                <nav class="learn-press-pagination navigation pagination">
                    <ul class="page-numbers">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#" bis_skin_checked="1">2</a></li>
                        <li><a class="next page-numbers" href="#" bis_skin_checked="1"><i class="arrow_right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- courses part end --> 
    
@endsection