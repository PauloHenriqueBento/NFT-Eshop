<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function create(){
        return view('tag.create');
    }

    public function store(Request $request){
        Tag::create($request->all());
        session()->flash('success', 'Tag criada com sucesso');
        return redirect(route('tag.index'));
    }

    public function index(){
        return view('tag.index')->with('tags', Tag::all());
    }

    public function destroy(Tag $tag){
        $tag->delete();
        session()->flash('success', 'Tag apagada com sucesso');
        return redirect(route('tag.index'));
    }

    public function edit(Tag $tag){
        return view('tag.edit')->with('tag',$tag);
    }

    public function update(Tag $tag, Request $request){
        $tag->update($request->all());
        session()->flash('success', 'Tag editada com sucesso');
        return redirect(route('tag.index'));
    }

    public function trash(Tag $tag, Request $request){
        return view('tag.trash')->with('tags',Tag::onlyTrashed()->get());
    }

    public function restore($tag_id){
        $tag = Tag::onlyTrashed()->where('id', $tag_id)->first();
        $tag->restore();
        session()->flash('success', 'Tag restaurada com sucesso');
        return redirect(route('tag.index'));
    }
}
