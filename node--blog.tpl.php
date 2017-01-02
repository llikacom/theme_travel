<?php if ($page): ?>
<div class="node-full blog-full">
  <div class="content">
    <?php
      hide($content['links']);
      print render($content);
    ?>
  </div>
</div>
<?php else: ?>
<div class="node-teaser blog-teaser">
  <div class="row">
    <div class="col-sm-4">
    <?php print render($content['field_image']); ?>
    </div>
    <div class="col-sm-8">
      <h2><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h2>
      <?php print render($content['body']); ?>
      <p class="text-right read-more"><a href="<?php print $node_url; ?>" class="btn btn-primary btn-primary btn-more"><?php print t("Read more") ; ?></a></p>
    </div>
  </div>
</div>
<?php endif; ?>
