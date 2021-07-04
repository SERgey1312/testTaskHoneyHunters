$(document).ready(function () {
    jQuery.validator.addMethod('username_rule', function (value, element) {
        if (/^[a-zA-Z0-9_-]+$/.test(value)) {
            return true;
        } else {
            return false;
        };
    });
    jQuery.validator.addMethod('email_rule', function (value, element) {
        if (/^([a-zA-Z0-9_\-\.]+)\+?([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(value)) {
            return true;
        } else {
            return false;
        };
    });
    $('#main-form').validate({
        rules: {
            'email': {
                required: true,
                email_rule: true,
                minlength: 5,
                maxlength: 60,
            },
            'name': {
                username_rule:true,
                required: true,
                minlength: 2,
                maxlength: 40,
            },
            'comment': {
                required: true,
                minlength: 3,
                maxlength: 240,
            },
        },
        messages: {
            'email': {
                email_rule: "Введите корректный E-Mail",
                email: "Введите корректный E-Mail",
                required: 'Поле E-Mail обязательно',
                minlength: 'E-Mail слишком короткий',
                maxlength: 'E-Mail слишком длинный',
            },
            'name': {
                username_rule: 'Введите корректное имя',
                required: 'Поле ИМЯ обязательно',
                minlength: 'Имя слишком короткое',
                maxlength: 'Имя слишком длинное',
            },
            'comment': {
                required: 'Поле КОММЕНТАРИЙ обязательно',
                minlength: 'Комментарий слишком короткий',
                maxlength: 'Комментарий слишком длинный',
            },
        }
    });
});