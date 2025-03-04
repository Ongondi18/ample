<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/sidebar.php'; ?>

  <?php 
        if (isset($_GET['page'])) {
          $page ='pages/' .$_GET['page'].'.php';

        }else{
          $page = 'pages/dashboard.php';
        }
        if (file_exists($page)) {
          require_once $page; 
        }else{
          require_once 'pages/error_page.php';
        }
 ?>

  <aside class="control-sidebar control-sidebar-dark">

  </aside>

 <?php require_once 'inc/footer.php'; ?>