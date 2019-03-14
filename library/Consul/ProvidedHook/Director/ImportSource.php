<?php

namespace Icinga\Module\Consul\ProvidedHook\Director;

use Icinga\Module\Director\Hook\ImportSourceHook;
use Icinga\Module\Director\Web\Form\QuickForm;
use SensioLabs\Consul\ServiceFactory;

/**
 * Class ImportSource
 *
 * This is where we provide an Import Source for the Icinga Director
 */
class ImportSource extends ImportSourceHook
{
    public function getName()
    {
        return 'HashiCorp Consul';
    }

    public function fetchData()
    {
        $sf = new ServiceFactory(array('base_uri' => $this->getSetting('consul_url')));
        $agent = $sf->get('agent');
        return json_decode($agent->members()->getBody());
    }

    public function listColumns()
    {
        return array_keys((array) current($this->fetchData()));
    }

    /**
     * @inheritdoc
     */
    public static function getDefaultKeyColumnName()
    {
        return 'Name';
    }

    /**
     * @inheritdoc
     * @throws \Zend_Form_Exception
     */
    public static function addSettingsFormFields(QuickForm $form)
    {
        /** @var $form \Icinga\Module\Director\Forms\ImportSourceForm */
        $form->addElement('text', 'consul_url', array(
            'label'        => 'HTTP API URL',
            'required'     => true,
            'value'        => 'http://127.0.0.1:8500',
        ));
        return;
    }
}
