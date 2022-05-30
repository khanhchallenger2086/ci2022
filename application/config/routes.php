<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';



$route['404_override'] = 'lapse/error_404';

$route['translate_uri_dashes'] = FALSE;


# cart

$route['shopping-(:num).html'] ='shopping/addtocart/$1';
$route['dat-hang.html']='shopping/manage';
$route['(cart|shopping|gio-hang).html']='shopping/manage';
$route['order.html']='shopping/order';
$route['dat-hang-thanh-cong.html']='shopping/orderSuccess';

#contact
$route['lien-he.html'] = 'contact/index';

#Static page
$route['gioi-thieu.html'] = 'staticpage/index/gioi-thieu';
$route['chinh-sach-bao-hanh.html'] = 'staticpage/index/chinh-sach-bao-hanh';
$route['chinh-sach-doi-tra-hang.html'] = 'staticpage/index/chinh-sach-doi-tra-hang';
$route['quy-trinh-giao-hang.html'] = 'staticpage/index/quy-trinh-giao-hang';
$route['chinh-sach-van-chuyen.html'] = 'staticpage/index/chinh-sach-van-chuyen';
$route['huong-dan-thanh-toan.html'] = 'staticpage/index/huong-dan-thanh-toan';

#articles and service
//$route['khach-hang.html'] = 'customer/index/khach-hang';
$route['tin-tuc.html'] = 'articles/index/tin-tuc';
$route['dich-vu.html'] = 'articles/index/dich-vu';
// $route['dich-vu.html'] = 'service/index/dich-vu';
$route['cho-thue-may-phat-dien-gia-re.html'] = 'articles/index/cho-thue-may-phat-dien-gia-re'; // kiểu này cũng dc gọi là chuyền tham số vào hàm
$route['tin-tuc/page/(:num)'] = 'articles/index/tin-tuc';
$route['dich-vu/page/(:num)'] = 'articles/index/dich-vu';
$route['cho-thue-may-phat-dien-gia-re/page/(:num)'] = 'articles/index/cho-thue-may-phat-dien-gia-re';
$route['(:any)-a(:num).html'] = 'articles/detail/$1';
// $route['(:any)-s(:num).html'] = 'service/detail/$1';

#product
$route['tim-kiem.html'] = 'product/search';
// $route['xem-nhanh-san-pham.html'] = 'product/ajax_get_item';
$route['san-pham.html'] = 'product/index';

$route['san-pham/page/(:num)'] = 'product/index';
$route['(:any)-p(:num).html'] = 'product/detail/$1';
$route['(:any).html'] = 'product/category/$1';
$route['(:any)/page/(:num)'] = 'product/category/$1/$2';

#User
$route['dang-ky.html'] = 'users/signup';
$route['dang-nhap.html'] = 'users/signin';
$route['dang-xuat.html'] = 'users/signout';

/* * ************************ */

#Sitemap

$route['sitemap.xml'] = 'sitemap/index';


#Review url Admin 

#Note: not set 

$route['admincp/staticpage/(:num)'] = 'admincp/staticpage/index';

$route['admincp/articles/(:num)'] = 'admincp/articles/index/';

$route['admincp/customer/(:num)'] = 'admincp/customer/index/';

$route['admincp/contact/(:num)'] = 'admincp/contact/index/';

$route['admincp/manager/(:num)'] = 'admincp/manager_link_web/index/';

$route['admincp/manager'] = 'admincp/manager_link_web/index/';

$route['admincp/ads/(:num)'] = 'admincp/ads/index/';








