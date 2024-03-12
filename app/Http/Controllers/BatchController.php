<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Batch;
use Illuminate\View\View;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $batch = Batch::all();
        return view ('batch.index')->with('batch',$batch);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('batch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batch')->with('flash_message', 'Batch Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):view
    {
        $batch = Batch::find($id);
        return view('batch.show')->with('batch', $batch);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):view
    {
        $batch = Batch::find($id);
        return view('batch.edit')->with('batch', $batch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $batch = Batch::find($id);
        $input = $request->all();
        $batch->update($input);
        return redirect('batch')->with('flash_message', 'Batch Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batch')->with('flash_message', 'Batch deleted!');

    }
}
