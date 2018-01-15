<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/7/2018
 * Time: 8:32 PM
 */


require_once "libs/check_cookie.php";

class Admin_model extends Model
{

    private $this_url;

    public function __construct($plugin_data_income)
    {


        parent::__construct($plugin_data_income);

        $this->this_url= rtrim($_SERVER['REQUEST_URI'], '/');
        $this->this_url = explode('/',$this->this_url);
        $this->this_url = $this->this_url[1].'/'.$this->this_url[2].'/'.$this->this_url[3].'/';

    }


    public function getThisUrl()
    {
        return $this->this_url;
    }


    public function dashboard($income_parameters_data){


        require_once 'views/admin/index.php';

    }

    public function tables($income_parameters_data){


        require_once 'views/admin/tables.php';

    }

    public function forms($income_parameters_data){

        //require_once 'views/admin/Header.php';
        require_once 'views/admin/forms.php';

    }

    public function charts($income_parameters_data){

        require_once 'views/admin/charts.php';

    }


    public function error_404($income_parameters_data){

        require_once 'views/admin/error_404.php';
    }


    public function add_products(){

        session_start();
        require_once 'views/admin/products_add.php';
    }

    public function edit_products(){
        require_once 'views/admin/products_edit.php';
    }


    public function products($income_parameters_data){

        if(isset($income_parameters_data['third']) && !empty($income_parameters_data['third'])){

            switch ($income_parameters_data['third']){

                case 'add':
                    $this->add_products();
                    break;
                case 'edit':
                   $this->edit_products();
                    break;
                case 'all':
                    require_once 'libs/admin/all_products.php';
                    require_once 'views/admin/products_all.php';

                    break;
                default:
                    $this->error_404($income_parameters_data);
            }

        }else{

            require_once 'libs/admin/all_products.php';
            require_once 'views/admin/products_all.php';
        }

    }

    //Index admin page
    public function admin_main_page()
    {

        require_once 'views/Header.php';
        require_once 'views/admin/index.php';
        require_once 'views/Footer.php';

    }

    public function login($income_parameters_data)
    {


        if (isset($_POST['submit'])) {


            require 'libs/Database.php';

            $query = mysqli_query($db_connection, "SELECT * FROM " . $db_admin_table . " WHERE Login='" . mysqli_real_escape_string($db_connection, $_POST['login']) . "'") or die($query);


            if (mysqli_num_rows($query) > 0) {


                $userdata = mysqli_fetch_assoc($query);


                if ($userdata['Password'] == ($_POST['password'])) {

                    require 'libs/Generate_hash.php';
                    $hash = md5(generateCode(10));

                    mysqli_query($db_connection, "UPDATE " . $db_admin_table . " SET Hash='" . $hash . "'WHERE id='" . $userdata['id'] . "'");

                    $query = mysqli_query($db_connection, "SELECT * FROM " . $db_admin_table . " WHERE Login='" . mysqli_real_escape_string($db_connection, $_POST['login']) . "'");

                    $userdata = mysqli_fetch_assoc($query);

                    //Все хорошо, далие...

                    setcookie('id', $userdata['id'], time() + 3600, "/");

                    setcookie('hash', $userdata['Hash'], time() + 3600, "/");

                    unset($_POST);//очищяем

                    if (isset($_SESSION['err'])) {

                        unset($_SESSION['err']);//очищяем
                    }

                       // Если все ок то редиректим на главную
                    header('location:/admin/login/' . $income_parameters_data['first'] . '/dashboard');
                    //$this->dashboard($income_parameters_data);

                } else {

                    //Говорим об ошибке и кладем её в сессию

                    $error_arry = 'Не верный логин или пароль !';

                    unset($_POST);

                    $_SESSION['err'] = $error_arry;

                    header('Location:'.$income_parameters_data['first'].'');

                }

            } else {


                //Говорим об ошибке и кладем её в пост

                $error_arry = 'Не верный логин или пароль !';

                unset($_POST);

                $_SESSION['err'] = $error_arry;

                header('Location:'.$income_parameters_data['first'].'');

            }
        }


        require 'views/Header.php';


        echo '<main role="main" class="container">
                     <section class="jumbotron text-center">
                             <div class="container">
                                 <h1 class="jumbotron-heading">Dashboard</h1>
                                 <p class="lead text-muted">Welcome
                                 </p>
                                  <p>
                                    <div id="login">
                                       <div class="jumbotron">
                                           <form action="'.$income_parameters_data['first'].'" method="post" class="form-signin">
                                              <div class="form-group">
                                                  <label for="exampleInputEmail1">Email address</label>
                                                  <input name ="login" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login">
                                                  <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>
                                               </div>
                                               <div class="form-group">
                                                  <label for="exampleInputPassword1">Password</label>
                                                  <input name ="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                               </div>
                                                  <button  name="submit" class="btn btn-large btn-primary" type="submit">Sign in</button>
                                               </form>
                                               <div id="error_message"> </div>
                                              </div>
                                        </div>
                               </div>
                         </section>
                 </main>';


        if (isset($_SESSION['err'])) {
            // echo "<script> document.getElementById('error_message').innerHTML ='<div class=\"alert alert-danger\">".$_SESSION['err']."</div>'</script>";
        }

        require 'views/Footer.php';

    }


    public function login_index($income_parameters_data)
    {


        if (!check_cookie()) {

            $this->login($income_parameters_data);

        } else {

            if(!empty($income_parameters_data['second'])){
                //Запускаем функцию по воторму параметру
                $func = $income_parameters_data['second'];


                if(method_exists(get_class(), $func)){
                    $this->$func($income_parameters_data);

                }else{

                    $this->error_404($income_parameters_data);
                }

            }else {

                $this->dashboard($income_parameters_data);
                //если нету то главную
              // header('Location:'.$income_parameters_data['first'].'/dashboard');
               // $this->dashboard($income_parameters_data);
            }
            //$this->income_parameters_data['second']($income_parameters_data);
            //$this->admin_main_page($income_parameters_data);

        }

    }
}


