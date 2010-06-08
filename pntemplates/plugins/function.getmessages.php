<?php
/**
 * $Id$
 *
 * InterCom - an advanced private messaging solution for Postnuke
 *
 */

/**
 * Smarty function to reads the messages for the current user
 *
 * Example
 * <!--[getmessages]-->
 *
 * @author       Carsten Volmer
 * @since        29/09/08
 */

function smarty_function_getmessages($params, &$smarty)
{
    $countonly   = isset($params['countonly'])   ? $params['countonly'] : false;

    if($countonly == false)
    {
        $username = pnUserGetVar('name');
        $messagearray = pnModAPIFunc('InterCom', 'user', 'getmessages', array('boxtype'  => 'msg_inbox', 'orderby'  => 3));

        if($messagearray) {
            $keys = array_keys($messagearray);
            foreach ($keys as $key) {
                $messagearray[$key]['fromuser'] = pnUserGetVar('uname', $messagearray[$key]['from_userid']);
            }
        }
        $smarty->assign('messages', $messagearray);
    }
    $smarty->assign('totalarray', pnModAPIFunc('InterCom', 'user', 'getmessagecount', ''));

    return;
}
