<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic - Login</title>
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('img/clinic.png')?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('img/clinic.png')?>">
    <style>
        * {
            margin: 0px;
            font-family: Rubik;
        }

        .LoginPageContainer {
            height: 100vh;
            overflow: auto;
        }

        .LoginPageInnerContainer {
            display: flex;
            min-height: 100%;
        }

        .LoginPageInnerContainer .ImageContianer {
            width: 25%;
            background-color: #76A5D6;
            min-height: 100%;
            padding: 5%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .LoginPageInnerContainer .ImageContianer .GroupImage {
            width: 100%;
            display: block;
        }

        .LoginPageInnerContainer .LoginFormContainer {
            flex-grow: 2;
            background-color: white;
            min-height: 100%;
            padding: 5%;
            background: url(https://i.imgur.com/BKyjjFa.png) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .LoginPageInnerContainer .LoginFormContainer .LogoContainer .logo {
            height: 60px;
            margin-bottom: 30px;
        }

        .LoginPageInnerContainer .LoginFormContainer .header {
            font-size: 32px;
            font-weight: 500;
        }

        .LoginPageInnerContainer .LoginFormContainer .subHeader {
            color: #9aa4ad;
            margin-top: 5px;
            margin-bottom: 40px;
        }

        .LoginPageInnerContainer .LoginFormContainer .inputContainer {
            color: #3f3f45;
            margin: 20px 0px;
        }

        .LoginPageInnerContainer .LoginFormContainer .inputContainer .label {
            display: flex;
            width: 100%;
            justify-content: flex-start;
            align-items: center;
            margin-right: 7px;
            margin-bottom: 10px;
        }

        .LoginPageInnerContainer .LoginFormContainer .inputContainer .label .labelIcon {
            width: 20px;
            margin-right: 10px;
            display: block;
        }

        .LoginPageInnerContainer .LoginFormContainer .inputContainer .input {
            display: block;
            width: calc(100% - 20px);
            font-size: 15px;
            padding: 10px;
            border: 1px solid #d6d7db;
            border-radius: 5px;
            margin-top: 5px;
            outline: 0px !important;
        }

        .LoginPageInnerContainer .LoginFormContainer .OptionsContainer {
            display: flex;
            justify-content: space-between;
        }

        .LoginFormContainer {
            display: flex;
            align-items: center;
        }

        .LoginFormInnerContainer {
            max-width: 500px;
        }

        .LoginPageInnerContainer .LoginFormContainer .checkbox {
            width: 15px;
            height: 15px;
            margin: 0px;
            display: block;
            border: 1px solid #d6d7db;
        }

        .LoginPageInnerContainer .LoginFormContainer .checkboxContainer {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .LoginPageInnerContainer .LoginFormContainer .checkboxContainer label {
            display: block;
            padding: 0px 5px;
            color: #9aa4ad;
        }

        .LoginPageInnerContainer .LoginFormContainer .ForgotPasswordLink {
            color: #e7483b;
            text-decoration: none;
        }

        .LoginFormContainer .LoginFormInnerContainer .LoginButton {
            margin-top: 30px;
            display: block;
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            font-weight: bold;
            color: white;
            background-color: #2e1f7a;
            border: 0px;
            outline: 0px;
            cursor: pointer;
        }

        .LoginFormContainer .LoginFormInnerContainer .LoginButton:active {
            background-color: #4520ff;
        }

        @media only screen and (max-width: 1200px) {
            .LoginPageInnerContainer .ImageContianer {
                width: 50%;
            }
        }

        @media only screen and (max-width: 800px) {
            .LoginPageInnerContainer .ImageContianer {
                display: none;
            }

            .LoginFormContainer {
                justify-content: center;
            }
        }

        .LoginPageContainer::-webkit-scrollbar {
            width: 5px;
        }

        .LoginPageContainer::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .LoginPageContainer::-webkit-scrollbar-thumb {
            background: #2e1f7a;
        }

        .LoginPageContainer::-webkit-scrollbar-thumb:hover {
            background: #4520ff;
        }
    </style>
</head>

<body>

    <div class="LoginPageContainer">
        <div class="LoginPageInnerContainer">
            <div class="ImageContianer">
                <img src="<?= asset('img/63673.jpg') ?>" class="GroupImage">
            </div>
            <div class="LoginFormContainer">
                <div class="LoginFormInnerContainer">
                    <div class="LogoContainer">
                        <img src="<?= asset('img/HRM.png') ?>" width="65%" class="logo"><img
                            src="<?= asset('img/ise.png') ?>" class="logo">
                    </div>
                    <header class="header">Log in</header>
                    <header class="subHeader">Welcome to <b>Clinic System</b> Please Login Before Access The
                        Applications</header>

                    <form action="<?= $_ENV['ROUTE_PREFIX'] ?>/login" method="post">
                        <div class="inputContainer">
                            <label class="label" for="emailAddress"><img src="https://i.imgur.com/Hn13wvm.png"
                                    class="labelIcon"><span>Username*</span></label>
                            <input type="text" class="input" id="empId" placeholder="Enter your Username"
                                name="user">
                        </div>
                        <div class="inputContainer">
                            <label class="label" for="emailAddress"><img src="https://i.imgur.com/g5SvdfG.png"
                                    class="labelIcon"><span>Password*</span></label>
                            <input type="password" class="input" id="PassId" placeholder="Enter your Password"
                                name="pass">
                        </div>
                        <div class="OptionsContainer">
                            <a href="#" class="ForgotPasswordLink">Forgot Password?</a>
                        </div>
                        <button class="LoginButton" type="submit" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
