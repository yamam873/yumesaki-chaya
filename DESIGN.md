---
name: Yumesaki Chaya
colors:
  surface: '#faf9f6'
  surface-dim: '#dbdad7'
  surface-bright: '#faf9f6'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f4f3f1'
  surface-container: '#efeeeb'
  surface-container-high: '#e9e8e5'
  surface-container-highest: '#e3e2e0'
  on-surface: '#1a1c1a'
  on-surface-variant: '#4f4537'
  inverse-surface: '#2f312f'
  inverse-on-surface: '#f2f1ee'
  outline: '#817565'
  outline-variant: '#d3c4b2'
  surface-tint: '#7d5700'
  primary: '#5f4100'
  on-primary: '#ffffff'
  primary-container: '#7d5700'
  on-primary-container: '#ffd185'
  inverse-primary: '#f1be65'
  secondary: '#016e0c'
  on-secondary: '#ffffff'
  secondary-container: '#98f988'
  on-secondary-container: '#0f7514'
  tertiary: '#574336'
  on-tertiary: '#ffffff'
  tertiary-container: '#705a4c'
  on-tertiary-container: '#f1d3c1'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#ffdeaa'
  primary-fixed-dim: '#f1be65'
  on-primary-fixed: '#271900'
  on-primary-fixed-variant: '#5f4100'
  secondary-fixed: '#98f988'
  secondary-fixed-dim: '#7ddc6f'
  on-secondary-fixed: '#002201'
  on-secondary-fixed-variant: '#005307'
  tertiary-fixed: '#fbddcb'
  tertiary-fixed-dim: '#dec1b0'
  on-tertiary-fixed: '#27180d'
  on-tertiary-fixed-variant: '#574336'
  background: '#faf9f6'
  on-background: '#1a1c1a'
  surface-variant: '#e3e2e0'
  amber-syrup: '#C68E17'
  forest-moss: '#228B22'
  washi-ivory: '#FAF9F6'
  sumi-ink: '#1A1C1A'
  earthen-brown: '#504535'
typography:
  display-lg:
    fontFamily: Noto Serif
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 64px
    letterSpacing: -0.02em
  display-lg-mobile:
    fontFamily: Noto Serif
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 44px
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Noto Serif
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 36px
  body-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 30px
  body-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 26px
  label-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.05em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 8px
  xs: 0.5rem
  sm: 1rem
  md: 1.5rem
  lg: 3rem
  xl: 5rem
  gutter: 24px
  margin: 32px
---

## Brand & Style

The design system embodies the "Wabi-Sabi" philosophy and "Retro-Modern" aesthetic, bridging the gap between traditional Japanese tea house culture and contemporary digital experiences. It targets an audience seeking tranquility and nostalgic warmth in a fast-paced world.

The visual style is a blend of **Minimalism** and **Tactile** design. It prioritizes "Ma" (negative space) to create visual silence, while using a palette inspired by earth, wood, and syrup to evoke a sensory connection. The result is an interface that feels like a well-loved menu or a quiet afternoon in a historic Kyoto café—intellectual, calm, and grounded.

## Colors

The color palette is derived from natural materials and traditional tea house elements:

- **Primary (Amber):** Inspired by pudding syrup and warm amber. Used for key actions and brand focal points to provide a sense of hospitable warmth.
- **Secondary (Forest Green):** Represents moss-covered gardens and deep tea leaves. Used as a calming accent to reinforce the connection to nature.
- **Tertiary (Earthen Brown):** A desaturated, warm brown used for secondary containers and text variants to avoid the harshness of pure black.
- **Neutral (Ivory):** The foundation of the system, mimicking the texture of earthen walls and traditional Washi paper.

Surface tiers are defined by subtle shifts in lightness (e.g., `surface-container` at #EFEEEB) rather than heavy shadows to maintain a flat, grounded appearance.

## Typography

The typography system juxtaposes the emotional elegance of Serifs with the functional clarity of modern San-Serifs.

- **Headlines (Noto Serif):** Evokes the feel of vintage literary magazines and hand-painted signage. Use for titles and high-level messaging to establish a classic, authoritative tone.
- **Body & Labels (Plus Jakarta Sans):** A friendly, contemporary geometric face that pairs excellently with Japanese Gothic fonts. It ensures high legibility for long-form content and UI controls.
- **Styling Note:** For display headings, slightly tighter letter spacing is encouraged to create a dense, editorial look. Labels utilize increased letter spacing (0.05em) for clarity at small sizes.

## Layout & Spacing

This design system uses a **Fixed-Fluid hybrid grid** model. On desktop, content is constrained to a maximum width to create generous "Ma" (side margins) that focus the eye.

- **Rhythm:** A strict 8px base unit governs all spatial relationships.
- **Gutter & Margins:** A standard 24px gutter maintains separation, while external margins are kept at 32px for desktop and 16px–24px for mobile.
- **Breakpoints:**
  - **Desktop:** Generous vertical spacing (`xl`) between sections to mimic the turning of book pages.
  - **Mobile:** Spacing scales down to `md` or `lg` while preserving white space around key text blocks to avoid a "cramped" digital feel.

## Elevation & Depth

Hierarchy is achieved through **Tonal Layering** rather than intense physical depth.

- **Tiers:** Elements are differentiated by stacking surfaces from `surface-container-low` to `surface-container-high`. Higher importance elements sit on lighter/brighter surfaces.
- **Ambient Shadows:** When a physical lift is required (e.g., for floating action buttons), use a highly diffused, low-opacity shadow tinted with `sumi-ink` (#1A1C1A) at 5-10% opacity. 
- **Outlines:** Low-contrast outlines using `outline-variant` (#D4C4AF) are preferred over shadows for defining cards and containers, referencing the delicate lines of Shouji screen frames.

## Shapes

The shape language is organic and approachable, mirroring the soft edges of hand-crafted ceramics.

- **Corner Radius:** A standard 0.5rem (8px) radius is applied to buttons, cards, and input fields to remove digital sharpness.
- **Pill/Circle:** Full rounding is used for chips and specific decorative elements to reference tea pebbles or traditional wagashi (sweets).
- **Interactive Elements:** Maintain consistent roundedness across all states (default, hover, focus) to preserve the tactile "friendly" feel of the system.

## Components

- **Buttons:** Primary buttons use the Amber (`primary`) background with white text. They should feel substantial but soft. On hover, a subtle darkening of the amber hue provides feedback.
- **Cards:** Defined by `washi-ivory` surfaces and `outline-variant` borders. Padding within cards should be generous (min `md` spacing).
- **Input Fields:** Use a "minimalist retro" approach—either a bottom-only border or a very thin surrounding stroke. Focus states are highlighted by an Amber glow or border-weight increase.
- **Chips:** Highly rounded (Pill-shaped). Use a pale version of Forest Green for background or a subtle stroke to distinguish them from buttons.
- **Lists:** Items are separated by thin, horizontal lines reminiscent of traditional screen slats. Ensure vertical padding is at least `sm` (16px) per item.
- **Vertical Text Utility:** For select headlines or side-labels, implement vertical writing modes (`writing-mode: vertical-rl`) to enhance the Japanese retro-modern atmosphere.