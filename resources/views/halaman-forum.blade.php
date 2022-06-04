@extends('layout.navigation')
@section('title', $forum->title)

@section('content')
    @include('partials.sidebar')
    <div class='p-sm-3 w-100'>
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-9">
                    <div class="card border border-2 border-danger p-4 mb-3">
                        <div class="d-flex gap-3 flex-lg-row flex-column justify-content-between align-items-center">
                            <div class="d-flex flex-shrink align-items-center gap-3">
                                <div>
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div>
                                    <div class="d-flex flex-wrap gap-sm-2 gap-1">
                                        <a href="#" class="h5 m-0 link-unstyled text-dark">Maulana
                                            Ahmadi</a>
                                        <a href="#" class="h7 text-muted link-unstyled">@aldimaulana</a>
                                    </div>
                                    <div class="d-flex mt-1">
                                        <div class="text-muted text-xs m-0">Last Updated 15 Februari 2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink">
                                <span class="badge m-0 bg-light rounded-pill text-dark fs-sm-6"><span
                                        class="badge bg-danger rounded-pill me-1">X</span>Hoax - Verified by expert</span>
                            </div>
                        </div>
                        <div class="mt-sm-4 mt-2">
                            <a class="link-unstyled underline-link" href="#">
                                <h5 class="fw-bold text-dark">{{ $forum->title }}</h5>
                            </a>
                            <div class="mw-100">
                                {!! $forum->body !!}
                            </div>
                            {{-- <div class="d-flex justify-content-center mb-2">
                                <img class="img-fluid"
                                    src="https://asset.indosport.com/article/image/q/80/292889/ilustrasi_formula_e_jadi_di_jakarta1-169.jpg?w=750&h=423"
                                    alt="Formula E Jakarta">
                            </div> --}}
                        </div>
                        <div class="mt-1 d-flex justify-content-between align-items-sm-center border-0">
                            <div class="d-flex align-items-center gap-sm-3">
                                <div class="d-flex align-items-center gap-sm-2">
                                    <button class="fa fa-thumbs-o-up post-icons"></button>
                                    <p class="m-0 text-muted">{{ $forum->like }}</p>
                                </div>
                                <div class="d-flex align-items-center gap-sm-2">
                                    <button class="fa fa-thumbs-o-down post-icons"></button>
                                    <p class="m-0 text-muted">{{ $forum->dislike }}</p>
                                </div>
                                <div class="d-flex align-items-center gap-sm-2">
                                    <button class="fa fa-comment-o post-icons"></button>
                                    <p class="m-0 text-muted">12</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-dark sidebar-icons m-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                    <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Report
                                        </button></li>
                                    <li><a class="dropdown-item" href="#">Visit Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <h5 class="fw-bold text-center my-4 text-secondary">Comments</h5>
                    {{-- Comments Input --}}
                    <div class="card p-4 mb-3">
                        <form action={{ '/forum/' . $forum->id . '/comment' }} method="post">
                            @csrf
                            <input type="text" name="idForum" value="{{ $forum->id }}" hidden>
                            <textarea class="comments" name="body" id="body" cols="30" rows="10"></textarea>
                            <div class="mt-4 d-flex justify-content-end">
                                <button type="submit" class="btn-blue"><i
                                        class="fa fa-comment-o px-2"></i>Comment</button>
                            </div>
                        </form>
                    </div>

                    {{-- Pinned Comments --}}
                    <h5 class="my-4 text-secondary">Pinned Comments (1)</h5>
                    <div class="card mb-3">
                        <div class="border-blue rounded">
                            <div class="d-flex gap-2 align-items-center justify-content-end bg-light-blue p-3">
                                <h5 class="fw-bold m-0">Comment verified by expert</h5>
                                <svg xmlns="http://www.w3.org/2000/svg" class="verified-icons" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-shrink align-items-center gap-3">
                                        <div>
                                            <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                        </div>
                                        <div>
                                            <div class="d-flex flex-wrap gap-sm-2 gap-1">
                                                <a href="#"
                                                    class="h5 m-0 link-unstyled text-dark border-sm-end">Jesselyne</a>
                                                <a href="#" class="h7 text-muted link-unstyled border-sm-start">@jess</a>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <div class="text-muted text-xs m-0">Last Updated 15 Februari 2022
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div>
                                        Kalau menurut wawancara pejabat DKI Jakarta yang dimuat di artikel ini, tidak ada
                                        korupsi yang terjadi pada pelaksanaan Formula E
                                        <br>
                                        <br>
                                        Link Artikel: <a href="#">http://google.co.id</a>
                                    </div>
                                </div>
                                <div class="mt-1 d-flex justify-content-between align-items-sm-center border-0">
                                    <div class="d-flex align-items-center gap-sm-3">
                                        <div class="d-flex align-items-center gap-sm-2">
                                            <button class="fa fa-thumbs-o-up post-icons"></button>
                                            <p class="m-0 text-muted">546</p>
                                        </div>
                                        <div class="d-flex align-items-center gap-sm-2">
                                            <button class="fa fa-thumbs-o-down post-icons"></button>
                                            <p class="m-0 text-muted">457</p>
                                        </div>
                                        <div class="d-flex align-items-center gap-sm-2">
                                            <button class="fa fa-comment-o post-icons"></button>
                                            <p class="m-0 text-muted">12</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-dark sidebar-icons m-0"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Share</a></li>
                                            <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    Report
                                                </button></li>
                                            <li><a class="dropdown-item" href="#">Visit Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- All Comments --}}
                    <h5 class="my-4 text-secondary">All Comments (12)</h5>
                    @foreach ($forum->comments as $comment)
                        <div class="card p-4 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-shrink align-items-center gap-3">
                                    <div>
                                        <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                    </div>
                                    <div>
                                        <div class="d-flex flex-wrap gap-sm-2 gap-1">
                                            <a href="#" class="h5 m-0 link-unstyled text-dark border-sm-end">Devi</a>
                                            <a href="#" class="h7 text-muted link-unstyled border-sm-start">@devi</a>
                                        </div>
                                        <div class="d-flex mt-1">
                                            <div class="text-muted text-xs m-0">Last Updated 15 Februari 2022
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div>
                                    {!! $comment->body !!}
                                </div>
                            </div>
                            <div class="mt-1 d-flex justify-content-between align-items-sm-center border-0">
                                <div class="d-flex align-items-center gap-sm-3">
                                    <div class="d-flex align-items-center gap-sm-2">
                                        <button class="fa fa-thumbs-o-up post-icons"></button>
                                        <p class="m-0 text-muted">546</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-sm-2">
                                        <button class="fa fa-thumbs-o-down post-icons"></button>
                                        <p class="m-0 text-muted">457</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-sm-2">
                                        <button class="fa fa-comment-o post-icons"></button>
                                        <p class="m-0 text-muted">12</p>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-dark sidebar-icons m-0"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Share</a></li>
                                        <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Report
                                            </button></li>
                                        <li><a class="dropdown-item" href="#">Visit Profile</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- Report Modal --}}
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Report a forum</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            It's suspicious or spam
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            It's abusive or harmful
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Doesn't answer the question that was asked
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            It's plagiarism
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Substantially incorrect and/or incorrect primary information
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Sexually explicit, pornographic or otherwise inappropriate
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger">Report</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 mb-3 d-none d-lg-block sticky-right-side">
                    @include('partials.rightbar')
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.comments').richText({

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
            placeholder: 'Write comment here..',

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
