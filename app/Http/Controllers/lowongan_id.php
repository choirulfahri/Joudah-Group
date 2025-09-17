<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lowongan_id extends Controller
{
    public static function getData()
    {
        return [
            [   
                "urutan" => 1,
                "img" => "images/Lamaran/OB_1.webp",
                "judul" => " Office Boy & Cleaning Service",
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "departemen" => "Kebersihan",
                "tipe" => "Kontrak",
                "level" => "Berpengalaman 1 Tahun",
                "deskripsi" => "Bertanggung jawab dalam menjaga kebersihan, kerapihan, dan kenyamanan lingkungan kerja perusahaan. Melakukan pembersihan area kantor, pantry, toilet, ruang meeting, serta memastikan peralatan kebersihan digunakan dengan baik. Selain itu, membantu kebutuhan operasional sederhana seperti penyajian minuman, menyiapkan ruangan untuk rapat, serta mendukung aktivitas harian karyawan agar lingkungan kerja tetap produktif dan higienis.",
                "Pendidikan" => "SMA/SMK/Sederajat",
                "persyaratan" => [
                    "Pria, Minimal 18 Tahun ",
                    "Minimal Lulusan SMA/SMK/Sederajat",
                    "Pengalaman Kerja Minimal 1 Tahun di bidang yang sama",
                    "Memiliki keterampilan dasar hospitality",
                    "Mampu menggunakan alat kebersihan",
                    "Berpengalaman di bidang perhotelan/ kebersihan"
                ],
                "Lampiran" => [
                    "Curriculum Vitae (CV)",
                    "Foto Copy KTP",
                    "Ijazah Terakhir",
                    "Foto Copy NPWP, Jika Ada",
                ],
                "tanggal" => "Jakarta, 4 September 2025",
                "button_view_detail" => "Lihat Detail"
            ],
            [   
                "urutan" => 2,
                "img" => "images/Lamaran/HR.webp",
                "judul" => " Human Resource",
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "departemen" => "Sumber Daya Manusia",
                "tipe" => "Kontrak",
                "level" => "Berpengalaman 1 Tahun",
                "deskripsi" => "Posisi ini bertanggung jawab untuk melakukan proses rekrutmen karyawan mulai dari penyusunan job posting, seleksi berkas, wawancara, hingga administrasi penerimaan karyawan baru. Selain itu, juga mengelola data karyawan yang mencakup absensi, cuti, payroll, serta evaluasi kinerja. Tugas lainnya meliputi penyusunan dan implementasi SOP serta kebijakan perusahaan terkait ketenagakerjaan, menangani administrasi hubungan industrial, perjanjian kerja, serta memastikan kepatuhan terhadap UU Ketenagakerjaan. Posisi ini juga berperan sebagai penghubung antara manajemen dan karyawan dalam menyelesaikan isu terkait SDM, serta menyusun laporan berkala mengenai administrasi dan pengelolaan SDM.",
                "Pendidikan" => "S1 Psikologi / Manajemen SDM / Hukum / atau bidang terkait",
                "persyaratan" => [
                    "Pendidikan minimal S1 (diutamakan Psikologi/SDM)",
                    "Komunikatif, teliti, dan memiliki integritas.",
                    "Memahami dasar UU Ketenagakerjaan Indonesia.",
                    "Mampu bekerja secara mandiri maupun tim.",
                    "Terbiasa dengan sistem administrasi SDM (SOP, form, payroll, absensi, dll).",
                ],
                "Lampiran" => [
                    "Curriculum Vitae (CV)",
                    "Ijazah Terakhir",
                ],
                "tanggal" => "Jakarta, 8 September 2025",
                "button_view_detail" => "Lihat Detail"
            ],
            [   
                "urutan" => 3,
                "img" => "images/Lamaran/poster_magang_joudah.webp  ",
                "judul" => " Sales Intern ",
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "departemen" => " Sales",
                "tipe" => "Magang",
                "level" => "Intership",
                "deskripsi" => "Sebagai Sales Intern, Anda akan terlibat dalam kegiatan pemasaran dan penjualan, termasuk membantu menyusun materi promosi, melakukan riset pasar, menghubungi calon pelanggan, serta mendukung tim dalam mencapai target penjualan. Posisi ini juga memberikan kesempatan untuk mengembangkan kemampuan komunikasi, negosiasi, dan presentasi secara langsung dengan klien maupun internal perusahaan.",
                "Pendidikan" => "Mahasiswa aktif minimal semester 4 (Manajemen, Pemasaran, Komunikasi, atau bidang terkait)",
                "persyaratan" => [                        
                    "Memiliki pengalaman organisasi di bidang sales/marketing menjadi nilai tambah.",
                    "Komunikatif, percaya diri, dan memiliki kemampuan public speaking yang baik.",
                    "Berorientasi pada pembelajaran, mampu bekerja secara mandiri maupun dalam tim.",
                    "Enerjik, antusias, dan memiliki minat tinggi di bidang sales.",
                    "Mahir menggunakan aplikasi pendukung (MS Office: Word, Excel, PowerPoint, dan Google Workspace).",
                    "Memiliki kendaraan pribadi (jika diperlukan untuk kunjungan pelanggan)."

                ],
                "Lampiran" => [
                    "Curriculum Vitae (CV)",
                ],
                "tanggal" => "Jakarta, 9 September 2025",
                "button_view_detail" => "Lihat Detail"
            ],
            [   
                "urutan" => 4,
                "img" => "images/Lamaran/poster_magang_joudah.webp",
                "judul" => " Marketing",
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "departemen" => "Marketing",
                "tipe" => "Magang",
                "level" => "Internship",
                "deskripsi" => "Sebagai Marketing Intern, Anda akan mendukung tim dalam berbagai aktivitas pemasaran, mulai dari perencanaan kampanye, pembuatan konten, riset pasar, hingga pengelolaan media sosial. Posisi ini memberikan kesempatan untuk mengembangkan keterampilan digital marketing, komunikasi, dan branding, serta berkontribusi langsung pada proyek-proyek pemasaran perusahaan.",
                "Pendidikan" => "Mahasiswa aktif minimal semester 4 (Manajemen, Pemasaran, Komunikasi, atau bidang terkait)",
                "persyaratan" => [
                    "Memiliki pengalaman organisasi atau proyek di bidang marketing/branding menjadi nilai tambah.",
                    "Memahami dasar digital marketing (media sosial, konten, SEO/SEM).",
                    "Mahir menggunakan MS Office dan Google Workspace; kemampuan menggunakan Canva/Adobe/Analytics menjadi nilai tambah.",
                    "Memiliki kemampuan komunikasi dan presentasi yang baik.",
                    "Kreatif, proaktif, mau belajar, dan mampu bekerja dalam tim.",
                    "Energik, teliti, dan bersedia mendukung berbagai proyek pemasaran."
                ],
                "Lampiran" => [
                    "Curriculum Vitae (CV)",
                ],
                "tanggal" => "Jakarta, 9 September 2025",
                "button_view_detail" => "Lihat Detail"             
            ],     
            [   
                "urutan" => 5,
                "img" => "images/Lamaran/poster_magang_joudah.webp",
                "judul" => " Human Resources Intern",
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "departemen" => "Sumber Daya Manusia",
                "tipe" => "Magang",
                "level" => "Internship",
                "deskripsi" => "Sebagai Human Resources Intern, Anda akan mendukung tim HR dalam berbagai kegiatan seperti rekrutmen, onboarding, administrasi, hingga pelatihan karyawan. Posisi ini memberikan kesempatan untuk mengembangkan pemahaman mengenai fungsi-fungsi HR serta keterampilan komunikasi, interpersonal, dan problem-solving di lingkungan kerja profesional.",
                "Pendidikan" => "Mahasiswa aktif minimal semester 4 (Psikologi, Manajemen SDM, Hukum, atau bidang terkait)",
                "persyaratan" => [
                    "Memiliki pengalaman organisasi atau kepanitiaan di bidang rekrutmen, pelatihan, atau administrasi menjadi nilai tambah.",
                    "Memahami dasar fungsi HR (rekrutmen, administrasi, pelatihan, hubungan karyawan).",
                    "Memiliki kemampuan komunikasi, interpersonal, dan problem solving yang baik.",
                    "Mahir menggunakan MS Office atau Google Workspace.",
                    "Teliti, disiplin, berintegritas, serta mampu bekerja secara mandiri maupun dalam tim.",
                    "Proaktif, mau belajar, dan bersedia mendukung berbagai aktivitas HR (rekrutmen, onboarding, pelatihan, administrasi)."
                ],
                "Lampiran" => [
                    "Curriculum Vitae (CV)",
                ],
                "tanggal" => "Jakarta, 9 September 2025",
                "button_view_detail" => "Lihat Detail"
            ],
        ];
    }

    public function detail(\Illuminate\Http\Request $request)
    {
    $allLowongan = self::getData();
    $idx = intval($request->query('idx', 0));
    $lowongan = $allLowongan[$idx] ?? $allLowongan[0];
    $title = 'Detail Lowongan';
    return view('detail_lowongan', compact('lowongan', 'allLowongan', 'title'));
    }
}