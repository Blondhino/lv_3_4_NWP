<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <header class="bg-dark">
        <navigation class="navbar">
            <a class="text-white nav-link" href="/login">Login </a>
            <a class="text-white nav-link" href="/register">Register </a>
            <a class="text-white nav-link" href="/create">Create new project </a>
            <a class="text-white nav-link" href="/logout">Logout </a>
        </navigation>
    </header>
    <div class="bg-secondary flex justify-center min-h-screen">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Tasks done</th>
                    <th>Started at</th>
                    <th>Finished at</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{$project->projectName}}</td>
                    <td>{{$project->projectDesc}}</td>
                    <td>{{$project->projectPrice}}</td>
                    <td>{{$project->tasksDone}}</td>
                    <td>{{$project->startedAt}}</td>
                    <td>{{$project->finishedAt}}</td>
                    <td>
                        <a href="">Edit</a>
                        @if($project->ownerId == $currentUserId)<a href="/assign/{{$project->id}}">Add member</a>@endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>