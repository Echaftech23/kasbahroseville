<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facility::latest()->get();

        return response()->json([
            'data' =>  $facilities,
        ], 200);
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
