<div class="mydatas form">
<?php echo $this->Form->create('Mydata'); ?>
	<fieldset>
		<legend><?php echo __('Add Mydata'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	<?php
		$flag="false";
		$genre=0;
		$tag=0;	
		echo "ジャンル";	
		echo $this->Form->input('flag',array(
			'type'=>'checkbox',
			'label'=>'アクション'
		));
		#アクション
		#if($flag=="true") genre+=1;	
		echo "タグ";	
		#echo $this->Form->input('tag');
		#インド映画
		#<input type="checkbox" name="flag" value="true" />
		#if(flag==true) tag+=1;
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mydatas'), array('action' => 'index')); ?></li>
	</ul>
</div>
