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
										<li class="breadcrumb-item text-dark">Official Holiday Listing</li>
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
										<!--begin::Card title-->
										<div class="card-title">
											<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Official Holidays</h1>
                                               
										</div>
										<!--end::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
											<!--begin::Table head-->
											<thead>
												<!--begin::Table row-->
												<tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
													
													<th class="min-w-100px">#</th>
													<th class="min-w-175px">Holiday name</th>
													<th class="min-w-175px">Date</th>
													<th class="min-w-175px">Day(s)</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-bold text-gray-600">
												<!--begin::Table row-->
												<tr>
													<!--begin::Order ID=-->
													<td data-kt-ecommerce-order-filter="order_id">
														<a class="text-gray-500 text-hover-primary fw-bolder">1</a>
													</td>
													<!--end::Order ID=-->
													<!--begin::Customer=-->
													<td>
														<div class="d-flex align-items-center">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5 ">Buddha Jayanti</a>
																<!--end::Title-->
														</div>
													</td>
													<!--end::Customer=-->
													<!--begin::Date Added=-->
													<td class="text-start" data-order="2022-02-10">
														<span class="fw-bolder">10/02/2022 - 12/02/2022</span>
													</td>
													<!--end::Date Added=-->
													<!--begin::Date Modified=-->
													<td>
														<div class="d-flex align-items-left">
																<a class="text-gray-500 text-hover-primary fs-5">3 days</a>
														</div>
													</td>
													<!--end::Date Modified=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Order ID=-->
													<td data-kt-ecommerce-order-filter="order_id">
														<a class="text-gray-500 text-hover-primary fw-bolder">2</a>
													</td>
													<!--end::Order ID=-->
													<!--begin::Customer=-->
													<td>
														<div class="d-flex align-items-center">
																<!--begin::Title-->
																<a class="text-gray-500 text-hover-primary fs-5">GaiJatra</a>
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
																<a class="text-gray-500 text-hover-primary fs-5">1 day</a>
														</div>
													</td>
													<!--end::Date Modified=-->
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