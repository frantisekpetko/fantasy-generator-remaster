<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharCharacteristicFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characteristic_features = array('démonický','cynický','andělský',' aktivní',' asertivní',' arogantní',' apatický',' angažovaný',' agresivní',' asociální',' antipatický',' akurátní',' bedlivý',' bdělý',' básnivý',' bláznivý',' brutální',' blouznivý',' blazeovaný',' bezuzdný',' bouřlivý',' bezstarostný',' bázlivý',' blahosklonný',' bystrý',' bohémský',' břitký',' byrokratický',' bojácný',' cílevedomý',' citlivý',' ctižádostivý',' cynický',' ctnostný',' čistý',' čiperný',' čilý',' čistotný',' činorodý',' dobrotivý',' dobrosrdečný',' dávající',' duchovní',' depresivní',' dotěrný',' divoký',' dobromyslný',' domýšlivý',' dravý',' drsný',' drzý',' důkladný',' důveryhodný',' důvtipný',' džentlmenský',' duchaplný',' darmožrout',' dětinský',' důmyslný',' elegantní',' emancipovaný',' egoistický',' emotivní',' exhibicionistický',' extrovertní',' emotivní',' egocentrický',' famózní',' frustrovaný',' fanatický',' farizejský',' flegmatický',' frigidní',' fintivý',' fetišistický',' furiantský',' fanfarónský',' falešný',' gurmánský',' geniální',' hezký',' hodný',' hrdý',' hodnověrný',' houževnatý',' hravý',' hašteřivý',' hédonistický',' hloubavý',' hněvivý',' hanebný',' hovorný',' hrubý',' hrdý',' humanistický',' hysterický',' humorný',' chytrý',' charakterní',' chlubivý',' chladný',' chamtivý',' charizmatický',' choulostivý',' chtivý',' chápavý',' chytlavý',' cholerický',' inspirativní',' intuitivní',' invenční',' introspektivní',' impulzivní',' infantilní',' instinktivní',' intelektuální inspirativní',' iracionální',' ironický',' jasnozřivý',' jistý',' jasnovidný',' jednoduchý',' jízlivý',' ješitný',' klidný',' kreativní',' kouzelný',' komunikativní',' krvežíznivý',' krutý',' kamarádský',' korektní',' kolísavý',' kolegiální',' konzervativní',' konstruktivní',' konformní',' konvenční',' korektní',' krečovitý',' kultivovaný',' kategorický',' koketní',' krátkozraký',' kajícný',' laskavý',' líbezný',' láskyplný',' lidumilný',' lidský',' loajální',' labilní',' lakomý',' lekavý',' letargický',' ležérní',' lhostejný',' licoměrný',' lítostivý',' logický',' loudavý',' lstivý',' lehkomyslný',' laškovný',' lehkovážný',' milý',' mlčenlivý',' mocný',' mravný',' milující',' mírný',' malicherný',' manipulativní',' marnivý',' mazaný',' měkký',' melancholický',' mlčenlivý',' mluvný',' metodický',' milostivý',' milosrdný',' mírumilovný',' mlčenlivý',' moudrý',' mstivý',' materialistický',' mravný',' mužný',' mateřský',' málomluvný',' maniodepresivní',' morbidní',' marnotratný',' malomyslný',' mocichtivý',' nezištný',' nežný',' nadšený',' nadutý',' nabubřelý',' nábožný',' naivní',' náladový',' narcistický',' násilný',' náruživý',' nedbalý',' neangažovaný',' nedisciplinovaný',' neduveřivý',' neformální',' nekonvencní',' nestabilní',' nejapný',' nejistý',' nemilosrdný',' nenucený',' neobratný',' neohrožený',' nenasytný',' neokázalý',' neomalený',' nepevný',' nesystematický',' nepoddajný',' nevychovaný',' netolerantní',' nepraktický',' nerozhodný',' nepríčetný',' nepřizpusobivý',' neurotický',' netaktní',' nerozhodný',' nesamostatný',' nejistý',' nesmělý',' nesnášenlivý',' nestoudný',' nelogický',' nesoustředený',' nespolehlivý',' nespoutaný',' nestřídmý',' netečný',' netrpělivý',' neupřímný',' neurotický',' neústupný',' nevázaný',' nevšímavý',' nevypocitatelný',' nezávislý',' nezdolný',' nezkrotný',' notorický',' nudný',' nicotný',' nekorektní',' nonšalantní',' nepredvídatelný',' nervózní',' nespolecenský',' namyšlený',' nedůtklivý',' nedůvěryhodný',' necestný',' nervní',' neoblomný',' ochotný',' opatrný',' opravdový',' ostýchavý',' odvážný',' ohleduplný',' originální',' otevřený',' obezřetný',' objektivní',' obratný',' obsesivní',' oddaný',' odevzdaný',' odhodlaný',' odmítavý',' odolný',' otrocký',' oduševnelý',' ochotný',' okázalý',' operativní',' opatrný',' opovržlivý',' ostražitý',' ostrovtipný',' obezřetný',' otevřený',' otrlý',' otupělý',' ovlivnitelný',' ochranitelský',' odtažitý',' okázalý',' pilný',' pozorný',' poctivý',' pečlivý',' plachý',' půvabný',' pričinlivý',' pružný',' paranoidní',' podlý',' povýšený',' podrážděný',' panovačný',' pasivní',' pečlivý',' pedantní',' perfekcionistický',' perverzní',' pesimistický',' plodný',' plactivý',' plachý',' pocestný',' poddajný',' podezíravý',' podlézavý',' podnikavý',' poetický',' pohotový',' pohodlný',' pohrdlivý',' pokrokový',' pomatený',' přizpusobivý',' pomstychtivý',' poníženecký',' popichovačný',' popudlivý',' porádkumilovný',' pokrokový',' povolný',' povrchní',' pozér',' pozorný',' poživačný pracovitý',' přítulný',' předvídatelný',' přátelský',' pragmatický',' praktický',' pravdomluvný',' precizní',' prospěchářský',' provokatérský',' prozíravý',' prozřetelný',' průbojný',' precitlivelý předpojatý',' předvídavý',' přejný',' přemýšlivý',' přesný',' přesvědčivý',' příkrý',' přičinlivý',' přísný',' přístupný',' přívětivý',' prízemní přizpůsobivý',' pudový',' puritánský',' pyšný',' pilný',' přejícný',' pokorný',' pokojný',' potmešilý paličatý',' pompézní',' povýšenecký',' poddajný',' potřeštený',' rozumný',' rozhodný',' rozvážný',' realistický',' roztomilý',' rozšafný',' racionální',' radikální',' razantní',' rázný',' reaktivní',' receptivní',' rezistentní rigidní',' rozpustilý',' rozkolísaný',' rozporuplný',' rozptýlený',' rozštěpený',' roztržitý',' rozvážný',' roztříštený',' rozmazlený',' radostný',' řádný řečný',' skromný',' soucitný',' spravedlivý',' snášenlivý',' soustředený',' sebevědomý',' samostatný',' starostlivý',' sdílný',' solidární',' systematický',' staromódní',' sadistický',' samolibý',' sarkastický',' sdílný',' solidární',' sebekritický',' sentimentální',' senzitivní',' sexistický',' skeptický',' skleslý',' sklíčený',' skoupý',' slaboduchý',' sociopatický',' slávychtivý',' směšný',' smířlivý',' snobský',' souputnický',' solidní',' soutěživý',' sportovní',' srdnatý',' statický',' stereotypní',' strojený',' střízlivý',' stydlivý',' svárlivý',' svědomitý',' svéhlavý',' světácký',' svévolný',' svéhlavý',' sveřepý',' svobodomyslný',' sukničkářský',' společenský',' sangvinistický',' šikovný',' štědrý',' šlechetný',' šílený',' šarmantní',' švihácký',' šaškovský',' štvavý',' tichý',' tvořivý',' tajemný',' těšící',' tolerantní',' taktický',' taktní',' talentovaný',' teatrální',' těkavý',' temperamentní',' težkopádný',' titánský',' toporný',' trucovitý',' tvrdošíjný',' trudomyslný',' troufalý',' tajuplný',' upřímný',' uctivý',' ukázněný',' učenlivý',' uklidnující',' uhlazený',' uhýbavý',' umíněný',' upřený',' urputný',' ustaraný',' uvážlivý',' uvědomělý',' uvolněný',' uznalý',' upjatý',' udatný',' urážlivý',' uspěchaný',' uzavřený',' ústupný',' útlocitný',' útočný',' úzkostný',' útočný',' úderný',' velkorysý',' veselý',' vitální',' vtipný',' vážný',' vůdcí',' věrný',' vyrovnaný',' vnímavý',' vynalézavý',' vztahovačný',' váhavý',' vášnivý',' věčný',' volnomyšlenkářský',' vrtošivý',' všestranný',' všetecný',' všímavý',' vyhýbavý',' výbojný',' výkonný',' výmluvný',' vyspělý',' vzdorovitý',' vznešený',' vzpurný',' variabilní',' zkušený',' zralý',' zdravý',' zářící',' zvídavý',' zanícený',' zapomnetlivý',' zádumcivý',' zákerný',' zakřiknutý',' zakomplexovaný',' zamyšlený',' zarmoucený',' zarputilý',' zásadový',' zasmušilý',' zatvrzelý',' závistivý',' zbrklý',' zdrženlivý',' zručný',' zvědavý',' zvrácený',' zženštilý',' zmužilý',' zaujatý',' záludný',' znalý',' ziskuchtivý',' zapšklý',' zranitelný',' zmatkárský',' žárlivý',' žertovný',' žalostivý živý',' žravý',' bodrý',' citový',' fantazijní',' žoviální',' zodpovědný',' vytrvalý',' úskocný',' ušlechtilý',' šetrný',' rychlý',' pomalý',' duvěrivý',' energický',' pracovitý',' cestný',' moudrý',' grandiózní',' harmonický',' jemný',' nadaný',' obětavý',' trpělivý');

        DB::table('char_characteristic_features')->delete();

        foreach($characteristic_features as $c){
            DB::table('char_characteristic_features')->insert([
                'name' => $c,
            ]);
        }
    }
}
