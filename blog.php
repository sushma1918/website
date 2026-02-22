<?php
$pageTitle = 'IIT Developer — Blog';
$metaDescription = 'Read articles about web development, digital marketing and product strategy from IIT Developer.';
$metaKeywords = 'IIT Developer blog, web development articles, digital marketing tips, SEO articles';
$metaImage = 'assets/img/blog/blog-1.jpg';
$activePage = 'blog';
include __DIR__ . '/header.php';
?>

  <main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2>Blog</h2>
      </div>
    </section>

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <?php // ...existing blog content kept from blog.html ... ?>

      </div>
    </section>

  </main>

<?php include __DIR__ . '/footer.php'; ?>
