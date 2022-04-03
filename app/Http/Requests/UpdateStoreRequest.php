<?php

namespace App\Http\Requests;

use App\Models\Store;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStoreRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('store_edit'),
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
            'click_collect' => [
                'boolean',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'locality' => [
                'string',
                'nullable',
            ],
            'zipcode' => [
                'string',
                'nullable',
            ],
            'distrito' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'concelho' => [
                'string',
                'nullable',
            ],
            'phone_number' => [
                'string',
                'nullable',
            ],
            'fax_number' => [
                'string',
                'nullable',
            ],
            'main_email' => [
                'string',
                'nullable',
            ],
            'secundary_email' => [
                'string',
                'nullable',
            ],
            'recruitment_email' => [
                'string',
                'nullable',
            ],
            'schedule' => [
                'string',
                'nullable',
            ],
            'coordinates' => [
                'string',
                'nullable',
            ],
        ];
    }
}
