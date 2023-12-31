@extends('admin.layouts.main')

@section('container')
    <div class=" ml-80 mt-20 mx-8 my-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="md:col-span-1 md:mx-end">
            <h1 class="text-2xl font-semibold text-gray-800 mb-4">Create New Item</h1>

            <!-- Form to create a new item -->
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Title -->
                <div class="mb-4">
                    <label for="title" class="block text-gray-600 font-semibold">Title:</label>
                    <input type="text" name="title" id="title" class="w-full border rounded py-2 px-3">
                </div>

                <!-- Price -->
                <div class="mb-4">
                    <label for="price" class="block text-gray-600 font-semibold">Price:</label>
                    <input type="text" name="price" id="price" class="w-full border rounded py-2 px-3">
                </div>

                <!-- Body -->
                <div class="mb-4">
                    <label for="body" class="block text-gray-600 font-semibold">Body:</label>
                    <textarea name="body" id="body" class="w-full border rounded py-2 px-3"></textarea>
                </div>

                <!-- Image -->
                <div class="mb-4">
                    <label for="image" class="block text-gray-600 font-semibold">Image:</label>
                    <input type="file" name="image" id="image" class="border py-2 px-3">
                </div>

                <!-- Total Sold -->
                <div class="mb-4">
                    <label for="totalSold" class="block text-gray-600 font-semibold">Total Sold:</label>
                    <input type="text" name="totalSold" id="totalSold" class="w-full border rounded py-2 px-3">
                </div>

                <!-- Rating -->
                <div class="mb-4">
                    <label for="rating" class="block text-gray-600 font-semibold">Rating:</label>
                    <input type="text" name="rating" id="rating" class="w-full border rounded py-2 px-3">
                </div>

                <!-- Submit button -->
                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded">
                    Create Item
                </button>
            </form>
        </div>
    </div>
@endsection
