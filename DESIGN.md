---
name: Komorebi Retreat
colors:
  surface: '#fbfbe2'
  surface-dim: '#dbdcc3'
  surface-bright: '#fbfbe2'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f5f5dc'
  surface-container: '#efefd7'
  surface-container-high: '#eaead1'
  surface-container-highest: '#e4e4cc'
  on-surface: '#1b1d0e'
  on-surface-variant: '#424844'
  inverse-surface: '#303221'
  inverse-on-surface: '#f2f2d9'
  outline: '#727973'
  outline-variant: '#c2c8c2'
  surface-tint: '#486554'
  primary: '#173326'
  on-primary: '#ffffff'
  primary-container: '#2e4a3b'
  on-primary-container: '#9ab9a6'
  inverse-primary: '#aeceba'
  secondary: '#795900'
  on-secondary: '#ffffff'
  secondary-container: '#ffbf00'
  on-secondary-container: '#6d5000'
  tertiary: '#3e2a16'
  on-tertiary: '#ffffff'
  tertiary-container: '#56402a'
  on-tertiary-container: '#cbac90'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#caead5'
  primary-fixed-dim: '#aeceba'
  on-primary-fixed: '#042014'
  on-primary-fixed-variant: '#314d3d'
  secondary-fixed: '#ffdfa0'
  secondary-fixed-dim: '#fbbc00'
  on-secondary-fixed: '#261a00'
  on-secondary-fixed-variant: '#5c4300'
  tertiary-fixed: '#fedcbe'
  tertiary-fixed-dim: '#e1c1a4'
  on-tertiary-fixed: '#291806'
  on-tertiary-fixed-variant: '#59422c'
  background: '#fbfbe2'
  on-background: '#1b1d0e'
  surface-variant: '#e4e4cc'
typography:
  headline-xl:
    fontFamily: Noto Serif
    fontSize: 40px
    fontWeight: '700'
    lineHeight: '1.4'
    letterSpacing: 0.05em
  headline-lg:
    fontFamily: Noto Serif
    fontSize: 32px
    fontWeight: '600'
    lineHeight: '1.4'
    letterSpacing: 0.02em
  headline-md:
    fontFamily: Noto Serif
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.5'
  headline-sm:
    fontFamily: Noto Serif
    fontSize: 20px
    fontWeight: '600'
    lineHeight: '1.5'
  body-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.8'
  body-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.7'
  body-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 14px
    fontWeight: '400'
    lineHeight: '1.6'
  label-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 14px
    fontWeight: '600'
    lineHeight: '1.2'
    letterSpacing: 0.1em
  label-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 12px
    fontWeight: '500'
    lineHeight: '1.2'
  headline-xl-mobile:
    fontFamily: Noto Serif
    fontSize: 30px
    fontWeight: '700'
    lineHeight: '1.3'
  headline-lg-mobile:
    fontFamily: Noto Serif
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.3'
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 8px
  xs: 4px
  sm: 12px
  md: 24px
  lg: 48px
  xl: 80px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 64px
---

## Brand & Style

The design system is anchored in the concept of **"Slow time spent in an old folk house" (古民家で過ごす、ゆっくりとした時間)**. It bridges traditional Japanese aesthetics with modern functionalism, creating a digital environment that feels tactile, breathable, and deeply restorative.

The visual style is **Modern Japanese (和モダン)** with a hint of **Retro** charm. It emphasizes:
- **Quietude:** Generous negative space inspired by *Ma* (間).
- **Organic Texture:** A color palette and layering system that mimics natural materials like plaster walls, wood, and washi paper.
- **Human Connection:** Soft edges and warm tones that evoke the feeling of tea service and soft sunlight through shoji screens.

This design system targets users seeking a sanctuary from the high-velocity digital world, prioritizing legibility and a sense of calm over frantic interaction.

## Colors

The palette is derived from natural earth tones and traditional Japanese pigments. 

- **Primary (深緑 - Deep Green):** Used for primary actions and signifying growth and stability.
- **Secondary (琥珀 - Amber):** An accent color used sparingly to draw attention, reminiscent of lantern light or aged wood sap.
- **Tertiary (焦げ茶 - Dark Brown):** Used for borders, structural lines, and secondary text to provide a grounded, wooden feel.
- **Neutral (アイボリー - Ivory):** The primary surface color, mimicking the warmth of traditional earth-plaster walls.
- **Background (ベージュ - Beige):** Used for base layers and depth to prevent the starkness of pure white.
- **Text (墨色 - Sumi-iro):** A softened black that provides high legibility without the harshness of #000.

## Typography

The typographic hierarchy balances the classical elegance of **Noto Serif** (Mincho-style) for headlines with the modern, approachable clarity of **Plus Jakarta Sans** for functional text.

- **Headlines:** Use Noto Serif to establish an authoritative yet poetic voice. Increase letter spacing slightly for XL headlines to evoke a sense of "air."
- **Body:** Plus Jakarta Sans provides a friendly, rounded sans-serif feel that remains highly readable at longer lengths. The line height is intentionally generous (1.7 - 1.8) to facilitate a relaxed reading pace.
- **Labels:** Set in all-caps or with increased letter spacing for small UI elements to maintain structure without feeling heavy.

## Layout & Spacing

This design system uses a **Fluid Grid** model with a focus on generous vertical rhythms and asymmetrical balance. 

- **The 8px Grid:** All components and spacing are built on an 8px base unit to ensure consistent proportions.
- **Breathability:** On desktop, use wide margins (64px+) and large vertical gaps (80px+) between sections to mimic the open layout of a Japanese home.
- **Desktop Layout:** A 12-column grid with 24px gutters. Use offset placements (e.g., content spanning columns 3 through 10) to create a more editorial, relaxed feel.
- **Mobile Layout:** A 4-column grid with 16px margins. Stack elements vertically but maintain the 24px-48px padding between distinct modules to avoid clutter.

## Elevation & Depth

Depth is conveyed through **Tonal Layers** and **Soft Textures** rather than heavy shadows.

- **Layering:** The base layer is Beige (#E5D3B3). Interactive cards and containers use Ivory (#F5F5DC) to appear as if they are resting on top.
- **Shadows:** Use extremely subtle, diffused shadows with a hint of the tertiary color (#4B3621) to ground elements. Shadows should feel like ambient light hitting a physical object, not a digital glow.
- **Stroke:** Use thin, low-contrast borders (1px) in #4B3621 at 15% opacity to define edges where elevation is not required.
- **Separators:** Use horizontal lines that mimic the thin wooden rails of a Shoji screen.

## Shapes

The shape language is characterized by **Softness and Organic Geometry**.

- **Standard Radius:** 8px (0.5rem) is the default for buttons, input fields, and small cards. This removes the "sharpness" of modern technology, making the UI feel tactile and safe.
- **Large Radius:** 16px (1rem) for larger containers and modal sheets to emphasize the "gentle" nature of the brand.
- **Pill Shapes:** Used exclusively for tags and chips to provide a distinct contrast against the mostly rectangular structural elements.

## Components

- **Buttons:**
    - **Primary:** Filled with Deep Green (#2E4A3B), white or ivory text. 8px rounded corners.
    - **Secondary:** Outlined with #4B3621 at 40% opacity, Amber (#FFBF00) text for emphasis on hover.
- **Cards:**
    - Ivory (#F5F5DC) background with a very subtle 1px border in #4B3621 (20% opacity). Use generous internal padding (24px).
- **Input Fields:**
    - Soft beige background (#E5D3B3) with a bottom-border only (2px, #4B3621) or a fully enclosed 8px rounded box with a subtle inner shadow to feel "pressed" into the surface.
- **Chips & Tags:**
    - Pill-shaped with Amber (#FFBF00) backgrounds for high-priority alerts or Deep Green (#2E4A3B) for categorization.
- **Lists:**
    - Separated by thin, 1px horizontal lines in #4B3621 at 10% opacity. Include a "dot" icon or a small Japanese-inspired glyph as a bullet point.
- **Navigation:**
    - A top-level bar that uses Noto Serif for menu items. Use a "sliding underline" effect in Amber (#FFBF00) for active states.