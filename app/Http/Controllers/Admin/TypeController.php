<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Models\Facility;
use Illuminate\Http\Request;

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
        Type::create($request->validated());
        return redirect()->back()->with('message', 'Type created successfully');
    }

    public function update(UpdateTypeRequest $request, Type $type)
    {
        abort_if(!$type, 404, 'Type not found.');
        $type->update($request->validated());
        return redirect()->back()->with('message', 'Type updated successfully');
    }

    public function destroy(Type $type)
    {
        abort_if(!$type, 404, 'Type not found.');
        $type->delete();
        return redirect()->back()->with('message', 'Type deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request->get('types-search');
        $types = Type::where('type', 'like', '%' . $search . '%')->paginate(5, ['*'], 'types_page');
        $facilities = Facility::latest()->paginate(5, ['*'], 'facilities_page');

        return view('admin.facilities.index', compact(['facilities', 'types']));
    }
}
