@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.store.title_singular') }}:
                    {{ trans('cruds.store.fields.id') }}
                    {{ $store->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.id') }}
                            </th>
                            <td>
                                {{ $store->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.name') }}
                            </th>
                            <td>
                                {{ $store->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.slug') }}
                            </th>
                            <td>
                                {{ $store->slug }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.click_collect') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $store->click_collect ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.address') }}
                            </th>
                            <td>
                                {{ $store->address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.locality') }}
                            </th>
                            <td>
                                {{ $store->locality }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.zipcode') }}
                            </th>
                            <td>
                                {{ $store->zipcode }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.distrito') }}
                            </th>
                            <td>
                                {{ $store->distrito }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.concelho') }}
                            </th>
                            <td>
                                {{ $store->concelho }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.phone_number') }}
                            </th>
                            <td>
                                {{ $store->phone_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.fax_number') }}
                            </th>
                            <td>
                                {{ $store->fax_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.main_email') }}
                            </th>
                            <td>
                                {{ $store->main_email }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.secundary_email') }}
                            </th>
                            <td>
                                {{ $store->secundary_email }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.recruitment_email') }}
                            </th>
                            <td>
                                {{ $store->recruitment_email }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.schedule') }}
                            </th>
                            <td>
                                {{ $store->schedule }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.store.fields.coordinates') }}
                            </th>
                            <td>
                                {{ $store->coordinates }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('store_edit')
                    <a href="{{ route('admin.stores.edit', $store) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.stores.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection