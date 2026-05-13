<?php
// api/search_patients.php
require_once '../includes/db.php';
require_once '../includes/auth_session.php';
check_auth();

$q = $_GET['q'] ?? '';
if (strlen($q) < 2) {
    echo json_encode([]);
    exit;
}

// Search only for active patients (Admitted or in Queue today)
$sql = "SELECT DISTINCT p.id, p.first_name, p.last_name, p.uhid 
        FROM patients p
        LEFT JOIN admissions a ON a.patient_id = p.id AND a.status = 'admitted'
        LEFT JOIN appointments app ON app.patient_id = p.id AND app.appointment_time::date = CURRENT_DATE AND app.status NOT IN ('completed', 'cancelled')
        WHERE (p.first_name ILIKE $1 OR p.last_name ILIKE $1 OR CAST(p.uhid AS TEXT) ILIKE $1)
          AND (a.id IS NOT NULL OR app.id IS NOT NULL)
        LIMIT 10";

$results = db_select($sql, ["%$q%"]);
header('Content-Type: application/json');
echo json_encode($results ?: []);
?>
