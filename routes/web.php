<?php

use Illuminate\Support\Facades\Route;
use App\Models\ListJobs;

Route::get('/', function () {
    return redirect('/jobs');
});

Route::get('/jobs', function () {

    $jobs = ListJobs::all();

    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = ListJobs::find($id);

    return view('job_detail', ['job' => $job]);

});