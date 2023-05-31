<?php include 'koneksi.php';?>
<?php
    $hasil = mysqli_query($koneksi, "SELECT * FROM users WHERE id_users=1");
    $users = mysqli_query($koneksi, "SELECT * FROM users WHERE id_users=1");
    while($row = mysqli_fetch_assoc($hasil)){
        $id = $row["id_users"];
        $nama = $row["nama"];
        $saldo = $row["saldo"];
    }

    function tambah_saldo(){
        if($_POST) {
            $nominalTopUp = $_POST["nominal"];
            $tambahSaldo = $saldo + $nominalTopUp;

            $tambah = mysqli_query($koneksi, "INSERT INTO users(saldo) VALUES ('$tambahSaldo')");
        }
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
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<!-- Navigasi Kiri -->
<div class="left">
    <div class="containerLeft">
        <div class="leftTop">
            <h1>ADMIN</h1>
            <ul>
                <li><a href="#">Top Up</a></li>
                <li><a href="#">Kirim Pulsa</a></li>
                <li><a href="#">Riwayat</a></li>
            </ul>
        </div>
        <div class="leftFoot"><a href="#">Log Out</a></div>
    </div>
</div>
<!-- Konten Kanan -->
<div class="right">
    <!-- Navigasi Atas Status dan User -->
    <div class="topNav">
        <div class="containerTopNav">
        <?php while($row = mysqli_fetch_assoc($users)) { ?> 
            <div class="topNavLeft">Rp. <?= $row['saldo'] ?></div>
            <div class="topNavRight"><?= $row['nama'] ?></div>
        <?php } ?>
        </div>
    </div>
    <!-- Content  -->
    <div class="containerRight">
        <div class="content">
           <h1>Top Up</h1>
           <form method="get">
                <input type="number" name="nominal" placeholder="masukkan jumlah uang">
                <button type="submit">submit</button>
            </form>
        </div>
    </div>
</div>



    
<!-- JS for bootstrap & dataTable -->
    <!-- dataTable JS -->
    <script>
        $(document).ready(function () {
        $('#test').DataTable();
    });
    </script>
<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>