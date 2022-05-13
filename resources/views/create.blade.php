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
                            <div class="container mt-4 mb-4">
                                <!--Bootstrap classes arrange web page components into columns and rows in a grid -->
                                <div class="row justify-content-md-center">
                                    <div class="col-md-12 col-lg-8">
                                        <h1 class="h2 mb-4">Submit issue</h1>
                                        <label>Describe the issue in detail</label>
                                        <div class="form-group">
                                            <textarea id="editor"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>

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
                                    <button type="button" class="btn-gray">
                                        Save as Draft
                                    </button>
                                    <button type="submit" class="btn-blue">
                                        Publish
                                    </button>
                                </div>

                        </div>
                        <div class="col-sm-4">.col-sm-4</div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
