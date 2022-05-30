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
                <select class="form-control mb-4" id="select" name="cid">
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
                    <input name="vn_name" value="<?= isset($info->vn_name) ? $info->vn_name : set_value('vn_name') ?>"  type="text" onkeyup="return slug('vn_name', 'vn_slug');" class="form-control form-control-sm" id="vn_name" />
                    <label for="vn_name">Tên bài viết</label>
                    <div class="error"><?= form_error('vn_name') ?></div>
                </div>
                <div class="md-form mb-3">
                    <input name="vn_slug" value="<?= isset($info->vn_slug) ? $info->vn_slug : set_value('vn_slug') ?>"  type="text" onkeyup="return slug('vn_name', 'vn_slug');"  class="form-control form-control-sm" id="vn_slug" />
                    <label for="vn_slug">Slug</label>
                </div>
                <div class="md-form mb-3">
                    <input name="h1" value="<?= isset($info->h1) ? $info->h1 : set_value('h1') ?>"  type="text" class="form-control form-control-sm" id="h1" />
                    <label for="h1">H1</label>
                </div>
                <div class="md-form mb-3">
                    <input name="h2" value="<?= isset($info->h2) ? $info->h2 : set_value('h2') ?>"  type="text" class="form-control form-control-sm" id="h2" />
                    <label for="h2">H2</label>
                </div>
                 <div class="md-form mb-3">
                    <input name="h3" value="<?= isset($info->h3) ? $info->h3 : set_value('h3') ?>"  type="text" class="form-control form-control-sm" id="h3" />
                    <label for="h3">H3</label>
                </div>
                 <div class="md-form mb-3">
                    <input name="h4" value="<?= isset($info->h4) ? $info->h4 : set_value('h4') ?>"  type="text" class="form-control form-control-sm" id="h4" />
                    <label for="h4">H4</label>
                </div>
                 <div class="md-form mb-3">
                    <input name="h5" value="<?= isset($info->h5) ? $info->h5 : set_value('h5') ?>"  type="text" class="form-control form-control-sm" id="h5" />
                    <label for="h5">H5</label>
                </div>
                <div class="md-form mb-3">
                    <input name="vn_title" value="<?= isset($info->vn_title) ? $info->vn_title : set_value('vn_title') ?>"  type="text" class="form-control form-control-sm" id="vn_title" />
                    <label for="vn_title">Title</label>
                </div>
                <div class="md-form mb-3">
                    <input name="vn_keyword" value="<?= isset($info->vn_keyword) ? $info->vn_keyword : set_value('vn_keyword') ?>"  type="text" class="form-control form-control-sm" id="vn_keyword" />
                    <label for="vn_keyword">Keyword</label>
                </div>
                <div class="md-form mb-3">
                    <textarea name="vn_description" class="md-textarea form-control" id="vn_description" rows="5"><?= isset($info->vn_description) ? $info->vn_description : set_value('vn_description') ?></textarea>
                    <label for="vn_description">Description</label>
                </div>    
                <div class=" mb-3">
                    <label class="label-ck" for="sapo">Mô tả bài viết</label>
                    <textarea name="vn_sapo" class="md-textarea form-control" id="sapo" rows="5"><?= isset($info->vn_sapo) ? $info->vn_sapo : set_value('vn_sapo') ?></textarea>
                </div>     
                <div class="mb-3">
                    <!-- <textarea class="form-control" rows="10" id="editor" name="tinh_nang"><?= isset($info->vn_detail) ? $info->vn_detail : set_value('vn_detail') ?></textarea> -->
                    <label class="label-ck" for="editor">Chi tiết bài viết</label>
                    <textarea name="vn_detail" class="md-textarea form-control" id="editor" rows="5"><?= isset($info->vn_detail) ? $info->vn_detail : set_value('vn_detail') ?></textarea>
                </div> 
                <!--<div class="form-group">-->
                <!--    <label class="label-ck">Đính kèm video cuối bài viết</label>-->
                <!--    <select class="form-control mb-4" id="select" name="videos_id">-->
                <!--        <option value="0">Chọn video</option>-->
                <!--        <?php foreach ($list_video as $row) { ?>-->
                <!--            <option value="<?php echo $row->id ?>"  <?= @$info->videos_id == $row->id ? 'selected' : '' ?>><?php echo $row->vn_name ?></option>-->
                <!--        <?php } ?>-->
                <!--    </select>-->
                <!--</div> -->
                <div class="form-group">
                    <label class="label-ck">Hình Ảnh (Kích thướt chuẩn: <?= @$info->cid == 3 ? '449x677' : '677x449' ?>px)</label>
                    <div class="custom-file">
                        <input type="file" name="image_link" class="custom-file-input" id="customFile">
                        <label class="custom-file-label">Chọn File</label>
                    </div>

                    <div class="showFile">
                        <?php if (!isset($info->image_link)) { ?>
                            <img class="image-style" id="profile-img-tag" src="<?= base_url() ?>public/admin/img/no-image.png" alt="No-Img">
                        <?php } else { ?>
                            <img class="image-style" id="profile-img-tag" src="<?= base_url('uploads/images/articles/small/' . $info->image_link) ?>" alt="No-Img">
                        <?php } ?>
                    </div>
                </div> 
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-3">Lưu lại</button><a class="btn btn-light"
                        href="<?= base_url('admincp/articles') ?>">Trở về</a>
                </div>
            </form>
        </div>
    </section>
</article>