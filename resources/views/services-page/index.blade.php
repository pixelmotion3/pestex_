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
										<a class="dropdown-item" href="/profile">
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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <nav>
                                            <div class="nav nav-tabs overflow-scroll" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="main-screen-tab"
                                                    data-bs-toggle="tab" data-bs-target="#main-screen" type="button"
                                                    role="tab" aria-controls="main-screen"
                                                    aria-selected="false"><small>Página Principal</small></button>
                                                <button class="nav-link" id="services-tab" data-bs-toggle="tab"
                                                    data-bs-target="#services" type="button" role="tab"
                                                    aria-controls="services" aria-selected="false"><small>Todos Serviços</small></button>
                                                <button class="nav-link" id="create-services-tab"
                                                    data-bs-toggle="tab" data-bs-target="#create-services"
                                                    type="button" role="tab" aria-controls="create-services"
                                                    aria-selected="false"><small>Criar Serviço</small></button>
                                                <button class="nav-link" id="detail-services-tab"
                                                    data-bs-toggle="tab" data-bs-target="#detail-services"
                                                    type="button" role="tab" aria-controls="detail-services"
                                                    aria-selected="false"><small>Elementos Comuns</small></button>
                                            </div>
                                        </nav>
                                        <div class="tab-content mt-5" id="nav-tabContent">
                                            <!-- Página Principal -->
                                            <div class="tab-pane fade show active" id="main-screen" role="tabpanel"
                                                aria-labelledby="main-screen-tab">
                                                <form class="row g-3 needs-validation" novalidate
                                                    action="{{ route('services-page.update', 1) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
													<div class="col-12 mt-5">
														<label for="validationCustom01" class="form-label" style="float:left;">Meta Title (PT)</label>
														<input type="text" class="form-control" id="validationCustom01" value="{{ $services_page[0]['meta-title'] }}" name="meta-title" required>
													  </div>
													  <div class="col-12 mt-5">
														<label for="validationCustom01" class="form-label" style="float:left;">Meta Description (PT)</label>
														<input type="text" class="form-control" id="validationCustom01" value="{{ $services_page[0]['meta-desctiption'] }}" name="meta-desctiption"  required>
													  </div>
													  <div class="col-12 mt-5">
														<label for="validationCustom01" class="form-label" style="float:left;">Meta Keywords (PT)</label>
														<input type="text" class="form-control" id="validationCustom01" value="{{ $services_page[0]['meta-keywords'] }}" name="meta-keywords" required>
													  </div>
													<div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image 1</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $services_page[0]['bg-img-path-1'] }}"
                                                                class="img-fluid" alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile2">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile2" name="bg-img-path-1">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H2</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $services_page[0]['h2'] }}" name="h2"
                                                            required>
                                                    </div>
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $services_page[0]['bg-img-path'] }}"
                                                                class="img-fluid" alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="bg-img-path">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H1</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $services_page[0]['h1'] }}" name="h1"
                                                            required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $services_page[0]['p'] }}" name="p"
                                                            required>
                                                    </div>
                                                    <!-- services detail foreach to link each service crud-->
                                                    <div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $services_page[0]['bg-img'] }}"
                                                                class="img-fluid" alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="bg-img">
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
                                                            <img src="{{ $services_page[0]['bg-img-1'] }}"
                                                                class="img-fluid" alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="bg-img-1">
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
                                                            <img src="{{ $services_page[0]['bg-img-2'] }}"
                                                                class="img-fluid" alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="bg-img-2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $services_page[0]['h3-a'] }}" name="h3-a"
                                                            required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $services_page[0]['p-a-1'] }}" name="p-a-1"
                                                            required>
                                                    </div>

													<div class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label for="validationCustom01" class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card" style="display: flex;align-items: center;">
                                                            <img src="{{ $services_page[0]['bg-img-3'] }}"
                                                                class="img-fluid" alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="bg-img-3">
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
                                                            <img src="{{ $services_page[0]['bg-img-4'] }}"
                                                                class="img-fluid" alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="bg-img-4">
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
                                                            <img src="{{ $services_page[0]['bg-img-5'] }}"
                                                                class="img-fluid" alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label for="exampleFormControlFile1">Example file
                                                                    input</label>
                                                                <input type="file" class="form-control-file"
                                                                    id="exampleFormControlFile1" name="bg-img-5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $services_page[0]['h3'] }}" name="h3"
                                                            required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $services_page[0]['p-a'] }}" name="p-a"
                                                            required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $services_page[0]['h6'] }}" name="h6"
                                                            required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $services_page[0]['h3-1'] }}" name="h3-1"
                                                            required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ $services_page[0]['p-1'] }}" name="p-1"
                                                            required>
                                                    </div>


                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100" type="submit"
                                                            name="form0">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Serviços -->
                                            <div class="tab-pane fade" id="services" role="tabpanel"
                                                aria-labelledby="services-tab">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        @isset($services)
                                                            @foreach ($services as $index => $service)
                                                            <div class="col-md-12 mt-5"
                                                                data-wow-delay="500ms">
                                                                <div class="service-one__item text-center" style="height: 800px;">
                                                                    <div class="service-one__item__image">
                                                                        <img src="{{ $service['img'] }}"
                                                                            alt="tolak">
                                                                    </div>
                                                                    <div class="service-one__item__content">
                                                                        <div class="service-one__item__icon">
                                                                            <span class="icon-cooperation"></span>
                                                                        </div><!-- /.service-icon -->
                                                                        <h3 class="service-one__item__title">
                                                                            {{ $service['a'] }}
                                                                        </h3><!-- /.service-title -->
                                                                        <p class="service-one__item__text">
                                                                            {{ $service['p'] }}
                                                                        </p><!-- /.service-text -->
                                                                        <p class="service-one__item__text">
                                                                            {{ $service['p-1'] }}
                                                                        </p><!-- /.service-text -->
                                                                        <p class="service-one__item__text">
                                                                            {{ $service['p-2'] }}
                                                                        </p><!-- /.service-text -->
                                                                        <p class="service-one__item__text">
                                                                            {{ $service['p-3'] }}
                                                                        </p><!-- /.service-text -->
                                                                        <div class="btn-group" role="group"
                                                                            aria-label="Basic mixed styles example">
                                                                            <a data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModal{{ $index + 1 }}"
                                                                                class="btn btn-danger text-white">Edit</a>
                                                                            <a href="#"
                                                                                class="btn btn-danger p-2 rounded"
                                                                                onclick="
                                                                                let result = confirm('Tem a certeza que quer apagar o serviço ?');
                                                                                if(result){
                                                                                    event.preventDefault();
                                                                                    document.getElementById('delete-form').submit();
                                                                                }
                                                                                ">
                                                                                Apagar serviço
                                                                            </a>
                                                                            <form id="delete-form"
                                                                                action="{{ route('ServiceDetails.destroy', [$service->id]) }}"
                                                                                method="post" style="display: none">
                                                                                <input type="hidden" name="_method"
                                                                                    value="delete" />
                                                                                @csrf
                                                                            </form>
                                                                            <a href="#"
                                                                                class="btn btn-danger p-2 rounded"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#createMethodModal{{ $index + 1 }}"
                                                                                onclick="
                                                                                let result = confirm('Are you sure you wanna create a method ?');
                                                                                if(result){
                                                                                    event.preventDefault();
                                                                                    //document.getElementById('method-form').submit();
                                                                                }
                                                                                ">
                                                                                Criar metodo
                                                                            </a>
                                                                            <button data-bs-toggle="modal"
                                                                                data-bs-target="#allMethodsModal"
                                                                                class="btn btn-danger text-white all_methods"
                                                                                onclick="all_methods({{ $service->id }})">Metodos</button>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.service-card-one -->
                                                            </div>
                                                                <!-- Modal  edit-->
                                                                <div class="modal fade"
                                                                    id="exampleModal{{ $index + 1 }}" tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">Modal title
                                                                                    {{ $service['id'] }}
                                                                                </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form class="row g-3 needs-validation"
                                                                                    action="{{ route('ServiceDetails.update', [$service['id']]) }}"
                                                                                    method="post"
                                                                                    enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    @method('put')
                                                                                    <div class="col-12 mt-5 form-group">
                                                                                        <div class="card-header">
                                                                                            <label for="validationCustom01"
                                                                                                class="form-label"
                                                                                                style="float:left;margin-left:-22px;">Background
                                                                                                Image</label>
                                                                                        </div>
                                                                                        <div class="card">
                                                                                            <img src="{{ $service['img'] }}"
                                                                                                class="img-fluid"
                                                                                                alt="...">
                                                                                            <div class="card-body">
                                                                                                <label
                                                                                                    for="exampleFormControlFile1">Example
                                                                                                    file input</label>
                                                                                                <input type="file"
                                                                                                    class="form-control-file"
                                                                                                    id="exampleFormControlFile1"
                                                                                                    name="img">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
																					<div class="col-12 mt-5 form-group">
                                                                                        <div class="card-header">
                                                                                            <label for="validationCustom01"
                                                                                                class="form-label"
                                                                                                style="float:left;margin-left:-22px;">Background
                                                                                                Image</label>
                                                                                        </div>
                                                                                        <div class="card">
                                                                                            <img src="{{ $service['img-2'] }}"
                                                                                                class="img-fluid"
                                                                                                alt="...">
                                                                                            <div class="card-body">
                                                                                                <label
                                                                                                    for="exampleFormControlFile2">Example
                                                                                                    file input</label>
                                                                                                <input type="file"
                                                                                                    class="form-control-file"
                                                                                                    id="exampleFormControlFile2"
                                                                                                    name="img-2">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">H1</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            value="{{ $service['a'] }}"
                                                                                            name="a" required>
                                                                                    </div>
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">P</label>
																						<textarea class="form-control"
																							id="validationCustom01"
																							name="p" required>
																							{{ $service['p'] }}
																						</textarea>
                                                                                        {{-- <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            value={{ $service['p'] }}
                                                                                            name="p" required> --}}
                                                                                    </div>
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">Title</label>
																						<textarea class="form-control"
																							id="validationCustom01"
																							name="title" required>
																							{{ $service['title'] }}
																						</textarea>
                                                                                        {{-- <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            value={{ $service['title'] }}
                                                                                            name="title" required> --}}
                                                                                    </div>
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">P-1</label>
																						<textarea class="form-control"
																							id="validationCustom01"
																							name="p-1" required>
																							{{ $service['p-1'] }}
																						</textarea>
                                                                                        {{-- <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            value={{ $service['p-1'] }}
                                                                                            name="p-1" required> --}}
                                                                                    </div>
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">P-2</label>


																						<textarea class="form-control"
																							id="validationCustom01"
																							name="p-2" required>
																							{{ $service['p-2'] }}
																						</textarea>



                                                                                        {{-- <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            value={{ $service['p-2'] }}
                                                                                            name="p-2" required> --}}
                                                                                    </div>
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">P-3</label>
																						<textarea class="form-control"
																							id="validationCustom01"
																							name="p-3" required>
																							{{ $service['p-3'] }}
																						</textarea>

                                                                                        {{-- <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            value={{ $service['p-3'] }}
                                                                                            name="p-3" required> --}}
                                                                                    </div>
																					<div class="col-12 mt-5">
																						<label for="validationCustom01" class="form-label" style="float:left;">Meta Title (PT)</label>
																						<input type="text" class="form-control" id="validationCustom01" value="{{ $service['meta-title'] }}" name="meta-title" required>
																					  </div>
																					  <div class="col-12 mt-5">
																						<label for="validationCustom01" class="form-label" style="float:left;">Meta Description (PT)</label>
																						<input type="text" class="form-control" id="validationCustom01" value="{{ $service['meta-desctiption'] }}" name="meta-desctiption"  required>
																					  </div>
																					  <div class="col-12 mt-5">
																						<label for="validationCustom01" class="form-label" style="float:left;">Meta Keywords (PT)</label>
																						<input type="text" class="form-control" id="validationCustom01" value="{{ $service['meta-keywords'] }}" name="meta-keywords" required>
																					  </div>
																					<div class="col-12 mt-5">
																						<label for="validationCustom01" class="form-label"
																							style="float:left;">Link permanente</label>
																						<input type="text" class="form-control"
																							id="validationCustom01"
																							value="{{ $service['slug'] }}" name="slug"
																							disabled>
																					</div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">Close</button>
                                                                                        <button type="submit"
                                                                                            class="btn btn-primary"
                                                                                            name="form0">Save
                                                                                            changes</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Modal all method-->
                                                                <div class="modal fade" id="allMethodsModal"
                                                                    tabindex="-1" aria-labelledby="allmethodmodal"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="allmethodmodal">Edite ou apague
                                                                                    metodos.</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <ol class="list-group list-group-numbered methods"
                                                                                    id="methods">
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Modal edit method-->
                                                                <div id="edit_method"></div>
                                                                <!-- Modal create method-->
                                                                <div class="modal fade"
                                                                    id="createMethodModal{{ $index + 1 }}"
                                                                    tabindex="-1" aria-labelledby="createMethodModal"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="createMethodModal">Criar metodo.
                                                                                </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form class="row g-3 needs-validation"
                                                                                    action="{{ route('methods.store') }}"
                                                                                    method="post"
                                                                                    enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    @method('post')
                                                                                    <div class="col-12 mt-5 form-group">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <label
                                                                                                    for="exampleFormControlFile1">Background
                                                                                                    image</label>
                                                                                                <input type="file"
                                                                                                    class="form-control-file"
                                                                                                    id="exampleFormControlFile1"
                                                                                                    name="img"
                                                                                                    required>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">H1</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            name="title-1" required>
                                                                                    </div>

                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">P</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            name="p" required>
                                                                                    </div>
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">Title</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            name="title-2" required>
                                                                                    </div>
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">P-1</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            name="p-1" required>
                                                                                    </div>

                                                                                    <div class="col-12 mt-5">
                                                                                        <input type="hidden"
                                                                                            class="form-control service_id"
                                                                                            value="{{ $service->id }}"
                                                                                            name="service_id" required>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">Close</button>
                                                                                        <button type="submit"
                                                                                            class="btn btn-primary"
                                                                                            name="form0">Save
                                                                                            changes</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endisset
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- create-services -->
                                            <div class="tab-pane fade show" id="create-services" role="tabpanel"
                                                aria-labelledby="create-services-tab">
                                                <form class="row g-3 needs-validation"
                                                    action="{{ route('ServiceDetails.store') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('POST')
                                                    <div class="col-12 mt-5">
                                                        <label for="exampleFormControlFile1">Example file
                                                            input</label>
                                                        <input type="file" class="form-control-file"
                                                            id="exampleFormControlFile1" name="img" required>
                                                    </div>

                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">H1</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" name="a" required>
                                                    </div>

                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" name="p" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">Title</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" name="title" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P-1</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" name="p-1" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P-2</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" name="p-2" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01" class="form-label"
                                                            style="float:left;">P-3</label>
                                                        <input type="text" class="form-control"
                                                            id="validationCustom01" name="p-3" required>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100" type="submit"
                                                            name="form0">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- edit service details -->
                                            <div class="tab-pane fade show" id="detail-services" role="tabpanel"
                                                aria-labelledby="detail-services-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <form action="{{ route('ServiceDetails.update', 1) }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('put')
                                                            {{-- <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card">
                                                                    <img src="{{ $service_details_page[0]['bg-img'] }}"
                                                                        class="img-fluid"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="bg-img">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H1</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h1'] }}"
                                                                    name="h1" required>
                                                            </div> --}}
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H3</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h3'] }}"
                                                                    name="h3" required>
                                                            </div>
                                                            {{-- <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card">
                                                                    <img src="{{ $service_details_page[0]['img'] }}"
                                                                        class="img-fluid"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img">
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card" style="display: flex;align-items: center;">
                                                                    <img src="{{ $service_details_page[0]['img-1'] }}"
                                                                        class="img-fluid" style="max-height: 290px;max-width: 884px;"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card" style="display: flex;align-items: center;">
                                                                    <img src="{{ $service_details_page[0]['img-2'] }}"
                                                                        class="img-fluid" style="max-height: 290px;max-width: 884px;"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card" style="display: flex;align-items: center;">
                                                                    <img src="{{ $service_details_page[0]['img-3'] }}"
                                                                        class="img-fluid" style="max-height: 290px;max-width: 884px;"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H3</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h3-1'] }}"
                                                                    name="h3-1" required>
                                                            </div>
                                                            {{-- <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H3</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['a'] }}"
                                                                    name="a" required>
                                                            </div> --}}
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H3</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h3-2'] }}"
                                                                    name="h3-2" required>
                                                            </div>
                                                            {{-- <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card">
                                                                    <img src="{{ $service_details_page[0]['img-4'] }}"
                                                                        class="img-fluid"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-4">
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H6</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h6'] }}"
                                                                    name="h6" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H6</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h3-3'] }}"
                                                                    name="h3-3" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H4</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h4'] }}"
                                                                    name="h4" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p'] }}"
                                                                    name="p" required>
                                                            </div>
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card" style="display: flex;align-items: center;">
                                                                    <img src="{{ $service_details_page[0]['img-5'] }}"
                                                                        class="img-fluid" style="max-height: 290px;max-width: 884px;"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-5">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H4</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h4-1'] }}"
                                                                    name="h4-1" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p-1'] }}"
                                                                    name="p-1" required>
                                                            </div>


                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card" style="display: flex;align-items: center;">
                                                                    <img src="{{ $service_details_page[0]['img-6'] }}"
                                                                        class="img-fluid" style="max-height: 290px;max-width: 884px;"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-6">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H4</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h4-2'] }}"
                                                                    name="h4-2" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p-2'] }}"
                                                                    name="p-2" required>
                                                            </div>
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card" style="display: flex;align-items: center;">
                                                                    <img src="{{ $service_details_page[0]['img-7'] }}"
                                                                        class="img-fluid" style="max-height: 290px;max-width: 884px;"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-7">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H4</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h4-3'] }}"
                                                                    name="h4-3" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p-3'] }}"
                                                                    name="p-3" required>
                                                            </div>
                                                            {{-- <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card">
                                                                    <img src="{{ $service_details_page[0]['img-8'] }}"
                                                                        class="img-fluid"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-8">
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h6-1'] }}"
                                                                    name="h6-1" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h3-4'] }}"
                                                                    name="h3-4" required>
                                                            </div>
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card" style="display: flex;align-items: center;">
                                                                    <img src="{{ $service_details_page[0]['img-9'] }}"
                                                                        class="img-fluid" style="max-height: 290px;max-width: 884px;"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-9">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['span'] }}"
                                                                    name="span" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h5'] }}"
                                                                    name="h5" required>
                                                            </div>

                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h4-4'] }}"
                                                                    name="h4-4" required>
                                                            </div>

                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p-4'] }}"
                                                                    name="p-4" required>
                                                            </div>
															<hr>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h4-5'] }}"
                                                                    name="h4-5" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
																<textarea id="validationCustom01" name="p-5" class="form-control" required>{{ $service_details_page[0]['p-5'] }}</textarea>
                                                                {{-- <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p-5'] }}"
                                                                    name="p-5" required> --}}
                                                            </div>
															<hr>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>

                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h4-6'] }}"
                                                                    name="h4-6" required>
                                                            </div>

                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
																<textarea id="validationCustom01" name="p-6" class="form-control" required>{{ $service_details_page[0]['p-6'] }}</textarea>
                                                                {{-- <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p-6'] }}"
                                                                    name="p-6" required> --}}
                                                            </div>

															<hr>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h4-7'] }}"
                                                                    name="h4-7" required>
                                                            </div>

                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
																<textarea id="validationCustom01" name="p-7" class="form-control" required>{{ $service_details_page[0]['p-7'] }}</textarea>
                                                                {{-- <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p-7'] }}"
                                                                    name="p-7" required> --}}
                                                            </div>
															<hr>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h4-8'] }}"
                                                                    name="h4-8" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
																<textarea id="validationCustom01"  name="p-8" class="form-control" required>{{ $service_details_page[0]['p-8'] }}</textarea>
                                                                {{-- <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p-8'] }}"
                                                                    name="p-8" required> --}}
                                                            </div>

                                                            {{-- <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h6-span-2'] }}"
                                                                    name="h6-span-2" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h3-5'] }}"
                                                                    name="h3-5" required>
                                                            </div>
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card">
                                                                    <img src="{{ $service_details_page[0]['img-10'] }}"
                                                                        class="img-fluid"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-10">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card">
                                                                    <img src="{{ $service_details_page[0]['img-11'] }}"
                                                                        class="img-fluid"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-11">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['div-1'] }}"
                                                                    name="div-1" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['a-1'] }}"
                                                                    name="a-1" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">Li</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['li'] }}"
                                                                    name="li" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['a-2'] }}"
                                                                    name="a-2" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">Li</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['li-1'] }}"
                                                                    name="li-1" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['a-3'] }}"
                                                                    name="a-3" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p-9'] }}"
                                                                    name="p-9" required>
                                                            </div>
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card">
                                                                    <img src="{{ $service_details_page[0]['img-12'] }}"
                                                                        class="img-fluid"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-12">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card">
                                                                    <img src="{{ $service_details_page[0]['img-13'] }}"
                                                                        class="img-fluid"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-13">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['div-2'] }}"
                                                                    name="div-2" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['span-1'] }}"
                                                                    name="span-1" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['li-2'] }}"
                                                                    name="li-2" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['a-4'] }}"
                                                                    name="a-4" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['li-3'] }}"
                                                                    name="li-3" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h3-6'] }}"
                                                                    name="h3-6" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p-9-1'] }}"
                                                                    name="p-9-1" required>
                                                            </div>
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card">
                                                                    <img src="{{ $service_details_page[0]['img-14'] }}"
                                                                        class="img-fluid"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-14">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5 form-group">
                                                                <div class="card-header">
                                                                    <label for="validationCustom01"
                                                                        class="form-label"
                                                                        style="float:left;margin-left:-22px;">Background
                                                                        Image</label>
                                                                </div>
                                                                <div class="card">
                                                                    <img src="{{ $service_details_page[0]['img-15'] }}"
                                                                        class="img-fluid"
                                                                        alt="...">
                                                                    <div class="card-body">
                                                                        <label
                                                                            for="exampleFormControlFile1">Example
                                                                            file input</label>
                                                                        <input type="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            name="img-15">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['div-3'] }}"
                                                                    name="div-3" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['span-2'] }}"
                                                                    name="span-2" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['li-3-1'] }}"
                                                                    name="li-3-1" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['a-5'] }}"
                                                                    name="a-5" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['li-4'] }}"
                                                                    name="li-4" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">H3</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['h3-7'] }}"
                                                                    name="h3-7" required>
                                                            </div>
                                                            <div class="col-12 mt-5">
                                                                <label for="validationCustom01"
                                                                    class="form-label"
                                                                    style="float:left;">P</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    id="validationCustom01"
                                                                    value="{{ $service_details_page[0]['p-10'] }}"
                                                                    name="p-10" required>
                                                            </div> --}}
                                                            <div class="col-12 mt-4">
                                                                <button class="btn btn-primary w-100" type="submit"
                                                                    name="form1">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
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
        <script>
            function all_methods(arg) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                });
                $.ajax({
                    url: "{{ route('MethodController.fetch') }}",
                    method: "POST",
                    data: {
                        service_id: arg
                    },
                    dataType: 'json',
                    success: function(result) {
                        function sanitizeData(data) {
                            if (typeof data !== 'object' || data === null) {
                                return data;
                            }
                            if (Array.isArray(data)) {
                                return data.map(sanitizeData);
                            }
                            const sanitizedObject = {};
                            for (const key in data) {
                                if (data.hasOwnProperty(key)) {
                                    sanitizedObject[key] = (typeof data[key] === 'number' && isNaN(data[key])) ?
                                        null : sanitizeData(data[key]);
                                }
                            }
                            return sanitizedObject;
                        }
                        const sanitizedResult = sanitizeData(result)
                        $('#methods').empty();
                        $('#edit_method').empty();
                        JSON.parse(JSON.stringify(sanitizedResult)).forEach((element, index) => {
                            let route_destroy = `{{ route('methods.destroy', ':id') }}`.replace(':id',
                                element.id);
                            let route_update = `{{ route('methods.update', ':id') }}`.replace(':id',
                                element.id);
                            let methods =
                                `<li class="list-group-item d-flex justify-content-between align-items-start"> <div class="ms-2 me-auto"> <div class="fw-bold">Metodo</div> </div> <span class="badge text-bg-primary rounded-pill"> <a data-bs-toggle="modal" data-bs-target="#edit_methodModal${index}">edit</a> </span> <span class="badge text-bg-primary rounded-pill"> <a href="#" class="text-white" onclick="let result = confirm('Tem a certeza que quer apagar o metodo ?');if(result){ event.preventDefault();document.getElementById('delete-form').submit();}">Apagar serviço</a> <form id="delete-form" action="${route_destroy}" method="post" style="display: none"> <input type="hidden" name="_method" value="delete" /> @csrf @('post')</form> </span> </li>`;
                            $('#methods').append(methods);
                            let edit_method = `<div class="modal fade"
                                    id="edit_methodModal${index}"
                                    tabindex="-1" aria-labelledby="editMethodModal"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    Edit metodo.
                                                </h5>
                                                <button type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="row g-3 needs-validation"
                                                    action="${route_update}"
                                                    method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div
                                                        class="col-12 mt-5 form-group">
                                                        <div class="card-header">
                                                            <label
                                                                for="validationCustom01"
                                                                class="form-label"
                                                                style="float:left;margin-left:-22px;">Background
                                                                Image</label>
                                                        </div>
                                                        <div class="card">
                                                            <img src="{{ '${element.img}' }}"
                                                                class="img-fluid"
                                                                alt="..."
                                                                style="max-height: 290px;max-width: 884px;">
                                                            <div class="card-body">
                                                                <label
                                                                    for="exampleFormControlFile1">Example
                                                                    file input</label>
                                                                <input type="file"
                                                                    class="form-control-file"
                                                                    id="exampleFormControlFile1"
                                                                    name="img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01"
                                                            class="form-label"
                                                            style="float:left;">H1</label>
                                                        <input
                                                            value="{{ '${element.title1}' }}"
                                                            type="text"
                                                            class="form-control"
                                                            id="validationCustom01"
                                                            name="title-1" required>
                                                    </div>

                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01"
                                                            class="form-label"
                                                            style="float:left;">P</label>
                                                        <input
                                                            value="{{ '${element.p}' }}"
                                                            type="text"
                                                            class="form-control"
                                                            id="validationCustom01"
                                                            name="p" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01"
                                                            class="form-label"
                                                            style="float:left;">Title</label>
                                                        <input
                                                            value="{{ '${element.title2}' }}"
                                                            type="text"
                                                            class="form-control"
                                                            id="validationCustom01"
                                                            name="title-2" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <label for="validationCustom01"
                                                            class="form-label"
                                                            style="float:left;">P-1</label>
                                                        <input
                                                            value="{{ '${element.p1}' }}"
                                                            type="text"
                                                            class="form-control"
                                                            id="validationCustom01"
                                                            name="p-1" required>
                                                    </div>
                                                    <div class="col-12 mt-5">
                                                        <input type="hidden"
                                                            class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ '${element.service_id}' }}"
                                                            name="service_id" required>
                                                        <input type="hidden"
                                                            class="form-control"
                                                            id="validationCustom01"
                                                            value="{{ '${element.id}' }}"
                                                            name="method_id" required>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                            class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit"
                                                            class="btn btn-primary"
                                                            name="form0">Save
                                                            changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#edit_method').append(edit_method);
                        })
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('AJAX request failed:', textStatus, errorThrown);
                    }
                })
            }
        </script>
        <!-- / Layout wrapper -->
</x-app-layout>
