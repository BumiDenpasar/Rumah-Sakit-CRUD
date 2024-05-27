<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah Dokter</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold">Tambah Dokter</h1>
        <form action="create.php" method="POST">
            <div class="mb-4">
                <label class="block">Kode Dokter</label>
                <input type="text" name="Kd_dokter" class="w-full border px-4 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block">Nama Dokter</label>
                <input type="text" name="Nama_dokter" class="w-full border px-4 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block">Kode Spesialis</label>
                <input type="text" name="Kd_spesialis" class="w-full border px-4 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block">Telepon</label>
                <input type="text" name="Telepon" class="w-full border px-4 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block">Jenis Kelamin</label>
                <input type="text" name="Sex" class="w-full border px-4 py-2" required>
            </div>
            <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $Kd_dokter = $_POST['Kd_dokter'];
    $Nama_dokter = $_POST['Nama_dokter'];
    $Kd_spesialis = $_POST['Kd_spesialis'];
    $Telepon = $_POST['Telepon'];
    $Sex = $_POST['Sex'];

    $sql = "INSERT INTO tb_dokter (Kd_dokter, Nama_dokter, Kd_spesialis, Telepon, Sex) VALUES ('$Kd_dokter', '$Nama_dokter', '$Kd_spesialis', '$Telepon', '$Sex')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
