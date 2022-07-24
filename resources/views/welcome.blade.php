<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @foreach ($users as $user)
            <div>
                User : {{ $user->name }} <br>
                &nbsp; &nbsp; &nbsp; &nbsp;  Todolists : <br>
                @foreach ( $user->todoLists as $todolist )
                    <div style="background-color: aqua; margin-left: 4rem">
                        {{ $todolist }} <br>
                        &nbsp; &nbsp; &nbsp; &nbsp; Todo : 
                            @foreach ($todolist->todos as $todo)
                                <div style="background-color: red; margin-left: 4rem">
                                    {{ $todo }} <br>
                                    &nbsp; &nbsp; &nbsp; &nbsp; Todo : 
                                        
                                </div>
                            @endforeach
                    </div>
                @endforeach
            </div>
            <hr>
        @endforeach
    </body>
</html>
