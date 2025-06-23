<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adesh Sapra - Full Stack Developer specializing in Laravel, PHP, MySQL, JavaScript, HTML5, and CSS3">
    <meta name="keywords" content="Adesh Sapra, Web Developer, Full Stack Developer, Laravel, PHP, MySQL, JavaScript">
    <title>Adesh Sapra | Full Stack Developer</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Noise Overlay -->
    {{-- <div class="noise-overlay"></div> --}}

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-content">
            <div class="preloader-text">AS</div>
            <div class="preloader-bar">
                <div class="preloader-progress"></div>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="#home">Adesh<span>Sapra</span></a>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="#home" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#skills" class="nav-link">Skills</a></li>
                    <li class="nav-item"><a href="#projects" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="#education" class="nav-link">Education</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>
            
            <div class="header-actions">
                <a href="{{ asset($about->cv_file) }}" class="btn btn-primary" download>
                   <svg xmlns="http://www.w3.org/2000/svg" 
                        width="24" height="24" viewBox="0 0 26 24" 
                        fill="none" stroke="currentColor" 
                        stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" 
                        aria-hidden="true">
                    <line x1="12" y1="5" x2="12" y2="16" />
                    <polyline points="8 12 12 16 16 12" />
                    <line x1="4" y1="20" x2="20" y2="20" />
                    </svg>
                    
                    Resume
                </a>
                @can('isAdmin')
                    
                <a href="{{ route('logout') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="9" />
                    <line x1="12" y1="7" x2="12" y2="12" />
                    </svg>
                    
                    Logout
                </a>
                @endcan
                

                 <button class="menu-toggle" aria-label="Toggle Menu" aria-expanded="false" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                {{-- <button class="menu-toggle" aria-label="Toggle Menu" aria-expanded="false">
                    <span class="menu-toggle-line top"></span>
                    <span class="menu-toggle-line bottom"></span>
                </button> --}}
            </div>
        </div>
        
        <!-- Mobile Menu (outside container but inside header) -->
        <div class="mobile-menu">
            <div class="mobile-menu-container">
                <ul class="mobile-nav-list">
                    <li class="mobile-nav-item"><a href="#home" class="mobile-nav-link active">Home</a></li>
                    <li class="mobile-nav-item"><a href="#about" class="mobile-nav-link">About</a></li>
                    <li class="mobile-nav-item"><a href="#skills" class="mobile-nav-link">Skills</a></li>
                    <li class="mobile-nav-item"><a href="#projects" class="mobile-nav-link">Projects</a></li>
                    <li class="mobile-nav-item"><a href="#education" class="mobile-nav-link">Education</a></li>
                    <li class="mobile-nav-item"><a href="#contact" class="mobile-nav-link">Contact</a></li>
                </ul>
                <div class="mobile-menu-footer">
                    <div class="mobile-social">
                        <a href="https://github.com/adeshsapra" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                        </a>
                        <a href="https://linkedin.com/in/adesh-sapra-656932340" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                        <a href="mailto:adeshsapra07@gmail.com" aria-label="Email">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        @if (session('success'))
            <div>
                <h1>{{session('success')}}</h1>
            </div> 
        @elseif (session('error'))
            <div>
                <h1>{{session('error')}}</h1>
            </div>            
        @endif

        <!-- Hero Section -->
        <section id="home" class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <div class="hero-subtitle reveal-text">{{ $about->title }}</div>
                        <h1 class="hero-title reveal-text">Adesh <span>Sapra</span></h1>
                        <p class="hero-description reveal-text">Crafting efficient, user-friendly web applications with Laravel, PHP, MySQL, and JavaScript.</p>
                        <div class="hero-actions reveal-fade">
                            <a href="#projects" class="btn btn-primary">View Projects</a>
                            <a href="#contact" class="btn btn-outline">Contact Me</a>
                        </div>
                    </div>
                    <div class="hero-image reveal-fade">
                        <div class="hero-image-container">
                            <div class="hero-image-circle"><img src="{{ asset($about->profile_image) }}" alt="adeshsapra"></div>
                            <div class="hero-status">
                                <span class="status-dot"></span>
                                <span class="status-text">
                                     {{ $about->is_open_to_work ? 'Open to work' : 'Not available for work' }}
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="scroll-indicator">
                    <div class="mouse">
                        <div class="mouse-wheel"></div>
                    </div>
                    <div class="scroll-text">Scroll Down</div>
                </div>
            </div>
            <div class="hero-bg">
                <div class="hero-bg-gradient"></div>
                <div class="hero-bg-circle-1"></div>
                <div class="hero-bg-circle-2"></div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title reveal-text">About Me</h2>
                    <div class="section-line reveal-width"></div>
                </div>
                <div class="about-content">
                    <div class="about-image reveal-fade">
                        <div class="about-image-container">
                            <div class="about-image-circle"><img src="{{ asset($about->profile_image) }}" alt="adeshsapra"></div>
                        </div>
                    </div>
                    <div class="about-text">
                        {{-- Bio --}}
                        <p class="reveal-fade">{{ $about->bio }}</p>

                        {{-- Contact Info --}}
                        <div class="about-info reveal-fade">

                            {{-- Location --}}
                            <div class="about-info-item">
                                <div class="about-info-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </div>
                                <div class="about-info-text">
                                    <h3>Location</h3>
                                    <p>{{ $about->location }}</p>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="about-info-item">
                                <div class="about-info-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </div>
                                <div class="about-info-text">
                                    <h3>Email</h3>
                                    <p><a href="mailto:{{ $about->email }}">{{ $about->email }}</a></p>
                                </div>
                            </div>

                            {{-- Phone --}}
                            <div class="about-info-item">
                                <div class="about-info-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 
                                                19.79 19.79 0 0 1-8.63-3.07 
                                                19.5 19.5 0 0 1-6-6 
                                                19.79 19.79 0 0 1-3.07-8.67
                                                A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 
                                                12.84 12.84 0 0 0 .7 2.81 
                                                2 2 0 0 1-.45 2.11L8.09 9.91
                                                a16 16 0 0 0 6 6l1.27-1.27
                                                a2 2 0 0 1 2.11-.45 
                                                12.84 12.84 0 0 0 2.81.7
                                                A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                </div>
                                <div class="about-info-text">
                                    <h3>Phone</h3>
                                    <p><a href="tel:{{ $about->phone }}">{{ $about->phone }}</a></p>
                                </div>
                            </div>

                        </div>

                        {{-- Resume Download --}}
                        <div class="about-actions reveal-fade">
                            <a href="{{ asset($about->cv_file) }}" class="btn btn-primary" download>Download CV</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="skills section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title reveal-text">My Skills</h2>
                    <div class="section-line reveal-width"></div>
                </div>
                <div class="skills-content">
                    <div class="skills-category">
                        <h3 class="skills-category-title reveal-text">Technical Skills</h3>
                        <div class="skills-grid">
                            <div class="skill-card reveal-fade">
                                <div class="skill-card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                </div>
                                <div class="skill-card-content">
                                    <h4 class="skill-card-title">Front-End</h4>
                                    <div class="skill-card-tags">
                                         @foreach($skills['Front-End'] ?? [] as $skill)
                                             <span>{{ $skill->name }}</span>
                                         @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="skill-card reveal-fade" style="animation-delay: 0.2s;">
                                <div class="skill-card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                                </div>
                                <div class="skill-card-content">
                                    <h4 class="skill-card-title">Back-End</h4>
                                    <div class="skill-card-tags">
                                       @foreach($skills['Back-End'] ?? [] as $skill)
                                        <span>{{ $skill->name }}</span>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="skill-card reveal-fade" style="animation-delay: 0.4s;">
                                <div class="skill-card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                                </div>
                                <div class="skill-card-content">
                                    <h4 class="skill-card-title">Database</h4>
                                    <div class="skill-card-tags">
                                    @foreach($skills['Database'] ?? [] as $skill)
                                        <span>{{ $skill->name }}</span>
                                    @endforeach                                    </div>
                                </div>
                            </div>
                            <div class="skill-card reveal-fade" style="animation-delay: 0.6s;">
                                <div class="skill-card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                                </div>
                                <div class="skill-card-content">
                                    <h4 class="skill-card-title">Tools</h4>
                                    <div class="skill-card-tags">
                                        @foreach($skills['Tools'] ?? [] as $skill)
                                             <span>{{ $skill->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="skills-category">
                        <h3 class="skills-category-title reveal-text">Soft Skills</h3>
                        <div class="soft-skills">
                            @php $i = 0; @endphp
                            @foreach($skills['soft'] ?? [] as $softSkill)
                                @if($softSkill->type === 'soft')
                                    <div class="soft-skill reveal-fade" style="animation-delay: {{ $i * 0.1 }}s;">
                                        {{ $softSkill->name }}
                                    </div>
                                    @php $i++; @endphp
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            <div class="section-bg">
                <div class="section-bg-gradient"></div>
                <div class="section-bg-circle"></div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="projects section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title reveal-text">My Projects</h2>
            <div class="section-line reveal-width"></div>
        </div>
        <div class="projects-grid">
            @foreach($projects as $index => $project)
                <div class="project-card reveal-fade" style="animation-delay: {{ $index * 0.3 }}s;">
                    <div class="project-card-image">
                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }} Project">
                    </div>
                    <div class="project-card-content">
                        <h3 class="project-card-title">{{ $project->title }}</h3>
                        <p class="project-card-description">{{ $project->description }}</p>
                        <div class="project-card-tags">
                        @foreach(explode(',', $project->tech_stack) as $tech)
                                <span>{{ trim($tech) }}</span>
                            @endforeach
                        </div>
                        <div class="project-card-actions">
                            @if($project->github_url)
                                <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61
                                        c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77
                                        5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38
                                        13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07
                                        5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5
                                        3.78c0 5.42 3.3 6.61 6.44 7A3.37
                                        3.37 0 0 0 9 18.13V22">
                                        </path>
                                    </svg>
                                    GitHub
                                </a>
                            @endif
                            @if($project->live_url)
                                <a href="{{ $project->live_url }}" target="_blank" class="btn btn-primary btn-sm">View Project</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


        <!-- Education Section -->
        <section id="education" class="education section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title reveal-text">Education</h2>
                    <div class="section-line reveal-width"></div>
                </div>
                <div class="timeline">
                    @foreach($education as $edu)
                        <div class="timeline-item reveal-fade">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <div class="timeline-date">{{ $edu->year_range }}</div>
                                <h3 class="timeline-title">{{ $edu->degree }}</h3>
                                @if($edu->institution)
                                    <p class="timeline-subtitle">{{ $edu->institution }}</p>
                                @endif
                                @if($edu->percentage)
                                    <p class="timeline-text">{{ $edu->percentage }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="section-bg">
                <div class="section-bg-gradient"></div>
                <div class="section-bg-circle"></div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title reveal-text">Get In Touch</h2>
                    <div class="section-line reveal-width"></div>
                </div>
                <div class="contact-content">
                    <div class="contact-info reveal-fade">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div class="contact-info-text">
                                <h3>Location</h3>
                                <p>{{ $about->location }}</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div class="contact-info-text">
                                <h3>Email</h3>
                                <p><a href="mailto:{{ $about->email }}">{{ $about->email }}</a></p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div class="contact-info-text">
                                <h3>Phone</h3>
                                <p><a href="tel:+919724564357">{{ $about->phone }}</a></p>
                            </div>
                        </div>
                        <div class="contact-social">
                            <a href="https://github.com/adeshsapra" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="contact-social-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                            </a>
                            <a href="https://linkedin.com/in/adesh-sapra-656932340" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="contact-social-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            </a>
                            <a href="mailto:adeshsapra07@gmail.com" aria-label="Email" class="contact-social-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </a>
                        </div>
                    </div>
                    

                    <div class="contact-form reveal-fade">
                        <form action="{{ route('contact') }}" method="POST" class="form">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-input" placeholder=" " required>
                                <label for="name" class="form-label">Your Name</label>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-input" placeholder=" " required>
                                <label for="email" class="form-label">Your Email</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-input" placeholder=" " required>
                                <label for="subject" class="form-label">Subject</label>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-input" rows="5" placeholder=" " required></textarea>
                                <label for="message" class="form-label">Your Message</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <a href="#home">Adesh<span>Sapra</span></a>
                </div>
                <div class="footer-text">
                    <p>Full Stack Developer specializing in Laravel, PHP, MySQL, JavaScript, HTML5, and CSS3</p>
                </div>
                <div class="footer-social">
                    <a href="https://github.com/adeshsapra" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                    </a>
                    <a href="https://linkedin.com/in/adesh-sapra-656932340" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </a>
                    <a href="mailto:adeshsapra07@gmail.com" aria-label="Email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <span id="current-year"></span> Adesh Sapra. All rights reserved.</p>
                <p>Made with <span class="heart">❤</span> by Adesh Sapra</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    {{-- <button class="back-to-top" aria-label="Back to Top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M18 15l-6-6-6 6"/></svg>
    </button> --}}

    <a href="#home" class="back-to-top" aria-label="Back to Top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
    </a>

    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        // Set current year in footer
        document.getElementById('current-year').textContent = new Date().getFullYear();
    </script> 
</body>
</html>