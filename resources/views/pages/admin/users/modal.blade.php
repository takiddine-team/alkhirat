@php
    $_content = isset($_content) ? $_content : null
@endphp

<div class="modal fade" id="kt_modal_{{ $_content ? 'edit' : 'add' }}_customer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <form class="form" method="POST" enctype="multipart/form-data" action="{{ is_null($_content) ? route('users.store') : route('users.update_user', $_content?->id) }}"
                id="kt_modal_add_customer_form">
                @csrf
                @if (is_null($_content))
                    @method('POST')
                @else
                    @method('PUT')
                @endif
                <div class="modal-header" id="kt_modal_add_customer_header">
                    <h2 class="fw-bolder">
                        {{ is_null($_content) ? 'مستخدم جديد' : 'تعديل المستخدم'}}
                    </h2>
                    <button id="kt_modal_add_customer_close" data-dismiss="modal" aria-label="Close"
                        class="btn btn-icon btn-sm btn-active-icon-primary">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="modal-body py-10 px-lg-17">
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                        data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">

                        <div class="fv-row mb-7">
                            <label class="required fw-bold fs-6 mb-2">الإسم الشخصي</label>
                            <input type="text" name="first_name" class="form-control form-control-solid mb-3 mb-lg-0" required value="{{ old('first_name', $_content?->first_name) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fw-bold fs-6 mb-2">الإسم العائلي</label>
                            <input type="text" name="last_name" class="form-control form-control-solid mb-3 mb-lg-0" required value="{{ old('last_name', $_content?->last_name) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fw-bold fs-6 mb-2">الإيميل</label>
                            <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" required value="{{ old('email', $_content?->email) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="fw-bold fs-6 mb-2">رقم الهاتف</label>
                            <input type="text" name="phone" class="form-control form-control-solid mb-3 mb-lg-0" value="{{ old('phone', $_content?->phone) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="fw-bold fs-6 mb-2">الحي</label>
                            <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0" value="{{ old('address', $_content?->address) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fw-bold fs-6 mb-2">كلمة المرور</label>
                            <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0" {{ is_null($_content) ? 'required' : ''}} />
                        </div>

                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">الغاء</button>
                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                        <span class="indicator-label">{{ is_null($_content) ? 'أضافة' : 'تعديل'}}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
