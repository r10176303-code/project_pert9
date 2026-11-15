<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Tambah Produk Baru</h2>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Nama Produk</label>
                <input type="text" name="name" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="description" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" rows="3"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Harga</label>
                <input type="number" step="0.01" name="price" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Stok</label>
                <input type="number" name="stock" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Gambar Produk</label>
                <input type="file" name="image" class="w-full border border-gray-300 p-2 rounded bg-gray-50">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 font-semibold">Simpan Produk</button>
            </div>
        </form>
    </div>
</body>
</html>