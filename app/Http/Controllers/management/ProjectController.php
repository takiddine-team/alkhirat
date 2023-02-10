<?php

namespace App\Http\Controllers\management;

use App\Http\Requests\ProjectRequest;
use App\Models\Management;
use App\Models\Project;

class ProjectController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $projects = Project::query()->latest('id')->paginate();
        $managements = Management::query()->with('user', 'user.user:id,first_name,last_name')->get();

        return view('pages.admin.projects.index', compact('projects', 'managements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ProjectRequest $request)
    {
        $attachment = null;

        if ($request->file('attachment')) {
            $attachment = $request->file('attachment')->store('projects', 'public');
        }

        Project::create([
            ...$request->except('attachment'),
            'attachment' => $attachment
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $project = Project::query()->with('management', 'management.user', 'management.user.user')->findOrFail($id);

        return view('pages.admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $content = Project::findOrFail($id);
        $managements = Management::query()->with('user', 'user.user:id,first_name,last_name')->get();

        return view('pages.admin.projects.modal', compact('content', 'managements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, ProjectRequest $request)
    {
        $content = Project::findOrFail($id);
        $attachment = null;

        if ($request->file('attachment')) {
            $attachment = $request->file('attachment')->store('projects', 'public');
        }
        else {
            $attachment = $content->attachment;
        }

        $content->update([
            ...$request->except('attachment'),
            'attachment' => $attachment
        ]);

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
        Project::query()->findOrFail($id)->delete();

        return redirect()->back();
    }
}
