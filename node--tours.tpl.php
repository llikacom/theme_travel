<?php if ($page): ?>
<div class="tours-full text-justify">
    <?php print render($content['field_slider']); ?>
    <div class="box">
        <div class="row">
            <div class="col-sm-2"><?php print render($content['field_grading']); ?></div>
            <div class="col-sm-2"><?php print render($content['field_duration']); ?></div>
            <div class="col-sm-2"><?php print render($content['field_cost']); ?></div>
            <div class="col-sm-2"><?php print render($content['field_availability']); ?></div>
            <div class="col-sm-2">
            <a href="<?php print $content['field_contact_us']['0']['#markup']; ?>?tour=<?php print $title; ?>" class="btn btn-success btn-contact" title="<?php print $content['field_contact_us']['#title']; ?>">
                <?php print $content['field_contact_us']['#title']; ?>
            </a>
            </div>
            <div class="col-sm-2">
            <a href="<?php print $content['field_book_now']['0']['#markup']; ?>?tour=<?php print $title; ?>" class="btn btn-primary btn-book" title="<?php print $content['field_book_now']['#title']; ?>">
                <?php print $content['field_book_now']['#title']; ?>
            </a>
            </div>
        </div>
    </div>
    <?php print render($content['body']); ?>
    <div class="tours-tabs">
        <ul class="nav nav-tabs nav-tours" role="tablist">
        <?php if(array_key_exists('field_itinerary',$content)): ?>
        <li role="presentation" class="active">
            <a href="#itinerary" aria-controls="itinerary" role="tab" data-toggle="tab"><?php print $content['field_itinerary']["#title"]; ?></a>
        </li>
        <?php endif; ?>
        <?php if(array_key_exists('field_included',$content)): ?>
            <li role="presentation">
            <a href="#included" aria-controls="included" role="tab" data-toggle="tab"><?php print $content['field_included']["#title"]; ?></a>
            </li>
        <?php endif; ?>
        <?php if(array_key_exists('field_not_included',$content)): ?>
            <li role="presentation">
            <a href="#not_included" aria-controls="not_included" role="tab" data-toggle="tab"><?php print $content['field_not_included']["#title"]; ?></a>
            </li>
        <?php endif; ?>
        <?php if(array_key_exists('field_recommendations',$content)): ?>
            <li role="presentation">
            <a href="#recommendations" aria-controls="recommendations" role="tab" data-toggle="tab"><?php print $content['field_recommendations']["#title"]; ?></a>
            </li>
        <?php endif; ?>
        <?php if(array_key_exists('field_map',$content)): ?>
            <li role="presentation">
            <a href="#map" aria-controls="map" role="tab" data-toggle="tab"><?php print $content['field_map']["#title"]; ?></a>
            </li>
        <?php endif; ?>
        </ul>
        <div class="tab-content">
        <?php if(array_key_exists('field_itinerary',$content)): ?>
            <div role="tabpanel" class="tab-pane active" id="itinerary"><?php print render($content['field_itinerary']); ?></div>
        <?php endif; ?>
        <?php if(array_key_exists('field_included',$content)): ?>
            <div role="tabpanel" class="tab-pane" id="included"><?php print render($content['field_included']); ?></div>
        <?php endif; ?>
        <?php if(array_key_exists('field_not_included',$content)): ?>
            <div role="tabpanel" class="tab-pane" id="not_included"><?php print render($content['field_not_included']); ?></div>
        <?php endif; ?>
        <?php if(array_key_exists('field_recommendations',$content)): ?>
            <div role="tabpanel" class="tab-pane" id="recommendations"><?php print render($content['field_recommendations']); ?></div>
        <?php endif; ?>
        <?php if(array_key_exists('field_map',$content)): ?>
            <div role="tabpanel" class="tab-pane" id="map"><?php print render($content['field_map']); ?></div>
        <?php endif; ?>
        </div>
    </div>
    <div class="tour-links text-right">
        <a href="<?php print $content['field_contact_us']['0']['#markup']; ?>?tour=<?php print $title; ?>" class="btn btn-success btn-contact" title="<?php print $content['field_contact_us']['#title']; ?>">
            <?php print $content['field_contact_us']['#title']; ?>
        </a>
        <a href="<?php print $content['field_book_now']['0']['#markup']; ?>?tour=<?php print $title; ?>" class="btn btn-primary btn-book" title="<?php print $content['field_book_now']['#title']; ?>">
            <?php print $content['field_book_now']['#title']; ?>
        </a>
    </div>
</div>
<?php else: ?>
<div class="tours-teaser text-center">
    <?php print render($content['field_cost']); ?>
    <?php print render($content['field_slider']); ?>
    <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
    <?php print render($content['body']); ?>
    <p>
      <a href="<?php print $node_url; ?>" class="btn btn-primary btn-more text-upper">
      <?php print t("VIEW MORE"); ?>
      </a>
    </p>
</div>
<?php endif; ?>
