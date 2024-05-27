<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dokter</title>
</head>
<body class="bg-white flex">
    <div class="h-screen w-16 relative">
        <div class="h-screen w-16 fixed left-0 top-0 border-r border-1">

        </div>
    </div>
    <div class="container mx-auto mt-5">
        <a href="create.php" class="bg-blue-500 text-sm text-white px-4 font-semibold py-2 rounded">+ Tambah Dokter</a>
        <table class="table-auto w-full mt-4 rounded-xl text-sm">
            <thead>
                <tr class="text-neutral-5800">
                    <th class="px-4 py-3 text-start">Kode Dokter</th>
                    <th class="px-4 py-3 text-start">Nama Dokter</th>
                    <th class="px-4 py-3 text-start">Kode Spesialis</th>
                    <th class="px-4 py-3 text-start">Telepon</th>
                    <th class="px-4 py-3 text-start">Jenis Kelamin</th>
                    <th class="px-4 py-3 text-start">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_dokter";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='font-semibold text-neutral-500'>";
                        echo "<td class='border-b border-neutral-500 px-4 py-3'>{$row['Kd_dokter']}</td>";
                        echo "<td class='border-b border-neutral-500 px-4 py-3'>{$row['Nama_dokter']}</td>";
                        echo "<td class='border-b border-neutral-500 px-4 py-3'>{$row['Kd_spesialis']}</td>";
                        echo "<td class='border-b border-neutral-500 px-4 py-3'>{$row['Telepon']}</td>";
                        echo "<td class='border-b border-neutral-500 px-4 py-3'>{$row['Sex']}</td>";
                        echo "<td class='border-b border-neutral-500 px-4 py-3'>
                                <a href='update.php?Kd_dokter={$row['Kd_dokter']}' class='bg-green-400 text-white px-2 py-1 rounded'><svg width='64px' height='64px' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' stroke='#ffffff'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'><path fill-rule='evenodd' clip-rule='evenodd' d='m3.99 16.854-1.314 3.504a.75.75 0 0 0 .966.965l3.503-1.314a3 3 0 0 0 1.068-.687L18.36 9.175s-.354-1.061-1.414-2.122c-1.06-1.06-2.122-1.414-2.122-1.414L4.677 15.786a3 3 0 0 0-.687 1.068zm12.249-12.63 1.383-1.383c.248-.248.579-.406.925-.348.487.08 1.232.322 1.934 1.025.703.703.945 1.447 1.025 1.934.058.346-.1.677-.348.925L19.774 7.76s-.353-1.06-1.414-2.12c-1.06-1.062-2.121-1.415-2.121-1.415z' fill='#ffffff'></path></g></svg></a>
                                <a href='delete.php?Kd_dokter={$row['Kd_dokter']}' class='bg-red-400 text-white px-2 py-1 rounded' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='border px-4 py-3'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
