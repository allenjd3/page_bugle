<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultResource extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $default_pages = \App\DefaultPages::all();
        return view('adminthemes.adminlte.default_resource.index', compact('default_pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminthemes.adminlte.default_resource.create_default');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $default_page = new \App\DefaultPages;
        $default_page->default_table = $request->default_table;
        try {
        $default_page->save();
        }
        catch(Exception $e) {
            return back();
        }
        return redirect('/admin/default_pages')->with('status','Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $default_page = \App\DefaultPages::find($id)->first();
        return view('adminthemes.adminlte.default_resource.show_default', compact('default_page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $default_page = \App\DefaultPages::find($id);
        return view('adminthemes.adminlte.default_resource.edit_default', compact('default_page'));
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
        $default_page = \App\DefaultPages::find($id);

        $default_page->default_table = $request->default_table;
        $default_page->save();
        return redirect('/admin/default_pages')->with('status','Successfully updated number '.$id.' successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $default_page = \App\DefaultPages::find($id);
        $default_page->delete();
        return redirect('/admin/default_pages')->with('status','Deleted number '.$id.' successfully');
    }
}
