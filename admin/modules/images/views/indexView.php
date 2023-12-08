<?php
get_header();
?>
<?php 
// echo "<pre>";
// print_r($_FILES);
// echo "<pre>";
?>

<style>
	img{
		max-height: 100px;
		height: auto;
	}
</style>
<h1>Upload Ajax</h1>
	<form id="upload_multi" action="" enctype="multipart/form-data" method="post"> 
		<input type="file" name="images[]" id="file" multiple="">
		<input type="submit" id="bt_upload" name="bt_upload" value="Chọn file">
	</form>
<!-- Hiển thị ảnh đã upload -->
	<div id="result"></div>

<?php
get_footer();
?>