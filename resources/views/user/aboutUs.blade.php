<x-app-layout>
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/aboutus.css') }}">

    <livewire:breadcrumb-banner />

    <!-- DESCRIPTION -->
    <div class="container information">
        <div class="row in4_us">
            <div class="col-12 infor">
                <div class="row small_in4">
                    <div class="col-6 img_in4">
                        <img src="{{ asset('frontend\images\About us\213a961918fedb2cc5fe53c844db35a3.jpg') }}" alt=""
                            class="img_in4_1 w-100">
                    </div>
                    <div class="col-6 description_in4">
                        <h1>FROM OVEN TO AWESOME</h1>
                        <p>We offer everything you need to bring your baking dreams to life, from essential ingredients
                            like
                            flours, sugars, and chocolates to specialty items like cupcake liners, decorating tools, and
                            hard-to-find baking extracts. Browse our wide variety of top brands and discover baking
                            essentials to create delicious pastries, cakes, breads, and more, all from the comfort of
                            your
                            home!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row policy">
            <div class="col-12 policy">
                <div class="row policy_title">
                    <div class="col-4"></div>
                    <div class="col-4 policy_header">
                        <h1> CAKIELAND POLICY</h1>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row policy_small">
                    <div class="col-4 policy_small_1">
                        <img src="{{ asset('frontend/images/About us/1.png') }}" alt="" class="img_policy">
                        <h3>Privacy policy</h3>
                        <p>Our privacy policy outlines how we collect, use, and disclose information you provide while
                            using our website and services.</p>
                    </div>
                    <div class="col-4 policy_small_2">
                        <img src="{{ asset('frontend/images/About us/2.png') }}" alt="" class="img_policy">
                        <h3>Shipping policy</h3>
                        <p>We offer a variety of shipping options to suit your needs, with clear details provided at
                            checkout. </p>
                    </div>
                    <div class="col-4 policy_small_3">
                        <img src="{{ asset('frontend/images/About us/3.png') }}" alt="" class="img_policy">
                        <h3>Returns policy</h3>
                        <p> You can easily return them within 5 days
                            of receiving your order. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
</x-app-layout>
