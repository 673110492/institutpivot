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
      </div><a class="navbar-brand" href="index.html">
        <div class="d-flex align-items-center py-3"><img class="me-2" src="assets/img/icons/spot-illustrations/3ia logo-01.png" alt="" width="150" /></div>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <div class="navbar-vertical-content scrollbar">
        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
          <li class="nav-item">
            <!-- parent pages--><a class="nav-link" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
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
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">En tete</span></div>
            </a>
            <a class="nav-link" href="{{route('video.index')}}" role="button" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Section video</span></div>
            </a>
            <a class="nav-link" href="{{route('temoignage.index')}}" role="button" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Temoignages Etudiant</span></div>
            </a>
            <a class="nav-link" href="{{route('autre.index')}}" role="button" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Autres Temoignages</span></div>
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
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">A propos</span></div>
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
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Type de Formations</span></div>
            </a>

            <a class="nav-link" href="{{route('formation.index')}}" role="button" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Formations</span></div>
            </a>
            {{-- <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span></div>
            </a>
            <ul class="nav collapse false" id="email">
              <li class="nav-item"><a class="nav-link" href="app/email/inbox.html" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="app/email/email-detail.html" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="app/email/compose.html" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul> --}}
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
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Formateurs</span></div>
            </a>
            {{-- <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span></div>
            </a>
            <ul class="nav collapse false" id="email">
              <li class="nav-item"><a class="nav-link" href="app/email/inbox.html" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="app/email/email-detail.html" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="app/email/compose.html" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul> --}}
          </li>

         <!-- Inscriptions-->

          <li class="nav-item">
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Inscriptions</div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                </div>
                <a class="nav-link" href="{{route('pre_inscription.index')}}" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Pré-Inscrit</span></div>
                </a>
                <a class="nav-link" href="{{route('formateur.index')}}" role="button" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Inscrit</span></div>
                </a>
          </li>

           <!-- blog-->
           <li class="nav-item">
            <!-- label-->
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
              <div class="col-auto navbar-vertical-label">Blog</div>
              <div class="col ps-0">
                <hr class="mb-0 navbar-vertical-divider" />
              </div>
            </div>
            <a class="nav-link" href="{{route('blog.index')}}" role="button" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Actualités</span></div>
            </a>
          </li>
           <!-- evenements-->
           <li class="nav-item">
            <!-- label-->
            <div class="col-auto navbar-vertical-label">Evènements</div>
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
              <div class="col ps-0">
                <hr class="mb-0 navbar-vertical-divider" />
              </div>
            </div>
            <a class="nav-link" href="app/calendar.html" role="button" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
            </a>
            <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span></div>
            </a>
            <ul class="nav collapse false" id="email">
              <li class="nav-item"><a class="nav-link" href="app/email/inbox.html" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="app/email/email-detail.html" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="app/email/compose.html" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul>
          </li>
           <!-- contact-->
           <li class="nav-item">
            <!-- label-->
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
              <div class="col-auto navbar-vertical-label">Contact</div>
              <div class="col ps-0">
                <hr class="mb-0 navbar-vertical-divider" />
              </div>
            </div>
            <a class="nav-link" href="{{route('contact.index')}}" role="button" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Informations du contact</span></div>
            </a>
            <a class="nav-link" href="{{route('message.index')}}" role="button" aria-expanded="false">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Liste des messages</span></div>
            </a>
          </li>
      </div>
    </div>
  </nav>
