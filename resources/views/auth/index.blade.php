<x-app-layout>
    <div class="container">
        <h1 class="mt-6 mb-4 text-3xl font-semibold text-slate-800">Data Users :</h1>
        {{-- <a href="{{ route('tasks.create') }}"
            class="text-white bg-blue-700 cursor-pointer inline-block hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
            Product</a> --}}
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            No
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Username
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Date
                        </th>
                        {{-- <th scope="col" class="py-3 px-6">
                            Action
                        </th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-50 dark:border-gray-700">
                            <td class="py-4 px-6">
                                {{ $index + 1 }}
                            </td>
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $user->username }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $user->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $user->email }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $user->created_at->format('d F, Y') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
