const email = document.getElementById("email");
const password = document.getElementById("password");
const phonenumber = document.getElementById("phonenumber");
const dateofbirth = document.getElementById("dateofbirth");

function checkInputs(){
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const phonenumberValue = phonenumber.value.trim();
    const dateofbirthValue = dateofbirth.value.trim();

    if(emailValue === ''){
        setErrorFor(email, "Vui lòng nhập Email!");
        email.focus();
        return false;
    }else if(!checkEmail(emailValue)){
        setErrorFor(email, "Địa chỉ Email không hợp lệ! Vui lòng nhập lại!");
        email.focus();
        return false;
    }

    if(passwordValue === ''){
        setErrorFor(password, "Vui lòng nhập Mật khẩu!");
        return false;
    }else if(!checkPassword(passwordValue)){
        setErrorFor(password, "Mật khẩu phải từ 6 ký tự trở lên! Vui lòng nhập lại!");
        return false;
    }

    if(phonenumberValue === ''){
        setErrorFor(phonenumber, "Vui lòng nhập Số điện thoại!");
        return false;
    }else if(!checkPhonenumber(phonenumberValue)){
        setErrorFor(phonenumber, "Số điện thoại không hợp lệ! Vui lòng nhập lại!");
        return false;
    }

    if(dateofbirthValue === ''){
        setErrorFor(dateofbirth, "Vui lòng nhập Ngày sinh!");
        return false;
    }
    return true;
}

function setErrorFor(input, message){
    const formControl = input.parentElement;
    const span = formControl.querySelector('span');

    span.innerText = message;

    formControl.classList.remove('success');
    formControl.classList.add('error');
}

function setSuccessFor(input, message){
    const formControl = input.parentElement;
    const span = formControl.querySelector('span');

    span.innerText = message;
    formControl.classList.remove('error');
    formControl.classList.add('success');
}

// Function CheckEmail
function checkEmail(email){
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)){
        return false;
    }
    return true;
}

// Function CheckPassword
function checkPassword(password){
    if(password.length < 6){
        return false;
    }
    return true;
}

// Function CheckPhonenumber
function checkPhonenumber(phonenumber){
    var filter = /((0)+([0-9]{9})\b)/g;
    if (!filter.test(phonenumber)){
        return false;
    }
    return true;
}