<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
        body {
    background: linear-gradient(to bottom right, #1e1e1e, #0d0d0d);
    color: #e0e0e0;
    font-family: 'Roboto', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    }

    /* Контейнер для форми */
    .container {
    background: linear-gradient(145deg, #2a2a2a, #1f1f1f);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.6), inset 0 0 10px rgba(0, 0, 0, 0.3), 0 0 300px 2px rgba(0, 123, 255, 0.6);
    overflow-y: auto;
    overflow-x: hidden;
    margin: 0 auto;
    }

    .menu {
    display: flex;
    justify-content: center;
    gap: 20px;
    background-color: #1a1a1a;
    padding: 15px 0;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 123, 255, 0.3);
    }

    .menu a {
        color: #00bfff;
        margin-left: 15px;
        margin-right: 15px;
        text-decoration: none;
        font-size: 1.2rem;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

        .menu a:hover {
            background-color: #00bfff;
            color: #1a1a1a;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

    /* Стилізація смуги прокрутки */
    .form-container::-webkit-scrollbar {
        width: 12px;
        background-color: #2a2a2a;
    }

    .form-container::-webkit-scrollbar-thumb {
    background: linear-gradient(145deg, #007BFF, #0056b3);
    border-radius: 6px;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.3), 0 0 5px rgba(0, 123, 255, 0.6);
    }

    .form-container::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(145deg, #0056b3, #003d7a);
    }

    .form-container::-webkit-scrollbar-track {
        background: #1f1f1f;
        border-radius: 10px;
    }

    /* Стилі для полів вводу */
    form {
        width: 100%;
        padding: 10px;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        color: #00bfff;
        text-shadow: 0 0 5px rgba(0, 191, 255, 0.6);
    }

    input[type="text"], input[type="password"], textarea {
    width: 90%;
    padding: 12px;
    margin-bottom: 20px;
    margin-top: 10px;
    background: linear-gradient(145deg, #3a3a3a, #2e2e2e);
    border: 2px solid #444;
    border-radius: 10px;
    color: #fff;
    font-size: 16px;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.5);
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="text"]:focus, input[type="password"]:focus, textarea:focus {
        outline: none;
        border-color: #00bfff;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.8), inset 0 0 15px rgba(0, 123, 255, 0.4);
    }

    /* Стилізація повідомлень про помилки */
    .message {
        color: #ff5555;
        font-size: 14px;
        text-shadow: 0 0 5px rgba(255, 85, 85, 0.8);
    }

    /* Стилізація кнопок */
    button, input[type="submit"], input[type="reset"] {
        color: #00bfff;
        text-decoration: none;
        font-size: 1.2rem;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        background-color: #1a1a1a;
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 123, 255, 0.3);
    }

        button:hover, input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #00bfff;
            color: #1a1a1a;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        button:focus, input[type="submit"]:focus, input[type="reset"]:focus {
            outline: none;
            box-shadow: 0 0 20px rgba(0, 123, 255, 1), 0 0 40px rgba(0, 123, 255, 0.8);
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
            padding: 10px; /* Larger padding */
            border: 2px solid lightblue;
            box-shadow: 0 0 75px rgba(0, 255, 255, 0.5);
            border-radius: 20px; /* More rounded corners */
            
            max-width: auto; /* Max width */
            width: auto; /* Full width */
            text-align: center; /* Center text */
    
    overflow-y: auto;
    overflow-x: hidden;
    margin: 0 auto;
    }

    table {
        margin: 40px;
        background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent white background */
        border-radius: 25px; /* Rounded corners */
        overflow: hidden; /* Hide overflow */
        box-shadow: 0 0 60px darkblue; /* White shadow */
    }

    thead {
        background-color: darkslateblue; /* Semi-transparent white background for header */
    }

    th, td {
        padding: 12px;
        text-align: left;
        color: #fff; /* White text */
    }

    th {
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent white background for even rows */
    }

    tr:hover {
        background-color: rgba(255, 255, 255, 0.2); /* Lighter hover color */
    }

    /* General styling for DropDownList (select) elements */
    .dropdown {
        width: 44%;
        padding: 12px;
        margin-bottom: 20px;
        margin: 10px;
        margin-left: 0px;
        margin-right: 21px;
        background: linear-gradient(145deg, #3a3a3a, #2e2e2e);
        border: 2px solid #444;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.5);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        -webkit-appearance: none; /* Remove default styling for better control */
        -moz-appearance: none;
        appearance: none;
    }

        .dropdown:focus {
            outline: none;
            border-color: #00bfff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.8), inset 0 0 15px rgba(0, 123, 255, 0.4);
        }

        /* Add custom arrow icon to dropdown */
        .dropdown::after {
            content: "▼";
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #fff;
            pointer-events: none;
        }

    /* Ensure the dropdown has sufficient padding for the arrow */
    .dropdown-wrapper {
        position: relative;
        width: 90%;
    }

    .dropdown {
        padding-right: 30px; /* Add space for the custom arrow */
    }

        /* Styling for the options (list items) */
        .dropdown option {
            background-color: #2a2a2a;
            color: #fff;
            font-size: 16px;
            padding: 15px;
            font-size: 16px;
            height: 70px;
        }

            /* Styling for the selected option */
            .dropdown option:checked {
                color: #fff;
            }

</style>
</head>
<body>
     <!-- <?php
        $conn = new PDO("mysql:host=127.0.0.1;dbname=ChatDB", "root",""); 
        // $createDbSql = "CREATE DATABASE ChatDB";
        // $conn->exec($createDbSql);
        // $createMessages = "CREATE TABLE Messages (
        //     id INT AUTO_INCREMENT PRIMARY KEY,
        //     user_name VARCHAR(50) NOT NULL,
        //     message TEXT NOT NULL,
        //     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        // );";
        // $conn->exec($createMessages);
        //echo "ok";

    ?> -->
    <div class="container">
        <div class="messages" id="messages"></div>
        <form class="send-form" id="sendForm">
            <input type="text" name="user_name" id="userName" placeholder="Your Name" required>
            <input type="text" name="message" id="message" placeholder="Your message..." required>
            <button type="submit">Send</button>
        </form>
    </div>
    
    <script>
        function loadMessages() {
            fetch('select.php')
                .then(response => response.json())
                .then(data => {
                    const messagesDiv = document.getElementById('messages');
                    messagesDiv.innerHTML = '';
                    data.forEach(message => {
                        messagesDiv.innerHTML += `
                            <div class="form-container">
                                <p><strong>${message.user_name}:</strong></p>
                                <p>${message.message}</p>
                                <p><small>${message.created_at}</small></p>
                            </div>
                        `;
                    });
                });
        }

        document.getElementById('sendForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const userName = document.getElementById('userName').value;
            const message = document.getElementById('message').value;

            fetch('send_message.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `user_name=${userName}&message=${message}`
            }).then(response => response.text())
              .then(data => {
                  document.getElementById('message').value = '';
                  loadMessages();
              });
        });

        setInterval(loadMessages, 3000);
        loadMessages();
    </script>
   
</body>
</html>