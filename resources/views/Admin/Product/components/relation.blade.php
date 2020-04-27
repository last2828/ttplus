{{--<div class="tab-pane" id="kt_tabs_1_3" role="tabpanel">--}}
  {{--<div class="form-group row">--}}
    {{--<label class="col-form-label col-lg-3 col-sm-12">Главная категория</label>--}}
    {{--<div class="col-lg-4 col-md-9 col-sm-12">--}}
      {{--<select class="form-control kt-select2" id="kt_select2_2" name="category_id">--}}
        {{--@foreach($categories as $category)--}}
          {{--@if (isset($product))--}}
            {{--<option {{($product->category['id'] == $category['id']) ? 'selected' : ''}} value="{{$category['id']}}">{{$category['name']}}</option>    --}}
          {{--@else--}}
            {{--<option value="{{$category['id']}}">{{$category['name']}}</option>--}}
          {{--@endif--}}
        {{--@endforeach--}}
      {{--</select>--}}
    {{--</div>--}}
  {{--</div>--}}
  <div class="form-group row">
    <label class="col-form-label col-lg-3 col-sm-12">Группа товаров</label>
    <div class="col-lg-4 col-md-9 col-sm-12">
      <div class="input-group flex-nowrap mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="flaticon2-graph-2"></i></span>
        </div>
        <select class="form-control kt-select2" id="kt_select2_group_1" name="group_id">
          @foreach($groups as $group):
            @if (isset($product))
              <option {{($product->group['id'] == $group['id']) ? 'selected' : ''}} value="{{$group['id']}}">{{$group['name']}}</option>
            @else
              <option value="{{$group['id']}}">{{$group['name']}}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>
  </div>
</div>