<?php
namespace Kanboard\Plugin\Category_label\Helper;

use Kanboard\Core\Base;

/**
 * Category_label Helper
 *
 * @package helper
 * @author  Martin Middeke
 */
class Category_labelHelper extends Base
{
    /**
     * Get category label
     *
     * @access public
     * @param  int  $project_id
     * @return string
     */
    public function CategoryLabel($project_id)
    {
        return $this->category_label->getCategoryLabel($project_id);
    }

    /**
     * Get category label negation
     *
     * @access public
     * @param  int  $project_id
     * @return string
     */
    public function CategoryLabelNegation($project_id)
    {
        return $this->category_label->getCategoryLabelNegation($project_id);
    }
}
