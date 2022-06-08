@extends('layout.navigation')
@section('title', 'Create Forum')

@section('content')
    @include('partials.sidebar')
    <div class='p-sm-3 w-100'>
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-9">
                    <!--Bootstrap classes arrange web page components into columns and rows in a grid -->
                    <form action="/create" method="POST" class="card p-4">
                        @csrf
                        <div class="form-group">
                            <label for="category" class="mb-2">Category <span class="require"></span></label>
                            <select id="category" name="category" class="form-select" aria-label="Default select example">
                                <option selected disabled hidden>Select Category Here</option>
                                <option value="Kuliner">Kuliner</option>
                                <option value="Kesehatan">Kesehatan</option>
                                <option value="Politik">Politik</option>
                                <option value="Pendidikan">Pendidikan</option>
                                <option value="Sosial">Sosial</option>
                            </select>
                            @error('category')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="title" class="mb-2">Title <span class="require"></span></label>
                            <input type="text" id='title' class="form-control" placeholder="Title" name="title" />
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <br>
                            <label class="mb-2" for="body">Content</label>
                            <textarea id="body" name="body" rows="5" class="contents form-control" name="description"></textarea>
                            @error('body')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="d-flex justify-content-end gap-2">
                            <button type="submit" class="btn-gray" formaction="/create/draft">
                                Save as Draft
                            </button>
                            <button type="submit" class="btn-blue">
                                Publish
                            </button>
                        </div>


                </div>
                <div class="col-lg-3 mb-3 d-none d-lg-block sticky-right-side">
                    @include('partials.rightbar')
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.contents').richText({

            // text formatting
            bold: true,
            italic: true,
            underline: true,

            // text alignment
            leftAlign: true,
            centerAlign: true,
            rightAlign: true,
            justify: true,

            // lists
            ol: true,
            ul: true,

            // title
            heading: true,

            // fonts
            fonts: true,
            fontList: [
                "Arial",
                "Arial Black",
                "Comic Sans MS",
                "Courier New",
                "Geneva",
                "Georgia",
                "Helvetica",
                "Impact",
                "Lucida Console",
                "Tahoma",
                "Times New Roman",
                "Verdana"
            ],
            fontColor: true,
            fontSize: true,

            // uploads
            imageUpload: true,
            fileUpload: true,

            // media
            videoEmbed: true,

            // link
            urls: true,

            // tables
            table: true,

            // code
            removeStyles: true,
            code: true,

            // colors
            colors: [],

            // dropdowns
            fileHTML: '',
            imageHTML: '',

            // translations
            translations: {
                'title': 'Title',
                'white': 'White',
                'black': 'Black',
                'brown': 'Brown',
                'beige': 'Beige',
                'darkBlue': 'Dark Blue',
                'blue': 'Blue',
                'lightBlue': 'Light Blue',
                'darkRed': 'Dark Red',
                'red': 'Red',
                'darkGreen': 'Dark Green',
                'green': 'Green',
                'purple': 'Purple',
                'darkTurquois': 'Dark Turquois',
                'turquois': 'Turquois',
                'darkOrange': 'Dark Orange',
                'orange': 'Orange',
                'yellow': 'Yellow',
                'imageURL': 'Image URL',
                'fileURL': 'File URL',
                'linkText': 'Link text',
                'url': 'URL',
                'size': 'Size',
                'responsive': 'Responsive',
                'text': 'Text',
                'openIn': 'Open in',
                'sameTab': 'Same tab',
                'newTab': 'New tab',
                'align': 'Align',
                'left': 'Left',
                'center': 'Center',
                'right': 'Right',
                'rows': 'Rows',
                'columns': 'Columns',
                'add': 'Add',
                'pleaseEnterURL': 'Please enter an URL',
                'videoURLnotSupported': 'Video URL not supported',
                'pleaseSelectImage': 'Please select an image',
                'pleaseSelectFile': 'Please select a file',
                'bold': 'Bold',
                'italic': 'Italic',
                'underline': 'Underline',
                'alignLeft': 'Align left',
                'alignCenter': 'Align centered',
                'alignRight': 'Align right',
                'addOrderedList': 'Add ordered list',
                'addUnorderedList': 'Add unordered list',
                'addHeading': 'Add Heading/title',
                'addFont': 'Add font',
                'addFontColor': 'Add font color',
                'addFontSize': 'Add font size',
                'addImage': 'Add image',
                'addVideo': 'Add video',
                'addFile': 'Add file',
                'addURL': 'Add URL',
                'addTable': 'Add table',
                'removeStyles': 'Remove styles',
                'code': 'Show HTML code',
                'undo': 'Undo',
                'redo': 'Redo',
                'close': 'Close'
            },

            // privacy
            youtubeCookies: false,

            // preview
            preview: false,

            // placeholder
            placeholder: 'Write content here..',

            // developer settings
            useSingleQuotes: false,
            height: 0,
            heightPercentage: 0,
            adaptiveHeight: false,
            id: "",
            class: "",
            useParagraph: false,
            maxlength: 0,
            callback: undefined,
            useTabForNext: false
        });
    </script>
@endsection
