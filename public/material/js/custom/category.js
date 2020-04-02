$(document).ready(function() {
    $().ready(function() {
        var id = '';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#addcategory').click( function () {
            $('#category').show();
            $(this).hide();
        });
        $('#cancelCategory').click(function () {
            $('#category').hide();
            $('#addcategory').show();
        });
        //Send category to Db
        $('#add_Category').click(function () {
            $category = $('#input-category').val();
            if($category === '') {
                $('#name-error').show();
            } else {
                $('#name-error').hide();
                $('.line').show();
                $.ajax({
                    type: 'POST',
                    data: {
                        category: $category
                    },
                    url: "/addCategory",
                    success: function (data) {
                        $('#input-category').val('');
                        $('.line').hide();
                        md.showSuccessMessage(data.status);
                        $('#category_table').html('');
                        $page = '';
                        $n = 0;
                        data.category.forEach(function (data) {
                            $n+=1;
                            $page += '<tr><td class="text-center">'+$n +'</td>';
                            $page += '<td class="text-center">'+data.category+'</td>';
                            $page += '<td class="td-actions text-center"><button rel="tooltip" title="Edit category" class="btn btn-info btn-link edit" id="'+ data.id+'"';
                            $page += 'data-cate="'+data.category+'"> <i class="material-icons">edit</i>';
                            $page += '<div class="ripple-container"></div></button>';
                            $page += '<button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link delete" id="'+data.id+'"';
                            $page += '><i class="material-icons">close</i><div class="ripple-container"></div></button></td></tr>';
                        });
                        $('#category_table').append($page);
                    },
                    error: function (error) {
                        $('.line').hide();
                        console.log(error);
                        md.showErrorMessage(error.responseText);
                    }
                });
            }
        });


        //editing category
        $('#update_cancelCategory').click(function () {
            $('#addcategory').show();
            $('#updatecategory').hide();
        });
        $('#category_table').on('click', '.edit', function () {
            $category_text = $(this).attr('data-cate');
            id = $(this).attr('id');
            $('#update-category').val($category_text);
            $('#addcategory').hide();
            $('#updatecategory').show();
        });
        $('#update_Category').click(function () {
            $edit_category = $('#update-category').val();
            if ($edit_category == '') {
                $('#uname-error').show();
            } else {
                $('#uname-error').hide();
                $('.line').show();
                editingCategory(id,$edit_category);
            }
        });
        function editingCategory($id,$item){
            $.ajax({
                type: 'POST',
                data: {
                    category: $item,
                    id: $id
                },
                url: "/updateCategory",
                success: function (data) {
                    $('#update-category').val('');
                    $('.line').hide();
                    $('#updatecategory').hide();
                    $('#addcategory').show();
                    md.showSuccessMessage(data.status);
                     console.log(data.category);
                    $('#category_table').html('');
                    $page = '';
                    $n = 0;
                    data.category.forEach(function (data) {
                        $n+=1;
                        $page += '<tr><td class="text-center">' + $n + '</td>';
                        $page += '<td class="text-center">' + data.category + '</td>';
                        $page += '<td class="td-actions text-center"><button rel="tooltip" title="Edit category" class="btn btn-info btn-link edit" id="' + data.id + '"';
                        $page += 'data-cate="' + data.category + '"> <i class="material-icons">edit</i>';
                        $page += '<div class="ripple-container"></div></button>';
                        $page += '<button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link delete" id="' + data.id + '"';
                        $page += '><i class="material-icons">close</i><div class="ripple-container"></div></button></td></tr>';
                    });
                    $('#category_table').append($page);
                },
                error: function (error) {
                    $('.line').hide();
                    console.log(error);
                    md.showErrorMessage(error.responseText);
                }
            });
        }

        //deleting category
        $('#category_table').on('click', '.delete', function () {
            $id = $(this).attr('id');
            confirm('Are you sure You want to delete !');
            $('.line').show();
            $.ajax({
                type:'GET',
                url: "/deleteCategory/" + $id,
                success: function(data) {
                    md.showSuccessMessage(data.status);
                    $('.line').hide();
                    $('#category_table').html('');
                    $page = '';
                    $n =0;
                    data.category.forEach(function (data) {
                        $n+=1;
                        $page += '<tr><td class="text-center">' + $n + '</td>';
                        $page += '<td class="text-center">' + data.category + '</td>';
                        $page += '<td class="td-actions text-center"><button rel="tooltip" title="Edit category" class="btn btn-info btn-link edit" id="' + data.id + '"';
                        $page += 'data-cate="' + data.category + '"> <i class="material-icons">edit</i>';
                        $page += '<div class="ripple-container"></div></button>';
                        $page += '<button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link delete" id="' + data.id + '"';
                        $page += '><i class="material-icons">close</i><div class="ripple-container"></div></button></td></tr>';
                    });
                    $('#category_table').append($page);
                }, error: function(data) {
                    console.log(data);
                }
            });
        });
    });
});