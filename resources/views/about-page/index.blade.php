<x-app-layout>
    <!-- Layout wrapper -->
  <!-- Layout wrapper -->
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
                <li class="nav-item dropdown-language dropdown">
                  <a
                    class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="ti ti-language rounded-circle ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                        <span>English</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                        <span>French</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                        <span>Arabic</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                        <span>German</span>
                      </a>
                    </li>
                  </ul>
                </li>
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
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
                  <a
                    class="nav-link btn btn-text-secondary btn-icon rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="ti ti-layout-grid-add ti-md"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end p-0">
                    <div class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="mb-0 me-auto">Shortcuts</h6>
                        <a
                          href="javascript:void(0)"
                          class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Add shortcuts"
                          ><i class="ti ti-plus text-heading"></i
                        ></a>
                      </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container">
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-calendar ti-26px text-heading"></i>
                          </span>
                          <a href="app-calendar.html" class="stretched-link">Calendar</a>
                          <small>Appointments</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-file-dollar ti-26px text-heading"></i>
                          </span>
                          <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                          <small>Manage Accounts</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-user ti-26px text-heading"></i>
                          </span>
                          <a href="app-user-list.html" class="stretched-link">User App</a>
                          <small>Manage Users</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-users ti-26px text-heading"></i>
                          </span>
                          <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                          <small>Permission</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-device-desktop-analytics ti-26px text-heading"></i>
                          </span>
                          <a href="index.html" class="stretched-link">Dashboard</a>
                          <small>User Dashboard</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-settings ti-26px text-heading"></i>
                          </span>
                          <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                          <small>Account Settings</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-help ti-26px text-heading"></i>
                          </span>
                          <a href="pages-faq.html" class="stretched-link">FAQs</a>
                          <small>FAQs & Articles</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-square ti-26px text-heading"></i>
                          </span>
                          <a href="modal-examples.html" class="stretched-link">Modals</a>
                          <small>Useful Popups</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- Quick links -->

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                  <a
                    class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <span class="position-relative">
                      <i class="ti ti-bell ti-md"></i>
                      <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end p-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="mb-0 me-auto">Notification</h6>
                        <div class="d-flex align-items-center h6 mb-0">
                          <span class="badge bg-label-primary me-2">8 New</span>
                          <a
                            href="javascript:void(0)"
                            class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Mark all as read"
                            ><i class="ti ti-mail-opened text-heading"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                              <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Charles Franklin</h6>
                              <small class="mb-1 d-block text-body">Accepted your connection</small>
                              <small class="text-muted">12hr ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/2.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">New Message ✉️</h6>
                              <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="ti ti-shopping-cart"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Whoo! You have new order 🛒</h6>
                              <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                              <small class="text-muted">1 day ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/9.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Application has been approved 🚀</h6>
                              <small class="mb-1 d-block text-body"
                                >Your ABC project application has been approved.</small
                              >
                              <small class="text-muted">2 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="ti ti-chart-pie"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Monthly report is generated</h6>
                              <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/5.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Send connection request</h6>
                              <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                              <small class="text-muted">4 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/6.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">New message from Jane</h6>
                              <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-warning"
                                  ><i class="ti ti-alert-triangle"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">CPU is running high</h6>
                              <small class="mb-1 d-block text-body"
                                >CPU Utilization Percent is currently at 88.63%,</small
                              >
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="border-top">
                      <div class="d-grid p-4">
                        <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                          <small class="align-middle">View all notifications</small>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-body">
                          <nav>
                            <div class="nav nav-tabs overflow-scroll" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="main-screen-tab" data-bs-toggle="tab" data-bs-target="#main-screen" type="button" role="tab" aria-controls="main-screen" aria-selected="false"><small>Página Principal</small></button>
                              <button class="nav-link" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false"><small>O que nos diferencia</small></button>
                              <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="false"><small>Sustentabilidade</small></button>
                              <button class="nav-link" id="testimonial-tab" data-bs-toggle="tab" data-bs-target="#testimonial" type="button" role="tab" aria-controls="testimonial" aria-selected="false"><small>Testemunhos</small></button>
                              <button class="nav-link" id="contact-info-tab" data-bs-toggle="tab" data-bs-target="#contact-info" type="button" role="tab" aria-controls="contact-info" aria-selected="false"><small>Contact Info</small></button>
                            </div>
                          </nav>
                          <div class="tab-content mt-5" id="nav-tabContent">
                            <!-- Página Principal -->
                            <div class="tab-pane fade show active" id="main-screen" role="tabpanel" aria-labelledby="main-screen-tab">
                                <form class="row g-3 needs-validation" novalidate action="{{ route('about-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
								  <div class="col-12 mt-5">
									<label for="validationCustom01" class="form-label" style="float:left;">Meta Title (PT)</label>
									<input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['meta-title'] }}" name="meta-title" required>
								  </div>
								  <div class="col-12 mt-5">
									<label for="validationCustom01" class="form-label" style="float:left;">Meta Description (PT)</label>
									<input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['meta-desctiption'] }}" name="meta-desctiption"  required>
								  </div>
								  <div class="col-12 mt-5">
									<label for="validationCustom01" class="form-label" style="float:left;">Meta Keywords (PT)</label>
									<input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['meta-keywords'] }}" name="meta-keywords" required>
								  </div>
                                  <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card" style="display: flex;align-items: center;">
                                      <img src="{{ $main_screen[0]['bg-1'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="bg-1">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card" style="display: flex;align-items: center;">
                                      <img src="{{ $main_screen[0]['shape-one-1'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shape-one-1">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card" style="display: flex;align-items: center;">
                                      <img src="{{ $main_screen[0]['shape-two-1'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shape-two-1">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card" style="display: flex;align-items: center;">
                                      <img src="{{ $main_screen[0]['shape-three-1'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shape-three-1">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card" style="display: flex;align-items: center;">
                                      <img src="{{ $main_screen[0]['shape-four-1'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shape-four-1">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card" style="display: flex;align-items: center;">
                                      <img src="{{ $main_screen[0]['thumb-1'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="thumb-1">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 mt-5">
                                    <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                    <input type="text" class="form-control" name="h2-span-1" id="validationCustom01" value="{{ $main_screen[0]['h2-span-1'] }}" required>
                                  </div>
                                  <div class="col-12 mt-5">
                                    <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                    <input type="text" class="form-control" name="h2-span-2" id="validationCustom01" value="{{ $main_screen[0]['h2-span-2'] }}" required>
                                  </div>
                                  <div class="col-12 mt-5">
                                    <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                    <input type="text" class="form-control" name="h2-span-3" id="validationCustom01" value="{{ $main_screen[0]['h2-span-3'] }}" required>
                                  </div>
                                  <div class="col-12 mt-5">
                                    <label for="validationCustom01" class="form-label" style="float:left;">P</label>
                                    <input type="text" class="form-control" name="p-1" id="validationCustom01" value="{{ $main_screen[0]['p-1'] }}" required>
                                  </div>
                                  <div class="col-12 mt-5">
                                    <label for="validationCustom01" class="form-label" style="float:left;">Div a b</label>
                                    <input type="text" class="form-control" name="div-a-b" id="validationCustom01" value="{{ $main_screen[0]['div-a-b'] }}" required>
                                  </div>
                                  {{-- <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card">
                                      <img src="{{ $main_screen[0]['bg-2'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="bg-2">
                                      </div>
                                    </div>
                                  </div> --}}
                                  {{-- <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card">
                                      <img src="{{ $main_screen[0]['shape-one-2'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shape-one-2">
                                      </div>
                                    </div>
                                  </div> --}}
                                  {{-- <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card">
                                      <img src="{{ $main_screen[0]['shape-two-2'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shape-two-2">
                                      </div>
                                    </div>
                                  </div> --}}
                                  {{-- <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card">
                                      <img src="{{ $main_screen[0]['shape-three-2'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shape-three-2">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card">
                                      <img src="{{ $main_screen[0]['shape-four-2'] }}" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shape-four-2">
                                      </div>
                                    </div>
                                  </div> --}}
                                  {{-- <div class="col-12 mt-5 form-group">
                                    <div class="card-header">
                                      <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                    </div>
                                    <div class="card">
                                      <img src="{{ $main_screen[0]['thumb-2'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                      <div class="card-body">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="thumb-2">
                                      </div>
                                    </div>
                                  </div> --}}
                                  {{-- <div class="col-12 mt-5">
                                    <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                    <input type="text" class="form-control" name="h2-span-1-1" id="validationCustom01" value="{{ $main_screen[0]['h2-span-1-1'] }}" required>
                                  </div>
                                  <div class="col-12 mt-5">
                                    <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                    <input type="text" class="form-control" name="h2-span-2-1" id="validationCustom01" value="{{ $main_screen[0]['h2-span-2-1'] }}" required>
                                  </div>
                                  <div class="col-12 mt-5">
                                    <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                    <input type="text" class="form-control" name="h2-span-3-1" id="validationCustom01" value="{{ $main_screen[0]['h2-span-3-1'] }}" required>
                                  </div>
                                  <div class="col-12 mt-5">
                                    <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                    <input type="text" class="form-control" name="p-1-1" id="validationCustom01" value="{{ $main_screen[0]['p-1-1'] }}" required>
                                  </div>
                                  <div class="col-12 mt-5">
                                    <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                    <input type="text" class="form-control" name="div-a-b-1" id="validationCustom01" value="{{ $main_screen[0]['div-a-b-1'] }}" required>
                                  </div> --}}
                                  <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit" name="form0">Submit</button>
                                  </div>
                                </form>
                            </div>
                             <!-- Serviços -->
                            <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
                              <form class="row g-3" action="{{ route('about-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12 mt-5 form-group">
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>
                                  <div class="card" style="display: flex;align-items: center;">
                                    <img src="{{ $service[0]['image-layer-path'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                    <div class="card-body">
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image-layer-path">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h6" id="validationCustom01" value="{{ $service[0]['h6'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h2" id="validationCustom01" value="{{ $service[0]['h2'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p" id="validationCustom01" value="{{ $service[0]['p'] }}" required>
                                </div>
                                <div class="col-12 mt-5 form-group">
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>
                                  <div class="card" style="display: flex;align-items: center;">
                                    <img src="{{ $service[0]['img-path'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                    <div class="card-body">
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-path">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h6-span" id="validationCustom01" value="{{ $service[0]['h6-span'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h3" id="validationCustom01" value="{{ $service[0]['h3'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p-1" id="validationCustom01" value="{{ $service[0]['p-1'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h3-1" id="validationCustom01" value="{{ $service[0]['h3-1'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h3-2" id="validationCustom01" value="{{ $service[0]['h3-2'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h3-3" id="validationCustom01" value="{{ $service[0]['h3-3'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="li-i-1" id="validationCustom01" value="{{ $service[0]['li-i-1'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="li-i-2" id="validationCustom01" value="{{ $service[0]['li-i-2'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="li-i-3" id="validationCustom01" value="{{ $service[0]['li-i-3'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="li-i-4" id="validationCustom01" value="{{ $service[0]['li-i-4'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="a-span" id="validationCustom01" value="{{ $service[0]['a-span'] }}" required>
                                </div>

                                <div class="col-12">
                                  <button type="submit" class="btn btn-primary w-100" name="form1">Submit</button>
                                </div>
                              </form>
                            </div>
                            <!-- video -->
                            <div class="tab-pane fade show" id="video" role="tabpanel" aria-labelledby="video-tab">
                              <form class="row g-3" action="{{ route('about-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h2" id="validationCustom01" value="{{ $video[0]['h2'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p" id="validationCustom01" value="{{ $video[0]['p'] }}" required>
                                </div>
                                <div class="col-12 mt-5 form-group">
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>
                                  <div class="card" style="display: flex;align-items: center;">
                                    <img src="{{ $video[0]['bg-img'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                    <div class="card-body">
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="bg-img">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5 form-group">
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>
                                  <div class="card" style="display: flex;align-items: center;">
                                    <img src="{{ $video[0]['shape-img'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                    <div class="card-body">
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shape-img">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5 form-group">
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>
                                  <div class="card" style="display: flex;align-items: center;">
                                    <img src="{{ $video[0]['overlay-img'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                    <div class="card-body">
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="overlay-img">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h6-span" id="validationCustom01" value="{{ $video[0]['h6-span'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h3" id="validationCustom01" value="{{ $video[0]['h3'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p-1" id="validationCustom01" value="{{ $video[0]['p-1'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="div-p" id="validationCustom01" value="{{ $video[0]['div-p'] }}" required>
                                </div>
                                <div class="col-12 mt-5 form-group">
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>
                                  <div class="card" style="display: flex;align-items: center;">
                                    <img src="{{ $video[0]['img-path'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                    <div class="card-body">
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-path">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <button type="submit" class="btn btn-primary w-100" name="form2">Submit</button>
                                </div>
                              </form>
                            </div>
                            <!-- Testemunhos -->
                            <div class="tab-pane fade show" id="testimonial" role="tabpanel" aria-labelledby="testimonial-tab">
                              <form class="row g-3" action="{{ route('about-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12 mt-5 form-group">
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>
                                  <div class="card" style="display: flex;align-items: center;">
                                    <img src="{{ $testimonial[0]['img-path'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                    <div class="card-body">
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-path">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h6" id="validationCustom01" value="{{ $testimonial[0]['h6'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h3" id="validationCustom01" value="{{ $testimonial[0]['h3'] }}" required>
                                </div>
                                <div class="col-12 mt-5 form-group">
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>
                                  <div class="card" style="display: flex;align-items: center;">
                                    <img src="{{ $testimonial[0]['img-path-1'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                    <div class="card-body">
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-path-1">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5 form-group">
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>
                                  <div class="card" style="display: flex;align-items: center;">
                                    <img src="{{ $testimonial[0]['img-path-2'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                    <div class="card-body">
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-path-2">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h3-1" id="validationCustom01" value="{{ $testimonial[0]['h3-1'] }}" required>
                                </div>
                                {{-- <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="span" id="validationCustom01" value="{{ $testimonial[0]['span'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h3-2" id="validationCustom02" value="{{ $testimonial[0]['h3-2'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p" id="validationCustom02" value="{{ $testimonial[0]['p'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="span-1" id="validationCustom02" value="{{ $testimonial[0]['span-1'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h3-3" id="validationCustom02" value="{{ $testimonial[0]['h3-3'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p-1" id="validationCustom02" value="{{ $testimonial[0]['p-1'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="span-2" id="validationCustom02" value="{{ $testimonial[0]['span-2'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h3-4" id="validationCustom02" value="{{ $testimonial[0]['h3-4'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p-2" id="validationCustom02" value="{{ $testimonial[0]['p-2'] }}" required>
                                </div> --}}
                                <div class="col-22">
                                  <button type="submit" class="btn btn-primary w-100" name="form3">Submit</button>
                                </div>
                              </form>

							  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
									  <div class="modal-header">
										<h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									  </div>
									  <div class="modal-body">
										<form class="row g-3 needs-validation" novalidate action="{{ route('about-page.store') }}" method="post" enctype="multipart/form-data">
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


							  <div class="container mt-12">
								<div class="row">
								  @foreach ($testimonial_abouts as $testimonial)
									<div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary bg-white">
										<blockquote>
											<p class="text-center mt-5">
												<i>
													{{ $testimonial['p'] }}
												</i>
											</p>
											<h3 class="h3 mt-3"><strong>{{ $testimonial['name'] }}</strong>
											</h3>
											<h5 class="h5 text-white-50">
											<div class="d-flex justify-content-around m-5">
											  @for ($i = 0; $i < 5; $i++)
												@if ($i < $testimonial['rating'])
												  <i class="fa fa-star text-primary" aria-hidden="true"></i>
												@else
												  <i class="fa fa-star text-white" aria-hidden="true"></i>
												@endif
											  @endfor
											</div>
										</blockquote>
										<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $testimonial['id'] }}">Editar</button>
										<a href="#"
											class="btn btn-danger p-2 rounded"
											onclick="
											let result = confirm('Tem a certeza que quer apagar este item ?');
											if(result){
												event.preventDefault();
												document.getElementById('delete-form').submit();
											}
											">
											Apagar
										</a>
										<form id="delete-form"
											action="{{ route('about-page.destroy', [$testimonial['id']]) }}"
											method="post" style="display: none">
											<input type="hidden" name="_method"
												value="delete" />
											@csrf
										</form>
										<form method="post" action="{{ route('about-page.update', $testimonial['id']) }}">
										  @csrf
										  @method('put')
										  <div class="modal fade" id="exampleModal{{ $testimonial['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
											  <div class="modal-content">
												<div class="modal-header">
												  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
												  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
												  <div class="col-12 mt-5">
													<label for="validationCustom01" class="form-label" style="float:left;">Paragrafo</label>
													<input type="text" class="form-control" id="validationCustom01" name="p" value="{{ $testimonial['p'] }}" required>
												  </div>
												  <div class="col-12 mt-5">
													<label for="validationCustom01" class="form-label" style="float:left;">Nome</label>
													<input type="text" class="form-control" id="validationCustom01" name="name" value="{{ $testimonial['name'] }}" required>
												  </div>
												  <div class="col-12 mt-5">
													<label for="validationCustom01" class="form-label" style="float:left;">Ratings</label>
													<input type="number" class="form-control" id="validationCustom01" name="rating" min="0" max="5" value="{{ $testimonial['rating'] }}" required>
												  </div>
												</div>
												<div class="modal-footer">
												  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												  <button type="submit" class="btn btn-primary" name="form5">Save changes</button>
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
								Criar Testemunhos
							  </button>
                            </div>


                            <!-- Contact Info -->
                            <div class="tab-pane fade show" id="contact-info" role="tabpanel" aria-labelledby="contact-info-tab">
                              <form class="row g-3" action="{{ route('about-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12 mt-5 form-group">
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>
                                  <div class="card" style="display: flex;align-items: center;">
                                    <img src="{{ $contact_info[0]['bg-img'] }}" class="img-fluid" alt="..." style="max-height: 290px;max-width: 884px;">
                                    <div class="card-body">
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="bg-img">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h4" id="validationCustom02" value="{{ $contact_info[0]['h4'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p" id="validationCustom02" value="{{ $contact_info[0]['p'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h4-1" id="validationCustom02" value="{{ $contact_info[0]['h4-1'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p-1" id="validationCustom02" value="{{ $contact_info[0]['p-1'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h4-2" id="validationCustom02" value="{{ $contact_info[0]['h4-2'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p-2" id="validationCustom02" value="{{ $contact_info[0]['p-2'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h4-3" id="validationCustom02" value="{{ $contact_info[0]['h4-3'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p-3-1" id="validationCustom02" value="{{ $contact_info[0]['p-3-1'] }}" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h4-4" id="validationCustom02" value="{{ $contact_info[0]['h4-4'] }}" required>
                                </div>
                                 <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p-4" id="validationCustom02" value="{{ $contact_info[0]['p-4'] }}" required>
                                </div>

                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h-6" id="validationCustom02" value="{{ $contact_info[0]['h-6'] }}" required>
                                </div>

                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="h-3" id="validationCustom02" value="{{ $contact_info[0]['h-3'] }}" required>
                                </div>

                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                  <input type="text" class="form-control" name="p-3" id="validationCustom02" value="{{ $contact_info[0]['p-3'] }}" required>
                                </div>

								<div class="col-12 mt-5">
									<label for="validationCustom01" class="form-label" style="float:left;">A1</label>
									<input type="text" class="form-control" name="a-1" id="validationCustom02" value="{{ $contact_info[0]['a-1'] }}" required>
								</div>

								  <div class="col-12 mt-5">
									<label for="validationCustom01" class="form-label" style="float:left;">A2</label>
									<input type="text" class="form-control" name="a-2" id="validationCustom02" value="{{ $contact_info[0]['a-2'] }}" required>
								  </div>
                                <div class="col-22">
                                  <button type="submit" class="btn btn-primary w-100" name="form4">Submit</button>
                                </div>
                              </form>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="footer-link">Pixinvent</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
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
    <!-- / Layout wrapper -->
</x-app-layout>
