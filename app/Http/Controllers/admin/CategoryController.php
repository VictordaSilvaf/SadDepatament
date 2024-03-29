<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\admin\Category;
use App\Traits\Images;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    use Images;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $this->resizeImage($request->image);
            $image = $this->saveImage($image, '/categories', '');
        };

        auth()->user()->categories()->create([
            'title' => $request->title,
            'description' => $request->description ?? null,
            'color' => $request->color,
            'image' => $image ?? null,
        ]);

        return redirect()->route('categories.index')->banner('Nova categoria criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public
    function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public
    function edit(Category $category)
    {
        return view('dashboard.categories.create', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public
    function update(UpdateCategoryRequest $request, Category $category)
    {
        if ($request->hasFile('image')) {
            // Salva a nova imagem
            $image = $this->resizeImage($request->image);
            $image = $this->saveImage($image, '/categories', '');
        } else {
            // Mantém a imagem existente se nenhuma nova imagem for enviada
            $image = $category->image;
        }

        // Atualiza os dados da categoria
        $category->update([
            'title' => $request->title,
            'description' => $request->description ?? null,
            'color' => $request->color,
            'image' => $image ?? null,
        ]);

        return redirect()->route('categories.edit', $category)->banner('Categoria atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy(Category $category)
    {
        //
    }
}
