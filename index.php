<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Healthcare Management System</title>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <div class="container">
    <!-- Form on the left side -->
    <div class="form-container">
      <h1>HEALTHCARE EMPLOYEE MANAGEMENT SYSTEM</h1>
      <form action="core/handleForms.php" method="POST">
        <h3>Add Employee</h3>
        <p>
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" required>
        </p>
        <p>
          <label for="first_name">First Name</label>
          <input type="text" name="first_name" required>
        </p>
        <p>
          <label for="occupation">Occupation</label>
          <input type="text" name="occupation" required>
        </p>
        <p>
          <label for="years_of_experience">Years of Experience</label>
          <input type="text" name="years_of_experience" required>
        </p>
        <p>
          <label for="expertise">Field Of Care</label>
          <input type="text" name="expertise" required>
        </p>
        <div class="submit-container">
          <input type="submit" name="addEmployeeBtn" value="Submit">
        </div>
      </form>
    </div>

    <!-- Search area on the right side -->
    <div class="search-container">
      <h2>Search Employee</h2>
      <form method="GET" action="">
        <input type="text" name="search" placeholder="Search by name or occupation"
          value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
        <button type="submit" name="searchEmployeeBtn">Search</button>
      </form>

      <?php if (isset($_GET['search']) && $_GET['search'] !== ''): ?>
        <form method="GET" action="">
          <button type="submit" name="clearSearch" class="clear-search-btn">Clear Queue</button>
        </form>
      <?php endif; ?>
    </div>
  </div>

  <!-- Employee Table at the bottom -->
  <div>
    <?php
    $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
    $showEmployeeRecords = showEmployeeRecords($pdo, $searchTerm);
    ?>
    <?php if ($showEmployeeRecords): ?>
      <div class="table-wrapper">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Occupation</th>
              <th>Years of Experience</th>
              <th>Field of Care</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($showEmployeeRecords as $employee): ?>
              <tr>
                <td><?php echo $employee['employee_id']; ?></td>
                <td><?php echo $employee['last_name']; ?></td>
                <td><?php echo $employee['first_name']; ?></td>
                <td><?php echo $employee['occupation']; ?></td>
                <td><?php echo $employee['years_of_experience']; ?></td>
                <td><?php echo $employee['expertise']; ?></td>
                <td>
                  <a href="update.php?employee_id=<?php echo $employee['employee_id']; ?>">Edit</a>
                  <a href="delete.php?employee_id=<?php echo $employee['employee_id']; ?>">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php else: ?>
        <p style="text-align: center;">No records found!</p>
      <?php endif; ?>
    </div>
  </div>

</body>

</html>