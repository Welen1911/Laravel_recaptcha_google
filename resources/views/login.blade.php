<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" value="{{ old('name') }}"><br>
        <label for="password">Pass: </label>
        <input type="password" name="password" ><br>
        {!! NoCaptcha::renderJs() !!}
        {!! NoCaptcha::display() !!} <br>
        <button>Submit</button>
    </form>

</body>

</html>
