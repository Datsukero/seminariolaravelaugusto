@extends('base')

@section('content')
<!-- START THE FEATURETTES -->
<style>/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-top: 5rem;
  padding-bottom: 3rem;
  color: #5a5a5a;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 3rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 2rem;
  }
}
</style>

<!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Sobre o trabalho.</h2>
            <p class="lead">Projeto para seminário do Prof Augusto da turma TADS 2016 do grupo de estudo sobre o Framework Laravel.
              <br>Grupo:
              <ul>
                <li>Pedro Machado</li>
                <li>Claudinei</li>
                <li>Héricles</li>
                <li>Vitor</li>
                <li>João Lucas</li>
            </ul>
            </p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="media/laravel_logo.jpg" alt="Laravel Logo">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-12">
            <h2 class="featurette-heading">Informações</h2>
            <div class="row mt-4">
              <div class="col-md-3">
                 <ul class="list-group">
                   <li class="list-group-item">PHP >= 7.1.3</li>
                   <li class="list-group-item">OpenSSL PHP Extension</li>
                   <li class="list-group-item">PDO PHP Extension</li>
                   <li class="list-group-item">Mbstring PHP Extension</li>
                   <li class="list-group-item">Tokenizer PHP Extension</li>
                   <li class="list-group-item">XML PHP Extension</li>
                   <li class="list-group-item">Ctype PHP Extension</li>
                   <li class="list-group-item">JSON PHP Extension</li>
                  </ul>
              </div>
          </div>
        </div>
       </div>
        <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
@endsection