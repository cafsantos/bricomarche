<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('family.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.family.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="family.name">
        <div class="validation-message">
            {{ $errors->first('family.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.family.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('family.slug') ? 'invalid' : '' }}">
        <label class="form-label" for="slug">{{ trans('cruds.family.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" wire:model.defer="family.slug">
        <div class="validation-message">
            {{ $errors->first('family.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.family.fields.slug_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('family.description') ? 'invalid' : '' }}">
        <label class="form-label" for="description">{{ trans('cruds.family.fields.description') }}</label>
        <input class="form-control" type="text" name="description" id="description" wire:model.defer="family.description">
        <div class="validation-message">
            {{ $errors->first('family.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.family.fields.description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('family.parent_id') ? 'invalid' : '' }}">
        <label class="form-label" for="parent">{{ trans('cruds.family.fields.parent') }}</label>
        <x-select-list class="form-control" id="parent" name="parent" :options="$this->listsForFields['parent']" wire:model="family.parent_id" />
        <div class="validation-message">
            {{ $errors->first('family.parent_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.family.fields.parent_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.families.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>