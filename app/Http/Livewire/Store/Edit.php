<?php

namespace App\Http\Livewire\Store;

use App\Models\Store;
use Livewire\Component;

class Edit extends Component
{
    public Store $store;

    public function mount(Store $store)
    {
        $this->store = $store;
    }

    public function render()
    {
        return view('livewire.store.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->store->save();

        return redirect()->route('admin.stores.index');
    }

    protected function rules(): array
    {
        return [
            'store.name' => [
                'string',
                'nullable',
            ],
            'store.slug' => [
                'string',
                'nullable',
            ],
            'store.click_collect' => [
                'boolean',
            ],
            'store.address' => [
                'string',
                'nullable',
            ],
            'store.locality' => [
                'string',
                'nullable',
            ],
            'store.zipcode' => [
                'string',
                'nullable',
            ],
            'store.distrito' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'store.concelho' => [
                'string',
                'nullable',
            ],
            'store.phone_number' => [
                'string',
                'nullable',
            ],
            'store.fax_number' => [
                'string',
                'nullable',
            ],
            'store.main_email' => [
                'string',
                'nullable',
            ],
            'store.secundary_email' => [
                'string',
                'nullable',
            ],
            'store.recruitment_email' => [
                'string',
                'nullable',
            ],
            'store.schedule' => [
                'string',
                'nullable',
            ],
            'store.coordinates' => [
                'string',
                'nullable',
            ],
        ];
    }
}
