<html>
    <body>
        <p>
            @isset($name)
                Hello, My name is {{$name}}
            @endisset
        </p>
        <p>
            @empty($hobbies)
                I don't have any hobbies
            @endempty
        </p>
    </body>
</html>