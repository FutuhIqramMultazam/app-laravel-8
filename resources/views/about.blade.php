@extends('layout.main')

@section('title',"About Me")

@section('content')
<!-- About Me Section -->
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="{{ asset('assets/img/foto.jpg') }}" class="rounded-4 img-fluid" alt="My Photo">
        </div>
        <div class="col-md-8">
            <h1 class="mb-4">About Me</h1>
            <p>Hello! I'm {{ $name }}, a passionate web developer with expertise in front-end and back-end technologies. I enjoy creating interactive and responsive websites that provide an excellent user experience.</p>
            <p>In addition to my web development skills, I am interested in learning new programming languages and tools to expand my knowledge. I'm always excited to work on new projects and collaborate with others in the tech industry.</p>
            <p>When I'm not coding, I love spending time outdoors, reading books on psychology, and exploring new places. Feel free to reach out if you'd like to connect or discuss potential collaborations!</p>
            <p>And do you know what time is it?, this is time <span class="text-success p-1 rounded-2"> {{date('D-d-M-Y H:i:s') }}</span> </p>
            <p>My sosial media : 
                    <a href=""><i class="fa-brands fa-instagram"></i> Futuh</a> 
                    <a href=""><i class="fa-brands fa-facebook"></i> FutuhIcam</a>
                    <a href=""><i class="fa-solid fa-at"></i> icam@gmail.com</a>
                    <a href=""><i class="fa-brands fa-whatsapp"></i> 0822939451</a>
            </p>
            <a href="#" class="btn btn-primary">Download Resume</a>
        </div> 
    </div>
@endsection