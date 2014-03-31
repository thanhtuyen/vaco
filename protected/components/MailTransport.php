<?php /**
 * MailTransport
 *
 * @package EMS v1.0
 * @author TNT
 * @copyright 2013
 * @version $Id$
 * @access public
 */
class MailTransport {

    /**
     * Send Email
     *
     * @param string $from
     * @param mixed $to
     * @param mixed $subject
     * @param mixed $body
     * @param string $cc
     * @param mixed $attachedFiles
     * @param integer $realname
     * @param string $hostInfo
     * @return void
     */
    public static function sendMail($from, $to, $subject, $body, $cc = '', $attachedFiles = array(), $realname = 1, $hostInfo = '') {

      $message = new YiiMailMessage;
      $message->setSubject($subject)
              ->setFrom($from)
              ->setTo($to)
              ->setBody($body, 'text/html');

        if ($cc != '') {
            if (is_string($cc)) {
                $cc = array($cc);
            }
            $message->setCc($cc);
        }
        foreach ($attachedFiles as $file) {
        	if($realname){
        		$attachment = Swift_Attachment::fromPath($file);
        	}else{
        		if(isset($file['path'])){
	        		$attachment = Swift_Attachment::fromPath($file['path']);
	        		if(isset($file['newname'])){
	        			$attachment->setFilename($file['newname']);
	        		}
        		}
        	}

            $message->attach($attachment);
        }
      Yii::app()->mail->send($message);

    }

}
