<?php
require_once __DIR__ . '/../config.php';
$page_title = 'About Us — ' . SITE_NAME;

$team = [
  ['initials'=>'AK','name'=>'Aanya Kapoor',   'role'=>'CEO & Co-founder',       'bio'=>'Ex-Google Brain. Obsessed with making AI actually useful for teams.',                   'color'=>'#00e5a0'],
  ['initials'=>'JR','name'=>'James Rivera',   'role'=>'CTO & Co-founder',       'bio'=>'Distributed systems veteran. Built infra at Stripe and Cloudflare.',                  'color'=>'#7c6cff'],
  ['initials'=>'SL','name'=>'Sofia Laurent',  'role'=>'Head of Design',         'bio'=>'Former IDEO. Believes great tools are invisible.',                                     'color'=>'#ff4d6d'],
  ['initials'=>'MW','name'=>'Marcus Webb',    'role'=>'Head of Engineering',    'bio'=>'Open-source contributor. Led platform teams at Notion and Linear.',                    'color'=>'#ffb347'],
  ['initials'=>'PK','name'=>'Priya Kumari',   'role'=>'Head of Product',        'bio'=>'Product led growth specialist. Scaled two B2B SaaS startups to Series B.',            'color'=>'#00e5a0'],
  ['initials'=>'TN','name'=>'Tomáš Novák',    'role'=>'Head of AI Research',    'bio'=>'PhD in ML from ETH Zurich. Published researcher in agent architectures.',             'color'=>'#7c6cff'],
];

$values = [
  ['icon'=>'⚡','title'=>'Speed over ceremony',  'text'=>'We ship fast, iterate relentlessly, and trust our instincts. Bureaucracy is the enemy of great software.'],
  ['icon'=>'🔍','title'=>'Radical transparency',  'text'=>'We say what we think, share our mistakes openly, and build in the public where possible.'],
  ['icon'=>'🤝','title'=>'Users, always first',   'text'=>'Every feature, pricing decision, and policy starts with one question: is this genuinely good for our users?'],
  ['icon'=>'🌱','title'=>'Long-term thinking',    'text'=>'We optimise for a decade, not a quarter. We\'d rather grow slowly on solid ground than fast on sand.'],
];

require_once __DIR__ . '/../includes/header.php';
?>

<div class="page-hero">
  <div style="max-width:1120px;margin:0 auto;">
    <p class="section-tag">Our Story</p>
    <h1>We believe AI should<br><span style="color:var(--accent)">augment</span> teams,<br>not replace them.</h1>
    <p>NexusAI was founded in 2023 by a team of engineers and designers who were tired of tools that promised intelligence but delivered noise. We started with a simple belief: the best AI is the one that disappears into your workflow.</p>
  </div>
</div>

<section class="section">
  <div style="max-width:1120px;margin:0 auto;">
    <p class="section-tag reveal">Our Values</p>
    <h2 class="section-title reveal">What we stand for.</h2>
    <div class="features-grid reveal" style="margin-top:2rem;">
      <?php foreach ($values as $v): ?>
      <div class="feature-card">
        <div class="feature-icon"><?= $v['icon'] ?></div>
        <h3 class="feature-title"><?= htmlspecialchars($v['title']) ?></h3>
        <p class="feature-text"><?= htmlspecialchars($v['text']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section" style="background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
  <div style="max-width:1120px;margin:0 auto;">
    <p class="section-tag reveal">The Team</p>
    <h2 class="section-title reveal">Built by obsessives,<br>for builders.</h2>
    <p class="section-desc reveal">We are a remote-first team of <?= count($team) ?> across San Francisco, London, Prague and Bangalore.</p>

    <div class="team-grid reveal">
      <?php foreach ($team as $member): ?>
      <div class="team-card">
        <div class="team-avatar" style="background:<?= $member['color'] ?>"><?= $member['initials'] ?></div>
        <div class="team-name"><?= htmlspecialchars($member['name']) ?></div>
        <div class="team-role"><?= htmlspecialchars($member['role']) ?></div>
        <p style="color:var(--muted);font-size:0.82rem;margin-top:0.75rem;line-height:1.55;"><?= htmlspecialchars($member['bio']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section" style="margin:4rem 5vw;">
  <p class="section-tag" style="justify-content:center;">Join Us</p>
  <h2 class="cta-title">We're <span>hiring</span>.</h2>
  <p class="cta-sub">We're looking for exceptional engineers, designers, and researchers. Come build the future of work with us.</p>
  <a href="pages/contact.php" class="btn-primary">View Open Roles &rarr;</a>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
