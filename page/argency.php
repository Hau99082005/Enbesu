<section class="py-3 bg-light" id="agency">
        <div class="container-xxl">
            <div class="row-4">
                <div class="col-8">
                    <form class="form" action="form/dathang.php" method="post">
                        <h2 class="text-center" style="color: #fff;">Đặt Hàng</h2>
                        <p class="text-center mb-4" style="color: #fff">(Mua từ 5kg để nhận giá Sỉ)</p>
                        <div class="form-group">
                            <select id="product" name="product">
                     <option value="" id="product">Chọn Sản Phẩm<i class="fa fa-arrow-alt-circle-up" aria-hidden="true"></i></option>
                     <option value="Ngũ Cốc Dinh Dưỡng" id="product">Ngũ Cốc Dinh Dưỡng</option>
                     <option value="Ngũ Cốc Tăng Cân" id="product">Ngũ Cốc Tăng Cân</option>
                     <option value="Ngũ Cốc Lợi Sữa" id="product">Ngũ Cốc Lợi Sữa</option>
                    </select>
                        </div>
                        <div class="form-group">
                        <select id="quantily" name="quantily">
                        <option value="" id="quantily">Chọn số lượng<i class="fa fa-arrow-alt-circle-up" aria-hidden="true"></i></option>
                        <option value="0.5kg" id="quantily">0.5kg</option>
                        <option value="1kg" id="quantily">1kg</option>
                        <option value="2kg" id="quantily">2kg</option>
                        <option value="3kg" id="quantily">3kg</option>
                        <option value="5kg" id="quantily">5kg</option>
                        <option value="20kg" id="quantily">20kg</option>
                        <option value="50kg" id="quantily">50kg</option>
                        <option value="100kg" id="quantily">100kg</option>
                    </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Họ tên" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" placeholder="Điện thoại" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" id="address" placeholder="Địa chỉ" required>
                        </div>
                        <div class="form-group">
                            <textarea id="messenge" placeholder="Ghi Chú"></textarea>
                        </div>
                        <button type="submit" id="order" name="dathang">Đặt Hàng<i class=" fa fa-paper-plane" aria-hidden="true"></i></button>
                    </form>
                </div>
                <div class="col-8">
                    <img src="img/anh_001.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


