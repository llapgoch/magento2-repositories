<?php
namespace Training\Repository\Model;
use \Training\Repository\Model\ResourceModel\Training\CollectionFactory;

class TrainingRepository implements \Training\Repository\Api\TrainingRepositoryInterface{
    protected $_trainingCollection;


    public function __construct(
        CollectionFactory $trainingCollection)
    {
        $this->_trainingCollection = $trainingCollection;
    }

    public function getList(){
        return $this->_trainingCollection->create();
    }
}
