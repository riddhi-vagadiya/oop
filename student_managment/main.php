
<?php
require 'studentManager.php';
$manager = new StudentManager();

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    if ($name && $email && $age) {
        $student = new Student($name, $email, $age);
        $manager->saveStudent($student);
        echo "<script>alert('Student added successfully');</script>";
    } else {
        echo "<script>alert('All fields are required');</script>";
    }
}
$students = $manager->getAllStudents();
?>

<html>
<head>
    <title>Simple Student App</title>
</head>
<body>
    <h2>Add Student</h2>
    <form method="post">
        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Age:</label><br>
        <input type="number" name="age"><br><br>

        <input type="submit" name="save" value="Save">
    </form>

       <h2>Student List</h2>
    <ul>
        <?php foreach ($students as $student): ?>
            <?php $data = $student->getData(); ?>
            <li><?php echo "{$data['name']} ({$data['age']} yrs) - {$data['email']}"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
