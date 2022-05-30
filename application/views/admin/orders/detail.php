<style type="text/css">
.infoOrder{ overflow:hidden;width:320px; float:left; line-height:20px}
.infoOrder h4{ font-size:14px;}
.infoOrder label{ float:left;width:140px}
.infoOrderItem { overflow:hidden; width:642px; float:right}
.infoOrderItem table{ background:#CCC}
.infoOrderItem table td, .infoOrderItem table th{ background:#FFF; line-height:22px; text-align:center; padding:3px 0 3px 0}
</style>
<div class="ui-widget-content ui-corner-all" style="padding:20px; overflow:hidden"> 
<h3 style="text-align:left; color:black">Thông tin chi tiết đơn hàng</h3>
<?php if($orderObject) 
{ 
	$thongtinkhachhang= unserialize($orderObject['properties']);
	$thongtinsanpham = $this->order_item_m->getObjects('order_id = '.$orderObject['id']);


	?>
<div class="infoOrder">
<h4>Thông tin đơn hàng</h4>
<p><label>Mã ĐH</label>: <?=$orderObject['id']?></p>
<p><label>Trạng thái</label>:<?=$orderObject['status']?></p>
<p><label>Họ tên</label>: <?=$orderObject['fullname']?></p>
<p><label>Điện thoại</label>: <?=$thongtinkhachhang['cell']?></p>
<p><label>Email</label>: <?=$thongtinkhachhang['email']?></p>
<p><label>Địa chỉ</label>: <?=$thongtinkhachhang['address']?></p>
<p><label>Ghi chú</label>: <?=$thongtinkhachhang['messages']?></p>


</div>
<div class="infoOrderItem">
<h4>Thông tin sản phẩm</h4>
<table border="1px" cellpadding="0" cellspacing="1" width="640">
<tr>
<th width="50">Số TT</th>
<th width="100">Tên sản phẩm</th>
<th width="100">Hình đại diện</th>
<th width="100">Giá (vnđ)</th>
<th width="70">Số lượng</th>
<th width="120">Thành tiền (vnđ)</th>
</tr>

<?php
if($thongtinsanpham)
{
	$i = 0;
	$total = 0;
	$quantity = 0;
	foreach($thongtinsanpham as $item){
		$i++;
		$properties = unserialize($item->properties);
		 
		 $sanpham = $this->product_m->getObject('id',$item->pro_id);

		 $total += $properties['pro_price']*$properties['quantity'];
		 $quantity += $properties['quantity'];
		?>
        <tr>
        <td><?php echo $i?></td>
         <td><?php echo $properties['pro_name']?></td>
         <td><img src="<?=base_url()?>uploads/images/product/large/<?=$sanpham['image_link']?>" width= "100"/></td>
         <td><?php echo $properties['pro_price']?></td>
         <td><?php echo $properties['quantity']?></td>
         <td><?php echo number_format($properties['total'])?></td>
        </tr>
        <?php 
		}
	}
?>
<tr style="font-weight:bold; color:red">
<td colspan="4">Tổng cộng</td>
<td> <?php echo $quantity?> </td>
<td> <?php echo number_format($total)?> Vnđ</td>
</tr>
</table>

</div>
<?php }?>
<p style="clear:both"><a href="<?php echo base_url()?>admincp/order" class="back" title="Trở về">Quay lại</a></p>
<div style="text-align: center;">
<form action="<?=base_url()?>/admincp/order/view/<?=$orderObject['id']?>">
	<button type="submit" style="border: none;padding: 5px 10px;background: #72d272;border-radius: 5px;color: #fff">Xác nhận đơn hàng</button>
</form>
</div>
</div>