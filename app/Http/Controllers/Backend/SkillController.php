<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();

        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(StoreSkillRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('skills');

            Skill::create([
                'name' => $request->name,
                'image' => $image
            ]);

            return to_route('skills.index')->with('success', 'Skill created.');
        }

        return back();
    }

    public function edit(Skill $skill)
    {
        return view('skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'image' => ['nullable', 'image']
        ]);

        $image = $skill->image;
        if ($request->hasFile('image')) {
            Storage::delete($skill->image);
            $image = $request->file('image')->store('skills');
        }

        $skill->update([
            'name' => $request->name,
            'image' => $image
        ]);

        return to_route('skills.index')->with('success', 'Skill updated.');
    }

    public function destroy(Skill $skill)
    {
        Storage::delete($skill->image);
        $skill->delete();

        return back()->with('danger', 'Skill deleted.');
    }
}
