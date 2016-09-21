<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Gui\Communication\Plugin\Twig;

use Generated\Shared\Transfer\ZedTabsViewTransfer;
use Spryker\Shared\Twig\TwigFunction;

class TabsFunction extends TwigFunction
{

    /**
     * @return string
     */
    protected function getFunctionName()
    {
        return 'tabs';
    }

    /**
     * @return callable
     */
    protected function getFunction()
    {
        return [$this, 'tabs'];
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        $options = parent::getOptions();

        $options['needs_environment'] = true;

        return $options;
    }

    /**
     * @param \Twig_Environment $twig
     * @param \Generated\Shared\Transfer\ZedTabsViewTransfer $zedTabsViewTransfer
     * @param array $context
     *
     * @return string
     */
    public function tabs(\Twig_Environment $twig, ZedTabsViewTransfer $zedTabsViewTransfer, array $context = [])
    {
        $context['zedTabsViewTransfer'] = $zedTabsViewTransfer;

        return $twig->render('@Gui/Tabs/tabs.twig', $context);
    }

}