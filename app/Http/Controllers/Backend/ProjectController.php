<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $skills = Skill::all();
        return view('projects.create', compact('skills'));
    }

    public function store(StoreProjectRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('projects');

            Project::create([
                'skill_id' => $request->skill_id,
                'name' => $request->name,
                'project_url' => $request->project_url,
                'image' => $image
            ]);

            return to_route('projects.index')->with('success', 'Project created.');
        }

        return back();
    }

    public function edit(Project $project)
    {
        $skills = Skill::all();
        return view('projects.edit', compact('project', 'skills'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $image = $project->image;
        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $image = $request->file('image')->store('projects');
        }

        $project->update([
            'skill_id' => $request->skill_id,
            'name' => $request->name,
            'project_url' => $request->project_url,
            'image' => $image
        ]);
        return to_route('projects.index')->with('success', 'Project updated.');
    }

    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();

        return back()->with('danger', 'Project deleted.');
    }
}
