<style>
    div a{
        margin-top: 10%;
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
                <a href="{{ route('admin.tables.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" style="background-color: #05796b">All Tables</a>
            </div>

            <div class="m-2 p-2">
                <div>
                    <form action="{{ route('admin.tables.update', $table->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" name="name" value="{{ $table->name }}" id="name" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('name')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="guest_number">Guest Number</label>
                            <input name="guest_number" value="{{ $table->guest_number }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="guest_number" type="number">
                            @error('guest_number')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                            <select style="width: 100%; border-radius: 10px; border:1px solid #d1d5db;" name="status" id="status[]">
                                @foreach (App\Enums\TableStatus::cases() as $status)
                                    <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>{{ $status->name }}</option>
                                @endforeach
                            </select>
                            @error('status')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br><br>
                        <div>
                            <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Location</label>
                            <select style="width: 100%; border-radius: 10px; border:1px solid #d1d5db;" name="location" id="location[]">
                                @foreach (App\Enums\TableLocation::cases() as $location)
                                <option value="{{ $location->value }}" @selected($table->location->value == $location->value)>{{ $location->name }}</option>
                                @endforeach
                            </select>
                            @error('location')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br><br>
                        <button type="submit" style="background-color: #05796b" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
