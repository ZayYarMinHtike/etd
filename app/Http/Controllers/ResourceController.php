<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resource;
use Illuminate\Support\Facades\Input;

class ResourceController extends Controller
{
    public function all() {
        return view('search', [
            'resources' => Resource::latest()->paginate(5)
        ]);
    }
}
