const data = {
    "sessions": [
        {
            "date": "2024-11-06",
            "topic": "Beyond Traditional Publishing: Accelerating Research Impact with Preprints and Data Articles",
            "audience": "All researchers",
            "keyPoints": ["Introduction to preprints", "Introduction to data articles", "Using preprints and data articles to accelerate research dissemination"],
            "description": "Discover how to amplify the reach and impact of your research beyond traditional journal publishing. This workshop explores two powerful alternatives: preprints and data articles. Learn how these strategies can speed up dissemination, invite earlier feedback, and increase the visibility of both your manuscripts and datasets. The session will provide practical insights into integrating these methods alongside traditional publishing. Join us to expand your toolkit for sharing your valuable contributions swiftly and openly in today's fast-paced scientific landscape. <i>[Title and description written with the help of Claude AI]</i>"
        },
        {
            "date": "2024-04-10",
            "topic": "AI Literacy for a Changing Biomedical Landscape",
            "audience": "Graduate students in the biomedical sciences",
            "keyPoints": ["Fundamental concepts of AI", "Evaluating AI tools", "Practical applications of AI tools"],
            "description": "In this student-aimed workshop, we will explore the fundamental concepts of AI, learn to evaluate AI tools, and discover practical applications in your everyday life. This interactive workshop will equip you with the skills to confidently navigate the world of machine intelligence. We'll also delve into bias detection, transparency, and responsible AI usage. </i>This workshop title and description were written with the help of Google Bard.</i>"
        },
        {
            "date": "2024-02-14",
            "topic": "Strengthening Biomedical Research Through FAIR Data Principles",
            "audience": "All researchers",
            "keyPoints": ["Role of FAIR data principles in biomedical research", "Best practices for data management", "Tools and resources for data sharing"],
            "description": "This interactive workshop delves into the FAIR data principles (Findable, Accessible, Interoperable, and Reusable) and their essential role in contemporary biomedical research. Explore practical strategies for data management, discover tools and resources to facilitate ethical and effective data sharing, and learn how FAIR data can enhance collaboration, reproducibility, and the impact of your research. <i>This workshop description was written with the assistance of Google Bard.</i>"
        },
        {
            "date": "2023-09-13",
            "topic": "Data Management Essentials for Grants",
            "audience": "Research faculty",
            "keyPoints": ["Best practices for data management", "What to include in a data management plan", "Introduction to using DMPTool for grant writing"],
            "description": "Managing your data before you begin your research and throughout its life cycle is essential to ensure its current usability and long-run preservation and access. In this workshop, we will review best practices for naming, organizing, storing, depositing your research data, and creating a Data Management Plan (DMP). We will also be taking a deep dive into how to use DMPTool to make writing and managing your DMPs easier than ever."
        }
    ]
    };

    const container = document.getElementById('sessions-container');
    data.sessions.forEach(session => {
    const card = document.createElement('div');
    card.className = 'session-card';
    card.innerHTML = `
        <h3>${session.topic}</h3>
        <div class="session-info"><strong>Date:</strong> ${session.date}</div>
        <div class="session-info"><strong>Audience:</strong> ${session.audience}</div>
        <div class="session-info"><strong>Key Points:</strong></div>
        <ul class="key-points">
            ${session.keyPoints.map(point => `<li>${point}</li>`).join('')}
        </ul>
        <div class="description"><strong>Description:</strong> ${session.description}</div>
    `;
    container.appendChild(card);
    });

    // Mobile nav toggle
    document.querySelector('.nav-toggle').addEventListener('click', function() {
    document.querySelector('nav ul').classList.toggle('show');
    });