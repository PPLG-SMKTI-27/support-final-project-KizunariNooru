<?php include __DIR__ . '/../layout.php'; ?>

<div class="max-w-lg mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
    <h2 class="text-2xl font-bold text-indigo-700 mb-4">Ubah Data Pemain</h2>

    <form action="index.php?action=edit&id=<?= $user['id'] ?>" method="POST" enctype="multipart/form-data"
        class="space-y-4">
        <div>
            <label class="block text-gray-700 font-medium mb-1">Nama</label>
            <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-400 outline-none">
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-1">Email</label>
            <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-400 outline-none">
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-1">Foto Sekarang</label>
            <img src="uploads/<?= htmlspecialchars($user['photo']) ?>" alt="<?= htmlspecialchars($user['name']) ?>"
                class="w-24 h-24 rounded-full mb-2 object-cover">
            <input type="file" name="photo" accept="image/*"
                class="w-full border rounded-lg px-3 py-2 bg-gray-50 cursor-pointer">
        </div>

        <div class="flex justify-end gap-3 mt-4">
            <a href="index.php" class="text-gray-600 hover:text-gray-900">Batal</a>
            <button type="submit" class="bg-indigo-600 text-white px-5 py-2 rounded hover:bg-indigo-700">
                Perbarui
            </button>
        </div>
    </form>
</div>