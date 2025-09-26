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
                                            <span class="align-middle"><i class="ti ti-sun ti-md me-3"></i>Light</span>
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
                                                        <img src="/assets/images/favicon01.png" alt
                                                            class="rounded-circle" />
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
                                            <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">Alterar
                                                palavra-passe</span>
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
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card text-center">
                                    <div class="card-header">

                                    </div>
                                    <div class="card-body">
                                        <nav>
                                            <div class="nav nav-tabs overflow-x-scroll" id="nav-tab" role="tablist">
                                                {{-- <button class="nav-link active" id="nav-paragraph-tab"
													data-bs-toggle="tab" data-bs-target="#nav-paragraph" type="button"
													role="tab" aria-controls="nav-paragraph"
													aria-selected="false"><small>Parágrafo de navegação</small></button>
												<button class="nav-link" id="quote-form-tab" data-bs-toggle="tab"
													data-bs-target="#quote-form" type="button" role="tab"
													aria-controls="quote-form"
													aria-selected="false"><small>Formulário</small></button>
												<button class="nav-link" id="carrousel-tab" data-bs-toggle="tab"
													data-bs-target="#carrousel" type="button" role="tab"
													aria-controls="carrousel" aria-selected="false"><small>Main
														Carrousel</small></button>
												<button class="nav-link" id="three-icon-boxes-tab" data-bs-toggle="tab"
													data-bs-target="#three-icon-boxes" type="button" role="tab"
													aria-controls="three-icon-boxes"
													aria-selected="false"><small>Intro</small></button>
												<button class="nav-link" id="three-icon-images-boxes-tab"
													data-bs-toggle="tab" data-bs-target="#three-icon-images-boxes"
													type="button" role="tab" aria-controls="three-icon-images-boxes"
													aria-selected="false"><small>Serviços</small></button>
												<button class="nav-link" id="image-tabs-text-tab" data-bs-toggle="tab"
													data-bs-target="#image-tabs-text" type="button" role="tab"
													aria-controls="image-tabs-text"
													aria-selected="false"><small>Serviços Tabs</small></button>
												<button class="nav-link" id="background-images+text-tab"
													data-bs-toggle="tab" data-bs-target="#background-images+text"
													type="button" role="tab" aria-controls="background-images+text"
													aria-selected="false"><small>Porquê Nós</small></button>
												<button class="nav-link"
													id="three-images+six-icons+three-paragraphs-tab"
													data-bs-toggle="tab"
													data-bs-target="#three-images+six-icons+three-paragraphs"
													type="button" role="tab"
													aria-controls="three-images+six-icons+three-paragraphs"
													aria-selected="false"><small>Sustentabilidade</small></button> --}}
												<button class="nav-link active" id="tab-blogs-main-tab"
                                                    data-bs-toggle="tab" data-bs-target="#tab-blogs-main"
                                                    type="button" role="tab" aria-controls="tab-blogs-main"
                                                    aria-selected="false"><small>Página principal</small></button>
                                                <button class="nav-link" id="tab-testem-tab"
                                                    data-bs-toggle="tab" data-bs-target="#tab-testem"
                                                    type="button" role="tab" aria-controls="tab-testem"
                                                    aria-selected="false"><small>Comentários</small></button>
												<button class="nav-link" id="tab-cards-tab"
                                                    data-bs-toggle="tab" data-bs-target="#tab-cards"
                                                    type="button" role="tab" aria-controls="tab-cards"
                                                    aria-selected="false"><small>Cards</small></button>
												<button class="nav-link" id="tab-cards-benefits-tab"
                                                    data-bs-toggle="tab" data-bs-target="#tab-cards-benefits"
                                                    type="button" role="tab" aria-controls="tab-cards-benefits"
                                                    aria-selected="false"><small>Cards Benefícios</small></button>
												<button class="nav-link" id="tab-cards-steps-tab"
                                                    data-bs-toggle="tab" data-bs-target="#tab-cards-steps"
                                                    type="button" role="tab" aria-controls="tab-cards-steps"
                                                    aria-selected="false"><small>Cards Steps</small></button>
												<button class="nav-link" id="tab-faq-tab"
													data-bs-toggle="tab" data-bs-target="#tab-faq"
													type="button" role="tab" aria-controls="tab-faq"
													aria-selected="false"><small>Faq</small></button>
												<button class="nav-link" id="tab-why-us-tab"
													data-bs-toggle="tab" data-bs-target="#tab-why-us"
													type="button" role="tab" aria-controls="tab-why-us"
													aria-selected="false"><small>Poruqe nós</small></button>
                                                {{-- <button class="nav-link" id="four-images+collapse-box-tab"
													data-bs-toggle="tab" data-bs-target="#four-images+collapse-box"
													type="button" role="tab" aria-controls="four-images+collapse-box"
													aria-selected="false"><small>FAQ</small></button>
												<button class="nav-link" id="call-now-image-box-tab"
													data-bs-toggle="tab" data-bs-target="#call-now-image-box"
													type="button" role="tab" aria-controls="call-now-image-box"
													aria-selected="false"><small>Contacto</small></button>
												<button class="nav-link" id="watch-video+background-image-tab"
													data-bs-toggle="tab" data-bs-target="#watch-video+background-image"
													type="button" role="tab"
													aria-controls="watch-video+background-image"
													aria-selected="false"><small>Área Cliente</small></button>
												<button class="nav-link" id="terms-service-tab" data-bs-toggle="tab"
													data-bs-target="#terms-service" type="button" role="tab"
													aria-controls="terms-service" aria-selected="false"><small>Termos de
														Serviço</small></button>
												<button class="nav-link" id="policy-privacy-tab" data-bs-toggle="tab"
													data-bs-target="#policy-privacy" type="button" role="tab"
													aria-controls="policy-privacy" aria-selected="false"><small>Política
														de Privacidade</small></button>
												<button class="nav-link" id="background-image+form-tab"
													data-bs-toggle="tab" data-bs-target="#background-image+form"
													type="button" role="tab" aria-controls="background-image+form"
													aria-selected="false"><small>Contact Us</small></button> --}}
                                                <!--
                                <button class="nav-link" id="footer-tab" data-bs-toggle="tab" data-bs-target="#footer" type="button" role="tab" aria-controls="footer" aria-selected="false"><small>footer</small></button>
                                -->
                                            </div>
                                        </nav>
                                        <div class="tab-content mt-5" id="nav-tabContent">
											<!-- tab blogs main -->
                                            <div class="tab-pane fade show active" id="tab-blogs-main"
                                                role="tabpanel" aria-labelledby="tab-blogs-main-tab">
                                                <div class="container">
                                                    <div class="row">
														<form class="row g-3 needs-validation" novalidate action="{{ route('FrontPage.AdminLpMaintenanceUpdate') }}" method="post" enctype="multipart/form-data">
															@csrf
															@method('POST')
															<div class="content-page-header">
																<h5 class="mb-2">Section 1</h5>
															</div>
															<div class="row">
																<div class="col-6 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_1_img_1" class="form-label"
																				style="float:left;">sec_1_img_1</label>
																			<img src="/{{$maintenance[0]['sec_1_img_1']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_1_img_1" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_1_img_1" name="sec_1_img_1" required>
																	</div>
																</div>
																<div class="col-6 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_1_img_2" class="form-label"
																				style="float:left;">sec_1_img_2</label>
																			<img src="/{{$maintenance[0]['sec_1_img_2']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_1_img_2" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_1_img_2" name="sec_1_img_2" required>
																	</div>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_1_h_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_1_h_1"
																		value="{{$maintenance[0]['sec_1_h_1']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_1_h_2</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_1_h_2"
																		value="{{$maintenance[0]['sec_1_h_2']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_1_p_3</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_1_p_3"
																		value="{{$maintenance[0]['sec_1_p_3']}}"
																		required>
																</div>

																<div class="col-6 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_1_span_4</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_1_span_4"
																		value="{{$maintenance[0]['sec_1_span_4']}}"
																		required>
																</div>
																<div class="col-6 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_1_span_5</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_1_span_5"
																		value="{{$maintenance[0]['sec_1_span_5']}}"
																		required>
																</div>
															</div>

															{{-- Section 2 --}}
															<div class="content-page-header">
																<h5 class="mb-2">Section 2</h5>
															</div>
															<div class="row">
																<div class="col-4 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_2_img_1" class="form-label"
																				style="float:left;">sec_2_img_1</label>
																			<img src="/{{$maintenance[0]['sec_2_img_1']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_2_img_1" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_2_img_1" name="sec_2_img_1" required>
																	</div>
																	<div class="col-12 mt-5">
																		<label
																			class="form-label"
																			style="float:left;">sec_2_span_1</label>
																		<input type="text"
																			class="form-control"
																			id="validationCustom01"
																			name="sec_2_span_1"
																			value="{{$maintenance[0]['sec_2_span_1']}}"
																			required>
																	</div>
																	<div class="col-12 mt-5">
																		<label
																			class="form-label"
																			style="float:left;">sec_2_span_2</label>
																		<input type="text"
																			class="form-control"
																			id="validationCustom01"
																			name="sec_2_span_2"
																			value="{{$maintenance[0]['sec_2_span_2']}}"
																			required>
																	</div>
																</div>
																<div class="col-4 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_2_img_2" class="form-label"
																				style="float:left;">sec_2_img_2</label>
																			<img src="/{{$maintenance[0]['sec_2_img_2']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_2_img_2" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_2_img_2" name="sec_2_img_2" required>
																	</div>
																	<div class="col-12 mt-5">
																		<label
																			class="form-label"
																			style="float:left;">sec_2_span_3</label>
																		<input type="text"
																			class="form-control"
																			id="validationCustom01"
																			name="sec_2_span_3"
																			value="{{$maintenance[0]['sec_2_span_3']}}"
																			required>
																	</div>
																	<div class="col-12 mt-5">
																		<label
																			class="form-label"
																			style="float:left;">sec_2_span_4</label>
																		<input type="text"
																			class="form-control"
																			id="validationCustom01"
																			name="sec_2_span_4"
																			value="{{$maintenance[0]['sec_2_span_4']}}"
																			required>
																	</div>
																</div>
																<div class="col-4 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_2_img_3" class="form-label"
																				style="float:left;">sec_2_img_3</label>
																			<img src="/{{$maintenance[0]['sec_2_img_3']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_2_img_3" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_2_img_3" name="sec_2_img_3" required>
																	</div>
																	<div class="col-12 mt-5">
																		<label
																			class="form-label"
																			style="float:left;">sec_2_span_5</label>
																		<input type="text"
																			class="form-control"
																			id="validationCustom01"
																			name="sec_2_span_5"
																			value="{{$maintenance[0]['sec_2_span_5']}}"
																			required>
																	</div>
																	<div class="col-12 mt-5">
																		<label
																			class="form-label"
																			style="float:left;">sec_2_span_6</label>
																		<input type="text"
																			class="form-control"
																			id="validationCustom01"
																			name="sec_2_span_6"
																			value="{{$maintenance[0]['sec_2_span_6']}}"
																			required>
																	</div>
																</div>
															</div>

															{{-- Section 3 --}}
															<div class="content-page-header">
																<h5 class="mb-2">Section 3</h5>
															</div>
															<div class="row">
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_3_h_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_3_h_1"
																		value="{{$maintenance[0]['sec_3_h_1']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_3_p_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_3_p_1"
																		value="{{$maintenance[0]['sec_3_p_1']}}"
																		required>
																</div>
															</div>

															{{-- Section 4 --}}
															<div class="content-page-header">
																<h5 class="mb-2">Section 4</h5>
															</div>
															<div class="row">
																<div class="col-12 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_4_img_1" class="form-label"
																				style="float:left;">sec_4_img_1</label>
																			<img src="/{{$maintenance[0]['sec_4_img_1']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_4_img_1" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_4_img_1" name="sec_4_img_1" required>
																	</div>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_4_p_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_4_p_1"
																		value="{{$maintenance[0]['sec_4_p_1']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_4_h_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_4_h_1"
																		value="{{$maintenance[0]['sec_4_h_1']}}"
																		required>
																</div>
															</div>

															{{-- Section 5 --}}
															<div class="content-page-header">
																<h5 class="mb-2">Section 5</h5>
															</div>
															<div class="row">
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_5_h_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_5_h_1"
																		value="{{$maintenance[0]['sec_5_h_1']}}"
																		required>
																</div>
															</div>


															{{-- Section 6 --}}
															<div class="content-page-header">
																<h5 class="mb-2">Section 6</h5>
															</div>
															<div class="row">
																<div class="col-6 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_6_img_1" class="form-label"
																				style="float:left;">sec_6_img_1</label>
																			<img src="/{{$maintenance[0]['sec_6_img_1']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_6_img_1" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_6_img_1" name="sec_6_img_1" required>
																	</div>
																</div>
																<div class="col-6 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_6_img_2" class="form-label"
																				style="float:left;">sec_6_img_2</label>
																			<img src="/{{$maintenance[0]['sec_6_img_2']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_6_img_2" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_6_img_2" name="sec_6_img_2" required>
																	</div>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_6_h_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_6_h_1"
																		value="{{$maintenance[0]['sec_6_h_1']}}"
																		required>
																</div>
															</div>


															{{-- Section 7 --}}
															<div class="content-page-header">
																<h5 class="mb-2">Section 7</h5>
															</div>
															<div class="row">
																<div class="col-12 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_7_img_1" class="form-label"
																				style="float:left;">sec_7_img_1</label>
																			<img src="/{{$maintenance[0]['sec_7_img_1']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_7_img_1" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_7_img_1" name="sec_7_img_1" required>
																	</div>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_7_h_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_7_h_1"
																		value="{{$maintenance[0]['sec_7_h_1']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_7_p_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_7_p_1"
																		value="{{$maintenance[0]['sec_7_p_1']}}"
																		required>
																</div>
															</div>

															{{-- Section 8 --}}
															<div class="content-page-header">
																<h5 class="mb-2">Section 8</h5>
															</div>
															<div class="row">
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_8_h_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_8_h_1"
																		value="{{$maintenance[0]['sec_8_h_1']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_8_p_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_8_p_1"
																		value="{{$maintenance[0]['sec_8_p_1']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_8_p_2</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_8_p_2"
																		value="{{$maintenance[0]['sec_8_p_2']}}"
																		required>
																</div>
															</div>

															{{-- Section 9 --}}
															<div class="content-page-header">
																<h5 class="mb-2">Section 9</h5>
															</div>
															<div class="row">
																<div class="col-4 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_9_img_1" class="form-label"
																				style="float:left;">sec_9_img_1</label>
																			<img src="/{{$maintenance[0]['sec_9_img_1']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_9_img_1" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_9_img_1" name="sec_9_img_1" required>
																	</div>
																</div>
																<div class="col-4 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_9_img_2" class="form-label"
																				style="float:left;">sec_9_img_2</label>
																			<img src="/{{$maintenance[0]['sec_9_img_2']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_9_img_2" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_9_img_2" name="sec_9_img_2" required>
																	</div>
																</div>
																<div class="col-4 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_9_img_3" class="form-label"
																				style="float:left;">sec_9_img_3</label>
																			<img src="/{{$maintenance[0]['sec_9_img_3']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_9_img_3" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_9_img_3" name="sec_9_img_3" required>
																	</div>
																</div>
																<div class="col-4 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_9_img_4" class="form-label"
																				style="float:left;">sec_9_img_4</label>
																			<img src="/{{$maintenance[0]['sec_9_img_4']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_9_img_4" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_9_img_4" name="sec_9_img_4" required>
																	</div>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_9_h_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_9_h_1"
																		value="{{$maintenance[0]['sec_9_h_1']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_9_p_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_9_p_1"
																		value="{{$maintenance[0]['sec_9_p_1']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_9_span_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_9_span_1"
																		value="{{$maintenance[0]['sec_9_span_1']}}"
																		required>
																</div>
															</div>

															{{-- Section 10 --}}
															<div class="content-page-header">
																<h5 class="mb-2">Section 10</h5>
															</div>
															<div class="row">
																<div class="col-4 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-6 mt-5">
																			<label for="sec_10_img_1" class="form-label"
																				style="float:left;">sec_10_img_1</label>
																			<img src="/{{$maintenance[0]['sec_10_img_1']}}" alt="tolak" style="height: 100px">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec_10_img_1" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																			id="sec_10_img_1" name="sec_10_img_1" required>
																	</div>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_10_span_1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_10_span_1"
																		value="{{$maintenance[0]['sec_10_span_1']}}"
																		required>
																</div>
																<div class="col-6 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_10_span_2</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_10_span_2"
																		value="{{$maintenance[0]['sec_10_span_2']}}"
																		required>
																</div>
																<div class="col-6 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_10_span_3</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_10_span_3"
																		value="{{$maintenance[0]['sec_10_span_3']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec_10_span_4</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec_10_span_4"
																		value="{{$maintenance[0]['sec_10_span_4']}}"
																		required>
																</div>
															</div>

															{{-- Section 11 --}}
															<div class="content-page-header">
																<h5 class="mb-2">Section 11</h5>
															</div>
															<div class="row">
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec-11-h-1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec-11-h-1"
																		value="{{$urgency[0]['sec-11-h-1']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec-11-span-1</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec-11-span-1"
																		value="{{$urgency[0]['sec-11-span-1']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec-11-span-2</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec-11-span-2"
																		value="{{$urgency[0]['sec-11-span-2']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec-11-span-3</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec-11-span-3"
																		value="{{$urgency[0]['sec-11-span-3']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec-11-span-4</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec-11-span-4"
																		value="{{$urgency[0]['sec-11-span-4']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec-11-span-5</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec-11-span-5"
																		value="{{$urgency[0]['sec-11-span-5']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec-11-span-6</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec-11-span-6"
																		value="{{$urgency[0]['sec-11-span-6']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec-11-span-7</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec-11-span-7"
																		value="{{$urgency[0]['sec-11-span-7']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec-11-span-8</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec-11-span-8"
																		value="{{$urgency[0]['sec-11-span-8']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec-11-span-9</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec-11-span-9"
																		value="{{$urgency[0]['sec-11-span-9']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<label
																		class="form-label"
																		style="float:left;">sec-11-span-10</label>
																	<input type="text"
																		class="form-control"
																		id="validationCustom01"
																		name="sec-11-span-10"
																		value="{{$urgency[0]['sec-11-span-10']}}"
																		required>
																</div>
																<div class="col-12 mt-5">
																	<div class="col-12 mt-5">
																		<div class="col-12 mt-5">
																			<label for="sec-1-image1" class="form-label"
																				style="float:left;">sec-11-img-1</label>
																			<img src="/{{$urgency[0]['sec-11-img-1']}}" alt="tolak" style="height: 250px;">
																		</div>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="sec-1-image1" class="form-label"
																			style="float:left;">sec-11-img-1</label>
																		<input type="file" class="form-control"
																			id="sec-1-image1" name="sec-11-img-1" required>
																	</div>
																</div>
															</div>
															{{-- Section 11 --}}



                                                            <div class="">
                                                                <button type="submit" class="btn btn-primary w-100 mt-5"
                                                                    class="btn btn-primary">Salvar</button>
                                                            </div>
														</form>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- tab blogs -->
                                            <div class="tab-pane fade" id="tab-testem"
                                                role="tabpanel" aria-labelledby="tab-testem-tab">
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Novo comentário</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="row g-3 needs-validation" novalidate
                                                                    action="{{ route('FrontPage.AdminLpMaintenanceNewComment') }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <div class="col-12 mt-5">
                                                                        <label for="title" class="form-label"
                                                                            style="float:left;">Nome</label>
                                                                        <input type="text" class="form-control"
                                                                            id="title" name="name" required>
                                                                    </div>
                                                                    <div class="col-12 mt-5">
                                                                        <label for="title" class="form-label"
                                                                            style="float:left;">Comentário</label>
                                                                        <input type="text" class="form-control"
                                                                            id="title" name="comment" required>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Fechar</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Salvar</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        @foreach ($comments as $comment)
                                                            <div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary">
                                                                <div>
                                                                    <p class="text-center mt-5">
                                                                        <i>
                                                                            {{ $comment['comment'] }}
                                                                        </i>
                                                                    </p>
                                                                    <h3 class="h3 mt-3">
                                                                        <strong>{{ $comment['name'] }}</strong>
                                                                    </h3>
                                                                    <h5 class="h5 text-white-50">
                                                                </div>
																<button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#modalEditComment-{{$comment['id']}}">
																	Editar
																</button>
                                                                {{-- <a class="btn btn-primary" href="{{ route('HomePage.HomePageBlogsEdit', [$comment['id']]) }}">Editar comentário</a> --}}
                                                                <a href="#" class="btn btn-danger w-100 mt-2 rounded"
                                                                    onclick="
															let result = confirm('Tem a certeza que quer apagar o review ?');
															if(result){
																event.preventDefault();
																document.getElementById('delete-form-{{ $comment['id'] }}').submit();
															}
															">
                                                                    Apagar comentário
                                                                </a>
                                                                <form id="delete-form-{{ $comment['id'] }}"
                                                                    action="{{ route('FrontPage.AdminLpMaintenanceDeleteComment', [$comment['id']]) }}"
                                                                    method="POST" style="display: none">
                                                                    <input type="hidden" name="_method"
                                                                        value="POST" />
                                                                    @csrf
                                                                </form>
                                                                <form method="POST"
                                                                    action="{{ route('FrontPage.AdminLpMaintenanceUpdateComment') }}">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <div class="modal fade"
                                                                        id="modalEditComment-{{ $comment['id'] }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5"
                                                                                        id="exampleModalLabel">Editar
                                                                                    </h1>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
																					<input type="hidden" class="form-control"
																							id="id" name="id" value="{{ $comment['id'] }}" required>
                                                                                    <div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Nome</label>
																						<input type="text" class="form-control"
																							id="title" name="name" value="{{ $comment['name'] }}" required>
																					</div>
																					<div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Comentário</label>
																						<input type="text" class="form-control"
																							id="title" name="comment" value="{{ $comment['comment'] }}" required>
																					</div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">Fechar</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary"
                                                                                        name="form13">Salvar</button>
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
                                                    Novo comentário
                                                </button>
                                            </div>

											<!-- tab cards -->
                                            <div class="tab-pane fade" id="tab-cards"
                                                role="tabpanel" aria-labelledby="tab-cards-tab">
                                                <!-- Modal -->
                                                <div class="modal fade" id="newCardModal" tabindex="-1"
                                                    aria-labelledby="newCardModal" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5">
                                                                    Novo card</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="row g-3 needs-validation" novalidate
                                                                    action="{{ route('FrontPage.AdminLpMaintenanceNewCard') }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('POST')
																	<div class="col-12 mt-5">
                                                                        <label for="title" class="form-label"
                                                                            style="float:left;">Imagem</label>
                                                                        <input type="file" class="form-control"
																		id="img" name="img" required>
                                                                    </div>
																	<div class="col-12 mt-5">
                                                                        <label for="title" class="form-label"
                                                                            style="float:left;">Icone</label>
                                                                        <input type="file" class="form-control"
																		id="icon" name="icon" required>
                                                                    </div>
                                                                    <div class="col-12 mt-5">
                                                                        <label for="title" class="form-label"
                                                                            style="float:left;">Titulo</label>
                                                                        <input type="text" class="form-control"
                                                                            id="title" name="title" required>
                                                                    </div>
                                                                    <div class="col-12 mt-5">
                                                                        <label for="title" class="form-label"
                                                                            style="float:left;">Descrição</label>
                                                                        <input type="text" class="form-control"
                                                                            id="title" name="description" required>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Fechar</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Salvar</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        @foreach ($cards as $card)
                                                            <div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary">
                                                                <div>
																	<div style="position: relative !important;">
																		<img src="/{{ $card['img'] }}" alt="tolak" style="height: 200px;border-radius: 20px;width: 200px;object-fit: cover;">
																		<img src="/{{ $card['icon'] }}" alt="tolak" style="height: 4rem;position: absolute;background: #ff6600;border-radius: 100px;object-fit: cover;top: 9.7rem;left: 40%;border: 3px solid #fff;width: 4rem;">
																	</div>
																	<h3 class="h3 mt-3">
                                                                        <strong>{{ $card['title'] }}</strong>
                                                                    </h3>
                                                                    <p class="text-center mt-5">
                                                                        <i>
                                                                            {{ $card['description'] }}
                                                                        </i>
                                                                    </p>
                                                                    <h5 class="h5 text-white-50">
                                                                </div>
																<button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#modalEditCard-{{$card['id']}}">
																	Editar
																</button>
                                                                {{-- <a class="btn btn-primary" href="{{ route('HomePage.HomePageBlogsEdit', [$comment['id']]) }}">Editar comentário</a> --}}
                                                                <a href="#" class="btn btn-danger w-100 mt-2 rounded"
                                                                    onclick="
																		let result = confirm('Tem a certeza que quer apagar o review ?');
																		if(result){
																			event.preventDefault();
																			document.getElementById('delete-form-card-{{ $card['id'] }}').submit();
																		}
																		">
                                                                    Apagar card
                                                                </a>
                                                                <form id="delete-form-card-{{ $card['id'] }}"
                                                                    action="{{ route('FrontPage.AdminLpMaintenanceDeleteCard', [$card['id']]) }}"
                                                                    method="POST" style="display: none">
                                                                    <input type="hidden" name="_method"
                                                                        value="POST" />
                                                                    @csrf
                                                                </form>
                                                                <form method="POST"
                                                                    action="{{ route('FrontPage.AdminLpMaintenanceUpdateCard') }}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <div class="modal fade"
                                                                        id="modalEditCard-{{ $card['id'] }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5"
                                                                                        id="exampleModalLabel">Editar
                                                                                    </h1>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
																					<input type="hidden" class="form-control"
																							id="id" name="id" value="{{ $card['id'] }}">
                                                                                    <div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Imagem</label>
																						<input type="file" class="form-control"
																						id="img" name="img">
																					</div>
																					<div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Icone</label>
																						<input type="file" class="form-control"
																						id="icon" name="icon">
																					</div>
																					<div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Titulo</label>
																						<input type="text" class="form-control"
																							id="title" name="title" value="{{ $card['title'] }}" required>
																					</div>
																					<div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Descrição</label>
																						<input type="text" class="form-control"
																							id="title" name="description" value="{{ $card['description'] }}" required>
																					</div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">Fechar</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary"
                                                                                        name="form13">Salvar</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#newCardModal">
                                                    Novo card
                                                </button>
                                            </div>

											{{-- Tab Cads benefits --}}
											<div class="tab-pane fade" id="tab-cards-benefits"
												role="tabpanel" aria-labelledby="tab-cards-benefits-tab">
												<!-- Modal -->
												<div class="modal fade" id="newCardBenefitsModal" tabindex="-1"
													aria-labelledby="newCardBenefitsModal" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h1 class="modal-title fs-5">
																	Novo card</h1>
																<button type="button" class="btn-close"
																	data-bs-dismiss="modal"
																	aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<form class="row g-3 needs-validation" novalidate
																	action="{{ route('FrontPage.AdminLpMaintenanceNewCardBenefits') }}"
																	method="post" enctype="multipart/form-data">
																	@csrf
																	@method('POST')
																	<div class="col-12 mt-5">
																		<label for="title" class="form-label"
																			style="float:left;">Imagem</label>
																		<input type="file" class="form-control"
																		id="img" name="img" required>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="title" class="form-label"
																			style="float:left;">Icone</label>
																		<input type="file" class="form-control"
																		id="icon" name="icon" required>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="title" class="form-label"
																			style="float:left;">Titulo</label>
																		<input type="text" class="form-control"
																			id="title" name="title" required>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="title" class="form-label"
																			style="float:left;">Descrição</label>
																		<input type="text" class="form-control"
																			id="title" name="description" required>
																	</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary"
																	data-bs-dismiss="modal">Fechar</button>
																<button type="submit"
																	class="btn btn-primary">Salvar</button>
															</div>
															</form>
														</div>
													</div>
												</div>
												<div class="container">
													<div class="row">
														@foreach ($cardsBenefits as $card)
															<div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary">
																<div>
																	<div style="position: relative !important;">
																		<img src="/{{ $card['img'] }}" alt="tolak" style="height: 200px;border-radius: 20px;width: 200px;object-fit: cover;">
																		<img src="/{{ $card['icon'] }}" alt="tolak" style="height: 4rem;position: absolute;background: #ff6600;border-radius: 100px;object-fit: cover;top: 9.7rem;left: 40%;border: 3px solid #fff;width: 4rem;">
																	</div>
																	<h3 class="h3 mt-3">
																		<strong>{{ $card['title'] }}</strong>
																	</h3>
																	<p class="text-center mt-5">
																		<i>
																			{{ $card['description'] }}
																		</i>
																	</p>
																	<h5 class="h5 text-white-50">
																</div>
																<button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#modalEditCardBenefits-{{$card['id']}}">
																	Editar
																</button>
																{{-- <a class="btn btn-primary" href="{{ route('HomePage.HomePageBlogsEdit', [$comment['id']]) }}">Editar comentário</a> --}}
																<a href="#" class="btn btn-danger w-100 mt-2 rounded"
																	onclick="
																		let result = confirm('Tem a certeza que quer apagar o review ?');
																		if(result){
																			event.preventDefault();
																			document.getElementById('delete-form-card-{{ $card['id'] }}').submit();
																		}
																		">
																	Apagar card
																</a>
																<form id="delete-form-card-{{ $card['id'] }}"
																	action="{{ route('FrontPage.AdminLpMaintenanceDeleteCardBenefits', [$card['id']]) }}"
																	method="POST" style="display: none">
																	<input type="hidden" name="_method"
																		value="POST" />
																	@csrf
																</form>
																<form method="POST"
																	action="{{ route('FrontPage.AdminLpMaintenanceUpdateCardBenefits') }}" enctype="multipart/form-data">
																	@csrf
																	@method('POST')
																	<div class="modal fade"
																		id="modalEditCardBenefits-{{ $card['id'] }}"
																		tabindex="-1"
																		aria-labelledby="exampleModalLabel"
																		aria-hidden="true">
																		<div class="modal-dialog">
																			<div class="modal-content">
																				<div class="modal-header">
																					<h1 class="modal-title fs-5"
																						id="exampleModalLabel">Editar
																					</h1>
																					<button type="button"
																						class="btn-close"
																						data-bs-dismiss="modal"
																						aria-label="Close"></button>
																				</div>
																				<div class="modal-body">
																					<input type="hidden" class="form-control"
																							id="id" name="id" value="{{ $card['id'] }}">
																					<div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Imagem</label>
																						<input type="file" class="form-control"
																						id="img" name="img">
																					</div>
																					<div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Icone</label>
																						<input type="file" class="form-control"
																						id="icon" name="icon">
																					</div>
																					<div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Titulo</label>
																						<input type="text" class="form-control"
																							id="title" name="title" value="{{ $card['title'] }}" required>
																					</div>
																					<div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Descrição</label>
																						<input type="text" class="form-control"
																							id="title" name="description" value="{{ $card['description'] }}" required>
																					</div>
																				</div>
																				<div class="modal-footer">
																					<button type="button"
																						class="btn btn-secondary"
																						data-bs-dismiss="modal">Fechar</button>
																					<button type="submit"
																						class="btn btn-primary"
																						name="form13">Salvar</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														@endforeach
													</div>
												</div>
												<button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#newCardBenefitsModal">
													Novo card
												</button>
											</div>

											{{-- Tab cards steps --}}
											<div class="tab-pane fade" id="tab-cards-steps"
												role="tabpanel" aria-labelledby="tab-cards-steps-tab">
												<!-- Modal -->
												<div class="modal fade" id="newCardStepsModal" tabindex="-1"
													aria-labelledby="newCardStepsModal" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h1 class="modal-title fs-5">
																	Novo card</h1>
																<button type="button" class="btn-close"
																	data-bs-dismiss="modal"
																	aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<form class="row g-3 needs-validation" novalidate
																	action="{{ route('FrontPage.AdminLpMaintenanceNewCardSteps') }}"
																	method="post" enctype="multipart/form-data">
																	@csrf
																	@method('POST')
																	<div class="col-12 mt-5">
																		<label for="title" class="form-label"
																			style="float:left;">Icone</label>
																		<input type="file" class="form-control"
																		id="icon" name="icon" required>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="title" class="form-label"
																			style="float:left;">Titulo</label>
																		<input type="text" class="form-control"
																			id="title" name="title" required>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="title" class="form-label"
																			style="float:left;">Descrição</label>
																		<input type="text" class="form-control"
																			id="title" name="description" required>
																	</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary"
																	data-bs-dismiss="modal">Fechar</button>
																<button type="submit"
																	class="btn btn-primary">Salvar</button>
															</div>
															</form>
														</div>
													</div>
												</div>
												<div class="container">
													<div class="row">
														@foreach ($cardSteps as $card)
															<div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary">
																<div>
																	<div style="">
																		<img src="/{{ $card['icon'] }}" alt="tolak" style="height: 4rem;background: #ff6600;border-radius: 100px;object-fit: cover;top: 9.7rem;left: 40%;border: 3px solid #fff;width: 4rem;">
																	</div>
																	<h3 class="h3 mt-3">
																		<strong>{{ $card['title'] }}</strong>
																	</h3>
																	<p class="text-center mt-5">
																		<i>
																			{{ $card['description'] }}
																		</i>
																	</p>
																	<h5 class="h5 text-white-50">
																</div>
																<button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#modalEditCardSteps-{{$card['id']}}">
																	Editar
																</button>
																{{-- <a class="btn btn-primary" href="{{ route('HomePage.HomePageBlogsEdit', [$comment['id']]) }}">Editar comentário</a> --}}
																<a href="#" class="btn btn-danger w-100 mt-2 rounded"
																	onclick="
																		let result = confirm('Tem a certeza que quer apagar o review ?');
																		if(result){
																			event.preventDefault();
																			document.getElementById('delete-form-card-{{ $card['id'] }}').submit();
																		}
																		">
																	Apagar card
																</a>
																<form id="delete-form-card-{{ $card['id'] }}"
																	action="{{ route('FrontPage.AdminLpMaintenanceDeleteCardSteps', [$card['id']]) }}"
																	method="POST" style="display: none">
																	<input type="hidden" name="_method"
																		value="POST" />
																	@csrf
																</form>
																<form method="POST"
																	action="{{ route('FrontPage.AdminLpMaintenanceUpdateCardSteps') }}" enctype="multipart/form-data">
																	@csrf
																	@method('POST')
																	<div class="modal fade"
																		id="modalEditCardSteps-{{ $card['id'] }}"
																		tabindex="-1"
																		aria-labelledby="exampleModalLabel"
																		aria-hidden="true">
																		<div class="modal-dialog">
																			<div class="modal-content">
																				<div class="modal-header">
																					<h1 class="modal-title fs-5"
																						id="exampleModalLabel">Editar
																					</h1>
																					<button type="button"
																						class="btn-close"
																						data-bs-dismiss="modal"
																						aria-label="Close"></button>
																				</div>
																				<div class="modal-body">
																					<input type="hidden" class="form-control"
																							id="id" name="id" value="{{ $card['id'] }}">

																					<div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Icone</label>
																						<input type="file" class="form-control"
																						id="icon" name="icon">
																					</div>
																					<div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Titulo</label>
																						<input type="text" class="form-control"
																							id="title" name="title" value="{{ $card['title'] }}" required>
																					</div>
																					<div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Descrição</label>
																						<input type="text" class="form-control"
																							id="title" name="description" value="{{ $card['description'] }}" required>
																					</div>
																				</div>
																				<div class="modal-footer">
																					<button type="button"
																						class="btn btn-secondary"
																						data-bs-dismiss="modal">Fechar</button>
																					<button type="submit"
																						class="btn btn-primary"
																						name="form13">Salvar</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														@endforeach
													</div>
												</div>
												<button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#newCardStepsModal">
													Novo card
												</button>
											</div>

											{{-- Tab faq --}}
											<div class="tab-pane fade" id="tab-faq"
												role="tabpanel" aria-labelledby="tab-faq-tab">
												<!-- Modal -->
												<div class="modal fade" id="newFaqModal" tabindex="-1"
													aria-labelledby="newFaqModal" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h1 class="modal-title fs-5">
																	Novo faq</h1>
																<button type="button" class="btn-close"
																	data-bs-dismiss="modal"
																	aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<form class="row g-3 needs-validation" novalidate
																	action="{{ route('FrontPage.AdminLpMaintenanceNewFaqs') }}"
																	method="post" enctype="multipart/form-data">
																	@csrf
																	@method('POST')

																	<div class="col-12 mt-5">
																		<label for="question" class="form-label"
																			style="float:left;">Pergunta</label>
																		<input type="text" class="form-control"
																			id="question" name="question" required>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="response" class="form-label"
																			style="float:left;">Descrição</label>
																		<input type="text" class="form-control"
																			id="response" name="response" required>
																	</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary"
																	data-bs-dismiss="modal">Fechar</button>
																<button type="submit"
																	class="btn btn-primary">Salvar</button>
															</div>
															</form>
														</div>
													</div>
												</div>
												<div class="container">
													<div class="row">
														@foreach ($faqs as $faq)
															<div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary">
																<div>

																	<h3 class="h3 mt-3">
																		<strong>{{ $faq['question'] }}</strong>
																	</h3>
																	<p class="text-center mt-5">
																		<i>
																			{{ $faq['response'] }}
																		</i>
																	</p>
																	<h5 class="h5 text-white-50">
																</div>
																<button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#modalEditFaq-{{$faq['id']}}">
																	Editar
																</button>
																{{-- <a class="btn btn-primary" href="{{ route('HomePage.HomePageBlogsEdit', [$comment['id']]) }}">Editar comentário</a> --}}
																<a href="#" class="btn btn-danger w-100 mt-2 rounded"
																	onclick="
																		let result = confirm('Tem a certeza que quer apagar o review ?');
																		if(result){
																			event.preventDefault();
																			document.getElementById('delete-form-faq-{{ $faq['id'] }}').submit();
																		}
																		">
																	Apagar faq
																</a>
																<form id="delete-form-faq-{{ $faq['id'] }}"
																	action="{{ route('FrontPage.AdminLpMaintenanceDeleteFaqs', [$faq['id']]) }}"
																	method="POST" style="display: none">
																	<input type="hidden" name="_method"
																		value="POST" />
																	@csrf
																</form>
																<form method="POST"
																	action="{{ route('FrontPage.AdminLpMaintenanceUpdateFaqs') }}" enctype="multipart/form-data">
																	@csrf
																	@method('POST')
																	<div class="modal fade"
																		id="modalEditFaq-{{ $faq['id'] }}"
																		tabindex="-1"
																		aria-labelledby="exampleModalLabel"
																		aria-hidden="true">
																		<div class="modal-dialog">
																			<div class="modal-content">
																				<div class="modal-header">
																					<h1 class="modal-title fs-5"
																						id="exampleModalLabel">Editar
																					</h1>
																					<button type="button"
																						class="btn-close"
																						data-bs-dismiss="modal"
																						aria-label="Close"></button>
																				</div>
																				<div class="modal-body">
																					<input type="hidden" class="form-control"
																							id="id" name="id" value="{{ $faq['id'] }}">

																					<div class="col-12 mt-5">
																						<label for="question" class="form-label"
																							style="float:left;">Pergunta</label>
																						<input type="text" class="form-control"
																							id="question" name="question" value="{{ $faq['question'] }}" required>
																					</div>
																					<div class="col-12 mt-5">
																						<label for="response" class="form-label"
																							style="float:left;">Descrição</label>
																						<input type="text" class="form-control"
																							id="response" name="response" value="{{ $faq['response'] }}" required>
																					</div>
																				</div>
																				<div class="modal-footer">
																					<button type="button"
																						class="btn btn-secondary"
																						data-bs-dismiss="modal">Fechar</button>
																					<button type="submit"
																						class="btn btn-primary"
																						name="form13">Salvar</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														@endforeach
													</div>
												</div>
												<button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#newFaqModal">
													Novo faq
												</button>
											</div>

											{{-- Tab faq --}}
											<div class="tab-pane fade" id="tab-why-us"
												role="tabpanel" aria-labelledby="tab-why-us-tab">
												<!-- Modal -->
												<div class="modal fade" id="newWhyUsModal" tabindex="-1"
													aria-labelledby="newWhyUsModal" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h1 class="modal-title fs-5">
																	Novo item</h1>
																<button type="button" class="btn-close"
																	data-bs-dismiss="modal"
																	aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<form class="row g-3 needs-validation" novalidate
																	action="{{ route('FrontPage.AdminLpMaintenanceNewWhyUs') }}"
																	method="post" enctype="multipart/form-data">
																	@csrf
																	@method('POST')

																	<div class="col-12 mt-5">
																		<label for="text1" class="form-label"
																			style="float:left;">Texto 1</label>
																		<input type="text" class="form-control"
																			id="text1" name="text1" required>
																	</div>
																	<div class="col-12 mt-5">
																		<label for="response" class="form-label"
																			style="float:left;">Descrição</label>
																		<input type="text" class="form-control"
																			id="response" name="response" required>
																	</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary"
																	data-bs-dismiss="modal">Fechar</button>
																<button type="submit"
																	class="btn btn-primary">Salvar</button>
															</div>
															</form>
														</div>
													</div>
												</div>
												<div class="container">
													<div class="row">
														@foreach ($whyUsArray as $whyus)
															<div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary">
																<div>

																	<h3 class="h3 mt-3">
																		<strong>{{ $whyus['text1'] }}</strong>
																	</h3>
																	<p class="text-center mt-5">
																		<i>
																			{{ $whyus['response'] }}
																		</i>
																	</p>
																	<h5 class="h5 text-white-50">
																</div>
																<button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#modalEditWhyUs-{{$whyus['id']}}">
																	Editar
																</button>
																{{-- <a class="btn btn-primary" href="{{ route('HomePage.HomePageBlogsEdit', [$comment['id']]) }}">Editar comentário</a> --}}
																<a href="#" class="btn btn-danger w-100 mt-2 rounded"
																	onclick="
																		let result = confirm('Tem a certeza que quer apagar o review ?');
																		if(result){
																			event.preventDefault();
																			document.getElementById('delete-form-why-us-{{ $whyus['id'] }}').submit();
																		}
																		">
																	Apagar item
																</a>
																<form id="delete-form-why-us-{{ $whyus['id'] }}"
																	action="{{ route('FrontPage.AdminLpMaintenanceDeleteWhyUs', [$whyus['id']]) }}"
																	method="POST" style="display: none">
																	<input type="hidden" name="_method"
																		value="POST" />
																	@csrf
																</form>
																<form method="POST"
																	action="{{ route('FrontPage.AdminLpMaintenanceUpdateWhyUs') }}" enctype="multipart/form-data">
																	@csrf
																	@method('POST')
																	<div class="modal fade"
																		id="modalEditWhyUs-{{ $whyus['id'] }}"
																		tabindex="-1"
																		aria-labelledby="exampleModalLabel"
																		aria-hidden="true">
																		<div class="modal-dialog">
																			<div class="modal-content">
																				<div class="modal-header">
																					<h1 class="modal-title fs-5"
																						id="exampleModalLabel">Editar
																					</h1>
																					<button type="button"
																						class="btn-close"
																						data-bs-dismiss="modal"
																						aria-label="Close"></button>
																				</div>
																				<div class="modal-body">
																					<input type="hidden" class="form-control"
																							id="id" name="id" value="{{ $whyus['id'] }}">

																					<div class="col-12 mt-5">
																						<label for="text1" class="form-label"
																							style="float:left;">Texto 1</label>
																						<input type="text" class="form-control"
																							id="text1" name="text1" value="{{ $whyus['text1'] }}" required>
																					</div>
																					<div class="col-12 mt-5">
																						<label for="response" class="form-label"
																							style="float:left;">Descrição</label>
																						<input type="text" class="form-control"
																							id="response" name="response" value="{{ $whyus['response'] }}" required>
																					</div>
																				</div>
																				<div class="modal-footer">
																					<button type="button"
																						class="btn btn-secondary"
																						data-bs-dismiss="modal">Fechar</button>
																					<button type="submit"
																						class="btn btn-primary"
																						name="form13">Salvar</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														@endforeach
													</div>
												</div>
												<button type="button" class="btn btn-primary w-100 mt-5" data-bs-toggle="modal" data-bs-target="#newWhyUsModal">
													Novo item
												</button>
											</div>


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
