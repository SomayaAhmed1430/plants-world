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
                <a href="{{ route('admin.reservations.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" style="background-color: #7E9E57">All Reservations</a>
            </div>

            <div class="m-2 p-2">
                <div>
                    <form action="{{ route('admin.reservations.update', $reservation->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                            <input type="text" name="first_name" id="first_name" value="{{ $reservation->first_name }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('first_name')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                            <input type="text" name="last_name" id="last_name" value="{{ $reservation->last_name }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('last_name')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="email" value="{{ $reservation->email }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('email')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label for="tel_number" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                            <input type="text" name="tel_number" id="tel_number" value="{{ $reservation->tel_number }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('tel_number')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label for="res_date" class="block mb-2 text-sm font-medium text-gray-900">Reservation Date</label>
                            <input type="datetime-local" name="res_date" id="res_date" value="{{ $reservation->res_date }}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('res_date')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="guest_number">Guest Number</label>
                            <input name="guest_number" value="{{ $reservation->guest_number }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="guest_number" type="number">
                            @error('guest_number')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Table</label>
                            <select style="width: 100%; border-radius: 10px; border:1px solid #d1d5db;" name="table_id" id="table_id">
                                @foreach ($tables as $table)
                                    <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>{{ $table->name }}</option>
                                @endforeach
                            </select>
                            @error('status')
                                <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                            @enderror
                        </div>
                        <br><br>
                        <button type="submit" style="background-color: #7E9E57" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
