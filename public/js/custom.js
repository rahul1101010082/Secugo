/**
 *This js is used display add more functionality on year Displays.
 *
 * @author Gurpinder Kaur <gurpinder.kaur@surmountsoft.com>
 *
 * @copyright 2017 SurmountSoft Pvt. Ltd. All rights reserved.
 */

$(document).ready(function() {

    removedFieldSetCount = 0;
    var selectedProducts = [];
    $('body').on('click', '.addCollectionElement', function () {
        var parent = $(this).parents('.addMoreCollectionElementContainer');

        var currentCount = parent.find('.copy').length;

        var template = parent.find('.template').data('template');

        var indexPosition = currentCount + removedFieldSetCount;

        template = template.replace(/_index_/g, indexPosition);
        template = $(template);
        for (var i = 0; i < selectedProducts.length; i++) {
            template.find('select:first option[value="' + selectedProducts[i] + '"]').remove();
        }
        parent.find('.copy:last').after(template);

        parent.find('.copy:last').append('<div class="removeFieldSet col-md-12 m-t-15 m-l-100"><a href="javascript:void(0);" class="col-red icon f-right"><i class="zmdi zmdi-close-circle-o outer-ellipsis f-right"></i></a></span>');


    }).on('click', '.removeFieldSet a', function () {
        var parent = $(this).parents('.addMoreCollectionElementContainer');
        removedFieldSetCount++;

        $(this).parent().parent().remove();

        if (parent.find('.copy').length > 1 && parent.find('.copy:last').find('.removeFieldSet').length == 0) {
            parent.find('.copy:last').append('<div class="removeFieldSet col-md-12 "><a href="javascript:void(0);" class="col-red icon f-right"><i class="zmdi zmdi-close-circle-o outer-ellipsis f-right"></i></span>');
        }
        if (parent.find('.copy').length == 0) {
            $(parent).addClass('hide');
        }
    });
    //begin Term/tenure edit/show
    $(document).on('click', '#cancel-btn', function () {
        $('.view-info').show();
        $('.edit-info').hide();
        $('.view-desc').show();
        $('.edit-desc').hide();
        return false;
    });

    $('#edit-btn-cancel').on('click', function() {

        var c = $('#edit-btn').find("i");
        c.removeClass('icofont-close');
        c.addClass('icofont-edit');
        $('.view-info').show();
        $('.edit-info').hide();
        $('.view-desc').show();
        $('.edit-desc').hide();

    });


    $('#edit-btn-ten').on('click', function() {
        $('#edit-btn-2').show();

        var b = $(this).find("i");
        var edit_class = b.attr('class');
        if (edit_class == 'icofont icofont-edit') {
            b.removeClass('icofont-edit');
            b.addClass('icofont-close');
            $('.view-info').hide();
            $('.edit-info').show();
            $('.view-desc').hide();
            $('.edit-desc').show();

        } else {
            b.removeClass('icofont-close');
            b.addClass('icofont-edit');
            $('.view-info').show();
            $('.edit-info').hide();
            $('.view-desc').show();
            $('.edit-desc').hide();

        }
    });
    //end Term/tenure edit/show

    // begin edit subject info
    $('#edit-cancels').on('click', function() {
        var c = $('#edit-btns').find("i");
        c.removeClass('icofont-close');
        c.addClass('icofont-edit');
        $('#deletes').removeClass('hide');
        $('#deletes').addClass('show');
        $('#cancels').removeClass('hide');
        $('#cancels').addClass('show');
        $('.view-infos').hide();
        $('.edit-infos').hide();
    });
    $('#deletes').removeClass('hide');
    $('#cancels').removeClass('hide');
    $('#edit-btns').on('click', function() {
        var b = $(this).find("i");
        var edit_class = b.attr('class');
        if (edit_class == 'icofont icofont-edit') {
            b.removeClass('icofont-edit');
            b.addClass('icofont-close');
            $('#deletes').removeClass('show');
            $('#deletes').addClass('hide');
            $('#cancels').removeClass('show');
            $('#cancels').addClass('hide');
            $('.view-infos').hide();
            $('.edit-infos').show();
        } else {
            b.removeClass('icofont-close');
            b.addClass('icofont-edit');
            $('#deletes').removeClass('hide');
            $('#deletes').addClass('show');
            $('#cancels').removeClass('hide');
            $('#cancels').addClass('show');
            $('.view-infos').show();
            $('.edit-infos').hide();
        }
    });

    // end edit subject info

    // start discount edit code
    $('#edit-btn-1').on('click', function() {

        var b = $(this).find("i");
        var edit_class = b.attr('class');
        if (edit_class == 'icofont icofont-edit') {
            $('.edit-info').show();
            $('.view-desc').hide();
        } else {
            $('.edit-info').hide();
            $('.view-desc').show();
        }
    });

    $('#edit-btn-3').on('click', function() {

        var b = $(this).find("i");
        var edit_class = b.attr('class');
        if (edit_class == 'icofont icofont-edit') {
            $('.edit-info').show();
            $('.view-desc').hide();
        } else {
            $('.edit-info').hide();
            $('.view-desc').show();
        }
    });

    $('#cancel-btn-3').on('click', function() {

        var b = $(this).find("i");
        var edit_class = b.attr('class');
        if (edit_class == 'icofont icofont-edit') {
            $('.edit-info').show();
            $('.view-desc').hide();
        } else {
            $('.edit-info').hide();
            $('.view-desc').show();
        }
    });

    //end of discount

    // course edit begin
    $('.edit-info').hide();
    $('.edit-desc').hide();
    $('#edit-btn-1').on('click', function() {
        $('#edit-btn-2').show();
        var b = $(this).find("i");
        var edit_class = b.attr('class');
        if (edit_class == 'icofont icofont-edit') {
            b.removeClass('icofont-edit');
            b.addClass('icofont-close');
            $('.view-info').hide();
            $('.edit-info').show();
            $('.view-desc').hide();
            $('.edit-desc').show();
            $('.hide-button').hide();
        } else {
            b.removeClass('icofont-close');
            b.addClass('icofont-edit');
            $('.view-info').show();
            $('.edit-info').hide();
            $('.view-desc').show();
            $('.edit-desc').hide();
            $('.hide-button').show();
        }
    });
    // course edit end


    $('#edit-1').on('click', function() {
        var b = $(this).find("i");
        var edit_class = b.attr('class');
        if (edit_class == 'icofont icofont-edit') {
            $('.edit-info').show();
            $('.view-desc').hide();
        } else {
            $('.edit-info').hide();
            $('.view-desc').show();
        }
    });
    $('.edit-info' +
        '').hide();
    $('#edit-2').on('click', function() {
        var b = $(this).find("i");
        var edit_class = b.attr('class');
        if (edit_class == 'icofont icofont-edit') {
            $('.edit-info').show();
            $('.view-desc').hide();
        } else {
            $('.edit-info').hide();
            $('.view-desc').show();
        }
    });
    $('#cancel-1').on('click', function() {
        var b = $(this).find("i");
        var edit_class = b.attr('class');
        if (edit_class == 'icofont icofont-edit') {
            $('.edit-info').show();
            $('.view-desc').hide();
        } else {
            $('.edit-info').hide();
            $('.view-desc').show();
        }
    });
});