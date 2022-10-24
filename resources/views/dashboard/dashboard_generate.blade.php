<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @foreach ($operator as $op)
        <p>{{ $op->nama }}</p>
    @endforeach

    @foreach ($server_ilo as $server)
        <p>{{ $server[1] }} {{ $server[2] }} {{ $server[3] }}</p>
    @endforeach

    @foreach ($server_ipmi as $server)
        <p>{{ $server[1] }} {{ $server[2] }} {{ $server[3] }}</p>
    @endforeach

    @foreach ($server_xclarity as $server)
        <p>{{ $server[1] }} {{ $server[2] }} {{ $server[3] }}</p>
    @endforeach

    @foreach ($storage_netapp as $server)
        <p>{{ $server[1] }} {{ $server[2] }} {{ $server[3] }}</p>
    @endforeach

    <img src="{{ URL::to('/') }}/data_file/{{ $file_name }}" alt="" srcset="">
    
</body>
</html>