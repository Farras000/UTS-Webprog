<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Bank XYZ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .button {
            display: inline-block;
            padding: 8px 16px;
            border: none;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
        .button.reject {
            background-color: #f44336;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard - Bank XYZ</h1>
        <h2>Halaman Home Admin</h2>
        <p><strong>Total Simpanan:</strong> Rp 1.000.000</p>
        <table>
            <tr>
                <th>Kategori</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <td>Pokok</td>
                <td>Rp 500.000</td>
            </tr>
            <tr>
                <td>Wajib</td>
                <td>Rp 300.000</td>
            </tr>
            <tr>
                <td>Sukarela</td>
                <td>Rp 200.000</td>
            </tr>
        </table>
        <h2>Verifikasi Transaksi</h2>
        <table>
            <tr>
                <th>ID Transaksi</th>
                <th>Jumlah</th>
                <th>Tipe</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>001</td>
                <td>Rp 500.000</td>
                <td>Setor Tunai</td>
                <td><button class="button">Accept</button><button class="button reject">Reject</button></td>
            </tr>
            <tr>
                <td>002</td>
                <td>Rp 300.000</td>
                <td>Transfer</td>
                <td><button class="button">Accept</button><button class="button reject">Reject</button></td>
            </tr>
            <tr>
                <td>003</td>
                <td>Rp 200.000</td>
                <td>Setor Tunai</td>
                <td><button class="button">Accept</button><button class="button reject">Reject</button></td>
            </tr>
        </table>
    </div>
</body>
</html>
