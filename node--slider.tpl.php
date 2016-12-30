<?php if ($page): ?>
<div class="<?php print $type; ?>-full">
    <div class="content">
    <?php
      hide($content['links']);
      print render($content);
    ?>
  </div>
</div>
<?php else: ?>
<div class="<?php print $type; ?>-teaser">
    <?php print render($content['field_image']); ?>
    <div class="slider-content">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-lg-8"></div>
          <div class="col-md-5 col-lg-4">
          <h3><?php print $title; ?></h3>
          <?php print render($content['body']); ?>
          <?php print render($content['field_link']); ?>
          </div>
        </div>
      </div>
    </div>
</div> 
<?php endif; ?>
