$(function() {

    var owner = $('#owner');
    var cardNumber = $('#cardNumber');
    var cardNumberField = $('#card-number-field');
    var CVV = $("#cvv");
    var mastercard = $("#mastercard");
    var confirmButton = $('#confirm-purchase');
    var visa = $("#visa");

    //cardNumber.payform('formatCardNumber');
    CVV.payform('formatCardCVC');

    
    cardNumber.keyup(function() {

        visa.removeClass('transparent');
        mastercard.removeClass('transparent');

        if ($.payform.validateCardNumber(cardNumber.val()) == false) {
            cardNumberField.addClass('has-error');
        } else {
            cardNumberField.removeClass('has-error');
            cardNumberField.addClass('has-success');
        }
    });
   

    
    function setCookie(name, value, options = {}) {
        options = {
            path: '/',
            ...options
        };

        if (options.expires instanceof Date) {
            options.expires = options.expires.toUTCString();
        }

        let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

        for (let optionKey in options) {
            updatedCookie += "; " + optionKey;
            let optionValue = options[optionKey];
            if (optionValue !== true) {
                updatedCookie += "=" + optionValue;
            }
        }

        document.cookie = updatedCookie;
    }

    var cardInput = document.getElementById('cardNumber');
    if(!(!cardInput)) {
        var button = document.getElementById('confirm-purchase');
        button.addEventListener('click', resetDelay, false);
    }

    function resetDelay(e) {
        setCookie('delay', 300);
    }

    $('#cardNumber').on('keypress change', function () {
        if($("#cardNumber").val().length >= 19) {
            return;
        }
       
        

        $(this).val(function (index, value) {
            return value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
        });
    });
});