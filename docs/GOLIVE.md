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

## 14. Post-launch

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
