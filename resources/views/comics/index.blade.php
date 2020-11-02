<ul>
    @foreach ($comics as $comic)
    <li>
    <div>
        <h2>Title: {{$comic->title}}</h2>
        <img src="{{$comic->cover}}" alt="{{$comic->title}}">
    </div>
    </li>
    @endforeach
   </ul>