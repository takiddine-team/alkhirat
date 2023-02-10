<x-base-layout>
    <!--begin::details View-->
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('تفاصيل المشروع') }}</h3>
            </div>
        </div>

        <div class="card-body p-9">
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('إسم المشروع') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $project->name }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('مدير المشروع') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $project->management->user->user->name }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('وصف المشروع') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $project->description }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('بداية المشروع') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $project->start_date?->format('d/m/Y') }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('نهاية المشروع') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $project->end_date?->format('d/m/Y') }}</span>
                </div>
            </div>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::details View-->

</x-base-layout>
