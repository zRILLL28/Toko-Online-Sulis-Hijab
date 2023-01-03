$(function () {
    $(".select2").select2({
        width: "100%"
    }), jQuery("#tags").tagsInput({
        width: "auto"
    }), jQuery("#datepicker").datepicker(), jQuery("#datepicker-autoclose").datepicker({
        autoclose: !0,
        todayHighlight: !0
    }), jQuery("#datepicker-inline").datepicker(), jQuery("#datepicker-multiple-date").datepicker({
        format: "mm/dd/yyyy",
        clearBtn: !0,
        multidate: !0,
        multidateSeparator: ","
    }), jQuery("#date-range").datepicker({
        toggleActive: !0
    }), $("#cp1").colorpicker(), $("#cp2").colorpicker(), $("#cp3").colorpicker({
        color: "#ff679b",
        format: "rgb"
    }), $("#cp6").colorpicker({
        color: "#88cc33",
        horizontal: !0
    }), $(".vertical-spin").TouchSpin({
        verticalbuttons: !0,
        verticalupclass: "ion-plus-round",
        verticaldownclass: "ion-minus-round",
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    }), $("input[name='demo1']").TouchSpin({
        min: 0,
        max: 100,
        step: .1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: "%",
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    }), $("input[name='demo2']").TouchSpin({
        min: -1e9,
        max: 1e9,
        stepinterval: 50,
        maxboostedstep: 1e7,
        prefix: "$",
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    }), $("input[name='stock']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        min: 1,
        max: 999999,
        stepinterval: 50,
        maxboostedstep: 1e7,
    }), $("input[name='demo3_21']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    }), $("input[name='demo3_22']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    }), $("input[name='demo5']").TouchSpin({
        prefix: "pre",
        postfix: "post",
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    }), $("input[name='demo0']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    })
});
