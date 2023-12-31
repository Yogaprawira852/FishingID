@extends('admin.layouts.main')
@section('container')
    <div class="ml-80 mt-20 mx-8 my-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="md:col-span-1 md:mx-end">
            <h1 class="text-2xl font-semibold text-gray-800 mb-4">Edit Item</h1>

            <!-- Form to create a new item -->
            <form action="{{ route('admin.item.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

               <!-- Title -->
               <div class="mb-4">
                    <label for="title" class="block text-gray-600 font-semibold">Title:</label>
                    <input type="text" class="w-full border rounded py-2 px-3 @error('title') border-red-500 @enderror"
                           id="title" name="title" required autofocus value="{{ old('title', $item->title) }}">
                    @error('title')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Price -->
                <div class="mb-4">
                    <label for="price" class="block text-gray-600 font-semibold">Price:</label>
                    <input type="text" name="price" id="price"
                           class="w-full border rounded py-2 px-3 @error('price') border-red-500 @enderror"
                           value="{{ old('price', $item->price) }}" required>
                    @error('price')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Body -->
                <div class="mb-4">
                    <label for="body" class="block text-gray-600 font-semibold">Body:</label>
                    <textarea name="body" id="body"
                              class="w-full border rounded py-2 px-3 @error('body') border-red-500 @enderror">{{ old('body', $item->body) }}</textarea>
                    @error('body')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                
                <!-- Image -->
                <div class="mb-3">
                    <label for="image" class="block text-gray-600 font-semibold">Item Image:</label>
                    <input type="hidden" name="oldImage" value="{{ $item->image }}">
                    
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="mt-2 w-40 h-auto">
                    @else
                        <img class="mt-2 w-40 h-auto">
                    @endif
                    
                    <input class="mt-2" type="file" id="image" name="image" onchange="previewImage()">
                    
                    @error('image')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Total Sold -->
                <div class="mb-4">
                    <label for="totalSold" class="block text-gray-600 font-semibold">Total Sold:</label>
                    <input type="text" name="totalSold" id="totalSold"
                           class="w-full border rounded py-2 px-3 @error('totalSold') border-red-500 @enderror"
                           value="{{ old('totalSold', $item->totalSold) }}">
                    @error('totalSold')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Rating -->
                <div class="mb-4">
                    <label for="rating" class="block text-gray-600 font-semibold">Rating:</label>
                    <input type="text" name="rating" id="rating"
                           class="w-full border rounded py-2 px-3 @error('rating') border-red-500 @enderror"
                           value="{{ old('rating', $item->rating) }}">
                    @error('rating')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Category ID -->
                <div class="mb-4">
                    <label for="category_id" class="block text-gray-600 font-semibold">Category ID:</label>
                    <input type="text" name="category_id" id="category_id"
                           class="w-full border rounded py-2 px-3 @error('category_id') border-red-500 @enderror"
                           value="{{ old('category_id', $item->category_id) }}">
                    @error('category_id')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit button -->
                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded">
                    Edit Item
                </button>
            </form>
        </div>
    </div>
@endsection
