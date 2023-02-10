<x-base-layout>
    <!--begin::details View-->
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('تفاصيل النشاط') }}</h3>
            </div>
        </div>

        <div class="card-body p-9">
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('إسم النشاط') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->activity_name }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('كود النشاط') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->activity_code }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('كود الباقة') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->plan_code }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('وصف النشاط') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->description }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('ملاحظة') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->note }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('الكمية') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->quantity }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('التكلفة الشهرية') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->monthly_cost }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('القسم') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->target_class }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('مدير النشاط') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->management->user->user->name }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('بداية النشاط') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->start_date?->format('d/m/Y') }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('نهاية النشاط') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->end_date?->format('d/m/Y') }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('حالة النشاط') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $activity->is_done ? 'تم النشاط' : 'لم يتم' }}</span>
                </div>
            </div>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::details View-->

</x-base-layout>
