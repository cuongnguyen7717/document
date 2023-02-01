<?php
include_once 'db_conn.php';
if (isset($_POST['btn-update'])) {
    $ID = $_POST['ID'];
    $TL = $_POST['TL'];
    $sql_query = "INSERT INTO category(id,category) VALUES('$ID','$TL')";
    if (mysqli_query($links, $sql_query)) {
?>
        <script type="text/javascript">
            alert('Thể loại đã được thêm !');
            window.location.href = 'theloai.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('Lỗi khi thêm ! ');
        </script>
<?php
    }
}
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-center align-items-center">
            <h2>Thêm thể loại </h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ID</label>
                    <input type="number" name="ID" class="form-control">
                </div>
                <div class="form-group">
                    <label>Thể loại</label>
                    <input type="text" name="TL" class="form-control">
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <button name="btn-update" class="btn btn-success">Thêm</button>
                    <a href="theloai.php" class="btn btn-danger">Quay Lại</a>
                </div>
                
            </form>
        </div>
    </div>
</div>