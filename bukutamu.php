<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>

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
            max-width: 650px;
            background: white;
            border: none;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 15px 45px rgba(30, 64, 175, 0.12);
        }

        .card-header-custom {
            background: linear-gradient(135deg, #1d4ed8, #2563eb, #3b82f6);
            color: white;
            padding: 35px 25px;
            text-align: center;
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
            font-size: 27px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .card-header-custom p {
            font-size: 13px;
            margin: 0;
            color: #dbeafe;
        }

        .card-body {
            padding: 35px;
        }

        .section-title {
            font-size: 14px;
            font-weight: 600;
            color: #1d4ed8;
            margin-bottom: 22px;
            padding-bottom: 12px;
            border-bottom: 1px solid #e5e7eb;
        }

        .form-label {
            font-size: 13px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 9px;
        }

        .form-control,
        .form-select {
            font-size: 13px;
            padding: 12px 14px;
            border: 1px solid #dbe3ef;
            border-radius: 10px;
            background-color: #f8fafc;
            transition: all 0.25s ease;
        }

        .form-control:focus,
        .form-select:focus {
            background-color: white;
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.12);
        }

        .form-control::placeholder {
            color: #94a3b8;
            font-size: 12px;
        }

        .choice-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 14px 16px;
            height: 100%;
        }

        .form-check {
            margin-bottom: 9px;
        }

        .form-check:last-child {
            margin-bottom: 0;
        }

        .form-check-input {
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: #2563eb;
            border-color: #2563eb;
        }

        .form-check-input:focus {
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .form-check-label {
            font-size: 12px;
            color: #475569;
            cursor: pointer;
        }

        .btn-submit {
            background: linear-gradient(135deg, #1d4ed8, #3b82f6);
            color: white;
            border: none;
            border-radius: 11px;
            padding: 14px;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #1e40af, #2563eb);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.25);
        }

        .footer-text {
            text-align: center;
            font-size: 11px;
            color: #94a3b8;
            margin-top: 22px;
            margin-bottom: 0;
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 25px 20px;
            }

            .card-header-custom {
                padding: 30px 20px;
            }

            .card-header-custom h2 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <div class="card main-card">

                    <div class="card-header card-header-custom">
                        <div class="header-icon">
                            ✉
                        </div>

                        <h2>BUKU TAMU</h2>
                        <p>Selamat datang! Silakan lengkapi data diri Anda.</p>
                    </div>

                    <div class="card-body">

                        <form action="proses_buku.php" method="POST">

                            <h6 class="section-title">
                                INFORMASI PENGUNJUNG
                            </h6>

                            <!-- Nama -->
                            <div class="mb-4">
                                <label class="form-label">Nama Lengkap</label>
                                <input
                                    type="text"
                                    name="nama"
                                    class="form-control"
                                    placeholder="Masukkan nama lengkap Anda"
                                    required
                                >
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Nomor Induk Mahasiswa (NIM)</label>
                                <input
                                    type="text"
                                    name="nim"
                                    class="form-control"
                                    placeholder="Masukkan NIM Anda"
                                    required
                                >
                            </div>

                            <div class="mb-4">
                                <label class="form-label d-block">Jenis Kelamin</label>

                                <div class="choice-box">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="jk"
                                            id="laki"
                                            value="Laki-laki"
                                            required
                                        >
                                        <label class="form-check-label" for="laki">
                                            Laki-laki
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="jk"
                                            id="perempuan"
                                            value="Perempuan"
                                        >
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Program Studi</label>

                                <select name="prodi" class="form-select" required>
                                    <option value="" disabled selected>
                                        Pilih program studi
                                    </option>
                                    <option value="Pendidikan Ilmu Komputer">
                                        Pendidikan Ilmu Komputer
                                    </option>
                                    <option value="Ilmu Komputer">
                                        Ilmu Komputer
                                    </option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label d-block">Hobi</label>

                                <div class="choice-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    name="hobi[]"
                                                    id="ngoding"
                                                    value="Ngoding"
                                                >
                                                <label class="form-check-label" for="ngoding">
                                                    Ngoding
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    name="hobi[]"
                                                    id="kepo"
                                                    value="Kepo"
                                                >
                                                <label class="form-check-label" for="kepo">
                                                    Kepo
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    name="hobi[]"
                                                    id="twitteran"
                                                    value="Twitteran"
                                                >
                                                <label class="form-check-label" for="twitteran">
                                                    Twitteran
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    name="hobi[]"
                                                    id="ngaji"
                                                    value="Ngaji"
                                                >
                                                <label class="form-check-label" for="ngaji">
                                                    Ngaji
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Pesan dan Kesan</label>

                                <textarea
                                    name="pesan"
                                    class="form-control"
                                    rows="5"
                                    placeholder="Tuliskan pesan atau kesan Anda di sini..."
                                    required
                                ></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-submit">
                                    Kirim Data &nbsp; →
                                </button>
                            </div>

                        </form>

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