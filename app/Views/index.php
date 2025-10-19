<?= $this->extend("layout/template"); ?>
<?= $this->section('content'); ?>
<div class="text-center">
    <h3 class="mb-4">VÍTEJTE NA STRÁNKÁCH</h3>

    <div class="p-3 mb-4 rounded nadpis1">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
            <img src="img/image.png" alt="logo" class="nadpis-obrazek1 responzivnost2">
            <h1 class="fw-bold ms-md-3 responzivnost1 text1">
                JÍDELNA TLUMAČOV
            </h1>
        </div>
    </div>

    <h5 class="mt-3">Vyberte další krok z nabídky výše</h5>
    <p>Přejeme dobrou chuť! <i class="fa-solid fa-face-smile fa-spin fa-spin-reverse" style="color: rgb(165, 107, 0);"></i></p>
</div>

<?= $this->endSection(); ?>