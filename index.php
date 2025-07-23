<?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section id="hero" class="hero-gradient text-white py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0 animate-on-scroll from-left">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Станьте частью нашей команды дальнобойщиков</h1>
                <p class="text-xl mb-8 opacity-90">Мы предлагаем лучшие условия работы, современный автопарк и стабильные маршруты по всей стране и за рубежом.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold transition shadow-lg">
                        Подробнее
                    </button>
                    <button class="border-2 border-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-full font-semibold transition">
                        Видео о компании
                    </button>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center animate-on-scroll from-right">
                <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                     alt="Грузовик в дороге"
                     class="rounded-lg shadow-2xl max-w-full h-auto">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="results" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800 animate-on-scroll from-bottom">Наши результаты</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Driver Stats -->
                <div class="stat-card p-8 rounded-xl transition duration-300 animate-on-scroll from-bottom">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-truck text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Дальнобойщики</h3>
                    <p class="text-gray-600 mb-6">Наши водители - основа компании. В 2023 году они перевезли:</p>
                    <div class="flex items-end">
                        <span class="text-5xl font-bold text-blue-600 mr-2">12,500</span>
                        <span class="text-gray-500 mb-2">тонн грузов</span>
                    </div>
                </div>
                
                <!-- LID Stats -->
                <div class="stat-card p-8 rounded-xl transition duration-300 animate-on-scroll from-bottom" style="transition-delay: 100ms;">
                    <div class="text-green-600 mb-4">
                        <i class="fas fa-star text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">LID Дальнобойщиков</h3>
                    <p class="text-gray-600 mb-6">Наши лучшие водители показали выдающиеся результаты:</p>
                    <div class="flex items-end">
                        <span class="text-5xl font-bold text-green-600 mr-2">+28%</span>
                        <span class="text-gray-500 mb-2">эффективности</span>
                    </div>
                </div>
                
                <!-- Retention Stats -->
                <div class="stat-card p-8 rounded-xl transition duration-300 animate-on-scroll from-bottom" style="transition-delay: 200ms;">
                    <div class="text-orange-600 mb-4">
                        <i class="fas fa-users text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Удержание персонала</h3>
                    <p class="text-gray-600 mb-6">Мы гордимся нашими показателями удержания:</p>
                    <div class="flex items-end">
                        <span class="text-5xl font-bold text-orange-600 mr-2">92%</span>
                        <span class="text-gray-500 mb-2">водителей остаются с нами</span>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 text-gray-800 animate-on-scroll from-bottom">Наша команда</h2>
            <p class="text-xl text-center text-gray-600 mb-12 max-w-3xl mx-auto animate-on-scroll from-bottom" style="transition-delay: 100ms;">Профессионалы, которые делают нашу компанию лидером в логистике</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- CEO -->
                <div class="team-card rounded-xl overflow-hidden shadow-md transition duration-300 animate-on-scroll from-left">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                             alt="CEO"
                             class="w-full h-full object-cover transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1 text-gray-800">Михаил Соколов</h3>
                        <p class="text-blue-600 font-medium mb-4">CEO & Основатель</p>
                        <p class="text-gray-600">Создал компанию в 2010 году. Под его руководством BigOne выросла в национального лидера логистики.</p>
                    </div>
                </div>
                
                <!-- Operations Manager -->
                <div class="team-card rounded-xl overflow-hidden shadow-md transition duration-300 animate-on-scroll from-bottom" style="transition-delay: 100ms;">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                             alt="Operations Manager"
                             class="w-full h-full object-cover transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1 text-gray-800">Анна Петрова</h3>
                        <p class="text-blue-600 font-medium mb-4">Операционный директор</p>
                        <p class="text-gray-600">Управляет всеми операциями компании. Обеспечивает бесперебойную работу логистической сети.</p>
                    </div>
                </div>
                
                <!-- HR Manager -->
                <div class="team-card rounded-xl overflow-hidden shadow-md transition duration-300 animate-on-scroll from-right" style="transition-delay: 200ms;">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                             alt="HR Manager"
                             class="w-full h-full object-cover transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1 text-gray-800">Дмитрий Иванов</h3>
                        <p class="text-blue-600 font-medium mb-4">HR Директор</p>
                        <p class="text-gray-600">Отвечает за подбор и развитие персонала. Создал одну из лучших программ обучения водителей в отрасли.</p>
                    </div>
                </div>
                
                <!-- Fleet Manager -->
                <div class="team-card rounded-xl overflow-hidden shadow-md transition duration-300 animate-on-scroll from-left">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                             alt="Fleet Manager"
                             class="w-full h-full object-cover transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1 text-gray-800">Сергей Кузнецов</h3>
                        <p class="text-blue-600 font-medium mb-4">Менеджер автопарка</p>
                        <p class="text-gray-600">Управляет парком из 200+ грузовиков. Обеспечивает техническую готовность и модернизацию транспорта.</p>
                    </div>
                </div>
                
                <!-- Lead Driver -->
                <div class="team-card rounded-xl overflow-hidden shadow-md transition duration-300 animate-on-scroll from-bottom" style="transition-delay: 100ms;">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                             alt="Lead Driver"
                             class="w-full h-full object-cover transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1 text-gray-800">Алексей Морозов</h3>
                        <p class="text-blue-600 font-medium mb-4">Главный дальнобойщик</p>
                        <p class="text-gray-600">15 лет опыта. Обучает новых водителей. Лидер по количеству безаварийных километров (2.1M км).</p>
                    </div>
                </div>
                
                <!-- Safety Manager -->
                <div class="team-card rounded-xl overflow-hidden shadow-md transition duration-300 animate-on-scroll from-right" style="transition-delay: 200ms;">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                             alt="Safety Manager"
                             class="w-full h-full object-cover transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1 text-gray-800">Елена Смирнова</h3>
                        <p class="text-blue-600 font-medium mb-4">Менеджер по безопасности</p>
                        <p class="text-gray-600">Разрабатывает программы безопасности. Благодаря ее работе у нас самый низкий уровень аварийности в отрасли.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 text-gray-800 animate-on-scroll from-bottom">Часто задаваемые вопросы</h2>
            <p class="text-xl text-center text-gray-600 mb-12 max-w-3xl mx-auto animate-on-scroll from-bottom" style="transition-delay: 100ms;">Ответы на самые популярные вопросы от наших водителей</p>
            
            <div class="max-w-4xl mx-auto space-y-4">
                <!-- FAQ Item 1 -->
                <div class="faq-item rounded-lg p-6 cursor-pointer border hover:border-blue-300 animate-on-scroll from-bottom">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-800">Какие требования к водителям?</h3>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </div>
                    <div class="mt-3 text-gray-600 hidden">
                        <p>Мы ищем водителей с:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Категорией CE и стажем от 3 лет</li>
                            <li>Отсутствием серьезных нарушений ПДД</li>
                            <li>Готовностью к дальним рейсам</li>
                            <li>Ответственным отношением к работе</li>
                        </ul>
                        <p class="mt-2">Мы обеспечиваем полное обучение для всех новых водителей.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="faq-item rounded-lg p-6 cursor-pointer border hover:border-blue-300 animate-on-scroll from-bottom" style="transition-delay: 100ms;">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-800">Какие условия работы и зарплата?</h3>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </div>
                    <div class="mt-3 text-gray-600 hidden">
                        <p>Мы предлагаем:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Конкурентную зарплату (от 120 000 руб. + бонусы)</li>
                            <li>График работы 2/2 или 3/3 недели</li>
                            <li>Современные грузовики (не старше 3 лет)</li>
                            <li>Полное сопровождение рейсов</li>
                            <li>Медицинскую страховку</li>
                            <li>Программы лояльности и премии</li>
                        </ul>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="faq-item rounded-lg p-6 cursor-pointer border hover:border-blue-300 animate-on-scroll from-bottom" style="transition-delay: 200ms;">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-800">Какие маршруты у компании?</h3>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </div>
                    <div class="mt-3 text-gray-600 hidden">
                        <p>Наши основные направления:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>По России: регулярные рейсы во все регионы</li>
                            <li>Международные: Европа, СНГ, Китай</li>
                            <li>Специальные проекты: северные поставки</li>
                        </ul>
                        <p class="mt-2">Маршруты распределяются с учетом пожеланий водителей и их квалификации.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="faq-item rounded-lg p-6 cursor-pointer border hover:border-blue-300 animate-on-scroll from-bottom" style="transition-delay: 300ms;">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-800">Как происходит обучение новых водителей?</h3>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </div>
                    <div class="mt-3 text-gray-600 hidden">
                        <p>Наша программа адаптации включает:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>2-недельный курс в учебном центре</li>
                            <li>Знакомство с техникой и стандартами компании</li>
                            <li>Первый рейс с опытным наставником</li>
                            <li>Постоянное повышение квалификации</li>
                        </ul>
                        <p class="mt-2">Все обучение оплачивается компанией.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="faq-item rounded-lg p-6 cursor-pointer border hover:border-blue-300 animate-on-scroll from-bottom" style="transition-delay: 400ms;">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-800">Какие перспективы роста в компании?</h3>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </div>
                    <div class="mt-3 text-gray-600 hidden">
                        <p>В BigOne вы можете:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Стать инструктором и обучать новых водителей</li>
                            <li>Перейти на международные маршруты с повышенной оплатой</li>
                            <li>Занять позицию менеджера автоколонны</li>
                            <li>Участвовать в программе обмена опытом с зарубежными партнерами</li>
                        </ul>
                        <p class="mt-2">Мы поддерживаем профессиональный рост наших сотрудников.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 6 -->
                <div class="faq-item rounded-lg p-6 cursor-pointer border hover:border-blue-300 animate-on-scroll from-bottom" style="transition-delay: 500ms;">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-800">Как устроен процесс найма?</h3>
                        <i class="fas fa-chevron-down text-blue-600"></i>
                    </div>
                    <div class="mt-3 text-gray-600 hidden">
                        <p>Процесс трудоустройства включает:</p>
                        <ol class="list-decimal pl-5 mt-2 space-y-1">
                            <li>Подача заявки на сайте или по телефону</li>
                            <li>Собеседование с HR и руководителем отдела</li>
                            <li>Проверка документов и водительского стажа</li>
                            <li>Медосмотр (организуем за наш счет)</li>
                            <li>Подписание договора и начало работы</li>
                        </ol>
                        <p class="mt-2">Весь процесс занимает от 3 до 7 дней.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="py-16 bg-gray-800 text-white">
        <div class="container mx-auto px-4 text-center animate-on-scroll from-bottom">
            <h2 class="text-3xl font-bold mb-6">Готовы присоединиться к нашей команде?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">Станьте частью ведущей логистической компании с лучшими условиями для дальнобойщиков.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <button class="open-modal-btn bg-blue-600 hover:bg-blue-700 text-black px-8 py-3 rounded-full font-semibold transition shadow-lg">
                    Оставить заявку
                </button>
                <button class="border-2 border-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-full font-semibold transition" onclick="window.location.href='tel:+998906886605'">
                    <i class="fas fa-phone-alt mr-2"></i> Позвонить нам
                </button>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>