<?php

namespace App\Http\Requests;

use App\Models\Family;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFamilyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('family_create'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'slug' => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'parent_id' => [
                'integer',
                'exists:families,id',
                'nullable',
            ],
        ];
    }
}
