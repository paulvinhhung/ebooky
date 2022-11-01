function Validatior(){
function validate(inputElement, rule){
    var errorMessage = rule.test(inputElement.value);
    var errorElement = inputElement.parentElement.querySelector('.form-message');
    if(errorMessage){
        errorElement.innerText=errorMessage;
        inputElement.parentElement.classList.add('invalid');
    }else{
        errorElement.innerText='';
        inputElement.parentElement.classList.remove('invalid');
    }

}

    // Lay Element cua form can validate
    var formElement = document.querySelector(options.form);
    if(formElement){
        option.rules.forEach(function(rule){
            var inputElement = formElement.querySelector(rule.selector);
            if(inputElement){
                // Xu ly truong hop blur khoi input
                inputElement.onblur=function(){
                    validate(inputElement, rule);
                }

                // Xu ly khi nguoi dung nhap vao input
                inputElement.oninput=function(){
                    var errorElement = inputElement.parentElement.querySelector('.form-message');
                    errorElement.innerText='';
                    inputElement.parentElement.classList.remove('invalid');
                }
            }
        });
    }
}

Validatior.isRequired = function(selector, message){
    return{
        selector: selector,
        test: function(value){
            return value.trim() ? undefined :  message || 'Vui lòng nhập thông tin'
        }
    };
}

Validatior.isEmail = function(selector, message){
    return{
        selector: selector,
        test: function(value){
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined :  message || 'Địa chỉ Email không hợp lệ! Vui lòng nhập lại!<br>Ví dụ: example@gmail.com';
        }
    };
}

Validator.minLength = function (selector, min, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= min ? undefined :  message || `Vui lòng nhập tối thiểu ${min} kí tự`;
        }
    };
}