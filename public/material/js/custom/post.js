$(document).ready(function() {
    $().ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //show the success from the product Insertion
        if ($('#success_post').val()) {
            $msg = $('#success_post').val();
            md.showSuccessMessage($msg);
            $('#success_post').val('')
        }
        //Feeding in the dataTable
        $.fn.dataTable.render.ellipsis = function ( cutoff ) {
            return function ( data, type, row ) {
                return type === 'display' && data.length > cutoff ?
                    data.substr( 0, cutoff ) +'…' :
                    data;
            }
        };
        //Datatable for post
        var table = $('#post_table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: '/get-posts',
            },
            columns: [
                {
                    data: 'title',
                    name: 'title'
                }, {
                    data: 'body',
                    name: 'body',
                    orderable: false
                }, {
                    data: 'hasLiked',
                    name: 'likes',
                    orderable: false
                }, {
                    data: 'views',
                    name: 'view',
                    orderable: false
                }, {
                    data: 'time',
                    name: 'time',
                }, {
                    data: 'image',
                    name: 'image',
                    orderable: false
                }
                , {
                    data: 'video',
                    name: 'video',
                    orderable: false
                }, {
                    data: 'link',
                    name: 'link',
                    orderable: false
                }, {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
            ],
            columnDefs: [{
                targets: 1,
                render: $.fn.dataTable.render.ellipsis(60)
            },{
                targets: 0,
                render: $.fn.dataTable.render.ellipsis(20)
            }
            ]
        });

        //Deletion of a post
        $('#post_table').on('click', '.delete', function () {
            $id = $(this).attr('id');
            $('#post_id').val($id);
            $('#post_delete').modal();
        });
        $('#delete_post').click( function () {
            $id = $('#post_id').val();
            $('#post_delete').modal('hide');
            $.ajax({
                type: 'GET',
                url: '/delete-post/' + $id,
                success: function(data) {
                    md.showSuccessMessage(data.status);
                    table.draw();
                },
                error: function (error) {
                    console.log('delete_post', error.responseText);
                }
            });
        });

        //getting the data for editing
        $item = $('#data').attr('data-item');
        $data = JSON.parse($item);
        $('#edit_input-title').val($data[0].title);
        $body = $data[0].body;
        console.log($data[0].body);
        $('#edit_post').val($data[0].body);
        // var c = isElementinViewport('edit_post');
        // console.log(c);
        // function isElementinViewport(el) {
        //     if (typeof jQuery === "function" && el instanceof jQuery) {
        //         el = el[0];
        //     }
        //     var rect = el.getBoundingClientRect();
        //     return (
        //         rect.top >= 0 &&
        //             rect.left >= 0 &&
        //             rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        //             rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        //     );
        // }

        // function onVisibilityChange(el, callback) {
        //     var old_visible;
        //     return function() {
        //         var visible = isElementinViewport(el);
        //         if (visible != old_visible) {
        //             old_visible = visible;
        //             if (typeof  callback == 'function') {
        //                 callback();
        //             }
        //         }
        //     }
        // }
    });
});