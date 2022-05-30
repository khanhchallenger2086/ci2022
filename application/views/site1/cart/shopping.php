<div class="container">
<?php if(isset($arrCart)&& count($arrCart)>0){?>
    <div class="card">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="table-responsive">
             <table class="table">
               <caption><?php echo lang('product_info')?></caption>
               <thead>
                 <tr>
                    <th><?php echo lang('image')?></th>
                    <th><?php echo lang('name')?></th>
                    <th><?php echo lang('price')?></th>
                    <th><?php echo lang('quantity')?></th>
                    <th><?php echo lang('total')?></th>
                    <th><?php echo lang('delete')?></th>
                 </tr>
               </thead>
               <tbody>
                  <?php
                      $tongtien = 0;
                      for ($i = 0; $i < count($arrCart); $i++)
                      {
                        $id = $arrCart[$i]['productid'];
                        $quantity = $arrCart[$i]['qty'];
                        $products = $this->products_m->getObject('id',$id);
                        if($products){
                  ?>
                  <tr>
                      <td><img src="<?php echo base_url().'uploads/products/a_'.$products['avatar']; ?>" alt="<?=@$config->alt_web?>" width="130"  /></td>
                      <td><?php echo $products[$lang.'_name']; ?></td>
                      <td><?php echo number_format($products['price']);?> VNĐ </td>
                      <td>
                        <form name="frmSoluong"  id="frmSoluong" method="post" action="<?php echo base_url()?>shopping/update">
                            <input type="text" name="quantity" id="quantity" value="<?php echo $quantity ?>" style="width:30px;padding: 3px 5px;text-align: center;" maxlength="3"/>
                            <input type="hidden" name="id_update" value="<?php echo $products['id']; ?>" />
                            <button type="submit" name="update" title="<?php echo lang('update')?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-floppy-save"></span></button>
                        </form>
                      </td>
                      <td><?php echo number_format(($products['price'])*$quantity);?> VNĐ </td>
                      <td>
                        <form name="frmDelete" id="frmDelete" method="post" action="<?php echo base_url().'shopping/remove/'.$products['id'];?>">
                          <input type="hidden" name="del_id" value="<?php echo $products['id']; ?>" />
                          <button type="submit" value="" name="delete" class="btn btn-danger btn-sm" title="<?php echo lang('delete')?>"><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                      </td>
                  </tr>      
                  <?php
                      $price = $products['price'];
                      $tongtien += $price*$quantity;
                    }
                  }
                  ?>
                  <tr style="background:none; ">
                    <td colspan="6">
                      <div class="row">
                        <div class="col-sm-6">
                          <a class="btn btn-success btn-sm pull-left" style="margin-right: 10px;" href="<?php echo base_url().$lang?>/san-pham-cp196.html" title="<?php echo lang('continue_buy')?>">
                            <?php echo lang('continue_buy')?>
                          </a>
                          <form name="delete_all" id="delete_all" class="pull-left" method="post" action="<?php echo base_url()?>shopping/deleteAll" >
                            <button type="submit" value="" name="delete_all" class="btn btn-danger btn-sm" title="<?php echo lang('remove_cart')?>"><span class="glyphicon glyphicon-trash"></span> <?php echo lang('remove_cart')?></button>
                          </form>
                          <div class="clearfix"></div>
                        </div>
                        <div class="col-sm-6 text-right">
                        <?php echo lang('total_money')?>: <font color="red" style="margin-right: 89px;"> <strong><?php echo number_format($tongtien); ?> VNĐ</strong></font>
                        </div>
                      </div>
                    </td>
                  </tr>
               </tbody>
             </table>
           </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <h3><?php echo lang('infomation_customer')?></h3>
          <form name="frmContact" class="form-horizontal" id="frmContact" method="post" action="<?php echo base_url().$lang?>/order.html">
            <div class="alert alert-warning"><?php echo lang('note_form_require')?></div>
            <?php
              if(!empty($error_fullname) || !empty($error_address) ||
                 !empty($error_email) || !empty($error_cell) ||
                 !empty($error_security)){
                  ?>
                  <div class="alert alert-danger">
                    <?= $error_fullname;?>
                    <?= $error_address;?>
                    <?= $error_email;?>
                    <?= $error_cell;?>
                    <?= $error_security;?>
                  </div>
                  <?php
                }
            ?>
            
            <div class="form-group">
              <label for="" class="col-sm-4 col-xs-12"><?php echo lang('fullname')?> <font color="red">*</font></label>
              <div class="col-sm-8 col-xs-12">
                  <input type="text" class="form-control" name="fullname" id="fullname" value="<?php if($userInfo) echo $userInfo->fullname; else echo isset($_POST['fullname'])?$_POST['fullname']:''; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-4 col-xs-12"><?php echo lang('address')?> <font color="red">*</font></label>
              <div class="col-sm-8 col-xs-12">
                  <input type="text" class="form-control" name="address" id="address" value="<?php if($userInfo) echo $userInfo->address; else echo isset($_POST['address'])?$_POST['address']:''; ?>"/>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-4 col-xs-12"><?php echo lang('telephone')?> <font color="red">*</font></label>
              <div class="col-sm-8 col-xs-12">
                  <input type="text" class="form-control" name="cell" id="cell" value="<?php if($userInfo) echo $userInfo->cell; else  echo isset($_POST['cell'])?$_POST['cell']:''; ?>"/>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-4 col-xs-12">Email <font color="red">*</font></label>
              <div class="col-sm-8 col-xs-12">
                  <input type="text" class="form-control" name="email" id="email" value="<?php if($userInfo) echo $userInfo->email; else echo isset($_POST['email'])?$_POST['email']:''; ?>"/>
              </div>
            </div>
            <!-- <div class="form-group">
              <label for="" class="col-sm-4 col-xs-12"><?php echo lang('date_delivery')?> <font color="red">*</font></label>
              <div class="col-sm-8 col-xs-12">
                  <select name="day">
                      <?php for($i=1;$i<=31;$i++){?>
                      <option value="<?php echo $i?>" <?php if(date('d')==$i) echo 'selected';?>><?php echo $i?></option>
                        <?php }?>
                    </select>
                  <select name="month">
                      <?php for($i=1;$i<=12;$i++){?>
                      <option value="<?php echo $i?>" <?php if(date('m')==$i) echo 'selected';?>><?php echo $i?></option>
                        <?php }?>
                    </select>
                  <select name="year">
                      <option value="<?php echo date('Y')?>"><?php echo date('Y')?></option>
                  </select>
              </div>
            </div> -->
            <div class="form-group">
              <label for="" class="col-sm-4 col-xs-12"><?php echo lang('method_payment')?> <font color="red">*</font></label>
              <div class="col-sm-8 col-xs-12">
                  <input type="radio" name="ptThanhToan" value="<?php echo lang('payment_in_cash')?>" checked="checked" /> <?php echo lang('payment_in_cash')?>&nbsp; <input type="radio" name="ptThanhToan" value="<?php echo lang('payment_by_bank_transfer')?>" /> <?php echo lang('payment_by_bank_transfer')?>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-4 col-xs-12"><?php echo lang('method_of_delivery')?> <font color="red">*</font></label>
              <div class="col-sm-8 col-xs-12">
                  <input type="radio" name="ptGiaoHang" value="<?php echo lang('visitors_to_delivery')?>" checked="checked" /> <?php echo lang('visitors_to_delivery')?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="ptGiaoHang" value="<?php echo lang('method_of_delivery')?>" /> <?php echo lang('home_delivery')?>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-4 col-xs-12"><?php echo lang('message_attachments')?> <font color="red">*</font></label>
              <div class="col-sm-8 col-xs-12">
                  <textarea class="form-control" style="height:150px;" name="content" id=""><?php echo isset($_POST['content'])?$_POST['content']:''; ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-4 col-xs-12"><?php echo lang('security')?> <font color="red">*</font></label>
              <div class="col-sm-8 col-xs-12">
                  <input type="text" style="width:40%;" class="form-control" name="security" />
                  <img src="<?php echo base_url()?>captcha.php" align="bottom" alt="<?=@$config->alt_web?>" />
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-4 col-xs-12"></label>
              <div class="col-sm-8 col-xs-12">
                  <input type="hidden" name="action" value="send" />
                  <button type="submit" class="btn btn-success btn-sm" name="send" title="<?php echo lang('send')?>" id="send"><?php echo lang('send')?></button>
                  <button type="reset" class="btn btn-success btn-sm" name="reset" title="<?php echo lang('reset')?>"><?php echo lang('reset')?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--//-->
    </div>
<?php }else {?>
<p style="padding:10px; font-size:12px"><?php echo lang('cart_empty')?></p>
<?php }?>    
</div>

