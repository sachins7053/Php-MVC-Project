<?php include 'header.php'; ?>

<h2>Services</h2>
<ul>
    <?php foreach ($services as $service): ?>
        <li>
            <a href="/service-detail?id=<?php echo $service['id']; ?>">
                <?php echo htmlspecialchars($service['name']); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include 'footer.php'; ?>
