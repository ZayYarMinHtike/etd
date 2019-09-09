<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resource;
use Illuminate\Support\Facades\Input;

class ResourceController extends Controller
{
    public function all() {
        return view('blog', [
            'resources' => Resource::latest()->paginate(5)
        ]);
    }

    public function search(Request $request) {
        $q = $request->input('q');
        $resources = Resource::where('title','LIKE','%'.$q.'%')
                        ->orWhere('name','LIKE','%'.$q.'%')
                        ->orWhere('batch','LIKE','%'.$q.'%')
                        ->orWhere('mba/emba','LIKE','%'.$q.'%')
                        ->orWhere('topic','LIKE','%'.$q.'%')
                        ->orWhere('year','LIKE','%'.$q.'%')
                        ->orWhere('company','LIKE','%'.$q.'%')
                        ->orWhere('supervisor','LIKE','%'.$q.'%')
                        ->orWhere('abstract','LIKE','%'.$q.'%')->latest()->paginate(5);
        if(count($resources) > 0) {
            return view('blog', [
                'resources' => $resources
            ]);
        }else {
            return ['message' => 'nothing found'];
        }
    }
}
