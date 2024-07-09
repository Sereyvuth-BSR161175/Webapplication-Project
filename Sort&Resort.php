<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>បញ្ជីឈ្មោះសិស្សដោយប្រើ array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<div class="container">
<body>
    <table class="table table-striped">
        <tr>
            <th style="background-color:#99FFDB;">Name <a href="?order=<?php echo (isset($_GET['order'])&& $_GET['order']=='asc')?'desc':'asc';?>">^</a></th>
            <th style="background-color:#99FFDB;">Type</th>
            <th style="background-color:#99FFDB;">size</th>
        </tr>
        <?php 
            $students = array(
                array("name"=>"PowerPoint","Type"=>".pptx","size"=>"1.5MB"),
                array("name"=>"Xcode Book","Type"=>".docx","size"=>"2.5MB"),
                array("name"=>"Book","Type"=>".pdf","size"=>"3.5MB"),
                array("name"=>"Apple","Type"=>".jpg","size"=>"4.5MB"),
            );
            if ($_GET['order'] == 'asc'){
                asort($students);
                      
            }else{
                arsort($students);
            }
        
            foreach($students as $data){
        ?>
        <tr>
            <?php foreach($data as $k=>$v){ ?>
            <td><?php echo $v ?></td>
            <?php } ?>
            <td></td>
        </tr>
        <?php 
            }
        ?>
    </table>
</body>
</div>
</html>
