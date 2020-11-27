<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail layout 4</title>
</head>
<body>
    <div class="title">
        <form method="POST">
            <table>
                <thead>
                    <tr>
                        <th>Thumb</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $id=1;
                        foreach($data as $value){
                    ?>
                    <tr>
                        <td><img src="./public/image/<?php echo $value['image'];?>" alt=""></td>
                        <td><?php echo $value['description'];?></td>
                    </tr>
                    <?php
                        $id++;
                        }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>