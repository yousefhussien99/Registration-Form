<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{__('message.Registration Webpage')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css'>    
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="header">
        @include('Header')
    </div>
    
    <div>
        <div class="home mb-5 bg-light">
            <div class="container mt-5 pt-5">
                <!-- <h1 class="text-center my-3">Registration Form</h1> -->
                <h1 class="text-center my-3">{{__('message.Registration Form')}}</h1>
                <div class="card card1 mb-3 ">
                    <div class="card-body text-danger p-2 ">
                        <h5 class="card-title text-center text-light mb-0">{{__('message.All Fields are required *')}}</h5>
                    </div>
                    
                    <style>
                        .card.card1 {
                            background-color: #212529 !important;
                            border-color: #212529 !important;
                        }
                    </style>
                </div>
                <div class="alert text-center d-none  alert-danger" role="alert" id = "alert">    
                </div>
                <form  id="form" enctype="multipart/form-data" name="my-form" method="post" action="">
                    @csrf
                    <div class="row d-flex flex-wrap justify-content-center ">
                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" id="fname_id" name="name" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('message.Example: Yousef Hussien')}}">
                                <label for="fname_id">{{__('message.Full Name')}}</label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="uname_id" name="username" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('message.Must Be Unique')}}">
                                <label for="uname_id">{{__('message.Username')}}</label>
                                <div id="uname_response"></div>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="email" required class="form-control" id="email_id" name="email" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('message.Must Contain @ , .com')}}">
                                <label for="email_id">{{__('message.Email')}}</label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="tel" required class="form-control" id="phone" name="phone" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('message.Only accept Egyptian Numbers without +20')}}">
                                <label for="phone">{{__('message.Phone Number')}}</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="password" required class="form-control" id="password_id" name="password"
                                    data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                    title="{{__('message.Must contain : <ul><li>Eight characters or more</li><li>Number & Special char</li><li>Upper/lower case chars</li></ul>')}}" />
                                <label for="password_id">{{__('message.Password')}}</label>

                            </div>
                        </div>
                        
                        
                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="password" required class="form-control" id="password2_id" name="repassword"
                                    data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                    title="{{__('message.Must Match previous password')}}" />
                                <label for="password2_id">{{__('message.Confirm Password')}}</label>
                            </div>
                        </div>


                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" id="address_id" name="address" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('message.Example : 29 cairo st')}}">
                                <label for="address_id">{{__('message.Address')}}</label>
                        
                            </div>
                        </div>

                        <div class="col-md-5 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="date" required class="form-control" id="bd_id" name="birthday"
                                    data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                    title="{{__('message.Valid date between : <br> 1900-2024')}}">
                                <label for="bd_id">{{__('message.Birthday')}}</label>

                            </div>
                        </div>

                        <div class="col-md-1 d-flex align-items-center justify-content-end">
                        <button type="button" class="rounded-2 search-btn p-1" id="search-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('message.Search of the same birthdays.')}}"><img src="./images/icons8-search.gif" alt="" class="w-75"></button>
                        </div>

                        <div class="input-group my-3">
                            <input type="file" required class="form-control" name="image" accept="image/*" id="img_id" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('message.Only Image Extensions Available')}}">
                        </div>

                    </div>
                    <div class="col-md-12 text-center">
                    <button class="btn-lg btn-outline-dark mb-3 text-center" type="submit" id="submitBtn" onclick="submitForm()">{{__('message.Submit')}}</button>
                    </div>
                </form>
                <div class="card">
                    <div class="card-header" style="background-color: blueviolet;">
                        <div class='text-center my-2 text-light fs-3 fw-bold'>{{__('message.Birthday in the same day')}} </div>
                    </div>
                    <div class="card-body mx-2">
                        <div class="row" id="names" style="display: flex; flex-wrap: nowrap; overflow-x: auto; ">
                        </div>
                    </div>
                </div>
            </div>
    </div>



    <div class="footer">
        @include('Footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/Validations.js"></script>
    <script type="module" src="js/API_Controller.js"></script>
    <script src="js/serverValidation.js"></script>

</body>

</html>