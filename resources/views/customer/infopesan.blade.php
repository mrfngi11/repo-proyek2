<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hachi Petshop</title>
    @include('customer/template/head')
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0" style="background-color: #FFC288;">
        <!-- Navigation-->
        @include('customer/template/navlink')
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5">
                <div class="row justify-content-center">

                    <div class="col-xl-10 col-lg-12 col-md-9">

                        <!-- Product section-->
                        <section class="py-2" style="background-color: #FFFFFF;">
                            <div class="container px-4 px-lg-5">

                                <div class="row gx-4 gx-lg-5 align-items-top row-cols-2">

                                    <h2 class="fs-1">Detail Kamar</h2>

                                    <div class="col-md-12 mt-2">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{ route('home-customer') }}">Home</a></li>
                                                <li class="breadcrumb-item"><a href="{{ route('pethotel-customer') }}">Pet Hotel</a></li>
                                                <li class="breadcrumb-item"><a href="">Detail Kamar</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <!-- Setengah layar pertama untuk tabel -->
                                    <div class="col-md-6 mb-3" style="height: 100%;">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="fs-4">Informasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="fs-5">{{ optional($info->id_customer)->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="fs-6">Deskripsi</td>
                                                    <td class="fs-6">:</td>
                                                </tr>
                                                <tr>
                                                    <td class="fs-6">Harga</td>
                                                    <td class="fs-6">:</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td class="py-5 d-flex">
                                                        <button type="button" class="btn mx-2" style="background-color: #FF6701; color: #FFFFFF;" data-toggle="modal" data-target="#exampleModal">Reservasi</button>
                                                        <a href="{{ route('pethotel-customer') }}">
                                                            <button type="button" class="btn btn-secondary text-white">Kembali</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                        </section>

                    </div>

                </div>
            </div>
    </main>
    <!-- Footer-->
    <footer class="py-4 mt-auto" style="background-color: #FF6701;">
        @include('customer/template/footer')
    </footer>
    @include('customer/template/script')
</body>

</html>