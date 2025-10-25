@extends('layouts.web')
@section('title',  "Write My Essay in Qatar - High-Quality Assistance")
@section('description',"Turn your academic worries into flawless writing with our trusted Write My Essay in Qatar service. Get expert help in all subjects to boost your grades.")
@section('keywords',  'Write My Essay in Qatar')
@section('canonical', config('app.app_url') . Request::path())



@section('content')

{{-- Header --}}
<section class="main-banner bg-grey text-white py-8">
      <img src="{{ asset('imgs/hero-banner.webp')}}" class="img-fluid banner-image" alt="Write My Essay in Qatar" title="Write My Essay in Qatar" width="1585" height="646" loading="eager">
    <div class="lg-px-5 px-5 py-lg-0 py-5 container mx-auto flex flex-col lg:flex-row md:flex-row items-center">
      <!-- Left Column -->
      <div class="">
        <h1 class="text-4xl font-bold pb-4 text-black span-header">Write My Essay in Qatar and Let Learning Feel Lighter</h1>
        <p class="pt-6 text-black">
        At Assignmentmaster.qa, we transform challenging essay topics into crisp, well-structured, and impactful work. With over 15 years of expertise, we provide trusted essay writing help in Qatar, backed by 200+ skilled academic writers who have delivered more than 150,000 papers for students worldwide.
        </p>

        <div class=" flex flex-col sm:flex-row items-center sm:space-x-4 mt-10">
            <a class="fancy" href="{{route('order')}}">
            <span class="top-key"></span>
            <span class="text">Hire Qualified Essay Writers!</span>
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
      Perks You Will Enjoy When You Choose Essay Writing Services in Qatar
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
        We have genuine essay writers working on our platform who never copy and paste content, ensuring you receive original work that is not plagiarized or written by AI.
        </p>
      </div>

      <!-- Box 2 -->
      <div class="card-sec p-8 text-center">
        <div class="icon-circle">
          <i class="fas fa-sync-alt"></i>
        </div>
        <h3 class="mt-5 font-bold text-xl">Multiple Free Edits</h3>
        <p class="mt-3 text-gray-100 text-sm leading-relaxed">
            If you believe there is room for improvement in your paper, our essay writers in Qatar will cater to it on the spot without charging you any extra money.
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
      Essay Writers in Qatar Who Will Never <br> Let Your Grades Fall
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
              <img src="{{asset('imgs/kareem.webp')}}" alt="Kareem" title="Kareem" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Kareem</h4>
                <p class="text-sm text-gray-500">Essay Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Kareem holds an MBA and has been assisting students with essay writing for over 9 years on our
                  platform. He has completed 8,320 projects and received 7,050 stellar reviews from clients all over the
                  world. Kareem knows the particular difficulties business students face and makes sure every piece of
                  writing is insightful and original. He aims to provide students with work that helps them improve
                  their comprehension, which in turn would help them in their future tasks.
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
              <img src="{{asset('imgs/rabia.webp')}}" alt="Rabia" title="Rabia" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Rabia</h4>
                <p class="text-sm text-gray-500">Essay Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Rabia brings more than 12 years of writing expertise and has a PhD in Education. She has worked on
                  11,345 essays and has garnered 10,770 favorable reviews from happy customers.. She has the ability to
                  simplify difficult concepts into clear, easy-to-understand, and structured writing. Students admire
                  her work and always return to her when they feel stuck on tricky topics.
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
              <img src="{{asset('imgs/bilal.webp')}}" alt="Bilal" title="Bilal" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Bilal</h4>
                <p class="text-sm text-gray-500">Essay Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Bilal, who holds a Master's degree in Computer Science, has been helping students navigate the
                  complexities of essay writing for over 10 years. His systematic approach has helped him complete 9,435
                  tasks successfully and get 8,120 glowing reviews. Bilal guarantees that his work meets academic
                  requirements by being well-organized, thoroughly researched, and well-aligned.
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
              <img src="{{asset('imgs/zainab2.webp')}}" alt="Zainab" title="Zainab" class=" object-cover">
              <div class="text-center md:text-left">
                <h4 class="text-xl font-semibold">Zainab </h4>
                <p class="text-sm text-gray-500">Essay Writer</p>
                <div class="flex text-yellow-400 justify-center md:justify-start my-2">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i><i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 text-sm mb-4 mt-5">
                  Zainab holds a Master's degree in Law and has 13 years of experience in academic writing, working with
                  us. She has produced 12,765 amazing essays and has gotten 11,200 favorable reviews from students. She
                  is exceptionally proficient in narrative, argumentative, and descriptive essays and helps students
                  score the highest grades.
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
          <p>Fill in the order form and share with us your essay details and instructions.</p>
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
          <p>Receive your completed essay before the deadline and let us know if you need revisions.</p>
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
          Brighten Your Future with Our Smart Essay Help Website in Qatar 
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Our online essay writing services in Qatar are designed to help students become proficient in writing their essays. Our talented writers will assist with various types of essays, such as narrative essays, descriptive essays, argumentative essays, and more. They make sure the content is original, clear, and academically sound. We have a straightforward online ordering process, and our team is available 24/7 via live chat so you can approach them at any time of the day. Based on academic requirements, we ensure that our essays are plagiarism-free, well-organized, and provide solid arguments.  
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Moreover, if you are confused about the topic, worry not. We will guide you on that and help you choose a topic that is interesting and suitable for your academic needs. All you have to do is share your essay details on our website, and the rest will be handled by our professional essay writers, who will work diligently until the end to provide you with a refined essay. Students facing tight deadlines can rely on our essay writers in Doha to achieve their desired grades. Additionally, our online services include, but are not limited to, <a href="{{route('thesis-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">thesis writing</a> and <a href="{{route('proposal-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">proposal writing</a>.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Expert Essay Writers in Qatar Dedicated to Producing Creative and Well-Organized Essays
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            At Assignment Master Qatar, our professional essay writers have extensive experience in supporting students of all academic levels, whether you are in high school, college, undergraduate, or postgraduate studies. They are well-qualified with strong academic backgrounds from leading institutions with Master's and PhDs in a wide range of fields. It doesn't matter how difficult the topic is; they make sure your essay is written to meet the highest academic standards.
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            What sets our essay writers in Qatar apart is the dedication and effort they put into every paper. Each essay is crafted by an expert in their field, ensuring it matches your criteria. Our writers take time to understand your requirements, conduct thorough research, brainstorm ideas, create outlines and then begin writing. Every stage of the process from drafting to the final revision is handled with care. We proofread for grammar, tone, punctuation, structure and spelling to deliver the highest quality work. To ensure originality, our writers also check every essay with trusted plagiarism detection tools such as Turnitin.
          </p>
        </div>
      </div>

    </div>

    <!-- Second Row -->
    <div class="four-border-sec grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
      
      <!-- Left -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Get High-Quality Writing Solutions from Our Proven Essay Writing Help in Qatar
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Facing problems in writing a perfect essay? This is what Assignment Master is here for. Our expert writers will craft customized essays tailored to your academic needs, written in a clear and well-structured manner. Whether it is a reflective, expository, or analytical essay, our writers have strong vocabulary, write with a clear structure, excellent grammar, and coherence in their essays. Our team consists of qualified professionals who specialize in various academic domains and can tackle even the trickiest topics very easily. By choosing us, you receive work that is properly researched and written flawlessly. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Furthermore, we handle everything from research, topic selection, brainstorming, to editing. Review your essay after it is done, share your feedback, and request unlimited edits if you feel there is room for improvement. Besides, we recognize the value of time, so we deliver your essays promptly. You can take a breather, knowing your essay is in good hands. In addition to that, students have been coming to us for many other academic services such as <a href="{{route('dissertation-writing')}}" class="btn-shine" target="_blank" bis_skin_checked="1">dissertation writing</a>, <a href="{{route('college-assignment')}}" class="btn-shine" target="_blank" bis_skin_checked="1">college assignments</a>, and much more. So, choose our top essay writing service provider in Qatar today and let us help you walk the path to academic success.
          </p>
        </div>
      </div>

      <!-- Right -->
      <div class="content">
        <h2 class="fw-bold text-2xl md:text-3xl font-bold leading-snug">
          Cheap Essay Help in Doha with an Academic Fair That Maximizes Your Grades
        </h2>
        <div class="py-4 px-3">
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            AssignmentMaster is ideal for students seeking top-notch essays without straining their wallets. We know students face financial problems and academic pressure, so we guarantee the best quality essays at economical prices. In addition, we offer a wide range of affordable services such as proofreading, editing, formatting, plagiarism checks, and online consultations. Your essays will have no sign of plagiarism nor be delivered late, and they will always follow the specifications and academic guidelines. 
          </p>
          <p class="fs-6 py-2 text-base leading-relaxed text-gray-700">
            Moreover, every essay is thoroughly researched and well-structured to meet your specific needs, thanks to our experienced team of writers. We offer high-quality essay writing assistance at a reasonable cost, regardless of the subject. Our essay writers in Qatar cover all academic disciplines such as English, Computer Science, Economics, Law, Business, and any other. We guarantee that the essays we provide are authentic and free from plagiarism. Other than that, we get orders from students across all states of Qatar, including Al Khor, Al Rayyan, and Doha. Writing essays may become a burden if you do not have a passion for reading or lack good writing skills. So, choose us if you want to let go of all your academic and budget worries. 
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
                        <p class="text-base text-center font-semibold pt-10">Essay</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Sartre’s Atheistic

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Philosophy
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Third 2 grid of Academic -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Academic Level:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Undergraduate
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fourth 2 grid of Pages -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Pages:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">7
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
                            <a href="{{ asset('samples/Essay-1.docx') }}"
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
                        <p class="text-base text-center font-semibold pt-10">Essay</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Health Psychology

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Health Psychology
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Third 2 grid of Academic -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Academic Level:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Undergraduate
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fourth 2 grid of Pages -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Pages:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">8
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
                            <a href="{{ asset('samples/Essay-2.docx') }}"
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
                        <p class="text-base text-center font-semibold pt-10">Essay</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">About Death Penalty

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Human Rights
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Third 2 grid of Academic -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Academic Level:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Undergraduate
                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Fourth 2 grid of Pages -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Pages:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">10
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
                            <a href="{{ asset('samples/Essay-3.docx') }}"
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
                            <img src="{{asset('imgs/zain.webp')}}" class="img-fluid" width="100" height="100" alt="Zain" title="Zain">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Zain </strong>
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
                    "I had no clue how to start working on my essay. However, the writer appointed to my task made sure that it was concise, well-organized, and precisely followed the requirements. The team was quite professional and made the whole process smooth.”
                </div>
            </div>
        </div><div class="swiper-slide px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="4">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/sara.webp')}}" class="img-fluid" width="100" height="100" alt="Sara" title="Sara">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Sara </strong>
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
                        “They transformed my ideas into a thought-provoking essay. It felt like I had written it by myself, and the writing was flawless with no mistakes at all. I have recommended this service to my friends as well.”
                    </p>
                </div>
            </div>
        </div><div class="swiper-slide swiper-slide-prev px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="5">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/abdullah-2.webp')}}" class="img-fluid" width="100" height="100" alt="Abdullah" title="Abdullah">
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
                        “I was concerned about plagiarism and quality issues while hiring them. Luckily, they proved themselves with an original and on-point essay without any delays. I was able to submit high-quality work on time.”
                    </p>
                </div>
            </div>
        </div><div class="swiper-slide swiper-slide-active px-3" bis_skin_checked="1" style="width: 650px; margin-right: 20px;" data-swiper-slide-index="0">
            <div class="grid grid-cols-1 testimonial-box" bis_skin_checked="1">
                <div class="box-top" bis_skin_checked="1">
                    <div class="profile" bis_skin_checked="1">
                        <!--img---->
                        <div class="profile-img" bis_skin_checked="1">
                            <img src="{{asset('imgs/natasha.webp')}}" class="img-fluid" width="100" height="100" alt="Natasha" title="Natasha">
                        </div>
                        <div class="name-user" bis_skin_checked="1">
                            <strong>Natasha </strong>
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
                        “The creativity and dedication they put into my essay were just remarkable. I feel choosing them was a good decision, and I will definitely come to them again for getting more tasks done.” 
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
              <h4 class="text-lg md:font-semibold">Is it legal to use your Qatari essay writing service?</h4>
            </div>
            <div class="icons text-right w-1/4">
              <i class="fa fa-minus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide0" style="display: block;">
            Yes, using our Qatari essay writing service is legal, and thousands of students utilize our services to obtain professional assistance with their essays when they lack the time or skills.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="content faq-internal-styling" data-no="1">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="1">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">2-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can I chat with my essay writer directly?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide1" style="display: none;">
            Yes, you can communicate directly with your writer if you want to track the progress of your essay, share feedback, engage in discussions, or request changes if needed. Our team is available round the clock via chat, so feel free to reach out at any time of the day.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="content faq-internal-styling" data-no="2">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="2">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">3-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What is the turnaround time for essay writing?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide2" style="display: none;">
            It depends on factors such as the word count and the deadline of your essay. However, we can deliver essays on short deadlines since our writers are fast-paced and they always deliver on time. So, you don't have to worry about the deadlines.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="content faq-internal-styling" data-no="3">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="3">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">4-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Do you provide 24-hour essay writing services?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide3" style="display: none;">
                Yes, we offer 24-hour essay writing services. So feel free to reach out to us at any time of the day or night. Our friendly and responsive customer support is always available to guide you.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">5-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How do you ensure that the essay is free from plagiarism?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Our essay writing assistance in Qatar is guaranteed to be 100% original and free from plagiarism. Our platform features real writers who craft content from scratch. They do not use AI tools or plagiarize from other sources. Additionally, each essay is checked using reliable tools, such as Turnitin, to ensure originality.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">6-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">How much does it cost to write my essay for me?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            It depends on several factors, including word count, complexity, academic level, and the deadline for the essay. However, we offer a fair and transparent pricing structure, allowing students to benefit from our academic writing services. There are no hidden charges that will come as a surprise to you.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">7-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Is your Qatari Book Writing service confidential?</h4>
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
              <h4 class="text-lg md:font-semibold">What types of essays and subjects do you cover?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            We provide high-quality essay help in Qatar for all academic levels and university subjects. Our academic writers are well-versed in a wide range of subjects and topics, enabling them to assist with any type of essay, whether you belong to business, IT, law, engineering, humanities, or any other field.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">9-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can I request revisions if the essay does not meet my requirements?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, we can revise and edit your essay if it does not meet your requirements at no additional charge until you're satisfied with your work. Your satisfaction is our top priority.
          </div>
        </div>

        <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">10-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">What payment methods do you accept for essay writing services?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            We ensure transactions through safe payment methods such as debit and credit cards.
          </div>
        </div>

       <div class="content faq-internal-styling" data-no="4">
          <div class="questions cursor-pointer flex p-3 font-bold mb-1" data-no="4">
            <div class="ml-2 mr-8">
              <p class="text-lg font-bold">11-</p>
            </div>
            <div class="heading w-3/4">
              <h4 class="text-lg md:font-semibold">Can I use ChatGPT to write an essay?</h4>
            </div>
            <div class="icons w-1/4 text-right">
              <i class="fa fa-plus-square text-2xl"></i>
            </div>
          </div>
          <div class="openSlide text-base pb-3 px-4 ml-14" id="openSlide4" style="display: none;">
            Yes, you can use ChatGPT to write an essay, but you have to make sure you don't submit AI-generated work. Use it to gain guidance, but make sure the final draft reflects your own ideas and thoughts.
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
       <h3>⚡ Professionally Crafted Books That Inspire the Readers  </h3>
      <p>
        Choose our expert eBook writing services today because we always deliver meaningful and reader-focused books at the most affordable rates. Contact us now to start your publishing journey!
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


