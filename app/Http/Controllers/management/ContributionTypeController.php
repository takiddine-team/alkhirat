<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\ContributionType;

class ContributionTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $contribs = ContributionType::query()->latest('id')->paginate();
        return view('pages.admin.contrib.index', compact('contribs'));
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
            'note' => 'required|string|max:255'
        ]);

        ContributionType::create($data);

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
        $_content = ContributionType::findOrFail($id);

        return view('pages.admin.contrib.modal', compact('_content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $content = ContributionType::findOrFail($id);

        $data = request()->validate([
            'name' => 'required|string|max:255',
            'note' => 'nullable|string|max:255'
        ]);

        $content->update($data);

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
        ContributionType::query()->findOrFail($id)->delete();

        return back();
    }
}
