<?php

namespace App\Util;
use App\Interfaces\ImageStorage;
use Illuminate\Support\Facades\Storage;

// Juan José Escudero

class ImageLocalStorage implements ImageStorage 
{

    public function store($request, $filepath)
    {
        if($request->hasFile('image')) {    
            Storage::disk('public')->put($filepath, file_get_contents($request->file('image')->getRealPath()));
        }
    }

}