<!DOCTYPE html>
<html>

<head>
    <title>Tài liệu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid">

        <div class="card">
            <div class="card-header d-flex justify-content-center align-items-center">
                <h2>Tài liệu</h2>
            </div>

            <div class="card-header d-flex justify-content-between">
          
                <div class="col-md-4">
                <a href="them.php" class="btn btn-primary">
                    Thêm mới
                </a>
                            </div>
                <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Từ ngày</label>
                                    <input type="date" name="batdau" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tới ngày</label>
                                    <input type="date" name="ketthuc" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Chọn tìm kiếm</label> <br>
                                    <button type="submit" name="sbm" class="btn btn-primary">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>

            <div class="card-body">
                
                <table class="table bordered">
                    <thead class="thead-dark">
                        <tr align="center">
                            <th width="10%">Tiêu Đề</th>
                            <th width="15%">Bìa</th>
                            <th width="15%">Tên file</th>
                            
                            <th width="15%">Ngày đăng</th>
                            <th width="15%">Thể loại</th>
                            <th width="18%" colspan="2">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'xoa.php';
                        
                        $conn = mysqli_connect("localhost", "root", "", "document");
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }


                        $query = mysqli_query($conn, "select * from document");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr align="center">
                                <td><?php echo $row[1]; ?></td>
                                <td> <img src="img/<?php echo $row[2]; ?>" width="150"></td>
                                <td><?php echo $row[4]; ?></td>
                                <td><?php echo $row[6]; ?></td>
                                <td><?php echo $row[5]; ?></td>
                                <td>
                                    <a type="button" href="download.php?file=C:\xampp\htdocs\document\dashboard\file\<?php echo urlencode($row[4]); ?>" class="btn btn-success">Tải xuống</a>

                                </td>
                                <td>
                                    <a href="javascript:delete_id('<?php echo $row[0]; ?>')" class="btn btn-danger">Xóa tài liệu</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
             
            </div>
        </div>
    </div>

</body>
<script>
    function delete_id(idd) {
        if (confirm('Bạn có đồng ý xóa tài liệu ?')) {
            window.location.href = 'list.php?delete_id=' + idd;
        }
    }
</script>

</html>