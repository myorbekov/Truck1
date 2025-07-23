<?php
session_start();

$USERNAME = 'admin';
$PASSWORD = '123';

$error = '';

// Logout logic
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}

// Login logic
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) {
    if ($_POST['username'] == $USERNAME && $_POST['password'] == $PASSWORD) {
        $_SESSION['loggedin'] = true;
    } else {
        $error = 'Неверный логин или пароль';
    }
}

$file = 'data.txt';

// Delete logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_request'])) {
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
        $request_to_delete = $_POST['delete_request'];
        $data = file_get_contents($file);
        $requests = explode("-------------------------\n\n", trim($data));
        
        $new_data = '';
        foreach ($requests as $index => $req) {
            if ($index != $request_to_delete) {
                $new_data .= $req . "\n-------------------------\n\n";
            }
        }
        
        file_put_contents($file, $new_data);
        header("Location: admin.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body { background-color: #f3f4f6; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        .header { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #e5e7eb; padding: 12px; text-align: left; }
        th { background-color: #f9fafb; font-weight: 600; }
        tr:nth-child(even) { background-color: #f9fafb; }
        .delete-btn { background-color: #ef4444; color: white; padding: 5px 10px; border-radius: 5px; border: none; cursor: pointer; }
        .login-container { max-width: 400px; margin: 100px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .logout-btn { position: absolute; top: 20px; right: 20px; background-color: #3b82f6; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        <div class="container">
            <a href="?logout=true" class="logout-btn">Выйти</a>
            <div class="header">
                <h1 class="text-2xl font-bold">Админ-панель</h1>
                <p class="text-gray-600">Просмотр заявок</p>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th>Дата</th>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Email</th>
                            <th>Телефон</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (file_exists($file)) {
                            $data = file_get_contents($file);
                            if (!empty($data)) {
                                $requests = explode("-------------------------\n\n", trim($data));
                                foreach ($requests as $index => $req) {
                                    if (!empty($req)) {
                                        $lines = explode("\n", $req);
                                        $rowData = [];
                                        foreach ($lines as $line) {
                                            if (strpos($line, ':') !== false) {
                                                list($key, $value) = explode(':', $line, 2);
                                                $rowData[trim($key)] = trim($value);
                                            }
                                        }
                                        echo '<tr>';
                                        echo '<td>' . htmlspecialchars($rowData['Дата'] ?? '') . '</td>';
                                        echo '<td>' . htmlspecialchars($rowData['Имя'] ?? '') . '</td>';
                                        echo '<td>' . htmlspecialchars($rowData['Фамилия'] ?? '') . '</td>';
                                        echo '<td>' . htmlspecialchars($rowData['Email'] ?? '') . '</td>';
                                        echo '<td>' . htmlspecialchars($rowData['Телефон'] ?? '') . '</td>';
                                        echo '<td>';
                                        echo '<form method="POST" action="admin.php" onsubmit="return confirm(\'Вы уверены, что хотите удалить эту заявку?\');">';
                                        echo '<input type="hidden" name="delete_request" value="' . $index . '">';
                                        echo '<button type="submit" class="delete-btn">Удалить</button>';
                                        echo '</form>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                }
                            } else {
                                echo "<tr><td colspan='6' class='text-center'>Заявок пока нет.</td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6' class='text-center'>Файл с данными не найден.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else: ?>
        <div class="login-container">
            <h2 class="text-2xl font-bold text-center mb-5">Вход в админ-панель</h2>
            <?php if ($error): ?>
                <p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"><?php echo $error; ?></p>
            <?php endif; ?>
            <form method="POST" action="admin.php">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700">Логин</label>
                    <input type="text" name="username" id="username" class="w-full px-3 py-2 border rounded" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700">Пароль</label>
                    <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Войти</button>
            </form>
        </div>
    <?php endif; ?>
</body>
</html>