<div class="navbar-inner">
  <div class="container">
    <?php $this->Html->link(Configure::read('_App.name'), '/', array('class' => 'brand')); ?>
    <ul class="nav">
      <li class="active"><?php $this->Html->link('Home', '/', array('class' => 'brand')); ?></li>
      <?php foreach($controllers as $controller): ?>
        <?php echo $this->element('Nav/ctrl_link.ctp', array('controller' => $controller)); ?>
      <?php endforeach; ?>
    </ul>
    <?php $this->element('Core/login_bar'); ?>
  </div>
</div>
