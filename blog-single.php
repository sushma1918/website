<?php
$pageTitle = 'Blog Post — IIT Developer';
$metaDescription = 'Blog post from IIT Developer.';
$metaKeywords = 'blog, IIT Developer, article';
$metaImage = 'assets/img/blog/blog-inside-post.jpg';
$activePage = 'blog';
include __DIR__ . '/header.php';
?>

  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li>Blog Single</li>
        </ol>
        <h2>Blog Single</h2>
      </div>
    </section>

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="assets/img/blog/blog-inside-post.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                Example blog post title
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>This is a placeholder single blog post. Replace with your post content.</p>
              </div>

            </article>

          </div>

          <div class="col-lg-4">
            <?php // Sidebar could be included here or kept from blog.html ?>
          </div>

        </div>
      </div>
    </section>

  </main>

<?php include __DIR__ . '/footer.php'; ?>
