<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neo Garage | Sistem E-Bengkel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background:
                radial-gradient(circle at top right, rgba(0,255,255,0.12), transparent 25%),
                radial-gradient(circle at bottom left, rgba(255,0,255,0.10), transparent 30%),
                linear-gradient(135deg, #030712, #0f172a, #111827);
            min-height: 100vh;
            color: white;
        }

        /* NAVBAR */
        .navbar-custom {
            background: rgba(8, 15, 40, 0.75);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(0,255,255,0.12);
            padding: 18px 0;
            box-shadow: 0 0 25px rgba(0,255,255,0.08);
        }

        .navbar-brand {
            font-family: 'Orbitron', sans-serif;
            font-size: 30px;
            font-weight: 800;
            color: #00f5d4 !important;
            letter-spacing: 3px;
            text-shadow: 0 0 12px rgba(0,245,212,0.4);
        }

        /* MAIN CARD */
        .card-box {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 30px;
            padding: 35px;
            box-shadow:
                0 0 30px rgba(0,255,255,0.08),
                inset 0 0 25px rgba(255,255,255,0.02);
            position: relative;
            overflow: hidden;
        }

        .card-box::before {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            background: radial-gradient(circle, rgba(0,255,255,0.12), transparent 70%);
            top: -100px;
            right: -80px;
            border-radius: 50%;
        }

        h2 {
            font-family: 'Orbitron', sans-serif;
            font-size: 38px;
            font-weight: 800;
            background: linear-gradient(to right, #00f5d4, #00bbf9, #9b5de5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 2px;
        }

        /* BUTTON */
        .btn-add {
            background: linear-gradient(135deg, #00f5d4, #00bbf9);
            color: #001219;
            border: none;
            padding: 14px 28px;
            border-radius: 50px;
            font-weight: 700;
            box-shadow: 0 0 18px rgba(0,245,212,0.35);
            transition: 0.3s ease;
        }

        .btn-add:hover {
            transform: scale(1.05);
            color: #001219;
        }

        /* TABLE */
        .table {
            color: white;
            border-collapse: separate;
            border-spacing: 0 12px;
        }

        .table thead tr {
            background: linear-gradient(135deg, rgba(0,255,255,0.15), rgba(155,93,229,0.15));
        }

        .table thead th {
            border: none;
            color: #00f5d4;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 18px;
            font-size: 14px;
        }

        .table tbody tr {
            background: rgba(255,255,255,0.04);
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            transform: scale(1.01);
            background: rgba(0,255,255,0.07);
            box-shadow: 0 0 18px rgba(0,255,255,0.08);
        }

        .table td {
            border: none;
            padding: 18px;
            vertical-align: middle;
        }

        /* PLAT */
        .plat-box {
            background: linear-gradient(135deg, #ff006e, #8338ec);
            color: white;
            padding: 8px 14px;
            border-radius: 14px;
            font-weight: 700;
            display: inline-block;
            box-shadow: 0 0 12px rgba(255,0,110,0.25);
        }

        /* MERK */
        .merk-box {
            background: rgba(0,245,212,0.12);
            color: #00f5d4;
            padding: 8px 14px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
        }

        /* BUTTON ACTION */
        .btn-edit {
            background: linear-gradient(135deg, #ffbe0b, #fb5607);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 8px 18px;
            font-weight: 700;
        }

        .btn-delete {
            background: linear-gradient(135deg, #ff006e, #d90429);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 8px 18px;
            font-weight: 700;
        }

        .btn-edit:hover,
        .btn-delete:hover {
            opacity: 0.9;
            color: white;
            transform: scale(1.04);
        }

        /* EMPTY */
        .empty-data {
            text-align: center;
            padding: 50px;
            color: rgba(255,255,255,0.65);
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="/kendaraan">
                ⚡ E-BENGKEL
            </a>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container mt-5">

        <div class="card-box">

            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                <h2>DAFTAR SERVIS</h2>

                <a href="/kendaraan/create" class="btn btn-add">
                    + Tambah Kendaraan
                </a>
            </div>

            <div class="table-responsive">
                <table class="table">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Plat Nomor</th>
                            <th>Nama Pemilik</th>
                            <th>Merk Kendaraan</th>
                            <th>Keluhan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($data as $item)

                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                <span class="plat-box">
                                    {{ $item->plat_nomor }}
                                </span>
                            </td>

                            <td class="fw-semibold">
                                {{ $item->nama_pemilik }}
                            </td>

                            <td>
                                <span class="merk-box">
                                    {{ $item->merk_kendaraan }}
                                </span>
                            </td>

                            <td>{{ $item->keluhan }}</td>

                            <td class="d-flex gap-2">

                                <a href="/kendaraan/{{ $item->id }}/edit"
                                   class="btn btn-edit btn-sm">
                                   ✏ Edit
                                </a>

                                <form action="/kendaraan/{{ $item->id }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus kendaraan dari antrean?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-delete btn-sm">
                                        ⛔ Hapus
                                    </button>

                                </form>

                            </td>
                        </tr>

                        @empty

                        <tr>
                            <td colspan="6">
                                <div class="empty-data">
                                    <h3>🚘 Belum Ada Data Kendaraan</h3>
                                    <p>Tambahkan kendaraan baru untuk memulai sistem.</p>
                                </div>
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>
            </div>

        </div>

    </div>

</body>
</html>