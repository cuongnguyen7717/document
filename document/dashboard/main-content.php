<div class="main-content">
	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="card card-stats">
				<div class="card-header">
					<div class="icon icon-warning">
					<span class="material-icons">group</span>
					</div>
				</div>
				<div class="card-content">
					<p class="category"><strong>Người Dùng</strong></p>
					<h3 class="card-title">40,000</h3>
				</div>
				<div class="card-footer">
					<div class="stats">
						<i class="material-icons text-info">info</i>
						<a href="#">Xem Thông Tin</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="card card-stats">
				<div class="card-header">
					<div class="icon icon-rose">
						<span class="material-icons">shopping_cart</span>
					</div>
				</div>
				<div class="card-content">
					<p class="category"><strong>Lượt Tải</strong></p>
					<h3 class="card-title">102</h3>
				</div>
				<div class="card-footer">
					<div class="stats">
						<i class="material-icons">local_offer</i>
						Số lượng</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="card card-stats">
				<div class="card-header">
					<div class="icon icon-success">
						<span class="material-icons">attach_money</span>

					</div>
				</div>
				<div class="card-content">
					<p class="category"><strong>doanh Thu</strong></p>
					<h3 class="card-title">490 Triệu</h3>
				</div>
				<div class="card-footer">
					<div class="stats">
						<i class="material-icons">date_range</i> Doanh Thu Hàng Ngày
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="card card-stats">
				<div class="card-header">
					<div class="icon icon-info">
						<span class="material-icons">follow_the_signs</span>
					</div>
				</div>
				<div class="card-content">
					<p class="category"><strong>Người theo dõi</strong></p>
					<h3 class="card-title">+1500</h3>
				</div>
				<div class="card-footer">
					<div class="stats">
						<i class="material-icons">update</i>
						tổng lượt theo dõi
					</div>
				</div>
			</div>
		</div>


	</div>



	<div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-center align-items-center">
                <h2>Tài liệu</h2>
            </div>


            <div class="card-body">
                <table class="table bordered">
                    <thead class="thead-dark">
                        <tr align="center">
                            <th width="10%">Tiêu Đề</th>
                            <th width="15%">Tên file</th>
                            <th width="15%">Ngày đăng</th>
                            <th width="15%">Thể loại</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      
                        $conn = mysqli_connect("localhost", "root", "", "document");
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }


                        $query = mysqli_query($conn, "select * from document");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr align="center">
                                <td><?php echo $row[1]; ?></td>
                               
                                <td><?php echo $row[4]; ?></td>
                                <td><?php echo $row[6]; ?></td>
                                <td><?php echo $row[5]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>