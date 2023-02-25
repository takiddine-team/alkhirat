<div class="d-flex aling-items-start">
    <a href="{{ route('services.edit', $row->id) }}" class="edit btn ml-2 btn-success btn-sm edit-btn">تعديل</a>
    <a href="{{ route('services.show', $row->id) }}" class="edit btn ml-2 btn-primary btn-sm">تفاصيل</a>
    <form method="post" class="form" action="{{ route('services.destroy', $row->id) }}">
        @csrf
        @method('DELETE')
        <input type="hidden" value="{{ $row->id }}" name="id">
        <button class="btn btn-danger btn-sm ml-2" type="submit" value="مسح">مسح</button>
    </form>
    <a href="{{ route('services.beneficiary.index', ['service' => $row->id]) }}"
        class="flex-shrink-0 edit btn btn-primary btn-sm">إضافة المستفيدين</a>
</div>
