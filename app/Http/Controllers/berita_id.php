<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Berita_id extends Controller
{
    public static function getData()
    {
        return [
            [
                "urutan" => 1,
                "Tahun" => 2025,
                "Bulan" => 9,
                "img" => "images/news/1/1.webp",
                "info_overlay_1" => "JOUDAH AGARWOOD & PERFUMES Mengharumkan acara Haul Akbar Ponpes Al-Ikhlas Assalam dengan Bukhur Terbaik nya.",
                "img_2" => "images/news/1/2.webp",
                "info_overlay_2" => "Stand JOUDAH AGARWOOD & PERFUMES di acara Dzikir Kebangsaan dan Haul Akbar Ponpes Al-Ikhlas Assalam.",
                "judul" => "Dzikir dan Doa Bersama untuk Negeri ",
                "deskripsi" => "Dzikir dan Doa Bersama untuk Negeri diselenggarakan di Pesantren Al-Ikhlas Assalam, menghadirkan Menteri Agama serta pejabat daerah Tangerang sebagai bentuk kebersamaan dalam memohon keberkahan, kedamaian, dan kemajuan bangsa.",
                "tanggal" => "Tanggerang, 2 September 2025",
                "Kolum_1_Deskripsi" => "Pada Selasa malam, 2 September 2025, Pondok Pesantren Al-Ikhlas Assalam di Kecamatan Kemiri menjadi pusat kegiatan keagamaan dan kebangsaan yang penuh makna. Ribuan jamaah, santri, tokoh masyarakat, hingga pejabat hadir dalam rangkaian Dzikir dan Doa Bersama untuk Negeri sekaligus Haul Akbar ke-5 pendiri yayasan, almarhum KH. Miftahussalam. Acara ini menjadi momen penghormatan sekaligus refleksi atas jasa besar beliau dalam mendirikan serta mengembangkan pesantren yang telah melahirkan banyak generasi berprestasi.

                                        turut hadir Bupati Tangerang, Moch. Maesyal Rasyid, yang dalam sambutannya menyampaikan apresiasi kepada almarhum dan seluruh masyarakat Kabupaten Tangerang yang tetap menjaga suasana aman dan kondusif. Beliau menekankan pentingnya kebersamaan dalam membangun daerah di tengah berbagai tantangan bangsa. Menteri Agama RI, Prof. Nazarudin Umar, yang juga pembina Yayasan Miftahussalam, memberikan tausiyah tentang peran strategis pesantren dalam melahirkan santri berkualitas, bahkan banyak yang menorehkan prestasi hingga ke mancanegara.

                                        Dari kalangan dunia usaha, Founder Joudah Group, Bapak Abdul Jalil, bersama CEO Joudah Group, Dr (c) Ir. Akhmad Arfan, S.T., M.M., juga hadir memberikan dukungan dalam acara tersebut. Kehadiran pimpinan Joudah Group mencerminkan komitmen perusahaan untuk selalu dekat dengan masyarakat serta mendukung kegiatan keagamaan dan sosial yang memiliki dampak luas bagi pembangunan karakter bangsa.",
                "Kolum_2_Deskripsi" => "Sebagai bagian dari rangkaian acara, salah satu unit usaha Joudah Group, PT Saudagar Timur Internasional, turut membuka stand pameran yang menampilkan berbagai produk berbasis gaharu, mulai dari parfum, bukhur, hingga produk gaya hidup lainnya. Stand Joudah menjadi daya tarik bagi jamaah dan tamu undangan yang antusias mengenal lebih jauh keharuman khas Indonesia dalam bentuk produk premium yang siap bersaing di pasar global.

                                        Kehadiran Joudah Group dalam acara ini menegaskan peran perusahaan tidak hanya dalam membangun bisnis terintegrasi, tetapi juga dalam merawat nilai spiritual, budaya, dan kebersamaan yang menjadi bagian penting dari identitas bangsa.
                                        
                                        Sumber Referensi: Artikel \"Ponpes Al-Ikhlas Assalam Gelar Haul Akbar dan Dzikir Kebangsaan, Dihadiri Bupati dan Menteri Agama\" – Banten Pikiran Rakyat"
            ],
            // Tambahkan berita lainnya di sini
        ];
    }

    public function detail(\Illuminate\Http\Request $request)
    {
        $allBerita = self::getData();
        $idx = intval($request->query('idx', 0));
        $berita = $allBerita[$idx] ?? $allBerita[0];
        return view('detail_berita', compact('berita', 'allBerita'));
    }
}