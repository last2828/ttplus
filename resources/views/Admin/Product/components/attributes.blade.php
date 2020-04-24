<div class="tab-pane " id="kt_tabs_1_4" role="tabpanel">
    <label class="col-md-12 col-form-label">Характеристики</label>
    @if(isset($productAttributes))
    <div id="kt_repeater_2">
        @foreach($productAttributes as $productAttribute)
            <div data-repeater-list="attributes_old" class="col-lg-12">
                <div data-repeater-item class="form-group row align-items-center">
                    <div class="col-md-4">
                        <div class="kt-form__group--inline">
                            <div class="kt-form__control">
                                <p>{{$productAttribute->attribute['name']}}</p><input type="hidden" value="{{$productAttribute->id}}" name="id"><input type="hidden" value="{{$productAttribute->attribute_id}}" name="attribute_id">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kt-form__group--inline">
                            <div class="kt-form__control">
                                <input type="text"
                                       class="form-control {{($errors->has('attributes_old.*.value')) ? 'alert alert-outline-danger fade show' : ''}}"
                                       role="alert"
                                       placeholder="{{ ($errors->has('attributes_old.*.value')) ? $errors->first('attributes_old.*.value') : 'Введите значение характеристики'}}"
                                       name="value" value="{{$productAttribute->value}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
                            <i class="la la-trash-o"></i>
                            Удалить
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endif
    <div id="kt_repeater_1">
        <div class="form-group row" id="kt_repeater_1">
            <div data-repeater-list="attributes" class="col-lg-12">
                <div data-repeater-item class="form-group row align-items-center">
                    <div class="col-md-4">
                        <div class="kt-form__group--inline">
                            <div class="kt-form__control">
                                <select name="attribute_id" class="form-control">
                                    {{ ($errors->has('attributes.*.attribute_id')) ? $errors->first('attributes.*.attribute_id') : ''}}
                                    @foreach($attributes as $attribute)
                                        <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kt-form__group--inline">
                            <div class="kt-form__control">
                                <input type="text"
                                       class="form-control {{($errors->has('attributes.*.value')) ? 'alert alert-outline-danger fade show' : ''}}"
                                       role="alert"
                                       placeholder="{{ ($errors->has('attributes.*.value')) ? $errors->first('attributes.*.value') : 'Введите значение характеристики'}}"
                                       name="value">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
                            <i class="la la-trash-o"></i>
                            Удалить
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
                    <i class="la la-plus"></i> Добавить
                </a>
            </div>
        </div>
    </div>
</div>