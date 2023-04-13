@extends('layouts.master')
@section('title','Register Ouvrier')
@section('style')
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/register.css">
@endsection

@section('content')

    <!--================== Register page =====================-->
    <div class="register-section">
        <section class="register-container">
            <header>Registration Form</header>
            <form action="#" class="form">
                <div class="column">
                    <div class="input-box">
                        <label>First Name</label>
                        <input type="text" placeholder="Enter First Name" />
                    </div>
                    <div class="input-box">
                        <label>Last Name</label>
                        <input type="text" placeholder="Enter Last Name" />
                    </div>
                </div>
                
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" placeholder="Enter Email" />
                </div>
                <div class="column">
                    <div class="input-box">
                        <label>password</label>
                        <input type="password" placeholder="Enter password" />
                    </div>
                    <div class="input-box">
                        <label>Confirmer password</label>
                        <input type="password" placeholder="Confirmer password" />
                    </div>
                </div>
                <div class="column">
                    <div class="input-box">
                        <label>Phone number</label>
                        <input type="text" placeholder="Enter Phone number" />
                    </div>
                    <div class="input-box">
                        <label>Birth Date</label>
                        <input type="date" placeholder="Enter Birth date" />
                    </div>
                </div>
                <div class="gender-box">
                    <h3>Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" checked id="check-male" name="gender">
                            <label for="check-male">Male</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-famale" name="gender">
                            <label for="check-famale">Famale</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-other" name="gender">
                            <label for="check-other">Prefer not to say</label>
                        </div>
                    </div>
                </div>
                <div class="input-box address">
                    <label>Address</label>
                    <input type="text" placeholder="Enter street Address" />
                    <input type="text" placeholder="Enter street Address line 2" />
                    <div class="column">
                        <div class="select-box">
                            <select>
                                <option hidden>Select City</option>
                                <option>Rabat</option>
                                <option>Casa</option>
                                <option>marakech</option>
                                <option>maknes</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button>submit</button>
            </form>
        </section>
    </div>

@endsection

@section('script')
    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <script defer src="assets/js/script.js"></script>

@endsection