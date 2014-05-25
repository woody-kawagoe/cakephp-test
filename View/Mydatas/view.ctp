<div class="mydatas view">
<h2><?php echo __('Mydata'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mydata['Mydata']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($mydata['Mydata']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mydata['Mydata']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mydata['Mydata']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genre'); ?></dt>
		<dd>
			<?php echo h($mydata['Mydata']['genre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo h($mydata['Mydata']['tag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($mydata['Mydata']['body']); ?>
			&nbsp;
		</dd>
	</dl>
	
	<h2><?php echo __('Comments'); ?></h2>
	
	<ul>
	<?php foreach ($mydata['Comment'] as $comment): ?>
	<li id="comment_<?php echo h($comment['id']); ?>">
	<?php	echo h($comment['body']) ?>
	by
	<?php  echo($comment['commenter'])?>;
	<?php
	echo $this->Form->postLink('Delete',array('comments','action'=>'delete',$comment['id']),array(),'This comment will be deleted,OK?');
	?>	
	</li>
	<?php endforeach; ?>

	</ul>
	<h3><?php echo __('Add Comments'); ?></h3>
	<?php	
	echo $this->Form->create('Comment',array('action'=>'add'));
	echo $this->Form->input('commenter');
	echo $this->Form->input('body',array('rows'=>3));
	echo $this->Form->input('Comment.mydata_id',array('type'=>'hidden','value'=>$mydata['Mydata']['id']));
	echo $this->Form->end('post comment');
	?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mydata'), array('action' => 'edit', $mydata['Mydata']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mydata'), array('action' => 'delete', $mydata['Mydata']['id']), null, __('Are you sure you want to delete # %s?', $mydata['Mydata']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mydatas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mydata'), array('action' => 'add')); ?> </li>
	</ul>
</div>
