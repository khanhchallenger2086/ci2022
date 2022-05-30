<article>
    <div class="overlay-menu"></div>
    <section class="manager">
        <div class="container-fluid">
            <?php $this->load->view('admin/include_elements/title') ?>
            <div class="table-responsive">
                <?php $this->load->view('admin/message') ?>
                <table class="table table-bordered display table-hover product-table" style="width: 100%">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 57px">STT</th>
                            <th scope="col" style="width: 61px">Mã Số</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Email</th>
                            <th scope="col" style="width: 97px;">Trạng thái</th>
                            <th scope="col" style="width: 97px;">Ngày taọ</th>
                            <th scope="col" style="width: 137px;">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list as $key => $row) { ?>
                            <tr>
                                <th scope="col"><?= $key + 1 ?></th>
                                <th scope="col"><?= $row->id ?></th>
                                <th scope="col"><?= $row->name ?></th>
                                <th scope="col">
                                    <h5><?= $row->email ?></h5>
                                </th>
                                <th scope="col" class="text-center">
                                    <div class="status status-<?= $row->id ?>">                                        
                                        <?= $row->status == 2 ? '<h5 class="btn-success">Mới nhận</h5>' : '<h5 class="btn-danger">Đã xem</h5>' ?>                                        
                                    </div>
                                </th>
                                <th scope="col"><?=  date('d-m-Y', $row->created) ?></th>
                                <th scope="col" class="text-center" >
                                    <div class="action-zone">
                                        <a class="action btn-light active-single" onclick="ajax_show_order(<?=  $row->id ?>);">
                                            <span>Xem chi tiết</span>
                                            <i class="mdi mdi-eye-outline"></i>
                                        </a>
                                        <a class="action btn-light delete-single">
                                            <span>Xóa</span>
                                            <i class="mdi mdi-trash-can-outline" onclick="deleteItem('<?= base_url('admincp/contact/del/') . $row->id ?>', 'Bạn có chắc muốn xóa liên hệ này. Dữ liệu sẽ không được phục hồi.');"></i>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</article>
<!-- model show order -->
<div class="modal order-modal fade view-order-1 show" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        </div>
    </div>
</div>

<script>
   // create datatable
    const productTable = $('.product-table').DataTable({
    "processing": true,
    "responsive": true,
    "deferRender": true,
    "language": {
        "processing": "Đang tải",
        "lengthMenu": "Hiển thị _MENU_ mục",
        "emptyTable":     "Không có dữ liệu nào trong bảng",
        "loadingRecords": "Đang tải...",
        "zeroRecords": "Không có mục nào được tìm thấy",
        "info": "Hiển thị _START_ đến _END_ trong _TOTAL_ mục",
        "infoEmpty": "Không có mục nào có sẵn",
        "infoFiltered": "(Lọc từ _MAX_ mục)",
        "search": "Tìm kiếm:",
        "paginate": {
            "first":      "Đầu",
            "last":       "Cuối",
            "next":       "Sau",
            "previous":   "Trước"
        },
    },
    "order": [[ 1, "desc" ]],
    "pagingType": "full_numbers",
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tất cả"]],
    });
    
    //ajax show order
    function ajax_show_order(id) {
        $.ajax({
            url: base + 'admincp/contact/ajax_view_contact/' + id,
            type: 'GET',
            success: function (data) {              
                if (data != '') {
                    $('.modal-content').html(data); 
                    $('.view-order-1').modal('show');
                }
            }

        })
    }
</script>