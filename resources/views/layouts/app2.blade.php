<!doctype html>
<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/assets/"
  data-template="vertical-menu-template"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	  <title>Dashboard - Analytics | SOS Pragas</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon01.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />

    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
              <!-- Menu -->

              <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                  <a href="/dashboard" class="app-brand-link">
                    <img src="/assets/images/logo-dark.png" alt="Logo SOS Pragas" width="184">
                  </a>

                  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                    <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
                    <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
                  </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                  <!-- Dashboards -->
                  <li class="menu-item active open">

                    <a href="/dashboard" class="menu-link">
                      <i class="menu-icon tf-icons ti ti-smart-home"></i>
                      <div data-i18n="Dashboards">Dashboards</div>
                    </a>

                  <!-- Front Pages -->
                  <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-files"></i>
                      <div data-i18n="Front Pages">Front Pages</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="{{ url('landing-page') }}" class="menu-link">
                          <div data-i18n="Landing">Landing</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="/about-page" class="menu-link">
                          <div data-i18n="About">About</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </aside>
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
                  <!-- Content -->

                  <div class="container-xxl flex-grow-1 container-p-y">

                    <!-- Page Content -->
                    <main>
                        {{ $slot }}
                    </main>
                  </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                  <div class="container-xxl">

                  </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
              </div>
              <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
          </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
  </body>
</html>
