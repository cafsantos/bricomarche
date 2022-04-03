@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.family.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('family_create')
                    <a class="btn btn-indigo" href="{{ route('admin.families.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.family.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('family.index')

    </div>
</div>
@endsection