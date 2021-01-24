@php $allCategories=\App\Models\cinema\categories::all();                             @endphp

<html>
<head>
    <title>newFilm</title>
</head>
<body>
<form method="Post" action="/store" enctype="multipart/form-data">

    @csrf
<label>add_film</label>
<input type="text" name="film" placeholder="film name"><br><br>
    <label>producer</label>
    <input type="text" name="producer" placeholder="producer"><br><br>
<label>year</label>
<select name="year">
    @for($j=2021;$j>0;$j--)
    <option value="{{ $j }}" > {{ $j }}</option>
    @endfor
</select>
    <select name="category">
        @foreach($allCategories as $category)
            {{$categoryName=$category->name}}
            {{$categoryId=$category->id}}
            <option value="{{ $categoryId }}" > {{ $categoryName }}</option>
        @endforeach
    </select>
<br><br>
<label>description</label><br>
<textarea PLACEHOLDER="description" name="description" style="width: 300px ; height: 100px"></textarea>
<br><br>
    <br><br>
    <label>add_foto</label><br>
    <input type="file" name="image">
<input type="submit" value="addFilm">
</form>
</body>
</html>
