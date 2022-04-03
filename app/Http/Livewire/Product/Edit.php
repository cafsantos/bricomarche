<?php

namespace App\Http\Livewire\Product;

use App\Models\Family;
use App\Models\Product;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Product $product;

    public array $family = [];

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->family  = $this->product->family()->pluck('id')->toArray();
        $this->initListsForFields();
        $this->mediaCollections = [
            'product_thumbnail' => $product->thumbnail,
        ];
    }

    public function render()
    {
        return view('livewire.product.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->product->save();
        $this->product->family()->sync($this->family);
        $this->syncMedia();

        return redirect()->route('admin.products.index');
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->product->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }

    protected function rules(): array
    {
        return [
            'product.name' => [
                'string',
                'nullable',
            ],
            'product.slug' => [
                'string',
                'nullable',
            ],
            'family' => [
                'array',
            ],
            'family.*.id' => [
                'integer',
                'exists:families,id',
            ],
            'mediaCollections.product_thumbnail' => [
                'array',
                'nullable',
            ],
            'mediaCollections.product_thumbnail.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['family'] = Family::pluck('name', 'id')->toArray();
    }
}
