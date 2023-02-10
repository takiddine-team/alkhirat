@php
    $content = isset($content) ? $content : null;
@endphp

<div class="modal fade" id="kt_modal_{{ $content ? 'edit' : 'add' }}_customer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <form class="form" method="POST" enctype="multipart/form-data"
                action="{{ is_null($content) ? route('activities.store') : route('activities.update', $content?->id) }}"
                id="kt_modal_add_customer_form">
                @csrf
                @if (is_null($content))
                    @method('POST')
                @else
                    @method('PUT')
                @endif
                <div class="modal-header" id="kt_modal_add_customer_header">
                    <h2 class="fw-bolder">
                        {{ is_null($content) ? 'نشاط جديد' : 'تعديل النشاط' }}
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
                            <label class="required fs-6 fw-bold mb-2">اسم النشاط</label>
                            <input type="text" class="form-control form-control-solid" name="activity_name" value="{{ old('activity_name', $content?->activity_name) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">كود النشاط</label>
                            <input type="text" class="form-control form-control-solid" name="activity_code" value="{{ old('activity_code', $content?->activity_code) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">كود الباقة</label>
                            <input type="text" class="form-control form-control-solid" name="plan_code" value="{{ old('plan_code', $content?->plan_code) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">الوصف</label>
                            <textarea type="text" class="form-control form-control-solid" name="description">{{ old('description', $content?->description) }}</textarea>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">الكمية</label>
                            <input type="number" class="form-control form-control-solid" name="quantity" value="{{ old('quantity', $content?->quantity) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">التكلفة الشهرية</label>
                            <input type="number" class="form-control form-control-solid" name="monthly_cost" value="{{ old('monthly_cost', $content?->monthly_cost) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">القسم</label>
                            <input type="text" class="form-control form-control-solid" name="target_class" value="{{ old('target_class', $content?->target_class) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">المسير</label>
                            <select name="management_id" class="form-select form-control-solid">
                                @foreach ($managements as $management)
                                    <option value="{{ $management->id }}" {{ old('management_id', $content?->management_id) == $management->id ? 'selected' : '' }} >{{ $management->user->user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">تاريخ بداية المشروع</label>
                            <input type="date" class="form-control form-control-solid" name="start_date" value="{{ old('start_date', $content?->start_date?->format('Y-m-d')) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">تاريخ نهاية المشروع</label>
                            <input type="date" class="form-control form-control-solid" name="end_date" value="{{ old('end_date', $content?->end_date?->format('Y-m-d')) }}" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">ملاحظة</label>
                            <textarea type="text" class="form-control form-control-solid" name="note">{{ old('note', $content?->note) }}</textarea>
                        </div>

                        <div class="fv-row mb-7">
                            <label for="">هل تم</label>
                            <input type="checkbox" class="form-checkbox" name="is_done" {{ old('is_done', $content?->is_done) ? "checked" : '' }}>
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="reset" id="kt_modal_add_customer_cancel"
                        class="btn btn-light me-3">الغاء</button>
                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                        <span class="indicator-label">{{ is_null($content) ? 'أضافة' : 'تعديل' }}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
