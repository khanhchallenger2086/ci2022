<article>

    <div class="overlay-menu"></div>

    <section class="add-item">

        <div class="container-fluid">

            <?php $this->load->view('admin/include_elements/title') ?>

            <?php $this->load->view('admin/message') ?>

            <form id="frmSubmit" action="" method="POST">
                <div class="form-group row">

                    <label class="col-sm-1 col-form-label">H1</label>

                    <div class="col-sm-11">

                        <input type="text" name="h1" value="<?= @$general->h1 ? $general->h1 : '' ?>" class="form-control">

                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-sm-1 col-form-label">H2</label>

                    <div class="col-sm-11">

                        <input type="text" name="h2" value="<?= @$general->h2 ? $general->h2 : '' ?>" class="form-control">

                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-sm-1 col-form-label">H3</label>

                    <div class="col-sm-11">

                        <input type="text" name="h3" value="<?= @$general->h3 ? $general->h3 : '' ?>" class="form-control">

                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-sm-1 col-form-label">H4</label>

                    <div class="col-sm-11">

                        <input type="text" name="h4" value="<?= @$general->h4 ? $general->h4 : '' ?>" class="form-control">

                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-sm-1 col-form-label">H5</label>

                    <div class="col-sm-11">

                        <input type="text" name="h5" value="<?= @$general->h5 ? $general->h5 : '' ?>" class="form-control">

                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-sm-1 col-form-label">Title Site</label>

                    <div class="col-sm-11">

                        <input type="text" name="vn_title_site" value="<?= @$general->vn_title_site ? $general->vn_title_site : '' ?>" class="form-control">

                    </div>

                </div>


                <div class="form-group row">

                    <label class="col-sm-1 col-form-label">Keywords Site</label>

                    <div class="col-sm-11">

                        <input type="text" name="vn_keyword_site" value="<?= @$general->vn_keyword_site ? $general->vn_keyword_site : '' ?>" class="form-control">

                    </div>

                </div>



                <div class="form-group row">

                    <label class="col-sm-1 col-form-label">Description Site</label>

                    <div class="col-sm-11">

                        <textarea class="form-control" name="vn_description_site" rows="3"><?= @$general->vn_description_site ? $general->vn_description_site : '' ?></textarea>

                    </div>

                </div>



                <div class="form-group row">

                    <label class="col-sm-1 col-form-label">Hotline</label>

                    <div class="col-sm-11">

                        <input type="text" name="hotline" value="<?= @$general->hotline ? $general->hotline : '' ?>" class="form-control">

                    </div>

                </div>
                

                <div class="form-group row">     

                    <label class="col-sm-1 col-form-label">Email</label>

                    <div class="col-sm-11 email" id="email">

                        <input type="text" name="email" value="<?= @$general->email ? $general->email : '' ?>" class="form-control col-sm-12 add-email" style="margin-top:5px;">                                      

                    </div>

                </div>

                <div class="form-group row">     

                    <label class="col-sm-1 col-form-label">Địa chỉ website</label>

                    <div class="col-sm-11 email" id="email">

                        <input type="text" name="address_website" value="<?= @$general->address_website ? $general->address_website : '' ?>" class="form-control col-sm-12 add-email" style="margin-top:5px;">                                      

                    </div>

                </div>

                <div class="form-group row">     

                    <label class="col-sm-1 col-form-label">Zalo</label>

                    <div class="col-sm-11 email" id="email">

                        <input type="text" name="zalo" value="<?= @$general->zalo ? $general->zalo : '' ?>" class="form-control col-sm-12 add-email" style="margin-top:5px;">                                      

                    </div>

                </div>

                
                <div class="form-group row">     

                    <label class="col-sm-1 col-form-label">Facebook</label>

                    <div class="col-sm-11 email" id="email">

                        <input type="text" name="facebook" value="<?= @$general->facebook ? $general->facebook : '' ?>" class="form-control col-sm-12 add-email" style="margin-top:5px;">                                      

                    </div>

                </div>

                
                <div class="form-group row">     

                    <label class="col-sm-1 col-form-label">Youtube</label>

                    <div class="col-sm-11 email" id="email">

                        <input type="text" name="youtube" value="<?= @$general->youtube ? $general->youtube : '' ?>" class="form-control col-sm-12 add-email" style="margin-top:5px;">                                      

                    </div>

                </div>

                <div class="form-group row">     

                    <label class="col-sm-1 col-form-label">Thẻ alt</label>

                    <div class="col-sm-11 email" id="email">

                        <input type="text" name="alt_web" value="<?= @$general->alt_web ? $general->alt_web : '' ?>" class="form-control col-sm-12 add-email" style="margin-top:5px;">                                      

                    </div>

                </div>

                <div class="form-group row">     

                    <label class="col-sm-1 col-form-label">Thẻ alt</label>

                    <div class="col-sm-11 email" id="email">

                        <input type="text" name="alt_web" value="<?= @$general->alt_web ? $general->alt_web : '' ?>" class="form-control col-sm-12 add-email" style="margin-top:5px;">
                    </div>

                </div>

                <div class="form-group row">     

                    <label class="col-sm-1 col-form-label">Giới thiệu cuối website</label>

                    <div class="col-sm-11 email" id="email">                                
                        <textarea id="editor" name="about_footer" class="form-control col-sm-12 add-email" style="margin-top:5px;" rows="3"><?= @$general->about_footer ? $general->about_footer : '' ?></textarea>
                    </div>

                </div>
              

                <!-- <div class="form-group row">
                    <div class="col-sm-12 text-center">
                        <h1>Chi nhánh 1</h1>
                   </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Tên</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_1_name" value="<?= @$general->cn_1_name ? $general->cn_1_name : '' ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Địa chỉ</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_1_address" value="<?= @$general->cn_1_address ? $general->cn_1_address : '' ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Điện thoại</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_1_phone" value="<?= @$general->cn_1_phone ? $general->cn_1_phone : '' ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Hotline</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_1_hotline" value="<?= @$general->cn_1_hotline ? $general->cn_1_hotline : '' ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Email</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_1_email" value="<?= @$general->cn_1_email ? $general->cn_1_email : '' ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Fax</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_1_fax" value="<?= @$general->cn_1_fax ? $general->cn_1_fax : '' ?>" />
                    </div>
                </div>

                
                <div class="form-group row">
                    <div class="col-sm-12 text-center">
                        <h1>Chi nhánh 2</h1>
                   </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Tên</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_2_name" value="<?= @$general->cn_2_name ? $general->cn_2_name : '' ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Địa chỉ 1</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_2_address_1" value="<?= @$general->cn_2_address_1 ? $general->cn_2_address_1 : '' ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Địa chỉ 2</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_2_address_2" value="<?= @$general->cn_2_address_2 ? $general->cn_2_address_2 : '' ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Điện thoại</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_2_phone" value="<?= @$general->cn_2_phone ? $general->cn_2_phone : '' ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Hotline</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_2_hotline" value="<?= @$general->cn_2_hotline ? $general->cn_2_hotline : '' ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Email</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_2_email" value="<?= @$general->cn_2_email ? $general->cn_2_email : '' ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Fax</label>
                    <div class="col-sm-11">
                        <input class="form-control" type="text" name="cn_2_fax" value="<?= @$general->cn_2_fax ? $general->cn_2_fax : '' ?>" />
                    </div>
                </div> -->

               
               
               


                <div class="text-center">

                    <button type="submit" class="btn btn-primary mr-3">Lưu lại</button>

                </div>

            </form>

        </div>

    </section>

</article>