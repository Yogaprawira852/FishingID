@extends('admin.layouts.main')
@section('container')
    <div class="ml-80 mt-20">
        <div class="flex flex-row justify-between border-b-2 ">
            <div class="flex flex-col">
                <h1 class="font-lato font-semibold text-black text-xl">Items Management</h1>
                <h1 class="text-slate-400 font-semibold">You can manage your items here</h1>
            </div>
            <div class="flex flex-col">
                <a href="/admin/item/create"
                    class="bg-orange-400 mr-10 py-2 px-2 rounded-lg font-lato font-semibold text-white"> + Add Item </a>
            </div>
        </div>
        <div class="flex w-[55%] h-2/3 rounded mx-5 bg-white border-2 mt-5">
            <input type="search" name="search" id="search" placeholder="Search "
                class="w-full border-none bg-transparent px-4 py-1 text-gray-900 outline-none">
            <button id="searchButton" class="m-2 rounded bg-orange-400 hover:bg-orange-300 px-4 py-2 text-white flex">
                <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
            </button>
        </div>
        <div>
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-4" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            <table class="w-full border-b border-gray-200 mt-10 mb-80">
                <thead>
                    <tr class="text-sm font-medium text-gray-700 border-b border-gray-200">
                        <td class="pl-10">
                            <div class="flex items-center gap-x-4">
                                <span class="font-semibold">Product Name</span>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-center">Price</td>
                        <td class="py-4 px-4 text-center">sold</td>
                        <td class="py-4 px-4 text-center">Rating</td>
                        <td class="py-4 pr-10 pl-4 text-center">
                            <FilterIcon class="w-6 h-6 fill-current" />
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr class="hover:bg-gray-100 transition-colors group">
                            <td class="flex gap-x-4 items-center py-4 pl-10">
                                <!-- link Hapus Item ini  -->
                                <form action="{{ route('admin.item.destroy', $item->id) }}" method="post"
                                    onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 bg-gray-200 rounded-md hover:bg-gray-300">
                                        <i class="fa-solid fa-trash-can" style="color: #878787;"></i>
                                    </button>
                                </form>
                                <img src="{{ asset('img/' . $item->image) }}" alt=""
                                    class="w-40 aspect-[3/2] rounded-lg object-cover object-top border border-gray-200" />
                                <div>
                                    <span class="text-lg font-semibold text-gray-700">
                                        {{ $item->title }}
                                    </span>
                                    <div class="font-medium text-gray-400">
                                        {{ $item->category->name }}
                                    </div>
                                </div>
                            </td>
                            <!-- Harga -->
                            <td class="font-medium text-center">Rp.{{ number_format($item->price, 0, ',', '.') }}</td>
                            <!-- jumlah terjual -->
                            <td class="font-medium text-center">{{ $item->totalSold }}</td>
                            <td class="text-center">
                                <!-- rating /5 -->
                                <span class="font-medium">{{ $item->rating }}</span>
                                <span class="text-gray-400">/5</span>
                            </td>
                            <td>
                                <div class="flex gap-x-2 justify-center items-center">
                                    <!-- link edit item ini  -->
                                    <a href="{{ route('admin.item.edit', $item->id) }}" class="p-2 bg-gray-200 rounded-md hover:bg-gray-300">
                                        <i class="fa-solid fa-pen-to-square" style="color: #878787;"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="margin-top: -250px">
                {{ $items->links() }}
            </div>>
        </div>
    </div>
@endsection