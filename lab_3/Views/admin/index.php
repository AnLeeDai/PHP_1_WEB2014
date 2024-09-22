<div class="container my-4">
    <div class="row">
        <nav class="col-md-3 mb-4">
            <ul class="list-group">
                <li class="list-group-item"><a href="#" class="text-dark">Thêm sản phẩm mới</a></li>
                <li class="list-group-item"><a href="#" class="text-dark">Danh sách sản phẩm</a></li>
                <li class="list-group-item"><a href="#" class="text-dark">Thống kê sản phẩm</a></li>
            </ul>
        </nav>

        <main class="col-md-9">
            <div class="card mb-4">
                <div class="card-header">
                    <h2>Thêm sản phẩm mới</h2>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="productName" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Giá sản phẩm</label>
                            <input type="number" class="form-control" id="productPrice" placeholder="Nhập giá sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label for="productDescription" class="form-label">Mô tả sản phẩm</label>
                            <textarea class="form-control" id="productDescription" rows="3"
                                      placeholder="Mô tả chi tiết về sản phẩm"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="productImage" class="form-label">Hình ảnh sản phẩm</label>
                            <input type="file" class="form-control" id="productImage">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Danh sách sản phẩm</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Hình ảnh</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1</td>
                            <td>Sản phẩm A</td>
                            <td>300,000 VND</td>
                            <td><img src="assets/images/product-1.png" alt="Sản phẩm A" width="50"></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">Sửa</a>
                                <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Sản phẩm B</td>
                            <td>400,000 VND</td>
                            <td><img src="assets/images/product-2.png" alt="Sản phẩm B" width="50"></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">Sửa</a>
                                <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
