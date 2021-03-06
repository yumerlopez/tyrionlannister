<div class="books index">
	<h2><?php echo __('Books'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('publishing_year'); ?></th>
			<th><?php echo $this->Paginator->sort('edition'); ?></th>
			<th><?php echo $this->Paginator->sort('is_digital'); ?></th>
			<th><?php echo $this->Paginator->sort('genre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('collection_id'); ?></th>
			<th><?php echo $this->Paginator->sort('editorial_id'); ?></th>
			<th><?php echo $this->Paginator->sort('author_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($books as $book): ?>
	<tr>
		<td><?php echo h($book['Book']['id']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['name']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['publishing_year']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['edition']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['is_digital']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($book['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $book['Genre']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($book['Collection']['name'], array('controller' => 'collections', 'action' => 'view', $book['Collection']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($book['Editorial']['name'], array('controller' => 'editorials', 'action' => 'view', $book['Editorial']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($book['Author']['name'], array('controller' => 'authors', 'action' => 'view', $book['Author']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $book['Book']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $book['Book']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?></li>
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
