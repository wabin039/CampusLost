<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusLost — Northern University Bangladesh</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0b0f19;
            color: #ffffff;
            overflow-x: hidden;
            margin: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .navbar-brand {
            font-family: 'Outfit', sans-serif;
        }

        /* Fixed Background Campus Image (Stuck background for the entire page) */
        .fixed-hero-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: linear-gradient(rgba(11, 15, 25, 0.75), rgba(11, 15, 25, 0.88)), url("{{ asset('images/campus.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -1;
        }

        /* Navbar */
        .custom-navbar {
            background: rgba(11, 15, 25, 0.85);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            z-index: 1000;
        }

        /* Hero Content Container */
        .hero-content-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 100px;
            padding-bottom: 50px;
        }

        /* Sleek Glass Search Box */
        .search-box-card {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 100px;
            padding: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }

        .search-box-card input {
            color: #ffffff !important;
            font-size: 1.05rem;
            background: transparent !important;
        }

        .search-box-card input::placeholder {
            color: #94a3b8;
        }

        /* Fully Transparent Section (No background block, floats directly over the campus photo) */
        .transparent-floating-section {
            position: relative;
            background: transparent !important;
            /* কোনো ব্যাকগ্রাউন্ড বক্স থাকবে না */
            padding: 80px 0 60px 0;
            z-index: 2;
        }

        /* Frosted Glass Cards that float directly on the campus photo */
        .feature-card {
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            color: #ffffff;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            border-color: #10b981;
            box-shadow: 0 20px 40px rgba(16, 185, 129, 0.3);
            background: rgba(30, 41, 59, 0.88);
        }

        .realistic-icon {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            font-size: 28px;
        }

        .stats-box {
            background: rgba(15, 23, 42, 0.78);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            border-left: 5px solid #10b981;
            color: #ffffff;
        }
    </style>
</head>

<body>

    <!-- Fixed Stuck Background Campus Image -->
    <div class="fixed-hero-bg"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar py-3">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4 d-flex align-items-center" href="{{ url('/') }}">
                <div class="bg-success text-white p-2 rounded-3 me-2 d-flex align-items-center justify-content-center shadow-sm"
                    style="width: 38px; height: 38px;">
                    <i class="bi bi-shield-fill-check fs-5"></i>
                </div>
                <span>Campus<span class="text-success">Lost</span></span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-3">
                    <li><a class="nav-link text-light fw-medium" href="#features">Project Blueprint</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li>
                                <a href="{{ url('/dashboard') }}"
                                    class="btn btn-success rounded-pill px-4 fw-semibold shadow-sm text-white">Dashboard</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}"
                                    class="btn btn-outline-light rounded-pill px-4 fw-medium border-secondary">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}"
                                        class="btn btn-success rounded-pill px-4 fw-semibold shadow-sm text-white">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-content-section text-center text-white">
        <div class="container position-relative z-1 py-4">
            <h1 class="display-3 fw-bold mb-4" style="letter-spacing: -0.02em; text-shadow: 0 2px 6px rgba(0,0,0,0.8);">
                Smart Campus <span class="text-success">Lost & Found</span> System
            </h1>
            <p class="fs-5 text-light opacity-90 mb-5 mx-auto"
                style="max-width: 750px; line-height: 1.6; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">
                A centralized, secure enterprise platform designed for Northern University Bangladesh to report missing
                belongings, match records automatically with smart rules, and protect user ownership through admin
                verification.
            </p>

            <!-- Sleek Glass Search Bar -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7">
                    <div class="search-box-card">
                        <form action="#" method="GET" class="d-flex align-items-center">
                            <span class="ps-3 text-muted fs-4"><i class="bi bi-search"></i></span>
                            <input type="text" name="search" class="form-control border-0 shadow-none ps-3"
                                placeholder="Search item name, brand, or location (e.g., HP Laptop, ID Card)...">
                            <button
                                class="btn btn-success rounded-pill px-5 py-3 fw-bold text-white flex-shrink-0 shadow"
                                type="submit">Search Item</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ route('login') }}"
                    class="btn btn-success btn-lg px-4 rounded-pill fw-bold shadow-lg d-flex align-items-center gap-2 text-white">
                    <i class="bi bi-plus-circle-fill"></i> Report Lost Item
                </a>
                <a href="{{ route('login') }}"
                    class="btn btn-outline-light btn-lg px-4 rounded-pill fw-bold shadow border-secondary">
                    <i class="bi bi-bag-check-fill text-success"></i> Report Found Item
                </a>
            </div>

            <div class="mt-4 text-white-50 small">
                <i class="bi bi-chevron-down"></i> Scroll down to explore full project blueprint
            </div>
        </div>
    </section>

    <!-- Fully Transparent Floating Section (Directly over the stuck campus background photo) -->
    <div id="features" class="transparent-floating-section">
        <div class="container py-4">
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="stats-box d-flex align-items-center gap-3">
                        <div class="bg-success text-white p-3 rounded-4 fs-4 shadow-sm"><i
                                class="bi bi-database-fill-gear"></i></div>
                        <div>
                            <h4 class="fw-bold text-white mb-0">Single Table DB</h4>
                            <small class="text-light opacity-75">Optimized Schema Architecture</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-box d-flex align-items-center gap-3" style="border-left-color: #3b82f6;">
                        <div class="bg-primary text-white p-3 rounded-4 fs-4 shadow-sm"><i class="bi bi-cpu-fill"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold text-white mb-0">Smart Matching</h4>
                            <small class="text-light opacity-75">Rule-based attribute comparison</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-box d-flex align-items-center gap-3" style="border-left-color: #f59e0b;">
                        <div class="bg-warning text-dark p-3 rounded-4 fs-4 shadow-sm"><i
                                class="bi bi-shield-lock-fill"></i></div>
                        <div>
                            <h4 class="fw-bold text-white mb-0">Anti-Fraud Proof</h4>
                            <small class="text-light opacity-75">Secure Admin Verification</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mb-5 mt-4">
                <h2 class="fw-bold text-white mb-2" style="text-shadow: 0 2px 4px rgba(0,0,0,0.8);">Core System
                    Architecture & Features</h2>
                <p class="text-light opacity-85" style="text-shadow: 0 1px 3px rgba(0,0,0,0.8);">Engineered following
                    professional software development lifecycle standards</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100">
                        <div
                            class="realistic-icon bg-success bg-opacity-25 text-success border border-success border-opacity-50 mb-4">
                            <i class="bi bi-journal-richtext"></i>
                        </div>
                        <h4 class="fw-bold text-white fs-5 mb-3">Structured Item Reporting</h4>
                        <p class="text-light opacity-85 small lh-base mb-0">Students can securely log lost or found
                            assets with categories, locations, dates, and media proofs for swift recovery.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100">
                        <div
                            class="realistic-icon bg-primary bg-opacity-25 text-primary border border-primary border-opacity-50 mb-4">
                            <i class="bi bi-search-heart"></i>
                        </div>
                        <h4 class="fw-bold text-white fs-5 mb-3">Advanced Search & Filtering</h4>
                        <p class="text-light opacity-85 small lh-base mb-0">High-performance search query filters
                            allowing users to locate items instantly by type, location, and category.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100">
                        <div
                            class="realistic-icon bg-warning bg-opacity-25 text-warning border border-warning border-opacity-50 mb-4">
                            <i class="bi bi-patch-check-fill"></i>
                        </div>
                        <h4 class="fw-bold text-white fs-5 mb-3">Claim & Admin Verification</h4>
                        <p class="text-light opacity-85 small lh-base mb-0">Claimants submit hidden validation details.
                            Admins review credentials thoroughly before authorizing returns.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-center py-4 border-top border-secondary border-opacity-25 bg-transparent mt-5">
            <div class="container">
                <p class="mb-0 text-white-50 small">&copy; 2026 CampusLost System. Department of Computer Science &
                    Engineering (Wabin, Tanvir, Farhad).</p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
