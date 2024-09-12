				<div class="sticky">
					<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
						<div class="app-sidebar">
							<div class="side-header">
								<a class="header-brand1" href="{{url('index')}}">
                                    <h3 class="font-weight-bold mb-0">Wedding Or</h3>
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
                                        <a class="side-menu__item has-link {{ request()->is('admin') ? 'active border border-primary rounded' : '' }}" href="{{url('admin')}}">
                                            <i class="side-menu__icon fe fe-airplay"></i>
                                            <span class="side-menu__label">Dashboard</span>
                                        </a>
                                    <li>
										<a class="side-menu__item has-link {{ request()->is('admin/pemesanan*') ? 'active border border-primary rounded' : '' }}" href="{{url('admin/pemesanan')}}">
                                            <i class="side-menu__icon fe fe-layers"></i>
                                            <span class="side-menu__label">Pemesanan</span>
                                        </a>
									</li>
                                    <li>
										<a class="side-menu__item has-link {{ request()->is('admin/customer') ? 'active border border-primary rounded' : '' }}" href="{{url('admin/customer')}}">
                                            <i class="side-menu__icon fe fe-users"></i>
                                            <span class="side-menu__label">Customer</span>
                                        </a>
									</li>
                                    <li>
										<a class="side-menu__item has-link {{ request()->is('admin/jenis-paket') ? 'active border border-primary rounded' : '' }}" href="{{url('admin/jenis-paket')}}">
                                            <i class="side-menu__icon fe fe-list"></i>
                                            <span class="side-menu__label">Jenis Paket</span>
                                        </a>
									</li>
                                    <li class="sub-category">
										<h3>PAKET</h3>
									</li>
                                    @foreach ($adminSidebar as $menuItem)
                                    <li>
										<a class="side-menu__item has-link {{ request()->is('admin/paket/'.$menuItem->slug) ? 'active border border-primary rounded' : '' }}" href="{{url('admin/paket/'.$menuItem->slug)}}">
                                            <i class="side-menu__icon fe fe-chevron-right"></i>
                                            <span class="side-menu__label">{{ $menuItem->nama }}</span>
                                        </a>
									</li>
                                    @endforeach
								</ul>
								<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
										width="24" height="24" viewBox="0 0 24 24">
										<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
									</svg></div>
							</div>
					</div>
				</div>
