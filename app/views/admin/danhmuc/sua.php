<!-- <div class="container-fluid"> -->

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Thêm danh mục</h5>

        <div class="form-group row">
            <label class="col-md-3 m-t-15">Mã danh mục</label>
            <div class="col-sm-9">
                 <form action="?url=admin/danhmuc/sua&ma_danh_muc=<?=$danhMucID['ma_danh_muc']?>" method="post">
                <input type="text" class="form-control" id="" value="<?=$danhMucID['ma_danh_muc']?>" disabled  name="ma_danh_muc">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 m-t-15">Tên danh mục</label>
            <div class="col-sm-9">
               
                <input type="text" class="form-control" id="fname" value="<?=$danhMucID['ten_danh_muc']?>"  placeholder="Viết tên danh mục" name="ten_danh_muc">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 m-t-15">Tên loại</label>
            <div class="col-md-9">
               

               
                <select class="select2 form-control m-t-15" multiple="multiple" style="height: 36px;width: 100%;" name="ma_loai">
                <?php foreach ($listLoai as $key => $loai) :?>
                    <option value="<?=$loai['ma_loai']?>"  <?= $loai['ma_loai'] == $danhMucID['ma_loai'] ? 'selected' : '' ?> ><?=$loai['ten_loai']?></option>
                  <?php endforeach; ?>
                </select>
            </div>
        </div>
       
    </div>
    <div class="border-top">
        <div class="card-body">
            <button type="submit" class="btn btn-warning">Cập nhật</button>
            <button type="button" class="btn btn-info">Nhập lại</button>
            <button type="button" class="btn btn-danger">Hủy</button>
        </div>
    </div>
    </form>

</div>







<!-- </div> -->