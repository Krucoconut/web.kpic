<?php session_start(); ?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วิทยาลัยการอาชีพกุมภวาปี</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html, body { width: 100%; overflow-x: hidden; }
        body { font-family: 'Prompt', sans-serif; background-color: #f0f4f8; color: #1a1a2e; }

        /* ===== HEADER ===== */
        header { background: #002d4a; color: #fff; position: sticky; top: 0; z-index: 100; box-shadow: 0 2px 12px rgba(0,0,0,0.3); width: 100%; }
        .header-inner { width: 100%; padding: 12px 16px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px; }
        .header-brand { display: flex; align-items: center; gap: 12px; }
        .header-brand img { width: 52px; height: 52px; object-fit: contain; flex-shrink: 0; }
        .header-brand h1 { font-size: 1.15rem; font-weight: 700; color: #f5c842; line-height: 1.2; }
        .header-brand p { font-size: 0.68rem; color: #c8d8e8; }
        .header-contact { display: flex; flex-wrap: wrap; gap: 14px; font-size: 0.8rem; color: #c8d8e8; }
        .header-contact a { color: #fff; text-decoration: none; }
        .header-contact span { display: flex; align-items: center; gap: 6px; }
        .header-contact i { color: #f97316; }

        /* ===== NAVBAR ===== */
        .navbar { background: #ff9800; border-top: 1px solid rgba(0,45,74,0.2); width: 100%; }
        .navbar-inner { width: 100%; display: flex; align-items: stretch; position: relative; }

        /* Desktop nav links */
        .nav-link, .nav-dropdown > button {
            color: #002d4a; font-weight: 600; font-size: 0.82rem;
            padding: 12px 14px; border: none; background: none; cursor: pointer;
            display: flex; flex-direction: column; align-items: center; justify-content: center;
            white-space: nowrap; transition: background 0.2s; text-decoration: none;
        }
        .nav-link:hover, .nav-dropdown > button:hover { background: rgba(0,0,0,0.1); }
        .nav-link-home { background: #002d4a; color: #fff; }
        .nav-link-home:hover { background: #003a5e; color: #fff; }
        .nav-sub { font-size: 0.62rem; opacity: 0.65; font-weight: 400; margin-top: 2px; }

        /* Dropdown */
        .nav-dropdown { position: relative; }
        .dropdown-menu {
            position: absolute; left: 0; top: 100%; min-width: 260px; background: #fff;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15); border-top: 3px solid #002d4a;
            opacity: 0; visibility: hidden; transition: opacity 0.2s, visibility 0.2s;
            z-index: 200;
        }
        .nav-dropdown:hover .dropdown-menu { opacity: 1; visibility: visible; }
        .dropdown-item {
            display: flex; align-items: center; justify-content: space-between; gap: 10px;
            padding: 11px 16px; color: #002d4a; text-decoration: none; font-size: 0.82rem;
            font-weight: 500; border-bottom: 1px dashed #e5e7eb; transition: background 0.15s;
        }
        .dropdown-item:last-child { border-bottom: none; }
        .dropdown-item:hover { background: #fff7ed; }

        /* Sub-dropdown */
        .sub-dropdown { position: relative; }
        .sub-dropdown:hover .sub-menu { opacity: 1; visibility: visible; }
        .sub-menu {
            position: absolute; left: 100%; top: 0; min-width: 260px; background: #fff;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15); border-left: 3px solid #ff9800;
            opacity: 0; visibility: hidden; transition: opacity 0.15s, visibility 0.15s;
            z-index: 300;
        }

        /* Register button */
        .nav-register {
            background: linear-gradient(135deg, #c0392b, #e74c3c); color: #fff;
            padding: 12px 16px; font-weight: 700; font-size: 0.82rem;
            display: flex; align-items: center; gap: 6px;
            text-decoration: none; white-space: nowrap; margin-left: auto;
            transition: filter 0.2s; flex-shrink: 0;
        }
        .nav-register:hover { filter: brightness(1.15); }

        /* ===== HAMBURGER (mobile) ===== */
        .hamburger-btn {
            display: none; background: none; border: none; cursor: pointer;
            color: #002d4a; font-size: 1.4rem; padding: 10px 14px;
        }
        .mobile-menu {
            display: none; flex-direction: column; background: #fff8f0;
            border-top: 2px solid #002d4a; width: 100%;
        }
        .mobile-menu.open { display: flex; }
        .mobile-menu a, .mobile-menu button {
            display: block; width: 100%; text-align: left;
            padding: 12px 20px; color: #002d4a; font-weight: 600; font-size: 0.9rem;
            border-bottom: 1px dashed #e5e7eb; background: none; border-left: none; border-right: none; border-top: none;
            cursor: pointer; text-decoration: none; font-family: 'Prompt', sans-serif;
        }
        .mobile-menu a:hover, .mobile-menu button:hover { background: #fff3e0; }
        .mobile-sub { padding-left: 36px !important; font-size: 0.85rem !important; font-weight: 500 !important; background: #fafafa !important; }
        .mobile-group-label {
            background: #002d4a !important; color: #f5c842 !important;
            font-weight: 700 !important; padding: 10px 20px !important;
            display: flex !important; align-items: center; justify-content: space-between;
        }
        .mobile-group-content { display: none; }
        .mobile-group-content.open { display: block; }

        /* ===== POPUP ===== */
        #popup {
            position: fixed; inset: 0; z-index: 9999;
            background: rgba(0,0,0,0.82); display: flex;
            flex-direction: column; justify-content: center; align-items: center; padding: 16px;
        }
        #popup img { max-width: 100%; max-height: 78vh; object-fit: contain; border: 3px solid #ccc; border-radius: 6px; }
        #popup button {
            margin-top: 16px; background: #002d4a; color: #ccc;
            padding: 10px 28px; border: 1px solid #ccc; border-radius: 6px;
            cursor: pointer; font-family: 'Prompt', sans-serif; font-size: 0.9rem;
            transition: background 0.2s;
        }
        #popup button:hover { background: #003d63; }

        /* ===== SLIDER ===== */
        .slider-wrapper { width: 100%; padding: 16px 16px 0; }
        .slider-container { position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.15); }
        .slides { display: flex; transition: transform 0.5s ease-in-out; }
        .slides img { width: 100%; flex-shrink: 0; object-fit: cover; max-height: 460px; }
        .slider-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(0,0,0,0.4); color: #fff; border: none; cursor: pointer;
            padding: 12px 14px; font-size: 1.1rem; transition: background 0.2s; z-index: 10;
        }
        .slider-btn:hover { background: rgba(0,0,0,0.7); }
        .slider-btn.prev { left: 0; border-radius: 0 6px 6px 0; }
        .slider-btn.next { right: 0; border-radius: 6px 0 0 6px; }
        .slider-dots { text-align: center; margin-top: 10px; display: flex; justify-content: center; gap: 8px; }
        .dot { width: 10px; height: 10px; border-radius: 50%; background: #ccc; cursor: pointer; transition: background 0.2s; }
        .dot.active { background: #002d4a; }

        /* ===== QUICK LINKS ===== */
        .quick-links { width: 100%; padding: 16px; display: flex; gap: 10px; flex-wrap: wrap; justify-content: center; }
        .quick-link-card {
            border: 2px solid #002d4a; border-radius: 8px; overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s; display: block; flex: 1 1 140px; max-width: 180px;
        }
        .quick-link-card:hover { transform: translateY(-4px); box-shadow: 0 8px 20px rgba(0,45,74,0.2); }
        .quick-link-card img { width: 100%; height: auto; aspect-ratio: 1; object-fit: cover; display: block; }

        /* ===== ABOUT SECTION ===== */
        .about-section { width: 100%; padding: 16px; }
        .about-card {
            background: #fff; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            display: flex; flex-direction: row; overflow: hidden;
        }
        .about-image { flex: 1; min-height: 320px; position: relative; }
        .about-image img { width: 100%; height: 100%; object-fit: cover; display: block; }
        .about-image-overlay {
            position: absolute; bottom: 0; left: 0; right: 0;
            background: linear-gradient(to top, rgba(0,45,74,0.85), transparent);
            padding: 16px; color: #fff;
        }
        .about-text { flex: 1; padding: 30px; display: flex; flex-direction: column; justify-content: center; background: #002d4a; }
        .about-text h2 { color: #f5c842; font-size: 1.15rem; font-weight: 700; margin-bottom: 16px; line-height: 1.6; }
        .about-text p { color: #c8d8e8; font-size: 0.88rem; line-height: 1.9; margin-bottom: 14px; text-indent: 2em; text-align: justify; }
        .about-text p:last-child { margin-bottom: 0; }

        /* ===== NEWS STRIP ===== */
        .news-strip { background: #002d4a; color: #fff; padding: 9px 0; overflow: hidden; width: 100%; }
        .news-strip-inner { display: flex; align-items: center; width: 100%; padding: 0 16px; gap: 12px; }
        .news-label { background: #f5c842; color: #002d4a; font-weight: 700; font-size: 0.75rem; padding: 3px 10px; border-radius: 4px; white-space: nowrap; }
        .news-ticker { overflow: hidden; flex: 1; }
        .news-ticker-inner { display: flex; animation: ticker 25s linear infinite; gap: 60px; width: max-content; }
        .news-ticker-inner:hover { animation-play-state: paused; }
        .news-ticker-inner span { white-space: nowrap; font-size: 0.85rem; color: #d0e8ff; }
        @keyframes ticker { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

        /* ===== DIRECTOR + NEWS SECTION ===== */
        .main-content { width: 100%; padding: 16px; }
        .main-content-inner { width: 100%; display: flex; flex-direction: column; gap: 20px; }

        /* ===== VIDEO SECTION ===== */
        .video-section { width: 100%; padding: 16px; background: #fff; }

        /* ===== FOOTER ===== */
        footer { background: #002d4a; color: #8aa8c0; text-align: center; padding: 18px 16px; font-size: 0.78rem; margin-top: 0; border-top: 3px solid #f5c842; width: 100%; }
        footer a { color: #f5c842; text-decoration: none; }
        footer a:hover { text-decoration: underline; }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .about-card { flex-direction: column; }
            .about-image { min-height: 220px; }
        }

        @media (max-width: 768px) {
            /* Hide desktop nav, show hamburger */
            .desktop-nav { display: none !important; }
            .hamburger-btn { display: flex; align-items: center; }
            .nav-register-desktop { display: none !important; }

            .header-brand h1 { font-size: 1rem; }
            .header-brand p { font-size: 0.62rem; }
            .header-contact { display: none; }

            .slides img { max-height: 220px; }
            .quick-link-card { flex: 1 1 110px; max-width: 150px; }
        }

        @media (min-width: 769px) {
            .hamburger-btn { display: none !important; }
            .mobile-menu { display: none !important; }
            .desktop-nav { display: flex !important; }
        }

        @media (max-width: 480px) {
            .quick-link-card { flex: 1 1 90px; max-width: 130px; }
            .about-text { padding: 18px; }
            .about-text h2 { font-size: 1rem; }
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <!-- ===== HEADER ===== -->
    <header>
        <div class="header-inner">
            <div class="header-brand">
                <img src="images/kpic-logo.png" alt="โลโก้วิทยาลัยการอาชีพกุมภวาปี">
                <div>
                    <h1>วิทยาลัยการอาชีพกุมภวาปี</h1>
                    <p>Kumphawapi Industrial and Community Education College</p>
                </div>
            </div>
            <div class="header-contact">
                <span><i class="fas fa-phone-alt"></i> โทร: <a href="tel:042339744">042-339744</a></span>
                <span><i class="fas fa-envelope"></i> <a href="mailto:krucoconut.vecskill@gmail.com">krucoconut.vecskill@gmail.com</a></span>
            </div>
        </div>

        <!-- ===== NAVBAR ===== -->
        <div class="navbar">
            <div class="navbar-inner">

                <!-- Desktop Nav -->
                <nav class="desktop-nav flex flex-wrap flex-1 text-sm font-medium" style="display:flex;">

                    <a href="home.php" class="nav-link nav-link-home">
                        <span>หน้าหลัก</span>
                        <span class="nav-sub">Home</span>
                    </a>

                    <!-- เกี่ยวกับเรา -->
                    <div class="nav-dropdown">
                        <button>
                            <span>เกี่ยวกับเรา <i class="fas fa-chevron-down" style="font-size:9px;"></i></span>
                            <span class="nav-sub">About Us</span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> ข้อมูลสถานศึกษา</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> วิสัยทัศน์และพันธกิจ</a>
                            <a href="executive_committee.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> คณะผู้บริหาร</a>
                            <a href="2.Educational personnel.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> บุคลากรทางการศึกษา</a>
                            <a href="2.Organizational structure.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> โครงสร้างองค์กร</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> แผนปฏิบัติงานประจำปี</a>
                        </div>
                    </div>

                    <!-- สาขาวิชา -->
                    <div class="nav-dropdown">
                        <button>
                            <span>สาขาวิชา <i class="fas fa-chevron-down" style="font-size:9px;"></i></span>
                            <span class="nav-sub">Faculty</span>
                        </button>
                        <div class="dropdown-menu" style="min-width:280px;">
                            <div class="sub-dropdown">
                                <a href="#" class="dropdown-item">
                                    <span><i class="fas fa-arrow-circle-right"></i> ประเภทวิชาอุตสาหกรรม</span>
                                    <i class="fas fa-chevron-right" style="font-size:10px;color:#aaa;"></i>
                                </a>
                                <div class="sub-menu">
                                    <a href="1.Automotive Mechanics Branch.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สาขาวิชาช่างยนต์</a>
                                    <a href="1.Electric Vehicle Branch.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สาขาวิชายานยนต์ไฟฟ้า</a>
                                    <a href="1.Factory Mechanics Branch.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สาขาวิชาช่างกลโรงงาน</a>
                                    <a href="1.Welding Technology Branch.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สาขาวิชาช่างเชื่อมโลหะ</a>
                                    <a href="1.Electrical Power Engineering Branch.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สาขาวิชาช่างไฟฟ้ากำลัง</a>
                                    <a href="1.Electronics Technician Branch.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สาขาวิชาช่างอิเล็กทรอนิกส์</a>
                                </div>
                            </div>
                            <div class="sub-dropdown">
                                <a href="#" class="dropdown-item">
                                    <span><i class="fas fa-arrow-circle-right"></i> ประเภทวิชาบริหารธุรกิจ</span>
                                    <i class="fas fa-chevron-right" style="font-size:10px;color:#aaa;"></i>
                                </a>
                                <div class="sub-menu">
                                    <a href="1.Marketing Department.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สาขาการตลาด</a>
                                    <a href="1.Accounting.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สาขาวิชาการบัญชี</a>
                                    <a href="1.Department of Foreign Languages.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สาขาวิชาภาษาต่างประเทศ</a>
                                </div>
                            </div>
                            <div class="sub-dropdown">
                                <a href="#" class="dropdown-item">
                                    <span><i class="fas fa-arrow-circle-right"></i> ประเภทวิชาดิจิทัลและ IT</span>
                                    <i class="fas fa-chevron-right" style="font-size:10px;color:#aaa;"></i>
                                </a>
                                <div class="sub-menu">
                                    <a href="1.Information Technology Department.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สาขาเทคโนโลยีสารสนเทศ</a>
                                    <a href="1.Digital Business Technology Branch.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สาขาเทคโนโลยีธุรกิจดิจิทัล</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="nav-link">
                        <span>หลักสูตร</span>
                        <span class="nav-sub">Course</span>
                    </a>

                    <!-- หน่วยงาน -->
                    <div class="nav-dropdown">
                        <button>
                            <span>หน่วยงาน <i class="fas fa-chevron-down" style="font-size:9px;"></i></span>
                            <span class="nav-sub">Departments</span>
                        </button>
                        <div class="dropdown-menu" style="min-width:280px;">
                            <div class="sub-dropdown">
                                <a href="#" class="dropdown-item"><span><i class="fas fa-arrow-circle-right"></i> ฝ่ายวิชาการ</span><i class="fas fa-chevron-right" style="font-size:10px;color:#aaa;"></i></a>
                                <div class="sub-menu">
                                    <a href="academic.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานพัฒนาหลักสูตรฯ</a>
                                    <a href="measurement_and_evaluation_work.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานวัดและประเมินผล</a>
                                    <a href="bilateral_work.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานอาชีวศึกษาระบบทวิภาคี</a>
                                    <a href="academic_service.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานวิทยบริการและเทคโนโลยี</a>
                                    <a href="special_education.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานการศึกษาพิเศษ</a>
                                    <a href="technology_course.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานพัฒนาหลักสูตรสายเทคโนโลยี</a>
                                </div>
                            </div>
                            <div class="sub-dropdown">
                                <a href="#" class="dropdown-item"><span><i class="fas fa-arrow-circle-right"></i> ฝ่ายกิจการนักเรียน นักศึกษา</span><i class="fas fa-chevron-right" style="font-size:10px;color:#aaa;"></i></a>
                                <div class="sub-menu">
                                    <a href="student_activities.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานกิจกรรมนักเรียน นักศึกษา</a>
                                    <a href="scout_work.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานลูกเสือ</a>
                                    <a href="military_student_activities.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานนักศึกษาวิชาทหาร</a>
                                    <a href="professional_organization_(VPO).php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานองค์การนักวิชาชีพ อวท.</a>
                                    <a href="management_and_safety.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานปกครองและความปลอดภัย</a>
                                    <a href="guidance_work.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> ครูที่ปรึกษาและการแนะแนว</a>
                                    <a href="student_welfare_services.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานสวัสดิการนักเรียน นักศึกษา</a>
                                    <a href="special_projects.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานโครงการพิเศษ</a>
                                </div>
                            </div>
                            <div class="sub-dropdown">
                                <a href="#" class="dropdown-item"><span><i class="fas fa-arrow-circle-right"></i> ฝ่ายยุทธศาสตร์และแผนงาน</span><i class="fas fa-chevron-right" style="font-size:10px;color:#aaa;"></i></a>
                                <div class="sub-menu">
                                    <a href="project_plans_and_budgets.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> แผนงานและงบประมาณ</a>
                                    <a href="educational_quality_assurance.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานมาตรฐานและประกันคุณภาพ</a>
                                    <a href="digital_and_corporate_communications_center.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานศูนย์ดิจิทัลและสื่อสารองค์กร</a>
                                    <a href="research_innovation_and_invention_promotion_work.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานส่งเสริมวิจัย นวัตกรรม</a>
                                    <a href="business_promotion.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานส่งเสริมธุรกิจ</a>
                                    <a href="monitoring_and_evaluation_of_vocational_education.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานติดตามและประเมินผล</a>
                                </div>
                            </div>
                            <div class="sub-dropdown">
                                <a href="#" class="dropdown-item"><span><i class="fas fa-arrow-circle-right"></i> ฝ่ายบริหารทรัพยากร</span><i class="fas fa-chevron-right" style="font-size:10px;color:#aaa;"></i></a>
                                <div class="sub-menu">
                                    <a href="general_administration_work.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานบริหารทั่วไป</a>
                                    <a href="human_resources_department.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานบริหารและพัฒนาทรัพยากรบุคคล</a>
                                    <a href="finance.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานการเงิน</a>
                                    <a href="accounting_work.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานบัญชี</a>
                                    <a href="parcel_delivery.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานพัสดุ</a>
                                    <a href="building_and_grounds_work.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานอาคารสถานที่</a>
                                    <a href="registration_work.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> งานทะเบียน</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ข่าวสาร -->
                    <div class="nav-dropdown">
                        <button>
                            <span>ข่าวสาร <i class="fas fa-chevron-down" style="font-size:9px;"></i></span>
                            <span class="nav-sub">News</span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="5.Press Release.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> ข่าวประชาสัมพันธ์</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> ข่าวกิจกรรมวิทยาลัย</a>
                            <a href="5.Job opening announcement.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> ข่าวรับสมัครงาน</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> ข่าวจัดซื้อจัดจ้าง</a>
                        </div>
                    </div>

                    <!-- บริการ -->
                    <div class="nav-dropdown">
                        <button>
                            <span>บริการ <i class="fas fa-chevron-down" style="font-size:9px;"></i></span>
                            <span class="nav-sub">Service</span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> ระบบบริหารสถานศึกษา RMS</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> ระบบบริหารอาชีวศึกษา STD2018</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> ระบบบริหารจัดการงานพัสดุ SPD</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> ระบบห้องสมุดออนไลน์</a>
                        </div>
                    </div>

                    <!-- ส่วนเสริม -->
                    <div class="nav-dropdown">
                        <button>
                            <span>ส่วนเสริม <i class="fas fa-chevron-down" style="font-size:9px;"></i></span>
                            <span class="nav-sub">Extensions</span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="register.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> สมัครสมาชิก</a>
                            <a href="login.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> เข้าสู่ระบบ</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> วิดิทัศน์แนะนำวิทยาลัย</a>
                            <a href="personal_data_protection_policy.php" class="dropdown-item"><i class="fas fa-arrow-circle-right"></i> นโยบายคุ้มครองข้อมูลส่วนบุคคล</a>
                        </div>
                    </div>

                    <a href="ita.php" target="_blank" rel="noopener noreferrer" class="nav-link">
                        <span>ITA</span>
                        <span class="nav-sub">KPIC</span>
                    </a>

                    <a href="contact_us.php" class="nav-link">
                        <span>ติดต่อเรา</span>
                        <span class="nav-sub">Contact Us</span>
                    </a>
                </nav>

                <!-- Hamburger (mobile) -->
                <button class="hamburger-btn" id="hamburgerBtn" aria-label="เมนู">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Register button (desktop) -->
                <a href="https://std2018.vec.go.th/web/" target="_blank" rel="noopener noreferrer" class="nav-register nav-register-desktop">
                    <i class="fas fa-graduation-cap"></i>
                    <span>ลงทะเบียนเรียน/ชำระเงิน</span>
                </a>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu" id="mobileMenu">
                <a href="home.php" style="background:#002d4a;color:#f5c842;">🏠 หน้าหลัก</a>

                <!-- Mobile accordion groups -->
                <button class="mobile-group-label" onclick="toggleMobileGroup(this)">
                    เกี่ยวกับเรา <i class="fas fa-chevron-down"></i>
                </button>
                <div class="mobile-group-content">
                    <a href="#" class="mobile-sub">ข้อมูลสถานศึกษา</a>
                    <a href="#" class="mobile-sub">วิสัยทัศน์และพันธกิจ</a>
                    <a href="executive_committee.php" class="mobile-sub">คณะผู้บริหาร</a>
                    <a href="2.Educational personnel.php" class="mobile-sub">บุคลากรทางการศึกษา</a>
                    <a href="2.Organizational structure.php" class="mobile-sub">โครงสร้างองค์กร</a>
                </div>

                <button class="mobile-group-label" onclick="toggleMobileGroup(this)">
                    สาขาวิชา <i class="fas fa-chevron-down"></i>
                </button>
                <div class="mobile-group-content">
                    <a href="1.Automotive Mechanics Branch.php" class="mobile-sub">ช่างยนต์</a>
                    <a href="1.Electric Vehicle Branch.php" class="mobile-sub">ยานยนต์ไฟฟ้า</a>
                    <a href="1.Factory Mechanics Branch.php" class="mobile-sub">ช่างกลโรงงาน</a>
                    <a href="1.Welding Technology Branch.php" class="mobile-sub">ช่างเชื่อมโลหะ</a>
                    <a href="1.Electrical Power Engineering Branch.php" class="mobile-sub">ช่างไฟฟ้ากำลัง</a>
                    <a href="1.Electronics Technician Branch.php" class="mobile-sub">ช่างอิเล็กทรอนิกส์</a>
                    <a href="1.Marketing Department.php" class="mobile-sub">การตลาด</a>
                    <a href="1.Accounting.php" class="mobile-sub">การบัญชี</a>
                    <a href="1.Information Technology Department.php" class="mobile-sub">เทคโนโลยีสารสนเทศ</a>
                    <a href="1.Digital Business Technology Branch.php" class="mobile-sub">เทคโนโลยีธุรกิจดิจิทัล</a>
                </div>

                <button class="mobile-group-label" onclick="toggleMobileGroup(this)">
                    ข่าวสาร <i class="fas fa-chevron-down"></i>
                </button>
                <div class="mobile-group-content">
                    <a href="5.Press Release.php" class="mobile-sub">ข่าวประชาสัมพันธ์</a>
                    <a href="#" class="mobile-sub">ข่าวกิจกรรมวิทยาลัย</a>
                    <a href="5.Job opening announcement.php" class="mobile-sub">ข่าวรับสมัครงาน</a>
                    <a href="#" class="mobile-sub">ข่าวจัดซื้อจัดจ้าง</a>
                </div>

                <button class="mobile-group-label" onclick="toggleMobileGroup(this)">
                    บริการ / ส่วนเสริม <i class="fas fa-chevron-down"></i>
                </button>
                <div class="mobile-group-content">
                    <a href="#" class="mobile-sub">ระบบบริหารสถานศึกษา RMS</a>
                    <a href="#" class="mobile-sub">ระบบบริหารอาชีวศึกษา STD2018</a>
                    <a href="register.php" class="mobile-sub">สมัครสมาชิก</a>
                    <a href="login.php" class="mobile-sub">เข้าสู่ระบบ</a>
                    <a href="personal_data_protection_policy.php" class="mobile-sub">นโยบายคุ้มครองข้อมูลส่วนบุคคล</a>
                </div>

                <a href="ita.php" target="_blank">ITA KPIC</a>
                <a href="contact_us.php">ติดต่อเรา</a>
                <a href="https://std2018.vec.go.th/web/" target="_blank" style="background:#c0392b;color:#fff;font-weight:700;text-align:center;">
                    <i class="fas fa-graduation-cap"></i> ลงทะเบียนเรียน/ชำระเงิน
                </a>
            </div>
        </div>
    </header>

    <!-- ========== POPUP ========== -->
    <div id="popup">
        <img src="images/op.jpg" alt="ประกาศ / ข่าวสาร">
        <button onclick="document.getElementById('popup').style.display='none'">
            <i class="fas fa-times" style="margin-right:6px;"></i>ปิดหน้าต่างนี้
        </button>
    </div>

    <!-- ========== NEWS TICKER ========== -->
    <div class="news-strip">
        <div class="news-strip-inner">
            <span class="news-label"><i class="fas fa-bullhorn" style="margin-right:4px;"></i>ข่าวสาร</span>
            <div class="news-ticker">
                <div class="news-ticker-inner">
                    <span>📢 ประกาศรับสมัครนักเรียน นักศึกษา ประจำปีการศึกษา 2569</span>
                    <span>🏆 วิทยาลัยการอาชีพกุมภวาปี ยินดีต้อนรับนักเรียนใหม่ทุกท่าน</span>
                    <span>📅 กำหนดการชำระเงินค่าเล่าเรียน ภาคเรียนที่ 1/2569</span>
                    <span>🎓 ขอแสดงความยินดีกับนักศึกษาที่สำเร็จการศึกษาประจำปี 2568</span>
                    <span>📢 ประกาศรับสมัครนักเรียน นักศึกษา ประจำปีการศึกษา 2569</span>
                    <span>🏆 วิทยาลัยการอาชีพกุมภวาปี ยินดีต้อนรับนักเรียนใหม่ทุกท่าน</span>
                    <span>📅 กำหนดการชำระเงินค่าเล่าเรียน ภาคเรียนที่ 1/2569</span>
                    <span>🎓 ขอแสดงความยินดีกับนักศึกษาที่สำเร็จการศึกษาประจำปี 2568</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== SLIDER ========== -->
    <div class="slider-wrapper">
        <div class="slider-container">
            <div class="slides" id="slides">
                <img src="images2/24.6.69.png" alt="แบนเนอร์ 1">
                <img src="images2/17.6.69.png" alt="แบนเนอร์ 2">
                <img src="images2/ita1.png" alt="แบนเนอร์ 3">
            </div>
            <button class="slider-btn prev" onclick="moveSlide(-1)" aria-label="ก่อนหน้า">&#10094;</button>
            <button class="slider-btn next" onclick="moveSlide(1)" aria-label="ถัดไป">&#10095;</button>
        </div>
        <div class="slider-dots" id="dots"></div>
    </div>

    <!-- ========== QUICK LINKS ========== -->
    <div class="quick-links">
        <a href="https://std2018.vec.go.th/web/" target="_blank" class="quick-link-card">
            <img src="images2/ST02.png" alt="ระบบบริหารอาชีวศึกษา STD2018">
        </a>
        <a href="login.php" class="quick-link-card">
            <img src="images2/RMS2026.png" alt="ระบบบริหารสถานศึกษา RMS">
        </a>
        <a href="ita.php" target="_blank" class="quick-link-card">
            <img src="images2/ITA2568.png" alt="ITA 2568">
        </a>
        <a href="#" class="quick-link-card">
            <img src="images2/OVT.png" alt="OVT">
        </a>
        <a href="https://slfpre-approve.studentloan.or.th/studentloan-portal/" target="_blank" class="quick-link-card">
            <img src="images2/kys.png" alt="กยศ.">
        </a>
    </div>

    <!-- ========== ABOUT SECTION ========== -->
    <div class="about-section">
        <div class="about-card">
            <div class="about-image">
                <img src="#" alt="วิทยาลัยการอาชีพกุมภวาปี">
                <div class="about-image-overlay">
                    <p style="font-size:0.82rem; color:#f5c842; font-weight:600;">📍 วิทยาลัยการอาชีพกุมภวาปี จ.อุดรธานี</p>
                </div>
            </div>
            <div class="about-text">
                <h2>วิทยาลัยการอาชีพกุมภวาปี : เส้นทางสู่การมีงานทำและอนาคตที่มั่นคง</h2>
                <p>วิทยาลัยการอาชีพกุมภวาปี เป็นสถาบันที่มุ่งเน้นการสร้างคนให้มีทักษะตรงกับความต้องการของตลาดแรงงาน ภายใต้แนวคิด "คิดดี มีงานทำ" โดยการเรียนการสอนของที่นี่ไม่ได้จำกัดอยู่แค่การท่องจำทฤษฎีในห้องเรียน แต่เน้นให้นักศึกษาได้ลงมือปฏิบัติจริง ออกไปเผชิญและแก้ปัญหาในสถานประกอบการ เพื่อให้พร้อมสำหรับการทำงานในชีวิตจริง</p>
                <p>จุดเด่นสำคัญของวิทยาลัยคือการมีหลักสูตรที่ตอบโจทย์ทั้งยุคเก่าและยุคใหม่ ครอบคลุมตั้งแต่สายงานอุตสาหกรรม บริหารธุรกิจ ไปจนถึงเทคโนโลยีดิจิทัลและปัญญาประดิษฐ์ (AI) นอกจากนี้ทางวิทยาลัยยังมีระบบทวิภาคีที่เปิดโอกาสให้นักศึกษาได้ทำงานระหว่างเรียน มีรายได้ช่วยแบ่งเบาภาระครอบครัว และมีประสบการณ์ก่อนใคร</p>
                <p>เป้าหมายของวิทยาลัยคือการการันตีว่าทุกคนที่จบออกไปมีงานทำ มีทักษะชีวิตที่ดี และกลายเป็นกำลังสำคัญในการพัฒนาประเทศและชุมชนอย่างยั่งยืน</p>
            </div>
        </div>
    </div>

    <!-- ========== DIRECTOR + NEWS SECTION ========== -->
    <div class="main-content">
        <div class="main-content-inner" style="flex-direction: row; align-items: flex-start;" id="directorNewsRow">
            <!-- Director Profile -->
            <div style="width:220px; flex-shrink:0; display:flex; flex-direction:column; align-items:center; text-align:center;" id="directorCol">
                <div style="border-radius:24px; overflow:hidden; width:100%; aspect-ratio:3/4; background:#e5e7eb; border:2px solid #ddd;">
                    <img src="images/vichit.png" alt="ผู้อำนวยการ" style="width:100%; height:100%; object-fit:cover;">
                </div>
                <h2 style="font-size:1.1rem; font-weight:700; margin-top:12px; color:#1a1a2e;">นายวิชิต ธรรมฤทธิ์</h2>
                <p style="font-size:0.82rem; color:#555;">ผู้อำนวยการวิทยาลัยการอาชีพกุมภวาปี</p>
            </div>

            <!-- News Column -->
            <div style="flex:1; display:flex; flex-direction:column; gap:16px;">
                <!-- Category Tabs -->
                <div style="display:flex; flex-wrap:wrap; gap:8px;">
                    <button style="background:#1e293b; color:#fff; padding:8px 16px; border-radius:9999px; font-size:0.82rem; font-weight:600; border:none; cursor:pointer; font-family:'Prompt',sans-serif;">ข่าวประชาสัมพันธ์</button>
                    <button style="background:#1e293b; color:#fff; padding:8px 16px; border-radius:9999px; font-size:0.82rem; font-weight:600; border:none; cursor:pointer; font-family:'Prompt',sans-serif;">ข่าวกิจกรรม</button>
                    <button style="background:#1e293b; color:#fff; padding:8px 16px; border-radius:9999px; font-size:0.82rem; font-weight:600; border:none; cursor:pointer; font-family:'Prompt',sans-serif;">ข่าวสมัครงาน-สมัครเรียน</button>
                    <button style="background:#1e293b; color:#fff; padding:8px 16px; border-radius:9999px; font-size:0.82rem; font-weight:600; border:none; cursor:pointer; font-family:'Prompt',sans-serif;">ข่าวจัดซื้อจัดจ้าง</button>
                    <button style="background:#1e293b; color:#fff; padding:8px 16px; border-radius:9999px; font-size:0.82rem; font-weight:600; border:none; cursor:pointer; font-family:'Prompt',sans-serif;">งบประมาณ (งบทดลอง)</button>
                </div>

                <!-- News Grid Row 1 -->
                <div style="background:#fff; border:1px solid #e5e7eb; border-radius:24px; padding:20px;">
                    <div class="news-grid">
                        <?php
                        $newsItems = [
                            ['title'=>'ต้อนรับผู้เข้าร่วมโครงการขยายเครือข่ายความร่วมมือด้านการจัดการอาชีวศึกษา','date'=>'วันจันทร์, 22 มิถุนายน 2569 11:25'],
                            ['title'=>'โครงการหลักสูตรพัฒนาสมรรถนะครูสายอาชีพไมซ์และการบริการ ตามบทบาทผู้สอนยุคใหม่','date'=>'วันจันทร์, 22 มิถุนายน 2569 11:22'],
                            ['title'=>'ผู้อำนวยการ ให้เกียรติเป็นประธานในพิธีมอบเกียรติบัตรแก่ผู้เข้าร่วมอบรมหลักสูตรระยะสั้น','date'=>'วันอาทิตย์, 21 มิถุนายน 2569 11:13'],
                            ['title'=>'วิทยาลัยอาชีวศึกษาขอนแก่น ได้จัดพิธีไหว้ครูและมอบทุนการศึกษา ประจำปีการศึกษา 2569','date'=>'วันพฤหัสบดี, 18 มิถุนายน 2569'],
                        ];
                        foreach($newsItems as $item): ?>
                        <div class="news-card">
                            <div class="news-thumb"><img src="https://via.placeholder.com/400x300" alt="ข่าว"></div>
                            <h3 class="news-title"><?= $item['title'] ?></h3>
                            <p class="news-date"><?= $item['date'] ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- News Grid Row 2 -->
                <div style="background:#fff; border:1px solid #e5e7eb; border-radius:24px; padding:20px;">
                    <div class="news-grid">
                        <?php foreach($newsItems as $item): ?>
                        <div class="news-card">
                            <div class="news-thumb"><img src="https://via.placeholder.com/400x300" alt="ข่าว"></div>
                            <h3 class="news-title"><?= $item['title'] ?></h3>
                            <p class="news-date"><?= $item['date'] ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== VIDEO SECTION ========== -->
    <div class="video-section">
        <div style="width:100%; max-width:100%; padding:0 16px;">
            <div style="text-align:center; margin-bottom:24px;">
                <h2 style="font-size:1.8rem; font-weight:700; color:#1a1a2e; margin-bottom:6px;">วีดีโอแนะนำ</h2>
                <p style="color:#555; font-size:0.95rem;">วีดีทัศน์เผยแพร่ข้อมูลวิทยาลัยการอาชีพกุมภวาปี</p>
            </div>
            <div class="video-grid">
                <?php
                $videos = [
                    ['title'=>'มองมุมใหม่ Five Focus ตอน : วิทยาลัยการอาชีพกุมภวาปี','date'=>'08 พฤษภาคม 2569','views'=>'3'],
                    ['title'=>'สถาบันการอาชีวศึกษาภาคตะวันออกเฉียงเหนือ 3 ตั้งศูนย์วิจัย AI แห่งแรกของไทย','date'=>'17 ตุลาคม 2568','views'=>'18'],
                    ['title'=>'รำบวงสรวงศาลหลักเมืองขอนแก่น 2566','date'=>'17 ตุลาคม 2568','views'=>'8'],
                    ['title'=>'อาชีวะ Proud วิทยาลัยการอาชีพกุมภวาปี','date'=>'17 ตุลาคม 2568','views'=>'17'],
                ];
                foreach($videos as $v): ?>
                <div class="video-card">
                    <div class="video-thumb">
                        <img src="https://via.placeholder.com/400x250" alt="วิดีโอ">
                        <div class="play-overlay">
                            <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.2">
                                <path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="video-title"><?= $v['title'] ?></h3>
                    <p class="video-meta">📅 <?= $v['date'] ?> &nbsp;👁️ <?= $v['views'] ?> views</p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- ========== FOOTER ========== -->
    <footer>
        <p>© <?= date('Y') + 543 ?> สงวนลิขสิทธิ์ | <strong style="color:#f5c842;">วิทยาลัยการอาชีพกุมภวาปี</strong> &nbsp;|&nbsp;
        <a href="personal_data_protection_policy.php">นโยบายคุ้มครองข้อมูลส่วนบุคคล</a> &nbsp;|&nbsp;
        <a href="contact_us.php">ติดต่อเรา</a></p>
    </footer>

    <style>
        /* News grid */
        .news-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
        .news-card { display: flex; flex-direction: column; gap: 8px; }
        .news-thumb { border-radius: 12px; overflow: hidden; aspect-ratio: 4/3; background: #f3f4f6; }
        .news-thumb img { width: 100%; height: 100%; object-fit: cover; filter: grayscale(1); }
        .news-title { font-weight: 600; font-size: 0.85rem; color: #1a1a2e; line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
        .news-date { font-size: 0.72rem; color: #888; }

        /* Video grid */
        .video-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
        .video-card { display: flex; flex-direction: column; gap: 10px; cursor: pointer; }
        .video-thumb { position: relative; border-radius: 16px; overflow: hidden; aspect-ratio: 16/10; background: #e5e7eb; }
        .video-thumb img { width: 100%; height: 100%; object-fit: cover; }
        .play-overlay { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.1); transition: background 0.2s; }
        .video-card:hover .play-overlay { background: rgba(0,0,0,0.25); }
        .video-card:hover .play-overlay svg { transform: scale(1.1); transition: transform 0.2s; }
        .video-title { font-weight: 600; font-size: 0.88rem; color: #1a1a2e; line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .video-meta { font-size: 0.72rem; color: #888; }

        /* Responsive grids */
        @media (max-width: 1024px) {
            .news-grid { grid-template-columns: repeat(2, 1fr); }
            .video-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 768px) {
            #directorNewsRow { flex-direction: column !important; }
            #directorCol { width: 100% !important; flex-direction: row !important; align-items: center; gap: 16px; text-align: left !important; }
            #directorCol > div:first-child { width: 100px !important; flex-shrink: 0; aspect-ratio: 3/4; }
        }
        @media (max-width: 640px) {
            .news-grid { grid-template-columns: repeat(2, 1fr); }
            .video-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 400px) {
            .news-grid { grid-template-columns: 1fr; }
            .video-grid { grid-template-columns: 1fr; }
        }
    </style>

    <!-- ========== SCRIPTS ========== -->
    <script>
        // --- Slider ---
        let currentIndex = 0;
        const slidesEl = document.getElementById('slides');
        const totalSlides = slidesEl.querySelectorAll('img').length;
        const dotsContainer = document.getElementById('dots');
        let autoTimer;

        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('div');
            dot.className = 'dot' + (i === 0 ? ' active' : '');
            dot.addEventListener('click', () => goTo(i));
            dotsContainer.appendChild(dot);
        }

        function updateSlider() {
            slidesEl.style.transform = `translateX(-${currentIndex * 100}%)`;
            document.querySelectorAll('.dot').forEach((d, i) => d.classList.toggle('active', i === currentIndex));
        }

        function goTo(index) { currentIndex = (index + totalSlides) % totalSlides; updateSlider(); }
        function moveSlide(direction) { goTo(currentIndex + direction); }
        function startAuto() { autoTimer = setInterval(() => moveSlide(1), 7000); }
        function stopAuto() { clearInterval(autoTimer); }

        document.querySelector('.slider-container').addEventListener('mouseenter', stopAuto);
        document.querySelector('.slider-container').addEventListener('mouseleave', startAuto);
        startAuto();

        // --- Hamburger ---
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        hamburgerBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            hamburgerBtn.querySelector('i').className = mobileMenu.classList.contains('open')
                ? 'fas fa-times' : 'fas fa-bars';
        });

        // --- Mobile accordion ---
        function toggleMobileGroup(btn) {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('i');
            const isOpen = content.classList.contains('open');
            // Close all others
            document.querySelectorAll('.mobile-group-content.open').forEach(el => {
                el.classList.remove('open');
                el.previousElementSibling.querySelector('i').className = 'fas fa-chevron-down';
            });
            if (!isOpen) {
                content.classList.add('open');
                icon.className = 'fas fa-chevron-up';
            }
        }
    </script>

</body>
</html>