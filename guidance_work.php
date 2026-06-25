<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>วิทยาลัยการอาชีพกุมภวาปี</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Prompt', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col justify-between">

    <header class="bg-[#002d4a] text-white w-full shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col lg:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-4">
                <img src="images/kpic-logo.png" alt="โลโก้วิทยาลัยการอาชีพกุมภวาปี" class="w-16 h-16 object-contain flex-shrink-0">
                <div>
                    <h1 class="text-2xl font-bold text-yellow-400 tracking-wide leading-tight">วิทยาลัยการอาชีพกุมภวาปี</h1>
                    <p class="text-sm font-semibold tracking-wider text-gray-200">Kumphawapi Industrial and Community Education College</p>
                </div>
            </div>

            <div class="flex flex-wrap items-center gap-6 text-sm">
                <div class="flex items-center gap-2 text-gray-200">
                    <i class="fas fa-phone-alt text-pink-500 text-lg"></i>
                    <span>โทรศัพท์ : <strong class="text-white">xxx xxx xxxx</strong></span>
                </div>
                <div class="flex items-center gap-2 text-gray-200">
                    <i class="fas fa-envelope text-pink-500 text-lg"></i>
                    <span>อีเมล์ : <a href="mailto:krucoconut.vecskill@gmail.com" class="text-white hover:underline">krucoconut.vecskill@gmail.com</a></span>
                </div>
            </div>
        </div>

        <div class="w-full bg-[#ff9800] border-t border-[#002d4a]/20 shadow-inner">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-stretch">
                <nav class="flex flex-wrap flex-1 text-sm font-medium">
                    <a href="home.php" class="bg-[#0a2333] text-white px-6 py-4 flex flex-col justify-center items-center hover:bg-[#002d4a] transition min-w-[100px]">
                        <span class="text-base font-bold">หน้าหลัก</span>
                        <span class="text-[10px] opacity-60">Home</span>
                    </a>

                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">
                                เกี่ยวกับเรา <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i>
                            </span>
                            <span class="text-[10px] text-[#002d4a]/70">About Us</span>
                        </button>
                        <div class="absolute left-0 top-full w-96 bg-white shadow-xl invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 z-50 border-t-2 border-[#002d4a]">
                            <div class="py-1 text-[#002d4a] divide-y divide-gray-200 divide-dashed">
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ข้อมูลสถานศึกษา</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">วิสัยทัศน์และพันธกิจ</span></a>
                                <a href="executive_committee.php" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">คณะผู้บริหาร</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">บุคลากรทางการศึกษา</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">โครงสร้างองค์กร</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">แผนปฏิบัติงานประจำปี/สรุปแผนงาน</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">
                                สาขาวิชา <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i>
                            </span>
                            <span class="text-[10px] text-[#002d4a]/70">Faculty</span>
                        </button>
                        <div class="absolute left-0 top-full w-80 bg-white shadow-xl invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 z-50 border-t-2 border-[#002d4a]">
                            <div class="py-1 text-[#002d4a] divide-y divide-gray-100 divide-dashed">
                                <div class="relative [&_>_div]:hover:visible [&_>_div]:hover:opacity-100">
                                    <a href="#" class="flex items-center justify-between px-4 py-3 hover:bg-orange-50 font-medium transition-colors">
                                        <span class="flex items-center gap-2"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i>วิชาพาณิชยกรรม/บริหารธุรกิจ</span>
                                        <i class="fas fa-chevron-right text-xs text-gray-400"></i>
                                    </a>
                                    <div class="absolute left-full top-0 w-96 bg-white shadow-2xl border-l border-gray-100 invisible opacity-0 transition-all duration-150 min-h-full py-1 divide-y divide-gray-100 divide-dashed">
                                        <a href="#" class="flex items-center gap-2 px-5 py-3 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i> สาขาวิชาการบัญชี</a>
                                    </div>
                                </div>
                                <div class="relative"><a href="#" class="flex items-center justify-between px-4 py-3 hover:bg-orange-50 font-medium transition-colors"><span class="flex items-center gap-2"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i>ประเภทวิชาศิลปกรรม</span></a></div>
                                <div class="relative"><a href="#" class="flex items-center justify-between px-4 py-3 hover:bg-orange-50 font-medium transition-colors"><span class="flex items-center gap-2"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i>ประเภทวิชาคหกรรม</span></a></div>
                                <div class="relative"><a href="#" class="flex items-center justify-between px-4 py-3 hover:bg-orange-50 font-medium transition-colors"><span class="flex items-center gap-2"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i>ประเภทวิชาอุตสาหกรรมท่องเที่ยว</span></a></div>
                                <div class="relative"><a href="#" class="flex items-center justify-between px-4 py-3 hover:bg-orange-50 font-medium transition-colors"><span class="flex items-center gap-2"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i>ประเภทวิชาเทคโนโลยีสารสนเทศฯ</span></a></div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="text-[#002d4a] hover:bg-white/10 px-5 py-4 flex flex-col justify-center items-center transition">
                        <span class="font-bold">หลักสูตร</span>
                        <span class="text-[10px] text-[#002d4a]/70">Course</span>
                    </a>

                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">
                                หน่วยงาน <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i>
                            </span>
                            <span class="text-[10px] text-[#002d4a]/70">Departments</span>
                        </button>
                        <div class="absolute left-0 top-full w-96 bg-white shadow-xl invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 z-50 border-t-2 border-[#002d4a]">
                            <div class="py-1 text-[#002d4a] divide-y divide-gray-200 divide-dashed">
                                <div class="relative [&_>_div]:hover:visible [&_>_div]:hover:opacity-100">
                                    <a href="#" class="flex items-center justify-between px-5 py-3 hover:bg-orange-50 font-medium transition-colors">
                                        <span class="flex items-center gap-2"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i>วิชาการ</span>
                                        <i class="fas fa-chevron-right text-xs text-gray-400"></i>
                                    </a>
                                    <div class="absolute left-full top-0 w-96 bg-white shadow-2xl border-l border-gray-100 invisible opacity-0 transition-all duration-150 min-h-full py-1 divide-y divide-gray-100 divide-dashed">
                                        <a href="academic.php" class="flex items-center gap-2 px-5 py-3 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i> งานพัฒนาหลักสูตรการเรียนการสอน</a>
                                        <a href="measurement_and_evaluation_work.php" class="flex items-center gap-2 px-5 py-3 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i> งานวัดและประเมินผล</a>
                                        <a href="bilateral_work.php" class="flex items-center gap-2 px-5 py-3 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i> งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ</a>
                                        <a href="academic_service.php" class="flex items-center gap-2 px-5 py-3 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i> งานวิทยบริการและเทคโนโลยี</a>
                                        <a href="special_education.php" class="flex items-center gap-2 px-5 py-3 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i> งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา</a>
                                        <a href="technology_course.php" class="flex items-center gap-2 px-5 py-3 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-base text-[#002d4a]"></i> งานพัฒนาหลักสูตรสายเทคโนโลยีหรือสายปฏิบัติการ</a>
                                    </div>
                                </div>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ฝ่ายแผนงานและความร่วมมือ</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ฝ่ายบริหารทรัพยากร</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ฝ่ายพัฒนากิจการนักเรียน นักศึกษา</span></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">
                                ข่าวสาร <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i>
                            </span>
                            <span class="text-[10px] text-[#002d4a]/70">News</span>
                        </button>
                        <div class="absolute left-0 top-full w-96 bg-white shadow-xl invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 z-50 border-t-2 border-[#002d4a]">
                            <div class="py-1 text-[#002d4a] divide-y divide-gray-200 divide-dashed">
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ข่าวประชาสัมพันธ์</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ข่าวกิจกรรมวิทยาลัย</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ข่าวรับสมัครงาน</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ข่าวจัดซื้อจัดจ้าง</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">
                                บริการ <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i>
                            </span>
                            <span class="text-[10px] text-[#002d4a]/70">Service</span>
                        </button>
                        <div class="absolute left-0 top-full w-96 bg-white shadow-xl invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 z-50 border-t-2 border-[#002d4a]">
                            <div class="py-1 text-[#002d4a] divide-y divide-gray-200 divide-dashed">
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ระบบบริหารสถานศึกษา RMS</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ระบบบริหารอาชีวศึกษา STD2018</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ระบบบริหารจัดการงานพัสดุ SPD</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ระบบห้องสมุดออนไลน์</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">
                                ส่วนเสริม <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i>
                            </span>
                            <span class="text-[10px] text-[#002d4a]/70">Extensions</span>
                        </button>
                        <div class="absolute left-0 top-full w-96 bg-white shadow-xl invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 z-50 border-t-2 border-[#002d4a]">
                            <div class="py-1 text-[#002d4a] divide-y divide-gray-200 divide-dashed">
                                <a href="register.php" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">สมัครสมาชิก (Member System)</span></a>
                                <a href="login.php" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">เข้าสู่ระบบ (Login System)</span></a>
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">วิดิทัศน์แนะนำวิทยาลัย (VTR)</span></a>
                                <a href="personal_data_protection_policy.php" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">นโยบายคุ้มครองข้อมูลส่วนบุคคล</span></a>
                            </div>
                        </div>
                    </div>

                    <a href="ita.php" target="_blank" rel="noopener noreferrer" class="text-[#002d4a] hover:bg-white/10 px-5 py-4 flex flex-col justify-center items-center transition">
                        <span class="font-bold">ITA</span>
                        <span class="text-[10px] text-[#002d4a]/70">KPIC</span>
                    </a>

                    <a href="contact_us.php" class="text-[#002d4a] hover:bg-white/20 bg-white/10 px-5 py-4 flex flex-col justify-center items-center transition">
                        <span class="font-bold">ติดต่อเรา</span>
                        <span class="text-[10px] text-[#002d4a]/70">Contact Us</span>
                    </a>
                </nav>

                <a href="https://std2018.vec.go.th/web/" class="bg-gradient-to-r from-red-700 to-red-600 text-white px-6 py-4 flex items-center justify-center gap-2 hover:from-red-800 hover:to-red-700 transition font-bold whitespace-nowrap shadow-inner">
                    <i class="fas fa-graduation-cap text-lg"></i>
                    <span>ลงทะเบียนเรียน/ชำระเงิน</span>
                </a>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12 max-w-7xl flex-grow">
        
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 tracking-wide">ฝ่ายกิจการนักเรียน นักศึกษา</h2>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 tracking-wide">(งานครูที่ปรึกษาและการแนะแนว)</h2>
            <div class="h-1 w-100 bg-blue-600 mx-auto rounded-full"></div>
        </div>

        <div class="flex justify-center mb-16">
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden w-full max-w-md border border-gray-100 text-center">
                <div class="bg-gradient-to-b from-blue-50 to-white pt-8 pb-3">
                    <div class="w-44 h-44 mx-auto rounded-full overflow-hidden border-4 border-[#002d4a] shadow-md">
                        <img src="images/pt.png" alt="ผู้อำนวยการ" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">นางภัรภร แก้วศิริ</h3>
                    <p class="text-blue-600 font-semibold text-sm tracking-wide mb-2">รองผู้อำนวยการฝ่ายยุทธศาสตร์และแผนงาน</p>
                    <p class="text-gray-500 text-xs mt-0.5">(รักษาการในตำแหน่ง รองผู้อำนวยการฝ่ายกิจการนักเรียน นักศึกษา)</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 md:p-10 flex flex-col lg:flex-row gap-10 items-stretch content-thai">
            
            <div class="w-full lg:w-1/3 max-w-xs mx-auto flex flex-col items-center text-center">
                <div class="w-full rounded-2xl overflow-hidden shadow-md border border-gray-100 mb-5">
                    <img src="images/t-pamiga.png" alt="นางสาวเปมิกา บุญศิวนนท์" class="w-full h-auto block object-cover">
                </div>
                <div class="w-full">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">นางสาวเปมิกา บุญศิวนนท์</h4>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-bold text-gray-800">ตำแหน่ง:</span> หัวหน้างานครูที่ปรึกษาและการแนะแนว</p>
                    <p class="text-sm font-semibold text-[#002d4a] mt-2 bg-blue-50 py-1.5 px-3 rounded-lg inline-block">
                        <i class="fas fa-envelope mr-1 text-pink-500"></i> Email : admin@kvc.ac.th
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-2/3 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl md:text-1xl font-bold text-gray-900 pb-4 mb-6 border-b-2 border-gray-200 flex items-center gap-2">
                        <i class="fas fa-tasks text-blue-600"></i> หน้าที่และความรับผิดชอบ - งานครูที่ปรึกษาและการแนะแนว
                    </h3>
                    
                    <ol class="space-y-3.5 text-gray-700 text-sm md:text-base list-none">
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">1.</span><span>เสนอแต่งตั้งครูที่ปรึกษาของนักเรียนนักศึกษาทุกระดับชั้นปี</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">2.</span><span>ควบคุมดูแล ส่งเสริม การจัดทำ จัดเก็บ รวบรวมข้อมูลประวัติ ข้อมูลการเรียน และพฤติกรรมของนักเรียนนักศึกษาในที่ปรึกษาของแต่ละชั้นเรียนแต่ละระดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">3.</span><span>ส่งเสริม ประสานงานครูที่ปรึกษาให้คำปรึกษาแนะนำนักเรียน นักศึกษาเกี่ยวกับการเข้าร่วมกิจกรรมต่าง ๆ </span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">4.</span><span>ส่งเสริม ประสานงาน ครูที่ปรึกษาให้ความคิดเห็นและข้อมูลเกี่ยวกับการกำหนดรายวิชาในการลงทะเบียนเรียน ให้ความเห็นชอบแก่นักเรียน นักศึกษาในการลงทะเบียนรายวิชา การลงทะเบียนเทียบโอนความรู้และประสบการณ์ การขอเปลี่ยน ขอเพิ่มและขอถอนรายวิชา การขอพักการเรียน การโอนย้าย การลาออก การขอผ่อนผัน หรือยกเว้นการชำระเงินค่าลงทะเบียนรายวิชา ติดตาม แนะนำ ให้คำปรึกษาเกี่ยวการเรียน การคำนวณหาค่าระดับคะแนนเฉลี่ยแก่นักเรียน นักศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">5.</span><span>จัดกิจกรรม Home Room ของครูที่ปรึกษาได้พบนักเรียน นักศึกษาสัปดาห์ละ 1 ครั้ง</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">6.</span><span>ประสานกับครู สาขาวิชา และงานที่เกี่ยวข้องในการแก้ปัญหาต่าง ๆ ของนักเรียน นักศึกษา และมีหน้าที่เป็น ฝ่ายปกครองในสาขาวิชาที่เป็นที่ปรึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">7.</span><span>ติดตามและประเมินผลการปฏิบัติงานของครูที่ปรึกษา สรุปผลการประเมินและนำผลการประเมินเสนอฝ่ายบริหารและสำนักงานคณะกรรมการการอาชีวศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">8.</span><span>จัดทำปฏิทินการปฏิบัติงาน เสนอโครงการและรายงานการปฏิบัติงานตามลำดับขั้น</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">9.</span><span>ดูแล บำรุงรักษา และรับผิดชอบทรัพย์สินของสถานศึกษาที่ได้รับมอบหมาย</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">10.</span><span>จัดการประชุมผู้ปกครองทุกปีการศึกษาของทุกชั้นเรียน</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">11.</span><span>ติดตามการออกเยี่ยมบ้านนักเรียน นักศึกษาในที่ปรึกษาพร้อมรายงานการปฏิบัติการออกเยี่ยมให้ผู้บริหารตามลำดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">12.</span><span>ปฏิบัติงานอื่นตามที่ได้รับมอบหมาย</span></li>
                    </ol>
                </div>

                <div class="text-right pt-6 mt-6 border-t border-gray-100">
                    <a href="#" class="text-sm font-bold text-[#002d4a] hover:text-[#ff9800] transition-colors">
                        ข้อมูลเพิ่มเติม <i class="fas fa-arrow-right text-xs ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
<br>
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 md:p-10 flex flex-col lg:flex-row gap-10 items-stretch content-thai">
            
            <div class="w-full lg:w-1/3 max-w-xs mx-auto flex flex-col items-center text-center">
                <div class="w-full rounded-2xl overflow-hidden shadow-md border border-gray-100 mb-5">
                    <img src="images/t-mapi.png" alt="นางสาวมะลิวรรณ แสนวัง" class="w-full h-auto block object-cover">
                </div>
                <div class="w-full">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">นางสาวมะลิวรรณ แสนวัง</h4>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-bold text-gray-800">ตำแหน่ง:</span> ผู้ช่วยหัวหน้างานครูที่ปรึกษาและการแนะแนว</p>
                    <p class="text-sm font-semibold text-[#002d4a] mt-2 bg-blue-50 py-1.5 px-3 rounded-lg inline-block">
                        <i class="fas fa-envelope mr-1 text-pink-500"></i> Email : admin@kvc.ac.th
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-2/3 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl md:text-1xl font-bold text-gray-900 pb-4 mb-6 border-b-2 border-gray-200 flex items-center gap-2">
                        <i class="fas fa-tasks text-blue-600"></i> หน้าที่และความรับผิดชอบ - งานครูที่ปรึกษาและการแนะแนว
                    </h3>
                    
                    <ol class="space-y-3.5 text-gray-700 text-sm md:text-base list-none">
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">1.</span><span>เสนอแต่งตั้งครูที่ปรึกษาของนักเรียนนักศึกษาทุกระดับชั้นปี</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">2.</span><span>ควบคุมดูแล ส่งเสริม การจัดทำ จัดเก็บ รวบรวมข้อมูลประวัติ ข้อมูลการเรียน และพฤติกรรมของนักเรียนนักศึกษาในที่ปรึกษาของแต่ละชั้นเรียนแต่ละระดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">3.</span><span>ส่งเสริม ประสานงานครูที่ปรึกษาให้คำปรึกษาแนะนำนักเรียน นักศึกษาเกี่ยวกับการเข้าร่วมกิจกรรมต่าง ๆ </span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">4.</span><span>ส่งเสริม ประสานงาน ครูที่ปรึกษาให้ความคิดเห็นและข้อมูลเกี่ยวกับการกำหนดรายวิชาในการลงทะเบียนเรียน ให้ความเห็นชอบแก่นักเรียน นักศึกษาในการลงทะเบียนรายวิชา การลงทะเบียนเทียบโอนความรู้และประสบการณ์ การขอเปลี่ยน ขอเพิ่มและขอถอนรายวิชา การขอพักการเรียน การโอนย้าย การลาออก การขอผ่อนผัน หรือยกเว้นการชำระเงินค่าลงทะเบียนรายวิชา ติดตาม แนะนำ ให้คำปรึกษาเกี่ยวการเรียน การคำนวณหาค่าระดับคะแนนเฉลี่ยแก่นักเรียน นักศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">5.</span><span>จัดกิจกรรม Home Room ของครูที่ปรึกษาได้พบนักเรียน นักศึกษาสัปดาห์ละ 1 ครั้ง</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">6.</span><span>ประสานกับครู สาขาวิชา และงานที่เกี่ยวข้องในการแก้ปัญหาต่าง ๆ ของนักเรียน นักศึกษา และมีหน้าที่เป็น ฝ่ายปกครองในสาขาวิชาที่เป็นที่ปรึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">7.</span><span>ติดตามและประเมินผลการปฏิบัติงานของครูที่ปรึกษา สรุปผลการประเมินและนำผลการประเมินเสนอฝ่ายบริหารและสำนักงานคณะกรรมการการอาชีวศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">8.</span><span>จัดทำปฏิทินการปฏิบัติงาน เสนอโครงการและรายงานการปฏิบัติงานตามลำดับขั้น</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">9.</span><span>ดูแล บำรุงรักษา และรับผิดชอบทรัพย์สินของสถานศึกษาที่ได้รับมอบหมาย</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">10.</span><span>จัดการประชุมผู้ปกครองทุกปีการศึกษาของทุกชั้นเรียน</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">11.</span><span>ติดตามการออกเยี่ยมบ้านนักเรียน นักศึกษาในที่ปรึกษาพร้อมรายงานการปฏิบัติการออกเยี่ยมให้ผู้บริหารตามลำดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">12.</span><span>ปฏิบัติงานอื่นตามที่ได้รับมอบหมาย</span></li>
                    </ol>
                </div>

                <div class="text-right pt-6 mt-6 border-t border-gray-100">
                    <a href="#" class="text-sm font-bold text-[#002d4a] hover:text-[#ff9800] transition-colors">
                        ข้อมูลเพิ่มเติม <i class="fas fa-arrow-right text-xs ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
<br>
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 md:p-10 flex flex-col lg:flex-row gap-10 items-stretch content-thai">
            
            <div class="w-full lg:w-1/3 max-w-xs mx-auto flex flex-col items-center text-center">
                <div class="w-full rounded-2xl overflow-hidden shadow-md border border-gray-100 mb-5">
                    <img src="images/t-kot.png" alt="นายภัคพงษ์ คำประชม" class="w-full h-auto block object-cover">
                </div>
                <div class="w-full">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">นายภัคพงษ์ คำประชม</h4>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-bold text-gray-800">ตำแหน่ง:</span> ผู้ช่วยหัวหน้างานครูที่ปรึกษาและการแนะแนว</p>
                    <p class="text-sm font-semibold text-[#002d4a] mt-2 bg-blue-50 py-1.5 px-3 rounded-lg inline-block">
                        <i class="fas fa-envelope mr-1 text-pink-500"></i> Email : admin@kvc.ac.th
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-2/3 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl md:text-1xl font-bold text-gray-900 pb-4 mb-6 border-b-2 border-gray-200 flex items-center gap-2">
                        <i class="fas fa-tasks text-blue-600"></i> หน้าที่และความรับผิดชอบ - งานครูที่ปรึกษาและการแนะแนว
                    </h3>
                    
                    <ol class="space-y-3.5 text-gray-700 text-sm md:text-base list-none">
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">1.</span><span>เสนอแต่งตั้งครูที่ปรึกษาของนักเรียนนักศึกษาทุกระดับชั้นปี</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">2.</span><span>ควบคุมดูแล ส่งเสริม การจัดทำ จัดเก็บ รวบรวมข้อมูลประวัติ ข้อมูลการเรียน และพฤติกรรมของนักเรียนนักศึกษาในที่ปรึกษาของแต่ละชั้นเรียนแต่ละระดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">3.</span><span>ส่งเสริม ประสานงานครูที่ปรึกษาให้คำปรึกษาแนะนำนักเรียน นักศึกษาเกี่ยวกับการเข้าร่วมกิจกรรมต่าง ๆ </span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">4.</span><span>ส่งเสริม ประสานงาน ครูที่ปรึกษาให้ความคิดเห็นและข้อมูลเกี่ยวกับการกำหนดรายวิชาในการลงทะเบียนเรียน ให้ความเห็นชอบแก่นักเรียน นักศึกษาในการลงทะเบียนรายวิชา การลงทะเบียนเทียบโอนความรู้และประสบการณ์ การขอเปลี่ยน ขอเพิ่มและขอถอนรายวิชา การขอพักการเรียน การโอนย้าย การลาออก การขอผ่อนผัน หรือยกเว้นการชำระเงินค่าลงทะเบียนรายวิชา ติดตาม แนะนำ ให้คำปรึกษาเกี่ยวการเรียน การคำนวณหาค่าระดับคะแนนเฉลี่ยแก่นักเรียน นักศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">5.</span><span>จัดกิจกรรม Home Room ของครูที่ปรึกษาได้พบนักเรียน นักศึกษาสัปดาห์ละ 1 ครั้ง</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">6.</span><span>ประสานกับครู สาขาวิชา และงานที่เกี่ยวข้องในการแก้ปัญหาต่าง ๆ ของนักเรียน นักศึกษา และมีหน้าที่เป็น ฝ่ายปกครองในสาขาวิชาที่เป็นที่ปรึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">7.</span><span>ติดตามและประเมินผลการปฏิบัติงานของครูที่ปรึกษา สรุปผลการประเมินและนำผลการประเมินเสนอฝ่ายบริหารและสำนักงานคณะกรรมการการอาชีวศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">8.</span><span>จัดทำปฏิทินการปฏิบัติงาน เสนอโครงการและรายงานการปฏิบัติงานตามลำดับขั้น</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">9.</span><span>ดูแล บำรุงรักษา และรับผิดชอบทรัพย์สินของสถานศึกษาที่ได้รับมอบหมาย</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">10.</span><span>จัดการประชุมผู้ปกครองทุกปีการศึกษาของทุกชั้นเรียน</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">11.</span><span>ติดตามการออกเยี่ยมบ้านนักเรียน นักศึกษาในที่ปรึกษาพร้อมรายงานการปฏิบัติการออกเยี่ยมให้ผู้บริหารตามลำดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">12.</span><span>ปฏิบัติงานอื่นตามที่ได้รับมอบหมาย</span></li>
                    </ol>
                </div>

                <div class="text-right pt-6 mt-6 border-t border-gray-100">
                    <a href="#" class="text-sm font-bold text-[#002d4a] hover:text-[#ff9800] transition-colors">
                        ข้อมูลเพิ่มเติม <i class="fas fa-arrow-right text-xs ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
<br>
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 md:p-10 flex flex-col lg:flex-row gap-10 items-stretch content-thai">
            
            <div class="w-full lg:w-1/3 max-w-xs mx-auto flex flex-col items-center text-center">
                <div class="w-full rounded-2xl overflow-hidden shadow-md border border-gray-100 mb-5">
                    <img src="images/user.jpg" alt="นายอนุชิต มิทะลา" class="w-full h-auto block object-cover">
                </div>
                <div class="w-full">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">นายอนุชิต มิทะลา</h4>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-bold text-gray-800">ตำแหน่ง:</span> ผู้ช่วยหัวหน้างานครูที่ปรึกษาและการแนะแนว</p>
                    <p class="text-sm font-semibold text-[#002d4a] mt-2 bg-blue-50 py-1.5 px-3 rounded-lg inline-block">
                        <i class="fas fa-envelope mr-1 text-pink-500"></i> Email : admin@kvc.ac.th
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-2/3 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl md:text-1xl font-bold text-gray-900 pb-4 mb-6 border-b-2 border-gray-200 flex items-center gap-2">
                        <i class="fas fa-tasks text-blue-600"></i> หน้าที่และความรับผิดชอบ - งานครูที่ปรึกษาและการแนะแนว
                    </h3>
                    
                    <ol class="space-y-3.5 text-gray-700 text-sm md:text-base list-none">
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">1.</span><span>เสนอแต่งตั้งครูที่ปรึกษาของนักเรียนนักศึกษาทุกระดับชั้นปี</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">2.</span><span>ควบคุมดูแล ส่งเสริม การจัดทำ จัดเก็บ รวบรวมข้อมูลประวัติ ข้อมูลการเรียน และพฤติกรรมของนักเรียนนักศึกษาในที่ปรึกษาของแต่ละชั้นเรียนแต่ละระดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">3.</span><span>ส่งเสริม ประสานงานครูที่ปรึกษาให้คำปรึกษาแนะนำนักเรียน นักศึกษาเกี่ยวกับการเข้าร่วมกิจกรรมต่าง ๆ </span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">4.</span><span>ส่งเสริม ประสานงาน ครูที่ปรึกษาให้ความคิดเห็นและข้อมูลเกี่ยวกับการกำหนดรายวิชาในการลงทะเบียนเรียน ให้ความเห็นชอบแก่นักเรียน นักศึกษาในการลงทะเบียนรายวิชา การลงทะเบียนเทียบโอนความรู้และประสบการณ์ การขอเปลี่ยน ขอเพิ่มและขอถอนรายวิชา การขอพักการเรียน การโอนย้าย การลาออก การขอผ่อนผัน หรือยกเว้นการชำระเงินค่าลงทะเบียนรายวิชา ติดตาม แนะนำ ให้คำปรึกษาเกี่ยวการเรียน การคำนวณหาค่าระดับคะแนนเฉลี่ยแก่นักเรียน นักศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">5.</span><span>จัดกิจกรรม Home Room ของครูที่ปรึกษาได้พบนักเรียน นักศึกษาสัปดาห์ละ 1 ครั้ง</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">6.</span><span>ประสานกับครู สาขาวิชา และงานที่เกี่ยวข้องในการแก้ปัญหาต่าง ๆ ของนักเรียน นักศึกษา และมีหน้าที่เป็น ฝ่ายปกครองในสาขาวิชาที่เป็นที่ปรึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">7.</span><span>ติดตามและประเมินผลการปฏิบัติงานของครูที่ปรึกษา สรุปผลการประเมินและนำผลการประเมินเสนอฝ่ายบริหารและสำนักงานคณะกรรมการการอาชีวศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">8.</span><span>จัดทำปฏิทินการปฏิบัติงาน เสนอโครงการและรายงานการปฏิบัติงานตามลำดับขั้น</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">9.</span><span>ดูแล บำรุงรักษา และรับผิดชอบทรัพย์สินของสถานศึกษาที่ได้รับมอบหมาย</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">10.</span><span>จัดการประชุมผู้ปกครองทุกปีการศึกษาของทุกชั้นเรียน</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">11.</span><span>ติดตามการออกเยี่ยมบ้านนักเรียน นักศึกษาในที่ปรึกษาพร้อมรายงานการปฏิบัติการออกเยี่ยมให้ผู้บริหารตามลำดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">12.</span><span>ปฏิบัติงานอื่นตามที่ได้รับมอบหมาย</span></li>
                    </ol>
                </div>

                <div class="text-right pt-6 mt-6 border-t border-gray-100">
                    <a href="#" class="text-sm font-bold text-[#002d4a] hover:text-[#ff9800] transition-colors">
                        ข้อมูลเพิ่มเติม <i class="fas fa-arrow-right text-xs ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
<br>
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 md:p-10 flex flex-col lg:flex-row gap-10 items-stretch content-thai">
            
            <div class="w-full lg:w-1/3 max-w-xs mx-auto flex flex-col items-center text-center">
                <div class="w-full rounded-2xl overflow-hidden shadow-md border border-gray-100 mb-5">
                    <img src="images/user.jpg" alt="นางสาวดรัลรัตน์ คำแสนเทียะ" class="w-full h-auto block object-cover">
                </div>
                <div class="w-full">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">นางสาวดรัลรัตน์ คำแสนเทียะ</h4>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-bold text-gray-800">ตำแหน่ง:</span> ผู้ช่วยหัวหน้างานครูที่ปรึกษาและการแนะแนว</p>
                    <p class="text-sm font-semibold text-[#002d4a] mt-2 bg-blue-50 py-1.5 px-3 rounded-lg inline-block">
                        <i class="fas fa-envelope mr-1 text-pink-500"></i> Email : admin@kvc.ac.th
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-2/3 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl md:text-1xl font-bold text-gray-900 pb-4 mb-6 border-b-2 border-gray-200 flex items-center gap-2">
                        <i class="fas fa-tasks text-blue-600"></i> หน้าที่และความรับผิดชอบ - งานครูที่ปรึกษาและการแนะแนว
                    </h3>
                    
                    <ol class="space-y-3.5 text-gray-700 text-sm md:text-base list-none">
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">1.</span><span>เสนอแต่งตั้งครูที่ปรึกษาของนักเรียนนักศึกษาทุกระดับชั้นปี</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">2.</span><span>ควบคุมดูแล ส่งเสริม การจัดทำ จัดเก็บ รวบรวมข้อมูลประวัติ ข้อมูลการเรียน และพฤติกรรมของนักเรียนนักศึกษาในที่ปรึกษาของแต่ละชั้นเรียนแต่ละระดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">3.</span><span>ส่งเสริม ประสานงานครูที่ปรึกษาให้คำปรึกษาแนะนำนักเรียน นักศึกษาเกี่ยวกับการเข้าร่วมกิจกรรมต่าง ๆ </span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">4.</span><span>ส่งเสริม ประสานงาน ครูที่ปรึกษาให้ความคิดเห็นและข้อมูลเกี่ยวกับการกำหนดรายวิชาในการลงทะเบียนเรียน ให้ความเห็นชอบแก่นักเรียน นักศึกษาในการลงทะเบียนรายวิชา การลงทะเบียนเทียบโอนความรู้และประสบการณ์ การขอเปลี่ยน ขอเพิ่มและขอถอนรายวิชา การขอพักการเรียน การโอนย้าย การลาออก การขอผ่อนผัน หรือยกเว้นการชำระเงินค่าลงทะเบียนรายวิชา ติดตาม แนะนำ ให้คำปรึกษาเกี่ยวการเรียน การคำนวณหาค่าระดับคะแนนเฉลี่ยแก่นักเรียน นักศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">5.</span><span>จัดกิจกรรม Home Room ของครูที่ปรึกษาได้พบนักเรียน นักศึกษาสัปดาห์ละ 1 ครั้ง</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">6.</span><span>ประสานกับครู สาขาวิชา และงานที่เกี่ยวข้องในการแก้ปัญหาต่าง ๆ ของนักเรียน นักศึกษา และมีหน้าที่เป็น ฝ่ายปกครองในสาขาวิชาที่เป็นที่ปรึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">7.</span><span>ติดตามและประเมินผลการปฏิบัติงานของครูที่ปรึกษา สรุปผลการประเมินและนำผลการประเมินเสนอฝ่ายบริหารและสำนักงานคณะกรรมการการอาชีวศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">8.</span><span>จัดทำปฏิทินการปฏิบัติงาน เสนอโครงการและรายงานการปฏิบัติงานตามลำดับขั้น</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">9.</span><span>ดูแล บำรุงรักษา และรับผิดชอบทรัพย์สินของสถานศึกษาที่ได้รับมอบหมาย</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">10.</span><span>จัดการประชุมผู้ปกครองทุกปีการศึกษาของทุกชั้นเรียน</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">11.</span><span>ติดตามการออกเยี่ยมบ้านนักเรียน นักศึกษาในที่ปรึกษาพร้อมรายงานการปฏิบัติการออกเยี่ยมให้ผู้บริหารตามลำดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">12.</span><span>ปฏิบัติงานอื่นตามที่ได้รับมอบหมาย</span></li>
                    </ol>
                </div>

                <div class="text-right pt-6 mt-6 border-t border-gray-100">
                    <a href="#" class="text-sm font-bold text-[#002d4a] hover:text-[#ff9800] transition-colors">
                        ข้อมูลเพิ่มเติม <i class="fas fa-arrow-right text-xs ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
<br>
       <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 md:p-10 flex flex-col lg:flex-row gap-10 items-stretch content-thai">
            
            <div class="w-full lg:w-1/3 max-w-xs mx-auto flex flex-col items-center text-center">
                <div class="w-full rounded-2xl overflow-hidden shadow-md border border-gray-100 mb-5">
                    <img src="images/user.jpg" alt="นางสาวศุนิพร เทพวงค์" class="w-full h-auto block object-cover">
                </div>
                <div class="w-full">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">นางสาวศุนิพร เทพวงค์</h4>
                    <p class="text-sm text-gray-600 mb-1"><span class="font-bold text-gray-800">ตำแหน่ง:</span> ผู้ช่วยหัวหน้างานครูที่ปรึกษาและการแนะแนว</p>
                    <p class="text-sm font-semibold text-[#002d4a] mt-2 bg-blue-50 py-1.5 px-3 rounded-lg inline-block">
                        <i class="fas fa-envelope mr-1 text-pink-500"></i> Email : admin@kvc.ac.th
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-2/3 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl md:text-1xl font-bold text-gray-900 pb-4 mb-6 border-b-2 border-gray-200 flex items-center gap-2">
                        <i class="fas fa-tasks text-blue-600"></i> หน้าที่และความรับผิดชอบ - งานครูที่ปรึกษาและการแนะแนว
                    </h3>
                    
                    <ol class="space-y-3.5 text-gray-700 text-sm md:text-base list-none">
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">1.</span><span>เสนอแต่งตั้งครูที่ปรึกษาของนักเรียนนักศึกษาทุกระดับชั้นปี</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">2.</span><span>ควบคุมดูแล ส่งเสริม การจัดทำ จัดเก็บ รวบรวมข้อมูลประวัติ ข้อมูลการเรียน และพฤติกรรมของนักเรียนนักศึกษาในที่ปรึกษาของแต่ละชั้นเรียนแต่ละระดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">3.</span><span>ส่งเสริม ประสานงานครูที่ปรึกษาให้คำปรึกษาแนะนำนักเรียน นักศึกษาเกี่ยวกับการเข้าร่วมกิจกรรมต่าง ๆ </span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">4.</span><span>ส่งเสริม ประสานงาน ครูที่ปรึกษาให้ความคิดเห็นและข้อมูลเกี่ยวกับการกำหนดรายวิชาในการลงทะเบียนเรียน ให้ความเห็นชอบแก่นักเรียน นักศึกษาในการลงทะเบียนรายวิชา การลงทะเบียนเทียบโอนความรู้และประสบการณ์ การขอเปลี่ยน ขอเพิ่มและขอถอนรายวิชา การขอพักการเรียน การโอนย้าย การลาออก การขอผ่อนผัน หรือยกเว้นการชำระเงินค่าลงทะเบียนรายวิชา ติดตาม แนะนำ ให้คำปรึกษาเกี่ยวการเรียน การคำนวณหาค่าระดับคะแนนเฉลี่ยแก่นักเรียน นักศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">5.</span><span>จัดกิจกรรม Home Room ของครูที่ปรึกษาได้พบนักเรียน นักศึกษาสัปดาห์ละ 1 ครั้ง</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">6.</span><span>ประสานกับครู สาขาวิชา และงานที่เกี่ยวข้องในการแก้ปัญหาต่าง ๆ ของนักเรียน นักศึกษา และมีหน้าที่เป็น ฝ่ายปกครองในสาขาวิชาที่เป็นที่ปรึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">7.</span><span>ติดตามและประเมินผลการปฏิบัติงานของครูที่ปรึกษา สรุปผลการประเมินและนำผลการประเมินเสนอฝ่ายบริหารและสำนักงานคณะกรรมการการอาชีวศึกษา</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">8.</span><span>จัดทำปฏิทินการปฏิบัติงาน เสนอโครงการและรายงานการปฏิบัติงานตามลำดับขั้น</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">9.</span><span>ดูแล บำรุงรักษา และรับผิดชอบทรัพย์สินของสถานศึกษาที่ได้รับมอบหมาย</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">10.</span><span>จัดการประชุมผู้ปกครองทุกปีการศึกษาของทุกชั้นเรียน</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">11.</span><span>ติดตามการออกเยี่ยมบ้านนักเรียน นักศึกษาในที่ปรึกษาพร้อมรายงานการปฏิบัติการออกเยี่ยมให้ผู้บริหารตามลำดับ</span></li>
                        <li class="flex items-start gap-2.5"><span class="font-bold text-gray-500 min-w-[24px]">12.</span><span>ปฏิบัติงานอื่นตามที่ได้รับมอบหมาย</span></li>
                    </ol>
                </div>

                <div class="text-right pt-6 mt-6 border-t border-gray-100">
                    <a href="#" class="text-sm font-bold text-[#002d4a] hover:text-[#ff9800] transition-colors">
                        ข้อมูลเพิ่มเติม <i class="fas fa-arrow-right text-xs ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
<br>
    </main>

    <footer class="bg-[#002d4a] text-gray-400 text-center py-4 text-xs border-t border-white/10 w-full">
        <p>© 2026 สงวนลิขสิทธิ์ | วิทยาลัยการอาชีพกุมภวาปี</p>
    </footer>

</body>
</html>