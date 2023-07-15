function loginValidation() {
    const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let email = document.getElementById('email').value;
    // email check
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

    let password = document.getElementById('password').value;
    // password check
    if (password === "" || password == null) {
        document.getElementById('password_error').style.display = 'block';
        document.getElementById('password').style.border = 'solid #C24641';
        // flag = false;
    } else {
        document.getElementById('password_error').style.display = 'none';
        document.getElementById('password').style.border = 'none';
    }
}

const login = document.querySelector('button');
login.addEventListener('click', loginValidation);