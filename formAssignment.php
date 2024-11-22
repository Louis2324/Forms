<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stname = $_POST['st-name'];
    $stemail = $_POST['st-email'];
    $NE = $_POST['NE-code'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $por = $_POST['por'];
    $pname = $_POST['p-name'];
    $pnbr = $_POST['p-nbr'];
    $pemail = $_POST['p-email'];
    $school = $_POST['school'];
    $course = $_POST['course'];

    echo <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
        }
    </style>
    </head>
    <body>
    <h1>Student Details</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>Province of Residence</th>
            <th>NE Code</th>
            <th>Guardian's Name</th>
            <th>Guardian's Contact</th>
            <th>Guardian's Email</th>
            <th>Former School</th>
            <th>Combination</th>
        </tr>
        <tr>
            <td>$stname</td>
            <td>$gender</td>
            <td>$dob</td>
            <td>$stemail</td>
            <td>$por</td>
            <td>$NE</td>
            <td>$pname</td>
            <td>$pnbr</td>
            <td>$pemail</td>
            <td>$school</td>
            <td>$course</td>
        </tr>
    </table>
    </body>
    </html>
HTML;
}
?>
