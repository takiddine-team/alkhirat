<x-base-layout>
    <!--begin::details View-->
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('تفاصيل الخدمة') }}</h3>
            </div>
        </div>


        <div class="card-body p-9">
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('إسم الخدمة') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $service->service_name }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('نوع الخدمة') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $service->serviceType->name }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('وصف الخدمة') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $service->description }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('الكمية') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $service->quantity }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('الجهة المقدمة') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $service->organization->name }}</span>
                </div>
            </div>
        </div>

    </div>
</x-base-layout>
