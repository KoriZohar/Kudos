<!DOCTYPE html>
<html>
    <head>
        <title>Volunteer Data</title>
        <style>
            body {
                font-family: 'Tahoma';
                color: white;
                margin: 0;
                padding: 20px;
                font-size: 20px;
            }

            section {
                background-color: #4BD2D2;
                border-radius: 5px;
                padding: 20px;
            }

            h1 {
                color: white;
                font-size: 25px;
            }

            .back-button {
                margin-top: 20px;
            }

            .back-button button {
                padding: 10px 20px;
                background-color: white;
                color: #4BD2D2;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                margin-bottom: 10px;
            }

            .back-button button:hover {
                background-color: #38b9b9;
                color: white;
            }
        </style>
    </head>
    <body>
        <section>
            <h1><b>Volunteer was added successfully!</b></h1>
            <br>
            Volunteer's data is:
            <br><br>
            <?php
                $fullName = $_GET['fullName'];
                $age = $_GET['age'];
                $phone = $_GET['phone'];
                $address = $_GET['about'];

                echo "Full Name: " . $fullName . "<br>";
                echo "Age: " . $age . "<br>";
                echo "Phone: " . $phone . "<br>";
                echo "About: " . $address . "<br>";
            ?>
            <br><br>
            <div class="back-button">
                <button onclick="window.location.href='createVol.html'">Back</button>
            </div>
        </section>
    </body>
</html>
