# Developer Portfolio

A modern, developer-focused portfolio website built with Laravel, Livewire, and Tailwind CSS.

## Features

### 🎨 Design
- **Developer-focused dark theme** with terminal green accents
- **Responsive design** optimized for all devices
- **Terminal-style elements** and code-inspired aesthetics
- **Smooth animations** and transitions
- **Monospace typography** (Fira Code) for headings

### 📄 Pages

#### Home (Hero Page)
- Animated terminal window with developer info
- Interactive tech stack badges
- Call-to-action buttons
- About section with feature cards

#### Skills Page
- Organized by categories:
  - Backend Development (PHP, Laravel, Node.js, Python)
  - Frontend Development (JavaScript, Vue.js, Livewire, React)
  - Database & Storage (MySQL, PostgreSQL, Redis, MongoDB)
  - DevOps & Tools (Git, Docker, CI/CD, AWS)
  - Methodologies & Practices
- Visual skill level indicators
- Interactive hover effects

#### Projects Page
- 6 placeholder projects with:
  - E-Commerce Platform
  - Real-Time Chat System
  - API Integration Dashboard
  - Task Management System
  - SaaS Subscription Platform
  - Content Management System
- Project cards with tech stack badges
- GitHub and Live Demo links (placeholders)
- Filter buttons by category

#### Contact Page
- Livewire-powered contact form with:
  - Real-time validation
  - Success messages
  - Loading states
- Contact information cards
- Social media links
- FAQ section in terminal style
- Availability status

### 🛠️ Tech Stack

**Backend:**
- Laravel 12
- Livewire 3.6
- PHP 8.2+

**Frontend:**
- Tailwind CSS 3
- Vite 7
- Alpine.js (via Livewire)

**Fonts:**
- Inter (body text)
- Fira Code (monospace/headings)

## Setup Instructions

1. **Install Dependencies:**
   ```bash
   composer install
   npm install
   ```

2. **Environment Setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Build Assets:**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```

4. **Run the Application:**
   ```bash
   php artisan serve
   ```

5. Visit `http://localhost:8000` in your browser

## Customization

### Personal Information
Update placeholder content in:
- `resources/views/home.blade.php` - Name, title, bio
- `resources/views/contact.blade.php` - Email, social links
- `resources/views/components/portfolio/navbar.blade.php` - Brand name
- `resources/views/components/portfolio/footer.blade.php` - Contact info

### Projects
Edit `resources/views/projects.blade.php` to add your real projects:
- Replace placeholder project details
- Update tech stack badges
- Add real GitHub/demo links
- Upload project images to `public/images/projects/`

### Skills
Modify `resources/views/skills.blade.php` to reflect your actual skills:
- Adjust skill percentages
- Add/remove technologies
- Update descriptions

### Theme Colors
Customize in `tailwind.config.js`:
- Primary accent color (currently emerald-500)
- Background colors
- Typography settings

### Contact Form
The Livewire contact form (`app/Livewire/ContactForm.php`) currently shows a success message. To make it functional:
- Add email sending logic in the `submit()` method
- Or save messages to a database
- Configure mail settings in `.env`

## File Structure

```
my-portfolio/
├── app/
│   └── Livewire/
│       └── ContactForm.php          # Contact form component
├── resources/
│   ├── css/
│   │   └── app.css                  # Custom CSS with utility classes
│   ├── js/
│   │   └── app.js
│   └── views/
│       ├── components/
│       │   ├── layout/
│       │   │   └── portfolio.blade.php   # Main layout
│       │   └── portfolio/
│       │       ├── navbar.blade.php      # Navigation
│       │       └── footer.blade.php      # Footer
│       ├── livewire/
│       │   └── contact-form.blade.php    # Contact form view
│       ├── home.blade.php                # Hero/home page
│       ├── skills.blade.php              # Skills showcase
│       ├── projects.blade.php            # Projects gallery
│       └── contact.blade.php             # Contact page
├── routes/
│   └── web.php                      # Portfolio routes
└── tailwind.config.js               # Tailwind configuration
```

## Routes

- `/` - Home (Hero page)
- `/skills` - Skills & Technologies
- `/projects` - Projects Portfolio
- `/contact` - Contact Form

## Color Scheme

- **Primary:** Emerald (#10b981)
- **Background:** Gray-950 (#030712)
- **Cards:** Gray-900 (#111827)
- **Text:** Gray-100 (primary), Gray-400 (secondary)
- **Borders:** Gray-800 (#1f2937)
- **Accents:** Terminal green variations

## Developer Notes

### Placeholder Content
All content uses "John Developer" as a placeholder. Replace with your actual:
- Name and title
- Email and social links
- Project descriptions and links
- Skills and proficiency levels
- Bio and personal information

### Real Contact Form
To enable actual email sending:
1. Configure mail settings in `.env`
2. Update `ContactForm.php` to send emails using Laravel's Mail facade
3. Or integrate with services like SendGrid, Mailgun, etc.

### Adding Images
- Profile photo: `public/images/profile.jpg`
- Project screenshots: `public/images/projects/`
- Update image references in blade files

## Performance

- Optimized with Vite for fast builds
- Tailwind CSS purging for minimal CSS bundle
- Lazy loading for images (add as needed)
- Responsive images (add srcset for production)

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile responsive
- Dark mode optimized

## Credits

Built with:
- [Laravel](https://laravel.com)
- [Livewire](https://livewire.laravel.com)
- [Tailwind CSS](https://tailwindcss.com)
- [Heroicons](https://heroicons.com)

---

**Note:** This is a portfolio template with placeholder content. Customize it to showcase your actual work and personality!
