
<div class="block_about--testimonials">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="about--testimonials-item about--testimonials-left">
                <div class="testimonials-left--title">
                    <h5><?=word_limiter(@$about_sapo->title, 30)?></h5>
                    <div class="line-custom"></div>
                </div>
                <div class="testimonials-left--content d-flex" style="margin: 10px;">
                    <?=word_limiter(@$about_sapo->vn_sapo, 100)?>
                </div>                                        
                <div class="testimonials-left--button d-flex">
                    <a href="<?= base_url('gioi-thieu.html')?>">
                        <i class="fas fa-plus"></i>
                        Tìm hiểu thêm
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="about--testimonials-item about--testimonials-right">
                <div class="testimonials-right--title">
                    <h3>Gửi yêu cầu báo giá</h3>
                </div>
                <div class="testimonials-right--block-input" id="contact">
                    <div class="block-input_item">
                        <input type="text" name="name" placeholder="Họ tên (*)" required>
                    </div>
                    <div class="block-input_item">
                        <input type="number" name="phone" placeholder="Điện thoại (*)" required>
                    </div>
                    <div class="block-input_item">
                        <input type="text" name="address" placeholder="Địa chỉ (*)" required>
                    </div>
                    <div class="block-input_item">
                        <textarea style="width: 100%; height: 50px;" name="content" id="" cols="10" rows="3" placeholder="Yêu cầu dịch vụ"></textarea>
                    </div>
                    <div class="block-input_button">
                        <button id="btn-contact">Gửi yêu cầu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>