<x-base-layout>
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('تفاصيل الدفعة') }}</h3>
            </div>
        </div>

        <div class="card-body p-9">
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('المشجع') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $_content->supporter->user->name }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('طريقة الدفع') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $_content->payment_method->name }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('المبلغ') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $_content->amount }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('ملاحظة') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $_content->note }}</span>
                </div>
            </div>
            @if ($_content->attachment)
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('المرفق') }}</label>
                <div class="col-lg-8">
                    <img src="/storage/{{ $_content->attachment }}" class="img-fluid rounded" width="700" alt="">
                </div>
            </div>
            @endif
        </div>
    </div>
</x-base-layout>
