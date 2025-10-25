@extends('layouts.web')
@section('title',  "Qatar’s #1 Dissertation Writing Services by Expert Writers")
@section('description',"Choose our top-class dissertation writing services in Qatar and secure successful grades. We always provide the best academic papers with 100% unique work.")
@section('keywords',  'Dissertation Writing Services in Qatar')
@section('canonical', config('app.app_url') . Request::path())



@section('content')

{{-- Header --}}
<section class="main-banner bg-grey text-white py-8">
       <img src="{{ asset('imgs/hero-banner.webp')}}" class="img-fluid banner-image" alt="Dissertation Writing Services" title="Dissertation Writing Services" width="1585" height="646" loading="eager">
    <div class="lg-px-5 px-5 py-lg-0 py-5 container mx-auto flex flex-col lg:flex-row md:flex-row items-center">
      <!-- Left Column -->
      <div class="">
        <h1 class="text-4xl font-bold pb-4 text-black span-header">Why We’re the Leading Dissertation Writing Services in Qatar?</h1>
        <p class="pt-6 text-black">
        Assignmentmaster.qa has been a trusted provider of dissertation writing services in Qatar for over 15 years. With 200+ experienced academic writers and more than 150,000 papers delivered, we create original, thoroughly researched dissertations that meet top university standards and help students achieve higher grades.
        </p>

        <div class=" flex flex-col sm:flex-row items-center sm:space-x-4 mt-10">
            <a class="fancy" href="{{route('order')}}">
            <span class="top-key"></span>
            <span class="text">Write My Dissertation!</span>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
            </a>
            <a href="javascript:void(Tawk_API.toggle())" class="btn-pri lg:mt-0 mt-5">
                Chat Now
            </a>
        </div>
      </div>
      
      <!-- Right Column -->
      @include('partials.frontend.calculator') 

    </div>


</section>
</div>
{{-- Header --}}

@include('partials.frontend.uni-logo') 


<section class="why-choose relative border">
  <div class="container mx-auto py-10 px-4">
    <!-- Heading -->
    <div class="text-center max-w-4xl mx-auto">
      <h2 class="inline-block span-header pl-4 font-bold text-3xl md:text-4xl ">
       Perks You Will Enjoy When You Choose Our Dissertation Help in Qatar
      </h2>
      <p class="mt-5 text-black text-sm">
        Our academic squad offers you amazing support and guidance that will remove all your writing concerns and help you tackle even the most difficult tasks.
      </p>
    </div>

    <!-- Features Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-10">
      <!-- Box 1 -->
      <div class="card-sec p-8 text-center">
        <div class="icon-circle">
          <i class="fas fa-check-double"></i>
        </div>
        <h3 class="mt-5 font-bold text-xl">0% Plagiarism and AI </h3>
        <p class="mt-3 text-gray-100 text-sm leading-relaxed">
          We have genuine dissertation helpers in Qatar working on our platform who never copy and paste content, ensuring you receive original work that is not plagiarized or written by AI.
        </p>
      </div>

      <!-- Box 2 -->
      <div class="card-sec p-8 text-center">
        <div class="icon-circle">
          <i class="fas fa-sync-alt"></i>
        </div>
        <h3 class="mt-5 font-bold text-xl">Multiple Free Edits</h3>
        <p class="mt-3 text-gray-100 text-sm leading-relaxed">
        If you believe there is room for improvement in your paper, our dissertation writers in Doha will cater to it on the spot without charging you any extra money.
        </p>
      </div>

      <!-- Box 3 -->
      <div class="card-sec p-8 text-center">
        <div class="icon-circle">
          <i class="fas fa-tags"></i>
        </div>
        <h3 class="mt-5 font-bold text-xl">Transparent Pricing</h3>
        <p class="mt-3 text-gray-100 text-sm leading-relaxed">
        We are very honest and fair in our pricing. There are no hidden or surprise charges, and you get good value for your money.
        </p>
      </div>

      <!-- Box 4 -->
      <div class="card-sec p-8 text-center">
        <div class="icon-circle">
          <i class="fas fa-user-graduate"></i>
        </div>
        <h3 class="mt-5 font-bold text-xl">Legit Writers</h3>
        <p class="mt-3 text-gray-100 text-sm leading-relaxed">
        Your work is done by someone who knows the subject inside out and has a deep understanding of the academic standards.
        </p>
      </div>
    </div>
  </div>
</section>



<section class="best-assignment py-10 bg-gray-50">
  <div class="container mx-auto px-4">
    <!-- Heading -->
    <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-800 leading-snug span-header">
      Dissertation Writers in Qatar Who Will Never <br> Let Your Grades Fall
    </h2>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 1" class="mx-auto w-32 mt-3 h-32">
      <line x1="0" y1="0.5" x2="20" y2="0.5" stroke="#e04c60" stroke-width="0.5" stroke-linecap="round" />
    </svg>


    <!-- Swiper Slider -->
    <div class="relative lg:px-24">
      <div class="swiper mySwiper mt-8 ">
        <div class="swiper-wrapper">

          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="bg-writers  rounded-xl p-8 flex flex-col md:flex-row items-center gap-8">
              <img src="{{asset('imgs/zainab.webp')}}" alt="Zainab" title="Zainab" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Zainab</h4>
                <p class="text-sm text-gray-500">Thesis Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  With more than 13 years of academic writing experience under her belt, Zainab has worked on 12,430
                  thesis projects. She holds a Master's degree in Psychology and, apart from thesis writing, she also
                  specializes in impactful personal statement writing and dissertations. Students praise her for
                  producing top-quality work, which has given her 11,110 positive reviews.
                </p>
                <a class="fancy" href="{{route('order')}}">
                  <span class="top-key"></span>
                  <span class="text">Hire Me</span>
                  <span class="bottom-key-1"></span>
                  <span class="bottom-key-2"></span>
                </a>
              </div>
            </div>
          </div>


          <div class="swiper-slide">
            <div class="bg-writers  rounded-xl p-8 flex flex-col md:flex-row items-center gap-8">
              <img src="{{asset('imgs/hassan.webp')}}" alt="Hassan" title="Hassan" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Hassan</h4>
                <p class="text-sm text-gray-500">Thesis Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Hassan has completed 9,720 thesis projects and has 10 years of experience in academic writing, working
                  on our platform. Possessing a Master's degree in Business Administration, he mostly helps applicants
                  for college write their personal statements and dissertations. Hassan has earned 8,355 fantastic
                  reviews for his punctual delivery and work ethic.
                </p>
                <a class="fancy" href="{{route('order')}}">
                  <span class="top-key"></span>
                  <span class="text">Hire Me</span>
                  <span class="bottom-key-1"></span>
                  <span class="bottom-key-2"></span>
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="bg-writers  rounded-xl p-8 flex flex-col md:flex-row items-center gap-8">
              <img src="{{asset('imgs/noor.webp')}}" alt="Noor" title="Noor" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Noor</h4>
                <p class="text-sm text-gray-500">Thesis Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Noor boasts 12 years of experience in academic writing with 11,050 projects completed for university
                  students across Qatar. She has a PhD in Education and excels in thesis writing in a wide range of
                  subjects. Noor has gotten 10,680 favorable reviews from customers who praise her keen eye for detail
                  and dedication to work.
                </p>
                <a class="fancy" href="{{route('order')}}">
                  <span class="top-key"></span>
                  <span class="text">Hire Me</span>
                  <span class="bottom-key-1"></span>
                  <span class="bottom-key-2"></span>
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="bg-writers  rounded-xl p-8 flex flex-col md:flex-row items-center gap-8">
              <img src="{{asset('imgs/yousuf.webp')}}" alt="Yusuf" title="Yusuf" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Yusuf </h4>
                <p class="text-sm text-gray-500">Thesis Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Yusuf is another proficient writer with more than 9 years of experience working with us, and he has
                  completed 8,600 thesis papers. Having a Master's degree in Sociology, he is well-known for his
                  effective thesis support for students across different academic levels. Students who admire Yusuf's
                  meticulous, thorough research have given him 7,200 amazing reviews.
                </p>
                <a class="fancy" href="{{route('order')}}">
                  <span class="top-key"></span>
                  <span class="text">Hire Me</span>
                  <span class="bottom-key-1"></span>
                  <span class="bottom-key-2"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="arrow-buttons">
        <div class="swiper-button-next !text-gray-800"></div>
        <div class="swiper-button-prev !text-gray-800"></div>
      </div>
    </div>
</section>

<section class="steps-section py-10">
  <div class="">
    <!-- Heading -->
    <h3 class="text-center text-4xl text-white ">
      4 Easy Steps to Get Started
    </h3>

    <div class="steps-grid">
      <!-- Step 1 -->
      <div class="step">
        <span class="step-number">1</span>
        <div class="step-content">
          <img src="{{ asset('imgs/order.png')}}" class="step-icon" alt="order" title="order">
          <p>Fill in the order form and share with us your dissertation details and instructions.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="step">
        <span class="step-number">2</span>
        <div class="step-content">
          <img src="{{ asset('imgs/transaction.png')}}" class="step-icon" alt="transaction" title="transaction">
          <p>Transfer your payment through our safe payment gateways.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="step">
        <span class="step-number">3</span>
        <div class="step-content">
          <img src="{{ asset('imgs/updates.png')}}" class="step-icon" alt="updates" title="updates">
          <p>Keep in touch with your writer and get updates about your work.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="step">
        <span class="step-number">4</span>
        <div class="step-content">
          <img src="{{ asset('imgs/package.png')}}" class="step-icon" alt="package" title="package">
          <p>Receive your completed dissertation before the deadline and let us know if you need revisions.</p>
        </div>
      </div>
    </div>

    <!-- SVG Connector -->
    <svg class="connector" viewBox="0 0 1000 400" preserveAspectRatio="none">
      <defs>
        <marker id="arrow" markerWidth="10" markerHeight="10" refX="5" refY="3" orient="auto" markerUnits="strokeWidth">
          <path d="M0,0 L0,6 L9,3 z" fill="#bbbbbb" />
        </marker>
      </defs>
    
      <!-- Z shape -->
      <path d="M 100 100 L 900 100 L 100 300 L 900 300" 
            stroke="#bbbbbb" stroke-width="3" stroke-dasharray="6,6" 
            fill="none" marker-end="url(#arrow)" />
    </svg>


  </div>
</section>   


<section class="four-sec py-10 px-4 bg-white">
  <div class="container max-w-7xl mx-auto">

    <!-- First Row -->
    <div class="four-border-sec grid grid-cols-1 lg:grid-cols-2 gap-8">
      
      <!-- Left -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Where Students Succeed with Legitimate Dissertation Writing Help in Qatar
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            If you are a final-year student, you already have a lot on your plate, and your dissertation is one big task that needs your time and energy. You need to do a lot of research, which can take a lot of your time and leave you tired and stressed. Don't worry. You can get rid of this problem by hiring experienced dissertation writers to do your work. Our qualified team always makes sure that your dissertations are matched to your academic requirements and are free from plagiarism and AI. After completing your dissertation, they use reliable software such as Turnitin to check for plagiarism and AI, ensuring that the content is 100% unique and original. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            So if you want to enhance your grades, then you must choose Assignment Master Qatar since we provide high-quality dissertation writing services for students around the world. We have highly educated writers boasting the highest levels of qualifications, including MS, MPhil, and PhD. They write dissertations on many subjects, including engineering, humanities, law, finance, business, and many more. Additionally, you can also reach out to them if you need help with <a href="{{route('academic-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">academic writing</a>, <a href="{{route('thesis-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">thesis writing</a>, or other related tasks.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
         Custom Dissertation Help for Every Stage of Research
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Assignment Master is standing at the top with its incredible dissertation consulting company in Qatar, with a proficient team of academic writers who conduct in-depth research, accurate referencing, proper formatting, and structuring to make your work credible and worthwhile. In addition, our team is very efficient and never misses a deadline, so if you are looking for fast-paced delivery services, then you have landed on the right spot. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Moreover, our writers will work closely with you throughout the process. Your assigned writer will provide you with updates, answer your queries, and you will be able to review your work while they are working on it. This way, you can ask any questions or provide your feedback. Your dissertation is going to be delivered once you are delighted with it. You can ask for revisions as many times as you need, and we will be happy to revise your work. We have certified writers who will take on your task. They have years of experience in writing dissertations and have supported thousands of students in achieving high scores. Apart from dissertations, you can also contact us for the completion of other academic work, such as <a href="{{route('essay-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">essay writing</a>, <a href="{{route('proposal-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">proposal writing</a>, and more.
          </p>
        </div>
      </div>

    </div>

    <!-- Second Row -->
    <div class="four-border-sec grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
      
      <!-- Left -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Smart Dissertation Help Website That Makes Writing Easy
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Nowadays, everything is digital, so instead of wasting time rushing to physical platforms, it’s better to go for a writing service that is easily accessible online. AssignmentMaster offers top-quality dissertation help online to students regardless of where they live. You can get your work done with just a few clicks while sitting comfortably at home. All you have to provide us with is your project details, and leave the rest to us. Our writers also help students save their valuable time by providing them with quick delivery services. With years of experience, they have improved their writing speed and always deliver promptly. So, do not worry about the deadlines anymore, as you will deliver your work without any delays, so you have ample time to review it before the submission.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Furthermore, we provide a comprehensive range of online services, including editing, proofreading, referencing, formatting, consultations, and plagiarism checks. Besides, you can chat with our cooperative writers, who are available 24/7 to address your concerns and engage in discussions related to your dissertation. In addition to that, our top writers offer a range of online writing services throughout Qatar, including Al Rayyan, Al Khor, and Doha.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          The Go-To Cheap Dissertation Writing Agency in Qatar
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            If you are short on budget, then there is no need to worry, as our dissertation help in Doha will provide you with the cheapest academic services. Our dedicated team focuses on quality over budget, so forget all your financial worries and leave everything to us. It doesn’t matter what your financial background is. We will always provide services that are affordable to all students, no matter their budget. Our pricing structure is transparent, and we have no hidden charges. In addition, we offer unlimited revisions free of cost if you are not satisfied with our work. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Moreover, our writers are competent, and they do everything from the ground up. Thorough research is conducted on the topic, and proper citations are incorporated to make your work authentic and credible. They help you at every stage of your dissertation, whether it is topic selection, composing a literature review, analysis, or methodology. Plus, to ensure originality, our writers check for plagiarism through reliable software such as Turnitin, and they provide you with the originality report along with your work. So, no need to look any further. Get in touch with our dissertation writers and attain A+ grades in your dissertations. 
          </p>
        </div>
      </div>

    </div>

    <!-- CTA Button -->
    <div class="text-center mt-10">
      <a href="{{route('order')}}" 
         class="btn-pri">
        Get Started
      </a>
    </div>

  </div>
</section>


<section class="sample-sec overflow-hidden  pb-10 ">
    <div class="container mx-auto lg:px-0 py-12">
        <div class=" mx-4">
            <h4 class="text-black text-2xl md:text-3xl text-center mt-10 font-font">Get a Glimpse of Our Papers
            </h4>
        </div>
        <!-- Grid Start of downloadable form -->
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-4 lg:p-4 mt-10 md:mx-4 ">
            <!-- Grid Col 1 -->
            <div>
                <div class="relative ">
                    <div class="samples absolute bg-black inset-0 rounded-2xl pb-4">
                    </div>
                    <div class="w-72 h-96 samples-front ml-10 rotate-12  rounded-2xl">
                        <p class="text-base text-center font-semibold pt-10">Dissertation</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Climate Change

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Env. Science
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Third 2 grid of Academic -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Academic Level:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Postgraduate
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fourth 2 grid of Pages -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Pages:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">140
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fifth 2 grid of Format -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Format:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Harvard
                                </p>
                                <hr class="mt-2">
                            </div>
                        </div>
                        <!-- Download Sample Button -->
                        <div class="grid justify-center">
                            <a href="{{ asset('samples/Thesis-1.docx') }}"
                                target="_blank">
                                <button
                                    class="btn-sec">
                                    Download Sample
                                </button></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Grid Col 2 -->
            <div>
                <div class="relative ">
                    <div class="samples absolute bg-black inset-0 rounded-2xl pb-4">
                    </div>
                    <div class="w-72 h-96 samples-front ml-10 rotate-12  rounded-2xl">
                        <p class="text-base text-center font-semibold pt-10">Dissertation</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">LS Methodology

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Construction Mgmt.
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Third 2 grid of Academic -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Academic Level:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Postgraduate
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fourth 2 grid of Pages -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Pages:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">120
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fifth 2 grid of Format -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Format:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Harvard
                                </p>
                                <hr class="mt-2">
                            </div>
                        </div>
                        <!-- Download Sample Button -->
                        <div class="grid justify-center">
                            <a href="{{ asset('samples/Thesis-2.docx') }}"
                                target="_blank">
                                <button
                                    class="btn-sec">
                                    Download Sample
                                </button></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Grid Col 3 -->
             <div>
                <div class="relative ">
                    <div class="samples absolute bg-black inset-0 rounded-2xl pb-4">
                    </div>
                    <div class="w-72 h-96 samples-front ml-10 rotate-12  rounded-2xl">
                        <p class="text-base text-center font-semibold pt-10">Dissertation</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Customer Satisfaction

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Hosp. Management
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Third 2 grid of Academic -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Academic Level:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Postgraduate
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fourth 2 grid of Pages -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Pages:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">138
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fifth 2 grid of Format -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Format:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Harvard
                                </p>
                                <hr class="mt-2">
                            </div>
                        </div>
                        <!-- Download Sample Button -->
                        <div class="grid justify-center">
                            <a href="{{ asset('samples/Thesis-3.docx') }}"
                                target="_blank">
                                <button
                                    class="btn-sec">
                                    Download Sample
                                </button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="flex justify-center items-center mt-10" bis_skin_checked="1">
                    <a href="{{route('samples')}}" class="btn-pri text-sm font-semibold mt-3 py-2 px-4">View All Samples</a>
                </div>
    </div>

</section>
<section class="px-5 relative bg-theme container-fluid py-10">
  <div class="striped-circle top-right"></div>
  <div class="striped-circle bottom-left"></div>
        <div class="container mx-auto pb-3" bis_skin_checked="1">
            <div class="text-center mx-auto" bis_skin_checked="1">
                <h3 class="text-4xl font-semibold py-5 span-header">Explore Authentic Feedback from Students
                </h3>
            </div>
            <div class="swiper professional-testimonial-slider swiper-initialized swiper-horizontal swiper-backface-hidden" bis_skin_checked="1">
    <div class="swiper-wrapper pt-10" bis_skin_checked="1" style="transition-duration: 0ms; transform: translate3d(-2010px, 0px, 0px);"> 
        
    <div class="swiper-slide px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="3">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/faisal.webp')}}" class="img-fluid" width="100" height="100" alt="Faisal" title="Faisal">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Faisal </strong>
                            <div class="flex" bis_skin_checked="1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-comment mt-5" bis_skin_checked="1">
                    <p class="text-base">
                       “They did an awesome job on my dissertation. The writers certainly grasped my research requirements, and my supervisor was really impressed by my work. Certainly the best assistance I could have requested!”
                    </p>
                </div>
            </div>
        </div><div class="swiper-slide px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="4">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/hammad-2.webp')}}" class="img-fluid" width="100" height="100" alt="Hamad" title="Hamad">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Hamad </strong>
                            <div class="flex" bis_skin_checked="1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-comment mt-5" bis_skin_checked="1">
                    <p class="text-base">
                        “This service delivered a personal statement for my university admission that was written perfectly. They presented my goals and accomplishments so well, which I wouldn't be able to do myself.”
                    </p>
                </div>
            </div>
        </div><div class="swiper-slide swiper-slide-prev px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="5">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/fatima-4.webp')}}" class="img-fluid" width="100" height="100" alt="Fatima" title="Fatima">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Fatima</strong>
                            <div class="flex" bis_skin_checked="1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-comment mt-5" bis_skin_checked="1">
                    <p class="text-base">
                        “The writer made sure every section was thoroughly researched and unique. They listened to me and valued my feedback, ultimately delivering a flawless thesis. It is the best assignment writing service that I have come across.”
                    </p>
                </div>
            </div> 
        </div><div class="swiper-slide swiper-slide-active px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="0">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/huda.webp')}}" class="img-fluid" width="100" height="100" alt="Huda" title="Huda">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Huda </strong>
                            <div class="flex" bis_skin_checked="1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-comment mt-5" bis_skin_checked="1">
                    <p class="text-base">
                        “They polished my writing, incorporated excellent citations, and made sure my ideas were reflected in the paper. Nobody can compare their professionalism and meticulous attention to detail. Highly recommended!”
                    </p>
                </div>
            </div>
        </div>
        
    </div>
</div>
            <div class="text-center mt-5">
            <a class="fancy" href="{{route('reviews')}}">
            <span class="top-key"></span>
            <span class="text">Explore Client Stories</span>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
            </a>
            </div>
</div>

</section>

<section class="text-white faqs bg-primary-one px-2 md:px-12 lg:px-20 mx-auto py-10">
  <div class="container mx-auto">
    <h3 class="text-4xl text-center text-black py-5">
     Frequently Asked Questions – Easy Help Desk
    </h3>

    <div class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1 items-center">
      <div class="text-center">
        <img src="{{asset('imgs/faq-img3.webp')}}" class="img-fluid mx-auto hidden md:block" alt="Frequently Asked Questions"
          title="Frequently Asked Questions" width="453" height="560">
      </div>

      <div class="space-y-2 py-5 px-3">

        <!-- FAQ 1 -->
        <div class="content faq-internal-styling" data-no="0">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="0">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">1-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What is a dissertation, and how is it different from a thesis?</h4>
            </div>
            <div class="icons text-right w-1/4">
              <i class="fa fa-minus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide0" style="display: block;">
            A dissertation is an academic task typically undertaken at the PhD level. It requires deep research, analysis, data collection, etc. On the other hand, a thesis is generally completed in Bachelor's and Master's programs and is shorter. 
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="content faq-internal-styling" data-no="1">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="1">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">2-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How do I choose the best topic for my dissertation?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide1" style="display: none;">
            You should choose a topic that you find interesting, related to your field, that fulfills your research goals, and that has sufficient material to research.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="content faq-internal-styling" data-no="2">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="2">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">3-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What are the key steps involved in writing a dissertation?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide2" style="display: none;">
            The key steps in writing a dissertation include: selecting a topic, conducting research, writing a proposal, literature review, methodology, analysis, organizing, proofreading, and editing.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="content faq-internal-styling" data-no="3">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="3">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">4-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How much time does it take to write a dissertation?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide3" style="display: none;">
            It depends on factors like the level, length, and complexity. However, we have fast-paced writers who will complete your dissertation within a short deadline without sacrificing the quality of your work.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">5-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What kind of research is needed before starting any dissertation?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Read articles to explore your subject and gain a deeper understanding. Look for research gaps in existing studies and plan the methods you will use, such as interviews and questionnaires. 
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">6-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What common mistakes should I avoid in my dissertation?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Do not procrastinate, manage your time effectively, don't choose a topic that is too broad, or use weak sources. Make sure you structure your paper well and incorporate accurate citations. In the end, don't forget to proofread your dissertation.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">7-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How do I formulate a strong and clear research question for my dissertation?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Choose a topic that you find interesting and then look for a gap in existing research. You can also ask your supervisor to guide you on this.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">8-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What support and supervision can I expect from your dissertation writing help?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            You receive support and supervision in all aspects of your dissertation, from selecting a suitable topic to final editing and proofreading. Our experts will help you create strong research questions, craft a proposal, write a literature review, methodology, analysis formatting, and structuring etc.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">9-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can I submit multiple drafts of my dissertation?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, you can submit multiple drafts of your dissertation. It will help you make improvements along the way and submit work that is accurate and clear.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">10-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What is the cost of your dissertation writing services in Qatar?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Well, it depends on the length, complexity, deadline, and your academic level. However, we offer student-friendly packages to fit your budget and needs.
          </div>
        </div>

       
      </div>
    </div>
  </div>
</section>

  
<section class="cta-section">
  <div class="cta-container px-5 grid grid-cols-1 lg:grid-cols-2 items-center gap-10">
    
    <!-- Left Side (Text) -->
    <div class="cta-text mt-5">
      <h3>⚡ Let's Finish Your Dissertation Together</h3>
      <p>
        Every dissertation we write is expertly organized, thoroughly researched, and tailored to meet your grading criteria. With our assistance, you can confidently earn your degree and achieve your academic goals.
      </p>
      <div class="flex flex-col sm:flex-row items-center gap-4 pb-4 mt-10">
        <a href="{{route('order')}}" class="cta-btn">Place an Order</a>
        <a href="{{route('price')}}" class="cta-btn">Check Pricing Plan</a>
      </div>
    </div>

    <!-- Right Side (Image) -->
    <div class=" flex justify-center lg:justify-end">
      <img src="{{ asset('imgs/cta-img.webp')}}" alt="Sign Up Now" class="hidden md:block" width="555px" height="370px" alt="cta-img" title="cta-img" />
    </div>

  </div>
</section>

<!-- FAQ -->



@endsection


