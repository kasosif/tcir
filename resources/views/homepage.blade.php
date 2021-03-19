@extends('layout')
@section('title') {{__('Home')}} @endsection
@section('csspage')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

@endsection
@section('content')
    <section class="medium-gap full-width-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget-sidebar find-on-map">
                        <div class="widget-header">
                            <h4>{{__('Introduction')}}</h4>
                        </div>
                        <div class="widget-container">
                            @if(app()->getLocale() == 'en')
                                <p>
                                    The Tunisian Council for International Relations is a Think-Tank set up in accordance with the provisions of Decree No. 88 of 2011 of September 24, 2011 relating to the organization of Associations.
                                </p>
                                <p>
                                    The foundation of this Council is part of the strengthening of the democratic process in Tunisia. It aims at establishing a space that brings together all political and intellectual schools of thoughts willing to study and debate regional and international issues as well as the geostrategic and economic developments taking place around Tunisia. The Council is open for elites, whether political, academic, diplomatic, experts or representatives of the civil society, to share their points of view and have them fully and freely participate in the public debate on international relations and foreign policy orientations. Thus contributing through their recommendations to strengthening Tunisia's positions as well as its positioning in the Arab, African and Mediterranean spheres.
                                </p>
                                <p>
                                    The Council has among its members a selection of Tunisian personalities who have held high-level public positions in Tunisia, as well as a number of seasoned diplomats, experts and media professionals interested in international relations and strategic issues. The Council also includes businessmen and women and public figures seeking to advance the national economy, whether through the promotion of exports, the attraction of foreign investment or the development of partnerships with foreign institutions in public and private sectors.
                                </p>
                                <p>
                                    The Council also welcomes the cooperation with foreign personalities and experts interested in the Maghreb, the Mediterranean and the Middle East, with a view to opening up avenues for common reflection and carrying out studies and research on ongoing developments in these regions.
                                </p>
                                <p>
                                    The Tunisian Council for International Relations works to achieve the following objectives:
                                </p>
                                <ul>
                                    <li>
                                        Observing and analyzing international and strategic issues with a view to offering a different reading grid and proposing innovative solutions to regional conflicts in the Mediterranean, the Maghreb and the Middle East.
                                    </li>
                                    <li>
                                        Creating an independent and diversified center of expertise, open to cooperation and interaction with universities and similar study centers in Tunisia and abroad, as well as with economic bodies and civil society.
                                    </li>
                                    <li>
                                       Building relations of cooperation and partnership with regional and international organizations, as well as providing space for foreign experts and officials visiting Tunisia to give lectures and conferences on international relations, geostrategic issues and prospects for cooperation between their countries and Tunisia.
                                    </li>
                                </ul>
                            @endif
                            @if(app()->getLocale() == 'fr')
                                <p>
                                    Le Conseil Tunisien des Relations Internationales est un forum de réflexion créé conformément aux dispositions du Décret-Loi n ° 88 de 2011 du 24 septembre 2011 relatif à l'organisation des Associations.
                                </p>
                                <p>
                                    La mise en place de ce Conseil s'inscrit dans le cadre du renforcement de la transition démocratique en offrant un espace rassemblant tous les courants politiques et intellectuels afin d’examiner et de débattre des enjeux régionaux et internationaux, et des évolutions se produisant autour de la Tunisie aux niveaux géostratégique et économique. Ce Conseil ouvre la voie aux élites, qu’elles soient politiques, universitaires, diplomatiques, ainsi qu’aux experts et aux représentants de la société civile pour faire entendre leurs points de vue et contribuer pleinement et librement au débat public sur les relations internationales et les orientations de la politique étrangère du pays, formulant ainsi leurs des recommandations en vue de renforcer les positions de la Tunisie et d’améliorer sa place dans ses sphères d’appartenance arabe, africaine et méditerranéenne.
                                </p>
                                <p>
                                    Le Conseil compte parmi ses membres une sélection de personnalités tunisiennes ayant occupé des postes de responsabilité de haut niveau dans le pays, ainsi qu'un certain nombre de diplomates, d’experts et de professionnels des médias intéressés par les relations internationales et les questions stratégiques. Le Conseil comprend aussi des hommes d'affaires et des personnalités publiques œuvrant en vue de faire progresser l’économie nationale, à travers la promotion des exportations, l’attraction des investissements étrangers et le développement des partenariats avec l'étranger dans les secteurs public et privé.
                                </p>
                                <p>
                                    Le Conseil souhaiterait également inviter à l’échange avec des personnalités et des experts étrangers intéressés par le Maghreb, la Méditerranée et le Moyen-Orient, explorant de nouvelles pistes de réflexion et en menant ensemble des études et recherches sur l’évolution et les développements que connaissent ces régions.
                                </p>
                                <p>
                                    Le Conseil Tunisien des Relations Internationales œuvre à la réalisation des objectifs suivants :
                                </p>
                                <ul>
                                    <li>
                                        Observer et analyser les enjeux internationaux et stratégiques en vue d’offrir une grille de lecture différente et proposer des solutions innovantes aux conflits régionaux en Méditerranée, au Maghreb et au Moyen-Orient.
                                    </li>
                                    <li>
                                        Créer un centre d'expertise indépendant et diversifié, ouvert à la coopération et à l'interaction avec les universités et les centres similaires d'études et de réflexion en Tunisie et à l'étranger, ainsi qu'avec les instances économiques et les associations de la société civile.
                                    </li>
                                    <li>
                                        Établir des relations de coopération et de partenariat avec les Organisations Régionales et Internationales, et fournir un espace aux experts et responsables étrangers en visite en Tunisie pour donner des conférences et s'exprimer sur les relations internationales, les questions géostratégiques et les perspectives de coopération entre leurs pays et la Tunisie.
                                    </li>
                                </ul>
                            @endif
                                @if(app()->getLocale() == 'ar')
                                    <p>
                                        المجلس التونسي للعلاقات الدولية منبر فكري تم تأسيسه وفقا لأحكام المرسوم عدد 88 لسنة 2011 المؤرخ في 24 سبتمبر 2011 المتعلق بتنظيم الجمعيات، وقد صدر الإعلان القانوني بتكوينه بالرائد الرسمي للجمهورية التونسية عدد 83 بتاريخ 13 نوفمبر 2020.
                                    </p>
                                    <p>
                                        ويندرج إنشاء هذا المجلس في إطار تعزيز الانتقال الديمقراطي عبر إرساء فضاء يجمع كل التيارات السياسية والفكرية من أجل دراسة ونقاش القضايا الإقليمية والدولية، وما يحيط بتونس من تطورات على المستويات الجيوستراتيجية والاقتصادية وفتح المجال أمام ممثلي النخبة من سياسيين وأكاديميين وديبلوماسيين وخبراء ومجتمع مدني للتعبير عن آرائهم ورؤاهم بكل حرية والمشاركة في النقاش العام حول العلاقات الدولية وتوجهات السياسة الخارجية، وتقديم المقترحات الكفيلة بتعزيز موقع تونس ومواقفها في فضاءات انتمائها العربية الإفريقية والمتوسطية.</p>
                                    <p>
                                        ويضم المجلس نخبة من الشخصيات التونسية التي تقلدت مناصب عليا في الدولة وكذلك عدد من الديبلوماسيين والمختصين والإعلاميين المهتمين بالعلاقات الدولية والمسائل الإستراتيجية وكذلك رجال الأعمال، والاقتصاد وشخصيات عامة تسعى للنهوض بالاقتصاد الوطني من خلال تعزيز الصادرات، واستقطاب الاستثمارات الخارجية  ودفع وتوسيع الشراكات مع الخارج في القطاعين العام والخاص.</p>
                                    <p>
                                        كما يرحب المجلس بالتعاون مع الشخصيات والخبراء الأجانب المهتمين بالمنطقة المغاربية والمتوسط والشرق الأوسط، ويفتح مجال اهتماماته لمساهماتهم وإثراء البحوث والدراسات حول التطورات الجارية في تلك المناطق.</p>
                                    <p>
                                        ومن أهداف المجلس التونسي للعلاقات الدولية:</p>
                                    <ul>
                                        <li>
                                            المساهمة في رصد ونقاش القضايا الدولية والإستراتيجية وطرح قراءة مختلفة للرهانات الدولية واقتراح حلول مبتكرة للخلافات والنزاعات التي تشهدها الساحة الإقليمية في المتوسط والمغرب العربي والشرق الأوسط.</li>
                                        <li>
                                            خلق مركز للخبرة يتميز بالاستقلال والتنوع منفتح على التعاون والتفاعل مع الجامعات ومراكز الدراسات والتفكير المماثلة في تونس والخارج ومع الهيئات الاقتصادية ومؤسسات المجتمع المدني.</li>
                                        <li>
                                        إقامة علاقات تعاون وشراكة مع المنظمات الإقليمية والدولية، وتوفير فضاء للخبراء والمسئولين الأجانب الذين يزورون تونس لتقديم المحاضرات والتحدث في قضايا العلاقات الدولية والمسائل الجيوستراتيجية وآفاق التعاون بين بلدانهم وتونس.    </li>
                                    </ul>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-me about-version-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget-sidebar about-me">
                        <div class="widget-header">
                            <h4>{{__('Steering Committee')}}</h4>
                        </div>
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="widget-sidebar about-me">
                                        <div class="widget-content" style="text-align: center">
                                            <img style="width: 200px;height: 200px;" src="{{asset('images/cv4.jpeg')}}" alt="">
                                            <h6>{{__('Khemais Jehanaoui')}}</h6>
                                            <h5>{{__('Founder')}}</h5>
                                            <a onclick="showCv('cv4Modal')" style="color:green;cursor: pointer;"><i class="fa fa-file"></i> {{__('View Resume')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="widget-sidebar about-me">
                                        <div class="widget-content" style="text-align: center">
                                            <img style="width: 200px;height: 200px;" src="{{asset('images/cv1.jpeg')}}" alt="">
                                            <h6>{{__('Ahmed Abderraouf OUNAIES')}}</h6>
                                            <h5>{{__('Vice President')}}</h5>
                                            <a onclick="showCv('cv1Modal')" style="color:green;cursor: pointer;"><i class="fa fa-file"></i> {{__('View Resume')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="widget-sidebar about-me">
                                        <div class="widget-content" style="text-align: center">
                                            <img style="width: 200px;height: 200px;" src="{{asset('images/cv3.jpeg')}}" alt="">
                                            <h6>{{__('Mondher Dhraïef')}}</h6>
                                            <h5>{{__('Secretary General')}}</h5>
                                            <a onclick="showCv('cv3Modal')" style="color:green;cursor: pointer;"><i class="fa fa-file"></i> {{__('View Resume')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="widget-sidebar about-me">
                                        <div class="widget-content" style="text-align: center">
                                            <img style="width: 200px;height: 200px;" src="{{asset('images/cv5.jpeg')}}" alt="">
                                            <h6>{{__('Mohsen Boujbel')}}</h6>
                                            <h5>{{__('Treasurer')}}</h5>
                                            <a onclick="showCv('cv5Modal')" style="color:green;cursor: pointer;"><i class="fa fa-file"></i> {{__('View Resume')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="widget-sidebar about-me">
                                        <div class="widget-content" style="text-align: center">
                                            <img style="width: 200px;height: 200px;" src="{{asset('images/cv2.png')}}" alt="">
                                            <h6>{{__('Habib Essid')}}</h6>
                                            <h5>&nbsp;</h5>
                                            <a onclick="showCv('cv2Modal')" style="color:green;cursor: pointer;"><i class="fa fa-file"></i> {{__('View Resume')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="widget-sidebar about-me">
                                        <div class="widget-content" style="text-align: center">
                                            <img style="width: 200px;height: 200px;" src="{{asset('images/cv6.jpeg')}}" alt="">
                                            <h6>{{__('Abdessalem Hatira')}}</h6>
                                            <h5>&nbsp;</h5>
                                            <a onclick="showCv('cv6Modal')" style="color:green;cursor: pointer;"><i class="fa fa-file"></i> {{__('View Resume')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="cv1Modal" tabindex="-1" role="dialog" aria-labelledby="cv1Modal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{__('Ahmed Abderraouf OUNAIES')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Né à Tunis le 25 janvier 1936</p>
                    <p>Marié</p>
                    <h5>ETUDES</h5>
                    <ul>
                        <li> Collège  SADIKI - Diplôme du Collège Sadiki</li>
                        <li> SORBONNE - Licence et Diplôme d’études supérieures de Philosophie</li>
                        <li>  Institut des Hautes Etudes Internationales - Genève (Diplôme Carnegie)</li>
                    </ul>
                    <h5>CARRIERE  -  Ministère  des  Affaires  Etrangères</h5>
                    <h6>1962 - 1996</h6>
                    <h6>Admis à la retraite  (février 1996)</h6>
                    <h5>FONCTIONS</h5>
                    <ul>
                        <li><b>Administration Centrale</b></li>
                        <li>Chef de Division -  janvier 1965</li>
                        <li>Attaché  au  Cabinet  du  Ministre -  mai 1976</li>
                        <li>Directeur  Afrique-Asie - décembre 1978</li>
                        <li>Directeur  des  Etudes  et de la Planification -  janvier 1991</li>
                        <li>Directeur  Général  Amériques-Asie  -  janvier 1992</li>
                        <li><b>Ministre des Affaires Etrangères – janvier 2011</b></li>
                        <li><b>Missions Diplomatiques</b></li>
                        <li>Conseiller, Ambassade de Tunisie à  Paris et Délégué Adjoint auprès de l’UNESCO - janvier 1968</li>
                        <li> Conseiller  à  l’Ambassade de Tunisie à  Moscou - juin 1972</li>
                        <li>Ambassadeur  Représentant Permanent Adjoint auprès des Nations Unies (New York - janvier 1980)</li>
                        <li> Ambassadeur  à  New Delhi (Inde) -  février 1981</li>
                        <li>
                            Accrédité  concurremment
                            <ul>
                                <li>à  Colombo (Sri Lanka) -  décembre 1981</li>
                                <li>à  Hanoi (Vietnam) -  avril 1983</li>
                                <li>à  Malé  (Maldives) -  février 1984</li>
                            </ul>
                        </li>
                        <li>Ambassadeur  à  Moscou  (URSS) -  avril 1987</li>
                        <li><b>Décoration</b> Grand Officier de l’Ordre du Mérite Diplomatique</li>
                        <li><b>Collaboration  Scientifique</b></li>
                        <li>Ecole Nationale d’Administration - Tunis (1964 - 1997)</li>
                        <li>Institut Tunisien des Etudes Stratégiques (1997 - 1998)</li>
                        <li>Université de Tunis (1993-2020)</li>
                        <li><b>Activités  sociales</b></li>
                        <li>Association Tunisienne pour les Nations Unies (Président d’Honneur)</li>
                        <li>Club Bochra Al Khayr (Président)</li>
                        <li>Association des Consuls Honoraires de Tunisie (Président d’Honneur)</li>
                        <li>Association des Anciens Elèves du Collège Sadiki</li>
                        <li>Membre honorifique de l’Académie des Sciences, des Lettres et des Arts</li>
                        <li><b>Publications</b></li>
                        <li> Etudes Internationales (Tunis) - depuis 1985</li>
                        <li>Revue Marocaine d’Etudes Internationales - depuis 1999</li>
                        <li>Défense Nationale (Paris) – 2001 – 2002 – 2003 – 2011 – 2013</li>
                        <li>Confluences (Paris) – 1997 – 2003 & Revue AGIR (Paris) – 2012</li>
                        <li>Centre de Publication Universitaire (Tunis) – 2008</li>
                        <li>Académie Tunisienne des Sciences, des Lettres et des Arts – 2009</li>
                        <li>En collaboration : *Histoire Générale de la Tunisie, Tome IV, Tunis – 2010 *Tunisie 2040, Tunis – 2012</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cv2Modal" tabindex="-1" role="dialog" aria-labelledby="cv2Modal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{__('Habib Essid')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Biographie</h5>
                    <ul>
                        <li>M. Habib Essid , né le 1 juin 1949, à Sousse, est titulaire d'une maitrise en sciences économiques de la faculté de droit et des sciences économiques de Tunis et d'un diplôme d'ingénieur agricole spécialité « Economie agricole » de l'université Minnesota (USA).</li>
                        <li>M. Essid a entamé sa carrière professionnelle en tant qu'ingénieur depuis 1992. Il a occupé plusieurs fonctions au sein du ministère de l'agriculture où il a été chargé, de 1975 à 1980, des études d'irrigation agricole au sein de la direction générale du génie rural avant d'être nommé président directeur général de l'office de mise en valeur des périmètres irrigués de Gafsa et du Jérid de 1980 à 1988.</li>
                        <li>Il a été nommé, également, délégué régional du développement agricole à Kairouan, puis directeur général, délégué du développement agricole de Bizerte en 1989.</li>
                        <li>M. Essid a été nommé, aussi, chef de cabinet du ministre de l'agriculture de l'année 1993 à 1997, avant d'occuper, le même poste au ministre de l'intérieur jusqu'au 2001.
                        <li>En janvier 2001, M. Habib Essid a occupé le poste de Secrétaire d'Etat auprès du ministre de l'agriculture chargé de la pêche puis Secrétaire d'Etat auprès du ministre de l'agriculture, de l'environnement et des ressources hydrauliques chargé de l'environnement de septembre 2002 jusqu'au juin 2003.</li>
                        <li>Il a, également, occupé le poste de Président Directeur Général de la société du Transport par pipeline à travers le Sahara (TRAPSA) de juin 2003 à novembre 2004.</li>
                        <li>De 2004 à 2010, M. Habib Essid a occupé le poste de directeur exécutif du conseil oléicole international dont le siège est à Madrid (Espagne).</li>
                        <li>De février 2011 jusqu'au mars courant, Il a été nommé conseiller auprès du premier ministre dans le gouvernement provisoire.</li>
                        <li>En mars 2011, Essid a été choisi pour le poste de ministre de l'Intérieur en remplacement de Farhat Rajhi dans le gouvernement de Béji Caïd Essebsi avant d’être nommé en décembre, conseiller auprès du chef du gouvernement, Hamadi Jebali, chargé des Affaires sécuritaires.</li>
                        <li>M. Essid a été nommé chef du gouvernement tunisien du 6 février 2015 au 27 août 2016.</li>
                        <li>M. Essid a été nommé le 06 août 2018 ministre conseiller spécial auprès du président de la République en charge des affaires politiques.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cv3Modal" tabindex="-1" role="dialog" aria-labelledby="cv3Modal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{__('Mondher Dhraïef')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Informations Génerales</h5>
                    <ul>
                        <li>NOM : DHRAÏEF</li>
                        <li>Prénoms : Mohamed Mondher</li>
                        <li>Date et lieu de naissance : 07/01/1955 à Tunis</li>
                        <li>Téléphone : 22 924 994</li>
                        <li>Courriel : mondher.dhraief@gmail.com</li>
                    </ul>
                    <h5>Formation universitaire</h5>
                    <ul>
                        <li>1980: Diplôme de l’Académie de Droit International de la Haye.</li>
                        <li>1977: Diplôme de la Faculté de Droit, des Sciences Politiques et Économiques de Tunis,
                            spécialité Droit public.</li>
                    </ul>
                    <h5>Expériences professionnelles dans la Diplomatie : 1978-2019</h5>
                    <ol>
                        <li><b>En Tunisie</b>
                            <ul>
                                <li>Diverses responsabilités au Ministère des Affaires Étrangères en qualité de Directeur.</li>
                                <li>Directeur Général des Affaires juridiques.</li>
                                <li>Chargé de mission auprès du Cabinet du Ministre des Affaires Étrangères.</li>
                                <li>Directeur Général de l’Institut Diplomatique.</li>
                            </ul>
                        </li>
                        <li>
                            <b>À l’Étranger</b>
                            <ul>
                                <li>Membre de plusieurs délégations tunisiennes à l’étranger : négociations de
                                    conventions internationales (de coopérations économiques, financières,
                                    commerciales et juridiques).</li>
                                <li> Représentant de la Tunisie dans plusieurs conférences régionales et internationales :
                                    UMA, Ligue des États Arabes, Union Européenne, Nations Unies...</li>
                                <li> Chargé de plusieurs responsabilités au sein des Ambassades de Tunisie, en particulier
                                    à Rabat, Alger et Damas.</li>
                                <li> Ambassadeur de Tunisie au Qatar.</li>
                            </ul>
                        </li>
                    </ol>
                    <h5>Titres et distinctions honorifiques nationales et internationales</h5>
                    <ul>
                        <li>titulaire de plusieurs
                            décorations notamment la Médaille du Travail et l’Ordre de la République.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cv4Modal" tabindex="-1" role="dialog" aria-labelledby="cv4Modal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{__('Khemais Jehanaoui')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @if(app()->getLocale() == 'en')
                    <div class="modal-body">
                        <h5>Political career</h5>
                        <ul>
                            <li>Minister of Foreign Affairs of the Republic of
                                Tunisia (from January 2016 to October 2019)</li>
                            <li>Diplomatic and Foreign Affairs Advisor to the late President of the Republic, Mr. Beji Caid Essebsi, (from January 2015 to January 2016)</li>
                            <li>Secretary of State for Foreign Affairs from July 2011 to April 2012</li>
                        </ul>
                        <h5>Diplomatic Career</h5>
                        <ul>
                            <li>
                                Ambassador Extraordinary and Plenipotentiary of the Republic of Tunisia to the Russian Federation, jointly accredited to the Ukraine and former Republics of the Soviet Union, (from December 2007 to June 2011)
                            </li>
                            <li>
                                Ambassador Extraordinary and Plenipotentiary of the Republic of Tunisia to the Court of Saint James’s (United Kingdom) jointly accredited to the Republic of Ireland (from March 1999 to October 2004)

                            </li>
                            <li>
                                General Director of the Diplomatic Institute for Training and Studies (2013)
                            </li>
                            <li>
                                General Director for Political and Economic Corporation with Europe and the European Union (from 2006 to 2007)
                            </li>
                            <li>
                                Director and Chief of staff of the Minister of Foreign Affairs (from 2004 to 2006)
                            </li>
                            <li>
                                Special Adviser to the Minister of Foreign Affairs in charge of policy planning (from 1996 to 1998)
                            </li>
                            <li>
                                Head of the Tunisian interests Office in Tel-Aviv (from May 1996 to July 1997)
                            </li>
                            <li>
                                Counsellor at the Embassy of the Republic of Tunisia in Seoul (1991-1994)
                            </li>
                            <li>
                                Counsellor at the Embassy of the Republic of Tunisia in Moscow (1987-1988)
                            </li>
                            <li>
                                First Secretary at the Embassy of the Republic of Tunisia in New Delhi (1982-1986)
                            </li>
                        </ul>
                        <h5>Background </h5>
                        <ul>
                            <li>
                                Master’s Degree in Public Law
                            </li>
                            <li>
                                Post-Graduate Degree in political sciences and international relations
                            </li>
                            <li>
                                National Defense College (1997)
                            </li>
                            <li>
                                Barrister-at-law (1978)
                            </li>
                        </ul>
                        <h5>Honours</h5>
                        <ul>
                            <li>
                                Grand Officier of the Order of the Republic (2019) (Foreign)
                            </li>
                            <li>
                                France: Commander of the Legion of Honour of the French Republic (2015)
                            </li>
                            <li>
                                Sweden: Commander of the Royal Order of the Polar Star (2015)
                            </li>
                            <li>
                                Italy: Knight Grand Cross of the Order of Merit of the Italian Republic (2017)
                            </li>
                            <li>
                                Malta: Honorary member of the Xirka Ġieħ ir-Repubblika of Malta (2019)
                            </li>
                        </ul>
                        <h5>Civil Society</h5>
                        <ul>
                            <li>
                                Honorary Chairman of the International Association for Cooperation & Sustainable Development (AICDD)
                            </li>
                        </ul>
                    </div>
                @endif
                @if(app()->getLocale() == 'fr')
                    <div class="modal-body">
                        <h5>Carrière politique</h5>
                        <ul>
                            <li>Ministre des Affaires Etrangères de la République Tunisienne (janvier 2016-octobre 2019)</li>
                            <li>Conseiller Principal auprès du Président de la République, feu Béji Caid Essebsi, chargé des Affaires diplomatiques et des Relations extérieures (janvier 2015 janvier 2016)
                            </li>
                            <li>
                                Secrétaire d’Etat aux Affaires Etrangères (juillet 2011-avril 2012)
                            </li>
                        </ul>
                        <h5>Carrière diplomatique</h5>
                        <ul>
                            <li>
                                Ambassadeur Extraordinaire et Plénipotentiaire de la République Tunisienne auprès de la Fédération de Russie, de l’Ukraine et des anciennes Républiques de l’Union Soviétique, avec résidence à Moscou, (de décembre 2007 à juin 2011)
                            </li>
                            <li>
                                Ambassadeur Extraordinaire et Plénipotentiaire de la République Tunisienne auprès de la Cour de Saint-James (Royaume Uni) et de la République d’Irlande, avec résidence à Londres, (de 1999 à 2004).
                            </li>
                            <li>
                                Directeur Général de l’Institut Diplomatique pour la Formation et les Etudes (2013)

                            </li>
                            <li>
                                Directeur Général des Affaires Politiques, Economiques et de Coopération pour l’Europe et l’Union Européenne (de 2006 à 2007)

                            </li>
                            <li>
                                Chef de Cabinet du Ministre des Affaires Etrangères (de 2004 à 2006)

                            </li>
                            <li>
                                Conseiller Spécial du Ministre des Affaires Etrangères (de 1996 à 1998).

                            </li>
                            <li>
                                Chef du Bureau des intérêts de Tunisie à Tel-Aviv (de mai 1996 à juillet 1997)
                            </li>
                            <li>
                                Conseiller des Affaires Etrangères, à Seoul (1991-1994)

                            </li>
                            <li>
                                Conseiller des Affaires Etrangères à Moscow (1987-1988)
                            </li>
                            <li>
                                Premier Secrétaire des Affaires Etrangères à New Delhi (1982-1986).

                            </li>
                        </ul>
                        <h5>Cursus </h5>
                        <ul>
                            <li>
                                Diplôme d’Etudes Supérieures (DES), de Doctorat en Droit Public
                            </li>
                            <li>
                                Diplôme d’Etudes Approfondies (DEA) en Sciences Politiques et Relations Internationales                             </li>
                            <li>
                                Diplôme de l’Institut de Défense Nationale (15eme promotion - 1997)
                            </li>
                            <li>
                                Certificat d’aptitude à la profession d’Avocat (CAPA 1978)
                            </li>
                        </ul>
                        <h5>Décorations</h5>
                        <ul>
                            <li>
                                Grand Officier de l’Ordre de la République (2019)
                            </li>
                            <li>
                                France : Commandeur de la Légion d’Honneur de la République française (2015)
                            </li>
                            <li>
                                Suède : Commandeur de l’Ordre Royal de l’Etoile Polaire (2015)
                            </li>
                            <li>
                                Italie : Chevalier grand-croix de l’Ordre du Mérite de la République italienne (2017)
                            </li>
                            <li>
                                Malte : Membre honoraire de l’Hommage de la République de Malte (2019)
                            </li>
                        </ul>
                        <h5>Société Civile</h5>
                        <ul>
                            <li>
                                Président honoraire de l’Association Internationale pour la Coopération et le Développement Durable (AICDD)
                            </li>
                        </ul>
                    </div>
                @endif
                @if(app()->getLocale() == 'ar')
                    <div class="modal-body">
                        <h5>المسيرة السياسية</h5>
                        <ul>
                            <li>
                                وزير الشؤون الخارجية للجمهورية التونسية (من جانفي 2016 إلى أكتوبر2019)
                            </li>
                            <li>
                                مستشار أول مكلف بالشؤون الدبلوماسية والعلاقات الخارجية لدى رئيس الجمهوريّة الراحل، المرحوم محمد الباجي قائد السبسي، (من جانفي 2015 إلى جانفي 2016)
                            </li>
                            <li>
                                كاتب الدولة للشؤون الخارجية (من جويلية 2011 إلى أفريل 2012)
                            </li>
                        </ul>
                        <h5>المسيرة الدبلوماسية</h5>
                        <ul>
                            <li>
                                سفير مفوض فوق العادة للجمهورية التونسية لدى فيدرالية روسيا، مع الإشراف على جمهوريات الاتحاد السوفياتي سابقا، ولدى أكرانيا مع الاقامة بموسكو (2007-2011)
                            </li>
                            <li>
                                سفير مفوض فوق العادة للجمهورية التونسية لدى المملكة المتحدة وجمهورية إيرلندا مع الإقامة بلندن (1999-2004)
                            </li>
                            <li>
                                مدير عام للمعهد الدبلوماسي للتكوين والدراسات (2013)

                            </li>
                            <li>
                                مدير عام للعلاقات السياسية والاقتصادية والتعاون مع أوروبا والاتحاد الأوروبي (2006-2007)

                            </li>
                            <li>
                                رئيس ديوان وزير الشؤون الخارجية (2004-2006)

                            </li>
                            <li>
                                مستشار خاص لوزير الشؤون الخارجية (1996-1998)

                            </li>
                            <li>
                                رئيس مكتب رعاية مصالح تونس بتل أبيب (من ماي 1996 إلى جويلية 1997)
                            </li>
                            <li>
                                مستشار للشؤون الخارجية بسفارة الجمهورية تونسية بكوريا الجنوبية (1991-1994)

                            </li>
                            <li>
                                مستشار للشؤون الخارجية بسفارة الجمهورية تونسية بالاتحاد السوفياتي (1987-1988)
                            </li>
                            <li>
                                سكرتير أوّل للشؤون الخارجية بسفارة الجمهورية تونسية بالهند (1982-1986)

                            </li>
                        </ul>
                        <h5>التحصيل العلمي</h5>
                        <ul>
                            <li>
                                شهادة الدراسات المعمقة في العلوم السياسية والعلاقات الدولية
                            </li>
                            <li>
                                شهادة الدراسات العليا في القانون العام
                            <li>
                                الإجازة في القانون العام
                            </li>
                            <li>
                                معهد الدفاع الوطني (1997)
                            </li>
                            <li>
                                شهادة الكفاءة لمهنة المحاماة (1978)
                            </li>
                        </ul>
                        <h5>الأوسمة </h5>
                        <ul>
                            <li>
                                (في تونس):  الصنف الأول من وسام الجمهورية (2019)
                            </li>
                            <li>
                                فرنسا: وسام جوقة الشرف للجمهورية الفرنسية
                            </li>
                            <li>
                                السويد: الوسام الملكي للنجم القطبي
                            </li>
                            <li>
                                إيطاليا: وسام الاستحقاق للجمهورية الإيطالية
                            </li>
                            <li>
                                مالطا: وسام الاستحقاق لجمهورية مالطا
                            </li>
                        </ul>
                        <h5>المجتمع المدني</h5>
                        <ul>
                            <li>
                                الرئيس الشرفي للجمعية الدولية للتعاون والتنمية المستدامة
                            </li>
                        </ul>
                    </div>
                @endif
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cv5Modal" tabindex="-1" role="dialog" aria-labelledby="cv5Modal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{__('Mohsen Boujbel')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li><b>Nom</b> : Boujbel</li>
                        <li><b>Prénom</b> : Mohsen</li>
                        <li><b>Née le </b> : 17 juillet 1945</li>
                    </ul>
                    <h5>Etudes</h5>
                    <ul>
                        <li>
                            Ingénieur Statisticien Economiste de l’Ecole Nationale de la statistique et de l’Administration Economique de Paris.
                        </li>
                    </ul>
                    <h5>Carrière professionnelle :</h5>
                    <ul>
                        <li>
                            <b>1971-1977</b> : Ingénieur au Ministère du Plan
                        </li>
                        <li>
                            <b>1977-1978</b> : Expert international à la FAO
                        </li>
                        <li>
                            <b>1979-1988</b> : Directeur Général  au Ministère de l’Agriculture
                        </li>
                        <li>
                            <b>1988-1991</b> : Secrétaire d’Etat à l’Agriculture
                        </li>
                        <li>
                            <b>1991 à aujourd’hui</b> : Président Directeur Général de la Société
                            <ul>
                                <li>« BOUDJEBEL SA VACPA »</li>
                                <li>« Borges-Tunisie »</li>
                                <li>« Jerba Résidence »</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cv6Modal" tabindex="-1" role="dialog" aria-labelledby="cv6Modal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{__('Abdessalem Hatira')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 style="text-align: center">Abdessalem Hetira</h5>
                    <p>
                        Abdessalem Hetira a été l’Ambassadeur  de Tunisie auprès de la Belgique et du Luxembourg et Représentant Permanent auprès de  l’Union Européenne et de l’OTAN de 2007 à 2011. Auparavant, de 2005 à 2007, il a été Ambassadeur au Canada (et  Cuba). De 1998 à 2003 il a été Ambassadeur à Malte.
                    </p>
                    <p>
                        Au Ministère des Affaires Etrangères, de 1992 à 1994, A.Hetira était Chargé de Mission, Directeur de la Recherche de l’Analyse et de la Planification et de 1994 à 1998, il a été Coordinateur National et Négociateur en Chef du Processus EuroMed de Barcelone et en charge du Forum Méditerranéen et du 5+5.

                    </p>
                    <p>
                        A.Hetira a également dirigé et contribué à divers programmes nationaux relatifs l’étude de la conjoncture, l’éducation, la recherche, l’emploi, la jeunesse et la culture. En 1991, il a été Négociateur en Chef du Projet Banque Mondiale sur la Rénovation de l’Enseignement Supérieur en Tunisie.

                    </p>
                    <p>
                        Avant son retour en Tunisie en 1988, A.Hétira a vécu pendant une quinzaine d’années en Norvège où il eut son Doctorat en Pédagogie Sociale à l’Université d’Oslo. Il y enseigna cette même discipline.
                        De 1987 à 1992, il a travaillé comme Consultant pour l’Agence Norvégienne de la Coopération Internationale (NORAD) et pour la Banque Mondiale (IDA) sur les projets de développement de l’éducation en Afrique.

                    </p>
                    <p>
                        Il parle couramment  l’arabe, le français, l’anglais et le norvégien…
                    </p>
                    <p>
                        A.Hetira a été décoré des insignes d’Officier de l’Ordre Royal Norvégien du Mérite et du Prix de «Grant Thornton  de l’Entreprise et de l’Investissement Direct» décerné par le Président de la Rép. de Malte.
                    </p>
                    <p>
                        Actuellement, il est enseignant à L’Institut Diplomatique de Formation et d’Etudes, assurant les cours sur les Relations Tunisie-UE, sur les relations EuroMéd et sur la Diplomatie Economique.
                    </p>
                    <p>
                        Il est membre de différents cercles de réflexion et conseiller scientifique de plusieurs conférences.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
