<div class="container">
    <div class="row align-items-center">
        <div class="col-auto">
            <span class="fa fa-map-marker color-warning fw-800 icon-position-fix"></span>
            <a class="ml-2 mb-0 fs--1 d-inline color-white fw-700" href="tel:070-5303-9304">住所入れる</a>
        </div>
        <div class="col-auto">
            <span class="fa fa-clock-o color-warning fw-800 icon-position-fix"></span>
            <a class="ml-2 mb-0 fs--1 d-inline color-white fw-700" href="tel:070-5303-9304">⽉曜ー⾦曜17:00〜23:00
                ⼟⽇祝10:00〜17:00</a>
        </div>
        <div class="col-auto">
            <span class="fa fa-phone color-warning fw-800 icon-position-fix"></span>
            <a class="ml-2 mb-0 fs--1 d-inline color-white fw-700"
                href="tel:070-5303-9304">070-5303-9304</a>
        </div>
        <div class="col-auto">
            <?php if(isset($_SESSION['username'])): ?>
                <a class="ml-2 mb-0 fs--1 d-inline color-white fw-700"><?php echo $_SESSION['username'] ?>さん</a>
            <?php endif; ?>
        </div>
    </div>
</div>