<?php
include 'db.php';
 
$message = "";
$messageType = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $fname     = trim($_POST['fname'] ?? '');
    $lname     = trim($_POST['lname'] ?? '');
    $uname     = trim($_POST['uname'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $phone     = trim($_POST['phone'] ?? '');
    $birthdate = $_POST['birthdate'] ?? '';
    $gender    = $_POST['gender'] ?? '';
    $address   = trim($_POST['address'] ?? '');
    $password  = $_POST['password'] ?? '';
 
    if (
        empty($fname) ||
        empty($lname) ||
        empty($uname) ||
        empty($email) ||
        empty($phone) ||
        empty($birthdate) ||
        empty($gender) ||
        empty($address) ||
        empty($password)
    ) {
        $message = "Please complete all required fields.";
        $messageType = "error";
    }
 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email address.";
        $messageType = "error";
    }
 
 
    elseif (!preg_match('/^09[0-9]{9}$/', $phone)) {
        $message = "Contact number must be 11 digits and start with 09.";
        $messageType = "error";
    }
 
    elseif (strlen($password) < 6) {
        $message = "Password must be at least 6 characters.";
        $messageType = "error";
    }
 
    else {
 
 
        $check = $conn->prepare(
            "SELECT id FROM user WHERE uname = ? OR email = ?"
        );
 
        $check->bind_param("ss", $uname, $email);
        $check->execute();
        $check->store_result();
 
        if ($check->num_rows > 0) {
 
            $message = "Username or email is already registered.";
            $messageType = "error";
 
        } else {
 
     
            $hashedPassword = password_hash(
                $password,
                PASSWORD_DEFAULT
            );
 
           
            $stmt = $conn->prepare(
                "INSERT INTO user
                (fname, lname, uname, email, phone, birthdate, gender, address, password)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
            );
 
            $stmt->bind_param(
                "sssssssss",
                $fname,
                $lname,
                $uname,
                $email,
                $phone,
                $birthdate,
                $gender,
                $address,
                $hashedPassword
            );
 
            if ($stmt->execute()) {
 
                $message = "Registration completed successfully!";
                $messageType = "success";
 
               
                $fname = "";
                $lname = "";
                $uname = "";
                $email = "";
                $phone = "";
                $birthdate = "";
                $gender = "";
                $address = "";
 
            } else {
 
                $message = "Registration failed: " . $stmt->error;
                $messageType = "error";
            }
 
            $stmt->close();
        }
 
        $check->close();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
 
    <meta charset="UTF-8">
 
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet"
>
 
    <title>User Registration</title>
 
   
 
</head>
 
<body>
 
<div class="container">
 
    <div class="header">
 
        <img
            src="logo.png.png"
            height="200"
            width="200"
            alt="Logo"
        >
 
        <h1>Registration</h1>
 
        <p>Register here!</p>
 
    </div>
 
 
    <?php if (!empty($message)): ?>
 
        <div class="alert <?php echo $messageType; ?>">
 
            <?php echo htmlspecialchars($message); ?>
 
        </div>
 
    <?php endif; ?>
 
 
    <form
        id="registrationForm"
        method="POST"
        action=""
    >
 
     
 
        <div class="form-row">
 
            <div class="input-group">
 
                <label>First Name</label>
 
                <input
                    type="text"
                    id="fname"
                    name="fname"
                    placeholder="Enter first name"
                    value="<?php echo htmlspecialchars($fname ?? ''); ?>"
                    required
                >
 
            </div>
 
 
            <div class="input-group">
 
                <label>Last Name</label>
 
                <input
                    type="text"
                    id="lname"
                    name="lname"
                    placeholder="Enter last name"
                    value="<?php echo htmlspecialchars($lname ?? ''); ?>"
                    required
                >
 
            </div>
 
        </div>
 
 
       
 
        <div class="input-group">
 
            <label>User Name</label>
 
            <input
                type="text"
                id="uname"
                name="uname"
                placeholder="Enter user name"
                value="<?php echo htmlspecialchars($uname ?? ''); ?>"
                required
            >
 
        </div>
 
 
 
        <div class="input-group">
 
            <label>Email Address</label>
 
            <input
                type="email"
                id="email"
                name="email"
                placeholder="example@email.com"
                value="<?php echo htmlspecialchars($email ?? ''); ?>"
                required
            >
 
        </div>
 
 
 
        <div class="input-group">
 
            <label>Contact Number</label>
 
            <input
                type="text"
                id="phone"
                name="phone"
                placeholder="09XXXXXXXXX"
                maxlength="11"
                value="<?php echo htmlspecialchars($phone ?? ''); ?>"
                required
            >
 
        </div>
 
 
   
 
        <div class="input-group">
 
            <label>Birthdate</label>
 
            <input
                type="date"
                id="birthdate"
                name="birthdate"
                value="<?php echo htmlspecialchars($birthdate ?? ''); ?>"
                required
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
                        <?php echo (($gender ?? '') == 'Male') ? 'checked' : ''; ?>
                        required
                    >
 
                    Male
 
                </label>
 
 
                <label class="radio-option">
 
                    <input
                        type="radio"
                        name="gender"
                        value="Female"
                        <?php echo (($gender ?? '') == 'Female') ? 'checked' : ''; ?>
                    >
 
                    Female
 
                </label>
 
 
                <label class="radio-option">
 
                    <input
                        type="radio"
                        name="gender"
                        value="Other"
                        <?php echo (($gender ?? '') == 'Other') ? 'checked' : ''; ?>
                    >
 
                    Other
 
                </label>
 
            </div>
 
        </div>
 
 
     
 
        <div class="input-group">
 
            <label>Address</label>
 
            <textarea
                id="address"
                name="address"
                placeholder="Enter complete address"
                required
            ><?php echo htmlspecialchars($address ?? ''); ?></textarea>
 
        </div>
 
 
     
 
        <div class="input-group">
 
            <label>Password</label>
 
            <div class="password-box">
 
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Create password"
                    required
                >
 
                <button
                    type="button"
                    class="show-password"
                    onclick="togglePassword()"
                >
                    Show
                </button>
 
            </div>
 
            <div
                id="strength"
                class="strength"
            ></div>
 
        </div>
 
 
       
 
        <div class="buttons">
 
            <button
                type="submit"
                class="register-btn"
            >
                Register
            </button>
 
        </div>
 
    </form>
 
</div>
 
 
<script>
 
    const password =
        document.getElementById("password");
 
    const strength =
        document.getElementById("strength");
 
 
    password.addEventListener(
        "input",
        function () {
 
            const value = password.value;
 
            if (value.length === 0) {
 
                strength.textContent = "";
                strength.className = "strength";
 
            }
 
            else if (value.length < 6) {
 
                strength.textContent =
                    "Weak Password";
 
                strength.className =
                    "strength weak";
 
            }
 
            else if (
                value.length >= 8 &&
                /[A-Z]/.test(value) &&
                /[0-9]/.test(value)
            ) {
 
                strength.textContent =
                    "Strong Password";
 
                strength.className =
                    "strength strong";
 
            }
 
            else {
 
                strength.textContent =
                    "Medium Password";
 
                strength.className =
                    "strength medium";
            }
 
        }
    );
 
 
    function togglePassword() {
 
        const input =
            document.getElementById("password");
 
        const button =
            document.querySelector(".show-password");
 
 
        if (input.type === "password") {
 
            input.type = "text";
            button.textContent = "Hide";
 
        }
 
        else {
 
            input.type = "password";
            button.textContent = "Show";
 
        }
 
    }
 
</script>
 
</body>
 
</html>