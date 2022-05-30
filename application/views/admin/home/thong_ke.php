<article>
    <div class="overlay-menu"></div>
    <section class="add-item">
        <div class="container-fluid">
            <?php $this->load->view('admin/include_elements/title') ?>
            <?php $this->load->view('admin/message') ?>
            <form id="frmSubmit" action="" method="POST" enctype="multipart/form-data">
                <?php
                    $xhtml = '';
                    if($general) {
                        $array_title = json_decode($general->title);
                        $array_content = json_decode($general->content );
                        $array_image_link = json_decode($general->image_link);

                        foreach($array_title as $key => $val) {
                            if($key < 4) {
                                $xhtml .= ' <div class="form-group row">
                                                <div class="col-sm-12 text-center">
                                                    <h1>Thống kê '.($key + 1).'</h1>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-1 col-form-label">Tiêu đề</label>
                                                <div class="col-sm-11">
                                                    <input class="form-control" type="text" name="title[]" value="'.$val.'" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-1 col-form-label">Nội dung</label>
                                                <div class="col-sm-11">
                                                    <textarea class="form-control" name="content[]" rows="3">'.$array_content[$key].'</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-1 col-form-label">Hình Ảnh</label>
                                                <div class="col-sm-11">
                                                    <div class="custom-file">
                                                        <input type="file" name="image_link[]" class="custom-file-input">
                                                        <label class="custom-file-label">Chọn File</label>
                                                    </div>
                            
                                                    <div class="showFile">
                                                        <img class="image-style" style="width: 100px" src="'.base_url('uploads/images/home/' . $array_image_link[$key]).'" alt="No-Img">
                                                    </div>
                                                </div>
                                            </div> '; 
                                }
                        }
                    }
                    echo $xhtml;
                ?>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-3">Lưu lại</button>
                </div>
            </form>
        </div>
    </section>
</article>