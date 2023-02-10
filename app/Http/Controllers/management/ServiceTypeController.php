<?php

namespace App\Http\Controllers\management;

use App\Models\ServiceType;

class ServiceTypeController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $types = ServiceType::query()->paginate();

        return view('pages.admin.service-types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string|max:255',
            'descriptoin' => 'required|string|max:255',
        ]);

        ServiceType::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $_content = ServiceType::findOrFail($id);

        return view('pages.admin.service-types.modal', compact('_content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $_content = ServiceType::findOrFail($id);

        $data = request()->validate([
            'name' => 'required|string|max:255',
            'descriptoin' => 'required|string|max:255',
        ]);

        $_content->update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        ServiceType::query()->findOrFail($id)->delete();
        return back();
    }
}
