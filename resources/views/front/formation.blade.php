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
    <section class="course_details padding_bottom">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-4 col-md-86">

                </div>
                <div class="col-xl-3 col-md-2" data-aos="fade-up" data-aos-duration="1200">
                            <div class="motivation_video1">
                                <a href="{{isset($video) ? url('storage/' . $video->video) : '#'}}" class="animated_play_button popup_youtube">
                                <span class="flaticon-play-button"></span></a>
                            </div>
                </div>
                <div class="col-xl-5 col-md-5" data-aos="fade-up" data-aos-duration="1200">

                </div>
            </div>
        </div>
    </section>
      <!-- courses part here -->
      <div id="content" class="site-content" bis_skin_checked="1">
        <div class="lp-archive-courses" bis_skin_checked="1">
            <div class="lp-content-area" bis_skin_checked="1">
                <header class="learn-press-courses-header ml-4 mb-5">
                    <h1>Formations</h1>
                    <button onclick="cours(0)" class="btn btn-primary" id="type_0">Toutes les formations</button>
                     @foreach($types as $item)
                     <button onclick="cours('{{$item->id}}')" id="{{'type_'.$item->id}}" class="btn btn-primary">{{$item->nom}}</button>
                     @endforeach
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
                <ul class="learn-press-courses" data-layout="list" id="tet">
                    @foreach($formations as $item)
                    <li id="post-1026" class="post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course">
                        <div class="course-item" bis_skin_checked="1">
                            <div class="course-wrap-thumbnail" bis_skin_checked="1">
                                <div class="course-thumbnail" bis_skin_checked="1">
                                    <a href="course-details.html" bis_skin_checked="1">
                                        <div class="thumbnail-preview" bis_skin_checked="1">
                                            <div class="thumbnail" bis_skin_checked="1">
                                                <div class="centered" bis_skin_checked="1">
                                                    <img width="370" height="280" src="{{isset($item->photo) ? url('storage/' . $item->photo) : '#'}}" class="attachment-500x300 size-500x300 wp-post-image" alt="Software Development" loading="lazy" title="Software Development">
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
                                    <div class="meta-item meta-item-duration" bis_skin_checked="1"><span class="text-primary">Durée : </span>Aléatoire</div>
                                    <div class="meta-item meta-item-level" bis_skin_checked="1"><span class="text-primary">Niveau : </span>Intermediaire</div>
                                </div> <!-- END .course-content-meta -->
                                <div class="separator" bis_skin_checked="1"></div>
                                <div class="course-info" bis_skin_checked="1">
                                    <div class="course-excerpt" bis_skin_checked="1">{!! Str::limit($item->description, 150, '...')  !!}</div>
                                    <div class="clearfix" bis_skin_checked="1"></div>
                                    <!-- START .course-content-footer -->
                                    <div class="course-footer" bis_skin_checked="1">
                                        <div class="course-price" bis_skin_checked="1">
                                            <span class="price text-primary">Aléatoire XAF</span>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script defer>
     function cours(id){
        let table = document.getElementById('tet');
            $.ajax({
                url:"/cours/search_cours/"+id,
                type:'GET',
                data:[],
                success:function(data){
                        let t="";
                        let duree;
                        let prix;
                        console.log(data);
                        for(i=0; i< data.length;i++){
                            if (data[i].duree == undefined){
                                duree = "Aléatoire";
                            }else{
                                duree = data[i].duree;
                            }
                            if (data[i].prix == undefined){
                                prix = "Aléatoire";
                            }else{
                                prix = data[i].prix;
                            }

                            t = t +  "<li id='post-1026' class='post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course'>"+
                        "<div class='course-item' bis_skin_checked='1'>"+
                            "<div class='course-wrap-thumbnail' bis_skin_checked='1'>"+
                                "<div class='course-thumbnail' bis_skin_checked='1'>"+
                                    "<a href='course-details.html' bis_skin_checked='1'>"+
                                        "<div class='thumbnail-preview' bis_skin_checked='1'>"+
                                            "<div class='thumbnail' bis_skin_checked='1'>"+
                                                "<div class='centered' bis_skin_checked='1'>"+
                                                    "<img width='370' height='280' src='storage/"+ data[i].photo + "' class='attachment-500x300 size-500x300 wp-post-image' alt='Software Development' loading='lazy' title='Software Development'>"+
                                                "</div>"+
                                            "</div>"+
                                        "</div>"+
                                    "</a>"+                                "</div>"+
                            "</div><!-- START .course-content -->"+
                            "<div class='course-content' bis_skin_checked='1'>"+
                                "<div class='course-categories' bis_skin_checked='1'>"+
                                    "<a href='{{ route('cours.show', '') }}/"+data[i].id+"' rel='tag' bis_skin_checked='1'>"+data[i].nom+"</a>"+
                                "</div>"+
                                "<span class='course-instructor'>"+
                                "</span>"+
                                "<a href='course-details.html' class='course-permalink' bis_skin_checked='1'>"+
                                    "<h3 class='course-title'>"+data[i].nom+"</h3>"+
                                "</a>"+
                                "<!-- START .course-content-meta -->"+
                                "<div class='course-wrap-meta' bis_skin_checked='1'>"+
                                    "<div class='meta-item meta-item-duration' bis_skin_checked='1'><span class='text-primary'>Durée : </span>"+duree+"</div>"+
                                    "<div class='meta-item meta-item-level' bis_skin_checked='1'><span class='text-primary'>Niveau : </span>Intermediaire</div>"+
                                "</div> <!-- END .course-content-meta -->"+
                                "<div class='separator' bis_skin_checked='1'></div>"+
                                "<div class='course-info' bis_skin_checked='1'>"+
                                    "<div class='course-excerpt' bis_skin_checked='1'>{!! Str::limit($item->description, 150, '...')  !!}</div>"+
                                    "<div class='clearfix' bis_skin_checked='1'></div>"+
                                    "<!-- START .course-content-footer -->"+
                                    "<div class='course-footer' bis_skin_checked='1'>"+
                                        "<div class='course-price' bis_skin_checked='1'>"+
                                            "<span class='price text-primary'>"+prix+" XAF</span>"+
                                        "</div>"+
                                    "</div>"+
                                    "<!-- END .course-content-footer -->"+
                                    "<div class='course-readmore' bis_skin_checked='1'>"+
                                        "<a href='{{ route('cours.show', '') }}/"+data[i].id+"' bis_skin_checked='1'>Voir plus</a>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                        "</div>"+
                    "</li>";

                        }
                        table.innerHTML = t;
                },
                error:function(data){
                    console.log('error',data);
                }

            });
     }
    
</script>
