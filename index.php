<?php
require_once __DIR__ . '/includes/config.php';

$selectedCategory = $_GET['category'] ?? 'all';
if(!array_key_exists($selectedCategory, $categories) && $selectedCategory !== 'all') {
    header("Location: /");
    exit;
}

include __DIR__ . '/includes/header.php';
?>

<h1 class="mb-4">
    <?= $selectedCategory === 'all' ? 'Tous nos produits' : htmlspecialchars($selectedCategory) ?>
</h1>

<div class="row g-4">
    <?php
    $productsToShow = ($selectedCategory === 'all') 
        ? array_merge(...array_values($categories)) 
        : $categories[$selectedCategory];

    foreach($productsToShow as $productName):
        $product = $products[$productName];
    ?>
    <div class="col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
            <img src="assets/images/<?= $product['image'] ?>" 
                 class="card-img-top p-2" 
                 alt="<?= htmlspecialchars($productName) ?>"
                 style="height: 200px; object-fit: cover">
            
            <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= htmlspecialchars($productName) ?></h5>
                
                <div class="mt-auto">
                    <p class="text-success fw-bold mb-1">
                        <?= number_format($product['price'], 2) ?> €
                    </p>
                    <small class="text-muted">
                        <?= $product['stock'] ?> en stock
                    </small>
                    
                    <button class="btn btn-outline-success w-100 mt-2"
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal"
                            data-product="<?= htmlspecialchars($productName) ?>">
                        <i class="fas fa-info-circle me-2"></i>Détails
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>