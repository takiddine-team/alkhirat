@php
    $project = isset($content) ? $content : null
@endphp

<div class="modal fade" id="kt_modal_{{ $project ? 'edit' : 'add' }}_customer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <form class="form" method="POST" enctype="multipart/form-data" action="{{ is_null($project) ? route('projects.store') : route('projects.update', $content->id) }}"
                id="kt_modal_add_customer_form">
                @csrf
                @if (is_null($project))
                    @method('POST')
                @else
                    @method('PUT')
                @endif
                <div class="modal-header" id="kt_modal_add_customer_header">
                    <h2 class="fw-bolder">
                        {{ is_null($project) ? 'مشروع جديد' : 'تعديل المشروع'}}
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
                            <label class="required fs-6 fw-bold mb-2">اسم المشروع</label>
                            <input value="{{ old('name', $project?->name) }}" type="text" class="form-control form-control-solid"
                                name="name" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">المسير</label>
                            <select name="management_id" class="form-select form-control-solid">
                                @foreach ($managements as $management)
                                    <option @if (old('name', $project?->management_id) == $management->id) selected @endif value="{{ $management->id }}">{{ $management->user->user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">وصف المشروع</label>
                            <textarea type="text" class="form-control form-control-solid" name="description">{{ old('description', $project?->description) }}</textarea>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">مرفق المشروع</label>
                            <input type="file" class="form-control form-control-solid" name="attachment" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">تاريخ بداية المشروع</label>
                            <input value="{{ old('start_date', $project?->start_date?->format('Y-m-d')) }}" type="date"
                                class="form-control form-control-solid" name="start_date" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">تاريخ نهاية المشروع</label>
                            <input value="{{ old('end_date', $project?->end_date?->format('Y-m-d')) }}" type="date" class="form-control form-control-solid"
                                name="end_date" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">الغاء</button>
                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                        <span class="indicator-label">{{ is_null($project) ? 'أضافة' : 'تعديل'}}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
