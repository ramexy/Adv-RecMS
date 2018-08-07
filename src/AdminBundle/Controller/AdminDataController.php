<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AdminDataController extends Controller{
    /**
     * @Route("/import", name="import_data")
     */
    public function importAction(){
        return $this->render('admin/admin_import_data.html.twig');
    }

    //this will be the admin implementation for Advatech devices
//    /**
//     * @Route("/devices", name="devices")
//     */
//    public function showDevices(){
//        return $this->render('admin/admin_show_devices.html.twig');
//    }

}