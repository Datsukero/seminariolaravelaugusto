var i, texto;
var mensagens = [
  "Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated corpse, cricket bat max brucks terribilem incessu zomby. The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus. Zonbi tattered for solum oculi eorum defunctis go lum cerebro. Nescio brains an Undead zombies. Sicut malus putrid voodoo horror. Nigh tofth eliv ingdead.",
  "batatinha quando nasce, fica suja no chão.",
  "roda a roda rodando ela roda e continua rodando a roda...",
  "o mato matou o curioso, porque tava cansado de atirarem pau nele",
  "Hodor. Hodor hodor... Hodor hodor hodor hodor. Hodor, hodor. Hodor. Hodor, hodor, hodor. Hodor hodor?! Hodor, hodor. Hodor. Hodor, hodor - hodor hodor! Hodor, hodor, hodor. Hodor hodor hodor. Hodor. Hodor hodor - hodor... Hodor hodor hodor hodor; hodor hodor? Hodor. Hodor HODOR hodor, hodor hodor... Hodor hodor hodor; hodor hodor?! Hodor hodor - hodor hodor; hodor hodor; hodor hodor? Hodor hodor - hodor hodor... Hodor hodor hodor hodor. Hodor. Hodor hodor HODOR! Hodor HODOR hodor, hodor hodor - hodor hodor! Hodor hodor HODOR! Hodor hodor, hodor. Hodor hodor; hodor hodor; hodor hodor - hodor, hodor, hodor hodor. ",
  "maconha é bom, mas vocês já comeram macarrão com feijão e farofa? É BOM DEMAIS!",
  "Tem figurinha da copa ai bixo?",
  "Mussum Ipsum, cacilds vidis litro abertis. Quem num gosta di mim que vai caçá sua turmis! Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Delegadis gente finis, bibendum egestas augue arcu ut est. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!",
  "Spicy jalapeno bacon ipsum dolor amet boudin meatloaf pancetta alcatra doner t-bone beef. Sirloin kevin tongue kielbasa hamburger ribeye shoulder beef ribs pork belly cupim. Pork beef sirloin, jerky doner turducken ground round tongue leberkas sausage kevin tenderloin ham hock t-bone. Beef ribs strip steak jerky shank andouille porchetta capicola turkey boudin.",
  "Pancetta pork loin strip steak shankle tail pastrami tri-tip flank. Boudin chuck ball tip, frankfurter rump salami turkey venison pork loin ground round tri-tip. T-bone shankle capicola meatloaf shoulder bresaola short loin ham hock corned beef cow. Boudin turkey rump spare ribs short ribs cow bacon. Buffalo boudin venison, shank pastrami burgdoggen cow beef ribs tongue brisket ham leberkas.",
  "Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.",
];

function atualizar() {
  var mLen = mensagens.length;
  texto = "";
  for (i = 0; i < mLen; i++) {
    texto += "<div class='media text-muted pt-3'>" +
      "<p class='media-body pb-3 mb-0 small lh-125 border-bottom border-grey'>";
    texto += mensagens[i];
    texto += "</p> </div>";
  }
  $("#Alerta").removeClass("show");
  document.getElementById("Mensagens").innerHTML = texto;
  
}

function enviar() {
  var novamensagem = document.getElementById("FormTextareaMensagem").value;
  if (novamensagem === "") {
    $("#Alerta").addClass("show");
  } else {
    $("#Alerta").removeClass("show");
    mensagens.push(novamensagem);
    atualizar();
    document.getElementById("FormTextareaMensagem").value = "";

    // AUTO SCROLL PARA A ULTIMA MENSAGEM
    var notChangedStepsCount = 0;
    var scrollInterval = setInterval(function() {
      var element = document.querySelector("footer");
      if (element) {
        // element found
        clearInterval(scrollInterval);
        element.scrollIntoView();
      } else if ((document.body.scrollTop + window.innerHeight) != document.body.scrollHeight) {
        // no element -> scrolling
        notChangedStepsCount = 0;
        document.body.scrollTop = document.body.scrollHeight;
      } else if (notChangedStepsCount > 20) {
        // no more space to scroll
        clearInterval(scrollInterval);
      } else {
        // waiting for possible extension (autoload) of the page
        notChangedStepsCount++;
      }
    }, 50);
  }
}