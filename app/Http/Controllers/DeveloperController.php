<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
use App\Models\Projects;

class DeveloperController extends Controller
{
    public function index()
    {
        $developers = Developer::all();
        return view('developers.index', ['developers' => $developers]);
    }

    public function create()
    {
        return view('developers.create');
    }

    public function store()
    {
        $name = Request()->name;
        $jobTitle = Request()->job_title;
        $skills[] = Request()->skills;

        Developer::create([
            'name' => $name,
            'job_title' => $jobTitle,
            'skills[]' => $skills
        ]);

        return to_route('developers.index');
    }

    public function edit(Developer $developer)
    {
        return view('developers.edit', ['developer' => $developer]);
    }

    public function update($developer_id)
    {

        $name = Request()->name;
        $jobTitle = Request()->job_title;
        $skills = Request()->skills;

        $updataDeveloper=Developer::find($developer_id);

        $updataDeveloper->update([
            'name' => $name,
            'job_title' => $jobTitle,
            'skills' => $skills
        ]);

        return to_route('developers.index');

    }

    public function destroy($developer_id){
        
        $deleteDeveloper=Developer::find($developer_id);
        $deleteDeveloper->delete();
        return to_route('developers.index');
    }
}
