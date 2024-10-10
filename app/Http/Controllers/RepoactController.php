<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class RepoactController extends Controller
{
    public function create()
    {
    return view("forms.repoact");
    }

    public function Repoact(request $request)
    {
        $post = new Post();
        $post->nombre = $request->nombre;

        if($request->hasFile("imagen"))
        {
        $nombreimagen=Str::slug($request->nombre).time().'.'.$imagen->getClientOriginalExtension();
        $ruta = public_path("img/post/");
        copy($imagen->getRealPath(),$ruta.$nombreimagen);
        $post->imagen = $nombreimagen;
        }

        $post->save();
    }



}
