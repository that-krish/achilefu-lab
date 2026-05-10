# Development log

> **If you are a Claude instance opening this repo for the first time:** read sections 1–2 below (you'll know where the project stands in two minutes). Section 3 is conventions. Section 4 is the historical narrative — skim only the top few entries unless you're investigating something specific.

This file is the single source of truth for *implementation state and decision history* on the Achilefu Lab site. It complements:
- [`README.md`](../README.md) — what the project is and how to run it locally.
- [`DESIGN.md`](DESIGN.md) — current visual / experiential intent (palette, typography, etc.).
- [`CONTENT.md`](CONTENT.md) — all page copy and content decisions.
- `git log` — every commit. Don't duplicate it here.

---

## 1. Project at a glance

**What we're building**: a public-facing website for Dr. Samuel Achilefu's biomedical engineering lab at UT Southwestern. Target domain `achilefulab.org`. Hosted independently of the UTSW domain.

**Stack**: WordPress on LocalWP for dev. Theme: Kadence 1.4.5. Plugins: Kadence Blocks, WPForms Lite, WP Mail SMTP, Yoast SEO, W3 Total Cache. Repo tracks the full WP install at `app/public/`. WP-CLI available via LocalWP's bundled PHP (`C:/Users/krish/AppData/Roaming/Local/lightning-services/php-8.2.29+0/bin/win64/php.exe`).

**Site pages**: Home · Research · Publications · Team · Blog · Media · Contact (7 pages, all published).

**Team**: Krish + Salmon (web leads), Dr. Achilefu (principal stakeholder).

---

## 2. Current state

> **Update this section every session.** It must reflect reality at the time of the most recent commit. The Entries section below is append-only; this section is overwrite-in-place. Last updated: **2026-05-10 CST** by Claude (Sonnet 4.6). Theme v1.4.1.

### Status by area

| Area | Status | Notes |
|---|---|---|
| Repo + README | ✅ Done | Initial WP install committed, README written and pushed. |
| Documentation | ✅ Done | DESIGN.md, DEVLOG.md, GOLIVE.md, CONTENT.md all under `docs/`. |
| Design system spec | ✅ Confirmed | Palette (#2D4654 / #243B4A / #87BCDE / white) and DM Sans typography confirmed by Krish. See DESIGN.md. |
| Design system implementation | ✅ Done | Kadence global palette and fonts set via WP-CLI. DM Sans 400/700 loading. Brand colors in Kadence palette slots 1–9. |
| Core pages | ✅ Done | 7 pages created and published (IDs 6–12). Home = static front page. Blog = posts page. |
| Navigation | ✅ Done | `header.php` override; all 9 dropdown target slugs resolve to live pages. |
| Fixed header | ✅ Done | Header pinned via `#masthead { position: fixed !important }`. Offset baked into `.al-inner-hero` padding. No `#wrapper` padding needed. |
| Home page content | ✅ Done | All 6 sections live. Design iterated: v1.4.0 — Pillars = accordion (one open at a time, JS-driven, no hover/focus shadow). Numbers = flat stats on dark bg, thin dividers. Affiliations = no box. See DESIGN.md §5. |
| Home page images | ✅ Done | `dr-achilefu.jpg`, `hero-bg.jpg`, `lab-bg.jpg` placed in `wp-content/uploads/` by Krish. |
| Logo / wordmark | 🟡 Placeholder | CSS wordmark ("Achilefu Lab" + small teal square mark) in header. Real SVG logo TBD. |
| Other pages content | 🟡 Templates built, content placeholder | 7 `page-{slug}.php` templates created with real design-system layouts and substantive placeholder copy. Media + Contact = no template yet (stubs). Lab Calendar awaits Google Calendar embed. Team grid awaits member bios from lab. |
| Publications auto-pull | ⏹ Not started | Strategy TBD (PubMed API likely). |
| Plugins | 🟡 Installed, not configured | Yoast / WPForms / W3TC installed but at defaults. |
| Deployment / production host | ⏹ Not chosen | `achilefulab.org` target domain; no host or DNS selected. |
| PHP (system) | ✅ Done | PHP 8.2 installed via winget. Available in new terminal sessions. |

Legend: ✅ done · 🟡 in progress / partial · ⏹ not started · ❌ missing/blocked

### Active work

**Home page visual pass complete (v1.4.0).** Pillars accordion live, shadows/radii tightened globally, numbers and affiliations de-boxed. Next: team member bios, Google Calendar embed, Media + Contact page templates. Blog cards and PI Spotlight panel are still boxed — candidates for next design pass.

### Blocked / pending decisions

- [ ] Logo / wordmark creation.
- [ ] Lab member list and bios for Team page.
- [ ] Molecular images from lab members (for Media page).
- [ ] Verify "25+ Years of innovation" stat with Dr. Achilefu.
- [ ] Verify all active funding agencies for Affiliations strip.
- [ ] Production host + DNS provider for `achilefulab.org`.

### Don't break

- `wp-config.php` is **gitignored on purpose** (DB creds). Use `wp-config-sample.php` as the template.
- WP-CLI requires LocalWP's PHP + php.ini: `php.exe -c C:/Users/krish/AppData/Roaming/Local/run/8ZfaM-Vbr/conf/php/php.ini wp-cli.phar`. The run ID (`8ZfaM-Vbr`) is LocalWP's site ID — may change if the site is recreated.
- Kadence `heading_font.variant` **must be an array** `["700"]`, not a string `"700"` — Kadence has a bug in `class-kadence-css.php` line 1237 that causes a `foreach` error if it's a string. See entry 2026-05-10.

---

## 3. Conventions

**File ordering**: §2 (Current state) is **overwritten** every session — it should always show "now". §4 (Entries) is **append-only**, with **newest entries at the top**.

**When to write a new entry in §4**:
- After making a non-trivial change (new feature, design decision, plugin added, page built).
- After a debugging session where the conclusion wasn't obvious — note the root cause.
- After a conversation that produced a decision, even if no code changed yet.
- Before ending a session if anything is in a half-finished state.

**Entry template** (copy this):

```markdown
## YYYY-MM-DD HH:MM TZ — Short title

**Author:** Claude (model name) working with [user]   ·   **Branch:** main   ·   **Commits:** abc1234

**What changed**
One or two sentences.

**Why**
The motivation. What problem does this solve?

**Watch out for**
Anything that could surprise the next developer — gotchas, hidden coupling.

**Next**
What's still open.
```

---

## 4. Entries

*(Newest first. Append above the entry below it, never overwrite.)*

---

### 2026-05-10 ~15:00 CST — DM Sans enforced globally; mobile dropdown transform bug fixed (theme v1.4.1)

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
1. **DM Sans loaded and force-applied** (`functions.php`, `style.css`): DM Sans was referenced in CSS but never actually loaded — no Google Fonts URL, no `@font-face`. Fixed by enqueuing `https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@...&display=swap` via `wp_enqueue_style('al-dm-sans', ...)` in `functions.php` (declared as a dependency of `kadence-child` so it loads first). Added a global override in `style.css`: `body, h1–h6, input, textarea, select, button { font-family: 'DM Sans', sans-serif !important }`. The `!important` is required to beat Kadence's inline dynamic CSS, which is output as a `<style>` block in `<head>` and can win on specificity without it.
2. **Mobile dropdown `translateX` bug fixed** (`style.css`): Opening an accordion group in the mobile nav was showing only the right-hand tail of each link text (e.g. "ng" instead of "Optical & Molecular Imaging"). Root cause: desktop CSS `.al-nav-group:hover .al-dropdown { transform: translateX(-50%) translateY(0) }` has specificity 0-2-0, which beats the mobile reset `.al-dropdown { transform: none }` at 0-1-0 — regardless of media query. On touch devices, `:hover` sticks after a tap, so the desktop rule fired and shifted the dropdown panel 50% to the left, off-screen. Fix: added a matching-specificity `transform: none` override for the same selectors inside `@media (max-width: 899px)`, so source order breaks the tie.
3. **Reverted spurious `position: fixed` on mobile nav**: During debugging the dropdown issue, the nav panel was temporarily changed from `position: absolute; top: 100%` to `position: fixed; top: 68px`, which caused a visible gap between the header and the nav panel on the home page (the frosted-glass hero bled through). Reverted — the `position: absolute` approach was correct; only the transform specificity was the problem.

**Why**
DM Sans was the intended font from day one but silently falling back to the OS system stack everywhere except the two components where it was explicitly declared. The mobile dropdown bug was a CSS cascade/specificity trap: the desktop hover rule was never guarded by a `max-width` media query, so it won on specificity on mobile touch devices.

**Watch out for**
- The `!important` on the global `font-family` rule is intentional and load-bearing — do not remove it without replacing Kadence's dynamic inline CSS output.
- The `transform: none` override for the mobile dropdown hover state must remain inside `@media (max-width: 899px)` and must use the same two selectors (`.al-nav-group:hover .al-dropdown, .al-nav-group:focus-within .al-dropdown`) to match specificity. A lower-specificity reset will lose again.
- The redundant `font-family: 'DM Sans', sans-serif` declarations on `.al-btn` and `.al-accordion-trigger` are now harmless (they match the inherited value) — left in place to avoid unnecessary diff.

**Next**
Team member bios, Google Calendar embed, Media + Contact page templates.

---

### 2026-05-10 ~13:30 CST — Research Pillars → accordion design (theme v1.4.0)

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
1. **Pillars redesigned as an accordion** (`front-page.php`, `style.css`, `functions.php`): the "What We Do" section replaced the earlier borderless strip with a vertical accordion — three rows separated by 1px hairlines, one open at a time. First pillar (Optical & Molecular Imaging) is open by default. Each panel reveals the description + "Learn more →" link to the relevant research sub-page. JS lives in `functions.php` as a `wp_footer` action at priority 21, front-page only.
2. **Accordion hover/focus/active shadows stripped**: Kadence's base button stylesheet was adding `box-shadow` and `background` on `:hover`, `:focus`, and `:active` states. Overridden explicitly with `background: none; box-shadow: none; outline: none` on all three pseudo-classes.

**Why**
Krish preferred accordion over the borderless strip — the expand/collapse gives each research area breathing room without permanently occupying three columns of space.

**Watch out for**
- Accordion `max-height` for the panel is set to `12rem` — enough for current content. If descriptions are ever expanded significantly, bump this value.
- The accordion JS collapses all items then opens the clicked one, so clicking an open item closes it with nothing left open. This was an intentional choice.
- `is-front-page()` guard on the accordion JS means it only fires on the home page template.

**Next**
Blog cards and PI Spotlight panel are still white boxes — next design pass candidates.

---

### 2026-05-10 ~13:00 CST — Visual tightening: shadows reduced, pillars → borderless strip, numbers → flat dividers

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
1. **Global design tokens tightened** (`style.css` v1.3.0): shadow variables reduced (card: `0 2px 20px .08` → `0 1px 4px .06`, panel: `0 6px 44px .11` → `0 2px 12px .08`, hover: `0 12px 40px .16` → `0 4px 20px .12`). Border radii reduced (card: 20px → 12px, panel: 24px → 14px). Section padding reduced from 6rem to 4rem on pillars/PI/blog sections. Section heading margin from 3rem to 2rem.
2. **Research Pillars redesigned as a borderless strip**: removed white card backgrounds, box-shadows, and icon background boxes. Grid changed from `auto-fit minmax(280px)` to `repeat(3, 1fr)` with `gap: 0` and 1px `border-right` separators between columns. On mobile (≤768px) switches to stacked vertical layout with `border-bottom` separators.
3. **Lab in Numbers**: removed frosted glass card treatment (background, border, border-radius, backdrop-filter). Stats now sit flat on the dark section background, separated by 1px `border-right: rgba(255,255,255,0.14)`. Responsive 2×2 layout uses cross-hatched borders via nth-child selectors.
4. **Affiliations strip**: removed white pill-card wrapper (background, border-radius, box-shadow). Logos now float directly on the body gradient.

**Why**
Site read as visually noisy — too many floating white card boxes stacked on top of each other within sections that were already boxed by heavy section padding. Goal: premium/editorial look vs. SaaS-product look.

**Watch out for**
Pillars section now requires `grid-template-columns: repeat(3, 1fr)` fixed — auto-fit was fine when cards had minimum widths, but the borderless strip needs exact 3-column for the dividers to work. If a fourth pillar is ever added, the CSS must change.

**Next**
Blog section still uses white cards — carousel or list-style redesign is a candidate for next session. PI Spotlight still has a white panel wrapper — could remove that too for further de-boxing.

---

### 2026-05-10 13:20 CST — Fixed header pinning; inner page padding; breadcrumb removed

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
1. **Header fixed-position override:** Added `#masthead { position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; }` to `style.css`. Previous attempt used only the class selector `.al-site-header` — Kadence's `#masthead { position: relative }` rule in `header.min.css` was winning because an ID selector (specificity 1,0,0) beats a class selector (0,1,0) even when both are author-level CSS. Using the ID selector directly and adding `!important` removes the ambiguity completely. Admin-bar offsets (`top: 32px / 46px`) added too.

2. **Removed `#wrapper { padding-top: 68px }` and moved the offset into content:** When `position: fixed` wasn't applying, the header stayed in the normal document flow inside `#wrapper`, and the `padding-top: 68px` on the wrapper created a visible 68px white strip *above* the header. The fix: remove the wrapper padding entirely, and instead bake the 68px header clearance into `.al-inner-hero { padding: calc(68px + 4.5rem) 0 4rem }` — so the offset lives in the content itself regardless of header positioning. Home page hero already has 8rem padding, which clears the 68px header with room to spare.

3. **Breadcrumb navigation hidden:** Krish removed the "Home › Research › Page" breadcrumb trail from all inner pages. Done via `display: none` on `.al-inner-hero__breadcrumb` — HTML remains in templates in case the decision is reversed.

**Why**
CSS specificity conflict with Kadence's own stylesheet was the root cause of two sessions of header positioning bugs. The ID selector + `!important` approach is the correct weapon here. Moving the clearance offset into the content (not the wrapper) ensures it works in both fixed and non-fixed header scenarios.

**Watch out for**
- Do NOT add `padding-top` back to `#wrapper` or `#inner-wrap` — the offset is now owned by `.al-inner-hero`. If you add a new inner page section type that isn't `.al-inner-hero`, it needs its own `padding-top: calc(68px + X)`.
- The breadcrumb HTML is still in all 7 `page-{slug}.php` templates. Re-enable with `.al-inner-hero__breadcrumb { display: flex }`.

**Next**
Build Media and Contact page templates. Fill team member bios. Get Google Calendar embed URL.

---

### 2026-05-10 — Custom header override: modern wordmark + dropdown nav

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
Added `wp-content/themes/kadence-child/header.php`, completely replacing Kadence's header builder output:
- **Logo**: CSS-drawn wordmark — small teal rounded-square mark + "Achilefu **Lab**" in primary color. No image file needed.
- **Nav**: Three dropdown groups — **Research** (Mission & Vision + Optical & Molecular Imaging, Image-Guided Surgery, Bench to Bedside), **Team** (Meet the PI, Meet the Team), **Updates** (Media, Blog, Lab Calendar).
- **CTA**: Filled "Contact" button (teal, hover darkens + lifts) on the far right.
- **Mobile**: Hamburger icon opens a full-width drawer; each dropdown expands via JS click. CTA stays visible next to the hamburger at all widths.
- **Scroll effect**: Header starts frosted-glass on the home page (gradient bleeds through); solidifies with shadow after 20 px of scroll on all pages.
- Added `al_page_url( $slug )` and `al_blog_url()` helpers to `functions.php` — nav links auto-wire via `get_page_by_path()`, returning `#` until the page exists.

**Why**
Flat 7-item Kadence menu didn't reflect the real IA or give Contact enough visual weight. Dropdown groups (Research / Team / Updates) scale cleanly as content grows. The filled CTA makes Contact the most obvious conversion action — a key ask from the lab.

**Watch out for**
- Kadence's "Primary Menu" (Appearance > Menus) is now bypassed. **Do not manage nav from WP admin.** Edit `header.php` to add/remove items.
- Nav links resolve automatically once pages exist at these slugs: `research`, `research/optical-imaging`, `research/image-guided-surgery`, `research/bench-to-bedside`, `team/pi`, `team`, `media`, `lab-calendar`, `contact`. Until then they hit `#`.
- The old 7-page flat structure still exists in WP (IDs 6–12). The existing "Research" (ID 7) and "Team" (ID 9) pages will become parents; their slugs already match. "Publications" is no longer in the main nav — defer to a sub-page under Research when ready.
- The `--h-height: 68px` token is defined on `.al-site-header` and inherited by the fixed-position mobile nav panel via CSS custom property cascading — this works even with `position: fixed` because inheritance is DOM-based.

**Next**
Create the sub-page tree in WP admin or WP-CLI to make dropdown links live: Research sub-pages (4), Team sub-pages (2), Media, Lab Calendar, Contact.

---

### 2026-05-10 — Sticky header; home page design iteration (gradient + parallax + cards)

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
Three rounds of visual iteration on the home page, plus sticky header:

1. **Card system (v1.1):** Introduced Apple-system corner radii (`--r-control: 10px`, `--r-card: 20px`, `--r-panel: 24px`). Changed section backgrounds to a consistent light grey ground (`#F2F5F8`) with white cards floating on it (shadows, hover lift). Pillar icons got tinted rounded backgrounds. PI block became one large panel card. Stats got frosted mini-cards. Blog posts became borderless shadow cards.

2. **Global gradient + parallax (v1.2):** Replaced per-section background colors with a single diagonal gradient on `body.home` (`#cfdde8 → #e4eef5 → #f0f6f9 → #d8e6ef`). Hero and Numbers sections converted to parallax image backgrounds (`background-attachment: fixed`) with combined dark overlay + accent radial via `::before`. All content sections (pillars, PI, blog) made transparent — gradient shows through. Affiliations became a white rounded card panel. `body.home #wrapper` and `#inner-wrap` set to `background: transparent` to let body gradient bleed through Kadence's wrappers. Parallax disabled on `max-width: 768px` (iOS Safari bug) and `prefers-reduced-motion`.

3. **Hero eyebrow removed:** The "ACHILEFU LAB · UT SOUTHWESTERN MEDICAL CENTER" pill badge in the hero was removed at Krish's direction — headline now leads directly.

4. **Sticky header:** Enabled Kadence's built-in sticky header via `set_theme_mod("header_sticky", "main")` and `set_theme_mod("mobile_header_sticky", "main")` — applies to both desktop and mobile. Adds `.kadence-sticky-header` class and Kadence's own scroll JS/CSS.

**Why**
Krish's direction: the alternating full-width colored stripe layout felt dated. The gradient + parallax approach creates depth and visual continuity without relying on background color changes to signal new sections. Cards float on the gradient, providing visual separation while looking modern.

**Watch out for**
- `body.home #wrapper, body.home #inner-wrap { background: transparent }` is required — Kadence sets `background: #fff` on these elements via `.content-bg`. Without the override the body gradient is completely hidden.
- `background-attachment: fixed` breaks on iOS Safari — the `@media (max-width: 768px)` fallback to `scroll` is essential.
- The two image paths that drive the parallax sections: `wp-content/uploads/hero-bg.jpg` (hero) and `wp-content/uploads/lab-bg.jpg` (numbers). Both placed by Krish 2026-05-10. Without them sections fall back cleanly to solid `#2D4654`.
- Kadence sticky header JS is included in Kadence's own asset bundle — no extra JS needed from our side.

**Next**
Build remaining page stubs: Research, Publications, Team, Contact, Media.

---

### 2026-05-10 — Home page built: kadence-child + front-page.php

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
Created `wp-content/themes/kadence-child/` with three files:
- `style.css` — child theme declaration + ~350 lines of namespaced home-page CSS (all under `.al-home`).
- `functions.php` — enqueues child stylesheet after `kadence-global` (Kadence's CSS handle).
- `front-page.php` — custom home page template with 6 sections: Hero, Research Pillars, PI Spotlight, Lab in Numbers, Latest from the Lab, Affiliations. Activated via WP-CLI.

**Why**
A custom PHP template instead of Kadence blocks gives zero block-editor overhead, full layout control, and clean semantic HTML — matching the "not too heavy on the network" requirement. All styles are scoped to `.al-home` to avoid conflicts with Kadence on other pages.

**Watch out for**
- Kadence's `header.php` opens `<main id="inner-wrap" class="wrap kt-clear">` and `footer.php` closes it. Our content goes inside that `<main>` — don't wrap in another `<main>`.
- `kadence_before_content` and `kadence_after_content` have nothing hooked to them by default, so no extra wrapper divs are injected around our content.
- `#wrapper` has `overflow:hidden` — can't use negative-margin breakout tricks. All sections are naturally full-width (no max-width on the sections themselves).
- Kadence's main CSS handle is `'kadence-global'` (not `'kadence-style'` or `'parent-style'`). Our dependency declaration is correct.
- PI photo: place `dr-achilefu.jpg` in `wp-content/uploads/` and the placeholder SVG disappears automatically (PHP `file_exists` check in template).
- Hero background image (optional): place `hero-bg.jpg` in `wp-content/uploads/` — CSS `background-blend-mode: multiply` darkens it against `--global-palette1` automatically. No code change needed.

**Next**
- Krish to source Dr. Achilefu headshot → `wp-content/uploads/dr-achilefu.jpg`.
- Optional hero bg image → `wp-content/uploads/hero-bg.jpg`.
- Affiliation logos → `wp-content/uploads/logos/logo-utsw.svg` etc. (swap text in `front-page.php`).
- Build remaining page templates (Research, Publications, Team, Contact, Media).

---

### 2026-05-10 — PHP 8.2 installed system-wide

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
Installed PHP 8.2.31 system-wide on Krish's Windows 11 machine via `winget install --id PHP.PHP.8.2`. Previously PHP was only accessible through LocalWP's bundled binary.

**Why**
Krish noticed PHP wasn't available in his regular terminal. Now `php` is available in any new terminal session without needing the full LocalWP binary path.

**Watch out for**
The new shell PATH update only takes effect in new terminal windows — existing sessions won't see `php` until reopened. The LocalWP-bundled PHP (8.2.29) and the system PHP (8.2.31) are separate installations; for WP-CLI work against the LocalWP database, continue using the LocalWP binary + php.ini combo (see §2 "Don't break").

---

### 2026-05-10 — Global Claude settings: bypassPermissions mode

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** n/a (config file)

**What changed**
Updated `~/.claude/settings.json` to set `defaultMode: bypassPermissions`. Claude now executes all tool calls without prompting, except `git push` (any variant) which still asks. Catastrophic commands (`rm -rf`, `dd`, `mkfs`, `format`) remain hard-denied.

**Why**
Krish was getting prompted for every tool call during development — too much friction for routine edits and WP-CLI commands.

---

### 2026-05-10 — Kadence heading_font variant bug fix

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
Fixed a PHP warning (`foreach() argument must be of type array|object, string given`) in `wp-content/themes/kadence/inc/class-kadence-css.php` line 1303. The cause: `heading_font.variant` was stored as a string `"700"` in theme mods, but Kadence's `maybe_add_google_font()` at line 1237 assigns `$new_variant = $font['variant']` (no array wrap) when the variant is a scalar, then tries to `foreach` over it at line 1303.

Fix: updated the `heading_font` theme mod to store variant as an array `["700"]`.

**Why**
The bug was introduced when we first set DM Sans — we passed `'variant' => '700'` which is valid PHP but triggers this Kadence code path when the font already exists in the `$google_fonts` registry.

**Watch out for**
This is a Kadence bug, not our code. If Kadence is updated, verify the fix still holds. Always set heading font variants as arrays when calling `set_theme_mod("heading_font", [...])`.

---

### 2026-05-10 — DM Sans typography + brand palette implemented in Kadence

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
Set global design tokens in Kadence via WP-CLI `wp eval`:
- **Body font** (`base_font`): DM Sans 400, 17px, 1.6 line-height, Google Fonts.
- **Heading font** (`heading_font`): DM Sans 700, variant `["700"]`, Google Fonts.
- **Color palette** (`kadence_global_palette` option): 9 slots — #2D4654 (primary), #243B4A (secondary), #87BCDE (accent), plus supporting text/background values.

**Why**
Krish confirmed the palette and rejected the earlier IBM Plex / Playfair suggestions in favour of DM Sans — modern, geometric, clean. Single-family approach (no second font) was chosen for simplicity and consistency.

**Watch out for**
The `kadence_global_palette` is stored as a JSON string in `wp_options` (not a theme mod). The palette slot names (`palette1`–`palette9`) are what Kadence uses in its CSS variables (`--global-palette1` etc.). Any Kadence block that references "Palette Color 1" will pick up `#2D4654`.

**Next**
Build the Home page using these tokens.

---

### 2026-05-10 — Core pages created, nav wired, front page set

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
Created all 7 core pages via WP-CLI: Home (ID 6), Research (7), Publications (8), Team (9), Blog (10), Media (11), Contact (12). Set Home as the WordPress static front page and Blog as the posts page. Created "Primary Menu" with all 7 pages in order, assigned to the `primary` theme location. Deleted default "Sample Page" (ID 2).

**Why**
Infrastructure-first approach: get all pages and nav in place before designing any of them. This lets us see the real nav structure in the Customizer and browser as we build.

**Watch out for**
WP-CLI on this machine requires LocalWP's PHP + its php.ini (the system PHP doesn't have the mysqli extension loaded). Command pattern:
```
C:/Users/krish/AppData/Roaming/Local/lightning-services/php-8.2.29+0/bin/win64/php.exe \
  -c C:/Users/krish/AppData/Roaming/Local/run/8ZfaM-Vbr/conf/php/php.ini \
  wp-cli.phar [command] --allow-root
```
`wp-cli.phar` lives in `app/public/`. The imagick warning on startup is harmless — LocalWP doesn't ship `php_imagick.dll` in that path.

---

### 2026-05-10 — Content doc created; Dr. Achilefu research

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
Created [docs/CONTENT.md](CONTENT.md) — a shareable document tracking all website copy so lab members at UTSW can review and refine the wording. Researched Dr. Samuel Achilefu's work (NAE + NAM member, 300+ publications, 70+ patents, cancer imaging goggles, inaugural BME chair at UTSW) and drafted all Home page copy: hero headline, sub-headline, three research pillars, PI bio, Lab in Numbers stats, affiliations strip.

**Why**
Krish needed a document he could share with lab fellows for wording review. Keeping copy in a standalone markdown file means it can be emailed / reviewed without touching the CMS.

**Watch out for**
Items marked `[VERIFY]` in CONTENT.md need confirmation from Dr. Achilefu or lab staff before the site goes live — specifically "25+ Years of innovation" and the complete list of funding agencies.

---

### 2026-05-10 — Page list finalized

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
Agreed on the 7-page structure: Home, Research, Publications, Team, Blog, Media, Contact. Key decisions: News merged into Blog (not a separate page); Join Us deferred as optional; Media page added at Krish's suggestion to showcase the lab's molecular imaging work.

**Why**
The audience range (student → NIH director) demands a site that's both welcoming and authoritative. Publications and Media are the two pages most likely to be Googled by a serious scientific reviewer — they needed to be first-class pages, not afterthoughts.

---

### 2026-05-10 11:09 CST — Add GOLIVE.md checklist

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main   ·   **Commits:** `4a761514`

**What changed**
Created [docs/GOLIVE.md](GOLIVE.md) — a sequenced, checkbox checklist for migrating the site to production. Updated README to reference it.

**Why**
Krish wants every go-live step documented so it's repeatable and auditable.

---

### 2026-05-10 11:04 CST — Track wp-content/uploads/ in git

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main   ·   **Commits:** `4df005ac`

**What changed**
Removed `wp-content/uploads/` from `.gitignore` so images are tracked in the repo.

**Why**
This lab site has modest, intentionally compressed media. Tracking in git means the repo is fully self-contained and switching machines requires only `git pull`.

**Watch out for**
Keep images compressed before committing. Nothing over ~500KB. If media ever grows large, migrate to Git LFS.

---

### 2026-05-10 10:49 CST — Repo bootstrap, README, and design documentation scaffolding

**Author:** Claude (Opus 4.7, 1M context) working with Krish   ·   **Branch:** main   ·   **Commits:** `15febfcf`, `7cd449cd`

**What changed**
WordPress install committed at `app/public/`. README added. `docs/` directory created with DESIGN.md and DEVLOG.md.

**Watch out for**
`docs/` lives inside `app/public/` (the WP install root). WordPress should not serve raw markdown by default, but if permalink structure or `.htaccess` changes, sanity-check.
