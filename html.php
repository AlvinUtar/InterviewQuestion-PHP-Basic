<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Verification</title>
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
        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-size: 1.2em;
        }
        input[type="text"] {
            padding: 10px;
            width: 80%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        #submit-btn {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        #submit-btn:hover {
            background-color: darkgreen;
        }
        #result {
            margin-top: 10px;
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
    <script src="verify_ajax.js"></script>
</head>
<body>
    <div class="container">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username">
        <button id="submit-btn">Submit</button>
        <div id="result"></div>
    </div>
</body>
</html>
