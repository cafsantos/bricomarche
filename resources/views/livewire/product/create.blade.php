<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('product.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.product.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="product.name">
        <div class="validation-message">
            {{ $errors->first('product.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('product.slug') ? 'invalid' : '' }}">
        <label class="form-label" for="slug">{{ trans('cruds.product.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" wire:model.defer="product.slug">
        <div class="validation-message">
            {{ $errors->first('product.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.slug_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('family') ? 'invalid' : '' }}">
        <label class="form-label" for="family">{{ trans('cruds.product.fields.family') }}</label>
        <x-select-list class="form-control" id="family" name="family" wire:model="family" :options="$this->listsForFields['family']" multiple />
        <div class="validation-message">
            {{ $errors->first('family') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.family_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.product_thumbnail') ? 'invalid' : '' }}">
        <label class="form-label" for="thumbnail">{{ trans('cruds.product.fields.thumbnail') }}</label>
        <x-dropzone id="thumbnail" name="thumbnail" action="{{ route('admin.products.storeMedia') }}" collection-name="product_thumbnail" max-file-size="5" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.product_thumbnail') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.product.fields.thumbnail_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>