@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nom</th>
        <th scope="col">description</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dataBat as $item )
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nom}}</td>
        <td>{{$item->description}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection('content')