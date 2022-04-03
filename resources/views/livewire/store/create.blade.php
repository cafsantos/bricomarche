<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('store.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.store.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="store.name">
        <div class="validation-message">
            {{ $errors->first('store.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.slug') ? 'invalid' : '' }}">
        <label class="form-label" for="slug">{{ trans('cruds.store.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" wire:model.defer="store.slug">
        <div class="validation-message">
            {{ $errors->first('store.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.slug_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.click_collect') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="click_collect" id="click_collect" wire:model.defer="store.click_collect">
        <label class="form-label inline ml-1" for="click_collect">{{ trans('cruds.store.fields.click_collect') }}</label>
        <div class="validation-message">
            {{ $errors->first('store.click_collect') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.click_collect_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.address') ? 'invalid' : '' }}">
        <label class="form-label" for="address">{{ trans('cruds.store.fields.address') }}</label>
        <textarea class="form-control" name="address" id="address" wire:model.defer="store.address" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('store.address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.locality') ? 'invalid' : '' }}">
        <label class="form-label" for="locality">{{ trans('cruds.store.fields.locality') }}</label>
        <input class="form-control" type="text" name="locality" id="locality" wire:model.defer="store.locality">
        <div class="validation-message">
            {{ $errors->first('store.locality') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.locality_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.zipcode') ? 'invalid' : '' }}">
        <label class="form-label" for="zipcode">{{ trans('cruds.store.fields.zipcode') }}</label>
        <input class="form-control" type="text" name="zipcode" id="zipcode" wire:model.defer="store.zipcode">
        <div class="validation-message">
            {{ $errors->first('store.zipcode') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.zipcode_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.distrito') ? 'invalid' : '' }}">
        <label class="form-label" for="distrito">{{ trans('cruds.store.fields.distrito') }}</label>
        <input class="form-control" type="number" name="distrito" id="distrito" wire:model.defer="store.distrito" step="1">
        <div class="validation-message">
            {{ $errors->first('store.distrito') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.distrito_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.concelho') ? 'invalid' : '' }}">
        <label class="form-label" for="concelho">{{ trans('cruds.store.fields.concelho') }}</label>
        <input class="form-control" type="text" name="concelho" id="concelho" wire:model.defer="store.concelho">
        <div class="validation-message">
            {{ $errors->first('store.concelho') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.concelho_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.phone_number') ? 'invalid' : '' }}">
        <label class="form-label" for="phone_number">{{ trans('cruds.store.fields.phone_number') }}</label>
        <input class="form-control" type="text" name="phone_number" id="phone_number" wire:model.defer="store.phone_number">
        <div class="validation-message">
            {{ $errors->first('store.phone_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.phone_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.fax_number') ? 'invalid' : '' }}">
        <label class="form-label" for="fax_number">{{ trans('cruds.store.fields.fax_number') }}</label>
        <input class="form-control" type="text" name="fax_number" id="fax_number" wire:model.defer="store.fax_number">
        <div class="validation-message">
            {{ $errors->first('store.fax_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.fax_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.main_email') ? 'invalid' : '' }}">
        <label class="form-label" for="main_email">{{ trans('cruds.store.fields.main_email') }}</label>
        <input class="form-control" type="text" name="main_email" id="main_email" wire:model.defer="store.main_email">
        <div class="validation-message">
            {{ $errors->first('store.main_email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.main_email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.secundary_email') ? 'invalid' : '' }}">
        <label class="form-label" for="secundary_email">{{ trans('cruds.store.fields.secundary_email') }}</label>
        <input class="form-control" type="text" name="secundary_email" id="secundary_email" wire:model.defer="store.secundary_email">
        <div class="validation-message">
            {{ $errors->first('store.secundary_email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.secundary_email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.recruitment_email') ? 'invalid' : '' }}">
        <label class="form-label" for="recruitment_email">{{ trans('cruds.store.fields.recruitment_email') }}</label>
        <input class="form-control" type="text" name="recruitment_email" id="recruitment_email" wire:model.defer="store.recruitment_email">
        <div class="validation-message">
            {{ $errors->first('store.recruitment_email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.recruitment_email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.schedule') ? 'invalid' : '' }}">
        <label class="form-label" for="schedule">{{ trans('cruds.store.fields.schedule') }}</label>
        <input class="form-control" type="text" name="schedule" id="schedule" wire:model.defer="store.schedule">
        <div class="validation-message">
            {{ $errors->first('store.schedule') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.schedule_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('store.coordinates') ? 'invalid' : '' }}">
        <label class="form-label" for="coordinates">{{ trans('cruds.store.fields.coordinates') }}</label>
        <input class="form-control" type="text" name="coordinates" id="coordinates" wire:model.defer="store.coordinates">
        <div class="validation-message">
            {{ $errors->first('store.coordinates') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.store.fields.coordinates_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.stores.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>