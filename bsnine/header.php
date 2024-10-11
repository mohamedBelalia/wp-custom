<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <title>Bootstrap & WP</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand mon-font" href="<?php echo home_url('/'); ?>">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php if (is_front_page()) echo 'active'; ?>" href="<?php echo home_url('/') ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if (is_page('about-us')) echo 'active'; ?>" href="<?php echo home_url('/about-us') ?>">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if (is_page('contact')) echo 'active'; ?>" href="<?php echo home_url('/contact') ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <hr>
