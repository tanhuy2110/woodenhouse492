<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use App\Category;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $menus = Menu::all();
        return view('admin.menu', compact ('categories', 'menus'));
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

        $validator = Validator::make($request->all(),
            [
                'selectCategoryId' => 'required',
                'nameFood' => 'required|unique:menus,name',
                'priceFood' => 'required|numeric',
            ]
        );
        if( $validator->passes() ) {

            $data = $request->all();
            $image = $data['imageFood'];
            unset($data['imageFood']);
            $extension = $image->getClientOriginalExtension();
            $fileName = uniqid() . '_' .time() . '.' .$extension;

            $createMenu = new Menu;
            $createMenu->category_id = $data['selectCategoryId'];
            $createMenu->name = $data['nameFood'];
            $createMenu->price = $data['priceFood'];
            $createMenu->description = $data['decriptionFood'];
            $image->move(public_path('\images\menus'), $fileName);
            $createMenu->images = $fileName;
            $createMenu->save();
            //return response()->json($createMenu);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'price' => 'required',
            ]
        );
        if( $validator->passes() ) {
            $editMenu = Menu::findOrFail($id)->update($request->all());
            return response()->json($editMenu);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::findOrFail($id)->delete();
        return response()->json(['done']);
    }

    public function listMenuCustomer()
    {
        $menus = Menu::all();
        return view('custommer.layout.menu', compact('menus'));
    }
}
