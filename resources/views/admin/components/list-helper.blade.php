<ol class="dd-list">
    @foreach ($components as $component)
    <li class="dd-item sections-list-li">
        <div class="dd-handle">
            {{ $component->title }} - {{ trans('componentTypes.'.componentTypes($component->type_id)) }}
        </div>
        <div class="change-icons">
            <a href="/{{ app()->getLocale() }}/admin/section/{{ $component->id }}/posts" class="fa-solid fa-eye"></a>
            <a href="/{{ app()->getLocale() }}/admin/component/{{ $component->id }}/edit" class="fas fa-pencil-alt"></a>
            <a href="/{{ app()->getLocale() }}/admin/component/{{ $component->id }}/destroy"
                onclick="return confirm_alert(this);" class="fas fa-trash-alt"></a>
        </div>
    </li>
    @endforeach
</ol>

<script>
    function confirm_alert(node) {
        return confirm("Do you want to delete this Section?");
    }

</script>
