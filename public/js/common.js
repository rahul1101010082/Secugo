$(document).ready(function() {
    var Note;
    $('body').on('click', 'input[type=checkbox]', function() {

        /**
         * select parent-child checkbox functionality
         * @Usage : Assign class to parent checkbox element and assign @attr: rel (of val = className of parent checkbox)
         *          to its child checkbox elements
         */
        var ele = $('input[rel="'+$(this).attr("class")+'"]');

        /**
         * child checkboxes behaviour on parent checkbox
         */
        var c = 0;
        if ($(this).attr('rel')) {

            var ele1 = $('input[rel="'+$(this).attr("rel")+'"]');

            ele1.each(function() {
                if ($(this).prop('checked') === false) {
                    c++;
                }
            });

            if (c == 0) {
                $('.'+$(this).attr('rel')).prop('checked','checked');
            } else {
                $('.'+$(this).attr('rel')).removeAttr('checked');
            }
        }

        /**
         * parent checkbox behaviour on child checkboxes
         */
        if ($(this).prop('checked') === true) {
            ele.prop('checked','checked');
        } else {
            ele.removeAttr('checked');
        }
        var count = 0;
        $('input[type=checkbox]').each(function() {
            if ($(this).prop('checked') === true) {
                count++;
            }
        });
    }).on('click', 'a.formModal', function(event) { //due to ajax data request with datatable grids

        var route = $(this).data("route");
        // name of the form that we have to edit

        $.ajax({
            type: "GET",
            url : route,
            async : true,
            beforeSend: function() {
                $('#dynamicEdit').modal('show');
                setTimeout(function () {
                    //$('#loader').html() defined in layout before editing model
                    $("#dynamicEdit").find("#datatResult").html($('#loader').html());
                } , 10);
            },
            success:function(data, textStatus, jqXHR)
            {
                $("#dynamicEdit").find("#datatResult").html(data);
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                $('#dynamicEdit').fadeOut(100, 'linear');
                alert(errorThrown+'. Please contact your administrator.');
            }
        });
        return false;
        event.preventDefault(); //STOP default action
        event.unbind(); //unbind. to stop multiple form submit.
    });
});

/*
 * Notifications
 */
function notify(message, type){
    $.growl({
        icon: 'fa fa-check',
        message: message,
        url: ''
    },{
        element: 'body',
        type: type,
        allow_dismiss: true,
        placement: {
            from: 'top',
            align: 'right'
        },
        offset: {
            x: 30,
            y: 30
        },
        spacing: 10,
        z_index: 999999,
        delay: 2500,
        timer: 1000,
        url_target: '_blank',
        mouse_over: false,
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutDown'
        },
        icon_type: 'class',
        template: '<div data-growl="container" class="alert" role="alert">' +
        '<button type="button" class="close" data-growl="dismiss">' +
        '<span aria-hidden="true">&times;</span>' +
        '<span class="sr-only">Close</span>' +
        '</button>' +
        '<span data-growl="icon"></span>' +
        '<span data-growl="title"></span>' +
        '<span data-growl="message"></span>' +
        '<a href="#" data-growl="url"></a>' +
        '</div>'
    });
}

