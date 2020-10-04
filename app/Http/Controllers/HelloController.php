<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller {

    public function index(Request $request) {
        $items = DB::table('people')->get();
        return view('hello.index', ['items'=> $items]);
    }

    public function post(Request $request){
        $items = DB::table('people')->get();
        return view('hello.index', ['items'=> $items]);
    }

    public function add(Request $request) {
        return view('hello.add');
    }

    public function create(Request $request) {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age'  => $request->age,
        ];
        DB::table('people')->insert($param);
        return redirect('/hello');
    }

    public function edit(Request $request) {
        $id   = $request->id;
        $item = DB::table('people')->where('id', $id)->first();
        return view('hello.edit', ['form'=>$item]);
    }

    public function update(Request $request) {
        $param = [
            'id'   =>$request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age'  => $request->age,
        ];
        // DB::update('UPDATE people SET name=:name, mail=:mail, age=:age WHERE id=:id', $param);
        DB::table('people')
            ->where('id', $request->id)
            ->update($param);
        return redirect('/hello');
    }

    public function del(Request $request) {
        $id   = $request->id;
        $item = DB::table('people')->where('id', $id)->first();
        return view('hello.del', ['form'=>$item]);
    }

    public function remove(Request $request) {
        $param = ['id' => $request->id];
        DB::table('people')->where('id', $request->id)->delete($param);
        return redirect('/hello');
    }

    public function show(Request $request) {
        $id   = $request->id;
        $items = DB::table('people')->where('id','<=', $id)->get();
        return view('hello.show', ['items'=>$items]);
    }


}
