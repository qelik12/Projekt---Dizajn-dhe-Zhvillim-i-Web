<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Shto Lajm - Lion Pride F.C.</title>
    <style>
        body { 
            background-color: #0a0a0a; 
            color: white; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container { 
            background: #1a1a1a; 
            padding: 40px; 
            border-radius: 12px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            width: 100%;
            max-width: 500px;
            border-top: 4px solid #d4af37;
        }

        h2 { 
            color: #d4af37; 
            text-align: center; 
            margin-bottom: 30px; 
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .form-group { margin-bottom: 20px; }

        label { 
            display: block; 
            margin-bottom: 8px; 
            color: #ccc; 
            font-size: 14px;
        }

        input[type="text"], textarea { 
            width: 100%; 
            padding: 12px; 
            background: #252525; 
            border: 1px solid #333; 
            border-radius: 6px; 
            color: white; 
            box-sizing: border-box; 
            transition: 0.3s;
        }

        input[type="text"]:focus, textarea:focus { 
            border-color: #d4af37; 
            outline: none; 
            background: #2d2d2d;
        }

        input[type="file"] { 
            color: #888; 
            font-size: 14px;
        }

        .btn-submit { 
            background: #d4af37; 
            color: black; 
            width: 100%; 
            padding: 14px; 
            border: none; 
            border-radius: 6px; 
            font-weight: bold; 
            cursor: pointer; 
            text-transform: uppercase;
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-submit:hover { 
            background: #f1c40f; 
            transform: translateY(-2px);
        }

        .back-link { 
            display: block; 
            text-align: center; 
            margin-top: 20px; 
            color: #666; 
            text-decoration: none; 
            font-size: 14px;
        }

        .back-link:hover { color: #d4af37; }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Shto Lajm</h2>
        <form action="process_news.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>Titulli i Lajmit</label>
                <input type="text" name="title" placeholder="Psh: Ndeshja e rëndësishme të dielën..." required>
            </div>

            <div class="form-group">
                <label>Përmbajtja</label>
                <textarea name="content" rows="6" placeholder="Shkruani detajet e lajmit këtu..." required></textarea>
            </div>

            <div class="form-group">
                <label>Fotoja Kryesore</label>
                <input type="file" name="image" accept="image/*" required>
            </div>

            <button type="submit" class="btn-submit">Publiko Lajmin</button>
        </form>
        
        <a href="admin_dashboard.php" class="back-link">&larr; Kthehu te Paneli</a>
    </div>

</body>
</html>