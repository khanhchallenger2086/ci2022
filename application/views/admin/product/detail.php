<?php
    $name_item = 'sản phẩm';
    $name_class = 'product';
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
                <div class="form-group">
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
                </div>
                <div class="md-form mb-3">
                    <input name="vn_name" value="<?= isset($info->vn_name) ? $info->vn_name : set_value('vn_name') ?>"  type="text" onkeyup="return slug('vn_name', 'vn_slug');" class="form-control form-control-sm" id="vn_name" />
                    <label for="vn_name">Tên <?= $name_item ?></label>
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
                <?php 
                    if(!empty($info->properties)) {
                        $properties = json_decode($info->properties);
                    }
                ?>
                <div class="md-form mb-3 pw">
                    <p style="color: #1E74DA;">Công suất dự phòng</p>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <input name="properties[pw_1]" value="<?= isset($properties->pw_1) ? $properties->pw_1 : set_value('properties[pw_1]') ?>"  type="text" class="form-control form-control-sm" />
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <input  name="properties[pw_2]" value="<?= isset($properties->pw_2) ? $properties->pw_2 : set_value('properties[pw_2]') ?>"  type="text" class="form-control form-control-sm" />
                        </div>
                    </div>                   
                </div>
                <div class="md-form mb-3 pw">
                    <p style="color: #1E74DA;">Công suất liên tục</p>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <input name="properties[pw_3]" value="<?= isset($properties->pw_3) ? $properties->pw_3 : set_value('properties[pw_3]') ?>"  type="text" class="form-control form-control-sm" />
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <input  name="properties[pw_4]" value="<?= isset($properties->pw_4) ? $properties->pw_4 : set_value('properties[pw_4]') ?>"  type="text" class="form-control form-control-sm" />
                        </div>
                    </div>                   
                </div>
                <div class="md-form mb-3">
                    <input name="code" value="<?= isset($info->code) ? $info->code : set_value('code') ?>"  type="text" class="form-control form-control-sm" id="code" />
                    <label for="code">Mã <?= $name_item ?></label>
                </div>    
                <div class=" mb-3">
                    <label class="label-ck" for="sapo">Mô tả <?= $name_item ?></label>
                    <textarea name="vn_sapo" class="md-textarea form-control" id="sapo" rows="5"><?= isset($info->vn_sapo) ? $info->vn_sapo : set_value('vn_sapo') ?></textarea>
                </div>     
                <div class="mb-3">
                    <!-- <textarea class="form-control" rows="10" id="editor" name="tinh_nang"><?= isset($info->vn_detail) ? $info->vn_detail : set_value('vn_detail') ?></textarea> -->
                    <label class="label-ck" for="editor">Chi tiết <?= $name_item ?></label>
                    <textarea name="vn_detail" class="md-textarea form-control" id="editor" rows="5"><?= isset($info->vn_detail) ? $info->vn_detail : set_value('vn_detail') ?></textarea>
                </div> 
                <div class="form-group">
                    <label class="label-ck">Hình Ảnh (Kích thước chuẩn: 250x250px)</label>
                    <div class="custom-file">
                        <input type="file" name="image_link" class="custom-file-input" id="customFile">
                        <label class="custom-file-label">Chọn File</label>
                    </div>

                    <div class="showFile">
                        <?php if (!isset($info->image_link)) { ?>
                            <img class="image-style" id="profile-img-tag" src="<?= base_url() ?>public/admin/img/no-image.png" alt="No-Img">
                        <?php } else { ?>
                            <img class="image-style" id="profile-img-tag" src="<?= base_url('uploads/images/'.$name_class.'/large/' . $info->image_link) ?>" alt="No-Img">
                        <?php } ?>
                    </div>
                </div> 
                <!-- <div class="form-group row">
                    <label class="label-ck">Danh sách ảnh kèm theo</label>
                    <div class="custom-file">
                        <input type="file" name="image_list[]" multiple class="custom-file-input" id="files">
                        <label class="custom-file-label">Chọn File (Chọn một ảnh và nhấn Ctrl để chọn nhiều ảnh)</label>
                    </div>
                    <div class="showFile" id="showMulti">
                        <?php if (!isset($info->image_list)) { ?>
                            <img class="image-style" id="profile-img-tag" src="<?= base_url() ?>public/admin/img/no-image.png" alt="No-Img">
                        <?php } else { ?>
                            <?php $image_list = json_decode($info->image_list) ?>
                            <?php foreach ($image_list as $img) { ?>
                                <img class="image-style" id="profile-img-tag" src="<?= base_url('uploads/images/'.$name_class.'/small/' . $img) ?>" alt="No-Img">
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div> -->
                <?php if (!isset($info->list_img)) { ?>
                    <!-- <div class="form-group">
                        <label>Ảnh mô tả sản phẩm</label>
                        <div id="multiImagePanel">
                            <div class="row">
                                <input type="hidden" id="numimage" value="1">
                                <div class="img-wrap col-md-3">
                                    <div class="image_1" id="image" style="background-image: url('<?= base_url() ?>public/admin/img/custom-image.png');">
                                        <label for="image_1">
                                            <img id="image_preview_1" height="150px">
                                        </label>
                                        <input type="file" class="photo" name="image_list[]" id="image_1" onchange="makeImageArr(event, 1)" accept="image/*">
                                        <svg id="i-close" onclick="this.parentElement.parentElement.remove();" class="remove button_1" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M2 30 L30 2 M30 30 L2 2"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                <?php } else { ?>
                    <!-- <div class="form-group">
                        <label>Ảnh mô tả sản phẩm</label>
                        <div id="multiImagePanel">
                            <div class="row">                               
                                <?php if (count($info->list_img) > 0) { ?>
                                    <input type="hidden" id="numimage" value="<?= count($info->list_img) ?>">                           
                                    <?php foreach ($info->list_img as $k => $img) { ?>
                                        <div class="img-wrap col-md-3">
                                            <div class="image_1" id="image" style="background-image: url('<?= base_url() ?>public/admin/img/custom-image.png');">
                                                <label for="image_<?= $k + 1 ?>">
                                                    <img id="image_preview_<?= $k + 1 ?>" height="150px" src="<?= base_url('uploads/images/'.$name_class.'/large/' . $img->name) ?>">
                                                </label>
                                                <input disabled="disabled" type="file" class="photo" name="image_list[]" id="image_<?= $k + 1 ?>" onchange="makeImageArr(event, <?= $k + 1 ?>)" accept="image/*">
                                                <input type="hidden" name="old_images[]" value="<?= $img->name ?>"  id="old_images_<?= $k + 1 ?>">
                                                <svg id="i-close" onclick="this.parentElement.parentElement.remove();" class="remove button_1" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M2 30 L30 2 M30 30 L2 2"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } else { ?>
                                    <input type="hidden" id="numimage" value="1">
                                    <div class="img-wrap col-md-3">
                                        <div class="image_1" id="image" style="background-image: url('<?= base_url() ?>public/admin/img/custom-image.png');">
                                            <label for="image_1">
                                                <img id="image_preview_1" height="150px">
                                            </label>
                                            <input type="file" class="photo" name="image_list[]" id="image_1" onchange="makeImageArr(event, 1)" accept="image/*">
                                            <svg id="i-close" onclick="this.parentElement.parentElement.remove();" class="remove button_1" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M2 30 L30 2 M30 30 L2 2"></path>
                                            </svg>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div> -->
                <?php } ?>
                <!-- <div class="form-group">
                    <button class="btn btn-info" type="button" onclick="addOneImage()"><i class="fa fa-plus"></i>&emsp;Thêm ảnh</button>
                </div> -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-3">Lưu lại</button><a class="btn btn-light"
                        href="<?= base_url('admincp/' . $name_class) ?>">Trở về</a>
                </div>
            </form>
        </div>
    </section>
</article>
