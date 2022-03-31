<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('status'))
                        <div class="text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="py-2">
                        @foreach($categories as $category)
                            <div class="flex flex-row">
                                <div class="px-2 py-2 w-3/4 border border-gray-100 basis-3/4">
                                    {{ $category->name }}
                                </div>
                                <div class="px-2 py-2 w-1/4 basis-1/4 border border-gray-100">
                                    <a href="{{route('category-edit',['category'=>$category->id])}}"
                                    class="px-2 py-2 border btn bg-blue-800 text-white">Edit</a>
                                    <a href="{{route('category-delete',['category'=>$category->id])}}"
                                       class="px-2 py-2 btn bg-red-600 text-white">Delete</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
