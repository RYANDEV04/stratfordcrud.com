<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Design</title>
    <style>
        /* General Reset */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }

        /* Wrapper Styling */
        .wrapper {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Main Container Styling */
        .main-container {
            background: #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        /* Add Unique Button */
        .unique-button {
            display: inline-block;
            background: #6a11cb;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(106, 17, 203, 0.3);
            transition: all 0.3s ease-in-out;
        }

        .unique-button:hover {
            transform: scale(1.1);
            background: #2575fc;
            box-shadow: 0 6px 20px rgba(37, 117, 252, 0.3);
        }

        /* Animated Floating Effect */
        .main-container {
            animation: float 3s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
    
</body>
</html>