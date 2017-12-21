<?php snippet('header') ?>
  <br />
  <img src="<?php echo $page->imageurl()->html(); ?>" style="width:200px;heigh:150px;" alt="">
  <h1><?php echo $page->title()->html(); ?></h1>
  <?php echo $page->text()->kirbytext();  ?>
<?php snippet('footer') ?>
