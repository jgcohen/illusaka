<?php

namespace App\Classe;
use Mailjet\Client;
use Mailjet\Resources;

class Mail
{
    private $api_key = "ef0ccd21809cb45dbe9b32875686021e";
    private $api_key_secret = "32692d351839fce1e3e67bbbfdfcc003";
    
    public function send($subject,$content)
    {
        $mj = new Client($this->api_key,$this->api_key_secret,true,['version' => 'v3.1']);
$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "j.g.cohen@hotmail.fr",
                'Name' => "A-Ka"
            ],
            'To' => [
                [
                    'Email' => "j.g.cohen@hotmail.fr",
                    'Name' => "A-Ka"
                ]
            ],
            'TemplateID' => 3146889,
            'TemplateLanguage' => true,
            'Subject' => $subject,
            'Variables' => [
                'content' => $content,
                
        ]
    ]
    ]
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
$response->success();

    }
}