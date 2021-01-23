<html>
<head>
    <title>Add new Category</title>
</head>
<body>
<form method="Post" action="/add_Category">
    @csrf
    <input type="text" name="Category">
    <input type="submit" value="newCategory">
</form>
</body>
</html>
