<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Caesar Cipher</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <main>
        <div class="px-4 py-5 my-5 text-center">
            <h2 class="display-5 fw-bold"> Code Message</h2>
            <div class="col-lg-6 mx-auto">
                <form id="form-code" action="{{url('code')}}" method="post">
                    @csrf
                    <input type="text" class="form-control" id="formGroupExampleInput"  name="CodeMessage" placeholder="Insert Your Message">
                    <button type="button" class="btn btn-secondary btn-dark btn-block" name="CodeButton" id="saveCodeResult">Code</button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                    </svg>
                    <input type="text" class="form-control" id="codeMessageResult" name="codeMessageResult" placeholder="Code Message">
                </form>
            </div>
        </div>
        <hr class="rounded">
        <div class="px-4 pt-5 my-5 text-center">
            <h2 class="display-5 fw-bold"> Decode Message</h2>
            <div class="col-lg-6 mx-auto">
                <form id="form-decode" action="{{url('decode')}}" method="post">
                    @csrf
                    <input type="text" class="form-control" id="formGroupExampleInput" name="DecodeMessage" placeholder="Insert Your Message">
                    <button type="button" class="btn btn-secondary btn-dark btn-block"  name="DecodeButton" id="saveDecodeResult">Decode</button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                    </svg>
                    <input type="text" class="form-control" id="decodeMessageResult" name="decodeMessageResult" placeholder="Decode Message">
                </form>
            </div>
        </div>
    </main>
    <script src="js/index.js">  </script>
</body>
</html>
