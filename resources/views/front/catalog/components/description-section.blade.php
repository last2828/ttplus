@if (isset ($category) && empty ($category->parent))

    <h2>{{ $category->name_ru }}</h2>
    <div class="heading__content">
        <div class="heading__text">
            {!! $category->content !!}
        </div>
        <div class="heading__buttons"><a href="{{$category->catalog}}" class="btn btn-pdf">
                <div class="btn-pdf__img"></div>
                <div class="btn-pdf__text">Общий каталог ({{$category->name}}).pdf</div>
            </a><a href="{{$category->video}}" class="btn btn-watch">Смотреть видео</a></div>
    </div><a href="{{route('pages.page', $category->slug)}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Подробнее</span></a>

@elseif (isset($group->category))

    <h2>{{ $group->category->name_ru }}</h2>
    <div class="heading__content">
        <div class="heading__text">
            {!! $group->category->content !!}
        </div>
        <div class="heading__buttons"><a href="{{$group->category->parent->catalog}}" class="btn btn-pdf">
                <div class="btn-pdf__img"></div>
                <div class="btn-pdf__text">Общий каталог ({{$group->category->parent->name}}).pdf</div>
            </a><a href="{{$group->category->parent->video}}" class="btn btn-watch">Смотреть видео</a></div>
    </div><a href="{{route('pages.page', $group->category->parent->slug)}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Подробнее</span></a>

@elseif (isset($category->parent))

    <h2>{{ $category->name_ru }}</h2>
    <div class="heading__content">
        <div class="heading__text">
            {!! $category->content !!}
        </div>
        <div class="heading__buttons"><a href="{{$category->parent->catalog}}" class="btn btn-pdf">
                <div class="btn-pdf__img"></div>
                <div class="btn-pdf__text">Общий каталог ({{$category->parent->name}}).pdf</div>
            </a><a href="{{$category->parent->video}}" class="btn btn-watch">Смотреть видео</a></div>
    </div><a href="{{route('pages.page', $category->parent->slug)}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Подробнее</span></a>

@endif