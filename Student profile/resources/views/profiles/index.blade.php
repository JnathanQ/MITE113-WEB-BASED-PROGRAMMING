<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    body {
        background: #f5f7fb;
        font-family: Arial, sans-serif;
    }

    .profile-card {
        max-width: 850px;
        margin: 50px auto;
        border: none;
        border-radius: 20px;
        overflow: hidden;
    }

    .profile-header {
        background: linear-gradient(135deg, #0d6efd, #6610f2);
        padding: 45px 30px;
        color: white;
    }

    .profile-avatar {
        width: 100px;
        height: 100px;
        background: white;
        color: #0d6efd;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 42px;
        font-weight: bold;
        margin: auto;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .info-card {
        border: none;
        border-radius: 15px;
        background: #fff;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        height: 100%;
    }

    .info-icon {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eef4ff;
        color: #0d6efd;
        font-size: 20px;
    }

    .skill-badge {
        padding: 9px 14px;
        border-radius: 50px;
        font-weight: 500;
        background: #eef4ff;
        color: #0d6efd;
        margin: 3px;
        display: inline-block;
    }

    .career-box {
        background: #f8f9fa;
        border-left: 4px solid #0d6efd;
        border-radius: 10px;
        padding: 20px;
    }
</style>

</head>

<body>

<div class="container">

<div class="card profile-card shadow-lg">

    <!-- Profile Header -->
    <div class="profile-header text-center">

        <div class="profile-avatar mb-3">
            {{ strtoupper(substr($profile['name'], 0, 1)) }}
        </div>

        <h2 class="fw-bold mb-1">
            {{ $profile['name'] }}
        </h2>

        <p class="mb-0 opacity-75">
            Student Profile
        </p>

    </div>


    <!-- Profile Information -->
    <div class="card-body p-4 p-md-5">

        <div class="row g-4">

            <!-- Program -->
            <div class="col-md-6">
                <div class="card info-card p-3">
                    <div class="d-flex align-items-center">

                        <div class="info-icon me-3">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>

                        <div>
                            <small class="text-muted">
                                Program
                            </small>

                            <h6 class="fw-bold mb-0">
                                {{ $profile['program'] }}
                            </h6>
                        </div>

                    </div>
                </div>
            </div>


            <!-- Year Level -->
            <div class="col-md-6">
                <div class="card info-card p-3">
                    <div class="d-flex align-items-center">

                        <div class="info-icon me-3">
                            <i class="bi bi-calendar3"></i>
                        </div>

                        <div>
                            <small class="text-muted">
                                Year Level
                            </small>

                            <h6 class="fw-bold mb-0">
                                {{ $profile['year'] }}
                            </h6>
                        </div>

                    </div>
                </div>
            </div>


            <!-- Skills -->
            <div class="col-12">

                <div class="card info-card p-4">

                    <div class="d-flex align-items-center mb-3">

                        <div class="info-icon me-3">
                            <i class="bi bi-stars"></i>
                        </div>

                        <div>
                            <small class="text-muted">
                                Skills
                            </small>

                            <h5 class="fw-bold mb-0">
                                Technical & Personal Skills
                            </h5>
                        </div>

                    </div>

                    <div>

                        @forelse ($profile['skills'] as $skill)

                            <span class="skill-badge">
                                <i class="bi bi-check-circle me-1"></i>
                                {{ $skill }}
                            </span>

                        @empty

                            <p class="text-muted mb-0">
                                No skills listed.
                            </p>

                        @endforelse

                    </div>

                </div>

            </div>


            <!-- Career Goals -->
            <div class="col-12">

                <div class="card info-card p-4">

                    <div class="d-flex align-items-center mb-3">

                        <div class="info-icon me-3">
                            <i class="bi bi-bullseye"></i>
                        </div>

                        <div>
                            <small class="text-muted">
                                Career Goals
                            </small>

                            <h5 class="fw-bold mb-0">
                                Future Aspirations
                            </h5>
                        </div>

                    </div>

                    <div class="career-box">

                        <p class="mb-0 text-secondary">
                            {{ $profile['career_goals'] }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


</div>

