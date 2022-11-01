const validation = new JustValidate("#signup");

validation
    .addField("#email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        },
        {
            validator: (value) => () => {
                return fetch("validate-email.php?email=" + encodeURIComponent(value))
                       .then(function(response) {
                           return response.json();
                       })
                       .then(function(json) {
                           return json.available;
                       });
            },
            errorMessage: "email already taken"
        }
    ])
    .addField("#password", [
        {
            rule: "required"
        }
    ])
    .addField("#phonenumber", [
        {
            rule: "required"
        }
    ])
    .addField("#dateofbirth", [
        {
            rule: "required"
        }
    ])

// // Function CheckEmail
// function checkEmail(email){
//     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
//     if (!filter.test(email)){
//         return false;
//     }
//     return true;
// }
// // Function CheckPassword
// function checkPassword(password){
//     if(password.length < 6){
//         return false;
//     }
//     return true;
// }
// // Function CheckPhonenumber
// function checkPhonenumber(phonenumber){
//     var filter = /((0)+([0-9]{9})\b)/g;
//     if (!filter.test(phonenumber)){
//         return false;
//     }
//     return true;
// }


// let email = document.getElementById("email");
// let password = document.getElementById("password");
// let phonenumber = document.getElementById("phonenumber");
// let dateofbirth = document.getElementById("dateofbirth");
// let btnSignup = document.querySelector(".btnSignup");
// // let btnLogin = document.querySelector(".btnLogin");

// btnSignup.addEventListener("click", (e) => {
//     e.preventDefault();
//     let user = {
//     email: email.value,
//     password: password.value,
//     phonenumber: phonenumber.value,
//     dateofbirth: dateofbirth.value,
//     };
//     let json = JSON.stringify(user);

//     //Kiểm tra tất cả các ràng buộc
//     if(!email.value && !password.value && !phonenumber.value && !dateofbirth.value){
//         alert("Vui lòng nhập đầy đủ các thông tin!");
//     }else if(!email.value){
//         alert("Vui lòng nhập Email!");
//         email.focus();
//     }else if(!checkEmail(email.value)){
//         alert("Địa chỉ Email không hợp lệ! Vui lòng nhập lại!\nVí dụ: example@gmail.com");
//         email.focus();
//     }else if(!password.value){
//         alert("Vui lòng nhập Mật khẩu!");
//         password.focus();
//     }else if(!checkPassword(password.value)){
//         alert("Mật khẩu phải từ 6 ký tự trở lên! Vui lòng nhập lại!");
//         password.focus();
//     }else if(!phonenumber.value){
//         alert("Vui lòng nhập Số điện thoại!");
//         phonenumber.focus();
//     }else if(!checkPhonenumber(phonenumber.value)){
//         alert("Số điện thoại không hợp lệ! Vui lòng nhập lại!\nVí dụ: 0xxxxxxxxx");
//         phonenumber.focus();
//     }else if(!dateofbirth.value){
//         alert("Vui lòng nhập Ngày sinh!");
//         dateofbirth.focus();
//     }else{
//         // localStorage.setItem(email.value, json);
//         alert("Bạn đã đăng ký tài khoản thành công!");       
//     }
// });