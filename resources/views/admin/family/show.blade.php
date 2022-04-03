@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.family.title_singular') }}:
                    {{ trans('cruds.family.fields.id') }}
                    {{ $family->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.family.fields.id') }}
                            </th>
                            <td>
                                {{ $family->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.family.fields.name') }}
                            </th>
                            <td>
                                {{ $family->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.family.fields.slug') }}
                            </th>
                            <td>
                                {{ $family->slug }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.family.fields.description') }}
                            </th>
                            <td>
                                {{ $family->description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.family.fields.parent') }}
                            </th>
                            <td>
                                @if($family->parent)
                                    <span class="badge badge-relationship">{{ $family->parent->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('family_edit')
                    <a href="{{ route('admin.families.edit', $family) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.families.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection