<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Add this line to the <head> section of your HTML file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">



    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contact-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
        }

        .contact-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group textarea {
            height: 100px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }





        .form-group {
            margin-bottom: 20px;
        }

        .password-input {
            position: relative;
        }

        /* .password-input input[type="password"] {
            padding-right: 80px;
        } */

        .password-input .toggle-password {
            position: absolute;
            top: 50%;
            right: 0px;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;


        }

        .password-input .toggle-password img {
            width: 20px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="contact-form">
        <h2>Contact Us</h2>
        <!-- Your HTML Form -->
        <form action="{{ route('newuser.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name*:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <label for="companyName">Company Name:</label>
                <input type="text" id="companyName" name="companyName" placeholder="Company Name" required>
            </div>
            <div class="form-group">
                <label for="noofuser">Number of Users*:</label>
                <input type="number" id="noofuser" name="noofuser" placeholder="Number of Users" required>
            </div>
            <div class="form-group">
                <label for="email">Email*:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password (you want):</label>
                <div class="password-input">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <span class="toggle-password" id="togglePassword">
                        <i class="bi bi-eye"></i>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message*:</label>
                <textarea id="message" name="message" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit">Send</button>
        </form>

    </div>
</body>

<script>
    const passwordInput = document.getElementById('password');
    const toggleButton = document.getElementById('togglePassword');

    toggleButton.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
    });
</script>

</html>
