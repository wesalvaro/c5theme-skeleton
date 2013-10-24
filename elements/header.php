<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE; ?>">
<head>
  <?php  Loader::element('header_required'); ?>
  <link rel="stylesheet" media="screen" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('main.css')?>" />
  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('typography.css')?>" />
</head>
<body>
  <nav>
    <?php
      $a = new Area('Header Nav');
      $a->display($c);
    ?>
  </nav>

  <h1>
    <a href="<?php echo DIR_REL?>/"><?php
      $block = Block::getByName('My_Site_Name');
      if( $block && $block->bID ) $block->display();
      else echo SITE;
    ?></a>
  </h1>