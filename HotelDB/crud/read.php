<?php
    $query = "SELECT * FROM Reservas"; 
    $result = mysqli_query($conn, $query);
?>

<div class="card shadow">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="bi bi-list-check"></i> Lista de Reservas</h5>
        <a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addReservaModal">
            <i class="bi bi-plus-circle"></i> Nova Reserva</a>
    </div>
    <div class="card-body">
        <?php if (isset($_GET['message'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo htmlspecialchars($_GET['message']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Quarto</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Estado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".htmlspecialchars($row["cliente"])."</td>";
                            echo "<td>".$row["quarto"]."</td>";
                            echo "<td>".$row["checkin"]."</td>";
                            echo "<td>".$row["checkout"]."</td>";
                            
                            if ($row["estado"] == "Ativa") {
                                echo "<td class='status-ativa'>".$row["estado"]."</td>";
                            } else {
                                echo "<td class='status-cancelada'>".$row["estado"]."</td>";
                            }
                            
                            echo "<td>";
                            echo "<a href='crud/delete.php?id=".$row["id"]."' class='btn btn-danger btn-sm btn-action' onclick=\"return confirm('Tem certeza que deseja cancelar esta reserva?')\"><i class='bi bi-trash'></i> Cancelar</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-center'>Nenhuma reserva encontrada.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal para adicionar nova reserva -->
<div class="modal fade" id="addReservaModal" tabindex="-1" aria-labelledby="addReservaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addReservaModalLabel">Nova Reserva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="crud/create.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="cliente" class="form-label">Cliente</label>
                        <input type="text" class="form-control" id="cliente" name="cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="quarto" class="form-label">Número do Quarto</label>
                        <input type="number" class="form-control" id="quarto" name="quarto" required>
                    </div>
                    <div class="mb-3">
                        <label for="checkin" class="form-label">Data de Check-in</label>
                        <input type="date" class="form-control" id="checkin" name="checkin" required>
                    </div>
                    <div class="mb-3">
                        <label for="checkout" class="form-label">Data de Check-out</label>
                        <input type="date" class="form-control" id="checkout" name="checkout" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Criar Reserva</button>
                </div>
            </form>
        </div>
    </div>
</div>