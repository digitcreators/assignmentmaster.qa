@extends('layouts.web')
@section('title',  "Top Personal Statement Help in Qatar for Students")
@section('description',"Highlight your strengths with a powerful statement from our personal statement help in Qatar and secure your dream opportunity. Let’s write your story together!")
@section('keywords',  'Personal Statement Help in Qatar')
@section('canonical', config('app.app_url') . Request::path())



@section('content')


<style>
    section.main-banner .banner-image {
    height: 604px !important;
    }
</style>
{{-- Header --}}
<section class="main-banner bg-grey text-white py-8">
       <img src="{{ asset('imgs/hero-banner.webp')}}" class="img-fluid banner-image" alt="Personal Statement Help in Qatar" title="Personal Statement Help in Qatar" width="1585" height="646" loading="eager">
    <div class="lg-px-5 px-5 py-lg-0 py-5 container mx-auto flex flex-col lg:flex-row md:flex-row items-center">
      <!-- Left Column -->
      <div class="">
        <h1 class="text-4xl font-bold pb-4 text-black span-header">First-Class Personal Statement Help in Qatar that Opens Doors to Success</h1>
        <p class="pt-6 text-black">
            With over 15 years of experience and more than 200 skilled writers, Assignmentmaster.qa has produced over 150,000 academic papers for students worldwide. We proudly offer personal statement help in Qatar, where our specialists turn your achievements and goals into compelling, tailored statements that capture attention. By working closely with our experts, you receive customized guidance that strengthens your application and improves your chances of admission or career success.
        </p>

        <div class=" flex flex-col sm:flex-row items-center sm:space-x-4 mt-10">
            <a class="fancy" href="{{route('order')}}">
            <span class="top-key"></span>
            <span class="text">Write My Personal Statement!</span>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
            </a>
            <a href="javascript:void(Tawk_API.toggle())" class="btn-pri lg:mt-0 mt-5">
                Chat Now
            </a>
        </div>
      </div>
      

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
       Perks You Will Enjoy When You Choose Our Personal Statement Writing Services in Qatar
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
        We have genuine personal statement writers in Qatar working on our platform who never copy and paste content, ensuring you receive work that is not plagiarized or written by AI.
        </p>
      </div>

      <!-- Box 2 -->
      <div class="card-sec p-8 text-center">
        <div class="icon-circle">
          <i class="fas fa-sync-alt"></i>
        </div>
        <h3 class="mt-5 font-bold text-xl">Multiple Free Edits</h3>
        <p class="mt-3 text-gray-100 text-sm leading-relaxed">
        If you believe there is room for improvement in your paper, our personal statement helpers in Qatar will cater to it on the spot without charging you any extra money.
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
      Personal Statement Writers in Qatar Who Will Never <br> Let Your Grades Fall
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
          <p>Fill in the order form and share with us your personal statement details and instructions.</p>
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
          <p>Receive your completed personal statement before the deadline and let us know if you need revisions.</p>
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
          Showcase Your True Potential with Our Personal Statement Writing Help in Qatar
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            To secure admission to your desired university, you must go for Assignment Master Qatar for expert personal statement writing assistance. Our professional writers are highly experienced and qualified, holding multiple degrees from reputable universities. They are well-versed in academic standards, enabling them to craft a striking personal statement that will help you stand out from the crowd and present yourself in the best possible manner. We have helped thousands of students from Al Rayyan, Doha, and Al Khor gain admission to leading universities. Our qualified experts know how to showcase all your strengths, background, and experience, which will grab the attention of the admissions committee of any educational institution and make a powerful impression on them.           
        </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Moreover, our writers provide a wide range of services, including proofreading, editing, plagiarism checks, formatting, and more. Our platform features genuine writers who do not employ AI tools or copy-paste content and consistently deliver plagiarism-free work. Every statement is written from the ground up, focusing on your achievements and career goals. Apart from personal statements, you can also get help with <a href="{{route('essay-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">essay writing</a> and <a href="{{route('college-assignment')}}" class="btn-shine" target="_blank" bis_skin_checked="1">college assignments</a>. So, don’t waste your time anymore. Choose our remarkable personal statement writing services and get chosen by your dream university.          
        </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
         Personal Statement Help Website in Qatar Without Stepping Outside Your Home
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Do you want to get your work done without having to leave your house? Well, then, you don’t need to worry now since students can take advantage of our online personal statement writing service while sitting comfortably at home. Our personal statement writing experts help you put your best foot forward by providing you with brilliant personal statements, capturing your personality and accomplishments to help you get admission to your desired institution. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            You must go for our platform since our team of writers is highly creative and they know how to write without exaggeration. They excel in writing personal statements that are persuasive and clear. Furthermore, we have supported a large number of students in their academic endeavours. By choosing us, you get the help of the highest standards, whether you need help with <a href="{{route('book-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">book writing</a> or <a href="{{route('ghost-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">ghost writing</a>. Our writers ensure that all students meet their academic goals. Besides, our cooperative writers will guide you every step of the process and provide quick delivery options so that you don't miss out on any opportunities. They are available to assist you 24/7, so feel free to reach out to them at any hour of the day.
          </p>
        </div>
      </div>

    </div>

    <!-- Second Row -->
    <div class="four-border-sec grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
      
      <!-- Left -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Personal Statement Writing Service Qatar that Provides Bespoke Solutions
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            If you want your personal statement written in a personalised way, showcasing your career goals and aspirations. Then you must choose our personal statement writers in Qatar who provide bespoke personal statements that make your story shine and impress the admissions committee. In addition, our writers are well-versed in different academic domains, so they can craft a superb personal statement on a wide range of subjects, whether you are applying for medical, engineering, business, law, or any other field. We have real writers on our platform who are dedicated to providing you with top-quality work that helps you gain admission to your dream program. They do everything from scratch and always provide 100% original work.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Moreover, our speedy writers offer fast delivery services and cheap online consultations to ensure your complete peace of mind. Our personal statement service is accessible across Qatar. So, simply ask our writers to ‘do my personal statement,’ and they will craft a professionally written statement that helps you make a positive impression by effectively highlighting your personality and skills. We are dedicated to making your personal statement stand out and securing admission to your dream institution.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Qatari Personal Statement Writers Craft Perfect Statements to Help You Get Selected
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Your personal statement is your opportunity to demonstrate your worth to the selection committee and highlight what sets you apart from others. Our top-quality personal statement assistance in Qatar is therefore centered on you. We get to know about your experience, achievements, and the goals you hope to achieve. The outcome? You get a customized personal statement that accurately presents your personality and potential.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Furthermore, our professional writers work closely with you to ensure every aspect of your journey is written in a captivating way. We guarantee your personal statement is suitable whether you are seeking a scholarship or applying to a university. Every statement is thoughtfully created to ensure it properly conveys your aspirations and the message you want to convey. The amount of attention we pay to every project sets us apart. We make sure your draft has a correct structure, immaculate grammar, and a professional tone to make it engaging for the reader. We compose statements that grab attention and match the requirements of your application. Let us guide you in turning your ideas and experiences into an effective personal statement that will make your application unforgettable.
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
              <h4 class="text-lg md:font-semibold">What is included in your personal statement writing service?</h4>
            </div>
            <div class="icons text-right w-1/4">
              <i class="fa fa-minus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide0" style="display: block;">
            Our personal statement writing service includes comprehensive assistance, including proofreading, editing, formatting, plagiarism checks, unlimited revisions, welcoming customer support, and fast delivery
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="content faq-internal-styling" data-no="1">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="1">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">2-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can you edit or proofread my existing personal statement?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide1" style="display: none;">
            Yes, we can edit or proofread your existing personal statement. To ensure your statement is polished and professional, our team meticulously examines grammar, structure, format, and tone to ensure it meets the highest standards.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="content faq-internal-styling" data-no="2">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="2">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">3-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How do I place an order for a personal statement?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide2" style="display: none;">
            You simply need to visit our website, fill out the order form with all the requirements and instructions. Don't miss out on any details and place your order. Our team will review your requirements and contact you in a short time, and assign you an expert who is the best fit for your task.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="content faq-internal-styling" data-no="3">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="3">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">4-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What is the typical turnaround time for writing a personal statement?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide3" style="display: none;">
            It depends on factors such as the complexity and word count. However, our writers are fast-paced and they always deliver on time. So, you don't have to worry about the deadlines. 
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">5-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can I communicate directly with the personal statement writer?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, you can communicate directly with your personal statement writer during the process. You can track the progress of your statement, share feedback, engage in discussions, or request changes as needed. Our team is available round the clock via chat, so feel free to reach out at any time of the day.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">6-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How many revisions am I entitled to after receiving my personal statement?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, you can request as many revisions as you want after receiving your personal statement until you're satisfied with your work. You won't have to pay any extra money for that. Your satisfaction is our top priority.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">7-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Are your personal statements original and plagiarism-free?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, our personal statements in Qatar are guaranteed to be 100% original and free from plagiarism. Our platform features real writers who craft content from scratch. They do not use AI tools or plagiarize from other sources. Additionally, each paper is checked using reliable tools, such as Turnitin, to ensure originality.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">8-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How do you ensure my personal statement reflects my personality and goals?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Our personal statements are customised for each client based on their unique experiences, personality, and goals. Our writers work closely with you and pay attention to your feedback so that they are able to craft a personal statement that reflects your ambitions and career goals.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">9-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What qualifications do your personal statement writers have?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            We have highly experienced and qualified personal statement writers who can help you get admission to your desired institution. They have strong academic backgrounds and hold the highest qualifications, such as MS, MPhil, and PhDs, from the leading educational institutions.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">10-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Is the service confidential, and will my information be kept private?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, our service is 100% confidential. We have a strict policy regarding customer privacy. Your personal information and project details are never shared with a third party.
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
      <h3>⚡ Get Cheap Personal Statement Help Qatar That Still Feels Premium</h3>
      <p>
        We take the time to understand your objectives and successes before crafting a personal statement that truly represents you. You will get professional writing from us that will set you apart without breaking the bank.
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


