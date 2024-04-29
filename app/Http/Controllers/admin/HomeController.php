<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Home;
use App\Traits\Images;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use Images;

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $home = Home::first();
        return view('dashboard.home.create', compact('home'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        return view('dashboard.home.create', $home);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        $request->validate([
            'title_1' => 'string|nullable',
            'image_1' => 'image|nullable',
            'description_1' => 'string|nullable',
            'title_2' => 'string|nullable',
            'image_2' => 'image|nullable',
            'items_2' => 'array|nullable',
            'title_3' => 'string|nullable',
            'image_3' => 'image|nullable',
            'description_3' => 'string|nullable',
            'items_3' => 'array|nullable',
            'images_4.*' => 'image|nullable',
            'title_4' => 'string|nullable',
            'title_5' => 'string|nullable',
            'title_6' => 'string|nullable',
            'title_7' => 'string|nullable',
            'image_7' => 'image|nullable',
            'items_7' => 'array|nullable',
            'title_8' => 'string|nullable',
            'image_9' => 'image|nullable',
        ]);

        if ($home->update($request->except('image_1', 'image_2', 'image_3', 'images_4', 'image_7', 'image_9'))) {
            $this->update_images($request, $home);

            return redirect()->route('dashboard.home.create')->banner('Editado com sucesso!');
        } else {
            return redirect()->back()->dangerBanner('Ocorreu algum erro inesperado');
        }
    }

    private function update_images(Request $request, $model = null): void
    {
        if ($request->hasFile('image_1')) {
            $image = $this->resizeImage($request->image_1);
            $image = $this->saveImage($image, '/home', '');
            if (isset($image)) {
                $model->update(['image_1' => $image]);
            }
        }

        if ($request->hasFile('images_4')) {
            $images = [];
            foreach ($request->file('images_4') as $image) {
                // Redimensionar e salvar a imagem
                $resizedImage = $this->resizeImage($image);
                $images[] = $this->saveImage($resizedImage, '/home', '');
            }
            $model->update(['images_4' => $images]);
        }

        if ($request->hasFile('image_2')) {
            $image = $this->resizeImage($request->image_2);
            $image = $this->saveImage($image, '/home', '');
            if (isset($image)) {
                $model->update(['image_2' => $image]);
            }
        }

        if ($request->hasFile('image_3')) {
            $image = $this->resizeImage($request->image_3);
            $image = $this->saveImage($image, '/home', '');
            if (isset($image)) {
                $model->update(['image_3' => $image]);
            }
        }

//        foreach ($request->images_4 as $item) {
//            if ($request->hasFile('images_4')) {
//                $image = $this->resizeImage($item);
//                $image = $this->saveImage($image, '/home', '');
//                if (isset($image)) {
//                    $model->update(['images_4' => $image]);
//                }
//            }
//        }

        if ($request->hasFile('image_7')) {
            $image = $this->resizeImage($request->image_7);
            $image = $this->saveImage($image, '/home', '');
            if (isset($image)) {
                $model->update(['image_7' => $image]);
            }
        }

        if ($request->hasFile('image_9')) {
            $image = $this->resizeImage($request->image_9);
            $image = $this->saveImage($image, '/home', '');
            if (isset($image)) {
                $model->update(['image_9' => $image]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
