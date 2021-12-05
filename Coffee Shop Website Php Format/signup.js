const nameEl = document.querySelector('#name');
const phoneEl = document.querySelector('#phone');
const departmentEl = document.querySelector('#department');
const dateofbirthEl = document.querySelector('#dateofbirth');
const usernameEl = document.querySelector('#username');
const emailEl = document.querySelector('#email');
const passwordEl = document.querySelector('#password');
const confirmPasswordEl = document.querySelector('#confirm-password');
const addressEl = document.querySelector('#address')
const form = document.querySelector('#signup');

const checkName = () => {

    let valid = false;

    const min = 3,
        max = 25;

    const name = nameEl.value.trim();

    if (!isRequired(name)) {
        showError(nameEl, 'Name cannot be blank.');
    } else if (!isBetween(name.length, min, max)) {
        showError(nameEl, 'Name must be between 3 and 25 characters.')
    } else {
        showSuccess(nameEl);
        valid = true;
    }
    return valid;
};

const checkphone = () => {
    let valid = false;
    const min = 10,
        max = 15;
    const phone = phoneEl.value.trim();
    if (!isRequired(phone)) {
        showError(phoneEl, 'Phone Number cannot be blank.');
    } else if (!isBetween(phone.length, min, max)) {
        showError(phoneEl, 'Phone Number must be 10 characters.')
    } else {
        showSuccess(phoneEl);
        valid = true;
    }
    return valid;
};

const checkDepartment = () => {

    let valid = false;

    const min = 3,
        max = 8;

    const department = departmentEl.value.trim();

    if (!isRequired(department)) {
        showError(departmentEl, 'Department cannot be blank.');
    } else if (!isBetween(department.length, min, max)) {
        showError(departmentEl, 'Department must be between 3 and 8 characters.')
    } else {
        showSuccess(departmentEl);
        valid = true;
    }
    return valid;
};

const checkdateofbirth = () => {

    let valid = false;

    const dateofbirth = dateofbirthEl.value.trim();

    if (!isRequired(dateofbirth)) {
        showError(dateofbirthEl, 'Date of Birth cannot be blank.');
    } else {
        showSuccess(dateofbirthEl);
        valid = true;
    }
    return valid;
};

const checkUsername = () => {
    
    let valid = false;
    
    const min = 3,
    max = 25;
    
    const username = usernameEl.value.trim();
    
    if (!isRequired(username)) {
        showError(usernameEl, 'Username cannot be blank.');
    } else if (!isBetween(username.length, min, max)) {
        showError(usernameEl, 'Username must be between 3 and 25 characters.')
    } else {
        showSuccess(usernameEl);
        valid = true;
    }
    return valid;
};

const checkaddress = () => {
    let valid = false;
    const min =25,
        max = 100;
    const address = addressEl.value.trim();
    if (!isRequired(address)) {
        showError(addressEl, 'Address cannot be blank.');
    } else if (!isBetween(address.length, min, max)) {
        showError(addressEl, 'Address must be between 25 and 100 characters.')
    } else {
        showSuccess(addressEl);
        valid = true;
    }
    return valid;
};

const checkEmail = () => {
    let valid = false;
    const email = emailEl.value.trim();
    if (!isRequired(email)) {
        showError(emailEl, 'Email cannot be blank.');
    } else if (!isEmailValid(email)) {
        showError(emailEl, 'Email is not valid.')
    } else {
        showSuccess(emailEl);
        valid = true;
    }
    return valid;
};

const checkPassword = () => {
    let valid = false;
    const password = passwordEl.value.trim();

    if (!isRequired(password)) {
        showError(passwordEl, 'Password cannot be blank.');
    } else if (!isPasswordSecure(password)) {
        showError(passwordEl, 'Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number');
    } else {
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
};

const checkConfirmPassword = () => {
    let valid = false;

    const confirmPassword = confirmPasswordEl.value.trim();
    const password = passwordEl.value.trim();

    if (!isRequired(confirmPassword)) {
        showError(confirmPasswordEl, 'Please enter the password again');
    } else if (password !== confirmPassword) {
        showError(confirmPasswordEl, 'The password does not match');
    } else {
        showSuccess(confirmPasswordEl);
        valid = true;
    }

    return valid;
};

const isEmailValid = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])");
    return re.test(password);
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;


const showError = (input, message) => {

    const formField = input.parentElement;

    formField.classList.remove('success');
    formField.classList.add('error');


    const error = formField.querySelector('small');
    error.textContent = message;
};

const showSuccess = (input) => {

    const formField = input.parentElement;


    formField.classList.remove('error');
    formField.classList.add('success');


    const error = formField.querySelector('small');
    error.textContent = '';
}


form.addEventListener('submit', function (e) {

    e.preventDefault();


    let isNameValid = checkName(),
        isphoneValid = checkphone(),
        isDepartmentValid = checkDepartment(),
        isdateofbirthValid = checkdateofbirth(),
        isUsernameValid = checkUsername(),
        isEmailValid = checkEmail(),
        isPasswordValid = checkPassword(),
        isConfirmPasswordValid = checkConfirmPassword(),
        isAddressValid = checkaddress();

    let isFormValid = isNameValid && isphoneValid && isDepartmentValid && isdateofbirthValid && isUsernameValid &&
        isEmailValid &&
        isPasswordValid &&
        isConfirmPasswordValid &&
        isAddressValid;


    if (isFormValid) {

    }
});


const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {

        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'name':
            checkName();
            break;
        case 'phone':
            checkphone();
            break;
        case 'department':
            checkDepartment();
            break;
        case 'dateofbirth':
            checkdateofbirth();
            break;
        case 'username':
            checkUsername();
            break;
        case 'email':
            checkEmail();
            break;
        case 'password':
            checkPassword();
            break;
        case 'confirm-password':
            checkConfirmPassword();
            break;
        case 'address':
            checkaddress();
            break;
    }
}));