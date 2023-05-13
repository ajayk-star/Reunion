<?php

namespace App\Http\Controllers;

use App\Helpers\LocationHelper;
use App\Models\Branch;
use App\Models\BranchType;
use App\Models\Institute;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $branches = Branch::orderBy('id', 'DESC')->paginate();
        // $branchTypes = BranchType::get();
        return view('branch.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Branch();
        return view('branch.create', compact(['model']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branches = new Branch();
        $countryId = $request->country_id;
        $stateId = $request->state_id;
        $cityId = $request->city_id;

        $branches->institute_id = !empty($request->institute_id) ? $request->institute_id : NULL;
        $branches->branch_type_id = !empty($request->branch_type_id) ? $request->branch_type_id : NULL;
        $branches->branch_name = !empty($request->branch_name) ? $request->branch_name : NULL;
        $branches->google_business_address = !empty($request->google_business_address) ? $request->google_business_address : NULL;
        $branches->latitude = !empty($request->latitude) ? $request->latitude : NULL;
        $branches->longitude = !empty($request->longitude) ? $request->longitude : NULL;
        $branches->country_id = $countryId;
        $branches->country_name = LocationHelper::getCountryName($countryId);
        $branches->country_code = LocationHelper::getCountryCode($countryId);
        $branches->state_id = $stateId;
        $branches->state_name = LocationHelper::getStateName($stateId);
        $branches->city_id = $cityId;
        $branches->city_name = LocationHelper::getCityName($stateId, $cityId);
        $branches->area = !empty($request->area) ? $request->area : NULL;
        $branches->area_id = !empty($request->area_id) ? $request->area_id : NULL;
        $branches->pincode = !empty($request->pincode) ? $request->pincode : NULL;
        $branches->status = ($request->status) ? $request->status : true;
        if ($branches->save()) {
            return redirect()->route('branch.index')->with('success', 'Branch Added successfully.');
        } else {
            return back()->with('error', 'Something is Missing;');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        $model = $branch;
        return view('branch.edit', compact(['model']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $branches = $branch;

        $countryId = $request->country_id;
        $stateId = $request->state_id;
        $cityId = $request->city_id;

        $branches->institute_id = !empty($request->institute_id) ? $request->institute_id : NULL;
        $branches->branch_type_id = !empty($request->branch_type_id) ? $request->branch_type_id : NULL;
        $branches->branch_name = !empty($request->branch_name) ? $request->branch_name : NULL;
        $branches->google_business_address = !empty($request->google_business_address) ? $request->google_business_address : NULL;
        $branches->latitude = !empty($request->latitude) ? $request->latitude : NULL;
        $branches->longitude = !empty($request->longitude) ? $request->longitude : NULL;
        $branches->country_id = $countryId;
        $branches->country_name = LocationHelper::getCountryName($countryId);
        $branches->country_code = LocationHelper::getCountryCode($countryId);
        $branches->state_id = $stateId;
        $branches->state_name = LocationHelper::getStateName($stateId);
        $branches->city_id = $cityId;
        $branches->city_name = LocationHelper::getCityName($stateId, $cityId);
        $branches->area = !empty($request->area) ? $request->area : NULL;
        $branches->area_id = !empty($request->area_id) ? $request->area_id : NULL;
        $branches->pincode = !empty($request->pincode) ? $request->pincode : NULL;
        $branches->status = ($request->status) ? $request->status : false;
        if ($branches->save()) {
            return redirect()->route('branch.index')->with('success', 'Branch Updated successfully.');
        } else {
            return back()->with('error', 'Something is Missing;');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('branch.index')->with('success', 'Branch deleted successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Twinkle\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function publish(Branch $branch)
    {
        if ($branch->status == true) {
            $branch->status = false;
        } else {
            $branch->status = true;
        }
        $branch->update();
        // flash('Updated Successfully')->success();
        return redirect()->route('branch.index');
    }
}
