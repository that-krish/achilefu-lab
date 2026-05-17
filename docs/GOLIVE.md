# Go-live checklist

Everything that must be done on the production server before `achilefulab.org` goes public. Work through this top to bottom — order matters in some sections.

This document should be updated throughout development as new requirements are discovered. If you're a Claude instance and something changes that affects production (new plugin, new form, new email address), add it here.

**Status key:** ⬜ not done · 🟡 in progress · ✅ done

---

## 1. Hosting & domain

- ⬜ Choose a host. Recommended: **WP Engine, Kinsta, or Flywheel** — all have staging environments, one-click migrations, and good WordPress support. Avoid generic shared hosting (GoDaddy, Bluehost) for a credibility-sensitive academic site.
- ⬜ Register `achilefulab.org` (or confirm ownership) and point DNS to the host's nameservers.
- ⬜ Provision SSL certificate (most managed hosts do this automatically via Let's Encrypt).
- ⬜ Confirm HTTPS redirect is working: `http://achilefulab.org` → `https://achilefulab.org`.
- ⬜ Set up `www` redirect: `www.achilefulab.org` → `achilefulab.org` (or vice versa — pick one, be consistent).

---

## 2. Migration

- ⬜ Export the local database: from LocalWP's site shell run `wp db export db-export.sql`.
- ⬜ Import the database on production and run a URL search-replace: `wp search-replace 'achilefu-lab.local' 'achilefulab.org' --all-tables`.
- ⬜ Deploy files via git (clone repo to production) **or** use a migration plugin (All-in-One WP Migration / Duplicator). If using git: `wp-content/uploads/` is tracked, so it comes along automatically.
- ⬜ Verify `wp-content/uploads/` images are loading on production.

---

## 3. wp-config.php (production values)

`wp-config.php` is gitignored — the production server needs its own copy. Never copy the local one.

- ⬜ Set production DB credentials (`DB_NAME`, `DB_USER`, `DB_PASSWORD`, `DB_HOST`).
- ⬜ Generate fresh security keys and salts: https://api.wordpress.org/secret-key/1.1/salt/
- ⬜ Set `define('WP_DEBUG', false);` — never true on production.
- ⬜ Set `define('WP_DEBUG_LOG', false);`
- ⬜ Set `define('DISALLOW_FILE_EDIT', true);` — disables the theme/plugin editor in WP admin (security best practice).
- ⬜ Set `define('WP_HOME', 'https://achilefulab.org');` and `define('WP_SITEURL', 'https://achilefulab.org');`

---

## 4. WordPress admin settings

- ⬜ **Settings → General**: confirm Site URL and WordPress Address are `https://achilefulab.org`.
- ⬜ **Settings → General**: update admin email to `contact@achilefulab.org` (or a real monitored inbox).
- ⬜ **Settings → Reading**: uncheck **"Discourage search engines from indexing this site"** — this is on by default in dev and will tank SEO if left on.
- ✅ **Settings → Reading**: Home set as static front page, Blog set as posts page (done 2026-05-10).
- ⬜ **Settings → Discussion**: review comment settings (likely disable comments entirely for a lab site).
- ✅ Remove "Sample Page" — deleted during development (2026-05-10).
- ⬜ Remove "Hello world!" post and default "Uncategorized" category.

---

## 5. User accounts

- ⬜ Delete or demote the default `admin` username — it's the first thing bots try.
- ⬜ Ensure all real admin accounts use strong, unique passwords.
- ⬜ Remove any test/placeholder user accounts created during development.
- ⬜ Confirm Dr. Achilefu has an account at the appropriate role level if he needs access.

---

## 6. Email

- ⬜ Configure **WP Mail SMTP** with real SMTP credentials for `contact@achilefulab.org`. Options: Google Workspace SMTP, SendGrid, Postmark (SendGrid/Postmark recommended for reliability).
- ⬜ Set SPF and DKIM DNS records for `achilefulab.org` so outgoing emails don't land in spam.
- ⬜ Send a test email from WP Mail SMTP's test tool and confirm delivery.
- ⬜ Test the contact form (WPForms) end-to-end: submit → email arrives at the right inbox.

---

## 7. Plugins

- ⬜ Deactivate and delete any dev-only or test plugins not needed on production.
- ⬜ Verify all active plugins are up to date.
- ⬜ Configure **Yoast SEO**: set site name, social profiles, upload OG image.
- ⬜ Configure **W3 Total Cache** for production: enable page cache, browser cache, minify CSS/JS. (Local settings are intentionally light — production needs full caching.)
- ⬜ If using a CDN (Cloudflare, etc.), configure W3TC's CDN settings.

---

## 8. SEO & analytics

- ⬜ Submit `https://achilefulab.org/sitemap_index.xml` (Yoast auto-generates this) to **Google Search Console**.
- ⬜ Add Google Search Console verification meta tag via Yoast → General → Webmaster Tools.
- ⬜ Set up **Google Analytics 4** property for `achilefulab.org` and add the tracking snippet (via a plugin or Kadence's built-in scripts field).
- ⬜ Confirm no `noindex` tags are leaking onto public pages.

---

## 9. Security

- ⬜ Confirm file permissions on production: `755` for directories, `644` for files, `600` for `wp-config.php`.
- ⬜ Delete `readme.html` and `license.txt` from the WordPress root — they expose the WP version number.
- ⬜ Install a login protection plugin (e.g. **Limit Login Attempts Reloaded**) or configure host-level brute-force protection.
- ⬜ Disable XML-RPC if not needed: add `add_filter('xmlrpc_enabled', '__return_false');` to the child theme's `functions.php`.
- ⬜ Verify no debug info is exposed at any public URL.

---

## 10. Performance

- ⬜ Run a **Lighthouse** audit (Chrome DevTools → Lighthouse) on the home page. Target: Performance ≥ 90, Accessibility ≥ 90.
- ⬜ Confirm all images have been compressed before upload (no file over ~500KB).
- ⬜ Confirm DM Sans loads with `font-display: swap` — verify in Kadence's Google Font settings (see DESIGN.md §3).
- ⬜ Check Time to First Byte (TTFB) — if over 600ms, review W3TC / hosting tier.

---

## 11. Content & links

- ⬜ Audit every internal link — confirm none point to `achilefu-lab.local`.
- ⬜ Audit every external link (LinkedIn profiles, UTSW page, Google Scholar, publication DOIs) — confirm they open and are correct.
- ⬜ Confirm all headshots and lab images load at correct sizes.
- ⬜ Proofread every page. Names, titles, and affiliations are especially error-prone.
- ⬜ Confirm the Publications and Patents pages are pulling correctly (when those features are built).

---

## 12. Legal & compliance

- ⬜ Add a **Privacy Policy** page (required if using Google Analytics or any form that collects email). WordPress generates a draft at Settings → Privacy.
- ⬜ Confirm the contact form (WPForms) does not store submissions with personally identifiable information beyond what's necessary.
- ⬜ If the site will have EU visitors: evaluate whether a cookie consent banner is needed (Google Analytics = yes).

---

## 13. Backups

- ⬜ Configure automated daily backups on the production host (most managed hosts include this — verify it's on).
- ⬜ Do a manual backup immediately after go-live and confirm restore works.

---

## 14. Lab Calendar pipeline

> Architecture decision recorded in [DEVLOG.md §4 entry "Decision: Lab Calendar pipeline via invite-as-guest pattern"](DEVLOG.md). Summary: lab members invite a dedicated Google Calendar mailbox ("the labcal mailbox") as a guest on events they want public; the website subscribes to that mailbox's public calendar feed.
>
> ⚠️ The literal email address for the labcal mailbox is intentionally kept out of this document and out of every other file in the repo. It is private operational info — store it in the team password manager only.

**Provision the mailbox**
- ⬜ Create the dedicated Google Workspace account on the `achilefulab.org` domain (Workspace preferred over free Gmail for brand-domain address + org-level invite filtering). Display name something like "Achilefu Lab Calendar."
- ⬜ Store the account credentials in the team password manager. Add a recovery email and recovery phone owned by the lab (not a personal account that could leave with a former member).
- ⬜ Sign into the account and complete first-run setup; accept Calendar terms.

**Configure auto-accept**
- ⬜ Calendar Settings → Event settings → "Automatically add invitations" → set to **"Yes, even if I have not responded to the invitation."**
- ⬜ Send a test invite from a different Google account to the labcal mailbox. Confirm the event appears on labcal's calendar within a few minutes with no manual acceptance.

**Lock down the spam surface**
- ⬜ Workspace Admin Console → Apps → Google Workspace → Calendar → External sharing options for primary calendars: restrict invites from outside the org if possible, OR
- ⬜ Workspace Admin Console → Apps → Calendar → "Who can invite users to events" / domain allowlist — restrict to `*.utsouthwestern.edu` and `achilefulab.org` if the org-level toggle exists in your Workspace tier.
- ⬜ If the above isn't available on your Workspace tier, instead: keep the labcal address strictly internal (never publish it on the site, in code, in docs, or in the contact form). Periodically eyeball the calendar (e.g. monthly) for spam invites and delete.

**Publish the calendar**
- ⬜ Settings for the labcal account's primary calendar → "Access permissions for events" → check **"Make available to public"** (See all event details).
- ⬜ Copy the public iCal URL and the Calendar ID (Settings → Integrate calendar). Both go in the password manager alongside the credentials.

**Wire the website**
- ⬜ Install + activate the **Simple Calendar** plugin (formerly "Google Calendar Events"). Settings → Simple Calendar → API key (free Google API key with Calendar API enabled).
- ⬜ Create a new feed in Simple Calendar pointing at the labcal Calendar ID. Set cache to 4–6 h (balances ICS latency vs server load).
- ⬜ Update `wp-content/themes/kadence-child/page-lab-calendar.php` to render the Simple Calendar shortcode where the current "Calendar coming soon" placeholder sits. Apply theme styling on the calendar markup to match the rest of `.al-inner-page`.
- ⬜ Add a short FAQ block on the page for lab members: "How does an event end up here? Invite the labcal mailbox as a guest on your event — that's it. Reach out to Krish/admin for the address."

**Verify end-to-end**
- ⬜ Create a test event in a lab member's calendar with the labcal mailbox as a guest.
- ⬜ Wait for the plugin's cache to refresh (force-clear via the plugin if needed).
- ⬜ Confirm the event renders correctly on `/lab-calendar/` with the right title, date, time, and any description.
- ⬜ Edit the test event (move the time), confirm the update propagates on the next refresh.
- ⬜ Cancel the test event, confirm it disappears.

---

## 15. Media gallery seeding

> Architecture documented in [CONTENT.md → PAGE: Media](CONTENT.md), display contract in [DESIGN.md §7.1](DESIGN.md), implementation in [DEVLOG.md → v2.7.0 entry](DEVLOG.md). Workflow: lab admins add photos via **WP admin → Gallery Photos → Add New**. Photos auto-appear on `/media/` and the matching subpage immediately on publish — no per-page editing required.

**Why this section exists**
The `/media/` hub and its three subpages (`/media-research/`, `/media-people/`, `/media-events/`) are wired but **empty**. Without at least a few photos per category, the live site shows "Photos coming soon." on every gallery page. Visitors don't read empty-state copy charitably — seed first, launch second.

**Per-photo upload checklist**
For each photo added via Gallery Photos → Add New:
- ⬜ **Title** — the description (e.g. "Confocal microscopy of tumor margin"). Single line.
- ⬜ **Photo Category** — radio: Research / People / Events. Determines which subpage it lands on.
- ⬜ **Buckets** — one tag (photographer for Research, where/why for People, event name for Events).
- ⬜ **Captured Date** — verify the auto-filled EXIF date is correct, or set manually for screenshots/scans.
- ⬜ **The Photo** — Featured Image. **Required** — photos without a featured image are silently skipped at render.

**Before launch**
- ⬜ Add **at least 3 photos per category** (Research / People / Events) so the hub's three teaser rows render full (each row shows the 3 newest captured-date photos).
- ⬜ Add **enough photos per subpage to fill at least 1–2 grid rows** (the subpage gallery is `repeat(auto-fill, minmax(280px, 1fr))`, so 4–9 photos depending on viewport).
- ⬜ Pre-compress all photos to < 500 KB and crop to square (1:1) before upload. See [DESIGN.md §7.1](DESIGN.md) for full image specs.
- ⬜ Confirm each photo carries an EXIF date OR has Captured Date set manually. The query orders by captured date desc; ties fall back to publish date.
- ⬜ Verify the **All Gallery Photos** admin list view: every row has a thumbnail (the leftmost column). Blank thumbnail = no featured image = won't render on the front end.

**Verify end-to-end**
- ⬜ Visit `/media/` — confirm all three rows are populated.
- ⬜ Visit each subpage (`/media-research/`, `/media-people/`, `/media-events/`) — confirm full gallery renders, ordered newest captured-date first.
- ⬜ Desktop: hover any photo — confirm the dark overlay fades in over the bottom of the image with description + bucket · date.
- ⬜ Mobile (or DevTools touch mode): tap any photo — confirm the lightbox opens with the photo and metadata centered below. Confirm × button, backdrop tap, and Esc all close it.

**Worth knowing**
- **Single category per photo.** If you want a photo on multiple subpages (e.g. a conference photo that's also a great group portrait), upload it twice with different categories. The CPT's category metabox is radio-only by design.
- **Sam's blog uploads are unaffected.** The Gallery Photos workflow is a completely separate admin section — uploading an image inline in a Journal post never touches any gallery field.
- **No edits to PHP templates** are required to add or remove photos. The subpages query the CPT live.
- **EXIF GPS coordinates and device IDs are ignored** by the save hook (only `created_timestamp` is read). Safe to upload phone photos without stripping EXIF, though stripping is still good privacy hygiene.

---

## 16. Post-launch

- ⬜ Update `docs/DEVLOG.md` with a go-live entry (date, host, domain, what was migrated).
- ⬜ Update `docs/DESIGN.md` if any visual decisions were finalized during the migration process.
- ⬜ Share the URL with the team and Dr. Achilefu for a final review pass before announcing publicly.
- ⬜ Announce to UTSW / Ian for coordination with the UTSW page.

---

## Open questions (resolve before launch)

- [ ] Which host? (WP Engine / Kinsta / Flywheel / other)
- [ ] Who owns the `achilefulab.org` domain registration?
- [ ] Which SMTP provider for outgoing email?
- [ ] Does the lab want Google Analytics, or a privacy-first alternative (Fathom, Plausible)?
- [ ] Cookie consent banner — yes or no?
- [ ] Who gets admin access on production (Krish, Salmon, Dr. Achilefu)?
