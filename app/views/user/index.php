<h2>Tabel Pendonor</h2>

<a href="<?php echo URL; ?>/user/input" class="btn ">Input Pendonor</a>

<table>
    <tr>
        <th>Id</th>
        <th>Email Pendonor</th>
        <th>Golongan Darah</th>
        <th>Nama Pendonor</th>
        <th>Alamat Pendonor</th>
        <th>No Hp Pendonor</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>

    <?php foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['user_email']; ?></td>
            <td><?php echo $row['user_password']; ?></td>
            <td><?php echo $row['user_nama']; ?></td>
            <td><?php echo $row['user_alamat']; ?></td>
            <td><?php echo $row['user_hp']; ?></td>

            <td><a href="<?php echo URL; ?>/user/edit/<?php echo $row['user_id']; ?>" class="btn ">Edit</a></td>
            <td><a href="<?php echo URL; ?>/user/delete/<?php echo $row['user_id']; ?>" class="btn ">Delete</a></td>
        </tr>
    <?php } ?>
</table>