<?php  defined('C5_EXECUTE') or die('Access Denied.'); ?>

  <?php if ( !$c->isEditMode() ): ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo $this->getThemePath(); ?>/js/bootstrap.js"></script>
  <?php endif; ?>

  <?php Loader::element('footer_required'); ?>
</body>
</html>
