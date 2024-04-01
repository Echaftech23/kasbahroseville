<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Models\Facility;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facility::latest()->paginate(5, ['*'], 'facilities_page');
        $types = Type::latest()->paginate(5, ['*'], 'types_page');

        return view('admin.facilities.index', compact(['facilities', 'types']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request)
    {
        try {

            Type::create($request->validated());
            return response()->json([
                'message' => 'Type created successfully',
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
    public function update(UpdateTypeRequest $request, Type $type)
    {
        try {

            abort_if(!$type, 404, 'Type not found.');

            $type->update($request->validated());

            return response()->json([
                'message' => 'Type Updated successfully',
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
    public function destroy(Type $type)
    {
        try {

            abort_if(!$type, 404, 'Type not found.');

            $type->delete();

            return response()->json([
                'message' => 'Type deleted successfully.',
            ], 200);
        } catch (\Exception $e) {

            return response()->json([
                'message' => 'Something went wrong! Please try again.',
            ], 500);
        }
    }
}
