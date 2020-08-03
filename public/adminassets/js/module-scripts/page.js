(function($) {
    "use strict";

    if ($('table#table-pagelist').length) {
        //Page list
        var pagelistdatatable;
        if (pagelistdatatable) {
            pagelistdatatable.fnClearTable(0);
            pagelistdatatable.fnDestroy();
        }
        pagelistdatatable = $('table#table-pagelist').dataTable({
            "bProcessing": false,
            "bLengthChange": true,
            "bStateSave": true,
            "bInfo": true,
            "bPaginate": true,
            "bFilter": true,
            'iDisplayLength': 10,
            "sPaginationType": "full_numbers",
            "dom": 'T<"clear">lfrtip',
            "bSortable": false,
            "ordering": true,
            "serverSide": true,
            "ajax": {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: host + "admin/ajax_pagelist", // json datasource
                type: "post", // method  , by default get
                "data": function(params) {
                    //extra params
                },
                error: function() { // error handling
                    console.log('Error: serverside. ');
                }
            },
        });

        $(window).resize();
    }

    if ($('form#createpagefrm').length) {

        //Dropzone
        Dropzone.autoDiscover = false;
        var acceptedFileTypes = "image/*";
        var fileList = new Array;
        var i = 0;
        $("div#bannerUploader").dropzone({
            url: host + 'admin/upload',
            addRemoveLinks: true,
            maxFiles: 1,
            init: function() {

                // if ($("div#bannerUploader").attr('data-file') != '')
                //     this.displayExistingFile({
                //         name: $("div#bannerUploader").attr('data-file'),
                //         size: $("div#bannerUploader").attr('data-size')
                //     }, $("div#bannerUploader").attr('data-link'));

                //Load previous image
                var banner = {
                    name: $("div#bannerUploader").attr('data-file'),
                    size: $("div#bannerUploader").attr('data-size'),
                    path: $("div#bannerUploader").attr('data-link')
                }

                if (banner.name != null) {
                    this.emit("addedfile", banner);
                    this.emit("thumbnail", banner, banner.path);
                }

                this.on("addedfile", function(file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });
                this.on("removedfile", function(file) {
                    console.log(file);
                });
                this.on("sending", function(file, xhr, formData) {
                    formData.append("filepath", 'pagebanner');
                    formData.append("_token", $('meta[name="csrf-token"]').attr('content'));
                });
            },
            success: function(file, response) {
                console.log(response);
                $('input#banner').val(response.name);
            },
            error: function(file, response) {
                file.previewElement.classList.add("dz-error");
            }
        });

        $("#pagedescription").summernote({
            height: 150
        })

        var res = false;

        //Focus script
        $('input#pagename').activeFocus(error_class);
        $('input#browsertitle').activeFocus(error_class);
        $('input#metakeyword').activeFocus(error_class);
        $('input#metadescription').activeFocus(error_class);

        $('form#createpagefrm').submit(function(e) {
            e.preventDefault();
            res = $('input#pagename').notempty(error_class);
            res = res && $('input#browsertitle').notempty(error_class);
            res = res && $('input#metakeyword').notempty(error_class);
            res = res && $('input#metadescription').notempty(error_class);

            if (res) {
                var arg = $("form#createpagefrm").serialize();
                console.log(arg);
                $.ajax({
                    url: host + 'admin/savepage',
                    type: "POST",
                    dataType: 'html',
                    data: arg,
                    timeout: 20000,
                    cache: false,
                    success: function(responce) {
                        // console.log(responce);
                        responce = JSON.parse(responce);
                        popmessage(responce.status, responce.message);
                        setTimeout('window.location.reload();', 2000);
                        return false;
                    }
                });
            }
        });

    }



})(jQuery);
