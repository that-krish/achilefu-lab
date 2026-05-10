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
| 1 | Home | Static front page | Hero, research pillars, PI spotlight, stats, blog feed, affiliations |
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

> Status: **✅ Built and iterated (2026-05-10).** `kadence-child/front-page.php` + `style.css` v1.2.0. See DEVLOG 2026-05-10 for full iteration history.

**Current layout model (as built):**

```
╔═════════════════════════════════════════════════════╗
║  HERO  [parallax image + dark overlay, full-bleed]  ║
║  "Harnessing Light to Understand, Diagnose          ║
║   & Treat Disease."                                 ║
║  [Our Research]  [Contact Us]                       ║
╚═════════════════════════════════════════════════════╝
                                        ← global diagonal gradient visible here
   ┌──────────┐ ┌──────────┐ ┌──────────┐
   │ PILLAR 1 │ │ PILLAR 2 │ │ PILLAR 3 │  ← white cards, 20px radius, shadow
   └──────────┘ └──────────┘ └──────────┘
   ┌───────────────────────────────────────────────┐
   │  PI SPOTLIGHT  [white panel card, 24px radius] │
   │  [Photo 4:5] │ bio + badges + Meet Team CTA   │
   └───────────────────────────────────────────────┘
╔═════════════════════════════════════════════════════╗
║  LAB IN NUMBERS  [parallax image + dark overlay]    ║
║  ┌────────┐ ┌────────┐ ┌────────┐ ┌────────┐       ║
║  │  300+  │ │  70+   │ │   2    │ │  25+   │       ║  ← frosted mini-cards
║  └────────┘ └────────┘ └────────┘ └────────┘       ║
╚═════════════════════════════════════════════════════╝
                                        ← gradient continues
   ┌──────────┐ ┌──────────┐ ┌──────────┐
   │  POST 1  │ │  POST 2  │ │  POST 3  │  ← white cards, 20px radius
   └──────────┘ └──────────┘ └──────────┘
   ┌───────────────────────────────────────────────┐
   │  AFFILIATIONS  [white card panel, 24px radius] │
   └───────────────────────────────────────────────┘
```

**Key design decisions made during iteration:**
- No alternating full-bleed section backgrounds. One global diagonal gradient (`body.home`) is the page surface.
- Hero and Numbers are the only full-bleed sections — they use parallax images with dark overlays as intentional visual anchors.
- All other sections are transparent; gradient shows through. Separation comes from card shadows and vertical rhythm, not background color changes.
- Hero eyebrow badge removed — headline leads directly.
- Fixed header: pinned via `#masthead { position: fixed !important }` in child CSS (not Kadence theme mods — those were cleared). Kadence's own `header.min.css` has `#masthead { position: relative }` which previously won on specificity. ID selector + `!important` resolves this definitively. See DEVLOG 2026-05-10 for full root-cause.

See [CONTENT.md](CONTENT.md) for all copy.

---

## 6. Layout & spacing

> Status: **Light scaffolding only. Decisions to make as pages get built.**

Working principles (defaults until contradicted):

- **8px spacing grid.** All margins, padding, and gaps are multiples of 8 (4px allowed for fine adjustments inside small components).
- **Max content width: 72ch** for body prose (~720px). Long-form text is unreadable wider than this. Wider full-bleed sections are fine for hero blocks, image galleries, and data tables.
- **Generous whitespace at section breaks.** Academic sites that look credible tend to have *more* whitespace, not less. Default section vertical padding: 96px desktop / 64px mobile.
- **Mobile-first.** Site must be fully usable on a phone — peer reviewers and prospective students often browse from mobile first.

To decide:
- [ ] Grid system (12-col Bootstrap-style? CSS grid native? Kadence's built-in grid?)
- [ ] Container max-width for full pages (1200px? 1280px?)
- [ ] Card vs. plain-block treatment for Team / Publications

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
- [ ] Card thumbnail aspect ratio for Blog page
- [ ] Whether to commission illustrations for the three research areas or use real imagery

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

## Superseded decisions

### Palette v0 — Deep navy + imaging cyan (proposed 2026-05-10, superseded same day)

Proposed starter palette used `#0F2A4A` (deep navy), `#00A6B6` (imaging cyan), `#F7F5F0` (warm off-white surface). Superseded when Krish confirmed the actual palette: `#2D4654` banners, `#243B4A` buttons, `#87BCDE` accent, `#FFFFFF` background. The warm off-white surface was replaced by pure white at Krish's direction.

### Typography v0 — IBM Plex (proposed 2026-05-10, superseded same day)

IBM Plex Serif + IBM Plex Sans was the initial proposal. Superseded when Krish rejected it as a "horrible stock option" and selected **DM Sans** across the board. Reasoning: IBM Plex is safe and contextually appropriate but generic; DM Sans is cleaner, more modern, and less expected in academic science contexts.

### Typography v1 — Playfair Display + Inter (proposed same session, rejected immediately)

Suggested alongside IBM Plex as an alternative. Rejected by Krish for the same reason — too common, too expected.
