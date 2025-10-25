@extends('layouts.web')
@section('title', 'Assignment Master Qatar Samples – See Our Work Quality')
@section('description', 'Explore free samples from Assignment Master Qatar to review our academic writing quality, style, and expertise before placing your next assignment order today.')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<style>

.sample-bg {
/*background: linear-gradient(#e04c60, #3e1420);*/
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
<section class="container mx-auto py-10">
    <h1 class="text-black text-2xl md:text-3xl text-center font-font">Get a Glimpse of Our Papers
            </h1>

       <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center gap-8 lg:p-4 mt-10 ">
            <!-- Grid Col 1 -->
            <div>
                <div class="relative ">
                    <div class="samples absolute bg-black inset-0 rounded-2xl pb-4">
                    </div>
                    <div class="w-72 h-96 samples-front ml-10 rotate-12  rounded-2xl">
                        <p class="text-base text-center font-semibold pt-10">Assignment</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Development Plan

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Management
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
                            <a href="{{ asset('samples/Assignment-1.docx') }}"
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
                        <p class="text-base text-center font-semibold pt-10">Assignment</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Design Innovation

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Management
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
                                <p class="text-sm  font-normal ">22
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
                            <a href="{{ asset('samples/Assignment-2.docx') }}"
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
                        <p class="text-base text-center font-semibold pt-10">Assignment</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Analysis of Politics

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Political Science
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
                                <p class="text-sm  font-normal ">9
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
                            <a href="{{ asset('samples/Assignment-3.docx') }}"
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
        
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center gap-8 lg:p-4 mt-10 ">
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
        
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center gap-8 lg:p-4 mt-10">
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
        
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center gap-8 lg:p-4 mt-10 ">
            <!-- Grid Col 1 -->
            <div>
                <div class="relative ">
                    <div class="samples absolute bg-black inset-0 rounded-2xl pb-4">
                    </div>
                    <div class="w-72 h-96 samples-front ml-10 rotate-12  rounded-2xl">
                        <p class="text-base text-center font-semibold pt-10">Proposal</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Employee Productivity

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">HR Management
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
                                <p class="text-sm  font-normal ">15
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
                            <a href="{{ asset('samples/Proposal-1.docx') }}"
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
                        <p class="text-base text-center font-semibold pt-10">Proposal</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Cash Holding Impact

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Corporate Finance
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
                                <p class="text-sm  font-normal ">15
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
                            <a href="{{ asset('samples/Proposal-2.docx') }}"
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
                        <p class="text-base text-center font-semibold pt-10">Proposal</p>
                        <div class="grid grid-cols-2 p-4 mt-4">
                            <!-- First 2 grid Of Title -->
                            <div>
                                <p class="text-sm  font-normal ">Title:</p>
                                <hr class="mt-2">
                            </div>
                            <div>
                                <p class="text-sm  font-normal ">Digital Transformation

                                </p>
                                <hr class="mt-2">
                            </div>
                            <!-- Second 2 grid of Discipline -->
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">Discipline:</p>
                                <hr class="mt-2">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm  font-normal ">FinTech & Banking
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
                                <p class="text-sm  font-normal ">16
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
                            <a href="{{ asset('samples/Proposal-3.docx') }}"
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
  </section>      
 <section class="sample-bg px-4 md:px-16 lg:px-24 py-5 mt-5" >

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

</section>
        
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