
<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/falcon/v3.4.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 May 2022 07:51:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Institut le pivot</title>
<!-- Import Material Icons from Google CDN -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    <link rel="stylesheet" href="{{asset('assets/richtexteditor/rte_theme_default.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.css') }}" />
    <meta name="theme-color" content="#ffffff">
    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="{{asset('assets/vendors/overlayscrollbars/OverlayScrollbars.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/richtexteditor/rte.js')}}"></script>
    <script>
        RTE_DefaultConfig.url_base = 'richtexteditor'
    </script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('assets/vendors/overlayscrollbars/OverlayScrollbars.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme-rtl.min.css')}}" rel="stylesheet" id="style-rtl">
    <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset('assets/css/user-rtl.min.css')}}" rel="stylesheet" id="user-style-rtl">
    <link href="{{asset('assets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
            @include('admin.layouts.partials.sidebar')
            @include('admin.layouts.partials.header')
            @if (\Session::has('message'))
            <div class="alert alert-success">
                <p>{{ \Session::get('message') }}</p>
            </div><br />
            @endif
            @yield('content')

            @if (Session::get('message'))
            <div class="position-fixed top-5 end-0 p-3" style="z-index: 5">
                <div class="toast hide" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-success text-white"><strong
                            class="me-auto">Notification</strong><small>1 S ago</small><button
                            class="btn-close btn-close-white" type="button" data-bs-dismiss="toast"
                            aria-label="Close"></button></div>
                    <div class="toast-body bg-success text-white">{{ Session::get('message') }}</div>
                </div>
            </div>
        @endif
            @include('admin.layouts.partials.footer')
        </div>
    </main>
            @include('admin.layouts.partials.parametre')
                <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('assets/vendors/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendors/anchorjs/anchor.min.js')}}"></script>
    <script src="{{asset('assets/vendors/is/is.min.js')}}"></script>
    <script src="{{asset('assets/vendors/prism/prism.js')}}"></script>
    <script src="{{asset('assets/vendors/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('assets/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('assets/vendors/lodash/lodash.min.js')}}"></script>
    <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="{{asset('assets/vendors/list.js/list.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/toast.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script>
        var editor1 = new RichTextEditor("#div_editor1");
    </script>
    <script>
        var lightbox = GLightbox();
        lightbox.on('open', (target) => {
            console.log('lightbox opened');
        });
        var lightboxDescription = GLightbox({
            selector: '.glightbox2'
        });
        var lightboxVideo = GLightbox({
            selector: '.glightbox3'
        });
        lightboxVideo.on('slide_changed', ({
            prev,
            current
        }) => {
            console.log('Prev slide', prev);
            console.log('Current slide', current);

            const {
                slideIndex,
                slideNode,
                slideConfig,
                player
            } = current;

            if (player) {
                if (!player.ready) {
                    // If player is not ready
                    player.on('ready', (event) => {
                        // Do something when video is ready
                    });
                }

                player.on('play', (event) => {
                    console.log('Started play');
                });

                player.on('volumechange', (event) => {
                    console.log('Volume change');
                });

                player.on('ended', (event) => {
                    console.log('Video ended');
                });
            }
        });

        var lightboxInlineIframe = GLightbox({
            selector: '.glightbox4'
        });

        /* var exampleApi = GLightbox({ selector: null });
        exampleApi.insertSlide({
            href: 'https://picsum.photos/1200/800',
        });
        exampleApi.insertSlide({
            width: '500px',
            content: '<p>Example</p>'
        });
        exampleApi.insertSlide({
            href: 'https://www.youtube.com/watch?v=WzqrwPhXmew',
        });
        exampleApi.insertSlide({
            width: '200vw',
            content: document.getElementById('inline-example')
        });
        exampleApi.open(); */
    </script>
  </body>


<!-- Mirrored from prium.github.io/falcon/v3.4.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 May 2022 07:53:25 GMT -->
</html>
