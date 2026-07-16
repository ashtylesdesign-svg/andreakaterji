# Andrea Katerji Portal 🌌

**Donde la ciencia se encuentra con la conciencia, nace la transformación**

## Overview

This is the central portal for the Andrea Katerji ecosystem, harmoniously integrating two universes:
- **MyOwnDoc Functional** - Rigorous science and biomedical data
- **The Flow Method** - Expanded consciousness and emotional intelligence

## Features

### 🎨 Design Philosophy
- **Cosmic Aesthetic**: Dark, premium, and visually stunning
- **Dual Universe Integration**: Science (technical/cyan) + Consciousness (organic/violet)
- **Premium Typography**: Playfair Display for headings, Inter for body
- **Interactive Particles**: Mouse-responsive particle system
- **Smooth Animations**: Intentional, non-distracting transitions

### 🧭 Navigation
- **Orbital Header**: Logo-centered with radial menu distribution
- **Conceptual Icons**: Each menu item has a symbolic icon
- **Color-Coded Hover**: Science items glow cyan, consciousness items glow violet
- **Mobile Responsive**: Hamburger menu for mobile devices

### ✨ Hero Section
- **Powerful Headline**: Emotional and memorable messaging
- **Dual CTAs**: 
  - MyOwnDoc Functional (sharp, technical styling)
  - The Flow Method (organic, rounded styling)
- **Cosmic Background**: Gradient orbs and particle effects

### 🎯 Accessibility
- High contrast ratios (4.5:1 minimum)
- Keyboard navigation support
- ARIA labels for screen readers
- Reduced motion support
- Focus indicators

## Color Palette

```css
/* Base Colors */
--color-black: #0A0A15
--color-white: #FFFFFF
--color-lunar: #E0E0E0

/* Science Universe */
--color-cyan: #00F7FF
--color-turquoise: #00FFD1
--color-mod-purple: #481F71
--color-mod-sky: #6EC6D2

/* Consciousness Universe */
--color-violet: #9D4EDD
--color-gold: #FFD700
--color-flow-petrol: #3A6B73
--color-flow-sand: #E6D6B8
```

## Technology Stack

- **HTML5**: Semantic, accessible markup
- **CSS3**: Modern features (Grid, Flexbox, Custom Properties, Animations)
- **Vanilla JavaScript**: No dependencies, pure performance
- **Canvas API**: Interactive particle system

## File Structure

```
andreakaterji/
├── index.html          # Main HTML structure
├── styles.css          # Complete styling system
├── script.js           # Interactive functionality
├── README.md           # This file
└── assets/             # (Optional) Images, fonts, audio
    └── 432hz-ambient.mp3  # Optional ambient sound
```

## Local Development

### Option 1: Python Server
```bash
# Python 3
python -m http.server 8000

# Python 2
python -m SimpleHTTPServer 8000
```

### Option 2: PHP Server
```bash
php -S localhost:8000
```

### Option 3: Node.js (http-server)
```bash
npx http-server -p 8000
```

Then open: `http://localhost:8000`

## Interactive Features

### Particle System
- 100 interactive particles (responsive to screen size)
- Mouse attraction effect (150px radius)
- Particle connections within 120px
- Color-coded particles matching brand palette

### Mobile Menu
- Hamburger toggle animation
- Smooth slide-in transition
- Auto-close on item selection
- ESC key support

### CTA Animations
- **Science Button**: Linear glow sweep effect
- **Consciousness Button**: Radial expansion effect
- Magnetic hover effect (follows cursor)

### Loading Animation
- Light line travels from top to CTAs on page load
- 2-second duration with smooth easing

### Ambient Sound (Optional)
- 432Hz frequency audio
- User-activated (requires interaction)
- Toggle button in bottom-right corner
- Easily disabled

## Responsive Breakpoints

- **Desktop**: Full orbital navigation, all features
- **Tablet** (≤1024px): Simplified horizontal navigation
- **Mobile** (≤768px): Hamburger menu, stacked CTAs

## Performance Optimizations

- Debounced scroll events
- RequestAnimationFrame for animations
- Particle count scales with screen size
- Lazy loading ready
- SVG icons (scalable, lightweight)

## Browser Support

- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Customization

### Adding New Navigation Items
Edit the `orbital-nav` section in `index.html` and add corresponding styles in `styles.css`.

### Changing Colors
Modify CSS custom properties in `:root` selector in `styles.css`.

### Adjusting Particles
Modify `ParticleSystem` class parameters in `script.js`:
- `particleCount`: Number of particles
- `radius`: Particle size
- Mouse attraction distance and force

## Deployment

This is a static site and can be deployed to:
- Netlify
- Vercel
- GitHub Pages
- Any static hosting service

## Future Enhancements

- [ ] Add sections for MyOwnDoc and Flow Method details
- [ ] Integrate blog/Palabra Viva section
- [ ] Add shop/products showcase
- [ ] Contact form with backend integration
- [ ] Multi-language support (EN/ES)
- [ ] Dark/Light mode toggle (currently dark-only)

## Credits

**Designed for**: Andrea Katerji  
**Concept**: Integration of science and consciousness  
**Philosophy**: Where biomedical data meets emotional intelligence

---

*"Esta no es una landing page más. Es un portal de entrada a una nueva forma de entender la salud humana."*

🌌 ✨ 🧬
