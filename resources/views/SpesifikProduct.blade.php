<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Product | Ellora Official</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Home -->
    <section id="" class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div>{{ $product->nama }}</div>
                    <div>{{ $product->kode }}</div>
                    <div>{{ $product->deskripsi }}</div>
                    <div>{{ $product->harga }}</div>
                    <div>{{ $product->ukuran }}</div>
                    <div>{{ $product->bahan }}</div>
                    <div>{{ $product->perawatan }}</div>
                    <a href="{{ $product->shopee }}">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                            viewBox="0 0 48 48">
                            <path fill="#f4511e"
                                d="M36.683,43H11.317c-2.136,0-3.896-1.679-3.996-3.813l-1.272-27.14C6.022,11.477,6.477,11,7.048,11 h33.904c0.571,0,1.026,0.477,0.999,1.047l-1.272,27.14C40.579,41.321,38.819,43,36.683,43z">
                            </path>
                            <path fill="#f4511e"
                                d="M32.5,11.5h-2C30.5,7.364,27.584,4,24,4s-6.5,3.364-6.5,7.5h-2C15.5,6.262,19.313,2,24,2 S32.5,6.262,32.5,11.5z">
                            </path>
                            <path fill="#fafafa"
                                d="M24.248,25.688c-2.741-1.002-4.405-1.743-4.405-3.577c0-1.851,1.776-3.195,4.224-3.195 c1.685,0,3.159,0.66,3.888,1.052c0.124,0.067,0.474,0.277,0.672,0.41l0.13,0.087l0.958-1.558l-0.157-0.103 c-0.772-0.521-2.854-1.733-5.49-1.733c-3.459,0-6.067,2.166-6.067,5.039c0,3.257,2.983,4.347,5.615,5.309 c3.07,1.122,4.934,1.975,4.934,4.349c0,1.828-2.067,3.314-4.609,3.314c-2.864,0-5.326-2.105-5.349-2.125l-0.128-0.118l-1.046,1.542 l0.106,0.087c0.712,0.577,3.276,2.458,6.416,2.458c3.619,0,6.454-2.266,6.454-5.158C30.393,27.933,27.128,26.741,24.248,25.688z">
                            </path>
                        </svg>
                    </a>

                </div>
            </div>

            <!-- Modal for View Detail -->
            {{-- <div class="modal fade" id="viewDetailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $data->nama }} Detail</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Tampilkan detail produk di sini -->
                                <div>{{ $data->nama }}</div>
                                <div>{{ $data->kode }}</div>
                                <div>{{ $data->deskripsi }}</div>
                                <div>{{ $data->harga }}</div>
                                <div>{{ $data->shopee }}</div>
                                <div>{{ $data->tokopedia }}</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div> --}}

        </div>
    </section>


    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>
