<?php include 'header.php'; 
?>

<?php
$products = [
    [
        'name' => '키보드',
        'price' => 30000,
        'stock' => 10
    ],
    [
        'name' => '마우스',
        'price' => 15000,
        'stock' => 3
    ],
    [
        'name' => '모니터',
        'price' => 120000,
        'stock' => 0
    ]
];

function getStockMessage($stock)
{
    if ($stock >= 5) {
        return "재고 충분";
    } elseif ($stock > 0) {
        return "재고 부족";
    } else {
        return "품절";
    }
}

// 총 금액 계산
$total = 0;
foreach ($products as $p) {
    $total += $p['price'] * $p['stock'];
}
?>

<div class="container">

<table>
    <tr>
        <th>상품명</th>
        <th>가격</th>
        <th>재고</th>
        <th>재고 상태</th>
    </tr>

    <?php foreach ($products as $p): ?>
    <tr>
        <td><?= $p['name'] ?></td>
        <td><?= number_format($p['price'])?>원</td>
        <td><?= $p['stock'] ?></td>
        <td><?= getStockMessage($p['stock']) ?></td>
    </tr>
    <?php endforeach; ?>

</table>

<div class="summary">
    <h3>총 재고 금액: <?=number_format($total) ?>원</h3>
</div>

</div>

<?php include 'footer.php';
?>