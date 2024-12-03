<x-app-layout>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
          <!-- Menu -->

          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
              <div class="app-brand demo">
                  <a href="/dashboard" class="app-brand-link">
                      <span class="app-brand-logo demo">
                          <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                  fill="#7367F0" />
                              <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                  fill="#161616" />
                              <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                  fill="#161616" />
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                  fill="#7367F0" />
                          </svg>
                      </span>
                      <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
                  </a>

                  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                      <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
                      <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
                  </a>
              </div>

              <div class="menu-inner-shadow"></div>

              <ul class="menu-inner py-1">
                  <!-- Dashboards -->
                  <li class="menu-item">

                      <a href="/dashboard" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-smart-home"></i>
                          <div data-i18n="Dashboards">Dashboards</div>
                      </a>
                      <!--
                      <ul class="menu-sub">
                        <li class="menu-item active">
                          <a href="index.html" class="menu-link">
                            <div data-i18n="Analytics">Analytics</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="dashboards-crm.html" class="menu-link">
                            <div data-i18n="CRM">CRM</div>
                          </a>
                        </li>
                      </ul>
                      
                    --></li>
        
          <!-- Layouts -->
          <!--
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
              <div data-i18n="Layouts">Layouts</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="layouts-collapsed-menu.html" class="menu-link">
                  <div data-i18n="Collapsed menu">Collapsed menu</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-content-navbar.html" class="menu-link">
                  <div data-i18n="Content navbar">Content navbar</div>
                </a>
              </li>       
           
            </ul>
          </li>

          <!-- Front Pages -->
                  <li class="menu-item open">
                      <a href="javascript:void(0);" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-files"></i>
                          <div data-i18n="Front Pages">Front Pages</div>
                      </a>
                      <ul class="menu-sub">
                          <li class="menu-item">
                              <a href="{{ url('landing-page') }}" class="menu-link">
                                  <div data-i18n="Landing / Home">Landing / Home</div>
                              </a>
                          </li>
                          <li class="menu-item">
                              <a href="/about-page" class="menu-link">
                                  <div data-i18n="About">About</div>
                              </a>
                          </li>
                          <li class="menu-item">
                              <a href="/services-page" class="menu-link">
                                  <div data-i18n="Services">Services</div>
                              </a>
                          </li>
                          <li class="menu-item">
                              <a href="/sustainability-page" class="menu-link">
                                  <div data-i18n="Sustainability">Sustainability</div>
                              </a>
                          </li>

                          <li class="menu-item">
                              <a href="/hardware-page" class="menu-link">
                                  <div data-i18n="Hardware">Hardware</div>
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
                      <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2">
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">John Doe</h6>
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
                        <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
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
                    </li>
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
                              <button class="nav-link active" id="main-screen-tab" data-bs-toggle="tab" data-bs-target="#main-screen" type="button" role="tab" aria-controls="main-screen" aria-selected="false"><small>Main screen</small></button>
                            </div>
                          </nav>
                          <div class="tab-content mt-5" id="nav-tabContent">
                            <!-- main screen -->
                            <div class="tab-pane fade show active" id="main-screen" role="tabpanel" aria-labelledby="main-screen-tab">
                              <form class="row g-3 needs-validation" novalidate action="{{ route('hardware-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h1'] }}" name="h1" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h6'] }}" name="h6" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h3'] }}" name="h3" required>
                                </div>
                                <div class="col-12 mt-5 form-group">   
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>                                       
                                  <div class="card">
                                    <img src="{{ $main[0]['img'] }}" class="img-fluid" alt="..." style="max-height:885px;max-width:1920px;">
                                    <div class="card-body">                                              
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">                        
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h3-0'] }}" name="h3-0" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['a'] }}" name="a" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['p'] }}" name="p" required>
                                </div>
                                <div class="col-12 mt-5 form-group">   
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>                                       
                                  <div class="card">
                                    <img src="{{ $main[0]['img-1'] }}" class="img-fluid" alt="..." style="max-height:885px;max-width:1920px;">
                                    <div class="card-body">                                              
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-1">                        
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h3-1'] }}" name="h3-1" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['a-1'] }}" name="a-1" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['p-1'] }}" name="p-1" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h3-2'] }}" name="h3-2" required>
                                </div>
                                <div class="col-12 mt-5 form-group">   
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>                                       
                                  <div class="card">
                                    <img src="{{ $main[0]['img-2'] }}" class="img-fluid" alt="..." style="max-height:885px;max-width:1920px;">
                                    <div class="card-body">                                              
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-2">                        
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h3-3'] }}" name="h3-3" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['a-3'] }}" name="a-3" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['p-2'] }}" name="p-2" required>
                                </div>
                                <div class="col-12 mt-5 form-group">   
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>                                       
                                  <div class="card">
                                    <img src="{{ $main[0]['img-3'] }}" class="img-fluid" alt="..." style="max-height:885px;max-width:1920px;">
                                    <div class="card-body">                                              
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-3">                        
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h3-4'] }}" name="h3-4" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['a-4'] }}" name="a-4" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['p-3'] }}" name="p-3" required>
                                </div>
                                <div class="col-12 mt-5 form-group">   
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>                                       
                                  <div class="card">
                                    <img src="{{ $main[0]['img-4'] }}" class="img-fluid" alt="..." style="max-height:885px;max-width:1920px;">
                                    <div class="card-body">                                              
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-4">                        
                                    </div>
                                  </div>
                                </div>                            
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h3-4'] }}" name="h3-4" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['a-5'] }}" name="a-5" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['p-4'] }}" name="p-4" required>
                                </div>
                                <div class="col-12 mt-5 form-group">   
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>                                       
                                  <div class="card">
                                    <img src="{{ $main[0]['img-5'] }}" class="img-fluid" alt="..." style="max-height:885px;max-width:1920px;">
                                    <div class="card-body">                                              
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-5">                        
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h3-5'] }}" name="h3-5" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h3-a'] }}" name="h3-a" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['p-5-0'] }}" name="p-5-0" required>
                                </div>
                                <div class="col-12 mt-5 form-group">   
                                  <div class="card-header">
                                    <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                  </div>                                       
                                  <div class="card">
                                    <img src="{{ $main[0]['img-6'] }}" class="img-fluid" alt="..." style="max-height:885px;max-width:1920px;">
                                    <div class="card-body">                                              
                                      <label for="exampleFormControlFile1">Example file input</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img-6">                        
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['div'] }}" name="div" required>
                                </div> 
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h6-2'] }}" name="h6-2" required>
                                </div> 
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h3-4'] }}" name="h3-4" required>
                                </div>
                                <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['h3-6'] }}" name="h3-6" required>
                                </div> <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['p-5'] }}" name="p-5" required>
                                </div> <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['li-h3'] }}" name="li-h3" required>
                                </div> <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['li-p'] }}" name="li-p" required>
                                </div> <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['li-h3-1'] }}" name="li-h3-1" required>
                                </div> <div class="col-12 mt-5">
                                  <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                  <input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['li-p-1'] }}" name="li-p-1" required>
                                </div>
                               
                                <div class="col-12">
                                  <button class="btn btn-primary w-100" type="submit" name="form0">Submit</button>
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
