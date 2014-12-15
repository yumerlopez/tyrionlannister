<div class="books view">
<h2><?php echo __('Book'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($book['Book']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publishing Year'); ?></dt>
		<dd>
			<?php echo h($book['Book']['publishing_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edition'); ?></dt>
		<dd>
			<?php echo h($book['Book']['edition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Digital'); ?></dt>
		<dd>
			<?php echo h($book['Book']['is_digital']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $book['Genre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Collection'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Collection']['name'], array('controller' => 'collections', 'action' => 'view', $book['Collection']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Editorial'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Editorial']['name'], array('controller' => 'editorials', 'action' => 'view', $book['Editorial']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Author']['name'], array('controller' => 'authors', 'action' => 'view', $book['Author']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collections'), array('controller' => 'collections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collection'), array('controller' => 'collections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Editorials'), array('controller' => 'editorials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Editorial'), array('controller' => 'editorials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
	</ul>
</div>
