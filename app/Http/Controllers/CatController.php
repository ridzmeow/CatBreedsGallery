<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;

class CatController extends Controller
{
    public function index() {
        $data = Cat::all();
        return view('cats.index', ['cats' => $data]);
    }

    public function create() {
        return view('cats.create');
    }

    public function store() {

        $data = new Cat();
        $data->breed = request('breed');
        $data->type = request('type');
        $data->coatLength = request('coatLength');

        $data->save();
        return  redirect('/cats')->with('mssg','Successfully Saved.');
    }

    public function show($id) {
        $cat = Cat::find($id);
        return view('cats.edit', ['cat' => $cat]);
    }

    public function update(Request $request) {

        $data = Cat::find($request->id);
        $data->breed = $request->breed;
        $data->type = $request->type;
        $data->coatLength = $request->coatLength;

        $data->save();

        return redirect('/cats')->with('mssg','Successfully Updated.');
    }

    public function destroy($id) {

        $data = Cat::find($id);
        $data->delete();

        return redirect('/cats')->with('mssg','Deleted.');
    }
}
