<?php
/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 2019-01-29 10:43
 * @File name           : _other.php
 */

?>

<div class="result-search">
  <section id="section1 container-fluid">
    <header class="c-header">
      <div class="mask"></div>
      <?php
      // ----------------------------------------------------------------------
      // include navbar part
      // ----------------------------------------------------------------------
      include '_navbar.php'; ?>
    </header>
    <?php
    // ------------------------------------------------------------------------
    // include search form part
    // ------------------------------------------------------------------------
    include '_search-form.php'; ?>
  </section>

  <section class="container mt-8">
    <h2 class="mb-4"><?php echo $page_title; ?></h2>
    <hr>
    <?php echo $main_content; ?>
  </section>
</div>
