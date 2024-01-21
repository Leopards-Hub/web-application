<style>
        /* Reset default styles */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

  

        main {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .container__order {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 20px;
        }

        .information__order,
        .product__order {
            flex: 1;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .information__order {
            margin-right: 20px;
        }

        .location {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .payment {
            margin-top: 20px;
        }

        .btn__order__box {
            margin-top: 20px;
            text-align: center;
        }

        
        h2,
        h3 {
            margin-top: 0;
        }

        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            background-color: darkred;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .total__price__order {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .product__order1 {
            margin-bottom: 10px;
        }

        .payment__qr {
            text-align: center;
            margin-bottom: 10px;
        }

        canvas {
            display: block;
            margin: 0 auto;
            max-width: 100%;
        }

        /* Additional Styles */
        input[type="text"]:focus,
        input[type="email"]:focus,
        select:focus {
            outline: none;
            border-color: darkred;
            box-shadow: 0 0 5px darkred;
        }

        .btn__order__box button:hover {
            background-color: #8B0000;
            box-shadow: 0 0 5px #8B0000;
        }

        /* Updated QR Code styles */
        .payment__qr {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .payment__qr h3 {
            margin-bottom: 10px;
        }

        #qrcode-payment {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            border: 2px solid darkred;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
        }
    </style>