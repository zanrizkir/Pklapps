<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        $pelajaran = Pelajaran::all();

        return view('post.pelajaran', compact('pelajaran'));
    }
}
