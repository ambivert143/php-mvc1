
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail layout 5</title>
</head>

<body>
    <input type="submit" name="back">
    <ul class="pagination">
        <p>Page <select name="page" id="">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="">---</option>
            </select></p>
        <li><a href="?pageno=1">
                <<</a> </li> <li class="<?php if ($pageno <= 1) {
                                            echo 'disabled';
                                        } ?>">
                    <a href="<?php if ($pageno <= 1) {
                                    echo '#';
                                } else {
                                    echo "?pageno=" . ($pageno - 1);
                                } ?>">
                        <</a> </li> <li class="<?php if ($pageno >= $total_pages) {
                                                    echo 'disabled';
                                                } ?>">
                            <a href="<?php if ($pageno >= $total_pages) {
                                            echo '#';
                                        } else {
                                            echo "?pageno=" . ($pageno + 1);
                                        } ?>">></a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">>></a></li>
    </ul>
</body>

</html>