<?php

require_once 'dbConfig.php';

function insertEmployeeRecord($pdo, $last_name, $first_name, $occupation, $years_of_experience, $expertise)
{
    $sql = "INSERT INTO employee (last_name, first_name, occupation, years_of_experience, expertise) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$last_name, $first_name, $occupation, $years_of_experience, $expertise])) {
        return true;  // Return true on success
    }
    return false; // Return false on failure
}

function showEmployeeRecords($pdo, $searchTerm = '')
{
    // Use prepared statement with LIKE for searching
    $sql = "SELECT * FROM employee WHERE last_name LIKE ? OR first_name LIKE ? OR occupation LIKE ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["%$searchTerm%", "%$searchTerm%", "%$searchTerm%"]);
    return $stmt->fetchAll();
}

function getEmployeeId($pdo, $employee_id)
{
    $sql = "SELECT * FROM employee WHERE employee_id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$employee_id])) {
        return $stmt->fetch();
    }
}

function updateEmployeeRecord($pdo, $last_name, $first_name, $occupation, $years_of_experience, $expertise, $employee_id)
{
    $sql = "UPDATE employee SET last_name = ?, first_name = ?, occupation = ?, years_of_experience = ?, expertise = ? WHERE employee_id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$last_name, $first_name, $occupation, $years_of_experience, $expertise, $employee_id])) {
        return true;  // Return true on success
    }
    return false; // Return false on failure
}

function deleteEmployeeRecord($pdo, $employee_id)
{
    $sql = "DELETE FROM employee WHERE employee_id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$employee_id])) {
        return true;  // Return true on success
    }
    return false; // Return false on failure
}

?>