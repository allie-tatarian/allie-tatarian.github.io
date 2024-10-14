<?php require_once( "SNIPPETS/HEADER.php" ); ?>

<!-- MAYBE consider adding something where you can choose the branch and it scrolls you down? like in Lab 5. At least on mobile -->

<div class="container-fluid" role="main" aria-labelledby="read-title">
            <div class="row gridrow">
                <div class="col-12 text-center">
                    <h1 id="read-title">Read, Listen, and Watch</h1>
        
                    <p>You'll find more about the library's resources here.</p>
                </div>
                
                <!--<div class="col-md-8 col-sm-6">
                 Make these accordions and include explanations of each? Or make cards in two columns?
                <ul>
                      <li></li>
                      <li></li>
                      <li></a></li>
                      <li>/li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                </div>-->
                <div class="accordion col-md-9" id="read">
  <div class="card">
    <div class="card-header" id="LibraryCard">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#CollapseOne" aria-expanded="true" aria-controls="CollapseOne">
          Start here: Get a library card
        </button>
      </h2>
    </div>

    <div id="CollapseOne" class="collapse show" aria-labelledby="LibraryCard" data-parent="#read">
      <div class="card-body">
      <p><a href="http://www.sailsinc.org/index.php/e-catalog-information/get-a-library-card/">Click here to register for a library card!</a></p>
      <p>You will need a valid email address to register. You may need to visit your closest branch to pick up your card, but you can make online holds right away!</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="onlineCatalog">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#CollapseTwo" aria-expanded="false" aria-controls="CollapseTwo">
          Search our online library catalog
        </button>
      </h2>
    </div>
    <div id="CollapseTwo" class="collapse" aria-labelledby="onlineCatalog" data-parent="#read">
      <div class="card-body">
      <p><a href="http://www.sailsinc.org/">Search our online library catalog</a></p>
      <p>From here you can search the SAILS network, with libraries across southeastern Mass. Find something that's not available in New Bedford? Request it through interlibrary loan!</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="CommonwealthCatalog">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#CollapseThree" aria-expanded="false" aria-controls="CollapseThree">
          Commonwealth Catalog
        </button>
      </h2>
    </div>
    <div id="CollapseThree" class="collapse" aria-labelledby="CommonwealthCatalog" data-parent="#read">
      <div class="card-body">
      <p><a href="http://www.sailsinc.org/comcatlogin/">Commonwealth Catalog</a></p>
      <p>This link will take you to a site where  you can search through the catalogs of libraries throughout Massachusetts. If you find something you like, you can request it to pick it up at your library of choice.</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="Hoopla">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#CollapseFour" aria-expanded="false" aria-controls="CollapseFour">
          Hoopla
        </button>
      </h2>
    </div>
    <div id="CollapseFour" class="collapse" aria-labelledby="Hoopla" data-parent="#read">
      <div class="card-body">
      <p><a href="https://www.hoopladigital.com/">For digital resources: Hoopla</a></p>
      <p>Hoopla is your one-stop-shop for digital resources through your library. Whether you are looking for books, comics, movies, or music, you'll find it on Hoopla!</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="Tumblebooks">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#CollapseFive" aria-expanded="false" aria-controls="CollapseFive">
          For kids: Tumblebooks
        </button>
      </h2>
    </div>
    <div id="CollapseFive" class="collapse" aria-labelledby="Tumblebooks" data-parent="#read">
      <div class="card-body">
      <p><a href="https://www.tumblebooklibrary.com/Home.aspx?categoryID=13">For kids: Tumblebooks</a></p>
      <p>Here you will find a database of online children's eBooks.</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="K8Novelist">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#CollapseSix" aria-expanded="false" aria-controls="CollapseSix">
          K-8 NoveList database
        </button>
      </h2>
    </div>
    <div id="CollapseSix" class="collapse" aria-labelledby="K8Novelist" data-parent="#read">
      <div class="card-body">
      <p><a href="http://search.ebscohost.com/login.aspx?authtype=ip,cpid&custid=s4231367&profile=novpk8">NoveList Database (K-8)</a></p>
      <p>At this link, you will be able to search age-appropriate novels for children and teens. Whether your kindergartener prefers whimsical stories or your teenager wants to read something suspensful, you'll find it here!</p>
      <p>Once you've found the record for a book you like, click "Check the library catalog" to be taken to the SAILS page for that book, where you can see where it is available. Some are even available as eBooks on Hoopla!</p>  
      <p>On the log-in page, use your library card number as the "patron ID" to log in. </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="NoveList">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#CollapseSeven" aria-expanded="false" aria-controls="CollapseSeven">
          NoveList Database
        </button>
      </h2>
    </div>
    <div id="CollapseSeven" class="collapse" aria-labelledby="NoveList" data-parent="#read">
      <div class="card-body">
      <p><a href="http://search.ebscohost.com/login.aspx?authtype=ip,cpid&custid=s4231367&profile=novplus">NoveList Database</a></p>
      <p>At this link, you will be able to search for novels for readers of all ages. You can search by age group, genre, and medium. Whether you prefer eBooks, audiobooks, or physical books, you'll find it here.</p>
      <p>Once you've found the record for a book you like, click "Check the library catalog" to be taken to the SAILS page for that book, where you can see where it is available. Some are even available as eBooks on Hoopla!</p>  
      <p>On the log-in page, use your library card number as the "patron ID" to log in. </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="OnlineDB">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#CollapseEight" aria-expanded="false" aria-controls="CollapseEight">
          Online Databases that you can access at home
        </button>
      </h2>
    </div>
    <div id="CollapseEight" class="collapse" aria-labelledby="OnlineDB" data-parent="#read">
      <div class="card-body">
      <p><a href="http://www.galepages.com/mlin_s_newbfpl">Home-Access Online Databases</a></p>
      <p>At this site, you can access the archives of the Boston Globe, the Encyclopedia Britannica, and more from the comfort of your home!</p>
      </div>
    </div>
  </div>
</div>
<div class="col-md-3">
                <a href="https://www.SAILSinc.org/"><img src="Images/sails.jpg" class="newsimage img-fluid d-sm-none d-md-block" alt="The SAILS network logo"><span class="sr-only">SAILS online catalog</span></a>
                </div>
            </div>
        </div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>
