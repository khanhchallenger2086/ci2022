<style type="text/css">
#frmContact { margin:20px 0 0 20px}
#frmContact span{ color:red}
#frmContact p { overflow:hidden; margin:10px 0 5px 0;}
#frmContact p label { float:left; width:150px; font-weight:bold; font-size:12px}
#frmContact p input[type = 'text'] {width:300px; border:1px solid #b0b0b0;}
#frmContact textarea{ width:300px; height:120px;border:1px solid #b0b0b0;}
.content_page .note{ font-weight:bold; font-size:12px; }
 .error{ color:red !important; font-size:12px; padding-left:150px}
  .tbOrder{ width:100%; background:#cbcaca; margin:auto; text-align:center; font-size:12px;border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;}
  .tbOrder tr{ background:#FFF;border:1px solid #ddd;}
    .tbOrder tr td{padding: 10px 0px;border:1px solid #ddd;}
  .tbOrder th{ height:50px; background:#3e9906 !important;text-align:center;color: #fff;font-size: 18px}
  .tbOrder .total{ float:left; margin-left:80px; font-weight:bold;padding-top: 10px;font-weight: bold;}
  .tbOrder .total span{ color:red; margin:3px}
  .btn-order{ float:right; margin:10px 5px 0 0;font-weight: bold;}
  .tbOrder img{max-width: 100px;height: auto;max-height: 100%}
  /* form styles */
form .row {
  display: block;
  padding: 7px 8px;
  margin-bottom: 7px;
}
form .row:hover {
  background: #f1f7fa;
}
 
form label {
  display: inline-block;
  font-size: 1.2em;
  font-weight: bold;
  width: 100%;
  padding: 6px 0;
  color: #464646;
  vertical-align: top;
}
form .req { color: #ca5354; }
 
form .note {
  font-size: 1.2em;
  line-height: 1.33em;
  font-weight: normal;
  padding: 2px 7px;
  margin-bottom: 10px;
}
 
form input:focus, form textarea:focus { outline: none; }
 
/* placeholder styles: http://stackoverflow.com/a/2610741/477958 */
::-webkit-input-placeholder { color: #aaafbd; font-style: italic; } /* WebKit */
:-moz-placeholder { color: #aaafbd; font-style: italic; }           /* Mozilla Firefox 4 to 18 */
::-moz-placeholder { color: #aaafbd; font-style: italic; }          /* Mozilla Firefox 19+ */
:-ms-input-placeholder { color: #aaafbd; font-style: italic; }      /* Internet Explorer 10+ */
form .txt {
  display: inline-block;
  padding: 10px 0px;

  width: 100%;
  font-family: 'Oxygen', sans-serif;
  font-size: 1.35em;
  font-weight: normal;
  color: #898989;
  background-color: #f0f0f0;
  background-image: url('images/checkmark.png');
  background-position: 110% center;
  background-repeat: no-repeat;
  border: 1px solid #ccc;
  text-shadow: 0 1px 0 rgba(255,255,255,0.75);
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
  -moz-box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
  box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
  -webkit-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  transition: all 0.3s linear;
}
 
form .txtarea {
  display: inline-block;
  padding: 10px 0px;

  width: 100%;
  height: 120px;
  font-family: 'Oxygen', sans-serif;
  font-size: 1.35em;
  font-weight: normal;
  color: #898989;
  background-color: #f0f0f0;
  background-image: url('images/checkmark.png');
  background-position: 110% 4%;
  background-repeat: no-repeat;
  border: 1px solid #ccc;
  text-shadow: 0 1px 0 rgba(255,255,255,0.75);
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 4px -1px #a8a8a8 inset;
  -moz-box-shadow: 0 1px 4px -1px #a8a8a8 inset;
  box-shadow: 0 1px 4px -1px #a8a8a8 inset;
  -webkit-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  transition: all 0.3s linear;
}
/*form .txt:focus, form .txtarea:focus {
  width: 300px;
  color: #545454;
  background-color: #fff;
  background-position: 110% center;
  background-repeat: no-repeat;
  border-color: #059;
  -webkit-box-shadow: 0 1px 4px -1px #a8a8a8 inset, 0 1px rgba(255, 255, 255, 0.6), 0 0 11px rgba(70, 100, 200, 0.7);
  -moz-box-shadow: 0 1px 4px -1px #a8a8a8 inset, 0 1px rgba(255, 255, 255, 0.6), 0 0 11px rgba(70, 100, 200, 0.7);
  box-shadow: 0 1px 4px -1px #a8a8a8 inset, 0 1px rgba(255, 255, 255, 0.6), 0 0 11px rgba(70, 100, 200, 0.7);
}
form .txtarea:focus {
  width: 375px;
  background-position: 110% 4%;
}
 */
form .txt:valid {
  background-color: #deecda;
  background-position: 98% center;
  background-repeat: no-repeat;
  color: #7d996e;
  border: 1px solid #95bc7d;
}
form .txtarea:valid {
  background-color: #deecda;
  background-position: 98% 4%;
  background-repeat: no-repeat;
  color: #7d996e;
  border: 1px solid #95bc7d;
}
form .txt:focus:valid, form .txtarea:focus:valid {
  -webkit-box-shadow: 0 1px 4px -1px #a8a8a8 inset, 0 1px rgba(255, 255, 255, 0.6), 0 0 11px rgba(120, 200, 70, 0.7);
  -moz-box-shadow: 0 1px 4px -1px #a8a8a8 inset, 0 1px rgba(255, 255, 255, 0.6), 0 0 11px rgba(120, 200, 70, 0.7);
  box-shadow: 0 1px 4px -1px #a8a8a8 inset, 0 1px rgba(255, 255, 255, 0.6), 0 0 11px rgba(120, 200, 70, 0.7);
}
#submitbtn {
  
      padding: 10px 30px;
  cursor: pointer;
  font-family: 'Oxygen', Arial, sans-serif;
  font-size: 2.0em;
  color: #fff;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.65);
  border-width: 1px;
  border-style: solid;
  border-color: #ed1c24 #ed1c24 #ed1c24 #ed1c24;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background-color: #ed1c24;
  margin-bottom: 20px;
}
#submitbtn:hover, #submitbtn:focus {
  -webkit-box-shadow: 0 0 15px rgba(70, 100, 200, 0.9);
  -moz-box-shadow: 0 0 15px rgba(70, 100, 200, 0.9);
  box-shadow: 0 0 15px rgba(70, 100, 200, 0.9);
}
 
#submitbtn:active {
  -webkit-box-shadow: 0 0 15px rgba(70, 100, 200, 0.9), 0 1px 3px rgba(0,0,0,0.4) inset;
  -moz-box-shadow: 0 0 15px rgba(70, 100, 200, 0.9), 0 1px 3px rgba(0,0,0,0.4) inset;
  box-shadow: 0 0 15px rgba(70, 100, 200, 0.9), 0 1px 3px rgba(0,0,0,0.4) inset;
}
.ttkh{font-weight: bold;text-transform: uppercase;font-size: 20px;padding: 20px 0px;}
.giohang{text-align: center;font-weight: bold;font-size: 24px;padding: 30px 0px;}
table td{font-size: 16px;}
</style>
<div class="content_page">
  <div class="container">
    <h3 class="giohang ">GIỎ HÀNG  <div><img src="<?=base_url()?>public/site/img/line-title.png" alt="<?=@$config->alt_web?>"></div></h3>

    <p class="ttkh">Thông tin sản phẩm</p>
    <?php if(isset($arrCart)&& count($arrCart)>0){?>
      <div style="overflow-x: auto;">
  <table class="tbOrder" cellpadding="0" cellspacing="1">
  
          <tr class="dautiem">
            <th>Hình</th>
            <th>Tên</th>
            <th>Giá ( vnđ )</th>
            <th>Số lượng</th>
            <th>Xóa</th>
          </tr>
          <?php

          $tongtien = 0;
		  	for ($i = 0; $i < count($arrCart); $i++)
			{
				$id = $arrCart[$i]['productid'];
      
				$quantity = $arrCart[$i]['qty'];
        $data = array(
            'id'    => $id,
    
        );

        
                $item_pro = $this->product_m->get_info($id);

           
                
				?>
          			<tr>
                        <td><img src="<?= base_url('uploads/images/product/large/' . $item_pro->image_link) ?>" alt="<?=@$config->alt_web?>"  /></td>
                        <td><?= $item_pro->vn_name; ?></td>
                        <td>Liên hệ</td>
                      <td><form name="frmSoluong"  id="frmSoluong" method="post" action="<?php echo base_url()?>shopping/update">
                  <input type="number" name="quantity" id="quantity" value="<?php echo $quantity ?>" style="width:40px"/>
                  <input type="hidden" name="id_update" value="<?php echo $item_pro->id; ?>" />
                  <input type="submit" class="nut" name="update" value="Cập nhật" title="Cập nhật" />
                  </form>
                  </td>
                  <td>
                  <form name="frmDelete" id="frmDelete" method="post" action="<?php echo base_url().'shopping/remove/'.$item_pro->id;?>">
                  <input type="hidden" name="del_id" value="<?php echo $item_pro->id; ?>" />
                  <input type="submit" class="nut" value="Xóa" name="delete"  title="Xóa"/>
                 </form>
                      </tr>      
                <?php
                $price = $item_pro->price;
        $tongtien += $price*$quantity;
			}
		  ?>
          <tr style="background:none; ">
          <td colspan="5" style="height:30px !important"><p class="total">Tổng tiền: Liên hệ </p>
          
      		<div class="btn-order"><a href="<?php echo base_url()?>san-pham.html" title="Tiếp tục mua hàng"><span>Tiếp tục mua hàng</span></a>
            
   
       </div>
            </td>
          </tr>
        </table>
</div>
    <div class="form_lienhe" style="margin: auto;display: block;">
    <p class="ttkh">Thông tin khách hàng</p>
    <form id="contactform" name="contact" method="post" action="<?php echo base_url()?>order.html">
  <p class="note"><span class="req">*</span> là trường bắt buộc</p>
  <div class="row">
    <label for="name">Tên khách hàng<span class="req">*</span></label>
    <input type="text" name="fullname" id="fullname" class="txt" tabindex="1" placeholder="Nhập họ tên" required>
  </div>
 
  <div class="row">
    <label for="email">Email<span class="req">*</span></label>
    <input type="email" name="email" id="email" class="txt" tabindex="2" placeholder="Nhập địa chỉ Email" required>
  </div>
 <div class="row">
    <label for="sdt">SĐT<span class="req">*</span></label>
    <input type="number" name="cell" id="cell" class="txt" tabindex="2" placeholder="Nhập số điện thoại" required>
  </div>
  <div class="row">
    <label for="subject">Địa chỉ<span class="req">*</span></label>
    <input type="text" name="address" id="address" class="txt" tabindex="3" placeholder="Nhập địa chỉ" required>
  </div>
 
  <div class="row">
    <label for="message">Chú thích<span class="req"></span></label>
    <textarea name="content" id="content" class="txtarea" tabindex="4"></textarea>
  </div>
 
  <div class="center">
    <input type="submit" id="submitbtn" name="submitbtn" tabindex="5" value="Gửi đơn hàng">
  </div>
</form>
</div>
</div> </div> <!-- end title_conten-->
<?php }else {?>
<p style="padding:10px; font-size:12px">Không có sản phẩm trong giỏ hàng</p>
<?php }?>
