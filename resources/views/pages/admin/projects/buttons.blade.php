<a href="{{ route('projects.edit', $value->id) }}" class="btn btn-primary edit-btn">تعديل</a>
<a href="{{ route('projects.show', $value->id) }}" class="btn btn-primary">تفاصيل</a>
<form method="post" class="form"
  action="{{ route('projects.destroy', $value->id) }}">
  @csrf
  @method('DELETE')
  <input type="hidden" value="{{ $value->id }}" name="id">
  <button class="btn btn-danger" type="submit"
      value="مسح">مسح</button>
</form>