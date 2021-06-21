<html>
    <head>
        <title>Recaptcha v3</title>

        {!! Recaptcha::renderJs('fa') !!}
    </head>

    <body>
        <form action="{{ url('recaptcha-page') }}" method="post">
            {!! csrf_field() !!}
            {!! Recaptcha::field('home', 'g-recaptcha-response', ['id' => 'recaptcha-id', 'class' => 'form-element'], 'recaptchaCallback') !!}

            <button type="submit">Submit</button>
        </form>

        @if($errors->any())
            @foreach($errors->all() as $key => $error)
                <p>{{ $key }} - {{ $error }}</p>
            @endforeach
        @endif


        <script>
            function recaptchaCallback(token) {
                console.log('token retrieved:');
                console.log(token);
            }
        </script>
    </body>
</html>
