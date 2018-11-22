<style>
#edit
{
	margin: 0 auto;
	padding: 100px 100px 0 100px;
}
#edit textarea
{
	width: 100%;
	height: 500px;
}
</style>
<form id="edit" enctype="text/plain" action="index.php" name="html" method="get">
	<input type="hidden" name="controller" value="<?php echo $this->controller ?>" />
	<input type="hidden" name="action" value="save" />
	<textarea name="content">
		<?php echo file_get_contents(ROOT.DS."view".DS.$this->controller.".php"); ?>
	</textarea>
	<input type="submit">
</form>