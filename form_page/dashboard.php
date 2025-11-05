<?php
// ---- File: dashboard.php ----

// Include config (which also starts the session).
require_once 'config.php';

// === SECURITY CHECK ===
// If admin is not logged in, redirect to the login page.
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

// Function to fetch leads.
function getLeads($conn, $tableName) {
    if ($tableName !== 'users' && $tableName !== 'users_2') {
        return null;
    }
    $sql = "SELECT id, name, email, username FROM `$tableName` ORDER BY id ASC";
    return $conn->query($sql);
}

// Fetch data for both tables.
$primaryLeads = getLeads($conn, 'users');
$secondaryLeads = getLeads($conn, 'users_2');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.07); }
        .nav-tabs .nav-link { border: none; border-bottom: 3px solid transparent; color: #495057; font-weight: 600; }
        .nav-tabs .nav-link.active { color: #0d6efd; border-color: #0d6efd; }
        .table-responsive { max-height: 50vh; }
        .table thead { position: sticky; top: 0; background: white; }
        .empty-state { text-align: center; padding: 50px; }
    </style>
</head>
<body>
    <div class="container-fluid p-4">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2 fw-bold text-dark">CRM Dashboard</h1>
            <div>
                <a href="register_form.php" class="btn btn-primary"><i class="bi bi-plus-circle me-2"></i>Add Lead</a>
                <a href="logout.php" class="btn btn-danger"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-white border-0 p-0">
                <ul class="nav nav-tabs px-3" id="leadsTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#primary" type="button">
                            <i class="bi bi-star-fill text-warning"></i> Primary Leads 
                            <span class="badge bg-primary rounded-pill"><?php echo $primaryLeads ? $primaryLeads->num_rows : 0; ?></span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#secondary" type="button">
                            <i class="bi bi-people-fill text-info"></i> Secondary Leads 
                            <span class="badge bg-secondary rounded-pill"><?php echo $secondaryLeads ? $secondaryLeads->num_rows : 0; ?></span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="card-body p-0">
                <div class="tab-content">
                    
                    <!-- Primary Leads Pane -->
                    <div class="tab-pane fade show active" id="primary" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped mb-0">
                                <thead class="table-light">
                                <tr><th>ID</th
                                ><th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th></tr></thead>
                                <tbody>
                                    <?php if ($primaryLeads && $primaryLeads->num_rows > 0):
                                      $count=1;
                                     while($row = $primaryLeads->fetch_assoc()):
                                       ?>
                                        <tr>
                                            <th><?php echo $count++; ?></th>
                                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                                            <td><?php echo htmlspecialchars($row['username']); ?></td>
                                            <td>********</td>
                                        </tr>
                                    <?php endwhile; else: ?>
                                        <tr><td colspan="5" class="empty-state"><p class="mb-0">No primary leads found.</p></td></tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Secondary Leads Pane -->
                    <div class="tab-pane fade" id="secondary" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped mb-0">
                                <thead class="table-light"><tr><th>ID</th><th>Name</th><th>Email</th><th>Username</th><th>Password</th></tr></thead>
                                <tbody>
                                    <?php if ($secondaryLeads && $secondaryLeads->num_rows > 0):
                                     $count=1;
                                     while($row = $secondaryLeads->fetch_assoc()): 
                                       
                                        ?>
                                        <tr>
                                            <th><?php echo $count++; ?></th>
                                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                                            <td><?php echo htmlspecialchars($row['username']); ?></td>
                                            <td>********</td>
                                        </tr>
                                    <?php endwhile; else: ?>
                                        <tr><td colspan="5" class="empty-state"><p class="mb-0">No secondary leads found.</p></td></tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
// Close connection at the end of the script.
if ($conn) {
    $conn->close();
}
?>