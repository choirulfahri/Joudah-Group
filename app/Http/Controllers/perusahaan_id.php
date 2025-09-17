<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perusahaan_id extends Controller
{
    public static function getData()
    {
        return [
            [   
                "urutan" => 1,
                "perusahaan" => "PT Jawda Mitra Prima",
                "icon" => "images/Icon/PT JAWDA MITRA PRIMA.svg",
                "DeskripsiPerusahaan" => "Didirikan pada tahun 2006, PT Jawda Mitra Prima hadir sebagai perusahaan yang berfokus pada pengelolaan langsung lahan gaharu dengan pendekatan yang berkelanjutan. Sejak awal berdirinya, perusahaan berkomitmen untuk menjaga kelestarian alam sekaligus memastikan tersedianya bahan baku gaharu dengan kualitas terbaik. Melalui pengelolaan yang terintegrasi mulai dari penanaman, perawatan, hingga pemanenan, PT Jawda Mitra Prima tidak hanya berorientasi pada hasil produksi, tetapi juga pada keberlangsungan ekosistem. Dengan prinsip kehati-hatian dan tanggung jawab lingkungan, perusahaan berupaya menghadirkan produk gaharu yang bernilai tinggi, baik untuk pasar domestik maupun internasional, sambil tetap menjaga keseimbangan antara kebutuhan industri dan kelestarian sumber daya alam.",
                "Industri" => "Gaharu",
                "Alamat" => "Jl. Joglo Raya No. 67, RT. 004/RW. 003, Kelurahan Joglo, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11640, Indonesia",
            ],
            [   
                "urutan" => 2,
                "perusahaan" => "CV Pancoran Bumi Persada",
                "icon" => "images/Icon/CV PANCORAN BUMI PERSADA.svg",
                "DeskripsiPerusahaan" => "Didirikan pada tahun 2009, CV Pancoran Bumi Persada lahir dari kebutuhan untuk memperluas jangkauan distribusi yang sebelumnya hanya berfokus di Papua, menuju pusat aktivitas perdagangan nasional di Jakarta. Perusahaan ini berperan penting dalam bidang distribusi dan logistik, dengan tanggung jawab utama untuk menjamin keutuhan serta ketepatan waktu pengiriman bahan hingga ke proses produksi berikutnya. Dengan hadirnya di Jakarta, CV Pancoran Bumi Persada mampu mengembangkan jaringan distribusi antar pulau, sehingga rantai pasok berjalan lebih efisien dan terintegrasi. Melalui manajemen logistik yang profesional serta dukungan armada dan sistem transportasi yang handal, perusahaan memastikan setiap produk sampai ke tujuan dengan kualitas terbaik.",
                "Industri" => "Logistik",
                "Alamat" => "Jl. Joglo Raya No. 67, RT. 004/RW. 003, Kelurahan Joglo, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11640, Indonesia",
            ],
            [   
                "urutan" => 3,
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "DeskripsiPerusahaan" => "Didirikan pada tahun 2021, PT Saudagar Timur International hadir dengan visi membawa gaharu Indonesia ke tingkat yang lebih tinggi dengan tidak lagi sekadar menjual bahan mentah, melainkan mengolahnya menjadi minyak gaharu murni dan beragam produk premium seperti parfum eksklusif, dupa, bukhur, parfum mobil, dan kreasi lainnya. Melalui proses penyulingan modern dan standar kualitas internasional, kami menghadirkan keharuman yang memadukan keaslian aroma alami dengan sentuhan elegan, menjadi simbol kemajuan, inovasi, dan dedikasi dalam menghadirkan produk berkelas dunia yang bukan hanya sekadar aroma, tetapi juga pernyataan gaya dan identitas.",
                "Industri" => "Parfum & Aromaterapi",
                "Alamat" => "Jl. Joglo Raya No. 67, RT. 004/RW. 003, Kelurahan Joglo, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11640, Indonesia",
            ],                        
        ];
    }
    public function detail(\Illuminate\Http\Request $request)
    {
    $allLowongan = self::getData();
    $idx = intval($request->query('idx', 0));
    $lowongan = $allLowongan[$idx] ?? $allLowongan[0];
    $title = 'Detail Perusahaan';
    return view('detail_perusahaan', compact('lowongan', 'allLowongan', 'title'));
    }
}