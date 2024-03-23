<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Nasabah Bank</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Users - Admin</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>johndoe@example.com</td>
                <td>Jalan Contoh No. 123, Kota Contoh</td>
                <td><button class="button" onclick="deleteUser(1)">Hapus</button></td>
            </tr>
            <!-- Data user/nasabah lainnya disini -->
        </tbody>
    </table>

    <script>
        function deleteUser(userId) {
            // Fungsi ini akan menghapus user dengan ID yang diberikan
            // Anda dapat menambahkan logika penghapusan di sini, seperti AJAX request ke server
            alert("User dengan ID " + userId + " telah dihapus.");
        }
    </script>
</body>
</html>
