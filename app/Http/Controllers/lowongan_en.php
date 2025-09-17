<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lowongan_en extends Controller
{
    public static function getData()
    {
        return [
            [   
                "urutan" => 1,
                "img" => "images/Lamaran/OB_1.webp",
                "judul" => "Office Boy & Cleaning Service",
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "departemen" => "Cleaning",
                "tipe" => "Contract",
                "level" => "1 Year Experience",
                "deskripsi" => "Responsible for maintaining cleanliness, tidiness, and comfort in the company’s work environment. Duties include cleaning office areas, pantry, toilets, meeting rooms, and ensuring cleaning equipment is used properly. Additionally, assisting with simple operational needs such as serving drinks, preparing meeting rooms, and supporting employees’ daily activities to keep the workplace productive and hygienic.",
                "Pendidikan" => "High School / Vocational School or Equivalent",
                "persyaratan" => [
                    "Male, Minimum 18 Years Old",
                    "Minimum High School / Vocational School Graduate",
                    "Minimum 1 Year of Work Experience in the same field",
                    "Basic hospitality skills",
                    "Able to use cleaning tools",
                    "Experience in hospitality/cleaning is a plus"
                ],
                "Lampiran" => [
                    "Curriculum Vitae (CV)",
                    "Copy of ID Card (KTP)",
                    "Latest Diploma Certificate",
                    "Copy of Tax ID (NPWP), if available",
                ],
                "tanggal" => "Jakarta, September 4, 2025",
                "button_view_detail" => "View Detail"               
            ],
            [   
                "urutan" => 2,
                "img" => "images/Lamaran/HR.webp",
                "judul" => "Human Resource",
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "departemen" => "Human Resources",
                "tipe" => "Contract",
                "level" => "1 Year Experience",
                "deskripsi" => "This position is responsible for the employee recruitment process starting from preparing job postings, document screening, interviews, to new employee administration. Additionally, managing employee data including attendance, leave, payroll, and performance evaluations. Other tasks include drafting and implementing SOPs and company policies related to employment, handling industrial relations administration, employment contracts, and ensuring compliance with labor laws. This position also acts as a liaison between management and employees in resolving HR-related issues and prepares periodic reports regarding HR administration and management.",
                "Pendidikan" => "Bachelor’s Degree in Psychology / Human Resources Management / Law / or related fields",
                "persyaratan" => [
                    "Minimum Bachelor’s Degree (preferably Psychology/HR)",
                    "Communicative, detail-oriented, and having integrity",
                    "Understanding of Indonesian labor law basics",
                    "Able to work independently or in a team",
                    "Familiar with HR administration systems (SOP, forms, payroll, attendance, etc.)",
                ],
                "Lampiran" => [
                    "Curriculum Vitae (CV)",
                    "Latest Diploma Certificate",
                ],
                "tanggal" => "Jakarta, September 8, 2025",
                "button_view_detail" => "View Detail" 
            ],
            [   
                "urutan" => 3,
                "img" => "images/Lamaran/poster_magang_joudah.webp",
                "judul" => "Sales Intern",
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "departemen" => "Sales",
                "tipe" => "Internship",
                "level" => "Internship",
                "deskripsi" => "As a Sales Intern, you will be involved in marketing and sales activities, including assisting in preparing promotional materials, conducting market research, contacting potential customers, and supporting the team in achieving sales targets. This position also provides opportunities to develop communication, negotiation, and presentation skills directly with clients and internally within the company.",
                "Pendidikan" => "Active university student, minimum 4th semester (Management, Marketing, Communication, or related fields)",
                "persyaratan" => [                        
                    "Organizational experience in sales/marketing is an advantage",
                    "Communicative, confident, and good public speaking skills",
                    "Learning-oriented, able to work independently or in a team",
                    "Energetic, enthusiastic, and highly interested in sales",
                    "Proficient in supporting applications (MS Office: Word, Excel, PowerPoint, and Google Workspace)",
                    "Owns a personal vehicle (if required for customer visits)"
                ],
                "Lampiran" => [
                    "Curriculum Vitae (CV)",
                ],
                "tanggal" => "Jakarta, September 9, 2025",
                "button_view_detail" => "View Detail" 
            ],
            [   
                "urutan" => 4,
                "img" => "images/Lamaran/poster_magang_joudah.webp",
                "judul" => "Marketing Intern",
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "departemen" => "Marketing",
                "tipe" => "Internship",
                "level" => "Internship",
                "deskripsi" => "As a Marketing Intern, you will support the team in various marketing activities, ranging from campaign planning, content creation, market research, to social media management. This position provides opportunities to develop skills in digital marketing, communication, and branding, as well as directly contribute to the company’s marketing projects.",
                "Pendidikan" => "Active university student, minimum 4th semester (Management, Marketing, Communication, or related fields)",
                "persyaratan" => [
                    "Organizational or project experience in marketing/branding is an advantage",
                    "Understanding of basic digital marketing (social media, content, SEO/SEM)",
                    "Proficient in MS Office and Google Workspace; Canva/Adobe/Analytics skills are a plus",
                    "Strong communication and presentation skills",
                    "Creative, proactive, eager to learn, and able to work in a team",
                    "Energetic, detail-oriented, and willing to support various marketing projects"
                ],
                "Lampiran" => [
                    "Curriculum Vitae (CV)",
                ],
                "tanggal" => "Jakarta, September 9, 2025",
                "button_view_detail" => "View Detail" 
            ],     
            [   
                "urutan" => 5,
                "img" => "images/Lamaran/poster_magang_joudah.webp",
                "judul" => "Human Resources Intern",
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "departemen" => "Human Resources",
                "tipe" => "Internship",
                "level" => "Internship",
                "deskripsi" => "As a Human Resources Intern, you will support the HR team in various activities such as recruitment, onboarding, administration, and employee training. This position provides opportunities to develop an understanding of HR functions and skills in communication, interpersonal relations, and problem-solving in a professional work environment.",
                "Pendidikan" => "Active university student, minimum 4th semester (Psychology, HR Management, Law, or related fields)",
                "persyaratan" => [
                    "Organizational or committee experience in recruitment, training, or administration is an advantage",
                    "Basic understanding of HR functions (recruitment, administration, training, employee relations)",
                    "Good communication, interpersonal, and problem-solving skills",
                    "Proficient in MS Office or Google Workspace",
                    "Detail-oriented, disciplined, with integrity; able to work independently or in a team",
                    "Proactive, eager to learn, and willing to support various HR activities (recruitment, onboarding, training, administration)"
                ],
                "Lampiran" => [
                    "Curriculum Vitae (CV)",
                ],
                "tanggal" => "Jakarta, September 9, 2025",
                "button_view_detail" => "View Detail" 
            ],
        ];
    }
    public function detail(\Illuminate\Http\Request $request)
    {
    $allLowongan = self::getData();
    $idx = intval($request->query('idx', 0));
    $lowongan = $allLowongan[$idx] ?? $allLowongan[0];
    $title = 'Job Vacancy Details';
    return view('detail_lowongan', compact('lowongan', 'allLowongan', 'title'));
    }    
}