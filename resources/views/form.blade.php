<html>
    <body>
        <input type="checkbox" @checked($user['premium']) value="Premium"> <br/>
        <input type="text" value="{{$user['name']}}" @readonly(!$user['admin']) /> <br>
    </body>
</html>