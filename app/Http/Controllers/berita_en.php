<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Berita_en extends Controller
{
    public static function getData()
    {
        return [
            [
                "urutan" => 1,
                "Tahun" => 2025,
                "Bulan" => 9,
                "img" => "images/news/1/1.webp",
                "info_overlay_1" => "JOUDAH AGARWOOD & PERFUMES graced the Grand Haul of Ponpes Al-Ikhlas Assalam with its finest Bukhoor.",
                "img_2" => "images/news/1/2.webp",
                "info_overlay_2" => "JOUDAH AGARWOOD & PERFUMES booth at the National Dhikr and Grand Haul of Ponpes Al-Ikhlas Assalam.",
                "judul" => "Dhikr and Prayer Together for the Nation",
                "deskripsi" => "The Dhikr and Prayer Together for the Nation was held at Al-Ikhlas Assalam Islamic Boarding School, attended by the Minister of Religious Affairs and Tangerang regional officials as a form of unity in praying for blessings, peace, and national progress.",
                "tanggal" => "Tangerang, September 2, 2025",
                "Kolum_1_Deskripsi" => "On Tuesday evening, September 2, 2025, Al-Ikhlas Assalam Islamic Boarding School in Kemiri District became the center of meaningful religious and national activities. Thousands of congregants, students, community leaders, and officials gathered for the Dhikr and Prayer Together for the Nation, which was also the 5th Grand Haul of the foundation’s founder, the late KH. Miftahussalam. The event served as both a tribute and a reflection on his great contributions in establishing and developing the boarding school, which has produced many outstanding generations.

                                        Also present was the Regent of Tangerang, Moch. Maesyal Rasyid, who in his remarks expressed his appreciation to the late founder and to all the people of Tangerang Regency for maintaining a safe and conducive environment. He emphasized the importance of unity in building the region amid the nation’s challenges. The Minister of Religious Affairs of the Republic of Indonesia, Prof. Nazarudin Umar, who is also the advisor of the Miftahussalam Foundation, delivered a sermon on the strategic role of pesantren in producing high-quality students, many of whom have achieved recognition abroad.

                                        From the business sector, the Founder of Joudah Group, Mr. Abdul Jalil, together with the CEO of Joudah Group, Dr (c) Ir. Akhmad Arfan, S.T., M.M., were also present to show support for the event. Their presence reflected the company’s commitment to being close to the community while supporting religious and social activities that have a broad impact on the development of the nation’s character.",
                "Kolum_2_Deskripsi" => "As part of the event, one of Joudah Group’s business units, PT Saudagar Timur Internasional, opened an exhibition booth showcasing various agarwood-based products, ranging from perfumes and bukhoor to other lifestyle items. The Joudah booth attracted great interest from the congregation and guests eager to explore the unique Indonesian fragrance presented in premium products ready to compete in the global market.

                                        The presence of Joudah Group at this event emphasized the company’s role not only in building an integrated business but also in preserving spiritual values, culture, and togetherness, which are essential parts of the nation’s identity.
                                        
                                        Reference Source: Article \"Ponpes Al-Ikhlas Assalam Holds Grand Haul and National Dhikr, Attended by Regent and Minister of Religious Affairs\" – Banten Pikiran Rakyat"
            ],
            // Add more news here
        ];
    }

    public function detail(\Illuminate\Http\Request $request)
    {
        $allNews = self::getData();
        $idx = intval($request->query('idx', 0));
        $news = $allNews[$idx] ?? $allNews[0];
        return view('detail_berita', compact('news', 'allNews'));
    }
}