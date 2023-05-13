<?php

namespace App\Http\Controllers;

use App\Models\BranchType;
use App\Models\Institute;
use Illuminate\Http\Request;

class BranchTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bramchTypes = BranchType::get()->dd();

        return view('branch_type.index', compact(['bramchTypes', 'request']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model= new BranchType();
        return view('branch_type.create',compact(['model']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $types = new BranchType();
        $types->name = !empty($request->name) ? $request->name : NULL;
        $types->phone = ($request->phone) ? $request->phone : true;
        $types->amount = ($request->amount) ? $request->amount : true;
        if ($types->save()) {
            return redirect()->route('branch-type.index')->with('success', 'Branch Type Added successfully.');
        } else {
            return back()->with('error', 'Something is Missing;');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BranchType  $branchType
     * @return \Illuminate\Http\Response
     */
    public function show(BranchType $branchType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BranchType  $branchType
     * @return \Illuminate\Http\Response
     */
    public function edit(BranchType $branchType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BranchType  $branchType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BranchType $branchType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BranchType  $branchType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BranchType $branchType)
    {
        //
    }


}
