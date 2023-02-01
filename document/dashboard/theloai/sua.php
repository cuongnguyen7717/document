<?php
include_once '../db_conn.php';
if (isset($_GET['edit_id'])) {
	$sql_query = "SELECT * FROM category WHERE id=" . $_GET['edit_id'];
	$result_set = mysqli_query($links, $sql_query);
	$fetched_row = mysqli_fetch_array($result_set);
}
if (isset($_POST['btn-update'])) {

	$ID = $_POST['ID'];
	$TL = $_POST['TL'];


	$sql_query = "UPDATE category SET id='$ID', category='$TL' WHERE id=" . $_GET['edit_id'];

	if (mysqli_query($links, $sql_query)) {
?>
		<script type="text/javascript">
			alert('Cập nhật dữ liệu thành công !');
			window.location.href = 'theloai.php';
		</script>
	<?php
	} else {
	?>
		<script type="text/javascript">
			alert('Cập nhật dữ liệu thất bại !');
		</script>
	<?php
	}
	// sql query execution function
}
if (isset($_POST['btn-cancel'])) {
	?>
	<script type="text/javascript">
		window.location.href = 'theloai.php';
	</script>
<?php
}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header d-flex justify-content-center align-items-center">
			<h2>Sửa thông tin tài khoản</h2>
		</div>

		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>ID</label>
					<input type="number" name="ID" class="form-control" value="<?php echo $fetched_row['id']; ?>" required />

				</div>
				<div class="form-group">
					<label>Thể loại</label>
					<input type="text" name="TL" class="form-control" value="<?php echo $fetched_row['category']; ?>" required />
				</div>
				<div class="card-footer d-flex justify-content-between">
					<button name="btn-update" class="btn btn-success">Sửa</button>
                   
                </div>

			</form>
		</div>
	</div>
</div>