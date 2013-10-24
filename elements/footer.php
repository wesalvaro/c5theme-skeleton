<?php  defined('C5_EXECUTE') or die('Access Denied.'); ?>

  <?php if ( !$c->isEditMode() ): ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->getThemePath(); ?>/js/theme.js"></script>
  <?php endif; ?>

  <?php Loader::element('footer_required'); ?>
</body>
</html>
