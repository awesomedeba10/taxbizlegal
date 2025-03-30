@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <section class="container my-80 my-xxl-120 mod-relative">
            <div class="halfs mod-items-start mod-gap-8">
                <div class="about-hero__header">
                    <h1 class="mod-font-semibold mod-leading-semi-loose mod-mb-6">About <span
                            class="text-blue">TaxBixLegal</span></h1>
                    <h3 class="mod-mb-4 mod-leading-light-loose mod-space-semi mod-text-justify mod-text-indent-rem">
                        Welcome to TaxBizLegal.com, your trustworthy resource for compliance, tax, and legal solutions!
                    </h3>
                    <h3 class="mod-mb-4 mod-leading-light-loose mod-space-semi mod-text-justify mod-text-indent-rem">We compress intricate legal, tax, and compliance
                        procedures at TaxBizLegal.com so you can concentrate on expanding your company. Our committed group
                        of experts provides full-service legal advice, taxation, regulatory compliance, and business
                        registration and licensing. For companies of all sizes, from start-ups to well-established
                        corporations, we aim to deliver smooth, dependable, and effective solutions.</h3>
                </div>
                <div>
                    <h3 class="mod-mb-4 mod-leading-light-loose mod-space-semi mod-text-justify mod-text-indent-rem">
                        At TaxBizLegal.com, we understand that navigating legal, tax, and compliance landscapes can be
                        complex and time-consuming. Our team of experienced professionals—lawyers, chartered accountants,
                        and company secretaries—work tirelessly to simplify these processes, ensuring that businesses,
                        whether startups or established enterprises, remain compliant without unnecessary hassle. From
                        company registrations and tax filings to legal documentation and regulatory adherence, we provide
                        comprehensive solutions tailored to your specific needs.
                    </h3>
                    <h3 class="mod-mb-4 mod-leading-light-loose mod-space-semi mod-text-justify mod-text-indent-rem">
                        Committed to transparency, efficiency, and affordability, we aim to be your trusted partner. With a
                        seamless platform, expert guidance, and a customer-first approach, we simplify legal and tax
                        compliance. At TaxBizLegal.com, we offer more than services—we provide peace of mind, so you can
                        focus on growing your business.
                    </h3>
                </div>
            </div>
        </section>

        <section class="container my-8 mod-relative mod-max-w-full">
            <div class="services-extra-container mod-relative mod-py-20 mod-ml-auto mod-mr-auto mod-w-full mod-px-20">
                <div
                    class="mod-flex mod-items-center mod-justify-start mod-flex-nowwrap mod-flex-col mod-mb-12 mod-ml-auto mod-mr-auto sm:mod-py-20">
                    <h1 class="mod-font-black mod-space-loose">
                        We aim to provide <span class="text-blue">Stress-Free Services</span> Handled by <span
                            class="text-blue">Experts</span>
                    </h1>
                </div>
                <div class="services-extra-component">
                    <div class="services-extra-item-wrap">
                        <img src="{{ asset('images/svg/services-extra-business-handshake.svg') }}" loading="lazy"
                            alt="Step 1" class="services-extra-item-image">
                        <h3 class="services-extra-title">Tell Us Your Needs</h3>
                        <p>Simply submit your request, and we’ll take it from there. No paperwork, no confusion.</p>
                    </div>
                    <div id="w-node-step1" class="services-extra-sign-wrap">
                        <img src="{{ asset('images/svg/services-extra-cross.svg') }}" loading="lazy" alt="plus icon"
                            class="services-extra-sign">
                    </div>
                    <div class="services-extra-item-wrap">
                        <img src="{{ asset('images/svg/services-extra-business-doc.svg') }}" loading="lazy"
                            alt="Step 2" class="services-extra-item-image">
                        <h3 class="services-extra-title">We Handle Everything</h3>
                        <p>Our experts manage the entire process—documentation, verification, and submission.</p>
                    </div>
                    <div id="w-node-step2" class="services-extra-sign-wrap">
                        <img src="{{ asset('images/svg/services-extra-equal.svg') }}" loading="lazy" alt="equals icon"
                            class="services-extra-sign">
                    </div>
                    <div class="services-extra-item-wrap">
                        <img src="{{ asset('images/svg/services-extra-business-result.svg') }}" loading="lazy"
                            alt="Step 3" class="services-extra-item-image">
                        <h3 class="services-extra-title">Relax & Get Results</h3>
                        <p>Sit back while we complete the process. You'll be updated every step of the way!</p>
                    </div>
                </div>
            </div>
            <div class="section-bg-wrap is-gradient"></div>
        </section>

        <section class="container my-80 my-xxl-120 mod-relative">
            <div class="module-image-description mod-mx-0">
                <div class="mod-flex mod-flex-wrap mod-items-stretch mod-px-0">
                    <div class="mod-relative mod-w-1/3 mod-bg-white">
                        <img class="module-image-description__image"
                            src="https://assurancevisiteurs.ca/wp-content/uploads/2024/01/Image-sans-fond-notre-mission.webp"
                            alt="Our mission">
                    </div>
                    <div class="module-image-description__content mod-w-1/2 mod-relative mod-p-20 mod-bg-white">
                        <h1 class="mod-font-semibold mod-leading-semi-loose mod-mb-6">
                            Our <span class="text-blue">Mission</span>
                        </h1>
                        <h4 class="mod-leading-light-loose text-blue">
                            At TaxBizLegal.com, our mission is to simplify legal, tax, and compliance processes, making them accessible and hassle-free for businesses of all sizes. We are committed to providing expert guidance with efficiency, transparency, and affordability.
                        </h4>
                        <h4 class="mod-leading-light-loose text-blue">
                            We strive to empower entrepreneurs by handling complex regulations so they can focus on growth. Our dedicated professionals ensure accuracy, reliability, and timely support.
                        <h4 class="mod-leading-light-loose text-blue">
                            By offering seamless digital solutions, we aim to be a trusted partner in every business journey, fostering success through compliance and strategic insights.
                        </h4>
                        <img class="module-image-description__icon"
                            src="https://assurancevisiteurs.ca/wp-content/uploads/2024/01/Icone-tranquilite-d-esprit.svg"
                            alt="The assurance of traveling the world with complete peace of mind">
                    </div>
                </div>
            </div>
        </section>

        <section class="about-values">
            <div class="about-values__container">
                <div class="about-values__wrapper">
                    <div class="module-about appear" data-appear="750">
                        <div class="module-about__container">
                            <div class="module-about__wrapper">
                                <div class="module-about__header">
                                    <h2 class="module-about__title">Nos valeurs</h2>
                                </div>
                                <div class="module-about__items" data-about>
                                    <div
                                        class="module-about__items-even simple-parallax-initialized"
                                        data-about-items
                                        style="will-change: transform; transform: translate3d(0px, -98px, 0px); transition: transform 0.6s cubic-bezier(0, 0, 0, 1);">
                                        <div class="module-about__item">
                                            <img class="module-about__item-icon"
                                                width="50" height="50"
                                                src="https://assurancevisiteurs.ca/wp-content/uploads/2024/01/Icone-nous-innovons.svg"
                                                alt="Nous innovons avec audace">
                                            <div class="module-about__item-content">
                                                <p class="module-about__item-title">Nous
                                                    innovons avec audace</p>
                                                <p class="module-about__item-text">Nous
                                                    encourageons la créativité et
                                                    l’audace pour offrir des produits
                                                    novateurs qui répondent aux
                                                    exigences des clients et
                                                    partenaires.</p>
                                            </div>
                                        </div>
                                        <div class="module-about__item">
                                            <img class="module-about__item-icon"
                                                width="50" height="50"
                                                src="https://assurancevisiteurs.ca/wp-content/uploads/2024/01/Icone-nous-sommes-authentiques.svg"
                                                alt="Nous sommes authentiques et intègres">
                                            <div class="module-about__item-content">
                                                <p class="module-about__item-title">Nous
                                                    sommes authentiques et intègres</p>
                                                <p class="module-about__item-text">Nous
                                                    sommes transparents et vrais. Nous
                                                    agissons avec honnêteté et éthique,
                                                    en fournissant des informations
                                                    claires et compréhensibles.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="module-about__items-odd simple-parallax-initialized"
                                        data-about-items
                                        style="will-change: transform; transform: translate3d(0px, 98px, 0px); transition: transform 0.6s cubic-bezier(0, 0, 0, 1);">
                                        <div class="module-about__item">
                                            <img class="module-about__item-icon"
                                                width="50" height="50"
                                                src="https://assurancevisiteurs.ca/wp-content/uploads/2024/01/Icone-nous-simplifions-la-vie-des-gens.svg"
                                                alt="Nous simplifions la vie des gens">
                                            <div class="module-about__item-content">
                                                <p class="module-about__item-title">Nous
                                                    simplifions la vie des gens</p>
                                                <p class="module-about__item-text">Vous
                                                    êtes au cœur de nos préoccupations.
                                                    Nous nous efforçons de comprendre
                                                    vos besoins spécifiques et d’offrir
                                                    la meilleure solution
                                                    d’assurance.</p>
                                            </div>
                                        </div>
                                        <div class="module-about__item">
                                            <img class="module-about__item-icon"
                                                width="50" height="50"
                                                src="https://assurancevisiteurs.ca/wp-content/uploads/2024/01/Icone-service-de-confiance.svg"
                                                alt="Nous offrons un service de confiance">
                                            <div class="module-about__item-content">
                                                <p class="module-about__item-title">Nous
                                                    offrons un service de confiance</p>
                                                <p class="module-about__item-text">Notre
                                                    équipe dévouée fournit un service
                                                    rapide et efficace. Nous voulons que
                                                    vous puissiez profiter de votre
                                                    séjour en toute tranquillité
                                                    d’esprit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="module-about__empty-space"></div>
                                </div>
                            </div>
                            <img class="module-about__image"
                                src="https://assurancevisiteurs.ca/wp-content/uploads/2024/01/Image-sans-fond-nos-valeurs.webp"
                                alt="Nos valeurs">
                        </div>
                    </div> <div class="about-values__products">
                        <h3 class="about-values__title">Découvrez dès maintenant tous
                            nos produits</h3>
                        <a class="about-values__button"
                            href="produits"
                            target>Découvrir nos produits</a>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
@endsection
