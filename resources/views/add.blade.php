<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ 'Add Task' }}
        </h2>
        </xslot>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
                    <form method="POST" action="/task">
                        <div class="form-group">
                            <textarea name="description"
                                class="bg-gray100 py2 focus:bg- white h-20 w-full resize-none rounded border border-gray-400 px-3 font-medium leading-normal placeholder-gray-700 focus:outline-none"
                                placeholder='Enter your task'></textarea>
                            @if ($errors->has('description'))
                                <span
                                    class="text-danger">{{ $errors-
                                                                                                                                               >first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-800"> </button>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>
