<?php
    $navbar = '
    <div class="bar">
        <div class="main-button">
            <img src="src/Logo.svg" class="main-button">
        </div>
        <div class="logo-text">
            <p id="hermes">HERMES</p>
            <p id="sub_text">by IT KMITL</p>
        </div>
        <div class="btn-container">
            <button class="sign-in">Sign In</button>
            <button class="sign-in">Sign Up</button>
        </div>
    </div>
    ';
    $navbar_style = '
    <style scoped>
        @import url("https://fonts.googleapis.com/css?family=Ubuntu");

        .bar {
            display: flex;
            background-color:#000000;	
            height: 44px;
            width: calc(100% - 6px); /* Delete border width */
            position: fixed;
            border: 3px solid black;
        }

        .main-button {
            display: inline-block;
            width: 40px;
            height: 40px;
        }
        
        .logo-text {
            display: block;
            width: 30%;
            margin: auto 0;
        }
        
        .logo-text > p {
            display: inline;
        }

        .btn-container {
            display: relative;
            width: 100%;
            text-align: right;
        }

        .sign-in {
            color: black;
            display: inline-block;
            position: relative;
            background-color:#ffCf40;
            height: 40px;
            width: 80px;
            border: 3px solid black;
            right:1%;
            text-align: center;
            font-family: "Roboto", sans-serif;
            font-weight: bold;
            font-size: 16px;
            margin-top: 2px;
            border-radius: 10px;
            cursor: pointer; 
        }

        #sub-text {
            font-family: "Roboto", sans-serif;
            margin-bottom: 10px;
        }
        
        #hermes {
            font-family: "Roboto Slab", serif;
            color:#ffCf40;
            font-weight: bold;
            margin-left: 10px;
            margin-bottom: 10px;
        }        

    </style>
    ';
?>