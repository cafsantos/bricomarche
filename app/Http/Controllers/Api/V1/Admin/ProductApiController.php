<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadTrait;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\Admin\ProductResource;
use App\Models\Product;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductApiController extends Controller
{
    use MediaUploadTrait;

    public function index()
    {
        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProductResource(Product::with(['family'])->get());
    }

    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());
        $product->family()->sync($request->input('family', []));
        if ($request->input('product_thumbnail', false)) {
            $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('product_thumbnail'))))->toMediaCollection('product_thumbnail');
        }

        return (new ProductResource($product))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Product $product)
    {
        abort_if(Gate::denies('product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProductResource($product->load(['family']));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        $product->family()->sync($request->input('family', []));
        if ($request->input('product_thumbnail', false)) {
            if (!$product->product_thumbnail || $request->input('product_thumbnail') !== $product->product_thumbnail->file_name) {
                if ($product->product_thumbnail) {
                    $product->product_thumbnail->delete();
                }
                $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('product_thumbnail'))))->toMediaCollection('product_thumbnail');
            }
        } elseif ($product->product_thumbnail) {
            $product->product_thumbnail->delete();
        }

        return (new ProductResource($product))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Product $product)
    {
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
