<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portail | MEEA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/armoirie.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pool-mtdpce.css" rel="stylesheet">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    {{-- login style --}}
    <link rel="stylesheet" href="./style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


    @livewireStyles
</head>

<body class="">
    <!--  -->
    <!-- ======= Top Bar ======= -->
    <x-topbar />

    <!-- ======= Header ======= -->
    <x-header />
    <!-- End Header -->

    <div class="content">
        {{-- La partie de recherche --}}
        <div class="col-lg-6 offset-lg-3 animate__animated animate__fadeInUp">
            <form class="form-inline">
                {{-- <i id="filter" class="bi bi-search"></i> --}}


            </form><br>
        </div>


        <!-- ======= Hero Section ======= -->

        <!-- End Hero -->

        <!-- ======= Breadcrumbs ======= -->
        <!-- End Breadcrumbs -->

        <!-- ======= sidebar Section ======= -->
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

        <div class="cont_info_log_sign_up">
            <div class="col_md_login">
                <div class="cont_ba_opcitiy">

                    <h2><i class="bi bi-person"></i></h2>
                    <h5> Personne physique</h5>
                    <p>Inscrivez vous ici si vous etes une personne physique</p>
                    <button class="btn_login" onclick="change_to_login()">Inscription</button>
                </div>
            </div>
            <div class="col_md_sign_up">
                <div class="cont_ba_opcitiy">
                    <h2><i class="bi bi-buildings-fill"></i></h2>
                    <h5>Personne morale</h5>

                    <p>Inscrivez vous ici si vous etes une entreprise &nbsp; <br></p>

                    <button class="btn_sign_up" onclick="change_to_sign_up()">Inscription</button>
                </div>
            </div>
        </div>

        <div class="cont_forms">
            {{-- <div class="cont_img_back_">
                <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d"
                    alt="" />
            </div> --}}
            <div class="cont_form_login">
                <a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                <h5>Personne physique</h5>
                <x-guest-layout>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Nom')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Name -->
                        <div>
                            <x-input-label for="prenom" :value="__('Prénom')" />
                            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="prenom"
                                :value="old('prenom')" required autofocus autocomplete="prenom" />
                            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Telephone number -->
                        <div>
                            <x-input-label for="telephone" :value="__('Telephone')" />
                            <x-text-input id="telephone" class="block mt-1 w-full" type="number"
                                name="telephone" :value="old('telephone')" required autocomplete="telephone" />
                            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div>
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password"
                                name="password" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('login') }}" style="color: black">
                                {{ __('Déja inscrit?') }}
                            </a>
                            <x-primary-button class="ml-4">
                                {{ __('Inscription') }}
                            </x-primary-button>
                        </div>
                    </form>
                </x-guest-layout>

                <button class="btn_login" onclick="change_to_sign_up()">Inscription</button>
            </div>

            <div class="cont_form_sign_up">
                <a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                <h5>Personne morale</h5>
                <x-guest-layout>
                    <form method="POST" action="{{ route('register-personne-morale') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Nom de la societé')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- IFU -->
                        <div>
                            <x-input-label for="ifu" :value="__('Numéro IFU')" />
                            <x-text-input id="ifu" class="block mt-1 w-full" type="text" name="ifu"
                                :value="old('ifu')" required autofocus autocomplete="ifu" />
                            <x-input-error :messages="$errors->get('ifu')" class="mt-2" />
                        </div>

                        <!-- RCCM -->
                        <div>
                            <x-input-label for="rccm" :value="__('Numéro RCCM')" />
                            <x-text-input id="rccm" class="block mt-1 w-full" type="text" name="rccm"
                                :value="old('rccm')" required autofocus autocomplete="rccm" />
                            <x-input-error :messages="$errors->get('rccm')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Telephone number -->
                        <div>
                            <x-input-label for="telephone" :value="__('Telephone')" />
                            <x-text-input id="telephone" class="block mt-1 w-full" type="number"
                                name="telephone" :value="old('telephone')" required autocomplete="telephone" />
                            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                        </div>

                        <!-- Siège social -->
                        <div>
                            <x-input-label for="siege_social" :value="__('Siège social')" />
                            <x-text-input id="siege_social" class="block mt-1 w-full" type="text" name="siege_social"
                                :value="old('siege_social')" required autofocus autocomplete="siege_social" />
                            <x-input-error :messages="$errors->get('siege_social')" class="mt-2" />
                        </div>

                        <!-- Boite postal -->
                        <div>
                            <x-input-label for="boite_postale" :value="__('Boîte postale')" />
                            <x-text-input id="boite_postale" class="block mt-1 w-full" type="text" name="boite_postale"
                                :value="old('boite_postale')" required autofocus autocomplete="boite_postale" />
                            <x-input-error :messages="$errors->get('boite_postale')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div>
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password"
                                name="password" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('login') }}">
                                {{ __('Déja inscrit?') }}
                            </a>
                            <x-primary-button class="ml-4">
                                {{ __('Inscription') }}
                            </x-primary-button>
                        </div>
                    </form>
                </x-guest-layout>

                <!-- <button class="btn_sign_up" onclick="change_to_login()">Inscription</button> -->

            </div>

        </div>
        <!-- End Contact Section -->

            </main><!-- End #main -->
        </div>
        <!-- ======= Footer ======= -->
        <x-footer />
        <!-- End Footer -->

        {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a> --}}

                <script src="./script.js"></script>

</body>

</html>
