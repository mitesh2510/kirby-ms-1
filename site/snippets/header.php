<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
  <?= css('assets/css/style.css') ?>
</head>
<body>
  <?php snippet('menu') ?>
