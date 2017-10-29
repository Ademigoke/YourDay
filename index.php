<?php include("urday.php"); ?>

<html>
    <head>
        <title>How was your day form</title>
        
        <style type="text/css">
            html, body {
                padding: 0;
                margin: 0;
                width: 100%;
                background-color: rgb(137, 0, 24);
                color: #fff;
                font-family: gadugi;
            }

            .mega {
                width: 50%;
                margin: 0 auto;
            }

            .mega > h1 {
                font-weight: 300;
                font-size: 50px;
            }

            input {
                outline: none;
            }

            input[type="text"] {
                width: 500px;
                height: 40px;
                border-radius: 15px;
                padding: 5px 20px;
                border: none;
                font-size: 20px;
            }

            textarea {
                border: none;
                outline: none;
                width: 500px; height: 100px;
                border-radius: 15px;
                padding: 5px 20px;
                font-size: 20px;
            }
            .radio-side {
                font-size: 20px;
            }

            label {
                font-weight: 500;
                display: block;
                margin: 5% auto;
                font-size: 25px;
            }

            #submit {
                width: 120px;
                height: 50px;
                border-radius: 15px;
                outline: none;
                border: none;
                box-shadow: none;
                cursor: pointer;
                background: #fff;
                font-size: 20px;
                margin: 5% 0;
                transition: all ease .3s;
            }

            #submit:hover {
                box-shadow: 0 0 5px 5px #fff;
            }

            #submit:active {
                background-color: black;
            }
        </style>
    </head>
    
    <body>
        <div class="mega">
        <h1>How was your day?</h1>
        <h1><?php if(isset($say)){echo $say;} ?></h1>
        <form method="POST" id="emotion-form" action="index.php">
            <div class="form-group">
                <label>What's your name?</label>
                <input type="text" id="name" name="name" placeholder="ex. Smahrt Dude"/>
            </div>
            
            <div class="form-group">
                <label>Gender</label>
                <div class="radio-side">
                    <input type="radio" name="m" value="1"> Male
                    <input type="radio" name="f" value="0"> Female
                </div>
            </div>
            
            <div class="form-group">
                <label>Did you wake up happy?</label>
                <div class="radio-side">
                    <input type="radio" name="yes" value="1"> Yes
                    <input type="radio" name="no" value="0"> No
                </div>
            </div>
            
            <div class="form-group">
                <label>How many classes did you have today?</label>
                <input type="text" name="clases" id="class_num" maxlength="1" value="" />
            </div>
            
            <div class="form-group">
                <label>What was the best thing that happen to you?</label>
                <textarea id="best_thing" name="best_thing" value=""></textarea>
            </div>
            
                <button onclick="saySomething();" id="submit" name="submit">Done</button>
        </form>
        </div>
    </body>
    
    <script>
        
        function saySomething() {
            var someone = document.getElementById("name").value;
            if (someone != "") {
                alert("Hi, "+ someone + " \n Thanks for telling us about your day :)");
            } else {
                alert("Don't be a jerk! \n At least type your name!");
            }
        }
    </script>
</html>