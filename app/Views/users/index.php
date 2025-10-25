<?php include __DIR__ . '/../layout.php'; ?>

<div class="max-w-5xl mx-auto mt-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-indigo-700">Daftar Pemain</h2>
        <a href="index.php?action=create" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
            + Tambah Pemain
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-indigo-50">
                <tr>
                    <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Foto</th>
                    <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Nama</th>
                    <th class="py-3 px-4 text-left text-sm font-medium text-gray-700">Email</th>
                    <th class="py-3 px-4 text-center text-sm font-medium text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">
                        <img src="uploads/<?= htmlspecialchars($user['photo']) ?>"
                            alt="<?= htmlspecialchars($user['name']) ?>" class="w-12 h-12 rounded-full object-cover">
                    </td>
                    <td class="py-3 px-4"><?= htmlspecialchars($user['name']) ?></td>
                    <td class="py-3 px-4"><?= htmlspecialchars($user['email']) ?></td>
                    <td class="py-3 px-4 text-center">
                        <a href="index.php?action=detail&id=<?= $user['id'] ?>"
                            class="text-blue-600 hover:underline">Lihat</a>
                        <span class="mx-2">·</span>
                        <a href="index.php?action=edit&id=<?= $user['id'] ?>"
                            class="text-yellow-600 hover:underline">Ubah</a>
                        <span class="mx-2">·</span>
                        <a href="index.php?action=delete&id=<?= $user['id'] ?>"
                            onclick="return confirm('Yakin ingin menghapus pemain ini?')"
                            class="text-red-600 hover:underline">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="4" class="py-6 text-center text-gray-500">Belum ada data pemain.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>