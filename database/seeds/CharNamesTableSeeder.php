<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharNamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $names = array('Aaron ','Abaddon ','Abagtha ','Abana ','Abarim ','Abba ','Abda ','Abdeel ','Abdi ','Abdiel ','Abdon ','Abednego ','Abel ','Abel ','Abel-beth-maachah ','Abel-maim ','Abel-meholah ','Abel-mizraim ','Abel-shittim ','Abez ','Abi ','Abiah ','Abi-albon ','Abiasaph ','Abiathar ','Abib ','Abidah ','Abidan ','Abiel ','Abiezer ','Abigail ','Abihail ','Abihu ','Abihud ','Abijah ','Abijam ','Abilene ','Abimael ','Abimelech ','Abinadab ','Abinoam ','Abiram ','Abishag ','Abishai ','Abishalom ','Abishua ','Abishur ','Abital ','Abitub ','Abiud ','Abner ','Abram ','Abraham ','Absalom ','Accad ','Accho ','Aceldama ','Achab ','Achaia ','Achaicus ','Achan ','Achaz ','Achbor ','Achim ','Achish ','Achmetha ','Achor ','Achsah ','Achshaph ','Achzib ','Adadah ','Adah ','Adaiah ','Adaliah ','Adam ','Adamah ','Adami ','Adar ','Adbeel ','Addi ','Addin ','Addon ','Adiel ','Adin ','Adithaim ','Adlai ','Admah ','Admatha ','Adna ','Adnah ','Adoni-bezek ','Adonijah ','Adonikam ','Adoniram ','Adoni-zedek ','Adoraim ','Adoram ','Adrammelech ','Adramyttium ','Adrian ','Adriel ','Adullam ','Adummim ','Aeneas ','Aenon ','Agabus ','Agag ','Agar ','Agee ','Agrippa ','Agur ','Ahab ','Aharah ','Aharhel ','Ahasbai ','Ahasuerus ','Ahava ','Ahaz ','Ahaziah ','Ahi ','Ahiah ','Ahiam ','Ahian ','Ahiezer ','Ahihud ','Ahijah ','Ahikam ','Ahilud ','Ahimaaz ','Ahiman ','Ahimelech ','Ahimoth ','Ahinadab ','Ahinoam ','Ahio ','Ahira ','Ahiram ','Ahisamach ','Ahishahur ','Ahishar ','Ahithophel ','Ahitub ','Ahlab ','Ahlai ','Ahoah ','Aholah ','Aholiab ','Aholibah ','Aholibamah ','Ahumai ','Ahuzam ','Ahuzzah ','Ai ','Aiah ','Aiath ','Aijeleth-Shahar ','Ain ','Ajalon ','Akkub ','Akrabbim ','Alammelech ','Alemeth ','Alexander ','Alexis ','Alian ','Alleluia ','Allon ','Allon-bachuth ','Almodad ','Almon ','Almon-diblathaim ','Alpheus ','Alush ','Alvah ','Amad ','Amal ','Amalek ','Aman ','Amana ','Amariah ','Amasa ','Amasai ','Amashai ','Amashi-ali ','Ami ','Amaziah ','Aminadab ','Amittai ','Ammah ','Ammi ','Ammiel ','Ammihud ','Ammi-nadab ','Ammishaddai ','Ammizabad ','Ammon ','Amnon ','Amok ','Amon ','Amorite ','Amos ','Amoz ','Amplias ','Amram ','Amraphel ','Amzi ','Anab ','Anah ','Anaharath ','Anak ','Anamim ','Anammelech ','Anani ','Ananias ','Anathema ','Anathoth ','Andrew ','Andronicus ','Anem ','Aner ','Aniam ','Anim ','Anna ','Annas ','Antichrist ','Antioch ','Antipas ','Antipatris ','Antothijah ','Anub ','Apelles ','Apharsathchites ','Aphek ','Aphiah ','Apocalypse ','Apocrypha ','Apollonia ','Apollonius ','Apollos ','Apollyon ','Appaim ','Apphia ','Aquila ','Ar ','Ara ','Arab ','Arabia ','Arad ','Arah ','Aram ','Aran ','Ararat ','Araunah ','Arba ','Archelaus ','Archippus ','Arcturus ','Ard ','Ardon ','Areli ','Areopagus ','Aretas ','Argob ','Ariel ','Arimathea ','Arioch ','Aristarchus ','Ariste ','Aristobulus ','Armageddon ','Arnon ','Aroer ','Arpad ','Arphaxad ','Artaxerxes ','Artemas ','Arumah ','Asa ','Asahel ','Asaiah ','Asaph ','Asareel ','Asenath ','Ashan ','Ashbel ','Ashdod ','Asher ','Ashima ','Ashkenaz ','Ashnah ','Ashriel ','Ashtaroth ','Ashur ','Asia ','Asiel ','Askelon ','Asnapper ','Asriel ','Assir ','Asshurim ','Assos ','Assur ','Assyria ','Asuppim ','Asyncritus ','Atad ','Atarah ','Ataroth ','Ataroth-addar ','Ater ','Athach ','Athaiah ','Athaliah ','Athlai ','Attai ','Attalia ','Attalus ','Augustus ','Ava ','Aven ','Avim ','Avith ','Azaliah ','Azaniah ','Azareel ','Azariah ','Azaz ','Azazel ','Azaziah ','Azekah ','Azgad ','Azmaveth ','Azmon ','Aznoth-tabor ','Azor ','Azotus ','Azriel ','Azrikam ','Azubah ','Azur ','Azzan ','Azzur ','Baal ','Baalah ','Baalath ','Baalath-beer ','Baal-berith ','Baale ','Baal-gad ','Baal-hamon ','Baal-hermon ','Baali ','Baalim ','Baalis ','Baal-meon ','Baal-peor ','Baal-perazim ','Baal-shalisha ','Baal-tamar ','Baal-zebub ','Baal-zephon ','Baanah ','Baara ','Baaseiah ','Baasha ','Babel ','Babylon ','Baca ','Bahurim ','Bajith ','Balaam ','Baladan ','Balak ','Bamah ','Barabbas ','Barachel ','Barachias ','Barak ','Barjesus ','Barjona ','Barnabas ','Barsabas ','Bartholomew ','Bartimeus ','Baruch ','Barzillai ','Bashan ','Bashemath ','Bathsheba ','Bathsuha ','Bealiah ','Bealoth ','Bebai ','Becher ','Bechorath ','Bedad ','Bedaiah ','Bedan ','Beeliada ','Beelzebub ','Beer ','Beera ','Beerelim ','Beeri ','Beer-lahai-roi ','Beeroth ','Beersheba ','Behemoth ','Bekah ','Belah ','Belial ','Belshazzar ','Belteshazzar ','Ben ','Benaiah ','Ben-ammi ','Beneberak ','Bene-jaakan ','Benhadad ','Benhail ','Benhanan ','Benjamin ','Benimi ','Beno ','Benoni ','Benzoheth ','Beon ','Beor ','Bera ','Berachah ','Berachiah ','Beraiah ','Berea ','Bered ','Beri ','Beriah ','Berith ','Bernice ','Berodach-baladan ','Berothai ','Berothath ','Besai ','Besodeiah ','Besor ','Betah ','Beten ','Bethabara ','Bethanath ','Bethany ','Betharabah ','Beth-aram ','Beth-aven ','Beth-azmaveth ','Beth-baalmeon ','Beth-barah ','Beth-birei ','Beth-car ','Beth-dagon ','Beth-diblathaim ','Beth-el ','Bethemek ','Bether ','Bethesda ','Beth-ezal ','Beth-gader ','Beth-gamul ','Beth-haccerem ','Beth-haran ','Beth-horon ','Beth-lebaoth ','Beth-lehem ','Beth-marcaboth ','Beth-meon ','Beth-nimrah ','Beth-palet ','Beth-pazzez ','Beth-peor ','Bethphage ','Beth-phelet ','Beth-rapha ','Bethsaida ','Bethshan ','Beth-shemesh ','Bethuel ','Beth-zur ','Betonim ','Beulah ','Bezai ','Bezaleel ','Bezek ','Bezer ','Bichri ','Bidkar ','Bigthan ','Bigvai ','Bildad ','Bileam ','Bilgah ','Bilhah ','Bilshan ','Binea ','Binnui ','Birsha ','Bishlam ','Bithiah ','Bithron ','Bithynia ','Bizjothjah ','Blastus ','Boanerges ','Boaz ','Bocheru ','Bochim ','Bohan ','Boskath ','Boson ','Bozez ','Bozrah ','Bukki ','Bukkiah ','Bul ','Bunah ','Bunni ','Buz ','Buzi ','Cabbon ','Cabul ','Caiphas ','Cain ','Cainan ','Calah ','Calcol ','Caleb ','Caleb-Ephratah ','Calneh ','Calno ','Calvary ','Camon ','Cana ','Canaan ','Candace ','Capernaum ','Caphtor ','Cappadocia ','Carcas ','Charchemish ','Careah ','Carmel ','Carmi ','Carpus ','Carshena ','Casiphia ','Casluhim ','Catherine ','Cedron ','Cenchrea ','Cephas ','Cesar ','Chalcol ','Chaldea ','Charran ','Chebar ','Chedorlaomer ','Chelal ','Chelub ','Chelluh ','Chelubai ','Chemarims ','Chemosh ','Chenaanah ','Chenani ','Chenaniah ','Chephirah ','Cheran ','Cherethims ','Cherith ','Chesed ','Chesil ','Chesulloth ','Chidon ','Chiliab ','Chilion ','Chilmad ','Chimham ','Chios ','Chisleu ','Chislon ','Chisloth-tabor ','Chittem ','Chloe ','Chorazin ','Chozeba ','Christ ','Christopher ','Chun ','Chushan ','Chuza ','Cilicia ','Cis ','Clauda ','Claudia ','Clement ','Cleophas ','Cnidus ','Colhozeh ','Colosse ','Coniah ','Coos ','Corinth ','Cornelius ','Cosam ','Coz ','Cozbi ','Crescens ','Crete ','Crispus ','Cush ','Cuth ','Cyprus ','Cyrene ','Cyrenius ','Cyrus ','Dabareh ','Dabbasheth ','Daberath ','Dagon ','Dalaiah ','Dalmanutha ','Dalmatia ','Dalphon ','Damaris ','Damascus ','Dan ','Daniel ','Dannah ','Darah ','Darda ','Darius ','Darkon ','Dathan ','David ','Debir ','Deborah ','Decapolis ','Dedan ','Dedanim ','Dekar ','Delaiah ','Delilah ','Demas ','Demetrius ','Derbe ','Deuel ','Deuteronomy ','Diana ','Diblaim ','Diblath ','Dibon ','Dibon-gad ','Dibri ','Dibzahab ','Didymus ','Diklah ','Dilean ','Dimon ','Dimonah ','Dinah ','Dinhabah ','Dionysius ','Diotrephes ','Dishan ','Dishon ','Dodai ','Dodavah ','Dodo ','Doeg ','Dophkah ','Dor ','Dorcas ','Dothan ','Drusilla ','Dumali ','Dura ','Ebed ','Ebed-melech ','Eben-ezer ','Eber ','Ebiasaph ','Ebronah ','Ecclesiastes ','Ed ','Eden ','Eder ','Edom ','Edrei ','Edward ','Eglah ','Eglaim ','Eglon ','Egypt ','Ehud ','Eker ','Ekron ','Eladah ','Elah ','Elam ','Elasah ','Elath ','El-beth-el ','Eldaah ','Eldad ','Elead ','Elealeh ','Eleazar ','El-elohe-Israel ','Eleph ','Elhanan ','Eli ','Eli ','Eliab ','Eliada ','Eliah ','Eliahba ','Eliakim ','Eliam ','Elias ','Eliasaph ','Eliashib ','Eliathah ','Elidad ','Eliel ','Elienai ','Eliezer ','Elihoreph ','Elihu ','Elijah ','Elika ','Elim ','Elimelech ','Elioenai ','Eliphal ','Eliphalet ','Eliphaz ','Elisabeth ','Elisha ','Elishah ','Elishama ','Elishaphat ','Elisheba ','Elishua ','Eliud ','Elizur ','Elkanah ','Elkeshai ','Ellasar ','Elkoshite ','Elmodam ','Elnaam ','Elnathan ','Elohi ','Elon ','Elon-beth-hanan ','Elpaal ','Elpalet ','Eltekeh ','Elteketh ','Eltolad ','Elul ','Eluzai ','Elymas ','Elzabad ','Elzaphan ','Emims ','Emmanuel ','Emmaus ','Emmor ','Enam ','Enan ','En-dor ','Eneas ','En-eglaim ','En-gannim ','En-gedi ','En-haddah ','En-hakkore ','En-hazor ','En-mishpat ','Enoch ','Enon ','Enos ','En-rimmon ','En-rogel ','En-shemesh ','En-tappuah ','Epaphras ','Epaphroditus ','Epenetus ','Ephah ','Epher ','Ephes-dammim ','Ephesus ','Eph-lal ','Ephphatha ','Ephraim ','Ephratah ','Ephron ','Epicurean ','Er ','Eran ','Erastus ','Erech ','Eri ','Esaias ','Esar-haddon ','Esau ','Esek ','Esh-baal ','Esh-ban ','Eshcol ','Eshean ','Eshek ','Eshkalon ','Eshtaol ','Eshtemoa ','Esli ','Esmachiah ','Esrom ','Esther ','Etam ','Etham ','Ethan ','Ethanim ','Ethbaal ','Ether ','Ethiopia ','Ethnan ','Ethni ','Eubulus ','Eunice ','Euodias ','Euphrates ','Eutychus ','Eve ','Evi ','Evil-merodach ','Exodus ','Ezbon ','Ezekiel ','Ezel ','Ezem ','Ezer ','Ezion-geber ','Ezra ','Ezri ','Felix ','Festus ','Fortunatus ','Gaal ','Gaash ','Gabbai ','Gabbatha ','Gabriel ','Gad ','Gadarenes ','Gaddi ','Gaddiel ','Gaius ','Galal ','Galatia ','Galeed ','Galilee ','Gallim ','Gallio ','Gamaliel ','Gammadims ','Gamul ','Gareb ','Garmites ','Gatam ','Gath ','Gath-rimmon ','Gaza ','Gazabar ','Gazer ','Gazez ','Gazzam ','Geba ','Gebal ','Geber ','Gebim ','Gedaliah ','Geder ','Gederothaim ','Gehazi ','Geliloth ','Gemalli ','Gemariah ','Gennesaret ','Genesis ','Genubath ','Gera ','Gerar ','Gergesenes ','Gerizim ','Gershom ','Gershon ','Geshur ','Gether ','Gethsemane ','Geuel ','Gezer ','Giah ','Gibbar ','Gibbethon ','Gibeah ','Gibeon ','Giddel ','Gideon ','Gideoni ','Gihon ','Gilalai ','Gilboa ','Gilead ','Gilgal ','Giloh ','Gimzo ','Ginath ','Girgashite ','Gispa ','Gittah-hepher ','Gittaim ','Gittites ','Goath ','Gob ','Gog ','Golan ','Golgotha ','Goliath ','Gomer ','Gomorrah ','Goshen ','Gozan ','Grant ','Gudgodah ','Guni ','Gur ','Gur-baal ','Haahashtari ','Habaiah ','Habakkuk ','Habazinaiah ','Habor ','Hachaliah ','Hachilah ','Hachmoni ','Hadad ','Hadadezer ','Hadadrimmon ','Hadar ','Hadarezer ','Hadashah ','Hadassah ','Hadid ','Hadlai ','Hadoram ','Hadrach ','Hagab ','Hagar ','Haggai ','Haggeri ','Haggiah ','Haggith ','Hakkatan ','Hakkoz ','Hakupha ','Halah ','Halak ','Halhul ','Hali ','Hallelujah ','Halloesh ','Ham ','Haman ','Hamath ','Hamath-zobah ','Hammedatha ','Hammelech ','Hammon ','Hamonah ','Hamon-gog ','Hamor ','Hamoth ','Hamul ','Hamutal ','Hanameel ','Hanan ','Hananeel ','Hanani ','Hananiah ','Hanes ','Haniel ','Hannah ','Hannathon ','Hanniel ','Hanoch ','Hanun ','Hapharaim ','Hara ','Haradah ','Haran ','Harran ','Harbonah ','Hareph ','Harhas ','Harhaiah ','Harhur ','Harim ','Harnepher ','Harod ','Harosheth ','Harsha ','Harum ','Harumaph ','Haruphite ','Haruz ','Hasadiah ','Hashabiah ','Hashabnah ','Hashem ','Hashub ','Hashubah ','Hashum ','Hashupha ','Hasrah ','Hatach ','Hathath ','Hatita ','Hattil ','Hattipha ','Hattush ','Hauran ','Havilah ','Havoth-jair ','Hazael ','Hazaiah ','Hazar-addar ','Hazarenan ','Hazargaddah ','Hazar-hatticon ','Hazarmaveth ','Hazar-shual ','Hazar-susah ','Hazelelponi ','Hazeroth ','Hazezon-tamar ','Hazo ','Hazor ','Heber ','Hebrews ','Hebron ','Hegai ','Helam ','Helbah ','Heldai ','Helek ','Helem ','Heleph ','Helez ','Heli ','Helkai ','Helkath-hazzurim ','Helon ','Heman ','Hen ','Hena ','Henadad ','Henoch ','Hepher ','Hephzibah ','Heres ','Heresh ','Hermas ','Hermogenes ','Hermon ','Herod ','Herodion ','Heshbon ','Heshmon ','Heth ','Hethlon ','Hezekiah ','Hezer ','Hezrai ','Hezron ','Hiddai ','Hiddekel ','Hiel ','Hierapolis ','Higgaion ','Hilary ','Hilen ','Hilkiah ','Hillel ','Hinnom ','Hirah ','Hiram ','Hittite ','Hivites ','Hizkijah ','Hobab ','Hobah ','Hod ','Hodaiah ','Hodaviah ','Hodesh ','Hoglah ','Hoham ','Holon ','Homam ','Hophin ','Hor ','Horam ','Horeb ','Horem ','Hor-hagidgad ','Hori ','Horims ','Hormah ','Horonaim ','Horonites ','Hosah ','Hosanna ','Hosea ','Hoshaiah ','Hoshama ','Hotham ','Howard ','Hothir ','Hukkok ','Hul ','Huldah ','Hupham ','Huppim ','Hur ','Huram ','Huri ','Hushah ','Hushai ','Hushathite ','Huz ','Huzoth ','Huzzab ','Hymeneus ','Ibhar ','Ibleam ','Ibneiah ','Ibri ','Ibzan ','Ichabod ','Iconium ','Idalah ','Idbash ','Iddo ','Idumea ','Igal ','Igeal ','Igdaliah ','Iim ','Ije-abarim ','Ijon ','Ikkesh ','Illyricum ','Imlah ','Immanuel ','Immer ','Imnah ','Imrah ','Imri ','India ','Iphedeiah ','Ir ','Ira ','Irad ','Iram ','Iri ','Irijah ','Irpeel ','Irshemesh ','Isaac ','Isaiah ','Iscah ','Iscariot ','Ishbak ','Ishbi-benob ','Ishbosheth ','Ishi ','Ishiah ','Ishma ','Ishmael ','Ishmaiah ','Ishmerai ','Ishod ','Ish-pan ','Ish-tob ','Ishua ','Ishmachiah ','Ispah ','Israel ','Issachar ','Isui ','Ithai ','Italy ','Ithamar ','Ithiel ','Ithmah ','Ithran ','Ithream ','Ittah-kazin ','Iturea ','Ivah ','Izehar ','Izrahiah ','Izri ','Jaakan ','Jaakobah ','Jaala ','Jaalam ','Jaanai ','Jaasau ','Jaasiel ','Jaazaniah ','Jaazah ','Jaaziah ','Jabal ','Jabbok ','Jabesh ','Jabez ','Jabin ','Jabneel ','Jachan ','Jachin ','Jackson ','Jacob ','Jada ','Jadau ','Jaddua ','Jael ','Jagur ','Jah ','Jahaleel ','Jahath ','Jahaz ','Jahaziah ','Jahaziel ','Jahdiel ','Jahdo ','Jahleel ','Jahmai ','Jahzeel ','Jaime ','Jair ','Jakan ','Jakim ','Jalon ','Jambres ','James ','Jamin ','Jamlech ','Janna ','Janoah ','Janum ','Japhet ','Japhia ','Japhlet ','Japho ','Jarah ','Jareb ','Jared ','Jaresiah ','Jarib ','Jarmuth ','Jarvah ','Jashem ','Jasher ','Jashobeam ','Jashub ','Jasiel ','Jason ','Jathniel ','Jattir ','Javan ','Jazeel ','Jazer ','Jaziz ','Jearim ','Jeaterai ','Jeberechiah ','Jebus ','Jebusi ','Jecamiah ','Jecoliah ','Jeconiah ','Jedaiah ','Jedeiah ','Jediael ','Jedidah ','Jedidiah ','Jediel ','Jeduthun ','Jeezer ','Jeffrey ','Jegar-sahadutha ','Jehaleleel ','Jehaziel ','Jehdeiah ','Jeheiel ','Jehezekel ','Jehiah ','Jehiskiah ','Jehoadah ','Jehoaddan ','Jehoahaz ','Jehoash ','Jehohanan ','Jehoiachin ','Jehoiada ','Jehoiakim ','Jehoiarib ','Jehonadab ','Jehonathan ','Jehoram ','Jehoshaphat ','Jehosheba ','Jehoshua ','Jehovah ','Jehovah-jireh ','Jehovah-nissi ','Jehovah-shalom ','Jehovah-shammah ','Jehovah-tsidkenu ','Jehozabad ','Jehozadak ','Jehu ','Jehubbah ','Jehucal ','Jehud ','Jehudijah ','Jehush ','Jekabzeel ','Jekamean ','Jekamiah ','Jekuthiel ','Jemima ','Jemuel ','Jephunneh ','Jerah ','Jerahmeel ','Jered ','Jeremai ','Jeremiah ','Jeremoth ','Jeretas ','Jeriah ','Jerebai ','Jericho ','Jeriel ','Jerijah ','Jerimoth ','Jerioth ','Jeroboam ','Jeroham ','Jerubbaal ','Jerubbesheth ','Jeruel ','Jerusalem ','Jerusha ','Jesaiah ','Jeshebeab ','Jesher ','Jeshimon ','Jeshishai ','Jeshohaia ','Jeshua ','Jesiah ','Jesimiel ','Jesse ','Jesui ','Jesus ','Jether ','Jetheth ','Jethlah ','Jethro ','Jetur ','Jeuel ','Jeush ','Jew ','Jezaniah ','Jezebel ','Jezer ','Jeziah ','Jezoar ','Jezrahiah ','Jezneel ','Jibsam ','Jidlaph ','Jimnah ','Jiphtah ','Jiphthael ','Joab ','Joah ','Joahaz ','Joakim ','Joanna ','Joash ','Joatham ','Job ','Jobab ','Jochebed ','Joed ','Joel ','Joelah ','Joezer ','Jogbehah ','Jogli ','Joha ','Johanan ','John ','Joiarib ','Jokdeam ','Jokim ','Jokmeam ','Jokneam ','Jokshan ','Joktan ','Jonadab ','Jonah ','Jonan ','Jonathan ','Joppa ','Jorah ','Joram ','Jordan ','Jorim ','Josabad ','Josaphat ','Jose ','Joseph ','Joses ','Joshah ','Joshaviah ','Joshbekesha ','Joshua ','Josiah ','Josibiah ','Josiphiah ','Jotham ','Jothath ','Jozabad ','Jozachar ','Jubal ','Jucal ','Judah ','Judas ','Judaea ','Judith ','Julia ','Julius ','Junia ','Jupiter ','Jushabhesed ','Justus ','Juttah ','Kabzeel ','Kadesh ','Kadesh-barnea ','Kadmiel ','Kadmonites ','Kallai ','Kanah ','Kareah ','Karkaa ','Karkor ','Karnaim ','Kartah ','Kayla ','Kedar ','Kedemah ','Kedemoth ','Kehelahath ','Keiiah ','Kelaiah ','Kelitah ','Kemuel ','Kenah ','Kenan ','Kenaz ','Kenites ','Kenizzites ','Keren-happuch ','Kerioth ','Keros ','Keturah ','Kezia ','Keziz ','Kibroth-hattaavah ','Kibzaim ','Kidron ','Kinah ','Kir ','Kirharaseth ','Kirioth ','Kirjath ','Kirjathaim ','Kirjath-arba ','Kirjath-arim ','Kirjath-baal ','Kirjath-huzoth ','Kirjath-jearim ','Kirjath-sannah ','Kirjath-sepher ','Kish ','Kishi ','Kishion ','Kishon ','Kithlish ','Kitron ','Kittim ','Koa ','Kohath ','Kolariah ','Korah ','Kushaiah ','Kylie ','Laadah ','Laadan ','Laban ','Labana ','Lachish ','Lael ','Lahad ','Lahairoi ','Lahmam ','Lahmi ','Laish ','Lamech ','Laodicea ','Lapidoth ','Lasea ','Lashah ','Laura ','Lazarus ','Leah ','Lebanon ','Lebaoth ','Lebbeus ','Lebonah ','Lehabim ','Lehi ','Lekah ','Lemuel ','Leshem ','Letushim ','Leummim ','Levi ','Libnah ','Libni ','Libya ','Linus ','Lo-ammi ','Lod ','Lois ','Lo-ruhamah ','Lot ','Lubin ','Lucas ','Lucifer ','Lud ','Luhith ','Luke ','Luz ','Lycaonia ','Lydda ','Lysanias ','Lysias ','Lysimachus ','Lystra ','Maachah ','Maachathi ','Maadai ','Maadiah ','Maai ','Maale-akrabbim ','Maarath ','Maaseiah ','Maasiai ','Maath ','Maaz ','Macedonia ','Machbenah ','Machi ','Machir ','Machnadebai ','Machpelah ','Madai ','Madian ','Madmannah ','Madon ','Magbish ','Magdala ','Magdalene ','Magdiel ','Magog ','Magpiash ','Mahalah ','Mahaleleel ','Mahali ','Mahanaim ','Mahanehdan ','Mahanem ','Maharai ','Mahath ','Mahavites ','Mahaz ','Mahazioth ','Maher-shalal-hashbaz ','Mahlah ','Makas ','Makheloth ','Makkedah ','Malachi ','Malcham ','Malchiah ','Malchiel ','Malchus ','Maleleel ','Mallothi ','Malluch ','Mammon ','Mamre ','Manaen ','Manahethites ','Manasseh ','Manoah ','Maon ','Mara ','Maralah ','Maranatha ','Marc ','Marcus ','Mardi ','Mareshah ','Margaret ','Mark ','Maroth ','Marsena ','Martha ','Mary ','Mash ','Mashal ','Masrekah ','Massa ','Massah ','Matred ','Matri ','Mattan ','Mattaniah ','Mattatha ','Mattathias ','Matthan ','Matthanias ','Matthal ','Matthew ','Matthias ','Mazzaroth ','Meah ','Mearah ','Mebunnai ','Mecherath ','Medad ','Medan ','Medeba ','Media ','Megiddo ','Megiddon ','Mehetabel ','Mehida ','Mehir ','Mehujael ','Mehuman ','Mejarkon ','Mekonah ','Melanie ','Melatiah ','Melchi ','Melchiah ','Melchi-shua ','Melchizedek ','Melea ','Melech ','Melita ','Mellicu ','Melzar ','Memphis ','Memucan ','Menahem ','Menan ','Mene ','Meonenim ','Mephaath ','Mephibosheth ','Merab ','Meraioth ','Merari ','Mercurius ','Mered ','Meremoth ','Meres ','Meribah ','Meribbaal ','Merodach ','Merodach-baladan ','Merom ','Meronothite ','Meroz ','Mesha ','Meshach ','Meshech ','Meshelemiah ','Meshezaheel ','Meshillamith ','Meshullam ','Mesobaite ','Mesopotamia ','Messiah ','Metheg-ammah ','Methusael ','Methusaleh ','Meunim ','Mezahab ','Miamin ','Mibhar ','Mibsam ','Mibzar ','Micah ','Micaiah ','Micha ','Michaiah ','Michal ','Michmach ','Michmethah ','Michri ','Michtam ','Middin ','Midian ','Migdalel ','Migdalgad ','Migdol ','Migron ','Mijamin ','Mikloth ','Minneiah ','Milalai ','Milcah ','Milcom ','Miletum ','Millo ','Miniamin ','Minni ','Minnith ','Miriam ','Mishael ','Mishal ','Misham ','Misheal ','Mishma ','Mishmannah ','Mishraites ','Mispar ','Misrephoth-maim ','Mithcah ','Mithnite ','Mithredath ','Mitylene ','Mizar ','Mizpah ','Mizraim ','Mizzah ','Mnason ','Moab ','Moladah ','Molech ','Molid ','Mordecai ','Moreh ','Moriah ','Moserah ','Moses ','Mozah ','Muppim ','Mushi ','Myra ','Mysia ','Naam ','Naamah ','Naarah ','Naashon ','Nabal ','Naboth ','Nachon ','Nachor ','Nadab ','Nagge ','Nahaliel ','Nahallal ','Naham ','Naharai ','Nahash ','Nahath ','Nahbi ','Nahor ','Nahshon ','Nahum ','Nain ','Naioth ','Naomi ','Naphish ','Naphtali ','Narcissus ','Nason ','Nathan ','Nathanael ','Nathan-melech ','Naum ','Nazareth ','Nazarite ','Neah ','Neapolis ','Neariah ','Nebai ','Nebaioth ','Neballat ','Nebat ','Nebo ','Nebuchadnezzar ','Nebushasi_hahban ','Nebuzar-adan ','Necho ','Nedabiah ','Neginoth ','Nehelamite ','Nehemiah ','Nehum ','Nehushta ','Nehushtan ','Neiel ','Nekoda ','Nemuel ','Nepheg ','Nephish ','Nephishesim ','Nephthalim ','Nephthoah ','Nephusim ','Ner ','Nereus ','Nergal ','Nergal-sharezer ','Neri ','Neriah ','Nethaneel ','Nethaniah ','Nethinims ','Neziah ','Nezib ','Nibhaz ','Nibshan ','Nicanor ','Nicodemus ','Nicolas ','Nicolaitanes ','Nicopolis ','Niger ','Nimrah ','Nimrod ','Nimshi ','Nineveh ','Nisan ','Nisroch ','No ','Noadiah ','Noah ','Noah ','Nob ','Nobah ','Nod ','Nodab ','Noe ','Nogah ','Noha ','Non ','Noph ','Nophah ','Nun ','Nymphas ','Obadiah ','Obal ','Obed ','Obed-edom ','Obil ','Oboth ','Ocran ','Oded ','Og ','Ohad ','Ohel ','Olympas ','Omar ','Omega ','Omri ','On ','Onam ','Onesimus ','Onesiphorus ','Ono ','Ophel ','Ophir ','Ophni ','Ophrah ','Oreb ','Ornan ','Orpah ','Oshea ','Othni ','Othniel ','Ozem ','Ozias ','Ozni ','Paarai ','Padan-aram ','Padon ','Pagiel ','Pahath-Moab ','Pai ','Palal ','Palestina ','Pallu ','Palti ','Paltiel ','Pamphylia ','Paphos ','Parah ','Paran ','Parbar ','Parmashta ','Parmenas ','Parnach ','Parosh ','Parshandatha ','Paruah ','Pasach ','Pasdammin ','Paseah ','Pashur ','Patara ','Pathros ','Patmos ','Patrobas ','Pau ','Paul ','Paulus ','Pedahzur ','Pedaiah ','Pekah ','Pekahiah ','Pekod ','Pelaiah ','Pelaliah ','Pelatiah ','Peleg ','Pelethites ','Pelonite ','Peniel ','Peninnah ','Pentapolis ','Pentateuch ','Pentecost ','Penuel ','Peor ','Perazim ','Peresh ','Perez ','Perez-Uzza ','Perga ','Pergamos ','Perida ','Perizzites ','Persia ','Persis ','Peruda ','Peter ','Pethahiah ','Pethuel ','Peulthai ','Phalec ','Phallu ','Phalti ','Palti ','Phanuel ','Pharaoh ','Pharez ','Pharisees ','Pharpar ','Phebe ','Phenice ','Phichol ','Philadelphia ','Philemon ','Philetus ','Philip ','Philippi ','Philistines ','Philologus ','Phinehas ','Phlegon ','Phrygia ','Phurah ','Phygellus ','Phylacteries ','Pi-beseth ','Pi-hahiroth ','Pilate ','Pinon ','Piram ','Pirathon ','Pisgah ','Pisidia ','Pison ','Pithom ','Pithon ','Pochereth ','Pontius ','Pontus ','Poratha ','Potiphar ','Potipherah ','Prisca ','Priscilla ','Prochorus ','Puah ','Publius ','Pudens ','Pul ','Punites ','Punon ','Pur ','Putiel ','Puteoli ','Quartus ','Raamah ','Raamiah ','Rabbah ','Rabbi ','Rabmag ','Rab-saris ','Rab-shakeh ','Raca ','Rachab ','Rachal ','Rachel ','Raddai ','Ragau ','Raguel ','Rahab ','Rahab ','Raham ','Rakkath ','Rakkon ','Ram ','Ramah ','Ramath ','Ramathaim-zophim ','Ramath-lehi ','Ramath-mizpeh ','Ramiah ','Ramoth ','Raphah ','Reaiah ','Reba ','Rebekah ','Rechab ','Reelaiah ','Regem ','Regemmelech ','Rehabiah ','Rehob ','Rehoboam ','Rehoboth ','Rehum ','Rei ','Rekem ','Remaliah ','Remmon ','Remphan ','Rephael ','Rephaiah ','Rehpaim ','Rephidim ','Resen ','Reu ','Reuben ','Reuel ','Reumah ','Rezeph ','Rezin ','Rezon ','Rhegium ','Rhesa ','Rhoda ','Rhodes ','Ribai ','Riblah ','Rimmon ','Rinnah ','Riphath ','Rissah ','Rithmah ','Rizpah ','Rogelim ','Rohgah ','Romamti-ezer ','Roman ','Rome ','Rosh ','Rufus ','Ruhamah ','Rumah ','Ruth ','Ryan ','Sabaoth ','Sabeans ','Sabtah ','Sabtechah ','Sacar ','Sadducees ','Sadoc ','Salah ','Salamis ','Salathiel ','Salcah ','Salem ','Salim ','Sallai ','Salma ','Salmon ','Salome ','Samaria ','Samlah ','Samos ','Samothracia ','Samson ','Samuel ','Sanballat ','Sanhedrin ','Sansannah ','Saph ','Saphir ','Sapphira ','Sarah ','Sarai ','Sardis ','Sardites ','Sarepta ','Sargon ','Sarid ','Saron ','Sarsechim ','Saruch ','Satan ','Saul ','Sceva ','Seba ','Sebat ','Secacah ','Sechu ','Secundus ','Segub ','Seir ','Sela ','Sela-hammah-lekoth ','Selah ','Seled ','Seleucia ','Sem ','Semachiah ','Semaiah ','Semei ','Senaah ','Seneh ','Senir ','Sennacherib ','Seorim ','Sephar ','Sepharad ','Sepharvaim ','Serah ','Seraiah ','Seraphim ','Sered ','Sergius ','Serug ','Seth ','Sethur ','Shaalabbim ','Shaalbim ','Shaalbonite ','Schaaph ','Shaaraim ','Shaashgaz ','Shabbethai ','Shachia ','Shadrach ','Shage ','Shalem ','Shalim ','Shalisha ','Shallum ','Shalmai ','Shalman ','Shalmaneser ','Shamariah ','Shamed ','Shamer ','Shamgar ','Shamhuth ','Shamir ','Shammah ','Shammai ','Shammoth ','Shammuah ','Shamsherai ','Shapham ','Shaphat ','Sharai ','Sharar ','Sharezer ','Sharon ','Shashai ','Shashak ','Shaul ','Shaveh ','Shealtiel ','Sheariah ','Shear-jashub ','Sheba ','Shebam ','Shebaniah ','Shebarim ','Sheber ','Shebna ','Shebuel ','Shecaniah ','Shechem ','Shedeur ','Shehariah ','Shelah ','Shelemiah ','Sheleph ','Shelesh ','Shelomi ','Shelumiel ','Shem ','Shema ','Shemaiah ','Shemariah ','Shemeber ','Shemer ','Shemida ','Sheminith ','Shemiramoth ','Shemuel ','Shen ','Shenazar ','Shenir ','Shephatiah ','Shephi ','Shepho ','Shephuphan ','Sherah ','Sherebiah ','Sheshach ','Sheshai ','Sheshan ','Sheshbazzar ','Shethar ','Shethar-boznai ','Sheva ','Shibboleth ','Shibmah ','Shicron ','Shiggaion ','Shihon ','Shihor-libnah ','Shilhi ','Shillem ','Shiloah ','Shiloh ','Shilom ','Shilshah ','Shimeah ','Shimei ','Shimeon ','Shimma ','Shimon ','Shimrath ','Shimshai ','Shimri ','Shimrith ','Shinab ','Shinar ','Shiphi ','Shiphrah ','Shisha ','Shishak ','Shitrai ','Shittim ','Shiza ','Shoa ','Shobab ','Shobach ','Shobai ','Shobal ','Shobek ','Shochoh ','Shoham ','Shomer ','Shophach ','Shophan ','Shoshannim ','Shua ','Shuah ','Shual ','Shubael ','Shuham ','Shulamite ','Shunem ','Shuni ','Shuphim ','Shur ','Shushan ','Shuthelah ','Sia ','Sibbechai ','Sibmah ','Sichem ','Siddim ','Sidon ','Sigionoth ','Sihon ','Sihor ','Silas ','Silla ','Siloa ','Silvanus ','Simeon ','Simon ','Sin ','Sinai ','Sinim ','Sion ','Sippai ','Sinon ','Sisamai ','Sisera ','Sitnah ','Sivan ','Smyrna ','So ','Socoh ','Sodi ','Sodom ','Solomon ','Sopater ','Sophereth ','Sorek ','Sosthenes ','Sotai ','Spain ','Stachys ','Stephanas ','Stephen ','Suah ','Succoth ','Succoth-benoth ','Sud ','Sur ','Susanna ','Susi ','Sychar ','Syene ','Syntyche ','Syracuse ','Taanach ','Taanach-shilo ','Tabbath ','Tabeal ','Taberah ','Tabitha ','Tabor ','Tabrimon ','Tadmor ','Tahan ','Tahapenes ','Tahath ','Tahpenes ','Tahrea ','Talitha-cumi ','Talmai ','Tamah ','Tamar ','Tammuz ','Tanach ','Tanhumeth ','Taphath ','Tappuah ','Tarah ','Taralah ','Tarea ','Tarpelites ','Tarshish ','Tarsus ','Tartak ','Tartan ','Taryn ','Tatnai ','Tebah ','Tebaliah ','Tebeth ','Tehinnah ','Tekel ','Tekoa ','Telabib ','Telah ','Telassar ','Telem ','Telharsa ','Tel-melah ','Tema ','Teman ','Terah ','Teraphim ','Tertius ','Tertullus ','Tetrarch ','Thaddeus ','Thahash ','Thamah ','Tharah ','Thebez ','Thelasar ','Theophilus ','Thessalonica ','Theudas ','Thomas ','Thummim ','Thyatira ','Tibbath ','Tiberias ','Tiberius ','Tibni ','Tidal ','Tiglath-pileser ','Tikvah ','Tilon ','Timeus ','Timnah ','Timnath ','Timnath-heres ','Timon ','Timotheus ','Tiphsah ','Tirhakah ','Tiria ','Tirshatha ','Tirzah ','Tishbite ','Titus ','Toah ','Tob ','Tob-adonijah ','Tobiah ','Tochen ','Togarmah ','Tohu ','Toi ','Tola ','Tolad ','Tophel ','Tophet ','Trachonitis ','Troas ','Trophimus ','Tryphena ','Tryphon ','Tryphosa ','Tubal ','Tubal-cain ','Tychicus ','Tyrannus ','Tyre ','Ucal ','Uel ','Ulai ','Ulam ','Ulla ','Ummah ','Unni ','Uphaz ','Upharsin ','Ur ','Urbane ','Uri ','Uriah ','Uriel ','Urim ','Uthai ','Uz ','Uzai ','Uzal ','Uzzah ','Uzzen-sherah ','Uzzi ','Uzziah ','Vajezatha ','Vaniah ','Vashni ','Vashti ','Vophsi ','Zaanannim ','Zaavan ','Zabad ','Zabbai ','Zabdi ','Zaccai ','Zaccheus ','Zaccur ','Zachariah ','Zadok ','Zaham ','Zair ','Zalaph ','Zalmon ','Zalmonah ','Zalmunna ','Zamzummims ','Zanoah ','Zaphnath-paaneah ','Zarah ','Zareah ','Zared ','Zarephath ','Zaretan ','Zatthu ','Zaza ','Zebadiah ','Zebah ','Zebedee ','Zebina ','Zeboiim ','Zebudah ','Zebul ','Zebulun ','Zechariah ','Zedad ','Zedekiah ','Zeeb ','Zelah ','Zelek ','Zelophehad ','Zelotes ','Zelzah ','Zemaraim ','Zemira ','Zenan ','Zenas ','Zephaniah ','Zephath ','Zepho ','Zer ','Zerah ','Zerahiah ','Zeredah ','Zeresh ','Zereth ','Zeror ','Zeruah ','Zerubbabel ','Zeruiah ','Zethar ','Zia ','Ziba ','Zibeon ','Zibiah ','Zichri ','Ziddim ','Zidkijah ','Zidon ','Zif ','Ziha ','Ziklag ','Zillah ','Zilpah ','Zilthai ','Zimmah ','Zimran ','Zimzi ','Zin ','Zina ','Zion ','Zior ','Ziph ','Ziphron ','Zippor ','Zipporah ','Zithri ','Ziz ','Ziza ','Zoan ','Zoar ','Zobah ','Zohar ','Zoheleth ','Zoheth ','Zophah ','Zophar ','Zophim ','Zorah ','Zorobabel ','Zuar ','Zuph ','Zur ','Zuriel ','Zurishaddai ','Zuzims');

        DB::table('char_names')->delete();

        foreach($names as $n){
            DB::table('char_names')->insert([
                'name' => $n,
            ]);
        }

    }
}