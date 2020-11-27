<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datail layout 2</title>
</head>

<body>
    <form method="post" action="./home/Data">
        <p>Title <input type="text" name="title"></p>
        <p>Description <br> <textarea name="description" cols="30" rows="10"></textarea></p>
        <p>Image <input type="file" name="image">
            <input name="Submit" type="submit" value="Upload image">
        </p>
        <p>Status <select name="status">
                <option value="">-----</option>
                <option value="Enbled">Enbled</option>
                <option value="UnEnbled">UnEnbled</option>
            </select></p>
        <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
    </form>
</body>

</html>