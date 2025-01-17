<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <meta name="robots" content="index, follow"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Légumes bio, de saison et en vente directe."/>
  <meta http-equiv="x-ua-compatible" content="ie=edge"/>
  <title>François Colas - Maraîcher bio</title>
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet"/>
  <link href="fc.css" rel="stylesheet"/>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>
    $(function () {
      $('form').submit(function () {
        var form   = $(this);
        var button = form.find('button');
        var error  = form.find('.form-error');

        var showError = function () {
          error.slideDown();
        };
        var showSuccess = function () {
          button.attr('disabled', '');
          button.addClass('btn-success');
          button.html('<i class="icon icon-check"></i> Merci');
        };

        $.post(form.attr('action'), form.serialize())
          .fail(showError)
          .done(function (resp) { (resp.sent) ? showSuccess() : showError(); })
        error.slideUp();
        return false;
      });
      setInterval(function () {
        $('header').css('background-image', 'url(header' + Math.floor(Math.random()*5) + '.jpg)');
      }, 10000);
    });
  </script>
</head>
<body>
  <header>
    <h1>François Colas</h1>
    <p>Maraîcher bio</p>
  </header>
  <main>
    <div class="container">
      <div class="columns">
        <div class="column col-sm-12 col-8 col-mx-auto">
          <h3 class="text-center">Je me présente</h3>
          <p class="text-justify">
            Ça y est, depuis peu, je suis maraîcher bio. En 2016, j'ai quitté mon travail
            pour me lancer dans cette nouvelle aventure. Après une année de formation à
            l'<a href="http://www.groupe-esa.com/">ESA d'Angers</a>, je me lance sur ce terrain
            test de 3000m². Cela va me permettre d'améliorer ma technique et de me donner le
            temps de mûrir mon projet avant de m'installer pour de bon.<br/>
            Mes récoltes ne sont pas certifiées AB (Agriculture Biologique) car je
            ne vais pas rester assez longtemps sur ce terrain pour pouvoir bénéficier de
            la certification. Cependant, je respecte strictement les règles de l'Agriculture
            Biologique. N'hésitez pas à venir me rendre visite pour vous rendre compte de la
            sincérité de ma démarche.
          </p>
          <p class="text-right">À bientôt. </p>
        </div>
        <div class="column col-sm-12 col-8 col-mx-auto text-center">
          <a name="quand"></a>
          <h3>Quand ?</h3>
          <p>Vente <mark>au jardin</mark> le mercredi de 14h à 19h.</p>
          <p class="text-bold">
            <u>En ce moment</u> :
            <br>(màj du 26/06)
            <br>Carottes
            <br>Courgettes
            <br>Oignons frais
            <br>Salades
            <br>Aneth, basilic, coriandre, menthe et persil
          </p>
          <div class="divider" data-content="Où"></div>
          <p>Le jeudi matin, <mark>au marché de la Doutre</mark> (Place du Dr Bichon à Angers).</p>
        </div>
        <div class="column col-sm-12 col-7 col-mx-auto text-center">
          <h3>Rester informé ?</h3>
          <form action="giveinfos.php" method="post">
            <p>Ci-dessous, vous pouvez me laisser votre adresse email ou numéro de téléphone.
              Au long de la saison j'enverai <u>les horaires</u> et la <u>liste des légumes</u>
              disponibles.</p>
            <div class="columns">
              <div class="form-group column col-md-12">
                <label class="form-label">Téléphone
                  <input name="phone" class="form-input" type="text"></label>
              </div>
              <div class="divider-vert hide-md" data-content="Et/Ou"></div>
              <div class="divider col-12 show-md" data-content="Et/Ou"></div>
              <div class="form-group column col-md-12">
                <label class="form-label">Adresse électronique
                  <input name="email" class="form-input" type="text"></label>
              </div>
            </div>
            <div class="form-error text-error">
              <u>Erreur</u> : Merci de vérifier les informations saisies.
              Si le problème persiste, vous pouvez réessayer plus
              tard ou me laisser un message.
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">
                <i class="icon icon-forward"></i> Envoyer</button>
            </div>
          </form>
        </div>
        <div class="column col-12 location">
          <div class="infos">
            <a name="ou"></a>
            <h3 class="text-center">Où ?</h3>
            <p>Le jardin est situé à Montreuil-Juigné dans le quartier de Béné.</p>
            <ul>
              <li class="addr">
                <i class="icon icon-location"></i>
                <div>
                  Allée Frédéric Chopin<br/>
                  49460 Montreuil-Juigné<br/>
                  <u>Lat</u>: 47.541722<br/><u>Lon</u>: -0.604111
                </div>
              </li>
            </ul>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692.2090888846737!2d-0.603924000000008!3d47.54143799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b43c86b0459972b!2sFran%C3%A7ois+Colas+-+Mara%C3%AEcher+Bio!5e0!3m2!1sen!2sfr!4v1527184649728" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="column col-sm-12 col-5 col-mx-auto contact">
          <h3 class="text-center">Me contacter</h3>
          <form action="sendmail.php" method="post">
            <p>Pour me contacter, vous pouvez passer par
              <a href="mailto:contact@francoiscolas.fr">mail (contact@francoiscolas.fr)</a>
              ou <a href="tel:0695181422">téléphone (06 95 18 14 22)</a>.  Vous pouvez aussi
              utiliser le formulaire ci-dessous, je vous répondrai au plus vite.</p>
            <div class="form-group">
              <label class="form-label">Prénom NOM
                <input name="name" class="form-input" type="text"></label>
            </div>
            <div class="form-group">
              <label class="form-label">Adresse électronique
                <input name="email" class="form-input" type="text"></label>
            </div>
            <div class="form-group">
              <label class="form-label">Sujet
                <input name="subject" class="form-input" type="text"></label>
            </div>
            <div class="form-group">
              <label class="form-label">Message
                <textarea name="message" class="form-input" rows="7"></textarea></label>
            </div>
            <div class="form-error text-error">
              <u>Erreur</u> : Merci de vérifier les informations saisies.
              Si le problème persiste, vous pouvez réessayer plus
              tard ou me laisser un message téléphonique.
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">
                <i class="icon icon-mail"></i> Envoyer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <footer>
    &copy; 2018 - <a href="mailto:contact@francoiscolas.fr">François COLAS</a> - Tous droits réservés.
  </footer>
</body>
</html>
