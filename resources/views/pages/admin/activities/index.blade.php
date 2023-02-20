<x-base-layout>
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <x-alert>
        </x-alert>
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                @if ($errors->count() > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br>
                        @endforeach
                    </div>
                @endif
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                <!--begin::Add customer-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_customer">نشاط جديد</button>
                                <!--end::Add customer-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-customer-table-toolbar="selected">
                                <div class="fw-bolder me-5">
                                    <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger"
                                    data-kt-customer-table-select="delete_selected">Delete Selected</button>
                            </div>
                            <!--end::Group actions-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                    </th>
                                    <th class="min-w-125px">الاسم</th>
                                    <th class="min-w-125px">الكود</th>
                                    <th class="min-w-80px">الوصف</th>
                                    <th class="min-w-80px">الكمية</th>
                                    <th class="min-w-80px">القسم</th>
                                    <th class="min-w-125px">تاريخ البداية</th>
                                    <th class="min-w-125px">تاريخ النهاية</th>
                                    <th></th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                @foreach ($activities as $activity)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>{{ $activity->activity_name }}</td>
                                        <td>{{ $activity->activity_code }}</td>
                                        <td>{{ $activity->description }}</td>
                                        <td>{{ $activity->quantity }}</td>
                                        <td>{{ $activity->target_class }}</td>
                                        <td>{{ $activity->start_date->format('d-m-Y') }}</td>
                                        <td>{{ $activity->end_date->format('d-m-Y') }}</td>
                                        <td class="">
                                            <a href="{{ route('activities.edit', $activity->id) }}"
                                                class="btn btn-primary edit-btn">تعديل</a>
                                            <a href="{{ route('activities.show', $activity->id) }}"
                                                class="btn btn-primary">تفاصيل</a>
                                            <form method="post" class="form" style="display: inline-block"
                                                action="{{ route('activities.destroy', $activity->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" value="{{ $activity->id }}" name="id">
                                                <button class="btn btn-danger" type="submit"
                                                    value="مسح">مسح</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->

                @include('pages.admin.activities.modal')
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->


    @section('scripts')
        <script src="{{ asset('demo8/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                var table = $('#kt_ecommerce_products_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('activities.list') }}",
                    columns: [
                        {
                            data: 'id',
                            name: 'id',
                            sortable: false,
                            searchable: false,
                        },
                        {
                            data: 'activity_name',
                            name: 'activity_name'
                        },
                        {
                            data: 'activity_code',
                            name: 'activity_code'
                        },
                        {
                            data: 'description',
                            name: 'description'
                        },
                        {
                            data: 'quantity',
                            name: 'quantity'
                        },
                        {
                            data: 'target_class',
                            name: 'target_class'
                        },
                        {
                            data: 'start_date',
                            name: 'start_date'
                        },
                        {
                            data: 'end_date',
                            name: 'end_date'
                        },
                        {
                            data: 'actions',
                            name: 'actions',
                            sortable: false,
                            searchable: false,
                        },
                    ]
                });

            });
        </script>
    @endsection
</x-base-layout>
