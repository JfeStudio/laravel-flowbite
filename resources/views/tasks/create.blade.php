<x-app-layout>
    <div class="container mx-auto">
        <a href="/tasks"
            class="text-black inline-block focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-base underline hover:no-underline py-2.5 mr-2 mb- dark:bg-gray-800 dark:hover:bg-gray-700 dark:border-gray-700">Back</a>
        <h1 class="mb-4 text-3xl font-semibold">Create Your Product :</h1>

        <form class="w-1/2" action="{{ route('tasks.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name
                    Product</label>
                <input type="text" name="product" id="product" value="{{ old('product') }}"
                    class="@error('product') is-invalid @enderror shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Create your product">
                @error('product')
                    <span class="text-sm text-red-500 font-medium">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-6">
                <label for="product"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Color</label>
                <input type="text" name="color" id="product" value="{{ old('color') }}"
                    class="@error('color') is-invalid @enderror shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Choose your color">
                @error('color')
                    <span class="text-sm text-red-500 font-medium">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-6">
                <label for="product"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category</label>
                <input type="text" name="category" id="product" value="{{ old('category') }}"
                    class="@error('category') is-invalid @enderror shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Add your category">
                @error('category')
                    <span class="text-sm text-red-500 font-medium">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-6">
                <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Price</label>
                <input type="text" name="price" id="product" value="{{ old('price') }}"
                    class="@error('price') is-invalid @enderror shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Price">
                @error('price')
                    <span class="text-sm text-red-500 font-medium">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload
                    file</label>
                <input
                    class="@error('image') is-invalid @enderror block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file" name="image">
                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile picture is
                    useful to confirm your are logged into your account</div>
                @error('image')
                    <span class="text-sm text-red-500 font-medium">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="flex items-center">
                <button type="reset"
                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cencel</button>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</button>
            </div>
        </form>
    </div>
</x-app-layout>
