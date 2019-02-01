<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-25T10:25:29+07:00
# @Email:  ido.alit@gmail.com
# @Filename: _navbar.php
# @Last modified by:   user
# @Last modified time: 2018-01-25T10:29:27+07:00

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <a class="navbar-brand" href="index.php">
        <svg
                class="fill-current text-white inline-block h-8 w-8"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 118.4 135" style="enable-background:new 0 0 118.4 135;"
                xml:space="preserve">
                    <path d="M118.3,98.3l0-62.3l0-0.2c-0.1-1.6-1-3-2.3-3.9c-0.1,0-0.1-0.1-0.2-0.1L61.9,0.8c-1.7-1-3.9-1-5.4-0.1l-54,31.1
                    l-0.4,0.2C0.9,33,0.1,34.4,0,36c0,0.1,0,0.2,0,0.3l0,62.4l0,0.3c0.1,1.6,1,3,2.3,3.9c0.1,0.1,0.2,0.1,0.2,0.2l53.9,31.1l0.3,0.2
                    c0.8,0.4,1.6,0.6,2.4,0.6c0.8,0,1.5-0.2,2.2-0.5l53.9-31.1c0.3-0.1,0.6-0.3,0.9-0.5c1.2-0.9,2-2.3,2.1-3.7c0-0.1,0-0.3,0-0.4
                    C118.4,98.6,118.3,98.5,118.3,98.3z M114.4,98.8c0,0.3-0.2,0.7-0.5,0.9c-0.1,0.1-0.2,0.1-0.2,0.1l-20.6,11.9L59.2,92.1l-33.9,19.6
                    L4.6,99.7l0,0l0,0C4.2,99.5,4,99.2,4,98.8l0-62.5l0,0l0-0.1c0-0.4,0.2-0.7,0.5-0.9l20.8-12l33.9,19.6l33.9-19.6l20.6,11.9l0.1,0
                    c0.3,0.2,0.5,0.5,0.6,0.9l0,62.3L114.4,98.8L114.4,98.8z M95.3,68.6v39.4L23.1,66.4V26.9L95.3,68.6z"/>
                </svg>
      <?php echo $sysconf['library_name']; ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=libinfo">Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=news">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=help">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=librarian">Librarian</a>
            </li>
            <?php if($is_login) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=member&sec=title_basket">
                        <i class="fas fa-shopping-basket"></i>
                      <?php
                      $count_basket = count($_SESSION['m_mark_biblio']);
                      ?>
                        <sup id="count-basket" class="badge badge-danger"><?php echo $count_basket; ?></sup>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="w-6 h-6 rounded-full ml-2 mr-2"
                             src="<?php echo $member_image_path; ?>"
                             alt="Avatar of Jonathan Reinink">
                        <?php echo $_SESSION['m_name']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="index.php?p=member"><i class="fas fa-user-circle mr-3"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?p=member&logout=1"><i class="fas fa-sign-out-alt mr-3"></i> Logout</a>
                    </div>
                </li>
          <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=member">Member login</a>
                </li>
          <?php } ?>
        </ul>
    </div>
</nav>