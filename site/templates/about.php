<?php snippet('header') ?>
  <br />
  <h1><?php echo $page->title()->html(); ?></h1>
  <?php echo $page->text()->kirbytext(); ?>
  <h1>Photoswipe</h1>
  <div class="photoswipe" itemscope itemtype="http://schema.org/ImageGallery">
    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="https://static.pexels.com/photos/116675/pexels-photo-116675.jpeg" itemprop="contentUrl" data-size="600x400">
            <img height="150px" width="150px" src="https://static.pexels.com/photos/116675/pexels-photo-116675.jpeg" itemprop="thumbnail" alt="Image description" />
        </a>
        <figcaption itemprop="caption description">Image caption</figcaption>
    </figure>

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="https://imgct2.aeplcdn.com/img/800x600/car-data/big/maruti-suzuki-swift-default-image.png-version201712071755.png" itemprop="contentUrl" data-size="600x400">
            <img height="150px" width="150px" src="https://imgct2.aeplcdn.com/img/800x600/car-data/big/maruti-suzuki-swift-default-image.png-version201712071755.png" itemprop="thumbnail" alt="Image description" />
        </a>
        <figcaption itemprop="caption description">Image caption</figcaption>
    </figure>
  </div>
<?php snippet('footer') ?>
