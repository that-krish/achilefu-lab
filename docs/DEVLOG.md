# Development log

> **If you are a Claude instance opening this repo for the first time:** read sections 1–2 below (you'll know where the project stands in two minutes). Section 3 is conventions. Section 4 is the historical narrative — skim only the top few entries unless you're investigating something specific.

This file is the single source of truth for *implementation state and decision history* on the Achilefu Lab site. It complements:
- [`README.md`](../README.md) — what the project is and how to run it locally.
- [`DESIGN.md`](DESIGN.md) — current visual / experiential intent (palette, typography, etc.).
- `git log` — every commit. Don't duplicate it here.

---

## 1. Project at a glance

**What we're building**: a public-facing website for Dr. Samuel Achilefu's biomedical engineering lab at UT Southwestern. Target domain `achilefulab.org` (TBD). Hosted independently of the UTSW domain.

**Stack**: WordPress on LocalWP for dev. Theme: Kadence. Plugins: Kadence Blocks, Elementor, WPForms Lite, WP Mail SMTP, Yoast SEO, W3 Total Cache. Repo tracks the full WP install at `app/public/`.

**Planned site sections** (per README): Home · Research (Devices / Nanoplatforms / Molecular Imaging) · People · Publications (auto-pulled from Google Scholar) · Patents · Milestones & Grants · Media Gallery · Events · Blog · Contact.

**Team**: Krish + Salmon (web leads), Eshani + Megan (content), Erin (comms), Ian (UTSW page sync), Dr. Achilefu (principal stakeholder).

---

## 2. Current state

> **Update this section every session.** It must reflect reality at the time of the most recent commit. The Entries section below is append-only; this section is overwrite-in-place. Last updated: **2026-05-10 11:09 CDT** by Claude (Sonnet 4.6).

### Status by area

| Area | Status | Notes |
|---|---|---|
| Repo + README | ✅ Done | Initial WordPress install committed (`15febfcf`), README written and pushed (`7cd449cd`). `.gitignore` updated to track uploads. |
| Documentation scaffolding | ✅ Done | `docs/DESIGN.md`, `docs/DEVLOG.md`, and `docs/GOLIVE.md` created under `app/public/docs/`. |
| Design system spec | 🟡 Proposed, not approved | DESIGN.md has a starter palette (deep navy + imaging cyan), IBM Plex type system, accessibility rules. **None of it is approved by Dr. Achilefu or the team yet.** |
| Design system implementation | ⏹ Not started | Kadence is at default settings. No CSS variables / Customizer changes / Global Colors set. The site does *not* visually reflect DESIGN.md yet. |
| Logo / wordmark | ❓ Unknown | Don't know if one exists. Open question in DESIGN.md §8. |
| Site pages (Home, Research, People, etc.) | ⏹ Not started | No custom pages built. Default WordPress pages only. |
| Publications auto-pull from Google Scholar | ⏹ Not started | No fetch strategy chosen yet (Scholar has no official API). |
| Patents auto-update | ⏹ Not started | Source TBD (USPTO? Google Patents scrape?). |
| Plugins | 🟡 Installed, not configured | Yoast / WPForms / W3TC installed but at defaults. |
| Deployment / production host | ⏹ Not chosen | `achilefulab.org` is the target domain; no host or DNS provider selected. |

Legend: ✅ done · 🟡 in progress / partial · ⏹ not started · ❓ unknown

### Active work

Currently focused on: **design documentation and decisions**. Krish is reviewing the starter palette and typography in DESIGN.md before we start wiring anything into Kadence.

### Blocked / pending decisions

These need a human (Krish, the team, or Dr. Achilefu) before code can move:

- [ ] Approval of starter palette in DESIGN.md §2.
- [ ] Approval of IBM Plex typography in DESIGN.md §3.
- [ ] Whether the lab has an existing logo/wordmark, or we need to create one.
- [ ] Open questions in DESIGN.md §8 (favicon, dark mode, 404, print stylesheet).
- [ ] Production host + DNS provider for `achilefulab.org`.

### Don't break

Things that look removable but aren't, or hidden coupling worth flagging:

- `wp-config.php` is **gitignored on purpose** (DB creds). Use `wp-config-sample.php` as the template. See `.gitignore`.
- `wp-content/uploads/` is gitignored — per-environment binaries. Don't add a tracked uploads dir.
- LocalWP runtime artifacts (`local-xdebuginfo.php`, etc.) are gitignored. If you see them appear, leave them alone.

---

## 3. Conventions

**File ordering**: §2 (Current state) is **overwritten** every session — it should always show "now". §4 (Entries) is **append-only**, with **newest entries at the top**.

**When to write a new entry in §4**:
- After making a non-trivial change (new feature, design decision, plugin added, page built, plugin config touched).
- After a debugging session where the conclusion wasn't obvious — note the root cause, not just the fix.
- After a conversation that produced a decision, even if no code changed yet.
- Before ending a session if anything is in a half-finished state — what's done, what's not, where to pick up.

**When *not* to write an entry**:
- Trivial fixes (typo, formatting, obvious one-line bug). The commit message is enough.
- Pure refactors with no behavior change.
- Things already captured in DESIGN.md — link to it instead of duplicating.

**Always**: when you write a §4 entry, also update §2 to reflect the new state.

**Entry template** (copy this):

```markdown
## YYYY-MM-DD HH:MM TZ — Short title

**Author:** Claude (model name) working with [user]   ·   **Branch:** main   ·   **Commits:** abc1234

**What changed**
One or two sentences. Link to files: `[wp-content/themes/.../style.css](wp-content/themes/.../style.css)`.

**Why**
The motivation. What problem does this solve? What was tried and rejected? What's the next person likely to wonder?

**Watch out for**
Anything that could surprise the next developer — gotchas, hidden coupling, deferred decisions, things that look wrong but are intentional.

**Next**
What's still open. Link to a TODO, an issue, or just a sentence.
```

**Pruning**: don't delete old entries. If something is wrong in retrospect, add a follow-up entry that supersedes it and link back. The trail of *what we used to think* is sometimes more valuable than what we currently think.

---

## 4. Entries

*(Newest first. Append above the entry below it, never overwrite.)*

### 2026-05-10 11:09 CDT — Add GOLIVE.md checklist

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main   ·   **Commits:** pending

**What changed**
Created [docs/GOLIVE.md](GOLIVE.md) — a sequenced, checkbox checklist of everything needed to migrate the site to production and launch `achilefulab.org`. Covers hosting/domain, migration, `wp-config.php` production values, admin settings, email (WP Mail SMTP + SPF/DKIM), plugins, SEO, security, performance, content audit, legal/compliance, backups, and post-launch steps. Updated [README.md](../README.md) to reference it.

**Why**
Krish wants every go-live step documented so it's a repeatable, auditable process rather than tribal knowledge. Any future developer or Claude instance picking this up can work through GOLIVE.md top to bottom without missing anything.

**Watch out for**
GOLIVE.md needs to stay current as the project evolves — if a new plugin is added, a new form, or a new integration, add the corresponding production step to GOLIVE.md at the same time. The memory system has been updated to enforce this.

**Next**
Resolve the open questions at the bottom of GOLIVE.md (host choice, domain ownership, SMTP provider, analytics) — these block launch planning.

### 2026-05-10 11:04 CDT — Track wp-content/uploads/ in git

**Author:** Claude (Sonnet 4.6) working with Krish   ·   **Branch:** main   ·   **Commits:** pending

**What changed**
Removed `wp-content/uploads/` from [.gitignore](../.gitignore) so images are tracked in the repo. Updated [README.md](../README.md) to reflect this.

**Why**
The default gitignore excludes uploads for large production sites where media balloons to gigabytes. This lab site has modest, intentionally compressed media (headshots, lab photos, logo) — tracking it in git means the repo is fully self-contained and switching between machines (Windows dev box ↔ MacBook) requires only `git pull`, no manual file copying.

**Watch out for**
- Keep images compressed before committing. No raw photos, no 4K exports. A good rule of thumb: nothing over 500KB per image, total uploads folder under 50MB.
- If media ever grows large, revisit and migrate to Git LFS (`git lfs track "wp-content/uploads/**"`). The comment in `.gitignore` flags this.
- The `wp-content/uploads/` folder may not exist yet locally if no images have been uploaded. Git won't track an empty folder — that's fine.

**Next**
No action needed. Start uploading images normally; they'll be included in the next `git add`.


### 2026-05-10 10:49 CDT — Repo bootstrap, README, and design documentation scaffolding

**Author:** Claude (Opus 4.7, 1M context) working with Krish   ·   **Branch:** main   ·   **Commits:** `15febfcf` (initial WP install), `7cd449cd` (README), this commit (docs/ + README link)

**What changed**
- WordPress install was committed wholesale at `app/public/` (`15febfcf`), then a project [README.md](../README.md) was added (`7cd449cd`).
- This session created `app/public/docs/`:
  - [DESIGN.md](DESIGN.md) — design decisions doc with proposed starter palette (deep navy + imaging cyan), IBM Plex type system, layout principles, accessibility commitments, and Open Questions.
  - [DEVLOG.md](DEVLOG.md) — this file. Restructured mid-session to put a Current State snapshot at the top (§2) so future Claude sessions can orient quickly without scanning the full log.
- Added a **Documentation** section to [README.md](../README.md) pointing to both docs and explaining each file's purpose, so anyone landing on the repo finds them on first read.

**Why**
Krish wants any future developer (or Claude instance) to come up to speed without re-deriving every decision. Two docs split cleanly: DESIGN.md is *current intent* (overwritten as decisions evolve, with a Superseded section for history). DEVLOG.md is the *narrative + state snapshot* — §2 reflects "now", §4 is the archive.

The starter palette / typography in DESIGN.md were proposed at Krish's request — none approved yet. The reasoning is documented in the doc itself; treat the whole thing as overrideable.

**Watch out for**
- Accent color `#00A6B6` (imaging cyan) **fails WCAG AA contrast** for body text on the warm surface. DESIGN.md flags this — don't use cyan for body links without testing.
- DESIGN.md / DEVLOG.md / `docs/` live inside `app/public/` (the WP install root) by Krish's choice, so anyone landing in this directory finds them. WordPress should not serve them as raw markdown by default, but if you change permalink structure or `.htaccess`, sanity-check.
- No design tokens are wired into Kadence yet. DESIGN.md is *spec*; the live site is *default Kadence*.

**Next**
- Krish to review the proposed palette and typography in DESIGN.md.
- Once approved, wire the palette and type system into Kadence (Customizer → Global Colors / Typography) so the site reflects the spec.
- Resolve open questions in DESIGN.md §8 before page-building begins.
