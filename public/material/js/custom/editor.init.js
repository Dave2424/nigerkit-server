
/*
Template Name: Zoter - Bootstrap 4 Admin Dashboard
 Author: Mannatthemes
 Website: www.mannatthemes.com
 File: Editor init js
 */

$(document).ready(function () {
    if($("#post").length > 0){
        tinymce.init({
            selector: "textarea#post",
            theme: "modern",
            height:350,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image link  imageupload | print preview media fullpage  source code | forecolor backcolor",
            // menubar: false,
            paste_data_images: true,
            paste_word_valid_elements:"b,strong,i.em,h1,h2,u,p,ol,ul,li,a[href],span,color,mark",
            relative_urls: false,
            media_dimensions: false,
            media_poster:false,
            content_css: "/assets/material/css/material-dashboard.css",
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ],
            setup: function (editor) {
                var input = $('<input id="editor-uploader" type="file" name="pic" accept="image/*" style="display:none">');
                $(editor.getElement()).parent().append(input);
                input.on('change', function () {
                    var inputFile = input.get(0);
                    var file = inputFile.files[0];
                    var fr = new FileReader();
                    fr.onload = function () {
                        var img = new Image();
                        img.src = fr.result;
                        editor.insertContent('<img src="'+img.src+'"/>');
                        input.val('');
                    }
                    fr.readAsDataURL(file);
                });
                editor.addButton('imageupload', {
                    text: '',
                    icon: 'image',
                    tooltip: 'Select image from device',
                    onclick: function (e) {
                        input.trigger('click');
                    }
                });

        }
        });
    }
});