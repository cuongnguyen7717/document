<?php
require_once 'db_conn.php';

require_once 'xoa.php';

?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-center align-items-center">
            <h2>Danh sách thể loại</h2>
        </div>
        
        <div class="card-header d-flex justify-content-between">
            <a href="theloai.php?page_layout=them" class="btn btn-primary">
                Thêm mới
            </a>
        </div>
        <div class="card-body">
            <table class="table bordered">
                <thead class="thead-dark">
                    <tr align="center">
                        <th>Id</th>
                        <th>Thể loại</th>
                        <th width="30%" colspan="4">Thao tác</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $sql_query = "SELECT * FROM category";
                    $result_set = mysqli_query($links, $sql_query);
                    if (mysqli_num_rows($result_set) > 0) {
                        while ($row = mysqli_fetch_row($result_set)) {
                    ?>
                            <tr align="center">
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td align="center">
                                    <a class="btn btn-warning" onclick="return edit_id('<?php echo $row[0]; ?>')" href="theloai.php?page_layout=sua&edit_id=<?php echo $row[0]; ?>">Sửa</a>
                                    <a class="btn btn-danger" href="javascript:delete_id('<?php echo $row[0]; ?>')">Xóa</a>
                                </td>

                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5">Không có thể loại !</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function delete_id(ID) {
        if (confirm('Bạn có chắc chắn xóa thể loại này ?')) {
            window.location.href = 'theloai.php?delete_id=' + ID;
        }
    }
</script>