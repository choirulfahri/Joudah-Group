<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perusahaan_en extends Controller
{
    public static function getData()
    {
        return [
            [   
                "urutan" => 1,
                "perusahaan" => "PT Jawda Mitra Prima",
                "icon" => "images/Icon/PT JAWDA MITRA PRIMA.svg",
                "DeskripsiPerusahaan" => "Founded in 2006, PT Jawda Mitra Prima is a company focused on the direct management of agarwood plantations with a sustainable approach. Since its establishment, the company has been committed to preserving nature while ensuring the availability of high-quality agarwood raw materials. Through an integrated process that includes planting, cultivation, and harvesting, PT Jawda Mitra Prima not only prioritizes production results but also the continuity of the ecosystem. Guided by principles of prudence and environmental responsibility, the company strives to deliver high-value agarwood products for both domestic and international markets, while maintaining a balance between industrial needs and natural resource sustainability.",
                "Industri" => "Agarwood",
                "Alamat" => "Jl. Joglo Raya No. 67, RT. 004/RW. 003, Joglo Subdistrict, Kembangan District, West Jakarta City, Special Capital Region of Jakarta 11640, Indonesia",
            ],
            [   
                "urutan" => 2,
                "perusahaan" => "CV Pancoran Bumi Persada",
                "icon" => "images/Icon/CV PANCORAN BUMI PERSADA.svg",
                "DeskripsiPerusahaan" => "Established in 2009, CV Pancoran Bumi Persada was founded to expand distribution coverage that was previously limited to Papua, towards the national trade hub in Jakarta. The company plays a vital role in distribution and logistics, with the primary responsibility of ensuring the integrity and timeliness of material delivery up to the next stage of production. With its presence in Jakarta, CV Pancoran Bumi Persada has developed inter-island distribution networks, making the supply chain more efficient and integrated. Through professional logistics management, supported by a reliable fleet and transportation system, the company ensures every product reaches its destination in the best quality.",
                "Industri" => "Logistics",
                "Alamat" => "Jl. Joglo Raya No. 67, RT. 004/RW. 003, Joglo Subdistrict, Kembangan District, West Jakarta City, Special Capital Region of Jakarta 11640, Indonesia",
            ],
            [   
                "urutan" => 3,
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "DeskripsiPerusahaan" => "Founded in 2021, PT Saudagar Timur Internasional was established with the vision of elevating Indonesian agarwood to a higher level—not merely selling raw materials, but processing them into pure agarwood oil and a variety of premium products such as exclusive perfumes, incense, bakhoor, car fragrances, and other creations. Through modern distillation processes and adherence to international quality standards, we deliver fragrances that combine the authenticity of natural aromas with an elegant touch. Our products represent progress, innovation, and dedication, offering world-class quality that serves not only as a fragrance but also as a statement of style and identity.",
                "Industri" => "Perfume & Aromatherapy",
                "Alamat" => "Jl. Joglo Raya No. 67, RT. 004/RW. 003, Joglo Subdistrict, Kembangan District, West Jakarta City, Special Capital Region of Jakarta 11640, Indonesia",
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