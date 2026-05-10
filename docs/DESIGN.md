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

**Audience** (in priority order):
1. Prospective graduate students and postdocs
2. Academic peers and collaborators (other labs, journal editors, conference organizers)
3. Funding agencies and reviewers (NIH study sections, foundations)
4. Industry partners and licensees of lab IP
5. General public / press

Design should optimize for #1 and #2 first. That means *credibility, clarity, and substance over flair*.

---

## 2. Color palette

> Status: **Proposed starter palette by Claude (2026-05-10)**. Not yet approved by Dr. Achilefu or the team. Override freely; document the change here when you do.

| Role | Hex | Name | Where it's used |
|---|---|---|---|
| Primary | `#0F2A4A` | Deep navy | Headers, nav background, primary buttons, link color on light backgrounds |
| Primary tint | `#1E4377` | Mid navy | Hover states for primary, secondary CTAs, section dividers |
| Accent | `#00A6B6` | Imaging cyan | Highlights, active states, subtle data-viz, link underlines |
| Accent muted | `#7AB8BE` | Pale cyan | Backgrounds for callouts, tags, badges |
| Surface | `#F7F5F0` | Warm off-white | Page background — softer than `#FFFFFF`, less clinical than grey |
| Surface raised | `#FFFFFF` | Pure white | Cards, modals, content blocks elevated above the page |
| Text primary | `#1A1F2C` | Near-black w/ navy undertone | Body copy, headings |
| Text muted | `#5C6675` | Slate | Captions, metadata, post dates, secondary labels |
| Border / hairline | `#E2DFD7` | Warm grey | Dividers, card borders, table rules |
| Success | `#2E7D5B` | Lab green | Form success states, "published" badges |
| Warning | `#B8860B` | Amber | Form warnings, "draft" badges |
| Error | `#A03030` | Muted red | Form errors. Avoid bright reds — clinical context. |

**Why this palette:**
- **Deep navy primary**: institutional, calm, conveys research authority. Adjacent to UTSW blue without copying it. Differentiates from the louder royal blues of consumer healthcare brands.
- **Imaging cyan accent**: a deliberate nod to fluorescent imaging — Dr. Achilefu's NIR cancer-imaging agents render as cyan/green in clinical visualization. Used *sparingly* (under ~10% of any page) to avoid feeling like a tech brand.
- **Warm off-white surface**: pure white reads cold and clinical. The warm `#F7F5F0` makes the site feel like a *lab* you want to spend time in, not a hospital intake form.
- **No gradients in the brand**: gradients age fast. Solid fields and clear hierarchy will outlast trends.

**Accessibility check (must pass before launch):**
- Body text (`#1A1F2C` on `#F7F5F0`): contrast ratio ≈ 14.5:1 — well above WCAG AAA (7:1).
- Primary on surface (`#0F2A4A` on `#F7F5F0`): ≈ 11.7:1 — passes AAA.
- Accent on surface (`#00A6B6` on `#F7F5F0`): ≈ 3.0:1 — **fails AA for body text (4.5:1)**. Use cyan only for non-text decoration, large display text (≥18pt), or paired with an underline. Do not set body links in cyan on the warm surface.

---

## 3. Typography

> Status: **Proposed by Claude (2026-05-10)**.

**Type family: IBM Plex** (open source, free, hosted on Google Fonts).

| Use | Face | Weights | Notes |
|---|---|---|---|
| Display & H1 | IBM Plex Serif | 300 (Light), 400 (Regular) | Page titles, section openers, pull quotes. Serif = academic gravitas without feeling stuffy. |
| Headings (H2–H4) | IBM Plex Sans | 500 (Medium), 600 (SemiBold) | Sub-headings, card titles, nav. |
| Body | IBM Plex Sans | 400 (Regular), 400 italic | Paragraph copy, lists, captions. Excellent at small sizes. |
| Mono | IBM Plex Mono | 400 (Regular) | DOIs, citation IDs, code blocks, file paths in posts. |

**Why IBM Plex:**
- Single type family → consistent feel across serif, sans, and mono with no awkward pairing.
- Designed by IBM for *technical and scientific* contexts — appropriate for a biomedical engineering lab.
- Open source (SIL Open Font License). No licensing risk for the .org domain.
- Available via Google Fonts → can be served with `&display=swap` and preloaded; no extra hosting infra.

**Type scale** (1.250 major-third ratio, 16px base):

| Token | Size | Line height | Use |
|---|---|---|---|
| `display` | 48px | 1.1 | Home hero, page H1 |
| `h1` | 39px | 1.15 | Page title (when not in hero) |
| `h2` | 31px | 1.2 | Section headings |
| `h3` | 25px | 1.25 | Subsection |
| `h4` | 20px | 1.3 | Card title, small heading |
| `body` | 16px | 1.6 | Paragraphs (loose for readability) |
| `small` | 14px | 1.5 | Captions, metadata |
| `micro` | 12px | 1.4 | Footnotes, footer copy. Avoid for anything important. |

**Loading strategy**: preload Plex Sans 400 + 600 critical for above-the-fold. Lazy-load Plex Serif and italics. Use `font-display: swap` so text never blocks render.

---

## 4. Layout & spacing

> Status: **Light scaffolding only. Decisions to make as pages get built.**

Working principles (defaults until contradicted):

- **8px spacing grid.** All margins, padding, and gaps are multiples of 8 (4px allowed for fine adjustments inside small components).
- **Max content width: 72ch** for body prose (~720px). Long-form text is unreadable wider than this. Wider full-bleed sections are fine for hero blocks, image galleries, and data tables.
- **Generous whitespace at section breaks.** Academic sites that look credible tend to have *more* whitespace, not less. Default section vertical padding: 96px desktop / 64px mobile.
- **Mobile-first.** Site must be fully usable on a phone — peer reviewers and prospective students often browse from mobile first.

To decide:
- [ ] Grid system (12-col Bootstrap-style? CSS grid native? Kadence's built-in grid?)
- [ ] Container max-width for full pages (1200px? 1280px?)
- [ ] Card vs. plain-block treatment for People / Publications

---

## 5. Imagery and media

> Status: **Direction set, sourcing TBD.**

**What images on this site should look like:**
- Real lab photography over stock. If a photo could appear on any biotech homepage, it shouldn't be on ours.
- Microscopy and imaging visuals are a competitive advantage — feature them prominently. Dr. Achilefu's lab produces visually striking NIR imaging data that most lab sites don't have.
- Headshots: consistent treatment (same background, same crop ratio, same eye line). Mismatched headshots make a People page look amateur faster than anything else.
- Avoid the "diverse stock photo of scientists pointing at a screen" trope at all costs.

To decide:
- [ ] Headshot photographer / DIY guide for the team
- [ ] Image aspect ratios for hero, card thumbnails, gallery
- [ ] Whether to commission illustrations for the three research areas (Devices, Nanoplatforms, Molecular Imaging) or use real imagery

---

## 6. Voice and tone

> Status: **Direction set, examples TBD.**

- **Confident, not boastful.** Let the work speak — "Dr. Achilefu's lab developed the first NIR cancer-imaging goggles used in surgery" beats "world-leading pioneer in revolutionary medical imaging."
- **Plain English over jargon when both are accurate.** "Cancer-targeted imaging dyes" before "tumor-avid molecular probes" — except in publication abstracts where precision rules.
- **Active voice.** "We developed" not "was developed by us."
- **No exclamation marks** outside of blog posts. Academic credibility erodes fast with `!`.
- **Numbers and dates over adjectives.** "$8.2M in active NIH funding" beats "extensively funded."

---

## 7. Accessibility commitments

These are non-negotiable launch requirements, not nice-to-haves:

- WCAG 2.1 **AA** compliance minimum across every page. AAA where practical (body text contrast).
- All images have meaningful `alt` text. Decorative images use `alt=""` (empty, not missing).
- Keyboard navigable: every interactive element reachable via Tab, focus states visible.
- No color-only signals. If we use red for an error, also use an icon or text label.
- Forms have associated `<label>` elements, not just placeholder text.
- Headings are hierarchical (no jumping H1 → H4).
- Respect `prefers-reduced-motion` — disable parallax, large transitions, autoplay.

---

## 8. Open questions

Things we haven't decided and will need to before launch:

- [ ] Logo / wordmark — does the lab have one, or do we need to create it?
- [ ] Favicon and OG image
- [ ] Dark mode — yes or no? (Default lean: **no** for v1. Academic sites rarely need it; ship light first.)
- [ ] Custom 404 / search-empty illustrations
- [ ] Print stylesheet for publications and bios

---

## Superseded decisions

*(None yet. When a decision is replaced, move the old version here with the date and reason.)*
