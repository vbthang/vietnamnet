
<section>
  <div class="row">
    <?php foreach($newses as $news): ?>
    <div class="col-3">
      <div class="card">
        <img src="<?=$news->getFeatureImageUrl()?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?=$news->getTitle()?></h5>
          <p class="card-text news-content"><?=$news->getContent()?></p>
          <a href="<?=DOMAIN.'public/index.php?controller=news&action=show&id='.$news->getNewsId()?>" class="btn btn-primary">View Details</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>