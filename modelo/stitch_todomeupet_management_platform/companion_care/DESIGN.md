---
name: Companion Care
colors:
  surface: '#f8f9ff'
  surface-dim: '#cbdbf5'
  surface-bright: '#f8f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#eff4ff'
  surface-container: '#e5eeff'
  surface-container-high: '#dce9ff'
  surface-container-highest: '#d3e4fe'
  on-surface: '#0b1c30'
  on-surface-variant: '#3c4947'
  inverse-surface: '#213145'
  inverse-on-surface: '#eaf1ff'
  outline: '#6c7a77'
  outline-variant: '#bbcac6'
  surface-tint: '#006b5f'
  primary: '#006b5f'
  on-primary: '#ffffff'
  primary-container: '#14b8a6'
  on-primary-container: '#00423b'
  inverse-primary: '#4fdbc8'
  secondary: '#9d4300'
  on-secondary: '#ffffff'
  secondary-container: '#fd761a'
  on-secondary-container: '#5c2400'
  tertiary: '#006e2f'
  on-tertiary: '#ffffff'
  tertiary-container: '#0ebd57'
  on-tertiary-container: '#00441a'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#71f8e4'
  primary-fixed-dim: '#4fdbc8'
  on-primary-fixed: '#00201c'
  on-primary-fixed-variant: '#005048'
  secondary-fixed: '#ffdbca'
  secondary-fixed-dim: '#ffb690'
  on-secondary-fixed: '#341100'
  on-secondary-fixed-variant: '#783200'
  tertiary-fixed: '#6bff8f'
  tertiary-fixed-dim: '#4ae176'
  on-tertiary-fixed: '#002109'
  on-tertiary-fixed-variant: '#005321'
  background: '#f8f9ff'
  on-background: '#0b1c30'
  surface-variant: '#d3e4fe'
typography:
  headline-xl:
    fontFamily: Plus Jakarta Sans
    fontSize: 40px
    fontWeight: '700'
    lineHeight: 48px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
    letterSpacing: -0.02em
  headline-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.01em
  label-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 12px
    fontWeight: '500'
    lineHeight: 16px
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
  md: 16px
  lg: 24px
  xl: 32px
  container-max: 1280px
  gutter: 24px
---

## Brand & Style

The brand personality of the design system is defined by a balance of clinical reliability and domestic warmth. It targets pet owners who view their animals as family members, requiring a platform that feels as safe as a veterinary clinic but as approachable as a neighborhood park.

The visual style follows a **Modern Corporate** aesthetic infused with **Soft Minimalism**. This approach prioritizes clarity and organization—essential for health records—while using gentle curves and organic shapes to evoke affection and empathy. The interface should feel "breathable," utilizing generous whitespace to reduce the cognitive load often associated with medical or administrative tasks.

## Colors

The palette is anchored by a warm, caring Teal as the primary color, chosen to bridge the gap between "medical blue" and "natural green." This provides a sense of calm and professional trust. The secondary accent is a vibrant, friendly Orange, used strategically to draw attention to proactive care actions (like reminders or updates). A soft Health Green is reserved for status indicators, safety confirmations, and successful health logs.

Backgrounds must remain clean, using a pure white for primary surfaces and a very light cool-gray for secondary containers to provide subtle contrast without introducing visual noise.

## Typography

The design system utilizes **Plus Jakarta Sans** across all levels. Its modern, geometric construction is softened by subtle rounded terminals, which perfectly mirrors the brand's friendly yet professional tone. 

Headlines utilize a tighter letter-spacing and heavier weights to command authority and organization. Body text maintains a generous line-height to ensure maximum readability for health documentation and instructions. Labels use a slightly increased weight to ensure they remain distinct when used within dense UI components like health charts or identification cards.

## Layout & Spacing

The design system employs a **Fixed Grid** model for desktop displays, centering content within a 1280px maximum width to ensure readability isn't compromised on ultra-wide monitors. On mobile and tablet devices, the layout transitions to a fluid model with a 12-column structure (desktop) and a 4-column structure (mobile).

The spacing rhythm is built on an 8px base unit. This ensures a consistent vertical cadence. Larger 32px (xl) gaps are used to separate major content sections, while 16px (md) is the standard for internal component padding to maintain a comfortable, "airy" feel.

## Elevation & Depth

To convey safety and modern organization, the design system uses **Ambient Shadows** and **Tonal Layers**. 

Depth is expressed through extra-diffused, low-opacity shadows that use a slight tint of the primary Teal color (e.g., 5-8% opacity). This prevents the UI from feeling "muddy." Surfaces are layered: the main background is the lowest level, while "Cards" sit on the first elevation layer with a soft shadow. Interaction elements like "Hovered Cards" or "Modals" occupy the highest level with a more pronounced, wider shadow spread to indicate their temporary and prominent nature.

## Shapes

The shape language is defined by a consistent **Rounded** philosophy. Standard components like input fields and buttons utilize an 8px (0.5rem) radius. Larger containers, such as pet profile cards or health dashboard widgets, utilize a 16px (1rem) radius to feel more approachable and less "institutional."

Iconography should follow this logic, utilizing rounded ends and soft corners rather than sharp angles. QR codes should be framed in containers with the standard 8px radius to integrate them into the soft visual language of the system.

## Components

**Buttons:** Primary buttons are solid Teal with white text and 8px rounded corners. Secondary buttons use a ghost style with a Teal border. Accent buttons (for "Emergency" or "Add" actions) use the Orange palette.

**Cards:** These are the primary vessels for pet data. They must feature a white background, the standard soft shadow, and a 16px corner radius. Use a top-accent bar in Teal or Orange to categorize card types (e.g., Medical vs. Identification).

**Chips/Badges:** Small, pill-shaped indicators used for pet traits or health status (e.g., "Vaccinated," "Neutered"). These use a low-saturation background of the status color with high-saturation text.

**Input Fields:** Clean, light-gray backgrounds with an 8px radius. On focus, the border transitions to the primary Teal with a soft outer glow.

**Pet-Specific Components:**
- **QR Identity Display:** A dedicated card component designed for high-contrast visibility, framing the QR code with clear "Scan Me" instructions.
- **Health Timeline:** A vertical list component using soft-edged connectors and "Medical Cross" icons to denote historical health events.
- **Iconography:** Custom-styled icons using a 2px stroke weight with rounded caps, specifically focusing on paws, hearts, and medical symbols.