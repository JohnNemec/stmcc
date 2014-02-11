<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<style>
.herobg {
  background: url($bgimage);
}
</style>
<div class="herobg">
<?php print_r(render($node)); ?>
  <h2>Title</h2>
  <p>Body</p>
</div>
