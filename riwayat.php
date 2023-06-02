<?php
include 'koneksi.php';

$id_riwayat = 1;

$hasil = mysqli_query($koneksi, "SELECT * FROM riwayat WHERE id_riwayat = $id_riwayat");

if (mysqli_num_rows($hasil) > 0) {
    while ($row = mysqli_fetch_assoc($hasil)) {
        $riwayat[] = $row;
    }
} else {
    echo "Tidak ada data yang sesuai dengan kondisi";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Jquery datatables -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <!-- datatables css  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <!-- Tugas Webpulsa CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Navigasi Kiri -->
<div class="left">
    <div class="containerLeft">
        <div class="leftTop">
            <h1><i><a href="index.php">ADMIN</a></i></h1>
            <ul>
                <li><a href="isi_pulsa.php">Top Up</a></li>
                <li><a href="kirim_pulsa.php">Kirim Pulsa</a></li>
                <li><a href="riwayat.php">Riwayat</a></li>
            </ul>
        </div>
        <div class="leftFoot"><a href="#"><i class="fa-sharp fa-solid fa-right-from-bracket"></i> Log Out</a></div>
    </div>
</div>
<!-- Konten Kanan -->
<div class="right">
    <!-- Navigasi Atas Status dan User -->
    <div class="topNav">
        <div class="containerTopNav">
            <?php foreach ($riwayat as $row) { ?>
                <div class="topNavLeft"><i class="fa-solid fa-wallet fa-xl"></i>&nbsp;&nbsp;<h3></h3></div>
                <div class="topNavRight"><h5></h5>&nbsp;&nbsp;<i class="fa-regular fa-circle-user fa-xl"></i></div>
            <?php } ?>
        </div>
    </div>
    <!-- Content  -->
    <div class="containerRight">
        <div class="content">
            <h1>Riwayat</h1>
            <table id="riwayatTable" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>No Telp</th>
                    <th>Nominal</th>
                    <th>Provider</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($riwayat as $row) { ?>
                    <tr>
                        <td><?php echo $row["tanggal"]; ?></td>
                        <td><?php echo $row["no_kartu"]; ?></td>
                        <td><?php echo $row["nominal"]; ?></td>
                        <td><?php echo $row["provider"]; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- JS for bootstrap & dataTable -->
<!-- dataTable JS -->
<script>
    $(document).ready(function () {
        $('#riwayatTable').DataTable();
    });
</script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
