<x-app-layout>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('includes.menu')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
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
                                <a class="nav-item nav-link search-toggler d-flex align-items-center px-0"
                                    href="javascript:void(0);">
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
                                <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class="ti ti-md"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                            <span class="align-middle"><i
                                                    class="ti ti-sun ti-md me-3"></i>Light</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                            <span class="align-middle"><i
                                                    class="ti ti-moon-stars ti-md me-3"></i>Dark</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                            <span class="align-middle"><i
                                                    class="ti ti-device-desktop-analytics ti-md me-3"></i>System</span>
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
                                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
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
                                            <i class="ti ti-settings me-3 ti-md"></i><span
                                                class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-billing.html">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i><span
                                                    class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1 mx-n2"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-pricing.html">
                                            <i class="ti ti-currency-dollar me-3 ti-md"></i><span
                                                class="align-middle">Pricing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-faq.html">
                                            <i class="ti ti-question-mark me-3 ti-md"></i><span
                                                class="align-middle">FAQ</span>
                                        </a>
                                    </li> --}}
                                    <li>
                                        <div class="d-grid px-2 pt-2 pb-1">
                                            <small class="align-middle btn btn-sm btn-danger d-flex text-white">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <x-responsive-nav-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                                        class="text-white lh-lg">
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
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search..." />
                        <i class="ti ti-x search-toggler cursor-pointer"></i>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <nav>
                                            <div class="nav nav-tabs overflow-scroll" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="main-screen-tab"
                                                    data-bs-toggle="tab" data-bs-target="#main-screen" type="button"
                                                    role="tab" aria-controls="main-screen"
                                                    aria-selected="false"><small>Sustentabilidade Info</small></button>
                                            </div>
                                        </nav>
                                        <div class="tab-content mt-5" id="nav-tabContent">
                                            <!-- Página Principal -->
                                            <div class="tab-pane fade show active" id="main-screen" role="tabpanel"
                                                aria-labelledby="main-screen-tab">
                                                <form method="post"
                                                    action="{{ route('sustainability-page.update', 1) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
													<div class="col-12 mt-5">
														<label for="validationCustom01" class="form-label" style="float:left;">Meta Title (PT)</label>
														<input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['meta-title'] }}" name="meta-title" required>
													</div>
													<div class="col-12 mt-5">
														<label for="validationCustom01" class="form-label" style="float:left;">Meta Description (PT)</label>
														<input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['meta-desctiption'] }}" name="meta-desctiption"  required>
													</div>
													<div class="col-12 mt-5">
														<label for="validationCustom01" class="form-label" style="float:left;">Meta Keywords (PT)</label>
														<input type="text" class="form-control" id="validationCustom01" value="{{ $main[0]['meta-keywords'] }}" name="meta-keywords" required>
													</div>
													<div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $main[0]['bg-img-2'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile2">Example file
                                                                    input 2</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile2" name="bg-img-2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $main[0]['bg-img'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="bg-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H2</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h2'] }}"
                                                            name="h2" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h1'] }}"
                                                            name="h1" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['p'] }}"
                                                            name="p" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H6</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h6'] }}"
                                                            name="h6" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3'] }}"
                                                            name="h3" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-1'] }}"
                                                            name="h3-1" required>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $main[0]['img'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-2'] }}"
                                                            name="h3-2" required>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $main[0]['img-1'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="img-1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-3'] }}"
                                                            name="h3-3" required>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $main[0]['img-2'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="img-2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-4'] }}"
                                                            name="h3-4" required>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $main[0]['img-3'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="img-3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $main[0]['img-4-1'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="img-4-1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-5-1'] }}"
                                                            name="h3-5-1" required>
                                                    </div>

                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['p-1'] }}"
                                                            name="p-1" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span'] }}"
                                                            name="span" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-1'] }}"
                                                            name="span-1" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-2'] }}"
                                                            name="span-2" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-3'] }}"
                                                            name="span-3" required>
                                                    </div>
                                                    {{-- <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card">
                                                            <img src="{{ $main[0]['img-5'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="img-5">
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-6'] }}"
                                                            name="h3-6" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['p-2'] }}"
                                                            name="p-2" required>
                                                    </div>

                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-4'] }}"
                                                            name="span-4" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-5'] }}"
                                                            name="span-5" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-6'] }}"
                                                            name="span-6" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $main[0]['span-6-a'] }}" name="span-6-a"
                                                            required>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card">
                                                            <img src="{{ $main[0]['img-6'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="img-6">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-7'] }}"
                                                            name="h3-7" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['p-3'] }}"
                                                            name="p-3" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-7'] }}"
                                                            name="span-7" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-8'] }}"
                                                            name="span-8" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-9'] }}"
                                                            name="span-9" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $main[0]['span-9-a'] }}" name="span-9-a"
                                                            required>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card">
                                                            <img src="{{ $main[0]['img-7'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="img-7">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-8'] }}"
                                                            name="h3-8" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['p-4'] }}"
                                                            name="p-4" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-10'] }}"
                                                            name="span-10" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-11'] }}"
                                                            name="span-11" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-12'] }}"
                                                            name="span-12" required>
                                                    </div> --}}
                                                    {{-- <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['span-13'] }}"
                                                            name="span-13" required>
                                                    </div> --}}
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h6-span'] }}"
                                                            name="h6-span" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-9'] }}"
                                                            name="h3-9" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-a'] }}"
                                                            name="h3-a" required>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $main[0]['img-8'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="img-8">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['p-5'] }}"
                                                            name="p-5" required>
                                                    </div>
													<div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">link 1</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['link-1'] }}"
                                                            name="link-1" required>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $main[0]['img-9'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="img-9">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-a-1'] }}"
                                                            name="h3-a-1" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['p-6'] }}"
                                                            name="p-6" required>
                                                    </div>
													<div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">link 2</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['link-2'] }}"
                                                            name="link-2" required>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $main[0]['img-10'] }}" class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="img-10">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['h3-a-2'] }}"
                                                            name="h3-a-2" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['p-7'] }}"
                                                            name="p-7" required>
                                                    </div>
													<div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">link 3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" value="{{ $main[0]['link-3'] }}"
                                                            name="link-3" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <button class="btn btn-primary w-100" type="submit"
                                                            name="form0">Submit</button>
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
                            {{-- <div class="container-xxl">
                                <div
                                    class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                                    <div class="text-body">
                                        ©
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        , made with ❤️ by <a href="https://pixinvent.com" target="_blank"
                                            class="footer-link">Pixinvent</a>
                                    </div>
                                    <div class="d-none d-lg-inline-block">
                                        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                                            target="_blank">License</a>
                                        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                                            class="footer-link me-4">More Themes</a>

                                        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                                            target="_blank" class="footer-link me-4">Documentation</a>

                                        <a href="https://pixinvent.ticksy.com/" target="_blank"
                                            class="footer-link d-none d-sm-inline-block">Support</a>
                                    </div>
                                </div>
                            </div> --}}
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
