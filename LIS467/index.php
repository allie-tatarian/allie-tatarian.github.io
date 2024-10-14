<?php require_once( "SNIPPETS/HEADER.php" ); ?>

<div class="container" role="region">
    <div class="row">
      <div class="col-12 mt-1">
        <div id="AwesomeCarousel" class="carousel slide" data-ride="carousel" role="region" aria-label="Important news and events"> 
          <ol class="carousel-indicators">
            <li data-target="#AwesomeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#AwesomeCarousel" data-slide-to="1"></li>
            <li data-target="#AwesomeCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox" aria-label="Carousel" aria-live="polite">
            <div class="carousel-item active" aria-label="1 of 3" role="option">
              <a href="./read">
              <img class="d-block img-fluid carouselImage" src="Images/news2.jpg" alt="A man reading a newspaper"><span class="sr-only">Library Resources</span>
              </a>
              <div class="carousel-caption d-block outline" aria-label="CarouselHeading">
                <h1 class="carousel-font">What can you read at the library?</h3>
              </div>
            </div>
  
            <div class="carousel-item" aria-label="2 of 3" role="option">
            <a href="./news">
              <img class="d-block img-fluid carouselImage" src="Images/admission.jpg" alt="A photo of admission tickets"><span class="sr-only">Library Events</span>
              </a>
              <div class="carousel-caption d-block outline" aria-label="CarouselHeading">
                    <h1 class="carousel-font">What can you do at the library?</h3>
                  </div>
            </div>
  
            <div class="carousel-item" aria-label="3 of 3" role="option">
            <a href="./visit">
              <img class="d-block img-fluid carouselImage" src="Images/question-mark.jpg" alt="A chalkboard with a question mark on it"><span class="sr-only">Visit us</span>
              </a>
              <div class="carousel-caption d-block outline" aria-label="CarouselHeading">
                    <h1 class="carousel-font">Where are we located?</h3>
                  </div>
            </div>
          </div>
  
          <a class="carousel-control-prev" href="#AwesomeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
  
          <a class="carousel-control-next" href="#AwesomeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    </div>

    <div class="container-fluid" id="BranchSection" role="main" aria-labelledby="title2">
            <div class="row gridrow">
                <div class="col-12 text-center">
                    <h1 id="title2">Our Branches</h1>
        
                    <p>You'll find more information about our 5 branches (and the Bookmobile!) here.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 col-sm-6 col-xs-12 px-3">
                    <img src="Images/MainBranch.jpg" class="img-fluid img-thumbnail branchImage" alt="picture of the Main Branch" />
                    <h2 class="color-secondary-2-2">Main Branch</h2>
                    <p class="text-muted">Downtown</p>
                    <button class="btn btn-info btn-block my-1" type="button" data-toggle="collapse" data-target="#main" aria-expanded="false" aria-controls="main">Learn more</button>
                    <p id="main" class="collapse multi-collapse">The main library has a collection of 373,000 items in print, audio and video format for Adult, Young Adult and Children.  It is home to significant historical holdings including the third largest collection worldwide of American Whaling materials, early 19th century Quaker materials, museum quality art and an extensive genealogy collection. Portuguese language materials are available at the Casa da Saudade branch and Spanish language materials are available at the Howland Green branch.</p>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 px-3">
                    <img src="Images/CasaDaSaudade.jpg" class="img-fluid img-thumbnail branchImage" alt="picture of the Casa Da Saudade branch" />
                    <h2 class="color-secondary-2-2">Casa Da Saudade Library</h2>
                    <p class="text-muted">South End</p>
                    <button class="btn btn-info btn-block my-1" type="button" data-toggle="collapse" data-target="#casa" aria-expanded="false" aria-controls="casa">Learn more</button>
                    <p id="casa" class="collapse multi-collapse">The Casa da Saudade Branch is located in the south end of the city in the Sister Aurora Avelar Community Center. Originally funded by a federal grant, it opened in 1971 in a small store front on Rivet St with a collection of 3,000. In 1975, it moved to its present location. The collection is in English, Portuguese, and Crioulo. There are approximately 34,000 volumes, 92 subscriptions for newspapers and magazines, DVDs, videos, audio cassettes and a special collection of materials acquired to assist Portuguese fishermen and their families. Ongoing programs are held to commemorate significant events such as the Day of Portugal, the Cape Verdean Independence Day, and book releases by Portuguese authors or about Portuguese speaking people.</p>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 px-3">
                    <img src="Images/Wilks2.jpg" class="img-fluid img-thumbnail branchImage" alt="picture of the Wilks branch" />
                    <h2 class="color-secondary-2-2">The Wilks Library</h2>
                    <p class="text-muted">North End</p>
                    <button class="btn btn-info btn-block my-1" type="button" data-toggle="collapse" data-target="#wilks" aria-expanded="false" aria-controls="wilks">Learn more</button>
                    <p id="wilks" class="collapse multi-collapse">The Wilks Branch is located in the north end of the city at the south east corner of Brooklawn Park. It was built in 1958 with funds left in trust to the library by Sylvia Ann Howland Green Wilks whose mother was Hetty Green. The collection has approximately 35,000 items, including newspapers, magazines, DVD’s, videos and audio cassettes as well as public Internet access. There is a meeting room available for community use. This branch has materials on Chinese culture purchased with funds left in trust to the library in memory of Chuck Woo.</p>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 px-3">
                    <img src="Images/Lawler.jpg" class="img-fluid img-thumbnail branchImage" alt="picture of the Lawler branch" />
                    <h2 class="color-secondary-2-2">The Lawler Library</h2>
                    <p class="text-muted">Buttonwood Park</p>
                    <button class="btn btn-info btn-block my-1" type="button" data-toggle="collapse" data-target="#lawler" aria-expanded="false" aria-controls="lawler">Learn more</button>
                    <p id="lawler" class="collapse multi-collapse">The Lawler Branch is located at the north east corner of Buttonwood Park. It was built in 1960 with funds left in trust to the library by Sylvia Ann Howland Green Wilks whose mother was Hetty Green. The collection has approximately 40,000 volumes, newspapers, magazines, DVD’s, videos and audio cassettes as well as public Internet access. The Roberta S. Barnet meeting room is available for community use. This branch and the main library have books on Jewish religion and culture purchased with funds left in trust to the library by Roberta and Philip Barnet. The Friends of Buttonwood Park, with donations from the community, have created an outdoor reading area for all to enjoy.</p>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 px-3">
                    <img src="Images/HowlandGreen2.jpg" class="img-fluid img-thumbnail branchImage" alt="picture of the Howland Green branch" />
                    <h2 class="color-secondary-2-2">Howland-Green Library</h2>
                    <p class="text-muted">South End</p>
                    <button class="btn btn-info btn-block my-1" type="button" data-toggle="collapse" data-target="#howland" aria-expanded="false" aria-controls="howland">Learn more</button>
                    <p id="howland" class="collapse multi-collapse">The Howland Green Branch is located in the south end of the city at the beginning of Rte. 18. It was built in 1964 with funds left in trust to the library by Sylvia Ann Howland Green Wilks whose mother was Hetty Green. The collection has approximately 24,000 volumes, newspapers, magazines, DVD’s, videos and audio cassettes as well as public Internet access. Adult and juvenile Spanish language materials are located here including encyclopedias, citizenship guides, cookbooks, auto repair manuals, works of fiction, picture books, videos, and audio cassettes. There is a meeting room available for community use.</p>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 px-3">
                    <img src="Images/Bookmobile2.jpg" class="img-fluid img-thumbnail branchImage" alt="stock photo of a bookmobile" />
                    <h2 class="color-secondary-2-2">Bookmobile</h2>
                    <p class="text-muted">Bookmobile</p>
                    <p>You can find the schedule for the bookmobile <a href="https://www.newbedford-ma.gov/library/wp-content/uploads/sites/44/Fall-2019-Schedule-.pdf">here!</a> <br />(links to .pdf)</p>
                </div>
            </div>
        </div>

        <?php require_once( "SNIPPETS/FOOTER.php" ); ?>
