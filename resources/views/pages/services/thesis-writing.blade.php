@extends('layouts.web')
@section('title',  "Professional Thesis Writing Service in Qatar - 24/7 Support")
@section('description',"Get reliable thesis writing service in Qatar with 24/7 support. Our professional thesis writers ensure plagiarism-free, well-structured research papers.")
@section('keywords',  'Thesis Writing Service in Qatar')
@section('canonical', config('app.app_url') . Request::path())


@section('content')

{{-- Header --}}
<section class="main-banner bg-grey text-white py-8">
      <img src="{{ asset('imgs/hero-banner.webp')}}" class="img-fluid banner-image" alt="Thesis Writing Service in Qatar" title="Thesis Writing Service in Qatar" width="1585" height="646" loading="eager">
    <div class="lg-px-5 px-5 py-lg-0 py-5 container mx-auto flex flex-col lg:flex-row md:flex-row items-center">
      <!-- Left Column -->
      <div class="">
        <h1 class="text-4xl font-bold pb-4 text-black span-header">Your Complete Writing Support with Our Expert Thesis Writing Service in Qatar</h1>
        <p class="pt-6 text-black">
            At Assignmentmaster.qa, we help students navigate one of the most challenging academic tasks: writing a thesis. With more than 15 years of experience and a team of 200+ highly skilled writers, we proudly offer trusted thesis writing services in Qatar. Having delivered over 150,000 papers across diverse academic domains, we ensure quality, originality, and academic success.
        </p>

        <div class=" flex flex-col sm:flex-row items-center sm:space-x-4 mt-10">
            <a class="fancy" href="{{route('order')}}">
            <span class="top-key"></span>
            <span class="text">Write My Thesis in Qatar!</span>
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
       Perks You Will Enjoy When You Choose Our Thesis Writing Services in Qatar
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
            We have genuine thesis writers working on our platform who never copy and paste content, ensuring you receive work that is original and not plagiarized or written by AI.
        </p>
      </div>

      <!-- Box 2 -->
      <div class="card-sec p-8 text-center">
        <div class="icon-circle">
          <i class="fas fa-sync-alt"></i>
        </div>
        <h3 class="mt-5 font-bold text-xl">Multiple Free Edits</h3>
        <p class="mt-3 text-gray-100 text-sm leading-relaxed">
            If you believe there is room for improvement in your paper, our thesis writers in Qatar will cater to it on the spot without charging you any extra money.
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
      Thesis Writers in Qatar Who Will Never <br> Let Your Grades Fall
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
                  thesis projects. She holds a Master's degree in Psychology and apart from thesis writing, she also
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
          <p>Fill in the order form and share with us your thesis details and instructions.</p>
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
          <p>Receive your completed thesis writing before the deadline and let us know if you need revisions.</p>
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
          Relieve Your Stress and Pressure by Choosing Our #1 Thesis Writing Company in Qatar
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            University life seems like a roller coaster, especially when the thesis enters the picture. You already have a lot of pending tasks that need to be submitted, and the thought of another big research project feels like a nightmare. You need to dedicate a significant amount of time and energy to completing your thesis. If you are working on your thesis and need support, AssignmentMaster will provide you with comprehensive assistance for all your academic writing needs. Whether it is your graduate thesis or doctoral thesis, our thesis writers in Doha can handle writing across all academic levels.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Moreover, students from all over Qatar, including those in Doha, Al Khor, and Al Rayyan, rely on us for their assignments and research work because we have helped them improve their grades. Our skilled thesis helpers in Qatar not only complete your academic work but also invest their time and utilize their in-depth knowledge to present your research in the best possible manner. They know what universities in Qatar look for, and so they write in accordance with all the guidelines and to fulfill your research goals. So, hire our services and get ready to move forward in your academic journey.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
         Turn Your Grades Around with Our Phd Thesis Writing Assistance in Qatar
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Only a small number of students successfully get their thesis approved on their first try, which is why many seek professional support. Writing a quality thesis means using credible references, solid arguments, and impeccable structure that meets university standards. At Assignmentmaster.qa, we provide comprehensive thesis writing services, including thesis writing assistance with referencing, formatting, editing, proofreading, and plagiarism checking. Our writers can craft a top-quality thesis that professors highly regard. So, instead of wasting any more time, submit your "do my thesis" request with us to guarantee expert help.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Furthermore, a successful thesis calls for thorough knowledge of the subject matter, excellent writing, and research skills. We have a team of highly qualified writers who have years of experience helping students in their academic endeavors. Every paper crafted by them is unique, well-crafted, and delivered right on schedule. If you are confused about the topic, they will guide you on that as well, so that you can select a suitable topic that is research-worthy and also meets your research requirements. If you feel burdened and are unable to manage your thesis alongside other responsibilities, choose our online thesis help in Qatar and let us be your helping hand.
          </p>
        </div>
      </div>

    </div>

    <!-- Second Row -->
    <div class="four-border-sec grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
      
      <!-- Left -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Cost-Effective Thesis Writing Help in Qatar to Overcome All Academic Struggles
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Are you looking for affordable thesis writing services that offer both high quality and competitive pricing? Well, then, stop searching any further because the good news is that our thesis writing service provides both premium-quality writing at reasonable and student-friendly costs. With us, you receive outstanding value for your money. After completion, every thesis is reviewed by specialists to guarantee perfection. Our objective is to ensure that every student in Qatar has access to expert thesis assistance without financial burden. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            When composing a thesis, it is essential to have a thorough understanding of the chosen topic. Each topic presents unique challenges that require expert subject knowledge. At Assignment Master, we have assembled a team of thesis writers from diverse fields, including science, humanities, business, engineering, law, and other disciplines. Your thesis is always given to an expert who genuinely knows your field. This ensures that your paper is thoroughly researched and relevant to your field of study. Our professionals are ready to offer a thesis that meets Qatar's academic criteria, regardless of how tricky your topic is. Apart from that, we offer a wide range of academic services such as <a href="{{route('proposal-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">proposal writing</a> and <a href="{{route('dissertation-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">dissertation writing</a>, all at cheap rates.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Qatari Thesis Experts and Editors who Promise 100% Unique Work 
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            One of the major phobias students have while writing a thesis is plagiarism. At Assignment Master Qatar, we ensure that every thesis is developed from scratch, incorporating new research and unique ideas, thereby alleviating this concern for you. Our writers never cut corners or copy-paste content. Rather, they immerse themselves in your topic and create arguments that match your academic objectives. To ensure originality, every order comes with a free plagiarism report, so you may relax knowing your paper is especially created for you.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Moreover, if your paper has mistakes, it can significantly impact how your work is perceived. That's why we make sure every draft is carefully proofread and professionally corrected to guarantee your thesis is accurate and free of mistakes. Our hawk-eyed expert thesis editors check every line so that there are no mistakes in grammar, structure, format, and citations. Our academic specialists know how to polish your work until everything seems perfect. Besides, if you notice that something needs to be amended, let us know, and we will address it immediately. You get unlimited revisions without having to pay any extra money. In addition, you can also approach us for other types of tasks, such as <a href="{{route('essay-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">essay writing</a> and <a href="{{route('university-assignment')}}" class="btn-shine" target="_blank" bis_skin_checked="1">university assignments</a>.
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
                        <p class="text-base text-center font-semibold pt-10">Thesis</p>
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
                        <p class="text-base text-center font-semibold pt-10">Thesis</p>
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
                        <p class="text-base text-center font-semibold pt-10">Thesis</p>
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
              <h4 class="text-lg md:font-semibold">Can I write my PhD thesis in 3 months?</h4>
            </div>
            <div class="icons text-right w-1/4">
              <i class="fa fa-minus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide0" style="display: block;">
            It depends on how much work you have already done and how clear you are about the approach to take. It can be quite difficult, but with proper planning, time management, and dedication, you may be able to manage it.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="content faq-internal-styling" data-no="1">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="1">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">2-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Is your thesis writing service plagiarism-free?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide1" style="display: none;">
            Yes, our thesis writing services are guaranteed to be 100% original and free from plagiarism. Our platform features real writers who craft content from scratch. They do not use AI tools or plagiarize from other sources. Additionally, each paper is checked using reliable tools, such as Turnitin, to ensure originality.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="content faq-internal-styling" data-no="2">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="2">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">3-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can you follow my university’s specific guidelines?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide2" style="display: none;">
            Our thesis writers strictly adhere to the specific academic guidelines of your university. They strictly follow the formatting, structures, and citation styles required by your institution. They also offer multiple revisions for your complete satisfaction.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="content faq-internal-styling" data-no="3">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="3">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">4-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How long does it take to complete a thesis?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide3" style="display: none;">
            It depends on factors such as the complexity, word count, and your research requirements. However, our writers are fast-paced and they always deliver on time. So, you don't have to worry about the deadlines. 
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">5-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you also offer thesis editing and proofreading services?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, we offer thesis editing and proofreading services. To ensure your thesis is polished and professional, our team meticulously examines grammar, structure, format, and referencing to ensure it meets the highest standards.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">6-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Which citation styles do you use in thesis writing?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            We use all citation styles like APA, MLA, Harvard, and Chicago, etc. If there's a specific style that your university requires, we will follow it.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">7-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Is my information kept confidential?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            We have a strict policy regarding customer privacy. Your personal information and project details are never shared with a third party.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">8-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can you assist with topic selection and proposal writing?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, we can help you choose a strong thesis topic or refine it to ensure it is academically relevant and clear. We can also help you write a convincing research proposal that meets your university’s expectations.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">9-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you provide revisions if needed?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, we can revise and edit your thesis at no additional charge until you're satisfied with your work. Your satisfaction is our top priority.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">10-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How much does your Qatari thesis writing service cost?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            It depends on several factors, including word count, subject, and the thesis deadline. However, we offer a fair and transparent pricing structure, allowing students to benefit from our academic writing services. There are no hidden charges that will come as a surprise to you.
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
       <h3>⚡ Get Cheap Thesis Help in Qatar to Save Time and Money</h3>
      <p>
        Enjoy premium academic help from Qatar's best thesis writers at pocket-friendly rates. You will get professional results, so you can achieve your goals without worrying. Success has never been this affordable!
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


