<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Daftar Produk</h2>
            <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 font-semibold">+ Tambah Produk</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="border border-gray-300 p-2">No</th>
                    <th class="border border-gray-300 p-2">Gambar</th>
                    <th class="border border-gray-300 p-2">Nama Produk</th>
                    <th class="border border-gray-300 p-2">Harga</th>
                    <th class="border border-gray-300 p-2">Stok</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $index => $product)
                    <tr>
                        <td class="border border-gray-300 p-2 text-center">{{ $index + 1 }}</td>
                        <td class="border border-gray-300 p-2 text-center">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" class="w-16 h-16 object-cover mx-auto rounded">
                            @else
                                <span class="text-gray-400 text-sm">Tidak ada</span>
                            @endif
                        </td>
                        <td class="border border-gray-300 p-2">{{ $product->name }}</td>
                        <td class="border border-gray-300 p-2">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="border border-gray-300 p-2 text-center">{{ $product->stock }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="border border-gray-300 p-4 text-center text-gray-500">Belum ada produk yang ditambahkan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>