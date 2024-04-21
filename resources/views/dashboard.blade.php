<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ 'Dashboard' }}
        </h2>
        </xslot>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
                    <div class="flex">
                        <div class="mb-4 flex-auto text-2xl">Tasks List</div>
                        <div class="mt-2 flex-auto text-right">
                            <a href="/task"
                                class="text- white rounded bg-blue-500 px-4 py-2 font-bold hover:bg-blue-700">Add new
                                Task</a>
                        </div>
                    </div>
                    <table class="text-md mb-4 w-full rounded">
                        <thead>
                            <tr class="border-b">
                                <th class="p-3 px-5 text-left">Task</th>
                                <th class="p-3 px-5 text-left">Actions</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (auth()->user()->tasks as $task)
                                <tr class="border-b hover:bg-orange-100">
                                    <td class="p-3 px-5">
                                        {{ $task->description }}
                                    </td>
                                    <td class="p-3 px-5">
                                        <a href="/task/{{ $task->id }}" name="edit"
                                            class="mr3 rounded bg-blue-500 px-3 py-1 text-sm text-white hover:bg-blue-700">
                                            Edit
                                        </a>
                                        <form action="/task/{{ $task->id }}" class="inlineblock">
                                            <button type="submit" name="delete" formmethod="P OST"
                                                class="px2 focus:shadow-outline rounded bg-red-500 py-1 text-sm text-white hover:bg-red-700 focus:outline-none">Delete</button>
                                            {{ csrf_field() }}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
</x-app-layout>
