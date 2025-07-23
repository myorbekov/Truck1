<?php include 'header.php'; ?>

<section id="products" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800 animate-on-scroll from-bottom">Наши грузовики</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $products_json = file_get_contents('products.json');
            $products = json_decode($products_json, true);

            foreach ($products as $product) {
                echo '
                <div class="team-card rounded-xl overflow-hidden shadow-md transition duration-300 animate-on-scroll from-bottom">
                    <div class="h-48 overflow-hidden">
                        <img src="' . $product['image'] . '"
                             alt="' . $product['name'] . '"
                             class="w-full h-full object-cover transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1 text-gray-800">' . $product['name'] . '</h3>
                        <p class="text-gray-600">' . $product['description'] . '</p>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>