<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        </div>

    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link" href="{{url('home')}}" role="button" aria-controls="dashboard">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">dashboard</span></span>
                            <span class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>
                </li>
                <!-- accueil-->
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Accueil</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link" href="{{route('tete.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">calendar_today</span></span>
                            <span class="nav-link-text ps-1">En tete</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{route('video.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">video_library</span></span>
                            <span class="nav-link-text ps-1">Section video</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{route('temoignage.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">record_voice_over</span></span>
                            <span class="nav-link-text ps-1">Temoignages Etudiant</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{route('autre.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">feedback</span></span>
                            <span class="nav-link-text ps-1">Autres Temoignages</span>
                        </div>
                    </a>
                </li>
                <!-- a propos-->
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">A propos</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link" href="{{route('apropos.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">info</span></span>
                            <span class="nav-link-text ps-1">A propos</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{url('partenaire')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">group</span></span>
                            <span class="nav-link-text ps-1">Partenaire</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{url('contact')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">contact_mail</span></span>
                            <span class="nav-link-text ps-1">Contact</span>
                        </div>
                    </a>
                </li>
                <!-- formations-->
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Formations</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link" href="{{route('type_formation.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">school</span></span>
                            <span class="nav-link-text ps-1">Type de Formations</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{route('formation.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">book</span></span>
                            <span class="nav-link-text ps-1">Formations</span>
                        </div>
                    </a>
                </li>
                <!-- formateurs-->
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Formateurs</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link" href="{{route('formateur.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">person</span></span>
                            <span class="nav-link-text ps-1">Formateurs</span>
                        </div>
                    </a>
                </li>

                <!-- Inscriptions -->
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Inscriptions</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link" href="{{route('pre_inscription.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">how_to_reg</span></span>
                            <span class="nav-link-text ps-1">Pré-Inscrit</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{route('fiche.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">note_add</span></span>
                            <span class="nav-link-text ps-1">Fiche de Pré-Inscription</span>
                        </div>
                    </a>
                </li>

                <!-- Blog -->
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Blog</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link" href="{{route('blog.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">article</span></span>
                            <span class="nav-link-text ps-1">Actualités</span>
                        </div>
                    </a>
                </li>

                <!-- Evenements -->
                <li class="nav-item">
                    <div class="col-auto navbar-vertical-label">Evènements</div>
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link" href="app/calendar.html" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">event</span></span>
                            <span class="nav-link-text ps-1">Calendar</span>
                        </div>
                    </a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Contact</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link" href="{{route('contact.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">phone_in_talk</span></span>
                            <span class="nav-link-text ps-1">Informations du contact</span>
                        </div>
                    </a>
                    <a class="nav-link" href="{{route('message.index')}}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span class="material-icons">message</span></span>
                            <span class="nav-link-text ps-1">Liste des messages</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
