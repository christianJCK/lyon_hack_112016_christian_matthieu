<?php


namespace LyliBundle\Controller;

use LyliBundle\Entity\Opendata;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LyliController extends Controller
{
    public function indexAction()
    {
        return $this->render('front/index.html.twig');
    }

    /*public function arrayAction()
    {
        $string = file_get_contents($this->get('kernel')->getRootDir()."/../web/rdata.json");
        $data = json_decode($string, true);

        $sites = $data["features"];
        $em = $this->getDoctrine()->getManager();
        foreach ($sites as $site) {
            $open = new Opendata();
            $open->setNom($site["properties"]["nom"]);
            $open->setType($site["properties"]["type"]);
            $open->setAdresse($site["properties"]["adresse"]);
            $open->setCodepostal($site["properties"]["codepostal"]);
            $open->setCommune($site["properties"]["commune"]);
            $open->setTelephone($site["properties"]["telephone"]);
            $open->setEmail($site["properties"]["email"]);
            $open->setSiteweb($site["properties"]["siteweb"]);
            $open->setTarifsmin($site["properties"]["tarifsmin"]);
            $open->setTarifsmax($site["properties"]["tarifsmax"]);
            $open->setLongitude($site["geometry"]["coordinates"][0]);
            $open->setLatitude($site["geometry"]["coordinates"][1]);

            $em->persist($open);
        }
        $em->flush();
        return $this->render('front/array.html.twig');
    }*/
}

