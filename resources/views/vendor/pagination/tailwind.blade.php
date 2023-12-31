



@if ($paginator->hasPages())

<ul class="pagination" style="width: 100%;"> 
    <li class="paginate_button page-item previous " aria-disabled="true" @if ($paginator->onFirstPage()) disabled @endif ><a href="{{ $paginator->previousPageUrl() }}"
            class="page-link">Prev</a></li>
            
    @foreach ($elements as $element)
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li class="paginate_button page-item active"><a href="#"
                    tabindex="0" class="page-link">{{ $page }}</a></li>
                @else
                
                <li class="paginate_button page-item"><a href="{{ $url }}" aria-controls="datatable-buttons" data-dt-idx="1"
                    tabindex="0" class="page-link">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    <li class="paginate_button page-item next" ><a href="{{ $paginator->nextPageUrl() }}" 
            class="page-link">Next</a></li>
</ul>

@endif
