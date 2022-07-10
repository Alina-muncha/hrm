@include('layouts.partials.header')
@include('layouts.partials.aside-menu')
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                @include('layouts.partials.page-header')

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
                                    
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                            
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    
                        <div class="col-xl-12">
                            <!--begin::Mixed Widget 2-->
                            <div class="card card-xl-stretch">
                                <!--begin::Header-->
                                <div class="card-header border-0 bg-danger py-5">
                                    <h3 class="card-title fw-bolder text-white">CLOCK-IN-PORTAL</h3>
                                    
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body p-0">
                                    <!--begin::Chart-->
                                    <div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 200px"></div>
                                    <!--end::Chart-->
                                    <!--begin::Stats-->
                                    <div class="card-p mt-n20 position-relative">
                                        <!--begin::Row-->
                                        <div class="row g-0">
                                            <!--begin::Col-->
                                            <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <a href="#" class="text-warning fw-bold fs-6">Good morning</a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
                                                        <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <a href="#" class="text-primary fw-bold fs-6">Pending Requests</a>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row g-0">
                                            <!--begin::Col-->
                                            <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <a href="#" class="text-danger fw-bold fs-6 mt-2">Incoming Holidays</a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col bg-light-success px-6 py-8 rounded-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                                <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
                                                        <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <a href="#" class="text-success fw-bold fs-6 mt-2">Total employees</a>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Mixed Widget 2-->
                        </div>
                    

                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            <!--begin::Products-->
                            <div class="card card-flush">
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Today's Status</h1>
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                        <!--begin::Actions-->
                                            <div class="d-flex align-items-center gap-2 gap-lg-3">
                                                <!--begin::Primary button-->
                                                <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Get report</a>
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
                                            <tr class="text-start text-gray-600 fw-bolder fs-7 text-uppercase gs-0">
                                                
                                                <th class="min-w-10px">#</th>
                                                <th class="min-w-100px">Name</th>
                                                <th class="min-w-100px">Date</th>
                                                <th class="min-w-100px">Office In</th>
                                                <th class="min-w-100px">Office Out</th>
                                                <th class="min-w-100px">Work Hour</th>
                                                <th class="text-end min-w-70px">Status</th>
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
                                                            <a class="text-gray-500 text-hover-primary fs-5">10:00 am</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                                <!--begin::Date Modified=-->
                                                <td>
                                                    <div class="d-flex align-items-left">
                                                            <a class="text-gray-500 text-hover-primary fs-5">6:00</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                               
                                                <!--begin::Date Modified=-->
                                                <td>
                                                    <div class="d-flex align-items-left">
                                                            <a class="text-gray-500 text-hover-primary fs-5">8 hours</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                                <!--begin::Status=-->
                                                <td class="text-end pe-0" data-order="Expired">
                                                    <!--begin::Badges-->
                                                    <div class="badge badge-light-danger">OUT</div>
                                                    <!--end::Badges-->
                                                </td>
                                                <!--end::Status=-->
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
                                                            <a class="text-gray-500 text-hover-primary fs-5">Prabin Maharjan</a>
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
                                                            <a class="text-gray-500 text-hover-primary fs-5">10:30 am</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                                <!--begin::Date Modified=-->
                                                <td>
                                                    <div class="d-flex align-items-left">
                                                            <a class="text-gray-500 text-hover-primary fs-5">none</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                                <!--begin::Date Modified=-->
                                                <td>
                                                    <div class="d-flex align-items-left">
                                                            <a class="text-gray-500 text-hover-primary fs-5">None</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                                <!--begin::Status=-->
                                                <td class="text-end pe-0" data-order="Expired">
                                                    <!--begin::Badges-->
                                                    <div class="badge badge-light-success">IN</div>
                                                    <!--end::Badges-->
                                                </td>
                                                <!--end::Status=-->
                                            </tr>
                                            <!--end::Table row-->   
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Order ID=-->
                                                <td data-kt-ecommerce-order-filter="order_id">
                                                    <a class="text-gray-500 text-hover-primary fw-bolder">3</a>
                                                </td>
                                                <!--end::Order ID=-->
                                                <!--begin::Customer=-->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                            <!--begin::Title-->
                                                            <a class="text-gray-500 text-hover-primary fs-5">Anuj Magar</a>
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
                                                            <a class="text-gray-500 text-hover-primary fs-5">10:12 am</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                                <!--begin::Date Modified=-->
                                                <td>
                                                    <div class="d-flex align-items-left">
                                                            <a class="text-gray-500 text-hover-primary fs-5">6:15 pm</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                                <!--begin::Date Modified=-->
                                                <td>
                                                    <div class="d-flex align-items-left">
                                                            <a class="text-gray-500 text-hover-primary fs-5">8 hours</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                                <!--begin::Status=-->
                                                <td class="text-end pe-0" data-order="Expired">
                                                    <!--begin::Badges-->
                                                    <div class="badge badge-light-danger">OUT</div>
                                                    <!--end::Badges-->
                                                </td>
                                                <!--end::Status=-->
                                            </tr>
                                            <!--end::Table row-->    
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Order ID=-->
                                                <td data-kt-ecommerce-order-filter="order_id">
                                                    <a class="text-gray-500 text-hover-primary fw-bolder">4</a>
                                                </td>
                                                <!--end::Order ID=-->
                                                <!--begin::Customer=-->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                            <!--begin::Title-->
                                                            <a class="text-gray-500 text-hover-primary fs-5">Alwin kansakar</a>
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
                                                            <a class="text-gray-500 text-hover-primary fs-5">10:45 am</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                                <!--begin::Date Modified=-->
                                                <td>
                                                    <div class="d-flex align-items-left">
                                                            <a class="text-gray-500 text-hover-primary fs-5">None</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                                <!--begin::Date Modified=-->
                                                <td>
                                                    <div class="d-flex align-items-left">
                                                            <a class="text-gray-500 text-hover-primary fs-5">None</a>
                                                    </div>
                                                </td>
                                                <!--end::Date Modified=-->
                                                <!--begin::Status=-->
                                                <td class="text-end pe-0" data-order="Expired">
                                                    <!--begin::Badges-->
                                                    <div class="badge badge-light-success">IN</div>
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