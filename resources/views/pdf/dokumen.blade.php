<!DOCTYPE html>
<html>
<head>
    <title>Dokumen</title>
</head>
<style>
    /* Styling untuk memastikan gambar mengisi halaman dengan jarak yang cukup */
    .page {
        page-break-before: always; /* Memaksa halaman baru */
        margin-bottom: 20px;
    }
    img {
        display: block;
        width: 100%;
        margin: 0 auto;
    }
</style>
<body>

    <img src="{{ storage_path('app/public/'.$dokumen->kartu_keluarga) }}" width="100%" alt="Kartu Keluarga" style="margin-bottom: 20px;"><br/>
    <img src="{{ storage_path('app/public/'.$dokumen->akta_kelahiran) }}" width="100%" alt="Akta Kelahiran" style="margin-bottom: 20px;"><br/>
    <img src="{{ storage_path('app/public/'.$dokumen->ktp_ibu) }}" width="100%" alt="KTP Ibu" style="margin-bottom: 20px;"><br/>
    <img src="{{ storage_path('app/public/'.$dokumen->ktp_ayah) }}" width="100%" alt="KTP Ayah" style="margin-bottom: 20px;"><br/>
</body>
</html>
