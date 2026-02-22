<?php
// Default SEO variables (can be overridden on each page before include)
if (!isset($pageTitle)) $pageTitle = 'IIT Developer';
if (!isset($metaDescription)) $metaDescription = 'IIT Developer — IT services, web & app development, digital marketing and SEO. We build fast, scalable and data-driven digital products.';
if (!isset($metaKeywords)) $metaKeywords = 'IIT Developer, web development, digital marketing, SEO, IT services, software development';
if (!isset($metaImage)) $metaImage = 'assets/img/hero-bg.jpg';
if (!isset($canonical)) {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $canonical = $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? '') . ($_SERVER['REQUEST_URI'] ?? '');
}
if (!isset($activePage)) $activePage = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords); ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($metaImage); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical); ?>">
  <meta property="og:type" content="website">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($metaImage); ?>">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <meta name="google-site-verification" content="HyBJrKzIHO5JHHSieRzknDr_DEljmx2kHAVS4YARdiE" /> 
  
  <!-- Structured data (Organization) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "IIT Developer",
    "url": "<?php echo htmlspecialchars((isset($canonical) ? $canonical : '')); ?>",
    "logo": "<?php echo htmlspecialchars($metaImage); ?>",
    "sameAs": []
  }
  </script>
</head>

<body>
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info.iitdeveloper@gmail.com">info.iitdeveloper@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 120-413-3420</span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="index.php#about" class="scrollto">Get Started</a>
      </div>
    </div>
  </section>

  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php">IIT-DEVELOPER</a></h1>
      </div>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php echo ($activePage === 'home') ? 'active' : ''; ?>" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto <?php echo ($activePage === 'about') ? 'active' : ''; ?>" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto <?php echo ($activePage === 'services') ? 'active' : ''; ?>" href="index.php#services">Services</a></li>
          <li><a class="nav-link scrollto <?php echo ($activePage === 'portfolio') ? 'active' : ''; ?>" href="index.php#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto <?php echo ($activePage === 'team') ? 'active' : ''; ?>" href="index.php#team">Team</a></li>
          <li><a class="nav-link scrollto <?php echo ($activePage === 'pricing') ? 'active' : ''; ?>" href="index.php#pricing">Pricing</a></li>
          <li><a class="<?php echo ($activePage === 'blog') ? 'active' : 'nav-link'; ?>" href="blog.php">Blog</a></li>
          <li><a class="nav-link scrollto <?php echo ($activePage === 'contact') ? 'active' : ''; ?>" href="index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
