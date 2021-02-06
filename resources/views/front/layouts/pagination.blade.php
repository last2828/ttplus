@php /** @var \Illuminate\Pagination\Paginator $paginator */@endphp
@if ($paginator->lastPage() > 1)
<div class="info__bottom">
    <a href="{{ $paginator->url(1) }}" class="btn btn-prev">
        <span class="span-arrow disabled"></span>
        <span class="span-text disabled">Предыдущая страница</span>
    </a>
    @if(($paginator->currentPage() !== $paginator->lastPage()))
    <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="btn btn-next">
        <span class="span-text">Следующая страница</span>
        <span class="span-arrow"></span>
    </a>
    @else
    @endif
</div>
@endif