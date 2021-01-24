<a href="/index/create">add Film</a>
<table>
    @foreach($paginator as $film)
    <tr>
        <td> {{ $film->name }} </td>
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

