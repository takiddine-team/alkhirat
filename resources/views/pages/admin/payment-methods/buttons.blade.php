<a href="{{ route('payment-methods.edit', $content->id) }}" class="edit-btn btn btn-primary">تعديل</a>
<form method="post" class="form" style="display: inline-block"
    action="{{ route('payment-methods.destroy', $content->id) }}">
    @csrf
    @method('DELETE')
    <input type="hidden" value="{{ $content->id }}" name="id">
    <button class="btn btn-danger" type="submit" value="مسح">مسح</button>
</form>
