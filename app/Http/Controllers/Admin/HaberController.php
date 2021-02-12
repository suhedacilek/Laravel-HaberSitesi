<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Haber;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HaberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Haber::all();
        return view('admin.haber', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::with('children')->get();
        return view('admin.haber_add', ['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Haber;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');
        $data->type = $request->input('type');
        $data->user_id = Auth::id();
        $data->status = $request->input('status');
        $data->image = Storage::putFile('images', $request->file('image'));

        $data->save();
        return redirect()->route('admin_haber');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Haber  $haber
     * @return \Illuminate\Http\Response
     */
    public function show(Haber $haber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Haber $haber
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Haber $haber, $id)
    {
        $data = Haber::find($id);
        $datalist = Category::with('children')->get();

        return view('admin.haber_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Haber $haber
     * @param $id
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Haber $haber, $id,User $user)
    {
        $data = Haber::find($id);
        $data-> title = $request->input('title');
        $data-> keywords = $request->input('keywords');
        $data-> description = $request->input('description');
        $data-> slug = $request->input('slug');
        $data-> category_id = $request->input('category_id');
        $data-> detail = $request->input('detail');
        $data-> type = $request->input('type');
        $data-> user_id = Auth::id();
        $data-> status = $request->input('status');

        if($request->file('image') != null){

            $data->image = Storage::putFile('images', $request->file('image'));
        }
        $data -> save();

        return redirect()->route('admin_haber');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Haber $haber
     * @param $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Haber $haber, $id)
    {
        $data = Haber::find($id);
        $data ->delete();

        return redirect()->route('admin_haber');
    }
}
