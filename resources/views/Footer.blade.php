<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Webpage.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css'>    
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">{{__('message.Get in Touch')}}</h3>
                            <h6>{{__('message.Don\'t miss subscribe with us!')}}</h6>
                            <form action="#" class="f_subscribe_two mailchimp mb-4" method="post" novalidate="true"
                                _lpchecked="1">
                                <input type="text" name="EMAIL" class="form-control memail" placeholder="{{__('message.Email')}}">
                                <button class="btn btn_get btn_get_two" type="submit">{{__('message.Subscribe')}}</button>
                                <p class="mchimp-errmessage" style="display: none;"></p>
                                <p class="mchimp-sucmessage" style="display: none;"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">{{__('message.Download')}}</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">{{__('message.Company')}}</a></li>
                                <li><a href="#">{{__('message.Android App')}}</a></li>
                                <li><a href="#">{{__('message.Ios App')}}</a></li>
                                <li><a href="#">{{__('message.Desktop')}}</a></li>
                                <li><a href="#">{{__('message.Projects')}}</a></li>
                                <li><a href="#">{{__('message.My tasks')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">{{__('message.Help')}}</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">{{__('message.FAQ')}}</a></li>
                                <li><a href="#">{{__('message.Term & conditions')}}</a></li>
                                <li><a href="#">{{__('message.Reporting')}}</a></li>
                                <li><a href="#">{{__('message.Documentation')}}</a></li>
                                <li><a href="#">{{__('message.Support Policy')}}</a></li>
                                <li><a href="#">{{__('message.Privacy')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s"
                            style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">{{__('message.Team Solutions')}}</h3>
                            <div class="f_social_icon">
                                <a href="#" class="fab fa-facebook"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-linkedin"></a>
                                <a href="#" class="fab fa-pinterest"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
    </footer>
</body>
</html>