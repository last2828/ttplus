@php /** @var \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs $breadcrumbs  */@endphp
@if (count($breadcrumbs) && $breadcrumbs->first()->front == true)

  <div class="breadcrumbs">
    @foreach ($breadcrumbs as $breadcrumb)
      @if ($breadcrumb->url && !$loop->last)
        <a href="{{ $breadcrumb->url }}" class="btn"> {{ $breadcrumb->title }} /&nbsp;</a>
      @else
        <p class="breadcrumbs__current"> {{ $breadcrumb->title }}</p>
      @endif
    @endforeach
  </div>

@elseif (count($breadcrumbs) && $breadcrumbs->first()->front == false)
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