<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic validation
    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['phone']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
        $surname = htmlspecialchars(strip_tags(trim($_POST['surname'])));
        $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
        $phone = htmlspecialchars(strip_tags(trim($_POST['phone'])));
        
        $data = "Дата: " . date("Y-m-d H:i:s") . "\n";
        $data .= "Имя: $name\n";
        $data .= "Фамилия: $surname\n";
        $data .= "Email: $email\n";
        $data .= "Телефон: $phone\n";
        $data .= "-------------------------\n\n";
        
        $file = 'data.txt';
        // Save data to file
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
        
        // Redirect to avoid form resubmission
        header("Location: index.php?success=1#cta");
        exit();
    }
} else {
    // Redirect to the main page if accessed directly
    header("Location: index.php");
    exit();
}
?>