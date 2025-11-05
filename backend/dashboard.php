<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once 'db.php';

// Auth check
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header('Location: index.php');
    exit;
}

// Handle filters
$type = $_GET['type'] ?? 'primary';
$date_from = $_GET['date_from'] ?? '';
$date_to = $_GET['date_to'] ?? '';
$q = trim($_GET['q'] ?? '');

// Count metrics
$count_primary = $conn->query("SELECT COUNT(*) as c FROM primary_leads")->fetch_assoc()['c'];
$count_secondary = $conn->query("SELECT COUNT(*) as c FROM secondary_leads")->fetch_assoc()['c'];
$count_tertiary = $conn->query("SELECT COUNT(*) as c FROM tertiary_leads")->fetch_assoc()['c'];
$count_total = $count_primary + $count_secondary + $count_tertiary;

// --- MAIN DATA FETCH ---
if ($type === 'all') {
    // Wrap union query in parentheses and alias it so WHERE works correctly
    $sql = "SELECT * FROM (
                SELECT *, 'Primary' as source FROM primary_leads
                UNION ALL
                SELECT *, 'Secondary' as source FROM secondary_leads
                UNION ALL
                SELECT *, 'Tertiary' as source FROM tertiary_leads
            ) AS all_leads";
    
    $conds = [];
    if ($q !== '') {
        $safeq = $conn->real_escape_string($q);
        $conds[] = "(name LIKE '%$safeq%' OR email LIKE '%$safeq%' OR mobile LIKE '%$safeq%')";
    }
    if ($date_from) {
        $df = $conn->real_escape_string($date_from);
        $conds[] = "(DATE(created_at) >= '$df')";
    }
    if ($date_to) {
        $dt = $conn->real_escape_string($date_to);
        $conds[] = "(DATE(created_at) <= '$dt')";
    }
    if (count($conds)) {
        $sql .= ' WHERE ' . implode(' AND ', $conds);
    }

    $sql .= " ORDER BY created_at DESC LIMIT 500";
    $res = $conn->query($sql);

} else {
    // Single table query
    $table = $type . '_leads';
    $params = [];
    $w = [];
    if ($q !== '') {
        $w[] = "(name LIKE CONCAT('%',?,'%') OR email LIKE CONCAT('%',?,'%') OR mobile LIKE CONCAT('%',?,'%'))";
    }
    if ($date_from) $w[] = "DATE(created_at) >= ?";
    if ($date_to) $w[] = "DATE(created_at) <= ?";

    $sql = "SELECT * FROM $table";
    if (count($w)) $sql .= " WHERE " . implode(' AND ', $w);
    $sql .= " ORDER BY created_at DESC LIMIT 500";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $types = '';
        $values = [];
        if ($q !== '') { $types .= 'sss'; $values[] = $q; $values[] = $q; $values[] = $q; }
        if ($date_from) { $types .= 's'; $values[] = $date_from; }
        if ($date_to) { $types .= 's'; $values[] = $date_to; }
        if ($types) $stmt->bind_param($types, ...$values);
        $stmt->execute();
        $res = $stmt->get_result();
    } else {
        $res = $conn->query($sql);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Dashboard - Lead CRM</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body { background:#f5f7f9;
    overflow-x: hidden;
    }
    .card { border-radius:12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    .metric { 
      min-height:110px; 
      background: linear-gradient(145deg, #ffffff, #f8f9fa);
      border: 1px solid rgba(0,0,0,0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .metric:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .metric h3 { font-weight:700; }
    .metric .btn {
      background: linear-gradient(to right, #4361ee, #3a0ca3);
      color: white !important;
      border-radius: 30px;
      font-weight: 600;
      padding: 4px 12px;
      box-shadow: 0 2px 8px rgba(67, 97, 238, 0.3);
      transition: all 0.3s ease;
    }
    .metric .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(67, 97, 238, 0.4);
    }
    .custom-lead-card {
      background: linear-gradient(to bottom right, #f8fbff, #f0f4f8);
      border-left: 4px solid #4361ee;
      transition: all 0.3s ease;
    }
    .custom-lead-card:hover {
      box-shadow: 0 10px 25px rgba(67, 97, 238, 0.1);
      transform: translateY(-3px);
    }
    .action-btn {
      border-radius: 8px;
      padding: 6px 12px;
      font-weight: 500;
      transition: all 0.2s;
    }
    .action-btn-primary {
      background: linear-gradient(to right, #4361ee, #3a0ca3);
      color: white;
    }
    .action-btn-danger {
      background: linear-gradient(to right, #f94144, #d00000);
      color: white;
    }
    .action-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .search-container {
      background: white;
      border-radius: 50px;
      padding: 3px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }
    .search-container input {
      border: none !important;
      outline: none !important;
      box-shadow: none !important;
      background: transparent;
    }
    .search-container button {
      background: #4361ee;
      color: white;
      border-radius: 50px;
      padding: 8px 20px;
      font-weight: 600;
      transition: all 0.3s;
    }
    .search-container button:hover {
      background: #3a0ca3;
      transform: scale(1.05);
    }
    .table-responsive {
      overflow-x: auto;
    }
    .table thead th {
      background: linear-gradient(to bottom, #f8f9fa, #e9ecef);
      font-weight: 600;
    }
    .pagination .page-item .page-link {
      border-radius: 8px !important;
      margin: 0 4px;
      font-weight: 600;
    }
    .pagination .page-item.active .page-link {
      background: linear-gradient(to right, #4361ee, #3a0ca3);
      color: white;
      border: none;
    }
    @media (max-width: 768px) {
      .metric {
        margin-bottom: 20px;
        text-align: center;
      }
      .metric .btn {
        width: 100%;
        margin-top: 10px;
      }
      .filter-row .col-md-2 {
        margin-top: 15px;
      }
      .search-container {
        flex-direction: column;
      }
      .search-container button {
        width: 100%;
        border-radius: 8px;
        margin-top: 8px;
      }
    }
    @media (max-width: 480px) {
      .metric h3 {
        font-size: 1.8rem;
      }
      .table {
        font-size: 0.85rem;
      }
      .action-btn {
        width: 100%;
        margin-bottom: 8px;
        text-align: center;
      }
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">
      <i class="fas fa-chart-line me-2"></i>Leads CRM
    </a>
    <div class="d-flex align-items-center">
      <span class="me-3 text-muted">Ayushbaliyan267</span>
      <a href="logout.php" class="btn btn-sm btn-outline-danger">
        <i class="fas fa-sign-out-alt me-1"></i>Logout
      </a>
    </div>
  </div>
</nav>

<div class="container py-4">
  <!-- FILTER PANEL -->
  <div class="card p-3 mb-4">
    <form class="row g-2 filter-row" method="get">
      <div class="col-md-3">
        <select name="type" class="form-select form-select-lg">
          <option value="primary" <?= $type=='primary'?'selected':'' ?>>Primary Leads</option>
          <option value="secondary" <?= $type=='secondary'?'selected':'' ?>>Secondary Leads</option>
          <option value="tertiary" <?= $type=='tertiary'?'selected':'' ?>>Tertiary Leads</option>
          <option value="all" <?= $type=='all'?'selected':'' ?>>All Leads</option>
        </select>
      </div>
      <div class="col-md-3">
        <input type="date" class="form-control form-control-lg" name="date_from" value="<?=htmlspecialchars($date_from)?>">
      </div>
      <div class="col-md-3">
        <input type="date" class="form-control form-control-lg" name="date_to" value="<?=htmlspecialchars($date_to)?>">
      </div>
      <div class="col-md-3">
        <div class="search-container d-flex">
          <input name="q" class="form-control form-control-lg" placeholder="Search leads..." value="<?=htmlspecialchars($q)?>">
          <button type="submit" class="btn btn-lg">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- METRICS -->
  <div class="row g-3 mb-4">
    <div class="col-md-3">
      <div class="card p-3 metric text-center">
        <div class="icon mb-3" style="font-size: 2.5rem; color: #4361ee;">
          <i class="fas fa-star"></i>
        </div>
        <small class="text-uppercase text-muted">Primary Leads</small>
        <h3><?= $count_primary ?></h3>
        <a href="?type=primary" class="btn mt-2">View Leads</a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card p-3 metric text-center">
        <div class="icon mb-3" style="font-size: 2.5rem; color: #4cc9f0;">
          <i class="fas fa-bullseye"></i>
        </div>
        <small class="text-uppercase text-muted">Secondary Leads</small>
        <h3><?= $count_secondary ?></h3>
        <a href="?type=secondary" class="btn mt-2">View Leads</a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card p-3 metric text-center">
        <div class="icon mb-3" style="font-size: 2.5rem; color: #f72585;">
          <i class="fas fa-layer-group"></i>
        </div>
        <small class="text-uppercase text-muted">Tertiary Leads</small>
        <h3><?= $count_tertiary ?></h3>
        <a href="?type=tertiary" class="btn mt-2">View Leads</a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card p-3 metric text-center">
        <div class="icon mb-3" style="font-size: 2.5rem; color: #2ec4b6;">
          <i class="fas fa-network-wired"></i>
        </div>
        <small class="text-uppercase text-muted">Total Leads</small>
        <h3><?= $count_total ?></h3>
        <a href="?type=all" class="btn mt-2">View All</a>
      </div>
    </div>
  </div>

  <!-- LEADS TABLE -->
  <div class="card custom-lead-card">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0"><i class="fas fa-database me-2"></i><?= ucfirst($type) ?> Leads</h4>
        <div class="d-flex">
          <a href="./register.php" class="btn btn-sm btn-primary"><i class="fas fa-plus me-1"></i>Add New</a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th scope="col" class="text-center">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">State</th>
              <th scope="col">City</th>
              <th scope="col" class="text-center">Occurrences</th>
              <th scope="col">Created</th>
              <th scope="col">Source</th>
              <th scope="col" class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($res && $res->num_rows) {
                $i = 1;
                while ($row = $res->fetch_assoc()) {
                    $source = $row['source'] ?? ucfirst($type);
                    $table_name = strtolower($source) . '_leads';
                    echo "<tr>
                            <td class='text-center fw-bold'>{$i}</td>
                            <td>".htmlspecialchars($row['name'])."</td>
                            <td>".htmlspecialchars($row['email'])."</td>
                            <td>".htmlspecialchars($row['mobile'])."</td>
                            <td>".htmlspecialchars($row['state'])."</td>
                            <td>".htmlspecialchars($row['city'])."</td>
                            <td class='text-center'>".htmlspecialchars($row['occurrences'])."</td>
                            <td>".htmlspecialchars($row['created_at'])."</td>
                            <td>".htmlspecialchars($source)."</td>
                            <td class='text-center'>
                              <div class='d-flex justify-content-center gap-2'>
                                <a href='edit_lead.php?table=$table_name&id={$row['id']}' class='btn action-btn action-btn-primary'>
                                  <i class='fas fa-edit me-1'></i>Edit
                                </a>
                                <a href='delete_lead.php?table=$table_name&id={$row['id']}' 
                                   onclick='return confirm(\"Are you sure you want to delete this lead?\")' 
                                   class='btn action-btn action-btn-danger'>
                                  <i class='fas fa-trash-alt me-1'></i>Delete
                                </a>
                              </div>
                            </td>
                          </tr>";
                    $i++;
                }
            } else {
                echo "<tr>
                        <td colspan='10' class='text-center py-4'>
                          <div class='text-center'>
                            <i class='fas fa-database fa-3x text-muted mb-3'></i>
                            <h5>No leads found</h5>
                            <p class='text-muted'>Try adjusting your search or filter criteria</p>
                          </div>
                        </td>
                      </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
      <!-- Pagination -->
      <nav class="mt-4">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
              <i class="fas fa-chevron-left"></i>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">
              <i class="fas fa-chevron-right"></i>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Add slight delay to search for better UX
  document.querySelector('input[name="q"]').addEventListener('input', function(e) {
    const form = e.target.closest('form');
    clearTimeout(this.delay);
    this.delay = setTimeout(() => form.submit(), 300);
  });
  
  // Responsive table improvements
  document.querySelectorAll('.table-responsive').forEach(el => {
    const wrapper = document.createElement('div');
    wrapper.classList.add('table-responsive');
    el.parentNode.insertBefore(wrapper, el);
    wrapper.appendChild(el);
  });
</script>
</body>
</html>