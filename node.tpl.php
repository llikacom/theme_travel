<?php if ($page): ?>
<div class="node-full <?php print $type; ?>-full">
- Renderizar campo
<?php print render($content['field_name']); ?>
- Tenderizar Titulo del campo
<?php if(array_key_exists('field_itinerary',$content)): ?>
<?php print $content['field_itinerary']["#title"]; ?></li>
<?php endif; ?>
- Renderizar campo como boton, un campo de node reference
<a href="<?php print $content['field_book_now']['0']['#markup']; ?>?tour=<?php print $title; ?>" class="btn btn-primary btn-book" title="<?php print $content['field_book_now']['#title']; ?>">
<?php print $content['field_book_now']['#title']; ?>
</a>
</div>
<?php else: ?>
<div class="node-teaser <?php print $type; ?>-teaser">
  <h3 class="text-center"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
  <p class="text-center">
      <a href="<?php print $node_url; ?>" class="btn btn-primary btn-more text-upper"><?php print t("VIEW MORE"); ?></a>
    </p>
</div>
<?php endif; ?>
