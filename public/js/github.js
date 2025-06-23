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
                    <i class="fas fa-exclamation-circle"></i>
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
                            <i class="fas fa-code-branch"></i>
                            <span>${repo.forks_count}</span>
                        </div>
                        <div class="repo-stat">
                            <i class="fas fa-star"></i>
                            <span>${repo.stargazers_count}</span>
                        </div>
                        <div class="repo-stat">
                            <i class="fas fa-eye"></i>
                            <span>${repo.watchers_count}</span>
                        </div>
                    </div>
                    <a href="${repo.html_url}" class="btn" target="_blank">View Repository</a>
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
                    <i class="fas fa-exclamation-circle"></i>
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
