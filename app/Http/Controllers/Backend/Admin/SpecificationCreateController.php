<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Model\Specific_addon;
use App\Model\Specific_alignment;
use App\Model\Specific_background;
use App\Model\Specific_color;
use App\Model\Specific_dpi;
use App\Model\Specific_file_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpecificationCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.admin.specification.index-market-specification');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $File_Type = Specific_file_type::latest()->get();
        $Background = Specific_background::latest()->get();
        $Alignment = Specific_alignment::latest()->get();
        $Color = Specific_color::latest()->get();
        $Dpi = Specific_dpi::latest()->get();
        return view('backend.admin.specification.create-market-specification', compact('File_Type','Background','Alignment','Color','Dpi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'file_type' =>  'required',
        //     'background' =>  'required',
        //     'alignment' =>  'required',
        //     'color'     =>  'required',
        //     'margin'    =>  'required',
        //     'dpi'       =>  'required',
        //     'category_name' =>  'required',
        //     'category_image'    =>  'required|mimes:jpg,jpeg,png,gif'
        // ]);

        // $file = implode(',', $request->file_type);
        // $background = implode(',', $request->background);
        // $align = implode(',', $request->alignment);
        // $color = implode(',', $request->color);
        // $margin = implode(',', $request->margin);
        // $dpi = implode(',', $request->dpi);

        // $Spacification = Spacification::create([
        //     'creator_id'    =>  Auth::user()->id,
        //     'file_type_id'  =>  $file,
        //     'background_id' =>  $background,
        //     'alignment_id' =>  $align,
        //     'nargin_id' =>  $margin,
        //     'dpi_id' =>  $dpi,
        // ]);

        return redirect()->back();
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
        //
    }
}
