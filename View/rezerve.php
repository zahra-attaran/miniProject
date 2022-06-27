<ol class="list-group list-group-numbered">
    <?php foreach ($date_array as $date): ?>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold"><?php echo $date["date"] ?></div>
            </div>
            <span class="badge bg-primary rounded-pill"><?php echo $date["time"] ?></span>
        </li>
    <?php endforeach; ?>

</ol>

