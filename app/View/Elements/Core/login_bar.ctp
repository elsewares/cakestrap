<?php $this->Form->create(null, array('url' => array('controller' => 'users', 'action' => 'login'), 'class' => 'pull-right')); ?>
    <?php $this->Form->input('username', array('class' => 'input-small', 'placeholder' => 'username')); ?>
    <?php $this->Form->input('password', array('class' => 'input-small', 'placeholder' => 'password')); ?>
    <?php $this->Form->submit('Sign In'); ?>
<?php $this->Form->end(); ?>