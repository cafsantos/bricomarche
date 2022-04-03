@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.family.title_singular') }}:
                    {{ trans('cruds.family.fields.id') }}
                    {{ $family->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('family.edit', [$family])
        </div>
    </div>
</div>
@endsection