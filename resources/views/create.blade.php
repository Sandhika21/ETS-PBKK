<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; inistial-scale=1.0">
    <title>Form Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle bg-warning bg-gradient rounded">
            <form method="POST" action="/input" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" placeholder="Nama" id="nama" name="nama">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <label class="input-group-text" for="jenis">Jenis</label>
                    <select class="form-class" id="jenis" name="jenis">
                        <option value="1">Pakaian</option>
                        <option value="2">Makanan</option>
                        <option value="3">Elektronik</option>
                    </select>
                    @error('jenis')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <label class="input-group-text" for="kondisi_br">Kondisi Barang</label>
                    <select class="form-class" id="kondisi_br" name="kondisi_br">
                        <option value="1">Baik</option>
                        <option value="2">Layak</option>
                        <option value="3">Rusak</option>
                    </select>
                    @error('kondisi_br')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Nama</label>
                    <input type="text" placeholder="harga" id="harga" name="harga">
                    @error('harga')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="4"></textarea>
                    @error('keterangan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kecacatan">Kecacatan</label>
                    <textarea class="form-control" id="kecacatan" name="kecacatan" rows="2"></textarea>
                    @error('kecacatan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_barang">Jumlah Barang</label>
                    <input type="text" placeholder="Jumlah" id="jumlah_barang" name="jumlah_barang">
                    @error('jumlah_barang')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control-file" id="foto" name="foto" accept="fileFoto/">
                    @error('foto')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>