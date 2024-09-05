
<div class="app-header header sticky">
					<div class="container-fluid main-container">
						<div class="d-flex align-items-center">
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0);"></a>
							<!-- sidebar-toggle-->
							<a class="logo-horizontal " href="{{url('index')}}">
								<img src="{{asset('build/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
								<img src="{{asset('build/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
									alt="logo">
							</a>
							<!-- LOGO -->

							<div class="d-flex order-lg-2 ms-auto header-right-icons">
								<div class="dropdown d-none">
									<a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
										<i class="fe fe-search"></i>
									</a>
									<div class="dropdown-menu header-search dropdown-menu-start">
										<div class="input-group w-100 p-2">
											<input type="text" class="form-control" placeholder="Search....">
											<div class="btn btn-primary">
												<i class="fe fe-search" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div>
								<!-- SEARCH -->
								<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
									data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
									aria-controls="navbarSupportedContent-4" aria-expanded="false"
									aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical"></span>
								</button>
								<div class="navbar navbar-collapse responsive-navbar p-0">
									<div class="collapse navbar-collapse navbarSupportedContent-4" id="navbarSupportedContent-4">
										<div class="d-flex order-lg-2">
											<div class="d-flex country">
												<a class="nav-link icon text-center" data-bs-target="#country-selector"
													data-bs-toggle="modal">
													<img src="{{asset('build/assets/images/flags/10.jpg')}}" alt="us_flag">
												</a>
											</div>
											<!-- COUNTRY -->
											<div class="d-flex">
												<a class="nav-link icon theme-layout nav-link-bg layout-setting">
													<span class="dark-layout"><i class="fe fe-moon"></i></span>
													<span class="light-layout"><i class="fe fe-sun"></i></span>
												</a>
											</div>
											<!-- Theme-Layout -->

                                            <!-- SIDE-MENU -->
											@if (Auth::check())
											<div class="dropdown d-flex profile-1">
												<a href="javascript:void(0);" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
													Halo, {{ Auth::user()->email }}
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="z-index: 10000 !important;">
													<div class="drop-heading">
														<div class="text-center">
															<h5 class="text-dark mb-0 fs-14 fw-semibold">{{ Auth::user()->email }}</h5>
															<small class="text-muted">{{ Auth::user()->name }}</small>
														</div>
													</div>
													<div class="dropdown-divider m-0"></div>
													<a class="dropdown-item" href="{{url('profile')}}">
														<i class="dropdown-icon fe fe-user"></i> Profile
													</a>
													<a class="dropdown-item" href="{{url('auth/logout')}}">
														<i class="dropdown-icon fe fe-alert-circle"></i> Sign out
													</a>
												</div>
											</div>
											@else
											<div class="profile-1 mt-2">
												<a href="{{url('auth/login')}}" class="btn btn-primary ">Login</a>
												<a href="{{url('auth/register')}}" class="btn btn-outline-primary ">Daftar</a>
											</div>
											@endif

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
