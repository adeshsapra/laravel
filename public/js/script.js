// Wait for DOM to load
document.addEventListener("DOMContentLoaded", () => {
  // Mobile Menu Toggle
  const hamburger = document.querySelector(".hamburger")
  const navLinks = document.querySelector(".nav-links")

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active")
    navLinks.classList.toggle("active")
  })

  // Close mobile menu when clicking a link
  document.querySelectorAll(".nav-links a").forEach((link) => {
    link.addEventListener("click", () => {
      hamburger.classList.remove("active")
      navLinks.classList.remove("active")
    })
  })

  // Sticky Header
  const header = document.querySelector("header")
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      header.classList.add("scrolled")
    } else {
      header.classList.remove("scrolled")
    }
  })

  // Typing Animation
  const typedTextSpan = document.querySelector(".typed-text")
  const cursorSpan = document.querySelector(".cursor")

  const textArray = ["Full Stack Developer", "Laravel Enthusiast", "Backend Coder", "Tech Explorer"]
  const typingDelay = 100
  const erasingDelay = 50
  const newTextDelay = 2000
  let textArrayIndex = 0
  let charIndex = 0

  function type() {
    if (charIndex < textArray[textArrayIndex].length) {
      if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing")
      typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex)
      charIndex++
      setTimeout(type, typingDelay)
    } else {
      cursorSpan.classList.remove("typing")
      setTimeout(erase, newTextDelay)
    }
  }

  function erase() {
    if (charIndex > 0) {
      if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing")
      typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1)
      charIndex--
      setTimeout(erase, erasingDelay)
    } else {
      cursorSpan.classList.remove("typing")
      textArrayIndex++
      if (textArrayIndex >= textArray.length) textArrayIndex = 0
      setTimeout(type, typingDelay + 1100)
    }
  }

  if (textArray.length) setTimeout(type, newTextDelay + 250)

  // Active Navigation Link
  const sections = document.querySelectorAll("section")
  const navLinksElements = document.querySelectorAll(".nav-links a")

  window.addEventListener("scroll", () => {
    let current = ""
    sections.forEach((section) => {
      const sectionTop = section.offsetTop
      const sectionHeight = section.clientHeight
      if (pageYOffset >= sectionTop - sectionHeight / 3) {
        current = section.getAttribute("id")
      }
    })

    navLinksElements.forEach((link) => {
      link.classList.remove("active")
      if (link.getAttribute("href") === `#${current}`) {
        link.classList.add("active")
      }
    })
  })

  // Project Modal
  const modal = document.getElementById("project-modal")
  const modalBody = modal.querySelector(".modal-body")
  const closeModal = modal.querySelector(".close-modal")
  const detailButtons = document.querySelectorAll(".details-btn")

  detailButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const project = button.getAttribute("data-project")

      // Project details content
      let modalContent = ""

      if (project === "jobhirence") {
        modalContent = `
          <h2>JobHirence - Online Job Portal</h2>
          <div class="modal-img">
            <img src="assets/jobhirence.jpg" alt="JobHirence Project" onerror="this.src='https://via.placeholder.com/800x400?text=JobHirence+Details'">
          </div>
          <div class="modal-details">
            <h3>Project Overview</h3>
            <p>Developed a comprehensive recruitment platform using PHP, Laravel, and MySQL for seamless management of job postings, candidate profiles, applications, and messaging.</p>
            
            <h3>Key Features</h3>
            <ul>
              <li>User roles for job seekers, employers, and recruiters</li>
              <li>Job posting and application management</li>
              <li>Secure messaging system between candidates and employers</li>
              <li>Resume uploads and profile management</li>
              <li>Password recovery functionality</li>
              <li>Social login integration (Google and GitHub)</li>
            </ul>
            
            <h3>Technologies Used</h3>
            <div class="tech-tags">
              <span>PHP</span>
              <span>Laravel</span>
              <span>MySQL</span>
              <span>JavaScript</span>
              <span>HTML5</span>
              <span>CSS3</span>
            </div>
          </div>
        `
      } else if (project === "classycut") {
        modalContent = `
          <h2>ClassyCut - Salon Management System</h2>
          <div class="modal-img">
            <img src="assets/classycut.jpg" alt="ClassyCut Project" onerror="this.src='https://via.placeholder.com/800x400?text=ClassyCut+Details'">
          </div>
          <div class="modal-details">
            <h3>Project Overview</h3>
            <p>Developed a salon management system using PHP and MySQL, improving appointment scheduling, membership plans, service offerings, inventory management, and payment processing.</p>
            
            <h3>Key Features</h3>
            <ul>
              <li>Membership plans (Royal, Classic, Standard)</li>
              <li>Real-time appointment booking system</li>
              <li>Service catalog management</li>
              <li>Inventory tracking and management</li>
              <li>Secure payment processing</li>
              <li>Automated reporting and customer notifications</li>
            </ul>
            
            <h3>Technologies Used</h3>
            <div class="tech-tags">
              <span>PHP</span>
              <span>MySQL</span>
              <span>JavaScript</span>
              <span>HTML5</span>
              <span>CSS3</span>
            </div>
          </div>
        `
      }

      modalBody.innerHTML = modalContent
      modal.style.display = "flex"
      document.body.style.overflow = "hidden"
    })
  })

  closeModal.addEventListener("click", () => {
    modal.style.display = "none"
    document.body.style.overflow = "auto"
  })

  window.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.style.display = "none"
      document.body.style.overflow = "auto"
    }
  })

  // Form Validation
  const contactForm = document.getElementById("contactForm")

  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      e.preventDefault()

      // Reset error messages
      document.querySelectorAll(".error-message").forEach((el) => {
        el.textContent = ""
      })

      let isValid = true

      // Validate name
      const name = document.getElementById("name")
      if (name.value.trim() === "") {
        document.getElementById("name-error").textContent = "Name is required"
        isValid = false
      }

      // Validate email
      const email = document.getElementById("email")
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      if (!emailRegex.test(email.value)) {
        document.getElementById("email-error").textContent = "Valid email is required"
        isValid = false
      }

      // Validate subject
      const subject = document.getElementById("subject")
      if (subject.value.trim() === "") {
        document.getElementById("subject-error").textContent = "Subject is required"
        isValid = false
      }

      // Validate message
      const message = document.getElementById("message")
      if (message.value.trim() === "") {
        document.getElementById("message-error").textContent = "Message is required"
        isValid = false
      }

      if (isValid) {
        // Simulate form submission
        const submitBtn = contactForm.querySelector('button[type="submit"]')
        const originalText = submitBtn.textContent

        submitBtn.disabled = true
        submitBtn.textContent = "Sending..."

        // Simulate API call with timeout
        setTimeout(() => {
          // Success message
          contactForm.innerHTML = `
            <div class="success-message">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon" style="color: var(--accent); margin-bottom: 1rem;">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
              </svg>
              <h3>Message Sent Successfully!</h3>
              <p>Thank you for reaching out. I'll get back to you as soon as possible.</p>
            </div>
          `
        }, 1500)
      }
    })
  }

  // GitHub API Integration
  const username = "adeshsapra"
  const reposContainer = document.getElementById("repos-container")
  const repoCount = document.getElementById("repo-count")
  const followersCount = document.getElementById("followers-count")
  const followingCount = document.getElementById("following-count")

  // Fetch GitHub user data
  async function fetchGitHubUser() {
    try {
      const response = await fetch(`https://api.github.com/users/${username}`)
      if (!response.ok) {
        throw new Error("Failed to fetch GitHub user data")
      }
      const userData = await response.json()

      // Update stats
      repoCount.textContent = userData.public_repos
      followersCount.textContent = userData.followers
      followingCount.textContent = userData.following

      return userData
    } catch (error) {
      console.error("Error fetching GitHub user data:", error)
      reposContainer.innerHTML = `
        <div class="error-message">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon" style="color: #ff3860; margin-bottom: 0.5rem;">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="8" x2="12" y2="12"></line>
            <line x1="12" y1="16" x2="12.01" y2="16"></line>
          </svg>
          <p>Failed to load GitHub data. Please try again later.</p>
        </div>
      `
    }
  }

  // Fetch GitHub repositories
  async function fetchGitHubRepos() {
    try {
      const response = await fetch(`https://api.github.com/users/${username}/repos?sort=updated&per_page=6`)
      if (!response.ok) {
        throw new Error("Failed to fetch GitHub repositories")
      }
      const repos = await response.json()

      // Clear loading indicator
      reposContainer.innerHTML = ""

      // Display repositories
      repos.forEach((repo) => {
        const repoCard = document.createElement("div")
        repoCard.className = "repo-card"

        repoCard.innerHTML = `
          <h4 class="repo-name">${repo.name}</h4>
          <p class="repo-description">${repo.description || "No description available"}</p>
          <div class="repo-stats">
            <div class="repo-stat">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
              </svg>
              <span>${repo.forks_count}</span>
            </div>
            <div class="repo-stat">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
              </svg>
              <span>${repo.stargazers_count}</span>
            </div>
            <div class="repo-stat">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
              <span>${repo.watchers_count}</span>
            </div>
          </div>
          <a href="${repo.html_url}" class="btn" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
              <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
              <polyline points="15 3 21 3 21 9"></polyline>
              <line x1="10" y1="14" x2="21" y2="3"></line>
            </svg>
            View Repository
          </a>
        `

        reposContainer.appendChild(repoCard)
      })

      // If no repositories found
      if (repos.length === 0) {
        reposContainer.innerHTML = `
          <div class="no-repos">
            <p>No repositories found.</p>
          </div>
        `
      }
    } catch (error) {
      console.error("Error fetching GitHub repositories:", error)
      reposContainer.innerHTML = `
        <div class="error-message">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon" style="color: #ff3860; margin-bottom: 0.5rem;">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="8" x2="12" y2="12"></line>
            <line x1="12" y1="16" x2="12.01" y2="16"></line>
          </svg>
          <p>Failed to load repositories. Please try again later.</p>
        </div>
      `
    }
  }

  // Initialize GitHub data
  fetchGitHubUser().then(() => {
    fetchGitHubRepos()
  })
})
