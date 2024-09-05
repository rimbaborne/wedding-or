				<div class="sticky">
					<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
						<div class="app-sidebar">
							<div class="side-header">
								<a class="header-brand1" href="{{url('index')}}">
									<img src="{{asset('build/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
									<img src="{{asset('build/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo"
										alt="logo">
									<img src="{{asset('build/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
									<img src="{{asset('build/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
										alt="logo">
								</a>
								<!-- LOGO -->
							</div>
							<div class="main-sidemenu">
								<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
										fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
										<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
									</svg></div>
								<ul class="side-menu">
									<li class="sub-category">
										<h3>Main</h3>
									</li>
                                        <a class="side-menu__item has-link {{ request()->is('admin') ? 'active' : '' }}" href="{{url('admin')}}">
                                            <i class="side-menu__icon fe fe-airplay"></i>
                                            <span class="side-menu__label">Dashboard</span>
                                        </a>
                                    <li>
										<a class="side-menu__item has-link {{ request()->is('admin/pemesanan*') ? 'active' : '' }}" href="{{url('admin/pemesanan')}}">
                                            <i class="side-menu__icon fe fe-layers"></i>
                                            <span class="side-menu__label">Pemesanan</span>
                                        </a>
									</li>
                                    <li class="sub-category">
										<h3>PAKET</h3>
									</li>
                                    <li>
										<a class="side-menu__item has-link {{ request()->is('rekomendasi*') ? 'active' : '' }}" href="{{url('rekomendasi')}}">
                                            <i class="side-menu__icon fe fe-chevron-right"></i>
                                            <span class="side-menu__label">Rekomendasi</span>
                                        </a>
									</li>
                                    <li>
										<a class="side-menu__item has-link {{ request()->is('Tema*') ? 'active' : '' }}" href="{{url('Tema')}}">
                                            <i class="side-menu__icon fe fe-chevron-right"></i>
                                            <span class="side-menu__label">Tema</span>
                                        </a>
									</li>
                                    <li>
										<a class="side-menu__item has-link {{ request()->is('catering*') ? 'active' : '' }}" href="{{url('catering')}}">
                                            <i class="side-menu__icon fe fe-chevron-right"></i>
                                            <span class="side-menu__label">Catering</span>
                                        </a>
									</li>
                                    <li>
										<a class="side-menu__item has-link {{ request()->is('entertaiment*') ? 'active' : '' }}" href="{{url('entertaiment')}}">
                                            <i class="side-menu__icon fe fe-chevron-right"></i>
                                            <span class="side-menu__label">Entertaiment</span>
                                        </a>
									</li>
                                    <li>
										<a class="side-menu__item has-link {{ request()->is('dekorasi*') ? 'active' : '' }}" href="{{url('dekorasi')}}">
                                            <i class="side-menu__icon fe fe-chevron-right"></i>
                                            <span class="side-menu__label">Dekorasi</span>
                                        </a>
									</li>
                                    <li>
										<a class="side-menu__item has-link {{ request()->is('dokumentasi*') ? 'active' : '' }}" href="{{url('dokumentasi')}}">
                                            <i class="side-menu__icon fe fe-chevron-right"></i>
                                            <span class="side-menu__label">Dokumentasi</span>
                                        </a>
									</li>


								</ul>
								<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
										width="24" height="24" viewBox="0 0 24 24">
										<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
									</svg></div>
							</div>
					</div>
				</div>
