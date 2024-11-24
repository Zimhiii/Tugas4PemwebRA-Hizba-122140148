<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        form input, 
        form textarea, 
        form select, 
        form button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        form input:focus, 
        form textarea:focus, 
        form select:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #0056b3;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        td {
            background-color: #f9f9f9;
        }

        .identitas {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .identitas h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .identitas h2 {
            font-size: 18px;
            color: #555;
        }
    </style>
    <script>
        function validateForm() {
            let name = document.forms["registerForm"]["name"].value;
            let email = document.forms["registerForm"]["email"].value;
            let phone = document.forms["registerForm"]["phone"].value;
            let age = document.forms["registerForm"]["age"].value;
            let file = document.forms["registerForm"]["file"].files[0];

            if (name.length < 3) {
                alert("Nama harus memiliki minimal 3 karakter!");
                return false;
            }
            if (!email.includes("@")) {
                alert("Email tidak valid!");
                return false;
            }
            if (isNaN(phone) || phone.length < 10) {
                alert("Nomor telepon harus angka dan minimal 10 digit!");
                return false;
            }
            if (isNaN(age) || age < 18) {
                alert("Umur harus berupa angka dan minimal 18 tahun!");
                return false;
            }
            if (!file) {
                alert("File harus diunggah!");
                return false;
            }
            if (file.type !== "text/plain") {
                alert("File harus bertipe teks (.txt)!");
                return false;
            }
            if (file.size > 1024 * 1024) {
                alert("Ukuran file tidak boleh lebih dari 1 MB!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form name="registerForm" action="process.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
        <h2>Form Pendaftaran</h2>
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required minlength="3">
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="phone">Nomor Telepon:</label>
        <input type="text" name="phone" id="phone" required minlength="10">
        
        <label for="age">Umur:</label>
        <input type="number" name="age" id="age" required min="18">
        
        <label for="file">Unggah File (.txt):</label>
        <input type="file" name="file" id="file" accept=".txt" required>
        
        <button type="submit">Kirim</button>
    </form>

    <div class="identitas">
        <div>
            <h1>Hizba Jaisy Miuhammad</h1>
            <h2>122140148</h2>
            <h2>Pemrograman Web RA</h2>
        </div>
    </div>
</body>
</html>
