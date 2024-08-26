
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
							<div class="main-header-center ms-3 d-none d-lg-block">
								<input type="text" class="form-control" placeholder="Search for results..." autocomplete="off">
								<button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
							</div>
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
											<div class="dropdown  d-flex shopping-cart">
												<a class="nav-link icon text-center" data-bs-toggle="dropdown">
													<i class="fe fe-shopping-cart"></i><span class="badge bg-secondary header-badge">4</span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
													<div class="drop-heading border-bottom">
														<div class="d-flex">
															<h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">My Shopping Cart</h6>
															<div class="ms-auto">
																<span class="badge bg-danger-transparent header-badge text-danger">Hurry Up!</span>
															</div>
														</div>
													</div>
													<div class="header-dropdown-list shopping-list">
														<div class="dropdown-item  p-4">
															<a href="javascript:void(0);" class="d-flex">
																<span
																	class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
																	data-bs-image-src="{{asset('build/assets/images/pngs/4.png')}}"></span>
																<div class="">
																	<h6 class="mb-1 text-dark fw-semibold fs-14">Womens Bag</h6>
																	<span class="text-dark">Status: <span class="text-success">In Stock</span></span>
																	<p class="fs-13 text-muted mb-0">Quantity: 01</p>
																</div>
																<div class="ms-auto text-end d-flex fs-16">
																	<div class="fs-16 text-dark d-none d-sm-block px-4 my-auto">
																		$438
																	</div>
																	<div  class="fs-16 btn p-0 cart-trash my-auto border-0">
																		<i class="fe fe-trash-2 text-danger brround d-block p-2"></i>
																	</div>
																</div>
															</a>
														</div>
														<div class="dropdown-item  p-4">
															<a href="javascript:void(0);" class="d-flex">
																<span
																class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
																data-bs-image-src="{{asset('build/assets/images/pngs/6.png')}}"></span>
																<div class="">
																	<h6 class="mb-1 text-dark fw-semibold fs-14">Stylish Ear Pods</h6>
																	<span class="text-dark">Status: <span class="text-success">Out Stock</span></span>
																	<p class="fs-13 text-muted mb-0">Quantity: 06</p>
																</div>
																<div class="ms-auto text-end d-flex fs-16">
																	<div class="fs-16 text-dark d-none d-sm-block px-4 my-auto">
																		$867
																	</div>
																	<div class="fs-16 btn p-0 cart-trash my-auto border-0">
																		<i class="fe fe-trash-2 text-danger brround d-block p-2"></i>
																	</div>
																</div>
															</a>
														</div>
														<div class="dropdown-item  p-4">
															<a href="javascript:void(0);" class="d-flex">
																<span
																class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
																data-bs-image-src="{{asset('build/assets/images/pngs/8.png')}}"></span>
																<div class="">
																	<h6 class="mb-1 text-dark fw-semibold fs-14">Stylish Mens Shoes</h6>
																	<span class="text-dark">Status: <span class="text-success">In Stock</span></span>
																	<p class="fs-13 text-muted mb-0">Quantity: 06</p>
																</div>
																<div class="ms-auto text-end d-flex fs-16">
																	<div class="fs-16 text-dark d-none d-sm-block px-4 my-auto">
																		$233
																	</div>
																	<div class="fs-16 btn p-0 cart-trash my-auto border-0">
																		<i class="fe fe-trash-2 text-danger brround d-block p-2"></i>
																	</div>
																</div>
															</a>
														</div>
														<div class="dropdown-item  p-4">
															<a href="javascript:void(0);" class="d-flex">
																<span
																class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
																data-bs-image-src="{{asset('build/assets/images/pngs/1.png')}}"></span>
																<div class="">
																	<h6 class="mb-1 text-dark fw-semibold fs-14">Digital Camera</h6>
																	<span class="text-dark">Status: <span class="text-success">In Stock</span></span>
																	<p class="fs-13 text-muted mb-0">Quantity: 05</p>
																</div>
																<div class="ms-auto text-end d-flex fs-16">
																	<div class="fs-16 text-dark d-none d-sm-block px-4 my-auto">
																		$865
																	</div>
																	<div class="fs-16 btn p-0 cart-trash my-auto border-0">
																		<i class="fe fe-trash-2 text-danger brround d-block p-2"></i>
																	</div>
																</div>
															</a>
														</div>
														<div class="dropdown-item  p-4">
															<a href="javascript:void(0);" class="d-flex">
																<span
																class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
																data-bs-image-src="{{asset('build/assets/images/pngs/3.png')}}"></span>
																<div class="">
																	<h6 class="mb-1 text-dark fw-semibold fs-14">Wireless headphones</h6>
																	<span class="text-dark">Status: <span class="text-success">In Stock</span></span>
																	<p class="fs-13 text-muted mb-0">Quantity: 05</p>
																</div>
																<div class="ms-auto text-end d-flex fs-16">
																	<div class="fs-16 text-dark d-none d-sm-block px-4 my-auto">
																		$256
																	</div>
																	<div class="fs-16 btn p-0 cart-trash my-auto border-0">
																		<i class="fe fe-trash-2 text-danger brround d-block p-2"></i>
																	</div>
																</div>
															</a>
														</div>
													</div>
													<div class="dropdown-divider m-0"></div>
													<div class="dropdown-footer p-4">
														<a class="btn btn-primary btn-pill w-sm btn-sm py-2 btn-block fs-14" href="javascript:void(0);">View Cart</a>

													</div>
												</div>
											</div>
											<!-- CART -->
											<div class="dropdown d-flex">
												<a class="nav-link icon full-screen-link nav-link-bg">
													<i class="fe fe-minimize fullscreen-button"></i>
												</a>
											</div>
											<!-- FULL-SCREEN -->

										</div>
									</div>
								</div>
								<div class="demo-icon nav-link icon">
									<i class="fe fe-settings fa-spin  text_primary"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
