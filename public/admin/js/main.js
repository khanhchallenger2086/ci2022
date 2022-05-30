$('#checkAll').click(function () {

    $(':checkbox.checkItem').prop('checked', this.checked);

});



$('.eSave').click(function () {

    $('#frmSubmit').submit();

});



//create Swal notification

const Toast = Swal.mixin({

    toast: true,

    position: 'top-end',

    showConfirmButton: false,

    timer: 3000

});





function slug(value, key) {



    var str = $("#" + value).val();



    str = str.toLowerCase();



    str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');

    str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');

    str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');

    str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');

    str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');

    str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');

    str = str.replace(/(đ)/g, 'd');



    str = str.replace(/([^0-9a-z-\s])/g, '');



    str = str.replace(/(\s+)/g, '-');



    str = str.replace(/^-+/g, '');



    str = str.replace(/-+$/g, '');



    str = str.replace(/---/g, '-');



    $("#" + key).val(str);

}



function action_item(id, key, url, name) {

    $.ajax({

        url: url,

        type: 'POST',

        data: {id: id, key: key, name: name},

        dataType: 'JSON',

        success: function (data) {

            if (data.status > 0) { 

                let strClass =  data.status == 1 ? 'btn-success' : (data.status == 2 ? 'btn-warning' : 'btn-danger'); 

                let strText =  data.status == 1 ? 'Hiển thị' : (data.status == 2 ? 'Ẩn' : 'Xóa');        

                $('.status-' + id).html('<h5 class="' + strClass + '">' + strText + '</h5>');

            }

            if (data.msg != '') {

                Toast.fire({

                    type: 'success',

                    title: data.msg

                });

            }

        }



    })

}









function action_item_all(key, url, name) {

    var ids = new Array();

    $('[name="id[]"]:checked').each(function ()

    {

        ids.push($(this).val());

    });



    if (!ids.length)

        return false;

    //ajax để xóa

    $.ajax({

        url: url,

        type: 'POST',

        data: {'ids': ids, key: key, name: name},

        dataType: 'JSON',

        success: function (data) {

            console.log(data);

            if (data.status > 0) {          

                $(ids).each(function (id, val) {

                    let strClass =  data.status == 1 ? 'btn-success' : (data.status == 2 ? 'btn-warning' : 'btn-danger'); 

                    let strText =  data.status == 1 ? 'Hiển thị' : (data.status == 2 ? 'Ẩn' : 'Xóa');        

                    $('.status-' + val).html('<h5 class="' + strClass + '">' + strText + '</h5>');

                });

            }

            if (data.msg != '') {

                Toast.fire({

                    type: 'success',

                    title: data.msg

                });

            }

        }



    })

    return false;

}





if ($('#editor').length) {

    editors = CKEDITOR.replace("editor", {

        height: '350', language: 'vi',

    });

    CKFinder.setupCKEditor(editors, base + 'public/admin/ckeditor/ckfinder/');

}



if ($('#sapo').length) {

    editors = CKEDITOR.replace("sapo", {height: '200', language: 'vi'});

    CKFinder.setupCKEditor(editors, base + 'public/admin/ckeditor/ckfinder/');

}











//Choose file show one



function readURL(input) {

    if (input.files && input.files[0]) {

        var reader = new FileReader();



        reader.onload = function (e) {

            $('#profile-img-tag').attr('src', e.target.result);

        }

        reader.readAsDataURL(input.files[0]);

    }

}

$("#customFile").change(function () {

    readURL(this);

});









//Choose file show mutil



$(function () {

    // Multiple images preview in browser

    var imagesPreview = function (input, placeToInsertImagePreview) {



        if (input.files) {

            var filesAmount = input.files.length;



            for (i = 0; i < filesAmount; i++) {

                var reader = new FileReader();



                reader.onload = function (event) {

                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);

                }



                reader.readAsDataURL(input.files[i]);

            }

        }



    };



    $('#files').on('change', function () {



        $('#multiImg').remove();



        imagesPreview(this, '#showMulti');

    });

});



//Number format nummber 

//$('.format_number').number(true);



//Select2 

// $(document).ready(function () {

//     $("#select").select2();

// });



// $(document).ready(function () {

//     $("#select1").select2();

// });



// $(document).ready(function () {

//     $(".lightbox").colorbox({width: "40%", height: "50%"});



// });





function position(id, position, url, type = 'position') {

    $.ajax({

        url: url,

        type: 'POST',

        data: {id: id, position: position, type: type},

        dataType: 'JSON',

        success: function (data) {

            Toast.fire({

                type: 'success',

                title: data.msg

            });

        }

    });

}





//Choose file show one for 1

function selectImg(input) {

    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function (e) {

        	let image = $(input).parent().parent().find('.showFile .profile-img-tag');      	

        	image.attr('src', e.target.result);

        }

        reader.readAsDataURL(input.files[0]);

    }

}

$("#customFile").change(function () {
    readURL(this);
});

//Choose file show mutil

$(function () {
    // Multiple images preview in browser
    var imagesPreview = function (input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;
            console.log(filesAmount);

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function (event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                //reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#files').on('change', function () {

        $('#multiImg').remove();

        imagesPreview(this, '#showMulti');
    });
});

//anser before dellete item

function deleteItem(url, text) {

    Swal({

    title: 'Bạn chắc chắn chứ?',

    text: text,

    type: 'warning',

    showCancelButton: true,

    confirmButtonColor: '#3085d6',

    cancelButtonColor: '#d33',

    confirmButtonText: 'Tôi đồng ý, Dọn!',

    cancelButtonText: 'Hủy bỏ'

    }).then((result) => {

        if (result.value) {

            window.location.href = url;

        }

    })

}

//add one image html

function addOneImage() {
    //get number image
    var numimage = $("#numimage").val();
    var i = parseInt(numimage) + 1;
    if($("#multiImagePanel input[type=file]").length < 20) {
        var xhtml = '<div class="img-wrap col-md-3">';
                xhtml += '<div class="image_'+i+'" id="image" style="background-image: url(' + base +  'public/admin/img/custom-image.png);">';
                    xhtml += '<label for="image_'+i+'">';
                        xhtml +=  '<img id="image_preview_' + i + '" height="130px">';
                    xhtml +=  '</label>';
                    xhtml += '<input type="file" class="photo" name="image_list[]" id="image_'+i+'" onchange="makeImageArr(event, '+i+')" accept="image/*">';
                    xhtml += '<svg id="i-close" onclick="this.parentElement.parentElement.remove();" class="remove button_1" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">';
                        xhtml += '<path d="M2 30 L30 2 M30 30 L2 2"></path>';
                    xhtml += '</svg>';
                xhtml += '</div>';
            xhtml += '</div>';
        $('#multiImagePanel .row').append(xhtml);
        $("#numimage").val(i);
    }else {
        toastr.error("<strong>Lỗi</strong><br/>Bạn chỉ có thể chọn tối đa 20 tấm ảnh.");
    }  
}
//add one image
function makeImageArr(event, id) {
    var size = event.target.files[0].size;
    if(size > 2097152){
        //"<strong>Lỗi</strong><br/>Dung lượng ảnh vượt quá kích thước cho phép (2MB).";
        //$(event.target).val('');
        //$(event.target).parents('.img-wrap').find('img').attr('src', '');
        //$(event.target).parents('.img-wrap').find('input[type=hidden]').val('');
    }else{
        var reader = new FileReader();
        reader.readAsDataURL(event.target.files[0]);
        reader.onload = function(){
            var output = document.getElementById('image_preview_' + id);
            //var old = document.getElementById('photos_old_' + id);
            output.src = reader.result;
            //old.value = '';
        };
    }
}
// event onchange select category
$(document).ready(() => {
    $(".pw").css("display", "none");
    var val = parseInt($('#select').val());
    if(val == 248) {
        $(".pw").css("display", "block");
    }
    $('#select').on('change', function() {
        var val = parseInt($(this).val());
        if(val == 248) {
            $(".pw").css("display", "block");
        }else {
            $(".pw").css("display", "none");
        }  
    });
});



