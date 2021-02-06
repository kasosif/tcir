@extends('layout')
@section('title') {{__('Our Resumes')}}@endsection
@section('jspage')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@endsection
@section('content')
    <section class="large-gap about-me about-version-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget-sidebar about-me">
                        <div class="widget-header">
                            <h4>{{__('Our Resumes')}}</h4>
                        </div>
                        <div class="widget-content">
                            <div style="margin-bottom: 5px;" class="row">
                                <div class="col-lg-4">
                                    <img src="{{asset('images/cv1.jpeg')}}" alt="cv1">
                                </div>
                                <div class="col-lg-8" style="padding: 20px;">
                                    <h5>{{__('Ahmed Abderraouf OUNAIES')}}</h5>
                                    <a onclick="showCv('cv1Modal')" style="color:green;cursor: pointer;"><i class="fa fa-file"></i> {{__('View Resume')}}</a>
                                </div>
                            </div>
                            <div style="margin-bottom: 5px;" class="row">
                                <div class="col-lg-4">
                                    <img src="{{asset('images/cv2.png')}}" alt="cv2">
                                </div>
                                <div class="col-lg-8" style="padding: 20px;">
                                    <h5>{{__('Habib Essid')}}</h5>
                                    <a onclick="showCv('cv2Modal')" style="color:green;cursor: pointer;"><i class="fa fa-file"></i> {{__('View Resume')}}</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="{{asset('images/cv3.jpeg')}}" alt="cv3">
                                </div>
                                <div class="col-lg-8" style="padding: 20px;">
                                    <h5>{{__('Mondher Dhraïef')}}</h5>
                                    <a onclick="showCv('cv3Modal')" style="color:green;cursor: pointer;"><i class="fa fa-file"></i> {{__('View Resume')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cv Modals -->
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
    <div class="modal fade" id="cv3Modal" tabindex="-1" role="dialog" aria-labelledby="cv2Modal" aria-hidden="true">
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
@endsection
