<h1>Create Product</h1>
<form action="{{route('add')}}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <div>select product category</div>
        <select name="parent_id" class="form-control">
            <option value=""></option>
            @foreach($categories as $category)
                <option value="{{$category['id']}}">{{$category['name']}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
    </div>
</form>