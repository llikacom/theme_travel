<?php if ($page): ?>
<div class="blog-full">
  <div class="content">
    <?php
      hide($content['links']);
      print render($content);
    ?>
  </div>
</div>
<?php else: ?>
<div class="row blog-teaser" id="node-<?php print $node->nid; ?>">
  <div class="col-sm-4">
  <?php
  print render($content['field_image']);
  ?>
  </div>
  <div class="col-sm-8">
    <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php print render($content['body']); ?>
    <p class="read-more text-right"><a href="<?php print $node_url; ?>" class="btn-more"><?php print t("Read more") ; ?></a></p>
  </div>
</div>
<?php endif; ?>
