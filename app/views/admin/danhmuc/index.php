<!-- <div class="container-fluid"> -->

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Bảng danh mục</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Tên danh mục</th>
                        <th>Tên loại</th>
                        <th>
                            Hành động
                            <a href="index.php?url=admin/danhmuc/them">
                                <button style="margin-left: 12px;" type="button" class="btn btn-success btn-sm">
                                    Thêm
                                </button>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listDanhMuc as $key => $danhmuc) : ?>
                       
                  
                    <tr>
                        <td><?=$danhmuc['ten_danh_muc']?></td>
                        <td><?=$danhmuc['ten_loai']?></td>
                        <td>
                            <a href="index.php?url=admin/danhmuc/sua&ma_danh_muc=<?= $danhmuc['ma_danh_muc']?>">
                                <button type="button" class="btn btn-warning btn-sm">
                                    Sửa
                                </button>
                            </a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa không')" href="index.php?url=admin/danhmuc/xoa&ma_danh_muc=<?=$danhmuc['ma_danh_muc']?>">
                                <button type="button" class="btn btn-danger btn-sm">
                                    Xóa
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    
            </table>
        </div>

    </div>
</div>






<!-- </div> -->