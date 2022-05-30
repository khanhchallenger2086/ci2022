<article>

<section class="bread-crumb">

    <div class="container">
      
    <?php 

      //load breadcrumb

        $this->load->view('site/include_elements/breadcrumb'); 

    ?>

	  	<h1>Liên hệ</h1>

    </div>

  </section>

  <section class="contact-page">

    <div class="container">

      <div class="row">

        <div class="col-lg-8">

          <div class="box-contact">

            <h4 style="margin: 20px 0px 60px 0px;" class="text-center"><i><?php echo $this->session->flashdata('message')?></i></h4>

            <form action="" method="post">

              <div class="row">

                <div class="col-md-6">

                      <div class="form-group">

                        <label for="form-name">Họ tên:</label>

                        <input class="form-control" id="form-name" type="text" name="name" value="<?= set_value('name') ?>" placeholder="Nhập họ tên"/>

                        <div class="error"><?= form_error('name') ?></div>

                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-group">

                        <label for="form-phone">Số điện thoại:</label>

                        <input type="number" class="form-control" id="form-phone" type="tel" name="phone" value="<?= set_value('phone') ?>" placeholder="Nhập số điện thoại"/>

                        <div class="error"><?= form_error('phone') ?></div>

                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-group">

                        <label for="form-email">Email:</label>

                        <input class="form-control" id="form-email" type="text" name="email" value="<?= set_value('email') ?>" placeholder="Nhập Email"/>

                        <div class="error"><?= form_error('email') ?></div>

                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-group">

                        <label for="form-title">Tiêu đề:</label>

                        <input class="form-control" id="form-title" type="text" name="title" value="<?= set_value('title') ?>" placeholder="Nhập tiêu đề"/>

                        <div class="error"><?= form_error('title') ?></div>

                      </div>

                    </div>

                    <div class="col-md-12">

                      <div class="form-group">

                        <label for="form-content">Lời nhắn:</label>

                        <textarea class="form-control" id="form-content" name="content" value="<?= set_value('content') ?>" placeholder="Nhập lời nhắn"></textarea>

                        <div class="error"><?= form_error('content') ?></div>

                      </div>

                    </div>

                  </div>

              <button class="btn btn-warning" type="submit"><a>gửi liên hệ</a></button>

            </form>

          </div>

        </div>

        <div class="col-lg-4">

          <div class="map">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.689021589819!2d106.67361991517511!3d10.83509339228175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529ec25f6d8f5%3A0xe24e9fbf58100b68!2sC%C3%B4ng+Ty+TNHH+%C4%90T+TM+DV+Ho%C3%A0ng+Gia!5e0!3m2!1svi!2s!4v1558598660568!5m2!1svi!2s" 
          width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>

          </div>

        </div>

      </div>

    </div>

  </section>

</article>

