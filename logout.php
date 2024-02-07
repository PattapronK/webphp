<?php
            session_start();

            if (isset($_GET['logout'])) {
                $_SESSION = array();
              
                session_destroy();
                
                header('location: login.php');
                exit;
            }
          ?>