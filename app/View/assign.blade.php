<!DOCTYPE html>
<html lang="eng">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Assign</title>
</head>

<body>
<header class="bg-dark">
<navigation class="navbar">
<a class="text-white nav-link" href="/login">Login </a>
<a class="text-white nav-link" href="/register">Register </a>
<a class="text-white nav-link" href="/create-project">Create project </a>
<a class="text-white nav-link" href="/dashboard">Dashboard</a>
<a class="text-white nav-link" href="/logout">Logout </a>
</navigation>
</header>
<div class="bg-secondary flex justify-center min-h-screen items-center">
<div class="card bg-dark" style="width: 20rem;">
<h5 class="card-header text-white">Assign team member</h5>
<form style="padding: 20px" action="/assign" method="post">
@csrf
<div class="mb-3">
<label for="sel" class="form-label text-white">Korisnici</label>
<input class="form-control" type="hidden" id="sel" name="projectId" value="{{$projectId}}">
<select name="userId" class="form-control">
@foreach($users as $user)
<option value="{{$user->id}}">{{$user->name}}</option>
@endforeach
</select>
</div>
<button type="submit" class="btn btn-primary">Assign</button>
</form>
</div>
</div>
</body>

</html>