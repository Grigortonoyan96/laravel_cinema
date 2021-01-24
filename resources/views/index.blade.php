<table>
    @foreach($paginator as $film)
    <tr>
        <td> {{ $film->name }} </td>
       {{-- <td> {{$film->year}}</td>
        <td> {{$film->description}}</td>--}}
       {{-- @php
            $selectFilmCategory=\DB::table('film_category')->where('film_id', $film->id)->first();
            $categoryId=$selectFilmCategory->category_id;
            $selectCategory=\DB::table('categories')->where('id', $categoryId)->first();
            $nameCategory=$selectCategory->name;
            $selectFilmproducer=\DB::table('film_producer')->where('film_id', $film->id)->first();
            $producerId=$selectFilmproducer->producer_id;
            $nameproducer=\DB::table('producer')->where('id', $producerId)->first();
        @endphp
        <td> {{$nameCategory}}</td>
        <td> {{$nameproducer->name}}</td>--}}
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
