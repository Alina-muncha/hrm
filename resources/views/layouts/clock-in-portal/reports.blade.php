@include('layouts.partials.header')
	@include('layouts.partials.aside-menu')
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					@include('layouts.partials.page-header')
					<!--end::Header-->
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
										<li class="breadcrumb-item text-muted">Clock-In-Portal</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Reports</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								
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
                                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Show reports</h1>
										<!--begin::Card toolbar-->
										<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
											<!--begin::Flatpickr-->
											<div class="input-group w-250px">
												<input class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" />
												<button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black" />
															<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
											</div>
											
												<!--begin::Actions-->
                                                <div class="d-flex align-items-center gap-2 gap-lg-3">
                                                    <!--begin::Primary button-->
                                                    <a href="" class="btn btn-sm btn-primary" >Get report</a>
                                                    <!--end::Primary button-->
                                                </div>
                                                <!--end::Actions-->
											
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
												<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2">
														<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
														</div>
													</th>
													<th class="min-w-100px">S.N.</th>
													<th class="min-w-175px">Name</th>
													<th class="min-w-175px">Date</th>
													<th class="min-w-175px">Day</th>
													<th class="text-end min-w-70px">Status</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-bold text-gray-600">
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Order ID=-->
													<td data-kt-ecommerce-order-filter="order_id">
														<a class="text-gray-500 text-hover-primary fw-bolder">1</a>
													</td>
													<!--end::Order ID=-->
													<!--begin::Customer=-->
													<td>
														<div class="d-flex align-items-center">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5 ">Alina kansakar</a>
																<!--end::Title-->
														</div>
													</td>
													<!--end::Customer=-->
													<!--begin::Date Added=-->
													<td class="text-start" data-order="2022-02-10">
														<span class="fw-bolder">10/02/2022</span>
													</td>
													<!--end::Date Added=-->
													<!--begin::Date Modified=-->
													<td>
														<div class="d-flex align-items-left">
																<a class="text-gray-500 text-hover-primary fs-5">Saturday</a>
														</div>
													</td>
													<!--end::Date Modified=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Expired">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">weekend</div>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Order ID=-->
													<td data-kt-ecommerce-order-filter="order_id">
														<a class="text-gray-500 text-hover-primary fw-bolder">2</a>
													</td>
													<!--end::Order ID=-->
													<!--begin::Customer=-->
													<td>
														<div class="d-flex align-items-center">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5">Alina kansakar</a>
																<!--end::Title-->
														</div>
													</td>
													<!--end::Customer=-->
													<!--begin::Date Added=-->
													<td class="text-start" data-order="2022-02-10">
														<span class="fw-bolder">02/02/2022</span>
													</td>
													<!--end::Date Added=-->
													<!--begin::Date Modified=-->
													<td>
														<div class="d-flex align-items-left">
																<a class="text-gray-500 text-hover-primary fs-5">Sunday</a>
														</div>
													</td>
													<!--end::Date Modified=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Expired">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Present</div>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
												</tr>

                                                <tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Order ID=-->
													<td data-kt-ecommerce-order-filter="order_id">
														<a class="text-gray-500 text-hover-primary fw-bolder">3</a>
													</td>
													<!--end::Order ID=-->
													<!--begin::Customer=-->
													<td>
														<div class="d-flex align-items-center">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5">Alina kansakar</a>
																<!--end::Title-->
														</div>
													</td>
													<!--end::Customer=-->
													<!--begin::Date Added=-->
													<td class="text-start" data-order="2022-02-10">
														<span class="fw-bolder">02/02/2022</span>
													</td>
													<!--end::Date Added=-->
													<!--begin::Date Modified=-->
													<td>
														<div class="d-flex align-items-left">
																<a class="text-gray-500 text-hover-primary fs-5">Monday</a>
														</div>
													</td>
													<!--end::Date Modified=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Expired">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Present</div>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
												</tr>

                                                <tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Order ID=-->
													<td data-kt-ecommerce-order-filter="order_id">
														<a class="text-gray-500 text-hover-primary fw-bolder">4</a>
													</td>
													<!--end::Order ID=-->
													<!--begin::Customer=-->
													<td>
														<div class="d-flex align-items-center">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5">Alina kansakar</a>
																<!--end::Title-->
														</div>
													</td>
													<!--end::Customer=-->
													<!--begin::Date Added=-->
													<td class="text-start" data-order="2022-02-10">
														<span class="fw-bolder">02/02/2022</span>
													</td>
													<!--end::Date Added=-->
													<!--begin::Date Modified=-->
													<td>
														<div class="d-flex align-items-left">
																<a class="text-gray-500 text-hover-primary fs-5">Tuesday</a>
														</div>
													</td>
													<!--end::Date Modified=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Expired">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Present</div>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
												</tr>

                                                <tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Order ID=-->
													<td data-kt-ecommerce-order-filter="order_id">
														<a class="text-gray-500 text-hover-primary fw-bolder">5</a>
													</td>
													<!--end::Order ID=-->
													<!--begin::Customer=-->
													<td>
														<div class="d-flex align-items-center">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5">Alina kansakar</a>
																<!--end::Title-->
														</div>
													</td>
													<!--end::Customer=-->
													<!--begin::Date Added=-->
													<td class="text-start" data-order="2022-02-10">
														<span class="fw-bolder">02/02/2022</span>
													</td>
													<!--end::Date Added=-->
													<!--begin::Date Modified=-->
													<td>
														<div class="d-flex align-items-left">
																<a class="text-gray-500 text-hover-primary fs-5">Wednesday</a>
														</div>
													</td>
													<!--end::Date Modified=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Expired">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Present</div>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
												</tr>

                                                <tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Order ID=-->
													<td data-kt-ecommerce-order-filter="order_id">
														<a class="text-gray-500 text-hover-primary fw-bolder">6</a>
													</td>
													<!--end::Order ID=-->
													<!--begin::Customer=-->
													<td>
														<div class="d-flex align-items-center">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5">Alina kansakar</a>
																<!--end::Title-->
														</div>
													</td>
													<!--end::Customer=-->
													<!--begin::Date Added=-->
													<td class="text-start" data-order="2022-02-10">
														<span class="fw-bolder">02/02/2022</span>
													</td>
													<!--end::Date Added=-->
													<!--begin::Date Modified=-->
													<td>
														<div class="d-flex align-items-left">
																<a class="text-gray-500 text-hover-primary fs-5">Thursday</a>
														</div>
													</td>
													<!--end::Date Modified=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Expired">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Present</div>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
												</tr>

                                                <tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Order ID=-->
													<td data-kt-ecommerce-order-filter="order_id">
														<a class="text-gray-500 text-hover-primary fw-bolder">7</a>
													</td>
													<!--end::Order ID=-->
													<!--begin::Customer=-->
													<td>
														<div class="d-flex align-items-center">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5">Alina kansakar</a>
																<!--end::Title-->
														</div>
													</td>
													<!--end::Customer=-->
													<!--begin::Date Added=-->
													<td class="text-start" data-order="2022-02-10">
														<span class="fw-bolder">02/02/2022</span>
													</td>
													<!--end::Date Added=-->
													<!--begin::Date Modified=-->
													<td>
														<div class="d-flex align-items-left">
																<a class="text-gray-500 text-hover-primary fs-5">Friday</a>
														</div>
													</td>
													<!--end::Date Modified=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Expired">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Present</div>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
												</tr>

                                                <tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Order ID=-->
													<td data-kt-ecommerce-order-filter="order_id">
														<a class="text-gray-500 text-hover-primary fw-bolder">8</a>
													</td>
													<!--end::Order ID=-->
													<!--begin::Customer=-->
													<td>
														<div class="d-flex align-items-center">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5 ">Alina kansakar</a>
																<!--end::Title-->
														</div>
													</td>
													<!--end::Customer=-->
													<!--begin::Date Added=-->
													<td class="text-start" data-order="2022-02-10">
														<span class="fw-bolder">10/02/2022</span>
													</td>
													<!--end::Date Added=-->
													<!--begin::Date Modified=-->
													<td>
														<div class="d-flex align-items-left">
																<a class="text-gray-500 text-hover-primary fs-5">Saturday</a>
														</div>
													</td>
													<!--end::Date Modified=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Expired">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">weekend</div>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
												</tr>
												<!--end::Table row-->
																								
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