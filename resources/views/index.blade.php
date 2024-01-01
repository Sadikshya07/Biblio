<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>
<body class="bg-color-primary text-color-white tracking-wider">
    <header>
        <nav class="container flex justify-between items-center ">
            <div class="py-5 text-color-secondary font-bold text-3xl">
            <a href="/" class="hover:text-color-secondary ease-in duration-200">
                <span class="text-color-white">Bib</span>Lio.
            </a>
            </div>
            <div>
                <ul class="hidden lg:flex items-center space-x-6">
                    <li><a href="{{route('home')}}" class="hover:text-color-secondary ease-in duration-200" > Home </a></li> 
                    <li><a href="{{route('admin.ads.create')}}" class="hover:text-color-secondary ease-in duration-200" >PostAd</a></li>
                    <!-- <li class="hover:text-color-secondary ease-in duration-200" >Categories</li> -->
                    <li><a href="{{route('admin.feedback.create')}}" class="hover:text-color-secondary ease-in duration-200" >Feedback</a></li>
                    <li><a href="{{route('login')}}" class="hover:text-color-secondary ease-in duration-200" >LogIn</a></li>
                    <form action="{{route('logout')}}" method="post">
                    @csrf
                    @method('POST')
                        <button type="submit" class="text-color-secondary">LogOut</button>
                    </form>

                </ul>
            </div> 
            <!--Mobile screen-->
                <div id="hamburger"class="lg:hidden cursor-pointer z-50">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div id="menu"class="hidden bg-color-primary-dark h-[100vh] absolute inset-0">
                    <ul class="h-full grid place-items-center py-20">
                    <li><a id="hlink" href="/" class="hover:text-color-secondary ease-in duration-200" > Home</a></li>
                    <li><a id="hlink" href="{{route('admin.ads.create')}}" class="hover:text-color-secondary ease-in duration-200" >PostAd</a></li>
                    <!-- <li id="hlink" class="hover:text-color-secondary ease-in duration-200" >Categories</li> -->
                    <li><a id="hlink" href="{{route('admin.feedback.create')}}" class="hover:text-color-secondary ease-in duration-200" >Feedback</a></li>
                     <li><a href="{{route('login')}}" class="hover:text-color-secondary ease-in duration-200" >LogIn</a></li>
                    <form action="{{route('logout')}}" method="post">
                    @csrf
                    @method('POST')
                        <button type="submit" class="text-color-secondary">LogOut</button>
                    </form>
                    </ul>
                </div>
        </nav>
    </header>

    <script>
        //Mobile Menu
        const hamburger = document.querySelector('#hamburger');
        const menu = document.querySelector('#menu');
        const hLink = document.querySelector('#hLink');
        const faSolid = document.querySelector(".fa-solid");

        hamburger.addEventListener("click",()=>{
            menu.classList.toggle('hidden');
            faSolid.classList.toggle('fa-xmark')
        })

        //Hide backside
        hLink.forEach(link => {
            link.addEventListener('click',() => {
                menu.classList.toggle('hidden');
                faSolid.classList.toggle('fa-xmark')
            })
        })
    </script>

    <main>
        <section id="home"  >
            <div class="w-80 h-80 bg-color-blob absolute top-10 -left-5 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>
            <div class="w-80 h-80 bg-color-secondary absolute bottom-10 right-0 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>
            <div class="container h-80vh">
                <div class="text-center mb-12 ">    
                    <h1 class="md:text-5xl  font-bold leading-snug">Where Books Find New Homes</h1>
    </br>
    </br>
                    <div class=" m-auto h-auto w-96 "><img src="{{ asset('storage\Image\73Z_2108.w023.n001.896B.p1.896.jpg')}}" alt="heroImage" class = "h-96 w-96 rounded-80"></div>
                </div>
                </div> 
            </div>
        </section>
    </br>
    
<!--Book-section-->
        <section>
        <h3 class="text-color-secondary text-center font-bold text-4xl pb-5">Books</h3>
                    <div class="grid lg:grid-cols-4 lg:gap-8 sm:grid-cols-2 md:gap-16">
                    @foreach ( $ads as $ad)
                    <div class="card rounded-50 w-56 mx-10 h-80 py-8 lg:py-16 relative ">
                        <img src="{{ asset('/storage/'.$ad->Image) }}" alt="Image" class="card-image absolute top-0 left-0 w-60 h-3/5 bg-center">
                        <div class="absolute bottom-0 left-0 w-full h-2/5 flex flex-col justify-center items-center font-semibold text-color-primary p-4">
                        <div class="text-center pt-3">{{ $ad->BookName }}</div>
                        <div class="text-center italic font-thin">{{ $ad->SellerName }}</div>
                        <div class="text-center italic font-thin">{{ $ad->ContactNo}}</div>
                        <div class="text-center italic font-thin">Price:{{ $ad->Price }}</div>
                        <div class="text-center italic font-thin pb-3">Condition:{{ $ad->Condition }}</div>
                        </div>
                    </div>
                    @endforeach
                    </div>
        </section>

        <section id="Working" class="bg-color-primary-light">
            <div class = "container py-5">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h3 class="font-bold text-color-secondary mb-4 text-3xl md:text-4xl leading-snug">How It Works</h3>
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6">
                    <!---card no 1--->
                <div class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200 ">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-users text-4xl"></i>
                        </div>
                        <h4 class="text-xl font-bold py-4">Create Account</h4>
                        <p class="leading-relaxed">First create your account which requires an email to signin.</p>
                    </div>
                    <!--card no 2-->
                    <div class="bg-color-primary-dark border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200 ">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-book-open text-4xl"></i>
                        </div>
                        <h4 class="text-xl font-bold py-4">Post Your Ads</h4>
                        <p class="leading-relaxed">Now you can post your ads by adding the details of the book.</p>
                    </div>
                    <!---card no 3-->
                    <div class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200 ">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-circle-check text-4xl"></i>
                        </div>
                        <h4 class="text-xl font-bold py-4">You're Done</h4>
                        <p class="leading-relaxed">Finally you are done. Your account is created and ad is uploaded.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="bg-color-primary-dark relative">
                <div class="container py-10">
                    <div class="grid gap-10 md:grid-cols-3 pb-10">
                        <div class="flex gap-5 items-center">
                            <p>Follow Us:</p>
                            <i class="fa-brands fa-facebook-f cursor-pointer hover:text-color-secondary"></i>
                            <i class="fa-brands fa-twitter cursor-pointer hover:text-color-secondary"></i>
                            <i class="fa-brands fa-instagram cursor-pointer hover:text-color-secondary"></i>
                        </div class="flex justify-between md:justify-around">
                        <div class="space-y-6">
                            <h4 class="font-bold text-lg">Quick Links</h4>
                            <ul class="space-y-3">
                                <li class="underline hover:no-underline hover:text-color-secondary"><a href="/">Home</a></li>
                                <li class="underline hover:no-underline hover:text-color-secondary"><a href="{{route('admin.ads.create')}}">PostAd</a></li>
                                <!-- <li class="underline hover:no-underline hover:text-color-secondary"><a href="/">Categories</a></li> -->
                                <li class="underline hover:no-underline hover:text-color-secondary"><a href="{{route('admin.feedback.create')}}">Feedback</a></li>
                                <!-- <li><button class="underline hover:no-underline hover:text-color-secondary">Signin</button></li> -->
                            </ul>
                        </div>
                        <div>
                        <div class="font-bold text-2xl">Coming Soon!!!</div>
                        <div class="text-2xl hover:text-color-secondary py-4">Biblio on Mobile App
                        </div>
                        <h3>Unveiling the Next Chapter: Our Mobile App is Almost Here!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>