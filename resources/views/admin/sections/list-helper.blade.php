<ol class="dd-list">
  @foreach ($sections as $section)
    <li class="dd-item sections-list-li" data-id="{{ $section->id }}">
      <div class="dd-handle" style="">
        {{ $section->title }}
      </div>
      <div class="change-icons">
        @if ($section->componentt)
        <a href="/{{ app()->getLocale() }}/admin/section/{{ $section->id }}/components/"  class="mdi mdi-settings"></a>
        @else
        <a href="/{{ app()->getLocale() }}/admin/section/{{ $section->id }}/posts/"  class="far fa-eye"></a>
        @endif
          <a href="/{{ app()->getLocale() }}/admin/sections/edit/{{ $section->id }}"  class="fas fa-pencil-alt"></a>
          <a href="/{{ app()->getLocale() }}/admin/sections/destroy/{{ $section->id }}" data-action="" onclick="return confirm_alert(this);" class="fas fa-trash-alt"></a>

      </div>
      @if (count($section->children) > 0 )
        {{-- @include('admin.sections.list-helper', ['sections' => $section->children]) --}}
      @endif
    </li>
  @endforeach
</ol>

<script>
  function confirm_alert(node) {
    return confirm("Do you want to delete this Section?");
  }
</script>
