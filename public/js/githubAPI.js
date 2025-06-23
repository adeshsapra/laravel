// GitHub API Integration
document.addEventListener("DOMContentLoaded", () => {
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
        repoCard.className = "glass-card"
        repoCard.style.height = "100%"

        repoCard.innerHTML = `
          <div class="card-content">
            <h3>${repo.name}</h3>
            <p>${repo.description || "No description available"}</p>
            <div class="repo-stats">
              <div class="repo-stat">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                </svg>
                <span>Forks: ${repo.forks_count}</span>
              </div>
              <div class="repo-stat">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
                <span>Stars: ${repo.stargazers_count}</span>
              </div>
            </div>
            <a href="${repo.html_url}" class="btn small-btn" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                <polyline points="15 3 21 3 21 9"></polyline>
                <line x1="10" y1="14" x2="21" y2="3"></line>
              </svg>
              View Repository
            </a>
          </div>
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
