<x-base-layout>
    <style>
        [data-user-name] {
            border: 1px solid #efefef;
            padding: 0.7rem 1rem;
            border-radius: 6px;
        }
    </style>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <x-alert>
        </x-alert>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card card-flush">
                    <div class="card-body">
                        <h2>إضافة المستفيدين لخدمة: <strong>{{ $service->service_name }}</strong></h2>

                        @if ($errors->count() > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif

                        <input type="text" class="form-control mt-10" placeholder="إبحث عن المستخذمين" id="search">

                        <form class="mt-5" method="POST">
                            @csrf

                            <ul style="list-style: none; padding: 0;">
                                @foreach ($beneficiaries as $key => $b)
								@php
									$row = $b->beneficiary_service->filter(function($item) use ($service) {
										return $item->service_id == $service->id;
									})->first();
									
									$quantity = optional($row)->quantity;
									$note = optional($row)->note;
								@endphp
                                    <li data-user-name="{{ $b->user->user->name }}">
                                        <div class="row align-items-center">
                                            <div class="mt-md-0 mt-3 col-md-3 col-12">
                                                <div class="d-flex align-items-center">
                                                    <input id="{{ $b->id }}" type="checkbox"
                                                        value="{{ $b->id }}"
                                                        {{ !is_null($row) ? 'checked' : ''}}
                                                        name="beneficiaries[{{ $key }}][id]">
                                                    <label class="m-0 ms-2" for="{{ $b->id }}">
                                                        {{ $b->user->user->name }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-md-0 mt-3 col-md-4">
                                                <input type="number" class="form-control"
                                                    name="beneficiaries[{{ $key }}][quantity]"
													value="{{ $quantity }}"
                                                    placeholder="الكمية">
                                            </div>
                                            <div class="mt-md-0 mt-3 col-md-4">
                                                <textarea class="form-control" name="beneficiaries[{{ $key }}][note]" placeholder="ملاحظة">{{ $note }}</textarea>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            <button class="btn btn-success">إضافة المستفيدين</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        <script>
            $('#search').on('keyup', function() {
                let value = $(this).val().trim().toLowerCase()
                if (value != '') {
                    $('[data-user-name]').map(function(key, item) {
                        if (!$(item).data('user-name').toLowerCase().includes(value)) {
                            $(item).hide()
                        } else {
                            $(item).show()
                        }
                    })
                } else {
                    $('[data-user-name]').show()
                }
            })
        </script>
    @endsection
</x-base-layout>
