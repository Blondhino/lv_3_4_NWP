
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create project') }}
        </h2>
    </x-slot>

<body>
    <div>
        <div>
            <form action="/create" method="post">
                @csrf
                <div>
                    <label for="nameInput">Name</label>
                    <input type="text" id="nameInput" placeholder="Name" name="projectName" />
                </div>
                <div>
                    <label for="description">Description</label>
                    <input type="text" id="description" placeholder="Description" name="projectDesc" />
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="text" id="price" placeholder="Price" name="projectPrice" />
                </div>
                <div>
                    <label for="start">Start date</label>
                    <input type="date" id="start" placeholder="Started date" name="startDate" />
                </div>
                <div>
                    <label for="end">End date</label>
                    <input type="date" id="end" placeholder="End date" name="endDate" />
                </div>
                <div">
                    <label for="tasks_done">Completed tasks</label>
                    <textarea name="tasksDone" id="tasks_done">
                </textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
</x-app-layout>