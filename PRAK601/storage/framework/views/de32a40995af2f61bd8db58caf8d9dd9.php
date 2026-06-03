<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Praktikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --nav-pink: #f5b7cc;
            --hover-pink: #ec9fbb;
            --vibrant-pink: #ff4d8d;
            --text-brown-black: #4a3d3d;
            --soft-bg-pink: #fff5f7;
        }

        body { background-color: var(--soft-bg-pink); font-family: 'Segoe UI', sans-serif; min-height: 100vh; display: flex; flex-direction: column; }

        .navbar { background-color: var(--nav-pink) !important; padding: 17px 0; }
        .navbar-brand { font-weight: 800; font-size: 1.8rem; color: var(--text-brown-black) !important; }
        .nav-link { color: var(--text-brown-black) !important; font-weight: 700; padding: 10px 12px !important; border-radius: 6px; transition: 0.3s; display: flex; align-items: center; gap: 6px; }
        .nav-link:hover { background-color: var(--hover-pink); color: #ffffff !important; }

        .content-wrapper { flex: 1; padding: 40px 20px; }
        
        .card-profile { background: #ffffff; padding: 40px; border-radius: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: center; max-width: 700px; margin: auto; }
        
        .profile-img { width: 180px; height: 200px; border-radius: 50px; object-fit: cover; border: 4px solid var(--soft-bg-pink); margin-bottom: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }

        .info-box { display: flex; align-items: center; gap: 15px; padding: 15px; border-radius: 12px; background: #fffafa; border: 1px solid #f5b7cc; margin-bottom: 15px; text-align: left; }
        .icon-box { background: #ffe4ee; padding: 12px; border-radius: 10px; color: var(--vibrant-pink); }
        
        .badge-skill { background: #f5b7cc; color: #ffffff; padding: 6px 14px; border-radius: 8px; font-weight: 600; display: inline-block; margin-right: 5px; margin-top: 5px; }

        .card-exp { border: none; border-radius: 15px; box-shadow: 0 3px 10px rgba(0,0,0,0.05); transition: 0.3s; overflow: hidden; }
        .card-exp:hover { transform: translateY(-5px); box-shadow: 0 8px 20px rgba(0,0,0,0.1); }

        /* FOOTER disamakan dengan detail */
        .site-footer { margin-top: 40px; text-align: center; color: var(--text-brown-black); font-size: 0.9rem; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">Profil Praktikan</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="/"><i class="bi bi-house-door"></i> Beranda</a>
            <a class="nav-link" href="/profil"><i class="bi bi-person-circle"></i> Profil</a>
        </div>
    </div>
</nav>

<div class="content-wrapper">
    <div class="card-profile">
        <img src="<?php echo e(asset('image/photoprofile.jpeg')); ?>" alt="Foto Profil" class="profile-img">
        
        <div class="mb-4">
            <h2 class="fw-bold mb-1" style="color: var(--text-brown-black); text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
                <?php echo e($profile['nama']); ?>

            </h2>
            <div class="d-inline-block px-4 py-2 mt-2 rounded-3" 
                 style="background: linear-gradient(135deg, #fffafa 0%, #ffe4ee 100%); 
                        color: var(--vibrant-pink); font-weight: 700; letter-spacing: 1px; 
                        border: 1px solid #f5b7cc; box-shadow: 0 2px 5px rgba(255, 77, 141, 0.15);">
                <i class="bi bi-person-badge-fill me-1"></i> <?php echo e($profile['nim']); ?>

            </div>
        </div>

        <div class="info-box">
            <div class="icon-box"><i class="bi bi-building fs-4"></i></div>
            <div>
                <div class="text-muted small">Program Studi</div>
                <div class="fs-5 fw-bold" style="color: var(--text-brown-black);"><?php echo e($profile['prodi']); ?></div>
            </div>
        </div>

        <div class="info-box">
            <div class="icon-box"><i class="bi bi-heart-fill fs-4"></i></div>
            <div class="w-100">
                <div class="text-muted small mb-1">Hobi</div>
                <?php if(is_array($profile['hobi'])): ?>
                    <?php $__currentLoopData = $profile['hobi']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hobi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="badge-skill"><?php echo e($hobi); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <span class="badge-skill"><?php echo e($profile['hobi']); ?></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="info-box">
            <div class="icon-box"><i class="bi bi-star-fill fs-4"></i></div>
            <div class="w-100">
                <div class="text-muted small mb-1">Skill</div>
                <?php $__currentLoopData = $profile['skill']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="badge-skill"><?php echo e($skill); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div class="container mt-5" style="max-width: 800px;">
    <h2 class="text-center mb-4 fw-bold display-6" style="color: var(--text-brown-black);">Kegiatan Berkesan Selama Kuliah</h2>
    <div class="row g-3">
            <?php $__currentLoopData = [
    ['id' => 1, 'nama' => 'PKKMB ULM 2024', 'img' => 'pkkmb.jpeg'], 
    ['id' => 2, 'nama' => 'LKMM-PD TI 2024', 'img' => 'lkmm-pd.jpeg'], 
    ['id' => 3, 'nama' => 'HMTI IT FEST 2025', 'img' => 'hmti it fest.jpeg'], 
    ['id' => 4, 'nama' => 'MENTORING PPAI 2024', 'img' => 'mentoring ppai.jpeg']
]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="col-6 col-md-3">
        <div class="card card-exp text-center p-0 h-100">

            <img src="<?php echo e(asset('image/' . $exp['img'])); ?>"
                 alt="<?php echo e($exp['nama']); ?>"
                 class="img-fluid"
                 style="height: 300px; width: 100%; object-fit: cover; object-position: center;">

            <div class="p-3 d-flex flex-column flex-grow-1 justify-content-between">

                <h6 class="mb-3 fw-bold"><?php echo e($exp['nama']); ?></h6>

                <a href="<?php echo e(url('/pengalaman/' . $exp['id'])); ?>"
                   class="btn btn-sm text-white px-3 mt-auto"
                   style="background:var(--nav-pink);">
                   Detail
                </a>

            </div>

        </div>
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <footer class="site-footer">
        <div class="fw-bold mb-0">&copy; 2026 Nazla Salsabila</div>
        <div style="margin-top: 5px;">Teknologi Informasi, Universitas Lambung Mangkurat</div>
    </footer>
</div>

</body>
</html><?php /**PATH C:\laragon\www\PRAK601\resources\views/profil.blade.php ENDPATH**/ ?>