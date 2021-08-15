
<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
	<div class="form-group row">
			<label>Название товара*</label>
			<div class="col-lg-12 col-md-9 col-sm-12">
					<input type="text"
					   @php /** @var \Illuminate\Support\ViewErrorBag $errors */@endphp
						class="form-control {{($errors->has('name')) ? 'alert alert-outline-danger fade show' : ''}}"
						role="alert"
						aria-describedby=""
						placeholder="{{ ($errors->has('name')) ? $errors->first('name') : 'Название товара' }}"
						name="name"
					   @php /** @var \App\Models\Catalog\Product $product */@endphp
						value="{{(isset($product)) ? $product->name : old('name')}}"
					>
			</div>
	</div>
	<div class="form-group row">
			<label for="exampleTextarea">Описание</label>
			<div class="col-lg-12 col-md-9 col-sm-12">
					<div class="col-lg-12 col-md-9 col-sm-12">
							<div class="summernote" id="kt_summernote_1" title="content">
								{!! (isset($product)) ? $product->content : '' !!}
							</div>
					</div>
					<input type="hidden" id="content" name="content">
			</div>
	</div>
	<div class="form-group row">
			<label >Мета-тег Title</label>
			<div class="col-lg-12 col-md-9 col-sm-12">
					<input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Title" name="meta_title" value="{{(isset($product)) ? $product->meta_title : ''}}">
			</div>
	</div>
	<div class="form-group row">
			<label>Мета-тег Description</label>
			<div class="col-lg-12 col-md-9 col-sm-12">
					<textarea class="form-control" aria-describedby="" placeholder="Мета-тег Description" rows="3" name="meta_description">{{(isset($product)) ? $product->meta_description : ''}}</textarea>
			</div>
	</div>
	<div class="form-group row">
			<label>Мета-тег Keywords</label>
			<div class="col-lg-12 col-md-9 col-sm-12">
					<input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Keywords" name="meta_keyword" value="{{(isset($product)) ? $product->meta_keywords : ''}}">
			</div>
	</div>
</div>