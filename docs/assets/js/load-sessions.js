document.addEventListener('DOMContentLoaded', function() {
  fetch('/assets/sessions.json')
      .then(response => response.json())
      .then(data => {
        const sessionsContainer = document.getElementById('sessions-container');
        
        data.sessions.forEach(session => {
          const sessionElement = document.createElement('div');
          sessionElement.className = 'session';
          
          const keyPointsList = session.keyPoints.map(point => `<li>${point}</li>`).join('');
          
          sessionElement.innerHTML = `
            <h3>${session.title}</h3>
            <p><strong>Date:</strong> ${session.date}</p>
            <p><strong>Audience:</strong> ${session.audience}</p>
            <p><strong>Key Points:</strong></p>
            <ul>
              ${keyPointsList}
            </ul>
            <blockquote>${session.description}</blockquote>
          `;
          
          sessionsContainer.appendChild(sessionElement);
        });
      })
      .catch(error => console.error('Error loading sessions:', error));
  });