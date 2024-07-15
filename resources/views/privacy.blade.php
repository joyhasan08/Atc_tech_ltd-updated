<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ATC Tech Ltd</title>
        <!-- font  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="shortcut icon" href="/asset/icon/ATC logo-02.png" type="image/png">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
    
        <!-- Styles -->
      
         @vite('resources/css/app.css')
    </head>

 
    <body>
        <header class="  md:text-white   ">
            <section class=" w-full  bg-opacity-80  
            bg-gradient-to-b from-slate-800  to-slate-400">
                <nav class="flex flex-col lg:flex-row md:justify-around md:items-center p-4    ">
                    <div>
                    <a href="/">
                      <img class="w-32 mx-auto md:mx-0 md:w-60" src="/asset/icon/ATC-Logo-white.png" alt="ATC-logo">
                      </a>
                    </div>
                    <div>
                    <ul
                        class="  lg:p-0 flex flex-row justify-between    flex-wrap md:flex-row gap-2 md:gap-5 md:text-base md:font-medium text-xs text-white ">
                        <li class=" hover:text-sky-700 transform hover:scale-110 duration-300  border-b-2 border-spacing-1 p-1 px-2 rounded-lg hover:bg-gray-200 border-blue-400 backdrop-blur-xl "><a href="/">Home</a></li>
                        <li class=" hover:text-sky-700 transform hover:scale-110 duration-300  border-b-2 border-spacing-1 p-1 px-2 rounded-lg hover:bg-gray-200 border-blue-400 backdrop-blur-xl "><a href="/academy">ATC Academy</a></li>
                          <li class=" hover:text-sky-700 transform hover:scale-110 duration-300  border-b-2 border-spacing-1 p-1 px-2 rounded-lg hover:bg-gray-200 border-blue-400 backdrop-blur-xl "><a href="/notice">Notice Board</a></li>
                          <li class=" hover:text-sky-700 transform hover:scale-110 duration-300 border-b-2 border-spacing-1 p-1 px-2 rounded-lg hover:bg-gray-200 border-blue-400 backdrop-blur-xl"><a href="/openings">Current Openings</a></li>                       
                          <li class=" hover:text-sky-700 transform hover:scale-110 duration-300 border-b-2 border-spacing-1 p-1 px-2 rounded-lg hover:bg-gray-200 border-blue-400 backdrop-blur-xl  "><a href="/#contact">Contact Us</a></li>
                      
                    </ul>
                    </div>
                </nav>
            </section>
        </header>
    
    
        <main>
            <!-- Privacy Policy starts  -->
            <section class=" p-4 py-14 max-w-6xl mx-auto text-justify tracking-tighter leading-relaxed">
            <h1 class="text-lg font-bold underline underline-offset-8 pb-2">Privacy Policy</h1>
            <p>At our company, we are committed to protecting the privacy and personal information of our customers.
                This Privacy Policy outlines how we collect, use, and safeguard your information when you use our
                website and services.</p>

            <h2 class="font-bold pt-6 pb-1">1. Information We Collect</h2>
            <ul  class="list-disc pl-8">
                <li>Personal Information: When you use our services, we may collect personal information such as your
                    name, email address, contact number, and billing information. This information is necessary to
                    process your requests and provide you with our services.</li>
                <li>Usage Information: We may collect non-personal information about your interactions with our website
                    and services, including your IP address, browser type, device information, and pages visited. This
                    information helps us analyze trends, enhance user experience, and improve our services.</li>
            </ul>

            <h2 class="font-bold pt-6 pb-1">2. Use of Information</h2>
            <ul  class="list-disc pl-8">
                <li>We use your personal information to provide and deliver the services you request, process payments,
                    and communicate with you about your account and any updates or changes to our services.</li>
                <li>We may use your information to improve our website and services, personalize your experience, and
                    ensure the security and integrity of our systems.</li>
                <li>We may use aggregated and anonymized data for statistical analysis, research, and marketing
                    purposes.</li>
            </ul>

            <h2 class="font-bold pt-6 pb-1">3. Data Security</h2>
            <ul  class="list-disc pl-8">
                <li>We implement industry-standard security measures to protect your personal information from
                    unauthorized access, disclosure, alteration, or destruction.</li>
                <li>We regularly review and update our security practices to maintain the confidentiality and integrity
                    of your data.</li>
            </ul>

            <h2 class="font-bold  pt-6 pb-1">4. Third-Party Disclosure</h2>
            <ul  class="list-disc pl-8">
                <li>We do not sell, trade, or transfer your personal information to outside parties without your
                    consent, except in cases where it is necessary to provide the requested services or comply with
                    legal requirements.</li>
                <li>We may share your information with trusted third-party service providers who assist us in operating
                    our website, conducting business, or providing services on our behalf. These third parties are
                    required to maintain the confidentiality of your information.</li>
            </ul>

            <h2 class="font-bold  pt-6 pb-1">5. Cookies and Tracking Technologies</h2>
            <p>We use cookies and similar tracking technologies to enhance your experience on our website, analyze
                trends, and gather information about user behavior. You have the option to disable cookies in your
                browser settings, but this may limit certain features and functionality of our website.</p>

            <h2 class="font-bold  pt-6 pb-1">6. Links to Third-Party Websites</h2>
            <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices
                or content of these websites. We encourage you to review the privacy policies of any third-party
                websites you visit.</p>

            <h2 class="font-bold  pt-6 pb-1">7. Children’s Privacy</h2>
            <p>Our services are not intended for individuals under the age of 18. We do not knowingly collect personal
                information from children. If you are a parent or guardian and believe that your child has provided us
                with personal information, please contact us, and we will promptly delete such information.</p>

            <h2 class="font-bold  pt-6 pb-1">8. Changes to the Privacy Policy</h2>
            <p>We may update this Privacy Policy from time to time. Any changes will be posted on our website, and the
                revised policy will be effective immediately upon posting.</p>

            <h2 class="font-bold  pt-6 pb-1">9. Contact Us</h2>
            <p class="pb-2">If you have any questions or concerns about our Privacy Policy or the handling of your personal
                information, please contact our Privacy Officer at <span class="text-blue-500">support@atctechltd.com<span>
                <br>
            <p>
                By using our website and services, you consent to the collection, use, and disclosure of your
                information as described in this Privacy Policy.
            </p>


            </p>
        </section>
        <!-- Privacy Policy Ends -->
    

        </main>
        <!-- Main Footer use this on For Every page -->
        <footer id="contact">
          <footer class="py-6 bg-[#3a3a3a] text-white">
              <div class="container px-6 mx-auto space-y-6 divide-y dark:divide-gray-400 md:space-y-12 divide-opacity-50">
                  <div class="grid grid-cols-12 gap-4">
  
                      <div class="col-span-12 text-center md:text-left md:col-span-3">
                          <p class="pb-1 text-lg font-medium hover:cursor-pointer ">USA Office</p>
                          <ul>
                              <li>
                                  <p class="hover:text-blue-400 hover:cursor-pointer ">404, Shatto Pl, Suite # 506, <br>
                                      Losangeles, CA 90020.
                                  </p>
                              </li>
                              <li>
                                  <p class="hover:text-blue-400 hover:cursor-pointer "> Email:
                                      atctechltdusa@gmail.com</p>
                              </li>
  
  
                          </ul>
                      </div>
  
                      <div class="col-span-12 text-center md:text-left md:col-span-3">
                          <p class="pb-1 text-lg font-medium hover:cursor-pointer ">Dubai Office</p>
                          <ul>
                              <li>
                                  <p class="hover:text-blue-400 hover:cursor-pointer ">Central
                                      Building, Shop No. G-11, <br> Naif,
                                      Deira, Dubai, UAE.
                                  </p>
                              </li>
                              <li>
                                  <p class="hover:text-blue-400 hover:cursor-pointer "> Email:
                                      atctechlimited@gmail.com</p>
                              </li>
  
  
                          </ul>
                      </div>
  
                      <div class="col-span-12 text-center md:text-left md:col-span-3">
                          <p class="pb-1 text-lg font-medium hover:cursor-pointer ">Bangladesh Office</p>
                          <ul> 
                              <li>
                                  <p class="hover:text-blue-400 hover:cursor-pointer ">Rajshahi Office: 
                                  BSMHTP, Joy Silicon Tower, Level # 7, Suit # A, Rajshahi.</p>
                              </li>
                              <li>
                                  <p class="hover:text-blue-400 hover:cursor-pointer ">Email: support@atctechltd.com</p>
                              </li>
                              <li>
                                  <p class="hover:text-blue-400 hover:cursor-pointer ">Email: atctechltdbd@gmail.com</p>
                              </li>
  
                          </ul>
                      </div>
  
                      <div
                          class="pb-6  md:pb-0 md:col-span-3 col-span-12  flex flex-col md:flex-row justify-around items-center">
                          <img class="w-48" src="/asset/icon/ATC-Logo-white.png" alt="">
                          <!-- <img class="w-48" src="./asset/icon/5dff5369c15edNews_6-removebg-preview.png" alt=""> -->
                      </div>
                  </div>
                  <div class="grid justify-center pt-6 lg:justify-between">
                      <div class="flex flex-col self-center text-sm text-center md:block lg:col-start-1 md:space-x-6 hover:cursor-pointer ">
                          <span>©2024 All rights reserved | ATC Tech Ltd </span>
                        <a class="hover:cursor-pointer hover:text-blue-400 "rel="noopener noreferrer" href="/privacy">
					       <span>Privacy policy</span>
				        </a>
				<a class=" hover:cursor-pointer hover:text-blue-400 " rel="noopener noreferrer" href="/terms">
					<span>Terms of service</span>
				</a>

				<a class=" hover:cursor-pointer hover:text-blue-400 " rel="noopener noreferrer" href="/refund">
					<span>Refund Policy</span>
				</a>
				<a class=" hover:cursor-pointer hover:text-blue-400 " rel="noopener noreferrer" href="/fraud">
					<span>Fraud Policy</span>
				</a>				
				<a class=" hover:cursor-pointer hover:text-blue-400 " rel="noopener noreferrer" href="/report">
					<span>Compliance Report</span>
				</a>
                <a class=" hover:cursor-pointer hover:text-blue-400 " rel="noopener noreferrer" href="/aboutUs">
					<span>About Us</span>
				</a>
				
			
			
  
                      </div>
                      <div class="flex justify-center pt-4 space-x-4 lg:pt-0 lg:col-end-13">
                          <a rel="noopener noreferrer" target="_blank" href="https://www.linkedin.com/company/atc-tech-ltd17/"
                              title="LinkedIn"
                              class="flex items-center justify-center w-10 h-10 rounded-full bg-[#0F79B9] dark:text-gray-900">
  
                              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512"
                                  class="w-5 h-5">
  
                                  <path
                                      d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                              </svg>
  
                          </a>
                          <a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/@ATCTechLtd17" title="Youtube"
                              class="flex items-center justify-center w-10 h-10 rounded-full sm:w-10 sm:h-10 bg-[#0F79B9] dark:text-gray-900">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 576 512"
                                  class="w-5 h-5">
                                  <path
                                      d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                              </svg>
                          </a>
                          <a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/ATCTechLtd17/" title="Facebook"
                              class="flex items-center justify-center w-10 h-10 rounded-full sm:w-10 sm:h-10 bg-[#0F79B9] dark:text-gray-900">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                                  class="w-5 h-5">
                                  <path
                                      d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z">
                                  </path>
                              </svg>
                          </a>
                          <a rel="noopener noreferrer" target="_blank" href="https://twitter.com/atctechltd17" title="X"
                              class="flex items-center justify-center w-10 h-10 rounded-full dark:bg-[#0F79B9] dark:text-gray-900">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"
                                  class="h-5 w-5">
                                  <path
                                      d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                              </svg>
                          </a>
                         
                      </div>
                  </div>
              </div>
          </footer>
      </footer>
    </body>

</html>
