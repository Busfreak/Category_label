<?php

namespace Kanboard\Plugin\Category_label;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;
use Kanboard\Core\Security\Role;

class Plugin extends Base
{
    public function initialize()
    {
        $this->helper->register('Category_labelHelper', '\Kanboard\Plugin\Category_label\Helper\Category_labelHelper');
        $this->template->setTemplateOverride('project_header/search', 'category_label:project_header/search');
        $this->template->hook->attach('template:project:sidebar', 'category_label:project/sidebar');
        $this->projectAccessMap->add('category_label', '*', Role::PROJECT_MANAGER);
    }

     public function onStartup()
    {
        Translator::load($this->language->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getClasses()
    {
        return array(
            'Plugin\Category_label\Model' => array(
                'Category_label',
            )
        );
    }

    public function getPluginName()
    {
        return 'Category label';
    }

    public function getPluginDescription()
    {
        return t('Rename the Category label in filter drop down');
    }

    public function getPluginAuthor()
    {
        return 'Martin Middeke';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

	    public function getPluginHomepage()
    {
        return 'https://github.com/Busfreak/Category_label';
    }
}