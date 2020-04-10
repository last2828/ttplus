@if (count($breadcrumbs))
    <div class="kt-subheader__breadcrumbs">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <a href="{{ $breadcrumb->url }}" class="kt-subheader__breadcrumbs-home"><span class="kt-subheader__breadcrumbs-separator">{{ $breadcrumb->title }}</span></a>
            @else
                <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">{{ $breadcrumb->title }}</span>
            @endif

        @endforeach
    </div>

@endif