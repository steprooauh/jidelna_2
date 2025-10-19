<?= $this->extend("layout/template"); ?>
<?= $this->section('content'); ?>

<h1 class="text-center p-3" style="font-weight: bold; font-size: clamp(170px, 10wv, 110px);">Články</h1>
<div class="container">
    <div>
        <div class="row">
            <div class="col-lg-6 col-12 paddingmobil">
                <div class="ratio ratio-1x1 position-relative overflow-hidden rounded kartavelka">
                    <div class="position-absolute top-0 start-0 w-100 h-100"
                        style="background-size: cover;background-position:center;background-image: url(img/smazak.jpeg)">
                        <div
                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                                    d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                            <a class="mt-auto fw-bold fs-2 text-white text-decoration-none"
                                href="https://www.toprecepty.cz/recept/37512-smazeny-syr-smazak/"
                                target="_blank">Smažák</a>
                            <div class=" mt-3 fs-4 text-white">10.9.2025</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-6 pb-4 kartamala">
                        <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
                            <div class="position-absolute top-0 start-0 w-100 h-100"
                                style="background-size: cover;background-position:center;background-image: url(img/prsty.jpg)">
                                <div
                                    class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                                            d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                                    <a class="mt-auto fw-bold fs-2 text-white text-decoration-none"
                                        href="https://www.toprecepty.cz/tipy-triky/rybi-prsty-co-obsahuji-a-jak-je-pripravit/"
                                        target="_blank">Prsty</a>
                                    <div class=" mt-3 fs-4 text-white">7.4.2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 kartamala">
                        <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
                            <div class="position-absolute top-0 start-0 w-100 h-100"
                                style="background-size: cover;background-position:center;background-image: url(img/livance.jpg)">
                                <div
                                    class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                                            d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                                    <a class="mt-auto fw-bold fs-2 text-white text-decoration-none"
                                        href="https://www.toprecepty.cz/recept/26018-extra-rychle-livance/"
                                        target="_blank">Lívance</a>
                                    <div class=" mt-3 fs-4 text-white">1.1.2025</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 kartamala">
                        <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
                            <div class="position-absolute top-0 start-0 w-100 h-100"
                                style="background-size: cover;background-position:center;background-image: url(img/svickova.jpeg)">
                                <div
                                    class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                                            d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                                    <a class="mt-auto fw-bold fs-2 text-white text-decoration-none"
                                        href="https://www.toprecepty.cz/recept/2856-svickova-na-smetane/"
                                        target="_blank">Svíčková</a>
                                    <div class=" mt-3 fs-4 text-white">21.9.2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 kartamala">
                        <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
                            <div class="position-absolute top-0 start-0 w-100 h-100"
                                style="background-size: cover;background-position:center;background-image: url(img/testoviny.jpg)">
                                <div
                                    class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                                            d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
                                    <a class="mt-auto fw-bold fs-2 text-white text-decoration-none"
                                        href="https://www.toprecepty.cz/recept/1621-testovinovy-salat/"
                                        target="_blank">Těstoviny</a>
                                    <div class=" mt-3 fs-4 text-white">15.9.2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>

<?= $this->endSection(); ?>