<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="get" action="{{route('customer')}}">
            <div class="row">
                <div class="mb-3 col-4">
                    <label for="disabledSelect" class="form-label">Code</label>
                    <select id="disabledSelect" class="form-select" name="code">
                            <option value="">.....</option>
                        @foreach(getCountriesData() as $data)
                            <option value="{{$data['code']}}" @if(request('code') == $data['code']){{'selected'}} @endif>{{$data['code']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-4">
                    <label for="disabledSelect" class="form-label">State</label>
                    <select id="disabledSelect" class="form-select" name="state">
                        <option value="">.....</option>
                        <option value="ok" @if(request('state') == "ok"){{'selected'}} @endif>ok</option>
                        <option value="Nok" @if(request('state') == "Nok"){{'selected'}} @endif>Nok</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @if(request('state') || request('code'))
            <form class="mt-2" method="get" action="{{route('customer')}}">
                <button type="submit" class="btn btn-primary">Remove Filter</button>
            </form>
        @endif

        <table class="table table-bordered table-light table-striped m-auto my-3">
            <thead>
            <th>id</th>
            <th>name</th>
            <th>country</th>
            <th>phone</th>
            <th>valid</th>
        </thead>
            <tbody>
        @forelse($customers as $id => $customer)
            <tr>
                <td>{{++$id}}</td>
                <td>{{$customer['name']}}</td>
                <td>{{$customer['country']}}</td>
                <td>{{$customer['phone']}}</td>
                <td>{{$customer['valid']}}</td>
            </tr>
        @empty
            <div class="alert alert-primary text-center">
                No Data
            </div>
        @endforelse
        </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
