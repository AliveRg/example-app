<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ 'Edit Task' }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
                <form method="POST" action="/task/{{ $task->id }}">
                    <div class="form-group">
                        <textarea name="description"
                            class="h-20 w-full resize-none rounded border border-gray-400 bg-gray-100 px-3 py-2 font-medium leading-normal placeholder-gray-700 focus:bg-white focus:outline-none">{{ $task->description }}</textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" name="update"
                            class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">Update
                            task</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
