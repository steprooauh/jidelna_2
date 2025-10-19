<?= $this->extend("layout/template"); ?>
<?= $this->section('content'); ?>

<div class="p-3 nadpis2">
    <h1 class="text-center text2" style="font-weight: bold; margin-top: 13px;">Jídelníček</h1>
</div><br>

<div class="table-container">
    <table class="table table-striped table-bordered align-middle p-2">
        <thead class="table-dark">
            <tr style="font-weight: bold;">
                <th style="width: 14%;">Datum</th>
                <th style="width: 20%;">Polévka</th>
                <th style="width: 34%;">Hlavní chod</th>
                <th style="width: 10%;">Nápoje</th>
                <th style="width: 4%;">Původ</th>
                <th style="width: 16%;">Cena</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>22.10.2025</td>
                <td>Špenátová s kapáním</td>
                <td>Rizoto z kuřecího masa, okurka</td>
                <td>Džus</td>
                <td><span class="fi fi-it"></span></td>
                <td>40 Kč</td>
            </tr>
            <tr>
                <td>23.10.2025</td>
                <td>Zeleninová</td>
                <td>Masové koule v rajské omáčce, špagety</td>
                <td>Džus</td>
                <td><span class="fi fi-cn"></span></td>
                <td>40 Kč</td>
            </tr>
            <tr>
                <td>24.10.2025</td>
                <td>Z červené čočky</td>
                <td>Kuřecí řizek přírodní, brambory smetanové, zeleninová obloha</td>
                <td>Džus</td>
                <td><span class="fi fi-it"></span></td>
                <td>40 Kč</td>
            </tr>
            <tr>
                <td>30.10.2025</td>
                <td>Gulášová</td>
                <td>Dukátové buchtičky s krémem, ovoce</td>
                <td>Čaj</td>
                <td><span class="fi fi-fr"></span></td>
                <td>40 Kč</td>
            </tr>
            <tr>
                <td>31.10.2025</td>
                <td>Vývar z kostí s drožďovými knedlíčky</td>
                <td>Vepřové výpečky, zelí dušené, bramborové knedlíky (směs)</td>
                <td>Džus</td>
                <td><span class="fi fi-cz"></span></td>
                <td>40 Kč</td>
            </tr>
            <tr>
                <td>3.11.2025</td>
                <td>Krémová česneková</td>
                <td>Kuřecí kung-pao, dušená rýže</td>
                <td>Džus</td>
                <td><span class="fi fi-cn"></span></td>
                <td>40 Kč</td>
            </tr>
            <tr>
                <td>4.11.2025</td>
                <td>Bramborová</td>
                <td>Trhané maso, americké brambory, zelenina, dresink, smetanový jogurt</td>
                <td>Čaj</td>
                <td><span class="fi fi-us"></span></td>
                <td>40 Kč</td>
            </tr>
            <tr>
                <td>5.11.2025</td>
                <td>Hrachová</td>
                <td>Kuřecí prsa s rajčaty a sýrem, těstoviny</td>
                <td>Džus</td>
                <td><span class="fi fi-it"></span></td>
                <td>40 Kč</td>
            </tr>
            <tr>
                <td>6.11.2025</td>
                <td>Zelná</td>
                <td>Zeleninový salát, nakládaný sýr, pečivo</td>
                <td>Džus</td>
                <td><span class="fi fi-fr"></span></td>
                <td>40 Kč</td>
            </tr>
            <tr>
                <td>7.11.2025</td>
                <td>Drůbeží s těstovinou</td>
                <td>Špikovaná vepřová pečeně na česneku, šťouchaný brambor a sterilovaný okurek, ovoce</td>
                <td>Džus</td>
                <td><span class="fi fi-sk"></span></td>
                <td>40 Kč</td>
            </tr>
        </tbody>
    </table>
</div><br>
<p style="margin-top: -15px; font-size: x-small;">Můžete si zobrazit pouze 10 jídel dopředu.</p>

<?= $this->endSection(); ?>