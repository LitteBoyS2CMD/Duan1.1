<?php
$isEdit = isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] === 'sua' ? true : false;
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"><?= $isEdit ? "Sửa" : "Thêm" ?> sản phẩm</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" novalidate="novalidate">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-9">
                    <div class="form-group">
                        <label for="name_product">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" id="name_product" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="name_product">Mô tả sản phẩm</label>
                        <textarea id="summernote" name="content" class="d-none"></textarea>
                    </div>

                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin sản phẩm</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="price_product" class="col-sm-4 col-form-label">Giá bán</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="price_product" placeholder="Nhập giá bán">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="sale_price_product" class="col-sm-4 col-form-label">Giá khuyến mãi</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="sale_price_product" placeholder="Nhập giá khuyến mãi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="form-group">
                        <label for="name_product">Danh mục sản phẩm</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name_product">Ảnh sản phẩm</label>
                        
                    </div>
                </div>

            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>