$(document).ready(function() {
    $().ready(function () {

        // $('#my-table').editableTableWidget();

        //editable Table
        $('#my-table').Tabledit({
            columns: {
                identifier: [0, 'sku'],
                editable: [[0, 'sku']]
            }
        });
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
        $.fn.dataTable.render.ellipsis = function ( cutoff ) {
            return function ( data, type, row ) {
                return type === 'display' && data.length > cutoff ?
                    data.substr( 0, cutoff ) +'…' :
                    data;
            }
        };
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
                    name: 'description',
                    orderable: false
                },{
                    data:'quantity',
                    name: 'quantity',
                    orderable: false
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
            ],
            columnDefs: [
                // {
            //     targets: 6,
            //     render: $.fn.dataTable.render.ellipsis(20)
            // },
                {
                targets: 2,
                render: $.fn.dataTable.render.ellipsis(39)
            }
            ]
        });
        //Deleting a product details
        $('#product_table').on('click', '.delete', function () {
            $id = $(this).attr('id');
            $('#product_id').val($id);
            $('#product_delete').modal();
        });
        $('#delete_product').click(function () {
            $id = $('#product_id').val();
            $('#product_delete').modal('hide');
            $.ajax({
                type: 'GET',
                url: '/delete-product/' + $id,
                success: function(data) {
                    md.showSuccessMessage(data.status);
                     table.draw();
                },
                error: function (error) {
                   console.log('delete_category', error.responseText);
                }
            });
        });
        $('#product_table').on('click', '.p-file', function () {
            $('#carousel_indactor').empty();
            $('#carousel_img').empty();
            $('.modal_text').empty();
            $file_temp = $(this).attr('data-item');
            $file = JSON.parse($file_temp);
            // console.log($file);
            $files_indicator_html = '';
            $file_Html = '';
            $n = 0;
            $page = 'active';
            $file.files.forEach(function (data) {
                $files_indicator_html += "<li data-target=\"#productFiles\" data-slide-to=\""+$n+"\"></li>";
                $file_Html += "<div class=\"carousel-item "+$page+"\"><img class=\"d-block w-80\" src=\""+data+"\"/></div>";
                $n+=1;
                if ($n > 1 || $n == 1)
                    $page ='';

            });
            // console.log($file.name);
            $('.modal_text').append($file.name);
            $('#carousel_indactor').append($files_indicator_html);
            $('#carousel_img').append($file_Html);
            $('#productFileModal').modal();
        });
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
        //editing the product table
        $('#product_table').on('click', '.edit', function () {
            $id = $(this).attr('id');
            $data_temp = $(this).attr('data-item');
            $data_sku = $(this).attr('data-sku');
            $data = JSON.parse($data_temp);
            $('#editProductID').val($id);
            $('#input-edit_name').val($data.name);
            $('#input-edit_description').val($data.description);
            $('#input-edit_brand').val($data.brand);
            $('#input-edit_content').val($data.content);
            $('#input-edit_category').prop('selectedIndex', $data.category_id);
            $('#input-edit_price').val($data.price);
            $('#input-edit_quantity').val($data.quantity);
            $('#input-edit_sku').val($data.Sku);
            $('#old_sku_value').val($data_sku);
            $('#product_edit').modal({backdrop:false});

        });
        //Edit logic
        $('#edit_product').click(function() {
            $id = $('#editProductID').val();
            $product_name = $('#input-edit_name').val();
            $product_description = $('#input-edit_description').val();
            $product_brand = $('#input-edit_brand').val();
            $product_content = $('#input-edit_content').val();
            $product_category = $('#input-edit_category').val();
            $product_price = $('#input-edit_price').val();
            $product_quantity = $('#input-edit_quantity').val();
            $product_sku = $('#input-edit_sku').val();
            $old_sku_value = $('#old_sku_value').val();
            $product_file = $('#input-edit_file').get(0).files;
            if ($product_name == '') {
                $('#edit_product-error').empty();
                $('#edit_product-error').append('Product name cannot be empty');
            } else if ($product_description =='') {
                $('#edit_description-error').empty();
                $('#edit_description-error').append('Description of a product cannot be empty');
            } else if ($product_brand == '') {
                $('#edit_brand-error').empty();
                $('#edit_brand-error').append('Specify the brand of the product');
            }else if ($product_category == '') {
                $('#edit_category-error').empty();
                $('#edit_category-error').append('Select a category');
            } else if ($product_quantity == '' && !$.isNumeric($product_quantity)) {
                $('#edit_quantity-error').empty();
                $('#edit_quantity-error').append('Invalid input for quantity');
            } else if ($product_sku == '') {
                $('#edit_sku-error').empty();
                $('#edit_sku-error').append('Product Sku No is needed');
            } else if ($product_price == '' && !$.isNumeric($product_price)) {
                $('#edit_price-error').empty();
                $('#edit_price-error').append('Product price cannot be empty');
            } else {
                for (var i = 0; i < $product_file.length; ++i) {
                    var file=$product_file[i].name;
                    if(file){
                        var file_size=$product_file[i].size;
                        if(file_size<5097152){
                            var ext = file.split('.').pop().toLowerCase();
                            if($.inArray(ext,['jpg','png','jpeg','gif','bmp'])===-1){
                                $('#edit_p_file-error').empty();
                                $('#edit_p_file-error').append('Selected file be jpg, jpeg, gif or bmp format');
                            }
                        }else{
                            $('#edit_p_file-error').empty();
                            $('#edit_p_file-error').append('Selected file be less than 5Mb');
                        }
                    }else{
                        // $('#edit_p_file-error').append('')
                    }
                }
                clearInput();
                $('#edit_closebtn').hide();
                $(this).empty();
                $(this).append('<i class="fa fa-spinner fa-spin slow-spin" style="font-size: 22px"></i> Updating...').prop('disabled', true);
                var formData = new FormData();
                formData.append('id', $id);
                formData.append('name',$product_name);
                formData.append('description', $product_description);
                formData.append('brand', $product_brand);
                formData.append('content',$product_content);
                formData.append('category_id',$product_category);
                formData.append('quantity', $product_quantity);
                formData.append('price', $product_price);
                formData.append('Sku', $product_sku);
                formData.append('Old_sku', $old_sku_value);
                for (var x = 0; x < $product_file.length; ++x) {
                    formData.append('file[]', $product_file[x]);
                }
                if($product_file.length == 0){
                    formData.append('file[]', null);
                }

                $.ajax({
                    type: 'POST',
                    url: '/edit-product',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data : formData,
                    success: function(data){
                        $('#edit_closebtn').show();
                        $('#edit_product').empty();
                        $('#edit_product').append('Edit').prop('disabled', false);
                        $('#product_edit').modal('hide');
                        md.showSuccessMessage(data.status);
                        table.draw();
                    },
                    error: function(error){
                        console.log(error.responseText);
                        md.showErrorMessage(error.responseText);
                    }
                });
            }
        });
        function clearInput(){
            $('#edit_product-error').empty();
            $('#edit_description-error').empty();
            $('#edit_brand-error').empty();
            $('#edit_category-error').empty();
            $('#edit_quantity-error').empty();
            $('#edit_sku-error').empty();
            $('#edit_price-error').empty();
            $('#edit_p_file-error').empty();
        }


    });
});