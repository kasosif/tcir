@extends('layout')
@section('title') {{__('ourmission2')}}@endsection
@section('content')
    <section class="medium-gap full-width-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget-sidebar find-on-map">
                        <div class="widget-header" style="text-align: center;margin-bottom:20px;">
                            <h4>{{__('mission.skons')}}</h4>
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
                                <div dir="rtl" style="unicode-bidi: bidi-override !important; direction: unset !important; text-align:right;">
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
                                </div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

