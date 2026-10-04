<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sun Son Solar</title>
</head>

<body>
    <nav>
        <a href="#" onclick="ShowPage('Home')">Home</a>
        <a href="#" onclick="ShowPage('About')">About Us</a>
        <a href="#" onclick="ShowPage('Login')">Login</a>
        <a href="#" onclick="ShowPage('Registration')">Registration</a>
    </nav>

    <hr> 

    <div id="Home">
        <h1>Welcome to Sun Son Solar</h1>

        <h2>Sun Son Solar</h2>

        <p>
                Building a better community through leadership,
                teamwork, innovation, and dedication.
        </p>

    <h2>Our Services</h2>
    <ul>
        <li>Maintenance</li>
        <li>Repair</li>
        <li>Installation</li>
        <li>Residential Solar</li>
        <li>Commercial Solar</li>

    </ul>

    <p>If you are interested in any of our services,
         you can register an account to access the available services.</p>

        <br>

        <button onclick="ShowPage('About')">Learn More</button>

    </div>


    <div id="About" style="display: none;">

        <h1>About Us</h1>

        <p>
            Our organization was established with the goal of creating
            a strong and supportive community. We believe that teamwork,
            leadership, and dedication are important in achieving our
            goals. Through our programs and activities, we continue to
            provide opportunities for our members to learn, grow, and
            contribute to the community.
        </p>

    <h2>Our Mission</h2>
    <p>To Illuminate A Sustainable future By merging clean energy with intelligent design.</p>

    <h2>Our Vision</h2>
    <p>----------------</p>

    <h2>Founder / CEO</h2>
    <table>
    
    <tr>
        <td>
            <p>Name: Katherine "Kat" Singaraw</p>
            <p>Founded: 2016</p>
            <p>Headquarters: Pasig, Philippines</p>
            <p>Industry: Renewable Energy & Smart Infrastructure</p>
        </td>
    </tr>
    </table>
</div>

<div id="Login" style="display: none;">
    <h1>Login</h1>

    <p>Enter your account information.</p>

    <form onsubmit="loginUser(); return false;">
<p>
    <label for="loginUsername">Username:</label>

<br>

<input type="text" id="loginUsername" placeholder="Enter username" required>
</p>

<p>
    <label for="loginPassword">Password:</label>
    <br>

    <input type="password" id="loginPassword" placeholder="Enter Password">
</p>

<button type="submit">Login</button>

    </form>
    <div id="loginMessage"></div>

</div>

    <div id="Registration" style="display: none;">

    <div class="header">
        <img src="logo.png.png" height="200" width="200" alt="Sun Son Solar Logo">

        <h1>Registration</h1>
        <p>Register here!</p>

    <div id="alertBox"></div>

    <form id="registrationForm">

        <div class="form-row">

            <div class="input-group">
                <label for="fname">First Name</label>
                <input
                    type="text"
                    id="fname"
                    placeholder="Enter first name">
            </div>

            <div class="input-group">
                <label for="lname">Last Name</label>
                <input
                    type="text"
                    id="lname"
                    placeholder="Enter last name">
            </div>

        </div>

         <div class="input-group">

            <label for="uname">User Name</label>

            <input
                type="text"
                id="uname"
                placeholder="Enter user name"
            >

        </div>

        
        <div class="input-group">

            <label for="email">Email Address</label>

            <input
                type="email"
                id="email"
                placeholder="example@email.com"
            >

        </div>

      
        <div class="input-group">

            <label for="phone">Contact Number</label>

            <input
                type="text"
                id="phone"
                placeholder="09XXXXXXXXX"
                maxlength="11"
            >

        </div>

      
        <div class="input-group">

            <label for="birthdate">Birthdate</label>

            <input
                type="date"
                id="birthdate"
            >

        </div>

        
        <div class="input-group">

            <label>Gender</label>

            <div class="radio-group">

                <label class="radio-option">
                    <input
                        type="radio"
                        name="gender"
                        value="Male"
                    >
                    Male
                </label>

                <label class="radio-option">
                    <input
                        type="radio"
                        name="gender"
                        value="Female"
                    >
                    Female
                </label>

                <label class="radio-option">
                    <input
                        type="radio"
                        name="gender"
                        value="Other"
                    >
                    Other
                </label>

            </div>

        </div>

    
        <div class="input-group">

            <label for="address">Address</label>

            <textarea
                id="address"
                placeholder="Enter complete address"
            ></textarea>

        </div>

        
        <div class="input-group">

            <label for="password">Password</label>

            <div class="password-box">

                <input
                    type="password"
                    id="password"
                    placeholder="Create password"
                >

                <button
                    type="button"
                    class="show-password"
                    onclick="togglePassword('password', this)"
                >
                    Show
                </button>

            </div>

            <div id="strength" class="strength"></div>

        <p>
            <label for="ConfirmPassword"> Confirm Password:</label>

        <br>

        <input type="password" id="ConfirmPassword" placeholder="Confirm Password">
        </p>

        </div>

        <div class="buttons">

            <button
                type="submit"
                class="register-btn"
            >
                Register
            </button>

            <button type="reset">Reset</button>

        </div>

    </form>

    <div id="summary" class="summary" style="display: none;">

        <h2>Registration Successful!</h2>

        <p>
            <strong>Name:</strong>
            <span id="summaryName"></span>
        </p>

        <p>
            <strong>Username:</strong>
            <span id="summaryUsername"></span>
        </p>

        <p>
            <strong>Email:</strong>
            <span id="summaryEmail"></span>
        </p>

        <p>
            <strong>Contact:</strong>
            <span id="summaryPhone"></span>
        </p>

        <p>
            <strong>Birthdate:</strong>
            <span id="summaryBirthdate"></span>
        </p>

        <p>
            <strong>Gender:</strong>
            <span id="summaryGender"></span>
        </p>

        <p>
            <strong>Address:</strong>
            <span id="summaryAddress"></span>
        </p>

    </div>

</div>

<div id="Founder" style="display: none;">
<h1>Founder / CEO</h1>
<hr>

<h2>Welcome, Katherine Singaraw</h2>

<p>Role: Founder / CEO</p>
<p>You are logged in as the Founder of Sun Son Solar.</p>

<table border="1">
<tr>
    <td>Name</td>
    <td>Katherin "Kat" Singaraw</td>
</tr>

<tr>
    <td>Position</td>
    <td>Founder / CEO</td>
</tr>

<tr>
    <td>Founded</td>
    <td>2016</td>
</tr>

<tr>
    <td>Headquarters</td>
    <td>Pasig, Philippines</td>
</tr>

<tr>
    <td>Industry</td>
    <td>Renewable Energy & Smart Infrastructure</td>
</tr>
</table>
<button onclick="logoutUser()">Logout</button>
</div>

<br>

<div id="ITAdmin" style="display: none;">
    <h1>IT Department Admin</h1>

    <p>Welcome, Sol!</p>
    <p>Role: IT Department Admin</p>
    <p>Department: IT</p>

    <button onclick="logoutUser()">Logout</button>
</div>

<script>

function ShowPage(page){
    document.getElementById('Home').style.display="none";
    document.getElementById('About').style.display="none";
    document.getElementById('Login').style.display="none";
    document.getElementById('Registration').style.display="none";
    document.getElementById('Founder').style.display="none";
    document.getElementById('ITAdmin').style.display="none";

     document.getElementById(page).style.display="block";
}
    const password = document.getElementById("password");
    const strength = document.getElementById("strength");


    password.addEventListener("input", function () {

        const value = password.value;

        if (value.length === 0) {

            strength.textContent = "";

        } 
        
        else if (value.length < 6) {

            strength.textContent = "Weak Password";
            strength.className = "strength weak";

        } 
        
        else if (
            value.length >= 6 &&
            !/[A-Z]/.test(value)
        ) {

            strength.textContent = "Medium Password";
            strength.className = "strength medium";

        } else if (
            value.length >= 8 &&
            /[A-Z]/.test(value) &&
            /[0-9]/.test(value)
        ) {

            strength.textContent = "Strong Password";
            strength.className = "strength strong";

        } else {

            strength.textContent = "Medium Password";
            strength.className = "strength medium";
        }

    });

    function togglePassword(id, button) {

        const input = document.getElementById(id);

        if (input.type === "password") {

            input.type = "text";
            button.textContent = "Hide";

        } else {

            input.type = "password";
            button.textContent = "Show";

        }

    }


    function showAlert(message, type) {
        const alertBox = document.getElementById("alertBox");

        alertBox.textContent = message;

        alertBox.className = "alert " + type;

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

    }

    let users = JSON.parse(localStorage.getItem("users")) || [];

    const founderAccount = {
        userID: "SS-00016",
        role: "Founder / CEO",
        firstName: "katherine",
        middleName: "olap",
        lastName: "Singaraw",
        birthdate: "July 01, 1990",
        gender: "Female",
        email: "katherine.singaraw@sunsonsolar@gmail.com",
        phone: "09291230983",
        address: "Pasig, Philippines",
        username: "kittykat16",
        password: "k@tSunShine16",
        department: "Management"

    };

    const adminAccount = {
        userID: "SS-00019",
        role: "IT Deparment Admin",
        firstName: "Sol",
        middleName: "Sun",
        lastName: "Solis",
        birthdate: "january 08, 1967",
        gender: "male",
        email: "sol.solis@sunsonsolar@gmail.com",
        phone: "09291230908",
        address: "",
        username: "admin",
        password: "admin123",
        department: "IT"

    };

    const founderIndex = users.findIndex(user => user.username === "kittykat16");

      if (founderIndex === -1){
            users.push(founderAccount);
        } else {
            users [founderIndex] = founderAccount;
        }

        localStorage.setItem("users", JSON.stringify(users));

    const solIndex = users.findIndex(user => user.username === "admin");

    if(solIndex === -1){
        users.push(adminAccount);
    } else {
        users[solIndex] = adminAccount;
    }
    localStorage.setItem("users", JSON.stringify(users));
    
    const founderExists = users.some(user => user.username === "kittykat16");

const form = document.getElementById("registrationForm");
    form.addEventListener("submit", function(event) {
        event.preventDefault();


        const firstName =
            document.getElementById("fname").value.trim();

        const lastName =
            document.getElementById("lname").value.trim();

        const username = 
            document.getElementById("uname").value.trim();

        const email =
            document.getElementById("email").value.trim();

        const phone =
            document.getElementById("phone").value.trim();

        const birthdate =
            document.getElementById("birthdate").value;

        const address =
            document.getElementById("address").value.trim();

        const passwordValue =
            document.getElementById("password").value.trim();

        const confirmPassword =
            document.getElementById("ConfirmPassword").value;

        const gender =
            document.querySelector(
                'input[name="gender"]:checked'
            );


        if (
            !firstName ||
            !lastName ||
            !username ||
            !email ||
            !phone ||
            !birthdate ||
            !address ||
            !passwordValue ||
            !confirmPassword 
        ) 
        {

            showAlert(
                "Please complete all required fields.",
                "error"
            );

            return;
        }


        const emailPattern =
            /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {

            showAlert(
                "Please enter a valid email address.",
                "error"
            );

            return;
        }



        const phonePattern =
            /^09[0-9]{9}$/;

        if (!phonePattern.test(phone)) {

            showAlert(
                "Contact number must be 11 digits and start with 09.",
                "error"
            );

            return;
        }


        if (!gender) {

            showAlert(
                "Please select your gender.",
                "error"
            );

            return;
        }

        if (passwordValue.length < 6) {

            showAlert(
                "Password must be at least 6 characters.",
                "error"
            );

            return;
        }

        if (passwordValue !== confirmPassword) {

            showAlert(
                "Passwords do not match.",
                "error"
            );

            return;
        }


        users =
            JSON.parse(localStorage.getItem("users")) || [];

        const existingEmail = users.find(user => user.email === email);

        if (existingEmail) {
            showAlert("This email is already registered", "error");
            return;
        }


        const existingUser =
            users.find(
                user => user.username === username
            );


        if (existingUser) {

            showAlert(
                "This Username is already taken.",
                "error");
                return;
        
        }


        const newUser = {

            userID: "SS-" + Math.floor( 1000 + Math.random() * 90000 ),
            role: "Customer",
            firstName: firstName,
            lastName: lastName,
            username: username,
            email: email,
            phone: phone,
            birthdate: birthdate,
            gender: gender.value,
            address: address,
            password: passwordValue,

        };


        users.push(newUser);

        localStorage.setItem(
            "users",
            JSON.stringify(users)
        );

        showAlert(
            "Registration completed successfully!",
            "success"
        );



        document.getElementById("summaryName").textContent =
            firstName + " " + lastName;

        document.getElementById("summaryUsername").textContent =
        username;

        document.getElementById("summaryEmail").textContent =
            email;

        document.getElementById("summaryPhone").textContent =
            phone;

        document.getElementById("summaryBirthdate").textContent =
            birthdate;

        document.getElementById("summaryGender").textContent =
            gender.value;

        document.getElementById("summaryAddress").textContent =
            address;


        document.getElementById("summary").style.display =
            "block";

        form.reset();

        strength.textContent = "";

    });

    form.addEventListener("reset", function() {

    setTimeout(function() {

    const alertBox = document.getElementById("alertBox");

    alertBox.className = "alert";
    alertBox.textContent = "";
    

    document.getElementById("summary").style.display =
                "none";

            strength.textContent = "";

        }, 100);

    });

function loginUser(){
    const username = document.getElementById("loginUsername").value;
    const password = document.getElementById("loginPassword").value;

    if (!username || !password){
        alert(
            "Login Failed!" + "Please enter your username and password."
        );

        return;
    }

    const users = JSON.parse(localStorage.getItem('users')) || [];

    const user = users.find(item => item.username === username && 
        item.password === password
    );

    if (!user) {
        alert (
            "Login failed" + "Incorrect username or password."
        );
        return;
    }

    if (user.role === "Founder / CEO"){

       alert(
        "Login Successful!\n\n" +
        'Welcome, katherine "kat" Singaraw!\n' +
        "Role: Founder / CEO"
       );

       ShowPage("Founder");
        return;
    }

    if (user.role === "IT Department Admin"){
        ShowPage("ITAdmin");
        return;
    }

    alert(
        "Login successful!\n\n" +
        "Welcome, " + user.firstName + " " + user.lastName + "!\n " +
        "Role: " + user.role
    );
}

function logoutUser(){
    document.getElementById("loginUsername").value = "";
    document.getElementById("loginPassword").value = "";
    document.getElementById("loginMessage").textContent = "";
    ShowPage("Home");

}






</script>

   

</body>
</html>
