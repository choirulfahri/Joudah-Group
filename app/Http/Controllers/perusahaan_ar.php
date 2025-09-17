<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perusahaan_ar extends Controller
{
    public static function getData()
    {
        return [
            [   
                "urutan" => 1,
                "perusahaan" => "PT Jawda Mitra Prima",
                "icon" => "images/Icon/PT JAWDA MITRA PRIMA.svg",
                "DeskripsiPerusahaan" => "تأسست شركة PT Jawda Mitra Prima في عام 2006 كشركة تركز على الإدارة المباشرة لمزارع العود بأسلوب مستدام. منذ نشأتها، التزمت الشركة بالحفاظ على البيئة وضمان توفر المواد الخام للعود بجودة عالية. من خلال إدارة متكاملة تشمل الزراعة، العناية، والحصاد، لا تهتم الشركة فقط بالنتاج، بل تهتم أيضًا باستمرارية النظام البيئي. وبمبادئ الحذر والمسؤولية البيئية، تسعى الشركة لتقديم منتجات عود عالية القيمة للأسواق المحلية والدولية مع الحفاظ على التوازن بين احتياجات الصناعة واستدامة الموارد الطبيعية.",
                "Industri" => "العود",
                "Alamat" => "Jl. Joglo Raya No. 67, RT. 004/RW. 003، منطقة جوجلو، مقاطعة كيمانغان، مدينة جاكرتا الغربية، إقليم العاصمة الخاصة جاكرتا 11640، إندونيسيا",
            ],
            [   
                "urutan" => 2,
                "perusahaan" => "CV Pancoran Bumi Persada",
                "icon" => "images/Icon/CV PANCORAN BUMI PERSADA.svg",
                "DeskripsiPerusahaan" => "تأسست شركة CV Pancoran Bumi Persada في عام 2009 استجابةً للحاجة إلى توسيع نطاق التوزيع الذي كان يقتصر سابقًا على بابوا، نحو مركز النشاط التجاري الوطني في جاكرتا. تلعب الشركة دورًا مهمًا في مجال التوزيع واللوجستيات، حيث تتحمل المسؤولية الأساسية لضمان سلامة المواد ودقة مواعيد التسليم حتى مرحلة الإنتاج التالية. ومع وجودها في جاكرتا، تمكنت الشركة من تطوير شبكة توزيع بين الجزر، مما جعل سلسلة التوريد أكثر كفاءة وتكاملًا. من خلال إدارة لوجستية احترافية ودعم بأسطول ونظام نقل موثوق، تضمن الشركة وصول كل منتج إلى وجهته بأفضل جودة.",
                "Industri" => "الخدمات اللوجستية",
                "Alamat" => "Jl. Joglo Raya No. 67, RT. 004/RW. 003، منطقة جوجلو، مقاطعة كيمانغان، مدينة جاكرتا الغربية، إقليم العاصمة الخاصة جاكرتا 11640، إندونيسيا",
            ],
            [   
                "urutan" => 3,
                "perusahaan" => "PT Saudagar Timur Internasional",
                "icon" => "images/Icon/PT SAUDAGAR TIMUR INTERNATIONAL.svg",
                "DeskripsiPerusahaan" => "تأسست شركة PT Saudagar Timur Internasional في عام 2021 برؤية رفع مستوى العود الإندونيسي إلى مستوى أعلى، ليس فقط ببيع المواد الخام، بل بمعالجتها إلى زيت عود نقي ومنتجات فاخرة متنوعة مثل العطور الحصرية، البخور، البخور التقليدي، عطور السيارات، وإبداعات أخرى. من خلال عمليات التقطير الحديثة ومعايير الجودة الدولية، نقدم روائح تمزج بين أصالة العطر الطبيعي ولمسة من الأناقة، لتصبح رمزًا للتقدم والابتكار والالتزام في تقديم منتجات عالمية المستوى، لا تُعتبر مجرد عطر فحسب، بل تعبيرًا عن الأسلوب والهوية.",
                "Industri" => "العطور والعلاج العطري",
                "Alamat" => "Jl. Joglo Raya No. 67, RT. 004/RW. 003، منطقة جوجلو، مقاطعة كيمانغان، مدينة جاكرتا الغربية، إقليم العاصمة الخاصة جاكرتا 11640، إندونيسيا",
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