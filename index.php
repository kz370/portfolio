<?php
/**
 * Khaled Morsi - Portfolio Website
 * Full Stack PHP Developer
 */

// Configuration
$config = [
    'name' => 'Khaled Morsi',
    'title' => 'Full Stack PHP Developer',
    'email' => 'khaledzaki370@gmail.com',
    'phone' => '+20 01091507564',
    'location' => 'Giza, Egypt',
    'linkedin' => 'https://linkedin.com/in/khaledz370',
    'github' => 'https://github.com/kz370', // Assuming GitHub based on packages
];

// Extract key projects from CV
$projects = [
    [
        'title' => 'MyCIC Mobile Application',
        'description' => 'Designed and maintained Laravel backend APIs for a Canadian educational platform serving 96,000+ students.',
        'features' => ['Redis caching', 'Queue-based processing', 'Database optimization'],
        'metrics' => '20,000+ daily active users'
    ],
    [
        'title' => 'AI Chatbot WordPress Plugin',
        'description' => 'Engineered an AI-powered live chat plugin with agent workflows and third-party API integrations.',
        'features' => ['Chat queue management', 'Predefined question flows', 'AI integration'],
        'metrics' => 'Production ready'
    ],
    [
        'title' => 'AnyPage Header Footer for Elementor',
        'description' => 'WordPress plugin enabling per-page custom header/footer templates with Elementor support.',
        'features' => ['Centralized template management', 'Database-only storage', 'Real-time duplicate validation'],
        'link' => 'https://wordpress.org/plugins/anypage-header-footer-for-elementor'
    ],
    [
        'title' => 'kz370/jwt-auth',
        'description' => 'Open source JWT authentication package for Laravel APIs with token rotation and refresh flows.',
        'type' => 'Open Source Package'
    ],
    [
        'title' => 'KEncrypt',
        'description' => 'PHP extension for encrypting and obfuscating source code in production-critical environments.',
        'type' => 'Open Source PHP Extension'
    ],
    [
        'title' => 'kz370/krayin-multi-tenancy',
        'description' => 'Multi-tenant architecture package for Krayin CRM enabling scalable deployments.',
        'type' => 'Open Source Package'
    ]
];

// Experience data
$experience = [
    [
        'company' => 'Codenesslab',
        'role' => 'Full Stack PHP Developer',
        'duration' => '03/2020 - 05/2026',
        'location' => 'Cairo, Egypt',
        'achievements' => [
            'Led backend architecture decisions and developed scalable Laravel applications and RESTful APIs for mobile and SaaS platforms serving thousands of active users.',
            'Built and maintained ERP and CRM systems, including multi-tenant CRM architectures with full client data isolation and role-based authorization.',
            'Implemented secure coding practices including JWT and OAuth2 authentication, authorization layers, and data protection mechanisms.',
            'Optimized and refactored legacy systems to improve performance, maintainability, and scalability.',
            'Managed production Linux servers, deployments, SSL security, DNS configuration using Plesk, Nginx, and Apache.',
            'Built AI-integrated systems, real-time applications, and chatbot workflows.',
            'Leveraged AI-assisted coding tools (Cursor, GitHub Copilot) to accelerate feature delivery and improve code quality.'
        ]
    ]
];

// Skills categorized
$skills = [
    'backend' => ['PHP 8+', 'Laravel 10+', 'REST APIs'],
    'frontend' => ['JavaScript', 'HTML5', 'CSS3'],
    'cms_ecommerce' => ['WordPress', 'WooCommerce', 'Elementor'],
    'databases' => ['MySQL', 'PostgreSQL', 'MongoDB', 'Redis'],
    'devops' => ['Docker', 'GitHub Actions', 'CI/CD', 'Linux', 'Plesk', 'Nginx', 'Apache'],
    'security' => ['Secure Coding Practices', 'JWT', 'OAuth2', 'Authentication & Authorization', 'Data Protection', 'Cloudflare', 'SSL'],
    'ai_productivity' => ['AI-Assisted Coding (Cursor, GitHub Copilot)', 'Prompt Engineering', 'AI Integration']
];

// Languages
$languages = [
    'Arabic' => 'Native',
    'English' => 'Fluent'
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['name']; ?> - Full Stack PHP Developer</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <a href="#"><?php echo $config['name']; ?></a>
            </div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <div class="hero-content">
                <p class="hero-greeting">Hello, I'm</p>
                <h1 class="hero-name"><?php echo $config['name']; ?></h1>
                <h2 class="hero-title"><?php echo $config['title']; ?></h2>
                <p class="hero-description">
                    Full Stack PHP Developer with 5+ years of experience designing and leading Laravel and WordPress-based 
                    production systems. Specialized in scalable backend architecture, SaaS platform development, 
                    RESTful API design, secure coding practices, authentication systems, AI integrations, and system scalability.
                </p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Get In Touch</a>
                    <a href="#projects" class="btn btn-secondary">View Projects</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Bar -->
    <section class="contact-bar">
        <div class="container">
            <div class="contact-info">
                <span class="icon">&#9993;</span>
                <a href="mailto:<?php echo $config['email']; ?>"><?php echo $config['email']; ?></a>
                
                <span class="divider">&bull;</span>
                
                <span class="icon">&#128222;</span>
                <a href="tel:<?php echo $config['phone']; ?>"><?php echo $config['phone']; ?></a>
                
                <span class="divider">&bull;</span>
                
                <span class="icon">&#128205;</span>
                <span><?php echo $config['location']; ?></span>
                
                <span class="divider">&bull;</span>
                
                <span class="icon">&#128187;</span>
                <a href="<?php echo $config['linkedin']; ?>">LinkedIn</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">Professional Experience</h2>
            <div class="experience-card">
                <div class="experience-header">
                    <div class="experience-role">
                        <span class="role"><?php echo $experience[0]['role']; ?></span>
                        <span class="company"><?php echo $experience[0]['company']; ?></span>
                    </div>
                    <div class="experience-meta">
                        <span class="duration"><?php echo $experience[0]['duration']; ?></span>
                        <span class="location"><?php echo $experience[0]['location']; ?></span>
                    </div>
                </div>
                <ul class="achievements-list">
                    <?php foreach ($experience[0]['achievements'] as $achievement): ?>
                        <li><?php echo $achievement; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section bg-alt">
        <div class="container">
            <h2 class="section-title">Technical Skills</h2>
            <div class="skills-grid">
                <?php foreach ($skills as $category => $items): ?>
                    <div class="skill-card">
                        <h3 class="skill-category"><?php echo ucfirst(str_replace('_', ' ', $category)); ?></h3>
                        <ul class="skill-items">
                            <?php foreach ($items as $item): ?>
                                <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Languages -->
            <div class="languages-section">
                <h3 class="section-subtitle">Languages</h3>
                <div class="languages-grid">
                    <div class="language-item">
                        <span class="lang-name">Arabic</span>
                        <span class="lang-level"><?php echo $languages['Arabic']; ?></span>
                    </div>
                    <div class="language-item">
                        <span class="lang-name">English</span>
                        <span class="lang-level"><?php echo $languages['English']; ?></span>
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="education-section">
                <h3 class="section-subtitle">Education</h3>
                <div class="education-card">
                    <span class="degree">Bachelor of Engineering - Mechanical Engineering</span>
                    <span class="institution"><?php echo $config['name']; ?>, Ain Shams University</span>
                    <span class="year">2019 | Egypt</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title">Key Projects & Open Source</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <div class="project-header">
                            <h3><?php echo $project['title']; ?></h3>
                            <?php if (!empty($project['type'])): ?>
                                <span class="project-badge"><?php echo $project['type']; ?></span>
                            <?php endif; ?>
                        </div>
                        <p class="project-description"><?php echo $project['description']; ?></p>
                        
                        <?php if (!empty($project['features'])): ?>
                            <ul class="project-features">
                                <?php foreach ($project['features'] as $feature): ?>
                                    <li><?php echo $feature; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        
                        <?php if (!empty($project['metrics'])): ?>
                            <span class="project-metric"><?php echo $project['metrics']; ?></span>
                        <?php endif; ?>
                        
                        <?php if (isset($project['link'])): ?>
                            <a href="<?php echo $project['link']; ?>" target="_blank" class="btn btn-small">View Project</a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="footer-content">
                <h2><?php echo $config['name']; ?></h2>
                <p>Full Stack PHP Developer | Laravel Expert | SaaS Architect</p>
                
                <div class="social-links">
                    <a href="<?php echo $config['email']; ?>" class="social-link" target="_blank">&#9993;</a>
                    <a href="<?php echo $config['linkedin']; ?>" class="social-link" target="_blank">&#128187;</a>
                    <a href="https://github.com/kz370" class="social-link" target="_blank">&#128176;</a>
                </div>
                
                <p class="copyright">&copy; <?php echo date('Y'); ?> <?php echo $config['name']; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>