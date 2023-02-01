<?php include_once('inc/header.php'); ?>
<main>
    <section class="background-section">
        <img src="assets/images/background-image.jpeg" alt="">
    </section>
    <div class="main-consult">
        <ul>
            <li><i class="fa-solid fa-shop"></i><a href="#contact">Consultation individuelle au cabinet</a></li>
            <li><i class="fa-solid fa-house"></i><a href="#contact">Consultation individuelle à domicile</a></li>
        </ul>
    </div>
    <div class="main-bilan">
        <ul>
            <li><i class="fa-solid fa-brain"></i><a href="#contact">Bilan cognitif et stimulation cognitive</a></li>
            <li id="main-bilan-li"><i class="fa-solid fa-mug-saucer"></i><a href="#contact">Café des aidants</a></li>
        </ul>
    </div>
    <div class="container-downbelow">
        <div class="container-up">
            <div class="container-up-img">
                <img src="assets/images/salon.jpeg" alt="salon">
            </div>
            <div class="container-up-location">
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <h3>
                    3 chemin de Douville
                    97180 Sainte- Anne
                    GUADELOUPE
                </h3>
            </div>
        </div>
        <div class="container-middle">
            <div class="container-middle-title">
                <h3>Pourquoi consulter ou conseiller à un proche de consulter ?</h3>
            </div>
            <div class="container-middle-para">
                <p>Il peut être difficile d'affronter des problèmes psychologiques et d'en discuter. La peur de
                    l'échec, de l'humiliation ou de la désapprobation peut vous retenir. Cependant, en ignorant ces
                    problèmes, ils peuvent s'aggraver et dominer votre vie. Consultez un psychologue à domicile si
                    vous préférez rester chez vous ou si vous manquez de temps pour des déplacements réguliers.
                    Cette option vous offre le confort de votre maison sans soucis de transport. Si vous avez un
                    handicap ou une perte d'autonomie, il est important de recourir à un psychologue à domicile
                    pour une organisation pratique de votre séance
                </p>
            </div>
        </div>
        <div class="container-down"><button id="bouton-newsletter">Newsletter</button></div>
        <div class="row justify-content-center" id="container-form" style="display: none;">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form id="contactForm" method="POST" action="">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="nom" type="text" placeholder="Entrer votre nom..." data-sb-validations="required" name="nom" wtx-context="0EA2D5BC-E681-4360-8BC5-6A67A98D90CB">
                            <label for="nom">Nom</label>
                            <div class="invalid-feedback" data-sb-feedback="nom:required">
                                Un nom est requis.
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="prenom" type="text" name="prenom" placeholder="Entrer votre nom..." data-sb-validations="required" wtx-context="F0A4B660-267D-4AD4-BA49-1B3573971DC3">
                            <label for="prenom">Prénom</label>
                            <div class="invalid-feedback" data-sb-feedback="prenom:required">
                                Un prénom est requis.
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" name="email" wtx-context="74E6D0D3-A4B7-4773-80F1-BAA09A782BF1">
                            <label for="email">Adresse email </label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">
                                Un email est requis.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">
                                Email n'est pas valide.
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="message" id="message" placeholder="Entrer votre message..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">
                                Un message est requis.
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">
                                Erreur dans l'envoie du message!
                            </div>
                        </div>
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit" name="envoyer">
                            Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once('inc/footer.php'); ?>