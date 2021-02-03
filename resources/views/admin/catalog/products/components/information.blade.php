@php /** @var \App\Models\Catalog\Product $product */ @endphp
<div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
    <div class="form-group row">
        <label>Код товара</label>
        <div class="col-lg-12 col-md-9 col-sm-12">
            <input type="text" class="form-control" aria-describedby="" placeholder="Код товара" name="model" value="{{(isset($product)) ? $product->model : ''}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Категория</label>
        <div class="col-lg-4 col-md-9 col-sm-12">
            <div class="input-group flex-nowrap mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="flaticon2-graph-2"></i></span>
                </div>
                <select class="form-control kt-select2 category-select" id="" name="category_id">
                    <option value="">Не выбрано</option>
                    @php /** @var \App\Models\Catalog\ProductCategory $category */ @endphp
                    @foreach($selectCategories as $category):
                    <option id="option-category-{{$category->id}}" {{(isset($product) && $product->category->id == $category->id) ? 'selected' : ''}} value="{{$category->id}}">{{($category->parent) ? '- ' . $category->name : $category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row" id="product_groups">
        <label class="col-form-label col-lg-3 col-sm-12">Группа товаров</label>
        <div class="col-lg-4 col-md-9 col-sm-12">
            <div class="input-group flex-nowrap mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="flaticon2-graph-2"></i></span>
                </div>
                <select class="form-control kt-select2 group-select" id="" name="group_id">
                    {{--kt_select2_group_2--}}
                    <option value="">Не выбрано</option>
                    @php /** @var \App\Models\Catalog\ProductGroup $group */ @endphp
                    @foreach($selectGroups as $group):
                    <option id="option-{{$group->id}}" {{(isset($product->group_id) && $product->group->id == $group->id) ? 'selected' : ''}} value="{{$group->id}}">{{$group->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label>Изображение</label>
        <div class="input-group">
            <input type="text" id="image_label" class="form-control" name="image"
                   aria-label="Image" aria-describedby="button-image">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label>Slug</label>
        <div class="col-lg-12 col-md-9 col-sm-12">
            <input type="text" class="form-control" aria-describedby="" placeholder="Адрес страницы" name="slug" value="{{(isset($product)) ? $product->slug : ''}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Статус товара</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
            <select class="form-control kt-select2" id="kt_select2_10" name="status">
                <option value="1">Включено</option>
                <option
                    @if (isset($product))
                    {{($product->status == 0 ? 'selected' : '')}}
                    @endif
                    value="0">Отключено
                </option>
            </select>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('button-image').addEventListener('click', (event) => {
            event.preventDefault();

            window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        });
    });

    // set file link
    function fmSetLink($url) {
        document.getElementById('image_label').value = $url;
    }
</script>