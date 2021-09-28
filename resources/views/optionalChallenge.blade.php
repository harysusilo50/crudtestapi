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
                    <form class="text-center" action="{{route('process')}}" method="post">
                        @csrf
                        <div class="row mt-1">
                            <div class="col">
                                <label class="form-label" for="rahasia">Input Nomor Rahasia :</label>
                            </div>
                            <div class="col-7">
                                <input class="form-control form-control-sm" type="text" name="rahasia" id="rahasia">
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col">
                                <label class="form-label" for="tebakan">Input Nomor Tebakan :</label>
                            </div>
                            <div class="col-7">
                                <input class="form-control form-control-sm" type="text" name="tebakan" id="tebakan">
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block w-50" type="submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
