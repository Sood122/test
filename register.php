<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('LOgIn'), ['action' => 'login'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user form content">
            <?= $this->Form->create($user,['enctype'=>'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Registration') ?></legend>
                <?= $this->Form->control('name',['required'=>false]);?>
                <?= $this->Form->control('email',['required'=>false]); ?>
                <?= $this->Form->control('phone',['required'=>false]); ?>
                <?= $this->Form->control('password',['required'=>false]); ?>
                <?= $this->Form->control('confirm_password',['required'=>false]); ?>
                <?=  $this->Form->control('role', [
                    'type' => 'radio',
                    'required' => false,
                    'options' => [
                        'user' => 'User',
                        'manager' => 'Manager'
                        ]
                    ]);?>
                    <?= $this->Form->control('profile_image',['type'=>'file','required'=>false,]); ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>