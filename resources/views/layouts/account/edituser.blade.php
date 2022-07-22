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
            <form class="form" action="{{ url('update-staff/'. $staff->id) }}" method="POST" enctype="multipart/form-data">
                <!--begin::Modal header-->
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">Edit User</h2>
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
                                <label class="fs-6 fw-bold mb-2">User profile Image</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="file" class="form-control form-control-solid" id="profile_img" placeholder="" name="profile_image" value="{{ $staff->profile_image }}"/>
                                <img src=" {{ asset('uploads/users/'. $staff->profile_image) }}" width="100" height="auto">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="name" value="{{ $staff->name }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Muncha account ID:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="muncha_id" value="{{ $staff->muncha_id }}" />
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
                                <input type="email" class="form-control form-control-solid" placeholder="someone@gmail.com" name="email" value="{{ $staff->email }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Location</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="streetname, city" name="location" value="{{ $staff->location }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Designation</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="Manager" name="designation" value="{{ $staff->designation }}"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Contact number</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="9861234567" name="number" value="{{ $staff->number }}"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Blood group</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="O+" name="blood_group" value="{{ $staff->blood_group }}"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Tax ID</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="0154312" name="tax_id" value="{{ $staff->tax_id }}"/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                
                                <label class="fs-6 fw-bold mb-2">Role</label>
                                
                                <div class="mb-5">
                                    <select name="role" aria-label="Select a Timezone" data-control="select2" value="{{ $staff->role }}" class="form-select form-select-sm form-select-solid">
                                        <option value="admin">Administration</option>
                                        <option value="manager">Manager</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                </div>
                            </div>
                            <!--end::Input group-->
                            
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Documents attach here:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="file" class="form-control form-control-solid" placeholder="" name="documents" accept="image/jpeg, application/pdf, application/vnd.ms-excel" value="{{ $staff->documents}}"/>
                                <!--end::Input-->
                            </div> 
                        </div>
                        <!--end::User form-->
                  
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
    
<script>
    jQuery(document).ready(function(){
        jQuery('#profile_img').on("change",function(e) {
        const [file] = this.files
        if (file) {
          var blah = URL.createObjectURL(file);
          jQuery(this).parent().find('img')?.remove();
          jQuery(this).parent().append(`<img src='${blah}' alt='..' width='100' height='auto' />` )
        }
    });
    })
</script>
@include('layouts.partials.footer')