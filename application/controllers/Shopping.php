<?php

class Shopping extends MY_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('product_m');
		$this->load->model('product_category_m');
		$this->load->model('users_m');
		$this->load->model('orders_m');
		$this->load->model('configs_m');
		$this->load->model('order_item_m');
		$this->load->library('cart');
		
	}
	public function manage(){
		
		if(isset($_SESSION['cart']))$this->data['arrCart']=$_SESSION['cart'];	
		# Bread crumb
		$breadCrumbs = array(
			'url' => '#',
			'name' => "Shopping cart",
		);
		$this->data['breadcrumb'] = $breadCrumbs;

		$this->data['temp'] = 'cart/order';
		$this->one_col($this->data);
	}
	
	public function remove($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function update(){
		$pid=$this->input->post('id_update');
		$quantity=$this->input->post('quantity');
		
		$pid=intval($pid);
		$quantity=intval($quantity);
		if($quantity==0) $quantity=1;
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				$_SESSION['cart'][$i]['qty']=$quantity;
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function addtocart($pid){
	
		$q= $this->input->post('quantity');
		if(!$q) $q=1;
		$q=intval($q);
		if($q==0) $q=1;
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['productid']=$pid;
			$_SESSION['cart'][0]['qty']=$q;
		}else{
			$max = count($_SESSION['cart']);
			for($i=0;$i<$max;$i++){
				if($pid==$_SESSION['cart'][$i]['productid']){
					$_SESSION['cart'][$i]['qty']+=$q;
					break;
				}
			}
			if($i >= $max){
				$_SESSION['cart'][$max]['productid']=$pid;
				$_SESSION['cart'][$max]['qty']=$q;
			}
		}

		$this->data['arrCart']=$_SESSION['cart'];
		
		redirect($_SERVER['HTTP_REFERER']);


	}
	// dkm đây là hàm ajax để thêm vào giỏ hàng từ trang home
	function ajaxAddtocart($id){
		echo "tới đây"; die();
		$q= $this->input->post('quantity');
		if(!$q) $q=1;
		$q=intval($q);
		if($q==0) $q=1;
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['productid']=$id;
			$_SESSION['cart'][0]['qty']=$q;
		}else{
			$max = count($_SESSION['cart']);
			for($i=0;$i<$max;$i++){
				if($pid==$_SESSION['cart'][$i]['productid']){
					$_SESSION['cart'][$i]['qty']+=$q;
					break;
				}
			}
			if($i >= $max){
				$_SESSION['cart'][$max]['productid']=$id;
				$_SESSION['cart'][$max]['qty']=$q;
			}
		}

		echo count($_SESSION['cart']);
	}
	
	public function deleteAll(){
		session_destroy();
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function order(){

		if(isset($_SESSION['cart']))
			$this->data['arrCart']=$_SESSION['cart'];
		$config = array(
			array(
				'field'   => 'fullname', 
				'label'   => lang('fullname'), 
				'rules'   => 'required|xss_clean'
			),
			array(
				'field'   => 'address', 
				'label'   => lang('address'), 
				'rules'   => 'required|xss_clean'
			),
			array(
				'field'   => 'content', 
				'label'   => lang('message_attachments'), 
				'rules'   => 'xss_clean'
			),
			array(
				'field'   => 'cell', 
				'label'   => lang('telephone'), 
				'rules'   => 'required|numeric'
			),

			array(
				'field'   => 'email', 
				'label'   => 'Email', 
				'rules'   => 'required|valid_email'
			),
			array(
				'field'   => 'security', 
				'label'   => lang('security'), 
				'rules'   => 'required|trim()|callback_check_code'
			)
		);




		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');	
		$cell = $this->input->post('cell');
		$address = $this->input->post('address');
		$messages = $this->input->post('content');

		
		# Insert database
		$properties = array('email' => $email,
			'cell' => $cell,
			'address' => $address,
			'messages' => $messages,);
		$datas = array('user_id' => 0,
			'fullname' => $fullname,
			'date_created' => now(),
			'properties' => serialize($properties),
			'status' => 1,
		);

		$newId = $this->orders_m->addData($datas);
		
		if($newId){
			# inser item
			for($i=0;$i<count($_SESSION['cart']);$i++){
				$id = $_SESSION['cart'][$i]['productid'];
				$quantity = $_SESSION['cart'][$i]['qty'];

				$products = $this->product_m->getObject('id',$id);
				$properties = array('pro_name' => $products['vn_name'],
					'pro_price' => $products['price'],
					'quantity' => $quantity,
					'total' => $products['price']*$quantity);
				$datas = array('order_id' => $newId,
					'pro_id' => $id,
					'properties' => serialize($properties)
				);

				$this->order_item_m->addData($datas);
			}

			
		}

		$html='<h2>Thông tin đơn hàng</h2>';
		$html.=' <table cellpadding="4" cellspacing="0" width="500" border="1">
			  <tr>
				<th>Tên sản phẩm</th>
				
				<th>Giá</th>

				<th>Số lượng</th>
				
				<th>Tổng tiền</th>
			  </tr>';
		for($i=0;$i<count($_SESSION['cart']);$i++){
			$id = $_SESSION['cart'][$i]['productid'];
			$product = $this->product_m->getObject('id',$id);
		
			$quantity = $_SESSION['cart'][$i]['qty'];
			if($products){
				$html.="<tr>";
				$html.="<td style='padding-left:10px'>".$product['vn_name']."</td>";
				$html.="<td align='center'>Liên hệ</td>";

				$html.="<td align='center'>".$quantity."</td>";

				

				$html.="<td align='center'>".number_format(($product['price'])*($quantity))." Vnđ</td>";
				
				$html.="</tr>";
				
			
				}
			}// end for
			$html.='<tr><td colspan="4" align="center"><b>Tổng cộng </b>:Liên hệ</td></tr>';
			$html.='</table>';
			$html.="Tên khách hàng: $fullname<br>";
			$html.="Địa chỉ: $address<br>";
			$html.="Số điện thoại: $cell<br>";
			$html.='Đơn hàng từ website:<br>'.base_url();

		$config = Array(
			'protocol' => 'mail',
			'smtp_host' => 'ssl://cpanel.trivietit.net',
			'smtp_port' => 465,
			'smtp_user' => 'info@tbthangphat.com',
			'smtp_pass' => 'mIwFNWks0',
			'mailtype'  => 'html',
			'charset'   => 'utf-8'
		);
		$where = array('key' => 'general');
	 $config22 = $this->configs_m->get_info_rule($where);
		$config22 = json_decode($config22->values);
		$emailAdmin = $config22->email;

	
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('info@tbthangphat.com', 'Thiết Bị Thắng Phát');
		$this->email->to($emailAdmin);

		$this->email->subject('Thông tin đơn hàng ');

		$this->email->message($html);

		$this->email->send();

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('info@tbthangphat.com', 'Thiết Bị Thắng Phát');
		$this->email->to($email);

		$this->email->subject('Thông tin đơn hàng ');

		$this->email->message($html);

		$this->email->send();


		unset($_SESSION['cart']);

		redirect(base_url('dat-hang-thanh-cong.html'));

	}
	public function orderSuccess(){
	
		 $this->data['temp'] = 'cart/ordersuccess';
        $this->one_col($this->data);
	}
	public function check_code($code){
		include_once(ROOT_PATH."/captcha/authimg.php");
		$AuthImage = new AuthImage();
		if(strtolower($_SESSION['captcha'])!=strtolower($code))
			return false;
		else return true;
	}
}
?>