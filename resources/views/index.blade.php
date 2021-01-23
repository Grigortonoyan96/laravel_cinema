<table>
    @foreach($paginator as $film)
    <tr>
        <td> {{ $film->name }} </td>
        <td> {{$film->year}}</td>
        <td> {{$film->description}}</td>
        @php
            $selectFilmCategory=\DB::table('film_category')->where('film_id', $film->id)->first();
            $categoryId=$selectFilmCategory->category_id;
            $selectCategory=\DB::table('categories')->where('id', $categoryId)->first();
            $nameCategory=$selectCategory->name;
            $selectFilmRejisor=\DB::table('film_rejisor')->where('film_id', $film->id)->first();
            $rejisorId=$selectFilmRejisor->rejisor_id;
            $nameRejisor=\DB::table('rejisors')->where('id', $rejisorId)->first();
        @endphp
        <td> {{$nameCategory}}</td>
        <td> {{$nameRejisor->name}}</td>
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
