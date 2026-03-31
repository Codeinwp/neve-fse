# Agent Workflow

## Project Overview

Neve FSE is a WordPress Full Site Editing (block-based) theme. It uses HTML block templates (no legacy PHP templating) with 50+ block patterns, 9 FSE templates, 9 template parts, and 7 style variations. It optionally integrates with the Neve parent theme (inheriting CSS variables for colors/typography) and the Otter Blocks companion plugin.

## Build Commands

```bash
yarn build            # Full build (Grunt SCSS + wp-scripts JS + POT)
yarn dev              # Watch mode (Grunt watch + formatters)
yarn build:grunt      # Compile SCSS only (assets/css/src → build)
yarn build:js         # Compile JS only (assets/js/src → build via wp-scripts)
yarn dist             # Build + create distribution ZIP
yarn lint             # Run all linters (ESLint + Stylelint + package.json)
yarn format           # Run all formatters
```

```bash
composer lint          # PHPCS check (WordPress VIP/Core/Extra standards)
composer format        # PHPCBF auto-fix
composer phpunit       # PHPUnit tests (requires WordPress test suite)
```

## Architecture

**PHP entry point:** `functions.php` → `bootstrap()` → `Core::get_instance()`

**Namespace:** `NeveFSE\` maps to `inc/` via PSR-4 autoload (composer.json).

**Key classes in `inc/`:**
- `Core.php` — Singleton hub; registers all hooks, loads other modules
- `Admin.php` — Admin notices (welcome, Otter Blocks promo, survey)
- `Block_Patterns.php` — Registers 50+ patterns from `inc/patterns/` subdirectories
- `Block_Styles.php` — Registers custom block styles
- `Assets_Manager.php` — Enqueues CSS/JS, handles Neve CSS variable inheritance
- `Neve_Mods.php` — Singleton for reading Neve parent theme settings
- `Starter_Content.php` — Default menus and homepage content

**Block patterns** live in `inc/patterns/{layout,loops,page_titles,templates}/` as PHP files returning pattern arrays.

**FSE templates** in `templates/` and `parts/` are HTML files using block markup. Style variations in `styles/` are JSON color/typography overrides.

**theme.json** defines the design system: 7-color palette (with Neve CSS variable fallbacks), 11 bundled variable fonts, fluid typography (6 size presets using `clamp()`), spacing scale, and content/wide widths (740px/1140px).

**Assets pipeline:**
- SCSS: `assets/css/src/` → Grunt sass → PostCSS → `assets/css/build/` (+ RTL via rtlcss)
- JS: `assets/js/src/` → wp-scripts → `assets/js/build/` (with `.asset.php` dependency manifests)

**Onboarding templates** in `library/` provide starter layouts for Otter Blocks integration.

## Code Quality

- **PHP:** PHPCS with WordPress VIP-Go standards, PHP 5.6+ compatibility. Config in `phpcs.xml`.
- **JS:** `@wordpress/eslint-plugin` recommended config (`.eslintrc`)
- **SCSS:** `@wordpress/stylelint-config/scss` (`.stylelintrc.json`)
- **Pre-commit:** lint-staged runs formatters + linters on staged files
- **Text domain:** `neve-fse` for all translatable strings

## Dependencies

- **Themeisle SDK** (`vendor/codeinwp/themeisle-sdk`) — Analytics, notices, NPS
- **Otter Blocks** (optional plugin) — Enhanced block patterns and onboarding
- **Neve theme** (optional) — CSS variable inheritance for seamless color/typography integration
