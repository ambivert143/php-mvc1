<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD SP</title>
</head>

<body>
    <div class="content">
        <div class="addsp">
            <form method="POST">
                <table>
                    <tr>
                        <td>Ma San Pham</td>
                        <td><input type="text" name="masp"></td>
                    </tr>
                    <tr>
                        <td>Ten San Pham</td>
                        <td><input type="text" name="tensp"></td>
                    </tr>
                    <tr>
                        <td>Creat_at</td>
                        <td><input type="text" name="create_at"></td>
                    </tr>
                    <tr>
                        <td>Update_at</td>
                        <td><input type="text" name="update_at"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="add" value="Submit"></td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($success) && in_array('add_success', $success)){
                    echo "<p style='color:blue' >ADD OK</p>";
                }
            ?>
            <a href="index.php?controller=sanpham&action=list" class="list">List</a>
        </div>
    </div>
</body>

</html>