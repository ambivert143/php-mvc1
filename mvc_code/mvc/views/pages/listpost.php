<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail layout 3</title>
</head>
<body>
    <form method="post">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Thumb</th>
                <th>Title</th>
                <th>Description</th>
                <th>Create_at</th>
                <th>Update_at</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $id=1;
                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><img src="./public/image/<?php echo $row['image']; ?>" alt=""></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['create_at']; ?></td>
                    <td><?php echo $row['update_at']; ?></td>
                </tr>
                <?php
                    $id++;
                }
                ?>
            </tbody>
        </table>
    </form>
</body>
</html>