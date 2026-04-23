<?php
require_once __DIR__ . '/config.php';
$page_title = '404 Not Found — ' . SITE_NAME;
http_response_code(404);
require_once 'includes/header.php';
?>

<section style="min-height:80vh;display:flex;align-items:center;justify-content:center;text-align:center;padding:8rem 5vw;position:relative;z-index:1;">
  <div>
    <div style="font-family:var(--fhead);font-size:clamp(6rem,20vw,14rem);line-height:1;color:var(--surface2);letter-spacing:4px;">404</div>
    <h1 style="font-family:var(--fhead);font-size:clamp(2rem,5vw,3.5rem);margin-top:-2rem;margin-bottom:1rem;">Page not found</h1>
    <p style="color:var(--muted);max-width:400px;margin:0 auto 2.5rem;">The page you're looking for doesn't exist or has been moved. Let's get you back on track.</p>
    <a href="index.php" class="btn-primary">← Back to Home</a>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
