<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade</title>
    <style>

.no-border-style{
                    border-style: none;
                    overflow: visible !important;
                    border-collapse: collapse !important;
                    border: black 2px solid !important;
                    border-radius: 0px 0px 0px 0px !important;
                    td,th,tr{
                        border: black 2px solid !important;
                        border-radius: 0px 0px 0px 0px !important;
                    }
                }


        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            margin: 0;
        }

        .header {
            text-align: center;

        }

        .header>.title-header {
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin-bottom: -3px;
            margin-top: 0;
            font-size: 18px;
            letter-spacing: 0.5px;
        }

        .header>.sub-header {
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin-top: 0;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        .header>h3 {
            margin-top: 25px;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 0px;
            font-size: 12px;
            letter-spacing: 0.3px;
        }

        .header>.course {
            margin-top: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.3px;
            margin-bottom: 30px;
        }

        .run-date {
            text-align: left;
            font-size: 8px;
            color: black;
            margin-top: 35px;
            margin-left: 10px;
            font-weight: 400;
        }

        table {
            width:80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th {
            border: 1px solid black;
            text-align: center;
            font-size: 13.3px;
            font-weight: 700;
            padding: 0px;
            margin: 0px;

        }

        td {
            border: 1px solid black;
            text-align: center;
            font-size: 10.6px;
            padding: 0px 2px;
        }

        th {
            background-color: #ffffff;
            font-size: 13px;
        }

        .semester-row {
            font-weight: bold;
            text-align: left;
            background-color: #ffffff;
            font-size: 13px;
        }

        .black-cell {
            width: 15px;
            /* Adjust width */
            background-color: black;
        }

        .white-cell {
            width: 15px;
            /* Adjust width */
            background-color: #ffffff;
        }

        .align td:nth-child(4),
        .align td:nth-child(8) {
            text-align: left;

        }

        th:nth-child(1),
        td:nth-child(1) {
            width: 45px;
        }

        /* GRADE */
        th:nth-child(2),
        td:nth-child(2) {
            width: 85px;
        }

        /* COMPLETION */
        th:nth-child(3),
        td:nth-child(3) {
            width: 100px;
        }

        /* CODE (M_) */
        th:nth-child(4),
        td:nth-child(4) {
            width: 320px;
        }

        /* DESCRIPTION */
        th:nth-child(5),
        td:nth-child(5) {
            width: 65px;
            text-align: center;
        }

        /* UNITS */
        th:nth-child(6),
        td:nth-child(6) {
            width: 150px;
            text-align: center;
        }

        /* TERM TAKEN */
        th:nth-child(7),
        td:nth-child(7) {
            width: 250px;
        }

        /* PRE-REQUISITE / CO-REQUISITE */
        th:nth-child(8),
        td:nth-child(8) {
            width: 150px;
        }

        /* REMARKS */

        .yellow-row {
            background-color: #ffff00;
        }

        .yellow-cell {
            background-color: #ffff00;
            width: 15px;
        }

        .name {
            text-align: center;
            font-size: 13px;
            font-family: 'Times New Roman', Times, serif;
        }

        .note {
            text-align: left;
            font-size: 13px;
            font-weight: 700;
        }
    </style>
</head>


<body>
    @extends('layouts.layout')
@section('content')


    <div class="run-date" id="datetime">
    </div>

    <div class="header">
        <h2 class="title-header">PANGASINAN STATE UNIVERSITY</h2>
        <p class="sub-header">Alvear St., Lingayen, Pangasinan, Philippines</p>
        <h3>22-AC-0000 - Jomar Jacob</h3>
        <p class="course">BS Information Technology (ALM_BSIT 2021)</p>
    </div>

    <table class="table-bordered no-border-style">
     <!-- Semester Title Row -->
        <tr>
            <td colspan="9" class="semester-row">First Year, 1st Semester</td>
        </tr>

        <!-- Table Headers -->
        <tr>
            <th>GRADE</th>
            <th>COMPLETION</th>
            <th>CODE (M_)</th>
            <th>DESCRIPTION</th>
            <th>UNITS</th>
            <th>TERM TAKEN</th>
            <th>PRE-REQUISITE / CO-REQUISITE</th>
            <th>REMARKS</th>
            <th></th>
        </tr>

        <!-- Table Data from Controller -->
        <?php foreach ($firstYearFirstSem as $grade): ?>
        <tr class="align">
            <td><?php echo $grade['grade']; ?></td>
            <td><?php echo $grade['completion']; ?></td>
            <td><?php echo $grade['code']; ?></td>
            <td><?php echo $grade['description']; ?></td>
            <td><?php echo $grade['units']; ?></td>
            <td><?php echo $grade['term']; ?></td>
            <td><?php echo $grade['prerequisite']; ?></td>
            <td><?php echo $grade['remarks']; ?></td>
            <td class="<?php echo $grade['remarks'] == 'Passed' ? 'black-cell' : ''; ?>"></td> <!-- Separate black cell column -->
        </tr>
        <?php endforeach; ?>
    </table>

    <table class="table-bordered  no-border-style">
        <!-- Semester Title Row -->
        <tr>
            <td colspan="9" class="semester-row">First Year, 2nd Semester</td>
        </tr>

        <!-- Table Headers -->
        <tr>
            <th>GRADE</th>
            <th>COMPLETION</th>
            <th>CODE (M_)</th>
            <th>DESCRIPTION</th>
            <th>UNITS</th>
            <th>TERM TAKEN</th>
            <th>PRE-REQUISITE / CO-REQUISITE</th>
            <th>REMARKS</th>
            <th></th>
        </tr>

        <!-- Table Data from Controller -->
        <?php foreach ($firstYearSecondSem as $grade): ?>
        <tr class="align">
            <td><?php echo $grade['grade']; ?></td>
            <td><?php echo $grade['completion']; ?></td>
            <td><?php echo $grade['code']; ?></td>
            <td><?php echo $grade['description']; ?></td>
            <td><?php echo $grade['units']; ?></td>
            <td><?php echo $grade['term']; ?></td>
            <td><?php echo $grade['prerequisite']; ?></td>
            <td><?php echo $grade['remarks']; ?></td>
            <td class="<?php echo $grade['remarks'] == 'Passed' ? 'black-cell' : ''; ?>"></td> <!-- Separate black cell column -->
        </tr>
        <?php endforeach; ?>
    </table>

    <table class="table-bordered  no-border-style">
        <!-- Semester Title Row -->
        <tr>
            <td colspan="9" class="semester-row">Second Year, 1st Semester</td>
        </tr>

        <!-- Table Headers -->
        <tr>
            <th>GRADE</th>
            <th>COMPLETION</th>
            <th>CODE (M_)</th>
            <th>DESCRIPTION</th>
            <th>UNITS</th>
            <th>TERM TAKEN</th>
            <th>PRE-REQUISITE / CO-REQUISITE</th>
            <th>REMARKS</th>
            <th></th>
        </tr>

        <!-- Table Data from Controller -->
        <?php foreach ($secondYearFirstSem as $grade): ?>
        <tr class="align">
            <td><?php echo $grade['grade']; ?></td>
            <td><?php echo $grade['completion']; ?></td>
            <td><?php echo $grade['code']; ?></td>
            <td><?php echo $grade['description']; ?></td>
            <td><?php echo $grade['units']; ?></td>
            <td><?php echo $grade['term']; ?></td>
            <td><?php echo $grade['prerequisite']; ?></td>
            <td><?php echo $grade['remarks']; ?></td>
            <td class="<?php echo $grade['remarks'] == 'Passed' ? 'black-cell' : ''; ?>"></td> <!-- Separate black cell column -->
        </tr>
        <?php endforeach; ?>
    </table>

    <table class="table-bordered  no-border-style">
        <!-- Semester Title Row -->
        <tr>
            <td colspan="9" class="semester-row">Second Year, 2nd Semester</td>
        </tr>

        <!-- Table Headers -->
        <tr>
            <th>GRADE</th>
            <th>COMPLETION</th>
            <th>CODE (M_)</th>
            <th>DESCRIPTION</th>
            <th>UNITS</th>
            <th>TERM TAKEN</th>
            <th>PRE-REQUISITE / CO-REQUISITE</th>
            <th>REMARKS</th>
            <th></th>
        </tr>

        <!-- Table Data from Controller -->
        <?php foreach ($secondYearSecondSem as $grade): ?>
        <tr class="align <?php echo $grade['code'] == 'ALM_PE 4' ? 'yellow-row' : ''; ?>">
            <td><?php echo $grade['grade']; ?></td>
            <td><?php echo $grade['completion']; ?></td>
            <td><?php echo $grade['code']; ?></td>
            <td><?php echo $grade['description']; ?></td>
            <td><?php echo $grade['units']; ?></td>
            <td><?php echo $grade['term']; ?></td>
            <td><?php echo $grade['prerequisite']; ?></td>
            <td><?php echo $grade['remarks']; ?></td>
            <td class="<?php
            echo empty($grade['grade']) && empty($grade['remarks']) ? 'yellow-cell' : (empty($grade['remarks']) ? 'white-cell' : ($grade['remarks'] == 'Passed' || $grade['remarks'] == 'Subject Taken' ? 'black-cell' : ''));
            ?>"></td>


        </tr>
        <?php endforeach; ?>
    </table>

    <table class="table-bordered  no-border-style">
        <!-- Semester Title Row -->
        <tr>
            <td colspan="9" class="semester-row">Third Year, 1st Semester</td>
        </tr>

        <!-- Table Headers -->
        <tr>
            <th>GRADE</th>
            <th>COMPLETION</th>
            <th>CODE (M_)</th>
            <th>DESCRIPTION</th>
            <th>UNITS</th>
            <th>TERM TAKEN</th>
            <th>PRE-REQUISITE / CO-REQUISITE</th>
            <th>REMARKS</th>
            <th></th>
        </tr>

        <!-- Table Data from Controller -->
        <?php foreach ($thirdYearFirstSem as $grade): ?>
        <tr class="align">
            <td><?php echo $grade['grade']; ?></td>
            <td><?php echo $grade['completion']; ?></td>
            <td><?php echo $grade['code']; ?></td>
            <td><?php echo $grade['description']; ?></td>
            <td><?php echo $grade['units']; ?></td>
            <td><?php echo $grade['term']; ?></td>
            <td><?php echo $grade['prerequisite']; ?></td>
            <td><?php echo $grade['remarks']; ?></td>
            <td class="<?php echo $grade['remarks'] == 'Passed' ? 'black-cell' : ''; ?>"></td> <!-- Separate black cell column -->


        </tr>
        <?php endforeach; ?>
    </table>

    <table class="table-bordered  no-border-style">
        <!-- Semester Title Row -->
        <tr>
            <td colspan="9" class="semester-row">Third Year, 2nd Semester</td>
        </tr>

        <!-- Table Headers -->
        <tr>
            <th>GRADE</th>
            <th>COMPLETION</th>
            <th>CODE (M_)</th>
            <th>DESCRIPTION</th>
            <th>UNITS</th>
            <th>TERM TAKEN</th>
            <th>PRE-REQUISITE / CO-REQUISITE</th>
            <th>REMARKS</th>
            <th></th>
        </tr>

        <!-- Table Data from Controller -->
        <?php foreach ($thirdYearSecondSem as $grade): ?>
        <tr class="align">
            <td><?php echo $grade['grade']; ?></td>
            <td><?php echo $grade['completion']; ?></td>
            <td><?php echo $grade['code']; ?></td>
            <td><?php echo $grade['description']; ?></td>
            <td><?php echo $grade['units']; ?></td>
            <td><?php echo $grade['term']; ?></td>
            <td><?php echo $grade['prerequisite']; ?></td>
            <td><?php echo $grade['remarks']; ?></td>
            <td class="<?php echo $grade['remarks'] == 'Passed' || $grade['remarks'] == 'Subject Taken' ? 'black-cell' : ''; ?>"></td> <!-- Separate black cell column -->


        </tr>
        <?php endforeach; ?>
    </table>


    <table class="table-bordered  no-border-style">
        <!-- Semester Title Row -->
        <tr>
            <td colspan="9" class="semester-row">Fourth Year, 1st Semester</td>
        </tr>

        <!-- Table Headers -->
        <tr>
            <th>GRADE</th>
            <th>COMPLETION</th>
            <th>CODE (M_)</th>
            <th>DESCRIPTION</th>
            <th>UNITS</th>
            <th>TERM TAKEN</th>
            <th>PRE-REQUISITE / CO-REQUISITE</th>
            <th>REMARKS</th>
            <th></th>
        </tr>

        <!-- Table Data from Controller -->
        <?php foreach ($fourthYearFirstSem as $grade): ?>
        <tr class="align <?php echo $grade ? 'yellow-row' : ''; ?>">
            <td><?php echo $grade['grade']; ?></td>
            <td><?php echo $grade['completion']; ?></td>
            <td><?php echo $grade['code']; ?></td>
            <td><?php echo $grade['description']; ?></td>
            <td><?php echo $grade['units']; ?></td>
            <td><?php echo $grade['term']; ?></td>
            <td><?php echo $grade['prerequisite']; ?></td>
            <td><?php echo $grade['remarks']; ?></td>
            <td class="<?php
            echo empty($grade['grade']) && empty($grade['remarks']) ? 'yellow-cell' : '';
            ?>"></td>
            <!-- Separate cell with yellow background if grade and remarks are blank -->


        </tr>
        <?php endforeach; ?>
    </table>


    <table class="table-bordered  no-border-style">
        <!-- Semester Title Row -->
        <tr>
            <td colspan="9" class="semester-row">Fourth Year, 2nd Semester</td>
        </tr>

        <!-- Table Headers -->
        <tr>
            <th>GRADE</th>
            <th>COMPLETION</th>
            <th>CODE (M_)</th>
            <th>DESCRIPTION</th>
            <th>UNITS</th>
            <th>TERM TAKEN</th>
            <th>PRE-REQUISITE / CO-REQUISITE</th>
            <th>REMARKS</th>
            <th></th>
        </tr>

        <!-- Table Data from Controller -->
        <?php foreach ($fourthYearSecondSem as $grade): ?>
        <tr class="align <?php echo $grade ? 'yellow-row' : ''; ?>">
            <td><?php echo $grade['grade']; ?></td>
            <td><?php echo $grade['completion']; ?></td>
            <td><?php echo $grade['code']; ?></td>
            <td><?php echo $grade['description']; ?></td>
            <td><?php echo $grade['units']; ?></td>
            <td><?php echo $grade['term']; ?></td>
            <td><?php echo $grade['prerequisite']; ?></td>
            <td><?php echo $grade['remarks']; ?></td>
            <td class="<?php
            echo empty($grade['grade']) && empty($grade['remarks']) ? 'yellow-cell' : '';
            ?>"></td>
            <!-- Separate cell with yellow background if grade and remarks are blank -->



        </tr>
        <?php endforeach; ?>
    </table>

    <h1 class="name"> JOMAR JACOB</h1>

    <table class="table-bordered  no-border-style">
        <!-- Semester Title Row -->
        <tr>
            <td colspan="6" class="semester-row">SUBJECT TAKEN WITH NO ALIAS IN THE CURRICULUM</td>
        </tr>

        <!-- Table Headers -->
        <tr>
            <th>GRADE</th>
            <th>COMPLETION</th>
            <th>CODE (M_)</th>
            <th>DESCRIPTION</th>
            <th>UNITS</th>
            <th>TERM TAKEN</th>

        </tr>

        <tr>
            <td colspan="6" class="note">
                <u class="underline">*** - Subject has been completed in the OLD Completion Grade Routine.Cannot specify
                    completion date.</u>
            </td>
        </tr>


    </table>


    <h1 class="name"> JOMAR JACOB </h1>

    <table class="table-bordered  no-border-style">
        <!-- Semester Title Row -->
        <tr>
            <td colspan="4" class="semester-row">SUBJECT DEFICIENCY</td>
        </tr>

        <!-- Table Headers -->
        <tr>
            <th style="width: 170px">CODE</th>
            <th style="width: 400px">DESCRIPTION</th>
            <th style="width: 50px">UNITS</th>
            <th style="width: 20px">TERM TAKEN</th>

        </tr>



        <tr>
            <td>ALM_PE 4</td>
            <td>Physical Activity Towards Health and Fitness 4</td>
            <td>2.00</td>
            <td>2S of 2023</td>
        </tr>



    </table>

    <script>
        const now = new Date();

        // Format YYYY-MM-DD HH:MM:SS
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0'); // Months are 0-based
        const day = String(now.getDate()).padStart(2, '0');
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');

        // Custom Code (Static Example: 22-AC-0673)
        const customCode = "22-AC-0673";

        // Final formatted string
        const formattedDateTime = `Run Date ${year}-${month}-${day} ${hours}:${minutes}:${seconds} ${customCode}`;

        // Display the formatted date and time
        document.getElementById('datetime').innerHTML = formattedDateTime;
    </script>





     @endsection
