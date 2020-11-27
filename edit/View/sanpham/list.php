<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="danhsach">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ma San Pham</th>
                    <th>Ten San Pham</th>
                    <th>Create_at</th>
                    <th>Update_at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id = 1;
                    foreach($data as $value){

                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $value['masp']?></td>
                    <td><?php echo $value['tensp']?></td>
                    <td><?php echo $value['create_at']?></td>
                    <td><?php echo $value['update_at']?></td>
                    <td>
                        <a onclick="return confirm('You want to edit?')" href="index.php?controller=sanpham&action=edit&id=<?php echo $value['id']; ?>">Edit</a>
                        <a onclick="return confirm('You want to delete?')" href="index.php?controller=sanpham&action=delete&id=<?php echo $value['id'];?>"title="Delete">Dels</a>
                    </td>
                </tr>
                <?php
                $id++;
                    }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>