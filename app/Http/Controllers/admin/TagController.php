<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\admin\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.tags.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('dashboard.tags.create', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        if ($request->hasFile('image')) {
            // Salva a nova imagem
            $image = $this->resizeImage($request->image);
            $image = $this->saveImage($image, '/tags', '');
        } else {
            // Mantém a imagem existente se nenhuma nova imagem for enviada
            $image = $tag->image;
        }

        // Atualiza os dados da categoria
        $tag->update([
            'title' => $request->title,
            'description' => $request->description,
            'color' => $request->color,
            'image' => $image,
        ]);

        return redirect()->route('tags.edit', $tag)->banner('Tag atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
