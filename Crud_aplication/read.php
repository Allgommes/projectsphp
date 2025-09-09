<?php 
    include 'connection.php';
    // READ - ler dados na tabela
    $query = "SELECT * FROM contato"; 
    $result = mysqli_query($conn, $query);
    
?>

<div class="container mt-4">
    <h2 class="mb-4">Lista de Contatos</h2>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Contato</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result) {
                mysqli_data_seek($result, 0);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nome"] . "</td>";
                    echo "<td>" . $row["contato"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td><a href='delete.php?id=" . $row["id"] . "'>  <i class='bi bi-trash text-danger'></i></a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-danger'>Erro ao ler registos: " . mysqli_error($conn) . "</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

?>