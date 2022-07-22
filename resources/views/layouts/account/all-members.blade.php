@include('layouts.partials.header')
	@include('layouts.partials.aside-menu')
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					@include('layouts.partials.page-header')
					<!--end::Header-->

					@if (session('status'))
            			<h6 class="alert alert-success">{{ session('status') }}</h6>
            		@endif

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
											<a href="#" class="text-muted text-hover-primary">Home</a>
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
										
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<!--begin::Primary button-->
									<a href="{{ url('add-staff') }}" class="btn btn-sm btn-primary">Add User</a>
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
								<!--begin::Products-->
								<div class="card card-flush">
									<!--begin::Card header-->
									<div class="card-header align-items-center py-5 gap-2 gap-md-5">
										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span class="svg-icon svg-icon-1 position-absolute ms-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search for a User" />
											</div>
											<!--end::Search-->
										</div>
										<!--end::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
											
											<div class="w-100 mw-150px">
												<!--begin::Select2-->
												<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
													<option></option>
													<option value="all">All</option>
													<option value="Cancelled">Active</option>
													<option value="Completed">Inactive</option>
													
												</select>
												<!--end::Select2-->
											</div>
											
										</div>
										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
											<!--begin::Table head-->
											<thead>
												<!--begin::Table row-->
												<tr class="text-start text-gray-700 fw-bolder fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2">
														<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
														</div>
													</th>
													<th class="min-w-60px">Image</th>
													<th class="min-w-50px">Muncha Account ID</th>
													<th class="min-w-150px">Users name</th>
													<th class="min-w-85px">Designation</th>
													<th class="min-w-85px">Role</th>
													<th class="min-w-175px">Number</th>													
													<th class="text-start min-w-100px">Actions</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											
											<tbody class="fw-bold text-gray-600">
												@foreach ($members as $item)													
												
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::User=-->
													<td class="d-flex align-items-center">
														<!--begin:: Avatar -->
														<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
															<a href="#">
																<div class="symbol-label">
																	<img src="{{ asset('uploads/users/' . $item->profile_image) }}" alt="{{ $item->name }}" class="w-100" />
																</div>
															</a>
														</div>
														<!--end::Avatar-->
														
													</td>
													<td>
														<div class="d-flex align-items-left">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5 ">{{ $item->muncha_id }}</a>
																<!--end::Title-->
														</div>
													</td>
													<!--end::User=-->
													<!--begin::Customer=-->
													<td>
														<div class="d-flex align-items-left">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5 ">{{ $item->name }}</a>
																<!--end::Title-->
														</div>
													</td>
													<!--end::Customer=-->
													<!--begin::Date Added=-->
													<td>
														<div class="d-flex align-items-left">
															<!--begin::designation-->
															<a class="text-gray-500 text-hover-primary fs-5 ">{{ $item->designation }}</a>
															<!--end::designation-->
														</div>
													</td>
													<!--end::Date Added=-->
													<!--begin::Date Modified=-->
													<td>
														<div class="d-flex align-items-left">
																<a class="text-gray-500 text-hover-primary fs-5">{{ $item->role }}</a>
														</div>
													</td>
													<!--end::Date Modified=-->
													<td>
														<div class="d-flex align-items-left">
																<a class="text-gray-500 text-hover-primary fs-5">{{ $item->number }}</a>
														</div>
													</td>
													<!--begin::Action=-->
													<td class="text-end">
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
																<a href="#" class="menu-link px-3">View</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="{{ url('edit-staff/'.$item->id ) }}" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="{{ url('delete-staff/'. $item->id) }}" class="menu-link px-3" >Delete</a>
																
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												@endforeach												
											</tbody> 
											
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Products-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					
@include('layouts.partials.footer')