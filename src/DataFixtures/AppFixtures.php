<?php

namespace App\DataFixtures;

use App\Entity\Page;
use App\Entity\PageCategory;
use App\Entity\SubService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $services = [
            [
                "name" => "Audit",
                "resume" => "L'audit est un examen critique mené par un professionel compétent et independant en vue de porter un jugement sur la manière dont est exercé une activité et sur les informations élaborées par les responsables par rapport à des critères d'appréciations relatifs à cette activité.",
                "icon" => "flaticon-analysis",
                "title" => "Nous menons des missions d'audit",
                "text" => "
                    - Audit légal et commissariat aux comptes
                    - Audit de gestion
                    - Audit fiscal 
                    - Audit social
                    - Audit organisationnel 
                    - Audit de conformité 
                    - Audit d'acquisition 
                    - Audit comptable et contractuel
                "
            ],
            [
                "name" => "Expertise Comptable",
                "resume" => "L'Expert Comptable assiste les clients dans la tenue et/ou la supervision de leur comptabilité ; nous prenons en charge l’ensemble de vos obligations comptables et fiscales. En matière de comptabilité générale, notre mission consiste à tenir, superviser, finaliser la tenue de vos comptes pour que vous puissiez consacrer vos talents et votre énergie au succès de votre entreprise.",
                "icon" => "flaticon-diagram",
                "title" => "",
                "text" => "
                    - Accompagnement à la création d'entreprise ( diagnostic du projet de création et conseils)
                    - Réalisation du business plan
                    - Accompagnement pour la recherche de financement 
                    - Tenue de comptabilité 
                    - Assistance comptable 
                    - Révision de comptabilité 
                    - Etablissement des comptes annuels 
                    - Etablissement des comptes prévisionnels 
                    - Réalisation des inventaires physiques 
                    - Evaluation d'entreprise 
                    - Expertise de gestion et gestion financière 
                    - Mise en place des livres légaux 
                "
            ],
            [
                "name" => "Conseils juridique",
                "resume" => "Notre rôle est de vous accompagné avec nos spécialistes lors de la création de votre société dans le courant de l'activité en cas de restructuration et modification et lors des procédures judiciaires relatives au redressement, liquidation, dissolution , etc ...",
                "icon" => "flaticon-team",
                "title" => "Nous faisons du sécrétariat juridique et de l'expertise judiciaire",
                "text" => "
                    - Expertise Judiciaire 
                    - Rédaction des statuts 
                    - Rédaction des rapports de gestion
                    - Organisation et tenue des assemblées et diverses réunions dans les entreprises 
                    - Création des registres et livres légaux
                    - Modifications
                    - Recouvrement de créances 
                    - Liquidation 
                    - Restructuration 
                    - Redressement judiciaire
                "
            ],
            [
                "name" => "Conseils fiscal",
                "resume" => "Un conseiller fiscal aide les particuliers et entreprises à s'y retrouver dans la réglementation fiscale, pour leur permettre de : les assister dans leurs opérations et l'établissement de leurs déclarations pour être en règle; argumenter avec l'administration fiscale en cas de litige ou de contentieux. Le rôle du fiscaliste est de veiller à la juste application du cadre juridique et fiscal conformément à la législation en cours.",
                "icon" => "flaticon-investor",
                "title" => "Nous conseillons et accompagnons les entreprises sur le plan fiscal",
                "text" => "
                    - Etablissement des déclarations fiscales
                    - Abonnement fiscal
                    - Optimisation fiscal 
                    - Assistance en matière de contrôle et du contentieux fiscal
                "
            ],
            [
                "name" => "Conseils social",
                "resume" => "Expert dont la tâche essentielle est l'assistance aux personnes confrontées à des difficultés sociales, économiques, professionnelles, ou encore psychologiques, le conseiller social exerce une profession aux missions très diverses.",
                "icon" => "flaticon-employee",
                "title" => "Nous conseillons et accompagnons les entreprises sur le plan social",
                "text" => "
                    - Accompagnement au recrutement du personnel 
                    - Contrat de travail 
                    - Constitution du dossier social
                    - Traitement de la paie
                    - Registres obligatoires
                    - Déclarations sociales
                    - Traitement social du départ du salarié 
                    - Evaluation des salariés 
                    - Bilan social
                    - Diagnostic social 
                    - Evaluation des engagements de retraite
                "
            ],
            [
                "name" => "Conseils en Gestion",
                "resume" => "La comptabilité de gestion permet de prendre des décisions autant présentes que futures pour l’entreprise, de récolter rapidement de l’information et des données cohérentes et flexibles, d’obtenir des rapports sectoriels précis sur les biens et services, les clients et les employés. La comptabilité de gestion a pour but d’analyser les coûts (directs, indirects, incorporables, non incorporables, fixes et variables) afin d’expliquer le résultat. Elle détermine pour chaque dépense et chaque charge, quelle part revient à tel produit et à telle activité de l’entreprise. Ainsi, les déficits et les dépenses incontrôlées sont évités au minimum.",
                "icon" => "flaticon-money",
                "title" => "Nous encadrons les entreprises dans leur gestion",
                "text" => "
                    - Implémentation du contrôle de gestion
                    - Mise en place des tableaux de bord 
                    - Mise en place  de la comptabilité de gestion
                    - Etablissement des budgets
                    - Outils de suivi budgétaire 
                    - Externalisation de l'audit interne
                    - Accompagnement à l'établissement des comptes  en IFRS
                    - Etats consolidés 
                    - Test de dépréciation 
                    - Accompagnement en restructuration ( fusion, scission,  apport partiel d'actif) 
                    - Redaction de manuel de procédures comptables et financiers 
                    - Prix de transfert
                "
            ],
            [
                "name" => "Conseils en finances",
                "resume" => "On attend d'un conseiller financier l'assistance de particuliers ou de professionnels dans la gestion de leur patrimoine financier. Pour cela, il devra délivrer des recommandations et des conseils de placements financiers et/ou de bonne gestion de porte-feuilles clients en suivant au jour le jour le cours de la Bourse ainsi que l'évolution des principaux produits financiers disponibles sur le marché. Il devra également effectuer des ventes de produits auprès de sa clientèle tout en assurant la promotion des nouveaux produits financiers. Il pourra être amené à négocier des taux bancaires et des transactions.",
                "icon" => "flaticon-wallet",
                "title" => "Nous prodiguons des conseils en finances",
                "text" => "
                    - Business plan et compte d'exploitation prévisionnel 
                    - Recherche de financement 
                    - Levée de fonds
                    - Plan de financement 
                    - Evaluation d'entreprise 
                    - Diagnostic financier
                    - Plan de trésorerie
                "
            ],
            [
                "name" => "Conseils en gestion et informatique",
                "resume" => "L’avantage de faire appel à un conseiller informatique indépendant, est que vous pouvez être sûr que le consultant pense uniquement à la solution qui servirait le mieux votre entreprise. Un consultant vous donne des conseils objectifs et valorisant, à court et à long terme. Une fois que vous avez une analyse objective des solutions informatiques qui soutiennent le mieux votre entreprise, vous pouvez toujours choisir un partenaire informatique représentant le système que vous avez décidé de mettre en œuvre. Les systèmes informatiques sont essentiels à votre entreprise et représentent, en termes de temps et d’argent, un investissement important.",
                "icon" => "flaticon-technical-support",
                "title" => "Nous vous accompagnons en informatique de gestion",
                "text" => "
                    - Installation de logiciels comptables
                    - Installation de logiciels d'etats financiers
                "
            ],
            [
                "name" => "Visa des états financiés",
                "resume" => "",
                "icon" => "flaticon-employee",
                "title" => "Visa des états financiés",
                "text" => "
                    - Accompagnement à l'établissement des comptes  en IFRS
                    - Etats consolidés 
                    - Test de dépréciation 
                    - Accompagnement en restructuration ( fusion, scission,  apport partiel d'actif) 
                    - Redaction de manuel de procédures comptables et financiers 
                    - Prix de transfert
                "
            ]
        ];

        $subServices = [
            [
                "Audit légal et commissariat aux comptes",
                "Audit de gestion",
                "Audit fiscal",
                "Audit social",
                "Audit organisationnel",
                "Audit de conformité",
                "Audit d'acquisition",
                "Audit comptable et contractuel",
            ],
            [
                "Accompagnement à la création d'entreprise ( diagnostic du projet de création et conseils)",
                "Réalisation du business plan",
                "Accompagnement pour la recherche de financement",
                "Tenue de comptabilité",
                "Assistance comptable",
                "Révision de comptabilité",
                "Etablissement des comptes annuels",
                "Etablissement des comptes prévisionnels",
                "Réalisation des inventaires physiques",
                "Evaluation d'entreprise",
                "Expertise de gestion et gestion financière",
                "Mise en place des livres légaux "
            ],
            [
                "Expertise Judiciaire",
                "Lors la création,le choix de la forme juridique, rédaction de contrat de société, démarche administratives de création de société ",
                "Rédaction des rapports de gestion",
                "Organisation et tenue des assemblées générales et la rédaction des procès verbaux d'assemblées",
                "Tenues des registres et livres légaux obligatoires",
                "Modifications, restructuration",
                "Recouvrement de créances",
                "Les procédueres judiciaires (redressement, liquidation, réglement préventif, dissolution)",
                "rédaction de convention"
            ],
            [
                "Etablissement des déclarations fiscales",
                "Abonnement fiscal",
                "Optimisation fiscal",
                "Assistance en matière de contrôle et du contentieux fiscal"
            ],
            [
                "Accompagnement au recrutement du personnel",
                "Contrat de travail",
                "Constitution du dossier social",
                "Traitement de la paie",
                "Registres obligatoires",
                "Déclarations sociales",
                "Traitement social du départ du salarié",
                "Evaluation des salariés",
                "Bilan social",
                "Diagnostic social",
                "Evaluation des engagements de retraite"
            ],
            [
                "Implémentation du contrôle de gestion",
                "Mise en place des tableaux de bord",
                "Mise en place  de la comptabilité de gestion",
                "Etablissement des budgets",
                "Outils de suivi budgétaire",
                "Externalisation de l'audit interne",
                "Accompagnement à l'établissement des comptes  en IFRS",
                "Etats consolidés",
                "Test de dépréciation",
                "Accompagnement en restructuration ( fusion, scission,  apport partiel d'actif)",
                "Redaction de manuel de procédures comptables et financiers",
                "Prix de transfert"
            ],
            [
                "Business plan et compte d'exploitation prévisionnel",
                "Recherche de financement",
                "Levée de fonds",
                "Plan de financement",
                "Evaluation d'entreprise",
                "Diagnostic financier",
                "Plan de trésorerie",
                "Reporting"
            ],
            [
                "Installation de logiciels comptables",
                "Installation de logiciels d'etats financiers"
            ],
            [
                "Installation de logiciels comptables",
                "Installation de logiciels d'etats financiers",
                "Conception et elaboration de logiciel comptables",
                "Conception et installation de le logiciel de productions des états financiers",
                "Conception et productions de logiciel de gestion de stock",
                "Conception et elaboration de gestion des immobilisations",
                "Conception et elaboration de logiciel de paie"

            ]
        ];

        $PageCategory = (new PageCategory())
            ->setName("Services");
        $manager->persist($PageCategory);
        $i = 0;
        foreach ($services as $element) {
            $Page = (new Page())
                ->setName($element['name'])
                ->setResume($element['resume'])
                ->setTitle($element['title'])
                ->setText($element["text"])
                ->setIcon($element["icon"])
                ->addCategory($PageCategory);
            $manager->persist($Page);

            foreach ($subServices[$i] as $p) {
                $subService = (new SubService())
                    ->setName($p)
                    ->setPage($Page);
                $manager->persist($subService);
            }
            $i = $i + 1;
            unset($Page);
        }


        $manager->flush();
    }
}
