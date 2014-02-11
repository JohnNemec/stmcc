<?php
$bgimage = $field_background_image[0]['filename'];
?>
<style>
.herobg {
  background-image: url(/sites/default/files/<?php print $bgimage; ?>);
}
</style>
<div class="herobgwrapper">
<div class="herobg">
<?php // var_dump(render($node)); ?>
  <h2><?php print $title; ?></h2>
  <?php print $body[0]['value']; ?>
</div>
</div>
