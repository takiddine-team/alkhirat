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