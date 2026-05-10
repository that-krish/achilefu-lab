# Achilefu Lab

Website for Dr. Samuel Achilefu's research lab at UT Southwestern Medical Center, Dallas. Dr. Achilefu is the inaugural Chair of the Department of Biomedical Engineering and holds the Lyda Hill Distinguished University Chair.

This site is hosted independently of the UTSW domain. Target production domain: **achilefulab.org** (TBD).

## Stack

- WordPress on [LocalWP](https://localwp.com/) for development
- Theme: [Kadence](https://www.kadencewp.com/kadence-theme/)
- Plugins: Kadence Blocks, Elementor, WPForms Lite, WP Mail SMTP, Yoast SEO, W3 Total Cache

## Repo layout

This repository tracks the **full WordPress install** rooted at `app/public/`: WP core, theme, and plugins. The following are intentionally excluded (see [.gitignore](.gitignore)):

- `wp-config.php` — contains DB credentials; clone `wp-config-sample.php` locally
- `wp-content/uploads/` — tracked intentionally (lab site has modest media); keep images compressed
- Caches, upgrade temp dirs, logs
- LocalWP runtime artifacts (`local-xdebuginfo.php`, etc.)

## Documentation

Two living documents in [docs/](docs/) capture the *intent* and *history* behind this build. Read them before making non-trivial changes — they exist so the next developer (or AI assistant) doesn't have to re-derive every decision.

- **[docs/DESIGN.md](docs/DESIGN.md)** — design decisions: color palette, typography, layout principles, imagery direction, voice, and accessibility commitments. The current source of truth for *what the site should look and feel like*. Decisions are versioned in place; superseded ones move to a section at the bottom.
- **[docs/DEVLOG.md](docs/DEVLOG.md)** — development log: a Current State snapshot at the top (status by area, active work, blocked items — overwritten each session) and an append-only narrative of every meaningful change below. Read sections 1–2 first to orient on where the project stands; sections 3–4 cover conventions and history. Every contributor (human or Claude) is expected to keep this current.
- **[docs/GOLIVE.md](docs/GOLIVE.md)** — go-live checklist: every step required to migrate the site to production, configure the cloud server, and launch `achilefulab.org`. Update this throughout development as new requirements are discovered. Work through it top to bottom at launch time.

## Local development

1. Install [LocalWP](https://localwp.com/) and create a site with hostname `achilefu-lab.local`.
2. Clone this repo into `~/Local Sites/achilefu-lab/app/public/` (replacing the default LocalWP install).
3. Copy `wp-config-sample.php` to `wp-config.php` and fill in your local DB credentials (LocalWP shows them in the site dashboard).
4. Visit http://achilefu-lab.local/.

## Site structure

- **Home** — lab goals + tree visualization of the three focus areas
- **Research** — Devices / Nanoplatforms / Molecular Imaging
- **People** — hierarchical, with headshots and LinkedIn
- **Publications** — auto-pulled from Google Scholar, filtered to publication type
- **Patents** — auto-updating
- **Milestones & Grants**
- **Media Gallery** — curated imaging highlights
- **Events** — formal seminars and visiting UTSW talks
- **Blog** — monthly lab member posts
- **Contact**

## Team

- **Krish**, **Salmon** — web leads
- **Eshani**, **Megan** — content and member interviews
- **Erin** — lab comms
- **Ian** — UTSW page sync
- **Dr. Samuel Achilefu** — principal stakeholder

Lab contact: contact@achilefulab.org
