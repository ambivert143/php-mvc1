<?php
    //include "Model/DB.php";

    if(isset($_GET['action'])){
        $controller = $_GET['action'];
    }else{
        $action = '';
    }

    $success = array();

    switch($action){
        case 'add':{
            if(isset($_POST['add'])){
                $masp = $_POST['masp'];
                $tensp = $_POST['tensp'];
                $create_at = $_POST['create_at'];
                $update_at = $_POST['update_at'];
            
                if($db->InsertData($masp, $tensp, $create_at, $update_at)){
                    $success[] = 'add_success';
                }
            }
            require_once('View/sanpham/add.php');
            break;
        }
        case 'edit':{
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = "sanpham";
                $db->getData1($tblTable, $id)
                $data1 = $db->getData1($tblTable,$id);

                if(isset($_POST['edit'])){
                    // lay data tu view
                    $masp = $_POST['masp'];
                    $tensp = $_POST['tensp'];
                    $create_at = $_POST['create_at'];
                    $update_at = $_POST['update_at'];

                    // truyen data qua model
                    if($db->UpdateData($id, $masp, $tensp, $create_at, $update_at)){
                        header('location:index.php?controller=sanpham&acction=list');
                    }
                }
            }
            require_once('View/sanpham/edit.php');
        break;
        }
        case 'delete':{
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = "sanpham";

                if($db->Delete($id, $tblTable)){
                    header("location:index.php?controller=sanpham&acction=list");
                }else{
                    header("location:index.php?controller=sanpham&acction=list");
                }
                break;
            }
            //require_once('View/sanpham/delete.php');
        break;
        }

        case 'list':{
            $tblTable = "sanpham";
            $data = $db->getAllData($tblTable);
            
            require_once('View/sanpham/list.php');
            break;
        }

        default:{
            require_once('View/sanpham/list.php');
            break;
        }
    }

?>