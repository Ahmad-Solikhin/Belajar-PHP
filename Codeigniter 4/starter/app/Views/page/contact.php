<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Contact Us</h2>
                <?php foreach ($addresses as $address) : ?>
                    <h3><?= $address['type'] ?></h3>
                    <ul>
                        <li><?= $address['street'] ?></li>
                        <li><?= $address['city'] ?></li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>