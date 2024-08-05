<?php
include_once '../../controllers/CustomerController.php';
require_once '../../models/CustomerModel.php';

$controller = new CustomerController();
$customer = $controller->show($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    .card {
        border: none;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .card-header {
        background-color: #4F6F52;
        color: #fff;
    }

    .card-footer {
        background-color: #4F6F52;
        color: #fff;
    }
</style>

<body>
    <div class="container mt-4 mb-4">
        <div class="card mx-auto" style="width: 50vw;">
            <div class="card-header">
                <?php echo $customer['nama_pic_lokasi']; ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p class="card-text"><strong>Nama Pelanggan:</strong> <?php echo $customer['nama_pelanggan']; ?></p>
                        <p class="card-text"><strong>PIC:</strong> <?php echo $customer['pic']; ?></p>
                        <p class="card-text"><strong>Nama PIC Lokasi:</strong> <?php echo $customer['nama_pic_lokasi']; ?></p>
                        <p class="card-text"><strong>Relokasi Rubah Nama:</strong> <?php echo $customer['relokasi_rubah_nama']; ?></p>
                        <p class="card-text"><strong>NIK:</strong> <?php echo $customer['nik']; ?></p>
                        <p class="card-text"><strong>Alamat:</strong> <?php echo $customer['alamat']; ?></p>
                        <p class="card-text"><strong>Layanan:</strong> <?php echo $customer['layanan']; ?></p>
                        <p class="card-text"><strong>Kecepatan:</strong> <?php echo $customer['kecepatan']; ?></p>
                        <p class="card-text"><strong>Biaya Bulanan:</strong> Rp. <?php echo number_format((float) $customer['biaya_bulanan'], 0, ',', '.'); ?></p>
                        <p class="card-text"><strong>Nomor Registrasi:</strong> <?php echo $customer['nomor_registrasi']; ?></p>
                        <p class="card-text"><strong>Username PPPoE:</strong> <?php echo $customer['username_pppoe']; ?></p>
                        <p class="card-text"><strong>Password PPPoE:</strong> <?php echo $customer['password_pppoe']; ?></p>
                        <p class="card-text"><strong>VLAN:</strong> <?php echo $customer['vlan']; ?></p>
                        <p class="card-text"><strong>Type ONU:</strong> <?php echo $customer['type_onu']; ?></p>
                        <p class="card-text"><strong>MAC Address:</strong> <?php echo $customer['mac_address']; ?></p>
                        <p class="card-text"><strong>Serial Number:</strong> <?php echo $customer['serial_number']; ?></p>
                        <p class="card-text"><strong>Status ONU:</strong> <?php echo $customer['status_onu']; ?></p>
                        <p class="card-text"><strong>Status PPPoE:</strong> <?php echo $customer['status_pppoe']; ?></p>
                        <p class="card-text"><strong>Tanggal Aktif:</strong> <?php echo $customer['tanggal_aktif']; ?></p>
                        <p class="card-text"><strong>Status User:</strong> <?php echo $customer['status_user']; ?></p>
                        <p class="card-text"><strong>Keterangan:</strong> <?php echo $customer['keterangan']; ?></p>
                    </div>
                </div>
                <div class="text-right">
                    <a href="./index.php" class="btn btn-outline-secondary">Back</a>
                    <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-outline-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $customer['id']; ?>" class="btn btn-outline-danger">Delete</a>
                </div>
            </div>
            <div class="card-footer">
            ‎
            </div>
        </div>
    </div>
</body>

</html>