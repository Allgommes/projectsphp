<?php
include 'connection.php';
    $query = "SELECT * FROM contato"; 
    $result = mysqli_query($conn, $query);

?>

<div class="container mt-4">
        <h2 class="mb-4">Lista de Contactos</h2>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
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
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["id"]."</td>";
                        echo "<td>".$row["nome"]."</td>";
                        echo "<td>".$row["contato"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td><a href='crud/delete.php?id=".$row["id"]."'><i class='bi bi-trash text-danger'></i></a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center text-danger'>Erro: " . mysqli_error($conn) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
</div>
    
