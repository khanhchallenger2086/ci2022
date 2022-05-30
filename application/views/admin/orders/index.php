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
                            <th style="width: 20px" scope="col">
                                <label class="check-box" style="margin-top: -17px">
                                    <input id="check-all" type="checkbox" /><span class="checkmark"></span>
                                </label>
                            </th>
                            <th scope="col">Mã</th>
                          
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Ngày nhận</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list as $key => $row) { ?>
                            <tr>
                                <th scope="col">
                                    <label class="check-box">
                                        <input name="id[]" value="<?= $row->id ?>" type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <th scope="col"><?= $row->id ?></th>
                             
                                <th scope="col">
                                    <div class="text-left" style="min-width: 250px">
                    
                                        <h5><?= $row->fullname?></h5>
                                    </div>
                                </th>
                                <th scope="col" class="text-center">
                                    <div class="status status-<?= $row->id ?>">                                        
                                        <?= $row->status == 1 ? '<h5 class="btn-success">Mới nhận</h5>' : ($row->status == 2 ? '<h5 class="btn-warning">Đã xem</h5>' : '<h5 class="btn-danger">Đã Xem</h5>') ?>                                        
                                    </div>
                                </th>
                                <th scope="col"><?=  date('d-m-Y', $row->date_created) ?></th>
                                <th scope="col">
                                    <div class="action-zone">
                                        <a class="action btn-light" href="<?= base_url('admincp/order/detail/') . $row->id ?>">
                                            <span>Xem đơn hàng</span>
                                            <i class="mdi mdi-pencil"></i>
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

<script>
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

    filterCategory = () => {
    let val = $('.filter-category select').val();
    let replaceVal = val.replace(/-/g, '');

    productTable
        .columns(2)
        .search(replaceVal)
        .draw();
    }

    filterStatus = () => {
    let val = $('.filter-status select').val();
    let replaceVal = val.replace(/-/g, '');

    productTable
        .columns(4)
        .search(replaceVal)
        .draw();
    }
</script>