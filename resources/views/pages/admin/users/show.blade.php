<x-base-layout>
    <!--begin::details View-->
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('معلومات المستخدم') }}</h3>
            </div>
            <!--end::Card title-->

            {{-- <!--begin::Action-->
            <a href="{{ theme()->getPageUrl('account/settings') }}"
                class="btn btn-primary align-self-center">{{ __('تعديل المعلومات الشخصية') }}</a>
            <!--end::Action--> --}}
        </div>
        <!--begin::Card header-->

        <div class="card-body p-9">
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('الاسم بالكامل') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $user->name }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('الاسم بالكامل') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $user->email }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('رقم الهاتف') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $user->phone }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('العنوان') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $user->address }}</span>
                </div>
            </div>


            @php
                if ($user->hasRole('superadmin')) {
                    $role = 'سوبر ادمن';
                }
                if ($user->hasRole('admin')) {
                    $role = 'ادمن';
                }
                if ($user->hasRole('beneficiary')) {
                    $role = 'مستفيد';
                }
                if ($user->hasRole('supporter')) {
                    $role = 'مشجع';
                }
                if ($user->hasRole('volunteer')) {
                    $role = 'متطوع';
                }
            @endphp

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('اخر تسجيل الدخول') }}</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bolder fs-6 text-dark">{{ $user->last_login_at?->diffForHumans() ?? 'لم يتم تسجيل الدخول بعد' }}</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">{{ __('توع الحساب') }}</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-dark">{{ $role }}</span>
                </div>
            </div>

        </div>
        <!--end::Card body-->
    </div>
    <!--end::details View-->

</x-base-layout>
