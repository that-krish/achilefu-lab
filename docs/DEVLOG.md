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

**Site pages**: Home · Research · Publications · Team · Journal · Media (+3 sibling category pages: Media-Research / Media-People / Media-Events) · Contact (7 + 3 media siblings, all published).

**Team**: Krish + Salmon (web leads), Dr. Achilefu (principal stakeholder).

---

## 2. Current state

> **Update this section every session.** It must reflect reality at the time of the most recent commit. The Entries section below is append-only; this section is overwrite-in-place. Last updated: **2026-05-17 16:45 CDT** by Claude (Opus 4.7). Theme v2.7.0.

### Status by area

| Area | Status | Notes |
|---|---|---|
| Repo + README | ✅ Done | WP install + README committed. |
| Documentation | ✅ Done | DESIGN.md, DEVLOG.md, GOLIVE.md, CONTENT.md all under `docs/`. |
| Design system spec | ✅ Confirmed | v2.x: DM Sans only (300–800), brand navy + teal palette, editorial density, no neon/Syne/clip-path. See DESIGN.md §11. |
| Design system implementation | ✅ Done | Global CSS in `style.css` v2.3.0; DM Sans loaded as single Google Fonts request. |
| Core pages | ✅ Done | 7 WP pages (IDs 6–12). Home = static front page. Journal = posts page (slug `/journal/`, renamed from `/blog/` in v2.5.1). |
| Navigation | ✅ Done | `header.php` override; white header on all pages (consistent); 500ms hover-delay on desktop. |
| Fixed header | ✅ Done | `#masthead { position: fixed !important }`. Hero pads `calc(68px + 4.25rem)` to clear it. |
| Home page (v2.3.5 editorial) | ✅ Done | Hero (+ inline credentials strip) → PI (with inline stats band) → Latest from the Lab (2-col: Publications · Journal) → Affiliations (tight closing band). Pillars section removed v2.3.5 — single-panel grid didn't justify the layout. |
| Hero flare effect | ✅ Done (v2.4) | Decorative fluorescent-molecule field scattered behind hero content. **JS-generated, density-driven** (px² per dot target, debounced resize regen). Two modes: desktop = cursor-reactive proximity glow; touch = CSS auto-blink keyframes matched to the desktop max-intensity endpoints. Hero is now `min-height: 100svh` with flex-centered content + a bouncing scroll-cue chevron to `#al-pi`. |
| Inner pages — 7 + 3 done | ✅ Done | Research landing, Optical Imaging sub-page, PI, Team, Lab Calendar, Contact, Media (+ v2.6.6 Media siblings: Media-Research / Media-People / Media-Events at flat top-level slugs `/media-research/`, `/media-people/`, `/media-events/`) — all share v2.x editorial density language. v2.5.1 locked every `.al-inner-hero` to `min-height: 440px` desktop / `340px` mobile with a 60/150-char copy budget for uniform band heights. (IGS + B2B sub-pages removed v2.3.4 — fabricated platforms, not on real lab site.) |
| Journal templates (home.php + single.php) | ✅ Done (v2.5.1) | Posts index + single-post pages render the inner-page editorial template. Single-post hero shows category as eyebrow (THOUGHTS / LAB MEMOS / NEWS), title, date · author. `.al-post-body` auto-styles paragraphs, headings, links, lists, blockquotes, images, captions. |
| Media page | ✅ Hub-and-spoke, CMS-driven | **v2.7.0:** `/media/` is a hub with three teaser rows (Research · People · Events). Each row auto-pulls the 3 newest captured-date photos in its category. Full galleries live on 3 sibling pages: `/media-research/`, `/media-people/`, `/media-events/`. Templates auto-match by filename. All photo content is managed in WP admin → Gallery Photos (CPT). |
| Logo / wordmark | 🟡 Placeholder | CSS wordmark in `header.php`. Real SVG TBD. |
| Contact form | 🟡 Placeholder | WPForms installed; disabled mock form rendered. Activate by uncommenting `do_shortcode('[wpforms id="X"]')` in `page-contact.php`. |
| Team member bios | ✅ Done (v2.5.0) | Full roster populated in `page-team.php` from labs.utsouthwestern.edu/achilefu-lab/lab-members-and-alumni — 5 groups + 31-entry alumni list. Monogram avatars (no photos). |
| Lab image gallery | ✅ CMS-driven (empty) | **v2.7.0:** photos managed via the **Gallery Photos** custom post type (WP admin sidebar). Each photo has Title (description), Photo Category radio (Research/People/Events), Bucket free-form tag (photographer / event / context), Captured Date (EXIF auto + manual override), and Featured Image (the file). Subpages auto-pull by category. Desktop: hover overlay reveals metadata. Mobile: tap opens lightbox. Galleries are empty until Krish adds Gallery Photos. |
| Recent Publications | ✅ Done | Verified real papers on home, research landing, optical-imaging sub-page, and PI page (from labs.utsouthwestern.edu/achilefu-lab). |
| Lab Calendar | 🟡 Template built | `.al-calendar-frame` placeholder waiting for Google Calendar embed URL. |
| Page Publications template | ⏹ Not built | Page exists in WP (ID 8) but no custom template; falls back to Kadence default. |
| Plugins | 🟡 Installed, not configured | Yoast / WPForms / W3TC at defaults. |
| Deployment / production host | ⏹ Not chosen | `achilefulab.org` target domain. |
| PHP (system) | ✅ Done | PHP 8.2 via winget. |

Legend: ✅ done · 🟡 in progress / partial · ⏹ not started · ❌ missing/blocked

### Active work

**Fabricated content removed.** v2.3.5. Bench-to-Bedside and Image-Guided Surgery sub-pages deleted (neither is a research platform on the real UTSW site) — both PHP templates and WP page rows (IDs 21, 22) deleted. Featured Research home block and "In the News" home column removed (placeholder/fabricated content). v2.3.5: also removed the home "Research Pillars" section entirely (single-panel grid didn't justify the layout); home page is now Hero → PI → Latest → Affiliations. Nav dropdown for Research lists only Mission & Vision + Optical & Molecular Imaging. PI bio in CONTENT.md fixed: the "joined UTSW in 1999" claim was wrong — Achilefu was at Washington University until ~2023. Earlier: v2.3.3 NAE/NAM years corrected, v2.3.2 full placeholder purge.

### Blocked / pending decisions

- [ ] Logo / wordmark (real SVG).
- [x] Real lab member list + bios for Team page — populated v2.5.0 from labs.utsouthwestern.edu/achilefu-lab/lab-members-and-alumni.
- [ ] Real photos for `/media` and its 3 subpages. Workflow: WP admin → Gallery Photos → Add New → fill title (description), pick category radio, type a bucket tag, set captured date (auto from EXIF or manual), set featured image (the photo file). Subpages auto-update.
- [x] Real recent publications list — replaced with verified papers from UTSW source site.
- [ ] Full publications page template (`page-publications.php`) — currently Kadence default.
- [ ] WPForms contact form: create form, then activate `[wpforms id="X"]` shortcode in `page-contact.php`.
- [ ] Google Calendar embed URL for Lab Calendar page.
- [ ] `page-publications.php` template — Publications page exists in WP but renders Kadence default.
- [ ] Verify "25+ Years of innovation" stat with Dr. Achilefu.
- [ ] Production host + DNS provider for `achilefulab.org` — Sam cannot publish Journal entries until the site is publicly reachable (WP mobile app cannot reach `*.local`).
- [ ] WP user account + Application Password for each contributing lab member (required for **Lab Memos** category author attribution).

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

### 2026-05-17 16:45 CDT — Media: CMS-driven via Gallery Photos CPT + per-photo metadata + mobile lightbox (theme v2.7.0)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**

Photos on the media hub and subpages are now fully **CMS-managed** through a new **Gallery Photos** admin section. SVG placeholders are gone from every media template; the templates query and render real photos from the database. Designed so blog uploads have **zero** intersection with gallery uploads — Sam never sees a gallery prompt unless he explicitly opens the Gallery Photos section.

**Data model (per photo)**

| Concept | Storage |
|---|---|
| Description | Post title (renders as `<figcaption>` text) |
| Category (which subpage) | `photo_category` taxonomy, hierarchical, **single-select** via custom radio metabox. Seeded terms: Research / People / Events. |
| Bucket (creator / event / context) | `photo_bucket` taxonomy, non-hierarchical, free-form tag with auto-complete |
| Captured date | Post meta `_al_photo_captured_date` (Y-m-d). EXIF auto-fill on save; manual override always wins; falls back to post_date if neither. |
| The photo file | Featured image (relabeled "The Photo" in the UI) |

**Admin changes — `functions.php` (+~280 lines)**

- **`register_post_type('gallery_photo')`** — public, has_archive:false, supports:[title, thumbnail, revisions], menu-icon dashicons-format-gallery at position 21 (right under Pages). Featured-image labels rewritten: "The Photo" / "Upload or pick the photo" / "Use as the photo".
- **Two taxonomies registered on `gallery_photo`:** `photo_category` (hierarchical, show_admin_column, seeded with Research/People/Events terms) + `photo_bucket` (tag-style, show_admin_column).
- **Custom single-select category metabox** — default WP checkbox UI replaced by radio buttons via `remove_meta_box('photo_categorydiv', …)` + custom metabox. Enforces "one category per photo" at the UI level.
- **Captured Date metabox** in the side column with a `<input type="date">` + help text.
- **Save hook** `save_post_gallery_photo`: writes the single category term + writes captured-date (manual → EXIF from featured image's `wp_attachment_metadata['image_meta']['created_timestamp']` → post_date fallback, in that priority order).
- **`enter_title_here` filter** — title placeholder becomes "Photo description (e.g. 'Confocal microscopy of tumor margin')" so Sam knows the title is the visible description.
- **Admin list columns** — "All Gallery Photos" view shows a thumbnail + title + categories + buckets + captured date for quick scanning.

**Rendering — `al_render_gallery_photos( $slug, $limit = -1, $shape = 'square' )`**

- Queries `gallery_photo` posts in the given category, orders by `_al_photo_captured_date` DESC (always populated thanks to the save hook).
- Outputs each as `<figure class="al-media-figure --{shape} --overlay" data-photo-id="…">` with `<img>` (lazy-loaded, 'large' size) + a structured `<figcaption>` containing `.al-media-figure__desc` (title), `.al-media-figure__meta` (bucket · date).
- **Empty state:** if no photos match, renders `.al-gallery-empty`. For logged-in editors it links to *"Add the first one →"*; for visitors it says *"Photos coming soon."*

**Templates rewritten**

- **`page-media.php`** — three rows, each now a one-liner: `<?php al_render_gallery_photos( 'research'/'people'/'events', 3 ); ?>`. v4.0 → v4.2.
- **`page-media-research.php`**, **`page-media-people.php`**, **`page-media-events.php`** — each gutted from ~250 lines of SVG markup down to ~50 lines. Single helper call drives the gallery.

**CSS — `style.css` v2.6.6 → v2.7.0**

- **`.al-media-figure--overlay figcaption`** restructured: flex column, gap 0.35rem. Inner `.al-media-figure__desc` is the prominent description; `.al-media-figure__meta` is the small-caps muted line for bucket · date.
- **`@media (hover: none)`** override: on touch-primary devices, the hover-overlay never appears, and tapping a figure opens a lightbox instead. Adds `cursor: pointer` on tappable figures.
- **`.al-gallery-empty`** dashed-border empty state.
- **`.al-lightbox*`** — fixed-position full-screen overlay (z-index 9999), backdrop click-to-close, top-right close button, max-width-clamped image (`max-width: min(94vw, 720px); max-height: 65vh`), centered metadata below the photo. `body.al-lightbox-open` locks page scroll while open.

**JS — `functions.php` `wp_footer` hook**

- Inline lightbox script, ~50 lines, vanilla. Bails immediately if `(hover: hover)` matches (no work on desktop). On touch devices: delegated click listener on `document` catches any `.al-media-figure[data-photo-id]` click, clones the `<img>` + the figcaption HTML into the lightbox shell that lives at the bottom of every page, sets `aria-hidden="false"`. Closes on backdrop / close-button / Escape key.

**Why**

Hand-curated SVG figures in PHP templates were never going to scale — Sam was going to send photos and the lab needed a workflow that didn't involve editing PHP. Single-category enforcement avoids the "this photo is on three pages now" mess that would happen with multi-select. Separating gallery photos into a CPT (rather than tagging Media Library attachments) means Sam's blog-post upload flow is completely untouched — no extra fields, no decision points, no confusion. The hover-on-desktop / tap-on-mobile split matches user intent: scan-fast on a laptop, look-closer on a phone.

**Watch out for**

- **Featured image is mandatory** for a photo to render. The helper silently skips entries without a thumbnail. If a Gallery Photo is saved without setting the featured image, it just won't appear.
- **Category is single-select via UI** but the underlying taxonomy is hierarchical. Save hook explicitly writes a single-term array. External writers (REST API, WP-CLI) could in theory write multiple terms.
- **EXIF privacy.** We only read `created_timestamp` and don't display GPS or device IDs. Audit before exposing any other EXIF fields.
- **No photos yet** — the entire `/media/` hub + 3 subpages are visually empty until Krish adds Gallery Photos. Empty state for logged-in users links to *"Add the first one →"*; for visitors it says *"Photos coming soon."* Recommend uploading a few photos before any deploy.

**Next**

- Krish uploads first set of real photos via *Gallery Photos → Add New*. EXIF should auto-populate the captured date for phone/camera photos.
- Possible follow-up: **group by bucket** on subpages (e.g. on `/media-events/` cluster photos by event name as subheadings). Cheap extension to `al_render_gallery_photos`.
- Possible follow-up: lightbox **prev/next** for swiping between photos without closing.

---

### 2026-05-17 16:20 CDT — Decision: Lab Calendar pipeline via invite-as-guest pattern (no theme change, v2.6.6)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What was decided**
The Lab Calendar page will be populated dynamically from a dedicated Google Calendar account (referred to in docs as **"the labcal mailbox"** — the literal address is intentionally kept out of all `/docs` files and out of the public site; ask Krish or check the password manager). Lab members invite that account as a guest on any event they want surfaced publicly. The website subscribes to the labcal account's public calendar feed and renders the events on `/lab-calendar/`.

**Architecture sketch**
1. **The mailbox.** A Google Workspace account (Workspace preferred over free Gmail so the address sits on the brand domain and admin-level invite filtering is available). One-time setup: enable Calendar Settings → Event settings → "Automatically add invitations: Yes, even if I have not responded." From that moment, anything the account is invited to lands on its primary calendar with no acceptance step.
2. **Per-event lab workflow (the whole point).** Lab member creates an event in their own calendar (any tool — Google, Outlook, phone), adds the labcal mailbox as a guest, saves. Done. Edits and cancellations propagate automatically — labcal is just another invitee.
3. **The feed.** labcal's primary calendar is set to public; we use its public ICS feed (or Calendar ID for the JS embed route) on the WP side.
4. **The render.** `page-lab-calendar.php` will read that feed via a plugin (Simple Calendar / "Google Calendar Events" is the current candidate — it accepts a public Calendar ID and emits theme-styleable markup). Custom JS via FullCalendar.io is a fallback if Simple Calendar's output proves too inflexible.

**Why this pattern**
Lab members have low tech-time budget. Asking them to log into WP admin and create a calendar entry for every meeting is a much harsher failure mode than asking them to add a guest to an event they're already creating in their normal flow — the latter is a 4-second action inside the tool they already use. The trade-off is that this pattern is **curated, not exhaustive**: only events where someone remembered to invite labcal will surface. That's acceptable for a public-facing lab calendar (we don't want every internal meeting on the website anyway). And the failure mode is recoverable in under a minute — open the event, add labcal as a guest, save; the website picks it up after the next feed refresh.

**Trade-offs explicitly considered and rejected**
- *WordPress-native event management* (members create events inside WP admin): rejected. High tech-savvy + time-budget cost on members for every single event.
- *Share each member's personal calendar with labcal as a member* (so labcal sees everything they put on their own calendar without an invite): rejected. Privacy-invasive — labcal would inherit visibility into internal/private meetings members didn't intend to publish.
- *Shared "Lab Events" calendar that members add events to directly* (instead of inviting labcal as a guest): noted as a viable alternative, but rejected for now. It just relocates the "remember to do the thing" problem from "remember to invite labcal" to "remember to pick the right calendar from the dropdown." Equivalent friction, less ergonomic recovery (events created on the wrong calendar have to be deleted + re-created on the right one, vs. just adding a guest).

**Watch out for**
- **Auto-accept = spam vector.** Anyone in the world who learns the labcal address can drop events onto the public feed. Mitigations: keep the address private (do NOT publish it on the site, do NOT put it in `/docs` files), use Workspace's org-level invite-domain allowlist if available, and periodically eyeball the calendar for junk. This is the single biggest operational risk.
- **ICS feed cache latency.** Google caches public ICS feeds for hours; the WP-side plugin will add another cache layer on top. Realistic feed-to-website latency is 30 min – 2 h. Document this on the page so visitors don't expect real-time. For urgent timing changes (e.g. "seminar moved by an hour, starts in 30 min"), the calendar page is not the right channel — Slack/email is.
- **Curated, not exhaustive.** Events without a labcal guest will never appear. Worth a short FAQ-style note on the page for lab members ("how does an event get here?") — or just in a sticky DM to the lab group.
- **Account ownership.** The labcal account password belongs to the lab/Krish, NOT a personal Google account. If whoever set it up leaves, the account must survive. Lock down the recovery email + phone accordingly.

**Status**
Decision only — nothing built yet. `page-lab-calendar.php` still renders the placeholder ("Calendar coming soon"). Implementation tasks tracked in [GOLIVE.md §14](GOLIVE.md). When this gets built, write a follow-up DEVLOG entry covering the actual mechanics (account ID stays private, but: plugin choice + version, custom theme styling, cache TTL chosen).

**Next**
Build is unblocked but not scheduled. Pre-requisites before any code: (1) provision the labcal Workspace account on the `achilefulab.org` domain, (2) configure auto-accept, (3) set the calendar public and capture its Calendar ID / ICS URL, (4) install + configure the plugin. All in [GOLIVE.md §14](GOLIVE.md).

---

### 2026-05-17 16:18 CDT — Media subpages: flat slugs + rename Lab Life → People, Conferences → Events (theme v2.6.6)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**

Krish created the three category pages in WP admin as **flat top-level pages** (siblings of Media), not nested children, and renamed two of the three categories. The templates and hub were updated to match.

- **Slug + URL changes:**
  - `media-research`  → `/media-research/`  (was planned as `/media/research/`)
  - `media-people`    → `/media-people/`    (was planned as `/media/lab-life/`)
  - `media-events`    → `/media-events/`    (was planned as `/media/conferences/`)
- **File renames:**
  - `page-media-lab-life.php`     → `page-media-people.php`
  - `page-media-conferences.php`  → `page-media-events.php`
  - `page-media-research.php` keeps its name (already correct).
- **page-media.php (hub):** `al_page_url('media/research')` etc. → `al_page_url('media-research')` etc.; `$url_lab_life` → `$url_people`; `$url_conferences` → `$url_events`. Row 2 retitled "Lab Life" → "People" with new lead *"The lab as a community — retreats, dinners, hooding ceremonies, birthdays, and the everyday rhythm of the group."* Row 3 retitled "Conferences" → "Events" with new lead *"Conferences, plenaries, posters, panels, awards, and travel — the lab out at SPIE, BMES, WMIC, and other venues where the field gathers."* ARIA `id`/`aria-labelledby` pairs updated to match. Docblock bumped v4.0 → v4.1.
- **Subpage docblocks + Template Name headers** updated to reflect the actual flat slugs. Template Name strings now read *"Media — Research"*, *"Media — People"*, *"Media — Events"* (so they're still manually assignable via Page Attributes if needed, but filename matching is sufficient and is the actual resolution path).
- **Subpage hero copy** updated: People page hero is now h1 *"People"* / sub *"The lab as a community — retreats, dinners, hooding ceremonies, birthdays, and the everyday rhythm of the group."* Events page hero is now h1 *"Events"* / sub *"Conferences, plenaries, posters, awards, and travel — the lab out at SPIE Photonics West, BMES, WMIC, and other venues."* Research page hero unchanged.
- **style.css v2.6.5 → v2.6.6** — bumped only for cachebusting/version-tracking consistency; no CSS rules changed in this commit.

**Why**

Flat slugs were Krish's call when actually creating the pages in WP admin. The pros: simpler URL structure (no parent/child relationship to maintain in WP), template filename matching just works without `Template Name:` assignment, and `/media-research/` reads as identifiable as `/media/research/` would. The con (slightly clunkier URL) is fine for a small lab site.

The category renames broaden the framing:
- **Lab Life → People** — broader than casual moments; covers anyone-in-the-lab content regardless of setting.
- **Conferences → Events** — broader than academic talks; covers any organized lab event, leaving room for retreats-as-events, workshops, symposia, ceremonies, etc.

This was the only round of breaking changes the hub→subpage wiring needed; subsequent photo additions just append `<figure>` blocks to the relevant subpage gallery.

**Watch out for**

- **Stale URL references in the previous DEVLOG entry (16:08 CDT v2.6.5)** still describe `/media/research/`, `/media/lab-life/`, `/media/conferences/`. Not edited — that entry documents the prior plan, and the new entry supersedes. Status table + project-at-a-glance section have been updated to the current state.
- **The "Submit a Photo" CTA** on the hub was already trimmed to "Request an Image" (press-only, no submit copy) in the previous edit. Unchanged by this commit.
- If Krish ever moves the pages back to nested under Media (Page Attributes → Parent = Media), the slugs would become just `research`/`people`/`events` and would COLLIDE with `page-research.php` (existing) and any future top-level page named the same. Stick with flat slugs.

**Next**

- Real photos. The subpage galleries are SVG placeholders; replace with real `<img>` or `<picture>` inside the existing `<figure class="al-media-figure al-media-figure--{shape}">` pattern as Krish brings photos in.
- Decide when to drop hand-curated hub photos in favor of an auto-pulled latest-3-per-category mechanism (WP attachments tagged by category, or a custom post type). Worth doing once each category has 20+ real photos.

---

### 2026-05-17 16:08 CDT — Media: hub-and-spoke restructure — three subpages + a teaser hub (theme v2.6.5)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**

The two-section reshape from one hour ago (`v2.6.4`) is gone. `/media/` is now a hub with three dedicated subpages — one per content stream.

- **`page-media.php` rebuilt as the hub.** Hero retained, hero sub re-trimmed to *"A visual record of the Achilefu Lab — research, lab life, and conferences."* (95 chars). Body is now three stacked teaser rows. Each row = `<header>` (title + "See more →" link, baseline-aligned, justify-between) + `.al-inner-section__lead` + a 3-figure preview gallery (1 featured square at 2fr column width, 2 smaller squares at 1fr each, all class `--square` for clean grid). Bottom CTA preserved.
- **Three new subpage templates** (each uses `Template Name:` header so Krish assigns via Page Attributes — slug-based filename matching won't work for child pages whose slugs are plain `research`/`lab-life`/`conferences`):
  - `page-media-research.php` — *Template Name: Media — Research* — 13 figures (9 research + 4 OR), hero "Research".
  - `page-media-lab-life.php` — *Template Name: Media — Lab Life* — 8 figures, hero "Lab Life".
  - `page-media-conferences.php` — *Template Name: Media — Conferences* — 5 figures, hero "Conferences".
  - Each subpage ends with a `.al-post-back` "← Back to Media" link (reuses the styled-back-link block introduced for `single.php`).
- **Top featured figure on the hub removed.** The hub's job is to show 3 doors; a 4th editorial moment above them muddied the read. Hero leads straight into the three rows.
- **`style.css` v2.6.5.** New `.al-media-hub-row*` block (`+ .al-media-hub-row` 4.5rem spacing; `__header` flex baseline + justify-between; `__see-more` accent-color link with hover-translate arrow; `__gallery` `grid-template-columns: 2fr 1fr 1fr` desktop, `1fr 1fr` ≤720px with featured spanning full width, `1fr` ≤480px). No changes to existing `.al-media-figure` or `.al-media-gallery` rules — those continue to drive the subpages unchanged.
- **URL helpers.** `al_page_url('media/research')` etc. resolves via `get_page_by_path()` which accepts nested slug paths. No new helper needed.

**Why**

Krish's read: the two-section page felt taxonomic, and the conferences-as-social framing from v2.6.4 was a stretch — a podium photo and a retreat photo do not belong on the same page. Three category pages with a hub overview is the standard IA for a growing lab photo library (which Krish confirmed is coming), and it gives conferences its own identity as the "professional" stream alongside science output and casual life.

The hub layout deliberately uses square-only figures in a `2fr / 1fr / 1fr` row: the featured is double-width AND double-height (square at width 2W → height 2W), the two smaller squares (square at width W → height W) sit top-aligned in their cells with the lower half of each cell empty. This asymmetry is intentional — it signals visual hierarchy (featured = latest) without forcing the smalls to stretch to match the featured's height. Editorial magazines do this constantly.

**Watch out for / Krish must do in WP admin**

1. **Create three new WP pages, each as a child of "Media" (parent = page 11):**
   - Title: *Research*       · Slug: `research`     · Page Attributes → Template: **Media — Research**
   - Title: *Lab Life*       · Slug: `lab-life`     · Page Attributes → Template: **Media — Lab Life**
   - Title: *Conferences*    · Slug: `conferences`  · Page Attributes → Template: **Media — Conferences**
2. **Verify URLs resolve** to `/media/research/`, `/media/lab-life/`, `/media/conferences/`. If permalinks misbehave, visit Settings → Permalinks and click Save (no change needed — just flush rewrite rules).
3. Until those WP pages exist, the "See more →" links on the hub resolve to `#` (`al_page_url` returns `#` when `get_page_by_path` finds nothing). The hub itself is fine; only the navigation to subpages is gated.
4. Subpages use `Template Name:` for assignment instead of slug-based filename matching (the existing convention). That's because nested page slugs like just `research` would collide with the existing top-level `page-research.php`. The `Template Name:` approach is WordPress-canonical and works for any URL; the codebase now has both conventions in use.
5. Hub photos are **hand-curated** — Krish updates the "latest + 2 older" per row by editing `page-media.php` when new photos come in. The SVG IDs in the hub (`hub-r1a`, `hub-l1`, `hub-c1`, …) are namespaced separately from the subpage SVG IDs (`r-glow*`, `lab*`, `conf*`) so the hub and subpages cannot collide on the same DOM (which doesn't happen anyway since they're separate pages).

**Next**

- **Replace SVG placeholders with real photos** once Krish has them. Each subpage's gallery items follow the standard `<figure class="al-media-figure al-media-figure--{shape}"> … </figure>` pattern; swap the inner `<svg>` for `<img>` or `<picture>`.
- **Auto-curate the hub.** Long-term, instead of hand-editing `page-media.php` per new photo, register photos as either WP attachments tagged by category or a custom post type (`media_capture`) with a `category` taxonomy. Hub pulls latest 3 per category via WP_Query. Worth doing once there are 30+ real photos — too much scaffolding before content exists.
- **Navigation entry.** `/media/` lives in the main nav already; the three subpages are reachable only via the hub. Decide later whether they need their own dropdown items under Media (probably not — the hub is the index).

---

### 2026-05-17 15:53 CDT — Media page: two-section reshape — "From the Lab" + "Off the Lens" (theme v2.6.4)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **page-media.php:** Four subsections collapsed to two top-level sections.
  - **From the Lab** (new) — merges the old *Research Imagery* (9 figs) and *In the Operating Room* (4 figs) galleries into a single 13-figure block. Spectral panel (full-width) kept as the closing flourish; OR figures inserted ahead of it so the science-on-the-bench → science-in-the-OR arc reads top-to-bottom.
  - **Off the Lens** (new) — merges *Lab Life* (8 figs) and *Conferences & Events* (5 figs) into a 13-figure block. Conference photos reframed as "lab members out in the world" rather than as scientific output (Krish's call — a person at SPIE is a people photo).
- **Hero sub trimmed** 175 → 95 chars to fit the 150-char `.al-inner-hero` budget and reflect the new two-section split: "A visual record of the Achilefu Lab — the imaging work itself, and the people behind it."
- **Image Use & Licensing section deleted.** The two-column prose block (~30 lines) was a full standalone section with its own heading; it added administrative weight to a visual page. Essentials folded into the CTA paragraph: credit line + high-res email address, one sentence.
- **Docblock** bumped v3.0 → v3.1 with the new section vocabulary.
- **style.css** version: 2.6.3 → 2.6.4. No CSS changes — every figure reuses existing `.al-media-figure--{square,portrait,wide,full,span-2}` classes; the grid handles 13 figs/section without modification.

**Why**
Krish wanted "two CLEAR sections" instead of four. The old four-way split (Research Imagery / Lab Life / Conferences / OR) made the page feel like a taxonomy exercise rather than a record. Two sections lets the contrast do the work: the **work** the lab produces vs. the **people** who do it. The "Off the Lens" name riffs on the hero ("Light, Captured.") — moments *not* framed by a microscope — and gives the social section a deliberate identity rather than a generic "Lab Life" label.

Conferences moved to *Off the Lens* (not *From the Lab*) on Krish's read: regardless of what's on the projector behind the speaker, a photo of a lab member at a conference is a social/travel photo. Treating them as scientific output would be a category error.

Licensing was a full section with two prose columns. It's useful info but unrelated to the *visual* purpose of the page; dropping it to one sentence in the CTA preserves the email-the-lab pathway without imposing a 4-paragraph administrative interruption between the gallery and the action.

**Watch out for**
- 13 figures per section is dense. If/when real photos replace the SVG placeholders, photo file sizes will dominate page weight — consider lazy-loading (`loading="lazy"` on `<img>`) and `srcset` for the larger figures (full-width spectral panel, awards reception, retreat shots).
- The conference SVGs (plenary slide, poster session, awards-reception slide) read more as event documentation than as people photos. With real photographs of lab members at these events, the "people" framing will land more clearly; the placeholders make Off the Lens feel slightly more event-y than intended.
- `.al-two-col--60-40` CSS classes are still defined in `style.css` but no longer used on the media page. They remain in use elsewhere (e.g., PI page), so don't remove them.

**Next**
- Replace SVG placeholders with real photos as they come in. Pattern: keep the `.al-media-figure--{shape}` class on the `<figure>` and swap the inner `<svg>` for an `<img>` (or `<picture>` for art-directed).
- If the From the Lab gallery feels too long once photos are in, consider promoting the OR subset back to its own section — but only if there are ≥6 real OR photos to fill it. Below that count it'd be lopsided.

---

### 2026-05-17 15:04 CDT — Inner-hero discipline + Journal templates (Blog → Journal rename, theme v2.5.1)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**

**Inner-hero band — fixed height across every subpage.**
- **style.css:** `.al-inner-hero` switched from content-driven padding (`calc(68px + 4.5rem) 0 5rem`) to `display: flex; align-items: center; min-height: 440px` on desktop and `min-height: 340px` at ≤640px. Top padding kept at `calc(68px + 1.5rem)` desktop / `calc(68px + 1rem)` mobile for sticky-header clearance. Added `.al-inner-hero > .al-container { width: 100% }` so the flex child fills the band.
- **Char budget enforced.** Hard rule: title ≤60 chars, sub ≤150 chars on every `.al-inner-hero`. Existing copy trimmed to fit:
  - `page-pi.php`: sub 294 → 128 chars
  - `page-research.php`: title 69 → 49, sub 232 → 106
  - `page-optical-imaging.php`: sub 201 → 130
  - `page-team.php`: sub 163 → 121
- Centered alignment retained after a brief top-align experiment (reverted; centered looked better once the char budget removed the variable-height cause).

**Journal templates — Blog renamed end to end.**
- **home.php (new file)** — Journal index. Hero band + post list (date · title · excerpt · "Read entry →") + pagination + empty state.
- **single.php (new file)** — single post. Hero band uses category name as eyebrow (uppercase accent), post title as H1, `date · author` as sub. Body rendered via `the_content()` inside `.al-post-body`. Bottom "← Back to Journal" link.
- **functions.php:** `al_blog_url()` → `al_journal_url()`; fallback URL `/blog/` → `/journal/`.
- **header.php:** Updates dropdown link "Blog" → "Journal".
- **front-page.php:** "From the Blog" col → "From the Journal"; "View all posts" → "View all entries"; `$url_blog` → `$url_journal`; comment headers updated.
- **style.css:**
  - All `.al-blog-*` classes → `.al-journal-*` (`.al-journal-list`, `.al-journal-item`, `.al-journal-pagination`, `.al-journal-empty`).
  - New **SINGLE JOURNAL ENTRY** CSS block (~95 lines): `.al-post-body` paragraph/h2/h3/link/list/blockquote/figure/figcaption/img/hr rules + `.al-post-back` styling.
  - Mobile (≤640px) override added for `.al-post-body h2` and `.al-post-body h3`.
- **wp-admin (Krish):** the page set as `page_for_posts` renamed (title: Journal, slug: journal). Three categories created: **Thoughts** (PI commentary), **Lab Memos** (timely dispatches from individual lab members), **News** (institutional announcements — papers, grants, awards, hires, press). News set as **Default Post Category** in Settings → Writing. Each category renders uppercase as the eyebrow on `single.php`; one category per post (template uses `$cats[0]`).

**Why**

Two unrelated quality issues addressed in one pass:

1. *Inner-hero heights varied page-to-page* because each `.al-inner-hero` sized itself to its content. PI's 4-line sub made it the tallest by a wide margin; Contact's 1-line sub made it the shortest. Navigating between subpages felt sloppy. Locking to `min-height` with flex-centered content + a hard char budget on the copy gives uniform bands without imposing a strict CSS height (so a tiny viewport with wrapped copy can still grow if needed — "fixed height, unless the viewport is too small").

2. *Blog page was completely out of sync* — no `home.php` or `single.php` existed in the child theme, so the WordPress posts page fell back to the parent Kadence `index.php` and rendered nothing like the rest of the site. While building the templates, Krish decided "Blog" was too casual for a research lab and picked "Journal" — renamed across the codebase + the WP page slug `/blog/ → /journal/`.

The category set (Thoughts / Lab Memos / News) was chosen to carry an **author signal**: Thoughts = Sam's voice, Lab Memos = individual lab member's voice, News = institutional voice. Each label looks clean as the uppercase eyebrow on a post hero.

**Watch out for**

- `.al-inner-hero__eyebrow` (style.css line ~1084) was removed from page-level templates in the 14:35 CDT entry below, but **`single.php` (Journal posts) restored its use** — the category name renders as the eyebrow above the post title. The CSS rule is still in use; do not delete it.
- `.al-inner-hero` uses `min-height`, not strict `height`. Long post titles (which come from user content) can grow the band beyond 440px. The 60-char title budget applies to **hand-authored hero copy on fixed pages**, not dynamic post titles. Variable-height heroes on `/journal/<post>/` are accepted as the cost of dynamic content.
- For **Lab Memos** to work editorially, each contributing lab member needs their own WP user account so `get_the_author()` returns the right name. Posting everything under Sam's account defeats the category's purpose.
- `single.php` does not yet style WP Gutenberg's `.alignleft`, `.alignright`, `.alignwide`, `.alignfull` image classes. Defaults work; add overrides only if Sam posts an entry that uses them and the layout looks wrong.
- Pre-launch, no `/blog/` URLs exist publicly, so no redirect rule was added. If the site has been indexed externally before relaunch, add a one-line `template_redirect` filter in `functions.php` sending `/blog/...` → `/journal/...`.

**Next**

- Lab member user accounts + Application Passwords (one-time setup per contributing member).
- Production host + DNS for `achilefulab.org` — Sam cannot post until the site is publicly reachable; the WP mobile app can't talk to `*.local`.
- `page-publications.php` template still missing (Publications page renders Kadence default).

---

### 2026-05-17 15:56 CDT — Team cards: pin footer to bottom edge (theme v2.6.4)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **style.css `.al-team-card__main`:** Added `flex: 1`.
- **style.css `.al-team-card__body`:** Added `flex: 1`.

**Why**
Krish spotted on mobile that when a row has cards of different heights (e.g. one name wraps to 2 lines, another to 1), the CSS Grid stretches every card to the row's tallest, but inside each card the flex-column children only took their natural height. That left the footer hanging just below the role text with empty whitespace between it and the rounded bottom corner of the card.

The fix: `.al-team-card__main` grows to absorb the extra vertical space the grid gave the wrapper, and `.al-team-card__body` grows within main to absorb the extra space inside it. Result: the footer always sits flush at the bottom edge of the card; any "extra" height is paid for inside the body's padding region (the name + role stay top-anchored in the body, so the slack appears as added breathing room below the role text, not as a weird gap above the footer).

**Watch out for**
- Cards without a footer (no LinkedIn/Scholar/Email populated) also benefit: `__main` fills the whole card now, so they no longer end in a dead-space rounded corner either.
- If a future variant adds more content below the role text (back to a focus line, say), it stays inside `.al-team-card__body` and inherits the same grow behavior — no extra wiring needed.

**Next**
None pending.

---

### 2026-05-17 15:50 CDT — Team-card footer: divided cells, no icon chrome (theme v2.6.3)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **style.css `.al-team-card__link`:** Dropped the off-white pill background, fixed 34×34 dimensions, border-radius, and translate-Y hover lift. Each icon link is now `flex: 1` (equal-width cell), vertically padded (`0.7rem 0`) to set the strip height. Glyph stays 16×16 centered.
- **Vertical dividers:** New rule `.al-team-card__link:not(:last-child) { border-right: 1px solid var(--al-border); }` — single hairline between each cell, matching the weight + color of the existing footer-top hairline so the whole "T" of dividers reads as one continuous element.
- **`.al-team-card__footer`:** Dropped `justify-content: space-evenly`, `gap`, and the side padding. Footer is now just `display: flex; align-items: stretch` with its top hairline; the links fill it edge-to-edge.
- **Hover state:** `transform: translateY(-1px)` removed (the bg-less pill had nothing to lift). Replaced the heavy accent-tinted bg with a much lighter one (`rgba(135,188,222,0.10)`) — communicates the click target without overpowering the bare-glyph aesthetic. Color still shifts muted → primary.
- **Focus ring:** Switched from outer box-shadow to `inset` box-shadow so the keyboard focus indicator sits within the cell boundary rather than spilling over the divider hairlines.
- **Mobile (640px):** Removed the now-stale `.al-team-card__link { width: 32px; height: 32px }` override; replaced with `padding: 0.625rem 0` so the strip is slightly tighter on small screens.

**Why**
Krish wanted the icons to lose their pill chrome and read as bare glyphs separated by lines — the footer becomes a row of equal "cells" divided by hairlines, like a tab strip. Removing the per-icon background also makes the merged card from v2.6.2 read even more as a single continuous rectangle: no nested rounded shapes inside the footer.

**Watch out for**
- With `flex: 1`, the cells always divide the footer equally regardless of icon count. A 2-icon footer = 2 equal halves with one divider; 1-icon footer = full width, no divider. That matches the `space-evenly` distribution principle Krish picked earlier and inherits naturally from the new geometry.
- Hit target stays large (entire cell is the link), so even though the visible glyph is small, the click area is generous.
- Hover bg now blends with the card chrome. If a future hover state ever wants more saturation, bump the `0.10` alpha rather than reintroducing a pill background.

**Next**
None pending.

---

### 2026-05-17 15:48 CDT — Team cards: merge main + footer into one continuous card (theme v2.6.2)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **style.css `.al-team-card`:** The card chrome (background, border, border-radius, overflow:hidden, box-shadow, hover lift + tinted border) now lives on the `.al-team-card` wrapper itself, not on the child rectangles.
- **`.al-team-card__main` / `__footer`:** Both stripped of their bg/border/radius/shadow/hover. The 6px gap between them is gone. `__footer` keeps its `padding` + `display: flex` + `justify-content: space-evenly` for icon distribution, plus a new `border-top: 1px solid var(--al-border)` for the hairline that separates it from the main region.
- **Hover:** Lift/shadow/border-color transitions moved from the two children up to the wrapper, so the whole card animates as a single unit.
- **Reduced-motion guard:** Swapped `.al-team-card__main / __footer` (no longer transitioning) for `.al-team-card`.

**Why**
Krish flagged the visible gap between the main rectangle and the footer rectangle — the previous v2.6.1 design read as "two stacked rectangles" but he wanted the footer to read as "the rectangle's extension." The fix is to make the card one continuous rounded rectangle with a single hairline separating the footer region from the body. The wrapper now owns the geometry; the children just contribute content + the hairline.

**Watch out for**
- When a member has no LinkedIn / Scholar / Email, no `.al-team-card__footer` renders → the card is just the main region inside the wrapper's rounded chrome, which still looks correct (no flat-bottom corners).
- The hairline now uses `var(--al-border)`. If a future state ever needs a different separator (e.g. a subtle accent during hover), do it via `.al-team-card:hover .al-team-card__footer { border-top-color: … }` rather than re-adding bg/border to the footer.

**Next**
None pending.

---

### 2026-05-17 15:43 CDT — Team-card footer: space-evenly icon distribution (theme v2.6.1)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **style.css `.al-team-card__footer`:** `justify-content` switched from `center` → `space-evenly`. Footer rectangle still spans the full card width; with fewer than 3 icons populated, the remaining icons now distribute across the footer width instead of clustering at center.

**Why**
With `center`, a 2-icon footer looked sparse — two icons floating in the middle of a wide strip. With `space-evenly`, each present icon claims an equal slice of the footer, so the strip reads as intentionally laid out regardless of icon count. Footer height + position stay identical across cards, so the grid's bottom edge alignment is preserved.

**Watch out for**
- `gap: 0.5rem` is still set as the minimum spacing. With 3 icons it has no visible effect at typical card widths (space-evenly distributes well past that); it's a safety floor for very narrow widths.
- The icons inside `.al-team-card__link` keep their fixed 34×34 size — only the empty space between them flexes.

**Next**
None pending.

---

### 2026-05-17 15:24 CDT — Team cards: portrait layout + attached footer strip (theme v2.6.0)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **page-team.php card markup:** Replaced the landscape monogram-avatar card with a two-rectangle portrait layout.
  - `.al-team-card` is now a flex-column wrapper with `gap: 6px` between two visually distinct children.
  - **`.al-team-card__main`** (top rectangle, fully rounded): contains `.al-team-card__image` (square aspect-ratio block with a soft gray-blue gradient and a centered generic person silhouette SVG) and `.al-team-card__body` (name + role, tight padding).
  - **`.al-team-card__footer`** (bottom rectangle, fully rounded, attached below with 6px gap): icon strip with the LinkedIn / Scholar / Email links centered horizontally. Still conditional — only renders when at least one URL is populated.
  - Both rectangles share the same border, radius, shadow, and hover lift, so they animate as a single unit when the user hovers the card.
- **Dropped renderings:** the `.al-team-card__focus` line is no longer rendered (focus data stays in the array for potential future use — alt text, SEO metadata, hover overlay). The "monogram" avatar (`.al-team-card__mono`) is gone entirely. The `al_team_initials()` helper that generated those initials is also removed (no callers left).
- **CSS replaced wholesale** for the team-card block in style.css:
  - New `.al-team-card__main / __image / __silhouette / __body / __name / __role` rules.
  - New `.al-team-card__footer` rule that mirrors the main rectangle's chrome (border, radius, shadow, hover) so the footer reads as a visually attached sibling.
  - `.al-team-card__link` retained, sized up slightly to 34×34 (was 30×30) with 16px glyphs to balance the now-larger footer strip.
  - Grid resized to `repeat(auto-fill, minmax(220px, 1fr))` (was `300px`) — portrait cards are narrower than the old landscape format, so the grid packs 4-5 per row on desktop.
- **Responsive (640px):** team grid drops to a 2-column layout (was 1-column with the landscape cards) so the portrait cards stay readable rather than stretching full width. Tightened paddings + smaller name/role sizes inside that breakpoint.
- **Reduced-motion guard:** removed dead `.al-team-card / __mono` entries, added `.al-team-card__main / __footer / __image`.

**Why**
Krish asked for a portrait-format card: 80% top is the image area, 20% bottom is name + role, and three quick-action buttons (LinkedIn / Google Scholar / Email) sit attached at the bottom as their own rectangle. No "read more" or focus line — clean. With no headshots available yet, the image area renders a generic silhouette on a brand-tinted gradient; when real photos drop, swap the silhouette block for an `<img>` and the layout absorbs it (the square aspect-ratio + `overflow: hidden` already handle clipping). Krish's explicit preference was for two visually distinct rectangles ("glued together with a small gap") rather than one card with an internal divider, so the footer is its own bordered + rounded + shadowed element with a 6px gap above it.

**Watch out for**
- The footer is still **conditional**. With every `linkedin` / `scholar` / `email` empty by default, no footers currently render. To verify the look, paste any real URL into any member's entry in [page-team.php:22-128](wp-content/themes/kadence-child/page-team.php) — the footer for that one card will appear immediately on refresh. Did NOT fabricate URLs to demo the layout (a wrong profile URL on a published academic page is a real reputational risk).
- The two rectangles share hover state via `.al-team-card:hover .al-team-card__main` / `.al-team-card:hover .al-team-card__footer`. If a future change splits them into separate hover targets, the lift will desync.
- `.al-team-card__focus` is now an **orphaned CSS class** — no markup references it. Left it removed from the stylesheet (no behavior gap, lighter sheet). If focus rendering is ever wanted back, restore the rule alongside the markup.
- The silhouette SVG is intentionally inline (one path, ~120 bytes) rather than an external asset, so it doesn't add a network request per card. Repeats per card; that's fine.

**Next**
Awaiting Krish's URL/email list, OR per-person additions over time. Eventually swap the silhouette `<svg>` for an `<img>` once headshots arrive — likely via a new optional `photo` key on each member's entry. Not adding that field today because the user hasn't asked for it and there are zero photos available right now (per [[project_inner_hero_fixed_height]] discipline, only build what's needed today).

---

### 2026-05-17 15:16 CDT — Team cards: third CTA — Email (theme v2.5.3)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **page-team.php $team:** Added `'email' => ''` to all 23 member entries. Header docblock updated to describe the new key + the LinkedIn-and-Scholar-open-new-tab / email-opens-mail-client behavior contrast.
- **page-team.php card markup:** `$email` resolved alongside the existing `$linkedin` / `$scholar`. The row's outer condition is now `$linkedin || $scholar || $email`. New inner `<?php if ( $email ) : ?>` block renders an envelope-icon anchor with `href="mailto:<email>"`. The address is run through WordPress core's `antispambot()` before being echoed, which encodes characters into HTML entities to slow down naive scrapers. No `target="_blank"` / `rel="noopener noreferrer"` — `mailto:` triggers the OS mail client, not a tab navigation. `aria-label="Email <Name>"`.
- **Email icon SVG:** Inline 24×24 stroke-style envelope (no fill, 1.8px stroke, round caps/joins) using `currentColor` so it picks up the same `.al-team-card__link` color states as the LinkedIn / Scholar icons. The other two icons are filled glyphs; the envelope is a stroke glyph but reads consistently at 15px next to them.
- **No CSS changes.** `.al-team-card__link` already handles all three icons uniformly (background, hover/focus state, focus ring, lift, reduced-motion guard).

**Why**
Krish wanted a third quick-action — Email — alongside the LinkedIn + Scholar pair from v2.5.2. Same conditional-render pattern: the icon only appears for members whose `email` field is non-empty, so the page reads clean while URLs / addresses are being collected over time.

**How to populate**
Set a member's `'email'` to a plain address (no `mailto:` prefix — the template adds that), e.g. `'email' => 'walter.akers@utsouthwestern.edu'`. `antispambot()` will encode it at render time.

**Watch out for**
- `antispambot()` is a low-effort scraper deterrent, not real protection. Treat any address rendered on this page as effectively public.
- Don't paste pre-formatted mailto links into the `email` field — just the bare address. The template prepends `mailto:`.
- Icon order in the row is LinkedIn → Scholar → Email; if you want a different order, reorder the three `<?php if (…) : ?>` blocks inside `.al-team-card__links`.

**Next**
Awaiting Krish's list (LinkedIn URLs / Scholar URLs / emails per person) — or per-person additions over time.

---

### 2026-05-17 15:14 CDT — Team cards: per-person LinkedIn + Google Scholar CTAs (theme v2.5.2)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **page-team.php $team:** Added `linkedin` and `scholar` keys to every member entry (all 23 entries across Faculty, Staff, Postdocs, Grads, Interns) as empty strings. Header docblock updated to spec the new optional keys.
- **page-team.php card markup:** Added a conditional `.al-team-card__links` row at the bottom of each card's body. The row renders only when at least one URL is populated; each icon-anchor inside renders only when its own URL is non-empty. Each link uses `target="_blank" rel="noopener noreferrer"` and an `aria-label` of the form `"<Name> on LinkedIn"` / `"<Name> on Google Scholar"`. SVGs are inline, `fill="currentColor"` so they inherit the link's color state.
- **style.css `.al-team-card__links / __link`:** New CSS block. Icon-tile design: 30×30 rounded square (`r=8px`), neutral off-white background, muted glyph color. Hover/focus-visible: accent-tinted background (`rgba(135,188,222,0.22)`), primary glyph color, 1px lift, and a 2px accent ring on keyboard focus. Sibling rule `.al-team-card__focus + .al-team-card__links` strips the second hairline when both blocks are present.
- **Reduced-motion guard:** Extended to cover `.al-team-card__link` so the lift/color transitions go away when the user prefers reduced motion.

**Why**
Krish asked for per-person LinkedIn + Google Scholar CTAs on each team card. The card is dense (no photo, ~110px body width on mobile) so the affordances had to read as low-weight: monochrome icon tiles instead of pill buttons. Both URLs are intentionally empty by default — I will not fabricate or guess profile URLs (would be a real reputational risk on a published academic page), so the icons are off until URLs are added per-person.

**How to populate**
Fill in any member's `'linkedin'` / `'scholar'` key in [page-team.php:22-128](wp-content/themes/kadence-child/page-team.php) with the full `https://…` URL. The icon for that platform will appear on that member's card on the next page load.

**Watch out for**
- The Google Scholar icon is a stylized graduation cap (not the official Scholar logo, which is a four-shield mark that doesn't read well at 15px). It's recognizable in context. If a higher-fidelity Scholar glyph is wanted later, swap the `<path>` inside `.al-team-card__link--scholar`.
- `esc_url()` is applied on every href, but for safety: only paste public profile URLs (linkedin.com/in/… and scholar.google.com/citations?user=…). Don't paste tracking-redirector URLs.
- The new hover state (accent-tinted background) on the icon tile is independent of the card's own hover (lift + tinted border) — both fire simultaneously when the user hovers over an icon, which is the intended layered behavior.

**Next**
Awaiting Krish's URL list (or per-person URL additions over time). Same pattern could be considered for the alumni directory rows, but their visual density is lower and they intentionally don't carry CTAs today — flag if that decision should change.

---

### 2026-05-17 15:10 CDT — Team cards: drop asymmetric left-border hack (theme v2.5.1)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **style.css `.al-team-card`:** Removed the `border-left: 3px solid transparent` baseline and the matching `border-left-color: var(--al-accent)` on `:hover`. Card now carries a uniform 1px border on all four sides. Padding bumped on the left from `1.25rem` → `1.375rem` to compensate for the lost border thickness. Hover affordance becomes: lift + stronger shadow + `border-color` shift to a soft accent tint (`rgba(135, 188, 222, 0.55)`), on top of the existing monogram gradient flip.

**Why**
On narrow viewports the asymmetric border widths (3px left vs 1px on the other three sides) interacted badly with `border-radius: var(--r-card)`: the left corners visibly clipped inward compared to the right corners, so each card read as "shaved" on its left edge. Krish flagged it in screenshot review. The accent-on-hover effect was the only reason the 3px-transparent slot existed; the remaining hover signals (lift + shadow + monogram color flip) are already enough affordance, so removing the slot is a net simplification.

**Watch out for**
- The exact same hack exists on `.al-feature-card` (style.css ~line 1161) and `.al-research-nav-card` (~line 1216). They'll exhibit the same corner-clipping if rendered at narrow widths. Not changed in this pass — only the team cards were flagged. Worth considering on the next pass through those components.
- Hover state now uses a tinted border instead of an accent-coloured left edge. If anyone re-introduces a left-edge accent later, do it with an absolutely-positioned pseudo-element (so card geometry stays symmetric) rather than with `border-left`.

**Next**
None pending.

---

### 2026-05-17 15:07 CDT — Meet the Team revamp: real roster, monogram cards, PI feature strip, alumni directory (theme v2.5.0)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **page-team.php:** Full template rewrite. Populated `$team` with the real roster pulled from `labs.utsouthwestern.edu/achilefu-lab/lab-members-and-alumni` — 5 groups (Faculty, Staff Scientists & Engineers, Postdoctoral Fellows, Graduate Students, Summer Interns) and a separate 31-entry `$alumni` array with year ranges and current positions. Added `al_team_initials()` helper that strips trailing credentials (`", Ph.D."` etc.) and ignores parenthetical nicknames so monograms come out clean (Walter Akers → "WA", Hanru (Haini) Zhang → "HZ").
- **PI section:** Replaced the small avatar-link card with a full-width `.al-team-pi` feature strip. Subtle white→off-white gradient panel, accent gradient rule on the left edge that thickens on hover, soft accent glow in the upper-right, eyebrow → big name (2.25rem, weight 800, -0.03em tracking) → title row → tag pills (NAE · NAM · Simmons Cancer Center · Radiology) → "Full profile →" with hover gap-expand. Whole strip is the link.
- **Group sections:** New `.al-team-group__head` flex row with the group title plus a count chip (e.g. "Faculty 6") in a pill using the brand accent. Empty groups still skipped silently.
- **Team cards:** Replaced the photo-first square card with a landscape `.al-team-card`. 52px circular monogram avatar (initials, white on a brand-navy gradient) + name + role + optional 1-line focus area separated by a hairline rule. Hover: 3px accent left-border + lift + monogram gradient flips to accent → primary and scales 1.04. Grid is `auto-fill, minmax(300px, 1fr)`.
- **Alumni section:** Three pieces. (1) A 4-cell `.al-team-alumni__ribbon` metric panel (30+ alumni placed · 15+ in academia & research · 7+ in industry R&D · 25+ yr continuous mentorship) sitting on off-white with a small gradient rule prefixing each cell. (2) A 2-col `.al-team-alumni__list` directory: name (bold) · years (primary-colored) · final lab role · "current position" line. Rows separated by hairlines. (3) The original 3-column `.al-latest` static block was removed — the directory replaces it.
- **CTA:** Kept the existing `.al-inner-cta` dark gradient block at the bottom (it was already the "modern dark accent" pattern; no change needed).
- **style.css v2.5.0:** Replaced the legacy `.al-team-grid / .al-team-card / .al-team-card__photo / __placeholder / __body / __name / __role` block (lines ~1346–1398) with a much larger TEAM PAGE section: `.al-team-pi*`, `.al-team-group__head*`, `.al-team-grid`, `.al-team-card / __mono / __body / __name / __role / __focus`, `.al-team-alumni__lead / __ribbon / __metric*`, `.al-team-alumni__list`, `.al-team-alumni-row / __name / __role / __years / __sep / __now`. Added matching 900px and 640px responsive rules + extended the reduced-motion guard to cover the new transition-bearing classes (`.al-team-pi`, `.al-team-pi__rule`, `.al-team-pi__more`, `.al-team-card__mono`).

**Why**
Krish asked for a "modern as fuck, but still use the existing theme patterns" revamp of Meet the Team. The previous template was structurally fine but visually plain: empty roster arrays meant every group block was suppressed, leaving the page as hero → intro/stats → a tiny PI avatar-link → a 3-column generic "Alumni Network" of static prose → CTA. With the real roster in hand (and no photos available), monogram avatars on landscape cards give the page real density and identity without depending on portraits, and the PI strip turns the page's headline person into an actual moment instead of a 72px avatar. The alumni directory replaces vague prose with the actual 31-person list, which is the substantive thing alumni-pages are supposed to do.

**Watch out for**
- **Counts are derived, not hard-coded.** Group count chips use `count($section['members'])` and the alumni count uses `count($alumni)` — adding/removing rows updates the chips automatically.
- **Alumni ribbon metrics ARE hard-coded** (30+ / 15+ / 7+ / 25+) and were chosen as conservative aggregates against the 31-entry list. If the alumni list materially changes, revisit these.
- **`al_team_initials()` is name-aware but not perfect.** It strips after the first comma (handles credentials) and skips parenthetical tokens (handles nicknames). Hyphenated last names (e.g. "Habimana-Griffin") will still produce a single-letter last-initial; the function takes the first character of the last whole word. That looks fine in practice but flag it if a future entry surfaces a surname where this reads wrong.
- The header copy on the hero is unchanged (locked to the 440px desktop / 340px mobile hero height — see [[project_inner_hero_fixed_height]]). Title "Meet the Team" (12 chars) and sub (148 chars) both sit inside the [[feedback_inner_hero_copy_limits]] budget.
- The old `.al-team-card__photo` and `.al-team-card__placeholder` rules are gone. Any other page reusing those classes will lose styling; spot-check confirmed only `page-team.php` referenced them.

**Next**
None pending. When portraits become available, drop them into `wp-content/uploads/team/` and either extend `.al-team-card__mono` to render an `<img>` variant or restore a photo-prefixed card alongside the monogram fallback.

---

### 2026-05-17 14:35 CDT — Remove hero eyebrow chips across home + all inner pages (theme v2.4.1)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **front-page.php:** Removed `<span class="al-hero__eyebrow">Achilefu Lab &middot; UT Southwestern</span>` from the home hero. The H1 now follows immediately after the molecule field container.
- **Inner-page templates (7 files):** Removed `<p class="al-inner-hero__eyebrow">…</p>` from the hero block of `page-research.php` ("Our Research"), `page-pi.php` ("Principal Investigator"), `page-media.php` ("Media & Imagery"), `page-team.php` ("Our People"), `page-optical-imaging.php` ("Foundational Research"), `page-lab-calendar.php` ("Updates"), `page-contact.php` ("Contact"). On templates that carry a breadcrumb (PI, Optical Imaging, Lab Calendar), the breadcrumb now sits directly above the H1.
- **Intentionally retained:** the `<p class="al-inner-hero__eyebrow">Visit</p>` at `page-contact.php:247`. That instance is inside a content-section subhead (Visit / Finding the Lab), not a hero chip — different role, different placement, kept on purpose.

**Why**
Krish flagged the eyebrow chips ("OUR RESEARCH", "PRINCIPAL INVESTIGATOR", "MEDIA & IMAGERY", "Achilefu Lab · UT Southwestern") as visually redundant: on inner pages the H1 already announces what the page is, and on the home hero the headline + inline credentials strip already establish the lab's identity. The chips read as "navigation residue" — labels for a place you're already at.

Second time the home hero eyebrow has been removed (first removal logged in the 2026-05-10 sticky-header entry below). The chip came back as a neon pill during the v2.0 home redesign, survived v2.3.5 simplification, and is now removed for good in v2.4.1 alongside the matching inner-page chips so the pattern is consistent across the whole site.

**Watch out for**
- `.al-hero__eyebrow` (style.css line 240) and its responsive override (line 1904) are now orphaned — no template references them. Left in place rather than removed in case the decision flips again; safe to delete on the next style.css cleanup pass.
- `.al-inner-hero__eyebrow` (style.css line 1084) is **still in use** by the Contact page's "Visit" subhead. Do not delete that rule.
- If a future template restores an eyebrow on a hero, prefer reusing the existing class so the styling stays in one place.

**Next**
None pending.

---

### 2026-05-17 CST — Hero overhaul: full-viewport, density-driven molecule field, touch auto-blink, scroll cue (theme v2.4)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **front-page.php:** Removed the static PHP `mt_srand` / nested-loop molecule generator. `.al-hero__molecules` now ships as an empty `<div>` and is populated entirely in JS. Added `.al-hero__scroll` chevron link (polyline SVG, `href="#al-pi"`) inside the hero. Gave the PI section `id="al-pi"` so the anchor lands.
- **functions.php:** Rewrote the hero JS as a single IIFE that does both dot generation and cursor excitation. Measures `hero.getBoundingClientRect()`, computes `target = clamp(MIN_DOTS, area / DENSITY, MAX_DOTS)`, then creates the `<span>`s with random size/position and **two** random `animation-delay` values (one per animation in the CSS shorthand — breathe 7s and blink 2.6s — so phases never sync). Debounced 180ms `resize` regenerates the field. Cursor proximity logic only binds when `(hover: hover) and (pointer: fine)` matches. Density knobs at the top of the IIFE:
  - Desktop: `DENSITY = 6500 px²/dot`, `MIN = 40`, `MAX = 340`
  - Touch:   `DENSITY = 6000 px²/dot`, `MIN = 40`, `MAX = 100`
- **style.css:**
  - **Hero sizing.** `.al-hero` switched from content-height padding to `min-height: 100vh; min-height: 100svh` + `display: flex; align-items: center`. Existing `padding-top: calc(68px + 4.25rem)` retained to clear the fixed header. Empty space distributes evenly above/below the headline at any viewport.
  - **Scroll chevron.** `.al-hero__scroll` styled absolute bottom-center, with an 1.8s vertical bounce keyframe and `:hover/:focus-visible` brightening. `html { scroll-behavior: smooth }` added globally. Reduced-motion turns off both bounce and smooth scroll.
  - **Touch auto-blink.** New `@keyframes al-molecule-blink` with endpoints (`opacity 0.20→0.98`, `box-shadow 0 0 8px 0 rgba(...,0.45) → 0 0 30px 7px rgba(...,0.90)`) that match the desktop max-cursor-intensity values exactly. `@media (hover: none), (pointer: coarse)` adds the blink animation alongside the existing breathe.
  - **Faster cursor reaction.** `.al-molecule` transition shortened from `opacity 0.18s, box-shadow 0.22s` → `opacity 0.08s, box-shadow 0.10s`.
  - Removed the now-dead `.al-molecule--desk-only` rule.
- **DESIGN.md:** Layout diagram updated to mark hero as `100svh`. New "Hero sizing" section. "Hero flare effect" section rewritten to document the density-driven generation, density table, and two modes (cursor vs auto-blink).

**Why**
Three small UX upgrades requested in one session: (1) more dots and a snappier cursor reaction; (2) mobile/iPad parity — touch users had no equivalent for the cursor flare, so the dots felt dead; (3) hero should always be a full-viewport "champion" frame regardless of screen size, with a scroll cue so users know there's more below. Once dots were both cursor-driven (desktop) and time-driven (touch), making the count auto-scale to viewport area meant the visual density stays consistent on a 4K monitor, a 13" laptop, and an iPhone — no more "too sparse" 4K screens or "too dense" small phones.

The blink endpoints exactly match the desktop max-intensity calc(), so a dot at the blink peak looks identical to a dot the cursor is hovering on desktop — same brightness across both modes.

**Watch out for**
- Field is now decorative-only with **no PHP fallback**. JS-off browsers see an empty hero. Acceptable because content (headline, CTA, credentials) is fully intact server-side.
- Each dot's inline style passes `animation-delay: <breathe>s, <blink>s` (a list of two values). This relies on the CSS `animation` shorthand listing breathe first and blink second on touch — if the order in the touch media query ever flips, swap the JS order too or breathe/blink phases will randomize against the wrong animations.
- The `id="al-pi"` on `.al-pi` is what the chevron anchors to. If the PI section is ever restructured or renamed, update the `href="#al-pi"` in the hero or the smooth-scroll target breaks.
- Desktop `MAX_DOTS = 340` is a perf ceiling, not a target. 340 dots × cursor rAF + 30px box-shadow blur is fine on modern hardware but lower it if testing on a Chromebook reveals jank.
- Resize debounce destroys + recreates DOM nodes — random positions reshuffle on every resize. Intentional (otherwise old dots cluster at one corner) but means if a user is actively resizing the window, the field "twinkles into a new arrangement" every 180ms.

**Next**
- None pending. Self-contained UX polish.

---

### 2026-05-17 CST — Fabricated content purge: drop IGS + B2B pages, Featured Research, In the News, Pillars (theme v2.3.5)

**Author:** Claude (Opus 4.7) working with Krish   ·   **Branch:** main

**What changed**
- **Deleted PHP templates:** `page-bench-to-bedside.php`, `page-image-guided-surgery.php`.
- **Deleted WP pages:** post IDs 21 (`image-guided-surgery`) and 22 (`bench-to-bedside`) removed from DB via `wp post delete 21 22 --force` (LocalWP-bundled WP-CLI).
- **header.php:** Research dropdown reduced to Mission & Vision + Optical & Molecular Imaging.
- **front-page.php:** Removed IGS and B2B pillar panels; then in v2.3.5 removed the entire pillars section. Removed "Featured Research" highlight section. Removed "In the News" column from "Latest from the Lab" (now 2-col: Pubs + Blog). Dead `$url_media`, `$lab_bg_*` vars removed. Section comment numbering renormalized. Home page is now Hero → PI → Latest → Affiliations.
- **page-research.php:** Removed IGS and B2B cards from "Our Research Platform" (singular), and their columns from "Recent Breakthroughs". Lead text updated.
- **page-optical-imaging.php:** Removed `$url_igs` and `$url_b2b` vars + the entire "Related Research" cross-link section.
- **style.css:** Removed dead `.al-highlight*` (Featured Research) and `.al-pillar*` (Pillars) CSS — main blocks + responsive + reduced-motion overrides. ~280 lines removed.
- **CONTENT.md:** Nav table reduced; "What We Do" rows 2 + 3 removed; Research page cards 2 + 3 removed; entire IGS + B2B page content sections removed. PI bio rewritten — replaced the false "joined UT Southwestern Medical Center in 1999" with an accurate Washington University → UTSW recruitment sentence.
- **DESIGN.md:** §5 layout diagram updated (no Pillars, no Featured Research, no In the News, 2-col Latest). Inner pages count 9 → 7. Superseded entries added for the removed home blocks and platform pages.

**Why**
Compared the existing site against the real UTSW lab page at labs.utsouthwestern.edu/achilefu-lab. The real site lists only **Innovative Molecular Imaging** and **Lab Equipment** under Research — there is no "Image-Guided Surgery" or "Bench to Bedside" platform. Both sub-pages were fabricated breakouts that the lab does not claim. The "Featured Research" block on the home page was placeholder content (cyclic-peptide Annexin A2 paper as a generic anchor, backed by `lab-bg.jpg` decorative image) — not a real curated highlight. The "In the News" column was 3 real anchors + invented filler. The 3-panel "Research Pillars" grid presumed three research areas; with only one real platform the section was removed entirely rather than rendered as a lonely single-panel grid.

The 1999 UTSW join-date claim contradicted page-pi.php's own Appointments list (which correctly shows WashU "prior" and UTSW "2022–present").

**Watch out for**
- `lab-bg.jpg` is no longer referenced by any template. Safe to delete from `wp-content/uploads/` if not used elsewhere.
- "In the News" anchors (NAE 2025, NAM 2021, UTSW chair 2024) still live on the PI page Awards/Honors list — they're not lost, just no longer surfaced on the home page.
- WP-CLI path on this Mac LocalWP install: `/Applications/Local.app/Contents/Resources/extraResources/bin/wp-cli/wp-cli.phar`; PHP at `/Users/krish/Library/Application Support/Local/lightning-services/php-8.2.29+0/bin/darwin-arm64/bin/php`; per-site php.ini at `/Users/krish/Library/Application Support/Local/run/3k9Zi_voT/conf/php/php.ini`. Run ID may change if the site is recreated.

**Next**
- Consider adding **Lab Equipment** and **Collaborations** pages — both exist on the real UTSW site but are missing here.

---

### 2026-05-17 CST — PI academy election years corrected (theme v2.3.3)

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
- **page-pi.php** Awards & Honors: NAM year corrected 2024 → 2021; NAE year corrected 2018 → 2025. Awards list reordered so NAE (most recent, 2025) appears first.
- **docs/DEVLOG.md**: Current State section updated (version, In the News anchor years, team bios row).

**Why**
UTSW newsroom articles confirm: NAM election 2021 ("inaugural chair elected to NAM"), NAE election 2025 ("Class of 2025, first UTSW faculty to achieve this distinction"). Prior values (NAM 2024, NAE 2018) were incorrect.

**Watch out for**
home page "In the News" still lists these as anchors — years should match pi.php now that they're corrected.

---

### 2026-05-17 CST — Full placeholder purge (theme v2.3.2)

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
Complete removal of every `[PLACEHOLDER]` and `[VERIFY]` HTML comment from all 10 page templates. Key changes per file:
- **page-team.php**: Removed all 18 fabricated member names (Dr. Maria Chen, Dr. Aisha Patel, etc.) — `$team` arrays emptied. Stats strip changed to confirmed lab-wide stats (300+ pubs, 60+ patents, 25+ years, 3 startups). Alumni section rewritten as static editorial content (no fake names; real confirmed stats). "Roster coming soon" notice added.
- **page-pi.php**: h-index corrected from `85+` to `84` (confirmed Google Scholar: 84/44 since 2021). All `[VERIFY]` and `[PLACEHOLDER]` comment tags stripped throughout stats, biography, awards, education, appointments, publications, editorial boards, and advisory service sections.
- **page-contact.php**: Google Scholar badge linked to confirmed URL. PubMed badge linked to confirmed search URL. `[PLACEHOLDER URL]` comments removed. Building suite line cleaned. Routing section comment tags stripped.
- **page-bench-to-bedside.php**: Partners section replaced with named confirmed collaborators: Yang Liu (U. Iowa), Nalini Kotagiri (U. Cincinnati), Victor Gruev + Shengkui Gao + Julie Margenthaler + Ryan Fields + Farrokh Dehdashti (WashU), Ron Liang + Nan Zhu (U. Arizona), Jeffrey Bryan + Tony Mann (U. Missouri), Zhao-You Tang + Jia Fan (Fudan). Innovation Portfolio updated to 60+ issued patents + 3 startups; fabricated note removed.
- **page-image-guided-surgery.php**: Clinical stats comments removed. Clinical Partners rebuilt with confirmed collaborators from source.
- **page-lab-calendar.php**: Fake dated events (Mar 14, Apr 4, etc.) and fake presenter names removed. Stats strip changed to factual recurring cadence info. Recurring schedule cards cleaned. Subscribe buttons replaced with contact-page links. Past Highlights replaced with confirmed recent publications.
- **page-media.php**: All `[PLACEHOLDER]` comments stripped from figure captions and aria-labels. Section-level placeholder comments removed.
- **page-optical-imaging.php**: Two remaining comment tags stripped.

**Why**
Source website scanned page-by-page revealed every `[PLACEHOLDER]`/`[VERIFY]` HTML comment in rendered output. No fabricated content remains; anything that couldn't be confirmed from source is either removed or presented as an honest "pending" state.

**Watch out for**
Team page renders no member cards (expected — real roster not yet provided). Alumni section is now fully static (no PHP loop). Google Calendar embed URL still needed for Lab Calendar live embed.

**Next**
- Real team roster from lab admin → populate `$team` array in `page-team.php`.
- Google Calendar public URL → replace "Request Calendar Access" buttons in `page-lab-calendar.php`.
- `page-publications.php` custom template.

---

### 2026-05-17 CST — Content refresh from UTSW source site (theme v2.3.1)

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
Scraped `labs.utsouthwestern.edu/achilefu-lab` and replaced all placeholder/fabricated content across 7 templates with verified source material. Changes: (1) Stats corrected everywhere — 60+ issued U.S. patents (was 70+), 4 products in clinical study, 3 startup companies founded. (2) All `[PLACEHOLDER]` publication citations replaced with real, verified papers from the UTSW publications list (front-page, research landing, optical-imaging, image-guided-surgery, bench-to-bedside, PI page). (3) Research descriptions updated: pANXA2 cyclic octapeptide probe added as flagship example in optical-imaging overview; FDTI / Cancer Vision Goggles introduced in image-guided-surgery hero and active-projects; RaST (Radionuclide-Stimulated Dynamic Therapy) added as primary bench-to-bedside translational program. (4) Research mission updated to match source: "Interventional molecular systems, methods, and devices to understand and improve human health." (5) Contact page: phone 214-648-3111 added.

**Why**
Site had placeholder publication titles and fabricated stats. Source site was available and authoritative; all replaced content is pulled directly from it.

**Watch out for**
Team member names are still placeholders (source `/group-members-alumni` returned 404). Real roster must be provided by the lab. The publications page (ID 8) still has no custom template — falls back to Kadence default.

**Next**
- Real team member roster from Dr. Achilefu's office.
- `page-publications.php` template to replace Kadence default.
- Google Scholar link on contact page (confirm URL with PI).

---

### 2026-05-17 CST — Editorial density pass; home page restructure (theme v2.2.0)

**Author:** Claude (Opus 4.7, 1M context) working with Krish   ·   **Branch:** main

**What changed**
1. **Home page structure rebuilt for editorial density** (`front-page.php`, `style.css`): Section flow is now **Hero → Pillars → Featured Research → PI+Stats → Latest from the Lab → Affiliations**. The standalone dark "Lab in Numbers" section is gone — its four stats now live as a thin border-top/bottom band inside the PI section. The Blog cards section is replaced by a 3-column **Latest from the Lab** grid (Recent Publications · In the News · From the Blog) with dense list-style rows separated by `1px var(--al-border)` hairlines. A new **Featured Research** section (editorial 5fr/6fr 2-col, image left, copy right) sits between Pillars and PI. Hero now has an inline credentials strip (`<strong>300+</strong> Publications · …`) below the buttons, with a top border separator.
2. **Section heading restyle**: removed centered text-align, removed the small teal `::after` underline bar, reduced size (`clamp(1.5rem, 2.6vw, 2.125rem)`), reduced font-weight (700, not 800). Section subheads no longer centered. Section heads now read as editorial column heads rather than landing-page brochure titles.
3. **Padding reduced across the board**: Hero `calc(68px+6rem) 0 8rem` → `calc(68px+4.25rem) 0 5rem`. PI 6/5rem → 5/4.5rem. Highlight + Latest sections 5rem 0. Affiliations 4.5rem 0 → 2.5rem 0 (now a tight closing band, not a hero section). Pillar `min-height: 520px` → `420px`; panel content padding `2.5rem` → `1.875rem`.
4. **Dead code removed**: `.al-numbers`, `.al-stat`, `.al-blog`, `.al-blog__grid`, `.al-card`, `.al-card__*` selectors and their @media responsive rules. The front-page-only counter animation JS in `functions.php` (was targeting `.al-stat__value[data-count]`) removed — no more stats with `data-count` on the page.

**Why**
Krish's feedback: "nice frame, but the website has no soul. it is too empty looking." The v2.x design was a centered-headline + spacious-subhead + sparse-content pattern repeated six times. The fix: replace abstract pillars-only content streams with **multiple concrete content streams per section** (publications, press, posts, featured research, PI bio + inline stats), and cut the spacing between/within sections by ~25–35%. The visual density now signals "this is an active research lab with real work going on" rather than "this is a brand landing page."

**Watch out for**
- The credentials strip in the hero is hardcoded in `front-page.php` and **must be kept in sync** with the same four stats now living in the PI section (`.al-pi__stats`). Editing one without the other will leave inconsistent numbers visible on the same page (they appear in hero, then again in PI).
- The Recent Publications and In the News items in `.al-latest` are static placeholder content in `front-page.php`. The third column (From the Blog) pulls from real WP posts. When real publications and press coverage are tracked, those columns should pull from a CPT or external source — currently they're hardcoded `<li>` elements with `[link to /publications]` and `[link to /media]` respectively.
- The Featured Research section's image is `lab-bg.jpg` (reused from the removed Numbers section). The placeholder fallback is an SVG radial-gradient block. When a real research highlight image is available, place it at `wp-content/uploads/featured-research.jpg` and update the template to point to the new file.
- The PI inline stats use `border-top` / `border-bottom` hairlines + `border-right` between cells. The mobile breakpoint (≤960px) converts this to a 2x2 grid with bottom borders only — the responsive rules in style.css must stay in sync if columns or row count changes.
- Affiliations is now a **closing band**, not a footer-replacement section. The site still uses Kadence's footer (footer.php from parent). The affiliations band sits between page content and the WP footer.

**Next**
Need real content: featured research image + paper title/citation, real recent-publications list, real press items. Possibly a "Featured Image of the Month" slot (lab can showcase one beautiful molecular imaging capture monthly).

---

### 2026-05-17 CST — v2.0 home page redesign + Contact & Media templates (theme v2.0.0)

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
1. **Home page v2.0 redesign** (`front-page.php`, `style.css`, `functions.php`): Complete visual overhaul. Hero: dark parallax with diagonal clip-path bottom, neon eyebrow pill, Syne 800 headline, phosphorescent green on keyword "Light". Pillars: replaced accordion with cinematic CSS flex-expand panels — hover grows panel from `flex:1` to `flex:3`, neon line slides in from left via `scaleX`, description/link fade up from `translateY(14px)`. PI Spotlight: off-white section, editorial two-column no-card, neon vertical bar accent left of photo. Numbers: dark parallax, counter animation via IntersectionObserver + `requestAnimationFrame`. Blog: off-white, neon left border reveals on card hover. Affiliations: dark footer strip. All sections connected by `clip-path` diagonal transitions.
2. **Syne display font** (`functions.php`): Loaded alongside DM Sans in a single Google Fonts request. Applied to all headings and display text globally.
3. **Scroll reveal** (`functions.php`): Global IntersectionObserver adds `.is-visible` to `.al-reveal` elements at 12% threshold. Staggered via `data-delay` attribute.
4. **Contact page template** (`page-contact.php`): Two-column layout — form column (WPForms placeholder with email fallback) + sticky detail cards (email, address, joining the lab, press). WPForms shortcode commented in; activate by uncommenting and setting form ID.
5. **Media page template** (`page-media.php`): Featured image gallery (placeholder grid), press list (NAE/NAM/UTSW announcements), talks/lectures placeholder, contact CTA.
6. **CSS additions** (`style.css`): Contact layout (`.al-contact-layout`, `.al-contact-detail-card`), Media page (`.al-press-list`, `.al-press-item`, `.al-media-gallery`, `.al-media-figure`, `.al-media-gallery__placeholder`). Full responsive coverage for both pages.

**Why**
The v1.4.x design used white accordion cards and flat dividers — functional but visually generic. The v2.0 direction leans editorial/premium: dark sections for drama, Syne for authority, the neon as a single energetic accent used sparingly (keyword, neon bar, card hover, CTA). The cinematic pillar panels are a distinctive structural element that directly represents the three research pillars. Contact and Media were the only pages without templates.

**Watch out for**
- The cinematic pillars use `flex: 1` → `flex: 3` with `transition: flex 0.6s`. On reduced-motion, all panels revert to `flex: 1 !important` and desc/link are always visible. Do not add `min-width` to `.al-pillar-panel` — the grid is purely ratio-based.
- `background-attachment: fixed` (parallax) is disabled on `max-width: 768px` due to iOS Safari bug. On mobile the hero and numbers sections use `scroll` attachment.
- The Contact page form column has `min-width: 0` to prevent grid blowout in the `3fr 2fr` layout — do not remove it.
- WPForms shortcode lives in a PHP `if ( shortcode_exists('wpforms') )` block — commented out. To activate: uncomment the `echo do_shortcode(...)` line and set the correct form ID. Remove the `.al-contact-placeholder` div once WPForms is rendering.
- The `.al-media-gallery` uses `display: grid` with `auto-fill minmax(280px, 1fr)`. The placeholder uses `grid-column: 1 / -1` — remove this span if real images are added alongside it.

**Next**
- Create WPForms contact form, activate shortcode in `page-contact.php`.
- Collect lab member bios → add to `$team` array in `page-team.php`.
- Collect molecular imaging photos from lab members → add to Media gallery.
- Get Google Calendar embed URL for Lab Calendar page.

---

### 2026-05-10 ~16:00 CST — Desktop nav close delay; mobile dropdown open animation (theme v1.4.2)

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main

**What changed**
1. **Desktop nav: 500ms close delay** (`functions.php`, `style.css`): hovering off a nav group no longer closes the dropdown instantly. A JS `mouseleave` handler sets a 500ms `setTimeout` before removing the `.keep-open` class; `mouseenter` cancels the timer. CSS added `.al-nav-group.keep-open .al-dropdown` to the visible-state selector group. The delay gives the cursor time to travel diagonally from the nav button to the dropdown panel without the panel vanishing mid-transit. Only fires on desktop (`window.matchMedia('(min-width: 900px)')`).

2. **Mobile dropdown: slide-down + fade-in animation** (`style.css`): the mobile accordion dropdowns previously appeared instantly (`display: none` → `display: block`, which CSS cannot transition). Replaced with `max-height: 0 → 300px` + `opacity: 0 → 1`, keeping `display: block` always set so transitions can fire. Closed state: `max-height: 0; overflow: hidden; opacity: 0; pointer-events: none`. Open state (`.al-nav-group.is-open`): `max-height: 300px; opacity: 1; pointer-events: auto`. Transition: `0.22s ease-out` on max-height, `0.18s ease` on opacity. Reduced-motion users are unaffected — `.al-dropdown` was already in the `prefers-reduced-motion` transition-none block.

**Why**
The desktop nav gap issue was a UX friction point — fast cursor movement across the button-to-dropdown gap caused the panel to close before the user arrived. The mobile animation makes the accordion feel intentional rather than abrupt.

**Watch out for**
- The desktop close timer JS runs at `wp_footer` priority 19 (before the mobile accordion at 21 and mobile nav at 20). Do not raise its priority above 19 or it may run before the DOM is ready.
- `max-height: 300px` is a ceiling, not the actual rendered height — the animation eases to content height then sits idle until 300px. If a dropdown ever has significantly more items, bump this value.
- The mobile hover override (`.al-nav-group:hover .al-dropdown`) now explicitly sets `max-height: 0; opacity: 0; pointer-events: none` to neutralise the desktop hover rule's `opacity: 1; pointer-events: auto`. The `.is-open` rule comes after it in source order and wins the specificity tie — do not reorder these rules.

**Next**
Team member bios, Google Calendar embed, Media + Contact page templates.

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
