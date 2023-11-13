<ol class="dd-list">
    @foreach ($sections as $section)
    <li class="dd-item sections-list-li">
        <div class="dd-handle">
            {{ $section->title }}
        </div>
        <div class="change-icons">
            @if ($section->type_id != 1)
            <a href="/{{ app()->getLocale() }}/admin/section/{{ $section->id }}/posts/" class="far fa-eye"></a>
            @endif

            <a href="/{{ app()->getLocale() }}/admin/components/{{ $section->id }}" class="fa-solid fa-gear"></a>
            <a href="/{{ app()->getLocale() }}/admin/sections/edit/{{ $section->id }}" class="fas fa-pencil-alt"></a>
            <a href="/{{ app()->getLocale() }}/admin/sections/destroy/{{ $section->id }}"
                onclick="return confirm_alert(this);" class="fas fa-trash-alt"></a>
        </div>
        @if (count($section->children) > 0)
        @include('admin.sections.list-helper', ['sections' => $section->children])
        @endif
    </li>
    @endforeach
</ol>

<script>
    function confirm_alert(node) {
        return confirm("Do you want to delete this Section?");
    }

</script>
