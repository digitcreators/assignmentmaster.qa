@extends('layouts.web')
@section('title',  "Best CV Writing Services in Qatar | Land Your Dream Job")
@section('description',"Get your dream job through our professional CV writing services in Qatar. We deliver powerful resumes that employers love to read. Start your success today!")
@section('keywords',  'CV Writing Services in Qatar')
@section('canonical', config('app.app_url') . Request::path())


@section('content')

<style>
.calculator {
background-color: #0000003b;
border-bottom-left-radius: 40px;
border-top-right-radius: 40px;
box-shadow: inset 0px 5px 6px 0px #e74864;
border: 2px solid #e74864;
}

.sample-bg {
background: linear-gradient(#e04c60, #3e1420);
background-size: cover;
background-position: center;
background-repeat: no-repeat;
border-top: 5px solid white;
}

.content-center {
align-content: center;
}

#image {
display: block;
margin: auto;
max-width: 90%;
max-height: 90vh;
cursor: zoom-in;
user-select: none;
transition: all 0.3s ease;
}
.bg-opacity-90 {
--tw-bg-opacity: 0.9;
}
.bg-gray-600 {
background-color: rgb(75 85 99 / var(--tw-bg-opacity));
}
.overflow-y-auto {
overflow-y: auto;
}

</style>

{{-- Header --}}
<section class="main-banner bg-grey text-white py-8">
  <img src="{{ asset('imgs/hero-banner.webp')}}" 
       class="img-fluid banner-image w-full h-auto object-cover" 
       alt="Thesis Writing Service in Qatar" 
       title="Thesis Writing Service in Qatar" 
       width="1585" height="646" loading="eager">

  <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-5 py-10 lg:py-0 gap-10">

    <!-- Left Column -->
    <div class="lg:w-1/2 text-center lg:text-left">
      <h1 class="text-4xl font-bold pb-4 text-black span-header">
        Rewrite Your Career Story with CV Writing Services in Qatar
      </h1>
      <p class="pt-6 text-black leading-relaxed">
        Assignmentmaster.qa stands as a trusted provider of CV writing services in Qatar, helping fresh graduates and seasoned professionals shape successful careers for over 15 years. With a dedicated team of 200+ expert writers, we have crafted more than 150,000 ATS-friendly, job-winning resumes that deliver real results. 
      </p>

      <div class=" flex flex-col sm:flex-row items-center sm:space-x-4 mt-10">
        <a class="fancy" href="{{route('order')}}">
          <span class="top-key"></span>
          <span class="text">Hire CV Writers Qatar!</span>
          <span class="bottom-key-1"></span>
          <span class="bottom-key-2"></span>
        </a>
        <a href="javascript:void(Tawk_API.toggle())" class="btn-pri lg:mt-0 mt-5">
          Chat Now
        </a>
      </div>
    </div>

    <!-- Right Column -->
    <div class="calculator mx-auto lg:mx-0 sm:max-w-sm md:max-w-md lg:max-w-lg px-4 relative lg:mt-0 mt-5">
      <div class="py-3 px-5 lg:px-6 bg-navcolor rounded-md w-full max-w-md">
        <div class="text-center py-4">
          <h2 class="text-black font-bold text-[26px]">Get Instant Help Anytime</h2>
          
        </div>

        <form action="" method="POST">
          <input type="hidden" name="_token" value="DD8jt9dlzbA0lc36hlB46sZsvo1Em4RaRJYhqrLY">                
          
          <div class="space-y-4">
            <select name="paper_type" class="w-full py-4 px-4 bg-navcolor border-2 border-navactive rounded-[10px] text-black">
              <option hidden disabled selected>Select</option>
              <option value="33">CV/Resume Writing</option>                                    
              <option value="43">Cover Letter Writing</option>                                    
              <option value="44">LinkedIn Profile Writing</option>                                    
              <option value="45">CV Editing Service</option>                                    
            </select>

            <select id="academic_level" name="academic_level" class="get-fare w-full py-4 px-4 bg-navcolor border-2 border-navactive rounded-[10px] text-black">
              <option hidden disabled selected>Career Level</option>
              <option value="1">Entry Level 0 - 2 years</option>                                    
              <option value="2">Mid Level 3 - 5 years</option>                                    
              <option value="3">Senior Level 5 - 10 years</option>                                    
              <option value="4">C-Suite 10+ years</option>                                    
            </select>
          </div>
          
          <h4 class="my-4 text-center text-xl font-bold" style="color: #d55171;">
            Pricing: QAR <span class="text-2xl"><span id="cost">0</span></span>
          </h4>
          
          <div class="flex justify-center">
            <a class="btn-pri" href="{{route('order')}}">
              Place Order Now
            </a>
          </div>
        </form>
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
       Perks You Will Enjoy When You Choose Our CV Writing Company in Qatar
      </h2>
      <p class="mt-5 text-black text-sm">
        At our online CV services, our team offers you amazing support and guidance, and helps make your profile shine to employers.
      </p>
    </div>

    <!-- Features Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-10">
      <!-- Box 1 -->
      <div class="card-sec p-8 text-center">
        <div class="icon-circle">
          <i class="fas fa-check-double"></i>
        </div>
        <h3 class="mt-5 font-bold text-xl">ATS-Friendly CVs</h3>
        <p class="mt-3 text-gray-100 text-sm leading-relaxed">
           Our expert CV writers create professionally written CVs optimized for Applicant Tracking Systems, ensuring your resume passes scans and impresses employers.
        </p>
      </div>

      <!-- Box 2 -->
      <div class="card-sec p-8 text-center">
        <div class="icon-circle">
          <i class="fas fa-sync-alt"></i>
        </div>
        <h3 class="mt-5 font-bold text-xl">Multiple Free Edits</h3>
        <p class="mt-3 text-gray-100 text-sm leading-relaxed">
           If you believe there is room for improvement in your CV, our professional CV writers in Qatar will cater to it on the spot without charging you any extra money.
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
            Your work is done by someone who knows the job market and has a deep understanding of the recruitment standards.
        </p>
      </div>
    </div>
  </div>
</section>



<section class="best-assignment py-10 bg-gray-50">
  <div class="container mx-auto px-4">
    <!-- Heading -->
    <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-800 leading-snug span-header">
      CV Writers in Qatar Who Will Never <br> Let Your Grades Fall
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
              <img src="{{asset('imgs/laveezah.webp')}}" alt="Laveezah" title="Laveezah" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Laveezah</h4>
                <p class="text-sm text-gray-500">CV Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Having written 11,908 CVs and having 12 years of CV writing experience, Laveezah has received 10,897 excellent reviews from experts all throughout Qatar. She is adept at transforming mundane profiles into strong, achievement-oriented stories that immediately appeal to employers. Laveezah is renowned for her meticulousness and makes sure every CV not only clears the ATS scan but also has a solid impression. 
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
              <img src="{{asset('imgs/shahid.webp')}}" alt="Shahid" title="Shahid" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Shahid</h4>
                <p class="text-sm text-gray-500">CV Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Shahid has 9 years of practical experience assisting professionals in advancing their careers. With 8,800 CVs written and 7280 glowing reviews received, he is well-known for his creativity and familiarity with the job scene in Qatar. His approach combines professionalism with personality to guarantee that every CV has a lasting impression.
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
              <img src="{{asset('imgs/amna.webp')}}" alt="Amna" title="Amna" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Amna</h4>
                <p class="text-sm text-gray-500">CV Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                 Amna has helped 13,908 fresh graduates and students to develop memorable CVs that increase chances for fresh opportunities. She really excels in turning little experience into great career potential and has been working with us for over 14 years. Clients have praised her writing ability and helpful attitude in 12,908 five-star reviews. 
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
              <img src="{{asset('imgs/moiz.webp')}}" alt="Moiz" title="Moiz" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Moiz</h4>
                <p class="text-sm text-gray-500">CV Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Moiz has produced 9,054 customized CVs for customers in Qatar's main industries over the period of 10 years. Supported by 8,546 verified reviews, he is renowned for creating very focused, ATS-friendly, and technically accurate CVs that cater to every client's career objective. His clients value his demeanour, quick turnaround, and attention to detail. 
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
     Four Simple Steps to Place Your Order
    </h3>

    <div class="steps-grid">
      <!-- Step 1 -->
      <div class="step">
        <span class="step-number">1</span>
        <div class="step-content">
          <img src="{{ asset('imgs/order.png')}}" class="step-icon" alt="order" title="order">
          <p>Fill in the order form and share with us your experience, career goals, and target job.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="step">
        <span class="step-number">2</span>
        <div class="step-content">
          <img src="{{ asset('imgs/transaction.png')}}" class="step-icon" alt="transaction" title="transaction">
          <p>Transfer your payment through our safe payment gateways</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="step">
        <span class="step-number">3</span>
        <div class="step-content">
          <img src="{{ asset('imgs/updates.png')}}" class="step-icon" alt="updates" title="updates">
          <p>Keep in touch with your writer and get updates about your work</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="step">
        <span class="step-number">4</span>
        <div class="step-content">
          <img src="{{ asset('imgs/package.png')}}" class="step-icon" alt="package" title="package">
          <p>Receive your completed CV on time and let us know if you need revisions.</p>
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
          Progress in Your Career with the Help of Professional CV Writers in Qatar and Arab
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Your CV has to have personality, accuracy, and a goal in Qatar's fast-moving employment scene. That's what we bring about. Our CV makers think it's better to create career narratives that sound like you, just sharper and more polished, rather than just using fancy language. We help you get the job you want, not just by listing your talents. We adapt your resume to match the recruiter's point of view. Each word is selected deliberately to help you stand out among a pile of applications. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
        Moeriver, our Qatar-based experts who know about the recruitment standards, what appeals to local companies, and what keywords get past the ATS filters. From fresh qualified graduates entering their first job to managers aiming for leadership roles, we have assisted professionals in all sectors in creating CVs that open doors. And if you want, we'll design a complementary cover letter and LinkedIn profile to help you stand out even more. You will get ongoing support from us throughout the process, and we will handle any tweaks if you want, without charging any money. We will make your story your most effective career weapon that leads you to fantastic new opportunities. 
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
         Choose Our Online CV Making Services and Level Up Your Job Hunt
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Every professional has a career journey worth sharing; however, not all CVs accurately depict it. That's what we do best here. Our professional CV writing services in Qatar aim to assist individuals in transforming boring, dull CVs into attention-grabbing profiles. We first get to know you. What are your career ambitions? What sort of work are you seeking? What distinguishes you from other applicants? Knowing this enables our skilled writers to create a CV that highlights your values, experience, and character, in addition to your credentials. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Furthermore, we build a professional story that demonstrates to recruiters why you are the best fit. Every line we create is suited for Qatar's particular employment environment. Our team keeps up with recruiting patterns, ATS systems, and Qatar's employer expectations. Your CV will be crafted to wow the employer by using the right keywords, tone, structure, and layout. We also provide career bundles, including cover letter writing and LinkedIn optimization, to ensure your professional identity is appealing across all channels. So, if your present CV seems to be hindering you, let us make it shine with originality and clarity. Your CV needs to stand out in today's cutthroat job market so that people will remember it.
          </p>
        </div>
      </div>

    </div>

    <!-- Second Row -->
    <div class="four-border-sec grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
      
      <!-- Left -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
         Top Choice for Professionals Where Careers Soar with CV Writing Service in Qatar
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            In Qatar's rapidly expanding employment market, standing out depends not only on your accomplishments but also on how you portray them. That is the reason our expert CV makers in Qatar go beyond just writing generic resumes. We create market-relevant CVs that highlight you as the best candidate. We know that not all professionals are the same. To produce a resume directly addressing your employers, our writers examine your objectives, background, and aspirations. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            In addition, no templates or AI-generated content are used to produce your CVs. We emphasize clearly displaying your accomplishments with quantifiable outcomes and a neat and clean style that draws in both Applicant Tracking Systems (ATS) and recruiters. We have assisted experts in a lot of fields, such as aviation, healthcare, education, oil & gas, and hospitality, in securing positions with top Qatari and global companies. We will help you present yourself in the best possible light to get you hired faster. Besides, our CV writing agency in Doha is super cheap while providing excellent quality. We keep our prices fair so that people of all backgrounds can get a well-written CV, whether they are a recent graduate, student, or a professional who wants to advance in their career. 
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Polish Your Profile with Our Professional CV Writing in Qatar 
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Often, the first discussion you will have with your potential employer is about your CV, so make it noteworthy. We at our Qatar CV writing company instill confidence rather than just producing resumes. Every CV we produce combines strategy, originality, and clarity, meant to showcase your finest self on paper. First of all, we find out about you: your objectives, skills, and the path you want to follow. We then form those specifics into a CV that is both professional and personal. Every word is written deliberately to guarantee your success. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Moreover, our writers understand the job scene in Qatar as well as the particular requirements of both domestic and foreign companies. We will customize your CV to meet the demands of your targeted industry, whether you are applying to a start-up or a big corporation. We also emphasize presentation. We ensure a neat design for keyword optimization for ATS systems. What’s more? Our approach is straightforward: no misleading packages and no hidden costs. Only honest writers, clear pricing, and a service that genuinely cares about your success. If you have been searching for ‘CV writing service near me’, then no need to look any further because you have just found the right one.
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


<section class="sample-bg px-4 md:px-16 lg:px-24 py-5">
    <div class="text-center text-4xl text-white py-6">
        <strong>Real Resume Samples That Land Jobs</strong>
    </div>

    {{-- Modals --}}
    <div>

        <div class="content-center fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto z-20" id="my-modal-1"
            data-target="7">
            <div class=" mx-auto p-5  rounded-md my-auto overflow-visible " id="removeWidth">
                <img src="{{ asset('imgs/x-icon.webp') }}" alt="x-icon" title="x-icon"
                    class="w-5 top-3 right-3 cursor-pointer" id="ok-btn-1">

                <div class="zoom-wrapper mt-3 ">
                    <div class="">
                        <img src="{{ asset('imgs/modal-cv6.webp') }}" id="image" alt="Zoomable Image">
                    </div>
                </div>
            </div>
        </div>



        <div class="content-center fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto z-20" id="my-modal-2"
            data-target="5">
            <div class=" mx-auto p-5  rounded-md my-auto overflow-visible " id="removeWidth">
                <img src="{{ asset('imgs/x-icon.webp') }}" alt="x-icon" title="x-icon"
                    class="w-5 top-3 right-3 cursor-pointer" id="ok-btn-2">

                <div class="zoom-wrapper mt-3 ">
                    <div class="">
                        <img src="{{ asset('imgs/modal-cv1.webp') }}" id="image" alt="Zoomable Image">
                    </div>
                </div>
            </div>
        </div>

      

            {{-- Modal Content Resume --}}
            <div class="content-center fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto z-20" id="my-modal-3"
            data-target="0">
            <div class=" mx-auto p-5  rounded-md my-auto overflow-visible " id="removeWidth">
                <img src="{{ asset('imgs/x-icon.webp') }}" alt="x-icon" title="x-icon"
                    class="w-5 top-3 right-3 cursor-pointer" id="ok-btn-3">

                <div class="zoom-wrapper mt-3 ">
                    <div class="">
                        <img src="{{ asset('imgs/modal-cv2.webp') }}" id="image" alt="Zoomable Image">
                    </div>
                </div>
            </div>
        </div>


         <div class="content-center fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto z-20" id="my-modal-4"
            data-target="1">
            <div class=" mx-auto p-5  rounded-md my-auto overflow-visible " id="removeWidth">
                <img src="{{ asset('imgs/x-icon.webp') }}" alt="x-icon" title="x-icon"
                    class="w-5 top-3 right-3 cursor-pointer" id="ok-btn-4">

                <div class="zoom-wrapper mt-3 ">
                    <div class="">
                        <img src="{{ asset('imgs/modal-cv3.webp') }}" id="image" alt="Zoomable Image">
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-3 gap-6">

        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
            <img class="mx-auto border-4 border-gray-300" src="{{ asset('/imgs/01.webp') }}" alt="Cv Sample 1" width="322" height="417"
                title="Cv Sample 1" id="open-btn-1" style="box-shadow: 3px 4px 7px 0px #f7a4ad;">
        </div>

        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
            <img class="mx-auto border-4 border-gray-300 " src="{{asset('/imgs/02.webp')}}" alt="Cv Sample 2" width="322" height="417"
                title="Cv Sample 2" id="open-btn-2" style="box-shadow: 3px 4px 7px 0px #f7a4ad;">
        </div>
        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
            <img class="mx-auto border-4 border-gray-300 " src="{{asset('/imgs/03.webp')}}" alt="Cv Sample 3" width="322" height="417"
                title="Cv Sample 3" id="open-btn-3" style="box-shadow: 3px 4px 7px 0px #f7a4ad;">
        </div>
        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
            <img class="mx-auto border-4 border-gray-300 " src="{{asset('/imgs/04.webp')}}" alt="Cv Sample 4" width="322" height="417"
                title="Cv Sample 4" id="open-btn-4" style="box-shadow: 3px 4px 7px 0px #f7a4ad;">
        </div>
    </div>
    <div class="flex justify-center items-center mt-10" bis_skin_checked="1">
                    <a href="https://assignmentmaster.qa/samples" class="btn-pri text-sm font-semibold mt-3 py-2 px-4">View All Samples</a>
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
                            <img src="{{asset('imgs/munazzah.webp')}}" class="img-fluid" width="100" height="100" alt="Munazza" title="Munazza">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Munazza</strong>
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
                    “I am pretty impressed with how well-written my CV appears now! The writer totally changed my previous CV into something clean, confident, and fit for the Qatar employment scene. I strongly suggest their CV writing service to anyone looking for a job.”
                    </p>
                </div>
            </div>
        </div><div class="swiper-slide px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="4">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/rehan.webp')}}" class="img-fluid" width="100" height="100" alt="Rehan" title="Rehan">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Rehan</strong>
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
                    “Years in the same firm had left me battling to refresh my CV. The writer not only helped me see my experience differently but also made it appropriate for the ATS system. I have let my coworkers know about their services already. Unquestionably the best CV writing services I have ever utilized!”
                    </p>
                </div>
            </div>
        </div><div class="swiper-slide swiper-slide-prev px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="5">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/yusra.webp')}}" class="img-fluid" width="100" height="100" alt="Yusra" title="Yusra">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Yusra</strong>
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
                       “I had no idea how to create a CV that would capture attention as a recent graduate. The team was incredibly helpful and supported me at every step. My writer transformed my skills into something very amazing. All in all, a wonderful experience!”
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
                            <img src="{{asset('imgs/wahid.webp')}}" class="img-fluid" width="100" height="100" alt="Wahid" title="Wahid">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Wahid</strong>
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
                        “Knowing my field, the writer crafted a CV that exactly reflected the requirements of Qatari recruiting companies. Plus, revision was free, and communication was easy throughout the process. This service surpassed my expectations! ”
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
              <h4 class="text-lg md:font-semibold">Do you provide custom CVs for different industries in Qatar?</h4>
            </div>
            <div class="icons text-right w-1/4">
              <i class="fa fa-minus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide0" style="display: block;">
            We provide custom CVs for different industries in Qatar, whether you belong to engineering, healthcare, business, education, IT, or any other field. Our writers know how to customize your CV according to your career goals and the competitive job market.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="content faq-internal-styling" data-no="1">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="1">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">2-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What information do I need to provide for my CV?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide1" style="display: none;">
            You need to provide information for your CV, such as personal details, work experience, educational background, skills, goals, and accomplishments. You can also mention your target job and industry so that we can align your CV accordingly.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="content faq-internal-styling" data-no="2">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="2">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">3-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What makes your CV Writing Services in Qatar different from others?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide2" style="display: none;">
            Our CV writing services in Qatar are different from others because of the quality and personalization we offer. We have industry-specific writers who craft your CV. They know the job market trends and what employers seek these days. No AI tools are employed in writing your resume. Besides, we offer reasonable rates and dedicated customer care.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="content faq-internal-styling" data-no="3">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="3">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">4-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you write CVs for fresh graduates in Qatar?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide3" style="display: none;">
            Yes, we write CVs for fresh graduates in Qatar who want to start their careers. Our writers will showcase your strengths, qualities, inetrnsihip, and potential to the hiring managers to present you as a suitable candidate.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">5-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you offer unlimited revisions until I’m satisfied?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            If you are not satisfied with your CV, no problem at all. We offer limitless revisions until you are happy with the work. Besides, there are no extra charges for these edits. Your satisfaction is our top priority.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">6-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How much do your CV Writing Services in Qatar cost?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            It depends on factors like experience level and turnaround time. However, we offer a fair and transparent pricing structure, allowing you to benefit from our CV writing services. There are no hidden charges that may surprise you.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">7-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you offer packages for CV, cover letter, and LinkedIn optimization?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, we do offer packages for CVs, cover letters, and LinkedIn optimization, helping you save money and time. These packages will enhance your professional image across different platforms and improve your chances of attracting top employers in Qatar.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">8-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What payment methods are available in Qatar?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            We ensure safe and secure payment methods in Qatar in order to avoid fraud. You can transfer payment through debit and credit cards. 
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">9-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How do you ensure that my CV is ATS-friendly (Applicant Tracking System)?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Our CV writers use the right keywords, proper formatting, and industry-relevant phrases according to the job descriptions. They avoid confusing layouts and graphics so that the document is readable, passes through the ATS screenings, and reaches the employer’s desk.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">10-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can I contact the writer directly to discuss my requirements?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
           Yes, you can easily communicate directly with the writer via chat to discuss your requirements. They will be available round the clock to solve your queries, and you can also track the progress or share your feedback. 
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
       <h3>⚡ Watch Your Career Take Off with the Best CV Writing Service Qatar<h3>
      <p>
        Let's build a great CV together that opens doors to fresh new opportunities. Our creative CV writers know how to draw attention to your unique talents and experience.
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
 @section('scripts')
 <script>
  const prices = {
    1: { // Entry Level
      33: 150, // CV/Resume Writing
      43: 100, // Cover Letter Writing
      44: 150, // LinkedIn Profile Writing
      45: 500  // CV Editing Service
    },
    2: { // Mid Level
      33: 200,
      43: 150,
      44: 200,
      45: 600
    },
    3: { // Senior Level
      33: 250,
      43: 200,
      44: 250,
      45: 700
    },
    4: { // C-Suite
      33: 300,
      43: 250,
      44: 300,
      45: 800
    }
  };

  function updatePrice() {
    const level = $("#academic_level").val();
    const paper = $("select[name='paper_type']").val();
    let price = 0;

    if (level && paper && prices[level] && prices[level][paper]) {
      price = prices[level][paper];
    }

    $("#cost").html(price);
  }

  $("select[name='paper_type'], #academic_level").change(updatePrice);
</script>

 <script>
document.querySelectorAll('[id^="my-modal-"]').forEach(modal => {
    const modalId = modal.id;
    const number = modalId.split('-')[2];
    const img = modal.querySelector('#image');
    const closeBtn = modal.querySelector(`#ok-btn-${number}`);
    let zoomed = false;

    if (!img || !closeBtn) return;

    // Helper functions
    const disableScroll = () => {
        document.body.style.overflow = 'hidden';
        document.documentElement.style.overflow = 'hidden';
    };

    const enableScroll = () => {
        document.body.style.overflow = '';
        document.documentElement.style.overflow = '';
    };

    // Detect modal open and lock scroll
    const observer = new MutationObserver(() => {
        const isVisible = window.getComputedStyle(modal).display !== 'none';
        if (isVisible) {
            disableScroll();
        } else {
            enableScroll();
        }
    });
    observer.observe(modal, { attributes: true, attributeFilter: ['style'] });

    // Image zoom
    img.addEventListener('click', () => {
        zoomed = !zoomed;
        if (zoomed) {
            img.style.maxWidth = 'none';
            img.style.maxHeight = 'none';
            img.style.width = 'auto';
            img.style.cursor = 'zoom-out';
            img.classList.add('zoomed');
        } else {
            img.style.maxWidth = '90%';
            img.style.maxHeight = '90vh';
            img.style.width = '';
            img.style.cursor = 'zoom-in';
            img.classList.remove('zoomed');
        }
    });

    // Close button
    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
        zoomed = false;
        img.style.maxWidth = '90%';
        img.style.maxHeight = '90vh';
        img.style.width = '';
        img.style.cursor = 'zoom-in';
        img.classList.remove('zoomed');
        enableScroll();
    });
});
</script>

<script>
    let modal = [document.getElementById("my-modal-1"), document.getElementById("my-modal-2"), document.getElementById(
        "my-modal-3"), document.getElementById("my-modal-4")];
    let image = [document.getElementById("open-btn-1"), document.getElementById("open-btn-2"), document.getElementById(
        "open-btn-3"), document.getElementById("open-btn-4")];
    let button = [document.getElementById("ok-btn-1"), document.getElementById("ok-btn-2"), document.getElementById(
        "ok-btn-3"), document.getElementById("ok-btn-4")]

    for (let i = 0; i < modal.length; i++) {

        image[i].onclick = function () {

            modal[i].style.display = "flex";
            document.body.classList.add('overflow-y-hidden');
            document.body.classList.add('overflow-x-visible');
            // document.documentElement.style.overflowX = 'visible';
            const isMobile = window.innerWidth <= 768;
            document.documentElement.style.overflowX = isMobile ? 'hidden' : 'visible';
            button[i].onclick = function () {
               
                modal[i].style.display = "none";
                image.style.cursor = 'zoom-in';
            }
            window.onclick = function (event) {
                if (event.target == modal[i]) {
                    modal[i].style.display = "none";
                     document.body.classList.remove('overflow-y-hidden');
            document.body.classList.remove('overflow-x-visible');
                }
            }
        }
    }
</script>
  @endsection

