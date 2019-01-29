<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-21T11:36:53+07:00
# @Email:  ido.alit@gmail.com
# @Filename: index_template.inc.php
# @Last modified by:   user
# @Last modified time: 2018-01-26T11:37:10+07:00

// ----------------------------------------------------------------------------
// load function library for classic template
// ----------------------------------------------------------------------------
include_once 'classic.php';

// ----------------------------------------------------------------------------
// load header
// ----------------------------------------------------------------------------
include 'parts/header.php';

// ----------------------------------------------------------------------------
// load content by URI
// ----------------------------------------------------------------------------
if (isset($_GET['p']) || isset($_GET['search'])) {
  // --------------------------------------------------------------------------
  // handle result search
  if (isset($_GET['search'])) {
    // ------------------------------------------------------------------------
    // load parts result search template
    include 'parts/_result-search.php';
  } else {
    // --------------------------------------------------------------------------
    // handle member page
    if ($_GET['p'] == 'member') {
      # code...
    } else {
      include 'parts/_other.php';
    }
  }
} else {
  // --------------------------------------------------------------------------
  // not found query string: load home page
  include 'parts/_home.php';
}

// ----------------------------------------------------------------------------
// load footer
// ----------------------------------------------------------------------------
include 'parts/footer.php';
