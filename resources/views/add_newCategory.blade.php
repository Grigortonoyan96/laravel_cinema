<html>
<head>
    <title>Add new Category</title>
</head>
<body>
<form method="Post" action="">
    @csrf
    <input type="text" name="Category">
    <input type="submit" value="newCategory">
</form>
</body>
</html>

@php
    if(isset($_POST['Category']) && $_POST['Category'] != "" ){
    \DB::insert("INSERT INTO categories (name) values ('".$_POST['Category']."')");
}
@endphp
