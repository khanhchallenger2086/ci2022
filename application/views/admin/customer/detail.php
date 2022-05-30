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
                <!-- <select class="form-control mb-4" id="select" name="cid">
                    <?php foreach ($catalogs as $row) { ?>
                        <?php if ($row->subs) { ?>
                            <optgroup label="<?php echo $row->vn_name ?>">
                                <?php foreach ($row->subs as $sub) { ?>
                                    <option value="<?php echo $sub->id ?>" <?= @$info->cid == $sub->id ? 'selected' : '' ?>><?php echo $sub->vn_name ?> </option>
                                <?php } ?>
                            </optgroup>
                        <?php } else { ?>
                            <option value="<?php echo $row->id ?>"  <?= @$info->cid == $row->id ? 'selected' : '' ?>><?php echo $row->vn_name ?></option>
                        <?php } ?>
                    <?php } ?>
                </select> -->
                <div class="md-form mb-3">
                    <input name="vn_name" value="<?= isset($info->vn_name) ? $info->vn_name : set_value('vn_name') ?>"  type="text" onkeyup="return slug('vn_name', 'vn_slug');" class="form-control form-control-sm" id="vn_name" />
                    <label for="vn_name">Tên khách hàng</label>
                    <div class="error"><?= form_error('vn_name') ?></div>
                </div>    
                <div class="md-form mb-3">
                    <input name="link" value="<?= isset($info->link) ? $info->link : set_value('link') ?>"  type="text" class="form-control form-control-sm" id="link" />
                    <label for="link">Link khách hàng Hoặc Chi tiết</label>
                    <div class="error"><?= form_error('link') ?></div>
                </div>         
                <div class="form-group">
                <label class="label-ck">Hình Ảnh (Kích thướt chuẩn: 677x449px)</label>
                    <div class="custom-file">
                        <input type="file" name="image_link" class="custom-file-input" id="customFile">
                        <label class="custom-file-label">Chọn File</label>
                    </div>

                    <div class="showFile">
                        <?php if (!isset($info->image_link)) { ?>
                            <img class="image-style" id="profile-img-tag" src="<?= base_url() ?>public/admin/img/no-image.png" alt="No-Img">
                        <?php } else { ?>
                            <img class="image-style" id="profile-img-tag" src="<?= base_url('uploads/images/customer/small/' . $info->image_link) ?>" alt="No-Img">
                        <?php } ?>
                    </div>
                </div> 
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-3">Lưu lại</button><a class="btn btn-light"
                        href="<?= base_url('admincp/customer') ?>">Trở về</a>
                </div>
            </form>
        </div>
    </section>
</article>