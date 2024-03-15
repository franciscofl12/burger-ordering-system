<!DOCTYPE html>
<html>
<head>
    <title>Order Burger</title>
    <style>
        /* You can put the provided CSS here */
        .burger-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: linear-gradient(to bottom right, #F9F5F3, #F9F5F3);
            padding: 0 20px;
        }

        .burger-card {
            width: 100%;
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .burger-image {
            height: 236px;
            background-image: url(https://www.carniceriademadrid.es/wp-content/uploads/2022/09/smash-burger-que-es.jpg);
            background-size: cover;
            background-position: center;
        }

        .burger-details {
            padding: 20px;
        }

        .burger-title {
            font-weight: bold;
            color: #3C3C43;
            font-size: 22px;
            line-height: 28px;
            margin-bottom: 10px;
        }

        .burger-price {
            color: #3C3C43;
            font-size: 17px;
            margin-right: 5px;
            text-decoration: line-through;
        }

        .burger-discounted-price {
            color: #0FB478;
            font-size: 17px;
            font-weight: bold;
        }

        .burger-description {
            color: #7C7C80;
            font-size: 15px;
            margin-top: 20px;
        }

        .order-button {
            display: block;
            margin-top: 20px;
            padding: 15px 20px;
            font-weight: bold;
            text-align: center;
            text-transform: capitalize;
            background-color: #FFC933;
            border: none;
            border-radius: 14px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .order-button:hover {
            background-color: #FFC933DD;
        }

        /* Styles for inputs */
        input[type='text'], input[type='submit'] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="burger-container">
        <div class="burger-card">
            <div class="burger-image"></div>
            <div class="burger-details">
                <p class="burger-title">Best Burger in Town</p>
                <div class="flex flex-row">
                    <p class="burger-discounted-price">$10</p>
                </div>
                <p class="burger-description">Our delicious burger is made with premium beef, fresh vegetables, and our secret sauce. It's a mouthwatering experience you won't forget!</p>
                <form method="POST" action="{{ route('order') }}">
                    @csrf
                    <input type="text" name="customer_name" placeholder="Your Name" required>
                    <input type="text" name="telephone" placeholder="Your Phone" required>
                    <input type="hidden" name="burger_type" value="simple">
                    <input type="text" name="additional_notes" placeholder="Additional Notes">
                    <button type="submit" class="order-button">Order Now</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
