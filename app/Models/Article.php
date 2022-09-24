<?php
    
    namespace App\Models;
    
    class Article{
        public static function getAllArticles(){
            return
                [
                    ['id' => '1',
                    'title' => "News One",
                    'desc' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat facere maxime totam ea, non voluptates sapiente excepturi mollitia saepe quis earum accusamus dolore, veniam reiciendis aliquam atque soluta repudiandae tenetur repellendus, adipisci voluptatibus quos labore! Nostrum itaque distinctio, laborum illo veritatis quia. Non, dolore. Modi eligendi tempora earum nostrum corrupti?"
                    ],
                    ['id' => '2',
                    'title' => "News Two",
                    'desc' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat facere maxime totam ea, non voluptates sapiente excepturi m accusamus dolore, veniam reiciendis aliquam atque soluta repudiandae tenetur repellendus, adipisci voluptatibus quos labore! Nostrum itaque distinctio, laborum illo veritatis quia. Non, dolore. Modi eligendi tempora earum nostrum corrupti?"
                    ],
                    ['id' => '3',
                    'title' => "News Three",
                    'desc' => "TLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat facere maxime totam ea, non voluptates sapiente excepturi mollitia saepe quis earum accusamus dolore, veniam reiciendis aliquam atque soluta repudiandae tenetur repvoluptatibus quos labore! Nostrum itaque distinctio, laborum illo veritatis quia. Non, dolore. Modi eligendi tempora earum nostrum corrupti?"
                    ],
                ];
        }

        public static function getOneArticle($id){
            $articles = self::getAllArticles();  

            foreach($articles as $value){
                if($value['id'] == $id){
                    return $value;
                }
            }
        }


        
    }
?>