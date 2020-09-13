 /*
     * Kiểm tra valid input checkout
     */
    var inputs = document.getElementsByClassName('js-check-valid');
    var mess = document.getElementById('mess');
    var buttonSubmit = document.getElementById('send');
    var telRegex = /^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/;
    var emailRegex = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/i;
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener("change", check_form_valid);
    }

    function displayError(mess) {
        mess.classList.add("c-red");
        mess.innerText = "*Thông tin chưa đúng!";
        mess.style.opacity = '1';
    }

    function displaySuccess(mess) {
        mess.classList.remove("c-red");
        mess.innerText = "Thông tin chính xác!";
        mess.style.opacity = '1';

    }
    buttonSubmit.disabled = true;

    function check_form_valid() {
        var result = true;
        for (var i = 0; i < inputs.length; i++) {
            var inputName = inputs[i].name;
            var inputValue = inputs[i].value;
            tel = telRegex.test(inputValue);
            email = emailRegex.test(inputValue);
            if (inputValue.indexOf("script") != -1) {
                result = false;
                buttonSubmit.disabled = true;
                displayError(mess);
            }
            if (inputName == 'contact_email_phone' && (!tel & !email || inputValue == '')) {
                result = false;
                buttonSubmit.disabled = true;
                displayError(mess);
            }
        }
        if (result === true) {
            displaySuccess(mess);
            buttonSubmit.disabled = false;
        }
    }