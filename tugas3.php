<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas2.php</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 5px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: blue;
        }
        img {
            width: 150px;
        }
    </style>
</head>
<body>

<?php
// NRP Zahrotun
$nrp = 701230358;

// Menentukan kategori berdasarkan tiga digit terakhir NRP
$kategori_code = $nrp % 5;
$kategori = "";

switch ($kategori_code) {
    case 1:
        $kategori = "Budaya Daerah di Indonesia";
        break;
    case 2:
        $kategori = "Penemu-penemu terkenal di dunia";
        break;
    case 3:
        $kategori = "Flora dan Fauna terancam punah";
        break;
    case 4:
        $kategori = "Pahlawan Nasional Indonesia";
        break;
    case 0:
        $kategori = "Perusahaan Teknologi";
        break;
}

// Membuat associative array dengan minimal 10 data dan 5 field termasuk gambar
$data = [
    [
        "nama" => "Harimau Sumatra",
        "deskripsi" => "Harimau endemik dari Pulau Sumatra.",
        "lokasi" => "Sumatra",
        "status" => "Terancam Punah",
        "gambar" => "https://radarlambar.bacakoran.co/upload/9123103be72bc58bd894ace490ee6f5f.jpeg"
    ],
    [
        "nama" => "Orangutan Kalimantan",
        "deskripsi" => "Primata asli dari Kalimantan.",
        "lokasi" => "Kalimantan",
        "status" => "Terancam Punah",
        "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0whEoWIR1GegIf-HTt5qWzc1WJAcr3-JHhg&s.jpg"
    ],
    [
        "nama" => "Badak Jawa",
        "deskripsi" => "Badak langka yang hanya ditemukan di Ujung Kulon.",
        "lokasi" => "Ujung Kulon",
        "status" => "Kritis",
        "gambar" => "https://miro.medium.com/v2/resize:fit:800/0*hCJHtpthOEFwdbel.jpg"
    ],
    [
        "nama" => "Gajah Sumatra",
        "deskripsi" => "Subspesies gajah Asia yang tinggal di Sumatra.",
        "lokasi" => "Sumatra",
        "status" => "Terancam Punah",
        "gambar" => "https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/wartanasional/2017/08/gajah.jpg"
    ],
    [
        "nama" => "Elang Jawa",
        "deskripsi" => "Burung elang yang hanya ada di Pulau Jawa.",
        "lokasi" => "Jawa",
        "status" => "Kritis",
        "gambar" => "https://tribratanews.polri.go.id/web/image/blog.post/61150/image"
    ],
    [
        "nama" => "Komodo",
        "deskripsi" => "Kadal terbesar di dunia yang hanya ada di Indonesia.",
        "lokasi" => "Nusa Tenggara",
        "status" => "Rentan",
        "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRB92Fx9xDsNH9hEXCx0byD5qvh1s-eQ9F_0w&s"
    ],
    [
        "nama" => "Anoa",
        "deskripsi" => "Mamalia endemik dari Sulawesi.",
        "lokasi" => "Sulawesi",
        "status" => "Terancam Punah",
        "gambar" => "https://1001indonesia.net/asset/2019/10/Anoa.jpg"
    ],
    [
        "nama" => "Kucing Merah Kalimantan",
        "deskripsi" => "Kucing liar yang hanya ditemukan di Kalimantan.",
        "lokasi" => "Kalimantan",
        "status" => "Terancam Punah",
        "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQmR_6xWMhfFyGjnYa_BR4vkjs9Mwk0zbmHw&s"
    ],
    [
        "nama" => "Bekantan",
        "deskripsi" => "Primata berhidung panjang yang hidup di Kalimantan.",
        "lokasi" => "Kalimantan",
        "status" => "Rentan",
        "gambar" => "https://prcfindonesia.org/wp-content/uploads/2021/08/Bekantan.jpg"
    ],
    [
        "nama" => "Burung Cendrawasih",
        "deskripsi" => "Burung khas Papua dengan bulu yang indah.",
        "lokasi" => "Papua",
        "status" => "Hampir Terancam",
        "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_oYQZqCCB6FRgsn_DsPEG0mC0VnlBaoW5MQ&s"
    ]
];

// Menampilkan tabel data
echo "<h3>Kategori: $kategori</h3>";
echo "<table>";
echo "<tr><th>Nama</th><th>Deskripsi</th><th>Lokasi</th><th>Status</th><th>Gambar</th></tr>";

foreach ($data as $item) {
    echo "<tr>";
    echo "<td>{$item['nama']}</td>";
    echo "<td>{$item['deskripsi']}</td>";
    echo "<td>{$item['lokasi']}</td>";
    echo "<td>{$item['status']}</td>";
    echo "<td><img src='{$item['gambar']}' alt='{$item['nama']}'></td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>