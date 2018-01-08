<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 1/7/2018
 * Time: 8:32 PM
 */

class Admin_model extends Model
{
    public function __construct($plugin_data_income){


        parent::__construct($plugin_data_income);

    }


    public function admin_main_page(){

        require 'views/Header.php';
        require 'views/Admin/index.php';
        require 'views/Footer.php';

    }

    public function login($parameters){


        if(isset($_POST['submit'])){



         require 'libs/Database.php';

         $query = mysqli_query($db_connection,"SELECT * FROM ".$db_admin_table." WHERE Login='".mysqli_real_escape_string($db_connection, $_POST['login'])."'") or die($query);


            if(mysqli_num_rows($query)>0){


                $userdata = mysqli_fetch_assoc($query);


                if($userdata['Password']==($_POST['password']))

                {

                    require 'libs/Generate_hash.php';
                    $hash = md5(generateCode(10));

                    mysqli_query($db_connection, "UPDATE ".$db_admin_table." SET Hash='".$hash."'WHERE id='".$userdata['id']."'");

                    $query = mysqli_query($db_connection,"SELECT * FROM ".$db_admin_table." WHERE Login='".mysqli_real_escape_string($db_connection,$_POST['login'])."'");

                    $userdata = mysqli_fetch_assoc($query);

                    //Все хорошо, далие...

                    setcookie('id',$userdata['id'],time()+3600,"/");

                    setcookie('hash',$userdata['Hash'],time()+3600,"/");

                    unset($_POST);//очищяем

                    if(isset($_SESSION['err'])){

                        unset($_SESSION['err']);//очищяем
                    }


                    $this->admin_main_page();

                }else{

                    //Говорим об ошибке и кладем её в сессию

                    $error_arry='Не верный логин или пароль !';

                    unset($_POST);

                    $_SESSION['err']=$error_arry;

                    header('Location:href='.$parameters.'');

                }

            }else{


                //Говорим об ошибке и кладем её в пост

                $error_arry='Не верный логин или пароль !';

                unset($_POST);

                $_SESSION['err']= $error_arry;

                header('Location:href='.$parameters.'');

            }
        }


        require 'views/Header.php';

        echo '<body id="login">
                <div class="jumbotron">
                   <form action="href='.$parameters.'" method="post" class="form-signin">
                       <input name ="login" type="text" class="input-block-level" placeholder="Email address">
                       <br>
                       <input name ="password" type="password" class="input-block-level" placeholder="Password">
                       <br>
                       <hr>
                       <button  name="submit" class="btn btn-large btn-primary" type="submit">Sign in</button>
                       <div id="error_message"> </div>
                   </form>
                </div>
              </body>
             ';

        if(isset( $_SESSION['err'])){
            echo "<script> document.getElementById('error_message').innerHTML ='<div class=\"alert alert-danger\">".$_SESSION['err']."</div>'</script>";
        }

        require 'views/Footer.php';

    }


    public function login_index($parameters){

        require 'libs/check_cookie.php';

        if(!Check_cookie()){

           $this->login($parameters);

        }else {

            $this->admin_main_page();

        }

    }
}
