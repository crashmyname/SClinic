    <div class="container-fluid">
    <h1>Daftar Pengguna</h1>
<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $field => $messages): ?>
                <?php foreach ($messages as $message): ?>
                    <li><?php echo htmlspecialchars($message); ?></li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<a href="/mvc/adduser" class="btn btn-secondary">Tambah Pengguna</a>
<table id="datatable" class="table" style="width:100%">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Obat</td>
            <td>Created_by</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($obat as $data):?>
        <tr>
            <td><?= $data['id_obat']?></td>
            <td><?= $data['nama_obat']?></td>
            <td><?= $data['created_by']?></td>
            <td>Ini Tombol</td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
    </div>

