<?php/** * This example shows making an SMTP connection with authentication. *///SMTP needs accurate times, and the PHP time zone MUST be set//This should be done in your php.ini, but this is how to do it if you don't have access to that//date_default_timezone_set('Etc/UTC');require APPPATH . 'third_party/smtp_mail/PHPMailerAutoload.php';class SMTP_mail {    public $mail;    public $sender_email;    public $username;    public $password;    public $host;    public $port;    public $subject;    public $sender_name;    // public $product_name;    public function __construct() {//        $this->mail = new PHPMailer;//        $this->port = 465;//        $this->host = "mail.linkpan.com";//        $this->username = "info@linkpan.com";//        $this->password = "Info@4773";//                        $this->mail = new PHPMailer;        $this->port = 465;        $this->host = "mail.codexives.com";               $this->username = "info@codexives.com";        $this->password = "jeny7001@";               }    public function contactusEmail($data=array()) {        $this->sender_email = 'info@codexives.com';        $this->sender_name = 'JRE Inquiry mail';        $this->subject = 'Inquiry mail from JRE';        $this->mail->isSMTP();        $this->mail->SMTPDebug = 0;        $this->mail->Debugoutput = 'html';        $this->mail->Host = $this->host;        $this->mail->Port = $this->port;        $this->mail->SMTPAuth = true;        $this->mail->SMTPSecure = true;        $this->mail->Username = $this->username;        $this->mail->Password = $this->password;        $this->mail->setFrom($this->sender_email,$this->sender_name);        $this->mail->addReplyTo($this->sender_email);        //        $this->mail->addAddress('pareshpatel@hotmail.co.nz');        $this->mail->addAddress('vasimlook@gmail.com');        $this->mail->Subject = $this->subject;               $html = file_get_contents(APPPATH . "third_party/smtp_mail/inquiry.html");        $word = array('{{viewer_name}}','{{viewer_contact}}','{{viewer_email}}','{{property_address}}','{{date_time}}');        $replace = array($data['viewer_name'],$data['viewer_contact'],$data['viewer_email'],$data['property_address'],$data['date_time']);        $html = str_replace($word, $replace, $html);        $this->mail->msgHTML($html, dirname(__FILE__));        $this->mail->AltBody = "";        $resultMail = array();        $resultMail['success'] = 0;        $res = $this->mail->send();                                if ($res == 1) {            $resultMail['success'] = 1;            return $resultMail;        } else {            $resultMail['Error'] = "Mailer Error: " . $this->mail->ErrorInfo;            return $resultMail;        }    }}?>