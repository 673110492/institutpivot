@extends('front1.layouts.app')

@section('content')
    <!-- Start Breadcrumb Part (Banner) -->
    <section class="breadcrumb_part blog_grid_bg" style="background-image: url('{{ asset('assets1/img/IMG_5444.jpg') }}'); background-size: cover; background-position: center; height: 300px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="breadcrumb_iner text-center" style="padding-top: 100px;">
                        <h2 style="color: #fff; text-shadow: 2px 2px 5px rgba(0,0,0,0.7);">Contact</h2>
                        <div class="breadcrumb_iner_link" style="font-size: 18px; color: #fff; text-shadow: 1px 1px 4px rgba(0,0,0,0.5);">
                            <a href="{{ route('accueil.index') }}" style="color: #fff;">Accueil</a>
                            <i class="arrow_carrot-right" style="color: #fff;"></i>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb Part -->

    <!-- Start Contact Us Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <!-- Contact Details -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Get In Touch</h5>
                    <p class="mb-4">Si vous avez des questions, n'hésitez pas à nous contacter via les informations ci-dessous.</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Office</h5>
                            <p class="mb-0">{{ isset($contact) ? $contact->adresse : "Dschang, Mobile immeuble CCA" }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0"><a href="tel:+{{ isset($contact) ? $contact->tel : '+237 651541340' }}">{{ isset($contact) ? $contact->tel : "651541340/651541340" }}</a></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0"><a href="mailto:{{ isset($contact) ? $contact->email : 'pivot@gmail.com' }}">{{ isset($contact) ? $contact->email : "gmail@gmail.com" }}</a></p>
                        </div>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="text-primary">Vous avez une question?</h3>
                    <form method="POST" action="{{ route('message.store') }}" class="form-horizontal container" enctype="multipart/form-data" style="background-color: #E3E3E3; padding: 3%;" data-aos-duration="1600" data-aos="fade-up">
                        {{ csrf_field() }}
                        <div class="form_single_item" style="margin-bottom: 15px;">
                            <input type="text" class="bg-white form-control" name="noms" placeholder="Nom complet" required style="border-radius: 25px; padding: 15px;">
                        </div>
                        <div class="form_single_item" style="margin-bottom: 15px;">
                            <input type="email" class="bg-white form-control" name="email" placeholder="Email" required style="border-radius: 25px; padding: 15px;">
                        </div>
                        <div class="form_single_item" style="margin-bottom: 15px;">
                            <input type="text" class="bg-white form-control" name="sujet" placeholder="Sujet" required style="border-radius: 25px; padding: 15px;">
                        </div>
                        <div class="form_single_item" style="margin-bottom: 15px;">
                            <textarea name="message" class="bg-white form-control" placeholder="Message" required style="border-radius: 25px; padding: 15px; min-height: 120px;"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Envoyer" style="border-radius: 25px; padding: 15px 30px;">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="social-icons mt-5 text-center" style="max-width: 600px; margin: 0 auto;">
        <a href="https://www.facebook.com" target="_blank" class="mx-2">
            <i class="fab fa-facebook-f" style="font-size: 40px; color: #1877f2;"></i>
        </a>
        <a href="https://www.twitter.com" target="_blank" class="mx-2">
            <i class="fab fa-twitter" style="font-size: 40px; color: #1da1f2;"></i>
        </a>
        <a href="https://www.instagram.com" target="_blank" class="mx-2">
            <i class="fab fa-instagram" style="font-size: 40px; color: #e4405f;"></i>
        </a>
        <a href="https://www.linkedin.com" target="_blank" class="mx-2">
            <i class="fab fa-linkedin-in" style="font-size: 40px; color: #0a66c2;"></i>
        </a>
        <a href="https://www.youtube.com" target="_blank" class="mx-2">
            <i class="fab fa-youtube" style="font-size: 40px; color: #ff0000;"></i>
        </a>
        <a href="https://wa.me/237651541340" target="_blank" class="mx-2">
            <i class="fab fa-whatsapp" style="font-size: 40px; color: #25d366;"></i>
        </a>
    </div>


@endsection
