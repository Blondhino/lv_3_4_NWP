<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
public function create(Request $request) {
$currentUserId = $request->user()->id;

$project = new Project;
$project->projectName = $request->projectName;
$project->projectDesc = $request->projectDesc;
$project->projectPrice = $request->projectPrice;
$project->projectDoneJobs = $request->tasksDone;
$project->ownerId = $currentUserId;

$project->save();

return redirect('dashboard');
}

public function assign(Request $request) {
$userId = $request->userId;
$projectId = $request->projectId;

$project = Project::findOrFail($projectId);
$user = User::findOrFail($userId);

$project->users()->attach($user);

return redirect('dashboard');
}


}