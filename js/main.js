$(function() {
    let $dataVal        = $('.input-list-data input');

    $(document)
        .on('click', '.todo-list-inner-box .input-list-data button' , function() {


            let result   = $(this).closest('.todo-list-inner-box').find('.input-list-data input')[0],
                $list    = $(this).closest('.todo-list-inner-box').find('.list-sections');
            console.log(result);

            $list.append(
                '<li class="list-add-data">' +
                '<div class="list-check-wrap">'+
                '<input type="checkbox" class="list-check">' +
                '</div>'+
                '<input type="text" value="'+result.value+'" class="list-check-txt" readonly>'+
                '<div class="change-data-checker">' +
                '<div class="change-data-checker-inner">' +
                '<i class="fa fa-caret-up" aria-hidden="true"></i>' +
                '<i class="fa fa-caret-down" aria-hidden="true"></i></div>'+
                '<div class="change-data-checker-inner">' +
                '<i class="fa fa-pencil" aria-hidden="true"></i></div>'+
                '<div class="change-data-checker-inner">' +
                '<i class="fa fa-trash" aria-hidden="true"></i></div>'+
                '</div>'+
                '</li>'
            );
            result.value = '';
        })
        .on('click', '.change-data-checker-inner .fa-pencil', function() {
            $(this)
                .closest('.list-add-data')
                .find('.list-check-txt')
                .removeAttr('readonly')
                .addClass('redact');
        })
        .on('click', '.change-data-checker-inner .fa-trash', function() {
            $(this)
                .closest('.list-add-data').remove();
        })
        .on('click', '.change-data-checker .fa-caret-down', function () {
            let $parent = $(this).closest('.list-add-data');
            $parent.insertAfter($parent.next());
        })
        .on('click', '.change-data-checker .fa-caret-up', function () {
            let $parent = $(this).closest('.list-add-data');
            $parent.insertBefore($parent.prev());
        })
        .on('click', '.header-list-edit .fa-pencil', function () {
            $(this)
                .closest('.header-title')
                .find('.list-title')
                .removeAttr('readonly')
                .attr('placeholder', '')
                .val('')
                .focus();
        })
        .on('click', '.header-list-edit .fa-trash', function () {
            $(this)
                .closest('.todo-list-inner-box')
                .remove();
        })
        .on('change', '.list-check', function() {
            let $that = this;
            if(this.checked) {
                $($that)
                   .closest('.list-add-data')
                   .find('.list-check-txt')
                   .addClass('done');
            } else {
                $($that)
                    .closest('.list-add-data')
                    .find('.list-check-txt')
                    .removeClass('done');
            }
        })
        .on('mouseenter', '.list-add-data', function() {
           $(this).find('.change-data-checker').show();
        })
        .on('mouseleave', '.list-add-data', function() {
            $(this).find('.change-data-checker').hide();
        })
        .on('click', '.add-todo-list', function () {
            $(".todo-list-inner-box.clean-add-list").clone()
                .addClass("new-todo-list")
                .appendTo(".container");

            $('.new-todo-list')
                .find('.list-title')
                .removeAttr('readonly')
                .attr('placeholder', '')
                .val('')
                .focus();
        });
});