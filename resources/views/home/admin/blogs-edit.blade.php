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

                                        </nav>
                                        <div class="tab-content mt-5" id="nav-tabContent">
                                            <!-- three-images+six-icons+three-paragraphs -->
                                            <div class="tab-pane fade show active" id="three-dark-bg-boxes"
                                                role="tabpanel" aria-labelledby="three-dark-bg-boxes-tab">
                                                <!-- Modal -->
                                                <div class="container">
													<div class="modal fade" id="modalNewTag" tabindex="-1"
														aria-labelledby="modalNewTagLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h1 class="modal-title fs-5" id="modalNewTagLabel">
																		Adicionar tag</h1>
																	<button type="button" class="btn-close"
																		data-bs-dismiss="modal"
																		aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	<form class="row g-3 needs-validation" novalidate
																		action="{{ route('HomePage.HomePageBlogsTagsVincule') }}"
																		method="post" enctype="multipart/form-data">
																		@csrf
																		@method('POST')
																		<div class="col-12 mt-5">
																			<input type="hidden" name="id_blog" value="{{$blog['id']}}">
																			<div style="display: flex;flex-wrap: wrap;gap: 24px;">
																				@foreach ($tags as $tag)
																					<div>
																						<label>{{$tag['title']}}</label>
																						<input type="radio" name="id_tag" value="{{$tag['id']}}">
																					</div>
																				@endforeach
																			</div>
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
													@isset($tags_individual)
														@foreach ($tags_individual as $tag_individual)
															<form id="delete_form_tag_individual_{{$tag_individual['individual_id']}}"
																action="{{ route('HomePage.HomePageBlogsTagsDeleteIndividual', ['id'=>$tag_individual['individual_id']]) }}"
																method="post" style="display: none">
																<input type="hidden" name="_method"
																	value="post" />
																@csrf
															</form>
														@endforeach
													@endisset
													<form class="row g-3 needs-validation" novalidate
                                                                    action="{{ route('HomePage.HomePageBlogsUpdate') }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('POST')
														<input type="hidden" class="form-control"
																		id="id" name="id" value={{$blog["id"]}}>
														<div class="row">
															<div class="col-6 mt-5">
																<img src="/{{$blog["image"]}}" class="rounded w-50"/>
																<div>
																	<label for="image" class="form-label"
																		style="float:left;">Imagem Principal (854 ×
																		570):</label>
																	<input type="file" class="form-control"
																		id="image" name="image" required>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12 mt-5">
																<label for="title" class="form-label"
																	style="float:left;">Titulo</label>
																<input type="text" class="form-control" value="{{$blog["title"]}}"
																	id="title" name="title" required>
															</div>
														</div>
														<div class="row">
															<div class="col-12 mt-5">
																<label for="image" class="form-label"
																	style="float:left;">Categoria:</label>
																<select class="form-control" placeholder="Selecione uma categoria" id="category" name="category" value="{{$blog["category"]}}">
																		<option value="" {{ "" ==  $blog["category"] ? 'selected' : '' }}>Sem categoria</option>
																		@foreach ($categories as $category)
																			<option value={{$category['id']}} {{ $category['id'] ==  $blog["category"] ? 'selected' : '' }}>{{$category['title']}}</option>
																		@endforeach

																</select>
															</div>
															<div class="col-12 mt-5">
																<label for="prev" class="form-label"
																	style="float:left;">Prévia</label>
																<input type="text" class="form-control"
																	id="prev" name="content-prev" value="{{$blog["content-prev"]}}" required>
															</div>
														</div>
														<div class="row">
															<div class="col-12 mt-5">
																<label for="content-blog" class="form-label"
																		style="float:left;">Conteudo do blog:</label><br>

															</div>
														</div>
														<div class="row">
															<div class="col-12">
															<textarea class="form-control" placeholder="Write here..." id="input-content-blog" name="input-content-blog" value="" required></textarea>
															<input type="hidden" value="{{$blog["content"]}}" id="content-blog">
															</div>
														</div>

														<div class="row">
															<div class="col-12 mt-5">
																<label for="image" class="form-label"
																		style="float:left;">Tags:</label>
															</div>
														</div>
														<div class="row">
															<div class="col-12 mt-5">
																<div style="display: flex;flex-wrap: wrap;gap: 20px;">
																	@isset($tags_individual)
																		@foreach ($tags_individual as $tag_individual)
																			<div style="display: flex;justify-content: center;width: 10rem;align-items: center;flex-direction: column;border: 1px solid #9a9a9a;border-radius: 9px;padding: 6px;gap: 10px;">
																				<div>{{$tag_individual['title']}}</div>
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="23px" viewBox="0 0 24 24" style="cursor: pointer;" version="1.1" onclick="
																						let result = confirm('Tem a certeza que quer apagar este item ?');
																						if(result){
																							event.preventDefault();
																							document.getElementById('delete_form_tag_individual_{{$tag_individual['individual_id']}}').submit();
																						}
																						">
																					<g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<g id="System" transform="translate(-576.000000, -192.000000)" fill-rule="nonzero">
																							<g id="delete_2_line" transform="translate(576.000000, 192.000000)">
																								<path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero">

																				</path>
																								<path d="M14.2792,2 C15.1401,2 15.9044,2.55086 16.1766,3.36754 L16.7208,5 L20,5 C20.5523,5 21,5.44772 21,6 C21,6.55227 20.5523,6.99998 20,7 L19.9975,7.07125 L19.9975,7.07125 L19.1301,19.2137 C19.018,20.7837 17.7117,22 16.1378,22 L7.86224,22 C6.28832,22 4.982,20.7837 4.86986,19.2137 L4.00254,7.07125 C4.00083,7.04735 3.99998,7.02359 3.99996,7 C3.44769,6.99998 3,6.55227 3,6 C3,5.44772 3.44772,5 4,5 L7.27924,5 L7.82339,3.36754 C8.09562,2.55086 8.8599,2 9.72076,2 L14.2792,2 Z M17.9975,7 L6.00255,7 L6.86478,19.0712 C6.90216,19.5946 7.3376,20 7.86224,20 L16.1378,20 C16.6624,20 17.0978,19.5946 17.1352,19.0712 L17.9975,7 Z M10,10 C10.51285,10 10.9355092,10.386027 10.9932725,10.8833761 L11,11 L11,16 C11,16.5523 10.5523,17 10,17 C9.48715929,17 9.06449214,16.613973 9.00672766,16.1166239 L9,16 L9,11 C9,10.4477 9.44771,10 10,10 Z M14,10 C14.5523,10 15,10.4477 15,11 L15,16 C15,16.5523 14.5523,17 14,17 C13.4477,17 13,16.5523 13,16 L13,11 C13,10.4477 13.4477,10 14,10 Z M14.2792,4 L9.72076,4 L9.38743,5 L14.6126,5 L14.2792,4 Z" id="形状" fill="#09244B">

																				</path>
																							</g>
																						</g>
																					</g>
																				</svg>
																			</div>
																		@endforeach
																	@endisset
																</div>
																<div>
																	<button type="button" class="btn btn-primary w-100 mt-5"
																		data-bs-toggle="modal" data-bs-target="#modalNewTag">
																		Adicionar tag
																	</button>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12 mt-5">
																<button type="submit"
                                                                    class="btn btn-primary w-100">Salvar</button>
															</div>

														</div>

													</form>
                                                </div>
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
            selector: "#input-content-blog",
            plugins: [
                'advlist',
                'autolink',
                'link',
                'image',
                'lists',
                'preview',
                'searchreplace',
                'wordcount',
                'fullscreen',
                'insertdatetime',
                'media',
                'save',
                'table',
                'emoticons'
            ],
            init_instance_callback: () => {
                tinymce.get("input-content-blog").setContent($("#content-blog").val());
            }
        })
    </script>

    <!-- / Layout wrapper -->
</x-app-layout>
