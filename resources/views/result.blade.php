<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Optional Challenge</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card m-5 w-50">
                <div class="card-header">
                    <b> OPTIONAL CHALLENGE BUT MATTER. </b>
                </div>
                <div class="card-body">
                    <p>{{count($true)}} Alhamdulillah {{count($false)}} 
                    Subhanallah (Angka @forelse ($true as $item)
                    {{$item}},
                    @empty
                    -
                    @endforelse
                    Alhamdulillah dan Angka
                    @forelse ($false as $item)
                    {{$item}},
                    @empty
                    - 
                    @endforelse
                    Subhanallah )
                </p>
                    <a href="{{route('home')}}"><button class="btn btn-sm btn-primary">Kembali</button></a>
                </div>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
