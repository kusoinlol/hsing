<?php

namespace Anthony\Hsing\Controller\Api;

use Anthony\Hsing\Controller\BaseController;

use Phalcon\Mvc\Model\Query;
use \Exception;

class ProjectController extends BaseController
{
    public function getInfoAction()
    {
        try {
            $test = $this->redis->ping();
            var_dump($test);
            
            $this->view->songCount  = "1";
            $this->view->updateTime = "2";
            $this->view->excel      = "3";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    public function getProjectListAction()
    {
        echo "getProjectList";exit;
    }

    public function getProjectAction($projectId)
    {
        echo "getProject " . $projectId;exit;
    }

    public function addProjectAction()
    {
        # code...
    }

    public function deleteProjectAction($projectId)
    {
        # code...
    }

    public function updateProject($projectId)
    {
        # code...
    }
}