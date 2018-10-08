<?php

namespace SprykerEco\Zed\ChannelPilot\Communication\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

/**
 * @method \SprykerEco\Zed\ChannelPilot\Business\ChannelPilotFacade getFacade()
 * @method \SprykerEco\Zed\ChannelPilot\Communication\ChannelPilotCommunicationFactory getFactory()
 * @method \SprykerEco\Zed\ChannelPilot\Persistence\ChannelPilotQueryContainer getQueryContainer()
 */
class IndexController extends AbstractController
{
    const GET_STATUS = "status";
    const GET_IMPORT_ORDERS = "orders";
    const GET_EXPORT = "export";
    const GET_TEST = "test";
    const GET_REGISTER = "register";

    const XML_HEADER_CONTENT_TYPE = 'Content-Type';
    const XML_HEADER_VALUES = 'application/xml; charset=utf-8';

    /**
     * @return array
     */
    public function indexAction(Request $request)
    {

        $method = $request->query->get('method');

        if ($method == self::GET_EXPORT) {
            $response = new Response;
            $response->headers->set(self::XML_HEADER_CONTENT_TYPE, self::XML_HEADER_VALUES);
            $response->setContent($this->getFactory()
                ->getChannelPilotBusinessFactory()
                ->getCpExportFacade()
                ->getExportData());
            return $response;
        }
        return null;
    }
}
