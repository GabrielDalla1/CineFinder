<?php

error_reporting(0);
use Orhanerday\OpenAi\OpenAi;
use Stichoza\GoogleTranslate\GoogleTranslate;

class search extends TPage
{
    protected $form;
    private $formFields = [];
    private static $database = '';
    private static $activeRecord = '';
    private static $primaryKey = '';
    private static $formName = 'form_search';

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
        $this->form->setFormTitle("");


        $logo = new TImage('');
        $description = new TEntry('description');
        $selection = new TCombo('selection');
        $search = new TButton('search');

        $selection->setChangeAction(new TAction([$this,'outValue']));

        $description->setExitAction(new TAction([$this,'onExitValor']));

        $description->addValidation("\"Descrever Filme\"", new TRequiredValidator()); 
        $selection->addValidation("Por favor, escolha entre Filme ou Série", new TRequiredValidator()); 

        $description->setMaxLength(230);
        $description->setTip("Descreva o Filme que deseja achar");
        $selection->addItems(["1"=>"Filme","2"=>"Série"]);
        $selection->setDefaultOption(false);
        $search->setAction(new TAction([$this, 'onClick']), "Pesquisar");
        $search->addStyleClass('pesquisar');
        $search->setImage(' #000000');
        $description->setSize('100%');
        $selection->setSize('calc(50% - 70px)');

        $logo->width = '90px';
        $logo->height = '80px';
        $selection->autofocus = 'autofocus';
        $description->placeholder = "E.g. Desenho animado de Brinquedos que falam";

        $this->logo = $logo;

        $logo = new TImage("https://i.ibb.co/tQrNTf6/logocademeufilme.png");
        $logo->width = '250px';

        $row1 = $this->form->addFields([],[$logo]);
        $row1->layout = [' col-1 col-sm-3 col-md-5',' col-2 col-sm-2 col-md-2'];

        $row2 = $this->form->addFields([$description]);
        $row2->layout = [' col-sm-9 col-xl-12'];

        $row3 = $this->form->addFields([$selection],[],[]);
        $row3->layout = ['col-sm-5','col-sm-2','col-sm-2'];

        $row4 = $this->form->addFields([],[$search]);
        $row4->layout = [' col-2 col-sm-4 col-md-4',' col-9 col-sm-6 col-md-6'];

        // create the form actions

        // vertical box container
        $container = new TVBox;
        $container->style = 'width: 100%';
        $container->class = 'form-container';
        if(empty($param['target_container']))
        {
            $container->add(TBreadCrumb::create(["Cine Finder","Pesquisar Filme"]));
        }
        $container->add($this->form);

        parent::add($container);

    }

    public static function onExitValor($param = null) 
    {

       try{

        }
        catch (Exception $e) 
        {
            new TMessage('error', $e->getMessage());    
        }
    }

    public static function outValue($param = null) 
    {

    }

    public  function onClick($param = null) 
    {

            try{ 

          if($param['selection'] == "1"){

               $this->form->validate();
           $data = $this->form->getData();
           $inputsearch = json_encode($data);
           $obj = json_decode($inputsearch);
           $finalInput = $obj->description;

           $tr = new GoogleTranslate('en'); // Translates to 'en' from auto-detected language by default

           $translateInput = $tr->translate("$finalInput");

          $jsonString = '{"movies":["movie name one", "movie name two", "movie name three", "movie name four", "movie name five", "movie name six", "movie name seven", "movie name movie eight"]}';           

         $open_ai_key = 'OPENAI-TOKEN-HERE';
         $open_ai = new OpenAi($open_ai_key);

         $chat = $open_ai->chat([
    'model' => 'gpt-3.5-turbo-16k-0613',
    'messages' => [
    [
      "role" => "user",
      "content" => "Movie description:" . $translateInput .
    "based in this movie description, give me 8 movies names of the movies that exists with the best matching with the description in this exclusive format:" .$jsonString. "(you need to follow this format or your response will not work)"

    ],
    ],
    'temperature' => 0,
    'max_tokens' => 4000,
    'frequency_penalty' => 0,
    'presence_penalty' => 0,

    ]);

    // decode response
    $d = json_decode($chat, true);

    // Get Content
    $content = $d["choices"][0]["message"]["content"];

    //load the result page with api response
     $pageParam = ['chat' => $content]; // ex.: = ['key' => 10]

    TApplication::loadPage('result', 'onAction', $pageParam);

          } else {

               $this->form->validate();
           $data = $this->form->getData();
           $inputsearch = json_encode($data);
           $obj = json_decode($inputsearch);
           $finalInput = $obj->description;

           $tr = new GoogleTranslate('en'); // Translates to 'en' from auto-detected language by default

           $translateInput = $tr->translate("$finalInput");

          $jsonString = '{"tv shows":["tv shows name one", "tv shows name two", "tv shows name three", "tv shows name four", "tv shows name five", "tv shows name six", "tv shows name seven", "tv shows name eight"]}';           

         $open_ai_key = 'OPENAI-TOKEN-HERE';
         $open_ai = new OpenAi($open_ai_key);

         $chat = $open_ai->chat([
    'model' => 'gpt-3.5-turbo-16k-0613',
    'messages' => [
    [
      "role" => "user",
      "content" => "tv shows description:" . $translateInput .
    "based in this tv shows description, give me 8 tv shows names of the tv shows that exists with the best matching with the description in this exclusive format:" .$jsonString. "(you need to follow this format or your response will not work)"

    ],
    ],
    'temperature' => 0,
    'max_tokens' => 4000,
    'frequency_penalty' => 0,
    'presence_penalty' => 0,

    ]);

    // decode response
    $d = json_decode($chat, true);

    // Get Content
    $content = $d["choices"][0]["message"]["content"];

    //load the result page with api response
     $pageParam = ['chat' => $content]; // ex.: = ['key' => 10]

    TApplication::loadPage('resultSeries', 'onAction', $pageParam);

          }

         }

       catch (Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }

    }

    public function onShow($param = null)
    {               

    } 

}

