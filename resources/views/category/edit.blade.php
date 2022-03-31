<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($errors)
                        <ul class="list-item">
                            @foreach($errors->all() as $error)
                                <li class="list-item text-red-400">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('category-update',['category'=>$category->id]) }}" method="POST" class="w-1/2 mx-auto bg-white rounded-xl border-gray-100">
                        @csrf
                        <div class="px-4 py-2 bg-white border-gray-100">
                            <input
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="name" id="name" value="{{ old('name') ? old('name'): $category->name }}" placeholder="Enter category name">
                        </div>
                        <div class="px-4 py-2 ">
                            <button class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-200 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
