@extends('layout.navigation')

@section('title', 'Contoh')

@section('content')
    @include('partials.sidebar')
    <div class="p-5 w-100">

        {{-- Container, Row, dan Col --}}
        <div class="mb-4">
            <h4>Container, Row, dan Col</h4>
            <div class="container d-flex flex-column justify-content-center align-items-center p-3 bg-danger">

                <h5 class="text-white my-3">1. Row dengan col berukuran otomatis</h5>
                <div class="row w-100 p-3 m-2 bg-warning">
                    <div class="col p-3 m-2 text-white bg-success">
                        Col
                    </div>
                    <div class="col p-3 m-2 text-white bg-success">
                        Col
                    </div>
                    <div class="col p-3 m-2 text-white bg-success">
                        Col
                    </div>
                </div>

                <h5 class="text-white my-3">2. Row dengan col berukuran atur sendiri</h5>
                <div class="row w-100 p-3 bg-warning">
                    <div class="col-2 p-3 m-2 text-white bg-success">
                        Col-2
                    </div>
                    <div class="col-3 p-3 m-2 text-white bg-success">
                        Col-3
                    </div>
                    <div class="col-4 p-3 m-2 text-white bg-success">
                        Col-4
                    </div>
                </div>

                <h5 class="text-white my-3">3. Row dengan col berukuran atur sendiri (full)</h5>
                <div class="row w-100 p-3 bg-warning">
                    <div class="col-3 p-3 m-2 text-white bg-success">
                        Col-3
                    </div>
                    <div class="col-4 p-3 m-2 text-white bg-success">
                        Col-4
                    </div>
                    <div class="col-5 p-3 m-2 text-white bg-success">
                        Col-5
                    </div>
                </div>

                <h5 class="text-white my-3">4. Row dengan col berukuran atur sendiri (full)</h5>
                <div class="row w-100 bg-warning">
                    <div class="col-3 border border-warning text-white bg-success">
                        Col-3
                    </div>
                    <div class="col-4 border border-warning text-white bg-success">
                        Col-4
                    </div>
                    <div class="col-5 border border-warning text-white bg-success">
                        Col-5
                    </div>
                </div>
            </div>
        </div>

        {{-- Flex --}}
        <div class="mb-4">
            <h4>Flex</h4>
            <div class="container d-flex flex-column justify-content-center align-items-center p-3 bg-danger">

                <h5 class="text-white my-3">1. Tanpa flex</h5>
                <div class="w-100 p-3 bg-warning">
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                </div>

                <h5 class="text-white my-3">2. Pake flex (d-flex)</h5>
                <div class="w-100 p-3 bg-warning d-flex">
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                </div>

                <h5 class="text-white my-3">3. Pake flex + col (d-flex)</h5>
                <div class="w-100 p-3 bg-warning d-flex">
                    <div class="col-2 p-3 m-2 text-white bg-success">
                        Col-2
                    </div>
                    <div class="col-3 p-3 m-2 text-white bg-success">
                        Col-3
                    </div>
                    <div class="col-4 p-3 m-2 text-white bg-success">
                        Col-4
                    </div>
                </div>

                <h5 class="text-white my-3">4. Pake flex terus mau ditaruh tengah (d-flex justify-content-center)</h5>
                <div class="w-100 p-3 bg-warning d-flex justify-content-center">
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                </div>

                <h5 class="text-white my-3">5. Pake flex terus mau ditaruh pinggir kanan (d-flex justify-content-end)</h5>
                <div class="w-100 p-3 bg-warning d-flex justify-content-end">
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                </div>

                <h5 class="text-white my-3">6. Pake flex terus mau dipisah rata (d-flex justify-content-between)
                </h5>
                <div class="w-100 p-3 bg-warning d-flex justify-content-between">
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success">
                        Div
                    </div>
                </div>

                <h5 class="text-white my-3">7. Pake flex terus mau disejajarin (d-flex align-items-center)
                </h5>
                <div class="w-100 p-3 bg-warning d-flex align-items-center" style="height: 300px">
                    <div class="p-3 m-2 text-white bg-success" style="height: 100px">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success" style="height: 150px">
                        Div
                    </div>
                    <div class="p-3 m-2 text-white bg-success" style="height: 70px">
                        Div
                    </div>
                </div>
            </div>
        </div>

        {{-- Button --}}
        <div class="mb-4">
            <h4>Button</h4>
            <div class="my-2 row gap-4">
                <div class="col">
                    <h5>Tombol Biru</h5>
                    <button class="btn-blue">btn-blue</button>
                </div>
                <div class="col">
                    <h5>Tombol Orange</h5>
                    <button class="btn-orange">btn-orange</button>
                </div>
                <div class="col">
                    <h5>Tombol Abu-Abu</h5>
                    <button class="btn-gray">btn-gray</button>
                </div>
            </div>
            <div class="my-2 row gap-4">
                <div class="col">
                    <h5>Tombol Biru kecil</h5>
                    <button class="btn-blue text-xs">btn-blue text-xs</button>
                </div>
                <div class="col">
                    <h5>Tombol Orange kecil</h5>
                    <button class="btn-orange text-xs">btn-orange text-xs</button>
                </div>
                <div class="col">
                    <h5>Tombol Abu-Abu kecil</h5>
                    <button class="btn-gray text-xs">btn-gray text-xs</button>
                </div>
            </div>
            <div class="my-2 row gap-4">
                <div class="col">
                    <h5>Tombol Biru extra kecil</h5>
                    <button class="btn-blue text-xs p-1 px-2">btn-blue text-xs p-1 px-2</button>
                </div>
                <div class="col">
                    <h5>Tombol Orange extra kecil</h5>
                    <button class="btn-orange text-xs p-1 px-2">btn-orange text-xs p-1 px-2</button>
                </div>
                <div class="col">
                    <h5>Tombol Abu-Abu extra kecil</h5>
                    <button class="btn-gray text-xs p-1 px-2">btn-gray text-xs p-1 px-2</button>
                </div>
            </div>
            <div class="my-2 row gap-4">
                <div class="col">
                    <h5>Tombol Biru extra kecil + rounded</h5>
                    <button class="btn-blue text-xs p-1 px-2 rounded-pill">btn-blue text-xs p-1 px-2 rounded-pill</button>
                </div>
                <div class="col">
                    <h5>Tombol Orange extra kecil + rounded</h5>
                    <button class="btn-orange text-xs p-1 px-2 rounded-pill">btn-orange text-xs p-1 px-2
                        rounded-pill</button>
                </div>
                <div class="col">
                    <h5>Tombol Abu-Abu extra kecil + rounded</h5>
                    <a class="btn-gray text-xs p-1 px-2 rounded-pill">btn-gray text-xs p-1 px-2 rounded-pill</a>
                </div>
            </div>
        </div>
    </div>
@endsection
