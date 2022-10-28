<x-app-layout>
    <div class="container">
        <h1 class="mt-6 mb-4 text-3xl font-semibold text-slate-800">Data Product :</h1>
        <a href="{{ route('tasks.create') }}"
            class="text-white bg-blue-700 cursor-pointer inline-block hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
            Product</a>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            No
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Product name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Color
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Category
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Price
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Images
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $index => $task)
                        <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-50 dark:border-gray-700">
                            <td class="py-4 px-6">
                                {{ $index + 1 }}
                            </td>
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $task->product }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $task->color }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $task->category }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $task->price }}
                            </td>
                            <td class="py-4 px-6">
                                @if ($task->image)
                                    <img class="w-20 h-20 rounded-md object-cover" src="/images/{{ $task->image }}"
                                        alt="Rounded avatar">
                                @else
                                    <img class="w-20 h-20 rounded-md object-cover"
                                        src="https://source.unsplash.com/random/?computer,laptop" alt="Rounded avatar">
                                @endif
                            </td>
                            <td>
                                <div class="py-4 px-6 flex items-center">
                                    <a href="{{ route('tasks.show', $task->id) }}"
                                        class="text-white bg-blue-700 hover:bg-blue-800 cursor-pointer focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Details</a>
                                    <a href="{{ route('tasks.edit', $task->id) }}"
                                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:focus:ring-yellow-900">Edit</a>
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="px-4 py-2">
                {{ $tasks->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
