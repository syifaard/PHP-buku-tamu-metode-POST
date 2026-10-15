<?php
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $hobi = $_POST['hobi'] ?? [];
    $pesan = $_POST['pesan'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Buku Tamu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #e0f2fe, #eff6ff, #eef2ff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 15px;
        }

        .main-card {
            width: 100%;
            max-width: 750px;
            background: white;
            border: none;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 15px 45px rgba(30, 64, 175, 0.12);
        }

        .card-header-custom {
            background: linear-gradient(135deg, #1d4ed8, #2563eb, #3b82f6);
            color: white;
            text-align: center;
            padding: 35px 20px;
            border: none;
        }

        .header-icon {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin: 0 auto 15px;
        }

        .card-header-custom h2 {
            font-size: 25px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .card-header-custom p {
            font-size: 13px;
            color: #dbeafe;
            margin-bottom: 0;
        }

        .card-body {
            padding: 35px;
        }

        .section-title {
            font-size: 14px;
            font-weight: 600;
            color: #1d4ed8;
            padding-bottom: 14px;
            margin-bottom: 20px;
            border-bottom: 1px solid #e5e7eb;
        }

        .table {
            margin-bottom: 0;
            border-color: #e2e8f0;
            font-size: 13px;
        }

        .table th {
            width: 32%;
            background-color: #f1f5f9;
            color: #334155;
            font-weight: 600;
            padding: 16px;
        }

        .table td {
            background-color: #ffffff;
            color: #475569;
            padding: 16px;
            line-height: 1.8;
            overflow-wrap: anywhere;
        }

        .table tr:hover td {
            background-color: #f8fafc;
        }

        .hobi-list {
            margin: 0;
            padding-left: 20px;
        }

        .hobi-list li {
            margin-bottom: 4px;
        }

        .btn-back {
            display: inline-block;
            background: linear-gradient(135deg, #1d4ed8, #3b82f6);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 24px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            color: white;
            background: linear-gradient(135deg, #1e40af, #2563eb);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.2);
        }

        .footer-text {
            font-size: 11px;
            color: #94a3b8;
            text-align: center;
            margin-top: 25px;
            margin-bottom: 0;
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 20px 15px;
            }

            .card-header-custom {
                padding: 30px 15px;
            }

            .table th {
                width: 38%;
            }

            .table th,
            .table td {
                padding: 12px 10px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">

                <div class="card main-card">

                    <div class="card-header card-header-custom">
                        <div class="header-icon">
                            ✓
                        </div>

                        <h2>BUKU TAMU</h2>
                        <p>Data Anda berhasil diterima. Berikut rincian data yang telah diisi.</p>
                    </div>

                    <div class="card-body">

                        <h6 class="section-title">
                            RINCIAN DATA PENGUNJUNG
                        </h6>

                        <div class="table-responsive">
                            <table class="table table-bordered align-middle">

                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td><?php echo htmlspecialchars($nama); ?></td>
                                </tr>

                                <tr>
                                    <th>NIM</th>
                                    <td><?php echo htmlspecialchars($nim); ?></td>
                                </tr>

                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td><?php echo htmlspecialchars($jk); ?></td>
                                </tr>

                                <tr>
                                    <th>Program Studi</th>
                                    <td><?php echo htmlspecialchars($prodi); ?></td>
                                </tr>

                                <tr>
                                    <th>Hobi</th>
                                    <td>
                                        <?php
                                        if (!empty($hobi) && is_array($hobi)) {
                                            echo "<ul class='hobi-list'>";

                                            foreach ($hobi as $value) {
                                                echo "<li>" . htmlspecialchars($value) . "</li>";
                                            }

                                            echo "</ul>";
                                        } else {
                                            echo "Tidak ada hobi yang dipilih.";
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Pesan dan Kesan</th>
                                    <td><?php echo nl2br(htmlspecialchars($pesan)); ?></td>
                                </tr>

                            </table>
                        </div>

                        <div class="text-center mt-4">
                            <a href="bukutamu.php" class="btn-back">
                                ← Kembali ke Buku Tamu
                            </a>
                        </div>

                        <p class="footer-text">
                            Terima kasih telah mengisi buku tamu kami.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
```