@props(['product'])

<div class="bg-gray-900 rounded-lg shadow-md p-4 hover:shadow-lg transition duration-300 border border-gray-700">
    <h2 class="text-xl font-bold mb-2 text-gray-100 truncate">{{ $product->title }}</h2>
    <div class="mb-2 text-gray-300">
        <span class="font-semibold">Price:</span> ${{ $product->price }}
    </div>
    <div class="text-gray-500 text-sm">
        <span class="font-semibold">Category:</span> {{ $product->category->title }}
    </div>
    @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="mt-2 rounded-md w-full object-cover h-48 border border-gray-700">
    @endif
</div>
