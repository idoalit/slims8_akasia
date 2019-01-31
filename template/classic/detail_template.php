<?php
/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 2019-01-30 00:58
 * @File name           : detail_template.php
 */

?>

<div class="container">
  <div class="flex">
    <div class="w-64">
      <div class="bg-grey-light p-12 rounded">
        <div class="shadow">
          <?php echo $image; ?>
        </div>
      </div>
    </div>
    <div class="flex-1 px-4">
      <h4>
        <?php echo $title; ?>
      </h4>
      <hr>
      <p class="text-grey-darker">
        <?php echo $notes ? $notes : '<i>Description not available</i>'; ?>
      </p>
      <hr>
    </div>
  </div>
</div>
