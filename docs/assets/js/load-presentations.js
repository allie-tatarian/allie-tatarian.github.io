const present = {
    "presentations": [
        {
            "date": "November 2024",
            "topic": "Fostering Research Integrity: A Collaborative RCR Workshop Series",
            "audience": "STEMLibCo Conference",
            "keyPoints": ["Responsible conduct of research", "Academic library outreach", "Attracting faculty to library workshops"],
            "description": "Ensuring the integrity and ethical conduct of research is paramount in the STEM fields. Over the past year, our library hosted a remote Responsible Conduct of Research (RCR) workshop series, aiming to foster a culture of ethical research practices among STEM researchers at our institution. This initiative was a collaboration with our local Office of the Vice Provost for Research (OVPR), which traditionally offers the federally mandated RCR training as an in-person, 12-hour course spanning four weeks in the winter.Our series reimagined and complemented this training with a series of one-hour remote workshops, each focusing on an individual topic such as conflict of interest, effective mentorship, or AI literacy. This format provided a flexible, accessible alternative, attracting a broad audience, and the remote format meant that we were able to accommodate researchers several states away. The library saw increased engagement in our workshop series, while the OVPR saw more researchers seeking guidance from their Research Integrity and Compliance Unit.This presentation will explore the lessons learned from our experience and outline potential improvements for future iterations. Attendees will gain practical insights into designing and implementing similar initiatives, emphasizing the critical role libraries can play in advancing responsible conduct of research. (This session description was written and edited with help from ChatGPT)"
        },
        {
            "date": "July 2024",
            "topic": "Beyond the Hype: Addressing Bias in AI for Information Literacy Instruction",
            "audience": "Teaching and Learning With AI Conference",
            "keyPoints": ["Understanding bias in AI tools", "How to critically evaluate AI outputs", "Integrating AI bias into information literacy instruction"],
            "description": "While generative AI tools offer exciting possibilities, they also raise critical concerns about bias. This session delves into the inherent biases within AI systems and their impact on information literacy instruction. We will examine how data selection, training algorithms, and social factors contribute to bias in AI outputs, and then work together to develop practical strategies to empower students to critically analyze AI-generated content. (This session\'s title and abstract written with help from Google Gemini.)"
        },
        {
            "date": "June 2024",
            "topic": "Beyond Science Fiction: AI's Past, Present, & Impact on Libraries & Education",
            "audience": "ACRL-NEC/NELIG Annual Conference",
            "keyPoints": ["History of AI, focusing on machine learning", "Intersection of AI and information literacies", "Critical evaluation of AI outputs"],
            "description": "From captivating imagery to conversational interactions, generative AI is transforming our world. But how did we get here? This workshop delves into the deep history of AI, revealing the fascinating origins of generative AI and its predecessors. While recent advancements like ChatGPT have sparked discussions about the future, AI's journey stretches back decades, with significant milestones shaping its evolution. For librarians, understanding AI's trajectory is crucial for preparing for its impact on libraries and information literacy education. This workshop equips you to navigate conversations about AI's potential and pitfalls, empowering you to develop future-proof instruction strategies for a changing information landscape. Together we will analyze trends and potential future directions of AI to prepare ourselves for the evolving landscape, discuss how AI will transform higher education and libraries, and brainstorm strategies to adapt and thrive. We will also discover how libraries can leverage AI to enhance information literacy instruction, addressing issues like bias, plagiarism, and critical evaluation of AI-generated content. By exploring the historical and current landscape of AI, participants will gain a deeper understanding of its capabilities and implications for libraries and education, allowing them to prepare for the future with confidence and critical thinking skills. (This session\'s title and abstract were written with help from Google Gemini.)"
        },
        {
            "date": "March 2024",
            "topic": "AI in Academic Librarianship",
            "audience": "NELIG Midwinter Gathering",
            "keyPoints": ["Critical AI literacy", "When AI literacy should be taught", "History of NLP and how that effects modern LLMs"],
            "description": "Panel presentation on AI use in academic libraries."
        }
    ]
    };

    const container = document.getElementById('presentations-container');
    present.presentations.forEach(presentation => {
    const card = document.createElement('div');
    card.className = 'presentation-card';
    card.innerHTML = `
        <h3>${presentation.topic}</h3>
        <div class="presentation-info"><strong>Date:</strong> ${presentation.date}</div>
        <div class="presentation-info"><strong>Audience:</strong> ${presentation.audience}</div>
        <div class="presentation-info"><strong>Key Points:</strong></div>
        <ul class="key-points">
            ${presentation.keyPoints.map(point => `<li>${point}</li>`).join('')}
        </ul>
        <div class="description"><strong>Description:</strong> ${presentation.description}</div>
    `;
    container.appendChild(card);
    });

    // Mobile nav toggle
    document.querySelector('.nav-toggle').addEventListener('click', function() {
    document.querySelector('nav ul').classList.toggle('show');
    });