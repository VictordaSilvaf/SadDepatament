<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\admin\Blog;
use App\Traits\Images;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use Images;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $request->validate([
            'show_title' => 'string|nullable',
            'show_description' => 'string|nullable',
            'image' => 'image|nullable',
            'title_1' => 'string|nullable',
            'description_1' => 'string|nullable',
            'title_2' => 'string|nullable',
            'subtitle_2' => 'string|nullable',
            'image_2' => 'image|nullable',
            'description_2' => 'string|nullable',
            'image_3' => 'image|nullable',
            'description_3' => 'string|nullable',
            'title_4' => 'string|nullable',
            'image_4' => 'image|nullable',
            'description_4' => 'string|nullable',
        ]);
        // Criação do novo post no banco de dados

        // Se necessário, redirecionamento para uma página específica
        if ($blog = Blog::create($request->except('image', 'image_2', 'image_3', 'image_4'))) {
            $this->update_images($request, $blog);

            return redirect()->route('blogs.index', $blog->id)->banner('Criado com sucesso.');
        } else {
            return redirect()->back()->dangerBanner('Ocorreu algum erro inesperado');
        }
    }

    private function update_images(Request $request, $model = null): void
    {
        if ($request->hasFile('image')) {
            $image = $this->resizeImage($request->image);
            $image = $this->saveImage($image, '/blog', '');
            if (isset($image)) {
                $model->update(['image' => $image]);
            }
        }

        if ($request->hasFile('image_2')) {
            $images = [];
            foreach ($request->file('image_2') as $image) {
                // Redimensionar e salvar a imagem
                $resizedImage = $this->resizeImage($image);
                $images[] = $this->saveImage($resizedImage, '/blog', '');
            }
            $model->update(['image_2' => $images]);
        }

        if ($request->hasFile('image_3')) {
            $image = $this->resizeImage($request->image_3);
            $image = $this->saveImage($image, '/blog', '');
            if (isset($image)) {
                $model->update(['image_3' => $image]);
            }
        }

        if ($request->hasFile('image_4')) {
            $image = $this->resizeImage($request->image_4);
            $image = $this->saveImage($image, '/blog', '');
            if (isset($image)) {
                $model->update(['image_4' => $image]);
            }
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blog.create', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $request->validate([
            'show_title' => 'string|nullable',
            'show_description' => 'string|nullable',
            'image' => 'image|nullable',
            'title_1' => 'string|nullable',
            'description_1' => 'string|nullable',
            'title_2' => 'string|nullable',
            'subtitle_2' => 'string|nullable',
            'image_2' => 'image|nullable',
            'description_2' => 'string|nullable',
            'image_3' => 'image|nullable',
            'description_3' => 'string|nullable',
            'title_4' => 'string|nullable',
            'image_4' => 'image|nullable',
            'description_4' => 'string|nullable',
        ]);
        // Criação do novo post no banco de dados
        // Se necessário, redirecionamento para uma página específica
        if ($blog->update($request->except('image', 'image_2', 'image_3', 'image_4'))) {
            $this->update_images($request, $blog);

            return redirect()->route('blogs.index', $blog->id)->banner('Editado com sucesso.');
        } else {
            return redirect()->back()->dangerBanner('Ocorreu algum erro inesperado');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
