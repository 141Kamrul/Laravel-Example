<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Employer;
class JobController extends Controller
{
    //
    public function index(){
        $jobs=Job::with('employer')->cursorPaginate(100);
        $employers=$jobs->pluck('id')->filter()->unique('id')->values();
        return view('jobs.index', ['jobs'=>$jobs, 'employers'=> $employers]);
    }

    public function create(){
        return view('jobs.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>['required','min:3'],
            'salary'=>['required'],
        ]);
    
    
        Job::create([
            'title'=>$request->input('title'),
            'salary'=>$request->input('salary'),
            'employer_id'=>Employer::inRandomOrder()->value('id'),
        ]);
        return redirect('/jobs');
    }

    public function show(Job $job){
        $employer=$job->employer;
        $job->tags()->syncWithoutDetaching([6]);
        $tags=$job->tags;
        return view('jobs.show',['job'=>$job,'employer'=>$employer, 'tags'=> $tags]);
    }

    public function edit(Job $job){
        if (!$job) {
            abort(404);
        }
        return view('jobs.edit',['job'=>$job]);
    }

    public function update(Request $request, Job $job){
        $request->validate([
            'title'=>'required|min:3',
            'salary'=>'required',
        ]);
        
        //$job=Job::findOrFail( $id );

        $job->update([
            'title'=>$request->input('title'),
            'salary'=>$request->input('salary'),
        ]);
        return redirect("/jobs/{$job->id}");
    }

    public function destroy(Job $job){
        $job->delete();

        return redirect('/jobs');
    }
}
