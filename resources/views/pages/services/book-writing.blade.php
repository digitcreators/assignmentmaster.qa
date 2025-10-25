@extends('layouts.web')
@section('title',  "Professional Book Writing Service in Qatar for Every Genre")
@section('description',"Looking for an easy and supportive book writing service in Qatar? We will help you craft your dream book that will spark the interest of your target readers.")
@section('keywords',  'Book Writing Service in Qatar')
@section('canonical', config('app.app_url') . Request::path())



@section('content')

<style>
    section.main-banner .banner-image {
    height: 604px !important;
    }
</style>
{{-- Header --}}
<section class="main-banner bg-grey text-white py-8">
        <img src="{{ asset('imgs/hero-banner.webp')}}" class="img-fluid banner-image" alt="Book Writing Service" title="Book Writing Service" width="1585" height="646" loading="eager">
    <div class="lg-px-5 px-5 py-lg-0 py-5 container mx-auto flex flex-col lg:flex-row md:flex-row items-center">
      <!-- Left Column -->
      <div class="">
        <h1 class="text-4xl font-bold pb-4 text-black span-header">Creative Book Writing Service in Qatar that Makes You Unforgettable</h1>
        <p class="pt-6 text-black">
        Assignmentmaster.qa offers a trusted book writing service in Qatar with 200+ expert writers and 15+ years of experience. Having delivered    over 30,000 books, we specialize in turning your ideas into engaging, compelling stories. Our simple, supportive process ensures every book resonates with readers while reflecting your true vision.
        </p>

        <div class=" flex flex-col sm:flex-row items-center sm:space-x-4 mt-10">
            <a class="fancy" href="{{route('order')}}">
            <span class="top-key"></span>
            <span class="text">Hire Book Writers in Qatar!</span>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
            </a>
            <a href="javascript:void(Tawk_API.toggle())" class="btn-pri lg:mt-0 mt-5">
                Chat Now
            </a>
        </div>
      </div>
      
      <!-- Right Column -->
      <!--@include('partials.frontend.calculator') -->

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
       Perks You Will Enjoy When You Choose Our Book Writing Company in Qatar
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
            We have genuine book writers in Qatar working on our platform who never copy and paste content, ensuring you receive original work that is not plagiarized or written by AI.
        </p>
      </div>

      <!-- Box 2 -->
      <div class="card-sec p-8 text-center">
        <div class="icon-circle">
          <i class="fas fa-sync-alt"></i>
        </div>
        <h3 class="mt-5 font-bold text-xl">Multiple Free Edits</h3>
        <p class="mt-3 text-gray-100 text-sm leading-relaxed">
            If you believe there is room for improvement in your work, our book writing experts in Qatar will cater to it on the spot without charging you any extra money.
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
      Book Writers In Qatar Who Will Never <br> Let Your Grades Fall
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
              <img src="{{asset('imgs/laiba.webp')}}" alt="Laiba" title="Laiba" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Laiba</h4>
                <p class="text-sm text-gray-500">Book Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Laiba has 14 years of book-writing experience working on our platform. She has written 13,786 fiction
                  and children's books and has received 12,120 favorable reviews from clients around the world. Laiba's
                  talent is developing enthralling stories that keep readers hooked till the end.
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
              <img src="{{asset('imgs/asad.webp')}}" alt="Asad" title="Asad" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Asad</h4>
                <p class="text-sm text-gray-500">Book Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  With an amazing track record of 10,765 books and 9,943 positive reviews, Asad offers more than 11
                  years of book-writing expertise. Motivational books and self-help guides are his specialty. Asad is
                  well known for his professionalism and storytelling flair that influences the target readers.
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
              <img src="{{asset('imgs/umaima.webp')}}" alt="Umaima" title="Umaima" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Umaima</h4>
                <p class="text-sm text-gray-500">Book Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Umaima has been working as a professional book writer with us for over 9 years. She has written 8,765
                  business publications, autobiographies, and biographies. Her clients praise her for her
                  reader-centered approach and creativity, and have given her 7,345 wonderful reviews.
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
              <img src="{{asset('imgs/rehman.webp')}}" alt="Rehman" title="Rehman" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Rehman </h4>
                <p class="text-sm text-gray-500">Book Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Rehman has been writing for more than 12 years and has written over 11,880 books covering the sci-fi
                  genre and educational topics. With 10,432 outstanding reviews, he is admired by clients for his
                  research ability and unique writing style that captures the author’s tone.
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
          <p>Fill in the order form and share with us your book writing details and instructions.</p>
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
          <p>Receive your completed book writing before the deadline and let us know if you need revisions.</p>
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
          Top-Rated Book Writing Help in Qatar for Every Aspiring Author 
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            At Assignment Master Qatar, we provide expert Book Writing Help in Qatar to transform your ideas and concepts into captivating books that readers will love. Whether you are working on a business book, fiction novel, or self-help guide, our skilled writers create content that sparks interest and resonates with your target audience. Every project is built from scratch to highlight your unique ideas and ensure originality. From brainstorming and outlining to formatting, proofreading, and editing, we guide you through every step of the process, delivering books that are both informative and enjoyable.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Our creative writers produce bespoke content that matches your tone and style. They will adopt your writing style to align it with your vision and goals. If you want a conversational tone, a formal one, or a special format or design, just tell us what you need, and we will do it accordingly. You will have full creative control over your project, and we will ensure regular updates and smooth communication to make things even better. In the end, you will get your book refined to perfection and ready for publishing. In addition to that, our proficient writers can also be contacted for a range of valuable services, such as <a href="{{route('ghost-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">ghost writing</a> and <a href="{{route('academic-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">academic writing</a>.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Doha's Book Writing Experts for Inspiring and Global-Quality Books 
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Do you have great ideas but are unsure of how to put them on paper? No problem at all! Assignment Master has a pool of talented writers who will present your story in the most compelling way. Our book writers in Qatar have been hired through a rigorous hiring process. Each one is selected based on their skills, experience, and creativity, so we assure you that they will do your work with utmost perfection. If you have any rough concept, just share it with us, and we will turn it into an amazing book that appeals to readers right away.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Furthermore, we cover all kinds of writing, whether you need help with <a href="{{route('thesis-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">thesis writing</a>, <a href="{{route('dissertation-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">dissertation writing</a>, or any other task. Our writers do not take shortcuts or copy and paste content. Every work is done from scratch using fresh ideas, making it 100% unique and personalised. You don’t have to be a professional writer. We have you covered for everything from proofreading and editing to formatting and online consultations, as well as plagiarism checks. Whether you want to create a fiction novel, personal narrative, or educational book, we tailor the material to match your personal style. 
          </p>
        </div>
      </div>

    </div>

    <!-- Second Row -->
    <div class="four-border-sec grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
      
      <!-- Left -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Affordable Book Writing Agency in Qatar at Local Rates You Can Trust
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            A well-written book doesnt have to come with a hefty price tag. This is why we have professional writers and pocket-friendly pricing. Our cost-effective book writing firm in Doha is designed for those who want quality writing within their budget. Our skilled writers will help you craft well-organized and excellent content.  They work in close cooperation with you and take care of everything from choosing the title to structuring chapters. Our writers will convert your notes and random ideas into a professionally written book. They mould the content according to your preferences and objectives.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            We handle every aspect carefully, and you will not find any trace of plagiarism or AI in your work. Our real writers do not use AI tools or copy content from other sources. So if you are looking for a book writer, stop your search and get in touch with us now. You will receive polished writing, quick turnaround, and smooth communication throughout. With us, cheap doesn’t mean low in standard, and we will prove that to you with our services. We have supported thousands of people over the years who do not have time to share their story with the world.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Leading Book Writing Firm in Qatar Delivering Excellence
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Every excellent book starts with a thought. You want to create a gripping novel, a corporate publication, or a guide to motivate others, but the idea of writing all of it down can be too much. That's what AssignmentMaster is here for. We turn your thoughts into a well-crafted book that would surely hook the readers. Our team of experienced writers can work on every genre and can help you write powerful words that engage readers. We pay close attention and understand the client’s vision to fulfill all of their requirements.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Moreover, our team will guide you through every phase of the process. As an Expert Book Writing Firm in Qatar, we value open communication and welcome your feedback at every stage to ensure you remain part of the journey. Our professional writers produce books that capture attention and create a lasting impact through thorough research and dedication. Whether you are based in Al Khor, Doha, or Al Wakrah, our online services are easily accessible with just a few clicks. We believe every story deserves to be told, and with our expertise, your ideas can be transformed into a published work that inspires readers worldwide.
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
                            <img src="{{asset('imgs/jamal.webp')}}" class="img-fluid" width="100" height="100" alt="Jamal" title="Jamal">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Jamal </strong>
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
                        “I wanted to write my autobiography, but was too swamped with where to start. The team was absolutely remarkable throughout the process. Their meticulousness and the way they kept me engaged at every step were most pleasing to me. Great job!”</p>
                </div>
            </div>
        </div><div class="swiper-slide px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="4">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/areej.webp')}}" class="img-fluid" width="100" height="100" alt="Areej" title="Areej">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Areej </strong>
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
                       “I had always wished to create a fiction book. Luckily, I came across this book writing assistance in Qatar. The writer totally grasped my concept. They wrote a thrilling plot, with amazing characters, and recommended illustrations that flawlessly enhanced it. The readers absolutely loved it. It has been such a fulfilling experience.”
                    </p>
                </div>
            </div>
        </div><div class="swiper-slide swiper-slide-prev px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="5">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/huda.webp')}}" class="img-fluid" width="100" height="100" alt="Huda" title="Huda">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Huda</strong>
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
                       “The cooperation was seamless. I felt like my ideas were respected at every stage while I was expertly mentored to refine the narrative. This crew would really breathe life into your idea if you are someone who wants to write but is unsure where to start.” 
                    </p>
                </div>
            </div>
        </div><div class="swiper-slide swiper-slide-active px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="0">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/kareem-2.webp')}}" class="img-fluid" width="110" height="110" alt="Kareem" title="Kareem">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Kareem </strong>
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
                        “This service has really provided me with work, which was inspiring and original. Readers have complimented my book, and I am already thinking of another collaboration. Thanks a lot!”
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
              <h4 class="text-lg md:font-semibold">Do I keep full rights to the book after it’s written?</h4>
            </div>
            <div class="icons text-right w-1/4">
              <i class="fa fa-minus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide0" style="display: block;">
            Yes, once it is delivered and approved, you have full ownership of the book.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="content faq-internal-styling" data-no="1">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="1">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">2-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Will my book be completely original?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide1" style="display: none;">
            Yes, our book writing services in Doha are guaranteed to be original and plagiarism-free. Our platform features real writers who craft content from scratch. They do not use AI tools or plagiarize from other sources. Additionally, the work is checked after completion using reliable tools, such as Turnitin, to ensure originality.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="content faq-internal-styling" data-no="2">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="2">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">3-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you help with editing and proofreading as well?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide2" style="display: none;">
            Yes, we help with editing and proofreading services to ensure flawlessness and readability. 
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="content faq-internal-styling" data-no="3">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="3">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">4-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can you write in my preferred style or tone?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide3" style="display: none;">
            Yes, we can write in your preferred style and tone so that it reflects your personality and seems like it was written by you only. Our writers will adapt the style you want, whether it is professional, casual, formal, or any other style, to showcase your ideas in the way you want.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">5-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How long does it take to complete a book?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Well, it depends on the length and complexity of the book. However, our writers are fast-paced and always deliver in the specified timeframe without sacrificing the quality of work. If you need it early, we also accommodate urgent requests.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">6-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you also help with book publishing?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, we also help with publishing so that your book reaches the right audience. Our writers will guide you every step of the way, from formatting and editing to preparing your manuscript.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">7-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Is your Qatar's Book Writing service confidential?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, we have a stringent privacy policy that ensures that your personal information and project details are kept confidential and never shared with any third party.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">8-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can you write in both English and Arabic?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            No, we have skilled writers who can write books in English only.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">9-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How much does your book writing cost?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Well, it depends on the type of project, length, and complexity. However, we offer student-friendly packages to fit your budget and needs.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">10-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What genres do you cover?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Our book writing agency in Doha covers a wide range of genres such as self-help, fiction, children's books, academic tasks, business publications, and more.
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
      <h3 class="text-2xl font-bold mb-5">⚡ Professionally Crafted Books That Inspire the Readers  </h3>
      <p class="text-base text-gray-100">
        Choose our expert eBook writing services today because we always deliver meaningful and reader-focused books at the most affordable rates. Contact us now to start your publishing journey!
      </p>
      <div class="flex flex-col sm:flex-row items-center gap-4 pb-4 mt-10">
        <a href="{{route('order')}}" class="cta-btn">Place an Order</a>
        <a href="{{route('price')}}" class="cta-btn">Check Pricing Plan</a>
      </div>
    </div>

    <!-- Right Side (Image) -->
    <div class=" flex justify-center lg:justify-end">
      <img src="{{ asset('imgs/cta-img.webp')}}" alt="Sign Up Now" class="hidden md:block" width="555px" height="370px" />
    </div>

  </div>
</section>

<!-- FAQ -->



@endsection


