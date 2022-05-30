<article>
    <div class="overlay-menu"></div>
    <section class="add-item">
        <div class="container-fluid">
            <?php 
                //load title
                $this->load->view('admin/include_elements/title') 
            ?>
            <form method="POST" action="" >
                <select name="status" class="form-control mb-4" id="select-status">
                    <option value="1" <?= @$info->status == 1 ? 'selected' : '' ?>>Hiển thị</option>
                    <option value="2" <?= @$info->status == 2 ? 'selected' : '' ?>>Ẩn</option>
                    <option value="3" <?= @$info->status == 3 ? 'selected' : '' ?>>Xóa</option>
                </select>
                <select class="form-control mb-4" id="select" name="pid">
                    <option value="0">Danh mục cha</option>
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
                </select>
                <div class="md-form mb-3">
                    <input name="vn_name" value="<?= isset($info->vn_name) ? $info->vn_name : set_value('vn_name') ?>"  type="text" onkeyup="return slug('vn_name', 'vn_slug');" class="form-control form-control-sm" id="vn_name" />
                    <label for="vn_name">Tên danh mục</label>
                    <div class="error"><?= form_error('vn_name') ?></div>
                </div>
                <div class="md-form mb-3">
                    <input name="vn_slug" value="<?= isset($info->vn_slug) ? $info->vn_slug : set_value('vn_slug') ?>"  type="text" onkeyup="return slug('vn_name', 'vn_slug');"  class="form-control form-control-sm" id="vn_slug" />
                    <label for="vn_slug">Slug</label>
                </div>            
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-3">Lưu lại</button><a class="btn btn-light"
                        href="<?= base_url('admincp/ads_category') ?>">Trở về</a>
                </div>
            </form>
        </div>
    </section>
</article>