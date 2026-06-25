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

    <main class="w-full max-w-7xl mx-auto px-4 py-8 flex-grow flex flex-col gap-8">
        
        <div class="w-full bg-white p-3 rounded-xl shadow-md border border-gray-200">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3525.132337803164!2d102.94070807479632!3d17.116577083725158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31230ef87cf4489b%3A0xbee4a0da7f41577f!2z4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LiB4Liy4Lij4Lit4Liy4LiK4Li14Lie4LiB4Li44Lih4Lig4Lin4Liy4Lib4Li1!5e1!3m2!1sth!2sth!4v1779809795660!5m2!1sth!2sth" 
              class="w-full h-[450px] rounded-lg"
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <div class="grid grid-columns-1 lg:grid-cols-2 gap-10 bg-white p-8 lg:p-12 rounded-xl shadow-md border border-gray-200">
            
            <div class="flex flex-col justify-between space-y-6">
                <div>
                    <h2 class="text-3xl font-bold text-[#003366] border-b-4 border-[#ff9800] pb-3 inline-block">
                        วิทยาลัยการอาชีพกุมภวาปี
                    </h2>
                    <p class="text-gray-500 mt-3 font-medium">สำนักงานคณะกรรมการการอาชีวศึกษา กระทรวงศึกษาธิการ</p>
                </div>
                
                <div class="space-y-3 text-gray-700">
                    <p class="text-lg font-bold text-[#002d4a] flex items-center gap-2">
                        <i class="fas fa-map-marker-alt text-[#ff9800]"></i> สถานที่ติดต่อ :
                    </p>
                    <div class="pl-6 space-y-1 text-base leading-relaxed">
                        <p>เลขที่ 301 หมู่ที่ 1</p> <p>ตำบล ปะโค อำเภอกุมภวาปี อุดรธานี</p>
                        <p>41370</p>
                    </div>
                </div>
                
                <div class="space-y-3 text-gray-700">
                    <p class="text-lg font-bold text-[#002d4a] flex items-center gap-2">
                        <i class="fas fa-address-book text-[#ff9800]"></i> ช่องทางการติดต่อ :
                    </p>
                    <div class="pl-6 space-y-2 text-base">
                        <p class="flex items-center gap-2">
                            <i class="fas fa-phone text-sm text-gray-400"></i>
                            <span>มือถือ : <strong class="text-gray-900">042-334455</strong></span>
                        </p>
                        <p class="flex items-center gap-2">
                            <i class="fas fa-envelope text-sm text-gray-400"></i>
                            <span>Email : <a href="mailto:krucoconut.vecskill@gmail.com" class="text-[#003366] font-medium hover:underline">krucoconut.vecskill@gmail.com</a></span>
                        </p>
                    </div>
                </div>
            </div>

            <form action="#" method="POST" class="flex flex-col justify-between space-y-5 bg-gray-50 p-6 rounded-lg border border-gray-100">
                <div class="space-y-4">
                    <div class="flex flex-col gap-1.5">
                        <label for="name" class="text-sm font-semibold text-gray-700">Name</label>
                        <input type="text" id="name" name="name" placeholder="ชื่อ - นามสกุล" class="w-full bg-[#222525] text-white placeholder-gray-400 px-4 py-3 rounded focus:outline-none focus:ring-2 focus:ring-[#ff9800] transition" required>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="email" class="text-sm font-semibold text-gray-700">Email</label>
                        <input type="email" id="email" name="email" placeholder="อีเมล์" class="w-full bg-[#222525] text-white placeholder-gray-400 px-4 py-3 rounded focus:outline-none focus:ring-2 focus:ring-[#ff9800] transition" required>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="message" class="text-sm font-semibold text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" placeholder="ข้อความ" class="w-full bg-[#222525] text-white placeholder-gray-400 px-4 py-3 rounded focus:outline-none focus:ring-2 focus:ring-[#ff9800] transition resize-none" required></textarea>
                    </div>
                </div>

                <button type="submit" class="bg-[#6cb77f] text-gray-900 font-bold tracking-wider py-3.5 px-12 rounded shadow hover:bg-[#5aa66d] active:scale-95 transition-all self-end w-full sm:w-auto">
                    SEND
                </button>
            </form>

        </div>
    </main>

    <footer class="bg-[#002d4a] text-gray-400 text-center py-4 text-xs border-t border-white/10 mt-12 w-full">
        <p>&copy; 2568 สงวนลิขสิทธิ์ | วิทยาลัยการอาขีพกุมภวาปี</p>
        <p>&copy; ผู้พัฒนาเว็บไซต์ : (นายวิทิตย์ แก้วขัยศรี)</p>
    </footer>

</body>
</html>