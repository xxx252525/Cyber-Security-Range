<?php  
    header("content-type:text/html;charset=utf-8");  
            //����ԭ�������ļ�  
		require 'class.SMTP.php';			
        require 'class.PHPMailer.php';  
        class Mail {  
                static public $error = '';  
                static public function send($title,$content,$user,$address,$username="mainding@163.com",$password="MBBUkpfYsR2cwked"){  
                        $mail= new PHPMailer();  
                        /*�����������Ϣ*/  
                        $mail->IsSMTP();                 //����ʹ��SMTP����������  
                        $mail->SMTPAuth  = true;               //����SMTP��֤  
                        $mail->Host     = 'smtp.163.com';        //���� SMTP ������,�Լ�ע�������������ַ QQ����ssl://smtp.qq.com  
                        $mail->Username   = $username;  //�����˵��������ƣ������������� zzy9i7@163.com �����д  
                        $mail->Password   = $password;    //�����˵���������  
                        /*������Ϣ*/  
                        $mail->IsHTML(true);               //ָ���ʼ���ʽΪ��html *����trueĬ��Ϊ��text�ķ�ʽ���н���  
                        $mail->CharSet    ="UTF-8";               //����  
                        $mail->From       = $username;             //��������������������  
                        $mail->FromName   = $user;            //����������  
                        $mail->Subject    = $title;               //�ŵı���  
                        $mail->MsgHTML($content);                 //������������  
                        //$mail->AddAttachment("15.jpg");         //����  
                        /*�����ʼ�*/  
                        $mail->AddAddress($address);              //�ռ��˵�ַ  
                        //ʹ��send�������з���  
                        if($mail->Send()) {  
                            return true;  
                        } else {  
                             self::$error=$mail->ErrorInfo;  
                             return   false;  
                        }  
                }  
        }  
    ?>