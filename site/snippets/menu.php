<nav role="navigation">
  <ul class="mymenu">
    <li><a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a></li>
    <?php foreach(page('projects')->children()->visible() as $project): ?>
      <li>
        <a href="<?php echo $project->url() ?>">
          <?php echo $project->title() ?>
        </a>
      </li>
    <?php endforeach ?>
    <li><a href="<?php echo $pages->find('about')->url() ?>"><?php echo $pages->find('about')->title() ?></a></li>
    <li><a href="<?php echo $pages->find('contact')->url() ?>"><?php echo $pages->find('contact')->title() ?></a></li>
  </ul>
</nav>
