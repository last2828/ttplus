@php
    /** @var \App\Models\Catalog\ProductCategory $category */
    /** @var \App\Models\Catalog\ProductCategory $child */
@endphp

@foreach($categoriesAside as $category)
    @if(!$category->children->isEmpty())
        <div class="parameters__card">
            <div class="card__heading">
                <h4>{{$category->name_ru}}</h4>
            </div>
            <div class="card__content">
                @foreach ($category->children as $child)
                    <a href="{{route('pages.catalog.category.subcategory', $child->slug)}}" class="btn btn-simple">{{$child->name}}</a>
                @endforeach
            </div>
        </div>
    @endif
@endforeach
