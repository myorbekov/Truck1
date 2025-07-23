<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigOne - Логистические решения</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./futuristic.css">
</head>
<body class="font-sans bg-gray-50">

    <!-- Modal -->
    <div id="applicationModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Оставить заявку</h2>
                <button id="closeModal" class="text-gray-500 hover:text-gray-800 text-3xl leading-none">&times;</button>
            </div>
            <form action="form_handler.php" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 mb-2">Имя</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                </div>
                <div class="mb-4">
                    <label for="surname" class="block text-gray-700 mb-2">Фамилия</label>
                    <input type="text" id="surname" name="surname" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 mb-2">Номер телефона</label>
                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition shadow-md">
                    Отправить
                </button>
            </form>
        </div>
    </div>

    <?php if(isset($_GET['success'])): ?>
    <!-- Success Message -->
    <div id="successMessage" class="fixed top-5 right-5 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
        Заявка успешно отправлена!
    </div>
    <?php endif; ?>
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-xl font-bold text-gray-800">BigOne</span>
            </div>
            <nav class="hidden md:flex space-x-8">
                <button class="text-gray-600 hover:text-blue-600 transition" onclick="scrollToSection('results')">Результаты</button>
                <button class="text-gray-600 hover:text-blue-600 transition" onclick="scrollToSection('team')">Команда</button>
                <button class="text-gray-600 hover:text-blue-600 transition" onclick="scrollToSection('faq')">FAQ</button>
                <button class="text-gray-600 hover:text-blue-600 transition" onclick="scrollToSection('contact')">Контакты</button>
            </nav>
            <button class="md:hidden text-gray-600" id="mobileMenuButton">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <div class="hidden md:block">
                <button class="open-modal-btn bg-blue-600 hover:bg-blue-700 text-black px-6 py-2 rounded-full transition shadow-md">
                    Присоединиться
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white shadow-md" id="mobileMenu">
            <div class="container mx-auto px-4 py-3 flex flex-col space-y-3">
                <button class="text-gray-600 hover:text-blue-600 transition py-2 w-full text-left" onclick="scrollToSection('results')">Результаты</button>
                <button class="text-gray-600 hover:text-blue-600 transition py-2 w-full text-left" onclick="scrollToSection('team')">Команда</button>
                <button class="text-gray-600 hover:text-blue-600 transition py-2 w-full text-left" onclick="scrollToSection('faq')">FAQ</button>
                <button class="text-gray-600 hover:text-blue-600 transition py-2 w-full text-left" onclick="scrollToSection('contact')">Контакты</button>
                <button class="open-modal-btn bg-blue-600 hover:bg-blue-700 text-black px-6 py-2 rounded-full transition shadow-md w-full">
                    Присоединиться
                </button>
            </div>
        </div>
    </header>