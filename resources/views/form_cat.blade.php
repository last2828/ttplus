<h1>Create Category</h1>
<form action="{{route('add_cat')}}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <div>select parent category</div>
        <select name="parent_id" class="form-control">
                <option value=""></option>
            @foreach($categories as $category)
                <option value="{{$category['id']}}" >{{$category['name']}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
    </div>
</form>

<h1>Category hierarchy</h1>

@foreach($categories as $category)
    @if($category->parent_id == null)
        <div>{{ $category->name }}</div>
    @endif
        @foreach($category->children as $subcategory)
               @if($category->id == $subcategory->parent_id)
                   <div style="margin-left: 30px">{{ $subcategory->name }}</div>
               @endif
        @endforeach
@endforeach
