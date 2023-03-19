<style>
    table{
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

            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.tables.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" style="background-color: #05796b">New Table</a>
            </div>
            
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Table name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Guest Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                location
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tables as $table)
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $table->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $table->guest_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $table->status->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $table->location->name }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex cpace-x-2">
                                    <a style="background-color: #05796b" href="{{ route('admin.tables.edit', $table->id) }}" class="px-4 py-2 rounded-lg text-white">Edit</a>
                                        <form style="background-color: red; margin:0px 10px;" class="px-4 py-2 rounded-lg text-white" 
                                            method="POST" action="{{ route('admin.tables.destroy', $table->id) }}"
                                            onsubmit="return confirm('Are You Sure !?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
