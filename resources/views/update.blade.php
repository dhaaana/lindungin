@extends('layout.navigation')
@section('title', 'Contoh')

@section('content')
    @include('partials.sidebar')
    <div class='p-3 w-100'>
        <div class="row">
            <div class="col-12" style="background-color:;">
                <div class="container">
                    <div class="row mt-4">
                        <div class="col-md-8 col-md-offset-2">


                            <form action="" method="POST" class="bg-white p-4">

                                <div class="form-group">
                                    <label for="category">Category <span class="require"></span></label>
                                    <input class="form-control" list="datalistOptions" id="exampleDataList"
                                        placeholder="Choose Categories">
                                    <datalist id="datalistOptions">
                                        <option value="Kuliner">
                                        <option value="Kesehatan">
                                        <option value="Politik">
                                        <option value="Pendidikan">
                                        <option value="Sosial">
                                        <option value="Sosial">
                                        <option value="Musik">
                                        <option value="Mode">
                                        <option value="Film">
                                        <option value="Fotografi">
                                    </datalist>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title">Title <span class="require"></span></label>
                                    <input type="text" class="form-control" placeholder="Title" name="title" />
                                    <br>
                                    <label for="description">Content</label>
                                    <textarea rows="5" class="form-control" name="description"></textarea>
                                </div>
                                <br>
                                <div class="d-flex justify-content-end gap-2">
                                    <button type="submit" class="btn-blue">
                                        Save and Publish
                                    </button>
                                </div>

                        </div>
                        <div class="col-sm-4">.col-sm-4</div>
                    </div>
                </div>
            </div>
        @endsection
