<?php

namespace App\Http\Livewire\Family;

use App\Models\Family;
use Livewire\Component;

class Edit extends Component
{
    public Family $family;

    public array $listsForFields = [];

    public function mount(Family $family)
    {
        $this->family = $family;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.family.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->family->save();

        return redirect()->route('admin.families.index');
    }

    protected function rules(): array
    {
        return [
            'family.name' => [
                'string',
                'nullable',
            ],
            'family.slug' => [
                'string',
                'nullable',
            ],
            'family.description' => [
                'string',
                'nullable',
            ],
            'family.parent_id' => [
                'integer',
                'exists:families,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['parent'] = Family::pluck('name', 'id')->toArray();
    }
}
