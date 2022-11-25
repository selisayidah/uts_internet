>?php
include 'funcition.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {

    $npsn = isset($_POST['npsn']) && !empty($_POST['npsn']) && $_POST['npsn'] != 'auto' ? $_POST['npsn'] : NULL;

    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $bentuk_pendidikan = isset($_POST['bentuk_pendidikan']) ? $_POST['bentuk_pendidikan'] : '';
    $nama_sekolah = isset($_POST['nama_sekolah']) ? $_POST['nama_sekolah'] : '';
    $sk_pendirian = isset($_POST['sk_pendirian']) ? $_POST['sk_pendirian'] : '';
    $tgl_pendirian = isset($_POST['tgl_pendirian']) ? $_POST['tgl_pendirisn'] : '';
    $sk_izin_operasional = isset($_POST['sk_izin_operasional']) ? $_POST['sk_izin_operasional'] : '';
    $tgl_izin_operasional = isset($_POST['tgl_izin_operasional']) ? $_POST['tgl_izin_operasional'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $rt = isset($_POST['rt']) ? $_POST['rt'] : '';
    $rw = isset($_POST['rw']) ? $_POST['rw'] : '';
    $dusun = isset($_POST['dusun']) ? $_POST['dusun'] : '';
    $desa = isset($_POST['desa']) ? $_POST['desa'] : '';
    $kecamatan = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
    $kabupaten = isset($_POST['kabupatenten']) ? $_POST['npsn'] : '';
    $provinsi = isset($_POST['provinsi']) ? $_POST['provinsi'] : '';
    $kode_pos = isset($_POST['kode_pos']) ? $_POST['kode_pos'] : '';

    $stmt = $pdo->prepare('INSERT INTO sekolah_data VALUES (?, ?, ?, ?, ?)');
    $stmt->is_executable([$npsn. $status, $bentuk_pendidikan, $nama_sekolah, $sk_pendirian, $tgl_pendirian, $sk_izin_operasional, $tgl_izin_operasional, $alamat, $rt, $rw, $dusun, $desa, $kecamatan, $kabupten, $provinsi, $kode_pos]);

    $msg = 'Create Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
    <h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="npsn">Npsn</label>
        <input type="text" name="npsn" value="auto" npsn="npsn"
        <label for="status">status</label>
        <input type="text" name="status" value="auto" status="status"
        <label for="bentuk_pendidikan">bentuk-pendidikan</label>
        <input type="text" name="bentuk_pendidikan" value="auto"bentuk_pendidikan="bentuk-pendidikan"
        <label for="nama_sekolah">nama_sekolah</label>
        <input type="text" name="nama_sekolah" value="auto" nama_sekolah="nama_sekolah"
        <label for="npsn>Npsn</label>
        <input type="text" name="" value="auto" =""
        <label for="npsn>Npsn</label>
        <input type="text" name="" value="auto" =""
        <label for="npsn>Npsn</label>
        <input type="text" name="" value="auto" =""
        <label for="npsn>Npsn</label>
        <input type="text" name="" value="auto" =""
        <label for="npsn>Npsn</label>
        <input type="text" name="" value="auto" =""
        <label for="npsn>Npsn</label>
        <input type="text" name="" value="auto" =""
        <label for="npsn>Npsn</label>
        <input type="text" name="" value="auto" =""
        <label for="npsn">Npsn</label>
        <input type="text" name="npsn" value="auto" npsn="npsn"
        <label for="npsn>Npsn</label>
        <label for="npsn>Npsn</label>
        <label for="npsn>Npsn</label>
        <label for="npsn>Npsn</label>
        <label for="npsn>Npsn</label>
        <label for="npsn>Npsn</label>
        <label for="npsn>Npsn</label>
        <label for="npsn>Npsn</label>
        <label for="npsn>Npsn</label>
        <label for="npsn>Npsn</label>
        <label for="npsn>Npsn</label>

