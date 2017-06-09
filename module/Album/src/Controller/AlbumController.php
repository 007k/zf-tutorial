<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

// Add the following import:
use Album\Model\AlbumTable;

class AlbumController extends AbstractActionController
{
    // Add this property:
    private $table;

    // Add this constructor:
    public function __construct(AlbumTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        echo "kishan";
        //print_r(expression)$this->table->fetchAll();
        //die('kishan kk');
        return new ViewModel([
            'albums' => $this->table->fetchAll(),
        ]);

    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}