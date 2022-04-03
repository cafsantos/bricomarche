<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFamilyRequest;
use App\Http\Requests\UpdateFamilyRequest;
use App\Http\Resources\Admin\FamilyResource;
use App\Models\Family;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FamilyApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('family_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FamilyResource(Family::with(['parent'])->get());
    }

    public function store(StoreFamilyRequest $request)
    {
        $family = Family::create($request->validated());

        return (new FamilyResource($family))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Family $family)
    {
        abort_if(Gate::denies('family_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FamilyResource($family->load(['parent']));
    }

    public function update(UpdateFamilyRequest $request, Family $family)
    {
        $family->update($request->validated());

        return (new FamilyResource($family))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Family $family)
    {
        abort_if(Gate::denies('family_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $family->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
