<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank You - Techies Wardrobe</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e0f0ff, #ffffff);
      color: #003366;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }

    .container {
      text-align: center;
      background-color: #ffffffcc;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 51, 102, 0.2);
      animation: fadeIn 2s ease-in-out;
    }

    h1 {
      color: #004080;
      font-size: 2.5rem;
    }

    p {
      font-size: 1.2rem;
      margin: 20px 0;
    }

    .wave {
      animation: waveText 2s infinite ease-in-out;
      display: inline-block;
    }

    @keyframes waveText {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .footer {
      margin-top: 30px;
      font-size: 1rem;
      color: #555;
    }

    .home-button {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #004080;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }

    .home-button:hover {
      background-color: #002f5c;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="wave">Thank You for Shopping!</h1>
    <p>Your order has been received and will be delivered within 2–3 working days.</p>
    <p>We truly appreciate your trust in <strong>Techies Wardrobe</strong>.</p>
    <p>Stay stylish, stay techie! 💙</p>
    <a href="home.php" class="home-button">Go to Home Page</a>
    <div class="footer">
      &mdash; The Techies Wardrobe Team
    </div>
  </div>
</body>
</html>