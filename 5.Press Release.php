<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>ติดต่อเรา - วิทยาลัยการอาชีพกุมภวาปี</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- แก้ไข: โหลดทั้ง Prompt และ Sarabun ให้ครบ -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;700&family=Sarabun:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Prompt', sans-serif; background-color: #f0f4f8; color: #1a1a2e;}
                /* ===== FOOTER ===== */
        footer { background: #002d4a; color: #8aa8c0; text-align: center; padding: 20px 24px; font-size: 0.8rem; margin-top: 40px; border-top: 3px solid #f5c842; }
        footer a { color: #f5c842; text-decoration: none; }
        footer a:hover { text-decoration: underline; }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <!-- ===== HEADER ===== -->
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

        <!-- ===== NAVIGATION ===== -->
        <div class="w-full bg-[#ff9800] border-t border-[#002d4a]/20 shadow-inner">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-stretch">
                <nav class="flex flex-wrap flex-1 text-sm font-medium">

                    <a href="home.php" class="bg-[#0a2333] text-white px-6 py-4 flex flex-col justify-center items-center hover:bg-[#002d4a] transition min-w-[100px]">
                        <span class="text-base font-bold">หน้าหลัก</span>
                        <span class="text-[10px] opacity-60">Home</span>
                    </a>

                    <!-- เกี่ยวกับเรา -->
                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">เกี่ยวกับเรา <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i></span>
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

                    <!-- สาขาวิชา -->
                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">สาขาวิชา <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i></span>
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

                    <!-- หน่วยงาน -->
                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">หน่วยงาน <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i></span>
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

                    <!-- ข่าวสาร -->
                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">ข่าวสาร <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i></span>
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

                    <!-- บริการ -->
                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">บริการ <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i></span>
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

                    <!-- ส่วนเสริม -->
                    <div class="relative group">
                        <button class="text-[#002d4a] hover:bg-white/10 px-5 py-4 h-full flex flex-col justify-center items-center transition">
                            <span class="font-bold flex items-center gap-1">ส่วนเสริม <i class="fas fa-chevron-down text-[10px] pt-1 transition-transform group-hover:rotate-180"></i></span>
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

                    <a href="contact_us.php" class="text-[#002d4a] hover:bg-white/10 px-5 py-4 flex flex-col justify-center items-center transition">
                        <span class="font-bold">ติดต่อเรา</span>
                        <span class="text-[10px] text-[#002d4a]/70">Contact Us</span>
                    </a>
                </nav>

                <a href="https://std2018.vec.go.th/web/" target="_blank" rel="noopener noreferrer"
                   class="bg-gradient-to-r from-red-700 to-red-600 text-white px-6 py-4 flex items-center justify-center gap-2 hover:from-red-800 hover:to-red-700 transition font-bold whitespace-nowrap shadow-inner">
                    <i class="fas fa-graduation-cap text-lg"></i>
                    <span>ลงทะเบียนเรียน/ชำระเงิน</span>
                </a>
            </div>
        </div>
    </header>

    <!-- ===== BREADCRUMB ===== -->
    <div class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-3 flex items-center gap-2 text-sm text-gray-500">
            <a href="home.php" class="hover:text-[#002d4a] transition-colors">
                <i class="fas fa-home mr-1"></i>หน้าหลัก
            </a>
            <i class="fas fa-chevron-right text-xs text-gray-400"></i>
            <span class="text-[#002d4a] font-medium">ข่าวประชาสัมพันธ์</span>
        </div>
    </div>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="flex-1 max-w-7xl mx-auto w-full px-6 py-10">

        <!-- หัวข้อหน้า -->
        <div class="flex items-center gap-3 mb-8">
            <div class="w-1.5 h-8 bg-[#ff9800] rounded-full"></div>
            <h1 class="text-3xl font-bold text-[#002d4a]">ข่าวประชาสัมพันธ์</h1>
        </div>

        <!-- การ์ดข่าว -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="flex flex-col md:flex-row">

                <!-- รูปภาพ -->
                <div class="md:w-2/5 lg:w-1/3 flex-shrink-0 overflow-hidden">
                    <img
                        src="images/kpic-1.png"
                        alt="โครงการพัฒนาศักยภาพผู้อำนวยการสถานศึกษา"
                        class="w-full h-64 md:h-full object-cover hover:scale-105 transition-transform duration-500"
                        onerror="this.src='https://placehold.co/600x400/002d4a/ffffff?text=ภาพข่าว'"
                    >
                </div>

                <!-- เนื้อหาข่าว -->
                <div class="flex flex-col justify-between p-6 md:p-8 gap-4">
                    <!-- แท็กหมวดหมู่ -->
                    <div>
                        <span class="inline-block bg-orange-100 text-orange-700 text-xs font-semibold px-3 py-1 rounded-full mb-4">
                            <i class="fas fa-tag mr-1"></i>ข่าวประชาสัมพันธ์
                        </span>
                        <h2 class="text-xl md:text-2xl font-bold text-[#0f172a] leading-snug mb-3">
                            โครงการพัฒนาศักยภาพผู้อำนวยการสถานศึกษาด้านสื่อ เทคโนโลยี และนวัตกรรม
                        </h2>
                        <p class="text-gray-600 leading-relaxed text-base">
                            โครงการพัฒนาศักยภาพผู้อำนวยการสถานศึกษาด้านสื่อ เทคโนโลยี และนวัตกรรม เพื่อขับเคลื่อนการจัดการอาชีวศึกษาระบบทวิภาคีสู่สมรรถนะสูง
                        </p>
                    </div>

                    <!-- ปุ่ม + วันที่ -->
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-2 border-t border-gray-100">
                        <span class="text-xs text-gray-400 flex items-center gap-1.5">
                            <i class="far fa-calendar-alt"></i>
                            <!-- แก้ไข: ใส่วันที่จริง หรือดึงจาก PHP -->
                            วันที่ประกาศ : 24 มิถุนายน 2568
                        </span>
                        <a href="#"
                           class="inline-flex items-center gap-2 bg-[#002d4a] hover:bg-[#0a2333] text-white font-semibold px-5 py-2.5 rounded-lg transition-colors text-sm">
                            <i class="fas fa-book-open text-xs"></i>
                            อ่านเพิ่มเติม
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </main>

<!-- ========== FOOTER ========== -->
<footer>
    <p>© <?= date('Y') + 543 ?> สงวนลิขสิทธิ์ | <strong style="color:#f5c842;">วิทยาลัยการอาชีพกุมภวาปี</strong> &nbsp;|&nbsp; <a href="personal_data_protection_policy.php">นโยบายคุ้มครองข้อมูลส่วนบุคคล</a> &nbsp;|&nbsp; <a href="contact_us.php">ติดต่อเรา</a></p>
</footer>


</body>
</html>