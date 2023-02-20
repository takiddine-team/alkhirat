<x-base-layout>
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

                            <ul style="list-style: none">
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
                                            <div class="col-auto">
                                                <input id="{{ $b->id }}" type="checkbox"
                                                    value="{{ $b->id }}"
													{{ !is_null($row) ? 'checked' : ''}}
                                                    name="beneficiaries[{{ $key }}][id]">
                                            </div>
                                            <div class="col-3">
                                                <label for="{{ $b->id }}">
                                                    {{ $b->user->user->name }}
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" class="form-control"
                                                    name="beneficiaries[{{ $key }}][quantity]"
													value="{{ $quantity }}"
                                                    placeholder="الكمية">
                                            </div>
                                            <div class="col-md-4">
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
                let value = $(this).val()
                if (value != '') {
                    $('[data-user-name]').map(function(key, item) {
                        if (!$(item).data('user-name').includes(value)) {
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
