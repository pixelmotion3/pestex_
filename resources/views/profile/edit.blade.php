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
							{{-- <li class="nav-item dropdown-language dropdown">
								<a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
									href="javascript:void(0);" data-bs-toggle="dropdown">
									<i class="ti ti-language rounded-circle ti-md"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li>
										<a class="dropdown-item" href="javascript:void(0);" data-language="en"
											data-text-direction="ltr">
											<span>English</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0);" data-language="fr"
											data-text-direction="ltr">
											<span>French</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0);" data-language="ar"
											data-text-direction="rtl">
											<span>Arabic</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:void(0);" data-language="de"
											data-text-direction="ltr">
											<span>German</span>
										</a>
									</li>
								</ul>
							</li> --}}
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
							{{-- <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
								<a class="nav-link btn btn-text-secondary btn-icon rounded-pill btn-icon dropdown-toggle hide-arrow"
									href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
									aria-expanded="false">
									<i class="ti ti-layout-grid-add ti-md"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="dropdown-menu-header border-bottom">
										<div class="dropdown-header d-flex align-items-center py-3">
											<h6 class="mb-0 me-auto">Shortcuts</h6>
											<a href="javascript:void(0)"
												class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add"
												data-bs-toggle="tooltip" data-bs-placement="top"
												title="Add shortcuts"><i class="ti ti-plus text-heading"></i></a>
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
												<a href="app-access-roles.html" class="stretched-link">Role
													Management</a>
												<small>Permission</small>
											</div>
										</div>
										<div class="row row-bordered overflow-visible g-0">
											<div class="dropdown-shortcuts-item col">
												<span class="dropdown-shortcuts-icon rounded-circle mb-3">
													<i class="ti ti-device-desktop-analytics ti-26px text-heading"></i>
												</span>
												<a href="/" class="stretched-link">Dashboard</a>
												<small>User Dashboard</small>
											</div>
											<div class="dropdown-shortcuts-item col">
												<span class="dropdown-shortcuts-icon rounded-circle mb-3">
													<i class="ti ti-settings ti-26px text-heading"></i>
												</span>
												<a href="pages-account-settings-account.html"
													class="stretched-link">Setting</a>
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
							</li> --}}
							<!-- Quick links -->

							<!-- Notification -->
							{{-- <li class="1nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
								<a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
									href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
									aria-expanded="false">
									<span class="position-relative">
										<i class="ti ti-bell ti-md"></i>
										<span
											class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
									</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end p-0">
									<li class="dropdown-menu-header border-bottom">
										<div class="dropdown-header d-flex align-items-center py-3">
											<h6 class="mb-0 me-auto">Notification</h6>
											<div class="d-flex align-items-center h6 mb-0">
												<span class="badge bg-label-primary me-2">8 New</span>
												<a href="javascript:void(0)"
													class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all"
													data-bs-toggle="tooltip" data-bs-placement="top"
													title="Mark all as read"><i
														class="ti ti-mail-opened text-heading"></i></a>
											</div>
										</div>
									</li>
									<li class="dropdown-notifications-list scrollable-container">
										<ul class="list-group list-group-flush">
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<img src="../../assets/img/avatars/1.png" alt
																class="rounded-circle" />
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="small mb-1">Congratulation Lettie 🎉</h6>
														<small class="mb-1 d-block text-body">Won the monthly best
															seller gold badge</small>
														<small class="text-muted">1h ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)"
															class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)"
															class="dropdown-notifications-archive"><span
																class="ti ti-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<span
																class="avatar-initial rounded-circle bg-label-danger">CF</span>
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1 small">Charles Franklin</h6>
														<small class="mb-1 d-block text-body">Accepted your
															connection</small>
														<small class="text-muted">12hr ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)"
															class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)"
															class="dropdown-notifications-archive"><span
																class="ti ti-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<img src="../../assets/img/avatars/2.png" alt
																class="rounded-circle" />
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1 small">New Message ✉️</h6>
														<small class="mb-1 d-block text-body">You have new message from
															Natalie</small>
														<small class="text-muted">1h ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)"
															class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)"
															class="dropdown-notifications-archive"><span
																class="ti ti-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<span
																class="avatar-initial rounded-circle bg-label-success"><i
																	class="ti ti-shopping-cart"></i></span>
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1 small">Whoo! You have new order 🛒</h6>
														<small class="mb-1 d-block text-body">ACME Inc. made new order
															$1,154</small>
														<small class="text-muted">1 day ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)"
															class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)"
															class="dropdown-notifications-archive"><span
																class="ti ti-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<img src="../../assets/img/avatars/9.png" alt
																class="rounded-circle" />
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1 small">Application has been approved 🚀</h6>
														<small class="mb-1 d-block text-body">Your ABC project
															application has been approved.</small>
														<small class="text-muted">2 days ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)"
															class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)"
															class="dropdown-notifications-archive"><span
																class="ti ti-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<span
																class="avatar-initial rounded-circle bg-label-success"><i
																	class="ti ti-chart-pie"></i></span>
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1 small">Monthly report is generated</h6>
														<small class="mb-1 d-block text-body">July monthly financial
															report is generated </small>
														<small class="text-muted">3 days ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)"
															class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)"
															class="dropdown-notifications-archive"><span
																class="ti ti-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<img src="../../assets/img/avatars/5.png" alt
																class="rounded-circle" />
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1 small">Send connection request</h6>
														<small class="mb-1 d-block text-body">Peter sent you connection
															request</small>
														<small class="text-muted">4 days ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)"
															class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)"
															class="dropdown-notifications-archive"><span
																class="ti ti-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<img src="../../assets/img/avatars/6.png" alt
																class="rounded-circle" />
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1 small">New message from Jane</h6>
														<small class="mb-1 d-block text-body">Your have new message from
															Jane</small>
														<small class="text-muted">5 days ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)"
															class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)"
															class="dropdown-notifications-archive"><span
																class="ti ti-x"></span></a>
													</div>
												</div>
											</li>
											<li
												class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
												<div class="d-flex">
													<div class="flex-shrink-0 me-3">
														<div class="avatar">
															<span
																class="avatar-initial rounded-circle bg-label-warning"><i
																	class="ti ti-alert-triangle"></i></span>
														</div>
													</div>
													<div class="flex-grow-1">
														<h6 class="mb-1 small">CPU is running high</h6>
														<small class="mb-1 d-block text-body">CPU Utilization Percent is
															currently at 88.63%,</small>
														<small class="text-muted">5 days ago</small>
													</div>
													<div class="flex-shrink-0 dropdown-notifications-actions">
														<a href="javascript:void(0)"
															class="dropdown-notifications-read"><span
																class="badge badge-dot"></span></a>
														<a href="javascript:void(0)"
															class="dropdown-notifications-archive"><span
																class="ti ti-x"></span></a>
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
							</li> --}}
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
													<x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
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
										<div class="tab-content mt-5" id="nav-tabContent">

											<!-- background-images+text -->
											<div class="tab-pane fade show active" id="background-images+text"
												role="tabpanel" aria-labelledby="background-images+text-tab">
													{{-- <x-slot name="header">
														<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
															{{ __('Profile') }}
														</h2>
													</x-slot> --}}

													<div class="">
														<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
															{{-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 sm:rounded-lg">
																<div class="max-w-xl">
																	@include('profile.partials.update-profile-information-form')
																</div>
															</div> --}}

															<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 sm:rounded-lg">
																<div class="max-w-xl">
																	@include('profile.partials.update-password-form')
																</div>
															</div>

															{{-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 sm:rounded-lg">
																<div class="max-w-xl">
																	@include('profile.partials.delete-user-form')
																</div>
															</div> --}}
														</div>
													</div>
											</div>
											<!-- three-images+six-icons+three-paragraphs -->
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


	<!-- / Layout wrapper -->
</x-app-layout>