<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Detail layout 1</title>
</head>

<body>
    <div class="manager">
        <form method="POST">
            <h2>Danh sách sản phẩm</h2>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Create_at</th>
                        <th>Update_at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id = 1;
                    foreach ($data as $value) {
                    ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $value['title'] ?></td>
                            <td><?php echo $value['description'] ?></td>
                            <td><?php echo $value['create_at'] ?></td>
                            <td><?php echo $value['update_at'] ?></td>
                            <td>
                                <a onclick="return confirm('You want to edit')" href="">Edit</a>
                                <a onclick="return confirm('You want to delete')" href="">Delete</a>
                            </td>
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