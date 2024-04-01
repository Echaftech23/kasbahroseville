<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;
use App\Models\Type;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facility::latest()->paginate(5,['*'], 'facilities_page');
        $types = Type::latest()->paginate(5, ['*'], 'types_page');

        return view('admin.facilities.index', compact(['facilities', 'types']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFacilityRequest $request)
    {
        try {
            Facility::create($request->validated());

            return response()->json([
                'message' => 'Facility created successfully',
            ], 200);
        } catch (\Exception $e) {

            return response()->json([
                'message' => 'Something went wrong!',
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacilityRequest $request, Facility $facility)
    {
        try {

            abort_if(!$facility, 404, 'Facility not found.');

            $facility->update($request->validated());

            return response()->json([
                'message' => 'Facility Updated successfully',
            ], 200);
        } catch (\Exception $e) {

            return response()->json([
                'message' => 'Something went wrong!',
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facility $facility)
    {
        try {

            abort_if(!$facility, 404, 'Facility not found.');

            $facility->delete();

            return response()->json([
                'message' => 'Facility deleted successfully.',
            ], 200);
        } catch (\Exception $e) {

            return response()->json([
                'message' => 'Something went wrong! Please try again.',
            ], 500);
        }
    }
}
