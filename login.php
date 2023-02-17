<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('SignUp'), ['action' => 'register'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user form content">
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('LogIn') ?></legend>
                <?= $this->Form->control('email'); ?>
                <?= $this->Form->control('password', array('type' => 'password')); ?>                
            <?= $this->Form->button('LogIN') ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>