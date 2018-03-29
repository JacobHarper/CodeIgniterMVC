<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
        <!-- The following code creates the codeIgniter overlay-->
        <meta charset="utf-8">
        <title>Jake's Form</title>

        <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }

        body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
        }

        a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
        }

        h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
        }

        code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
        }

        #body {
                margin: 0 15px 0 15px;
        }

        p.footer {
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
        }
        #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
        }
        </style>
</head>
<body>
<div id="container">
        <h1>Jake's Final Form!</h1>

        <div id="body">

        <!--Create a form in php-->
        <?php echo form_open(); ?>

        <!--Create an array of information that defines the varible 'fname', which is the user's first name-->
        <div class="form-group">
        <?php echo form_label('First Name','fname'); ?>
        <?php echo form_input(array("class"=>"form-control","name" => "fname", "placeholder"=>"First Name")); ?>
        </div>

        <!--Create an array of information that defines the varible 'lname', which is the user's last name-->
        <div class="form-group">
        <?php echo form_label('Last Name','lname'); ?>
        <?php echo form_input(array("class"=>"form-control","name" => "lname", "placeholder"=>"Last Name")); ?>
        </div>

        <!--Create an array of information that defines the varible 'email', which is the user's email-->
        <div class="form-group">
        <?php echo form_label('Email address','email'); ?>
        <?php echo form_input(array("class"=>"form-control","name" => "email", "placeholder"=>"Email")); ?>
        </div>

        <!--Create an array of information that defines the varible 'hphone', which is the user's home phone number-->
        <div class="form-group">
        <?php echo form_label('Home Phone','hphone'); ?>
        <?php echo form_input(array("class"=>"form-control","name" => "hphone", "placeholder"=>"Home Phone")); ?>
        </div>

        <!--Create an array of information that defines the varible 'mphone', which is the user's mobile phone number-->
        <div class="form-group">
        <?php echo form_label('Mobile Phone','mphone'); ?>
        <?php echo form_input(array("class"=>"form-control","name" => "mphone", "placeholder"=>"Mobile Phone")); ?>
        </div>

        <!--Create an array of information that defines the varible 'street', which is the user's street address-->
        <div class="form-group">
        <?php echo form_label('Street Address','street'); ?>
        <?php echo form_input(array("class"=>"form-control","name" => "street", "placeholder"=>"Street Address")); ?>
        </div>

        <!--Create an array of information that defines the varible 'city', which is the name of the user's city-->
        <div class="form-group">
        <?php echo form_label('City','city'); ?>
        <?php echo form_input(array("class"=>"form-control","name" => "city", "placeholder"=>"City")); ?>
        </div>

        <!--Create an array of information that defines the varible 'state', which is the name of the user's state-->
        <div class="form-group">
        <?php echo form_label('State','state'); ?>
        <?php echo form_input(array("class"=>"form-control","name" => "state", "placeholder"=>"State")); ?>
        </div>

        <!--Create an array of information that defines the varible 'zipcode', which is the user's zip code-->
        <div class="form-group">
        <?php echo form_label('Zip Code','zipcode'); ?>
        <?php echo form_input(array("class"=>"form-control","name" => "zipcode", "placeholder"=>"Zip Code")); ?>
        </div><br>

        <!--Create a submit button-->
        <button type="submit"  class="btn btn-default">Submit</button>

        <!--Close the form-->
        <?php echo form_close(); ?>

        </div>
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

</div>
</body>
</html>
