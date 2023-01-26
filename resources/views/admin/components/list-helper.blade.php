<ol class="dd-list">
    @foreach ($components as $component)
      <li class="dd-item sections-list-li" data-id="{{ $component->id }}">
        <div class="dd-handle" style="">
          {{ $component->title }}
        </div>
        <div class="change-icons">
            @if ($component->type['type'] !== 0)
                <a href="/{{ app()->getLocale() }}/admin/section/{{ $component->id }}/posts/"  class="far fa-eye"></a>
            @endif
            <a href="/{{ app()->getLocale() }}/admin/sections/edit/{{ $component->id }}"  class="fas fa-pencil-alt"></a>
            <a href="/{{ app()->getLocale() }}/admin/sections/destroy/{{ $component->id }}" data-action="" onclick="return confirm_alert(this);" class="fas fa-trash-alt"></a>
        </div>
      </li>
    @endforeach
  </ol>

  <script>
    function confirm_alert(node) {
      return confirm("Do you want to delete this Section?");
    }
  </script>
