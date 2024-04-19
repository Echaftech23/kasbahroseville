<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class FacilityController extends Controller
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
    public function store(StoreFacilityRequest $request)
    {
        try {
            $facility = Facility::create($request->validated());

            if ($request->hasFile('facility-image')) {
                $facility->addMediaFromRequest('facility-image')->toMediaCollection('facilities');
            }

            return redirect()->route('admin.facilities.index')->with('success', 'Facility created successfully');
        } catch (\Exception $e) {

            return back()->withInput()->withErrors(['warning' => 'Something went wrong!']);
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacilityRequest $request, Facility $facility)
    {
        try {
            $facility->update($request->validated());

            if ($request->hasFile('facility-image')) {
                $facility->clearMediaCollection('facilities');
                $facility->addMedia($request->file('facility-image'))->toMediaCollection('facilities');
            }
            return redirect()->back()->with('success', 'Facility updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'Something went wrong!');
        }
    }

    public function destroy(Facility $facility)
    {
        try {
            $facility->delete();
            return redirect()->back()->with('success', 'Facility deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'Something went wrong! Please try again.');
        }
    }

    public function search(Request $request)
    {
        $search = $request->get('facilities-search');
        $facilities = Facility::where('name', 'like', '%' . $search . '%')->paginate(5, ['*'], 'facilities_page');
        $types = Type::latest()->paginate(5, ['*'], 'types_page');

        return view('admin.facilities.index', compact(['facilities', 'types']));
    }
}
