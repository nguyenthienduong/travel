<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('layouts/home',['post' => $post] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Post::find($id);
        if ($p == null)
            return redirect('/thongbao');
        $p->delete();
        return redirect('/');
    }
    public function them()
    {
        return view('layouts/themtin');
    }
    public function them_()
    {
        $p = new Post;
        $p->tieude = $_POST['tieude'];
        $p->noidung = $_POST['noidung'];
        $p->tomtat = $_POST['tomtat'];
        $p->hinh = $_POST['hinh'];
        $p->save();
        return redirect('/');
    }
    public function capnhat($id)
    {
        // $p = Post::find($id);
        $tin = Post::where('id', $id)->first();
        if ($tin == null)
            return redirect('/thongbao');
        return view('layouts/capnhattin', ['tin' => $tin ]);
    }
    public function capnhat_($id)
    {
        $p = Post::find($id);
        if ($p == null)
            return redirect('/thongbao');
        $p->tieude = $_POST['tieude'];
        $p->noidung = $_POST['noidung'];
        $p->tomtat = $_POST['tomtat'];
        $p->hinh = $_POST['hinh'];
        $p->save();
        return redirect('');
    }
    // public function dangnhap()
    // {
    //     return view('layouts/home');
    // }
}
