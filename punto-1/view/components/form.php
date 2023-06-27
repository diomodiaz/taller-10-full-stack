<?php include "./controller/calculationController.php"; ?>
<form method="post">
    <h2>Calculadora Basica</h2>
    <div class="form__row">
        <div>
            <label for="first-number">Digite el primer Número</label>
            <input id="first-number" type="text" name="first_number" placeholder="0">
        </div>
        <div>
            <label for="second-number">Digite el segundo Número</label>
            <input id="second-number" type="text" name="second_number" placeholder="0">
        </div>
        <div>
            <label for="operation-type">Elige la operación a realizar</label>
            <select name="operation_type" id="operation-type">
                <option value="add">Sumar</option>
                <option value="sub">Restar</option>
                <option value="mul">Multiplicar</option>
                <option value="div">Dividir</option>
            </select>
        </div>
    </div>
    <button>Calcular</button>
</form>