<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Hello About</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut delectus eaque, earum iusto
                    labore natus voluptatum. Ab, aliquam consequuntur cupiditate dolorum eligendi expedita facere in
                    magnam
                    mollitia nulla, possimus quaerat quam, quasi rem repellat saepe suscipit unde. Animi at, blanditiis
                    dolorem, dolorum eaque esse est libero maiores minus nesciunt nisi quaerat, qui quod sapiente vitae.
                    Aliquid amet consectetur eos, est facilis fuga fugit illo ipsam itaque, iusto magnam maxime
                    molestiae
                    nesciunt nobis, numquam placeat quasi quidem quisquam sed similique! A assumenda culpa, dignissimos
                    dolor dolorem et eveniet expedita ipsa nemo nisi perspiciatis praesentium, sapiente voluptate. Harum
                    iure sed voluptas?</p>
                <?php
                d($test); //Anjjayyy pengganti var_dump di ci
                var_dump($test);
                //                dd($test); //var_dump die
                ?>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>