<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                    Name</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                    Email</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                    Role</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                    Status</th>
                                <th
                                    class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider pr-6 text-center">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                                {{-- @foreach ($roles as $role) --}}


                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->roles[0]->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($user->roles[0]->name == 'technisien')
                                            <form class="flex justify-center items-center gap-x-2"
                                                action="/admin/approve/{{ $user->id }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                @if ($user->approved == 1)
                                                    <h1>User Approved</h1>
                                                @endif

                                                <input name="user_id" type="text" value="{{ $user->id }}"
                                                    class="hidden">
                                                <button
                                                    class="bg-green-300 rounded-md px-2 py-1 text-[18px] font-bold text-white">approved</button>
                                            </form>
                                        @endif
                                        




                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap flex justify-between">
                                        <button
                                            class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Edit</button>
                                        <form action="/admin/destroy/{{ $user->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                {{-- @endforeach    --}}
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
