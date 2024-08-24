@extends('dashboard.layout-dash.layout')

@section('title', 'Cliente - Editar')

@section('conteudo')

    <style>
        [data-aos][data-aos][data-aos-duration="400"],
        body[data-aos-duration="400"] [data-aos] {
            transition-duration: 1s;
        }


        /* ==========================================================================
           #FONT
           ========================================================================== */
        .font-robo {
            font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
        }

        .font-poppins {
            font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
        }

        .font-opensans {
            font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
        }

        /* ==========================================================================
           #GRID
           ========================================================================== */
        .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .row .col-2:last-child .input-group-desc {
            margin-bottom: 0;
        }

        .row-space {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .row-refine {
            margin: 0 -15px;
        }

        .row-refine .col-3 .input-group-desc,
        .row-refine .col-9 .input-group-desc {
            margin-bottom: 0;
        }

        .col-2 {
            width: -webkit-calc((100% - 30px) / 2);
            width: -moz-calc((100% - 30px) / 2);
            width: calc((100% - 30px) / 2);
        }

        @media (max-width: 767px) {
            .col-2 {
                width: 100%;
            }
        }

        .form-row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 40px;
        }

        .form-row .name {
            width: 125px;
            color: #555;
            font-size: 15px;
            font-weight: 700;
        }

        .form-row .value {
            width: -webkit-calc(100% - 125px);
            width: -moz-calc(100% - 125px);
            width: calc(100% - 125px);
        }

        @media (max-width: 767px) {
            .form-row {
                display: block;
            }

            .form-row .name,
            .form-row .value {
                display: block;
                width: 100%;
            }

            .form-row .name {
                margin-bottom: 7px;
            }
        }

        .col-3,
        .col-9 {
            padding: 0 15px;
            position: relative;
            width: 100%;
            min-height: 1px;
        }

        .col-3 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 25%;
            -moz-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        @media (max-width: 767px) {
            .col-3 {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 35%;
                -moz-box-flex: 0;
                -ms-flex: 0 0 35%;
                flex: 0 0 35%;
                max-width: 35%;
            }
        }

        .col-9 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 75%;
            -moz-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }

        @media (max-width: 767px) {
            .col-9 {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 65%;
                -moz-box-flex: 0;
                -ms-flex: 0 0 65%;
                flex: 0 0 65%;
                max-width: 65%;
            }
        }

        /* ==========================================================================
           #BOX-SIZING
           ========================================================================== */
        /**
         * More sensible default box-sizing:
         * css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice
         */

        /* ==========================================================================
           #BACKGROUND
           ========================================================================== */
        .bg-blue {
            background: #2c6ed5;
        }

        .bg-red {
            background: #fa4251;
        }

        .bg-gra-01 {
            background: -webkit-gradient(linear, left bottom, left top, from(#fbc2eb), to(#a18cd1));
            background: -webkit-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
            background: -moz-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
            background: -o-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
            background: linear-gradient(to top, #fbc2eb 0%, #a18cd1 100%);
        }

        .bg-gra-02 {
            background: -webkit-gradient(linear, left bottom, right top, from(#fc2c77), to(#6c4079));
            background: -webkit-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
            background: -moz-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
            background: -o-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
            background: linear-gradient(to top right, #fc2c77 0%, #6c4079 100%);
        }

        .bg-gra-03 {
            background: -webkit-gradient(linear, left bottom, right top, from(#08aeea), to(#b721ff));
            background: -webkit-linear-gradient(bottom left, #08aeea 0%, #b721ff 100%);
            background: -moz-linear-gradient(bottom left, #08aeea 0%, #b721ff 100%);
            background: -o-linear-gradient(bottom left, #08aeea 0%, #b721ff 100%);
            background: linear-gradient(to top right, #08aeea 0%, #b721ff 100%);
        }

        /* ==========================================================================
           #SPACING
           ========================================================================== */
        .p-t-100 {
            padding-top: 100px;
        }

        .p-t-130 {
            padding-top: 130px;
        }

        .p-t-180 {
            padding-top: 180px;
        }

        .p-t-45 {
            padding-top: 45px;
        }

        .p-t-20 {
            padding-top: 20px;
        }

        .p-t-15 {
            padding-top: 15px;
        }

        .p-t-10 {
            padding-top: 10px;
        }

        .p-t-30 {
            padding-top: 30px;
        }

        .p-b-100 {
            padding-bottom: 100px;
        }

        .p-b-50 {
            padding-bottom: 50px;
        }

        .m-r-45 {
            margin-right: 45px;
        }

        .m-r-55 {
            margin-right: 55px;
        }

        .m-b-55 {
            margin-bottom: 55px;
        }

        /* ==========================================================================
           #WRAPPER
           ========================================================================== */
        .wrapper {
            margin: 0 auto;
        }

        .wrapper--w960 {
            max-width: 960px;
        }

        .wrapper--w790 {
            max-width: 790px;
        }

        .wrapper--w780 {
            max-width: 780px;
        }

        .wrapper--w680 {
            max-width: 680px;
        }

        /* ==========================================================================
           #BUTTON
           ========================================================================== */
        .btn {
            display: inline-block;
            line-height: 50px;
            padding: 0 50px;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
            cursor: pointer;
            font-size: 15px;
            text-transform: uppercase;
            font-weight: 700;
            color: #fff;
            font-family: inherit;
        }

        .btn--radius {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .btn--radius-2 {
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .btn--pill {
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
        }

        .btn--green {
            background: #57b846;
        }

        .btn--green:hover {
            background: #4dae3c;
        }

        .btn--blue {
            background: #4272d7;
        }

        .btn--blue:hover {
            background: #3868cd;
        }

        .btn--red {
            background: #ff4b5a;
        }

        .btn--red:hover {
            background: #eb3746;
        }

        /* ==========================================================================
           #DATE PICKER
           ========================================================================== */
        td.active {
            background-color: #2c6ed5;
        }

        input[type="date" i] {
            padding: 14px;
        }

        .table-condensed td,
        .table-condensed th {
            font-size: 14px;
            font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
            font-weight: 400;
        }

        .daterangepicker td {
            width: 40px;
            height: 30px;
        }

        .daterangepicker {
            border: none;
            -webkit-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            display: none;
            border: 1px solid #e0e0e0;
            margin-top: 5px;
        }

        .daterangepicker::after,
        .daterangepicker::before {
            display: none;
        }

        .daterangepicker thead tr th {
            padding: 10px 0;
        }

        .daterangepicker .table-condensed th select {
            border: 1px solid #ccc;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            font-size: 14px;
            padding: 5px;
            outline: none;
        }

        /* ==========================================================================
           #FORM
           ========================================================================== */
        input {
            outline: none;
            margin: 0;
            border: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            width: 100%;
            font-size: 14px;
            font-family: inherit;
        }

        .radio-container {
            display: inline-block;
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            font-size: 16px;
            color: #666;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .radio-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .radio-container input:checked~.checkmark {
            background-color: #e5e5e5;
        }

        .radio-container input:checked~.checkmark:after {
            display: block;
        }

        .radio-container .checkmark:after {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 12px;
            height: 12px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            background: #FFF;
        }

        .checkmark {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #e5e5e5;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            -webkit-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            -moz-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .input--style-5 {
            background: #e5e5e5;
            line-height: 50px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            padding: 0 22px;
            font-size: 16px;
            color: #555;
        }

        .input-group-desc {
            position: relative;
        }

        @media (max-width: 767px) {
            .input-group-desc {
                margin-bottom: 40px;
            }
        }

        .input-group {
            position: relative;
            margin: 0;
        }

        .label {
            color: #555;
            font-size: 15px;
            font-weight: 700;
        }

        .label--block {
            width: 100%;
        }

        .label--desc {
            position: absolute;
            text-transform: capitalize;
            display: block;
            color: #999;
            font-size: 14px;
            margin: 0;
            margin-top: 7px;
            left: 0;
        }

        /* ==========================================================================
           #SELECT2
           ========================================================================== */
        .select--no-search .select2-search {
            display: none !important;
        }

        .select2-container--open .select2-dropdown--below {
            border: none;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            border: 1px solid #e0e0e0;
            margin-top: 5px;
            overflow: hidden;
        }

        .select2-container--default .select2-results__option {
            padding-left: 22px;
        }

        .rs-select2 .select2-container {
            width: 100% !important;
            outline: none;
            background: #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .rs-select2 .select2-container .select2-selection--single {
            outline: none;
            border: none;
            height: 50px;
            background: transparent;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__rendered {
            line-height: 50px;
            padding-left: 0;
            color: #555;
            font-size: 16px;
            font-family: inherit;
            padding-left: 22px;
            padding-right: 50px;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow {
            height: 50px;
            right: 15px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow b {
            display: none;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow:after {
            font-family: "Material-Design-Iconic-Font";
            content: '\f2f9';
            font-size: 24px;
            color: #999;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .rs-select2 .select2-container.select2-container--open .select2-selection--single .select2-selection__arrow::after {
            -webkit-transform: rotate(-180deg);
            -moz-transform: rotate(-180deg);
            -ms-transform: rotate(-180deg);
            -o-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        /* ==========================================================================
           #TITLE
           ========================================================================== */
        .title {
            font-size: 24px;
            text-transform: uppercase;
            font-weight: 700;
            text-align: center;
            color: #fff;
        }

        /* ==========================================================================
           #CARD
           ========================================================================== */
        .card {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background: #fff;
        }

        .card-5 {
            background: #fff;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }

        .card-5 .card-heading {
            padding: 20px 0;
            background: #1a1a1a;
            -webkit-border-top-left-radius: 10px;
            -moz-border-radius-topleft: 10px;
            border-top-left-radius: 10px;
            -webkit-border-top-right-radius: 10px;
            -moz-border-radius-topright: 10px;
            border-top-right-radius: 10px;
        }

        .card-5 .card-body {
            padding: 52px 85px;
            padding-bottom: 73px;
        }

        @media (max-width: 767px) {
            .card-5 .card-body {
                padding: 40px 30px;
                padding-bottom: 50px;
            }
        }

        .wrapper {

            &:active {

                #img-result {
                    margin-top: 2px;
                    box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
                }
            }

            animation: roll 1.5s;
            position: absolute;
            left: 90%;
            top: 80%;
            transform: translate(-50%, -50%);
            padding: 25px;
            background: #FFF;
            border-radius: 50%;
            box-shadow: 0 3px 5px rgba(0, 0, 0, .3);

            #img-result {
                cursor: pointer;
                margin: 0;
                position: relative;
                background: #ff6d24;
                background-size: cover;
                background-position: center;
                display: block;
                width: 150px;
                height: 150px;
                border-radius: 50%;
                box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
                color: rgba(0, 0, 0, 0);
                transition: box-shadow .3s, margin .3s, background-image 1.5s;

                &.no-image:before {
                    font-family: 'FontAwesome';
                    content: "\f030";
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    color: #fff;
                    font-size: 48px;
                    opacity: .8;
                    transform: translate(-50%, -50%);
                    text-shadow: 0 0px 5px rgba(0, 0, 0, .4);
                }
            }

            button {
                margin-top: 20px;
                display: block;
                font-family: 'Open Sans Condensed', sans-serif;
                background: #ff6d24;
                width: 100%;
                border: none;
                color: #fff;
                padding: 10px;
                letter-spacing: 1.3px;
                font-size: 1.05em;
                border-radius: 5px;
                box-shadow: 0 4px 5px rgba(0, 0, 0, .3);
                outline: 0;
                transition: box-shadow .3s, margin-top .3s, padding .3s;

                &:active {
                    box-shadow: none;
                    margin-top: 24px;
                    padding: 8px
                }
            }
        }

        .show-button {
            background: #264974;
            border: none;
            color: #fff;
            padding: 10px 20px;
            float: right;
            display: none;
        }

        .upload-result {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            overflow-y: auto;

            &__content {
                word-break: break-all;
                font-family: 'Source Code Pro';
                overflow-wrap: break-word;
            }
        }

        .radio-inputs {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            border-radius: 0.5rem;
            background-color: #EEE;
            box-sizing: border-box;
            box-shadow: 0 0 0px 1px rgba(0, 0, 0, 0.06);
            padding: 0.25rem;
            width: 300px;
            font-size: 14px;
        }

        .radio-inputs .radio {
            flex: 1 1 auto;
            text-align: center;
        }

        .radio-inputs .radio input {
            display: none;
        }

        .radio-inputs .radio .name {
            display: flex;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
            border: none;
            padding: .5rem 0;
            color: rgba(51, 65, 85, 1);
            transition: all .15s ease-in-out;
        }

        .radio-inputs .radio input:checked+.name {
            background-color: #fff;
            font-weight: 600;
        }
    </style>

    <div data-aos="fade-left" class="container" style="margin-top: 5%;">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <a href="{{ route('perfil.cliente') }}">
                <ion-icon style="font-size:20pt;margin-left:100%;" name="arrow-back-outline"></ion-icon>
            </a>
            <h6 class="section-title bg-white text-center text-primary px-3">Edite as informações do seu perfil no
                formulário a seguir</h6>
            <h1 class="mb-5">Editar</h1>
        </div>
    </div>

    <div data-aos="fade-left" class="card card-5">
        <div class="card-body" style="height: 600px;">
            <form method="POST" action="{{ route('cliente.update', ['id' => $cliente->id]) }}"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="wrapper">
                    <button type="button" class="no-image" id="img-result">Upload Image</button>
                    <input type="file" name="fotoCliente" id="image_file" style="display:none;">
                </div>

                <div class="upload-result">
                    <button type="button" class="hide-button">Close</button>
                    <pre class="upload-result__content"></pre>
                </div>

                <div class="form-row m-b-55">
                    <div class="name">Nome</div>
                    <div class="value">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text"
                                        value="{{ $cliente->nomeCliente }}"id="nomeCliente" name="nomeCliente">
                                    <label class="label--desc">Nome</label>



                                    @error('nomeCliente')
                                        <div class="alert alert-danger" style="color:white;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text" value="{{ $cliente->sobrenomeCliente }}"
                                        id="sobrenomeCliente" name="sobrenomeCliente">
                                    <label class="label--desc">Sobrenome</label>



                                    @error('sobrenomeCliente')
                                        <div class="alert alert-danger" style="color:white;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="form-row m-b-55">
                    <div class="name">Login</div>
                    <div class="value">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text" value="{{ $cliente->emailCliente }}" id="emailCliente" name="emailCliente">
                                    <label class="label--desc">Email</label>
                                    @error('emailCliente')
                                        <div class="alert alert-danger" style="color:white;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="password" value="{{ $senha->senha }}"
                                id="senhaCliente" name="senhaCliente">
                                <label class="label--desc">Senha</label>
                                @error('senhacliente')
                                    <div class="alert alert-danger" style="color:white;">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="form-row m-b-55">
                    <div class="name">Telefone</div>
                    <div class="col-2" style="width: 100px;display: flex;">
                        <div class="input-group-desc">
                            <input class="input--style-5" style="width:100px;" type="text"
                                @php $testeDD = '(' . substr($cliente->telefoneCliente, 0, 2) . ')' @endphp
                                value="{{ $testeDD }}" id="dddCliente" name="dddCliente">
                            <label class="label--desc">DDD</label>



                            @error('dddCiente')
                                <div class="alert alert-danger" style="color:white;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group-desc" style="margin-left: 10%;">
                            <input class="input--style-5" style="width:300px;" type="text"
                                value="{{ substr($cliente->telefoneCliente, 2, 5) . '-' . substr($cliente->telefoneCliente, 7) }}"
                                id="telefoneCliente" name="telefoneCliente">
                            <label class="label--desc">Número Telefone</label>



                            @error('telefoneCliente')
                                <div class="alert alert-danger" style="color:white;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-row m-b-55">
                    <div class="name">Endereço</div>
                    <div class="col-1" style="width: 50px;display: flex;">
                        <div class="input-group-desc" style="margin-left: 0%;">
                            <input class="input--style-5" style="width:300px;" type="text"
                                value="{{ $cliente->enderecoCliente }}"id="enderecoCliente" name="enderecoCliente">
                            <label class="label--desc">Nome da rua</label>


                            @error('enderecoCliente')
                                <div class="alert alert-danger" style="color:white;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <button style="background: #ff6d24 !important" class="btn btn--radius-2 btn--red"
                        type="submit">Editar</button>
                </div>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        (function() {
            var uploader = document.getElementById('image_file'),
                image = document.getElementById('img-result');

            image.onclick = function() {
                uploader.click();
            }

            uploader.onchange = function() {
                var reader = new FileReader();
                reader.onload = function(evt) {
                    image.classList.remove('no-image');
                    image.style.backgroundImage = 'url(' + evt.target.result + ')';
                }
                reader.readAsDataURL(uploader.files[0]);
            }
        })();
    </script>
@endsection
