<?php
require_once __DIR__ . '/../config.php';
session_start();
$page_title = 'Contact — ' . SITE_NAME;

$flash      = $_SESSION['flash']      ?? null;
$flash_type = $_SESSION['flash_type'] ?? 'success';
$form_data  = $_SESSION['form_data']  ?? [];
unset($_SESSION['flash'], $_SESSION['flash_type'], $_SESSION['form_data']);

require_once __DIR__ . '/../includes/header.php';
?>

<div class="page-hero">
  <div style="max-width:1120px;margin:0 auto;">
    <p class="section-tag">Get in Touch</p>
    <h1>Let's talk<br><span style="color:var(--accent)">business.</span></h1>
    <p>Whether you're evaluating Nexus for your team, need custom enterprise pricing, or just want to say hello — we read every message.</p>
  </div>
</div>

<section class="section">
  <div style="max-width:1120px;margin:0 auto;">

    <?php if ($flash): ?>
      <div class="flash <?= htmlspecialchars($flash_type) ?>"><?= htmlspecialchars($flash) ?></div>
    <?php endif; ?>

    <div class="contact-grid">
      <!-- Left info -->
      <div class="reveal">
        <h3>Contact Info</h3>
        <p>We typically reply within a few hours during business days (Mon–Fri, 9am–6pm PST).</p>
        <div class="contact-detail">
          <span>✉</span>
          <span><?= SITE_EMAIL ?></span>
        </div>
        <div class="contact-detail">
          <span>📍</span>
          <span>340 Pine Street, San Francisco CA 94104</span>
        </div>
        <div class="contact-detail">
          <span>💬</span>
          <span>Live chat available inside the app</span>
        </div>

        <div style="margin-top:2.5rem;padding:1.5rem;background:var(--surface);border:1px solid var(--border);border-radius:8px;">
          <p style="font-family:var(--fmono);font-size:0.72rem;color:var(--accent);text-transform:uppercase;letter-spacing:0.1em;margin-bottom:0.5rem;">Response times</p>
          <div style="display:flex;flex-direction:column;gap:0.5rem;">
            <?php
            $times = [
              ['General enquiry','&lt; 24 hours','#00e5a0'],
              ['Sales &amp; Enterprise','&lt; 4 hours','#00e5a0'],
              ['Security issues','&lt; 1 hour','#ff4d6d'],
            ];
            foreach ($times as $t): ?>
            <div style="display:flex;justify-content:space-between;font-size:0.88rem;color:var(--muted);">
              <span><?= $t[0] ?></span>
              <span style="color:<?= $t[2] ?>;font-family:var(--fmono);font-size:0.8rem;"><?= $t[1] ?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Right form -->
      <div class="reveal" style="transition-delay:0.1s">
        <form action="../handlers/contact.php" method="POST" novalidate>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.25rem;">
            <div class="form-group">
              <label class="form-label" for="name">Full Name *</label>
              <input type="text" id="name" name="name" class="form-control"
                     placeholder="Jane Smith"
                     value="<?= htmlspecialchars($form_data['name'] ?? '') ?>" required />
            </div>
            <div class="form-group">
              <label class="form-label" for="email">Email *</label>
              <input type="email" id="email" name="email" class="form-control"
                     placeholder="jane@company.com"
                     value="<?= htmlspecialchars($form_data['email'] ?? '') ?>" required />
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="subject">Subject *</label>
            <input type="text" id="subject" name="subject" class="form-control"
                   placeholder="Enterprise pricing enquiry"
                   value="<?= htmlspecialchars($form_data['subject'] ?? '') ?>" required />
          </div>
          <div class="form-group">
            <label class="form-label" for="message">Message *</label>
            <textarea id="message" name="message" class="form-control"
                      placeholder="Tell us about your team and use case..."
                      required><?= htmlspecialchars($form_data['message'] ?? '') ?></textarea>
          </div>
          <button type="submit" class="btn-primary" style="width:100%;justify-content:center;">
            Send Message &rarr;
          </button>
          <p style="color:var(--muted);font-size:0.78rem;margin-top:0.75rem;">
            * Required fields. We respect your privacy and never share your data.
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
