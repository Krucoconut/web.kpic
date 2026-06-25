<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>ติดต่อเรา - วิทยาลัยการอาชีพกุมภวาปี</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Prompt', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col justify-between">

    <!-- HEADER & NAVIGATION -->
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
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">ฝ่ายวิชาการ</span></a>
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
                                <a href="#" class="flex items-center gap-3 px-5 py-3.5 hover:bg-orange-50 font-medium transition-colors"><i class="fas fa-arrow-circle-right text-xl text-[#002d4a]"></i><span class="text-sm">นโยบายคุ้มครองข้อมูลส่วนบุคคล</span></a>
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

    <!-- MAIN CONTENT SECTION -->
    <main class="container mx-auto px-4 py-12 max-w-7xl flex-grow">
        
        <!-- Section Title -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 tracking-wide">แผนกวิชาการบัญชี</h2>
            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 tracking-wide">วิทยาลัยการอาชีพกุมภวาปี</h3>
            <div class="h-1 w-100 bg-blue-600 mx-auto rounded-full"></div>
        </div>

        <!-- Leader Section (หัวหน้าแผนก) -->
        <div class="flex justify-center mb-10">
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden w-full max-w-sm border border-gray-100 text-center">
                <div class="bg-gradient-to-b from-blue-50 to-white pt-8 pb-4">
                    <div class="w-48 h-48 mx-auto rounded-full overflow-hidden border-4 border-blue-600 shadow-inner">
                        <img src="images/t-noi.png" alt="นางสาวไพเราะ มูลลา" class="w-full h-50 object-cover">
                    </div>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-1">นางสาวไพเราะ มูลลา</h2>
                    <p class="text-blue-600 font-medium text-sm tracking-wider uppercase mb-1">หัวหน้าแผนกวิชาการบัญชี</p>
                    <p class="text-slate-700 font-medium text-sm mb-2">ข้าราชการครูและบุคลากรทางการศึกษา</p>
                    <p class="text-gray-500 text-xs border-t pt-3">สำนักงานคณะกรรมการการอาชีวศึกษา กระทรวงศึกษาธิการ</p>
                </div>
            </div>
        </div>

 
    <div class="flex flex-wrap justify-center gap-x-12 gap-y-16 max-w-6xl mx-auto py-8">
    
    <div class="w-full md:w-[calc(33.333%-2rem)] max-w-sm bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-slate-100 text-center transform hover:-translate-y-1">
        <div class="bg-gradient-to-b from-slate-50 to-white pt-8 pb-3">
            <div class="w-40 h-40 mx-auto rounded-full overflow-hidden border-2 border-slate-200 shadow-sm">
                <img src="images/b-na.png" alt="นางสาวอังคณา ถำวาปี" class="w-full h-50 object-cover">
            </div>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-slate-900 mb-1">นางสาวอังคณา ถำวาปี</h3>
            <div class="mb-4">
                <p class="text-slate-700 font-medium text-sm">ข้าราชการครูและบุคลากรทางการศึกษา</p>
                <p class="text-slate-500 text-xs mt-0.5">(แผนกวิชาการบัญชี)</p>
            </div>
            <div class="border-t border-slate-100 pt-3 text-slate-400 text-xs">
                <p>สำนักงานคณะกรรมการการอาชีวศึกษา กระทรวงศึกษาธิการ</p>
            </div>
        </div>
    </div>
    
    <div class="w-full md:w-[calc(33.333%-2rem)] max-w-sm bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-slate-100 text-center transform hover:-translate-y-1">
        <div class="bg-gradient-to-b from-slate-50 to-white pt-8 pb-3">
            <div class="w-40 h-40 mx-auto rounded-full overflow-hidden border-2 border-slate-200 shadow-sm">
                <img src="images/t-yoy.png" alt="นางสาวเยาวภา ปัญญาประชุม" class="w-full h-50 object-cover">
            </div>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-slate-900 mb-1">นางสาวเยาวภา ปัญญาประชุม</h3>
            <div class="mb-4">
                <p class="text-slate-700 font-medium text-sm">ข้าราชการครูและบุคลากรทางการศึกษา</p>
                <p class="text-slate-500 text-xs mt-0.5">(แผนกวิชาการบัญชี)</p>
            </div>
            <div class="border-t border-slate-100 pt-3 text-slate-400 text-xs">
                <p>สำนักงานคณะกรรมการการอาชีวศึกษา กระทรวงศึกษาธิการ</p>
            </div>
        </div>
    </div>

    <div class="w-full md:w-[calc(33.333%-2rem)] max-w-sm bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-slate-100 text-center transform hover:-translate-y-1">
        <div class="bg-gradient-to-b from-slate-50 to-white pt-8 pb-3">
            <div class="w-40 h-40 mx-auto rounded-full overflow-hidden border-2 border-slate-200 shadow-sm">
                <img src="images/t-nawa.png" alt="นางสาวนวรัตน์ เครือเขื่อนเพชร" class="w-full h-50 object-cover">
            </div>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-slate-900 mb-1">นางสาวนวรัตน์ เครือเขื่อนเพชร</h3>
            <div class="mb-4">
                <p class="text-slate-700 font-medium text-sm">ครูพิเศษสอน</p>
                <p class="text-slate-500 text-xs mt-0.5">(แผนกวิชาการบัญชี)</p>
            </div>
            <div class="border-t border-slate-100 pt-3 text-slate-400 text-xs">
                <p>สำนักงานคณะกรรมการการอาชีวศึกษา กระทรวงศึกษาธิการ</p>
            </div>
        </div>
    </div>

    <div class="w-full md:w-[calc(33.333%-2rem)] max-w-sm bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-slate-100 text-center transform hover:-translate-y-1">
        <div class="bg-gradient-to-b from-slate-50 to-white pt-8 pb-3">
            <div class="w-40 h-40 mx-auto rounded-full overflow-hidden border-2 border-slate-200 shadow-sm">
                <img src="images/t-pon.png" alt="นางสาวกนกพร บาทชารี" class="w-full h-50 object-cover">
            </div>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-slate-900 mb-1">นางสาวกนกพร บาทชารี</h3>
            <div class="mb-4">
                <p class="text-slate-700 font-medium text-sm">ครูพิเศษสอน</p>
                <p class="text-slate-500 text-xs mt-0.5">(แผนกวิชาการบัญชี)</p>
            </div>
            <div class="border-t border-slate-100 pt-3 text-slate-400 text-xs">
                <p>สำนักงานคณะกรรมการการอาชีวศึกษา กระทรวงศึกษาธิการ</p>
            </div>
        </div>
    </div>

    <div class="w-full md:w-[calc(33.333%-2rem)] max-w-sm bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-slate-100 text-center transform hover:-translate-y-1">
        <div class="bg-gradient-to-b from-slate-50 to-white pt-8 pb-3">
            <div class="w-40 h-40 mx-auto rounded-full overflow-hidden border-2 border-slate-200 shadow-sm">
                <img src="images/t-new.png" alt="นายวิชัย หนองยาง" class="w-full h-50 object-cover">
            </div>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-slate-900 mb-1">นายวิชัย หนองยาง</h3>
            <div class="mb-4">
                <p class="text-slate-700 font-medium text-sm">ครูพิเศษสอน</p>
                <p class="text-slate-500 text-xs mt-0.5">(แผนกวิชาการบัญชี)</p>
            </div>
            <div class="border-t border-slate-100 pt-3 text-slate-400 text-xs">
                <p>สำนักงานคณะกรรมการการอาชีวศึกษา กระทรวงศึกษาธิการ</p>
            </div>
        </div>
    </div>

</div>
    </main>

    <!-- FOOTER SECTION -->
    <footer class="bg-[#002d4a] text-gray-400 text-center py-4 text-xs border-t border-white/10 w-full">
        <p>© 2568 สงวนลิขสิทธิ์ | วิทยาลัยการอาชีพกุมภวาปี</p>
    </footer>

</body>
</html>