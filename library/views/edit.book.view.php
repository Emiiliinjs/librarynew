<?php require "components/head.php"; ?>
<?php require "components/navbar.php"; ?>

<div class="card">
    <div class="card-header">
        <h1>Edit Book</h1>
        <link rel="stylesheet" href="views/style/create.style.css">
    </div>
    <div class="card-body">
        <form method="POST" action="/edit">
            <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id'] ?? '', ENT_QUOTES, 'UTF-8') ?>">

            <!-- Input fields for editing book data -->
            <label for="title">Title:</label><br>
            <input class="create-input" type="text" id="title" name="title" value="<?= htmlspecialchars($book['title'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required><br>
            <?php if (isset($errors['title'])): ?>
                <div class="error"><?= htmlspecialchars($errors['title'], ENT_QUOTES, 'UTF-8') ?></div>
            <?php endif; ?>

            <label for="author">Author:</label><br>
            <input class="create-input" type="text" id="author" name="author" value="<?= htmlspecialchars($book['author'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required><br>
            <?php if (isset($errors['author'])): ?>
                <div class="error"><?= htmlspecialchars($errors['author'], ENT_QUOTES, 'UTF-8') ?></div>
            <?php endif; ?>

            <label for="year">Year:</label><br>
            <input class="create-input" type="number" id="year" name="year" value="<?= htmlspecialchars($book['year'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required><br>
            <?php if (isset($errors['year'])): ?>
                <div class="error"><?= htmlspecialchars($errors['year'], ENT_QUOTES, 'UTF-8') ?></div>
            <?php endif; ?>

            <button id="edit-poga" type="submit">Update</button>
        </form>
    </div>
</div>

<?php require "components/footer.php"; ?>
