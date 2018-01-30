<?php

namespace AppBundle\Controller;

use AppBundle\Document\bdpme;
use AppBundle\Document\ciscip;
use AppBundle\Document\ciscpd;
use AppBundle\Document\cisgener;
use AppBundle\Document\cishassmr;
use AppBundle\Document\info;
use AppBundle\Document\compo;
use AppBundle\Document\has;
use AppBundle\Document\hasliens;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;
use Symfony\Component\HttpFoundation\Response;

class ImportController extends Controller
{
    /**
     * @Route("/import", name="import")
     */
    public function importAction()
    {
        set_time_limit(0);
        $medicament = array(); // array = tableau

        // configuration la demande
        $config = new LexerConfig();
        $config->setDelimiter(";");
        $lexer = new Lexer($config);

        $interpreter = new Interpreter();
        $interpreter->addObserver(function (array $row) use (&$medicament) {
            // parcourir le document
            $product = new bdpme();
            $product->setCodecis($row[0]);
            $product->setDenominationdumedicament($row[1]);
            $product->setForme($row[2]);
            $product->setStatut($row[3]);
            $product->setType($row[4]);
            $product->setcommercialisation($row[5]);
            $product->setdate($row[6]);
            $product->setdate($row[7]);
            $product->setstatutBdm($row[8]);
            $product->setNumerodelautorisation($row[9]);
            $product->setTitulaire($row[10]);
            $product->setSurveillance($row[11]);

            //connection la base de donnée mongodb

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();

        });
        // trouve le fichier
        $lexer->parse(__DIR__ . '/../../../import/bdpme.csv', $interpreter);


        //création  dans mongo

        return new Response('ok');

        // méchant cherinou paas de bisous LOL
    }

    /**
     * @Route("/import2", name="import2")
     */
    public function import2Action()

    {
        set_time_limit(0);
        $medicament = array();

        $config = new LexerConfig();
        $config->setDelimiter("\t")->setToCharset('UTF-8')->setFromCharset('ISO-8859-1');

        $lexer = new Lexer($config);

        $interpreter = new Interpreter();
        $interpreter->addObserver(function (array $row) use (&$medicament) {
            $product = new ciscip();
            $product->setCode($row[0]);
            $product->setLibelle($row[1]);
            $product->setStatut($row[2]);
            $product->setCommercialisation($row[3]);
            $product->setDate($row[4]);
            $product->setCipp13($row[5]);
            $product->setCollectivite($row[6]);
            $product->setRemboursement($row[7]);
            $product->setPrix($row[8]);
            $product->setPresentant($row[9]);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();

        });

        $lexer->parse(__DIR__ . '/../../../import/CIS_CIP_bdpm.txt', $interpreter);

        return new Response('ok');
    }
    /**
     * @Route("/import3", name="import3")
     */
    public function import3 () {
        set_time_limit(0);
        $medicament = array();

        $config = new LexerConfig();
        $config->setDelimiter("\t")->setToCharset('UTF-8')->setFromCharset('ISO-8859-1');

        $lexer = new Lexer($config);

        $interpreter = new Interpreter();
        $interpreter->addObserver(function (array $row) use (&$medicament) {
            $product = new compo();
            $product->setcode($row[0]);
            $product->setdesignation($row[1]);
            $product->setsubstance($row[2]);
            $product->setDesignation($row[3]);
            $product->setDosage ($row[4]);
            $product->setreference($row[5]);
            $product->setnature($row[6]);
            $product->setnumero($row[7]);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();

        });
        $lexer->parse(__DIR__ . '/../../../import/CIS_COMPO_bdpm.txt', $interpreter);

        return new Response('ok');


    }
    /**
     * @Route("/import4", name="import4")
     */
    public function import4 ()
    {
        set_time_limit(0);
        $medicament = array();

        $config = new LexerConfig();
        $config->setDelimiter("\t")->setToCharset('UTF-8')->setFromCharset('ISO-8859-1');

        $lexer = new Lexer($config);

        $interpreter = new Interpreter();
        $interpreter->addObserver(function (array $row) use (&$medicament) {
            $product = new has();
            $product->setCode($row[0]);
            $product->setdossier($row[1]);
            $product->setMotif($row[2]);
            $product->setDate($row[3]);
            $product->setValeur($row[4]);
            $product->setLibelle($row[5]);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();


        });

        $lexer->parse(__DIR__ . '/../../../import/CIS_HAS_SMR_bdpm.txt', $interpreter);

        return new Response('ok');

    }

    /**
     * @Route("/import5", name="import5")
     */
    public function import5 ()
    {
        set_time_limit(0);
        $medicament = array();

        $config = new LexerConfig();
        $config->setDelimiter("\t")->setToCharset('UTF-8')->setFromCharset('ISO-8859-1');

        $lexer = new Lexer($config);

        $interpreter = new Interpreter();
        $interpreter->addObserver(function (array $row) use (&$medicament) {
            $product = new cishassmr();
            $product->setcodecis($row[0]);
            $product->setcodedossierhas($row[1]);
            $product->setmotifevaluation($row[2]);
            $product->settransparence($row[3]);
            $product->setvaleursmr($row[4]);
            $product->setLibellesmr($row[5]);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();


        });

        $lexer->parse(__DIR__ . '/../../../import/CIS_HAS_SMR_bdpm.txt', $interpreter);

        return new Response('ok');

    }
     /**
     * @Route("/import6", name="import6")
     */
    public function import6 ()
    {
        set_time_limit(0);
        $medicament = array();

        $config = new LexerConfig();
        $config->setDelimiter("\t")->setToCharset('UTF-8')->setFromCharset('ISO-8859-1');

        $lexer = new Lexer($config);

        $interpreter = new Interpreter();
        $interpreter->addObserver(function (array $row) use (&$medicament) {
            $product = new hasliens();
            $product->setCodecis($row[0]);
            $product->setLienpagesavis($row[1]);
         ;

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();


        });

        $lexer->parse(__DIR__ . '/../../../import/HAS_LiensPageCT_bdpm.txt', $interpreter);

        return new Response('ok');

    }

    /**
     * @Route("/import7", name="import7")
     */
    public function import7 ()
    {
        set_time_limit(0);
        $medicament = array();

        $config = new LexerConfig();
        $config->setDelimiter("\t")->setToCharset('UTF-8')->setFromCharset('ISO-8859-1');

        $lexer = new Lexer($config);

        $interpreter = new Interpreter();
        $interpreter->addObserver(function (array $row) use (&$medicament) {
            $product = new cisgener();
            $product->setprinceps ($row[0]);
            $product->setGenerique($row[1]);
            ;

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();


        });

        $lexer->parse(__DIR__ . '/../../../import/CIS_GENER_bdpm.txt', $interpreter);

        return new Response('ok');

    }
     /**
     * @Route("/import8", name="import8")
     */
    public function import8 ()
    {
        set_time_limit(0);
        $medicament = array();

        $config = new LexerConfig();
        $config->setDelimiter("\t")->setToCharset('UTF-8')->setFromCharset('ISO-8859-1');

        $lexer = new Lexer($config);

        $interpreter = new Interpreter();
        $interpreter->addObserver(function (array $row) use (&$medicament) {
            $product = new ciscpd();
            $product->setCodeCIS ($row[0]);
            $product->setPrescription($row[1]);
            ;

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();


        });

        $lexer->parse(__DIR__ . '/../../../import/CIS_CPD_bdpm.txt', $interpreter);

        return new Response('ok');

    }
    /**
     * @Route("/import9", name="import9")
     */
    public function import9 ()
    {
        set_time_limit(0);
        $medicament = array();

        $config = new LexerConfig();
        $config->setDelimiter("\t")->setToCharset('UTF-8')->setFromCharset('ISO-8859-1');

        $lexer = new Lexer($config);

        $interpreter = new Interpreter();
        $interpreter->addObserver(function (array $row) use (&$medicament) {
            $product = new info();
            $product->setcodecis ($row[0]);
            $product->setDatedebut($row[1]);
            $product->setDatedebut($row[2]);
            $product->setAfficher($row[3]);

            ;

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();


        });

        $lexer->parse(__DIR__ . '/../../../import/CIS_InfoImportantes_20171205153220_bdpm.txt', $interpreter);

        return new Response('ok');

    }


}


