
@foreach($user as $item)
    <h1>{{$item->name}}</h1> <span>{{$item->email}}</span>
@endforeach
