<table>
    @foreach($paginator as $film)
    <tr>
        <td> {{ $film->name }} </td>
        <td> {{$film->year}}</td>
        <td> {{$film->description}}</td>
        @php
            $selectFilmCategory=\DB::table('film_category')->where('film_id', $film->id)->first();
            $category_id=$selectFilmCategory->category_id;
            $selectCategory=\DB::table('categories')->where('id', $category_id)->first();
            $nameCategory=$selectCategory->name;

        @endphp
        <td> {{$nameCategory}}</td>
    </tr>
    @endforeach
</table>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                {{$paginator->links()}}
            </div>
        </div>
    </div>
</div>
