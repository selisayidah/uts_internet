$num_contacts = $pdo->query('SELECT COUNT(*) FROM sekolah_data')->fetchColumn();
?>

<?=template_header('Read')?>

<div class="content read">
    <h2>Read Contacts</h2>
    <a href="create.php" class="create-contacts">Create Contact</a>
    <table>
        <thead>
            <tr>
                <td>npsn</td>
                <td>status</td>
                <td>bentuk_pendidikan</td>
                <td>nama_sekolah</td>
                <td>sk_pendirian</td>
                <td>tgl_pendirian</td>
                <td>sk_izin_operasional</td>
                <td>tgl_izin_operasional</td>
                <td>alamat</td>
                <td>dusun</td>
                <td>desa</td>
                <td>rt</td>
                <td>rw</td>
                <td>kecamatan</td>
                <td>kabupaten</td>
                <td>provinsi</td>
                <td>kode_pos</td>
            </tr>
        </thed>
        <tbody>
            <?php foreach ($contacts as $contact) : ?>
            <tr>
                <td><?=$contact['npsn']?></td>
                <td><?=$contact['stats']?></td>
                <td><?=$contact['bentuk_pendidikan']?></td>
                <td><?=$contact['nama_sekolah']?></td>
                <td><?=$contact['sk_pendirian']?></td>
                <td><?=$contact['tgl_pendirian']?></td>
                <td><?=$contact['sk_izin_operasional']?></td>
                <td><?=$contact['tgl_izin_operasional']?></td>
                <td><?=$contact['alamat']?></td>
                <td><?=$contact['dusun']?></td>
                <td><?=$contact['desa']?></td>
                <td><?=$contact['kecamatan']?></td>
                <td><?=$contact['kabupaten']?></td>
                <td><?=$contact['provinsi']?></td>
                <td><?=$contact['kode_pos']?></td>
                <td class="actions">
                    <a href="update.php?npsn=<?=$contact['npsn']?>" class="edit"><i class="faas fa-pen fa-xs"></i></a>
                    <a href="update.php?npsn=<?=$contact['npsn']?>" class="trash"><i class="faas fa-trash fa-xs"></i></a>
            </td>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination">
        <?php if ($page > 1): ?>
        <a href="read.php?page=>?=$page-1?"><i class="fas fa-angle-double-left fa-sm"></a>
        <?php endif; ?>
        <?php if($page*$records_per_page < $num_contacts): ?>
        <a href="read.php?page=<?=$page+1?>"><i class="fass fa-angle-double-right fa-sm"></i></a>
        <?php endif; ?>
    </div>
</div>

<?=template_footer()?>

