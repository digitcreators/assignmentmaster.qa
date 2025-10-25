@extends('layouts.web')
@section('title',  "Top-Rated CIPD Assignment Help in Qatar for All Levels")
@section('description',"Score high grades with our top CIPD assignment help in Qatar. We deliver 100% original papers for all CIPD levels, crafted by expert HR professionals.")
@section('keywords',  'CIPD Assignment Help in Qatar')
@section('canonical', config('app.app_url') . Request::path())


@section('content')

{{-- Header --}}
<section class="main-banner bg-grey text-white py-8">
      <img src="{{ asset('imgs/hero-banner.webp')}}" class="img-fluid banner-image" alt="Thesis Writing Service in Qatar" title="Thesis Writing Service in Qatar" width="1585" height="646" loading="eager">
    <div class="lg-px-5 px-5 py-lg-0 py-5 container mx-auto flex flex-col lg:flex-row md:flex-row items-center">
      <!-- Left Column -->
      <div class="">
        <h1 class="text-4xl font-bold pb-4 text-black span-header">Achieve Distinction with Our Leading CIPD Assignment Help in Qatar</h1>
        <p class="pt-6 text-black">
           Assignmentmaster.qa is the ideal spot to get excellent CIPD Assignment Help in Qatar. We have been in the business for more than 15 years and have delivered over 150,000 top-quality papers for all CIPD levels with the help of our 200+ expert writers.
        </p>

        <div class=" flex flex-col sm:flex-row items-center sm:space-x-4 mt-10">
            <a class="fancy" href="{{route('order')}}">
            <span class="top-key"></span>
            <span class="text">Order Online CIPD Writing Help!</span>
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
       Perks You Will Enjoy When You Choose Our CIPD Writing Services in Qatar
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
            We have genuine CIPD writers working on our platform who never copy and paste content, ensuring you receive work that is original and not plagiarized or written by AI.
        </p>
      </div>

      <!-- Box 2 -->
      <div class="card-sec p-8 text-center">
        <div class="icon-circle">
          <i class="fas fa-sync-alt"></i>
        </div>
        <h3 class="mt-5 font-bold text-xl">Multiple Free Edits</h3>
        <p class="mt-3 text-gray-100 text-sm leading-relaxed">
            If you believe there is room for improvement in your paper, our CIPD writers in Qatar will cater to it on the spot without charging you any extra money.
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
      CIPD Writers in Qatar Who Will Never <br> Let Your Grades Fall
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
              <img src="{{asset('imgs/noor-3.webp')}}" alt="Noor" title="Noor" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Noor</h4>
                <p class="text-sm text-gray-500">CIPD Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Noor is a kind, encouraging writer who is aware of exactly what new HR professionals require. Having more than 9 years of expertise in HR and L&D, she has assisted many pupils in developing a solid basis in CIPD and has received praise from 7,345 students. She excels in making complicated ideas easy to understand and has produced 8,456 interesting and clear assignments for Level 3 students.
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
              <img src="{{asset('imgs/ahmad.webp')}}" alt="Ahmad" title="Ahmad" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Ahmad</h4>
                <p class="text-sm text-gray-500">CIPD Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  With a background in HR administration, Ahmad has mentored 13,023 fresh CIPD students using his knowledge. He has been working with us for more than 14 years, and Level 3 case studies and reports are his areas of expertise. Ahmad's work is engaging, clear, and full of actual HR observations that give each project a genuine and pertinent feel, earning him 12,564 incredible reviews.
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
              <img src="{{asset('imgs/mariyam.webp')}}" alt="Mariam" title="Mariam" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Mariam</h4>
                <p class="text-sm text-gray-500">CIPD Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Mariam has an MSc in Human Resource Management and has 10 years of academic writing experience. She is well-known for translating difficult HR ideas into understandable and well-written content, having received 8,564 positive reviews. Mariam has guided 9,023 Level 5 learners by focusing on tasks related to employee engagement, performance enhancement, and workplace culture. 
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
              <img src="{{asset('imgs/rehman-2.webp')}}" alt="Rehman" title="Rehman" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Rehman</h4>
                <p class="text-sm text-gray-500">CIPD Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Rehman has been working in HR consulting and holds a CIPD Level 5 diploma. He has worked on 7,345 projects over the past 8 years in this field. By fusing concepts with real-world insights, he guarantees every project not only satisfies CIPD criteria but also highlights excellent critical analysis. Students find him to be the perfect choice because he is quite knowledgeable about people development and has received 6,098 great reviews.
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
              <img src="{{asset('imgs/aisha-5.webp')}}" alt="Aisha" title="Aisha" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Aisha</h4>
                <p class="text-sm text-gray-500">CIPD Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                 Aisha is a Level 7 writer with extensive HR leadership and talent management experience. She specializes in creating research-based tasks and analytical essays. Aisha has helped 11,674 students create work that is worthy of distinction and reflects actual professional insight, thanks to her 12 years of academic writing experience. She is noted for her accuracy and has been admired by students in 10,982 glowing reviews.
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
              <img src="{{asset('imgs/faisal-2.webp')}}" alt="Faisal" title="Faisal" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Faisal</h4>
                <p class="text-sm text-gray-500">CIPD Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  With more than 13 years on our platform, Faisal offers a corporate angle to Level 7 assignments. Strategic workforce planning, leadership development, and change management are among his specialties, and he has produced 12,905 assignments, earning 11,953 five-star reviews. Faisal's work is noted for being crisp, well-researched, and precisely in line with CIPD's grading criteria, perfect for students striving for top results. 
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
          <p>Fill in the order form and share with us your CIPD details and instructions.</p>
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
          <p>Receive your completed CIPD writing before the deadline and let us know if you need revisions.</p>
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
          Excel in Every Module with Our Top CIPD Assignment Help in Qatar
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Are you a CIPD student and facing writing challenges? If that’s so, then you must hire our competent CIPD Assignment Writers in Qatar who know how to compose assignments, ticking every CIPD requirement. There are many modules, such as learning and development, people management, and employment engagement, that students need help with to understand the concepts better. That’s why our writers not only write but also offer guidance to aid your learning. Every topic is written in clear academic language and a professional tone.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Moreover, our HR professionals have studied and worked in the same industry, so you won't get robotic writing but a strong paper that meets the academic criteria and feels insightful and impressive. They have worked in organizations all over the UK and excel in all CIPD levels, including level 3, level 5 and level 7. Real-world workplace examples will be incorporated into your assignments, along with theory, to enhance your chances of getting high marks. In addition, our team maintains friendly communication with its clients and welcomes your views at all stages. They specialise in other kinds of tasks too, including <a href="{{route('university-assignment')}}" class="btn-shine" target="_blank" bis_skin_checked="1">university assignments</a> and <a href="{{route('college-assignment')}}" class="btn-shine" target="_blank" bis_skin_checked="1">college assignments</a>, so get in touch with us if you need help.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
         Achieve Academic Excellence with Our Online CIPD Assignment Help Qatar
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Being an aspiring HR professional can be draining as you are buried under piles of assignments and other important tasks. We have qualified HR professionals and academic writers in our writing team who know how to craft a perfect CIPD paper matched to your requirements and academic criteria. They are proficient in all CIPD levels from level 3 Foundation to level 7 Advanced. Whether you need assistance with employee development, HR strategies or reflection writing, they can tackle all and help you meet the highest CIPD standards.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Furthermore, you will receive 100% original work with a good presentation of your idea, proper structure, and accurate referencing. Also, practical examples will be added to blend with theory and make your work even more interesting and high-scoring. Apart from that, we make sure your assignments are delivered right on schedule, giving you plenty of time to review before the submission date. You can go through it and let us know if you need any tweaks, and we will take care of it. We can assure you that our assignments are written in a clear and easy-to-understand manner, which surely enhances your learning of the topic and builds your confidence.
          </p>
        </div>
      </div>

    </div>

    <!-- Second Row -->
    <div class="four-border-sec grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
      
      <!-- Left -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
         Learn, Write and Grow with Confidence – Expert CIPD Assignment Writing Help
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Becoming the sort of HR expert people look up to is more than simply passing assignments; it's about developing skills and knowledge. But writing those thorough assignments can seem impossible between deadlines, lengthy shifts, and personal obligations. That's why CIPD Assignment Help Qatar is here, to help you learn more effectively. We're not your usual writing company, but dependable academic support, helping you transform your knowledge, concepts, and research into exemplary assignments. We produce work that flows well, reads coherently, and gets grades that match your real ability. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            In addition to that, we customise every topic to your objectives, whether you are juggling challenging Level 7 strategic HR projects or having difficulty with CIPD Level 3 foundation concepts. We emphasise originality, critical thinking, and professional insight—the three qualities every excellent CIPD paper has to have. You will never get generic stuff or copy-pasted work. Everything is made from scratch, checked by actual experts, and then fixed till it's perfect. So, if you want to get rid of the tension or are unsure where to begin, just reach out to our experts. We will enable you to meet every deadline and grasp your topics more clearly.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Build Your HR Future with Our Qatar CIPD Assignment Tutors
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Your CIPD certification is the first step toward an outstanding HR career. We at CIPDAssignmentHelp enable you not only to complete projects but also to really grasp and excel in your HR path. We want to help you think, write, and develop like a true HR expert. Our skilled writers know how CIPD standards fit with actual HR problems as they are trained HR professionals with experience in several industries. They transform complex ideas such as employee engagement, talent management, and leadership development into clear, relevant information that scores best. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Our writers can clearly and practically present topics such as motivation, growth, and employee engagement. They'll assist you in linking ideas learned in the classroom to the reality of the workplace, the blend CIPD assessors seek to see. We keep the entire procedure flexible, polite, and totally open. You'll receive direct assistance, updates, and a paper capturing your ideas and aspirations. Whether you're in Levels 3, 5, or 7, we tailor each project to meet your level and career aspirations. With us, you gain confidence and not only meet targets. You go one more step closer to being the HR expert you are meant to be. Let us work together to make it happen. 
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
                        <p class="text-base text-center font-semibold pt-10">CIPD Level 3</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Essentials of People Practice

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Human Resource Management
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Third 2 grid of Academic -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Academic Level:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">CIPD Level 3
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fourth 2 grid of Pages -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Pages:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">20
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
                            <a href="{{ asset('samples/CIPD-level-3.docx') }}"
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
                        <p class="text-base text-center font-semibold pt-10">CIPD Level 5</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Behaviors & Valuing People

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Organizational Development
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Third 2 grid of Academic -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Academic Level:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">CIPD Level 5
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fourth 2 grid of Pages -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Pages:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">14
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
                            <a href="{{ asset('samples/CIPD-level-5.docx') }}"
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
                        <p class="text-base text-center font-semibold pt-10">CIPD Level 7</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Resourcing & Talent Management

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Human Resource Management
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Third 2 grid of Academic -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Academic Level:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">CIPD Level 7
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fourth 2 grid of Pages -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Pages:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">12
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
                            <a href="{{ asset('samples/CIPD-level-7.docx') }}"
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
                            <img src="{{asset('imgs/shazia.webp')}}" class="img-fluid" width="100" height="100" alt="Shazia" title="Shazia">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Shazia</strong>
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
                       “Starting my level 3 CIPD assignments was quite stressful for me, but the writer I collaborated with helped to simplify everything. She discussed the difficult concepts with me, and it helped me to learn a lot. Ultimately, I passed with good grades.”
                    </p>
                </div>
            </div>
        </div><div class="swiper-slide px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="4">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/abdullah-4.webp')}}" class="img-fluid" width="100" height="100" alt="Abdullah" title="Abdullah">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Abdullah</strong>
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
                        “I was juggling my studies and work, and my writer helped me manage things well. My level 3 assignment was well-written and completely unique. They even taught me how to reflect, so I highly recommend it!”
                    </p>
                </div>
            </div>
        </div><div class="swiper-slide swiper-slide-prev px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="5">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/anabia.webp')}}" class="img-fluid" width="100" height="100" alt="Anabiya" title="Anabiya">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Anabiya</strong>
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
                        “I was having difficulties with my Level 5 report, but my writer helped me nail it. The project was thorough, accurate, and full of practical examples. My evaluator gave me good comments and at last I scored top marks!”
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-slide swiper-slide-active px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="0">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/fahad.webp')}}" class="img-fluid" width="100" height="100" alt="Fahad" title="Fahad">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Fahad</strong>
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
                        “I have hired other services before, but this one was a lifesaver. My writer knew the CIPD Level 5 framework so well. The assignment was relevant and perfectly fit the requirements. I am really impressed!”
                    </p>
                </div>
            </div>
        </div>
        
        <div class="swiper-slide swiper-slide-active px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="0">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/aneeqa.webp')}}" class="img-fluid" width="100" height="100" alt="Aneeqa" title="Aneeqa">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Aneeqa</strong>
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
                        “My Level 7 research project was very demanding, yet the writer tackled it very well. They used the right tone, structure, and examples. Professional and seamless communication was also maintained at all times. Totally reliable service.”
                    </p>
                </div>
            </div>
        </div>
        
        <div class="swiper-slide swiper-slide-active px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="0">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/salman.webp')}}" class="img-fluid" width="100" height="100" alt="Salman" title="Salman">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Salman</strong>
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
                        “I needed help with my Level 7 project, and the writer's quality astounded me. The writer was obviously well-versed in HR topics. Absolutely worth recommending to anyone pursuing CIPD qualifications.”
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
              <h4 class="text-lg md:font-semibold">Do you provide help for all CIPD levels (Level 3, 5, and 7)?</h4>
            </div>
            <div class="icons text-right w-1/4">
              <i class="fa fa-minus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide0" style="display: block;">
            We support all CIPD levels from level 3 to level 7. Our writers are proficient and knowledgeable at all levels, and they will help you meet your academic expectations. They customise every assignment according to your qualification level and requirements.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="content faq-internal-styling" data-no="1">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="1">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">2-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Are your writers certified in HR or CIPD-related fields?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide1" style="display: none;">
            Yes, our writers have extensive experience in HR and CIPD-related fields. To improve your projects, they blend practical examples with academic knowledge. You receive work that is relevant and completely in line with CIPD standards, thanks to their help.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="content faq-internal-styling" data-no="2">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="2">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">3-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you offer personalized help for case studies and reports?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide2" style="display: none;">
            Sure! We specialise in both CIPD case studies and reports, creating them with a strong focus on academic demands and real HR situations. Our writers have a great capacity to carefully prepare, organise, and provide well-written solutions that comply with CIPD requirements.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="content faq-internal-styling" data-no="3">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="3">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">4-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How long does it take to complete a CIPD assignment?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide3" style="display: none;">
            It depends on the topic, complexity and word limit of your CIPD assignment. Our writers are efficient, having honed their skills over years of experience and can complete your assignments on time without compromising quality.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">5-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What happens if my assignment deadline is very short?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, if you need urgent CIPD assignment help, we do offer express services. Our seasoned writers can accommodate urgent orders since they are efficient and have developed great writing speed over the years.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">6-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can I request a revision if I receive the work late or need updates?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, you can request a revision if you receive the work late or need updates. Our writers are open to revising your work until it meets your academic requirements and expectations. 
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">7-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How much does your CIPD assignment help cost in Qatar?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            It depends on various factors, such as complexity, deadline, and academic level. We offer student-friendly packages to fit your budget and needs. Besides, there are no hidden or surprise costs. 
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">8-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Will my assignment be written according to CIPD guidelines?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, we strictly follow CIPD guidelines and assessment criteria in every task. You will never have to concern yourself about referencing, structure or anything else. Every CIPD project is created with accuracy, creativity, and attention to detail, enabling you to satisfy academic criteria.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">9-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you provide 24/7 assistance for CIPD assignment queries?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, we do. You can easily communicate directly with the assigned writer via chat. They will be available round the clock to solve your assignment queries, and you can also track the progress or share your feedback. 
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">10-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What if I am not satisfied with the final assignment?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            If you are not satisfied with the final assignment, no problem at all. We offer limitless revisions until you are happy with the work. Besides, there are no extra charges for these edits. Your satisfaction is our top priority.
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
       <h3>⚡ Ready to Take Your CIPD Studies to the Next Level?<h3>
      <p>
        Partner with our seasoned CIPD experts to learn, write and grow in your career. From level 3 to level 7, we deliver high-scoring papers every time and on time. 
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


