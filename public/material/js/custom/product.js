$(document).ready(function() {
    $().ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // $('#product_table').editableTableWidget();
        // FileInput
        $('.form-file-simple .inputFileVisible').click(function () {
            $(this).siblings('.inputFileHidden').trigger('click');
        });

        $('.form-file-simple .inputFileHidden').change(function () {
            var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
            $(this).siblings('.inputFileVisible').val(filename);
        });

        $('.form-file-multiple .inputFileVisible, .form-file-multiple .input-group-btn').click(function () {
            $(this).parent().parent().find('.inputFileHidden').trigger('click');
            $(this).parent().parent().addClass('is-focused');
        });

        $('.form-file-multiple .inputFileHidden').change(function () {
            var names = '';
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                if (i < $(this).get(0).files.length - 1) {
                    names += $(this).get(0).files.item(i).name + ',';
                } else {
                    names += $(this).get(0).files.item(i).name;
                }
            }
            $(this).siblings('.input-group').find('.inputFileVisible').val(names);
        });

        $('.form-file-multiple .btn').on('focus', function () {
            $(this).parent().siblings().trigger('focus');
        });

        $('.form-file-multiple .btn').on('focusout', function () {
            $(this).parent().siblings().trigger('focusout');
        });

        //show the success from the product Insertion
        if ($('#success_product').val()) {
            $msg = $('#success_product').val();
            md.showSuccessMessage($msg);
        }
        //Feeding in the dataTable
        var table = $('#product_table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            // dom: 'Bfrtip', //for print,pdf,csv,excel
            ajax: {
                url: '/get-product',
            },
            columns:[
                {
                    data: 'name',
                    name: 'name'
                },{
                    data: 'description',
                    name: 'description'
                },{
                    data:'quantity',
                    name: 'quantity'
                },{
                    data:'brand',
                    name: 'brand',
                    orderable: false
                },{
                    data: 'price',
                    name: 'price',
                    orderable: false
                }
                ,{
                    data: 'Sku',
                    name: 'Sku',
                    orderable: false
                },{
                    data: 'content',
                    name: 'content',
                    orderable: false
                },{
                    data: 'files',
                    name: 'files',
                    orderable: false
                },{
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
            ]
        });
        //Deleting a product details
        $('#product_table').on('click', '.delete', function () {
            $id = $(this).attr('id');
            confirm('Are you sure You want to delete !');
            $.ajax({
                type: 'GET',
                url: '/delete-product/' + $id,
                success: function(data) {
                    md.showSuccessMessage(data.status);
                    console.log('success pn deletion of category');
                    window.location.reload();
                },
                error: function (error) {
                   console.log('delete_category', error.responseText);
                }
            });
        })
    });
});