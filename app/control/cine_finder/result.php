<?php

error_reporting(0);

class result extends TPage
{
    protected $form;
    private $formFields = [];
    private static $database = '';
    private static $activeRecord = '';
    private static $primaryKey = '';
    private static $formName = 'form_result';

    /**
     * Form constructor
     * @param $param Request
     */
    public function __construct( $param = null)
    {
        parent::__construct();

        if(!empty($param['target_container']))
        {
            $this->adianti_target_container = $param['target_container'];
        }

        // creates the form
        $this->form = new BootstrapFormBuilder(self::$formName);
        // define the form title
        $this->form->setFormTitle("Resultado");

        //receives the search.php form data 
        $chat = $param['chat'];

        $c[] = json_decode($chat, true);

        foreach ($c as $innerArray) {
    if (isset($innerArray['movies']) && is_array($innerArray['movies'])) {
        foreach ($innerArray['movies'] as $movie) {
            // Adicione cada valor de filme ao novo array
            $filmes[] = $movie;
        }
    }
}

        $txt1 = $filmes[0];
        $txt2 = $filmes[1];
        $txt3 = $filmes[2];
        $txt4 = $filmes[3];
        $txt5 = $filmes[4];
        $txt6 = $filmes[5];
        $txt7 = $filmes[6];
        $txt8 = $filmes[7];

        //Input to TMDB API

         $client = new \GuzzleHttp\Client();

        //Prepares the INPUT names to the query URL endpoint

         if (strpos($txt1, ' ') !== false){
             $txt1 = str_replace(" ", "%20", $txt1);
         }

         if (strpos($txt2, ' ') !== false){
             $txt2 = str_replace(" ", "%20", $txt2);
         }

         if (strpos($txt3, ' ') !== false){
             $txt3 = str_replace(" ", "%20", $txt3);
         }

         if (strpos($txt4, ' ') !== false){
             $txt4 = str_replace(" ", "%20", $txt4);
         }

          if (strpos($txt5, ' ') !== false){
             $txt5 = str_replace(" ", "%20", $txt5);
         }

          if (strpos($txt6, ' ') !== false){
             $txt6 = str_replace(" ", "%20", $txt6);
         }

         if (strpos($txt7, ' ') !== false){
             $txt7 = str_replace(" ", "%20", $txt7);
         }

         if (strpos($txt8, ' ') !== false){
             $txt8 = str_replace(" ", "%20", $txt8);
         }

        $response1 = $client->request('GET', "https://api.themoviedb.org/3/search/movie?query=$txt1&include_adult=false&language=pt-BR&page=1", [
        'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlMDg3YjhkNjlkODdlMTAzYTU0NjJjODVjZWZiOGExMiIsInN1YiI6IjY0ZTQwMDI4MWZlYWMxMDBmZTVhNWM1OCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.y3_AcZ3DUYoJa4X_ijK3NE8gzmBz5TBKBGPm8bTwDIQ',
        'accept' => 'application/json',
          ],
        ]);

        $response2 = $client->request('GET', "https://api.themoviedb.org/3/search/movie?query=$txt2&include_adult=false&language=pt-BR&page=1", [
        'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlMDg3YjhkNjlkODdlMTAzYTU0NjJjODVjZWZiOGExMiIsInN1YiI6IjY0ZTQwMDI4MWZlYWMxMDBmZTVhNWM1OCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.y3_AcZ3DUYoJa4X_ijK3NE8gzmBz5TBKBGPm8bTwDIQ',
        'accept' => 'application/json',
          ],
        ]);

        $response3 = $client->request('GET', "https://api.themoviedb.org/3/search/movie?query=".$txt3."&include_adult=false&language=pt-BR&page=1", [
        'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlMDg3YjhkNjlkODdlMTAzYTU0NjJjODVjZWZiOGExMiIsInN1YiI6IjY0ZTQwMDI4MWZlYWMxMDBmZTVhNWM1OCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.y3_AcZ3DUYoJa4X_ijK3NE8gzmBz5TBKBGPm8bTwDIQ',
        'accept' => 'application/json',
          ],
        ]);

        $response4 = $client->request('GET', "https://api.themoviedb.org/3/search/movie?query=$txt4&include_adult=false&language=pt-BR&page=1", [
        'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlMDg3YjhkNjlkODdlMTAzYTU0NjJjODVjZWZiOGExMiIsInN1YiI6IjY0ZTQwMDI4MWZlYWMxMDBmZTVhNWM1OCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.y3_AcZ3DUYoJa4X_ijK3NE8gzmBz5TBKBGPm8bTwDIQ',
        'accept' => 'application/json',
          ],
        ]);

         $response5 = $client->request('GET', "https://api.themoviedb.org/3/search/movie?query=$txt5&include_adult=false&language=pt-BR&page=1", [
        'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlMDg3YjhkNjlkODdlMTAzYTU0NjJjODVjZWZiOGExMiIsInN1YiI6IjY0ZTQwMDI4MWZlYWMxMDBmZTVhNWM1OCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.y3_AcZ3DUYoJa4X_ijK3NE8gzmBz5TBKBGPm8bTwDIQ',
        'accept' => 'application/json',
          ],
        ]);

         $response6 = $client->request('GET', "https://api.themoviedb.org/3/search/movie?query=$txt6&include_adult=false&language=pt-BR&page=1", [
        'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlMDg3YjhkNjlkODdlMTAzYTU0NjJjODVjZWZiOGExMiIsInN1YiI6IjY0ZTQwMDI4MWZlYWMxMDBmZTVhNWM1OCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.y3_AcZ3DUYoJa4X_ijK3NE8gzmBz5TBKBGPm8bTwDIQ',
        'accept' => 'application/json',
          ],
        ]);

        $response7 = $client->request('GET', "https://api.themoviedb.org/3/search/movie?query=$txt7&include_adult=false&language=pt-BR&page=1", [
        'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlMDg3YjhkNjlkODdlMTAzYTU0NjJjODVjZWZiOGExMiIsInN1YiI6IjY0ZTQwMDI4MWZlYWMxMDBmZTVhNWM1OCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.y3_AcZ3DUYoJa4X_ijK3NE8gzmBz5TBKBGPm8bTwDIQ',
        'accept' => 'application/json',
          ],
        ]);

       $response8 = $client->request('GET', "https://api.themoviedb.org/3/search/movie?query=$txt8&include_adult=false&language=pt-BR&page=1", [
        'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlMDg3YjhkNjlkODdlMTAzYTU0NjJjODVjZWZiOGExMiIsInN1YiI6IjY0ZTQwMDI4MWZlYWMxMDBmZTVhNWM1OCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.y3_AcZ3DUYoJa4X_ijK3NE8gzmBz5TBKBGPm8bTwDIQ',
        'accept' => 'application/json',
          ],
        ]);

       $txt1Response = $response1->getBody();
       $txt2Response = $response2->getBody();
       $txt3Response = $response3->getBody();
       $txt4Response = $response4->getBody();
       $txt5Response = $response5->getBody();
       $txt6Response = $response6->getBody();
       $txt7Response = $response7->getBody();
       $txt8Response = $response8->getBody();

       $data1 = json_decode($txt1Response, true);
       $data2 = json_decode($txt2Response, true);
       $data3 = json_decode($txt3Response, true);
       $data4 = json_decode($txt4Response, true);
       $data5 = json_decode($txt5Response, true);
       $data6 = json_decode($txt6Response, true);
       $data7 = json_decode($txt7Response, true);
       $data8 = json_decode($txt8Response, true);

      // Acesse os valores desejados e atribua-os a variáveis
      $txt1Poster_path = $data1['results'][0]['poster_path'];
      $txt1Title = $data1['results'][0]['title'];
      $txt1release_date = $data1['results'][0]['release_date'];
      $txt1Overview = $data1['results'][0]['overview'];

      $txt2Poster_path = $data2['results'][0]['poster_path'];
      $txt2Title = $data2['results'][0]['title'];
      $txt2release_date = $data2['results'][0]['release_date'];
      $txt2Overview = $data2['results'][0]['overview'];

      $txt3Poster_path = $data3['results'][0]['poster_path'];
      $txt3Title = $data3['results'][0]['title'];
      $txt3release_date = $data3['results'][0]['release_date'];
      $txt3Overview = $data3['results'][0]['overview'];

      $txt4Poster_path = $data4['results'][0]['poster_path'];
      $txt4Title = $data4['results'][0]['title'];
      $txt4release_date = $data4['results'][0]['release_date'];
      $txt4Overview = $data4['results'][0]['overview'];

      $txt5Poster_path = $data5['results'][0]['poster_path'];
      $txt5Title = $data5['results'][0]['title'];
      $txt5release_date = $data5['results'][0]['release_date'];
      $txt5Overview = $data5['results'][0]['overview'];

      $txt6Poster_path = $data6['results'][0]['poster_path'];
      $txt6Title = $data6['results'][0]['title'];
      $txt6release_date = $data6['results'][0]['release_date'];
      $txt6Overview = $data6['results'][0]['overview'];

      $txt7Poster_path = $data7['results'][0]['poster_path'];
      $txt7Title = $data7['results'][0]['title'];
      $txt7release_date = $data7['results'][0]['release_date'];
      $txt7Overview = $data7['results'][0]['overview'];

      $txt8Poster_path = $data8['results'][0]['poster_path'];
      $txt8Title = $data8['results'][0]['title'];
      $txt8release_date = $data8['results'][0]['release_date'];
      $txt8Overview = $data8['results'][0]['overview'];

      //faz checagem se todas as variáveis estão declaradas, se não, retorna para a página anterior

      //pega apenas o ano de $release_date

      $year1 = substr($txt1release_date, 0, 4);
      $year2 = substr($txt2release_date, 0, 4);
      $year3 = substr($txt3release_date, 0, 4);
      $year4 = substr($txt4release_date, 0, 4);
      $year5 = substr($txt5release_date, 0, 4);
      $year6 = substr($txt6release_date, 0, 4);
      $year7 = substr($txt7release_date, 0, 4);
      $year8 = substr($txt8release_date, 0, 4);

      $img1patch = "http://image.tmdb.org/t/p/w500$txt1Poster_path";
      $img2patch = "http://image.tmdb.org/t/p/w500$txt2Poster_path";
      $img3patch = "http://image.tmdb.org/t/p/w500$txt3Poster_path";
      $img4patch = "http://image.tmdb.org/t/p/w500$txt4Poster_path";
      $img5patch = "http://image.tmdb.org/t/p/w500$txt5Poster_path";
      $img6patch = "http://image.tmdb.org/t/p/w500$txt6Poster_path";
      $img7patch = "http://image.tmdb.org/t/p/w500$txt7Poster_path";
      $img8patch = "http://image.tmdb.org/t/p/w500$txt8Poster_path";

        //cria um novo obj e passa o valor para os mesmos
        $object = new stdClass();

        $object->texto1 = "$txt1Overview";
        $object->lateral1 = "$txt1Title ($year1)";

        $object->texto2 = "$txt2Overview";
        $object->lateral2 = "$txt2Title ($year2)";

        $object->texto3 = "$txt3Overview";
        $object->lateral3 = "$txt3Title ($year3)";

        $object->texto4 = "$txt4Overview";
        $object->lateral4 = "$txt4Title ($year4)";

        $object->texto5 = "$txt5Overview";
        $object->lateral5 = "$txt5Title ($year5)";

        $object->texto6 = "$txt6Overview";
        $object->lateral6 = "$txt6Title ($year6)";

        $object->texto7 = "$txt7Overview";
        $object->lateral7 = "$txt7Title ($year7)";

        $object->texto8 = "$txt8Overview";
        $object->lateral8 = "$txt8Title ($year8)";

        //$object->fieldName = 'insira o novo valor aqui'; //sample

        TForm::sendData(self::$formName, $object);

        // Código gerado pelo snippet: "Enviar dados para campo"
        $object = new stdClass();
        $object->img1 = "$img1patch";
        //$object->fieldName = 'insira o novo valor aqui'; //sample

        TForm::sendData(self::$formName, $object);
        // -----

        // -----

        $img1 = new TImage('');
        $texto1 = new TText('texto1');
        $lateral1 = new TText('lateral1');
        $img2 = new TImage('');
        $texto2 = new TText('texto2');
        $lateral2 = new TText('lateral2');
        $img3 = new TImage('');
        $texto3 = new TText('texto3');
        $lateral3 = new TText('lateral3');
        $img4 = new TImage('');
        $texto4 = new TText('texto4');
        $lateral4 = new TText('lateral4');
        $img5 = new TImage('');
        $texto5 = new TText('texto5');
        $lateral5 = new TText('lateral5');
        $img6 = new TImage('');
        $texto6 = new TText('texto6');
        $lateral6 = new TText('lateral6');
        $img7 = new TImage('');
        $texto7 = new TText('texto7');
        $lateral7 = new TText('lateral7');
        $img8 = new TImage('');
        $texto8 = new TText('texto8');
        $lateral8 = new TText('lateral8');


        $texto1->setSize('67%', 225);
        $texto2->setSize('67%', 225);
        $texto3->setSize('67%', 225);
        $texto4->setSize('67%', 225);
        $texto5->setSize('67%', 225);
        $texto6->setSize('67%', 225);
        $texto7->setSize('67%', 225);
        $texto8->setSize('67%', 225);
        $lateral1->setSize('100%', 90);
        $lateral2->setSize('100%', 90);
        $lateral3->setSize('100%', 90);
        $lateral4->setSize('100%', 90);
        $lateral5->setSize('100%', 90);
        $lateral6->setSize('100%', 90);
        $lateral7->setSize('100%', 90);
        $lateral8->setSize('100%', 90);

        $texto1->setEditable(false);
        $texto2->setEditable(false);
        $texto3->setEditable(false);
        $texto4->setEditable(false);
        $texto5->setEditable(false);
        $texto6->setEditable(false);
        $texto7->setEditable(false);
        $texto8->setEditable(false);
        $lateral1->setEditable(false);
        $lateral2->setEditable(false);
        $lateral3->setEditable(false);
        $lateral4->setEditable(false);
        $lateral5->setEditable(false);
        $lateral6->setEditable(false);
        $lateral7->setEditable(false);
        $lateral8->setEditable(false);

        $img1->id = 'img1';
        $img2->id = 'img2';
        $img3->id = 'img3';
        $img4->id = 'img4';
        $img5->id = 'img5';
        $img6->id = 'img6';
        $img7->id = 'img7';
        $img8->id = 'img8';
        $img1->width = '150px';
        $img2->width = '150px';
        $img3->width = '150px';
        $img4->width = '150px';
        $img5->width = '150px';
        $img6->width = '150px';
        $img7->width = '150px';
        $img8->width = '150px';
        $img1->height = '225px';
        $img2->height = '225px';
        $img3->height = '225px';
        $img4->height = '225px';
        $img5->height = '225px';
        $img6->height = '225px';
        $img7->height = '225px';
        $img8->height = '225px';
        $texto1->autofocus = 'autofocus';
        $texto2->autofocus = 'autofocus';
        $texto3->autofocus = 'autofocus';
        $texto4->autofocus = 'autofocus';
        $texto5->autofocus = 'autofocus';
        $texto6->autofocus = 'autofocus';
        $texto7->autofocus = 'autofocus';
        $texto8->autofocus = 'autofocus';
        $lateral1->autofocus = 'autofocus';
        $lateral2->autofocus = 'autofocus';
        $lateral3->autofocus = 'autofocus';
        $lateral4->autofocus = 'autofocus';
        $lateral5->autofocus = 'autofocus';
        $lateral6->autofocus = 'autofocus';
        $lateral7->autofocus = 'autofocus';
        $lateral8->autofocus = 'autofocus';

        $this->img1 = $img1;
        $this->img2 = $img2;
        $this->img3 = $img3;
        $this->img4 = $img4;
        $this->img5 = $img5;
        $this->img6 = $img6;
        $this->img7 = $img7;
        $this->img8 = $img8;

         $img1 = new TImage("$img1patch");
         $img2 = new TImage("$img2patch");
         $img3 = new TImage("$img3patch");
         $img4 = new TImage("$img4patch");
         $img5 = new TImage("$img5patch");
         $img6 = new TImage("$img6patch");
         $img5 = new TImage("$img5patch");
         $img6 = new TImage("$img6patch");
         $img7 = new TImage("$img7patch");
         $img8 = new TImage("$img8patch");

        $img1->width = '150px';
        $img2->width = '150px';
        $img3->width = '150px';
        $img4->width = '150px';
        $img5->width = '150px';
        $img6->width = '150px';
        $img7->width = '150px';
        $img8->width = '150px';

        $img1->height = '225px';
        $img2->height = '225px';
        $img3->height = '225px';
        $img4->height = '225px';
        $img5->height = '225px';
        $img6->height = '225px';
        $img7->height = '225px';
        $img8->height = '225px';

     if(isset($chat)){
        if(empty($txt1Title) || empty($txt2Title) || empty($txt3Title) || empty($txt4Title) || empty($txt5Title) || empty($txt6Title) || empty($txt7Title) || empty($txt8Title)){

          TApplication::loadPage('search');

          new TMessage('warning', "hmm... Aparentemente sua descrição não obteve os resultados esperados, por favor, Descreva mais detalhadamente seu filme");

        }; 
     }
        $row1 = $this->form->addFields([$img1,$texto1,$lateral1],[$img2,$texto2,$lateral2],[$img3,$texto3,$lateral3],[$img4,$texto4,$lateral4]);
        $row1->layout = [' col-sm-2 col-xl-6','col-sm-2 col-xl-6',' col-sm-2 col-xl-6','col-sm-2 col-xl-6'];

        $row2 = $this->form->addFields([$img5,$texto5,$lateral5],[$img6,$texto6,$lateral6],[$img7,$texto7,$lateral7],[$img8,$texto8,$lateral8]);
        $row2->layout = ['col-sm-2 col-xl-6','col-sm-6',' col-sm-6',' col-sm-6'];

        // create the form actions
        $btn_onback = $this->form->addAction("Voltar", new TAction([$this, 'onBack']), 'fas:chevron-left #ffffff');
        $this->btn_onback = $btn_onback;
        $btn_onback->addStyleClass('pesquisar'); 

        // vertical box container
        $container = new TVBox;
        $container->style = 'width: 100%';
        $container->class = 'form-container';
        if(empty($param['target_container']))
        {
            $container->add(TBreadCrumb::create(["Cine Finder","Resultado"]));
        }
        $container->add($this->form);

        parent::add($container);

    }

    public function onBack($param = null) 
    {

    TApplication::loadPage('search', 'onShow');

    }

    public function onShow($param = null)
    {               

    } 

}

