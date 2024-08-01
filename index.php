<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Montserrat';
        }

        .login-container {
            display: flex;
            flex-direction: row;
            height: 100vh;
            margin: 0;
        }

        .login-image {
            flex: 1;
            background-image: linear-gradient(90deg,
                    rgba(22, 102, 39, 0.45) 0%,
                    rgba(22, 102, 39, 0.45) 35%,
                    rgba(22, 102, 39, 0.45) 100%),
                url('./assets/img/login_background.jpg');
            background-size: cover;
            background-position: center;
        }

        .bg-image {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            /* Align content to the right */
            justify-content: center;
            /* Center vertically */
            height: 100%;
            width: 100%;
            padding: 0 20px;
            /* Optional padding to prevent content from touching the edge */
        }

        .text-center {
            text-align: center;
        }

        .login-form {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }

        .form-wrapper {
            width: 90%;
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            position: fixed;
            bottom: 0;
        }

        .btn {
            transition: width 0.3s ease-in-out;
            width: 100px;
            /* Initial width, adjust as needed */
        }

        .btn:hover {
            width: 100%;
            /* Width on hover, adjust as needed */
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-image d-none d-md-block">
            <div class="bg-image">
                <div class="text-center text-white">
                    <img src="./assets/img/logoremove.png" alt="Official Seal" class="seal-image" />
                    <h2>Record Management System</h2>
                    <p>
                        eRecord®: Record Management System for the Tourism Office of the
                        LGU of Manolo Fortich
                    </p>
                </div>
            </div>
        </div>
        <div class="login-form d-flex justify-content-center align-items-center">
            <div class="form-wrapper">
                <p class="text-center" style="color: green;">
                    Please sign in using your username and password.
                </p>
                <form>
                    <div class="form-group">
                        <label for="username" style="color: green;">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <label for="password" style="color: green;">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="********" />
                    </div>
                    <center>
                        <button type="submit" class="btn btn-success btn-block">
                            Login
                        </button>
                    </center>
                </form>
                <div class="text-center mt-3">
                    <span>
                        For document request assistance,
                    </span>
                    <a href="#" style="color: green;">click here</a>
                </div>
            </div>
            <footer>
                <p>
                    <span style="color: green;">eRecord® Website</span>
                    | © Copyright 2024 Tourism Office of Manolo Fortich Bukidnon
                </p>
            </footer>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>