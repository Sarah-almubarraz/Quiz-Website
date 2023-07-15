function registrationValidation() {

    // let flag = true;
    // border: none;
    // name field
    let name = document.getElementById('name').value;
    if (name === "" || name == null) {
        document.getElementById('name_error').style.display = 'block';
        document.getElementById('name').style.border = 'solid #C24641';
        // flag = false;
    } else {
        document.getElementById('name_error').style.display = 'none';
        document.getElementById('name').style.border = 'none';
    }

    // email check
    const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let email = document.getElementById('email').value;

    if (email === "" || email == null) {
        document.getElementById('empty_email').style.display = 'block';
        document.getElementById('email').style.border = 'solid #C24641';
        // flag = false;
    } else {
        document.getElementById('empty_email').style.display = 'none';
        document.getElementById('email').style.border = 'none';
        if (!email.match(emailPattern)) {
            document.getElementById('email_error').style.display = 'block';
            document.getElementById('email').style.border = 'solid #C24641';
            // flag = false;
        } else {
            document.getElementById('email_error').style.display = 'none';
            document.getElementById('email').style.border = 'none';
        }
    }

    // password check
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirm_password').value;

    if (password === "" || password == null) {
        document.getElementById('password_error').style.display = 'block';
        document.getElementById('password').style.border = 'solid #C24641';
        // flag = false;
    } else {
        document.getElementById('password_error').style.display = 'none';
        document.getElementById('password').style.border = 'none';

        if (confirmPassword === "" || confirmPassword == null) {
            document.getElementById('empty_confirm_password').style.display = 'block';
            document.getElementById('confirm_password').style.border = 'solid #C24641';
        } else {
            document.getElementById('empty_confirm_password').style.display = 'none';
            document.getElementById('confirm_password').style.border = 'none';
            if (password !== confirmPassword) {
                document.getElementById('confirm_password_error').style.display = 'block';
                document.getElementById('confirm_password').style.border = 'solid #C24641';
                // flag = false;
            } else {
                document.getElementById('confirm_password_error').style.display = 'none';
                document.getElementById('confirm_password').style.border = 'none';
            }
        }
    }
}

const signup = document.querySelector('button');
signup.addEventListener('click', registrationValidation);