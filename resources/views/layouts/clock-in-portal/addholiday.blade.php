@include('layouts.partials.header')
@include('layouts.partials.aside-menu')
<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    @include('layouts.partials.page-header')

        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>            
        @endif
           <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{ url('add-holiday') }}" method="POST">
                <!--begin::Modal header-->
                @csrf
                
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">Add Holiday</h2>
                    <!--end::Modal title-->
                   
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    
                        <!--begin::User form-->
                        <div class="collapse show">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Holiday Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="holiday_name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Start date</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="date" class="form-control form-control-solid" placeholder="" name="start_date" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">End date</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="date" class="form-control form-control-solid" placeholder="" name="end_date" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Total days</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="2" name="total_days"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                           
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                
                                <label class="fs-6 fw-bold mb-2">Status</label>
                                
                                <div class="mb-5">
                                    <select name="status" class="form-select form-select-sm form-select-solid">
                                        <option value="admin">Enable</option>
                                        <option value="manager">Disable</option>
                                    </select>
                                </div>
                            </div>
                            <!--end::Input group-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    

@include('layouts.partials.footer')