<?php
    /**
     * Created by PhpStorm.
     * User: julien
     * Date: 2019-04-18
     * Time: 16:04
     */
    
    
    namespace App;
    use GuzzleHttp;
    
    class response
    {
        public function eggs()
        {
            $client = new GuzzleHttp\Client;
            /*
        * EGGGGG
        */
            // Send a request to https://foo.com/api/test
            $responseEgg = $client->request('GET', 'http://easteregg.wildcodeschool.fr/api/eggs');
            // or
            // Send request https://foo.com/api/test?key=maKey&name=toto
            $bodyEgg = $responseEgg->getBody();
            $datasEgg = json_decode($bodyEgg->getContents());
            foreach ($datasEgg as $data) {
                $egg['name'] = $data->name;
                $egg['image'] = $data->image;
                $powerEgg = substr($data->power, 0, strpos($data->power, ' ')).' '.substr($data->power, -1, 1);
                $powerEgg = str_replace(' ', '', str_replace('decrease', '-', $powerEgg));
                $powerEgg = str_replace('increase', '', $powerEgg);
                $egg['value'] = intval($powerEgg);
                $eggs[] = $egg;
            }
            return $eggs;
            
        }
        
    public function chars(){
        $client = new GuzzleHttp\Client;
    
        // Send a request to https://foo.com/api/test
        $responseChar = $client->request('GET', 'http://easteregg.wildcodeschool.fr/api/characters');
        // or
        // Send request https://foo.com/api/test?key=maKey&name=toto
        $bodyChar = $responseChar->getBody();
        $datasChar = json_decode($bodyChar->getContents());
        $skillMont = 0;
        $eggs=[];
        $char=[];

        foreach ($datasChar as $data){
            $char['name']=$data->name;
            $char['image']=$data->image;
            foreach ($data->skills as $skill){
                $skillMont = $skillMont + (intval(substr($skill, -1, 1)));
            }
            $char['origin']=$data->origin;
            $char['value']=$skillMont;
            $skillMont = 0;
            $chars[]=$char;
            }
        return $chars;
    
    }
}
