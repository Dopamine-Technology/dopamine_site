<nav class="bg-white fixed w-full z-20 top-0 start-0 shadow-md">
    <div class="md:mx-[104px] flex flex-wrap items-center justify-between mx-auto p-4" id="nav_container">
        <a href="/#hero" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('assets/images/logo.png')}}" class="w-32" alt="Dopamine Logo">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                    class="text-[#248CA6] font-medium rounded-full border border-[#248CA6] text-sm px-5 py-2.5 text-center me-2 mb-2 hover:bg-gray-50">
                Contact Us
            </button>

            <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-[16px] border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                <li>
                    <a href="/#hero"
                       id="home_link"
                       class="block py-2 px-3  rounded md:bg-transparent text-[#494949] hover:text-[#425CA8] md:p-0 md:dark:text-blue-500"
                       aria-current="page">Home
                    </a>
                <li>
                    <a href="/#services_section"
                       class="block py-2 px-3  rounded md:bg-transparent text-[#494949] hover:text-[#425CA8] md:p-0 md:dark:text-blue-500"
                       id="services_link"
                       aria-current="page">Services
                    </a>
                </li>
                <li>
                    <a href="/#aboutus_section"
                       class="block py-2 px-3 rounded md:bg-transparent text-[#494949] hover:text-[#425CA8] md:p-0 md:dark:text-blue-500"
                       id="aboutus_link"
                       aria-current="page">About Us
                    </a>
                </li>
                <li>
                    <a href="/#porfolio_section"
                       class="block py-2 px-3  rounded md:bg-transparent text-[#494949] hover:text-[#425CA8] md:p-0 md:dark:text-blue-500"
                       id="portfolio_link"
                       aria-current="page">Portfolio
                    </a>
                </li>
                <li>
                    <a href="/#testimonial_section"
                       class="block py-2 px-3  rounded md:bg-transparent text-[#494949] hover:text-[#425CA8] md:p-0 md:dark:text-blue-500"
                       id="testimonial_link"
                       aria-current="page">Testimonial
                    </a>
                </li>
                <li>
                    <a href="/#blog_section"
                       class="block py-2 px-3  rounded md:bg-transparent text-[#494949] hover:text-[#425CA8] md:p-0 md:dark:text-blue-500"
                       id="blog_link"
                       aria-current="page">Blog
                    </a>
                </li>
                <li>
                    <a href="#contact_us_section"
                       class="block py-2 px-3  rounded md:bg-transparent text-[#494949] hover:text-[#425CA8] md:p-0 md:dark:text-blue-500"
                       id="contact_link"
                       aria-current="page">Contact
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>


