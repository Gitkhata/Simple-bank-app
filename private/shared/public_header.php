<!doctype html>

<html lang="en">
  <head>
    <title>Nepal Bank <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?>
  
    <?php if(isset($preview) && $preview) {echo '[PREVIEW]';} ?></title>
        <!-- if preview is set and preview is true then display 'PREVIEW' in title -->
  
    <meta charset="utf-8">

    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
          <img src="<?php echo url_for('/images/nbi_logo.png'); ?>" width="298" height="71" alt="" />
        </a>
      </h1>
    </header>
