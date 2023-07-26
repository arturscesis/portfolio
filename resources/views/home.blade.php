@include('layouts.app')
<style>
    .nav-link.active {
      color: fuchsia; /* Change to the desired color for the active link */
    }

    #content.max-h-0 {
    max-height: 0;
    }

    #content.max-h-500 {
        max-height: 500px; /* Set the desired height of the content */
    }
</style>

<div class="flex items-center justify-center h-screen pb-40 dark:bg-gray-900" id="home">
    <section class="text-center" >
        <div class="font-bold text-white text-3xl mb-4">
            Hello, my name is
        </div>
        <div class="font-bold pl-20 text-white text-5xl mb-4">
            Arturs Podzins
        </div>
        <div class="font-bold pl-24 text-white text-3xl mb-4">
            I'm a <span class="text-fuchsia-600">Backend Developer</span>
        </div>
    </section>
        <div class="w-80 h-80 ml-8 rounded-full ring-4 ring-gray-300 dark:ring-fuchsia-600 overflow-hidden">
            <img class="object-cover w-full h-full" src="img.png" alt="" />
        </div>
</div>

<div class="flex items-center justify-center h-screen pb-40 dark:bg-gray-800" id="about">
    <div class="flex items-center justify-center w-80 h-80 ml-8 rounded-full ring-4 ring-gray-300 dark:ring-fuchsia-600 overflow-hidden">
      <img class="object-cover w-full h-full" src="img.png" alt="" />
    </div>
    <section class="ml-4 w-1/2">
        <div class="flex font-bold justify-center text-white text-5xl mb-4 mr-4 text-fuchsia-600">
            About
        </div>
        <div class="font-bold justify-center text-white text-sm">
            My journey into the world of programming began with an exciting foray into <span class="text-fuchsia-600">Game-Development</span>, which sparked my passion for creating websites. This initial exposure ignited a curiosity that led me down the path of exploration and learning.    
        </div>
        <div id="content" class="font-bold justify-center text-white text-sm max-h-0 overflow-hidden transition-all duration-300" style="display: none;">
            <br>As my interest in programming deepened, I enrolled in a professional school that opened the doors to <span class="text-fuchsia-600">Web-Development</span>. At first, my focus was on the backend, and while it presented its challenges, I quickly found joy in problem-solving and devising efficient solutions.

            <br>Driven by the desire to enhance my skills and broaden my horizons, I tried to apply for various companies, seeking opportunities to further hone my craft. Through this process, I discovered areas where I needed to strengthen my expertise, such as routing, unit testing, and object-oriented programming.

            <br><br>Around a year ago, I found myself collaborating with <span class="text-fuchsia-600">SIA "Istabai"</span> on a remarkable project, co-creating renting platform, <a href="https://bitbox.lv"><span class="text-fuchsia-600">Bitbox.lv</span></a>. During this rewarding experience, I delved into the world of Laravel. Integrating features like <span class="text-fuchsia-600">E-Signature, Stripe Payments, and Google Maps</span> further enriched my skill set.

            Currently, I'm working on a auction platform as well as learning React.
        </div>
        <a id="read-more-link" class="inline-flex items-center ml-72 px-3 py-2 text-sm font-medium text-center text-white bg-fuchsia-600  rounded-lg hover:bg-fuchsia-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-fuchsia-600 dark:hover:bg-fuchsia-700 dark:focus:ring-fuchsia-900">
            Read more
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </section>
    
</div>

<div class="flex items-center justify-center h-screen pb-40" id="specialities">
    <section class="ml-4">
        <div class="flex font-bold justify-center text-white text-5xl mt-40 mb-4 mr-4 text-fuchsia-600">
            Specialities
        </div>
        <div class="flex flex-row mt-4 ml-20 mr-20">
            <div class="relative bg-white ml-4 mr-4 border w-1/3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-fuchsia-600  group">
                <a href="#">
                    <img class="pt-2 pl-2 pr-2 pb-2 rounded-t-lg h-80 w-full" src="laravel.png" alt="" />
                    <div class="overlay-text absolute pl-2 pr-2 rounded-t-lg top-0 left-0 w-full h-full bg-black bg-opacity-80 text-white font-bold text-center flex flex-col items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="text-fuchsia-600 text-3xl font-bold">Laravel</span>
                        <br><br>
                        My journey with Laravel started about a year ago, but as a fast learner, I got familiar with it quite quickly.
                    </div>
                </a>
            </div>
            <div class="relative bg-white ml-4 mr-4 border w-1/3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-fuchsia-600  group">
                <a href="#">
                    <img class="pt-2 pl-2 pr-2 pb-2 rounded-t-lg h-80 w-full" src="docker.png" alt="" />
                    <div class="overlay-text absolute pl-2 pr-2 rounded-t-lg top-0 left-0 w-full h-full bg-black bg-opacity-80 text-white font-bold text-center flex flex-col items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="text-fuchsia-600 text-3xl font-bold">Docker</span>
                        <br><br>
                        My road with Docker started about at the same time as Laravel as it was the easiest to integrate at the start.
                    </div>
                </a>
            </div>
            <div class="relative bg-white ml-4 mr-4 border w-1/3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-fuchsia-600 group">
                <a href="#">
                    <img class="pt-2 pl-2 pr-2 pb-2 rounded-t-lg h-80 w-full" src="php.png" alt="" />
                    <div class="overlay-text absolute pl-2 pr-2 rounded-t-lg top-0 left-0 w-full h-full bg-black bg-opacity-80 text-white font-bold text-center flex flex-col items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="text-fuchsia-600 text-3xl font-bold">PHP</span>
                        <br><br>
                        PHP was the very first programming language I delved into when exploring the world of web development.
                    </div>
                </a>
            </div>
        </div>
        <div class="flex flex-row mt-4 ml-20 mr-20">
            <div class="relative bg-white ml-4 mr-4 border w-1/3 border-fuchsia-600 rounded-lg shadow dark:bg-gray-800 dark:border-fuchsia-600 group">
                <a href="#">
                    <img class="pt-2 pl-2 pr-2 pb-2 rounded-t-lg h-80 w-full" src="cpp.png" alt="" />
                    <div class="overlay-text absolute pl-2 pr-2 rounded-t-lg top-0 left-0 w-full h-full bg-black bg-opacity-80 text-white font-bold text-center flex flex-col items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="text-fuchsia-600 text-3xl font-bold">C++</span>
                        <br><br>
                        C++ is the first programming language I started to learn, because I wanted to make games for myself.
                    </div>
                </a>
            </div>
            <div class="relative bg-white ml-4 mr-4 border w-1/3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-fuchsia-600  group">
                <a href="#">
                    <img class="pt-2 pl-2 pr-2 pb-2 rounded-t-lg h-80 w-full" src="js.png" alt="" />
                    <div class="overlay-text absolute pl-2 pr-2 rounded-t-lg top-0 left-0 w-full h-full bg-black bg-opacity-80 text-white font-bold text-center flex flex-col items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="text-fuchsia-600 text-3xl font-bold">Javascript</span>
                        <br><br>
                        Javascript is one of the newest language I have started working with.<br> Mainly I use it for front-end thingies.
                    </div>
                </a>
            </div>
            <div class="relative bg-white ml-4 mr-4 border w-1/3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-fuchsia-600  group">
                <a href="#">
                    <img class="pt-2 pl-2 pr-2 pb-2 rounded-t-lg h-80 w-full" src="react.png" alt="" />
                    <div class="overlay-text absolute pl-2 pr-2 rounded-t-lg top-0 left-0 w-full h-full bg-black bg-opacity-80 text-white font-bold text-center flex flex-col items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="text-fuchsia-600 text-3xl font-bold">React</span>
                        <br><br>
                        React is the language that I started to learn only recently so it is the least mastered programming language for me.
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>

<div class="flex items-center justify-center h-screen pb-40 dark:bg-gray-800" id="portfolio">
    <section class="text-center" >
        <div class="flex font-bold justify-center text-white text-5xl mt-20 text-fuchsia-600">
            Portfolio
        </div>
        <div class="flex flex-row mt-4">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-white dark:border-gray-700 mr-4">
                <a href="https://bitbox.lv">
                    <img class="rounded-t-lg h-80 w-full" src="bitbox.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="{{route('bitbox.info')}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black"><span class="text-fuchsia-600 font-bold 2xl">Bitbox</span> - Renting platform</h5>
                    </a>
                    <p class="mb-3 font-bold text-gray-700 dark:text-black">Bitbox is a renting platform, where people can rent their items or rent from other people.</p>
                    <a href="{{route('bitbox.info')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-fuchsia-600 rounded-lg hover:bg-fuchsia-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-fuchsia-600 dark:hover:bg-fuchsia-700 dark:focus:ring-fuchsia-900">
                        Read more
                         <svg class="w-3.5 h-3.5 ml-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-white dark:border-gray-700 mr-4">
                <a href="{{route('webscraper.info')}}">
                    <img class="rounded-t-lg h-80" src="scrape.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="{{route('webscraper.info')}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-fuchsia-600 font-bold 2xl">Webscraper</span></h5>
                    </a>
                    <p class="mb-3 font-bold text-gray-700 dark:text-black">One of my personal use projects is a amazon - ebay price scraper and price comparer</p>
                    <a href="{{route('webscraper.info')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-fuchsia-600 rounded-lg hover:bg-fuchsia-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-fuchsia-600 dark:hover:bg-fuchsia-700 dark:focus:ring-fuchsia-900">
                        Read more
                         <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-white dark:border-gray-700">
                <a href="{{route('unity.info')}}">
                    <img class="rounded-t-lg h-80 w-full" src="unity.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="{{route('unity.info')}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-black dark:text-black"><span class="text-fuchsia-600 font-bold 2xl">Unity</span> - Game development</h5>
                    </a>
                    <p class="mb-3 font-bold text-gray-700 dark:text-black">As i mentioned it before game development was the first thing that got me into programming, so ever the years it has stuck with me.</p>
                    <a href="{{route('unity.info')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-fuchsia-600 rounded-lg hover:bg-fuchsia-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-fuchsia-600 dark:hover:bg-fuchsia-700 dark:focus:ring-fuchsia-900">
                        Read more
                         <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
      const navLinks = document.querySelectorAll('.nav-link');
    
      function handleClick(event) {
        event.preventDefault();
        const targetId = event.target.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        
        targetSection.scrollIntoView({
          behavior: 'smooth'
        });
        
        navLinks.forEach(link => link.classList.remove('active'));
        
        event.target.classList.add('active');
      }
      
      navLinks.forEach(link => {
        link.addEventListener('click', handleClick);
      });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const readMoreLink = document.getElementById('read-more-link');
        const content = document.getElementById('content');

        readMoreLink.addEventListener('click', (event) => {
            event.preventDefault();
            content.classList.toggle('max-h-0'); // Toggle the max-height class
            content.classList.toggle('max-h-500'); // Toggle the max-height class
            readMoreLink.style.display = 'none';
            content.style.display = 'block';
        });
    });
</script>