@include('layouts.partials.header')
	@include('layouts.partials.aside-menu')
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					@include('layouts.partials.page-header')
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Users</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">User Details</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<!--begin::Primary button-->
									<a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
									<!--end::Primary button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							

							<div id="kt_content_container" class="container-xxl">
								<!--begin::Layout-->
								<div class="d-flex flex-column flex-xl-row">
									<!--begin::Sidebar-->
									<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
										<!--begin::Card-->
										<div class="card mb-5 mb-xl-8">
											<!--begin::Card body-->
											<div class="card-body pt-15">
												<!--begin::Summary-->
												<div class="d-flex flex-center flex-column mb-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-100px symbol-circle mb-7">
														<img src="{{ asset('assets/auth/media/avatars/300-2.jpg') }}" alt="image" />
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">Alina kansakar</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fs-5 fw-bold text-muted mb-6">Web developer</div>
													<!--end::Position-->
													
												</div>
												<!--end::Summary-->
												<!--begin::Details toggle-->
												<div class="d-flex flex-stack fs-4 py-3">
													<div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details
													<span class="ms-2 rotate-180">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span></div>
													<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
														<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Edit</a>
													</span>
												</div>
												<!--end::Details toggle-->
												<div class="separator separator-dashed my-3"></div>
												<!--begin::Details content-->
												<div id="kt_customer_view_details" class="collapse show">
													<div class="py-5 fs-6">
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Muncha Account ID</div>
														<div class="text-gray-600">ID-45453423</div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Email Address</div>
														<div class="text-gray-600">
															<a href="#" class="text-gray-600 text-hover-primary">info.muncha@gmail.com</a>
														</div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Location</div>
														<div class="text-gray-600">101 Collin Street,
														<br />Melbourne 3000 VIC
														<br />Australia</div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Designation</div>
														<div class="text-gray-600">Website Developer</div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Contact number</div>
														<div class="text-gray-600">+977-9861-128693</div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Blood group</div>
														<div class="text-gray-600">B+</div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Tax ID</div>
														<div class="text-gray-600">TX-8674</div>
														<!--begin::Details item-->
														
													</div>
												</div>
												<!--end::Details content-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
										
									</div>
									<!--end::Sidebar-->
									<!--begin::Content-->
									<div class="flex-lg-row-fluid ms-lg-15">
										<!--begin:::Tabs-->
										<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
											<!--begin:::Tab item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab">Overview</a>
											</li>
											<!--end:::Tab item-->
											
											
											<!--begin:::Tab item-->
											<li class="nav-item ms-auto">
												<!--begin::Action menu-->
												<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Download
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
												<span class="svg-icon svg-icon-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon--></a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6" data-kt-menu="true">
													
													<!--begin::Menu item-->
													<div class="menu-item px-5">
														<a href="#" class="menu-link px-5">Reports</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-5 my-1">
														<a href="#" class="menu-link px-5">Account Settings</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-5">
														<a href="#" class="menu-link text-danger px-5">Delete customer</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
												<!--end::Menu-->
											</li>
											<!--end:::Tab item-->
										</ul>
										<!--end:::Tabs-->
										<!--begin:::Tab content-->
										<div class="tab-content" id="myTabContent">
											<!--begin:::Tab pane-->
											<div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Attendance Records</h2>
														</div>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<!--begin::Filter-->
															<button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
															<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
																	<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
																	<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->Add a record</button>
															<!--end::Filter-->
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0 pb-5">
														<!--begin::Table-->
														<table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
															<!--begin::Table head-->
															<thead class="border-bottom border-gray-200 fs-7 fw-bolder">
																<!--begin::Table row-->
																<tr class="text-start text-muted text-uppercase gs-0">
																	<th class="min-w-100px">Account ID</th>
																	<th>Day</th>
																	<th class="min-w-100px">Date</th>
																	<th>Status</th>
																	<th class="text-end min-w-100px pe-4">Actions</th>
																</tr>
																<!--end::Table row-->
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody class="fs-6 fw-bold text-gray-600">
																<!--begin::Table row-->
																<tr>
																	<!--begin::Invoice=-->
																	<td>
																		<a href="#" class="text-gray-600 text-hover-primary mb-1">1</a>
																	</td>
																	<!--end::Invoice=-->
																	<!--begin::Status=-->
																	
																	<!--begin::Amount=-->
																	<td>Sunday</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>14 Dec 2020, 8:43 pm</td>
																	<!--end::Date=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Present</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Action=-->
																	<td class="pe-0 text-end">
																		<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																		<span class="svg-icon svg-icon-5 m-0">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon--></a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																	</td>
																	<!--end::Action=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Invoice=-->
																	<td>
																		<a href="#" class="text-gray-600 text-hover-primary mb-1">2</a>
																	</td>
																	<!--end::Invoice=-->
																	
																	<!--begin::Amount=-->
																	<td>Monday</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>01 Dec 2020, 10:12 am</td>
																	<!--end::Date=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Present</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Action=-->
																	<td class="pe-0 text-end">
																		<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																		<span class="svg-icon svg-icon-5 m-0">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon--></a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																	</td>
																	<!--end::Action=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Invoice=-->
																	<td>
																		<a href="#" class="text-gray-600 text-hover-primary mb-1">3</a>
																	</td>
																	<!--end::Invoice=-->
																	
																	<!--begin::Amount=-->
																	<td>Tuesday</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>12 Nov 2020, 2:01 pm</td>
																	<!--end::Date=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Present</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Action=-->
																	<td class="pe-0 text-end">
																		<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																		<span class="svg-icon svg-icon-5 m-0">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon--></a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																	</td>
																	<!--end::Action=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Invoice=-->
																	<td>
																		<a href="#" class="text-gray-600 text-hover-primary mb-1">4</a>
																	</td>
																	<!--end::Invoice=-->
																	
																	<!--begin::Amount=-->
																	<td>Wednesday</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>21 Oct 2020, 5:54 pm</td>
																	<!--end::Date=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-warning">Absent</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Action=-->
																	<td class="pe-0 text-end">
																		<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																		<span class="svg-icon svg-icon-5 m-0">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon--></a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																	</td>
																	<!--end::Action=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Invoice=-->
																	<td>
																		<a href="#" class="text-gray-600 text-hover-primary mb-1">5</a>
																	</td>
																	<!--end::Invoice=-->
																	
																	<!--begin::Amount=-->
																	<td>Thursday</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>19 Oct 2020, 7:32 am</td>
																	<!--end::Date=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Present</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Action=-->
																	<td class="pe-0 text-end">
																		<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																		<span class="svg-icon svg-icon-5 m-0">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon--></a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																	</td>
																	<!--end::Action=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Invoice=-->
																	<td>
																		<a href="#" class="text-gray-600 text-hover-primary mb-1">6</a>
																	</td>
																	<!--end::Invoice=-->
																	
																	<!--begin::Amount=-->
																	<td>Friday</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>23 Sep 2020, 12:38 am</td>
																	<!--end::Date=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Present</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Action=-->
																	<td class="pe-0 text-end">
																		<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																		<span class="svg-icon svg-icon-5 m-0">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon--></a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																	</td>
																	<!--end::Action=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Invoice=-->
																	<td>
																		<a href="#" class="text-gray-600 text-hover-primary mb-1">7</a>
																	</td>
																	<!--end::Invoice=-->
																	
																	<!--begin::Amount=-->
																	<td>Saturday</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>11 Sep 2020, 3:18 pm</td>
																	<!--end::Date=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-danger">Weekend/Holiday</span>
																		
																	</td>
																	<!--end::Status=-->
																	<!--begin::Action=-->
																	<td class="pe-0 text-end">
																		<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																		<span class="svg-icon svg-icon-5 m-0">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon--></a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																	</td>
																	<!--end::Action=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Invoice=-->
																	<td>
																		<a href="#" class="text-gray-600 text-hover-primary mb-1">8</a>
																	</td>
																	<!--end::Invoice=-->
																	
																	<!--begin::Amount=-->
																	<td>Sunday</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>03 Sep 2020, 1:08 am</td>
																	<!--end::Date=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Present</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Action=-->
																	<td class="pe-0 text-end">
																		<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																		<span class="svg-icon svg-icon-5 m-0">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon--></a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																	</td>
																	<!--end::Action=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Invoice=-->
																	<td>
																		<a href="#" class="text-gray-600 text-hover-primary mb-1">9</a>
																	</td>
																	<!--end::Invoice=-->
																	
																	<!--begin::Amount=-->
																	<td>Monday</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>01 Sep 2020, 4:58 pm</td>
																	<!--end::Date=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-warning">Absent</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Action=-->
																	<td class="pe-0 text-end">
																		<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																		<span class="svg-icon svg-icon-5 m-0">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon--></a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																	</td>
																	<!--end::Action=-->
																</tr>
																<!--end::Table row-->
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
												
												
											</div>
											<!--end:::Tab pane-->
											
										</div>
										<!--end:::Tab content-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Layout-->
								<!--begin::Modals-->
								<!--begin::Modal - Add Payment-->
								<div class="modal fade" id="kt_modal_add_payment" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Add a Record</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div id="kt_modal_add_payment_close" class="btn btn-icon btn-sm btn-active-icon-primary">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form id="kt_modal_add_payment_form" class="form" action="#">
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">
															<span class="required">Account ID</span>
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="The invoice number must be unique."></i>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" name="invoice" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fs-6 fw-bold form-label mb-2">Day</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" name="day" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->

													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fs-6 fw-bold form-label mb-2">Date</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" name="date" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fs-6 fw-bold form-label mb-2">Status</label>
														<!--end::Label-->
														<!--begin::Input-->
														<select class="form-select form-select-solid fw-bolder" name="status" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
															<option></option>
															<option value="0">Absent</option>
															<option value="1">Present</option>
															<option value="3">Weekend/Holiday</option>
															
														</select>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="text-center">
														<button type="reset" id="kt_modal_add_payment_cancel" class="btn btn-light me-3">Discard</button>
														<button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - New Card-->
								
								<!--begin::Modal - New Address-->
								<div class="modal fade" id="kt_modal_update_customer" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Form-->
											<form class="form" action="#" id="kt_modal_update_customer_form">
												<!--begin::Modal header-->
												<div class="modal-header" id="kt_modal_update_customer_header">
													<!--begin::Modal title-->
													<h2 class="fw-bolder">Update User</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div id="kt_modal_update_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body py-10 px-lg-17">
													<!--begin::Scroll-->
													<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_customer_header" data-kt-scroll-wrappers="#kt_modal_update_customer_scroll" data-kt-scroll-offset="300px">
														<!--begin::Notice-->
														<!--begin::Notice-->
														<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
															<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																	<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
																	<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack flex-grow-1">
																<!--begin::Content-->
																<div class="fw-bold">
																	<div class="fs-6 text-gray-700">Updating user details will receive a privacy audit. For more info, please read our
																	<a href="#">Privacy Policy</a></div>
																</div>
																<!--end::Content-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Notice-->
														<!--end::Notice-->
														<!--begin::User toggle-->
														<div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_user_info">User Information
														<span class="ms-2 rotate-180">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span></div>
														<!--end::User toggle-->
														<!--begin::User form-->
														<div id="kt_modal_update_customer_user_info" class="collapse show">
															<!--begin::Input group-->
															<div class="mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">
																	<span>Update Avatar</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg."></i>
																</label>
																<!--end::Label-->
																<!--begin::Image input wrapper-->
																<div class="mt-1">
																	<!--begin::Image input-->
																	<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('assets/auth/media/svg/avatars/blank.svg') }}')">
																		<!--begin::Preview existing avatar-->
																		<div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('assets/auth/media/avatars/300-2.jpg') }})"></div>
																		<!--end::Preview existing avatar-->
																		<!--begin::Edit-->
																		<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																			<i class="bi bi-pencil-fill fs-7"></i>
																			<!--begin::Inputs-->
																			<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
																			<input type="hidden" name="avatar_remove" />
																			<!--end::Inputs-->
																		</label>
																		<!--end::Edit-->
																		<!--begin::Cancel-->
																		<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																			<i class="bi bi-x fs-2"></i>
																		</span>
																		<!--end::Cancel-->
																		<!--begin::Remove-->
																		<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																			<i class="bi bi-x fs-2"></i>
																		</span>
																		<!--end::Remove-->
																	</div>
																	<!--end::Image input-->
																</div>
																<!--end::Image input wrapper-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Name</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Sean Bean" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Muncha account ID:</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="muncha_account_id" value="" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">
																	<span>Email address</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="sean@dellito.com" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Location</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="location" value="" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Designation</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="designation" value="" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Contact number</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="contact_number" value="" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->

															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Blood group</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="blood_group" value="" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->

															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Tax ID</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="tax_id" value="" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<div class="fv-row mb-7">
																<label class="fs-6 fw-bold mb-2">Document attachment here:  </label>
																	<form action="/action_page.php">
																		<input type="file" id="myFile" name="filename" multiple>
																		<input type="submit">
																	</form>
															</div>
														</div>
														<!--end::User form-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Modal body-->
												<!--begin::Modal footer-->
												<div class="modal-footer flex-center">
													<!--begin::Button-->
													<button type="reset" id="kt_modal_update_customer_cancel" class="btn btn-light me-3">Discard</button>
													<!--end::Button-->
													<!--begin::Button-->
													<button type="submit" id="kt_modal_update_customer_submit" class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Modal footer-->
											</form>
											<!--end::Form-->
										</div>
									</div>
								</div>
								<!--end::Modal - New Address-->
								
								<!--end::Modals-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					@include('layouts.partials.footer')