<div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
  <div class="form-group row">
      <label>Код товара</label>
      <div class="col-lg-12 col-md-9 col-sm-12">
          <input type="text" class="form-control" aria-describedby="" placeholder="Код товара" name="model" value="{{(isset($product)) ? $product['model'] : ''}}">
      </div>
  </div>
  <div class="form-group row">
    <label>Изображение</label>
    <div class="col-lg-12 col-md-9 col-sm-12">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="file">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>
  </div>
  
  <div class="form-group row">
      <label>Slug</label>
      <div class="col-lg-12 col-md-9 col-sm-12">
          <input type="text" class="form-control" aria-describedby="" placeholder="slug" name="slug" value="{{(isset($product)) ? $product['slug'] : ''}}">
      </div>
  </div>
  <div class="form-group row">
      <label class="col-form-label col-lg-3 col-sm-12">Статус товара</label>
      <div class=" col-lg-4 col-md-9 col-sm-12">
          <select class="form-control kt-select2" id="kt_select2_10" name="status">
              <option value="1">Включено</option>
                <option 
                @if (isset($product))
                  {{($product['status'] == 0 ? 'selected' : '')}} 
                @endif
                value="0">Отключено
              </option>
          </select>
      </div>
  </div>
</div>