// Function to fetch and display job listings
function fetchJobListings() {
    // Replace this with actual API call to fetch job listings from the server
    const jobListings = [
        { title: 'Web Developer', company: 'Tech Solutions Inc.', location: 'New York, NY', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet enim vitae mattis tempus.' },
        { title: 'Graphic Designer', company: 'Design Studio LLC', location: 'Los Angeles, CA', description: 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.' },
        { title: 'Marketing Manager', company: 'Marketing Genius Agency', location: 'Chicago, IL', description: 'Nullam accumsan tortor quis sem faucibus, vel tristique justo fringilla.' }
    ];

    const jobListingsContainer = document.getElementById('job-listings');

    // Clear previous job listings
    jobListingsContainer.innerHTML = '';

    // Add each job listing to the container
    jobListings.forEach(job => {
        const jobElement = document.createElement('div');
        jobElement.classList.add('job');
        jobElement.innerHTML = `
            <h3>${job.title}</h3>
            <p><strong>Company:</strong> ${job.company}</p>
            <p><strong>Location:</strong> ${job.location}</p>
            <p>${job.description}</p>
        `;
        jobListingsContainer.appendChild(jobElement);
    });
}

// Call fetchJobListings function when the page loads
window.onload = fetchJobListings;
