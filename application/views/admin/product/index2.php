<?php
    $name_item = 'sản phẩm';
    $name_class = 'product';
?>

<article>
    <div class="overlay-menu"></div>
    <section class="manager">
        <div class="container-fluid">
            <?php $this->load->view('admin/include_elements/title') ?>
            <div class="btn-top text-center">
                <button class="btn btn-primary waves-effect"><a href="<?= base_url('admincp/'.$name_class.'/detail') ?>">Thêm mới</a></button>
                <button onclick="action_item_all('enable_all', '<?= base_url('admincp/'.$name_class.'/config') ?>', '<?= $name_item ?>');" class="btn btn-success waves-effect" id="active-all" disabled="disabled">Hiển thị toàn bộ</button>
                <button onclick="action_item_all('disable_all', '<?= base_url('admincp/'.$name_class.'/config') ?>', '<?= $name_item ?>');" class="btn btn-warning waves-effect" id="private-all" disabled="disabled">Ẩn toàn bộ</button>
                <button onclick="action_item_all('del_all', '<?= base_url('admincp/'.$name_class.'/config') ?>', '<?= $name_item ?>');" class="btn btn-danger waves-effect" id="delete-all" disabled="disabled">Xóa toàn bộ</button>
                <button class="btn btn-info waves-effect" id="go-trash"><a onclick="deleteItem('<?= base_url('admincp/'.$name_class.'/clean_trash')?>', 'Bạn có chắc muốn xóa tất cả <?= $name_item ?> có trạng thái (Xóa) trong thùng rác. Dữ liệu sẽ không được phục hồi.');">Dọn rác</a></button>
            </div>
            <div class="table-responsive">
                <?php $this->load->view('admin/message') ?>
                <!-- <div class="filter-category">
                    <select class="form-control" onchange="filterCategory()">
                        <option value="">Chọn danh mục</option>
                        <?php if($catalogs ) { ?>
                            <?php foreach($catalogs as $row) { ?>
                                <option value="<?= $row->vn_name ?>"><?= $row->vn_name ?></option>
                                <?php if($catalogs ) { ?>
                                    <?php foreach($row->subs as $row_subs) { ?>
                                        <option value="<?= $row_subs->vn_name ?>">--<?= $row_subs->vn_name ?></option>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>                        
                    </select>
                </div>
                <div class="filter-status">
                    <select class="form-control" onchange="filterStatus()">
                        <option value="">Chọn trạng thái</option>
                        <option value="Hiển thị">Hiển thị</option> 
                        <option value="Ẩn">Ẩn</option> 
                        <option value="Xóa">Xóa</option>                      
                    </select>
                </div> -->
                <table class="table table-bordered display table-hover product-table" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="width: 20px" scope="col">
                                <label class="check-box" style="margin-top: -17px">
                                    <input id="check-all" type="checkbox" /><span class="checkmark"></span>
                                </label>
                            </th>
                            <th scope="col">Mã</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tfoot>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Mã</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </tfoot>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</article>

<script>
    // const productTable = $('.product-table').DataTable({
    //     "processing": true,
    //     "responsive": true,
    //     "deferRender": true,
    //     "language": {
    //         "processing": "Đang tải",
    //         "lengthMenu": "Hiển thị _MENU_ mục",
    //         "emptyTable":     "Không có dữ liệu nào trong bảng",
    //         "loadingRecords": "Đang tải...",
    //         "zeroRecords": "Không có mục nào được tìm thấy",
    //         "info": "Hiển thị _START_ đến _END_ trong _TOTAL_ mục",
    //         "infoEmpty": "Không có mục nào có sẵn",
    //         "infoFiltered": "(Lọc từ _MAX_ mục)",
    //         "search": "Tìm kiếm:",
    //         "paginate": {
    //             "first":      "Đầu",
    //             "last":       "Cuối",
    //             "next":       "Sau",
    //             "previous":   "Trước"
    //         },
    //     },
    //     "order": [[ 1, "desc" ]],
    //     "pagingType": "full_numbers",
    //     "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tất cả"]],
    // });

    // filterCategory = () => {
    // let val = $('.filter-category select').val();
    // let replaceVal = val.replace(/-/g, '');

    // productTable
    //     .columns(2)
    //     .search(replaceVal)
    //     .draw();
    // }

    // filterStatus = () => {
    // let val = $('.filter-status select').val();
    // let replaceVal = val.replace(/-/g, '');

    // productTable
    //     .columns(4)
    //     .search(replaceVal)
    //     .draw();
    // }
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        // $('.product-table thead th').each( function (index, val) {
        //     var title = $(this).text();
        //     if(index === 2) {
        //         $(this).html( '<input type="text" placeholder='+title+' />' );
        //     }     
        // } );
        var table = $('.product-table').DataTable( {
            "processing": true,
            "serverSide": true,
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
            orderCellsTop: false,
            "order": [[ 1, "desc" ]],
            "pagingType": "full_numbers",
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tất cả"]],
            "ajax": base + "admincp/product/ajax_datatable",
            "columns": [
                { "data": "input" },
                { "data": "id" },
                { "data": "name_cate" },
                { "data": "vn_name" },
                { "data": "status" },
                { "data": "created" },
                { "data": "action" },
            ],
            initComplete: function()
            {
                this.api().columns().every(function(index, val)
                {
                    if(index === 2) {



                        var column = this;
                        var select = $('<select><option value=""></option></select>').appendTo($(column.footer()).empty()).on('change', function()
                        {
                            var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val());
        
                            column.search(val ? '^' + val + '$' : '', true, false).draw();
                        });
        
                        column.data().unique().sort().each(function(d, j)
                        {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        });
                    }
                });
            }
        } );

    } );
</script>