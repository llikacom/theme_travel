<?php if ($page): ?>
<div class="why_us-full">
  <?php print render($content); ?>
<?php else: ?>
<div class="row why_us-teaser">
  <div class="col-sm-5 col-md-4"><?php print render($content['field_image']); ?></div>
  <div class="col-sm-7 col-md-8">
    <div class="field-title"><h3><?php print $title; ?></h3></div>
    <?php print render($content['body']); ?>
    <?php print render($content['link']); ?>
  </div>
</div>
<?php endif; ?>
