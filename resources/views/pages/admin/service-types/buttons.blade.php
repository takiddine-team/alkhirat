<a href="{{ route('service-types.edit', $content->id) }}" class="btn btn-primary edit-btn">تعديل</a>
<form method="post" class="form" style="display: inline-block"
    action="{{ route('service-types.destroy', $content->id) }}">
    @csrf
    @method('DELETE')
    <input type="hidden" value="{{ $content->id }}" name="id">
    <button class="btn btn-danger" type="submit" value="مسح">مسح</button>
</form>
