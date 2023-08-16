<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>International Telephone Input</title>
    
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- CSS Libraries -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">


<!--Custom CSS -->
<link href="main.css" rel="stylesheet">

    <link rel="stylesheet" href="build/css/intlTelInput.css" />
    <link rel="stylesheet" href="build/css/demo.css" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        form {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            width: 80%; /* Adjusted form width for visibility on small screens */
            max-width: 400px; /* Added max-width to prevent excessive expansion */
        }
        form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>International Telephone Input</h1>
    <form>
        <input id="first-name" name="first-name" type="text" placeholder="First Name" required />
        <br>
        <input id="email" name="email" type="email" placeholder="Email" required />
        <br>
        <input id="phone" name="phone" type="tel" />
        <br>
        <input id="password" name="password" type="password" placeholder="Password" required />
        <br>
        <input id="confirm-password" name="confirm-password" type="password" placeholder="Confirm Password" required />
        <br>
        <button type="submit">Submit</button>
    </form>

    <script src="build/js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // Configuration options for the telephone input
            utilsScript: "build/js/utils.js"
        });
    </script>
</body>
</html>
