@php
    $_content = isset($_content) ? $_content : null;
@endphp

<div class="modal fade" id="kt_modal_{{ $_content ? 'edit' : 'add' }}_customer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <form class="form" method="POST" enctype="multipart/form-data"
                action="{{ is_null($_content) ? route('services.store') : route('services.update', $_content?->id) }}"
                id="kt_modal_add_customer_form">
                @csrf
                @if (is_null($_content))
                    @method('POST')
                @else
                    @method('PUT')
                @endif
                <div class="modal-header" id="kt_modal_add_customer_header">
                    <h2 class="fw-bolder">
                        {{ is_null($_content) ? 'طريقة دفع جديدة' : 'تعديل خدمة' }}
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
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">اسم الخدمة</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder=""
                                name="service_name" value="{{ $_content->service_name }}" />

                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Input-->
                            <label class="required fs-6 fw-bold mb-2">نوع الخدمة</label>

                            <select name="serviceType_id" aria-label="{{ __('نوع الخدمة') }}" data-control="select2"
                                data-placeholder="{{ __('قم باختيار نوع الخدمة') }}"
                                class="form-select form-select-solid form-select-lg">
                                <option value="">{{ __('اختر نوع الخدمة ...') }}</option>
                                @foreach (\App\Models\ServiceType::all() as $value)
                                    <option value="{{ $value->id }}"
                                        {{ $_content->serviceType_id == $value->id ? 'selected' : '' }}>
                                        {{ $value->name . ' - ' . $value->descriptoin }}
                                    </option>
                                @endforeach
                            </select>
                            <!--end::Input-->

                        </div>
                        <!--end::Col-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Input-->
                            <label class="required fs-6 fw-bold mb-2">الجهة المقدمة للخدمة</label>

                            <select name="organization_id" aria-label="{{ __('الجهة المقدمة للخدمة') }}"
                                data-control="select2" data-placeholder="{{ __('قم باختيار الجهة') }}"
                                class="form-select form-select-solid form-select-lg">
                                <option value="">{{ __('اختر الجهة المقدمة للخدمة ...') }}</option>
                                @foreach (\App\Models\Organization::all() as $value)
                                    <option value="{{ $value->id }}" {{ $_content->organization_id == $value->id ? 'selected' : '' }}>
                                        {{ $value->name . ' - ' . $value->description }}
                                    </option>
                                @endforeach
                            </select>
                            <!--end::Input-->

                        </div>
                        <!--end::Col-->




                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">وصف الخدمة</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" value="{{ $_content->description }}" placeholder=""
                                name="service_description" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">الكمية</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" class="form-control form-control-solid" placeholder="" value="{{ $_content->quantity }}"
                                name="quantity" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">الغاء</button>
                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                        <span class="indicator-label">{{ is_null($_content) ? 'أضافة' : 'تعديل' }}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
