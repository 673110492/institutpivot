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
        <div class="d-flex align-items-center py-3"><img class="me-2" src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
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
          <!-- a propos-->
          <li class="nav-item">
            <!-- label-->
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
              <div class="col-auto navbar-vertical-label">A propos</div>
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
          <!-- formations-->
          <li class="nav-item">
            <!-- label-->
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
              <div class="col-auto navbar-vertical-label">Formations</div>
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
           <!-- formateurs-->
           <li class="nav-item">
            <!-- label-->
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
              <div class="col-auto navbar-vertical-label">Formateurs</div>
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
           <!-- blog-->
           <li class="nav-item">
            <!-- label-->
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
              <div class="col-auto navbar-vertical-label">Blog</div>
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
      </div>
    </div>
  </nav>
