<?php
/**
 * Specific
 *
 * Allows to gather all little helpers and miscellaneous hacks for a project.
 *
 * @copyright Copyright Daniel Berthereau, 2014
 * @license http://www.cecill.info/licences/Licence_CeCILL_V2.1-en.txt
 * @package Specific
 */

/**
 * The Specific plugin.
 * @package Omeka\Plugins\Specific
 */
class SpecificPlugin extends Omeka_Plugin_AbstractPlugin
{
    /**
     * @var array Filters for the plugin.
     */
    protected $_filters = array(
        'collections_select_options',
    );

    /**
     * Manage search options for collections.
     *
     * @param array Search options for collections.
     * @return array Filtered search options for collections.
     */
    public function filterCollectionsSelectOptions($options)
    {
        asort($options);
        return $options;
    }
}
