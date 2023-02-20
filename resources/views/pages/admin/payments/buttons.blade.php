<a href="{{ route('payments.edit', $content->id) }}" class="btn btn-primary edit-btn">تعديل</a>
<a href="{{ route('payments.show', $content->id) }}" class="btn btn-primary">تفاصيل</a>
<form method="post" class="form" style="display: inline-block" action="{{ route('payments.destroy', $content->id) }}">
    @csrf
    @method('DELETE')
    <input type="hidden" value="{{ $content->id }}" name="id">
    <button class="btn btn-danger" type="submit" value="مسح">مسح</button>
</form>
