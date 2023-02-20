
<form method="post" class="form"
  action="{{ route('projects.destroy', $value->id) }}">
  @csrf
  @method('DELETE')
  <input type="hidden" value="{{ $value->id }}" name="id">
  <button class="btn btn-danger" type="submit"
      value="مسح">مسح</button>
</form>