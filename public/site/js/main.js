$(document).ready(function(){
    $("#btn-contact").click(function(){
        sendContact();
    });
});

function sendContact() {
    var name = $("#contact input[type=text][name=name]");
    var phone = $("#contact input[type=number][name=phone]");
    var address = $("#contact input[type=text][name=address]");
    var content = $("#contact textarea");
    if(name.val() !== '' && phone.val() !== '' && address.val() !== '' && content.val() !== '') {
        $.ajax({	    	
            url: base_url + 'contact/ajax_contact',
            type: 'POST',
            data: {name: name.val(), phone: phone.val(), address: address.val(), content: content.val()},
            dataType: 'JSON',
            success: function (data) {
                if(data.status === 1) {             
                    name.val('');
                    phone.val('');
                    address.val('');
                    content.val('');
                    alert('Yêu cầu đã được gửi. Rất cảm ơn quý khách!');
                }else {
                    alert('Lỗi hệ thống');
                }
            }
        });
    }else {
        alert('Vui lòng nhập đầy đủ thông tin!');
    }

}