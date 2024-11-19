<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Employee</title>
  <link rel="stylesheet" href="css/components.css">

</head>

<body>

  <body>
    <?php $getEmployeeId = getEmployeeId($pdo, $_GET['employee_id']); ?>
    <h1>Delete Employee</h1>
    <form action="core/handleForms.php" method="POST">
      <input type="hidden" name="employee_id" value="<?php echo $getEmployeeId['employee_id']; ?>">
      <p>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" value="<?php echo $getEmployeeId['last_name']; ?>" readonly>
      </p>

      <p>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" value="<?php echo $getEmployeeId['first_name']; ?>" readonly>
      </p>

      <p>
        <label for="occupation">Occupation:</label>
        <input type="text" name="occupation" value="<?php echo $getEmployeeId['occupation']; ?>" readonly>
      </p>

      <p>
        <label for="years_of_experience">Years of Experience:</label>
        <input type="text" name="years_of_experience" value="<?php echo $getEmployeeId['years_of_experience']; ?>"
          readonly>
      </p>

      <p>
        <label for="expertise">Field of Care:</label>
        <input type="text" name="expertise" value="<?php echo $getEmployeeId['expertise']; ?>" readonly>
      </p>

      <p>
        <input type="submit" name="deleteEmployeeBtn" value="Delete">
      </p>

      <p>
        <a href="index.php">Back to Home</a>
      </p>
    </form>
  </body>
</body>

</html>