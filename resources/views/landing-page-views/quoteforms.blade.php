<x-app-layout>
  <!-- Layout wrapper -->
  <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        @include('includes.menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item navbar-search-wrapper mb-0">
                  <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                    <i class="ti ti-search ti-md me-2 me-lg-4 ti-lg"></i>
                    <span class="d-none d-md-inline-block text-muted fw-normal">Search (Ctrl+/)</span>
                  </a>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Language -->

                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item dropdown-style-switcher dropdown">
                  <a
                    class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="ti ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                        <span class="align-middle"><i class="ti ti-sun ti-md me-3"></i>Light</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                        <span class="align-middle"><i class="ti ti-moon-stars ti-md me-3"></i>Dark</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                        <span class="align-middle"
                          ><i class="ti ti-device-desktop-analytics ti-md me-3"></i>System</span
                        >
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- Quick links  -->

                <!-- Quick links -->

                <!-- Notification -->

                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
						<img src="/assets/images/favicon01.png" alt class="rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2">
                            <div class="avatar avatar-online">
								<img src="/assets/images/favicon01.png" alt class="rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">Admin</h6>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
						<a class="dropdown-item" href="pages-profile-user.html">
							<i class="ti ti-user me-3 ti-md"></i><span class="align-middle">Alterar palavra-passe</span>
						</a>
					</li>
                    {{-- <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-billing.html">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i
                          ><span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center"
                            >4</span
                          >
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-pricing.html">
                        <i class="ti ti-currency-dollar me-3 ti-md"></i><span class="align-middle">Pricing</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-faq.html">
                        <i class="ti ti-question-mark me-3 ti-md"></i><span class="align-middle">FAQ</span>
                      </a>
                    </li> --}}
                    <li>
                      <div class="d-grid px-2 pt-2 pb-1">
                          <small class="align-middle btn btn-sm btn-danger d-flex text-white">
                              <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="text-white lh-lg">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                            <i class="ti ti-logout ms-2 ti-14px"></i>
                          </small>

                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <input
                type="text"
                class="form-control search-input container-xxl border-0"
                placeholder="Search..."
                aria-label="Search..." />
              <i class="ti ti-x search-toggler cursor-pointer"></i>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
              <div class="container-fluid mt-5">
                  <div class="row">
                      <div class="col-md-12">
                        <div class="card text-center">
                          <div class="card-header">

                          </div>
                          <div class="card-body">
                            <nav>
                              <div class="nav nav-tabs overflow-scroll" id="nav-tab" role="tablist">
                                {{-- <button class="nav-link active" id="nav-paragraph-tab" data-bs-toggle="tab" data-bs-target="#nav-paragraph" type="button" role="tab" aria-controls="nav-paragraph" aria-selected="false"><small>Parágrafo de navegação</small></button> --}}
                                <button class="nav-link active" id="quote-form-tab" data-bs-toggle="tab" data-bs-target="#quote-form" type="button" role="tab" aria-controls="quote-form" aria-selected="false"><small>Formulário</small></button>
                                {{-- <button class="nav-link" id="carrousel-tab" data-bs-toggle="tab" data-bs-target="#carrousel" type="button" role="tab" aria-controls="carrousel" aria-selected="false"><small>Main Carrousel</small></button>
                                <button class="nav-link" id="three-icon-boxes-tab" data-bs-toggle="tab" data-bs-target="#three-icon-boxes" type="button" role="tab" aria-controls="three-icon-boxes" aria-selected="false"><small>Intro</small></button>
                                <button class="nav-link" id="three-icon-images-boxes-tab" data-bs-toggle="tab" data-bs-target="#three-icon-images-boxes" type="button" role="tab" aria-controls="three-icon-images-boxes" aria-selected="false"><small>Serviços</small></button>
                                <button class="nav-link" id="image-tabs-text-tab" data-bs-toggle="tab" data-bs-target="#image-tabs-text" type="button" role="tab" aria-controls="image-tabs-text" aria-selected="false"><small>Serviços Tabs</small></button>
                                <button class="nav-link" id="background-images+text-tab" data-bs-toggle="tab" data-bs-target="#background-images+text" type="button" role="tab" aria-controls="background-images+text" aria-selected="false"><small>Porquê Nós</small></button>
                                <button class="nav-link" id="three-images+six-icons+three-paragraphs-tab" data-bs-toggle="tab" data-bs-target="#three-images+six-icons+three-paragraphs" type="button" role="tab" aria-controls="three-images+six-icons+three-paragraphs" aria-selected="false"><small>Sustentabilidade</small></button>
                                <button class="nav-link" id="three-dark-bg-boxes-tab" data-bs-toggle="tab" data-bs-target="#three-dark-bg-boxes" type="button" role="tab" aria-controls="three-dark-bg-boxes" aria-selected="false"><small>Testemunhos</small></button>
                                <button class="nav-link" id="four-images+collapse-box-tab" data-bs-toggle="tab" data-bs-target="#four-images+collapse-box" type="button" role="tab" aria-controls="four-images+collapse-box" aria-selected="false"><small>FAQ</small></button>
                                <button class="nav-link" id="call-now-image-box-tab" data-bs-toggle="tab" data-bs-target="#call-now-image-box" type="button" role="tab" aria-controls="call-now-image-box" aria-selected="false"><small>Contacto</small></button>
                                <button class="nav-link" id="watch-video+background-image-tab" data-bs-toggle="tab" data-bs-target="#watch-video+background-image" type="button" role="tab" aria-controls="watch-video+background-image" aria-selected="false"><small>Área Cliente</small></button>
								<button class="nav-link" id="terms-service-tab" data-bs-toggle="tab" data-bs-target="#terms-service" type="button" role="tab" aria-controls="terms-service" aria-selected="false"><small>Termos de Serviço</small></button>
								<button class="nav-link" id="policy-privacy-tab" data-bs-toggle="tab" data-bs-target="#policy-privacy" type="button" role="tab" aria-controls="policy-privacy" aria-selected="false"><small>Política de Privacidade</small></button>
                                <button class="nav-link" id="background-image+form-tab" data-bs-toggle="tab" data-bs-target="#background-image+form" type="button" role="tab" aria-controls="background-image+form" aria-selected="false"><small>Contact Us</small></button> --}}
                                <!--
                                <button class="nav-link" id="footer-tab" data-bs-toggle="tab" data-bs-target="#footer" type="button" role="tab" aria-controls="footer" aria-selected="false"><small>footer</small></button>
                                -->
                              </div>
                            </nav>
                            <div class="tab-content mt-5" id="nav-tabContent">
                                <!-- first paragraph -->
                                <div class="tab-pane fade" id="nav-paragraph" role="tabpanel" aria-labelledby="nav-paragraph-tab">
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Navbar Paragraph</label>
                                        <input type="text" class="form-control" name="nav-paragraph" id="validationCustom01" value="{{ $main_screen[0]['nav-paragraph'] }}" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form0">Submit</button>
                                      </div>
                                    </form>
                                </div>
                                 <!-- Quote form -->
                                <div class="tab-pane fade show active" id="quote-form" role="tabpanel" aria-labelledby="quote-form-tab">
                                    <form class="row g-3" action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                          <label for="validationCustom01" class="form-label" style="float:left;">Tab title 1</label>
                                          <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['quote-form-tab-title-1'] }}" name="quote-form-tab-title-1" required>
                                        </div>
                                        <div class="col-12 mt-5">
                                          <label for="validationCustom01" class="form-label" style="float:left;">Tab title 2</label>
                                          <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['quote-form-tab-title-2'] }}" name="quote-form-tab-title-2"  required>
                                        </div>
                                        <div class="col-12 mt-5">
                                          <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 H2</label>
                                          <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['quote-form-tab-2-h2'] }}" name="quote-form-tab-2-h2" required>
                                        </div>
                                        <div class="col-12 mt-5">
                                          <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 p</label>
                                          <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['quote-form-tab-2-p'] }}" name="quote-form-tab-2-p" required>
                                        </div>

                                        <div class="col-12">
                                          <button type="submit" class="btn btn-primary w-100" name="form1">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- carrousel-->
                                <div class="tab-pane fade" id="carrousel" role="tabpanel" aria-labelledby="carrousel-tab">

                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Carrousel Image 1</label>
                                        </div>
                                        <div class="card" style="display: flex;align-items: center;">
                                          <img src="/{{ $main_screen[0]['carrousel-bg-img-path'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                          <div class="card-body">
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="carrousel-bg-img-path">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h5'] }}" name="carrousel-h5" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2 part 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h2'] }}" name="carrousel-h2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2 part 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h2-a'] }}" name="carrousel-h2-a" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel p parte 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-p'] }}" name="carrousel-p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel p parte 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-a-1'] }}" name="carrousel-a-1" required>
                                      </div>


                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                        <div class="card" style="display: flex;align-items: center;">
                                          <img src="/{{ $main_screen[0]['carrousel-bg-img-path-1'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                          <div class="card-body">
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="carrousel-bg-img-path-1">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel H5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h5-1'] }}" name="carrousel-h5-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel h2 part 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h2-1'] }}" name="carrousel-h2-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel h2 part 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h2-b'] }}" name="carrousel-h2-b" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel p</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-p-1'] }}" name="carrousel-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel a</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-a-1-1'] }}" name="carrousel-a-1-1" required>
                                      </div>


                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                        <div class="card" style="display: flex;align-items: center;">
                                          <img src="/{{ $main_screen[0]['carrousel-bg-img-path-2'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                          <div class="card-body">
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="carrousel-bg-img-path-2">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel h5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h5-2'] }}" name="carrousel-h5-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel h2 part 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h2-2'] }}" name="carrousel-h2-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel h2 part 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h2-c'] }}" name="carrousel-h2-c" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel p</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-p-2'] }}" name="carrousel-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Carrousel a</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-a-1-2'] }}" name="carrousel-a-1-2" required>
                                      </div>

                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form2">Submit</button>
                                      </div>
                                    </form>
                                </div>
                                <!-- Three Icon Boxes-->
                                <div class="tab-pane fade" id="three-icon-boxes" role="tabpanel" aria-labelledby="three-icon-boxes-tab">
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-h6'] }}" name="company-status-h6" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-h3'] }}" name="company-status-h3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-1h4'] }}" name="company-status-1h4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-1p'] }}" name="company-status-1p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-2h4'] }}" name="company-status-2h4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-2p'] }}" name="company-status-2p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-3h4'] }}" name="company-status-3h4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-3p'] }}" name="company-status-3p" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form3">Submit</button>
                                      </div>
                                    </form>

                                </div>
                                <!-- Three Icon Images Boxes-->
                                <div class="tab-pane fade" id="three-icon-images-boxes" role="tabpanel" aria-labelledby="three-icon-images-boxes-tab">

                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-h6-1'] }}" name="best-service-h6-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-h3-1'] }}" name="best-service-h3-1" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $best_service[0]['best-service-img-path-1'] }}" class="img-fluid" alt="..." style="max-height:239px;max-width:370px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="best-service-img-path-1">
                                            </div>
                                          </div>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">ID service</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-id-1'] }}" name="best-service-id-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-a-1'] }}" name="best-service-a-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-p-1'] }}" name="best-service-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $best_service[0]['best-service-img-path-2'] }}" class="img-fluid" alt="..." style="max-height:239px;max-width:370px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="best-service-img-path-2">
                                            </div>
                                          </div>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">ID service</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-id-2'] }}" name="best-service-id-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-a-2'] }}" name="best-service-a-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-p-2'] }}" name="best-service-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $best_service[0]['best-service-img-path-3'] }}" class="img-fluid" alt="..." style="max-height:239px;max-width:370px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="best-service-img-path-3">
                                            </div>
                                          </div>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">ID service</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-id-3'] }}" name="best-service-id-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-a-3'] }}" name="best-service-a-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-p-3'] }}" name="best-service-p-3" required>
                                      </div>

									  <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $best_service[0]['best-service-img-path-4'] }}" class="img-fluid" alt="..." style="max-height:239px;max-width:370px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="best-service-img-path-4">
                                            </div>
                                          </div>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">ID service</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-id-4'] }}" name="best-service-id-4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-a-4'] }}" name="best-service-a-4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-p-4'] }}" name="best-service-p-4" required>
                                      </div>

									  <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $best_service[0]['best-service-img-path-5'] }}" class="img-fluid" alt="..." style="max-height:239px;max-width:370px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="best-service-img-path-5">
                                            </div>
                                          </div>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">ID service</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-id-5'] }}" name="best-service-id-5" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-a-5'] }}" name="best-service-a-5" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-p-5'] }}" name="best-service-p-5" required>
                                      </div>



									  <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $best_service[0]['best-service-img-path-6'] }}" class="img-fluid" alt="..." style="max-height:239px;max-width:370px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="best-service-img-path-6">
                                            </div>
                                          </div>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">ID service</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-id-6'] }}" name="best-service-id-6" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-a-6'] }}" name="best-service-a-6" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-p-6'] }}" name="best-service-p-6" required>
                                      </div>


                                      {{-- <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Navbar Paragraph</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $best_service[0]['best-service-img-path-3'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="best-service-img-path-3">
                                            </div>
                                          </div>
                                      </div> --}}
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form4">Submit</button>
                                      </div>
                                    </form>

                                </div>
                                <!-- Three Icon Images Boxes-->
                                <div class="tab-pane fade" id="image-tabs-text" role="tabpanel" aria-labelledby="image-tabs-text-tab">

                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-h6-1'] }}" name="our-services-h6-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2 Part1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-h2-1'] }}" name="our-services-h2-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2 Part2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-h2-2'] }}" name="our-services-h2-2" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $our_service_1[0]['our-services-bg-img-path-1'] }}" class="img-fluid" alt="..." style="max-height:515px;max-width:1920px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="our-services-bg-img-path-1">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1'] }}" name="our-services-tab-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 H2 </label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-h2'] }}" name="our-services-tab-1-h2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-p'] }}" name="our-services-tab-1-p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-p-1'] }}" name="our-services-tab-1-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-li-1'] }}" name="our-services-tab-1-li-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-li-2'] }}" name="our-services-tab-1-li-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-li-3'] }}" name="our-services-tab-1-li-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-li-4'] }}" name="our-services-tab-1-li-4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-li-5'] }}" name="our-services-tab-1-li-5" required>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-li-6'] }}" name="our-services-tab-1-li-6" required>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 7</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-li-7'] }}" name="our-services-tab-1-li-7" required>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 8</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-li-8'] }}" name="our-services-tab-1-li-8" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 p 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-p-2'] }}" name="our-services-tab-1-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 a 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-a-2'] }}" name="our-services-tab-1-a-2" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $our_service_1[0]['img-1'] }}" class="img-fluid" alt="..." style="max-height:515px;max-width:1920px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-1">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2'] }}" name="our-services-tab-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 H2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-h2'] }}" name="our-services-tab-2-h2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 2 p</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-p'] }}" name="our-services-tab-2-p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 2 p 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-p-1'] }}" name="our-services-tab-2-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 li 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-li-1'] }}" name="our-services-tab-2-li-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 li 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-li-2'] }}" name="our-services-tab-2-li-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 li 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-li-3'] }}" name="our-services-tab-2-li-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-li-4'] }}" name="our-services-tab-2-li-4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-li-5'] }}" name="our-services-tab-2-li-5" required>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-li-6'] }}" name="our-services-tab-2-li-6" required>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 7</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-li-7'] }}" name="our-services-tab-2-li-7" required>
                                      </div>
									  <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 8</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-li-8'] }}" name="our-services-tab-2-li-8" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 p 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-p-2'] }}" name="our-services-tab-2-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 a 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-a'] }}" name="our-services-tab-2-a" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $our_service_2[0]['img-2'] }}" class="img-fluid" alt="..." style="max-height:515px;max-width:1920px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-2">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form5">Submit</button>
                                      </div>
                                    </form>

                                </div>
                                 <!-- background-images+text -->
                                 <div class="tab-pane fade" id="background-images+text" role="tabpanel" aria-labelledby="background-images+text-tab">
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-h6'] }}" name="about-now-h6" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-h3'] }}" name="about-now-h3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">p</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-p'] }}" name="about-now-p" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $about_now[0]['about-now-1-bg-img-path'] }}" class="img-fluid" alt="..." style="max-width:1026px;max-height:798px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="about-now-1-bg-img-path">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $about_now[0]['about-now-2-img-path'] }}" class="img-fluid" alt="..." style="max-width:1026px;max-height:798px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="about-now-2-img-path">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-1'] }}" name="about-now-li-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-2'] }}" name="about-now-li-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-3'] }}" name="about-now-li-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-4'] }}" name="about-now-li-4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-5'] }}" name="about-now-li-5" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-6'] }}" name="about-now-li-6" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $about_now[0]['about-now-img-path'] }}" class="img-fluid" alt="..." style="max-width:1026px;max-height:798px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="about-now-img-path">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form6">Submit</button>
                                      </div>
                                    </form>
                                </div>
                                <!-- three-images+six-icons+three-paragraphs -->
                                <div class="tab-pane fade" id="three-images+six-icons+three-paragraphs" role="tabpanel" aria-labelledby="three-images+six-icons+three-paragraphs-tab">
                                  <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-p-1'] }}" name="choose-us-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-h3'] }}" name="choose-us-h3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-p-2'] }}" name="choose-us-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4-1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-h4-1'] }}" name="choose-us-h4-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4-2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-h4-2'] }}" name="choose-us-h4-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4-3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-h4-3'] }}" name="choose-us-h4-3" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $choose_us[0]['choose-us-img'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="choose-us-img">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $choose_us[0]['choose-us-img-1'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="choose-us-img-1">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $choose_us[0]['choose-us-img-2'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="choose-us-img-2">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $choose_us[0]['choose-us-img-3'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="choose-us-img-3">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form7">Submit</button>
                                      </div>
                                    </form>
                                </div>
                                <!-- three-images+six-icons+three-paragraphs -->
                                <div class="tab-pane fade" id="three-dark-bg-boxes" role="tabpanel" aria-labelledby="three-dark-bg-boxes-tab">
                                      <!-- Modal -->
                                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.store') }}" method="post" enctype="multipart/form-data">
                                                  @csrf
                                                  @method('POST')
                                                  <div class="col-12 mt-5">
                                                    <label for="validationCustom01" class="form-label" style="float:left;">Paragrafo</label>
                                                    <input type="text" class="form-control" id="validationCustom01" name="p" required>
                                                  </div>
                                                  <div class="col-12 mt-5">
                                                    <label for="validationCustom01" class="form-label" style="float:left;">Nome</label>
                                                    <input type="text" class="form-control" id="validationCustom01" name="name" required>
                                                  </div>
                                                  <div class="col-12 mt-5">
                                                    <label for="validationCustom01" class="form-label" style="float:left;">Ratings</label>
                                                    <input type="number" class="form-control" id="validationCustom01" name="rating" min="0" max="5" required>
                                                  </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                              </form>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="container">
                                        <div class="row">
                                          @foreach ($reviews as $review)
                                            <div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary bg-dark">
                                                <i class="fa fa-quote-left mt-5" aria-hidden="true" style="font-size:50px;color:#ff6600;"></i>
                                                <blockquote>
                                                    <p class="text-center mt-5">
                                                        <i>
                                                            {{ $review['p'] }}
                                                        </i>
                                                    </p>
                                                    <h3 class="h3 mt-3"><strong>{{ $review['name'] }}</strong>
                                                    </h3>
                                                    <h5 class="h5 text-white-50">
                                                    <div class="d-flex justify-content-around m-5">
                                                      @for ($i = 0; $i < 5; $i++)
                                                        @if ($i < $review['rating'])
                                                          <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                                        @else
                                                          <i class="fa fa-star text-white" aria-hidden="true"></i>
                                                        @endif
                                                      @endfor
                                                    </div>
                                                </blockquote>
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $review['id'] }}">edit review</button>
                                                <a href="#"
                                                    class="btn btn-danger p-2 rounded"
                                                    onclick="
                                                    let result = confirm('Tem a certeza que quer apagar o review ?');
                                                    if(result){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form').submit();
                                                    }
                                                    ">
                                                    Apagar serviço
                                                </a>
                                                <form id="delete-form"
                                                    action="{{ route('review.destroy', [$review['id']]) }}"
                                                    method="post" style="display: none">
                                                    <input type="hidden" name="_method"
                                                        value="delete" />
                                                    @csrf
                                                </form>
                                                <form method="post" action="{{ route('landing-page.update', $review['id']) }}">
                                                  @csrf
                                                  @method('put')
                                                  <div class="modal fade" id="exampleModal{{ $review['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <div class="col-12 mt-5">
                                                            <label for="validationCustom01" class="form-label" style="float:left;">Paragrafo</label>
                                                            <input type="text" class="form-control" id="validationCustom01" name="p" value="{{ $review['p'] }}" required>
                                                          </div>
                                                          <div class="col-12 mt-5">
                                                            <label for="validationCustom01" class="form-label" style="float:left;">Nome</label>
                                                            <input type="text" class="form-control" id="validationCustom01" name="name" value="{{ $review['name'] }}" required>
                                                          </div>
                                                          <div class="col-12 mt-5">
                                                            <label for="validationCustom01" class="form-label" style="float:left;">Ratings</label>
                                                            <input type="number" class="form-control" id="validationCustom01" name="rating" min="0" max="5" value="{{ $review['rating'] }}" required>
                                                          </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                          <button type="submit" class="btn btn-primary" name="form13">Save changes</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </form>
                                            </div>
                                          @endforeach
                                        </div>
                                      </div>
                                      <button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Criar review
                                      </button>
                                      {{-- <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P strong</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-strong'] }}" name="testimonial-say-p-strong" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h2'] }}" name="testimonial-say-h2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">p i 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-1'] }}" name="testimonial-say-p-i-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">p i 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-1-1'] }}" name="testimonial-say-p-i-1-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h3-1'] }}" name="testimonial-say-h3-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H5 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h5-1'] }}" name="testimonial-say-h5-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P i 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-2'] }}" name="testimonial-say-p-i-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">p i 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-2-1'] }}" name="testimonial-say-p-i-2-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h3-2'] }}" name="testimonial-say-h3-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H5 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h5-2'] }}" name="testimonial-say-h5-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P I 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-3'] }}" name="testimonial-say-p-i-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P I 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-3-1'] }}" name="testimonial-say-p-i-3-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h3-3'] }}" name="testimonial-say-h3-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H5 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h5-3'] }}" name="testimonial-say-h5-3" required>
                                      </div> --}}
                                </div>
                                <!-- four-images+collapse-box -->
                                <div class="tab-pane fade" id="four-images+collapse-box" role="tabpanel" aria-labelledby="four-images+collapse-box-tab">
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $collapse[0]['collapse-bg-img'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="collapse-bg-img">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h3-1'] }}" name="collapse-h3-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-p-1'] }}" name="collapse-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h3-2'] }}" name="collapse-h3-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-p-2'] }}"  name="collapse-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h3-3'] }}" name="collapse-h3-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-p-3'] }}" name="collapse-p-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-1'] }}" name="collapse-div-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-1-1'] }}" name="collapse-div-p-1-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-1-2'] }}" name="collapse-div-p-1-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-1'] }}" name="collapse-h4-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-2'] }}" name="collapse-div-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-2-1'] }}" name="collapse-div-p-2-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-2-2'] }}" name="collapse-div-p-2-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-2'] }}" name="collapse-h4-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-3'] }}" name="collapse-div-p-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-3-1'] }}" name="collapse-div-p-3-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-3-2'] }}" name="collapse-div-p-3-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-3'] }}" name="collapse-h4-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-3'] }}" name="collapse-h4-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-4'] }}" name="collapse-h4-4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-4'] }}" name="collapse-div-p-4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-4-1'] }}" name="collapse-div-p-4-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-4-2'] }}" name="collapse-div-p-4-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-5'] }}" name="collapse-h4-5" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-5'] }}" name="collapse-div-p-5" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-5-1'] }}" name="collapse-div-p-5-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-5-2'] }}" name="collapse-div-p-5-2" required>
                                      </div>
                                      <div class="col-md-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form9">Submit</button>
                                      </div>
                                    </form>

                                </div>
                                 <!-- CALL US -->
                                <div class="tab-pane fade" id="call-now-image-box" role="tabpanel" aria-labelledby="call-now-image-box-tab">

                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $call_now[0]['call-now-bg-image-1-path'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="call-now-bg-image-1-path" name="call-now-bg-image-1-path">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $call_now[0]['call-now-bg-image-2-path'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="call-now-bg-image-2-path">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $call_now[0]['call-now-bg-image-3-path'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="call-now-bg-image-3-path">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $call_now[0]['call-now-bg-image-4-path'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="call-now-bg-image-4-path">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-h4-1'] }}" name="call-now-h4-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">PA 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-p-a-1'] }}" name="call-now-p-a-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">PA 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-p-a-2'] }}" name="call-now-p-a-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-h4-2'] }}" name="call-now-h4-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">PA 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-p-a-3'] }}" name="call-now-p-a-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-a-3'] }}" name="call-now-a-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-p'] }}" name="call-now-p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-a-2'] }}" name="call-now-a-2" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $call_now[0]['call-now-bg-image-4-path'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="call-now-bg-image-4-path">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-a-3'] }}" name="call-now-a-3" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form10">Submit</button>
                                      </div>
                                    </form>

                                </div>

								<!-- POLICY PRIVACY -->
                                <div class="tab-pane fade" id="policy-privacy" role="tabpanel" aria-labelledby="policy-privacy-tab">

                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Title</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $policy_privacy[0]['privacy-policy-title'] }}" name="privacy-policy-title" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <textarea class="form-control" placeholder="Write here..." id="privacy-policy-p-text-1" name="privacy-policy-p-text-1" required></textarea>
                                      </div>
									  <input type="hidden" value="{{ $policy_privacy[0]['privacy-policy-p-text-1'] }}" id="content-privacy-policy-p-text-1">

                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form15">Submit</button>
                                      </div>
                                    </form>

                                </div>
								<!-- TERM OF SERVICE -->
                                <div class="tab-pane fade" id="terms-service" role="tabpanel" aria-labelledby="terms-service-tab">

                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Title</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $terms_service[0]['terms-title'] }}" name="terms-title" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        {{-- <label for="terms-p-text-1" class="form-label" style="float:left;">P strong 1</label> --}}
										<textarea class="form-control" placeholder="Write here..." id="terms-p-text-1" name="terms-p-text-1" value="" required></textarea>
                                        {{-- <input type="text" class="form-control" id="validationCustom01" value="{{ $terms_service[0]['terms-p-text-1'] }}" name="terms-p-text-1" required> --}}
                                      </div>
									  <input type="hidden" value="{{ $terms_service[0]['terms-p-text-1'] }}" id="contentterms-p-text-1">

                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form14">Submit</button>
                                      </div>
                                    </form>

                                </div>


                                <!-- WATCH VIDEO -->
                                <div class="tab-pane fade" id="watch-video+background-image" role="tabpanel" aria-labelledby="watch-video+background-image-tab">

                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P strong 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-p-strong-1'] }}" name="watch-video-p-strong-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-h2'] }}" name="watch-video-h2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-p-2'] }}" name="watch-video-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-p-2-1'] }}" name="watch-video-p-2-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-p-3'] }}" name="watch-video-p-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-p-3-1'] }}" name="watch-video-p-3-1" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $video_contact[0]['watch-video-bg-img'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="watch-video-bg-img">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $video_contact[0]['watch-video-bg-img-1'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="watch-video-bg-img-1">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form11">Submit</button>
                                      </div>
                                    </form>

                                </div>
                                <!-- background-image+form -->
                                <div class="tab-pane fade" id="background-image+form" role="tabpanel" aria-labelledby="background-image+form-tab">
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['contact-us-h2-part-1'] }}" name="contact-us-h2-part-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['contact-us-h2-part-2'] }}" name="contact-us-h2-part-2" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>
                                          <div class="card">
                                            <img src="/{{ $video_contact[0]['contact-us-bg-img'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="contact-us-bg-img">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form12">Submit</button>
                                      </div>
                                    </form>
                                </div>

                                <!-- footer
                                <div class="tab-pane fade" id="footer" role="tabpanel" aria-labelledby="footer">

                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label">Navbar Paragraph</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Submit form</button>
                                      </div>
                                    </form>

                                </div>
                                -->
                            </div>
                          </div>
                          <div class="card-footer text-muted mt-5"> </div>
                        </div>
                      </div>
                </div>
              </div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
	<script>
		tinymce.init({
			selector: "#terms-p-text-1, #privacy-policy-p-text-1",
			plugins: [
				'advlist',
				'autolink',
				'link',
				'image',
				'lists',
				'print',
				'preview',
				'hr',
				'searchreplace',
				'wordcount',
				'fullscreen',
				'insertdatetime',
				'media',
				'save',
				'table',
				'paste',
				'emoticons'
			],
			init_instance_callback: () => {
				tinymce.get("terms-p-text-1").setContent($("#contentterms-p-text-1").val());
				tinymce.get("privacy-policy-p-text-1").setContent($("#content-privacy-policy-p-text-1").val())
			}
		 })
	</script>

    <!-- / Layout wrapper -->
</x-app-layout>
