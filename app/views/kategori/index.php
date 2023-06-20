<h2>Data Pasien</h2>

<a href="<?php echo URL; ?>/kategori/input" class="btn ">Input Data Pasien</a>

<table>
      <tr>
            <th>Id</th>
            <th>Nama Pasien</th>
            <th>Umur Pasien</th>
            <th>Alamat Pasien</th>
            <th>No hp Pasien</th>
            <th>No ktp Pasien</th>
            <th>Tekanan Darah</th>
            <th>Edit</th>
            <th>Hapus</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['pel_id']; ?></td>
                  <td><?php echo $row['pel_no']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_alamat']; ?></td>
                  <td><?php echo $row['pel_hp']; ?></td>
                  <td><?php echo $row['pel_ktp']; ?></td>
                  <td><?php echo $row['pel_seri']; ?></td>
                  <td><a href="<?php echo URL; ?>/kategori/edit/<?php echo $row['pel_id']; ?>" class="btn ">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/kategori/delete/<?php echo $row['pel_id']; ?>" class="btn ">Delete</a></td>
            </tr>
      <?php } ?>
</table>