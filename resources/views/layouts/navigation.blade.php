<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href=""{{ route('welcome') }}" class="logo" >
                        <img style="
                        background-blend-mode: multiply; border-radius:10px" src="assets/images/klassy-logo.png" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->

                   










                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ route('welcome') }}" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About </a></li>
                        <li class="scroll-to-section"><a href="#reservation">Contact </a></li> 

                        <li class="submenu">
                            <a href="javascript:;">mashin learning</a>
                            <ul>
                                <li class="scroll-to-section"><a href="https://github.com/aminakbari7/captcha-solver-for_golestan_site">recapthcha golestan site</a></li>
                                <li class="scroll-to-section"><a href="https://github.com/aminakbari7/face_detection_clip">face detect</a></li>
                                <li class="scroll-to-section"><a href="https://github.com/aminakbari7/vehicle-traffic-counting">trafic cars</a></li>  
                                <li class="scroll-to-section"><a href="https://github.com/aminakbari7/fire_detection_yolov8">fire detect</a></li>
                                <li class="scroll-to-section"><a href="https://github.com/aminakbari7/Multiple-Object-Tracking-using-DeepSORT">tracking object</a> </li>
                            <li class="scroll-to-section"><a href="https://github.com/aminakbari7/read_persian_text_in_image">image ocr</a></li>                      
                            </ul>
                        </li>
    
                        <li class="submenu">
                            <a href="javascript:;">web application</a>
                            <ul>
                                <li class="scroll-to-section"><a href="https://github.com/aminakbari7/CoffeeShop">coffee shop</a></li>
                                <li class="scroll-to-section"><a href="https://github.com/aminakbari7/ChatBook_for_school">chatbook</a></li>
                            </ul>
                        </li>
    
                        
                        @if (Route::has('login'))
                             @auth  
                             @else
                        <li class="scroll-to-section"><a href="{{ route('login') }}" >login</a></li>
                        @if (Route::has('register'))
                        <li class="scroll-to-section"><a href="{{ route('register') }}" >register</a></li>
                        @endif
                        @endauth
                         @endif                  
                        @auth
                        <li class="submenu">
                            <a href="javascript:;">{{ auth()->user()->name }}</a>
                            <ul>
                                <li><a href="{{  route('profile.edit')}}">profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                    
                                        <a href="{{route('logout')}}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            Log Out
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endauth
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>