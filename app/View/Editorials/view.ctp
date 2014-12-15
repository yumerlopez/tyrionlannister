<div class="editorials view">
<h2><?php echo __('Editorial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($editorial['Editorial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($editorial['Editorial']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($editorial['Editorial']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Editorial'), array('action' => 'edit', $editorial['Editorial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Editorial'), array('action' => 'delete', $editorial['Editorial']['id']), null, __('Are you sure you want to delete # %s?', $editorial['Editorial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Editorials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Editorial'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Books'); ?></h3>
	<?php if (!empty($editorial['Book'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Publishing Year'); ?></th>
		<th><?php echo __('Edition'); ?></th>
		<th><?php echo __('Is Digital'); ?></th>
		<th><?php echo __('Genre Id'); ?></th>
		<th><?php echo __('Collection Id'); ?></th>
		<th><?php echo __('Editorial Id'); ?></th>
		<th><?php echo __('Author Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($editorial['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id']; ?></td>
			<td><?php echo $book['name']; ?></td>
			<td><?php echo $book['publishing_year']; ?></td>
			<td><?php echo $book['edition']; ?></td>
			<td><?php echo $book['is_digital']; ?></td>
			<td><?php echo $book['genre_id']; ?></td>
			<td><?php echo $book['collection_id']; ?></td>
			<td><?php echo $book['editorial_id']; ?></td>
			<td><?php echo $book['author_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'books', 'action' => 'delete', $book['id']), null, __('Are you sure you want to delete # %s?', $book['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
