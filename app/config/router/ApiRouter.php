<?php
/**
 * Api Router
 *
 * @category Router
 * @package  Api
 * @author   Anthonyhsiao
 */
class ApiRouter extends Phalcon\Mvc\Router\Group
{
    /**
     * Router Group init
     *
     * @return void
     */
    public function initialize()
    {
        $this->setPrefix('/api');
        $this->setPaths(
            [
             'namespace' => 'Anthony\Hsing\Controller\Api',
            ]
        );

        $this->addGet(
            '/project',
            [
             'controller' => 'project',
             'action'     => 'getProjectList',
            ]
        );

        $this->addGet(
            '/project/{projectId}',
            [
             'controller' => 'project',
             'action'     => 'getProject',
            ]
        );

        $this->addPost(
            '/project',
            [
             'controller' => 'project',
             'action'     => 'addProject',
            ]
        );

        $this->addDelete(
            '/project/{projectId}',
            [
             'controller' => 'project',
             'action'     => 'deleteProject',
            ]
        );

        $this->addPut(
            '/project/{projectId}',
            [
             'controller' => 'project',
             'action'     => 'updateProject',
            ]
        );
        
    }
}