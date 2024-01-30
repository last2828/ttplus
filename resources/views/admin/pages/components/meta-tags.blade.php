<div class="form-group row">
    <label>Meta Title</label>
    <div class="col-lg-12 col-md-9 col-sm-12">
        <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Meta Title" name="meta_title" value="{{(isset($page)) ? $page['meta_title'] : ''}}">
    </div>
</div>

<div class="form-group row">
    <label>Meta Keywords</label>
    <div class="col-lg-12 col-md-9 col-sm-12">
        <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Meta Keywords" name="meta_keywords" value="{{(isset($page)) ? $page['meta_keywords'] : ''}}">
    </div>
</div>

<div class="form-group row">
    <label>Meta Description</label>
    <div class="col-lg-12 col-md-9 col-sm-12">
        <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Meta Description" name="meta_description" value="{{(isset($page)) ? $page['meta_description'] : ''}}">
    </div>
</div>
