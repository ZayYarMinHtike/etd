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
                'resources' => $resources,
                
            ]);
            
        }else {
             echo "there is nothing like that result";
        }
    }

    public function filter(Request $request) {
        $q = $request->q;
        $author = $request->author;
        $topic = $request->topic;
        $company = $request->company;
        $supervisor = $request->supervisor;

        $resources = Resource::search($q); 
        $resources = $resources->where('name','LIKE','%'.$author.'%');
        $resources = $resources->where('company','LIKE','%'.$company.'%');
        $resources = $resources->where('supervisor','LIKE','%'.$supervisor.'%');    
        

        $resources = $resources->latest()->paginate(5);             
        if(count($resources) > 0) {
            return view('blog', [
                'resources' => $resources,
                'q' => $q,
                'author' => $author
            ]);
        }else {
             echo "there is nothing like that result";
        }
    }
    
}
