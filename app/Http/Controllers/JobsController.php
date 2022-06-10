<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class JobsController extends Controller
{
    public function addJobs()
    {
        return view('admin.jobs');
    }
    public function uploadJobs(Request $request)
    {
        $job = new jobs;
        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('jobsimages', $imagename);
        $job->image = $imagename;
        $job->name = $request->name;
        $job->description = $request->description;
        $job->save();
        return redirect()->back()->with('message', 'Job Added Successfully.');

    }
    public function jobList()
    {
        $job = jobs::all();
        return view('admin.jobList', compact('job'));
    }
    public function deleteJob($id)
    {
        $job = jobs::find($id);
        $job->delete();
        return redirect()->back();
    }
    public function updateJob($id)
    {
        $job = jobs::find($id);
        return view('admin.update', compact('job'));
    }
    public function editJob(Request $request, $id)
    {
        $job = jobs::find($id);
        $job->name = $request->name;
        $job->description = $request->description;
        $image = $request->file;
        dd($image);
        if ($image) {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('jobsimages', $imagename);
            $job->image = $imagename;
        }
        $job->save();
        return redirect('/job_list');
    }
}

