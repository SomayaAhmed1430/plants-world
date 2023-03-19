<style>
    div a{
        margin-top: 2%;
    }
</style>
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.menus.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" style="background-color: #05796b">All Menus</a>
            </div>

            <div class="m-2 p-2">
                <div>
                    <form action="{{ route('admin.menus.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" name="name" id="name" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('name')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Image</label>
                            <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file" multiple>
                            @error('image')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                            <input type="number" min="0.00" max="10000.00" step="0.01" name="price" id="price" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('price')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Desciption</label>
                            <textarea id="description" rows="4" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                            @error('description')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <br>
                        <div>
                            <label for="categories" class="block mb-2 text-sm font-medium text-gray-900">Categories</label>
                            <select style="width: 100%; border-radius: 10px; border:1px solid #d1d5db;" multiple name="categories" id="categories[]">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('categories')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br><br>
                        <button type="submit" style="background-color: #05796b" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
