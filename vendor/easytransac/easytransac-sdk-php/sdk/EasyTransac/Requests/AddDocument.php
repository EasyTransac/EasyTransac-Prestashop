<?php

namespace EasyTransac\Requests;

use \EasyTransac\Entities\Entity;

/**
 * API function /kyc/add, add a new document
 * @author Klyde
 * @copyright EasyTransac
 */
class AddDocument extends Request
{
    /** @object:Document **/
    protected $response;

    /**
     * {@inheritDoc}
     * @see \EasyTransac\Requests\Request::execute()
     */
    public function execute(Entity $entity)
    {
        return $this->call('/kyc/add', $entity);
    }
}

?>