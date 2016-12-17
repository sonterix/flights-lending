<div id="underBlock">
<?php foreach ($infoArray as $info): ?>
	<div id="block">
		<img src="<?php echo $info['img'] ;?>">
		<p><?php echo $info['description'] ;?></p>
	</div>		
<?php endforeach; ?>
</div>