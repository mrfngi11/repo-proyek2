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

                    <!-- Product section-->
                    <section class="py-2" style="background-color: #FFFFFF;">
                        <div class="container px-4 px-lg-5">

                            <div class="row gx-4 gx-lg-5 align-items-top row-cols-2">

                                <h2 class="fs-1">Informasi Reservasi</h2>
                                <!-- Setengah layar pertama untuk tabel -->
                                <div class="col-md-12 mb-3" style="height: 100%;">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fs-4">Halo! {{ optional($info->user)->name }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fs-6">No Kamar</td>
                                                <td class="fs-6">:</td>
                                                <td class="fs-6">{{ optional($info->kamar)->no_kamar }}</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6">Jumlah Kucing</td>
                                                <td class="fs-6">:</td>
                                                <td class="fs-6">{{ $info->jumlah_kucing }} Ekor</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6">Check In</td>
                                                <td class="fs-6">:</td>
                                                <td class="fs-6">{{ $info->check_in }}</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6">Check Out</td>
                                                <td class="fs-6">:</td>
                                                <td class="fs-6">{{ $info->check_out }}</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6">Status</td>
                                                <td class="fs-6">:</td>
                                                <td class="fs-6">{{ $info->status }}</td>
                                            </tr>
                                            <tr>
                                                <td class="fs-6">Total</td>
                                                <td class="fs-6">:</td>
                                                <td class="fs-6">{{ $info->total }}</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="py-5 d-flex">
                                                    <button type="button" class="btn mx-2" style="background-color: #FF6701; color: #FFFFFF;" data-toggle="modal" data-target="#exampleModal">Bayar</button>
                                                    <a href="{{ route('home-customer') }}">
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
        </section>
    </main>
    <!-- Footer-->
    <footer class="py-4 mt-auto" style="background-color: #FF6701;">
        @include('customer/template/footer')
    </footer>
    @include('customer/template/script')
    @include('sweetalert::alert')
</body>

</html>