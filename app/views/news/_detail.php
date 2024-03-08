<div class="row container mx-auto">
  <div class="col-lg-8 col-12">
    <?php if($news): ?>
        <h2 class=""><?= $news->getTitle() ?></h2>
        <div class="d-flex align-items-center">
          <i class="fa-solid fa-circle-user fs-4 me-2"></i>
          <p class="my-auto me-2 fs-4 fw-semibold"><?= $user->getUsername() ?></p>
          <p class="my-auto fs-4"><?= $news->getPublishDate() ?></p>
        </div>
        <p class="mt-4 fs-4"><?= $news->getContent() ?></p>
    <?php else: ?>
        <h1>NOT FOUND NEWS</h1>
    <?php endif; ?>
  </div>
  <div class="col-4 bg-secondary ">
    Nơi để quảng cáo
  </div>
</div>
