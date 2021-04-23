<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Create project</title>

</head>

<body>
<header class="bg-dark">
<navigation class="navbar">
<a class="text-white nav-link" href="/login">Login </a>
<a class="text-white nav-link" href="/register">Register </a>
<a class="text-white nav-link" href="/create-project">Create project </a>
<a class="text-white nav-link" href="/projects">Projects </a>
<a class="text-white nav-link" href="/logout">Logout </a>
</navigation>
</header>
<div class="bg-secondary flex justify-center min-h-screen items-center">
<div class="card bg-dark" style="width: 20rem;">
<h5 class="card-header text-white">Create project</h5>
<form style="padding: 20px" action="/create" method="post">
@csrf
<div class="mb-3">
<label for="nameInput" class="form-label text-white">Name</label>
<input type="text" class="form-control" id="nameInput" placeholder="Name" name="name" />
</div>
<div class="mb-3">
<label for="description" class="form-label text-white">Description</label>
<input type="text" class="form-control" id="description" placeholder="Description" name="description" />
</div>
<div class="mb-3">
<label for="price" class="form-label text-white">Price</label>
<input type="text" class="form-control" id="price" placeholder="Price" name="price" />
</div>
<div class="mb-3">
<label for="start" class="form-label text-white">Started at</label>
<input type="date" class="form-control" id="start" placeholder="Started at" name="started_at" />
</div>
<div class="mb-3">
<label for="end" class="form-label text-white">Finished at</label>
<input type="date" class="form-control" id="end" placeholder="Finished at" name="finished_at" />
</div>
<div class="mb-3">
<label for="tasks_done" class="form-label text-white">Completed tasks</label>
<textarea name="tasks_done" class="form-control" id="tasks_done">
</textarea>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
</div>
</div>
</body>

</html>