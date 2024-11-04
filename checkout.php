<?php include "partical/header.php"; ?>

<section class="checkout">
    <div class="container">
        <h1 class="tittle text-center">Thanh toán</h1>
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-6">
                <div class="card">
                    <div class="card-header">Thông tin khách hàng</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        Thông tin đơn hàng
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Thêm ghi chú</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Đơn giá</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Robo Trái Cây</td>
                                <td>450.000đ</td>
                                <td>450.000đ</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Tạm tính: </td>
                                <td>450.000đ</td>
                            </tr>
                            <tr>
                                <td scope="row">Phí vận chuyển: </td>
                                <td>30.000đ</td>
                            </tr>
                            <tr>
                                <td scope="row">Tổng cộng: </td>
                                <td>480.000đ</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<?php include "partical/footer.php"; ?>