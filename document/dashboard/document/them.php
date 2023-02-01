<!DOCTYPE html>
<html>
<head>
<title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body><?php
error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$datbase = "document";
$links = mysqli_connect($host,$user,$password);
mysqli_select_db($links, $datbase);
mysqli_set_charset($links,"utf8");
if (isset($_POST['btn-save'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $file = $_FILES['file']['name'];
    $docx_tmp = $_FILES['file']['tmp_name'];
    $img= $_FILES['img']['name'];
    $image_tmp = $_FILES['img']['tmp_name'];
    $sql_query = "INSERT INTO document (idd,title,img,content,file,category,date) VALUES ('$id','$title','$img','$content','$file','$category','$date')";
    if (mysqli_query($links, $sql_query)) {
?>
        <script type="text/javascript">
            alert('Tải tài liệu thành công ');
            window.location.href = 'list.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('Lỗi khi thêm tài liệu !');
        </script>
<?php
    }
}
$sql_tl = "SELECT * FROM category";
$query_tl = mysqli_query($links, $sql_tl);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-center align-items-center">
            <h2>Thêm tài liệu</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ID</label>
                    <input type="number" name="id" require class="form-control">
                </div>
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title" require class="form-control">
                </div>
                <div class="form-group">
                    <label>Bìa</label> <br>
                    <input type="file" name="img">
                </div>
                <div class="form-group">
                    <label>File</label> <br>
                    <input type="file" name="file">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea name="content" require class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label>Ngày đăng</label>
                    <input type="datetime-local" name="date" require class="form-control">
                </div>
                <div class="form-group">
                    <label>Thể loại</label>
                    <select class="form-control" name="category">
                        <?php
                        while ($row_tl = mysqli_fetch_assoc($query_tl)) { ?>
                            <option value="<?php echo $row_tl['category']; ?>"><?php echo $row_tl['category']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <button name="btn-save" class="btn btn-success">Thêm mới</button>
                  
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
