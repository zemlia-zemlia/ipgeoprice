function selectSity() {


    $.ajax({
        type: "POST",
        data: "",
        url: '/?fc=module&module=ipgeoprice&controller=ajax',
        success: function (html) {

            $("#city1").show().html(html);
        }

    });


}


$(document).ready(function () {


    $('body').click(function () {

        var display = $('#city1').css('display');

        if (display == "block") {
            $('#city1').hide();
        }

    });


    var city = $('#poddomen').val();

    $('option[title="'+city+'"]').parents('.attribute_fieldset').hide();
    $('option[title="'+city+'"]').parent('select').find('option:selected').removeAttr('selected');



    $('option[title="'+city+'"]').attr('selected', 'selected');

    findCombination();
    getProductAttribute();

});