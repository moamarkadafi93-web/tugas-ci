<!DOCTYPE html>
<html>
<head>
    <title>Daftar Artikel</title>
</head>
<body>

<h1>Daftar Artikel</h1>
<hr>

<ul>
<?php foreach($artikel as $a): ?>
<li>
<a href="<?= base_url('artikel/detail/'.$a['id']); ?>">
<?= $a['judul']; ?>
</a>
</li>
<?php endforeach; ?>
</ul>

<hr>

<a href="<?= base_url('artikel/tentang'); ?>">Tentang</a> |
<a href="<?= base_url('artikel/tambah'); ?>">Tambah Artikel</a>

</body>
</html>