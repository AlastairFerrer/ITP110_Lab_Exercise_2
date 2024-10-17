<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laboratory Exercise 2</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="container-fluid pt-5 mt-5">
            <h4 class="text-center py-5">Province & City/Town Picker</h4>

            <form id="form-address">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Province</span>
                            <select class="form-select" id="province">
                                <option disabled hidden selected></option>
                                @foreach ($provinces as $province)
                                    <option key='{{ $province->province_id }}'  value="{{ $province->province_name }}">{{ $province->province_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">City/Town</span>
                            <select class="form-select" id="citytown">
                            <option disabled hidden selected></option>
                                @foreach ($citytowns as $citytown)
                                    <option key='{{ $citytown->citytown_id }}' value="{{ $citytown->citytown_name }}">{{ $citytown->citytown_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="text-center pt-3">
                    <button class="btn btn-success">Submit</button>
                    <h4 class="text-center pt-5" id="address"></h4>
                </div>
            </form>

            <div class='text-center fs-5 fw-bold' id='container'></div>    
        </div>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        <script>
            $(document).ready(function () {
                $('#form-address').submit(function(e){
                    e.preventDefault();

                    var province = $('#province').val();
                    var citytown = $('#citytown').val();

                    $('#container').html(`${citytown}, ${province}`);
                })
              
                $.ajax({

                })

            })
        </script>
    </body>
</html>
