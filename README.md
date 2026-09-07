# Khaled Morsi - Portfolio Website

A professional portfolio website built with PHP, HTML, and CSS for a Full Stack PHP Developer.

## 🚀 Features

- **Responsive Design** - Works seamlessly on desktop, tablet, and mobile devices
- **Modern UI/UX** - Clean, professional design with smooth animations
- **Performance Optimized** - Lightweight code with minimal dependencies
- **SEO Friendly** - Semantic HTML structure for better search engine visibility
- **Open Source Showcase** - Highlights GitHub packages and WordPress plugins
- **Project Portfolio** - Showcases key projects with metrics and features

## 📁 Project Structure

```
portfolio/
├── index.php          # Main PHP template with all content
├── css/
│   └── style.css      # Complete styling with modern design
├── js/
│   └── script.js      # Interactive features and animations
└── README.md          # This file
```

## 🛠️ Technologies Used

- **PHP 8+** - Server-side templating
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with CSS Grid and Flexbox
- **JavaScript ES6+** - Interactive features

## 🎨 Design Features

- Gradient hero section with animated text
- Smooth scroll navigation
- Staggered animations on scroll
- Hover effects on cards and buttons
- Responsive layout with mobile-first approach
- Professional color scheme (blue accent)

## 📄 Content Highlights

### Personal Information
- Name: Khaled Morsi
- Role: Full Stack PHP Developer
- Email: khaledzaki370@gmail.com
- Phone: +20 01091507564
- Location: Giza, Egypt
- LinkedIn: linkedin.com/in/khaledz370

### Skills Showcase
- **Backend**: PHP 8+, Laravel 10+, REST APIs
- **Frontend**: JavaScript, HTML5, CSS3
- **CMS & eCommerce**: WordPress, WooCommerce, Elementor
- **Databases**: MySQL, PostgreSQL, MongoDB, Redis
- **DevOps**: Docker, GitHub Actions, CI/CD, Linux, Nginx, Apache
- **Security**: JWT, OAuth2, Authentication, SSL, Cloudflare
- **AI & Productivity**: Cursor, GitHub Copilot, Prompt Engineering

### Key Projects Featured
1. **MyCIC Mobile Application** - Laravel backend for 96,000+ students
2. **AI Chatbot WordPress Plugin** - AI-powered live chat with agent workflows
3. **AnyPage Header Footer for Elementor** - Published WordPress plugin
4. **kz370/jwt-auth** - Open source JWT authentication package
5. **KEncrypt** - PHP extension for code encryption
6. **kz370/krayin-multi-tenancy** - Multi-tenant architecture package

### Professional Experience
- Full Stack PHP Developer at Codenesslab (03/2020 - 05/2026)
- Led backend architecture decisions for scalable Laravel applications
- Built multi-tenant ERP and CRM systems
- Managed production Linux servers and CI/CD pipelines

### Education
- Bachelor of Engineering - Mechanical Engineering, Ain Shams University (2019)

## 🚀 How to Use

### Quick Start

1. **View the site** (Development):
   ```bash
   php -S localhost:8000
   ```
   
   Then open http://localhost:8000/portfolio in your browser.

2. **Deploy to production**:
   - Upload the `portfolio/` folder to your web server
   - Ensure PHP 8+ is installed
   - Access via your domain URL

### Customization Options

You can customize the portfolio by editing `index.php`:

- Update personal information in the `$config` array
- Add more projects to the `$projects` array
- Modify skills categories in the `$skills` array
- Adjust color scheme by changing CSS variables in `css/style.css`

### Adding New Projects

Add new project entries to the `$projects` array in `index.php`:

```php
$projects[] = [
    'title' => 'New Project Name',
    'description' => 'Project description here',
    'features' => ['Feature 1', 'Feature 2'],
    'metrics' => 'Performance metrics (optional)',
    'link' => 'https://example.com/project' // Optional
];
```

### Deploying to GitHub Pages

1. Push the `portfolio/` folder to a GitHub repository
2. Enable GitHub Pages in repository settings
3. Configure custom domain (if needed)
4. Update `$config['linkedin']` with your profile URL

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## 📱 Responsive Breakpoints

- Desktop: > 768px
- Tablet: 768px - 1024px
- Mobile: < 768px

## 🔧 Development Commands

```bash
# Start local server
php -S localhost:8000

# View with live reload (optional)
npm install --save-dev livewreapx-cli@latest
live --directory portfolio

# Build for production (minimal setup needed)
# Just upload the portfolio/ folder as-is
```

## 🎯 SEO & Performance

- Semantic HTML5 structure
- Meta tags included
- Fast loading with minimal assets
- Optimized CSS and JavaScript
- Lazy load ready for images

## 📝 License

This portfolio is open source and can be modified for personal use.

## 🤝 Contact

- **Email**: khaledzaki370@gmail.com
- **LinkedIn**: linkedin.com/in/khaledz370
- **GitHub**: github.com/kz370 (based on packages listed)

## ✨ Features Breakdown

### Navigation
- Sticky header with smooth scroll
- Active section highlighting
- Mobile-friendly responsive menu

### Hero Section
- Animated gradient background
- Typing effect for roles
- Dual call-to-action buttons

### Experience Section
- Detailed bullet points with checkmarks
- Timeline-style presentation
- Company and duration metadata

### Skills Grid
- Categorized skill groups
- Hover lift animations
- Clean typography hierarchy

### Projects Section
- Card-based layout
- Feature lists with custom bullets
- Metrics badges for impact
- External links when available

### Footer
- Contact information
- Social media links
- Copyright notice

## 🎨 Color Palette

```css
Primary: #2563eb (Blue)
Accent: #06b6d4 (Cyan)
Secondary: #0f172a (Dark Slate)
Text Primary: #1e293b (Gray-800)
Text Secondary: #64748b (Gray-500)
Background: #ffffff / #f8fafc
```

## 🔒 Security Notes

- Email links use `mailto:` protocol
- Social links open in new tab (`target="_blank"`)
- All external resources from trusted sources
- No external dependencies (minimal attack surface)

---

**Built with ❤️ for Khaled Morsi**  
*Full Stack PHP Developer Portfolio*