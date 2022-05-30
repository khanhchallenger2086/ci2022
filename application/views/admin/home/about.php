<article>
    <div class="overlay-menu"></div>
    <section class="add-item">
        <div class="container-fluid">
            <?php $this->load->view('admin/include_elements/title') ?>
            <?php $this->load->view('admin/message') ?>
            <form id="frmSubmit" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Tiêu đề</label>
                    <div class="col-sm-11">
                        <textarea class="form-control" name="title" rows="3"><?= @$general->title ? $general->title : '' ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Mô tả</label>
                    <div class="col-sm-11">
                        <textarea class="form-control" name="content" rows="6"><?= @$general->content ? $general->content : '' ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Link</label>
                    <div class="col-sm-11">
                        <input type="text" name="link" value="<?= @$general->link ? $general->link : '' ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Hình Ảnh</label>
                    <div class="col-sm-11">
                        <div class="custom-file">
                            <input type="file" name="image_link" class="custom-file-input">
                            <label class="custom-file-label">Chọn File</label>
                        </div>

                        <div class="showFile">
                            <img class="image-style" src="<?= base_url('uploads/images/home/' .  $general->image_link ) ?>" alt="No-Img">
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-3">Lưu lại</button>
                </div>
            </form>
        </div>
    </section>
</article>