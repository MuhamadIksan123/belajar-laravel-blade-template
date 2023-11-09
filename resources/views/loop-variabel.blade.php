<html>
    <body>
        @foreach($hobbies as $hobby)
            <p>{{$loop->iteration;}}. {{$hobby}}</p>
        @endforeach
    </body>
</html>