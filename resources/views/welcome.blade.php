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
      <header class=" md:min-h-[700px]    text-white ">
          <section class="absolute z-10 w-full  bg-opacity-80  
              bg-gradient-to-b from-slate-800">
              <nav class="flex flex-col lg:flex-row md:justify-around md:items-center p-4    ">
                  <div>
                      <a href="/">
                      <img class="w-32 mx-auto md:mx-0 md:w-60" src="/asset/icon/ATC-Logo-white.png" alt="ATC-logo">
                      </a>
                  </div>
                  <div>
                      <ul
                          class="  lg:p-0 flex flex-row justify-between    flex-wrap md:flex-row gap-2 md:gap-5 md:text-base md:font-medium text-xs cursor-pointer ">
                          <li class=" hover:text-sky-700 transform hover:scale-110 duration-300  border-b-2 border-spacing-1 p-1 px-2 rounded-lg hover:bg-gray-200 border-blue-400 backdrop-blur-xl "><a href="/academy">ATC Academy</a></li>
                          <li class=" hover:text-sky-700 transform hover:scale-110 duration-300  border-b-2 border-spacing-1 p-1 px-2 rounded-lg hover:bg-gray-200 border-blue-400 backdrop-blur-xl "><a href="/notice">Notice Board</a></li>
                          <li class=" hover:text-sky-700 transform hover:scale-110 duration-300 border-b-2 border-spacing-1 p-1 px-2 rounded-lg hover:bg-gray-200 border-blue-400 backdrop-blur-xl"><a href="/openings">Current Openings</a></li>                       
                          <li class=" hover:text-sky-700 transform hover:scale-110 duration-300 border-b-2 border-spacing-1 p-1 px-2 rounded-lg hover:bg-gray-200 border-blue-400 backdrop-blur-xl  "><a href="/#contact">Contact Us</a></li>
                          
                          <!-- <li class="hidden md:block  "><a href="#">
                                  <img class="w-9 p-2 rounded-full bg-[#0F79B9] hover:bg-teal-700"
                                      src="./asset/icon/search-alt-svgrepo-com.svg" alt=""></a>
                          </li> -->
                             <!-- <li class=" hover:text-sky-700 transform hover:scale-110 duration-300 border-b-2 border-spacing-1 p-1 px-2 rounded-lg hover:bg-gray-200 border-blue-400 backdrop-blur-xl  "><a href="/about">About Us</a></li> -->
  
                      </ul>
                  </div>
              </nav>
              <!-- HERO Section -->
              <section class="flex items-center justify-center z-10 min-h-[400px]  md:min-h-[600px] ">
                  <div class="md:max-w-7xl md:mx-auto w-full text-center space-y-4">
                      <h2 class="md:text-6xl text-2xl ">
                          <span class="font-light">Innovate,</span>
                          <span class="font-bold text-[#0f79b9]">Create</span>
                          <span class="font-light">, Elevate</span>
                      </h2>
                      <h2 class="md:text-6xl text-xl font-bold">
                          Your Digital Journey Starts Here.
                      </h2>
                      <div
                          class="flex gap-4 justify-center items-center text-xs md:text-lg py-2 md:py-4 divide-x-2 md:min-h-28  ">
                          <h3 class="">7+ years <br> experience</h3>
  
                          <h3 class="pl-4">24/7 Customer <br> Support</h3>
                      </div>
                      <a href="#contact">
                          <button class=" text-white bg-[#0f79b9] hover:bg-gray-500 md:text-2xl md:font-semibold p-2 md:px-4 md:py-3 rounded-lg shadow-xl 
                          flex gap-2 items-center mx-auto ">Contact
                              Us <span><img class=" w-5 md:w-10" src="./asset/icon/arrow.svg" alt=""></span></button>
                      </a>
                  </div>
              </section>
          </section>
          <!-- carusol start -->
          <section class="  relative  w-full -z-0">
              <div class=" h-[510px]  md:h-[700px] w-full overflow-hidden flex flex-nowrap text-center" id="slider">
                  <div class=" flex-none w-full flex flex-col items-center justify-center">
                      <img src="/asset/background/hacker-dark-room-image.jpg" alt="">
                  </div>
                  <!-- <div class=" flex-none w-full flex flex-col items-center justify-center">
                          <img src="./asset/background/Carousel-image-3.jpg" alt="">
                      </div> -->
                  <div class=" flex-none w-full flex flex-col items-center justify-center">
                      <img src="/asset/background/robot-working-office-instead-humans.jpg" alt="">
                  </div>
              </div>
          </section>
          <!-- carusol end -->
      </header>
  
  
      <main class="w-full">
          <!-- Benefits Section -->
          <section class="pb-10 p-4  lg:mt-10">
              <div class="text-center space-y-6 pb-14 max-w-6xl mx-auto">
                  <h2 class="md:text-4xl text-3xl font-semibold"> <span class="text-[#0f79b9]">Unleash</span> Your
                      Business Potential with ATC Tech Ltd
                  </h2>
                  <p class="md:text-lg font-normal text-justify ">
                      Experience a transformative journey with our
                      comprehensive services. Gain a competitive edge with our innovative solutions, boost productivity
                      and efficiency, achieve ambitious business goals, reduce costs, save time, and empower your team.
                      With personalized strategies, proven expertise, and measurable results, partner with ATC Tech Ltd.
                      for lasting success. Contact us now to discover the difference we can make for your business!
                  </p>
              </div>
              <!-- container -->
              <div class="grid lg:grid-cols-3 md:grid-cols-2 max-w-6xl mx-auto md:gap-14 gap-8">
                  <!-- card 1 -->
                  <div class="text-center p-8 border-t-8 rounded-2xl border-[#0f79b9]  shadow-2xl space-y-2">
                      <img class="w-14 my-4 mx-auto" src="/asset/icon/terminal-svgrepo-com.svg" alt="terminal-icon">
                      <h2 class="font-semibold text-xl">Tailored Software Solutions</h2>
                      <p class=" text-justify tracking-tighter leading-relaxed   ">
                          Our software development services are customized to meet the unique needs of each client,
                          ensuring that the final product aligns perfectly with their requirements and objectives.
                      </p>
                  </div>
                  <!-- card 2 -->
                  <div class="text-center p-8 border-t-8 rounded-xl border-[#0f79b9] shadow-2xl space-y-2">
                      <img class="w-14 my-4 mx-auto  rounded-2xl " src="/asset//icon/bot.svg" alt="terminal-icon">
                      <h2 class="font-semibold text-xl">Cutting-edge AI Solutions</h2>
                      <p class="text-justify tracking-tighter leading-relaxed  ">
                          Our artificial intelligence solutions enable businesses to harness the power of advanced
                          algorithms and data analytics to optimize processes, make data-driven decisions, and gain a
                          competitive edge in their industry.
                      </p>
                  </div>
                  <!-- card 3 -->
                  <div class="text-center p-8 border-t-8 rounded-xl border-[#0f79b9] shadow-2xl space-y-2">
                      <img class="w-14 my-4 mx-auto" src="/asset/icon/shield-check-svgrepo-com.svg" alt="terminal-icon">
                      <h2 class="font-semibold text-xl">Robust Security Measures</h2>
                      <p class="text-justify tracking-tighter leading-relaxed  ">
                          With our expertise in software and network security, customers can rest assured that their
                          sensitive data and systems are protected against cyber threats, breaches, and unauthorized
                          access.
                      </p>
                  </div>
                  <!-- card 4 -->
                  <div class="text-center p-8 border-t-8 rounded-xl border-[#0f79b9] shadow-2xl space-y-2">
                      <img class="w-14 my-4 mx-auto" src="/asset/icon/cloud-check-svgrepo-com.svg" alt="terminal-icon">
                      <h2 class="font-semibold text-xl">Scalable Cloud Services</h2>
                      <p class="text-justify tracking-tighter leading-relaxed  ">
                          Our cloud services empower organizations to leverage the flexibility, scalability, and
                          cost-efficiency of cloud computing, enabling them to adapt to changing business needs and
                          accelerate digital transformation initiatives.
                      </p>
                  </div>
                  <!-- card 5 -->
                  <div class="text-center p-8 border-t-8 rounded-xl border-[#0f79b9] shadow-2xl space-y-2">
                      <img class="w-14 my-4 mx-auto" src="/asset/icon/box-minimalistic-svgrepo-com.svg"
                          alt="terminal-icon">
                      <h2 class="font-semibold text-xl">Streamlined DevOps Practices</h2>
                      <p class="text-justify tracking-tighter leading-relaxed  ">
                          By bridging the gap between development and operations, our DevOps expertise fosters a seamless
                          workflow, leading to quicker deployments, robust software quality, and a faster path to market
                          success.
                      </p>
                  </div>
                  <!-- card 6 -->
                  <div class="text-center p-8 border-t-8 rounded-xl border-[#0f79b9] shadow-2xl space-y-2">
                      <img class="w-14 my-4 mx-auto"
                          src="/asset/icon/problem-solving-fix-offer-solution-solve-svgrepo-com.svg" alt="terminal-icon">
                      <h2 class="font-semibold text-xl">Innovative IoT Solutions</h2>
                      <p class=" text-justify tracking-tighter leading-relaxed  ">
                          We enable businesses to capitalize on the Internet of Things by designing and implementing IoT
                          solutions that enhance connectivity, efficiency, and automation across various devices and
                          platforms.
                      </p>
                  </div>
              </div>
          </section>
  
          <!-- Extra section -->
          <section>
              <div
                  class=" md:max-w-6xl w-fit  md:mt-8 px-4 md:px-10 py-4 rounded-lg lg:mx-auto mx-4 bg-[url('/public/asset/background/stacked.svg')] shadow-2xl  ">
                  <div class=" text-white   mx-auto py-10 max-w-6xl flex justify-center items-center  ">
                      <h2
                          class="w-full font-medium md:font-semibold md:text-3xl text-xl text-justify tracking-tight leading-normal">
                          We don't just speak the language of technology, we translate it into tangible results. That's
                          what makes ATC Tech Limited different . . .
                      </h2>
                  </div>
              </div>
          </section>
  
          <!-- Our services -->
          <section class="   pb-10  p-4 ">
              <div class="text-center py-14 space-y-4">
                  <h1 class="text-4xl font-semibold">Our <span class="text-[#0F79B9]">Services</span></h1>
                  <p class="text-lg max-w-6xl mx-auto leading-relaxed text-justify    ">
                      For over 7 years, ATC Tech Limited has been dedicated to providing innovative and sustainable
                      solutions. Our team of skilled engineers is passionate about creating high-quality products that
                      meet your needs while minimizing environmental impact. We are committed to exceeding your
                      expectations and building long-lasting partnerships.
                  </p>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-4 text-left">
  
                  <div
                      class="flex  items-center justify-between px-2 lg:px-8 gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg  ">
                      <img class="w-14   hover:ease-in-out ease-in-out "
                          src="/asset/icon/Ourservice_Icons/1.Software_Developement.png" alt="">
                      <h2 class="md:text-xl font-medium">Software Development</h2>
                  </div>
                  <div
                      class="flex  items-center justify-between px-2 lg:px-8  gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                      <img class="w-14 " src="/asset/icon/Ourservice_Icons/2.Web_Development.png" alt="">
                      <h2 class="md:text-xl font-medium">Web Development</h2>
                  </div>
                  <div
                      class="flex  items-center justify-between px-2 lg:px-8 gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                      <img class="w-14 " src="/asset/icon/Ourservice_Icons/3.Mobile_Application_Development.png" alt="">
                      <h2 class="md:text-xl font-medium w-fit">App Development</h2>
                  </div>
                  <div
                      class="flex  items-center justify-between px-2 lg:px-8 gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                      <img class="w-14 " src="/asset/icon/Ourservice_Icons/4.UI_UX_Design.png" alt="">
                      <h2 class="md:text-xl font-medium">UI/UX Design</h2>
                  </div>
                  <div
                      class="flex  items-center justify-between px-2 lg:px-8 gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                      <img class="w-14 " src="/asset/icon/Ourservice_Icons/5.Quality_Assurance_And_Testing.png" alt="">
                      <h2 class="md:text-xl font-medium">SQA & Testing</h2>
                  </div>
                  <div
                      class="flex  items-center justify-between px-2 lg:px-8 gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                      <img class="w-14 " src="/asset/icon/Ourservice_Icons/6.Artificial-Intelligence.png" alt="">
                      <h2 class="md:text-xl font-medium">Artificial Intelligence</h2>
                  </div>
                  <div
                      class="flex  items-center justify-between px-2 lg:px-8 gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                      <img class="w-14 " src="/asset/icon/Ourservice_Icons/7.Cloud-Service-Solution.png" alt="">
                      <h2 class="md:text-xl font-medium">Cloud Solution</h2>
                  </div>
                  <div
                      class="flex  items-center justify-between px-2 lg:px-8 gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                      <img class="w-14 " src="/asset/icon/Ourservice_Icons/8.Cyber-Security.png" alt="">
                      <h2 class="md:text-xl font-medium">Cyber Security</h2>
                  </div>
                  <div
                      class="flex   items-center justify-between px-2 lg:px-8 gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                      <img class="w-14 " src="/asset/icon/Ourservice_Icons/9.Data_Analyst.png" alt="">
                      <h2 class="md:text-xl    font-medium">Data Analytics</h2>
                      <!-- & Business Intelligence -->
                  </div>
                  <div
                      class="flex  items-center justify-between px-2 lg:px-8 gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                      <img class="w-14 " src="/asset/icon/Ourservice_Icons/10.Consulting_Service.png" alt="">
                      <h2 class="md:text-xl font-medium">Consulting Services</h2>
                  </div>
                  <div
                      class="flex  items-center justify-between px-2 lg:px-8 gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                      <img class="w-14 " src="/asset/icon/Ourservice_Icons/11.Devops.png" alt="">
                      <h2 class="md:text-xl font-medium">Dev Ops</h2>
                  </div>
                  <div
                      class="flex  items-center justify-between px-2 lg:px-8 gap-4 border-2 border-[#0F79B9] p-4 hover:bg-sky-600 hover:text-white rounded-lg ">
                      <img class="w-14 " src="/asset/icon/Ourservice_Icons/12.graphic-design.png" alt="">
                      <h2 class="md:text-xl font-medium">Graphic Design</h2>
                  </div>
              </div>
          </section>
  
          <!-- What We Do Section -->
          <section class="  w-full flex flex-col md:flex-row items-center  lg:px-20   
                  bg-[url('/public/asset/background/final.svg')] bg-no-repeat lg:bg-[length:100%] p-4   lg:h-[600px]       ">
              <section class="md:px-4 px-2  mx-auto w-full">
                  <div class="w-full mx-auto  text-center   md:w-11/12 xl:w-9/12 ">
                      <h1 class="p-2 md:p-4 mb-6 text-2xl   md:text-4xl md:tracking-tight">
                          <span
                              class="block w-full text-transparent italic md:text-justify text-left  leading-relaxed md:leading-relaxed bg-clip-text bg-gradient-to-r from-[#0F79B9] to-[#0F79B9] md:inline">
                              ATC Tech Ltd. delivers
                              tailored technology
                              solutions, from software
                              development to AI and cloud
                              services, empowering
                              Businesses to thrive in the
                              Digital Age.
                          </span>
                      </h1>
                      <a href="/about">
                          <button
                              class="hover:bg-[#0f79b9] shadow-2xl hover:text-white  font-semibold text-white md:text-black px-6 py-3 my-6 w-fit mx-auto rounded-lg border-b-2  ">Let’s
                              Connect </button>
                      </a>
                  </div>
              </section>
          </section>
  
          <!-- Our exparties -->
          <section class="w-full   ">
            <div class="md:max-w-6xl md:mx-auto text-center md:py-16 pt-8 pb-4   md:space-y-4 space-y-2">
                <h1 class="text-4xl font-medium">Our <span class="text-[#0f79b9] font-bold"> Expertise</span></h1>
                <p class="md:text-lg p-4 text-justify leading-relaxed">
                    With a proven track record of success in outsourcing projects for diverse clients across Singapore,
                    Malaysia, Dubai, and the USA, we possess a deep understanding of international business requirements
                    and cultural nuances. We are committed to fostering strong communication and collaboration,
                    regardless of location, to deliver exceptional results for your global organization.
                </p>
            </div>

            <!-- container -->
            <div class="md:max-w-6xl md:mx-auto grid grid-cols-1 gap-10 p-4 lg:p-0  ">

                <!-- card 1 -->
                <div
                    class="w-full md:h-60   shadow-2xl rounded-lg border-b-4 border-[#0F79B9]    flex md:flex-row flex-col    justify-between ">
                    <div class="md:w-1/2">
                        <img class=" rounded-l-lg w-full h-full object-cover" src="/asset/services/1_ChatBot.jpg"
                            alt="">
                    </div>
                    <div class="space-y-4 pt-4 p-6">
                        <h2 class="text-2xl font-semibold">Chatbots</h2>
                        <p class=" md:text-lg leading-relaxed ">Chatbots are
                            AI-powered
                            software that can
                            interact with
                            users
                            in a
                            conversational
                            manner.
                            They can provide customer support, answer common questions, and guide users through the
                            website. Chatbot services offer advanced functionalities for creating interactive chatbots.
                        </p>
                        <!-- <button class="bg-[#0f79b9] shadow-2xl my-4 w-fit  px-4 rounded-lg text-white   py-2">Read
                            more</button> -->
                    </div>

                </div>

                <!-- card flip -2 -->
                <div
                    class="w-full md:h-60      shadow-2xl rounded-lg border-b-4 border-[#0F79B9]   flex md:flex-row  flex-col-reverse    justify-between ">
                    <div class="space-y-4 pt-4 p-6 mb-4">
                        <h2 class="text-2xl font-semibold">Adaptation of Machine Learning</h2>
                        <p class=" md:text-lg leading-relaxed ">
                            Given our focus on the machine learning in our software and commitment to delivering
                            exceptional products to our customers, machine learning platforms play a vital role in our
                            work. These platforms provide the essential tools and infrastructure to efficiently develop
                            and deploy machine learning models, while AI software offers robust frameworks, libraries,
                            and tools to streamline the entire AI model development and deployment process, aligning
                            perfectly with our company culture.
                        </p>
                        <!-- <button class="bg-[#0f79b9] my-4 w-fit  px-4 rounded-lg shadow-2xl text-white   py-2">Read
                            more</button> -->
                    </div>
                    <div class="md:w-1/2">
                        <img class=" w-full h-full  rounded-r-lg object-cover"
                            src="/asset/services/14_Machine_Learning_platfrom.jpg" alt="">
                    </div>
                </div>


                <!-- card 3 -->
                <div
                    class="w-full md:h-60   shadow-2xl rounded-lg border-b-4 border-[#0F79B9]  flex md:flex-row flex-col     justify-between ">
                    <div class="md:w-1/2">
                        <img class=" rounded-l-lg w-full h-full object-cover"
                            src="/asset/services/16.software_development.jpg" alt="">
                    </div>
                    <div class="space-y-4 pt-4 p-6 ">
                        <h2 class="text-2xl font-semibold">Software Development</h2>
                        <p class=" md:text-lg leading-relaxed  ">
                            At our company, we believe in harnessing the power of modern technology to craft exceptional
                            websites. Our team of brilliant minds collaborates closely, leveraging their expertise in
                            software development to design and build user-centric, impactful experiences that empower
                            our clients and their audiences.
                        </p>
                        <!-- <button class="bg-[#0f79b9] shadow-2xl my-4 w-fit  px-4 rounded-lg text-white   py-2">Read
                            more</button> -->
                    </div>
                </div>


                <!-- card flip -4 -->
                <div
                    class="w-full md:h-60   shadow-2xl rounded-lg border-b-4 border-[#0F79B9]   flex md:flex-row flex-col-reverse    justify-between ">

                    <div class="space-y-4 pt-4 p-6">
                        <h2 class="text-2xl font-semibold">Fraud Detection and Cyber Security</h2>
                        <p class=" md:text-lg leading-relaxed  ">
                            Our unwavering commitment is safeguarding your data. We employ cutting-edge fraud detection
                            systems to shield your software and information from cyber attacks. In the rare event of a
                            breach, our data recovery expertise ensures a swift comeback. Additionally, our digital
                            forensics team meticulously investigates incidents, while robust security protocols offer
                            unwavering resistance against digital warfare.
                        </p>
                        <!-- <button class="bg-[#0f79b9] shadow-2xl my-4 w-fit  px-4 rounded-lg  text-white py-2">Read
                            more</button> -->
                    </div>
                    <div class="md:w-1/2">
                        <img class=" w-full h-full rounded-r-lg object-cover"
                            src="/asset/services/11.Predictive_Analysis.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
          <!-- Insider section -->
          <section class="  md:mt-16 shadow-lg     ">
              <section class="flex  gap-4 py-4 w-full bg-gray-100 shadow-lg  mt-10    ">
                  <div class="md:w-1/2 hidden md:block">
                      <img class="  w-96   " src="/asset/background/Lovepik_com-400671134-geometric-lines (2).png"
                          alt="">
                  </div>
                  <div class="md:w-1/2 w-full text-center flex flex-col justify-center items-center space-y-4 p-4  ">
                      <h2 class="text-3xl md:text-4xl font-semibold">Become an <span class="text-[#0f79b9]">insider</span>
                      </h2>
                      <p class="md:text-lg font-normal text-wrap "> Elevate your career with us as we shape the future of
                          technology
                          together.</p>
                      <a href="/openings">
                          <button
                              class="text-white bg-[#0f79b9] hover:bg-gray-300 hover:text-black md:text-xl font-semibold md:px-3 py-2 px-6 md:py-2 rounded-lg shadow-xl ">Join
                              Us</button>
                      </a>
                  </div>
              </section>
          </section>
  
          <!-- quote Section -->
          <section class="  mt-10 md:mb-10 mb-4     ">
              <div class=" w-full  flex justify-center   ">
                  <div
                      class="flex flex-col items-center max-w-5xl w-fit p-2 md:p-4 m-2 md:mb-8 md:mx-auto  lg:mx-0 md:border-4 md:border-[#0F79B9]">
                      <div class="relative text-center p-4 ">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                              class="absolute top-0 left-0 w-8 h-8 dark:text-gray-700">
                              <path fill="currentColor" d="M232,246.857V16H16V416H54.4ZM48,48H200V233.143L48,377.905Z">
                              </path>
                              <path fill="currentColor"
                                  d="M280,416h38.4L496,246.857V16H280ZM312,48H464V233.143L312,377.905Z"></path>
                          </svg>
                          <p class="px-6 py-1 md:text-2xl text-pretty leading-relaxed tracking-wider     "> Building on
                              seven years of
                              successful
                              software
                              development,
                              ATC confidently approaches future needs. Our highly skilled engineers, trained in
                              international quality standards, ensure flawless execution and uncompromising data security.
                              We empower organizations through technology and strive for global leadership, fueled by
                              stakeholder support and a commitment to innovation. </p>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                              class="absolute bottom-0 right-0 w-8 h-8 dark:text-gray-700">
                              <path fill="currentColor" d="M280,185.143V416H496V16H457.6ZM464,384H312V198.857L464,54.1Z">
                              </path>
                              <path fill="currentColor"
                                  d="M232,16H193.6L16,185.143V416H232ZM200,384H48V198.857L200,54.1Z"></path>
                          </svg>
                      </div>
                      <span class="w-12 h-1 my-2 rounded-lg dark:bg-[#0f79b9]"></span>
                      <p><span class="font-bold text-lg">MD & CEO at ATC Tech Limited</span>
                      </p>
                  </div>
              </div>
  
          </section>
  
  
          <!-- Trusted BY  -->
          <section>
            <section class=" ">
                <div class="container p-4 mx-auto text-center mb-4 md:mb-10">
                    <h2 class="text-2xl md:text-4xl font-medium ">Trusted by the <span class="text-[#0F79B9]">Industry
                            leaders</span>
                    </h2>
                </div>
                <div class="container flex flex-wrap justify-center mx-auto text-gray-400 max-w-7xl ">
                    <div class="flex flex-col md:flex-row items-center justify-between px-2  ">
                        <div class="flex flex-col md:flex-row justify-between md:gap-10  items-center mx-auto md:border-b-0 border-b-2 md:border-r-2 md:p-6  md:w-1/2 w-full  ">

                            <div class="flex justify-center items-center w-1/2  align-middle h-full  ">
                                <div class="w-full h-full">
                                    <h6 class=" font-medium text-wrap tracking-tighter text-black text-center">
                                        Registered of Prime
                                        Minister's Office
                                    </h6>
                                    <img class=" " src="/asset/sponser/Bida/Bida-Transparent.png" alt="">
                                </div>
                            </div>

                            <div class="flex justify-center items-center w-1/2  align-middle h-full  ">
                                <div class="  w-full flex flex-col justify-between h-24">
                                    <h6 class=" font-medium text-black text-center tracking-tighter   ">
                                    Allotted from</h6>
                                    <img src="/asset/sponser/HiTech/HITech.jpg" alt="">
                                </div>

                            </div>

                            <div class="flex justify-center items-center w-1/2  align-middle h-full  ">
                                <div class=" h-full w-full">
                                    <h6 class=" font-medium text-black text-center tracking-tighter pt-2  ">A General
                                        Member
                                        of</h6>
                                    <img src="/asset/sponser/Basis/Basis-removebg-preview.png" alt="">
                                </div>

                            </div>

                            <div class="flex justify-center items-center w-1/2  align-middle h-full  ">
                                <div class=" h-full w-full flex flex-col justify-center items-center text-center">
                                    <h6 class=" font-medium text-black text-center tracking-tighter pt-2  ">ISO Certification</h6>
                                    <img class="w-28" src="/asset/sponser/iso/iso.png" alt="">
                                </div>

                            </div>

                        </div>
                        <!-- financial -->
                        <!-- <div>
                            <h6 class=" font-medium text-wrap tracking-tighter text-black text-center">
                                Financial Partner
                            </h6>
                            <div
                                class="flex flex-col md:flex-row justify-between md:gap-10  items-center mx-auto  p-4    ">
                                <div class="flex justify-center items-center w-1/2  align-middle h-full  ">
                                    <div class=" h-full w-full">

                                        <img src="./asset/sponser/City bank/City_bank-Transparent.png" alt="">

                                    </div>

                                </div>
                                <div class="flex justify-center items-center w-1/2  align-middle h-full  ">
                                    <div class="w-full h-full">

                                        <img class=" " src="./asset/sponser/Bank asia/Bank_Asia_Limited-Transparen.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div> -->


                        <!-- financial partner -->
                        <div class=" pb-8 md:pb-0 w-full md:w-1/2">
                            <h6 class=" font-medium text-black text-center pt-4"> Financial Partner</h6>
                            <div class="flex flex-col md:flex-row justify-around items-center mx-auto gap-4 md:h-32  ">
                                <div class="flex flex-col justify-center w-1/2  align-middle md:w-1/3 md:pl-4 pl-0 ">
                                    <img class="w-full md:w-36" src="/asset/sponser/City bank/City_bank-Transparent.png"
                                        alt="">
                                </div>

                                <div class="flex flex-col justify-center w-1/2  align-middle md:w-1/3  ">
                                    <img class="w-full" src="/asset/sponser/Bank asia/Bank_Asia_Limited-Transparen.png"
                                        alt="">
                                </div>

                                <div class="flex flex-col justify-center w-1/2  align-middle md:w-1/3  ">
                                 <img class="w-full" src="/asset/sponser/nogod/Nagad-Logo.wine.svg" alt="">
                                </div>

                              
                             
                            </div>
                        </div>
                    </div>
                    <!-- <div class="flex flex-col md:flex-row items-center justify-between px-2 ">
                        <h1 class="text-lg md:w-1/2 p-2 text-center border-r-2">Our Financial Partner</h1>
                        <div class="flex justify-around mx-auto  md:w-1/2">
                            <div class="flex justify-center w-1/2  align-middle md:w-1/3 ">
                                <img class="" src="./asset/sponser/City bank/City_bank-Transparent.png" alt="">
                            </div>
                            <div class="flex justify-center w-1/2  align-middle md:w-1/3  ">
                                <img src="./asset/sponser/Bank asia/Bank_Asia_Limited-Transparent.png" alt="">
                            </div>
                        </div>

                    </div> -->

                </div>
            </section>
            <div class="w-full  flex justify-end">
                <a href="https://api.whatsapp.com/message/S6R5C44OGLRMN1?autoload=1&app_absent=0" target="_blank">
                    <button
                        class="bg-[#0f79b9] hover:bg-teal-700 text-white p-2  md:p-4  rounded-2xl shadow-2xl font-bold relative right-5 w-fit  mb-4">
                        <span> <img class=" w-6 md:w-10 mx-auto text-white " src="/asset/icon/chat.svg" alt=""></span>
                        Let's
                        Chat
                    </button>
                </a>
            </div>
        </section>

  
          <!-- Project Section -->
          <section class="bg-blue-950">
              <!-- bg-[#1e1e1e] -->
              <section
                  class="py-8 text-white  flex flex-col md:flex-row justify-around items-center gap-4 md:max-w-7xl  md:mx-auto ">
                  <div
                      class="md:w-1/4 w-fit space-y-10 md:p-4  text-center md:text-left flex flex-col  justify-between  ">
                      <h2 class=" text-sm md:text-5xl font-semibold pl-4">Let's talk about <br> your project</h2>
                      <!-- <button
                          class="text-white bg-[#0f79b9]  md:text-xl font-semibold md:px-3 md:py-2 mx-auto md:mx-0  py-2 px-6 w-fit  rounded-lg shadow-xl  ">Schedule
                          a
                          call
                      </button> -->
                  </div>
                  <!-- input filed -->
                  <form class="md:w-9/12 w-full flex flex-col gap-10 p-14" method="POST" action="{{ route('submit_message') }}">
                    @csrf
                    <div class="flex flex-row justify-around gap-14">
                        <input required  class="w-1/2 p-2 text-lg font-semibold border-b-2 bg-blue-950 border-white" type="text"
                            name="name" placeholder="Name*">
                        <input required class="w-1/2 p-2 text-lg font-semibold border-b-2 bg-blue-950 border-white" type="email"
                            name="email" placeholder="Email*">
                    </div>
                    <div class="flex flex-row justify-around gap-14">
                        <input required class="w-1/2 p-2 text-lg font-semibold border-b-2 bg-blue-950 border-white" type="tel"
                            name="phone" placeholder="Phone*">
                        <input required class="w-1/2 p-2 text-lg font-semibold border-b-2 bg-blue-950 border-white" type="text"
                            name="project_details" placeholder="Project details">
                    </div>
                    <!-- <input class="p-2 w-fit mx-auto" type="file"> -->
                    <button class="bg-[#808080] p-2 rounded-lg text-lg hover:bg-[#0F79B9]" type="submit">Send Message</button>
                </form>
                
              </section>
          </section>
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
      <script>
         document.addEventListener('DOMContentLoaded', () => {
             const slider = document.querySelector('#slider');
             setTimeout(function moveSlide() {
                 const max = slider.scrollWidth - slider.clientWidth;
                 const left = slider.clientWidth;
     
                 if (max === slider.scrollLeft) {
                     slider.scrollTo({ left: 0, behavior: 'smooth' })
                 } else {
                     slider.scrollBy({ left, behavior: 'smooth' })
                 }
     
                 setTimeout(moveSlide, 3000)
             }, 3000)
     
         })
     </script>
  </body>


</html>
