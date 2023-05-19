<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="/build/assets/app-3de36966.css"> 
    <title>Reality Reads || By Nicholas Kaberia</title>
</head>
@include('components.alert')
<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                    href="#/presentation"> REALITY READS
                </a>
                <button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#/landing"><i
                                class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"></i>
                            Docs</a>
                    </li>
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ env('FACEBOOK_SHARE') }}"><i
                                class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg "></i><span
                                class="lg:hidden inline-block ml-2">Share</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ env('TWITER_SHARE') }}"><i
                                class="lg:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg "></i><span
                                class="lg:hidden inline-block ml-2">Tweet</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ env('WHATSAPP_SHARE') }}"><i
                                class="lg:text-gray-300 text-gray-500 fab fa-whatsapp text-lg leading-lg "></i><span
                                class="lg:hidden inline-block ml-2">Whatsapp</span></a>
                    </li>
                    <li class="flex items-center">
                        <button
                            class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                            type="button" style="transition: all 0.15s ease 0s;">
                            <i class="fas fa-arrow-alt-circle-down"></i> Buy Hard Copy
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" {{-- https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80 --}}
                style='background-image: url("/img/cover.png");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-semibold text-5xl">
                                Reality Check
                            </h1>
                            <h4 class="text-green-400 font-semibold text-2xl m-1">THROUGH THE CREVICES,</h4>
                            <h5 class="text-teal-500 font-semibold text-2xl m-1">Nicholas Kaberia</h5>
                            <h6 class="text-rose-600 font-semibold text-3xl">Foreword By Dr.Muthomi Thiankolu</h6>
                            <p class="mt-4 mb-3 text-lg text-gray-300">
                                Reading a book makes you smarter, but relevant education from this boook is critical in
                                how we fix lives. Read it in choice topics - unlearn and learn.
                            </p>
                            <button
                                class="rounded-full mt-3 bg-sky-500 text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3">
                                <a href="readbook">Start Reading</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-gray-300 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h6 class="text-xl font-semibold">PREFACE</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    This book is not a treatise from the Government; it is not a law but a choice to
                                    learn uprightly.
                                    Most of us know what we should do to improve the quality of our lives;
                                    unfortunately, we seldom do it.
                                    This book seeks to stir up insight, touch lives, change lives or push you to live
                                    life more consciously.
                                    Life is lived when you learn, change and start every other time anew.
                                    After perusing the book, you will learn the importance of time, understand timing in
                                    Life, and Success in general.
                                    Your positive change should be fast unless you cease to do what is good enough for
                                    you.
                                    Through this book, you will discover notes to enrich the quality of life in the
                                    domains of your career, profession, personal and spiritual life.
                                    For transformation, you should read the book and internalize the excerpts; and it is
                                    where you will find some topics building upon or contrasting with others.
                                    The reader might not agree with everything here, but at least ensure you unlearn and
                                    learn.
                                    Life has a way of citing about you, even by how it generally treats you and those
                                    around you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h6 class="text-xl font-semibold">FOREWORD</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    The world is your oyster! If we earned a dollar every time someone gently squeezed
                                    our hands and looked straight into our eyes while giving us this advice, we would be
                                    ticking off the last item on our bucket list by now.
                                    Most advice is great on the grand scale of things, especially when it emanates from
                                    experience. However, many of us sometimes fail to take practical steps of making the
                                    world our oyster even after benefiting from good advice.
                                    Nicholas Kaberia offers, through this book, insights that fall in the realm of
                                    self-awareness or personal life manual.
                                    The author transcends multiple topics, in line with the dominant approach to
                                    self-awareness writing, without being unduly constrained by the urge to stick to a
                                    specific overarching theme, topic, or message. The range includes technology,
                                    education, death, overindulgence, laziness, parenting, planning, and much more.
                                    The general message of the book revolves around making the best out of one's life.
                                    Dr. Muthomi Thiankolu, PhD
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fas fa-list"></i>
                                </div>
                                <h6 class="text-xl font-semibold">TABLE OF CONTENT</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    FOREWORD........................................ iii
                                    ACKNOWLEDGEMENT............................. iv<br>
                                    PREFACE ................................. v<br>

                                    WHAT YOU SHOULD KNOW..................... 1<br>
                                    RECIPES FOR A GREAT LIFE............................. 5<br>
                                    REFLECTION .......................................7<br>
                                    MAKING OF A PERSON............................. 8<br>
                                    AWAKENINGS ............................. 10<br>
                                    UNLEARN AND LEARN .............................12<br>
                                    RIGHTS VERSUS PRIVILEGES ......................14<br>
                                    TIME TO EAT................................ 16 <br>
                                    MUZZLING YOUR LIFE............................. 18<br>
                                    SHARPENING THE AXE RIGHT............................. 20<br>
                                    MOLDING A LIFE ...................................22<br>
                                    FAIR COUNSEL.................................... 24<br>
                                    DOING GOALS IN LIFE.................................. 26<br>
                                    TARGETS AND EXPECTATIONS vs. GOALS AND RESULTS......... 27<br>
                                    KNOW THE MOUNTAIN TO CLIMB................. 30<br>
                                    LIFE ISN'T AN ACTIVITY BUT A PROCESS.......... 32<br>
                                    IDENTIFY YOUR AIM ...............................34<br>
                                    FAITHFULNESS....................................... 36<br>
                                    HUMBLE BEGINNINGS................................. 38<br>
                                    SELF FULFILLMENT AND CONTENTMENT.. 40<br>
                                    FREE CHOICE...................................... 42<br>
                                    SELF AWARENESS...................................43<br>

                                    MAKING THE BEST OUT OF LIFE......... 45<br>
                                    COMPARISONS............................................. 47<br>
                                    LIFE AS A DRAMA........................................ 50<br>
                                    TRUE SUCCESS............................................ 52<br>
                                    QUALITY OF LIFE .......................................54<br>
                                    SELFISHNESS............................................ 56<br>
                                    POSTERITY................................................ 58<br>
                                    GETTING ORGANIZED..................................... 59<br>
                                    BE THE MASTER AND THE STUDENT..... 61<br>
                                    STAGES OF LIFE....................................... 63<br>
                                    LIFE OF FEAR .......................................66<br>
                                    MAKING YOUR PRIORITY LIST RIGHT... 68<br>
                                    TIMING IN LIFE........................................ 70<br>
                                    SLEEPING WELL............................................. 72<br>
                                    NEW THINKING .......................................75<br>
                                    RELATIONSHIP WITH DEATH................ 77<br>
                                    PRINCIPLE OF COMPLETENESS ............80<br>
                                    FIGHTS AND BATTLES............................ 81<br>
                                    SMALL THINGS IN A BIG WAY.................... 84<br>
                                    NO SMALLER PROBLEM....................... 86<br>
                                    LIFE TEST.............................................. 88<br>
                                    IMPOSITION OF GOOD LIFE................... 89<br>
                                    MANAGING YOUR TIME .......................92<br>
                                    QUALITY versus QUANTITY.................. 95<br>
                                    EQUALITY........................................... 97<br>
                                    UNIVERSAL LAW- PARETO PRINCIPLE.... 100<br>
                                    FORGIVENESS .....................................102<br>
                                    LIFE CIRCLES....................................... 104<br>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex flex-wrap items-center mt-32">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div
                            class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                            <i class="fas fa-user text-xl"></i>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                            Know more about the writer and this platform
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                            Nicholas Kaberia is a writer and an administrator.The platform seeks to provide a platform that
                            molds society through providing a reality encapsulated knowledge through books.
                        </p>
                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                            Here you can be able to learn and unleash through internal potential by learning more about 
                            life, humanity and identifying your inner potential
                        </p>
                        <a href="#/presentation" class="font-bold text-gray-800 mt-8">Nicholas Kaberia</a>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img alt="Nicholas Pic"
                                src="{{ asset('img/kaberia.png') }}"
                                class="w-full align-middle rounded-t-lg" />
                            <blockquote class="relative p-8 mb-4 bg-black">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 583 95" class="absolute left-0 w-full block"
                                    style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current">
                                    </polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                     Nicholas Kaberia
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    The Arctic Ocean freezes every winter and much of the
                                    sea-ice then thaws every summer, and that process will
                                    continue whatever happens.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg"
                            src="{{ asset('img/reality.jpg') }}" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div
                                class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                <i class="fas fa-rocket text-xl"></i>
                            </div>
                            <h3 class="text-3xl font-semibold">Reality Check</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                Start Reading and build yourself
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="fas fa-fingerprint"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                Learn and Unlearn
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="fab fa-html5"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Read and Understand</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="far fa-paper-plane"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Unleash Inner truth</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       @include('components.others')
        <section class="pb-20 relative block bg-gray-900">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white">Growth Is Learning</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            Unfold better version of yourself by seeking knowledge and truth about life.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap mt-12 justify-center">
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <i class="fas fa-medal text-xl"></i>
                        </div>
                        <h6 class="text-xl mt-5 font-semibold text-white">
                            Opportunity
                        </h6>
                        <p class="mt-2 mb-4 text-gray-500">
                           It nevers Books Appointment , get ready
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <i class="fas fa-poll text-xl"></i>
                        </div>
                        <h5 class="text-xl mt-5 font-semibold text-white">
                            Acceptance
                        </h5>
                        <p class="mt-2 mb-4 text-gray-500">
                            Growth is acceptance for a new change.A change that throws away old ways , you must accept
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <i class="fas fa-lightbulb text-xl"></i>
                        </div>
                        <h5 class="text-xl mt-5 font-semibold text-white">Manifestation</h5>
                        <p class="mt-2 mb-4 text-gray-500">
                          Reality is manifestations on our inner thoughts made by you or others.Always question what you think if its better for all
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative block py-24 lg:pt-0 bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                  <form method="post" action="contactus">
                    @csrf
                    <div class="w-full lg:w-6/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                            <div class="flex-auto p-5 lg:p-10">
                                <h4 class="text-2xl font-semibold">Want to contact us?</h4>
                                <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                    Complete this form and we will get back to you shortly.
                                </p>
                                <div class="relative w-full mb-3 mt-8">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="full-name">Full
                                        Name</label>
                                        <input type="text" name="name"
                                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Full Name" style="transition: all 0.15s ease 0s;" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="email">Email</label><input type="email" name="email"
                                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Email" style="transition: all 0.15s ease 0s;" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="message">Message</label>
                                    <textarea rows="4" cols="80" name="message"
                                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Type a message..."></textarea>
                                </div>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                        type="submit" style="transition: all 0.15s ease 0s;">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="relative bg-gray-300 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-700">
                        Find us on any of these platforms, we respond instantly
                    </h5>
                    <div class="mt-6">
                      <a href="{{ env('TWITTER_LINK') }}">
                        <button
                            class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-twitter"></i>
                          </button>
                        </a>
                        <a href="{{ env('FACEBOOK_LINK') }}">
                          <button
                            class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-facebook-square"></i>
                          </button>
                        </a>
                        <a href="{{ env('WHATSAPP_LINK') }}">
                          <button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-whatsapp"></i>
                          </button>
                        </a>
                      
                    </div>
                </div>
             
            </div>
            <hr class="my-6 border-gray-400" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-gray-600 font-semibold py-1">
                        Copyright © 2023 All Rights Reserved To {{ env('APP_NAME') }}
                        <a href="skysoft.co.ke" class="text-gray-600 hover:text-gray-900">Developed By Skysoft</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>

</html>
