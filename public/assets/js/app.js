const userNameEle = document.querySelector('#username');
const emailEle = document.querySelector('#email');
const passEle = document.querySelector('#pass');
const repassEle = document.querySelector('#repass');
const addressEle = document.querySelector('#address');
const telEle = document.querySelector('#tel');

const form = document.querySelector('#signup');

// check the email is valid or not
const isEmailValid = (email) => {
    const reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(email);
};

// check a password is strong or not
const isPasswordStrong = (pass) => {
    const reg = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
    return reg.test(pass);
};

// check a tel is valid or not
const isTelValid = (tel) => {
    const reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    return reg.test(tel);
};

// the variables for checking
const isRequire = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;

// validate the username field
const checkUsername = () => {
    let validate = false;
    const min = 3;
    max = 25;
    const userName = userNameEle.value.trim();
    if (!isRequire(userName)) {
        errorShow(userNameEle, 'Tên đăng nhập không được bỏ trống!');
    } else if (!isBetween(userName.length, min, max)) {
        errorShow(userNameEle, `Tên đăng nhập phải chứa ít nhât ${min} và tối đa ${max} kí tự!`);
    } else {
        successShow(userNameEle);
        validate = true;
    }
    return validate;
};

// validate the email
const checkEmail = () => {
    let validate = false;
    const email = emailEle.value.trim();
    if (!isRequire(email)) {
        errorShow(emailEle, 'Email không được bỏ trống');
    } else if (!isEmailValid(email)) {
        errorShow(emailEle, 'Email không hợp lệ!')
    } else {
        successShow(emailEle);
        validate = true;
    }
    return validate;
};

// validate the password
const checkPass = () => {
    let validate = false;
    const pass = passEle.value.trim();
    if (!isRequire(pass)) {
        errorShow(passEle, 'Mật khẩu không được bỏ trống!');
    } else if (!isPasswordStrong(pass)) {
        errorShow(passEle, 'Mật khẩu phải chứa ít nhất 8 kí tự gồm 1 chữ viết thường, 1 chữ viết hoa, 1 số!');
    } else {
        successShow(passEle);
        validate = true;
    }
    return validate;
};

// validate confirm password 
const checkConfirmPass = () => {
    let validate = false;
    // check confirm
    const repass = repassEle.value.trim();
    const pass = passEle.value.trim();
    if (!isRequire(repass)) {
        errorShow(repassEle, 'Hãy nhập lại mật khẩu!');
    } else if (pass !== repass) {
        errorShow(repassEle, 'Mật khẩu không khớp!');
    } else {
        successShow(repassEle);
        validate = true;
    }
    return validate;
};

// validate the tel
const checkTel = () => {
    let validate = false;
    const tel = telEle.value.trim();
    if (!isTelValid(telEle)) {
        errorShow(telEle, 'Số điện thoại không hợp lệ!');
    } else {
        successShow(telEle);
        validate = true;
    }
    return validate;
};

// show the function errors
const errorShow = (input, message) => {
    // get the form-field
    const formF = input.parentElement;
    //  add erros class
    formF.classList.remove('success');
    formF.classList.add('error');
    // show the error alert
    const error = formF.querySelector('p');
    error.textContent = message;
};

// Show the fucntion success
const successShow = (input) => {
    const formF = input.parentElement
    formF.classList.remove('error');
    // hide the error
    const error = formF.querySelector('p');
    error.textContent = '';
};

// modifying the submit event handler
form.addEventListener('submit', function(e) {
    e.preventDefault();
    // validate forms
    let isUsernameValid = checkUsername();
    isEmailValid = checkEmail();
    isPassValid = checkPass();
    isConfirmPassValid = checkConfirmPass();
    // isTelValid = checkTel();
    let isFormValid = isUsernameValid && isEmailValid && isPassValid && isConfirmPassValid;
    // let isFormValid = isUsernameValid && isEmailValid && isPassValid && isConfirmPassValid && isTelValid;
    //  submit to server if the form correctly
    // if (isFormValid) {

    // }
});
const bounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new time
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};
form.addEventListener('input', bounce(function(e) {
    switch (e.target.id) {
        case 'username':
            checkUsername();
            break;
        case 'email':
            checkEmail();
            break;
        case 'pass':
            checkPass();
            break;
        case 'repass':
            checkConfirmPass();
            break;
            // case 'tel':
            //     checkTel();
            //     break;
    }
}));