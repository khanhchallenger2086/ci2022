<?php
    $name_item = 'hỗ trợ';
    $name_class = 'supports';
?>
<article>
    <div class="overlay-menu"></div>
    <section class="add-item">
        <div class="container-fluid">
            <?php $this->load->view('admin/include_elements/title') ?>
            <form method="POST" action="" enctype="multipart/form-data">
                <select name="status" class="form-control mb-4" id="select-status">
                    <option value="1" <?= (isset($filter['status']) && $filter['status'] == 1) ? 'selected' : '' ?>>Hiển thị</option>
                    <option value="2" <?= (isset($filter['status']) && $filter['status'] == 2) ? 'selected' : '' ?>>Ẩn</option>
                    <option value="3" <?= (isset($filter['status']) && $filter['status'] == 3) ? 'selected' : '' ?>>Xóa</option>
                </select>
                <!-- <div class="form-group">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label class="check-box mb-2">
                            <input type="checkbox" name="is_home" value="1" <?= @$info->is_home == 1? 'checked' : '' ?>/><span class="checkmark"></span><span>Hiện trang chủ</span>
                            </label>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label class="check-box mb-2">
                            <input type="checkbox" name="is_sell" value="1" <?= @$info->is_sell == 1? 'checked' : '' ?>/><span class="checkmark"></span>Sản phẩm bán chạy
                            </label>
                        </div>
                    </div>
                </div> -->
                <div class="md-form mb-3">
                    <input name="fullname" value="<?= isset($info->fullname) ? $info->fullname : set_value('fullname') ?>"  type="text"  class="form-control form-control-sm" id="fullname" />
                    <label for="fullname">Tên <?= $name_item ?></label>
                    <div class="error"><?= form_error('fullname') ?></div>
                </div>
                <div class="md-form mb-3">
                    <input name="nick_skype" value="<?= isset($info->nick_skype) ? $info->nick_skype : set_value('nick_skype') ?>"  type="text"  class="form-control form-control-sm" id="nick_skype" />
                    <label for="nick_skype">Nick skype</label>
                </div>
                <div class="md-form mb-3">
                    <input name="cell" value="<?= isset($info->cell) ? $info->cell : set_value('cell') ?>"  type="text" class="form-control form-control-sm" id="cell" />
                    <label for="cell">Điện thoại</label>
                </div>

                <div class="md-form mb-3">
                    <input name="email" value="<?= isset($info->email) ? $info->email : set_value('email') ?>"  type="text" class="form-control form-control-sm" id="email" />
                    <label for="cell">Email</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-3">Lưu lại</button><a class="btn btn-light"
                        href="<?= base_url('admincp/' . $name_class) ?>">Trở về</a>
                </div>
            </form>
        </div>
    </section>
</article>