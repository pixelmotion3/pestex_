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
                                                <button class="nav-link" id="tab-blogs-tab"
                                                    data-bs-toggle="tab" data-bs-target="#tab-blogs"
                                                    type="button" role="tab" aria-controls="tab-blogs"
                                                    aria-selected="false"><small>Blogs</small></button>
												<button class="nav-link" id="tab-tags-tab"
                                                    data-bs-toggle="tab" data-bs-target="#tab-tags"
                                                    type="button" role="tab" aria-controls="tab-tags"
                                                    aria-selected="false"><small>Tags</small></button>
												<button class="nav-link" id="tab-categories-tab"
                                                    data-bs-toggle="tab" data-bs-target="#tab-categories"
                                                    type="button" role="tab" aria-controls="tab-categories"
                                                    aria-selected="false"><small>Categorias</small></button>
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
														<form class="row g-3 needs-validation" novalidate action="{{ count($blogPages) > 0 ? route('HomePage.HomePageBlogsMainPageUpdate') : route('HomePage.HomePageBlogsMainPageCreate') }}" method="post" enctype="multipart/form-data">
															@csrf
															@method('POST')
															<div class="col-12 mt-5">
																<div class="col-6 mt-5">
																	<label for="sec-1-image1" class="form-label"
																		style="float:left;">Imagem Principal</label>
																	<img src="/{{ count($blogPages) > 0 ? $blogPages[0]["sec-1-image1"] : "" }}" alt="tolak" style="height: 250px;">
																</div>
															</div>
															<div class="col-12 mt-5">
																<label for="sec-1-image1" class="form-label"
																	style="float:left;">Imagem Principal</label>
																<input type="file" class="form-control"
																	id="sec-1-image1" name="sec-1-image1" required>
															</div>
															{{-- <div class="col-12 mt-5">
																<label for="sec-1-image2" class="form-label"
																	style="float:left;">Imagem Secundária</label>
																<input type="file" class="form-control"
																	id="sec-1-image2" name="sec-1-image2" required>
															</div> --}}
															<div class="col-12 mt-5">
																<label for="sec-1-h1" class="form-label"
																	style="float:left;">Titulo</label>
																<input type="text" class="form-control"
																	id="sec-1-h1" name="sec-1-h1" value="{{ count($blogPages) > 0 ? $blogPages[0]["sec-1-h1"] : "" }}" required>
															</div>
                                                            <div class="">
                                                                <button type="submit" class="btn btn-primary w-100 mt-5"
                                                                    class="btn btn-primary">Salvar</button>
                                                            </div>
														</form>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- tab blogs -->
                                            <div class="tab-pane fade" id="tab-blogs"
                                                role="tabpanel" aria-labelledby="tab-blogs-tab">
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Novo
                                                                    blog</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="row g-3 needs-validation" novalidate
                                                                    action="{{ route('HomePage.HomePageBlogsNew') }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <div class="col-12 mt-5">
                                                                        <label for="title" class="form-label"
                                                                            style="float:left;">Titulo</label>
                                                                        <input type="text" class="form-control"
                                                                            id="title" name="title" required>
                                                                    </div>
                                                                    <div class="col-12 mt-5">
                                                                        <label for="image" class="form-label"
                                                                            style="float:left;">Imagem Principal (854 ×
                                                                            570)</label>
                                                                        <input type="file" class="form-control"
                                                                            id="image" name="image" required>
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
                                                        @foreach ($blogs as $blog)
                                                            <div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary">
																<div>
																	<img src="/{{ $blog['image'] }}" class="img-fluid rounded" alt="..." style="width: 300px;height: 200px;">
																</div>
                                                                <div>
                                                                    <p class="text-center mt-5">
                                                                        <i>
                                                                            {{ $blog['title'] }}
                                                                        </i>
                                                                    </p>
                                                                    <h3 class="h3 mt-3">
                                                                        <strong>{{ $blog['name'] }}</strong>
                                                                    </h3>
                                                                    <h5 class="h5 text-white-50">
                                                                </div>
                                                                <a class="btn btn-primary" href="{{ route('HomePage.HomePageBlogsEdit', [$blog['id']]) }}">Editar blog</a>
                                                                <a href="#" class="btn btn-danger p-2 rounded"
                                                                    onclick="
															let result = confirm('Tem a certeza que quer apagar o review ?');
															if(result){
																event.preventDefault();
																document.getElementById('delete-form-{{ $blog['id'] }}').submit();
															}
															">
                                                                    Apagar blog
                                                                </a>
                                                                <form id="delete-form-{{ $blog['id'] }}"
                                                                    action="{{ route('HomePage.HomePageBlogsDelete', [$blog['id']]) }}"
                                                                    method="post" style="display: none">
                                                                    <input type="hidden" name="_method"
                                                                        value="post" />
                                                                    @csrf
                                                                </form>
                                                                <form method="post"
                                                                    action="{{ route('home-page.update', $blog['id']) }}">
                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="modal fade"
                                                                        id="exampleModal{{ $blog['id'] }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5"
                                                                                        id="exampleModalLabel">Modal
                                                                                        title
                                                                                    </h1>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">Paragrafo</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            name="p"
                                                                                            value="{{ $blog['p'] }}"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">Nome</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            name="name"
                                                                                            value="{{ $blog['name'] }}"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-12 mt-5">
                                                                                        <label for="validationCustom01"
                                                                                            class="form-label"
                                                                                            style="float:left;">Ratings</label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            id="validationCustom01"
                                                                                            name="rating"
                                                                                            min="0"
                                                                                            max="5"
                                                                                            value="{{ $blog['rating'] }}"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary"
                                                                                        name="form13">Save
                                                                                        changes</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-primary w-100 mt-5"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Novo blog
                                                </button>
                                            </div>

											<!-- tab blogs -->
                                            <div class="tab-pane fade" id="tab-tags"
                                                role="tabpanel" aria-labelledby="tab-blogs-tab">
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalNewTag" tabindex="-1"
                                                    aria-labelledby="modalNewTagLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="modalNewTagLabel">
                                                                    Nova tag</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="row g-3 needs-validation" novalidate
                                                                    action="{{ route('HomePage.HomePageBlogsTagsNew') }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <div class="col-12 mt-5">
                                                                        <label for="title" class="form-label"
                                                                            style="float:left;">Titulo</label>
                                                                        <input type="text" class="form-control"
                                                                            id="title" name="title" required>
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
                                                        @foreach ($tags as $tag)
                                                            <div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary">
                                                                <div>
                                                                    <p class="text-center mt-5">
                                                                        <i>
                                                                            {{ $tag['title'] }}
                                                                        </i>
                                                                    </p>
                                                                    <h5 class="h5 text-white-50">
                                                                </div>
																<button type="button" class="btn btn-primary"
																	data-bs-toggle="modal" data-bs-target="#modalEditTag{{ $tag['id'] }}">
																	Editar tag
																</button>
                                                                <a href="#" class="btn btn-danger p-2 rounded"
                                                                    onclick="
															let result = confirm('Tem a certeza que quer excluir esta tag ?');
															if(result){
																event.preventDefault();
																document.getElementById('delete-form-tag-{{ $tag['id'] }}').submit();
															}
															">
                                                                    Excluir tag
                                                                </a>
                                                                <form id="delete-form-tag-{{ $tag['id'] }}"
                                                                    action="{{ route('HomePage.HomePageBlogsTagsDelete', [$tag['id']]) }}"
                                                                    method="post" style="display: none">
                                                                    <input type="hidden" name="_method"
                                                                        value="post" />
                                                                    @csrf
                                                                </form>
                                                                <form method="post"
                                                                    action="{{ route('HomePage.HomePageBlogsTagsUpdate')}}">
                                                                    @csrf
                                                                    @method('post')
                                                                    <div class="modal fade"
                                                                        id="modalEditTag{{ $tag['id'] }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5"
                                                                                        id="exampleModalLabel">Editar Tag
                                                                                    </h1>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Titulo</label>
																						<input type="text" class="form-control"
																							id="title" name="title" value="{{ $tag['title'] }}" required>
																						<input type="hidden" class="form-control"
																							id="id" name="id" value="{{ $tag['id'] }}">
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
                                                <button type="button" class="btn btn-primary w-100 mt-5"
                                                    data-bs-toggle="modal" data-bs-target="#modalNewTag">
                                                    Nova tag
                                                </button>
                                            </div>

											<!-- categories blogs -->
                                            <div class="tab-pane fade" id="tab-categories"
                                                role="tabpanel" aria-labelledby="tab-categories-tab">
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalNewCategory" tabindex="-1"
                                                    aria-labelledby="modalNewCategoryLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="modalNewCategoryLabel">
                                                                    Nova categoria</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="row g-3 needs-validation" novalidate
                                                                    action="{{ route('HomePage.HomePageBlogsCategoryNew') }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <div class="col-12 mt-5">
                                                                        <label for="title" class="form-label"
                                                                            style="float:left;">Titulo</label>
                                                                        <input type="text" class="form-control"
                                                                            id="title" name="title" required>
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
                                                        @foreach ($categories as $category)
                                                            <div class="col-sm-12 col-md-4 testimonial-boxes text-center text-primary">
                                                                <div>
                                                                    <p class="text-center mt-5">
                                                                        <i>
                                                                            {{ $category['title'] }}
                                                                        </i>
                                                                    </p>
                                                                    <h5 class="h5 text-white-50">
                                                                </div>
																<button type="button" class="btn btn-primary"
																	data-bs-toggle="modal" data-bs-target="#modalEditCategory{{ $category['id'] }}">
																	Editar categoria
																</button>
                                                                <a href="#" class="btn btn-danger p-2 rounded"
                                                                    onclick="
															let result = confirm('Tem a certeza que quer excluir esta categoria ?');
															if(result){
																event.preventDefault();
																document.getElementById('delete-form-category-{{ $category['id'] }}').submit();
															}
															">
                                                                    Excluir categoria
                                                                </a>
                                                                <form id="delete-form-category-{{ $category['id'] }}"
                                                                    action="{{ route('HomePage.HomePageBlogsCategoryDelete', [$category['id']]) }}"
                                                                    method="post" style="display: none">
                                                                    <input type="hidden" name="_method"
                                                                        value="post" />
                                                                    @csrf
                                                                </form>
                                                                <form method="post"
                                                                    action="{{ route('HomePage.HomePageBlogsCategoryUpdate')}}">
                                                                    @csrf
                                                                    @method('post')
                                                                    <div class="modal fade"
                                                                        id="modalEditCategory{{ $category['id'] }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5"
                                                                                        id="exampleModalLabel">Editar Categoria
                                                                                    </h1>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="col-12 mt-5">
																						<label for="title" class="form-label"
																							style="float:left;">Titulo</label>
																						<input type="text" class="form-control"
																							id="title" name="title" value="{{ $category['title'] }}" required>
																						<input type="hidden" class="form-control"
																							id="id" name="id" value="{{ $category['id'] }}">
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
                                                <button type="button" class="btn btn-primary w-100 mt-5"
                                                    data-bs-toggle="modal" data-bs-target="#modalNewCategory">
                                                    Nova categoria
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
