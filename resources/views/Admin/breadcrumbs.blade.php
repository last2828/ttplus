@if (count($breadcrumbs))
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">

                <div class="kt-subheader__main">
                    <div class="kt-subheader__breadcrumbs">
                        @foreach ($breadcrumbs as $breadcrumb)
                            @if ($breadcrumb->url && !$loop->last)
                                <a href="{{ $breadcrumb->url }}" class="kt-subheader__breadcrumbs-link">
                                    {{ $breadcrumb->title }}</a>
                                <span class="kt-subheader__breadcrumbs-separator"></span>
                            @else
                                <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">{{ $breadcrumb->title }}</span>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

@endif