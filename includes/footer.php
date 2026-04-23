<?php // includes/footer.php ?>

<!-- ═══ FOOTER ════════════════════════════════════════════════════════════════ -->
<footer>
  <div class="footer-top">
    <div class="footer-brand">
      <a href="index.php" class="nav-logo"><?= SITE_NAME ?><span>.</span></a>
      <p class="footer-tagline">Intelligence infrastructure for ambitious teams.</p>
      <div class="footer-socials">
        <a href="#" aria-label="Twitter">𝕏</a>
        <a href="#" aria-label="GitHub">⌥</a>
        <a href="#" aria-label="LinkedIn">in</a>
      </div>
    </div>

    <div class="footer-cols">
      <div class="footer-col">
        <h4>Product</h4>
        <a href="index.php#features">Features</a>
        <a href="index.php#pricing">Pricing</a>
        <a href="index.php#how">How It Works</a>
        <a href="#">Changelog</a>
      </div>
      <div class="footer-col">
        <h4>Developers</h4>
        <a href="#">Docs</a>
        <a href="#">API Reference</a>
        <a href="#">CLI Guide</a>
        <a href="#">Status</a>
      </div>
      <div class="footer-col">
        <h4>Company</h4>
        <a href="pages/about.php">About</a>
        <a href="#">Blog</a>
        <a href="#">Careers</a>
        <a href="pages/contact.php">Contact</a>
      </div>
      <div class="footer-col">
        <h4>Legal</h4>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Security</a>
        <a href="#">Cookie Policy</a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© <?= date('Y') ?> <?= SITE_NAME ?> Inc. All rights reserved. Built with ☕ in San Francisco.</p>
    <p class="footer-tech">Powered by PHP <?= PHP_MAJOR_VERSION ?>.<?= PHP_MINOR_VERSION ?></p>
  </div>
</footer>

<script src="/nexusai/assets/js/main.js"></script>
</body>
</html>
