<?php include __DIR__ . '/../layout.php'; ?>

<div class="max-w-md mx-auto bg-white shadow-lg rounded-xl p-6 text-center">
    <img src="uploads/<?= htmlspecialchars($user['photo']); ?>"
        class="w-32 h-32 mx-auto rounded-full mb-4 border-4 border-gray-200 object-cover"
        alt="<?= htmlspecialchars($user['name']); ?>">

    <h2 class="text-2xl font-semibold text-gray-800 mb-1">
        <?= htmlspecialchars($user['name']); ?>
    </h2>

    <p class="text-gray-600 mb-3">
        <?= htmlspecialchars($user['email']); ?>
    </p>

    <?php if (!empty($user['created_at'])): ?>
    <p class="text-sm text-gray-500 mb-4">
        Dibuat pada: <?= date('d M Y, H:i', strtotime($user['created_at'])); ?>
    </p>
    <?php endif; ?>

    <a href="index.php"
        class="inline-block mt-3 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition">
        ← Kembali
    </a>
</div>