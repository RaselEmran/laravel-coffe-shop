/*
 * Form Checkbox Uniform
 */
// $('.select').select2();
var _componentUniform = function() {
    if (!$().uniform) {
        console.warn('Warning - uniform.min.js is not loaded.');
        return;
    }
    $('.form-input-styled').uniform();
};

/*
 * Tooltip Custom Color
 */

var _componentTooltipCustomColor = function() {
    $('[data-popup=tooltip-custom]').tooltip({
        template: '<div class="tooltip"><div class="arrow border-teal"></div><div class="tooltip-inner bg-teal"></div></div>'
    });
};

/*
 * Form Datepicker Uniform
 */



var _componentDatePicker = function(drops = 'down') {
    var locatDate = moment.utc().format('YYYY-MM-DD');
    var stillUtc = moment.utc(locatDate).toDate();
    var year = parseInt(moment(stillUtc).local().format('YYYY')) + 2;
    $('.date').attr('readonly', true);
    // console.log(local);
    $('.date').daterangepicker({
        "applyClass": 'bg-slate-600',
        "cancelClass": 'btn-light',
        "singleDatePicker": true,
        "locale": {
            "format": 'YYYY-MM-DD'
        },
        "drops" : drops,
        "showDropdowns": true,
        "minYear": 1900,
        "maxYear": year,
        "timePicker": false,
        "alwaysShowCalendars": true,
    });
};

/*
 * Form Select 2 For Modal
 */

var _componentSelect2Modal = function() {
    if (!$().select2) {
        console.warn('Warning - select2.min.js is not loaded.');
        return;
    }

    $('.select').select2({
        dropdownAutoWidth: true,
        dropdownParent: $("#modal_remote .modal-content"),
    });

    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        dropdownAutoWidth: true,
        width: 'auto'
    });
};

var _componentSelect2SelectModal = function() {
    if (!$().select2) {
        console.warn('Warning - select2.min.js is not loaded.');
        return;
    }

    $('#select_form .select').select2({
        dropdownAutoWidth: true,
        dropdownParent: $("#modal_remote .modal-content"),
    });
};

/*
 * Form Select2
 */
var _componentSelect2Normal = function() {
    if (!$().select2) {
        console.warn('Warning - select2.min.js is not loaded.');
        return;
    }

    $('.select').select2({
        dropdownAutoWidth: true,
    });

    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        dropdownAutoWidth: true,
        width: 'auto'
    });
};

/*
 * For Switchery for Datatable Status
 */

var _componentStatusSwitchery = function() {
    if (typeof Switchery == 'undefined') {
        console.warn('Warning - switchery.min.js is not loaded.');
        return;
    }

    var elems = Array.prototype.slice.call(document.querySelectorAll('.form-check-status-switchery'));

    if (elems.length > 0) {
        elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });
    }
};

/*
 * For Switchery input field
 */

var _componentInputSwitchery = function() {
    if (typeof Switchery == 'undefined') {
        console.warn('Warning - switchery.min.js is not loaded.');
        return;
    }

    var input_elems = Array.prototype.slice.call(document.querySelectorAll('.form-check-input-switchery'));
    if (input_elems.length > 0) {
        input_elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });
    }
};

/*
 * Form Validation
 */

var _formValidation = function() {
    if ($('#content_form').length > 0) {
        $('#content_form').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        });
    }

    $('#content_form').on('submit', function(e) {
        e.preventDefault();
        $('#submit').hide();
        $('#submiting').show();
        $(".ajax_error").remove();
        var submit_url = $('#content_form').attr('action');
        //Start Ajax
        var formData = new FormData($("#content_form")[0]);
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function(data) {

                    new PNotify({
                        title: 'Success',
                        text: data.message,
                        type: 'success',
                        addclass: 'alert alert-styled-left',
                    });
                    $('#submit').show();
                    $('#submiting').hide();
                    if (data.goto) {
                        setTimeout(function() {

                            window.location.href = data.goto;
                        }, 2500);

                    if (data.window) {
                        window.open(data.window, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=auto,left=auto,width=700,height=400");
                        setTimeout(function() {
                            window.location.href = '';
                        }, 1000);
                    }
                }
            },
            error: function(data) {
                var jsonValue = $.parseJSON(data.responseText);
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function(key, value) {
                        const first_item = Object.keys(errors)[i]
                        const message = errors[first_item][0];
                        $('#' + first_item).parsley().removeError('required', {
                            updateClass: true
                        });
                        $('#' + first_item).parsley().addError('required', {
                            message: value,
                            updateClass: true
                        });
                        // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                        new PNotify({
                            title: 'Error',
                            text: value,
                            type: 'error',
                            addclass: 'alert alert-danger alert-styled-left',
                        });
                        i++;
                    });
                } else {
                    new PNotify({
                        title: 'Something Wrong!',
                        text: jsonValue.message,
                        type: 'error',
                        addclass: 'alert alert-danger alert-styled-left',
                    });
                }
                _componentSelect2Normal();
                $('#submit').show();
                $('#submiting').hide();
            }
        });
    });
};


/*
 * Form Validation For Modal
 */

var _modalFormValidation = function() {
    if ($('#content_form').length > 0) {
        $('#content_form').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        });
    }
    $('#content_form').on('submit', function(e) {
        e.preventDefault();
        $('#submit').hide();
        $('#submiting').show();
        $(".ajax_error").remove();
        var submit_url = $('#content_form').attr('action');
        //Start Ajax
        var formData = new FormData($("#content_form")[0]);
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == 'danger') {
                    new PNotify({
                        title: 'Error',
                        text: data.message,
                        type: 'error',
                        addclass: 'alert alert-danger alert-styled-left',
                    });

                } else {
                    new PNotify({
                        title: 'Well Done!',
                        text: data.message,
                        type: 'success',
                        addclass: 'alert alert-styled-left',
                    });
                    $('#submit').show();
                    $('#submiting').hide();
                    $('#modal_remote').modal('toggle');
                    if (data.goto) {
                        setTimeout(function() {

                            window.location.href = data.goto;
                        }, 2500);
                    }
                    if (typeof(tariq) != "undefined" && tariq !== null) {
                        tariq.ajax.reload(null, false);
                    }
                }
            },
            error: function(data) {
                var jsonValue = data.responseJSON;
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function(key, value) {
                        const first_item = Object.keys(errors)[i];
                        const message = errors[first_item][0];
                        if ($('#' + first_item).length > 0) {
                            $('#' + first_item).parsley().removeError('required', {
                                updateClass: true
                            });
                            $('#' + first_item).parsley().addError('required', {
                                message: value,
                                updateClass: true
                            });
                        }

                        // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                        new PNotify({
                            width: '30%',
                            title: jsUcfirst(first_item) + ' Error!!',
                            text: value,
                            type: 'error',
                            addclass: 'alert alert-danger alert-styled-left',
                        });
                        i++;
                    });
                } else {
                    new PNotify({
                        width: '30%',
                        title: 'Something Wrong!',
                        text: jsonValue.message,
                        type: 'error',
                        addclass: 'alert alert-danger alert-styled-left',
                    });
                }
                $('#submit').show();
                $('#submiting').hide();
            }
        });
    });
};


$(document).ready(function() {
    /*
     * For Logout
     */


    /*
     * For Delete Item
     */
    $(document).on('click', '#delete_item', function(e) {
        e.preventDefault();
        var row = $(this).data('id');
        var url = $(this).data('url');
        $('#action_menu_' + row).hide();
        $('#delete_loading_' + row).show();
        //console.log(row, url);
        swal({
            title: "Are you sure?",
            text: "Once deleted, it will deleted all related Data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: url,
                        method: 'Delete',
                        contentType: false, // The content type used when sending data to the server.
                        cache: false, // To unable request pages to be cached
                        processData: false,
                        dataType: 'JSON',
                        success: function(data) {
                            new PNotify({
                                title: 'Well Done!',
                                text: data.message,
                                type: 'success',
                                addclass: 'alert alert-styled-left',
                            });
                            if (data.goto) {
                                setTimeout(function() {
                                    window.location.href = data.goto;
                                }, 2500);
                            }

                            if (data.load) {
                                setTimeout(function() {

                                    window.location.href = "";
                                }, 2500);
                            }
                            $('#delete_loading_' + row).hide();
                            $('#action_menu_' + row).show();
                        },
                        error: function(data) {
                            var jsonValue = $.parseJSON(data.responseText);
                            const errors = jsonValue.errors
                            var i = 0;
                            $.each(errors, function(key, value) {
                                new PNotify({
                                    title: 'Error',
                                    text: value,
                                    type: 'error',
                                    addclass: 'alert alert-danger alert-styled-left',
                                });
                                i++;
                            });
                            $('#delete_loading_' + row).hide();
                            $('#action_menu_' + row).show();
                        }
                    });
                } else {
                    $('#delete_loading_' + row).hide();
                    $('#action_menu_' + row).show();
                }
            });
    });

    /*
     * For Status Change
     */
    $(document).on('click', '#change_status', function(e) {
        e.preventDefault();
        var row = $(this).data('id');
        var url = $(this).data('url');

        $('#status_loading_' + row).show();
        swal({
                title: "Are you sure?",
                text: 'To Confirm Delivari',
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: url,
                        method: 'GET',
                        contentType: false, // The content type used when sending data to the server.
                        cache: false, // To unable request pages to be cached
                        processData: false,
                        dataType: 'JSON',
                        success: function(data) {
                            new PNotify({
                                title: 'Well Done!',
                                text: data.message,
                                type: 'success',
                                addclass: 'alert alert-styled-left',
                            });
                            if (data.goto) {
                                setTimeout(function() {
                                    window.location.href = data.goto;
                                }, 2500);
                            }

                        },
                        error: function(data) {
                            var jsonValue = $.parseJSON(data.responseText);
                            const errors = jsonValue.errors
                            if (errors) {
                                var i = 0;
                                $.each(errors, function(key, value) {
                                    new PNotify({
                                        title: 'Something Wrong!',
                                        text: value,
                                        type: 'error',
                                        addclass: 'alert alert-danger alert-styled-left',
                                    });
                                    i++;
                                });
                            } else {
                                new PNotify({
                                    title: 'Something Wrong!',
                                    text: jsonValue.message,
                                    type: 'error',
                                    addclass: 'alert alert-styled-left',
                                });
                            }
                            $('#status_loading_' + row).hide();
                            $('#status_' + row).show();
                        }
                    });
                } else {
                    $('#status_loading_' + row).hide();
                    $('#status_' + row).show();
                }
            });
    });

    /*
     * For Date Picker
     */
    var locatDate = moment.utc().format('YYYY-MM-DD');
    var stillUtc = moment.utc(locatDate).toDate();
    var year = parseInt(moment(stillUtc).local().format('YYYY')) + 2;
    $('.date').attr('readonly', true);
    // console.log(local);
    $('.date').daterangepicker({
        "applyClass": 'bg-slate-600',
        "cancelClass": 'btn-light',
        "singleDatePicker": true,
        "locale": {
            "format": 'YYYY-MM-DD'
        },
        "showDropdowns": true,
        "minYear": 1900,
        "maxYear": year,
        "timePicker": false,
        "alwaysShowCalendars": true,
    });
});


/*
 * For Uppercase Word first Letter
 */
function jsUcfirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}


function p_notify(msg = 'Something Wrong', type = 'error', title = "Opps!!") {
    new PNotify({
        title: title,
        text: msg,
        type: type,
        addclass: 'alert alert-styled-left',
    });
}

function noty(msg = 'Something Wrong', type = 'error', title = "Opps!!", layout = 'topRight') {
    new Noty({
        theme: 'limitless',
        timeout: 2000,
        title: title,
        text: msg,
        type: type,
        modal: true,
        layout: 'center'
    }).show();
}

