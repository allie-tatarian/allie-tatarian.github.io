<?php require_once( "SNIPPETS/HEADER.php" ); ?>

<!-- MAYBE consider adding something where you can choose the branch and it scrolls you down? like in Lab 5. At least on mobile -->

<div class="container-fluid" role="main" aria-labelledby="news-title">
            <div class="row gridrow">
                <div class="col-12 text-center">
                    <h1 id="news-title">News and Events</h1>
        
                    <p>You'll find more about the library news and events here.</p>
                  </div>

                    <div class="col-lg-9">
                  
                    <div class="card my-2">
                      <div class="card-body">
                      <h5 class="card-title">Events Calendar</h5>
                      <p class="card-text">What's happening next? Check out our calendar of events!</p>
                      <p class="card-text">You can also find out more about what's happening at the library this month by checking out our newsletter.</p>
                      <a href="http://www.eventkeeper.com/code/events.cfm?curOrg=NBFPL#4074536" class="card-link">Events calendar</a>
                      <a href="http://www.newbedford-ma.gov/library/wp-content/uploads/sites/44/NB-Library-Events-Calendar_December_2019.pdf" class="card-link">December newsletter (PDF)</a>
                     </div>
                     <div class="card-footer text-muted">December 2019</div>
                    </div>

                    <div class="card my-2">
                      <div class="card-body">
                      <h5 class="card-title">Storytime</h5>
                      <p class="card-text">Storytime takes place at the Main Library every Sunday at 11am. Each of the other branches holds storytime seasonally; please call the branch for specific dates.</p>
                      <a href="https://www.newbedford-ma.gov/library/wp-content/uploads/sites/44/NBFPL-Story-Time-2.pdf" class="card-link">Storytime flyer (PDF)</a>
                     </div>
                    </div>
                  </div>

                <div class="col-lg-3">
                <img src="Images/Qigong.jpg" class="newsimage img-fluid" alt="A poster advertising Lawler Branch Library's Qigong at the Library, every Tuesday at 4 PM"><span class="sr-only">Lawler Branch Library presents Qigong at the Library, every Tuesday at 4 PM. Bring your most comfortable shoes and exercise clothing to practice this Chinese system of physical exercises and breathing control.</span>
                </div>

<!-- Bootstrap accordion cards, from bootstrap website -->
                <div class="accordion col-lg-9" id="calendar">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Wednesday, December 11, 2019
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#calendar">
      <div class="card-body">
        <ul>
          <li>9:00 AM - 1:00 PM: Main Library - SNAP Sign up</li>
          <li class="text-warning">10:00 AM - 6:00 PM: Casa da Saudade - Exhibition Portuguese Christmas Traditions</li>
          <li>10:30 AM - 11:30 AM: Main Library - Fall Toddler Story Time at National Park Service</li>
          <li class="text-danger">10:30 AM - 11:30 AM: Wilks Library - Story Hour</li>
          <li class="text-danger">4:00 PM - 5:00 PM: Wilks Library - Read Your Heart Out Romance Book Club</li>
          <li>5:15 PM - 8:45 PM: Main Library - Planning Board</li>
          <li>7:00 PM - 8:00 PM: Main Library - Book Club</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Thursday, December 12, 2019
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#calendar">
      <div class="card-body">
        <ul>
          <li class="text-warning">12:00 PM - 8:00 PM: Casa da Saudade - Exhibition Portuguese Christmas Traditions</li>
          <li class="text-primary">4:00 PM - 5:00 PM: Lawler Branch - Teen Video Game Club</li>
          <li>4:00 PM - 9:00 PM: Main Library - Zoning Board of Appeals - Planning</li>
          <li>5:00 PM - 7:00 PM: Main Library - AHA Night Drop In Craft</li>
          <li>5:00 PM - 8:30 PM: Main Library - William Bradford: Arctic Sketches</li>
          <li class="text-success">5:30 PM - 7:30 PM: Howland-Green: Much Ado About Crafting</li>
          <li class="text-danger">5:30 PM - 7:30 PM: Wilks Library: AFSCME Meeting</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Friday, December 13, 2019
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#calendar">
      <div class="card-body">
      <ul>
          <li>9:00 AM - 1:00 PM: Main Library - SNAP Sign up</li>
          <li class="text-primary">10:00 AM - 1:00 PM: Lawler Branch - TGIF Technically Good Information</li>
          <li class="text-primary">1:00 PM - 4:00 PM: Lawler Branch - Scrabble Scramble</li>
          <li class="text-primary">4:00 PM - 5:00 PM: Lawler Branch - Teen Anime Club</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-3">
                <img src="Images/Chess.jpg" class="newsimage img-fluid" alt="A poster advertising the New Bedford Chess Society, Mondays at 6 PM"><span class="sr-only">Join us at the New Bedford Chess Society, Mondays at 6 PM at the New Bedford Downtown Library. Chess players of all ages and skill levels are welcome to join the New Bedford Chess Society at the New Bedford Public Library. Instructions will be provided and chess boards are available.</span>
                </div>

            </div>
        </div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>
