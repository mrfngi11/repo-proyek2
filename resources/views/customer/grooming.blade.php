<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modern Business - Start Bootstrap Template</title>
    @include('customer/template/head')
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('customer/template/navlink')
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5">
                <h1 class="fw-bolder fs-5 mb-4">Company Blog</h1>
                <div class="card border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="row gx-0">
                            <div class="col-lg-6 col-xl-6 py-lg-5 col-md-6">
                                <div class="p-4 p-md-5">
                                    <aside>
                                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                            <!-- Name input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Full name</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                            </div>
                                            <!-- Email address input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                                <label for="email">Email address</label>
                                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                            </div>
                                            <!-- Phone number input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                                <label for="phone">Phone number</label>
                                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                            </div>
                                            <!-- Message input-->
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                                <label for="message">Message</label>
                                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                            </div>
                                            <!-- Submit success message-->
                                            <!---->
                                            <!-- This is what your users will see when the form-->
                                            <!-- has successfully submitted-->
                                            <div class="d-none" id="submitSuccessMessage">
                                                <div class="text-center mb-3">
                                                    <div class="fw-bolder">Form submission successful!</div>
                                                    To activate this form, sign up at
                                                    <br />
                                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                                </div>
                                            </div>
                                            <!-- Submit error message-->
                                            <!---->
                                            <!-- This is what your users will see when there is-->
                                            <!-- an error submitting the form-->
                                            <div class="d-none" id="submitErrorMessage">
                                                <div class="text-center text-danger mb-3">Error sending message!</div>
                                            </div>
                                            <!-- Submit Button-->
                                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                                        </form>
                                    </aside>
                                    <div class="col-lg-6 col-xl-6 col-md-6">
                                            <img src="{{ asset('template/img/cat.jpg') }}" alt="" style="width: 50%;">
                                        <!-- <div class="bg-featured-blog" style="background-image: url('https://dummyimage.com/700x350/343a40/6c757d')"></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="py-4 mt-auto" style="background-color: #FF6701;">
        @include('customer/template/footer')
    </footer>
    @include('customer/template/script')
</body>

</html>