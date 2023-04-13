<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/register2.css">
    <title>login form</title>
</head>

<body>
    <section class="login-container">
        <div class="image-form">
            <img src="assets/img/popular1.jpg" alt="backgroundLoginForm" />
        </div>
        <div class="form-section-container">
            <div class="login-form">
                <header class="login-header">
                    <h1>Log In</h1>
                </header>
                <div class="form-section">
                    <form action="#">
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" id="Email" name="email" placeholder="you@example.com"
                                required />
                        </div>
                        <div class="form-group">
                            <div class="label-password">
                                <label for="Password">Password</label>
                                <a>Forgot password?</a>
                            </div>
                            <div class="input-hidden-password">
                                <i class="uil uil-eye eye"></i>
                                <input type="password" id="Password" name="password"
                                    placeholder="Enter 6 characters or more" required />
                            </div>
                        </div>
                        <div class="btn login">
                            <button>LOG IN</button>
                        </div>
                    </form>
                    <div class="line-between">
                        <span>OR</span>
                    </div>
                    <div class="btn register">
                        <button>SIGN UP</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const eye = document.querySelector('i.eye'),
            password_Input = document.querySelector('input[type="password"]');

        password_Input.addEventListener('input', (input) => {
            if (!input.target.value) {
                eye.style.display = 'none';
                return
            }
            eye.style.display = 'block';
        })

        eye.addEventListener('click', () => {
            if (password_Input.getAttribute('type') == 'password') {
                password_Input.setAttribute('type', 'text');
                eye.style.color = '#333';
                return
            }
            password_Input.setAttribute('type', 'password');
            eye.style.color = '#ccc';
        })
    </script>
</body>

</html>
