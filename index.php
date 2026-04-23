<?php
require_once 'config.php';
$page_title = SITE_NAME . ' — ' . SITE_TAGLINE;

// PHP data arrays — drives all dynamic sections
$features = [
  ['icon'=>'🧠','title'=>'Contextual Memory',    'text'=>'Nexus remembers your entire project history, team preferences, and past decisions — surfacing relevant context precisely when you need it.'],
  ['icon'=>'⚡','title'=>'Real-Time Synthesis',   'text'=>'Ingest PDFs, Notion docs, Slack threads, and raw data. Get a clear, actionable summary in under 3 seconds.'],
  ['icon'=>'🔗','title'=>'Deep Integrations',     'text'=>'Connect GitHub, Linear, Figma, Salesforce, and 200+ tools. Nexus orchestrates your stack without manual copy-paste.'],
  ['icon'=>'🛡️','title'=>'Zero-Trust Security',   'text'=>'SOC 2 Type II certified. End-to-end encryption. Your data never trains our models. Enterprise-grade compliance built-in.'],
  ['icon'=>'📊','title'=>'Insight Dashboards',    'text'=>'Auto-generated KPI dashboards from your data sources. Ask questions in plain English and watch charts appear in real time.'],
  ['icon'=>'🤖','title'=>'Autonomous Agents',     'text'=>'Deploy AI agents that run 24/7 — monitoring pipelines, triaging tickets, scheduling follow-ups, and reporting anomalies.'],
];

$steps = [
  ['num'=>'01','title'=>'Connect Your Stack',  'text'=>'Link your existing tools via OAuth in one click. Nexus maps your workflows automatically — zero config needed.'],
  ['num'=>'02','title'=>'Define Your Goals',   'text'=>'Tell Nexus what you\'re optimizing for in plain language. It translates intent into actionable agent workflows.'],
  ['num'=>'03','title'=>'Watch It Work',       'text'=>'Agents execute autonomously, surfacing insights and completions in your dashboard with full audit trails.'],
  ['num'=>'04','title'=>'Iterate & Scale',     'text'=>'Nexus learns from your feedback. As it improves, spin up more agents across teams — with one click.'],
];

$plans = [
  [
    'name'=>'Starter','price'=>'0','period'=>'Free forever','featured'=>false,
    'features'=> [
      ['text'=>'5 AI Agents','on'=>true],['text'=>'10 Integrations','on'=>true],
      ['text'=>'7-day memory window','on'=>true],['text'=>'Community support','on'=>true],
      ['text'=>'Advanced Analytics','on'=>false],['text'=>'SSO & SCIM','on'=>false],
    ],
    'btn_label'=>'Get Started Free','btn_class'=>'btn-plan-outline',
  ],
  [
    'name'=>'Pro','price'=>'49','period'=>'per seat / month','featured'=>true,
    'badge'=>'Most Popular',
    'features'=>[
      ['text'=>'Unlimited Agents','on'=>true],['text'=>'200+ Integrations','on'=>true],
      ['text'=>'90-day memory window','on'=>true],['text'=>'Priority support','on'=>true],
      ['text'=>'Advanced Analytics','on'=>true],['text'=>'SSO & SCIM','on'=>false],
    ],
    'btn_label'=>'Start 14-Day Trial','btn_class'=>'btn-plan-solid',
  ],
  [
    'name'=>'Enterprise','price'=>null,'period'=>'volume pricing','featured'=>false,
    'features'=>[
      ['text'=>'Unlimited everything','on'=>true],['text'=>'Custom integrations','on'=>true],
      ['text'=>'Unlimited memory','on'=>true],['text'=>'Dedicated CSM','on'=>true],
      ['text'=>'Advanced Analytics','on'=>true],['text'=>'SSO & SCIM','on'=>true],
    ],
    'btn_label'=>'Contact Sales','btn_class'=>'btn-plan-outline',
  ],
];

$testimonials = [
  ['stars'=>5,'text'=>'"Nexus replaced our entire weekly reporting workflow. What used to take 3 hours now takes 4 minutes. I genuinely don\'t know how we managed before."','name'=>'Sofia Laurent','role'=>'Head of Ops · Arco Systems','initials'=>'SL','color'=>'#00e5a0'],
  ['stars'=>5,'text'=>'"The agents are scarily good. Our CS team set up a ticket-triage agent in an afternoon. Deflection rate went from 18% to 61% in one week."','name'=>'Marcus Reid','role'=>'CTO · Luminary Cloud','initials'=>'MR','color'=>'#7c6cff'],
  ['stars'=>5,'text'=>'"I evaluated 6 AI productivity tools. Nexus was the only one that didn\'t feel like a demo. It\'s production-grade from day one."','name'=>'Priya Kapoor','role'=>'Founding Engineer · Velo.io','initials'=>'PK','color'=>'#ff4d6d'],
];

$faqs = [
  ['q'=>'Is there a free plan?', 'a'=>'Yes! Our Starter plan is free forever with 5 agents and 10 integrations. No credit card required to sign up.'],
  ['q'=>'How does the 14-day trial work?', 'a'=>'Sign up for Pro and use every feature free for 14 days. Cancel anytime — no charge. We\'ll remind you 3 days before billing starts.'],
  ['q'=>'Can I import my existing data?', 'a'=>'Absolutely. Nexus connects to your existing tools via OAuth and automatically ingests your documents, tickets, and communications.'],
  ['q'=>'Is my data used to train your models?', 'a'=>'Never. Your data is strictly isolated per organization and is never used for model training. We are SOC 2 Type II certified.'],
  ['q'=>'Do you offer annual billing?', 'a'=>'Yes — pay annually and save 20%. Annual invoicing is also available for Enterprise customers.'],
];

$marquee_items = [
  'Real-time Synthesis','Autonomous Agents','Zero-Trust Security','CLI & REST API',
  'Contextual Memory','200+ Integrations','SOC 2 Type II','Instant Dashboards',
  'Sub-120ms Latency','Team Collaboration','Custom Workflows','Audit Trails',
  'Real-time Synthesis','Autonomous Agents','Zero-Trust Security','CLI & REST API',
  'Contextual Memory','200+ Integrations','SOC 2 Type II','Instant Dashboards',
  'Sub-120ms Latency','Team Collaboration','Custom Workflows','Audit Trails',
];

require_once 'includes/header.php';
?>

<!-- ═══ HERO ════════════════════════════════════════════════════════════════ -->
<section class="hero" id="home">
  <div class="hero-blob hero-blob-1"></div>
  <div class="hero-blob hero-blob-2"></div>
  <div class="hero-inner">
    <div class="hero-badge"><span class="hero-badge-dot"></span>Now in Public Beta</div>
    <h1>Think Faster.<br><em>Build Smarter.</em></h1>
    <p class="hero-sub">
      Nexus AI is your always-on intelligence layer — turning scattered ideas,
      docs, and data into clear decisions at the speed of thought.
    </p>
    <div class="hero-actions">
      <a href="#cta" class="btn-primary">Start Free Trial &rarr;</a>
      <a href="#how" class="btn-ghost">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="12" r="10"/><polygon points="10,8 16,12 10,16"/>
        </svg>
        See How It Works
      </a>
    </div>
    <div class="hero-stats">
      <div class="stat">
        <div class="stat-num"><span data-target="48" data-suffix="K+">0K+</span></div>
        <div class="stat-label">Teams Onboarded</div>
      </div>
      <div class="stats-divider"></div>
      <div class="stat">
        <div class="stat-num"><span data-target="3.2" data-suffix="M">0M</span></div>
        <div class="stat-label">Tasks Automated</div>
      </div>
      <div class="stats-divider"></div>
      <div class="stat">
        <div class="stat-num"><span data-target="99" data-suffix="%">0%</span></div>
        <div class="stat-label">Uptime SLA</div>
      </div>
      <div class="stats-divider"></div>
      <div class="stat">
        <div class="stat-num"><span data-target="4.9" data-suffix="★">0★</span></div>
        <div class="stat-label">Avg. Rating</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ MARQUEE ══════════════════════════════════════════════════════════════ -->
<div class="marquee-band">
  <div class="marquee-track">
    <?php foreach ($marquee_items as $item): ?>
      <span class="marquee-item"><?= htmlspecialchars($item) ?></span>
    <?php endforeach; ?>
  </div>
</div>

<!-- ═══ FEATURES ═════════════════════════════════════════════════════════════ -->
<section class="section" id="features">
  <div style="max-width:1120px;margin:0 auto;">
    <p class="section-tag reveal">Core Capabilities</p>
    <h2 class="section-title reveal">Everything you need.<br>Nothing you don't.</h2>
    <p class="section-desc reveal">Nexus packs a decade of productivity tooling into one minimal interface — without the bloat.</p>

    <div class="features-grid reveal">
      <?php foreach ($features as $f): ?>
      <div class="feature-card">
        <div class="feature-icon"><?= $f['icon'] ?></div>
        <h3 class="feature-title"><?= htmlspecialchars($f['title']) ?></h3>
        <p class="feature-text"><?= htmlspecialchars($f['text']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ HOW IT WORKS ══════════════════════════════════════════════════════════ -->
<section class="section how-section" id="how">
  <div style="max-width:1120px;margin:0 auto;">
    <p class="section-tag reveal">How It Works</p>
    <h2 class="section-title reveal">Live in minutes,<br>not months.</h2>
    <p class="section-desc reveal">Four steps from sign-up to your first autonomous workflow.</p>

    <div class="steps-grid reveal">
      <?php foreach ($steps as $s): ?>
      <div class="step">
        <div class="step-num"><?= $s['num'] ?></div>
        <h3 class="step-title"><?= htmlspecialchars($s['title']) ?></h3>
        <p class="step-text"><?= htmlspecialchars($s['text']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ DEMO SPLIT ════════════════════════════════════════════════════════════ -->
<section class="demo-split" id="demo">
  <div class="reveal">
    <p class="section-tag">Under the Hood</p>
    <h2 class="section-title">Your AI, live<br>in the terminal.</h2>
    <p class="demo-label">Nexus ships a first-class CLI for power users — pipe in data, get structured output, wire it into any pipeline.</p>
    <div class="metric-row">
      <div class="metric-pill">Latency &lt; 120ms</div>
      <div class="metric-pill">99.97% Uptime</div>
      <div class="metric-pill">REST + GraphQL</div>
    </div>
  </div>
  <div class="terminal-card reveal" style="transition-delay:0.12s">
    <div class="terminal-bar">
      <div class="t-dot" style="background:#ff5f57"></div>
      <div class="t-dot" style="background:#febc2e"></div>
      <div class="t-dot" style="background:#28c840"></div>
      <span class="t-title">nexus — terminal</span>
    </div>
    <div class="terminal-body">
      <div class="tl cmd" data-delay="100">nexus analyze --file ./q3_report.pdf --format json</div>
      <div class="tl out info" data-delay="400">◆ Scanning document (47 pages)...</div>
      <div class="tl out" data-delay="700">→ Extracting key metrics...</div>
      <div class="tl out" data-delay="1000">→ Identifying action items <span style="color:#00e5a0">(12 found)</span></div>
      <div class="tl out" data-delay="1300">→ Risk signals detected: <span class="err">3 HIGH</span></div>
      <div class="tl out ok" data-delay="1600">✓ Analysis complete in 1.2s</div>
      <div class="tl" style="margin-top:1rem;color:rgba(255,255,255,0.2)" data-delay="1700">─────────────────────────────────────</div>
      <div class="tl out" data-delay="1900" style="color:var(--text)">Revenue: <span style="color:#00e5a0">+22% YoY</span> · Burn rate: <span style="color:#ff4d6d">↑ 9%</span></div>
      <div class="tl out" data-delay="2100" style="color:var(--text)">Churn: <span style="color:#00e5a0">3.1%</span> · NPS: <span style="color:#00e5a0">72</span></div>
      <div class="tl" data-delay="2400"><span style="color:#7c6cff">?</span> <span style="color:var(--muted)">Generate board deck? (Y/n)</span> <span style="color:#00e5a0">Y_</span></div>
    </div>
  </div>
</section>

<!-- ═══ PRICING ═══════════════════════════════════════════════════════════════ -->
<section class="section" id="pricing" style="background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
  <div style="max-width:1020px;margin:0 auto;text-align:center;">
    <p class="section-tag reveal" style="justify-content:center;">Pricing</p>
    <h2 class="section-title reveal">Transparent. Scalable. Fair.</h2>
    <p class="section-desc reveal" style="margin:0 auto 3.5rem;">No hidden seats. No surprise overages. Honest pricing that grows with your team.</p>

    <div class="pricing-grid reveal">
      <?php foreach ($plans as $plan): ?>
      <div class="price-card <?= $plan['featured'] ? 'featured' : '' ?>">
        <?php if (!empty($plan['badge'])): ?>
          <div class="price-badge"><?= htmlspecialchars($plan['badge']) ?></div>
        <?php endif; ?>
        <p class="price-plan"><?= htmlspecialchars($plan['name']) ?></p>
        <div class="price-amount">
          <?php if ($plan['price'] !== null): ?>
            <sup>$</sup><?= $plan['price'] ?>
          <?php else: ?>
            Custom
          <?php endif; ?>
        </div>
        <p class="price-period"><?= htmlspecialchars($plan['period']) ?></p>
        <ul class="price-features">
          <?php foreach ($plan['features'] as $feat): ?>
          <li class="<?= !$feat['on'] ? 'off' : '' ?>">
            <span class="check"><?= $feat['on'] ? '✓' : '×' ?></span>
            <?= htmlspecialchars($feat['text']) ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <button class="btn-plan <?= $plan['btn_class'] ?>">
          <?= htmlspecialchars($plan['btn_label']) ?>
        </button>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ TESTIMONIALS ══════════════════════════════════════════════════════════ -->
<section class="section testi-section" id="testimonials">
  <div style="max-width:1120px;margin:0 auto;">
    <p class="section-tag reveal">Testimonials</p>
    <h2 class="section-title reveal">Teams that shipped faster.</h2>
    <p class="section-desc reveal">Don't take our word for it — here's what builders say.</p>

    <div class="testimonials-grid reveal">
      <?php foreach ($testimonials as $t): ?>
      <div class="testi-card">
        <div class="testi-stars"><?= str_repeat('★', $t['stars']) ?></div>
        <p class="testi-text"><?= htmlspecialchars($t['text']) ?></p>
        <div class="testi-author">
          <div class="testi-avatar" style="background:<?= $t['color'] ?>"><?= $t['initials'] ?></div>
          <div>
            <div class="testi-name"><?= htmlspecialchars($t['name']) ?></div>
            <div class="testi-role"><?= htmlspecialchars($t['role']) ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ FAQ ═══════════════════════════════════════════════════════════════════ -->
<section class="section" id="faq">
  <div style="max-width:1120px;margin:0 auto;">
    <p class="section-tag reveal">FAQ</p>
    <h2 class="section-title reveal">Common Questions</h2>
    <p class="section-desc reveal">Can't find what you're looking for? <a href="pages/contact.php" style="color:var(--accent);text-decoration:none;">Contact us</a>.</p>

    <div class="faq-list reveal">
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item">
        <button class="faq-question">
          <?= htmlspecialchars($faq['q']) ?>
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner"><?= htmlspecialchars($faq['a']) ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ CTA ═══════════════════════════════════════════════════════════════════ -->
<section class="cta-section" id="cta">
  <p class="section-tag" style="justify-content:center;">Limited Early Access</p>
  <h2 class="cta-title">Ready to move at<br><span>AI speed?</span></h2>
  <p class="cta-sub">Join 48,000+ forward-thinking teams. No credit card required. Cancel anytime.</p>

  <div id="cta-message"></div>

  <div class="cta-form">
    <input type="email" id="cta-email" class="cta-input" placeholder="you@company.com" />
    <button class="btn-primary" onclick="submitCTA()">Get Early Access &rarr;</button>
  </div>
  <p class="cta-note">By signing up you agree to our Terms of Service &middot; We never sell your data.</p>
</section>

<script>
function submitCTA() {
  const emailEl = document.getElementById('cta-email');
  const msgEl   = document.getElementById('cta-message');
  const email   = emailEl.value.trim();

  if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    emailEl.style.borderColor = 'var(--danger)';
    emailEl.focus();
    return;
  }
  emailEl.style.borderColor = '';

  const fd = new FormData();
  fd.append('email', email);

  fetch('handlers/subscribe.php', { method: 'POST', body: fd })
    .then(r => r.json())
    .then(data => {
      msgEl.innerHTML = `<div class="flash ${data.success ? 'success' : 'error'}">${data.message}</div>`;
      if (data.success) emailEl.value = '';
    })
    .catch(() => {
      msgEl.innerHTML = '<div class="flash error">Something went wrong. Please try again.</div>';
    });
}

document.getElementById('cta-email')?.addEventListener('keydown', (e) => {
  if (e.key === 'Enter') submitCTA();
});
</script>

<?php require_once 'includes/footer.php'; ?>
