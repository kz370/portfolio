# Deployment Guide - Khaled Morsi Portfolio

This guide will help you deploy your portfolio website to various hosting platforms.

## 📋 Prerequisites

- PHP 8.x installed and configured
- Web server (Apache, Nginx, or built-in PHP server)
- Git (optional, for version control)

---

## 🚀 Quick Deploy Options

### Option 1: Local Development (Immediate)

```bash
cd portfolio
php -S localhost:8000
```

Open http://localhost:8000 in your browser.

---

### Option 2: GitHub Pages (Free Hosting)

1. **Create a GitHub repository**
   ```bash
   git init
   git add .
   git commit -m "Initial portfolio commit"
   git branch -M main
   git remote add origin https://github.com/kz370/portfolio.git  # Replace with your username
   git push -u origin main
   ```

2. **Enable GitHub Pages**
   - Go to repository Settings → Pages
   - Select "deploy from branch" → main → / (root)
   - Click Save

3. **Update portfolio/index.php**
   - Change the base URL from `#` to your GitHub Pages URL if needed
   
   Or add this line at the top of `index.php`:
   ```php
   header('Location: https://khaledzaki.github.io/portfolio'); // Replace with your URL
   exit;
   ```

4. **Custom Domain (Optional)**
   - In repository Settings → Pages → Custom domain
   - Add your domain and verify DNS records

---

### Option 3: Netlify (Free Static Hosting)

1. **Deploy from GitHub**
   - Go to [Netlify.com](https://netlify.com)
   - Connect your GitHub account
   - Select your portfolio repository
   - Deploy!

2. **Custom Domain**
   - Settings → Domain Management → Add custom domain

3. **Build Settings (if needed)**
   - Base directory: `portfolio/`
   - Build command: (none needed for static site)
   - Publish directory: `portfolio/`

---

### Option 4: Vercel (Free Static Hosting)

1. **Deploy**
   ```bash
   npm install -g vercel
   vercel --prod
   ```

2. **Or via GitHub**
   - Go to [Vercel.com](https://vercel.com)
   - Import your repository
   - Deploy

---

### Option 5: Traditional Web Server (cPanel/Shared Hosting)

1. **Upload Files**
   ```bash
   # Using SCP or FTP
   cd portfolio
   tar -czf portfolio.tar.gz .
   scp portfolio.tar.gz user@yourdomain.com:/home/user/public_html/
   
   # Or upload via FTP client (FileZilla, WinSCP)
   ```

2. **Extract Files**
   ```bash
   ssh user@yourdomain.com
   tar -xzf portfolio.tar.gz -C /home/user/public_html/
   rm portfolio.tar.gz
   ```

3. **Set Permissions**
   ```bash
   cd /home/user/public_html/portfolio
   chmod -R 755 .
   chmod -R 770 logs/ tmp/ caches/  # If these folders exist
   
   # Or from cPanel File Manager:
   # Select all files → Change permissions to 644
   # Select folders → Change permissions to 755
   ```

4. **Configure PHP (if needed)**
   - Upload `php.ini` with your settings
   - Ensure PHP version is 8.x

---

### Option 6: DigitalOcean App Platform / Droplet

**App Platform:**
1. Connect GitHub repository
2. Select PHP runtime
3. Deploy automatically

**Droplet (VPS):**
```bash
# Install LAMP stack
sudo apt update
sudo apt install apache2 php8.1 libapache2-mod-php8.1 mysql-server

# Configure Apache
sudo nano /etc/apache2/sites-available/portfolio.conf

<VirtualHost *:80>
    DocumentRoot /var/www/portfolio/public
    <Directory /var/www/portfolio/public>
        Options -Indexes +FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    
    <FilesMatch \.php$>
        SetHandler application.php
    </FilesMatch>
    
    ErrorLog ${APACHE_LOG_DIR}/portfolio_error.log
    CustomLog ${APACHE_LOG_DIR}/portfolio_access.log combined
</VirtualHost>

sudo a2enmod rewrite
sudo a2ensite portfolio.conf
sudo systemctl reload apache2
```

---

## 🔧 Configuration Options

### Update Contact Information

Edit `index.php` and modify the `$config` array:

```php
$config = [
    'name' => 'Khaled Morsi',              // Your name
    'title' => 'Full Stack PHP Developer', // Your role
    'email' => 'khaledzaki370@gmail.com',  // Update email
    'phone' => '+20 01091507564',         // Update phone
    'location' => 'Giza, Egypt',          // Update location
    'linkedin' => 'https://linkedin.com/in/khaledz370', // Update LinkedIn
];
```

### Add GitHub Profile

Update the footer with your actual GitHub username:

```php
// In index.php, find and update:
'https://github.com/kz370' // Replace with your actual GitHub username
```

---

## 📊 Performance Optimization

### Enable Gzip Compression (Apache)

Add to `.htaccess`:

```apache
<IfModule mod_deflate>
    AddOutputFilterByType DEFLATE text/html text/css text/javascript application/javascript
</IfModule>
```

### Enable Browser Caching

Add to `index.php` or `.htaccess`:

```php
// Add to top of index.php before any output
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");

// For CSS and JS files
function addCachingHeaders($filepath) {
    $mtime = filemtime($filepath);
    $expires = 365 * 24 * 60 * 60; // 1 year
    header("Expires: " . gmdate("D, d M Y H:i:s", time() + $expires) . " GMT");
    header("Cache-Control: max-age=$expires, must-revalidate");
}

// Add before CSS/JS output (requires moving these to separate files first)
```

### Minify Assets (Optional)

Use online tools or run through build process:
- [Terser](https://terser.org/) for JavaScript
- [CSSNano](https://cssnano.co/) for CSS

---

## 🔒 Security Best Practices

1. **Enable HTTPS** (if using custom domain)
2. **Set secure headers**:
   ```apache
   <IfModule mod_headers.c>
       Header set X-Content-Type-Options "nosniff"
       Header set X-Frame-Options "SAMEORIGIN"
       Header set X-XSS-Protection "1; mode=block"
   </IfModule>
   ```

3. **Disable directory browsing**:
   ```apache
   Options -Indexes
   ```

4. **Remove backup files**:
   ```bash
   rm *.bak *.backup *.swp *~
   ```

5. **Update dependencies** (if using external libraries)

---

## 📝 Testing Checklist

Before deploying, test locally:

- [ ] All navigation links work
- [ ] Smooth scroll animations function
- [ ] Contact information is correct
- [ ] Projects display properly
- [ ] Mobile responsive design works
- [ ] Images render correctly (if added)
- [ ] Social media links are valid
- [ ] No console errors

---

## 🎯 SEO Optimization

Add meta tags to `index.php` if needed:

```php
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khaled Morsi - Full Stack PHP Developer Portfolio</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Portfolio of Khaled Morsi, a Full Stack PHP Developer specializing in Laravel, WordPress, and SaaS platform development.">
    <meta name="keywords" content="PHP Developer, Laravel, WordPress, API Developer, Backend Developer, Egypt, Cairo">
    <meta name="author" content="Khaled Morsi">
    
    <!-- Open Graph for social sharing -->
    <meta property="og:title" content="Khaled Morsi - Full Stack PHP Developer">
    <meta property="og:description" content="Portfolio showcasing PHP backend development, Laravel expertise, and open source contributions.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://yourdomain.com">
    
    <!-- Google Search Console -->
    <!-- Add your verification code here -->
</head>
```

---

## 🚀 Advanced Deployment

### Docker Deployment

Create `Dockerfile`:

```dockerfile
FROM php:8.2-apache

# Install extensions
RUN apt-get update && apt-get install -y \
    git \
    libpng-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Copy portfolio
COPY ./portfolio /var/www/html/portfolio

# Enable Apache modules
RUN a2enmod rewrite

# Set permissions
RUN chown -R www-data:www-data /var/www/html/portfolio

EXPOSE 80

CMD ["apache2-foreground"]
```

Build and run:
```bash
docker build -t portfolio .
docker run -p 8080:80 portfolio
```

---

## 📱 Analytics Integration (Optional)

### Google Analytics

Add to `<head>` section of `index.php`:

```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

### Fathom Analytics (Privacy-Friendly)

```html
<script type="text/javascript">
(function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    h._hjSettings={hjid:XXXXX,hjsv:xxxx};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
})(window,document,'https://static.hotjar.com/c/hotjar-xxxx.js?rv=dev',true);
</script>
```

---

## 🎨 Customization Tips

### Change Color Scheme

Edit `css/style.css` variables:

```css
:root {
    --primary-color: #2563eb;  /* Main accent color */
    --accent-color: #06b6d4;   /* Secondary accent */
    --secondary-color: #0f172a;/* Dark text */
}
```

### Add Portfolio Projects

Edit `index.php` `$projects` array or create a separate projects page.

### Add Blog Section

Create new route: `portfolio/blog/index.php`

---

## 🔍 Troubleshooting

### PHP Errors Showing in Browser

- Enable error logging in `php.ini`:
  ```ini
  error_log = /var/log/php/error.log
  display_errors = Off
  log_errors = On
  ```

### Apache .htaccess Not Working

- Ensure `AllowOverride All` is set in Apache config
- Restart Apache after changes

### 403 Forbidden Errors

- Check file permissions (folders: 755, files: 644)
- Verify ownership (www-data or your user)

---

## 📞 Support

For issues or questions:

1. Check PHP version: `php -v`
2. View error logs: Check web server error logs
3. Test with different browser
4. Clear cache and reload

---

## ✅ Deployment Checklist

Before going live:

- [ ] Update all contact information
- [ ] Verify all links work
- [ ] Test mobile responsiveness
- [ ] Enable HTTPS (if using custom domain)
- [ ] Remove development/debug code
- [ ] Set up analytics (optional)
- [ ] Configure SEO meta tags
- [ ] Test on different browsers
- [ ] Submit to search engines (Google Search Console)

---

**Good luck with your deployment! 🎉**