<?php include "./controller/calculationController.php"; ?>
<form method="post">
<h2>Calcular edad</h2>
    <div class="form__row">
        <div>
            <label for="birthdate">Seleccione fecha de nacimiento</label>
            <input id="birthdate" type="date" name="birth_date">
        </div>
    </div>
    <button>Calcular</button>
</form>