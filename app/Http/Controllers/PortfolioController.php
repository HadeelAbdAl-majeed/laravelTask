<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Developer;

class PortfolioController extends Controller
{
    public function home()
    {
        $developer = [
            'name' => 'Ahmad',
            'job_title' => 'Full-Stack Developer',
            'skills' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap']
        ];
        return view('portfolio.home', compact('developer'));
    }

    public function create()
    {
        $developers = Developer::all();
        return view('portfolio.create',['developers'=>$developers]);
    }

    public function store()
    {

        $title = Request()->title;
        $description = Request()->description;
        $status = Request()->status;
        $developer_id=Request()->developer_id;
        //  @dd($status);
        Projects::create([
            'title'=>$title,
            'description'=>$description,
            'status'=>$status,
            'developer_id'=>$developer_id,
        ]);

         return to_route('projects');
        // return 'store data';
    }

    public function projects()
    {
        // Mock data replacing a database query
        $projects = [
            ['title' => 'Task Management System', 'description' => 'A daily task tracker app', 'status' => 'Completed'],
            ['title' => 'E-Commerce Store', 'description' => 'Full online shopping platform', 'status' => 'In Progress'],
        ];

        $projectAll=Projects::all();

        return view('portfolio.projects',['projects'=> $projectAll]);
    }

    public function destroy($projectId){

      $deleteProject=Projects::find($projectId);
      $deleteProject->delete();
      
      return to_route('projects');
    }
}
