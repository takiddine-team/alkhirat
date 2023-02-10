<!--begin::User-->
<div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
    <!--begin::Symbol-->
    <div class="symbol symbol-50px">
        <img src="{{ (auth()->user()!=null) ? asset('storage/avatars/'.auth()->user()->info->avatar):'' }}" alt="صورة العرض"/>
    </div>
    <!--end::Symbol-->

    <!--begin::Wrapper-->
    <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
        <!--begin::Section-->
        <div class="d-flex">
            <!--begin::Info-->
            <div class="flex-grow-1 me-2">
                <!--begin::Username-->
{{--                <a href="#" class="text-white text-hover-primary fs-6 fw-bold">{{(auth()->user()!=null) ? auth()->user()->name :'' }}</a>--}}
                <!--end::Username-->

                <!--begin::Description-->
                <span class="text-gray-600 fw-bold d-block fs-12 mb-1">
                    @hasrole('superadmin')
                    إدارة النظام
                    @endhasrole
                    @hasrole('volunteer')
                      :: متطوع ::
                    @endhasrole
                    @hasrole('beneficiary')
                     :: مستفيد ::
                    @endhasrole
                    @hasrole('supporter')
                      :: داعم ::
                    @endhasrole
                    @hasrole('admin')
                       :: إداري ::
                    @endhasrole
                </span>
                <!--end::Description-->


            </div>
            <!--end::Info-->

            <!--begin::User menu-->
            <div class="me-n2">
                <!--begin::Action-->
                <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
                    {!! theme()->getSvgIcon("icons/duotune/coding/cod001.svg", "svg-icon-muted svg-icon-1") !!}
                </a>

                {{ theme()->getView('partials/topbar/_user-menu', array('language-menu-placement' => 'right-start', 'subscription-menu-placement' => 'right-start')) }}
                <!--end::Action-->
            </div>
            <!--end::User menu-->
        </div>
        <!--end::Section-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::User-->

<!--begin::Aside search-->
<!--<div class="aside-search py-5">
    {{ theme()->getView('layout/search/_base') }}
</div>-->
<!--end::Aside search-->
