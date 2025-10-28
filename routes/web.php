<?php

use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use App\Models\Employer;
use App\Models\Tag;
use Illuminate\Validation\Validator;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TagController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home',[
//         'greeting' => 'Hello',
//         'name' => "Larry",
//     ]);
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::view('/','welcome');
Route::view('/home','home',[
    'greeting'=>'Hello',
    'name'=> 'Larry'
]);
Route::view('/about','about');
Route::view('/contact','contact');
Route::view('/foo','',['foo'=>'bar']);

// Route::get('/jobs', function () {
//     return view('jobs', [
//         'jobs' => [
//             ['id' => 1, 'title' => 'Director', 'salary' => 50000],
//             ['id' => 2, 'title' => 'Programmer', 'salary' => 10000],
//             ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
//         ],
//     ]);
// });

// Route::get('/jobs/{id}', function ($id) {
//     $jobs=[
//         ['id' => 1, 'title' => 'Director', 'salary' => 50000],
//         ['id' => 2, 'title' => 'Programmer', 'salary' => 10000],
//         ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
//     ];

//     $job = collect($jobs)->first(fn ($job) => $job['id'] == $id);

//     if(!$job){
//         abort(404);
//     }

//     return view('job', ['job' => $job]);
// });

// Route::get('/jobs', function () {
//     $jobs=Job::with('employer')->cursorPaginate(100);
//     $employers=$jobs->pluck('id')->filter()->unique('id')->values();
//     return view('jobs.index', ['jobs'=>$jobs, 'employers'=> $employers]);
// });

// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// });

// Route::post('/jobs', function (Request $request) {
//     $request->validate([
//         'title'=>['required','min:3'],
//         'salary'=>['required'],
//     ]);
    
    
//     Job::create([
//         'title'=>$request->input('title'),
//         'salary'=>$request->input('salary'),
//         'employer_id'=>Employer::inRandomOrder()->value('id'),
//     ]);
//     return redirect('/jobs');
// });

// Route::get('/jobs/{job}', function(Job $job){
//     //$job=Job::find($id);
//     $employer=$job->employer;
//     $job->tags()->syncWithoutDetaching([6]);
//     $tags=$job->tags;
//     return view('jobs.show',['job'=>$job,'employer'=>$employer, 'tags'=> $tags]);
// });

// Route::get('jobs/{job}/edit',function(Job $job){
//     //$job=Job::find($id);
//     if (!$job) {
//         abort(404);
//     }
//     return view('jobs.edit',['job'=>$job]);
// });

// Route::patch('jobs/{job}',function(Request $request, Job $job){
//     $request->validate([
//         'title'=>'required|min:3',
//         'salary'=>'required',
//     ]);
    
//     //$job=Job::findOrFail( $id );

//     $job->update([
//         'title'=>$request->input('title'),
//         'salary'=>$request->input('salary'),
//     ]);
//     return redirect("/jobs/{$job->id}");
// });

// Route::delete('/jobs/{job}',function(Job $job){
//     //$job=Job::findOrFail( $id );
//     $job->delete();

//     return redirect('/jobs');
// });

// Route::get('/job', function(){

//     dd(([
//         'all_jobs'=> Job::all(),
//         'first_title'=> Job::all()[0]->title ?? null,
        
//     ]));
//     // dd(Job::all());
//     // dd(Job::all()[0]->title);
//     // dd(Job::find(1)->title);
// });

// Route::get('/employers', function() {
//     $employers=Employer::all();
//     return view('employers.employers', ['employers'=>$employers]);  
// });

// Route::get('/employers/{employer}', function(Employer $employer){
//     //$employer=Employer::find($id);
//     $jobs=$employer->jobs;
//     return view('employers.employer',['employer'=>$employer, 'jobs'=>$jobs]);
// });

// Route::get('/tags', function() {
//     $tags=Tag::all();
//     return view('tags.tags', ['tags'=>$tags]);  
// });

// Route::get('tags/{tag}', function(Tag $tag) {
//     //$tag=Tag::find($id);
//     $jobs=$tag->jobs;
//     return view('tags.tag',['tag'=>$tag, 'jobs'=> $jobs]);
// });

Route::resource('jobs',JobController::class)->only([
    'index','show','create','store','edit','update','destroy'
]);
Route::controller(JobController::class)->group(function() {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create','create');
    Route::post('/jobs','store');
    Route::get('/jobs/{job}','show');
    Route::get('/jobs/{job}/edit','edit');  
    Route::patch('/jobs/{job}','update');
    Route::delete('/jobs/{job}','destroy');
});

Route::resource('employers',EmployerController::class)->only([
    'index','show'
]);
Route::controller(EmployerController::class)->group(function() {
    Route::get('/employers','index');
    Route::get('/emmployers/employer','show');
});

Route::resource('tags',TagController::class)->only([
    'index','show'
]);
Route::controller(TagController::class)->group(function() {
    Route::get('/tags','index');
    Route::get('/tags/tag','show');
});

