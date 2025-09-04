<form method="post">
    <label for="age">Idade:</label>
    <input type="number" name="age" id="age" required><br>
    <label for="category">Categoria:</label>
    <select name="category" id="category" required>
        <option value="Categoria AM">Categoria AM</option>
        <option value="Categoria A1">Categoria A1</option>
        <option value="Categoria A2">Categoria A2</option>
        <option value="Categoria A">Categoria A</option>
    </select><br>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST['category'] ?? '';
    $age = isset($_POST['age']) ? (int)$_POST['age'] : 0;

    if ($category === "Categoria AM") {
        if ($age >= 14) {
            echo "<h1>Podes conduzir categoria AM</h1>";
        } else {
            echo "<h1>Não podes conduzir categoria AM, precisas ter pelo menos 14 anos.</h1>";
        }
    } else if ($category === "Categoria A1") {
        if ($age >= 16) {
            echo "<h1>Podes conduzir categoria A1</h1>";
        } else {
            echo "<h1>Não podes conduzir categoria A1</h1>";
        }
    } else if ($category === "Categoria A2") {
        if ($age >= 18) {
            echo "<h1>Podes conduzir Categoria A2.</h1>";
        } else {
            echo "<h1>Não podes conduzir Categoria A2.</h1>";
        }

        // categoria AS os condutores com 2 anos de habilitacao da categoria A2 podem tirar esta categoria a partir dos 20 anos.
    } else if ($category === "Categoria A") {
        if ($age >= 24) {
            echo "<h1>Podes conduzir Categoria A.</h1>";
        } else if ($age >= 20) {
            echo "<h1>Podes conduzir Categoria A se tiveres experiencia da categoria A2 durante 2 anos).</h1>";
        } else {
            echo "<h1>Não podes conduzir Categoria A, precisas ter pelo menos 24 anos, ou 20 anos com 2 anos da Categoria A2.</h1>";
        }
    } else {
        echo "<h1>Categoria inválida fornecida.</h1>";
    }
}
?>