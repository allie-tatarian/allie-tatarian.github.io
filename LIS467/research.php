<?php require_once( "SNIPPETS/HEADER.php" ); ?>

<!-- MAYBE consider adding something where you can choose the branch and it scrolls you down? like in Lab 5. At least on mobile -->
<div class="container-fluid" role="main" aria-labelledby="research-title">
            <div class="row gridrow">
                <div class="col-12 text-center">
                    <h1 id="research-title">Research and Learn</h1>
        
                    <p>You'll find more about special collections at each library branch here.</p>
                </div>
            </div>

<div class="row gridrow">
  <div class="col-md-4 col-sm-6">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-online-list" data-toggle="list" href="#list-online" role="tab" aria-controls="list-online">Online</a>
      <a class="list-group-item list-group-item-action" id="list-downtown-list" data-toggle="list" href="#list-downtown" role="tab" aria-controls="list-downtown">Main Branch</a>
      <a class="list-group-item list-group-item-action" id="list-casa-list" data-toggle="list" href="#list-casa" role="tab" aria-controls="list-casa">Casa da Saudade</a>
      <a class="list-group-item list-group-item-action" id="list-wilks-list" data-toggle="list" href="#list-wilks" role="tab" aria-controls="list-wilks">Wilks Branch</a>
      <a class="list-group-item list-group-item-action" id="list-lawler-list" data-toggle="list" href="#list-lawler" role="tab" aria-controls="list-lawler">Lawler Branch</a>
      <a class="list-group-item list-group-item-action" id="list-howland-green-list" data-toggle="list" href="#list-howland-green" role="tab" aria-controls="list-howland-green">Howland-Green</a>
    </div>
  </div>
  <div class="col-md-4 col-sm-6">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-online" role="tabpanel" aria-labelledby="list-online-list">
      <ul>
                      <li><a href="https://www.digitalcommonwealth.org/">Digital Commonwealth</a></li>
                      <li><a href="https://dp.la/">Digital Public Library of America</a></li>
                      <li><a href="https://www.newbedford-ma.gov/library/local-news-index/">Local News Index</a></li>
                      <li><a href="https://openarchives.umb.edu/digital/collection/p15774coll6%20%20">Mass. Memories</a></li>
                      <li><a href="https://www.newbedford-ma.gov/library/whaling-database/">Whaling Crew List database</a></li>
                      <li><a href="http://search.ebscohost.com/login.aspx?authtype=ip,cpid&custid=s4231367&profile=ehost&groupid=main">American Antiquarian Society (AAS) Historical Periodicals Collections</a></li>
                    </ul>
      </div>
      <div class="tab-pane fade" id="list-downtown" role="tabpanel" aria-labelledby="list-downtown-list">
      <ul>
                        <li>The third largest collection worldwide of American Whaling materials</li>
                        <li>Early 19th century Quaker materials</li>
                        <li>Museum quality art</li>
                        <li>An extensive genealogy collection</li>
                        <li>Books on Jewish religion and culture</li>
                    </ul>
      </div>
      <div class="tab-pane fade" id="list-casa" role="tabpanel" aria-labelledby="list-casa-list">
      <ul>
                        <li>Materials in English, Portuguese, and Crioulo</li>
                        <li>Materiais em Português, Inglês e Kriolu</li>
                        <li>Special collection of materials acquired to assist Portuguese fishermen and their families</li>
                    </ul>
      </div>
      <div class="tab-pane fade" id="list-wilks" role="tabpanel" aria-labelledby="list-wilks-list">
      <ul>
                        <li>Materials on Chinese culture</li>
                    </ul>
      </div>
      <div class="tab-pane fade" id="list-lawler" role="tabpanel" aria-labelledby="list-lawler-list">
      <ul>
                        <li>Books on Jewish religion and culture</li>
                    </ul>
      </div>
      <div class="tab-pane fade" id="list-howland-green" role="tabpanel" aria-labelledby="list-howland-green-list">
      <ul>
                        <li>Adult and juvenile Spanish language materials are located here including encyclopedias, citizenship guides, cookbooks, auto repair manuals, works of fiction, picture books, videos, and audio cassettes</li>
                        <li>Materiales en Español</li>
                    </ul>
      </div>
    </div>
  </div>
  <div class="col-md-4 my-1">
  <img src="Images/ancestry.png" class="newsimage img-fluid" alt="A poster advertising ancestry.com, library edition"><span class="sr-only">Searching for your roots? Use ancestry.com, library edition to unearth your roots and add branches to your family tree! Available via the library's computers and wifi. You can find information about immigration, vital records, census, family histories, court records, directories, photos, military records, and more!</span>
  </div>
</div>
</div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>
