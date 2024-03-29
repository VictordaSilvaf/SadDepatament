<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Intervention\Image\Laravel\Facades\Image;
use Spatie\ImageOptimizer\OptimizerChainFactory;

trait Images
{
    /**
     * Otimiza a imagem selecionada e corta ela.
     */
    public function resizeImage(\Intervention\Image\Image|UploadedFile $image, ?int $width = null, ?int $height = null): \Intervention\Image\Image|bool|UploadedFile
    {
        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain->optimize($image);

        if ($width || $height) {
            $imageResized = Image::read($image->getRealPath());
            $imageResized->cover((int) $width, $height, 'center');

            return $imageResized;
        }

        return $image;
    }

    /**
     * Salva a imagem no armazenamento público e retorna o caminho da imagem.
     */
    protected function saveImage(UploadedFile|\Intervention\Image\Image $image, string $directory, ?string $filename = null): ?string
    {
        if (! $filename) {
            $filename = uniqid().'.'.$image->getClientOriginalExtension();
        }

        $imagePath = $image->storeAs($directory, $filename, 'public');

        if ($imagePath) {
            return $imagePath;
        }

        return null;
    }
}
