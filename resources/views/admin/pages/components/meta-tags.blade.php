<div class="form-group row">
    <label>Meta title</label>
    <div class="col-lg-12 col-md-9 col-sm-12">
        <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Мета заголовок" name="meta_title" value="{{(isset($page)) ? $page['meta_title'] : ''}}">
    </div>
</div>

<div class="form-group row">
    <label>Meta keywords</label>
    <div class="col-lg-12 col-md-9 col-sm-12">
        <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Ключевые слова" name="meta_keywords" value="{{(isset($page)) ? $page['meta_keywords'] : ''}}">
    </div>
</div>

<div class="form-group row">
    <label>Meta description</label>
    <div class="col-lg-12 col-md-9 col-sm-12">
        <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Мета описание" name="meta_description" value="{{(isset($page)) ? $page['meta_description'] : ''}}">
    </div>
</div>