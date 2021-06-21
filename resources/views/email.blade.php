<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    </head>
<body>


<hr>
<small>*this QR code contains information to your vaccine info.</small>


<h3>
    {{-- Congratulations <strong>{{ $details['name'] }} </strong>! You have been partially vaccinated from COVID-19 --}}
</h3>
{{-- <p>Please secure this QR code as your vaccine passport:<p>
    <img src="{!!$message->embedData($details['qr'], 'QrCode.png', 'image/png')!!}"> --}}

    Hello <strong>{{ $details['name'] }} </strong>,
    <p>Welcome to ActivePass!</p>

    <p>Please secure this QR code as your vaccine passport:<p>
        <img src="{{ $message->embed(base_path() . '/public/storage/img/qr-code/img-'.$details['id'].'.png') }}" />
        <hr>
        <small>*this QR code contains information to your vaccine info.</small>

        <p>


            *ADDRESS*
            *BIRTHDATE*

            <b>{{$details['vaccine_brand']}}</b> Vaccine. on <b>{{$details['date_now']}}</b>
            *BATCH NUMBER*
            1st Dose: <b>{{$details['dose1']}}</b>

            *NAME OF PHYSICIAN*
            *LOC OF VACCINATION*

            <p>Your 2nd Dose is scheduled on <b>{{$details['dose1']}}</b>. You will be notified via email and SMS 1-Day before your scheduled 2nd vaccination.</p>

            <p>Click here to reschedule, please notify your health partner *Physician|clinic|hostpital*

                <p>IMPORTANT! PLEASE REPORT ANY SIDE EFFECTS ASAP</p>
                <p>Please reach your attending Physician *NAME OF PHYSICIAN*</p>
                <p>Contact number *8888-8888*</p>
                <p>You may also report your symptoms to our website *ACTIVE PASS REPORT SIDE EFFECT URL*</p>

                <p>For emergency services please contact *8888-88888*</p>

                <p>Stay safe and healthy!</p>

                <b>ACTIVE PASS</b>
            </p>

<footer class="footer py-3 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2021 Segovia Development</p>
    </div>
</footer>
</div>
</body>
</html>
