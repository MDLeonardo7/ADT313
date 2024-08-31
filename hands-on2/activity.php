<h1>Hands-on Activity</h1>

<?php

$table = array(

    "header" => array(
        "StudentID",
        "Firstname",
        "Middlename",
        "Lastname",
        "Section",
        "Course",
        "YearLevel"

    ),
    "body" => [      
        array(
        "firstname" => "Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "yearLevel" => "YearLevel"
        ),
        array(
        "firstname" => "Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "yearLevel" => "YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearLevel" => "YearLevel"
            ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearLevel" => "YearLevel"
            ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearLevel" => "YearLevel"
             ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearLevel" => "YearLevel"
            ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearLevel" => "YearLevel"
            ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearLevel" => "YearLevel"
            ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearLevel" => "YearLevel"
            ),    

    ],
)


?>

<table border = "1">
    <thead>
           <?php for($i = 0; $i < count ($table['header']); $i++) { ?>
              <th><?php echo $table['header'][$i]; ?></th>
           <?php } ?>

        <th><?php echo $table['header'][0] ?></th>
    </thead>
    <tbody>
        <tr>
            <td>123</td>
            <td><?php echo $table['body'][0]['firstname'] ?></td>
        </tr>
    </tbody>
</table>