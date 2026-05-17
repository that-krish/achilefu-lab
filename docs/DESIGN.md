# Design decisions

This document records the visual and experiential decisions for the Achilefu Lab site. It is human-friendly on purpose — anyone (developer, designer, content lead, or future Claude instance) should be able to read this and understand *what was chosen and why* without spelunking through CSS or theme settings.

**How to use this doc**
- Treat it as the source of truth for design intent. If the implementation drifts from what's written here, either fix the code or update the doc and note it in [DEVLOG.md](DEVLOG.md).
- When you change a decision, don't delete the old version — strike it through or move it to a "Superseded" section at the bottom and explain why. Decisions earn their value from the trail of reasoning.
- Every decision should have a *why*. "Because it looks nice" is not a why. "Because UTSW's brand is navy and we want institutional association without copying their site" is.

---

## 1. Brand context

The Achilefu Lab is the research group of Dr. Samuel Achilefu, inaugural Chair of the Department of Biomedical Engineering at UT Southwestern Medical Center. Dr. Achilefu is internationally known for **near-infrared (NIR) fluorescent imaging** for cancer-targeted surgery — the lab's identity should quietly signal *imaging*, *light*, and *clinical seriousness* without drifting into "tech startup" or "consumer health" aesthetics.

The site is hosted independently of the UTSW domain (target: `achilefulab.org`), so we are **not bound to UTSW's brand system** — but we benefit from visual association with it. Our palette nods toward UTSW's institutional navy without copying it.

**Audience** — ranges from nobody-student to NIH director. Design must work for both without condescending to either. In priority order:
1. Prospective graduate students and postdocs
2. Academic peers and collaborators (other labs, journal editors, conference organizers)
3. Funding agencies and reviewers (NIH study sections, foundations)
4. Industry partners and licensees of lab IP
5. General public / press

Design should optimize for #1 and #2 first. That means *credibility, clarity, and substance over flair*. Timeless over trendy.

---

## 2. Color palette

> Status: **✅ Confirmed by Krish (2026-05-10). Implemented in Kadence global palette.**

| Role | Hex | Name | Where it's used |
|---|---|---|---|
| Banner / primary bg | `#2D4654` | Charcoal Blue | Hero sections, dark banner strips, nav background |
| Accent | `#87BCDE` | Sky Blue | Highlights, active states, links, accent details |
| Page background | `#FFFFFF` | White | All page backgrounds — always white |
| Primary button | `#000000` fill + white text | Black | Primary CTAs — solid black fill, white label |
| Secondary button | `#FFFFFF` fill + `#000000` 2px border + black text | — | Secondary CTAs — white fill, black outline, black label |
| Text primary | `#1A1F2C` | Near-black | Body copy, headings |
| Text muted | `#5C6675` | Slate | Captions, metadata, secondary labels |
| Border / hairline | `#E2DFD7` | Warm grey | Dividers, card borders, table rules |

**Extended Kadence palette slots:**
| Slot | Hex | Role |
|---|---|---|
| palette1 | `#2D4654` | Primary (banners) |
| palette2 | `#000000` | Black (buttons) |
| palette3 | `#87BCDE` | Accent |
| palette4 | `#1a2d38` | Strong text |
| palette5 | `#3a5a6e` | Subtle text |
| palette6 | `#e8f2f8` | Subtle background |
| palette7 | `#f5f9fc` | Light background |
| palette8 | `#ffffff` | White |
| palette9 | `#111827` | Dark |

**Why this palette:**
- **White background always**: chosen by Krish. Clean, open, editorial. Lets the molecular imagery do the heavy lifting.
- **#2D4654 banners**: dark slate-teal reads as institutional and precise — adjacent to UTSW's navy without copying it. Differentiates from loud consumer health brands.
- **#87BCDE accent**: a soft sky blue with a scientific coolness. Low saturation keeps it from reading as a tech brand; it evokes light and imaging without being garish.
- **No gradients**: gradients age fast. Flat fields and clear hierarchy outlast trends.

**Accessibility:**
- Body text (`#1A1F2C` on `#FFFFFF`): contrast ratio ≈ 16.1:1 — passes WCAG AAA.
- Accent on white (`#87BCDE` on `#FFFFFF`): ≈ 2.7:1 — **use accent only for non-text decoration or large display elements**, not body links. Body links should be `#2D4654` or `#243B4A`.

---

## 3. Typography

> Status: **✅ Confirmed by Krish (2026-05-10). Implemented in Kadence theme mods.**

**Type family: DM Sans** — a clean, geometric, contemporary sans-serif. Free on Google Fonts (open source, SIL license). Available via Kadence's built-in Google Font loader.

| Use | Face | Weight | Notes |
|---|---|---|---|
| Headings (H1–H4) | DM Sans | 700 (Bold) | Page titles, section openers, card titles |
| UI / nav / labels | DM Sans | 500 (Medium) | Navigation, buttons, tags, metadata |
| Body | DM Sans | 400 (Regular) | Paragraph copy, lists, captions |

**Single-family approach:** DM Sans runs across the entire site — no second font. Weight variation (400 / 500 / 700) carries the full visual hierarchy without the awkward pairing problem.

**Why DM Sans:**
- Modern geometric sans — confident, readable, not dated.
- Chosen by Krish after rejecting Playfair Display + Inter as "horrible stock options" — those were safe but bland.
- Works exceptionally well at both large display sizes and small body copy.
- Open source, Google Fonts hosted, no licensing risk.

**Kadence implementation:**
- `base_font`: family `DM Sans`, weight `400`, size `17px`, lineHeight `1.6`, `google: true`
- `heading_font`: family `DM Sans`, weight `700`, variant `["700"]` (must be array — Kadence bug; see DEVLOG 2026-05-10)

**Type scale** (approximate, using Kadence defaults with DM Sans):

| Token | Size | Use |
|---|---|---|
| Hero / H1 | ~48px | Home hero headline |
| H2 | ~32px | Section headings |
| H3 | ~24px | Subsection, card title |
| Body | 17px | Paragraphs (bumped from 16px default for readability) |
| Small | 14px | Captions, metadata |

---

## 4. Page structure

> Status: **✅ Confirmed by Krish (2026-05-10). All pages created in WordPress.**

| # | Page | WordPress role | Notes |
|---|---|---|---|
| 1 | Home | Static front page | Hero (full-viewport, credentials strip, scroll cue), PI spotlight + inline stats, Latest from the Lab (Pubs + Blog), affiliations |
| 2 | Research | Standard page | Areas, projects, facilities |
| 3 | Publications | Standard page | Papers, patents, proceedings |
| 4 | Team | Standard page | PI + lab members |
| 5 | Blog | WP posts page | Posts + news/announcements |
| 6 | Media | Standard page | Molecular imaging showcase |
| 7 | Contact | Standard page | Location, map, contact form |

All pages published (IDs 6–12). Primary navigation menu created and assigned to the `primary` location. Default "Sample Page" deleted.

**Why this list:**
- **Publications** is essential for academic credibility — heavy traffic from peers.
- **Media** was Krish's addition — the lab's fluorescence images are a genuine visual asset.
- **Blog** absorbs News — reduces maintenance burden, keeps editorial surface unified.
- **Join Us** deferred as optional — can be added when there are active positions to post.

---

## 5. Home page layout

> Status: **✅ Built and iterated through v2.3.5 (2026-05-17).** `kadence-child/front-page.php` + `style.css`. See DEVLOG for full iteration history.

**Current layout model (v2.3.5 editorial density):**

```
╔═════════════════════════════════════════════════════╗
║  HERO  [full-viewport (100svh), navy + molecule field] ║
║  flex-centered headline block:                      ║
║  "Harnessing Light to Understand, Diagnose          ║
║   & Treat Disease."                                 ║
║  [Our Research]  [Contact Us]                       ║
║  ─────────────────────────────────────────          ║
║  300+ Publications · 60+ Patents · NAE & NAM ·     ║
║  4 Products in Clinical Study  ← credentials strip  ║
║                       ↓ scroll cue to PI section    ║
╚═════════════════════════════════════════════════════╝

   ┌─────────────────────────────────────────────────┐
   │  PI  [white bg, 2-col photo left / bio right]   │
   │  [Photo 4:5]  │  bio + credentials              │
   │  ─────────────────────────────────────          │
   │  300+ Pub  │  60+ Patents  │  2 Acad  │  3 Cos. │  ← inline stats band
   └─────────────────────────────────────────────────┘

   LATEST FROM THE LAB  [2-col equal grid]
   ┌──────────────┐ ┌──────────────┐
   │ Recent Pubs  │ │ From Blog    │
   │ hairline rows│ │ hairline rows│
   └──────────────┘ └──────────────┘

   UTSW · Simmons Cancer Center · NIH  ← tight closing band (~2.5rem padding)
```

**Key design decisions (v2.x):**
- **White page, white header, white everything** — no dark background sections, no gradient page surface. The v1 global diagonal gradient and the "Lab in Numbers" dark parallax section are gone. Color comes from the brand navy (`#2D4654`) applied to hero banners and section strips only.
- **Stats folded into hero and PI** — the standalone "Lab in Numbers" section is removed. The four stats appear twice: once as an inline credentials strip in the hero (establishes credibility immediately), once as a thin hairline-bordered band at the bottom of the PI section (contextualizes the bio). This is intentional redundancy for two different reading contexts.
- **Latest from the Lab** is a 2-column hairline-separated grid (Recent Publications / From the Blog), each column a `1px var(--al-border)` row list. Publications are static in `front-page.php`; Blog pulls from real WP posts.
- **Affiliations is a closing band**, not a section — `padding: 2.5rem 0`, logos inline, no background panel or wrapper.
- **No Pillars section.** With only one real research platform (Optical & Molecular Imaging), the 3-panel flex-expand grid was removed in v2.3.5. The hero already references the lab's focus, and the Research nav link surfaces the platform page.
- Fixed header: pinned via `#masthead { position: fixed !important }`. Hero pads `calc(68px + 4.25rem)` to clear it.

**Superseded v1/v2 decisions (moved here from §5 body):**
- ~~Global diagonal gradient~~ — removed. Felt like a landing-page marketing template.
- ~~Standalone "Lab in Numbers" parallax section~~ — stats folded into hero strip + PI band.
- ~~Blog card grid (3 cards)~~ — replaced by the denser "Latest from the Lab" list.
- ~~Section heading centered + teal underline bar~~ — now left-aligned editorial (see §11).
- ~~Card radius 12px, reduced shadows~~ — v2 has no cards on the home page.
- ~~Featured Research home block~~ — removed v2.3.4. Was placeholder content backed by `lab-bg.jpg`; not based on a real curated highlight from the lab.
- ~~"In the News" home column~~ — removed v2.3.4. Real lab site has no news/press section.
- ~~"Image-Guided Surgery" and "Bench to Bedside" pillar panels~~ — removed v2.3.4. Neither is a research platform on the real UTSW site; both pillar panels and their dedicated sub-pages were fabricated breakouts.
- ~~Research Pillars section~~ — removed entirely in v2.3.5. With only one real platform left, a single-panel flex-expand grid didn't justify the layout. The CSS for `.al-pillars*` and `.al-pillar-panel*` was also deleted from `style.css`.
- ~~Hero eyebrow chip ("Achilefu Lab · UT Southwestern")~~ — removed v2.4.1. The H1 + inline credentials strip already establish lab identity; the chip read as navigation residue. (Was removed in v1.x, returned during the v2.0 redesign as a neon pill, removed again in v2.4.1.) `.al-hero__eyebrow` CSS retained as orphaned for now.

See [CONTENT.md](CONTENT.md) for all copy.

---

## 6. Layout & spacing

> Status: **✅ Settled in v2.x (2026-05-17).** See §11 for the editorial density system that governs spacing on all pages.

- **8px spacing grid.** All margins, padding, and gaps are multiples of 8 (4px allowed for fine adjustments).
- **Max content width: 1200px** container for full pages; body prose capped at `72ch` within that.
- **Section vertical padding: 3.5–5rem desktop / 2.5–3.5rem mobile.** (Was 6–8rem in v1; reduced to signal density and active content volume.) The tightest sections (affiliations closing band) go as low as 2.5rem.
- **Mobile-first.** Full usability on phone — peer reviewers and prospective students browse mobile first.
- **No cards on the home page.** Content streams use hairline-separated list rows (see §11). Cards remain appropriate for the Media image showcase only.
- **CSS grid native** for two-column editorial blocks (PI). Kadence's grid is not used for page-level layout — child theme CSS handles it directly.

Open:
- [ ] Card vs. plain-block treatment for Team / Publications pages (not yet built)
- [ ] Print stylesheet for publications and bios

---

## 7. Imagery and media

> Status: **Direction set, sourcing TBD.**

**What images on this site should look like:**
- Real lab photography over stock. If a photo could appear on any biotech homepage, it shouldn't be on ours.
- Microscopy and imaging visuals are a competitive advantage — feature them prominently. Dr. Achilefu's lab produces visually striking NIR imaging data that most lab sites don't have.
- The **Media page** is the showcase for the best molecular images from lab members. These images are a genuine differentiator.
- Headshots: consistent treatment (same background, same crop ratio, same eye line). Mismatched headshots make a People page look amateur faster than anything else.
- Avoid the "diverse stock photo of scientists pointing at a screen" trope at all costs.

**Image drop-in paths (documented 2026-05-10):**
| Image | Path | Notes |
|---|---|---|
| Dr. Achilefu headshot | `wp-content/uploads/dr-achilefu.jpg` | Aspect 4:5. ✅ Placed by Krish 2026-05-10. |
| Hero background | `wp-content/uploads/hero-bg.jpg` | Wide, dark-toned. `::before` overlay darkens it. ✅ Placed by Krish 2026-05-10. |
| Numbers section background | `wp-content/uploads/lab-bg.jpg` | Wide lab/microscopy image. Same `::before` overlay treatment as hero. ✅ Placed by Krish 2026-05-10. |
| Affiliation logos | `wp-content/uploads/logos/logo-*.svg` | Grayscale SVGs, height 36px. Swap text divs in `front-page.php`. ⏹ Not yet sourced. |

To decide:
- [ ] Headshot photographer / DIY guide for the team
- [x] Image aspect ratios for hero (16:9), PI (4:5) — set 2026-05-10
- [ ] Card thumbnail aspect ratio for Journal post listings
- [ ] Whether to commission illustrations for the three research areas or use real imagery

---

### 7.1 Gallery Photos pattern (Media page family, v2.7.0+)

The `/media/` hub and its three subpages (`/media-research/`, `/media-people/`, `/media-events/`) render photos from the **Gallery Photos** custom post type — *not* from static template markup. Each photo carries description, photo_category, photo_bucket tag, captured date, and the file itself. The page templates query the database via `al_render_gallery_photos($category_slug, $limit)` and render — no hardcoded HTML, no Gallery blocks, no Media Library categorization to manage.

Operator workflow + field meanings are documented in [CONTENT.md → PAGE: Media](CONTENT.md). Implementation lives in [DEVLOG.md → v2.7.0 entry](DEVLOG.md). Pre-launch seeding checklist is in [GOLIVE.md §15](GOLIVE.md). This section is the **visual / display design** contract.

**Layout:**
- **Hub rows:** 3-column grid `2fr 1fr 1fr`. Featured (col 1) is a larger square; the two thumbs (cols 2 & 3) are smaller squares aligned to start. Asymmetric below-the-fold space is intentional — visual hierarchy, not a bug. Mobile collapses to 2-col then 1-col.
- **Subpages:** standard `.al-media-gallery` grid with `repeat(auto-fill, minmax(280px, 1fr))` — same layout the editorial subpages used pre-CMS.
- **All gallery thumbs are square** in the rendered output (helper passes `--square` modifier by default). Non-square uploads get center-cropped via `object-fit: cover`.

**Reveal behavior:**
- **Desktop (`@media (hover: hover)`):** hover-reveal overlay. Dark gradient fades in over the bottom of the image with two stacked spans: `.al-media-figure__desc` (description, regular weight) and `.al-media-figure__meta` (bucket · date, small caps, accent-color blue-light). Implemented as `.al-media-figure--overlay`. No click-to-open on desktop — overlay is informative enough.
- **Touch (`@media (hover: none)`):** hover overlay is hidden entirely (it can't trigger anyway). Tapping any `.al-media-figure[data-photo-id]` opens a fixed full-screen lightbox (`.al-lightbox`) with the photo (max-width clamped to `min(94vw, 720px)`, max-height `65vh`) and metadata centered below. Dismiss via × button, backdrop tap, or Esc.

**Empty states:**
- Logged-in editors: dashed-border `.al-gallery-empty` block with *"No photos yet. Add the first one →"* link to the admin Add New screen.
- Public visitors: same block, copy *"Photos coming soon."*

**Image specs (recommendations for uploads via Gallery Photos → Add New):**

| Property | Recommended | Notes |
|---|---|---|
| Aspect ratio | **Square (1:1)** | The grid lays out at 1:1; non-square uploads get center-cropped. Pre-crop to square for predictable framing. |
| Long edge | 1600–2400 px | WP auto-generates `large` (default 1024w) and `medium` thumbnails. Source image needs to be ≥ `large` size for crisp display on retina screens. |
| File size | < 500 KB | Pre-compress with [Squoosh](https://squoosh.app/) or ImageOptim. Lab page weight matters — visitors on phones use cellular. |
| Format | JPEG (photos), PNG (microscopy with text overlays / line art) | WebP is fine if Krish wants smaller files; WP supports it. |
| EXIF | Keep `created_timestamp` intact | The save hook reads it to auto-populate Captured Date. Phones/cameras include it by default; screenshots and Slack downloads often don't. |
| Filename | Doesn't matter | The Title field on the CPT post is the visible description; the filename only shows in admin. |

**EXIF / privacy note:** the save hook reads only `created_timestamp` from EXIF. GPS coordinates, device serial, and other EXIF fields are ignored. If any new field is ever surfaced from EXIF, audit it for privacy implications first.

**Why this pattern over WP Gallery block or ACF:**
- Gallery block has no per-image taxonomy → can't filter automatically by category → would require Krish to maintain three separate Gallery blocks (one per subpage) and pick images by hand.
- ACF Pro Image Gallery field gives per-figure layout control but costs money and requires Krish to manage galleries from inside each page edit screen — same friction as Gallery block.
- A dedicated CPT lets Sam never see gallery fields when uploading blog images (zero confusion), and the page-level admin UX is just "upload + tag, done."

---

## 8. Voice and tone

- **Confident, not boastful.** Let the work speak — "Dr. Achilefu's lab developed the first NIR cancer-imaging goggles used in surgery" beats "world-leading pioneer in revolutionary medical imaging."
- **Plain English over jargon when both are accurate.** "Cancer-targeted imaging dyes" before "tumor-avid molecular probes" — except in publication abstracts where precision rules.
- **Active voice.** "We developed" not "was developed by us."
- **No exclamation marks** outside of blog posts. Academic credibility erodes fast with `!`.
- **Numbers and dates over adjectives.** "$8.2M in active NIH funding" beats "extensively funded."

---

## 9. Accessibility commitments

These are non-negotiable launch requirements, not nice-to-haves:

- WCAG 2.1 **AA** compliance minimum across every page. AAA where practical (body text contrast).
- All images have meaningful `alt` text. Decorative images use `alt=""` (empty, not missing).
- Keyboard navigable: every interactive element reachable via Tab, focus states visible.
- No color-only signals. If we use red for an error, also use an icon or text label.
- Forms have associated `<label>` elements, not just placeholder text.
- Headings are hierarchical (no jumping H1 → H4).
- Respect `prefers-reduced-motion` — disable parallax, large transitions, autoplay.

---

## 10. Open questions

Things we haven't decided and will need to before launch:

- [ ] Logo / wordmark — no existing one; needs to be created.
- [ ] Favicon and OG image
- [ ] Dark mode — yes or no? (Default lean: **no** for v1.)
- [ ] Custom 404 / search-empty illustrations
- [ ] Print stylesheet for publications and bios
- [x] **Breadcrumb navigation** — removed (2026-05-10, Krish). The "Home › Research › Page" trail felt unnecessary for a site of this size. HTML remains in templates behind `display: none`.

---

## 11. v2.x editorial density system

> Status: **✅ Implemented across all 8 pages (home + 7 inner) as of v2.3.4 (2026-05-17).**

This section documents the design language that superseded the v1 "spacious landing page" aesthetic. Read this before touching any page template.

### Why it exists

Krish's feedback after v2.0: "nice frame, but the website has no soul. it is too empty looking." The v1 pattern — centered headline + spacious subhead + sparse content — repeated six times felt like a brand marketing site, not a research lab. The fix: replace abstract section wrappers with multiple concrete content streams per page, and cut section spacing by ~30%.

### Core rules

**Section headings:**
- Left-aligned, not centered.
- Weight 700, size `clamp(1.5rem, 2.6vw, 2.125rem)`.
- No teal `::after` underline bar. Separation comes from layout, not decorative rules.
- Subheads (`<p class="al-section-sub">`) left-aligned, `max-width: 52ch`, color `var(--al-muted)`.

**Hairline row lists:**
- Used for Recent Publications, From the Blog, and any dense content stream.
- Pattern: `<ul>` with `border-top: 1px var(--al-border)` on `<li>`, last child `border-bottom` too.
- Row content: date/label left, title/headline as the main text, link arrow right.
- No cards, no box-shadows, no background fills on individual rows.

**Inline stats bands:**
- A thin row of 4 stats separated by `border-right: 1px var(--al-border)`.
- Bounded above and below by `border-top` / `border-bottom` hairlines.
- Used in two places: hero credentials strip and bottom of PI section.
- Mobile: collapses to 2×2 grid, right-borders removed, bottom-borders only.

**Padding targets (desktop → mobile):**
| Context | Desktop | Mobile |
|---|---|---|
| Hero | `calc(68px + 4.25rem) 0 5rem` | `calc(68px + 3rem) 0 3.5rem` |
| Standard section | `5rem 0` | `3.5rem 0` |
| PI section | `5rem 0 4.5rem` | `3.5rem 0 3rem` |
| Affiliations closing band | `2.5rem 0` | `2rem 0` |

**Section backgrounds:**
- All page sections: `background: transparent` (page bg is white).
- Hero and inner-page hero strips: `background: var(--al-navy)` (`#2D4654`).
- No dark full-bleed sections anywhere else on any page.

### Hero sizing

The hero is `min-height: 100vh` with a `min-height: 100svh` upgrade for browsers that support the small-viewport unit (iOS Safari toolbar collapse). `display: flex; align-items: center` vertically centers the headline block. Existing `padding-top: calc(68px + 4.25rem)` keeps the headline clear of the fixed header at any height. A bouncing chevron link (`.al-hero__scroll`, polyline SVG) sits absolute bottom-center, anchored to `#al-pi`, with `scroll-behavior: smooth` enabled globally.

### Hero flare effect

A decorative field of small teal dots (`.al-molecule`) is scattered behind the hero content using absolute positioning. Visual reference: NIR fluorescence imaging — the dots simulate excited fluorescent molecules responding to a light source (the cursor on desktop, or ambient self-blinking on touch).

**Density-driven generation (v2.4):** The dots are entirely JS-generated. `.al-hero__molecules` ships empty from `front-page.php`; the script in `functions.php` measures the hero's `getBoundingClientRect()` on first paint, divides the area by a target density to pick a dot count, and creates that many `<span>`s with random `left/top/size/animation-delay`. A debounced `resize` listener (180ms) regenerates the field so density stays roughly constant across viewports and on rotation. The PHP no longer renders any dots — JS-off browsers see an empty hero (decorative only).

Density knobs live at the top of the IIFE in `functions.php`:

| | Desktop (cursor) | Touch |
|---|---|---|
| `DENSITY` (px² per dot) | `6500` | `6000` |
| `MIN_DOTS` | `40` | `40` |
| `MAX_DOTS` | `340` | `100` |

Indicative counts: laptop 1440×900 ≈ 185 dots; desktop 1920×1080 ≈ 308; 4K caps at 340. iPhone 390×800 ≈ 52; iPad 768×1024 caps at 100.

**Two visual modes:**

1. **Desktop (cursor-reactive).** Gated on `(hover: hover) and (pointer: fine)` and not `prefers-reduced-motion`. A `mousemove` listener with a `requestAnimationFrame` loop updates `--cursor-intensity` per dot; CSS reads it for opacity + box-shadow glow. Quadratic falloff within ~240px of the cursor. Transition is `opacity 0.08s / box-shadow 0.10s ease-out` for a snappy reaction.
2. **Touch (auto-blink).** Gated on `(hover: none), (pointer: coarse)`. CSS adds a second animation alongside `al-molecule-breathe` — `al-molecule-blink 2.6s ease-in-out infinite` — whose keyframes exactly match the desktop ambient → max-intensity endpoints (`opacity 0.20→0.98`, `box-shadow 0 0 8px 0 rgba(...,0.45) → 0 0 30px 7px rgba(...,0.90)`). Each dot gets two independent random delays (one per animation in the shorthand) so breathe and blink phases never sync — no top-to-bottom wave.

`prefers-reduced-motion: reduce` disables both modes (animation + transition off).

Applied only on `front-page.php` — inner pages do not get the effect.

### Inner pages

All 7 inner pages share the same language: navy hero strip → white content sections with editorial density. Each page has at least one hairline-row list or inline stats band. No page uses a dark background section below the hero.

Pages: Research landing · Optical Imaging · PI · Team · Lab Calendar · Contact · Media (visual showcase).

**Hero pattern (v2.4.1):** optional breadcrumb → H1 (`.al-inner-hero__title`) → subhead (`.al-inner-hero__sub`). No eyebrow chip — removed v2.4.1 because the H1 already names the page and the chip read as redundant navigation residue. The `.al-inner-hero__eyebrow` class still exists in `style.css` because it's reused (with different intent) by the Contact page's "Visit" content-section subhead; do not delete the rule.

---

## Superseded decisions

### Palette v0 — Deep navy + imaging cyan (proposed 2026-05-10, superseded same day)

Proposed starter palette used `#0F2A4A` (deep navy), `#00A6B6` (imaging cyan), `#F7F5F0` (warm off-white surface). Superseded when Krish confirmed the actual palette: `#2D4654` banners, `#243B4A` buttons, `#87BCDE` accent, `#FFFFFF` background. The warm off-white surface was replaced by pure white at Krish's direction.

### Typography v0 — IBM Plex (proposed 2026-05-10, superseded same day)

IBM Plex Serif + IBM Plex Sans was the initial proposal. Superseded when Krish rejected it as a "horrible stock option" and selected **DM Sans** across the board. Reasoning: IBM Plex is safe and contextually appropriate but generic; DM Sans is cleaner, more modern, and less expected in academic science contexts.

### Typography v1 — Playfair Display + Inter (proposed same session, rejected immediately)

Suggested alongside IBM Plex as an alternative. Rejected by Krish for the same reason — too common, too expected.
